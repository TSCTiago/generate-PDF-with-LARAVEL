<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Generate PDF with Graph Using Snappy in Laravel - NiceSnippets.com</title>
    <style>
        .pie-chart {
            width: 600px;
            height: 400px;
            margin: 0 auto;
        }
    </style>
    {{-- make sure you are using http, and not https --}}
    <script type="text/javascript" src="https://www.google.com/jsapi"></script>

    <script type="text/javascript">
        function init() {
            google.load("visualization", "1.1", {
                packages: ["corechart"],
                callback: 'drawChart'
            });
        }

        function drawChart() {
            var data = new google.visualization.DataTable();
            data.addColumn('string', 'Tea');
            data.addColumn('number', 'Populartiy');
            data.addRows([
                ['Bourn Tea', 40],
                ['Lemon Tea', 22],
                ['Green Tea', 26],
                ['Black Tea', 35], // Below limit.
                ['Special Tea', 35] // Below limit.
            ]);

            var options = {
                title: 'Popularity of Types of Tea',
                sliceVisibilityThreshold: .2
            };

            var chart = new google.visualization.PieChart(document.getElementById('chart_div'));
            chart.draw(data, options);
        }
    </script>
</head>

<body onload="init()">
oi
<h2 style="text-align: center; ">Generate PDF with Graph Using Snappy in Laravel - NiceSnippets.com</h2>
<div id="chart_div" class="pie-chart"></div>

</body>
</html>