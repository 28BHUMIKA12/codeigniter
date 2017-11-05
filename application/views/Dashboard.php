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



<h1>This is new Dash bord - welcome
    <?php
    echo $this->session->userdata('first_name')." ";
    echo $this->session->userdata('last_name');
    ?>
</h1>



<?php include "common/scripts.php" ?>
<?php include "common/foot.php" ?>