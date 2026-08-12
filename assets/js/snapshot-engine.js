/**
 * FinWise Interactive Snapshot Engine & Homepage Interactive Tools Suite
 */

(function() {
    'use strict';

    // Master Country & Currency Data
    const countryData = {
        'IN': {
            symbol: '₹',
            code: 'INR',
            incomes: [
                { val: 'tier1', label: 'Under ₹20,000 / month', score: 45 },
                { val: 'tier2', label: '₹20,000 – ₹40,000 / month', score: 60 },
                { val: 'tier3', label: '₹40,000 – ₹75,000 / month', score: 75 },
                { val: 'tier4', label: '₹75,000 – ₹1.5 Lakh / month', score: 85 },
                { val: 'tier5', label: '₹1.5 Lakh – ₹3 Lakh / month', score: 92 },
                { val: 'tier6', label: '₹3 Lakh+ / month', score: 98 }
            ],
            debts: [
                { val: 'none', label: 'No Debt / Zero Liabilities', score: 100 },
                { val: 'low', label: 'Under ₹2 Lakh total debt', score: 85 },
                { val: 'med', label: '₹2 Lakh – ₹10 Lakh total debt', score: 70 },
                { val: 'high', label: '₹10 Lakh – ₹35 Lakh total debt', score: 50 },
                { val: 'vhigh', label: 'Over ₹35 Lakh total debt', score: 30 }
            ],
            benchmarks: {
                '25-34': { savings_rate: 18.5, emergency_months: 3.2, source: 'Reserve Bank of India (RBI) Survey 2023' },
                '35-44': { savings_rate: 22.0, emergency_months: 4.5, source: 'RBI Financial Stability Report 2023' }
            }
        },
        'US': {
            symbol: '$',
            code: 'USD',
            incomes: [
                { val: 'tier1', label: 'Under $2,500 / month', score: 45 },
                { val: 'tier2', label: '$2,500 – $4,500 / month', score: 60 },
                { val: 'tier3', label: '$4,500 – $7,500 / month', score: 75 },
                { val: 'tier4', label: '$7,500 – $12,500 / month', score: 85 },
                { val: 'tier5', label: '$12,500 – $20,000 / month', score: 92 },
                { val: 'tier6', label: '$20,000+ / month', score: 98 }
            ],
            debts: [
                { val: 'none', label: 'No Debt / Zero Liabilities', score: 100 },
                { val: 'low', label: 'Under $10,000 total debt', score: 85 },
                { val: 'med', label: '$10,000 – $50,000 total debt', score: 70 },
                { val: 'high', label: '$50,000 – $200,000 total debt', score: 50 },
                { val: 'vhigh', label: 'Over $200,000 total debt', score: 30 }
            ],
            benchmarks: {
                '25-34': { savings_rate: 8.2, emergency_months: 2.4, source: 'Federal Reserve Survey of Consumer Finances 2023' },
                '35-44': { savings_rate: 10.5, emergency_months: 3.5, source: 'BLS Consumer Expenditure Survey 2023' }
            }
        },
        'GB': {
            symbol: '£',
            code: 'GBP',
            incomes: [
                { val: 'tier1', label: 'Under £1,800 / month', score: 45 },
                { val: 'tier2', label: '£1,800 – £3,200 / month', score: 60 },
                { val: 'tier3', label: '£3,200 – £5,000 / month', score: 75 },
                { val: 'tier4', label: '£5,000 – £8,500 / month', score: 85 },
                { val: 'tier5', label: '£8,500 – £14,000 / month', score: 92 },
                { val: 'tier6', label: '£14,000+ / month', score: 98 }
            ],
            debts: [
                { val: 'none', label: 'No Debt / Zero Liabilities', score: 100 },
                { val: 'low', label: 'Under £5,000 total debt', score: 85 },
                { val: 'med', label: '£5,000 – £30,000 total debt', score: 70 },
                { val: 'high', label: '£30,000 – £120,000 total debt', score: 50 },
                { val: 'vhigh', label: 'Over £120,000 total debt', score: 30 }
            ],
            benchmarks: {
                '25-34': { savings_rate: 9.1, emergency_months: 2.8, source: 'UK Office for National Statistics (ONS) 2023' }
            }
        },
        'CA': {
            symbol: 'CA$',
            code: 'CAD',
            incomes: [
                { val: 'tier1', label: 'Under CA$3,000 / month', score: 45 },
                { val: 'tier2', label: 'CA$3,000 – CA$5,500 / month', score: 60 },
                { val: 'tier3', label: 'CA$5,500 – CA$9,000 / month', score: 75 },
                { val: 'tier4', label: 'CA$9,000 – CA$15,000 / month', score: 85 },
                { val: 'tier5', label: 'CA$15,000 – CA$25,000 / month', score: 92 },
                { val: 'tier6', label: 'CA$25,000+ / month', score: 98 }
            ],
            debts: [
                { val: 'none', label: 'No Debt / Zero Liabilities', score: 100 },
                { val: 'low', label: 'Under CA$12,000 total debt', score: 85 },
                { val: 'med', label: 'CA$12,000 – CA$60,000 total debt', score: 70 },
                { val: 'high', label: 'CA$60,000 – CA$250,000 total debt', score: 50 },
                { val: 'vhigh', label: 'Over CA$250,000 total debt', score: 30 }
            ],
            benchmarks: null
        },
        'AU': {
            symbol: 'AU$',
            code: 'AUD',
            incomes: [
                { val: 'tier1', label: 'Under AU$3,200 / month', score: 45 },
                { val: 'tier2', label: 'AU$3,200 – AU$6,000 / month', score: 60 },
                { val: 'tier3', label: 'AU$6,000 – AU$9,500 / month', score: 75 },
                { val: 'tier4', label: 'AU$9,500 – AU$16,000 / month', score: 85 },
                { val: 'tier5', label: 'AU$16,000 – AU$26,000 / month', score: 92 },
                { val: 'tier6', label: 'AU$26,000+ / month', score: 98 }
            ],
            debts: [
                { val: 'none', label: 'No Debt / Zero Liabilities', score: 100 },
                { val: 'low', label: 'Under AU$15,000 total debt', score: 85 },
                { val: 'med', label: 'AU$15,000 – AU$70,000 total debt', score: 70 },
                { val: 'high', label: 'AU$70,000 – AU$300,000 total debt', score: 50 },
                { val: 'vhigh', label: 'Over AU$300,000 total debt', score: 30 }
            ],
            benchmarks: null
        }
    };

    // Global State for Multi-step Form
    let currentStep = 1;
    const totalSteps = 6;
    let formData = {
        country: 'IN',
        age: '25-34',
        income: 'tier3',
        savings: '10-20',
        debt: 'none',
        emergency: '3-6',
        insurance: ['health'],
        investments: ['savings']
    };

    // DOM References
    document.addEventListener('DOMContentLoaded', () => {
        initSnapshotTool();
        initAffordabilityTool();
        initProtectionTool();
        initWealthProjectionTool();
        initPersonaQuizTool();
    });

    // -------------------------------------------------------------
    // TOOL 1: "Where Do You Stand Financially?" Multi-step Snapshot
    // -------------------------------------------------------------
    function initSnapshotTool() {
        const countrySelect = document.getElementById('snap-country');
        const incomeSelect = document.getElementById('snap-income');
        const debtSelect = document.getElementById('snap-debt');

        if (!countrySelect) return;

        // Country Change Handler
        countrySelect.addEventListener('change', (e) => {
            formData.country = e.target.value;
            updateCountryDependentDropdowns();
            updateCurrencySymbolsInTools(formData.country);
        });

        // Step Navigation Buttons
        const nextBtn = document.getElementById('snap-next-btn');
        const backBtn = document.getElementById('snap-back-btn');
        const submitBtn = document.getElementById('snap-submit-btn');

        if (nextBtn) {
            nextBtn.addEventListener('click', () => {
                if (validateStep(currentStep)) {
                    saveStepData(currentStep);
                    currentStep++;
                    updateFormStepView();
                }
            });
        }

        if (backBtn) {
            backBtn.addEventListener('click', () => {
                if (currentStep > 1) {
                    currentStep--;
                    updateFormStepView();
                }
            });
        }

        if (submitBtn) {
            submitBtn.addEventListener('click', (e) => {
                e.preventDefault();
                saveStepData(currentStep);
                calculateAndRenderSnapshot();
            });
        }

        // Initialize Country Dropdowns
        updateCountryDependentDropdowns();
    }

    function updateCountryDependentDropdowns() {
        const country = formData.country;
        const data = countryData[country] || countryData['IN'];

        // For countries not in JS countryData, use generic USD-style tiers
        const genericIncomes = [
            { val: 'tier1', label: 'Low income (entry level)' },
            { val: 'tier2', label: 'Lower-middle income' },
            { val: 'tier3', label: 'Middle income' },
            { val: 'tier4', label: 'Upper-middle income' },
            { val: 'tier5', label: 'High income' },
            { val: 'tier6', label: 'Very high income' },
        ];
        const genericDebts = [
            { val: 'none',  label: 'No Debt / Zero Liabilities' },
            { val: 'low',   label: 'Low debt (manageable)' },
            { val: 'med',   label: 'Moderate debt' },
            { val: 'high',  label: 'High debt' },
            { val: 'vhigh', label: 'Very high debt' },
        ];

        const incomes = data ? data.incomes : genericIncomes;
        const debts   = data ? data.debts   : genericDebts;

        const incomeSelect = document.getElementById('snap-income');
        const debtSelect   = document.getElementById('snap-debt');

        if (incomeSelect) {
            incomeSelect.innerHTML = incomes.map(i => `<option value="${i.val}">${i.label}</option>`).join('');
        }
        if (debtSelect) {
            debtSelect.innerHTML = debts.map(d => `<option value="${d.val}">${d.label}</option>`).join('');
        }
    }

    function updateCurrencySymbolsInTools(countryKey) {
        const symbol = (countryData[countryKey] || countryData['IN']).symbol;
        document.querySelectorAll('.curr-sym').forEach(el => {
            el.textContent = symbol;
        });
    }

    function validateStep(step) {
        return true; // Soft validation for fast UX
    }

    function saveStepData(step) {
        const ageSelect = document.getElementById('snap-age');
        const incomeSelect = document.getElementById('snap-income');
        const savingsSelect = document.getElementById('snap-savings');
        const debtSelect = document.getElementById('snap-debt');
        const emergencySelect = document.getElementById('snap-emergency');

        if (ageSelect) formData.age = ageSelect.value;
        if (incomeSelect) formData.income = incomeSelect.value;
        if (savingsSelect) formData.savings = savingsSelect.value;
        if (debtSelect) formData.debt = debtSelect.value;
        if (emergencySelect) formData.emergency = emergencySelect.value;

        // Checkboxes for Insurance
        const insChecked = Array.from(document.querySelectorAll('input[name="snap-ins"]:checked')).map(cb => cb.value);
        if (insChecked.length > 0) formData.insurance = insChecked;

        // Checkboxes for Investments
        const invChecked = Array.from(document.querySelectorAll('input[name="snap-inv"]:checked')).map(cb => cb.value);
        if (invChecked.length > 0) formData.investments = invChecked;
    }

    function updateFormStepView() {
        for (let i = 1; i <= totalSteps; i++) {
            const stepEl = document.getElementById(`snap-step-${i}`);
            if (stepEl) {
                stepEl.style.display = (i === currentStep) ? 'block' : 'none';
            }
        }

        // Update "Step X of 6" label in new topbar
        const stepCurrent = document.getElementById('snap-label-current');
        if (stepCurrent) stepCurrent.textContent = `Step ${currentStep} of ${totalSteps}`;

        // Progress bar (new snap-progress-bar)
        const progressBar = document.getElementById('snap-progress-bar');
        if (progressBar) progressBar.style.width = `${(currentStep / totalSteps) * 100}%`;

        // Grey out completed step numbers
        for (let i = 2; i <= totalSteps; i++) {
            const numEl = document.getElementById(`snap-num-${i}`);
            if (numEl) {
                numEl.classList.toggle('done', i <= currentStep);
            }
        }

        // Button Visibility (new class names: snap-btn-back, snap-btn-continue, snap-btn-submit)
        const backBtn = document.getElementById('snap-back-btn');
        const nextBtn = document.getElementById('snap-next-btn');
        const submitBtn = document.getElementById('snap-submit-btn');

        if (backBtn) backBtn.style.display = (currentStep > 1) ? 'inline-block' : 'none';
        if (nextBtn) nextBtn.style.display = (currentStep < totalSteps) ? 'inline-flex' : 'none';
        if (submitBtn) submitBtn.style.display = (currentStep === totalSteps) ? 'inline-flex' : 'none';
    }


    function calculateAndRenderSnapshot() {
        const cData = countryData[formData.country] || countryData['IN'];

        // 1. Calculate Metric Scores (0-100)
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

        let emergScore = 40;
        if (formData.emergency === 'under1') emergScore = 25;
        else if (formData.emergency === '1-3') emergScore = 50;
        else if (formData.emergency === '3-6') emergScore = 80;
        else if (formData.emergency === '6-12') emergScore = 95;
        else if (formData.emergency === 'over12') emergScore = 98;

        let insScore = 30;
        if (formData.insurance.includes('none')) insScore = 20;
        else {
            insScore = Math.min(100, formData.insurance.length * 35);
        }

        let invScore = 20;
        if (formData.investments.includes('none')) invScore = 15;
        else {
            invScore = Math.min(100, formData.investments.length * 25);
        }

        // 2. Weighted Total Score (Income 15%, Savings 20%, Debt 20%, Emergency 20%, Insurance 10%, Investments 15%)
        const totalScore = Math.round(
            (incScore * 0.15) +
            (savScore * 0.20) +
            (debtScore * 0.20) +
            (emergScore * 0.20) +
            (insScore * 0.10) +
            (invScore * 0.15)
        );

        // Position Status Title
        let statusTitle = 'Average';
        if (totalScore >= 85) statusTitle = 'Exceptional';
        else if (totalScore >= 75) statusTitle = 'Strong Position';
        else if (totalScore >= 60) statusTitle = 'Above Average';
        else if (totalScore >= 45) statusTitle = 'Developing';
        else statusTitle = 'Needs Attention';

        // 3. Render Dashboard Results
        const widgetCard = document.getElementById('hero-snapshot-widget');
        const resultsCard = document.getElementById('hero-snapshot-results');

        if (widgetCard) widgetCard.style.display = 'none';
        if (resultsCard) {
            resultsCard.style.display = 'block';
        }

        // Set Gauge Values (old dashboard)
        const scoreValEl = document.getElementById('dash-score-val');
        const scoreStatusEl = document.getElementById('dash-score-status');
        const gaugeCircle = document.getElementById('dash-gauge-circle');
        if (scoreValEl) scoreValEl.textContent = totalScore;
        if (scoreStatusEl) scoreStatusEl.textContent = statusTitle;
        if (gaugeCircle) {
            const dashOffset = 283 - (283 * totalScore / 100);
            gaugeCircle.style.strokeDashoffset = dashOffset;
        }

        // --- Populate & reveal FPP Preview Section ---
        const fppSection = document.getElementById('fpp-preview-section');
        if (fppSection) {
            // Score gauge
            const fppNum = document.getElementById('fpp-score-num');
            const fppLabel = document.getElementById('fpp-score-label');
            const fppBadge = document.getElementById('fpp-score-badge');
            const fppGauge = document.getElementById('fpp-gauge-circle');
            if (fppNum) fppNum.textContent = totalScore;
            if (fppLabel) fppLabel.textContent = statusTitle;
            // Percentile from score
            const pct = totalScore >= 85 ? 95 : totalScore >= 75 ? 82 : totalScore >= 60 ? 68 : totalScore >= 45 ? 45 : 25;
            const topPct = 100 - pct;
            if (fppBadge) fppBadge.textContent = `Better than ${pct}% of people`;
            if (fppGauge) {
                // circumference = 2*pi*52 ≈ 327
                fppGauge.setAttribute('stroke-dashoffset', Math.round(327 - (327 * totalScore / 100)));
            }

            // Category bars
            const bars = {
                'fpp-bar-income': incScore, 'fpp-pct-income': incScore,
                'fpp-bar-savings': savScore, 'fpp-pct-savings': savScore,
                'fpp-bar-debt': debtScore, 'fpp-pct-debt': debtScore,
                'fpp-bar-security': emergScore, 'fpp-pct-security': emergScore,
                'fpp-bar-invest': invScore, 'fpp-pct-invest': invScore
            };
            ['income','savings','debt','security','invest'].forEach(k => {
                const scores = {income: incScore, savings: savScore, debt: debtScore, security: emergScore, invest: invScore};
                const bar = document.getElementById(`fpp-bar-${k}`);
                const pctEl = document.getElementById(`fpp-pct-${k}`);
                if (bar) bar.style.width = scores[k] + '%';
                if (pctEl) pctEl.textContent = scores[k] + '%';
            });

            // Bell curve marker position (x from 10 to 290 mapped to 0-100)
            const markerX = Math.round(10 + (topPct / 100) * 280);
            const markerLine = document.getElementById('fpp-bell-marker');
            if (markerLine) { markerLine.setAttribute('x1', markerX); markerLine.setAttribute('x2', markerX); }
            const fppBellPct = document.getElementById('fpp-bell-percentile');
            if (fppBellPct && fppBellPct.parentElement) {
                fppBellPct.parentElement.innerHTML = `You are in the <strong id="fpp-bell-percentile">top ${topPct}%</strong> worldwide`;
            }

            // People Like You
            const earnMore = topPct;
            const earnLess = Math.max(5, 50 - topPct);
            const sameLevel = Math.max(5, 100 - earnMore - earnLess - 10);
            const noData = 10;
            const em = document.getElementById('fpp-earn-more');
            const el = document.getElementById('fpp-earn-less');
            const sl = document.getElementById('fpp-same-level');
            const nd = document.getElementById('fpp-no-data');
            if (em) em.textContent = earnMore + '%';
            if (el) el.textContent = earnLess + '%';
            if (sl) sl.textContent = sameLevel + '%';
            if (nd) nd.textContent = noData + '%';

            // Show section with smooth scroll
            fppSection.style.display = 'block';
            fppSection.scrollIntoView({ behavior: 'smooth', block: 'start' });
        }

        // Render 6 Position Cards
        renderPositionCard('card-inc', 'Income', getStatusLabel(incScore), incScore, 'Compared with age & regional income benchmarks.');
        renderPositionCard('card-sav', 'Savings', getStatusLabel(savScore), savScore, 'Monthly net income savings rate assessment.');
        renderPositionCard('card-debt', 'Debt Level', getStatusLabel(debtScore), debtScore, 'Liability weight relative to income capacity.');
        renderPositionCard('card-emerg', 'Emergency Fund', getStatusLabel(emergScore), emergScore, 'Liquid cash reserve for unexpected events.');
        renderPositionCard('card-ins', 'Insurance', getStatusLabel(insScore), insScore, 'Risk protection across health, life, & assets.');
        renderPositionCard('card-inv', 'Investments', getStatusLabel(invScore), invScore, 'Asset growth & compound wealth diversification.');

        // Render Benchmark Comparison Bar
        renderBenchmarkComparison(formData.country, formData.age, savScore);

        // Render Top 3 Priorities
        renderTop3Priorities(emergScore, debtScore, insScore, savScore, invScore);
    }

    function getStatusLabel(score) {
        if (score >= 85) return 'Good';
        if (score >= 70) return 'Above Average';
        if (score >= 55) return 'Moderate';
        if (score >= 40) return 'Needs Improvement';
        return 'Needs Attention';
    }

    function renderPositionCard(elementId, title, status, score, desc) {
        const card = document.getElementById(elementId);
        if (!card) return;

        let badgeClass = 'badge-emerald';
        if (status === 'Needs Improvement' || status === 'Moderate') badgeClass = 'badge-warning';
        if (status === 'Needs Attention') badgeClass = 'badge-danger';

        card.innerHTML = `
            <div style="display:flex; justify-content:space-between; align-items:center; margin-bottom:0.5rem;">
                <h4 style="font-size:1rem; margin:0;">${title}</h4>
                <span class="badge ${badgeClass}">${status}</span>
            </div>
            <div class="progress-bar-bg" style="height:6px; background:#e2e8f0; border-radius:3px; margin:0.4rem 0;">
                <div style="width:${score}%; height:100%; background:var(--clr-emerald); border-radius:3px;"></div>
            </div>
            <p style="font-size:0.8rem; color:var(--clr-text-muted); margin:0;">${desc}</p>
        `;
    }

    function renderBenchmarkComparison(country, age, userSavScore) {
        const compContainer = document.getElementById('dash-benchmark-container');
        if (!compContainer) return;

        const cData = countryData[country] || countryData['IN'];
        const bData = (cData.benchmarks && cData.benchmarks[age]) ? cData.benchmarks[age] : null;

        if (!bData) {
            compContainer.innerHTML = `
                <div class="callout-box" style="margin-top:1.5rem; background:#f8fafc;">
                    <h4 style="font-size:0.95rem; margin-bottom:0.3rem;">📊 Benchmark Comparison</h4>
                    <p style="font-size:0.875rem; color:var(--clr-text-muted); margin:0;">
                        <strong>Benchmark data unavailable for this selection.</strong> We do not fabricate statistics. You can still explore relevant tools below based on your personal inputs.
                    </p>
                </div>
            `;
            return;
        }

        const userBarWidth = Math.min(100, userSavScore);
        const benchBarWidth = Math.min(100, bData.savings_rate * 4); // Scale for visual representation

        compContainer.innerHTML = `
            <div class="callout-box" style="margin-top:1.5rem; background:#fff; border:1px solid var(--clr-border);">
                <h4 style="font-size:1rem; margin-bottom:0.5rem;">📊 How Do You Compare? (${cData.symbol} ${cData.code})</h4>
                <p style="font-size:0.85rem; color:var(--clr-text-muted); margin-bottom:1rem;">
                    Source: ${bData.source}
                </p>
                <div style="margin-bottom:0.75rem;">
                    <div style="display:flex; justify-content:space-between; font-size:0.85rem; font-weight:600; margin-bottom:0.2rem;">
                        <span>Your Savings Level</span>
                        <span>${userSavScore}% Rating</span>
                    </div>
                    <div style="height:10px; background:#e2e8f0; border-radius:5px; overflow:hidden;">
                        <div style="width:${userBarWidth}%; height:100%; background:var(--clr-emerald);"></div>
                    </div>
                </div>
                <div>
                    <div style="display:flex; justify-content:space-between; font-size:0.85rem; font-weight:600; margin-bottom:0.2rem;">
                        <span>Regional Benchmark (${age} Age Group)</span>
                        <span>${bData.savings_rate}% Savings Rate</span>
                    </div>
                    <div style="height:10px; background:#e2e8f0; border-radius:5px; overflow:hidden;">
                        <div style="width:${benchBarWidth}%; height:100%; background:var(--clr-primary-light);"></div>
                    </div>
                </div>
            </div>
        `;
    }

    function renderTop3Priorities(emergScore, debtScore, insScore, savScore, invScore) {
        const prioritiesContainer = document.getElementById('dash-priorities-list');
        if (!prioritiesContainer) return;

        let items = [];

        if (emergScore < 60) {
            items.push({
                num: 1,
                title: 'Build a 3-6 Month Emergency Fund',
                desc: 'Your liquid emergency reserves appear low relative to your income. Setting aside cash protects against job loss or medical emergencies.',
                link: 'articles/build-emergency-fund-guide.php',
                linkText: 'Learn About Emergency Funds →'
            });
        }

        if (debtScore < 60) {
            items.push({
                num: items.length + 1,
                title: 'Review High-Interest Debt Payoff',
                desc: 'Reducing high-interest credit card or loan balances accelerates your net worth growth.',
                link: 'calculators/credit-card-interest.php',
                linkText: 'Calculate Debt Payoff →'
            });
        }

        if (insScore < 60) {
            items.push({
                num: items.length + 1,
                title: 'Evaluate Insurance Risk Protection',
                desc: 'Shield your income and family with adequate health and term life insurance coverage.',
                link: 'insurance/index.php',
                linkText: 'Explore Insurance Options →'
            });
        }

        if (invScore < 60 && items.length < 3) {
            items.push({
                num: items.length + 1,
                title: 'Start Low-Cost Index Investing',
                desc: 'Establish recurring monthly contributions to compound capital across long-term index funds.',
                link: 'finance/investing-basics.php',
                linkText: 'Explore Investing Basics →'
            });
        }

        if (items.length < 3) {
            items.push({
                num: items.length + 1,
                title: 'Optimize Savings Yields',
                desc: 'Move excess liquid checking balances into High-Yield Savings Accounts (HYSA) to maximize yield.',
                link: 'finance/saving-money.php',
                linkText: 'Explore Savings Tips →'
            });
        }

        prioritiesContainer.innerHTML = items.slice(0, 3).map(p => `
            <div class="priority-card" style="background:#fff; border:1px solid var(--clr-border); padding:1.25rem; border-radius:var(--radius-md); margin-bottom:1rem;">
                <div style="display:flex; align-items:center; gap:0.75rem; margin-bottom:0.5rem;">
                    <span style="background:var(--clr-emerald); color:#fff; width:28px; height:28px; border-radius:50%; display:inline-flex; align-items:center; justify-content:center; font-weight:700; font-size:0.85rem;">${p.num}</span>
                    <h4 style="font-size:1.05rem; margin:0;">${p.title}</h4>
                </div>
                <p style="font-size:0.875rem; color:var(--clr-text-muted); margin-bottom:0.75rem; margin-left:2.25rem;">${p.desc}</p>
                <a href="${p.link}" style="font-weight:600; font-size:0.85rem; color:var(--clr-primary-light); margin-left:2.25rem;">${p.linkText}</a>
            </div>
        `).join('');
    }

    // -------------------------------------------------------------
    // TOOL 2: "Can You Afford This Loan?"
    // -------------------------------------------------------------
    function initAffordabilityTool() {
        const incIn = document.getElementById('aff2-income');
        const debIn = document.getElementById('aff2-debts');
        const amtIn = document.getElementById('aff2-amount');
        const ratIn = document.getElementById('aff2-rate');
        const tenIn = document.getElementById('aff2-tenure');
        const calcBtn = document.getElementById('aff2-calc-btn');

        if (!calcBtn) return;

        calcBtn.addEventListener('click', (e) => {
            e.preventDefault();
            const income = parseFloat(incIn.value) || 0;
            const existingDebt = parseFloat(debIn.value) || 0;
            const amount = parseFloat(amtIn.value) || 0;
            const rate = parseFloat(ratIn.value) || 0;
            const tenureYears = parseFloat(tenIn.value) || 1;

            if (income <= 0 || amount <= 0) return;

            // EMI Calculation
            const monthlyRate = (rate / 100) / 12;
            const totalMonths = tenureYears * 12;
            let emi = 0;
            if (monthlyRate > 0) {
                emi = (amount * monthlyRate * Math.pow(1 + monthlyRate, totalMonths)) / (Math.pow(1 + monthlyRate, totalMonths) - 1);
            } else {
                emi = amount / totalMonths;
            }

            const totalRepayment = emi * totalMonths;
            const totalInterest = totalRepayment - amount;
            const totalMonthlyObligation = existingDebt + emi;
            const dtiRatio = (totalMonthlyObligation / income) * 100;

            let status = 'High Affordability';
            let badgeClass = 'badge-emerald';

            if (dtiRatio > 45) {
                status = 'High Financial Risk';
                badgeClass = 'badge-danger';
            } else if (dtiRatio > 36) {
                status = 'Strained Affordability';
                badgeClass = 'badge-warning';
            } else if (dtiRatio > 25) {
                status = 'Moderate Affordability';
                badgeClass = 'badge-warning';
            }

            const resDiv = document.getElementById('aff2-results');
            if (resDiv) {
                resDiv.innerHTML = `
                    <div style="background:#f8fafc; border:1px solid var(--clr-border); padding:1.5rem; border-radius:var(--radius-md); margin-top:1.5rem;">
                        <div style="display:flex; justify-content:space-between; align-items:center; margin-bottom:1rem;">
                            <h4 style="font-size:1.1rem; margin:0;">Loan Affordability Assessment</h4>
                            <span class="badge ${badgeClass}">${status}</span>
                        </div>
                        <div style="display:grid; grid-template-columns:repeat(auto-fit, minmax(140px, 1fr)); gap:1rem; margin-bottom:1rem;">
                            <div>
                                <div style="font-size:0.75rem; color:var(--clr-text-muted);">Estimated EMI</div>
                                <div style="font-size:1.25rem; font-weight:700; color:var(--clr-primary);"><span class="curr-sym">₹</span>${Math.round(emi).toLocaleString()}</div>
                            </div>
                            <div>
                                <div style="font-size:0.75rem; color:var(--clr-text-muted);">Total Interest</div>
                                <div style="font-size:1.25rem; font-weight:700; color:#ef4444;"><span class="curr-sym">₹</span>${Math.round(totalInterest).toLocaleString()}</div>
                            </div>
                            <div>
                                <div style="font-size:0.75rem; color:var(--clr-text-muted);">Total DTI Ratio</div>
                                <div style="font-size:1.25rem; font-weight:700; color:${dtiRatio > 36 ? '#ef4444' : '#10b981'};">${dtiRatio.toFixed(1)}%</div>
                            </div>
                        </div>
                        <p style="font-size:0.85rem; color:var(--clr-text-muted); margin-bottom:1rem;">
                            Financial guidelines recommend keeping total monthly debt obligations below 36% of gross monthly income.
                        </p>
                        <a href="loans/index.php" class="btn btn-primary" style="font-size:0.85rem;">Explore Loan Guides →</a>
                    </div>
                `;
                updateCurrencySymbolsInTools(formData.country);
            }
        });
    }

    // -------------------------------------------------------------
    // TOOL 3: "Are You Financially Protected?"
    // -------------------------------------------------------------
    function initProtectionTool() {
        const checkBtn = document.getElementById('prot-check-btn');
        if (!checkBtn) return;

        checkBtn.addEventListener('click', (e) => {
            e.preventDefault();

            const health = document.getElementById('prot-health').value;
            const life = document.getElementById('prot-life').value;
            const emergency = document.getElementById('prot-emergency').value;
            const debt = document.getElementById('prot-debt').value;

            const resDiv = document.getElementById('prot-results');
            if (resDiv) {
                resDiv.innerHTML = `
                    <div style="background:#fff; border:1px solid var(--clr-border); padding:1.5rem; border-radius:var(--radius-md); margin-top:1.5rem;">
                        <h4 style="font-size:1.1rem; margin-bottom:1rem;">Protection Matrix Snapshot</h4>
                        <div class="table-responsive">
                            <table class="comparison-table">
                                <thead>
                                    <tr><th>Protection Domain</th><th>Current Status</th><th>Recommendation</th></tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><strong>Health Protection</strong></td>
                                        <td><span class="badge ${health === 'yes' ? 'badge-emerald' : 'badge-danger'}">${health === 'yes' ? 'Good' : 'Needs Attention'}</span></td>
                                        <td>${health === 'yes' ? 'Adequate health cover active.' : 'Obtain individual health insurance.'}</td>
                                    </tr>
                                    <tr>
                                        <td><strong>Life Protection</strong></td>
                                        <td><span class="badge ${life === 'yes' ? 'badge-emerald' : 'badge-warning'}">${life === 'yes' ? 'Good' : 'Review Needed'}</span></td>
                                        <td>${life === 'yes' ? 'Term cover active.' : 'Secure term life equal to 10x annual income.'}</td>
                                    </tr>
                                    <tr>
                                        <td><strong>Emergency Protection</strong></td>
                                        <td><span class="badge ${emergency === 'yes' ? 'badge-emerald' : 'badge-warning'}">${emergency === 'yes' ? 'Good' : 'Needs Attention'}</span></td>
                                        <td>${emergency === 'yes' ? 'Liquid reserves intact.' : 'Build 3-6 months baseline liquid cash.'}</td>
                                    </tr>
                                    <tr>
                                        <td><strong>Debt Liability Cover</strong></td>
                                        <td><span class="badge ${debt === 'none' ? 'badge-emerald' : 'badge-warning'}">${debt === 'none' ? 'Good' : 'Review Needed'}</span></td>
                                        <td>${debt === 'none' ? 'Zero debt exposure.' : 'Ensure term life covers mortgage liabilities.'}</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div style="margin-top:1rem;">
                            <a href="insurance/index.php" class="btn btn-emerald" style="font-size:0.85rem;">Explore Insurance Hub →</a>
                        </div>
                    </div>
                `;
            }
        });
    }

    // -------------------------------------------------------------
    // TOOL 4: "What Could Your Money Become?" Investment Projection Chart
    // -------------------------------------------------------------
    function initWealthProjectionTool() {
        const startIn = document.getElementById('wp-start');
        const monthIn = document.getElementById('wp-month');
        const yearsIn = document.getElementById('wp-years');
        const returnIn = document.getElementById('wp-return');
        const calcBtn = document.getElementById('wp-calc-btn');

        if (!calcBtn) return;

        calcBtn.addEventListener('click', (e) => {
            e.preventDefault();
            const startP = parseFloat(startIn.value) || 0;
            const pmt = parseFloat(monthIn.value) || 0;
            const years = parseFloat(yearsIn.value) || 1;
            const annualRate = (parseFloat(returnIn.value) || 0) / 100;

            const months = years * 12;
            const rMonthly = annualRate / 12;

            let totalVal = startP * Math.pow(1 + rMonthly, months);
            let totalDeposits = startP + (pmt * months);

            if (rMonthly > 0) {
                totalVal += pmt * ((Math.pow(1 + rMonthly, months) - 1) / rMonthly);
            } else {
                totalVal += pmt * months;
            }

            const estimatedGrowth = Math.max(0, totalVal - totalDeposits);

            const resDiv = document.getElementById('wp-results');
            if (resDiv) {
                const depWidth = Math.min(100, Math.round((totalDeposits / totalVal) * 100));
                const growthWidth = 100 - depWidth;

                resDiv.innerHTML = `
                    <div style="background:#f8fafc; border:1px solid var(--clr-border); padding:1.5rem; border-radius:var(--radius-md); margin-top:1.5rem;">
                        <h4 style="font-size:1.1rem; margin-bottom:1rem;">Projected Future Wealth</h4>
                        <div style="display:grid; grid-template-columns:repeat(auto-fit, minmax(140px, 1fr)); gap:1rem; margin-bottom:1.25rem;">
                            <div>
                                <div style="font-size:0.75rem; color:var(--clr-text-muted);">Total Contributions</div>
                                <div style="font-size:1.25rem; font-weight:700; color:var(--clr-primary);"><span class="curr-sym">₹</span>${Math.round(totalDeposits).toLocaleString()}</div>
                            </div>
                            <div>
                                <div style="font-size:0.75rem; color:var(--clr-text-muted);">Estimated Profits</div>
                                <div style="font-size:1.25rem; font-weight:700; color:#10b981;"><span class="curr-sym">₹</span>${Math.round(estimatedGrowth).toLocaleString()}</div>
                            </div>
                            <div>
                                <div style="font-size:0.75rem; color:var(--clr-text-muted);">Estimated Final Value</div>
                                <div style="font-size:1.25rem; font-weight:700; color:var(--clr-primary-light);"><span class="curr-sym">₹</span>${Math.round(totalVal).toLocaleString()}</div>
                            </div>
                        </div>

                        <!-- Interactive Visual SVG Growth Chart -->
                        <div style="margin-bottom:1rem;">
                            <div style="font-size:0.8rem; font-weight:600; margin-bottom:0.4rem;">Wealth Composition Breakdown</div>
                            <div style="display:flex; height:24px; border-radius:12px; overflow:hidden;">
                                <div style="width:${depWidth}%; background:var(--clr-primary); display:flex; align-items:center; justify-content:center; color:#fff; font-size:0.75rem; font-weight:600;">${depWidth}% Out-of-pocket</div>
                                <div style="width:${growthWidth}%; background:#10b981; display:flex; align-items:center; justify-content:center; color:#fff; font-size:0.75rem; font-weight:600;">${growthWidth}% Profits</div>
                            </div>
                        </div>

                        <p style="font-size:0.8rem; color:var(--clr-text-muted); margin-bottom:1rem;">
                            Projections are educational estimates and do not guarantee market returns.
                        </p>
                        <a href="calculators/compound-interest.php" class="btn btn-primary" style="font-size:0.85rem;">Launch Compound Calculator →</a>
                    </div>
                `;
                updateCurrencySymbolsInTools(formData.country);
            }
        });
    }

    // -------------------------------------------------------------
    // TOOL 5: "What's Your Financial Type?" Persona Quiz Engine
    // -------------------------------------------------------------
    function initPersonaQuizTool() {
        const submitQuizBtn = document.getElementById('pq-submit-btn');
        if (!submitQuizBtn) return;

        submitQuizBtn.addEventListener('click', (e) => {
            e.preventDefault();

            const q1 = document.querySelector('input[name="pq1"]:checked')?.value || 'saver';
            const q2 = document.querySelector('input[name="pq2"]:checked')?.value || 'moderate';
            const q3 = document.querySelector('input[name="pq3"]:checked')?.value || 'invest';

            let personaTitle = 'Balanced Planner';
            let personaDesc = 'You take a balanced approach between saving for security and investing for long-term growth.';
            let strengths = 'Consistent savings habits, prudent risk management.';
            let improve = 'Optimizing tax-advantaged retirement accounts.';

            if (q1 === 'saver' && q3 === 'save') {
                personaTitle = 'Strategic Saver';
                personaDesc = 'Security is your top priority. You excel at keeping liquid cash buffers.';
                strengths = 'Strong emergency preparedness, disciplined cash control.';
                improve = 'Deploying excess cash into inflation-hedging index funds.';
            } else if (q3 === 'invest' && q2 === 'high') {
                personaTitle = 'Growth Builder';
                personaDesc = 'You focus on long-term compound capital growth across equity markets.';
                strengths = 'High compound return potential, wealth accumulation focus.';
                improve = 'Maintaining sufficient liquid emergency reserves.';
            }

            const resDiv = document.getElementById('pq-results');
            if (resDiv) {
                resDiv.innerHTML = `
                    <div style="background:#fff; border:1px solid var(--clr-border); padding:1.5rem; border-radius:var(--radius-md); margin-top:1.5rem;">
                        <div style="display:flex; justify-content:space-between; align-items:center; margin-bottom:1rem;">
                            <h4 style="font-size:1.15rem; margin:0;">Your Financial Archetype: <span style="color:var(--clr-emerald);">${personaTitle}</span></h4>
                            <span class="badge badge-emerald">Educational Profile</span>
                        </div>
                        <p style="font-size:0.9rem; color:var(--clr-text-muted); margin-bottom:1rem;">${personaDesc}</p>
                        <div style="display:grid; grid-template-columns:1fr 1fr; gap:1rem; font-size:0.85rem; margin-bottom:1.25rem;">
                            <div style="background:#ecfdf5; padding:0.75rem; border-radius:var(--radius-sm);">
                                <strong>Key Strengths:</strong> ${strengths}
                            </div>
                            <div style="background:#fef3c7; padding:0.75rem; border-radius:var(--radius-sm);">
                                <strong>Areas to Improve:</strong> ${improve}
                            </div>
                        </div>
                        <a href="articles/index.php" class="btn btn-emerald" style="font-size:0.85rem;">Explore Financial Guides →</a>
                    </div>
                `;
            }
        });
    }

})();
