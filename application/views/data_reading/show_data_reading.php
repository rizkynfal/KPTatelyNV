<div class="collapse p-2 mb-4" id="januariDataReading">
    <div class="table-responsive rounded ">
        <h3 class="text-center text-secondary">WIP Januari</h3>
        <table id="table_wip_januari " class="table table-bordered table-hover text-center border-dark rounded" style="font-size: 12px;">

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
            <?php
            $id = 0;
            $i = 0;
            for ($i = 0; $i < 25; $i++) {
                $id++;
                $row['total_pompa_air'] = (float) 0.0; ?>

                <tbody>


                    <tr>

                        <td scope="col"><?php echo $i ?></td>


                        <td><input type="numeric" name="total_pompa_air[]" value="<?php echo $row['total_pompa_air'] ?>;"></td>
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
                <?php 
            }

                ?>
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
                        <td class="table-primary" name="average_2_pompa" value=""></td>
                        <td>Bbls</td>
                    </tr>
                </tfoot>
        </table>
    </div>
</div>