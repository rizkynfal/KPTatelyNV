<?php if ($this->session->flashdata('flash')) : ?>
    <script>
        alert('<?php echo $this->session->flashdata('flash') ?>');
    </script>
<?php $this->session->unset_userdata('flash');
endif; ?>
<div class="collapse" id="inputProdCal">
    <div class="row">
        <form id="testTankAform" class="row" method="POST" action="<?= base_url() ?>producalcul/inputTank">
            <div class="col-sm-3 mb-3">
                <label for="namaReporter" class="form-label">Nama Reporter</label>
                <input type="text" class="form-control" id="namaReporter" name="namaReporter" value="<?php
                                                                                                        if ($_SESSION['status'] == 'login') {
                                                                                                            echo $_SESSION["nama_user"];
                                                                                                        } ?>" readonly>
            </div>
            <div class="col-sm-3 mb-3">
                <label for="inputTanggal" class="form-label">Tanggal</label>
                <?php date_default_timezone_set("Asia/Jakarta");
                $tanggal = date("d-F-Y"); ?>
                <input type="text" name="inputTanggal" class="form-control" id="inputTanggal" value="<?php echo $tanggal ?>" readonly>
            </div>
            <div class="col-sm-3  mb-3">
                <label for="inputTime" class="form-label">Time</label>
                <input type="text" name="inputTime" class="form-control" id="inputTime" readonly>
            </div>
    </div>
    <div class="row rounded mb-3">
        <div class="col">
            <div class="card card-body p-3 mb-4">

                <div class="form-header fs-3 text-center">
                    Input Production Tank
                </div>
                <div class="row">
                    <div class="col-2">
                        <label for="namaTank" class="form-label">Nama Storage Tank</label><br>
                        <select class="p-2 rounded" id="namaTank" name="namaTank" onchange="budiSelectHandler(this);">
                            <option class="form-control col-auto " value="-">--Pilih Storage Tank--</option>
                            <option class="form-control col-auto " value="Tank A">Tank A</option>
                            <option class="form-control col-auto" value="Tank B">Tank B</option>
                            <option class="form-control col-auto " value="Tank 1">Tank 1</option>
                            <option class="form-control col-auto " value="Tank 2">Tank 2</option>
                            <option class="form-control col-auto " value="Tank 3">Tank 3</option>
                        </select>
                    </div>
                    <div class="col-1">
                        <label for="selectBudi" id="labelBudi" class="form-label">Tested Well</label>

                        <select class="p-2 rounded " id="selectBudi" name="selectBudi">
                            <option value=" ">--Pilih Budi--</option>
                            <?php foreach ($budi as $data) {
                            ?>
                                <option class="form-control col-auto " value="<?php echo $data['nama_budi'] ?>"> <?php echo $data['nama_budi'] ?></option>
                            <?php } ?>
                        </select>

                    </div>

                    <!-- <?php
                            for ($i = 0; $i < 12; $i++) {
                                $time = strtotime(sprintf('%d months', $i));
                                $label = date('F', $time);
                                $value = date('n', $time);
                                echo "<option class='form-control col-auto ' value='$value'>$label</option>";
                            }
                            ?> -->

                    <div class="col-12">
                        <p class="text-center text-dark fw-bold fs-5">Production</p>
                    </div>
                    <div class="col-3">
                        <label for="inputOilCmProd" class="form-label">Oil in Cm Total Sekarang</label>
                        <input placeholder="0" form="testTankAform" type="text" class="form-control" name="inputOilCmProd" id="inputOilCmProd">

                        <label  for="oilCmsebelum" class="form-label">Oil in Cm 3 Jam Sebelum</label>
                        <input type="text" class="form-control" name="oilCmsebelum" id="oilCmsebelum">
                    </div>
                    <div class="col-3 mb-3">
                        <label for="inputOilBblsProd" class="form-label">Oil in Bbls</label>
                        <input placeholder="0" type="text" form="testTankAform" class="form-control" id="inputOilBblsProd" name="inputOilBblsProd">
                    </div>
                    <div class="col-3 mb-3">
                        <label for="inputWaterCmProd" class="form-label">Water in Cm</label>
                        <input placeholder="0" type="text" form="testTankAform" class="form-control" name="inputWaterCmProd" id="inputWaterCmProd">

                    </div>
                    <div class="col-3 mb-3">
                        <label for="inputWaterBblsProd" class="form-label">Water in Bbls</label>
                        <input placeholder="0" type="text" form="testTankAform" class="form-control" name="inputWaterBblsProd" id="inputWaterBblsProd">

                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <p class="text-center text-dark fw-bold fs-5">Pump</p>
                    </div>
                    <div class="col-4">
                        <label for="inputOilBblsPump" class="form-label">Oil</label>
                        <input placeholder="0" form="testTankAform" type="text" class="form-control" name="inputOilBblsPump" id="inputOilBblsPump">
                    </div>
                    <div class="col-4 mb-3">
                        <label for="inputWaterBblsPump" class="form-label">Water</label>
                        <input placeholder="0" type="text" form="testTankAform" class="form-control" id="inputWaterBblsPump" name="inputWaterBblsPump">
                    </div>
                </div>
                <div class="row">
                    <div class="d-grid gap-2 col-2 ">
                        <button type="submit" form="testTankAform" class="btn btn-success p-3">Simpan</button>
                        <button class="btn btn-danger p-3" type="button" data-bs-toggle="collapse" data-bs-target="#inputWip" aria-expanded="false" aria-controls="inputWip">Batal</button>
                    </div>
                </div>
                </form>
            </div>
        </div>

    </div>
</div>