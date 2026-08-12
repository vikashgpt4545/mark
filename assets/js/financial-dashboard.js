/**
 * FinWise - Dynamic Financial Dashboard & Percentile Chart Engine
 */

(function() {
    'use strict';

    window.FinWiseDashboard = {
        calculateAndRender: function(formData, countryConfigs) {
            const cData = countryConfigs[formData.country] || countryConfigs['IN'];

            // 1. Evaluate Metric Category Scores
            let incScore = 70;
            const incObj = cData.incomes.find(i => i.val === formData.income);
            if (incObj) incScore = incObj.score;

            let savScore = 50;
            if (formData.savings === 'under5') savScore = 30;
            else if (formData.savings === '5-10') savScore = 55;
            else if (formData.savings === '10-20') savScore = 75;
            else if (formData.savings === '20-30') savScore = 90;
            else if (formData.savings === '30plus') savScore = 98;

            let debtScore = 70;
            const debtObj = cData.debts.find(d => d.val === formData.debt);
            if (debtObj) debtScore = debtObj.score;

            let secScore = 40; // Emergency Fund
            if (formData.emergency === 'under1') secScore = 25;
            else if (formData.emergency === '1-3') secScore = 50;
            else if (formData.emergency === '3-6') secScore = 80;
            else if (formData.emergency === '6-12') secScore = 95;
            else if (formData.emergency === 'over12') secScore = 98;

            let insScore = 30; // Risk Insurance
            if (!formData.insurance.includes('none')) {
                insScore = Math.min(100, formData.insurance.length * 35);
            }

            let invScore = 20; // Investment Portfolio
            if (!formData.investments.includes('none')) {
                invScore = Math.min(100, formData.investments.length * 25);
            }

            // Weighted Total Score Calculation
            const totalScore = Math.round(
                (incScore * 0.15) +
                (savScore * 0.20) +
                (debtScore * 0.20) +
                (secScore * 0.15) +
                (insScore * 0.15) +
                (invScore * 0.15)
            );

            // Classification Rating
            let statusTitle = 'AVERAGE';
            if (totalScore >= 85) statusTitle = 'STRONG';
            else if (totalScore >= 70) statusTitle = 'ABOVE AVERAGE';
            else if (totalScore >= 55) statusTitle = 'AVERAGE';
            else if (totalScore >= 40) statusTitle = 'DEVELOPING';
            else statusTitle = 'NEEDS ATTENTION';

            // Smooth Scroll to Dashboard Results
            const dashSection = document.getElementById('hero-snapshot-results');
            if (dashSection) {
                dashSection.style.display = 'block';
                dashSection.scrollIntoView({ behavior: 'smooth' });
            }

            // Update Score Gauge Ring & Badge
            const scoreValEl = document.getElementById('dash-score-val');
            const scoreStatusEl = document.getElementById('dash-score-status');
            const scoreDescEl = document.getElementById('dash-score-desc');
            const gaugeCircle = document.getElementById('dash-gauge-circle');

            if (scoreValEl) scoreValEl.textContent = totalScore;
            if (scoreStatusEl) scoreStatusEl.textContent = statusTitle;
            if (scoreDescEl) scoreDescEl.textContent = `Calculated across 6 monetary indicators for ${cData.name}.`;
            if (gaugeCircle) {
                // Radius = 50 -> Circumference = 314
                const dashOffset = 314 - (314 * totalScore / 100);
                gaugeCircle.style.strokeDashoffset = dashOffset;
            }

            // Update Category Horizontal Bars
            this.setBarValue('inc', incScore);
            this.setBarValue('sav', savScore);
            this.setBarValue('debt', debtScore);
            this.setBarValue('sec', secScore);
            this.setBarValue('ins', insScore);
            this.setBarValue('inv', invScore);

            // Update "Where You Stand" Bell Curve & Peer Cohort Cards
            this.renderPeerAndDistribution(cData, formData.age, formData.income, totalScore);

            // Update Top 3 Action Priorities
            this.renderPriorities(secScore, debtScore, insScore, savScore, invScore);
        },

        setBarValue: function(key, val) {
            const valEl = document.getElementById(`val-cat-${key}`);
            const barEl = document.getElementById(`bar-cat-${key}`);
            if (valEl) valEl.textContent = `${val}%`;
            if (barEl) barEl.style.width = `${val}%`;
        },

        renderPeerAndDistribution: function(countryData, age, incomeTier, totalScore) {
            const bData = (countryData.benchmarks && countryData.benchmarks[age] && countryData.benchmarks[age][incomeTier]) 
                ? countryData.benchmarks[age][incomeTier] 
                : null;

            const pinGroup = document.getElementById('curve-pin-group');
            const pinText = document.getElementById('curve-pin-text');
            const curveDesc = document.getElementById('curve-explanation-text');
            const pill = document.getElementById('dash-score-percentile-pill');

            if (!bData) {
                // Fallback for missing benchmark profile with ZERO fake data!
                if (pinGroup) pinGroup.style.transform = `translate(300px, 45px)`;
                if (pinText) pinText.textContent = 'Unranked';
                if (curveDesc) {
                    curveDesc.innerHTML = 'Your position could not be reliably ranked because benchmark data is unavailable for this profile.';
                }
                if (pill) pill.textContent = 'Benchmark Unavailable';
                return;
            }

            // Authentic Demographic Percentile Data
            const topPercentile = 100 - bData.rank;
            // 600px viewBox mapping
            const xPos = Math.round(30 + (540 * (bData.rank / 100)));

            if (pinGroup) pinGroup.style.transform = `translate(${xPos}px, 20px)`;
            if (pinText) pinText.textContent = `YOU`;
            if (curveDesc) {
                curveDesc.innerHTML = `You are in the <strong style="color:#34d399;">top ${topPercentile}% worldwide</strong> based on demographic benchmark surveys in ${countryData.name}.`;
            }
            if (pill) pill.textContent = `Better than ${bData.rank}% of benchmark group`;

            // Update Peer Position Cards
            const incCard = document.getElementById('peer-status-inc');
            const savCard = document.getElementById('peer-status-sav');
            const debtCard = document.getElementById('peer-status-debt');
            const invCard = document.getElementById('peer-status-inv');

            if (incCard) {
                incCard.textContent = bData.more > 50 ? 'SIMILAR BENCHMARK' : 'ABOVE BENCHMARK';
                incCard.className = bData.more > 50 ? 'peer-card-status status-similar' : 'peer-card-status status-above';
            }
            if (savCard) {
                savCard.textContent = 'SIMILAR BENCHMARK';
                savCard.className = 'peer-card-status status-similar';
            }
            if (debtCard) {
                debtCard.textContent = 'LOWER BENCHMARK';
                debtCard.className = 'peer-card-status status-above';
            }
            if (invCard) {
                invCard.textContent = totalScore >= 70 ? 'SIMILAR BENCHMARK' : 'DEVELOPING';
                invCard.className = totalScore >= 70 ? 'peer-card-status status-similar' : 'peer-card-status status-dev';
            }

            // Highlight Active Global Distribution Segment
            for (let i = 1; i <= 5; i++) {
                const seg = document.getElementById(`dist-seg-${i}`);
                if (seg) seg.classList.remove('active-user-seg');
            }

            let segId = 3;
            if (bData.rank >= 85) segId = 5;
            else if (bData.rank >= 70) segId = 4;
            else if (bData.rank >= 45) segId = 3;
            else if (bData.rank >= 25) segId = 2;
            else segId = 1;

            const activeSeg = document.getElementById(`dist-seg-${segId}`);
            if (activeSeg) activeSeg.classList.add('active-user-seg');
        },

        renderPriorities: function(emergScore, debtScore, insScore, savScore, invScore) {
            const listContainer = document.getElementById('dash-priorities-list');
            if (!listContainer) return;

            let items = [];

            if (emergScore < 60) {
                items.push({
                    title: 'Build a 3–6 Month Liquid Emergency Reserve',
                    desc: 'Your emergency fund is low relative to household overhead. Park liquid reserves in a High-Yield Savings Account.',
                    link: 'articles/build-emergency-fund-guide.php',
                    linkText: 'Emergency Strategy →'
                });
            }

            if (debtScore < 60) {
                items.push({
                    title: 'Formulate Debt Management Plan',
                    desc: 'High-interest liabilities erode net worth. Maintain total DTI under 36%.',
                    link: 'calculators/credit-card-interest.php',
                    linkText: 'Debt Calculator →'
                });
            }

            if (insScore < 60) {
                items.push({
                    title: 'Review Risk Protection Coverage',
                    desc: 'Shield your dependents with term life insurance equal to 10x annual earnings.',
                    link: 'insurance/index.php',
                    linkText: 'Insurance Guide →'
                });
            }

            if (invScore < 60 && items.length < 3) {
                items.push({
                    title: 'Automate Index Fund Investments',
                    desc: 'Set up recurring monthly contributions into low-cost index funds for compound wealth.',
                    link: 'finance/investing-basics.php',
                    linkText: 'Investing Guide →'
                });
            }

            if (items.length < 3) {
                items.push({
                    title: 'Optimize Cash Flow & 50/30/20 Ratios',
                    desc: 'Apply progressive budgeting to maximize monthly net income retention.',
                    link: 'finance/budgeting.php',
                    linkText: 'Budgeting Guide →'
                });
            }

            listContainer.innerHTML = items.slice(0, 3).map((p, idx) => `
                <div class="priority-card-dark">
                    <div class="priority-num">0${idx + 1}</div>
                    <div>
                        <h4 class="priority-card-title">${p.title}</h4>
                        <p class="priority-card-desc">${p.desc}</p>
                        <a href="${p.link}" style="font-weight:700; font-size:0.85rem; color:#38bdf8; text-decoration:none; margin-top:0.4rem; display:inline-block;">${p.linkText}</a>
                    </div>
                </div>
            `).join('');
        }
    };
})();
