<?php

class create extends CI_Controller
{
    public function index()
    {
        $this->load->library('session');
        $this->session->sess_destroy();
        $this->load->library('javascript');
        $this->load->database();
        $this->load->library('form_validation');
        $this->load->helper('date');
        $this->load->helper(array('form', 'url'));
        $this->load->model('SketsModel');
        $this->load->library('table');
        $this->load->view("Skets");

    } // index function

    public function logout()
    {     //   logout function

        // $this->libery();
        $this->load->library('session');
        $this->session->sess_destroy();
        $this->load->library('javascript');
        $this->load->database();
        $this->load->library('form_validation');
        $this->load->helper('date');
        $this->load->helper(array('form', 'url'));
        $this->load->model('SketsModel');
        $this->load->library('table');
        $this->load->view("Skets");
    }

public function Register_User()
    {     //      User Register Function
        $this->libery();
        $username = $this->input->post('username');
        $email = $this->input->post('email');
        $password = $this->input->post('password');
        $this->SketsModel->Register_User($username, $email, $password);
        //$this->load->view("Skets");
        redirect('http://localhost/Skets/index.php/create');

    }

        public function libery()
    {

        $this->load->library('javascript');
        $this->load->database();
        $this->load->library('form_validation');
        $this->load->helper('date');
        $this->load->helper(array('form', 'url'));
        $this->load->model('SketsModel');
        $this->load->library('table');
        $this->load->library('session');
        //$this->session->sess_destroy();

    }     //   User Register Function

    public function login()
    {    // login function start

        $this->libery();

        $email = $this->input->post('email');
        $password = $this->input->post('password');
        $session = array(
            'email' => $email,
            'password' => $password
        );
        $this->session->set_userdata($session);
        $query['query'] = $this->SketsModel->Get_User_For_Login();
        $this->load->view('logincheck', $query);
        /////////////////   GET User Prototype  Name /////////////////////////////////

        $user_id = $this->session->userdata('user_id');
        $query['prototype_name'] = $this->SketsModel->Get_Name($user_id);   //       get prototype name
        $this->load->view("Skets", $query);

    }    // login function end

    public function Insert_Prototype()
    {
        $this->libery();
        $user_id = $this->session->userdata('user_id_project');
        $prototype_name = $this->input->post('prototype_name');
        $data = $this->input->post('data');
        $this->SketsModel->Insert_Prototype($data, $prototype_name, $user_id);
    }

    public function Save_Prototype_Name()
    {
        $this->libery();
        $user_id = $this->session->userdata('user_id');
        $prototype_name = $this->input->post('prototype_name');
        $this->SketsModel->Save_Prototype_Name($prototype_name, $user_id);
    }   //    Save_Prototype_Name


    public function Get_Prototypes()
    {
        $this->libery();
        $prototype_id = $this->input->get('project_id');
        $data = $this->SketsModel->Get_Prototypes($prototype_id);
        echo $data;
    }

    public function Update_Prototypes()
    {

        $this->libery();
        $update_id = $this->input->post('update_id');
        $update_pro = $this->input->post('update_pro');
        $this->SketsModel->Update_Prototypes($update_id, $update_pro);
    }

    public function Delete_Prototypes()
    {
        $this->libery();
        $delete_id = $this->input->post('delete_key');
        $this->SketsModel->Delete_Prototypes($delete_id);

    }
}       //   class 