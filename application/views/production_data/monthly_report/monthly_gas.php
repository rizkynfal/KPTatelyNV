<section id="monthly-gas-table" class="collapse show col" >
    <div class="shadow rounded p-2 m-2" style="width: 84%;">
        <div class="table-responsive ">
            <table class="table table-bordered table-hover text-center border-dark caption-top " style="font-size: 12px;">
                <thead>
                    <tr>
                        <th colspan="38">Monthly Produced Gas</th>
                    </tr>
                    <tr>
                        <th rowspan="2">Date </th>
                        <?php $bulan = [1 => "Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember"];
                                for ($i = 1; $i <= 12; $i++) {
                                    echo '<th colspan="3">' . $bulan[$i] . '</th>';
                                } ?>
                    </tr>
                    <tr>
                        <?php for ($i = 1; $i <= 12; $i++) {
                            echo '<th>Production</th> <th>Own Use</th> <th>Gas to Flare</th>';
                        } ?>
                        
                    </tr>
                </thead>
                <tbody>
                </tbody>
            </table>
        </div>
</section>