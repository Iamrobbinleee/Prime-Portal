$(document).ready(function() {
     let options = {
        chart: {
            type: 'donut',
            height: 350
        },
        series: [44, 55, 41, 17, 15],
        labels: ['Apples', 'Bananas', 'Grapes', 'Oranges', 'Berries']
    };

    let chart = new ApexCharts(document.querySelector("#donut-chart"), options);
    chart.render();
});