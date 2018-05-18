<?php echo form_open('user/login'); ?>
<main role="main" class="container"> 
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <h1 class="text-center"><?php echo $page_title; ?></h1>
            <div class="form-group">
                <input type="text" name="username" class="form-control" placeholder="Masukkan Username" required autofocus>
            </div>
            <div class="form-group">
                <input type="password" name="password" class="form-control" placeholder="Masukkan Password" required>
            </div>
            <button type="submit" class="btn btn-primary btn-block">Login</button>
        </div>
    </div>
</main>
<?php echo form_close(); ?>

