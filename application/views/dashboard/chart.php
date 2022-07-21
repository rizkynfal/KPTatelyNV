<div class="shadow p-2 rounded m-2 ">
    <div class="chart-container">
        <div class="m-5">
            <div id="GoogleLineChart" style="height: 400px; width: 100%"></div>
        </div>
        <div class="mb-5">
            <div id="GoogleBarChart" style="height: 400px; width: 100%"></div>
        </div>
    </div>
    </body>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script>
        google.charts.load('current', {
            'packages': ['corechart', 'bar']
        });
        google.charts.setOnLoadCallback(drawLineChart);
        google.charts.setOnLoadCallback(drawBarChart);
        // Line Chart
        function drawLineChart() {
            var data = new google.visualization.DataTable();
            data.addColumn('string', 'Tanggal');
            data.addColumn('number', 'pompa 1');
            data.addColumn('number', 'pompa 2');
            data.addRows([
                <?php $currentdate = false;
                $pompa1 = 0;
                $pompa2 = 0;
                foreach ($chart_data as $row) {
                    $pompa1 = $row['average_pompa_1'];
                    $pompa2 = $row['average_pompa_2'];
                    if ($row['tanggal'] != $currentdate) {
                        $currentdate = $row['tanggal'];
                        echo "['" . (int)date_format(date_create($row['tanggal']), 'd') . "'," .  $pompa1 . "," .  $pompa2 . "],";
                    }
                    if ($row['tanggal'] == $currentdate) {
                        if ($pompa1 < $row['average_pompa_1'] or $pompa2 < $row['average_pompa_2']) {
                            $pompa1 = $row['average_pompa_1'];
                            $pompa2 = $row['average_pompa_2'];
                            echo "['" . "'," .  $pompa1 . "," .  $pompa2 . "],";
                        }
                        
                    }
                } ?>
            ]);
            var options = {
                annotations: {
                    textStyle: {
                        fontSize: 18,
                        bold: true,
                        italic: true,
                        // The color of the text.
                        color: '#871b47',
                        // The color of the text outline.
                        auraColor: '#d799ae',
                        // The transparency of the text.
                        opacity: 0.8
                    }
                },
                hAxis: {
                    title: 'Time'
                },
                vAxis: {
                    title: 'Popularity'
                },
                colors: ['#a52714', '#097138']
            };

            var chart = new google.visualization.LineChart(document.getElementById('GoogleLineChart'));
            chart.draw(data, options);
        }


        // Bar Chart
        google.charts.setOnLoadCallback(showBarChart);

        function drawBarChart() {
            var data = google.visualization.arrayToDataTable([
                ['Tanggal', 'average_pompa_1', 'average_pompa_2'],
                <?php $currentdate = false;
                $pompa1 = 0;
                $pompa2 = 0;
                $time = 0;
                foreach ($chart_data as $row) {

                    if ($row['tanggal'] != $currentdate) {
                        $currentdate = $row['tanggal'];
                        echo "['" . (int)date_format(date_create($row['tanggal']), 'd') . "'," .  $pompa1 . "," .  $pompa2 . "],";
                    }
                    if ($row['tanggal'] == $currentdate) {
                        if ($pompa1 < $row['average_pompa_1'] or $pompa2 < $row['average_pompa_2']) {
                            $pompa1 = $row['average_pompa_1'];
                            $pompa2 = $row['average_pompa_2'];
                            echo "['" . "'," .  $pompa1 . "," .  $pompa2 . "],";
                        }
                        echo "['" . "'," .  $pompa1 . "," .  $pompa2 . "],";
                    }
                } ?>
            ]);
            var view = new google.visualization.DataView(data);
            view.setColumns([0, 1,
                {
                    calc: "stringify",
                    sourceColumn: 1,
                    type: "string",
                    role: "annotation"
                },
                2
            ]);
            var options = {
                title: ' Bar chart products sell wise',
                is3D: true,
                bar: {
                    groupWidth: "95%"
                },
                legend: {
                    position: "none"
                },
            };
            var chart = new google.visualization.ColumnChart(document.getElementById('GoogleBarChart'));
            chart.draw(view, options);
        }
    </script>