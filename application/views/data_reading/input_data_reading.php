<div class="collapse" id="inputWip">
    <div class="card card-body p-3">
        <form class="row g-3" method="POST" action="">
            <div class="form-header fs-3 text-center">
                Input Wip
            </div>
            <div class="col-3 mb-3">
                <label for="namaReporter" class="form-label">Nama Reporter</label>
                <input type="text" class="form-control" id="inputEmail4" value="<?php
                                                                                if ($_SESSION['status'] == 'login') {
                                                                                    echo $_SESSION["nama_user"];
                                                                                } ?>" disabled>
            </div>
            <div class="col-sm-1 mb-3">
                <label for="inputTanggal" class="form-label">Tanggal</label>
                <?php date_default_timezone_set("Asia/Jakarta");
                $tanggal = date("Y-m-d"); ?>
                <input type="text" class="form-control" id="inputTime" value="<?php echo $tanggal ?>" disabled>
            </div>
            <div class="col-sm-1 mb-3">
                <label for="inputTime" class="form-label">Hours</label>
                <?php date_default_timezone_set("Asia/Jakarta");
                $time = date("H:i:s"); ?>
                <input type="text" class="form-control" id="inputTime" value="<?php echo $time ?>" disabled>
            </div>
            <div class="col-3 mb-3">
                <label for="inputBudi" class="form-label">Budi#</label>
                <br>
                <select class="p-2 rounded" style="width: 100% ;">
                    <option>---</option>
                    <?php foreach ($budi as $data) { ?>
                        <option id="inputBudi" class="form-control" value="<?php $data->nama_budi ?>"><?php echo $data->nama_budi ?></option>
                    <?php } ?>
                </select>
            </div>

            <div class="col-3 mb-3">
                <label for="inputRemaks " class="form-label">Remaks</label>
                <br>
                <select class="p-2 rounded" style="width: 100% ;">
                    <option>---</option>

                    <option id="inputRemaks1" class="form-control" value="Pompa No 1">Pompa No 1</option>
                    <option id="inputRemaks2" class="form-control" value="Pompa No 2">Pompa No 2</option>

                </select>
            </div>
            <div class="col-md-3 mb-3">
                <label for="inputDischargePressure" class="form-label">Discharge Pressure</label>
                <div class="input-group">
                    <input type="number" class="form-control" id="inputDischargePressure">
                    <div class="input-group-text">psi</div>
                </div>
            </div>
            <div class="col-3 mb-3">
                <label for="inputWaterLinePressure" class="form-label">Water Line Pressure</label>
                <div class="input-group">
                    <input type="number" class="form-control" id="inputWaterLinePressure">
                    <div class="input-group-text">psi</div>
                </div>
            </div>
            <div class="col-3 mb-3">
                <label for="inputMotorFrequency" class="form-label">Motor Frequency</label>
                <div class="input-group">
                    <input type="number" class="form-control" id="inputMotorFrequency">
                    <div class="input-group-text">hz</div>
                </div>
            </div>
            <div class="col-3 mb-3">
                <label for="inputPumpedWater" class="form-label">Pumped Water</label>
                <div class="input-group">
                    <input type="number" class="form-control" id="inputPumpedWater">
                    <div class="input-group-text">Bbls/hr</div>
                </div>
            </div>
            <div class="d-grid gap-2 col-3 mx-auto">

                <button type="submit" class="btn btn-success p-3">Simpan</button>


                <button type="close" class="btn btn-danger p-3">Batal</button>
            </div>
    </div>
</div>