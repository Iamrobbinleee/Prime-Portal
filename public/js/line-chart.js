$(document).ready(function() {
     let options = {
        chart: {
            type: 'line',
            height: 350
        },
        series: [{
            name: 'Sales',
            data: [10, 41, 35, 51, 49, 62, 69]
        }],
        xaxis: {
            categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul']
        }
    };

    let chart = new ApexCharts(document.querySelector("#line-chart"), options);
    chart.render();
});