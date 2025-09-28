$(document).ready(function() {
     let options = {
        chart: {
            type: 'area',
            height: 350
        },
        series: [
            { name: "Users", data: [31, 40, 28, 51, 42, 109, 100] }
        ],
        xaxis: { categories: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul"] }
    };

    let chart = new ApexCharts(document.querySelector("#area-chart"), options);
    chart.render();
});