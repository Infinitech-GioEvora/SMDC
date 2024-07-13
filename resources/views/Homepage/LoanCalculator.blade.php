<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loan Calculator | SMDC Condominium | SMDC Condo</title>

    @include('Layout/Header')

</head>


<body>

    <!-- Navigation Bar -->
    @include('Layout/Navigation')

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
                                    <button class='btn btn-calculate ' onClick="calculateLoan()">Calculate</button>
                                </div>
                                <div class="col-md-12">
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


    <!-- Footer -->
    @include('Layout/Footer')

    <!-- Script -->
    @include('Layout/script')
</body>

</html>