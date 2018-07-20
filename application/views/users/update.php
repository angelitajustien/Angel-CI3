<?php echo form_open('', array('class' => 'needs-validation', 'novalidate' => '')); ?> 

<main role="main" class="container"> 
  <?php echo validation_errors();?>
   <div class="form-group"> 
       <label>Nama Lengkap</label> 
       <input type="text" class="form-control" name="nama" placeholder="Nama Lengkap" value="<?php echo $user->nama ?>"> 
   </div> 

   <div class="form-group"> 
       <label>Kodepos</label> 
       <input type="text" class="form-control" name="kodepos" placeholder="Kodepos" value="<?php echo $user->kodepos ?>"> 
   </div> 

   <div class="form-group"> 
       <label>Email</label> 
       <input type="email" class="form-control" name="email" placeholder="Email" value="<?php echo $user->email ?>"> 
   </div> 

   <div class="form-group"> 
       <label>Username</label> 
       <input type="text" class="form-control" name="username" placeholder="Username" value="<?php echo $user->username ?>"> 
   </div> 

   <div class="form-group"> 
       <label>Password</label> 
       <input type="text" class="form-control" name="password" placeholder="Password" value=""> 
   </div>
   <div class="form-group"> 
       <label>Level</label> 
       <select name="level" id="" class="form-control">
         <?php foreach ($this->db->get('level')->result() as $key => $value): ?>
           <option value="<?php echo $value->id ?>"><?php echo $value->name ?></option>
         <?php endforeach ?>
       </select>
   </div>
   <button type="submit" class="btn btn-primary btn-block">Daftar</button> 
   </main> 
<?php echo form_close(); ?>