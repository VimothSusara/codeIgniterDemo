<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{

    public function loginUser()
    {

        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('login');
        } else {
            $this->load->model('Model_User');
            $result = $this->Model_User->loginUser();
            // print_r($result);
            // echo $result;
            if ($result != false) {

                $user_data = array(
                    'user_id' => $result->id,
                    'fname' => $result->fname,
                    'lname' => $result->lname,
                    'email' => $result->email,
                    'logedIn' => TRUE,
                );

                // to manage user specific data you can use set_userdata() method
                $this->session->set_userdata($user_data);
                $this->session->set_flashdata('welcome', 'Welcome');
                redirect('Admin/index');
            } else {
                // echo $result;
                $this->session->set_flashdata('errmsg', 'Wrong username or password!');
                redirect('home/login');
            }
        }
    }

    public function logoutUser()
    {
        $this->session->unset_userdata('user_id');
        $this->session->unset_userdata('fname');
        $this->session->unset_userdata('lname');
        $this->session->unset_userdata('email');
        $this->session->unset_userdata('logedIn');
        redirect('home/login');
    }
}