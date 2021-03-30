<div class="container-fluid">
    <div class="row page-titles">
        <div class="col-md-5 align-self-center">
            <h3 class="text-themecolor">Setting</h3>
        </div>
    </div>

    <div class="row">
    <?php
        $inputups = "upson";
        $ups = "normal";
    ?>
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                <label for="exampleDataList" class="form-label"></label>
                        <input class="form-control" list="datalistOptions" id="exampleDataList" placeholder="UPS List">
                        <datalist id="datalistOptions">
                        <?php foreach($list as $upsl): ?>
                        <option value="<?= $upsl['name'];?>">
                        <?php endforeach ?>
                        </datalist>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <table style="width:100%"border=0>
                    <tr>
                        <h3 style="1px solid-black">Wave Power 120Kva (<?= $ups;?>)</h3>
                    </tr>
                    <tr >
                        <td style="text-align:center">
                            <div><h5>INVOL L1 = 123&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;INVOL L3 = 567</h5></div>
                            <img src="<?= base_url()?>/assets/images/datarack/input_<?=$inputups;?>.gif" width="450" height="10">
                            <div><h5> INVOL L2 = 234</h5></div>
                        </td>
                        <td style="text-align:center">
                            <img src="<?= base_url()?>/assets/images/datarack/ups_<?=$ups;?>.gif"  width="290" height:240px >
                        </td>
                        <td style="text-align:center">
                            <img src="<?= base_url()?>/assets/images/datarack/input_<?=$inputups;?>.gif" width="450" height="10">
                        </td>
                    </tr>
                    </table>
                </div>     
            </div>
            <!--end card-->
        </div>
    </div>

    <div class="row">
    <?php
        $inputups = "upson";
        $ups = "normal";
    ?>
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <table style="width:100%" border=1>
                    <tr>
                        <td >1</td>   
                        <td>2</td> 
                        <td>3</td>                  
                    </tr>
                    </table>
                </div>     
            </div>
            <!--end card-->
        </div>  
    </div>
    <!--  -->
</div>