<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Angelita Justien Jumadi</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  </head>
  <body>
    <nav class="navbar navbar-expand-md navbar-dark bg-dark mb-4">
      <a class="navbar-brand" href="#">Angelita's</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Link</a>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled" href="#">Disabled</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url('index.php/Blog') ?>">Blog</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url('index.php/Category') ?>">Category</a>
          </li>
        </ul>
      </div>
    </nav>

    <main role="main" class="container">
      <a href="<?php echo base_url('index.php/category/create') ?>" class="btn btn-primary mb-3">Tambah</a>
    <table class="table table-bordered"> 
       <thead> 
         <th>#</th> 
         <th>Name</th> 
         <th>Description</th> 
         <th>Action</th> 
       </thead> 
       <tbody> 
         <?php foreach ($cat_read as $key => $value): ?> 
           <tr> 
             <td><?php echo $key+1 ?></td> 
             <td><?php echo $value['cat_name'] ?></td> 
             <td><?php echo $value['cat_description'] ?></td> 
             <td>
              <a href="<?php echo base_url('index.php/category/update/'.$value['cat_id']) ?>" class="btn btn-sm btn-success">Ubah</a> 
               <a href="<?php echo base_url('index.php/category/delete/'.$value['cat_id']) ?>" class="btn btn-sm btn-danger">Hapus</a>
             </td> 
           </tr> 
         <?php endforeach ?> 
       </tbody> 
     </table>
    </main>
  </body>    
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</html>
