/**
 * FinWise - Financial Calculators Calculation Engines
 * Native JavaScript calculations for Loan EMI, Affordability, Compound Interest, Savings, Credit Card Payoff.
 */

window.FinWiseCalc = {
    /**
     * Format currency output
     */
    formatCurrency: function(amount) {
        return new Intl.NumberFormat('en-US', {
            style: 'currency',
            currency: 'USD',
            maximumFractionDigits: 0
        }).format(amount);
    },

    /**
     * 1. Loan EMI Calculation Engine
     * P = Loan Amount, R = Monthly Interest Rate, N = Tenure in Months
     */
    calculateEMI: function(amount, annualRate, tenureYears) {
        const P = parseFloat(amount);
        const r = parseFloat(annualRate) / 12 / 100;
        const n = parseFloat(tenureYears) * 12;

        if (P <= 0 || r <= 0 || n <= 0 || isNaN(P) || isNaN(r) || isNaN(n)) {
            return { emi: 0, totalInterest: 0, totalRepayment: 0 };
        }

        const emi = (P * r * Math.pow(1 + r, n)) / (Math.pow(1 + r, n) - 1);
        const totalRepayment = emi * n;
        const totalInterest = totalRepayment - P;

        return {
            emi: emi,
            totalInterest: totalInterest,
            totalRepayment: totalRepayment,
            principal: P
        };
    },

    /**
     * 2. Compound Interest Engine
     * A = P(1 + r/n)^(nt)
     */
    calculateCompoundInterest: function(principal, annualRate, years, frequencyPerYear, monthlyDeposit) {
        const P = parseFloat(principal) || 0;
        const r = (parseFloat(annualRate) || 0) / 100;
        const t = parseFloat(years) || 1;
        const n = parseInt(frequencyPerYear) || 12;
        const PMT = parseFloat(monthlyDeposit) || 0;

        let totalValue = P * Math.pow(1 + (r / n), n * t);
        let totalDeposits = P + (PMT * 12 * t);

        // Calculate regular monthly contributions interest
        if (PMT > 0) {
            const monthlyRate = r / 12;
            const totalMonths = t * 12;
            const pmtGrowth = PMT * ((Math.pow(1 + monthlyRate, totalMonths) - 1) / monthlyRate);
            totalValue += pmtGrowth;
        }

        const interestEarned = totalValue - totalDeposits;

        return {
            futureValue: totalValue,
            totalDeposits: totalDeposits,
            interestEarned: interestEarned
        };
    },

    /**
     * 3. Credit Card Interest & Payoff Engine
     */
    calculateCreditCardPayoff: function(balance, apr, monthlyPayment) {
        let B = parseFloat(balance) || 0;
        const r = (parseFloat(apr) || 0) / 100 / 365;
        const PMT = parseFloat(monthlyPayment) || 0;

        if (B <= 0 || PMT <= 0) return { months: 0, totalInterest: 0 };

        let months = 0;
        let totalInterest = 0;
        let maxGuard = 600; // 50 years cap

        while (B > 0 && months < maxGuard) {
            let monthlyInterest = B * (r * 30.4167);
            if (PMT <= monthlyInterest) {
                // Payment is too low to ever pay off interest
                return { months: Infinity, totalInterest: Infinity };
            }
            totalInterest += monthlyInterest;
            B = (B + monthlyInterest) - PMT;
            months++;
        }

        return {
            months: months,
            totalInterest: totalInterest,
            totalPaid: (parseFloat(balance) || 0) + totalInterest
        };
    },

    /**
     * 4. Loan Affordability Engine (DTI model)
     * Target Max DTI: 36% to 43%
     */
    calculateAffordability: function(grossMonthlyIncome, existingMonthlyDebts, interestRate, tenureYears) {
        const income = parseFloat(grossMonthlyIncome) || 0;
        const debts = parseFloat(existingMonthlyDebts) || 0;
        const rate = (parseFloat(interestRate) || 0) / 12 / 100;
        const n = (parseFloat(tenureYears) || 0) * 12;

        // Conservative max monthly payment (36% DTI cap for front-end + debt)
        const maxAllowedMonthlyPayment = Math.max(0, (income * 0.36) - debts);
        
        if (maxAllowedMonthlyPayment <= 0 || rate <= 0 || n <= 0) {
            return { maxLoan: 0, maxMonthlyPayment: 0 };
        }

        // Present value formula: P = EMI * [(1 + r)^n - 1] / [r * (1 + r)^n]
        const maxLoan = maxAllowedMonthlyPayment * (Math.pow(1 + rate, n) - 1) / (rate * Math.pow(1 + rate, n));

        return {
            maxLoan: maxLoan,
            maxMonthlyPayment: maxAllowedMonthlyPayment
        };
    }
};

// Auto Bind EMI Calculator Elements on DOM Load
document.addEventListener('DOMContentLoaded', () => {
    // Standard Homepage / Core EMI Calc binding
    const amountInput = document.getElementById('calc-amount');
    const amountSlider = document.getElementById('calc-amount-slider');
    const rateInput = document.getElementById('calc-rate');
    const tenureInput = document.getElementById('calc-tenure');
    
    const resEMI = document.getElementById('res-emi');
    const resInterest = document.getElementById('res-interest');
    const resTotal = document.getElementById('res-total');

    function updateLoanEMI() {
        if (!amountInput || !rateInput || !tenureInput || !resEMI) return;

        const amount = amountInput.value;
        const rate = rateInput.value;
        const tenure = tenureInput.value;

        const res = window.FinWiseCalc.calculateEMI(amount, rate, tenure);

        resEMI.textContent = window.FinWiseCalc.formatCurrency(res.emi);
        if (resInterest) resInterest.textContent = window.FinWiseCalc.formatCurrency(res.totalInterest);
        if (resTotal) resTotal.textContent = window.FinWiseCalc.formatCurrency(res.totalRepayment);
    }

    if (amountInput && amountSlider) {
        amountInput.addEventListener('input', (e) => {
            amountSlider.value = e.target.value;
            updateLoanEMI();
        });
        amountSlider.addEventListener('input', (e) => {
            amountInput.value = e.target.value;
            updateLoanEMI();
        });
    }

    if (rateInput) rateInput.addEventListener('input', updateLoanEMI);
    if (tenureInput) tenureInput.addEventListener('input', updateLoanEMI);

    // Initial calculation run
    updateLoanEMI();
});
