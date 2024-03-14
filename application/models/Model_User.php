<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Model_User extends CI_Model
{

    function insertUserData()
    {

        // echo "Test";
        $data = array(
            'fname' => $this->input->post('fname',TRUE),
            'lname' => $this->input->post('lname',TRUE),
            'email' => $this->input->post('email',TRUE),
            'password' => sha1($this->input->post('password',TRUE)),
        );

        // print_r($data);

        return $this->db->insert('users', $data);
        // die();

    }

    function loginUser() {

        $email = $this->input->post('email');
        $password = $this->input->post('password');

        $this->db->where('email', $email);
        $this->db->where('password', $password);

        $respond = $this->db->get('users');
        if ($respond->num_rows() > 0){
            // print_r($respond->row(0));
            return $respond->row(0);
        }
        else{
            return false;
        }

    }

}