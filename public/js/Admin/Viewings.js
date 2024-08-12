$(document).ready(function () {
    $.ajaxSetup({
        headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
        },
    })

    all();

    $(".add_modal").on("show.bs.modal", function (e) {
        $(".add_form span").remove();
        
        get_related("add", "")
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
                toastr.success(res.msg);
                all()
                $(`.add_form`).trigger("reset");
                $(`.add_modal`).modal("hide");
            },
            error: function (res) {
                var errors = res.responseJSON.errors;

                var inputs = $(".add_form input, .add_form select, .add_form textarea")
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
                toastr.success(res.msg);
                all();
                $(`.upd_form`).trigger("reset");
                $(`.upd_modal`).modal("hide");
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

    $(".del_form").submit(function (e) {
        var id = $(".del_form input[name=id]").val();

        e.preventDefault();
        $.ajax({
            type: "GET",
            url: `/admin/${ent}/del/${id}`,
            success: function (res) {
                $(".del_form input[name=id]").val('');

                toastr.success(res.msg);
                all();
                $(`.del_modal`).modal("hide");
            },
            error: function (res) {

            },
        });
    });

    $(document).on("click", ".edit_btn", function () {
        var tr = $(this).closest('tr')
        var id = ""
        tr.data('id') == undefined ? id = tr.prev().data('id') : id = tr.data('id')

        $(".upd_form input[name=id]").val(id);
        $(`.upd_modal`).modal("show");

        $.ajax({
            method: "GET",
            url: `/admin/${ent}/edit/${id}`,
            success: function (res) {
                var record = res.record;
                var keys = ["name", "phone", "email", "date", "time", "msg", "status", "property_id"];

                for (var key of keys) {
                    if (key == "property_id") {
                        get_related("upd", record[key])
                    }
                    else {
                        $(`.upd_form input[name=${key}], .upd_form select[name=${key}], .upd_form textarea[name=${key}]`).val(record[key])
                    }
                }
            },
        })
    })

    $(document).on("click", ".del_btn", function () {
        var tr = $(this).closest('tr')
        var id = ""
        tr.data('id') == undefined ? id = tr.prev().data('id') : id = tr.data('id')

        $(".del_form input[name=id]").val(id);
        $(`.del_modal`).modal("show");
    });

    $(document).on("click", ".stat_btn", function () {
        var tr = $(this).closest('tr')
        var id = ""
        tr.data('id') == undefined ? id = tr.prev().data('id') : id = tr.data('id')

        var status = $(this).html().toLowerCase()
        $.ajax({
            method: "GET",
            url: `/admin/${ent}/change/${id}/${status}`,
            success: function (res) {
                toastr.success(res.msg);
                all();
            },
            error: function (res) {
                // console.log(res)
            }
        })
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

            var tbl = $("<table>").addClass("table records_tbl")

            var thead = $("<thead>");
            var thr = $("<tr>");

            var cols = ["Name", "Phone", "Email", "Property", "Date", "Time", "Message", "Status", "Action"];
            for (var col of cols) {
                thr.append($("<th>").text(col))
            }

            thead.append(thr);
            tbl.append(thead);

            var tbody = $("<tbody>");

            var stat_btn = ""
            var action = ""

            if (records.length > 0) {
                for (var record of records) {
                    var keys = ["name", "phone", "email", "property_id", "date", "time", "msg", "status", "action"]
                    var tr = $("<tr>").data("id", record.id)

                    for (var key of keys) {
                        var html = ""
                        if (key == "action") {
                            html = action
                        }
                        else if (key == "property_id") {
                            html = record['property']['name']
                        }
                        else if (key == "date") {
                            var date = new Date(record[key])
                            date = date.toLocaleString('default', {month: 'long', day: 'numeric', year: 'numeric'})
                            html = date
                        }
                        else if (key == "time") {
                            var time = new Date(`01/01/2024 ${record[key]}`)
                            time = time.toLocaleTimeString('en-US', { hour12: true })
                            html = time
                        }
                        else if (key == "status") {
                            var bg = ""
                            if (record[key] == "Pending") {
                                bg = "warning"
                                stat_btn = 
                                            `
                                                <a href="javascript:;" class="dropdown-item border-bottom border-2 del_btn">Delete</a>
                                                <a href="javascript:;" class="dropdown-item stat_btn">Accept</a>
                                                <a href="javascript:;" class="dropdown-item stat_btn">Decline</a>
                                            `
                            }
                            else {
                                if (record[key] == "Accepted") {bg = "success"}
                                else if (record[key] == "Declined") {bg = "danger"}
                                stat_btn = `<a href="javascript:;" class="dropdown-item del_btn">Delete</a>`
                            }

                            action = set_action(stat_btn)
                            html = `<span class="badge bg-${bg}">${record[key]}</span>`
                        }
                        else {
                            html = record[key]
                        }

                        tr.append($("<td>").addClass('text-truncate').html(html))
                    }
                    tbody.append(tr);
                }
            } 

            tbl.append(tbody);
            $(".tbl_div").append(tbl);

            var data_table = $('.records_tbl').DataTable({
                responsive: true,
                columnDefs: [
                    {responsivePriority: 1, targets: -1},
                    {responsivePriority: 1, targets: -2},
                ],
                inlineEditing: true,
                buttons: [
                    'print', 'copy', 'csv', 'pdf'
                ],
                "language": {
                    "search": "Search: ",
                    "searchPlaceholder": "Search here..."
                }
            })

            $('.print_btn').on('click', function() {
                data_table.button('.buttons-print').trigger();
            });
            $('.copy_btn').on('click', function() {
                data_table.button('.buttons-copy').trigger();
            });
    
            $('.excel_btn').on('click', function() {
                data_table.button('.buttons-csv').trigger();
            });
    
            $('.pdf_btn').on('click', function() {
                data_table.button('.buttons-pdf').trigger();
            });
        },
        error: function (res) {
            console.log(res);
        },
    });
}

function get_related(form, value) {
    var select = `.${form}_form select[name=property_id]`
    $(select).empty()

    $.ajax({
        type: "GET",
        url: `/admin/${ent}/get-related`,
        success: function (res) {
            var records = res.records

            for (var record of records) {
                var option = $("<option>").val(record.id).html(record.name)
                $(select).append(option)
            }
            $(select).val(value)
        },
        error: function (res) {

        }
    })
}

function set_action(stat_btn) {
    var action = 
                    `
                        <div class="d-inline-block text-nowrap">                
                            <button class="btn btn-sm btn-icon dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                <i class="bx bx-dots-vertical-rounded"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-end m-0">
                                <a href="javascript:;" class="dropdown-item edit_btn">Edit</a>
                                ${stat_btn}
                            </div>
                        </div>
                    `

    return action
}