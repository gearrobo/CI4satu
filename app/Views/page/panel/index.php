<div class="container-fluid">
    <div class="row page-titles">
        <div class="col-md-5 align-self-center">
            <h3 class="text-themecolor">Setting</h3>
        </div>
    </div>

    <?php
        $device_id = "02_04";
        $add = "4";
        $ip = "190.108.1.103";
        $protocol = "MODBUS RTU";
        $location = "UPS Lobby";
        date_default_timezone_set('Asia/Jakarta');
        // $wktu = date('Y-m-d  H:i:s');
        $wktu = date('H:i:s');
        $tgl = date('D, d-M-Y');
    ?>

    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                <label for="exampleDataList" class="form-label"></label>
                        <input class="form-control" list="datalistOptions" id="exampleDataList" placeholder="Panel List">
                        <datalist id="datalistOptions">
                            <option value="NDC Jakarta">
                        </datalist>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                <h3>Panel LVMDV</h3>
                    <table class="table" border=1>
                    <thead >
                        <tr>
                        <th bgcolor='FFCC9D'>Device Id</th>
                        <th bgcolor='FFCC9D'>Modbus Address / IP Gateway</th>
                        <th bgcolor='FFCC9D'>Protocol</th>
                        <th bgcolor='FFCC9D'>Description</th>
                        <th bgcolor='FFCC9D'>Location</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td bgcolor='FFFCC'><?= $device_id;?></td>
                            <td bgcolor='FFFCC'><?= $add." / ".$ip; ?></td>
                            <td bgcolor='FFFCC'><?= $protocol; ?></td>
                            <td bgcolor='FFFCC'><?= "Panel LVMDV";?></td>
                            <td bgcolor='FFFCC'><?= "Ruang ".$location;?></td>
                        </tr>
                        <tr>
                            <td bgcolor='FFFCC'></td>
                            <th bgcolor='FFCC9D'>Tag Name</th>
                            <th bgcolor='FFCC9D'>Register</th>
                            <th bgcolor='FFCC9D'>Description</th>
                            <th bgcolor='FFCC9D'>Data</th>
                        </tr>
                        <!-- awal table Arus -->
                        <tr>
                            <th bgcolor='FFCC9D'>Current (A)</th>
                            <td bgcolor='FFCC9D'></td>
                            <td bgcolor='FFCC9D'></td>
                            <td bgcolor='FFCC9D'></td>
                            <td bgcolor='FFCC9D'></td>
                        </tr>
                        <tr>
                            <td bgcolor='FFFCC'></td>
                            <td bgcolor='FFCC9D'>L1RUPS_PO_PM810_IA</td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td bgcolor='FFFCC'></td>
                            <td bgcolor='FFCC9D'>L1RUPS_PO_PM810_IB</td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td bgcolor='FFFCC'></td>
                            <td bgcolor='FFCC9D'>L1RUPS_PO_PM810_IC</td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <!-- akhir tabel arus -->
                        <!-- awal table Voltage  -->
                        <tr>
                            <th bgcolor='FFCC9D'>Voltage 3 PHASE (V)</th>
                            <td bgcolor='FFCC9D'></td>
                            <td bgcolor='FFCC9D'></td>
                            <td bgcolor='FFCC9D'></td>
                            <td bgcolor='FFCC9D'></td>
                        </tr>
                        <tr>
                            <td bgcolor='FFFCC'></td>
                            <td bgcolor='FFCC9D'>L1RUPS_PO_PM810_VAB</td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td bgcolor='FFFCC'></td>
                            <td bgcolor='FFCC9D'>L1RUPS_PO_PM810_VBC</td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td bgcolor='FFFCC'></td>
                            <td bgcolor='FFCC9D'>L1RUPS_PO_PM810_VCD</td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <!-- akhir tabel Voltage -->
                        <!-- awal table Voltage  Unbalance-->
                        <tr>
                            <th bgcolor='FFCC9D'>Voltage 1 PHASE(V)</th>
                            <td bgcolor='FFCC9D'></td>
                            <td bgcolor='FFCC9D'></td>
                            <td bgcolor='FFCC9D'></td>
                            <td bgcolor='FFCC9D'></td>
                        </tr>
                        <tr>
                            <td bgcolor='FFFCC'></td>
                            <td bgcolor='FFCC9D'>L1RUPS_PO_PM810_VAN</td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td bgcolor='FFFCC'></td>
                            <td bgcolor='FFCC9D'>L1RUPS_PO_PM810_VBN</td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td bgcolor='FFFCC'></td>
                            <td bgcolor='FFCC9D'>L1RUPS_PO_PM810_VCN</td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <!-- akhir tabel Voltage Unbalance-->
                        <!-- awal table Power-->
                        <tr>
                            <th bgcolor='FFCC9D'>Power (P)</th>
                            <td bgcolor='FFCC9D'></td>
                            <td bgcolor='FFCC9D'></td>
                            <td bgcolor='FFCC9D'></td>
                            <td bgcolor='FFCC9D'></td>
                        </tr>
                        <tr>
                            <td bgcolor='FFFCC'></td>
                            <td bgcolor='FFCC9D'>L1RUPS_PO_PM810_ACPA</td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td bgcolor='FFFCC'></td>
                            <td bgcolor='FFCC9D'>L1RUPS_PO_PM810_ACPB</td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td bgcolor='FFFCC'></td>
                            <td bgcolor='FFCC9D'>L1RUPS_PO_PM810_ACPC</td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <!-- akhir tabel Power-->
                        <!-- awal table Parameter-->
                        <tr>
                            <th bgcolor='FFCC9D'>Parameter </th>
                            <td bgcolor='FFCC9D'></td>
                            <td bgcolor='FFCC9D'></td>
                            <td bgcolor='FFCC9D'></td>
                            <td bgcolor='FFCC9D'></td>
                        </tr>
                        <tr>
                            <td bgcolor='FFFCC'></td>
                            <td bgcolor='FFCC9D'>L1RUPS_PO_PM810_VAVG</td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td bgcolor='FFFCC'></td>
                            <td bgcolor='FFCC9D'>L1RUPS_PO_PM810_ACPB</td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td bgcolor='FFFCC'></td>
                            <td bgcolor='FFCC9D'></td>
                            <td bgcolor='FFCC9D'></td>
                            <td bgcolor='FFCC9D'></td>
                            <td bgcolor='FFCC9D'></td>
                        </tr>
                        <tr>
                            <td bgcolor='FFFCC'></td>
                            <td bgcolor='FFCC9D'>L1RUPS_PO_PM810_ACPC</td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td bgcolor='FFFCC'></td>
                            <td bgcolor='FFCC9D'>L1RUPS_PO_PM810_ACPC</td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <!-- akhir tabel Parameter-->
                        <tr>
                            <th ><?= $wktu;?></th>
                            <th colspan="2"><?= $tgl;?></th>
                            <td class="text-right" colspan="2">Version Table I 2.01.00</td>
                        </tr>
                    </tbody>
                    </table>
                    <div></div>
                    <table>
                        <tr class="float-right">
                            <button style="width:300px" type="button" class="btn btn-warning m-l-10" >Export to Excell</button>
                            <button style="width:300px" type="button" class="btn btn-warning m-l-10" >Print to PNG</button>
                        </tr>
                    </table>
                </div>
                <!--end card-body-->
            </div>
            <!--end card-->
        </div>
    </div>

    <!--  -->
</div>