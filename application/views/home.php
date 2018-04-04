<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$this->load->view('header') ?>
<!--  <main role="main" class="container">
 <div class="row">
  <div class="col">
   <div class="jumbotron alert-primary mt-3">
    <h1 class="display-4">Assalamualaikum, Ikhwah fillah! </h1>
    <p class="lead">1641720056 Angelita Justien Jumadi</p>
    <hr class="my-4">
    <p> <b>Man saaro alaa darbi wasola</b> </p>
    <p> "Barang siapa berjalan pada jalannya, maka dia akan sampai pada tujuannya" </p>
   </div>
  </div>
 </div>/.row

</main>/.container -->

<div class="row">
<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
<div class="table-responsive">
<h1>Biodata Saya dari Array</h1>
  <table class="table table-hover">
    <tbody>
      <?php foreach ($biodata_array as $key) { ?>
      <tr>
        <td><?php echo $key['nama'] ?></td>
      </tr>
      <tr>
        <td><?php echo $key['nim'] ?></td>
      </tr>
      <tr>
        <td><?php echo $key['alamat'] ?></td>
      </tr>
      <?php } ?>
    </tbody>
  </table>
</div>
</div>
<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
<div class="table-responsive">
<h1>Biodata Saya dari Object</h1>
  <table class="table table-hover">
    <tbody>
      <?php foreach ($biodata_object as $key) { ?>
      <tr>
        <td><?php echo $key->nama ?></td>
      </tr>
      <tr>
        <td><?php echo $key->nim ?></td>
      </tr>
      <tr>
        <td><?php echo $key->alamat ?></td>
      </tr>
      <?php } ?>
    </tbody>
  </table>
</div>
</div>
<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
<div class="table-responsive">
<h1>Biodata Saya Builder dari Array</h1>
  <table class="table table-hover">
    <tbody>
      <?php foreach ($biodatabuilder_array as $key) { ?>
      <tr>
        <td><?php echo $key['nama'] ?></td>
      </tr>
      <tr>
        <td><?php echo $key['nim'] ?></td>
      </tr>
      <tr>
        <td><?php echo $key['alamat'] ?></td>
      </tr>
      <?php } ?>
    </tbody>
  </table>
</div>
</div>
<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
<div class="table-responsive">
<h1>Biodata Saya Builder dari Object</h1>
  <table class="table table-hover">
    <tbody>
      <?php foreach ($biodatabuilder_object as $key) { ?>
      <tr>
        <td><?php echo $key->nama ?></td>
      </tr>
      <tr>
        <td><?php echo $key->nim ?></td>
      </tr>
      <tr>
        <td><?php echo $key->alamat ?></td>
      </tr>
      <?php } ?>
    </tbody>
  </table>
</div>
</div> 
</div>

<?php $this->load->view('footer') ?>