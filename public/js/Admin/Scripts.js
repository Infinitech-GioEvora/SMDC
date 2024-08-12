$(document).ready(function () {
    $.ajaxSetup({
        headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
        },
    })

    $.ajax({
        url: "/admin/chart-data/",
        method: 'GET',
        success: function (res) {
           display_charts(res)
        },
        error: function (res) {

        },
    })    
})

function display_charts(res) {
    console.log(res)

    var keys = ["Properties", "Inquiries", "Viewings", "Registrations"]
    var counts = $('.count')

    for (var count of counts) {
        for (var key of keys) {
            if ($(count).attr("title").includes(key)) {
                $(count).find("h3").html(res[key.toLowerCase()])
            }
        }
    }


    
    var options = {
        series: Object.values(res.props_cats),
        chart: {
        type: 'pie',
      },
      labels: ['For Sale', 'For Lease'],
    };

    var chart = new ApexCharts(document.querySelector(".props_cats"), options);
    chart.render();



    var options = {
      series: [{
        name: 'Amenities',
        data: res.props_af.amens,
      }, {
        name: 'Features',
        data: res.props_af.feats,
      },],
      chart: {
        type: 'bar',
      },
      plotOptions: {
        bar: {
          horizontal: false,
          columnWidth: '70%',
          endingShape: 'rounded'
        },
      },
      dataLabels: {
        enabled: false
      },
      xaxis: {
        categories: res.props_af.names,
      },
    };

    var chart = new ApexCharts(document.querySelector(".props_af"), options);
    chart.render();



    var options = {
        series: [{
        data: Object.values(res.props_views)
      }],
        chart: {
        type: 'bar',
      },
      plotOptions: {
        bar: {
          borderRadius: 4,
          borderRadiusApplication: 'end',
          horizontal: true,
        }
      },
      dataLabels: {
        enabled: false
      },
      xaxis: {
        categories: Object.keys(res.props_views),
      },
    };

  var chart = new ApexCharts(document.querySelector(".props_views"), options);
  chart.render();
}
