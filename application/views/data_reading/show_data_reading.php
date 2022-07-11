<section class="collapse show d-flex align-items-stretch" id="tableDataReading">
    <div class="table-responsive ">
        <form class="row ms-auto" action="index" method="post">
            <div class="fs-5 " >Cari Budi</div>
            <select class="p-2 rounded mb-3 col-6 col-sm-4" id="namaBudiudi" name="namaBudi">
                <option>--</option>
                <?php foreach ($budi as $data) {
                ?>

                    <option type="submit" class="form-control text-center" id="namaBudiudi" name="namaBudi" value="<?php echo $data['id_budi'] ?>"><?php echo $data['nama_budi'] ?></option>
                <?php } ?>
            </select>
            <div class="col-4 col-sm-4">
                <button type="submit" class="btn btn-dark p-2">Cari</button>
            </div>
        </form>



        <table class="table table-bordered table-hover text-center border-dark caption-top" style="font-size: 12px;">
            <caption class=" text-start text-secondary fs-5 ms-4">
                Data Reading <br><?php echo $tanggal = date('d-F-Y') ?>
            </caption>
            <thead>
                <tr>
                    <th rowspan="2">Time</th>
                    <th colspan="12" class="fs-5">
                        <?php if ($this->input->post('namaBudi') != null) {
                            $namaBudi = $this->input->post('namaBudi');
                            foreach ($budi as $data) {
                                if ($namaBudi ==  $data['id_budi']) {
                                    echo $data['nama_budi'];
                                }
                            }
                        } else {
                            echo " budi";
                        } ?>
                    </th>
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
            <tbody>

            </tbody>
            <tfoot>

            </tfoot>
        </table>
    </div>





</section>