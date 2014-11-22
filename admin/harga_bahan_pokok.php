<br>
<div class="container">
  <div class="row">
    <div class="span12">
      <div class="well">
        <div class="bs-example bs-example-tabs">
          <ul id="myTab" class="nav nav-tabs">
            <li class="active"><a href="#bahan_pokok" data-toggle="tab"><i class="icon-th"></i>&nbsp;Input Data Bahan Pokok&nbsp;&nbsp;</a></li>
            <li><a href="#ph" data-toggle="tab"><i class="icon-th"></i>&nbsp;Input Data Bahan Perkembangan Harga&nbsp;&nbsp;</a></li>
            <li><a href="#persediaan" data-toggle="tab"><i class="icon-th"></i>&nbsp;Input Data Bahan Persediaan&nbsp;&nbsp;</a></li>
          </ul>

          <div id="myTabContent" class="tab-content">
            <div class="tab-pane fade in active" id="bahan_pokok">
              <?php include 'bahan_pokok_input.php'; ?>
            </div>
            <div class="tab-pane fade" id="ph">
              <?php include 'ph_harga_input.php'; ?>
            </div>
            <div class="tab-pane fade" id="persediaan">
              <?php include 'persediaan_input.php'; ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<br>
<br>
<br>