<?php include "common/head.php" ?>
<?php include "common/nav.php" ?>
<div class="container">
	<h2>Login page</h2>

  <?php echo validation_errors(); ?>
  <?php echo form_open('Login/LoginUser'); ?>

  <?php 
  if($this->session->flashdata('errormsg') ){
    echo "<h3>".$this->session->flashdata('errormsg')."</h3>";
  }
  ?>
  <div class="form-group">
    <label for="email">Email address</label>
    <input type="email" class="form-control" id="email" aria-describedby="emailHelp" name="email" placeholder="Enter email">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="password">Password</label>
    <input type="password" class="form-control" id="password" name="password" placeholder="Password">
  </div>

  <button type="submit" class="btn btn-primary">Submit</button>
<?php echo form_close(); ?>
</div>


<?php include "common/scripts.php" ?>
<?php include "common/foot.php" ?>