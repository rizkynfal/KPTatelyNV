<div class="shadow p-2 rounded m-2 ">
    <div class="row mb-4 justify-content-center ">
        <div class="col-sm-3 border border-success rounded p-3 me-3">
            <h3 class="text-center text-dark mb-5">Input Data Reading</h3>
            <div class="d-grid gap-2">
                <button class="btn btn-primary my-auto  p-4" type="button" data-bs-toggle="collapse" data-bs-target="#inputWip" aria-expanded="false" aria-controls="inputWip">
                    Input Wip
                </button>
                <button class="btn btn-primary my-auto p-4" type="button" data-bs-toggle="collapse" data-bs-target="#inputDataReading" aria-expanded="false" aria-controls="inputDataReading">
                    Input Data Reading
                </button>
            </div>
        </div>
        <div class="col-sm-3 border border-success rounded p-3 ms-3">
            <h3 class="text-center text-dark mb-5">Show Table</h3>
            <div class="d-grid gap-2">
                <button class="btn btn-primary my-auto  p-4" type="button" data-bs-toggle="collapse" data-bs-target="#tableWIP" aria-expanded="false" aria-controls="tableWIP">
                    Show Table WIP
                </button>
                <button class="btn btn-primary my-auto p-4" type="button" data-bs-toggle="collapse" data-bs-target="#tableDataReading" aria-expanded="false" aria-controls="tableDataReading">
                    Show Table Data Reading
                </button>
            </div>
        </div>
    </div>
</div>
<div class="row">
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
        <input type="text" name="inputTanggal" class="form-control" id="inputTanggal"value="<?php echo $tanggal ?>" readonly>
    </div>
    <div class="col-sm-3  mb-3">
        <label for="inputTime" class="form-label">Time</label>
        <input type="text" name="inputTime" class="form-control" id="inputTime" readonly>
    </div>
</div>
<div class="row">