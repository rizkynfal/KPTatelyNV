<div class="collapse" id="inputWip">
    <div class="card card-body p-3">
        <form class="row" method="POST" action="<?= base_url() ?>datareading/inputDataWip">
            <div class="form-header fs-3 text-center">
                Input Wip
            </div>
            <div class="col-3 mb-3">
                <label for="namaReporter" class="form-label">Nama Reporter</label>
                <input type="text" class="form-control" id="namaReporter" name="namaReporter" value="<?php
                                                                                                        if ($_SESSION['status'] == 'login') {
                                                                                                            echo $_SESSION["nama_user"];
                                                                                                        } ?>" disabled>
            </div>
            <div class="col-sm-2 mb-3">
                <label for="inputTanggal" class="form-label">Tanggal</label>
                <?php date_default_timezone_set("Asia/Jakarta");
                $tanggal = date("d-F-Y"); ?>
                <input type="text" name="inputTanggal" class="form-control" id="inputTanggal" value="<?php echo $tanggal ?>" disabled>
            </div>
            <div class="col-sm-1 mb-3">
                <label for="inputTime" class="form-label">Time</label>
                <?php date_default_timezone_set("Asia/Jakarta");
                $time = date("H:i:s"); ?>
                <input type="text" name="inputTime" class="form-control" id="inputTime" disabled>
            </div>
            <div class="col-3 mb-3">
                <label for="inputBudi" class="form-label">Budi#</label>
                <br>
                <select class="p-2 rounded" style="width: 100% ;">
                    <option>---</option>
                    <?php foreach ($budi as $data) {
                        $idBudi = $data->id_budi ?>
                        <option id="inputBudi" name="inputBudi" class="form-control" value="<?php $idBudi ?>"><?php echo $data->nama_budi ?></option>
                    <?php } ?>
                </select>
            </div>

            <div class="col-3 mb-3">
                <label for="inputRemaks" class="form-label">Remaks</label>
                <br>
                <select class="p-2 rounded" id="inputRemaks" name="inputRemaks" style="width: 100% ;">
                    <option>---</option>

                    <option class="form-control" value="Pompa No 1">Pompa No 1</option>
                    <option class="form-control" value="Pompa No 2">Pompa No 2</option>

                </select>
            </div>
            <div class="col-md-3 mb-3">
                <label for="inputDischargePressure" class="form-label">Discharge Pressure</label>
                <div class="input-group">
                    <input type="number" class="form-control" name="inputDischargePressure" id="inputDischargePressure">
                    <div class="input-group-text">psi</div>
                </div>
            </div>
            <div class="col-3 mb-3">
                <label for="inputWaterLinePressure" class="form-label">Water Line Pressure</label>
                <div class="input-group">
                    <input type="number" class="form-control" id="inputWaterLinePressure" name="inputWaterLinePressure">
                    <div class="input-group-text">psi</div>
                </div>
            </div>
            <div class="col-3 mb-3">
                <label for="inputMotorFrequency" class="form-label">Motor Frequency</label>
                <div class="input-group">
                    <input type="number" class="form-control" name="inputMotorFrequency" id="inputMotorFrequency">
                    <div class="input-group-text">hz</div>
                </div>
            </div>
            <div class="col-3 mb-3">
                <label for="inputMotorAmpere" class="form-label">Motor Ampere</label>
                <div class="input-group">
                    <input type="number" class="form-control" name="inputMotorAmpere" id="inputMotorAmpere">
                    <div class="input-group-text">A</div>
                </div>
            </div>
            <div class="col-3 mb-3">
                <label for="inputPumpedWater" class="form-label">Pumped Water</label>
                <div class="input-group">
                    <input type="number" class="form-control" name="inputPumpedWater" id="inputPumpedWater">
                    <div class="input-group-text">Bbls/hr</div>
                </div>
            </div>
            <div class="row">
                <div class="d-grid gap-2 col-2 mx-auto">

                    <button type="submit" class="btn btn-success p-3">Simpan</button>
                    <button type="close" class="btn btn-danger p-3">Batal</button>
                </div>
            </div>

        </form>

    </div>
</div>