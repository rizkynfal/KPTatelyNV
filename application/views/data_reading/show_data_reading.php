<div class="collapse m-3" id="januariDataReading">
    <div class="table-responsive ">
        <h3 class="text-center text-secondary">WIP Januari</h3>
        <table id="example" class="table table-bordered table-hover text-center border-dark " style="font-size: 12px;">

            <thead>
                <tr>
                    <th rowspan="2" colspan="2">Production & Operation</th>
                    <th rowspan="2" colspan="5">Pump No.1</th>
                    <th rowspan="2" colspan="5">Pump No.2</th>

                </tr>

                <tr>
                    <th rowspan="2">Well Head Pressure</th>
                    <th rowspan="2">Total Injected Water <br> (Flow Mater)</th>
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
                    <th>bbls</th>
                </tr>
            </thead>
            <tbody>
                <?php $i = 0;
                while ($i <= 24) { ?>
                    <tr>

                        <td scope="col"><?php echo $i ?></td>


                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>

                    </tr>
                <?php $i++;
                } ?>
            </tbody>
        </table>
    </div>