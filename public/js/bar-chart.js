$(document).ready(function() {
     let options = {
        chart: {
            type: 'bar',
            height: 350
        },
        series: [
            { name: "Orders", data: [44, 55, 41, 64, 22, 43, 21] }
        ],
        xaxis: { categories: ["Mon", "Tue", "Wed", "Thu", "Fri", "Sat", "Sun"] }
    };

    let chart = new ApexCharts(document.querySelector("#bar-chart"), options);
    chart.render();
});