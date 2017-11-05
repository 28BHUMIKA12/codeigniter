
<?php
if(!($this->session->userdata('logged_in'))){
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

<h3><a href="<?php echo base_url('index.php/Login/LogoutUser'); ?>">Log out me</a> </h3>