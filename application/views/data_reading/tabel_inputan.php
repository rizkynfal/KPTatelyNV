<div class="border border-dark rounded p-2" id="">
    <div class="table-responsive ">
        <h3 class="text-center text-secondary">WIP <?php echo $tanggal = date('d-M-Y') ?> </h3>
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
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>

                    </tr>
                <?php $i++;
                } ?>
            </tbody>
            <tfoot>
                <tr>
                    <th scope="row">Total</th>
                    <td class="table-primary"></td>
                    <td colspan="4"></td>
                    <td class="table-primary"></td>
                    <td colspan="4"></td>
                    <td class="table-primary"></td>
                    <td></td>
                    <td class="table-primary"></td>
                    <td></td>
                </tr>
                <tr>
                    <th scope="row" rowspan="2">Average</th>
                    <th>Pompa 1</th>
                    <td class="table-primary"></td>
                    <td>Bbls</td>
                </tr>
                <tr>
                    <th>Pompa 2</th>
                    <td class="table-primary"></td>
                    <td>Bbls</td>
                </tr>
                <tr>
                    <th scope="row" colspan="2">Total Average 2 Pompa</th>
                    <td class="table-primary"></td>
                    <td>Bbls</td>
                </tr>
            </tfoot>
        </table>
    </div>
</div>