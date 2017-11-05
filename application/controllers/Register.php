<?php

    class Register extends CI_Controller{

        public function registerUser(){
             //validation
            $this->form_validation->set_rules('first_name', 'First Name', 'required');
            $this->form_validation->set_rules('last_name', 'Last Name', 'required');
            $this->form_validation->set_rules('email', 'E Mail', 'trim|required|valid_email|is_unique[users.email]');
            $this->form_validation->set_rules('password_1', 'Password', 'required');
            $this->form_validation->set_rules('password_2', 'Password', 'trim|required|matches[password_1]');

            if ($this->form_validation->run() == FALSE)
            {
                    $this->load->view('Register');
                    
            }
            else
            {
                $this->load->model('Model_user');
                $response = $this->Model_user->insertUserData();

                if($response){
                    
                    $this->session->set_flashdata('msg', 'Registerd sucessfully please login');
                    redirect('Home/Register');  
                }
                else{
                    $this->session->set_flashdata('msg', 'sumthing wrong');
                    redirect('Home/Register');
                }
            }
        }
        
    }

?>