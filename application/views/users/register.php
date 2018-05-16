<?php echo form_open('user/register', array('class' => 'needs-validation', 'novalidate' => '')); ?>
 <main role="main" class="container">
   <div class="form-group">
       <label>Nama Lengkap</label>
       <input type="text" class="form-control" name="nama" placeholder="Nama Lengkap">
   </div>
   <div class="form-group">
       <label>Kodepos</label>
       <input type="text" class="form-control" name="kodepos" placeholder="Kodepos">
   </div>
   <div class="form-group">
       <label>Email</label>
       <input type="text" class="form-control" name="email" placeholder="Email">
   </div>
   <div class="form-group">
       <label>Username</label>
       <input type="text" class="form-control" name="username" placeholder="Username">
   </div>
   <div class="form-group">
       <label>Password</label>
       <input type="text" class="form-control" name="password" placeholder="Password">
   </div>

   <button type="submit" class="btn btn-primary btn-block">Daftar</button>
</main>
<?php echo form_close(); ?>