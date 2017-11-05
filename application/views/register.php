<?php include "common/head.php" ?>
<?php include "common/nav.php" ?>

<?php echo validation_errors(); ?>
<?php echo form_open('Register/registerUser'); ?>
<div class="container">
	<h2>Login page</h2>
  <?php if($this->session->flashdata('msg') ){
    echo "<h3>".$this->session->flashdata('msg')."</h3>";
  }
  ?>
	<div class="form-group">
    <label for="first_name">First Name</label>
    <input type="text" class="form-control" name="first_name" id="first_name" aria-describedby="emailHelp" placeholder="First Name">
  </div>
  <div class="form-group">
    <label for="last_name">Last Name</label>
    <input type="text" class="form-control" name="last_name" id="last_name" aria-describedby="emailHelp" placeholder="Last Name">
  </div>
  <div class="form-group">
    <label for="email">Email address</label>
    <input type="email" class="form-control" name="email" id="email" aria-describedby="emailHelp" placeholder="Email">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="password_1">Password</label>
    <input type="password" class="form-control" name="password_1" id="password_1" placeholder="Password">
  </div>
  <div class="form-group">
    <label for="password_2">Conform Password</label>
    <input type="password" class="form-control" name="password_2" id="password_2" placeholder="Conform Password">
  </div>

  <button type="submit" class="btn btn-primary">Submit</button>
</div>
<?php echo form_close(); ?>

<?php include "common/scripts.php" ?>
<?php include "common/foot.php" ?>