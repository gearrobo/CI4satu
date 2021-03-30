<style>
    @font-face{
            font-family: "digital";
            src: url('<?= base_url('css/digital.ttf') ?>');
        }
    .digital {
        
        font-family: "digital";
        /* color: #f1646c; */
    }
    .digital2 {
        
        font-size:12px;
        /* color: #f1646c; */
    }

    .box-dash {
        background: #136b26;
        color: #ffffff;
    }

    .color-white {
        color:white;
    }

    .bg-red {
        background-color: red!important;
    }

    .bg-green {
        background-color: green!important;;
    }

    .bg-blue {
        background-color: blue!important;;
    }

    .bg-yellow {
        background-color:#f3c74d!important;;
    }

    .uppercase {
        text-transform: uppercase;
    }

    .header-title {
        font-family:"Arial";
        font-size:20px;
    }
    .progress-bar {
        font-size: 11px;
    }
</style>
<div class="container-fluid">
    <div class="row page-titles">
        <div class="col-md-5 align-self-center">
            <h3 class="text-themecolor">Detail Info NDC Moratel Indonesia / Sektor</h3>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- End Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Info box -->
    <!-- ============================================================== -->
    
    <div class="row">
        <!-- Column -->
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                <label for="exampleDataList" class="form-label"></label>
                        <input class="form-control" list="datalistOptions" id="exampleDataList" placeholder="Nusantara Data Center Moratel">
                        <datalist id="datalistOptions">
                        <option value="NDC Jakarta">
                        <option value="NDC Batam">
                        <option value="NDC Palembang">
                        <option value="NDC Medan">
                        <option value="NDC Surabaya">
                        </datalist>
                </div>
            </div>
        </div>
    </div>
    <!--  -->
    <!--  -->
    <!--  -->
    <div class="col-lg-14">
        <div class="row">
            <div class="col-lg-9">
                <div class="card">
                    <table class="table table-stripped mb-0 table-centered">
                        <tr>
                            <td class="grey uppercase">
                                <div class="col-lg-12 col-md-12 col-sm-12 mt-4">
                                    <h4 class="header-title text-center uppercase middle" id="A">NDC Jakarta Lobby</h4>
                                </div>
                            </td>
                            <td class="grey uppercase">
                                <span class="badge badge-primary">Temperature</span>
                                <div class="col-lg-12 col-md-12 col-sm-12 box-dash">
                                    <h1 class="digital text-center box-dash" id="B" data-index="">17 C</h1>
                                </div>
                            </td>
                            <td class="grey uppercase">
                                <span class="badge badge-warning">Humidity</span>
                                <div class="col-lg-12 col-md-12 col-sm-12 box-dash">
                                    <h1 class="digital text-center box-dash" id="C" data-index="">66 %</h1>
                                </div>
                            </td>
                            <td class="grey uppercase">
                                <span class="badge badge-success">Back Up Time</span>
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <h1 class="digital text-center" id="D">234 Min</h1>
                                </div>
                            </td>
                            <td class="grey uppercase">
                                <span class="badge badge-purple text-white">PUE</span>
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <form action="">
                                        <input type="hidden" name="id" id="idSensor" value="">
                                        <h1 class="digital text-center" id="E">
                                            <a href="#"  style="font-family: digital!important;">1.6  PUE </a>
                                        </h1>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    </table>
                </div>
                <!-- ini tempat legend -->
                <div class="card">
                    <div class="table-responsive">
                        <table class="table table-stripped mb-0 table-centered">
                            <tr>
                                <td class="grey uppercase">
                                    <div class="col-lg-12 col-md-12 col-sm-12">
                                        <h4 class="header-title text-center uppercase middle">Summary</h4>
                                    </div>
                                </td>
                                <td class="grey uppercase text-center">
                                    <span class="badge badge-danger">Power Available</span>
                                    <div class="col-lg-12 col-md-12 col-sm-12">
                                        <h1 class="digital text-center">1 %</h1>
                                    </div>
                                </td>
                                <td class="grey uppercase text-center">
                                    <span class="badge badge-secondary">PUE</span>
                                    <div class="col-lg-12 col-md-12 col-sm-12">
                                        <h1 class="digital">1 PUE</h1>
                                    </div>
                                </td>
                                <td class="grey uppercase text-center">
                                    <span class="badge badge-success">Solar Capacity</span>
                                    <div class="col-lg-12 col-md-12 col-sm-12">
                                        <h1 class="digital text-center">1 LITER</h1>
                                    </div>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
            <!-- ini row baru -->
            <div class="col-lg-3">
                <div class="card">
                    <div class="card-body">
                    <h4 class="digital2 mt-0 mb-3">Temperature</h4>
                        <div class="progress mb-1 mt-0">
                            <div class="progress-bar bg-blue" role="progressbar" style="width: 33%"> 0 - 17</div>
                            <div class="progress-bar bg-green" role="progressbar" style="width: 34%">18 - 27</div>
                            <div class="progress-bar bg-red" role="progressbar" style="width: 33%">28 - 50</div>
                        </div>
                        <h4 class="digital2 mt-0 mb-3">Humidity</h4>
                        <div class="progress mb-1 mt-0">
                            <div class="progress-bar bg-blue" role="progressbar" style="width: 33%"> 0 - 39</div>
                            <div class="progress-bar bg-green" role="progressbar" style="width: 34%">40 - 60</div>
                            <div class="progress-bar bg-red" role="progressbar" style="width: 33%">61 - 100</div>
                        </div>
                        <h4 class="digital2 mt-0 mb-3">LVMDP</h4>
                        <div class="progress mb-1 mt-0">
                            <div class="progress-bar bg-blue" role="progressbar" style="width: 25%"> 0 - 50</div>
                            <div class="progress-bar bg-green" role="progressbar" style="width: 25%">51 - 75</div>
                            <div class="progress-bar bg-yellow" role="progressbar" style="width: 25%">76 - 80</div>
                            <div class="progress-bar bg-red" role="progressbar" style="width: 25%">81 - 100</div>
                        </div>
                        <h4 class="digital2 mt-0 mb-3">LVMDP (Capacity Power 1110 KVA)</h4>
                        <div class="progress mb-1 mt-0">
                            <div class="progress-bar bg-green" role="progressbar" style="width: 33%"> 12000 - 10000</div>
                            <div class="progress-bar bg-yellow" role="progressbar" style="width: 33%">1000 - 8000</div>
                            <div class="progress-bar bg-red" role="progressbar" style="width: 34%">8000 - 5000</div>
                        </div>
                        <h4 class="digital2 mt-0 mb-3">PUE</h4>
                        <div class="mb-1 mt-0">
                            <ul class="mb-0">
                                <li><i class="mdi mdi-circle-medium text-secondary"></i> <span>03.00 - Very Inefective</span></li>
                                <li><i class="mdi mdi-circle-medium text-secondary"></i> <span>02.05 - Inefective</span></li>
                                <li><i class="mdi mdi-circle-medium text-secondary"></i> <span>02.00 - Average</span></li>
                                <li><i class="mdi mdi-circle-medium text-secondary"></i> <span>01.05 - Efficient</span></li>
                                <li><i class="mdi mdi-circle-medium text-secondary"></i> <span>01.02 - Very Efficient</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--  -->
    <!--  -->
    <!--  -->
</div>




                                