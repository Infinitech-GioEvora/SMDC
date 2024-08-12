$(document).ready(function () {
    $.ajaxSetup({
        headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
        },
    })

    get_settings()

    $('.carousel-item').first().addClass('active')

    $('.inquiry_form').on('submit', function (e) {
        e.preventDefault();
        $(`.inquiry_form span`).remove();

        $.ajax({
            url: `/send-inquiry`,
            method: "POST",
            data: new FormData(this),
            contentType: false,
            processData: false,
            success: function (res) {
                toastr.success(res.msg);
                $('.inquiry_form').trigger("reset");
            },
            error: function (res) {
                var errors = res.responseJSON.errors;

                var inputs = $(`.inquiry_form input, .inquiry_form select, .inquiry_form textarea`)
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

    $('.viewing_form').on('submit', function (e) {
        e.preventDefault();
        $(`.viewing_form span`).remove();

        $.ajax({
            url: `/request-viewing`,
            method: "POST",
            data: new FormData(this),
            contentType: false,
            processData: false,
            success: function (res) {
                toastr.success(res.msg);
                $('.viewing_form').trigger("reset");
            },
            error: function (res) {
                // console.log(res)
                var errors = res.responseJSON.errors;

                var inputs = $(`.viewing_form input, .viewing_form select, .viewing_form textarea`)
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

function get_settings() {
    $.ajax( {
        method:"GET",
        url:'/settings',
        success: function(res) {
            var record = res.record

            if (record) {
                $(`.desc`).html(record.desc)
                $(`.logo`).attr('src', `/uploads/Logos/${record.logo}`)
                $(`.fb`).attr('onClick', `window.open("${record.fb}", "_blank")`)
                $(`.insta`).attr('onClick', `window.open("${record.insta}", "_blank")`)
                var emails = $('.email')
                for (var ele of emails) {
                    if ($(ele).prop('nodeName') == "LI") {
                        $(ele).find('span').html(record.email)
                    }
                    $(ele).attr('onClick', `location.href = "mailto:${record.email}"`)
                }
                var phones = $('.phone')
                for (var ele of phones) {
                    if ($(ele).prop('nodeName') == "LI") {
                        $(ele).find('span').html(record.phone)
                    }
                    $(ele).attr('onClick', `location.href = "tel:${record.email}"`)
                }
                $(`.viber`).attr('onClick', `location.href = "tel:${record.viber}"`)
                $(`.viber`).find('span').html(record.viber)
                $(`.whatsapp`).attr('onClick', `location.href = "tel:${record.whatsapp}"`)
                $(`.whatsapp`).find('span').html(record.whatsapp)
                $(`.disc`).html(record.disc)
            }
        }
    })
}