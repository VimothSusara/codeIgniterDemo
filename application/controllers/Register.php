<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Register extends CI_Controller
{
    public function registerUser()
    {
        // echo "Test";
        // set rules for the form validation(not related to frontend validation checking)
        $this->form_validation->set_rules('fname', 'First Name', 'required');
        $this->form_validation->set_rules('lname', 'Last Name', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique[users.email]');
        $this->form_validation->set_rules('password', 'Password', 'required');
        $this->form_validation->set_rules('conpassword', 'Confirm Password', 'required|matches[password]');

        if ($this->form_validation->run() === false) {
            // view register page with the potential errors
            $this->load->view('register');
        } else {

            // loading the model class
            $this->load->model('Model_User');
            $response = $this->Model_User->insertUserData();
            print_r($response);

            if ($response) {
                $this->session->set_flashdata('msg', 'Successfuly Registerd. Please Login.');
                redirect('Home/register');
            } else {
                $this->session->set_flashdata('msg', 'Something went wrong!');
                redirect('Home/register');
            }

        }

    }
}