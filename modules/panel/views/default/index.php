<?php

$this->title = 'Panel - Home';
$this->params['breadcrumbs'][] = $this->title;

date_default_timezone_set('Asia/Jakarta');
?>

<div class="row">
    <div class="col-md-9">
        <section class="card mb-3">
            <header class="card-header card-header-lg">
                Panel title
            </header>
            <div class="card-block">
                <p class="card-text">Panel content</p>
            </div>
        </section>
    </div>
    <div class="col-md-3">
        <section class="widget widget-time">
            <header class="widget-header-dark with-btn">
                Time
            </header>
            <div class="widget-time-content">
                <div class="count-item">
                    <div class="count-item-number" id="jam"></div>
                    <div class="count-item-caption">hour</div>
                </div>
                <div class="count-item divider">:</div>
                <div class="count-item">
                    <div class="count-item-number" id="menit"></div>
                    <div class="count-item-caption">min</div>
                </div>
                <div class="count-item divider">:</div>
                <div class="count-item">
                    <div class="count-item-number" id="detik"></div>
                    <div class="count-item-caption">sec</div>
                </div>
            </div>
        </section>
    </div>
</div>

<?php
$this->registerJsFile(Yii::$app->request->baseUrl . '/assets_b/backend/js/moment.js', ['depends' => [\yii\web\JqueryAsset::className()]]);
$this->registerJsFile(Yii::$app->request->baseUrl . '/assets_b/backend/js/moment-with-locales.js', ['depends' => [\yii\web\JqueryAsset::className()]]);
?>
<?php
$script = <<< JS
$(document).ready(function() {
  var interval = setInterval(function() {
    var momentNow = moment();
    momentNow.locale('id')
    //$('#date-part').html(momentNow.format('DD MMMM YYYY') + ' ' + momentNow.format('dddd').substring(0,3).toUpperCase());
    //$('#time-part').html(momentNow.format('hh:mm:ss') + ' ' +momentNow.format('A').toUpperCase());
    $('#date-part').html(momentNow.format('DD MMMM YYYY').toUpperCase());
    $('#hari-part').html(momentNow.format('dddd').toUpperCase());
    $('#time-part').html(momentNow.format('hh:mm:ss'));
    $('#jam').html(momentNow.format('hh'));
    $('#menit').html(momentNow.format('mm'));
    $('#detik').html(momentNow.format('ss'));
    $('#time-moment').html(momentNow.format('A').toUpperCase())
  }, 100);

  $('#stop-interval').on('click', function() {
    clearInterval(interval);
  });
});
JS;
$this->registerJs($script);
?> 