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
                $('.email').attr('onClick', `location.href = "mailto:${record.email}"`)
                $('.phone').attr('onClick', `location.href = "tel:${record.phone}"`)
                $(`.viber`).attr('onClick', `location.href = "tel:${record.viber}"`)
                $(`.whatsapp`).attr('onClick', `location.href = "tel:${record.whatsapp}"`)
                $(`.disc`).html(record.disc)
            }
        }
    })
})