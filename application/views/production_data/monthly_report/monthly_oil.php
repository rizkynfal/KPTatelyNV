<section id="monthly-oil-table" class="collapse show col">
    <div class="d-flex mt-5 container-fluid" style="background-color: #FFF !important; z-index: 5;">
        <div class="p-5 col-md-10 shadow mb-5" style="border-radius: 30px;">
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <a class="btn btn-primary" href="<?= base_url('production/productionData') ?>" role="button">Kembali</a>
                        <h3 class="text-center text-secondary">MONTHLY PRODUCED OIL</h3>
                        <table id="example" class="table table-bordered table-hover text-center border-dark">
                            <tr>
                                <th rowspan="2">Date </th>
                                <?php $bulan = [1 => "Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember"];
                                for ($i = 1; $i <= 12; $i++) {
                                    echo '<th>' . $bulan[$i] . '</th>';
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
</section>