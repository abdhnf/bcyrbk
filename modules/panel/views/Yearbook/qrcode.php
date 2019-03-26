<?php
 // echo $urlQr;
?>
<div class="row">
    <div class="col-md-4">
    </div>
    <div class="col-md-4">
        <section class="widget widget-simple-sm">
            <img src="<?= $urlQr ?>" class="img-thumbnail" alt="Qr Code">
            <div class="widget-simple-sm-bottom">
                <a href="<?= $urlQr ?>" download="<?= "Qr Code-" . $model->name_yearbook ?>" class="btn btn-inline">Download</a>
            </div>
        </section>
    </div>
    <div class="col-md-4">
    </div>
</div> 