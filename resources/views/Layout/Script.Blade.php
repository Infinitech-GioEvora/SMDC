<script src="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>


<script>
    function Call() {
        window.location = "tel:495898694"
    }
</script>

<script>
    function calculateLoan() {
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

<script>
    var currentTab = 0; // Current tab is set to be the first tab (0)
    showTab(currentTab); // Display the current tab

    function showTab(n) {
        // This function will display the specified tab of the form...
        var x = document.getElementsByClassName("tab");
        x[n].style.display = "block";
        //... and fix the Previous/Next buttons:
        if (n == 0) {
            document.getElementById("prevBtn").style.display = "none";
            document.getElementById("submitBtn").style.display = "none";
        } else {
            document.getElementById("prevBtn").style.display = "inline";
        }
        if (n == (x.length - 1)) {
            document.getElementById("nextBtn").style.display = "none";
            document.getElementById("submitBtn").style.display = "inline";

        } else {
            document.getElementById("nextBtn").innerHTML = "Next";
        }
        //... and run a function that will display the correct step indicator:
        fixStepIndicator(n)
    }

    function nextPrev(n) {
        // This function will figure out which tab to display
        var x = document.getElementsByClassName("tab");
        // Exit the function if any field in the current tab is invalid:
        if (n == 1 && !validateForm()) return false;
        // Hide the current tab:
        x[currentTab].style.display = "none";
        // Increase or decrease the current tab by 1:
        currentTab = currentTab + n;
        // if you have reached the end of the form...
        if (currentTab >= x.length) {
            // ... the form gets submitted:
            document.getElementById("regForm").submit();
            return false;
        }
        // Otherwise, display the correct tab:
        showTab(currentTab);
    }

    function validateForm() {
        // This function deals with validation of the form fields
        var x, y, i, valid = true;
        x = document.getElementsByClassName("tab");
        y = x[currentTab].getElementsByTagName("input");
        // A loop that checks every input field in the current tab:
        for (i = 0; i < y.length; i++) {
            // If a field is empty...
            if (y[i].value == "") {
                // add an "invalid" class to the field:
                y[i].className += " invalid";
                // and set the current valid status to false
                valid = false;
            }
        }
        // If the valid status is true, mark the step as finished and valid:
        if (valid) {
            document.getElementsByClassName("step")[currentTab].className += " finish";
        }
        return valid; // return the valid status
    }

    function fixStepIndicator(n) {
        // This function removes the "active" class of all steps...
        var i, x = document.getElementsByClassName("step");
        for (i = 0; i < x.length; i++) {
            x[i].className = x[i].className.replace(" active", "");
        }
        //... and adds the "active" class on the current step:
        x[n].className += " active";
    }
</script>


<script>
    const dropArea = document.querySelector(".drop_box");
    const input = dropArea.querySelector("input");
    const dragText = dropArea.querySelector("header h4");
    const supported = dropArea.querySelector(".supported");
    const bx = dropArea.querySelector(".bx");
    const previewImage = dropArea.querySelector("#previewImage");

    input.addEventListener('change', function() {
        const file = this.files[0];
        if (file) {
            const reader = new FileReader();
            reader.onload = function() {
                previewImage.style.display = 'block';
                dragText.style.display = 'none';
                supported.style.display = 'none';
                bx.style.display = 'none';
                previewImage.src = reader.result;
            }
            reader.readAsDataURL(file);
        } else {
            previewImage.style.display = 'none';
            dragText.style.display = 'block';
            supported.style.display = 'block';
        }
    });
</script>
