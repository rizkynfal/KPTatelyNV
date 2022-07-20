<section class="collapse show" id="tableProdCal">
    <div class="row">
        <p class=" text-start text-secondary fs-5 ms-4">
            <br><?php echo $tanggal = date('d-F-Y') ?><br>
            <?php if ($_SESSION['status'] == 'login') {
                echo "Reported by : ", $_SESSION["nama_user"];
            } else {
                echo "admin";
            } ?>
        </p>
        <div class="col">
            <div class="table-responsive">

                <table class="table table-bordered table-hover text-center border-dark caption-top " style="font-size: 12px;">
                    <caption class=" text-start text-secondary fs-5 ms-4">
                        Test Tank A
                    </caption>
                    <thead>
                        <tr>
                            <th rowspan="3">Time</th>
                            <th colspan="7">Test Tank A <br> Tested Well <?php
                                                                            $namabudi = array();
                                                                            $i = 0;
                                                                            $date = new DateTime();
                                                                            $currentTime = $date->format('Y-m-d');
                                                                            foreach ($storage_tank as $data) {
                                                                                $p = date_create($data->time);
                                                                                if ($data->nama_tank == "Tank A" &&  $p->format('Y-m-d') == $currentTime) {
                                                                                    $namabudi[$i] = $data->nama_budi;
                                                                                    $i++;
                                                                                } else {
                                                                                    $namabudi[$i]  = "-";
                                                                                }
                                                                            }
                                                                            echo current($namabudi); ?></th>

                        </tr>

                        <tr>
                            <th colspan="4">Production</th>
                            <th colspan="2">Pump</th>

                        </tr>
                        <tr>
                            <th>Oil in cm</th>
                            <th>Oil in bbls</th>
                            <th>Water in cm</th>
                            <th>Water in bbls</th>
                            <th>Oil in bbls</th>
                            <th>Water in bbls</th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php $totalOilbbl = 0;
                        $totalWtrbbl = 0;
                        $totaloilpmp = 0;
                        $totalwtrpmp = 0;
                        $i = 0;
                        $date = new DateTime();
                        $currentTime = $date->format('Y-m-d');
                        foreach ($storage_tank as $data) {
                            $dateNow = date_create($data->time);
                        ?> <tr>
                                <?php if ($data->nama_tank == "Tank A" && $dateNow->format('Y-m-d') == $currentTime) {
                                    $date = date_create($data->time);  ?>
                                    <td><?php echo $date->format('H:i:s') ?></td>
                                    <td><?php echo $data->oil_cm_production ?></td>
                                    <td><?php echo $data->oil_bbls_production ?></td>
                                    <td><?php echo $data->water_cm_production ?></td>
                                    <td><?php echo $data->water_bbls_production ?></td>
                                    <td><?php echo $data->oil_bbls_pump ?></td>
                                    <td><?php echo $data->water_bbls_pump ?></td>
                                <?php
                                    $totalOilbbl = (float)$data->oil_bbls_production + $totalOilbbl;
                                    $totalWtrbbl = (float)$data->water_bbls_production + $totalWtrbbl;
                                    $totaloilpmp = (float)$data->oil_bbls_pump + $totaloilpmp;
                                    $totalwtrpmp = (float)$data->water_bbls_pump +  $totalwtrpmp;
                                    $i++;
                                }
                                ?>
                            </tr> <?php  }
                                    ?>



                    </tbody>
                    <tfoot>
                        <tr>
                            <th>TOTAL : </th>
                            <td></td>
                            <td class="table-danger"><?php echo (float)$totalOilbbl ?></td>
                            <td></td>
                            <td class="table-primary"><?php echo (float)$totalWtrbbl ?></td>
                            <td class="table-warning"><?php echo (float)$totaloilpmp ?></td>
                            <td class="table-warning"><?php echo (float)$totalwtrpmp ?></td>
                        </tr>
                        <tr>
                            <th rowspan="2"></th>
                            <th class="text-start">Total Oil Tank - Pump Oil (Total 1) </th>
                            <th class="text-start">Total Water Tank - Pump Water (Total 2) </th>
                            <th class="text-start" colspan="4">(Total 1) + (Total 2) </th>
                        </tr>
                        <tr>
                            <td class="text-center table-info"><?php echo (float)$totalOilbbl + (float)$totaloilpmp ?></td>
                            <td class="text-center table-info"> <?php echo (float)$totalWtrbbl + (float)$totalwtrpmp ?></td>
                            <td colspan="4" class="text-center table-info"> <?php echo ((float)$totalWtrbbl + (float)$totalwtrpmp) + (float)$totalOilbbl + (float)$totaloilpmp ?> </td>
                        </tr>

                    </tfoot>
                </table>
            </div>
        </div>

        <div class="col">
            <div class="table-responsive">

                <table class="table table-bordered table-hover text-center border-dark caption-top " style="font-size: 12px;">
                    <caption class=" text-start text-secondary fs-5 ms-4">
                        Test Tank B
                    </caption>
                    <thead>
                        <tr>
                            <th rowspan="3">Time</th>
                            <th colspan="7">Test Tank B <br> Tested Well <?php
                                                                            $date = new DateTime();
                                                                            $currentTime = $date->format('Y-m-d');
                                                                            $namabudi = array();
                                                                            $i = 0;
                                                                            foreach ($storage_tank as $data) {
                                                                                $p = date_create($data->time);
                                                                                if ($data->nama_tank == "Tank B" && $p->format('Y-m-d') == $currentTime) {
                                                                                    $namabudi[$i] =  $data->nama_budi;
                                                                                    $i++;
                                                                                } else {
                                                                                    $namabudi[$i] = "-";
                                                                                }
                                                                            }
                                                                            echo current($namabudi); ?></th>

                        </tr>

                        <tr>
                            <th colspan="4">Production</th>
                            <th colspan="2">Pump</th>

                        </tr>
                        <tr>
                            <th>Oil in cm</th>
                            <th>Oil in bbls</th>
                            <th>Water in cm</th>
                            <th>Water in bbls</th>
                            <th>Oil in bbls</th>
                            <th>Water in bbls</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $totalOilbbl = 0;
                        $totalWtrbbl = 0;
                        $totaloilpmp = 0;
                        $totalwtrpmp = 0;
                        $i = 0;
                        $date = new DateTime();
                        $currentTime = $date->format('Y-m-d');
                        foreach ($storage_tank as $data) {
                            $dateNow = date_create($data->time);
                        ?> <tr>
                                <?php if ($data->nama_tank == "Tank B" && $dateNow->format('Y-m-d') == $currentTime) {
                                    $date = date_create($data->time); ?>
                                    <td><?php echo  $date->format('H:i:s'); ?></td>
                                    <td><?php echo $data->oil_cm_production ?></td>
                                    <td><?php echo $data->oil_bbls_production ?></td>
                                    <td><?php echo $data->water_cm_production ?></td>
                                    <td><?php echo $data->water_bbls_production ?></td>
                                    <td><?php echo $data->oil_bbls_pump ?></td>
                                    <td><?php echo $data->water_bbls_pump ?></td>
                                <?php
                                    $totalOilbbl = (float)$data->oil_bbls_production + $totalOilbbl;
                                    $totalWtrbbl = (float)$data->water_bbls_production + $totalWtrbbl;
                                    $totaloilpmp = (float)$data->oil_bbls_pump + $totaloilpmp;
                                    $totalwtrpmp = (float)$data->water_bbls_pump +  $totalwtrpmp;
                                    $i++;
                                }
                                ?>
                            </tr> <?php  }
                                    ?>



                    </tbody>
                    <tfoot>
                        <tr>
                            <th>TOTAL : </th>
                            <td></td>
                            <td class="table-danger"><?php echo (float)$totalOilbbl ?></td>
                            <td></td>
                            <td class="table-primary"><?php echo (float)$totalWtrbbl ?></td>
                            <td class="table-warning"><?php echo (float)$totaloilpmp ?></td>
                            <td class="table-warning"><?php echo (float)$totalwtrpmp ?></td>
                        </tr>
                        <tr>
                            <th rowspan="2"></th>
                            <th class="text-start">Total Oil Tank - Pump Oil (Total 1) </th>
                            <th class="text-start">Total Water Tank - Pump Water (Total 2) </th>
                            <th class="text-start" colspan="4">(Total 1) + (Total 2) </th>
                        </tr>
                        <tr>
                            <td class="text-center table-info"><?php echo (float)$totalOilbbl + (float)$totaloilpmp ?></td>
                            <td class="text-center table-info"> <?php echo (float)$totalWtrbbl + (float)$totalwtrpmp ?></td>
                            <td colspan="4" class="text-center table-info"> <?php echo ((float)$totalWtrbbl + (float)$totalwtrpmp) + (float)$totalOilbbl + (float)$totaloilpmp ?> </td>
                        </tr>

                    </tfoot>
                </table>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col">
            <div class="table-responsive">

                <table class="table table-bordered table-hover text-center border-dark caption-top " style="font-size: 12px;">
                    <caption class=" text-start text-secondary fs-5 ms-4">
                        Tank 1 (As a Storage Tank)
                    </caption>
                    
                    <thead>
                        <tr>
                            <th rowspan="3">Time</th>
                            <th colspan="7">Tank 1 (As a Storage Tank)</th>

                        </tr>

                        <tr>
                            <th colspan="4">Production</th>
                            <th colspan="2">Pump</th>

                        </tr>
                        <tr>
                            <th>Oil in cm</th>
                            <th>Oil in bbls</th>
                            <th>Water in cm</th>
                            <th>Water in bbls</th>
                            <th>Oil in bbls</th>
                            <th>Water in bbls</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $totalOilbbl = 0;
                        $totalWtrbbl = 0;
                        $totaloilpmp = 0;
                        $totalwtrpmp = 0;
                        $i = 0;
                        $date =  new DateTime();
                        $currentTime = date_format($date, 'Y-m-d');
                        foreach ($storage_tank as $data) {
                            $dateNow = date_create($data->time); ?>
                            <tr>
                                <?php if ($data->nama_tank == "Tank 1" && $dateNow->format('Y-m-d') == $currentTime) {
                                    $date = date_create($data->time); ?>
                                    <td><?php echo $date->format('H:i:s') ?></td>
                                    <td><?php echo $data->oil_cm_production ?></td>
                                    <td><?php echo $data->oil_bbls_production ?></td>
                                    <td><?php echo $data->water_cm_production ?></td>
                                    <td><?php echo $data->water_bbls_production ?></td>
                                    <td><?php echo $data->oil_bbls_pump ?></td>
                                    <td><?php echo $data->water_bbls_pump ?></td>
                                <?php
                                    $totalOilbbl = (float)$data->oil_bbls_production + $totalOilbbl;
                                    $totalWtrbbl = (float)$data->water_bbls_production + $totalWtrbbl;
                                    $totaloilpmp = (float)$data->oil_bbls_pump + $totaloilpmp;
                                    $totalwtrpmp = (float)$data->water_bbls_pump +  $totalwtrpmp;
                                    $i++;
                                }
                                ?>
                            </tr> <?php  }
                                    ?>
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>TOTAL : </th>
                            <td></td>
                            <td class="table-danger"><?php echo (float)$totalOilbbl ?></td>
                            <td></td>
                            <td class="table-primary"><?php echo (float)$totalWtrbbl ?></td>
                            <td class="table-warning"><?php echo (float)$totaloilpmp ?></td>
                            <td class="table-warning"><?php echo (float)$totalwtrpmp ?></td>
                        </tr>
                        <tr>
                            <th rowspan="2"></th>
                            <th class="text-start">Total Oil Tank - Pump Oil (Total 1) </th>
                            <th class="text-start">Total Water Tank - Pump Water (Total 2) </th>
                            <th class="text-start" colspan="4">(Total 1) + (Total 2) </th>
                        </tr>
                        <tr>
                            <td class="text-center table-info"><?php echo (float)$totalOilbbl + (float)$totaloilpmp ?></td>
                            <td class="text-center table-info"> <?php echo (float)$totalWtrbbl + (float)$totalwtrpmp ?></td>
                            <td colspan="4" class="text-center table-info"> <?php echo ((float)$totalWtrbbl + (float)$totalwtrpmp) + (float)$totalOilbbl + (float)$totaloilpmp ?> </td>
                        </tr>

                    </tfoot>
                </table>
            </div>
        </div>
        <div class="col">
            <div class="table-responsive">

                <table class="table table-bordered table-hover text-center border-dark caption-top " style="font-size: 12px;">
                    <caption class=" text-start text-secondary fs-5 mb-2 ms-4">
                        Tank 2 (As a Distributor To Other Tanks)
                    </caption>
                    <thead>
                        <tr>
                            <th rowspan="3">Time</th>
                            <th colspan="7">Tank 2 (As a Distributor To Other Tanks)</th>

                        </tr>

                        <tr>
                            <th colspan="4">Production</th>
                            <th colspan="2">Pump</th>

                        </tr>
                        <tr>
                            <th>Oil in cm</th>
                            <th>Oil in bbls</th>
                            <th>Water in cm</th>
                            <th>Water in bbls</th>
                            <th>Oil in bbls</th>
                            <th>Water in bbls</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $totalOilbbl = 0;
                        $totalWtrbbl = 0;
                        $totaloilpmp = 0;
                        $totalwtrpmp = 0;
                        $i = 0;
                        $date = new DateTime();
                        $currentTime = $date->format('Y-m-d');
                        foreach ($storage_tank as $data) {
                            $dateNow = date_create($data->time); ?>
                            <tr>
                                <?php if ($data->nama_tank == "Tank 2" && $dateNow->format('Y-m-d') == $currentTime) { ?>
                                    <td><?php echo $data->time ?></td>
                                    <td><?php echo $data->oil_cm_production ?></td>
                                    <td><?php echo $data->oil_bbls_production ?></td>
                                    <td><?php echo $data->water_cm_production ?></td>
                                    <td><?php echo $data->water_bbls_production ?></td>
                                    <td><?php echo $data->oil_bbls_pump ?></td>
                                    <td><?php echo $data->water_bbls_pump ?></td>
                                <?php
                                    $totalOilbbl = (float)$data->oil_bbls_production + $totalOilbbl;
                                    $totalWtrbbl = (float)$data->water_bbls_production + $totalWtrbbl;
                                    $totaloilpmp = (float)$data->oil_bbls_pump + $totaloilpmp;
                                    $totalwtrpmp = (float)$data->water_bbls_pump +  $totalwtrpmp;
                                    $i++;
                                }
                                ?>
                            </tr> <?php  }
                                    ?>

                    </tbody>
                    <tfoot>
                        <tr>
                            <th>TOTAL : </th>
                            <td></td>
                            <td class="table-danger"><?php echo (float)$totalOilbbl ?></td>
                            <td></td>
                            <td class="table-primary"><?php echo (float)$totalWtrbbl ?></td>
                            <td class="table-warning"><?php echo (float)$totaloilpmp ?></td>
                            <td class="table-warning"><?php echo (float)$totalwtrpmp ?></td>
                        </tr>
                        <tr>
                            <th rowspan="2"></th>
                            <th class="text-start">Total Oil Tank - Pump Oil (Total 1) </th>
                            <th class="text-start">Total Water Tank - Pump Water (Total 2) </th>
                            <th class="text-start" colspan="4">(Total 1) + (Total 2) </th>
                        </tr>
                        <tr>
                            <td class="text-center table-info"><?php echo (float)$totalOilbbl + (float)$totaloilpmp ?></td>
                            <td class="text-center table-info"> <?php echo (float)$totalWtrbbl + (float)$totalwtrpmp ?></td>
                            <td colspan="4" class="text-center table-info"> <?php echo ((float)$totalWtrbbl + (float)$totalwtrpmp) + (float)$totalOilbbl + (float)$totaloilpmp ?> </td>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>

    </div>
    <div class="row">
        <div class="col">
            <div class="table-responsive">

                <table class="table table-bordered table-hover text-center border-dark caption-top " style="font-size: 12px;">
                    <caption class=" text-start text-secondary fs-5 ms-4">
                        Tank 3 (Wash Tank, Flow to Tank 2)
                    </caption>
                    <thead>
                        <tr>
                            <th rowspan="3">Time</th>
                            <th colspan="7">Tank 3 (Wash Tank, Flow to Tank 2)</th>

                        </tr>

                        <tr>
                            <th colspan="4">Production</th>
                            <th colspan="2">Pump</th>

                        </tr>
                        <tr>
                            <th>Oil in cm</th>
                            <th>Oil in bbls</th>
                            <th>Water in cm</th>
                            <th>Water in bbls</th>
                            <th>Oil in bbls</th>
                            <th>Water in bbls</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $totalOilbbl = 0;
                        $totalWtrbbl = 0;
                        $totaloilpmp = 0;
                        $date = new DateTime();
                        $currentTime = date_format($date, 'Y-m-d');
                        $totalwtrpmp = 0;
                        $i = 0;
                        foreach ($storage_tank as $data) {
                            $dateNow = date_create($data->time); ?>
                            <tr>
                                <?php if ($data->nama_tank == "Tank 3" && $dateNow->format('Y-m-d') ==  $currentTime) { ?>
                                    <td><?php echo $data->time ?></td>
                                    <td><?php echo $data->oil_cm_production ?></td>
                                    <td><?php echo $data->oil_bbls_production ?></td>
                                    <td><?php echo $data->water_cm_production ?></td>
                                    <td><?php echo $data->water_bbls_production ?></td>
                                    <td><?php echo $data->oil_bbls_pump ?></td>
                                    <td><?php echo $data->water_bbls_pump ?></td>
                                <?php
                                    $totalOilbbl = (float)$data->oil_bbls_production + $totalOilbbl;
                                    $totalWtrbbl = (float)$data->water_bbls_production + $totalWtrbbl;
                                    $totaloilpmp = (float)$data->oil_bbls_pump + $totaloilpmp;
                                    $totalwtrpmp = (float)$data->water_bbls_pump +  $totalwtrpmp;
                                    $i++;
                                }
                                ?>
                            </tr> <?php  }
                                    ?>
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>TOTAL : </th>
                            <td></td>
                            <td class="table-danger"><?php echo (float)$totalOilbbl ?></td>
                            <td></td>
                            <td class="table-primary"><?php echo (float)$totalWtrbbl ?></td>
                            <td class="table-warning"><?php echo (float)$totaloilpmp ?></td>
                            <td class="table-warning"><?php echo (float)$totalwtrpmp ?></td>
                        </tr>
                        <tr>
                            <th rowspan="2"></th>
                            <th class="text-start">Total Oil Tank - Pump Oil (Total 1) </th>
                            <th class="text-start">Total Water Tank - Pump Water (Total 2) </th>
                            <th class="text-start" colspan="4">(Total 1) + (Total 2) </th>
                        </tr>
                        <tr>
                            <td class="text-center table-info"><?php echo (float)$totalOilbbl + (float)$totaloilpmp ?></td>
                            <td class="text-center table-info"> <?php echo (float)$totalWtrbbl + (float)$totalwtrpmp ?></td>
                            <td colspan="4" class="text-center table-info"> <?php echo ((float)$totalWtrbbl + (float)$totalwtrpmp) + (float)$totalOilbbl + (float)$totaloilpmp ?> </td>
                        </tr>

                    </tfoot>
                </table>
            </div>
        </div>
        <div class="col">
            <div class="table-responsive">

                <table class="table table-bordered table-hover text-start border-dark caption-top " style="font-size: 12px;">
                    <caption class=" text-start text-secondary fs-5 ms-4">
                        Daily Summary Report
                    </caption>
                    <thead>
                        <tr>
                            <th rowspan="2">Remaks</th>
                            <th rowspan="2">Gross</th>
                            <th colspan="2">Water</th>
                            <th rowspan="2">Net Oil</th>
                            <th rowspan="2">Bs & W</th>
                        </tr>

                        <tr>
                            <th>Produced</th>
                            <th>Brine</th>

                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th>Opening Stock (Tank)</th>
                            <td></td>
                        </tr>
                        <tr>
                            <th>Production</th>
                            <td></td>
                        </tr>
                        <tr>
                            <th>Pumping To WIW Budi 3</th>
                            <td></td>
                        </tr>
                        <tr>
                            <th>Transfer To Ramba & Tempino</th>
                            <td></td>
                        </tr>
                        <tr>
                            <th>Closing Stock (Tank)</th>
                            <td></td>
                        </tr>
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>TOTAL : </th>

                        </tr>

                    </tfoot>
                </table>
            </div>
        </div>
    </div>



</section>