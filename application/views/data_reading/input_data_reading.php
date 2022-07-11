<div class="collapse col" id="inputDataReading">

    <div class="card card-body p-3 mb-4">
        <form class="row" method="POST" action="<?= base_url() ?>datareading/inputDataReading">
            <div class="form-header fs-3 text-center text-secondary mb-2">
                Input Data Reading
            </div>
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
            <div class="col-sm-3 mb-3">
                <label for="inputTimestamp" class="form-label">Time</label>
                <input type="text" name="inputTimeStamp" class="form-control" id="inputTimeStamp" readonly>
            </div>
            <div class="col-sm-3 mb-3">
                <label for="inputBudi" class="form-label">Budi#</label>
                <br>
                <select class="p-2 rounded " id="inputBudi" name="inputBudi" style="width: 100% ;">
                    <option>---</option>
                    <?php foreach ($budi as $data) {
                    ?>
                        <option class="form-control col-auto  " value="<?php echo $data['id_budi'] ?>"> <?php echo $data['nama_budi'] ?></option>
                    <?php } ?>
                </select>
            </div>

            <div class="col-3 mb-3">
                <label for="inputChp" class="form-label">CHP</label>
                <input placeholder="0" type="text" class="form-control" name="inputChp" id="inputChp">
            </div>
            <div class="col-md-3 mb-3">
                <label for="inputThp" class="form-label">THP</label>
                <input placeholder="0" type="text" class="form-control" name="inputThp" id="inputThp">
            </div>
            <div class="col-3 mb-3">
                <label for="inputWht" class="form-label">WHT</label>
                <input placeholder="0" type="text" class="form-control" id="inputWht" name="inputWht">
            </div>
            <div class="col-3 mb-3">
                <label for="inputFlt" class="form-label">FLT</label>

                <input placeholder="0" type="text" class="form-control" name="inputFlt" id="inputFlt">

            </div>
            <div class="col-3 mb-3">
                <label for="inputStatus" class="form-label">Status</label>
                <select class="p-2 rounded" id="inputStatus" name="inputStatus" style="width: 100% ;">
                    <option>---</option>

                    <option class="form-control" value="Shut In">Shut In</option>
                    <option class="form-control" value="FL">FL</option>
                    <option class="form-control" value="FL To GBT">FL To GBT</option>

                </select>
            </div>
            <div class="col-3 mb-3">
                <label for="inputSL" class="form-label">SL (inch)</label>

                <input placeholder="0" type="text" class="form-control" name="inputSL" id="inputSL">

            </div>
            <div class="col-3 mb-3">
                <label for="inputSpm" class="form-label">SPM</label>

                <input placeholder="0" type="text" class="form-control" name="inputSpm" id="inputSpm">

            </div>
            <div class="col-3 mb-3">
                <label for="inputWhp" class="form-label">WHP</label>

                <input placeholder="0" type="text" class="form-control" name="inputWhp" id="inputWhp">

            </div>
            <div class="col-3 mb-3">
                <label for="inputFlp" class="form-label">FLP</label>

                <input placeholder="0" type="text" class="form-control" name="inputFlp" id="inputFlp">

            </div>
            <div class="col-3 mb-3">
                <label for="inputWCut" class="form-label">W-Cut</label>

                <input placeholder="0" type="text" class="form-control" name="inputWCut" id="inputWCut">

            </div>
            <div class="col-3 mb-3">
                <label for="inputChoke" class="form-label">Choke</label>

                <input placeholder="0" type="text" class="form-control" name="inputChoke" id="inputChoke">

            </div>
            <div class="col-3 mb-3">
                <label for="inputClPpm" class="form-label">CL-PPM</label>

                <input placeholder="0" type="text" class="form-control" name="inputClPpm" id="inputClPpm">

            </div>
            <div class="row text-center mb-3">
                <div class=" col-sm-4 ">
                    <div class="text-secondary">TEST HEADER MANIFOLD</div>
                    <div class="row justify-content-center border-dark p-2 border rounded bg-info">
                        <div class="col-sm-4 me-3">
                            <label for="pressTestManif" class="form-label">PRESS</label>

                            <input placeholder="0" type="text" class="form-control" name="pressTestManif" id="pressTestManif">
                        </div>
                        <div class="col-sm-4">
                            <label for="tempTestManif" class="form-label">TEMP</label>

                            <input placeholder="0" type="text" class="form-control" name="tempTestManif" id="tempTestManif">
                        </div>
                    </div>
                </div>
                <div class=" col-sm-4 ">
                    <div class="text-secondary">PRODUCTION HEADER MANIFOLD-1</div>
                    <div class="row justify-content-center border-dark p-2 border rounded bg-info ms-2">
                        <div class="col-sm-4 me-3">
                            <label for="pressProd1tManif" class="form-label">PRESS</label>

                            <input placeholder="0" type="text" class="form-control" name="pressProd1tManif" id="pressProd1tManif">
                        </div>
                        <div class="col-sm-4">
                            <label for="tempProd1Manif" class="form-label">TEMP</label>

                            <input placeholder="0" type="text" class="form-control" name="tempProd1Manif" id="tempProd1Manif">
                        </div>
                    </div>
                </div>
                <div class=" col-sm-4 ">
                    <div class="text-secondary">PRODUCTION HEADER MANIFOLD-2</div>
                    <div class="row justify-content-center border-dark p-2 border rounded bg-info ms-2">
                        <div class="col-sm-4 me-3">
                            <label for="pressProd2tManif" class="form-label">PRESS</label>

                            <input placeholder="0" type="text" class="form-control" name="pressProd2tManif" id="pressProd2tManif">
                        </div>
                        <div class="col-sm-4">
                            <label for="tempProd2Manif" class="form-label">TEMP</label>

                            <input placeholder="0" type="text" class="form-control" name="tempProd2Manif" id="tempProd2Manif">
                        </div>
                    </div>
                </div>
            </div>
            <div class="row text-center mb-3">
                <div class=" col-sm-4 ">
                    <div class="text-secondary">TEST SEPARATOR</div>
                    <div class="row justify-content-center border-dark p-2 border rounded bg-info">
                        <div class="col-sm-4 me-3">
                            <label for="pressTestSepa" class="form-label">PRESS</label>

                            <input placeholder="0" type="text" class="form-control" name="pressTestSepa" id="pressTestSepa">
                        </div>
                        <div class="col-sm-4">
                            <label for="diffTestSepa" class="form-label">DIFF</label>

                            <input placeholder="0" type="text" class="form-control" name="diffTestSepa" id="diffTestSepa">
                        </div>
                        <div class="col-sm-4 me-3">
                            <label for="tempTestSepa" class="form-label">TEMP</label>

                            <input placeholder="0" type="text" class="form-control" name="tempTestSepa" id="tempTestSepa">
                        </div>
                        <div class="col-sm-4">
                            <label for="orrificeTestSepa" class="form-label">ORRIFICE</label>

                            <input placeholder="0" type="text" class="form-control" name="orrificeTestSepa" id="orrificeTestSepa">
                        </div>
                    </div>
                </div>
                <div class=" col-sm-4 ">
                    <div class="text-secondary">PRODUCTION SEPARATOR-1</div>
                    <div class="row justify-content-center border-dark p-2 border rounded bg-info ms-2">
                        <div class="col-sm-4 me-3">
                            <label for="pressProdSepa1" class="form-label">PRESS</label>

                            <input placeholder="0" type="text" class="form-control" name="pressProdSepa1" id="pressProdSepa1">
                        </div>
                        <div class="col-sm-4">
                            <label for="diffProdSepa1" class="form-label">DIFF</label>

                            <input placeholder="0" type="text" class="form-control" name="diffProdSepa1" id="diffProdSepa1">
                        </div>
                        <div class="col-sm-4 me-3">
                            <label for="tempProdSepa1" class="form-label">TEMP</label>

                            <input placeholder="0" type="text" class="form-control" name="tempProdSepa1" id="tempProdSepa1">
                        </div>
                        <div class="col-sm-4">
                            <label for="orrificeProdSepa1" class="form-label">ORRIFICE</label>

                            <input placeholder="0" type="text" class="form-control" name="orrificeProdSepa1" id="orrificeProdSepa1">
                        </div>
                    </div>
                </div>
                <div class=" col-sm-4 ">
                    <div class="text-secondary">PRODUCTION SEPARATOR-2</div>
                    <div class="row justify-content-center border-dark p-2 border rounded bg-info ms-2">
                        <div class="col-sm-4 me-3">
                            <label for="pressProdSepa2" class="form-label">PRESS</label>

                            <input placeholder="0" type="text" class="form-control" name="pressProdSepa2" id="pressProdSepa2">
                        </div>
                        <div class="col-sm-4">
                            <label for="diffProdSepa2" class="form-label">DIFF</label>

                            <input placeholder="0" type="text" class="form-control" name="diffProdSepa2" id="diffProdSepa2">
                        </div>
                        <div class="col-sm-4 me-3">
                            <label for="tempProdSepa2" class="form-label">TEMP</label>

                            <input placeholder="0" type="text" class="form-control" name="tempProdSepa2" id="tempProdSepa2">
                        </div>
                        <div class="col-sm-4">
                            <label for="orrificeProdSepa2" class="form-label">ORRIFICE</label>

                            <input placeholder="0" type="text" class="form-control" name="orrificeProdSepa2" id="orrificeProdSepa2">
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="d-grid gap-2 col-2">

                    <button type="submit" class="btn btn-success p-3">Simpan</button>
                    <button class="btn btn-danger p-3" type="button" data-bs-toggle="collapse" data-bs-target="#inputDataReading" aria-expanded="false" aria-controls="inputDataReading">Batal</button>
                </div>
            </div>

        </form>

    </div>
</div>
</div>