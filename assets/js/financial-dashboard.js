/**
 * FinWise - Dashboard Dynamic Presentation & Percentile Chart Engine
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

            let secScore = 40; // Financial Security / Emergency Fund
            if (formData.emergency === 'under1') secScore = 25;
            else if (formData.emergency === '1-3') secScore = 50;
            else if (formData.emergency === '3-6') secScore = 80;
            else if (formData.emergency === '6-12') secScore = 95;
            else if (formData.emergency === 'over12') secScore = 98;

            let insScore = 30;
            if (!formData.insurance.includes('none')) {
                insScore = Math.min(100, formData.insurance.length * 35);
            }

            let invScore = 20; // Investment Position
            if (!formData.investments.includes('none')) {
                invScore = Math.min(100, formData.investments.length * 25);
            }

            // Combine Security (Emergency + Insurance)
            const overallSecurity = Math.round((secScore * 0.6) + (insScore * 0.4));

            // Weighted Total Score
            const totalScore = Math.round(
                (incScore * 0.15) +
                (savScore * 0.20) +
                (debtScore * 0.20) +
                (overallSecurity * 0.20) +
                (invScore * 0.25)
            );

            // Classification Title
            let statusTitle = 'Average';
            if (totalScore >= 85) statusTitle = 'Strong';
            else if (totalScore >= 70) statusTitle = 'Above Average';
            else if (totalScore >= 55) statusTitle = 'Average';
            else if (totalScore >= 40) statusTitle = 'Developing';
            else statusTitle = 'Needs Attention';

            // Show Dashboard Section
            const dashSection = document.getElementById('hero-snapshot-results');
            if (dashSection) {
                dashSection.style.display = 'block';
                dashSection.scrollIntoView({ behavior: 'smooth' });
            }

            // Update Score Gauge Ring
            const scoreValEl = document.getElementById('dash-score-val');
            const scoreStatusEl = document.getElementById('dash-score-status');
            const scoreDescEl = document.getElementById('dash-score-desc');
            const gaugeCircle = document.getElementById('dash-gauge-circle');

            if (scoreValEl) scoreValEl.textContent = totalScore;
            if (scoreStatusEl) scoreStatusEl.textContent = statusTitle;
            if (scoreDescEl) scoreDescEl.textContent = `Calculated across 6 monetary indicators for ${cData.name}.`;
            if (gaugeCircle) {
                const dashOffset = 283 - (283 * totalScore / 100);
                gaugeCircle.style.strokeDashoffset = dashOffset;
            }

            // Update Category Horizontal Bars
            this.setBarValue('inc', incScore);
            this.setBarValue('sav', savScore);
            this.setBarValue('debt', debtScore);
            this.setBarValue('sec', overallSecurity);
            this.setBarValue('inv', invScore);

            // Update "Where You Stand" Bell Curve & Peer Cohort Cards
            this.renderPeerAndDistribution(cData, formData.age, formData.income, totalScore);

            // Update Priorities
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
            const curveBadge = document.getElementById('curve-rank-badge');
            const curveDesc = document.getElementById('curve-explanation-text');

            const moreEl = document.getElementById('peer-val-more');
            const similarEl = document.getElementById('peer-val-similar');
            const lessEl = document.getElementById('peer-val-less');
            const statusBox = document.getElementById('peer-data-status');

            if (!bData) {
                // Fallback for missing benchmark profile with ZERO fake data!
                if (pinGroup) pinGroup.style.transform = `translate(200px, 45px)`;
                if (pinText) pinText.textContent = 'Unranked';
                if (curveDesc) {
                    curveDesc.innerHTML = 'Your position could not be reliably ranked because benchmark data is unavailable for this profile.';
                }

                if (moreEl) moreEl.textContent = 'N/A';
                if (similarEl) similarEl.textContent = 'N/A';
                if (lessEl) lessEl.textContent = 'N/A';
                return;
            }

            // Authentic Benchmark Data Available
            const topPercentile = 100 - bData.rank;
            const xPos = Math.round(20 + (360 * (bData.rank / 100)));

            if (pinGroup) pinGroup.style.transform = `translate(${xPos}px, 20px)`;
            if (pinText) pinText.textContent = `You`;
            if (curveDesc) {
                curveDesc.innerHTML = `You are in the <strong style="color:#34d399;">top ${topPercentile}% worldwide</strong>`;
            }

            const pill = document.getElementById('dash-score-percentile-pill');
            if (pill) pill.textContent = `Better than ${bData.rank}% of people`;

            // Peer Cards
            if (moreEl) moreEl.textContent = `${bData.more}%`;
            if (similarEl) similarEl.textContent = `${bData.similar}%`;
            if (lessEl) lessEl.textContent = `${bData.less}%`;
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
                    linkText: 'Read Emergency Fund Strategy →'
                });
            }

            if (debtScore < 60) {
                items.push({
                    title: 'Formulate a High-Interest Debt Repayment Strategy',
                    desc: 'High credit card or personal loan liabilities erode long-term net worth.',
                    link: 'calculators/credit-card-interest.php',
                    linkText: 'Launch Debt Repayment Tool →'
                });
            }

            if (insScore < 60) {
                items.push({
                    title: 'Review Risk Protection Coverage',
                    desc: 'Shield your dependents with term life insurance equal to 10x your annual earnings.',
                    link: 'insurance/index.php',
                    linkText: 'Explore Insurance Coverage →'
                });
            }

            if (invScore < 60 && items.length < 3) {
                items.push({
                    title: 'Establish Low-Cost Index Investment Contributions',
                    desc: 'Automate monthly contributions into broadly diversified equity index funds for compound wealth.',
                    link: 'finance/investing-basics.php',
                    linkText: 'Explore Investing Basics →'
                });
            }

            if (items.length < 3) {
                items.push({
                    title: 'Optimize Banking Yields & Budgeting Ratios',
                    desc: 'Apply the 50/30/20 rule to maximize net income retention and high-yield interest.',
                    link: 'finance/budgeting.php',
                    linkText: 'Explore Budgeting Guides →'
                });
            }

            listContainer.innerHTML = items.slice(0, 3).map((p, idx) => `
                <div class="priority-card" style="background:#fff; border:1px solid var(--clr-border-light); padding:1.25rem; border-radius:var(--radius-md); margin-bottom:1rem; box-shadow:var(--shadow-sm);">
                    <div style="display:flex; align-items:center; gap:0.75rem; margin-bottom:0.4rem;">
                        <span style="background:var(--clr-emerald); color:#fff; width:26px; height:26px; border-radius:50%; display:inline-flex; align-items:center; justify-content:center; font-weight:700; font-size:0.8rem;">${idx + 1}</span>
                        <h4 style="font-size:1.05rem; margin:0; color:var(--clr-primary);">${p.title}</h4>
                    </div>
                    <p style="font-size:0.875rem; color:var(--clr-text-muted); margin-bottom:0.75rem; margin-left:2.1rem;">${p.desc}</p>
                    <a href="${p.link}" style="font-weight:600; font-size:0.85rem; color:var(--clr-primary-accent); margin-left:2.1rem;">${p.linkText}</a>
                </div>
            `).join('');
        }
    };
})();
