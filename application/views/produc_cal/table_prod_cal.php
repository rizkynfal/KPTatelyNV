<section class="collapse show" id="tableProdCal">
    <div class="row">
        <div class="col">
            <div class="table-responsive">

                <table class="table table-bordered table-hover text-center border-dark caption-top " style="font-size: 12px;">
                    <caption class=" text-start text-secondary fs-5 ms-4">
                        Test Tank A <br><?php echo $tanggal = date('d-F-Y') ?><br>
                        <?php if ($_SESSION['status'] == 'login') {
                            echo "Reported by : ", $_SESSION["nama_user"];
                        } else {
                            echo "admin";
                        } ?>
                    </caption>
                    <thead>
                        <tr>
                            <th rowspan="3">Time</th>
                            <th colspan="7">Test Tank A <br> Tested Well Budi#</th>

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
                        <tr>
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

        <div class="col">
            <div class="table-responsive">

                <table class="table table-bordered table-hover text-center border-dark caption-top " style="font-size: 12px;">
                    <caption class=" text-start text-secondary fs-5 mb-5 ms-4">
                        Test Tank B
                    </caption>
                    <thead>
                        <tr>
                            <th rowspan="3">Time</th>
                            <th colspan="7">Test Tank B <br> Tested Well Budi#</th>

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
                        <tr>
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

    <div class="row">
        <div class="col">
            <div class="table-responsive">

                <table class="table table-bordered table-hover text-center border-dark caption-top " style="font-size: 12px;">
                    <caption class=" text-start text-secondary fs-5 mb-2  ms-4">
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
                        <tr>
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
                        <tr>
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
    <div class="table-responsive">

<table class="table table-bordered table-hover text-center border-dark caption-top " style="font-size: 12px;">
    <caption class=" text-start text-secondary fs-5 mb-2  ms-4">
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
        <tr>
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


</section>