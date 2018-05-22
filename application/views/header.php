<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
<head>
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <meta http-equiv="x-ua-compatible" content="ie=edge">
 <title></title>
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
   <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.13/datatables.min.css"/> 
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script> 
</head>
<body>
	<nav class="navbar navbar-expand-md navbar-dark bg-dark">
      <a class="navbar-brand" href="#">Angelita's</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="<?php echo base_url('Home') ?>">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url('About') ?>">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url('Contact') ?>">Contact</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url('News') ?>">News</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url('Blog') ?>">Blog</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url('Blog/pagination') ?>">Blog Pagination</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url('Blog/datatable') ?>">Blog Data Tables</a>
          </li>
        </ul>

      <?php if($this->
        session->userdata('user_loggedin')):?>
          <div class="btn-group" role="group" aria-label="Data baru">
      <?php echo anchor('User/login', 'Login', array('class' => 'btn btn-outline-light')); ?>
          </div>
      <?php endif; ?>

      <?php if($this->
        session->userdata('user_loggedin')):?>
          <div class="btn-group" role="group" aria-label="Data baru">
      <?php echo anchor('User/logout', 'Logout', array('class' => 'btn btn-outline-light')); ?>
          </div>
      <?php endif; ?>

      </div>
    </nav>

    <?php if($this->session->flashdata('user_registered')): ?>
         <?php echo '<div class="alert alert-success" role="alert">'.$this->session->flashdata('user_registered').'</div>'; ?>
       <?php endif; ?>

       <?php if($this->session->flashdata('login_failed')): ?>
         <?php echo '<p class="alert alert-danger">'.$this->session->flashdata('login_failed').'</p>'; ?>
       <?php endif; ?>

        <?php if($this->session->flashdata('user_loggedout')): ?>
         <?php echo '<p class="alert alert-success">'.$this->session->flashdata('user_loggedout').'</p>'; ?>
       <?php endif; ?>

    <?php if(!$this->session->userdata('logged_in')) : ?>

      <div class="btn-group" role="group" aria-label="Data baru">
       <?php echo anchor('user/register', 'Register', array('class' => 'btn btn-outline-light')); ?>
       <?php echo anchor('user/login', 'Login', array('class' => 'btn btn-outline-light')); ?>

      </div>

    <?php endif; ?>

    <?php if($this->session->userdata('logged_in')) : ?>
     <div class="btn-group" role="group" aria-label="Data baru">

       <?php echo anchor('blog/create', 'Artikel Baru', array('class' => 'btn btn-outline-light')); ?>
       <?php echo anchor('category/create', 'Kategori Baru', array('class' => 'btn btn-outline-light')); ?>
       <?php echo anchor('user/logout', 'Logout', array('class' => 'btn btn-outline-light')); ?>
     </div>
    <?php endif; ?>
