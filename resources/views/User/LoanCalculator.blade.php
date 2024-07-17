@extends('Layout.User.Layout')

@section('title', 'Loan Calculator')

@section('content')
    <main>
        <section class="hero" style="position: relative;">
            <img src="../img/Bloom-Residences.jpg" alt="">

            <div class="loan-form">
                <div class="container">
                    <div class="loanForm">
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-6 mb-6">
                                    <div class="form-group">
                                        <label htmlFor="">Enter Amount</label>
                                        <input type="text" placeholder='00.00' class='form-control' value="" id="loanAmount" />
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label htmlFor="">Select Interest</label>
                                        <select class='form-control' value="" id="loanInterest">
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
                                <div class="col-md-3">
                                    <button class='btn btn-calculate' onClick="calculateLoan()">Calculate</button>
                                </div>
                                <div class="col-md-12 d-none" id="result">
                                    <table class="table table-bordered text-center">
                                        <thead>
                                            <tr>
                                                <th scope="col">Years</th>
                                                <th scope="col">Monthly Payment</th>
                                                <th scope="col">Total Payment</th>
                                                <th scope="col">Total Interest</th>
                                            </tr>
                                        </thead>
                                        <tbody id="loan-details" >
                                            <!-- Dynamic rows will be added here -->
                                        </tbody>
                                    </table>

                                    <p> <strong>DISCLAIMER: </strong>Please note that computation is based on diminishing balance. Indicative interest rate is still subject to company approval based on prevailing market rate.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>





    </main>
@endsection

@section('scripts')
    @parent

    <script>
        function calculateLoan() {
            var result = document.getElementById('result')
            result.classList.remove('d-none')
            var loanAmount = document.getElementById('loanAmount').value;
            var loanInterest = document.getElementById('loanInterest').value;
    
            // console.log(loanInterest);
    
            if (!loanAmount || isNaN(loanAmount) || parseFloat(loanAmount) <= 0) {
                alert('Please enter a Valid Amount.');
                return;
    
            } else {
                var monthlyRate = (loanInterest / 100) / 12;
                var months = 12;
                var loan = parseFloat(loanAmount);
    
                let LoanDetails = [];
    
                for (let i = 1; i <= 5; i++) {
                    const monthsCount = i * months;
                    const monthlyPayment = (loan * monthlyRate) / (1 - Math.pow(1 + monthlyRate, -monthsCount));
                    const totalPayment = monthlyPayment * monthsCount;
                    const totalInterest = totalPayment - loan;
    
                    LoanDetails.push({
                        years: `${i} Year`,
                        monthlyPayment: monthlyPayment.toFixed(2),
                        totalPayment: totalPayment.toFixed(2),
                        totalInterest: totalInterest.toFixed(2)
                    });
                }
    
                function populateTable(details) {
                    const tableBody = document.getElementById('loan-details');
                    tableBody.innerHTML = ''; // Clear any existing rows
    
                    details.forEach(detail => {
                        const row = document.createElement('tr');
    
                        const yearCell = document.createElement('td');
                        yearCell.textContent = detail.years;
                        row.appendChild(yearCell);
    
                        const monthlyPaymentCell = document.createElement('td');
                        monthlyPaymentCell.textContent = detail.monthlyPayment;
                        row.appendChild(monthlyPaymentCell);
    
                        const totalPaymentCell = document.createElement('td');
                        totalPaymentCell.textContent = detail.totalPayment;
                        row.appendChild(totalPaymentCell);
    
                        const totalInterestCell = document.createElement('td');
                        totalInterestCell.textContent = detail.totalInterest;
                        row.appendChild(totalInterestCell);
    
                        tableBody.appendChild(row);
                    });
                }
    
                // Populate the table with loan details
                populateTable(LoanDetails);
    
            }
    
    
        };
    </script>
@endsection