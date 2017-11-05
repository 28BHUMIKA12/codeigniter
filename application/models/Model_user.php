<?php

class Model_user extends CI_Model
{

    //fo user registration
    function insertUserData (){
        $registerFormData = array(
          'first_name' =>  $this->input->post('first_name',TRUE),
          'last_name' =>  $this->input->post('last_name',TRUE),
          'email' =>  $this->input->post('email',TRUE),
          'password' =>  md5($this->input->post('password_1',TRUE))

        );

        return $this->db->insert('users', $registerFormData);
        
    }

    //for user login part
    function loginUser() {

            $email =  $this->input->post('email');
            $password =  md5($this->input->post('password'));

            $this->db->where('email',$email);
            $this->db->where('password',$password);
            $respond = $this->db->get('users');

            if($respond->num_rows() == 1){
                return $respond->row(0);
            }else{
                return FALSE;
            }

    }

}