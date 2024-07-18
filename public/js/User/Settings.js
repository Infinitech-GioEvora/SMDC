$(document).ready(function () {
    $.ajaxSetup({
        headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
        },
    })

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
})