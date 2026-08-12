/**
 * FinWise - Interactive Global Financial Assessment Engine
 */

(function() {
    'use strict';

    // Global Dataset Master Configurations
    const countryConfigs = {
        'IN': {
            name: 'India',
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
                '25-34': {
                    'tier3': { rank: 68, more: 32, similar: 16, less: 52, source: 'RBI Household Survey & MOSPI 2023' },
                    'tier4': { rank: 84, more: 16, similar: 13, less: 71, source: 'RBI Financial Stability Report 2023' }
                },
                '35-44': {
                    'tier3': { rank: 61, more: 39, similar: 16, less: 45, source: 'RBI Household Financial Survey 2023' }
                }
            }
        },
        'US': {
            name: 'United States',
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
                '25-34': {
                    'tier3': { rank: 64, more: 36, similar: 14, less: 50, source: 'Federal Reserve Survey of Consumer Finances 2023' },
                    'tier4': { rank: 79, more: 21, similar: 12, less: 67, source: 'US Bureau of Economic Analysis & Fed SCF 2023' }
                }
            }
        },
        'GB': {
            name: 'United Kingdom',
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
                '25-34': {
                    'tier3': { rank: 65, more: 35, similar: 15, less: 50, source: 'UK Office for National Statistics (ONS) 2023' }
                }
            }
        },
        'CA': {
            name: 'Canada',
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
            benchmarks: null // Clear fallback signal
        },
        'AU': {
            name: 'Australia',
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

    document.addEventListener('DOMContentLoaded', () => {
        const countrySelect = document.getElementById('snap-country');
        if (countrySelect) {
            countrySelect.addEventListener('change', (e) => {
                formData.country = e.target.value;
                updateCountryDropdowns();
                updateCurrencySymbols(formData.country);
            });
            updateCountryDropdowns();
        }

        const nextBtn = document.getElementById('snap-next-btn');
        const backBtn = document.getElementById('snap-back-btn');
        const submitBtn = document.getElementById('snap-submit-btn');

        if (nextBtn) {
            nextBtn.addEventListener('click', () => {
                saveStepData(currentStep);
                if (currentStep < totalSteps) {
                    currentStep++;
                    updateStepView();
                }
            });
        }

        if (backBtn) {
            backBtn.addEventListener('click', () => {
                if (currentStep > 1) {
                    currentStep--;
                    updateStepView();
                }
            });
        }

        if (submitBtn) {
            submitBtn.addEventListener('click', (e) => {
                e.preventDefault();
                saveStepData(currentStep);
                if (window.FinWiseDashboard) {
                    window.FinWiseDashboard.calculateAndRender(formData, countryConfigs);
                }
            });
        }
    });

    function updateCountryDropdowns() {
        const c = countryConfigs[formData.country] || countryConfigs['IN'];
        const incSelect = document.getElementById('snap-income');
        const debtSelect = document.getElementById('snap-debt');

        if (incSelect) {
            incSelect.innerHTML = c.incomes.map(i => `<option value="${i.val}">${i.label}</option>`).join('');
        }
        if (debtSelect) {
            debtSelect.innerHTML = c.debts.map(d => `<option value="${d.val}">${d.label}</option>`).join('');
        }
    }

    function updateCurrencySymbols(code) {
        const sym = (countryConfigs[code] || countryConfigs['IN']).symbol;
        document.querySelectorAll('.curr-sym').forEach(el => el.textContent = sym);
    }

    function saveStepData(step) {
        const ageSel = document.getElementById('snap-age');
        const incSel = document.getElementById('snap-income');
        const savSel = document.getElementById('snap-savings');
        const debtSel = document.getElementById('snap-debt');
        const emergSel = document.getElementById('snap-emergency');

        if (ageSel) formData.age = ageSel.value;
        if (incSel) formData.income = incSel.value;
        if (savSel) formData.savings = savSel.value;
        if (debtSel) formData.debt = debtSel.value;
        if (emergSel) formData.emergency = emergSel.value;

        const insList = Array.from(document.querySelectorAll('input[name="snap-ins"]:checked')).map(cb => cb.value);
        if (insList.length > 0) formData.insurance = insList;

        const invList = Array.from(document.querySelectorAll('input[name="snap-inv"]:checked')).map(cb => cb.value);
        if (invList.length > 0) formData.investments = invList;
    }

    function updateStepView() {
        for (let i = 1; i <= totalSteps; i++) {
            const el = document.getElementById(`snap-step-${i}`);
            if (el) el.style.display = (i === currentStep) ? 'block' : 'none';

            const pill = document.getElementById(`step-pill-${i}`);
            if (pill) {
                if (i === currentStep) {
                    pill.classList.add('active');
                } else {
                    pill.classList.remove('active');
                }
            }
        }

        const backBtn = document.getElementById('snap-back-btn');
        const nextBtn = document.getElementById('snap-next-btn');
        const submitBtn = document.getElementById('snap-submit-btn');

        if (backBtn) backBtn.style.display = (currentStep > 1) ? 'inline-block' : 'none';
        if (nextBtn) nextBtn.style.display = (currentStep < totalSteps) ? 'inline-block' : 'none';
        if (submitBtn) submitBtn.style.display = (currentStep === totalSteps) ? 'inline-block' : 'none';
    }

    window.FinWiseConfigs = countryConfigs;
})();
