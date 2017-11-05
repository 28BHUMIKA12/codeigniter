<?php
    class Login extends CI_Controller{

        public function LoginUser()
        {
            $this->form_validation->set_rules('email', 'E Mail', 'required|valid_email');
            $this->form_validation->set_rules('password', 'Password', 'required');
        
            if ($this->form_validation->run() == FALSE)
            {
                    $this->load->view('Login');
                    
            }
            else
            {
                
                $this->load->model('Model_user');
                $response = $this->Model_user->loginUser();
                            
                if($response != FALSE ){

                    $user_data = array(
                        'user_id' => $response->user_id,
                        'first_name' => $response->first_name,
                        'last_name' => $response->last_name,
                        'email' => $response->email,
                        'logged_in' => TRUE,
                    );

                    $this->session->set_userdata($user_data);
                    
                    $this->session->set_flashdata('welcome', 'welcome back');
                    redirect('Admin/index');

                }else{
                   $this->session->set_flashdata('errormsg', 'You have entered an invalid username or password');
                   redirect('Home/Login');
        
                }
    
            }
        
        }


        function LogoutUser(){
            $this->session->unset_userdata('user_id');
            $this->session->unset_userdata('first_name');
            $this->session->unset_userdata('first_name');
            $this->session->unset_userdata('email');
            $this->session->unset_userdata('logged_in');

            redirect('Home/Login');
        }
        
    }
?>