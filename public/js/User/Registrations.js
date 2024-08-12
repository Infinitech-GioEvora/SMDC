$(document).ready(function () {
    $.ajaxSetup({
        headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
        },
    })

    $("select[name=cat]").val('')

    $("select[name=cat]").on("change", function() {
        var type = "select[name=type]"
        $(type).empty()

        var sale = ["Pre-selling", "RFO"]
        var lease = ["Residential", "Commercial"]
        
        if ($(this).val() == 'For Sale') {
            for (var opt of sale) {
                var option = $('<option>').text(opt)
                $(type).append(option)
            }
        }
        else if ($(this).val() == 'For Lease') {
            for (var opt of lease) {
                var option = $('<option>').text(opt)
                $(type).append(option)
            }
        }
    })

    $('.registration_form').on('submit', function (e) {
        e.preventDefault()

        $.ajax({
            url: `/send-registration`,
            method: "POST",
            data: new FormData(this),
            contentType: false,
            processData: false,
            success: function (res) {
                toastr.success(res.msg);
                $('.registration_form').trigger("reset");
                showTab(0)
            },
            error: function (res) {
                var errors = res.responseJSON.errors;

                var inputs = $(`.registration_form input, .registration_form select, .registration_form textarea`)
                for (var input of inputs) {
                    var name = $(input).attr("name");

                    if (name in errors) {
                        for (var error of errors[name]) {
                            var error_msg = $(`<span class='text-danger'>${error}</span>`)
                            error_msg.insertAfter($(input));
                        }
                    }
                }
            },
        })
    })
})

var currentTab = 0;
showTab(currentTab); 

function showTab(n) {
    var x = document.getElementsByClassName("tab");
    for (ele of x) { ele.style.display = "none" }
    x[n].style.display = "block";


    if (n == 0) {
        document.getElementById("prevBtn").style.display = "none";
        document.getElementById("submitBtn").style.display = "none";
        document.getElementById("nextBtn").style.display = "inline";
    }
    else if (n == (x.length - 1)) {
        document.getElementById("prevBtn").style.display = "inline";
        document.getElementById("submitBtn").style.display = "inline";
        document.getElementById("nextBtn").style.display = "none";
    }
    else {
        document.getElementById("prevBtn").style.display = "inline";
        document.getElementById("nextBtn").style.display = "inline";
        document.getElementById("submitBtn").style.display = "none";
    }

    StepIndicator(n)
}

function nextPrev(n) {
    var x = document.getElementsByClassName("tab");
    x[currentTab].style.display = "none";
    currentTab = currentTab + n;
    showTab(currentTab);
}

function StepIndicator(n) {
    var i, x = document.getElementsByClassName("step");
    for (i = 0; i < x.length; i++) {
        x[i].className = x[i].className.replace(" active", "");
    }
   
    x[n].className += " active";
}