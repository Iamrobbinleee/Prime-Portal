$(document).ready(function() {
     let options = {
        chart: {
            type: 'bar',
            height: 350
        },
        plotOptions: { bar: { horizontal: true } },
        series: [
            { name: "Profit", data: [76, 85, 101, 98, 87, 105, 91] }
        ],
        xaxis: { categories: ["2015", "2016", "2017", "2018", "2019", "2020", "2021"] }
    };

    let chart = new ApexCharts(document.querySelector("#horizontal-bar-chart"), options);
    chart.render();
});