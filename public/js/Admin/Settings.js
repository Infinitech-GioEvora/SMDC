$(document).ready(function () {
    $.ajaxSetup({
        headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
        },
    })

    get()

    $(".upd_form").submit(function (e) {
        e.preventDefault();
        $(".upd_form span").remove();

        $.ajax({
            type: "POST",
            url: `/admin/${ent}/upd`,
            data: new FormData(this),
            contentType: false,
            processData: false,
            success: function (res) {
                toastr.success(res.msg);
                $(`.upd_form`).trigger("reset");
                get();
            },
            error: function (res) {
                // console.log(res);
                var errors = res.responseJSON.errors;

                var inputs = $(".upd_form input, .upd_form select, .upd_form textarea");
                for (var input of inputs) {
                    var name = $(input).attr("name");

                    if (name in errors) {
                        for (var error of errors[name]) {
                            var error_msg = $(`<span class='text-danger'>${error}</span>`);
                            error_msg.insertAfter($(input));
                        }
                    }
                }
            },
        })
    })

    $('.cancel_btn').click(function (e) { 
        get()
    });

    $(".upd_form input[name=logo]").change(function () { 
        var files = this.files
        if (files) {
            var reader = new FileReader()
            reader.onload = function () {
                $(".upd_form img[name=logo_prev]").attr("src", reader.result)
            }
            reader.readAsDataURL(files[0])
        }
    });
})

var ent = $(".ent").text().toLowerCase();

function get() {
    $.ajax({
        method: "GET",
        url: `/admin/${ent}/edit`,
        success: function (res) {
            var record = res.record;
            if (record) {
                var keys = ["logo", "desc", "fb", "insta", "email", "phone", "viber", "whatsapp", "disc"];

                for (var key of keys) {
                    if (key == "logo") {
                        $(`.upd_form img[name=${key}_prev]`).attr("src", `/uploads/Logos/${record["logo"]}`)
                    }
                    else {
                        $(`.upd_form input[name=${key}], .upd_form select[name=${key}], .upd_form textarea[name=${key}]`).val(record[key]);
                    }
                }
            }
        },
    })
}