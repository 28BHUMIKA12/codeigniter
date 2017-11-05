<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">About</a>
      </li>

	  <li class="nav-item">
        <a class="nav-link" href="#">Contact</a>
      </li>

      
    </ul>
	<ul class="navbar-nav flex-row ml-md-auto d-none d-md-flex">
        <?php if(!$is_logged_in){ ?>
		<li class="nav-item"><a class="nav-link" href="<?php echo base_url("index.php/Home/Login"); ?>">Login</a></li>
		<li class="nav-item"><a class="nav-link" href="<?php echo base_url("index.php/Home/Register"); ?>">Registor</a></li>
		<?php
        }
        if($is_logged_in){

        ?>
        <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <?php echo $this->session->userdata('last_name'); ?>
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="<?php echo base_url('index.php/Login/LogoutUser'); ?>">Log out</a>

          <a class="dropdown-item" href="#">profile</a>
        </div>
      </li>
        <?php } ?>
	</ul>
  </div>
</nav>