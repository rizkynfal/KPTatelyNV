<div class="border border-dark rounded border-3 p-2 mb-2" id="">
    <div class="table-responsive ">
        <h3 class="text-center text-secondary">WIP <?php echo $tanggal = date('d-F-Y') ?> </h3>
        <table id="example" class="table table-bordered table-hover text-center border-dark " style="font-size: 12px;">

            <thead>
                <tr>
                    <th rowspan="2" colspan="2">Production & Operation</th>
                    <th rowspan="2" colspan="5">Pump No.1</th>
                    <th rowspan="2" colspan="5">Pump No.2</th>

                </tr>

                <tr>
                    <th rowspan="2">Well Head Pressure</th>
                    <th rowspan="3">Remaks</th>
                </tr>
                <tr>
                    <th rowspan="2">No.</th>
                    <th rowspan="2">Time</th>
                    <th>Discharge Pressure</th>
                    <th>Water Line Pressure</th>
                    <th>Motor Frequency</th>
                    <th>Motor Ampere</th>
                    <th>Pumped Water</th>
                    <th>Discharge Pressure</th>
                    <th>Water Line Pressure</th>
                    <th>Motor Frequency</th>
                    <th>Motor Ampere</th>
                    <th>Pumped Water</th>
                </tr>
                <tr>
                    <th>psi</th>
                    <th>psi</th>
                    <th>hz</th>
                    <th>A</th>
                    <th>bbls/hr</th>
                    <th>psi</th>
                    <th>psi</th>
                    <th>hz</th>
                    <th>A</th>
                    <th>bbls/hr</th>
                    <th>psi</th>
                </tr>
            </thead>
            <tbody>
                <?php $i = 1;
                $pumpWtr = 0;
                $total = 0;
                $date = array();
                $averagePompa1 = 0;
                $averagePompa2 = 0;
                $totalpompa1 =  0;
                $totalpompa2 =  0;
                if (!$tabel_wip) { ?>
                    <tr>
                        <td colspan="15" class="text-center bg-danger text-white">DATA BELUM ADA !</td>

                    </tr>
                    <?php } else {
                    foreach ($tabel_wip as $data) {

                    ?>
                        <tr>
                            <td scope="col"><?php echo $i ?></td>
                            <td><?php echo  date_format(date_create($data->time), 'H:i:s'); ?></td>

                            <?php if ($data->remarks == 'Pompa No 1') {
                                $totalpompa1 += intval($data->pumped_water);
                            ?>
                                <td><?php echo $data->discharge_press ?></td>
                                <td><?php echo $data->water_line_press ?></td>
                                <td><?php echo $data->motor_freq ?></td>
                                <td><?php echo $data->motor_ampere ?></td>
                                <td><?php echo $data->pumped_water ?></td>
                                <td colspan="5" class="bg-primary"></td>
                                <td><?php echo $data->whp_wip ?></td>
                                <td><?php echo $data->remarks ?></td>
                            <?php
                            } elseif ($data->remarks == 'Pompa No 2') {
                                $totalpompa2 += intval($data->pumped_water); ?>

                                <td colspan="5" class="bg-primary"></td>

                                <td><?php echo $data->discharge_press ?></td>
                                <td><?php echo $data->water_line_press ?></td>
                                <td><?php echo $data->motor_freq ?></td>
                                <td><?php echo $data->motor_ampere ?></td>
                                <td><?php echo $data->pumped_water ?></td>

                                <td><?php echo $data->whp_wip ?></td>

                                <td><?php echo $data->remarks ?></td>
                        <?php
                            }
                            $date[$i] = substr($data->time, 11);
                            $i++;
                        } 
                        $total = (int)(end($date)) - (int)($date[1]);
                        $averagePompa1 = $totalpompa1 / $total;
                        $averagePompa2 = $totalpompa2/ $total;
                        ?>
                        </tr>

            </tbody>
            <tfoot>
                <tr>
                    <td colspan="14" class="table-secondary"></td>
                </tr>
                <tr>
                    <th scope="row">Total</th>
                    <td class="table-primary">+<?php echo $total; ?> jam</td>
                    <td colspan="4"></td>
                    <td class="table-primary"><?php echo $totalpompa1 ?> bbls</td>
                    <td colspan="4"></td>
                    <td class="table-primary"><?php echo $totalpompa2 ?> bbls</td>
                    <td></td>

                    <td></td>
                </tr>
                <tr>
                    <th scope="row" rowspan="2">Average</th>
                    <th>Pompa 1</th>
                    <td class="table-primary"><?php echo $averagePompa1 ?></td>
                    <td>Bbls</td>
                    <td class="table-secondary" colspan="10"></td>
                </tr>
                <tr>
                    <th>Pompa 2</th>
                    <td class="table-primary"><?php echo $averagePompa2 ?></td>
                    <td>Bbls</td>
                    <td class="table-secondary" colspan="10"></td>
                </tr>
                <tr>
                    <th scope="row" colspan="2">Total Average 2 Pompa</th>
                    <td class="table-primary"><?php echo $averagePompa1 + $averagePompa2 ?></td>
                    <td>Bbls</td>
                    <td class="table-secondary" colspan="10"></td>
                </tr>
            <?php

                } ?>
            </tfoot>
        </table>
    </div>
</div>