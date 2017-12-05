<?php

class Profile extends CI_Controller{

    public function editProfile(){
        //validation
        $this->form_validation->set_rules('first_name', 'First Name', 'required');
        $this->form_validation->set_rules('last_name', 'Last Name', 'required');
        $this->form_validation->set_rules('email', 'E Mail', 'trim|required|valid_email|is_unique[users.email]');

        if ($this->form_validation->run() == FALSE)
        {
            $this->load->view('Profile');

        }
        else
        {
            $this->load->model('Model_user');
            $response = $this->Model_user->editUserData();

            if($response){

                $this->session->set_flashdata('msg', 'Registerd sucessfully please login');
                redirect('Home/Profile');
            }
            else{
                $this->session->set_flashdata('msg', 'sumthing wrong');
                redirect('Home/Profile');
            }
        }
    }

}

