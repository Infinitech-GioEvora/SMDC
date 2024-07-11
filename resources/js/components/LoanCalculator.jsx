import React, { useState } from 'react';
import ReactDOM from 'react-dom';

function LoanCalculator() {
    const [loanAmount, setLoanAmount] = useState('');
    const [interestRate, setInterestRate] = useState(0);
    const [loanDetails, setLoanDetails] = useState([]);

    const handleAmountChange = (event) => {
        setLoanAmount(event.target.value);
    };

    const handleInterestChange = (event) => {
        setInterestRate(parseFloat(event.target.value));
    };

    const calculateLoan = () => {
        // Validate loan amount
        if (!loanAmount || isNaN(loanAmount) || parseFloat(loanAmount) <= 0) {
            alert('Please enter a valid loan amount.');
            return;
        }

        // Calculate monthly payment
        const monthlyRate = (interestRate / 100) / 12;
        const months = 12;
        const loan = parseFloat(loanAmount);

        let newLoanDetails = [];

        for (let i = 1; i <= 5; i++) {
            const monthsCount = i * months;
            const monthlyPayment = (loan * monthlyRate) / (1 - Math.pow(1 + monthlyRate, -monthsCount));
            const totalPayment = monthlyPayment * monthsCount;
            const totalInterest = totalPayment - loan;

            newLoanDetails.push({
                years: `${i} Year`,
                monthlyPayment: monthlyPayment.toFixed(2),
                totalPayment: totalPayment.toFixed(2),
                totalInterest: totalInterest.toFixed(2)
            });
        }

        // Update state
        setLoanDetails(newLoanDetails);
    };

    return (
        <>
            <div className="loanForm">
                <div className="col-md-12">
                    <div className="row">
                        <div className="col-md-6 mb-6">
                            <div className="form-group">
                                <label htmlFor="">Enter Amount</label>
                                <input type="text" placeholder='00.00' className='form-control' value={loanAmount} onChange={handleAmountChange} />
                            </div>
                        </div>
                        <div className="col-md-3">
                            <div className="form-group">
                                <label htmlFor="">Select Interest</label>
                                <select className='form-control' value={interestRate} onChange={handleInterestChange}>
                                    <option value="0">0%</option>
                                    <option value="6">6%</option>
                                    <option value="7">7%</option>
                                    <option value="8">8%</option>
                                    <option value="9">9%</option>
                                    <option value="10">10%</option>
                                    <option value="11">11%</option>
                                    <option value="12">12%</option>
                                    <option value="13">13%</option>
                                    <option value="14">14%</option>
                                </select>
                            </div>
                        </div>
                        <div className="col-md-3">
                            <button className='btn btn-calculate ' onClick={calculateLoan}>Calculate</button>
                        </div>
                        <div className="col-md-12">
                            <table className="table table-bordered">
                                <thead>
                                    <tr>
                                        <th scope="col">Years</th>
                                        <th scope="col">Monthly Payment</th>
                                        <th scope="col">Total Payment</th>
                                        <th scope="col">Total Interest</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    {loanDetails.map((detail, index) => (
                                        <tr key={index}>
                                            <th scope="row">{detail.years}</th>
                                            <td>{detail.monthlyPayment}</td>
                                            <td>{detail.totalPayment}</td>
                                            <td>{detail.totalInterest}</td>
                                        </tr>
                                    ))}
                                </tbody>
                            </table>

                            <p> <strong>DISCLAIMER: </strong>Please note that computation is based on diminishing balance. Indicative interest rate is still subject to company approval based on prevailing market rate.</p>
                        </div>
                    </div>
                </div>
            </div>
        </>
    )
}

if (document.getElementById('loan')) {
    ReactDOM.render(<LoanCalculator />, document.getElementById('loan'));
}

export default LoanCalculator;
