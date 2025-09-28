$(document).ready(function() {
     let options = {
        chart: {
            type: 'pie',
            height: 350
        },
        series: [44, 55, 13, 43, 22],
        labels: ['Team A', 'Team B', 'Team C', 'Team D', 'Team E']
    };

    let chart = new ApexCharts(document.querySelector("#pie-chart"), options);
    chart.render();
});