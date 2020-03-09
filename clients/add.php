<?php

$title="Clients";
 $path = "../";

 include $path."includes/head.php";
 include $path."includes/menu.php";
?>

<div class="container-fluid dashboard">
<div class="row">
    <div class="col-lg-12 text-white pt-2 pb-2 header">
        <h4>Nouveau client</h4>
    </div>
</div>
<div class="row">
    <div class="col-lg-4 col-md-4">
        <div class="card bg-light mt-3" style="cursor:pointer" id="btn_prt">
            <div class="card-body">
                <h5 class="card-title">Particulier</h5>
                <h6 class="card-subtitle mb-3 ">client sans société</h6>
            </div>
        </div>
    </div>
    <div class="col-lg-4 col-md-4">
        <div class="card bg-light mt-3" style="cursor:pointer" id="btn_pro">
            <div class="card-body">
                <h5 class="card-title">Professionnel</h5>
                <h6 class="card-subtitle mb-3">client avec société</h6>
            </div>
        </div>
    </div>
</div>
<?php

include "pro.php";
include "part.php";

?>
    
</div>

<?php include $path."includes/footer.php"; ?>