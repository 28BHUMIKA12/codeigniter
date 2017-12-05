<?php include "common/head.php" ?>
<?php include "common/nav.php" ?>

<?php
if(!$is_logged_in){
    redirect('Home/Login');
}

if($this->session->flashdata('welcome') ){
    echo "<h3>".$this->session->flashdata('welcome')."</h3>";
}
?>



    <h1>This is profile page - welcome
        <?php
        echo $this->session->userdata('first_name')." ";
        echo $this->session->userdata('last_name');
        ?>
    </h1>




<?php echo form_open('Profile/editProfile'); ?>
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
        </div>

        <button type="submit" class="btn btn-primary">Edit my Profile</button>
    </div>
<?php echo form_close(); ?>



<?php include "common/scripts.php" ?>
<?php include "common/foot.php" ?>