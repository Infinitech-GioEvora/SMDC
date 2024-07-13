$(document).ready(function () {
    $.ajaxSetup({
        headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
        },
    })

    all();

    $(".add_modal").on("show.bs.modal", function (e) {
        $(".add_form span").remove();
    })

    $(".add_form").submit(function (e) {
        e.preventDefault();
        $(".add_form span").remove();

        $.ajax({
            url: `/admin/${ent}/add`,
            method: "POST",
            data: new FormData(this),
            contentType: false,
            processData: false,
            success: function (res) {
                alert(res.msg)
                all()
                $(`.add_form`).trigger("reset");
                $(`.add_modal`).modal("hide");
            },
            error: function (res) {
                console.log(res)
                var errors = res.responseJSON.errors;

                var inputs = $(".add_form input, .add_form select, .add_form textarea")
                for (input of inputs) {
                    var name = $(input).attr("name");

                    if (name in errors) {
                        for (error of errors[name]) {
                            var error_msg = $(`<span class='text-danger'>${error}</span>`)
                            error_msg.insertAfter($(input));
                        }
                    }
                }
            },
        })
    })

    $(".upd_modal").on("show.bs.modal", function (e) {
        $(".upd_form span").remove();
    })

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
                alert(res.msg)
                all();
                $(`.upd_form`).trigger("reset");
                $(`.upd_modal`).modal("hide");
            },
            error: function (res) {
                // console.log(res);
                var errors = res.responseJSON.errors;

                var inputs = $(".upd_form input, .upd_form select, .upd_form textarea");
                for (input of inputs) {
                    var name = $(input).attr("name");

                    if (name in errors) {
                        for (error of errors[name]) {
                            var error_msg = $(`<span class='text-danger'>${error}</span>`);
                            error_msg.insertAfter($(input));
                        }
                    }
                }
            },
        })
    })

    $(".del_form").submit(function (e) {
        var id = $(".del_form input[name=id]").val();

        e.preventDefault();
        $.ajax({
            type: "GET",
            url: `/admin/${ent}/del/${id}`,
            success: function (res) {
                $(".del_form input[name=id]").val('');

                alert(res.msg)
                all();
                $(`.del_modal`).modal("hide");
            },
            error: function (res) {

            },
        });
    });

    $(document).on("click", ".edit_btn", function () {
        var id = $($(this).parents()[1]).data("id")

        $(".upd_form input[name=id]").val(id);
        $(`.upd_modal`).modal("show");

        $.ajax({
            method: "GET",
            url: `/admin/${ent}/edit/${id}`,
            success: function (res) {
                var record = res.record;

                var keys = [
                    "name",
                    "img",
                    "type",
                ];

                for (key of keys) {
                    $(`.upd_form input[name=${key}], .upd_form select[name=${key}]`).val(record[key]);
                }
            },
        })
    })

    $(document).on("click", ".del_btn", function () {
        var id = $($(this).parents()[1]).data("id");

        $(".del_form input[name=id]").val(id);
        $(`.del_modal`).modal("show");
    });
})

var ent = $(".ent").text().toLowerCase();

function all() {
    $(".tbl_div").empty();

    $.ajax({
        type: "POST",
        url: `/admin/${ent}`,
        success: function (res) {
            var records = res.records;

            var tbl = $("<table>").addClass("w-100 overflow-auto records_tbl")

            var thead = $("<thead>");
            var thr = $("<tr>");

            var cols = ["Name", "Image", "Type", "Action"];
            for (col of cols) {
                thr.append($("<th>").text(col))
            }

            thead.append(thr);
            tbl.append(thead);

            var tbody = $("<tbody>");
            if (records.length > 0) {
                for (record of records) {
                    var vals = [record.name, record.img, record.type];

                    var tr = $("<tr>").data("id", record.id)
                    for (val of vals) {
                        tr.append($("<td>").html(val));
                    }

                    tr.append($("<td>").html(
                    `
                        <i class='fa fa-pen-to-square mr-2 edit_btn' title='Edit' style='cursor:pointer;'></i>
                        <i class='fa-solid fa-trash del_btn' title='Delete' style='cursor:pointer;'></i>
                    `))
                    tbody.append(tr);
                }
            } else {
                var tr = $("<tr>");
                var td = $("<td>").addClass('text-center').attr({colspan: cols.length}).text("No results found.");

                tr.append(td);
                tbody.append(tr);
            }

            tbl.append(tbody);
            $(".tbl_div").append(tbl);
        },
        error: function (res) {
            console.log(res);
        },
    });
}