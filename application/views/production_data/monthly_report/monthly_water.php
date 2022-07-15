<section id="monthly-water-table" class="collapse show col">
    <div class="d-flex mt-5 container-fluid" style="background-color: #FFF !important; z-index: 5;">
        <div class="p-5 col-md-10 shadow mb-5" style="border-radius: 30px;">
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <a class="btn btn-primary" href="<?= base_url('production/productionData') ?>" role="button">Kembali</a>
                        <div class="panel-heading text-secondary text-center">
                            MONTHLY PRODUCED Water
                        </div>
                        <div class="panel-body m-4">

                            <div class="table-responsive">
                                <table id="example" class="table table-bordered table-hover text-center border-dark">

                                    <tr>
                                        <th rowspan="2">Date </th>
                                        <?php
                                        $bulan = [1 => "Januari","Februari","Maret","April","Mei","Juni","Juli","Agustus","September","Oktober","November","Desember"];
                                        for ($i = 1; $i <= 12; $i++) {
                                            echo "<th colspan='2'>$bulan[$i]</th>";
                                        }
                                        ?>
                                    </tr>
                                    <tr>
                                        <?php for ($i = 0; $i < 12; $i++) {
                                            echo '<th scope="row">Produced</th>
                                            <th scope="row">Brine</th>';
                                        } ?>
                                        
                                    </tr>
                                    <tr>
                                        <td></td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>