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

    $('.cancel_btn').click(function () { 
        get()
    });

    $(".upd_form input[name=logo]").change(function () { 
        var form = $(this).closest("form").attr("class")
        var files = this.files
        $(`.${form} .logo_prev`).empty()

        for (var file of files) {
            var img =   `
                            <div class="col d-flex justify-content-center align-items-center">
                                <img src="${URL.createObjectURL(file)}">
                            </div>
                        `
            $(`.${form} .logo_prev`).append(img)
        }
    })
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
                        $(`.upd_form .${key}_prev`).empty()
                        $(`.upd_form .${key}_prev`).append(`
                                                                <div class="col d-flex justify-content-center align-items-center">
                                                                    <img src="/uploads/Logos/${record[key]}">
                                                                </div>
                                                          `)
                    }
                    else {
                        $(`.upd_form input[name=${key}], .upd_form select[name=${key}], .upd_form textarea[name=${key}]`).val(record[key]);
                    }
                }
            }
        },
    })
}