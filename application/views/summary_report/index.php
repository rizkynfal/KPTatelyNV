<div class="table-responsive mb-4">
    <table class="table table-success table-bordered table-striped text-dark table-hover  border-dark caption-top " style="font-size: 12px;">
        <caption class=" text-center text-secondary fs-5 ms-4">Summary Daily Report</caption>
        <thead class="text-center">
            <tr>
                <th rowspan="2">Remaks</th>
                <th rowspan="2">Gross</th>
                <th colspan="2">Water</th>
                <th rowspan="2">Net Oil</th>
                <th rowspan="2">Bs&W<br>%</th>
            </tr>
            <tr>
                <th>Produced</th>
                <th>brine</th>
            </tr>
            <tr>
                <th>Opening Stock (Tank)</th>
                <?php $openingStockWater = 0;
                $openingStockOil = 0;
                foreach ($daily_report as $data) {
                    if ($data->tanggal == date_format(date_sub(date_create('now'), date_interval_create_from_date_string("1 days")), 'Y-F-d')) { ?>
                        <td> <?php echo $data->total_all ?></td>
                        <td> <?php echo $data->total_bersih_water ?></td>
                        <td> </td>
                        <td> <?php echo $data->total_bersih_oil ?></td>
                        <td> <?php echo ((float)$data->total_bersih_water / (float)$data->total_all) * 100 ?>%</td>
                <?php $openingStockWater =  $data->total_bersih_water;
                        $openingStockOil = $data->total_bersih_oil;
                    }
                } ?>
            </tr>
            <tr>
                <th>Production</th>
                <?php foreach ($daily_report as $data) {
                    if ($data->tanggal == date_format((date_create('now')), 'Y-F-d')) { ?>
                        <td> <?php echo $data->total_all ?></td>
                        <td> <?php echo $data->total_bersih_water ?></td>
                        <td> </td>
                        <td> <?php echo $data->total_bersih_oil ?></td>
                        <td> <?php echo ((float)$data->total_bersih_water / (float)$data->total_all) * 100 ?>%</td>
                <?php       }
                } ?>
            </tr>
            <tr>
                <th>Pumping To WIP Budi 3</th>
            </tr>
            <tr>
                <th>Transfer To Ramba & Tempino</th>
            </tr>
            <tr>
                <th>Closing Stock(Tank)</th>
            </tr>

        </thead>
        <tbody class="text-start">
            <?php date_default_timezone_set("Asia/Jakarta");
            $date = date_create();
            $time = $date->format('Y-m-d');
            foreach ($storage_tank as $data) {
                $dateData = date_create($data->time);
                if (date_format($dateData, 'Y-m-d') == $time) {
                }
            } ?>
            <tr>
            </tr>
        </tbody>
    </table>
</div>
<div class="table-responsive">
    <table class="table table-bordered table-success table-striped table-hover text-center border-dark caption-top " style="font-size: 12px;">
        <thead>
            <tr>
                <th></th>
                <th>Production Today</th>
                <th>2022 Cummulative Production</th>
                <th>Total Production</th>
            </tr>
            <tr>
                <th>Oil</th>
            </tr>
            <tr>
                <th>Water</th>
            </tr>
            <tr>
                <th>Gas</th>
            </tr>
            <tr>
                <th>GOR</th>
            </tr>
            <tr>
                <th>Gas In Used</th>
            </tr>
            <tr>
                <th>Gas Flare</th>
            </tr>
        </thead>
        <tbody>

        </tbody>
    </table>
</div>