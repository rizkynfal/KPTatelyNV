<section class="collapse show " id="tableDataReading">

    <form class="row ms-auto" action="<?= base_url() ?>showdatareading" method="post">
        <div class="fs-5 ">Cari Data Reading Budi</div>
        <select class="p-2 rounded mb-3 col-6 col-sm-4" id="namaBudiudi" name="namaBudi">
            <?php foreach ($budi as $data) {
            ?>

                <option type="submit" class="form-control text-center" id="namaBudi" name="namaBudi" value="<?php echo $data->id_budi ?>"><?php echo $data->nama_budi ?></option>
            <?php } ?>
        </select>
        <div class="col-4 col-sm-4">
            <button type="submit" class="btn btn-dark p-2">Cari</button>
        </div>
    </form>
    <?php
    $namaBudi = $this->input->post('namaBudi');
    $date = false;
    foreach ($tabel_data_reading as $data) {
        if ($this->input->post('namaBudi') == null) {
            $namaBudi = "1";
            break;
        }
        if ($data->tanggal_data_reading != $date) {
            $date = $data->tanggal_data_reading; ?>
            <div class="table-responsive ">

                <table class="table table-bordered table-hover text-center border-dark caption-top" style="font-size: 12px;">

                    <thead>
                        <tr>
                            <th rowspan="3">Time</th>
                            <th colspan="30" class="fs-5">
                                <?php
                                if ($data->budi_id_budi == $budi) {
                                    echo $budi->nama_budi;
                                } ?>
                            </th>
                        </tr>
                        <tr>
                            <th colspan="12" class="fs-5">Press, Temp, dll</th>
                            <th colspan="2">
                                TEST HEADER MANIFOLD
                            </th>
                            <th colspan="2">
                                PRODUCTION HEADER MANIFOLD-1
                            </th>
                            <th colspan="2">
                                PRODUCTION HEADER MANIFOLD-2
                            </th>
                            <th colspan="4">
                                TEST SEPARATOR
                            </th>
                            <th colspan="4">
                                PRODUCTION SEPARATOR-1
                            </th>
                            <th colspan="4">
                                PRODUCTION SEPARATOR-2
                            </th>
                        </tr>
                        <tr>
                            <th>CHP</th>
                            <th>THP</th>
                            <th>WHT</th>
                            <th>FLT</th>
                            <th>Status</th>
                            <th>SL</th>
                            <th>SPM</th>
                            <th>WHP</th>
                            <th>FLP</th>
                            <th>W-Cut</th>
                            <th>Choke</th>
                            <th>CL-PPM</th>
                            <th>Press</th>
                            <th>Temp</th>
                            <th>Press</th>
                            <th>Temp</th>
                            <th>Press</th>
                            <th>Temp</th>
                            <th>Press</th>
                            <th>Diff</th>
                            <th>Temp</th>
                            <th>Orrifice</th>
                            <th>Press</th>
                            <th>Diff</th>
                            <th>Temp</th>
                            <th>Orrifice</th>
                            <th>Press</th>
                            <th>Diff</th>
                            <th>Temp</th>
                            <th>Orrifice</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Average</th>
                        </tr>
                        <tr>

                        </tr>

                    </tfoot>
                    <caption class=" text-start text-secondary fs-5 ms-4">
                        Data Reading <br> <?php echo $data->tanggal_data_reading ?>
                    </caption>
                    <tbody> <?php } ?>
                    <tr>
                        <td><?php echo date_format(date_create($data->time), "H:i:s") ?></td>
                        <td><?php echo $data->chp_data_reading  ?></td>
                        <td><?php echo $data->thp_data_reading ?></td>
                        <td><?php echo $data->wht_data_reading ?></td>
                        <td><?php echo $data->flt_data_reading ?></td>
                        <td><?php echo $data->status_data_reading ?></td>
                        <td><?php echo $data->sl_data_reading ?></td>
                        <td><?php echo $data->spm_data_reading ?></td>
                        <td><?php echo $data->whp_data_reading ?> </td>
                        <td><?php echo $data->flp_data_reading ?></td>
                        <td><?php echo $data->w_cut_data_reading ?></td>
                        <td><?php echo $data->choke_data_reading ?></td>
                        <td><?php echo $data->cl_ppm_data_reading ?></td>
                        <td><?php echo $data->test_header_manifold_press ?></td>
                        <td><?php echo $data->test_header_manifold_temp ?></td>
                        <td><?php echo $data->produc_header_manifold_1_press ?></td>
                        <td><?php echo $data->produc_header_manifold_1_temp ?></td>
                        <td><?php echo $data->produc_header_manifold_2_press ?></td>
                        <td><?php echo $data->produc_header_manifold_2_temp ?></td>
                        <td><?php echo $data->test_separator_press ?> </td>
                        <td><?php echo $data->test_separator_diff ?> </td>
                        <td><?php echo $data->test_separator_temp ?> </td>
                        <td><?php echo $data->test_separator_orrifice ?></td>
                        <td><?php echo $data->produc_separator1_press ?></td>
                        <td><?php echo $data->produc_separator1_diff ?></td>
                        <td><?php echo $data->produc_separator1_temp ?></td>
                        <td><?php echo $data->produc_separator1_orrifice ?></td>
                        <td><?php echo $data->produc_separator2_press ?></td>
                        <td><?php echo $data->produc_separator2_diff ?></td>
                        <td><?php echo $data->produc_separator2_temp ?></td>
                        <td><?php echo $data->produc_separator2_orrifice ?></td>
                    </tr>
                    </tbody>
                <?php
            }
                ?>


                </table>
            </div>
</section>