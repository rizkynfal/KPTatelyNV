<section class="collapse show" id="tableWIP">
    <div class="table-responsive">


        <?php $i = 1;
        $j = 1;
        $total_jam = false;
        $total_pompa_air_1 = false;
        $total_pompa_air_2 = false;
        $average_pompa_air_1 = false;
        $average_pompa_air_2 = false;
        $currentdate = false;
        $this->load->model('DataReadingModel');


        if (!$tabel_wip) { ?>
            <tr>
                <td colspan="15" class="text-center bg-danger text-white">DATA BELUM ADA !</td>
            </tr>
            <?php } else {
            foreach ($tabel_wip as $data) {
                if ($data->tanggal_input != $currentdate) {
                    $currentdate = $data->tanggal_input;
                    $footer = $this->DataReadingModel->getDataWipbyDate($currentdate)->result(); ?>

                    <?php
                    foreach ($footer as $footer_data) {
                        if ($footer_data->total_jam != null) {
                            $total_jam = $footer_data->total_jam;
                            $total_pompa_air_1 = $footer_data->total_pompa_air_1;
                            $total_pompa_air_2 = $footer_data->total_pompa_air_2;
                            $average_pompa_air_1 = $footer_data->average_pompa_air_1;
                            $average_pompa_air_2 = $footer_data->average_pompa_air_2;
                        }
                    }

                    ?>
                    <table class="table table-bordered table-hover text-center border-dark caption-top " style="font-size: 12px;">
                        <thead>
                            <th>Reported By: <?php foreach ($user as $reporter) {
                                                    if ($data->user_id_user == $reporter->id_user) {
                                                        echo $reporter->nama_user;
                                                    } else {
                                                        echo "  ";
                                                    }
                                                } ?></th>
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

                        <tfoot>
                            <tr>
                                <td colspan="14" class="table-secondary"></td>
                            </tr>
                            <tr>
                                <th scope="row">Total</th>
                                <td class="table-primary">+<?php echo  $total_jam; ?> jam</td>
                                <td colspan="4"></td>
                                <td class="table-primary"><?php echo  $total_pompa_air_1 ?> bbls</td>
                                <td colspan="4"></td>
                                <td class="table-primary"><?php echo  $total_pompa_air_2 ?> bbls</td>
                                <td colspan="2"></td>
                            </tr>
                            <tr>
                                <th scope="row" rowspan="2">Average</th>
                                <th>Pompa 1</th>
                                <td class="table-primary"><?php echo  $average_pompa_air_1 ?></td>
                                <td>Bbls</td>
                                <td class="table-secondary" colspan="11"></td>
                            </tr>
                            <tr>
                                <th>Pompa 2</th>
                                <td class="table-primary"><?php echo $average_pompa_air_2 ?></td>
                                <td>Bbls</td>
                                <td class="table-secondary" colspan="11"></td>
                            </tr>
                            <tr>
                                <th scope="row" colspan="2">Total Average 2 Pompa</th>
                                <td class="table-primary"><?php echo (float) $average_pompa_air_1 + (float)$average_pompa_air_2 ?></td>
                                <td>Bbls</td>
                                <td class="table-secondary" colspan="11"></td>
                            </tr>
                        </tfoot>
                        <caption class=" text-start text-secondary fs-5 ms-4">
                            Data Wip <br> <?php echo  $data->tanggal_input ?>
                        </caption>
                    <?php
                    $i = 1;
                } ?>

                    <?php

                    ?>
                    <tbody>
                        <tr>
                            <td scope="col"><?php echo $i ?></td>
                            <td><?php echo  date_format(date_create($data->time), 'H:i:s'); ?></td>

                            <?php if ($data->remarks == 'Pompa No 1') {
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
                            ?>
                                <td colspan="5" class="bg-primary"></td>
                                <td><?php echo $data->discharge_press ?></td>
                                <td><?php echo $data->water_line_press ?></td>
                                <td><?php echo $data->motor_freq ?></td>
                                <td><?php echo $data->motor_ampere ?></td>
                                <td><?php echo $data->pumped_water ?></td>
                                <td><?php echo $data->whp_wip ?></td>
                                <td><?php echo $data->remarks ?></td>
                        </tr>

                    </tbody>
        <?php
                            }

                            $j++;
                            $i++;
                        }
                    } ?>

                    </table>
    </div>
</section>