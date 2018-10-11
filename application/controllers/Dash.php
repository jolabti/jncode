<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dash extends CI_Controller
{
    public function index()
    {
        if ($this->session->userdata("email")=="") {
            $this->load->view("dash/dash_login");
        } else {
            $this->mydashboard();
        }

        //display_page("dash/dash_login");
    }
    public function mydashboard()
    {
        $this->load->view("dash/dash_head");
        $this->load->view("dash/dash_main");
        $this->load->view("dash/dash_foot");
        //display_page("dash/dash_login");
    }

    public function portofolios()
    {
        $this->load->view("dash/dash_head");
        $this->load->view("dash/dash_portofolio");
        $this->load->view("dash/dash_foot");
    }
    public function setportofolio()
    {
        $this->load->view("dash/dash_head");
        $this->load->view("dash/dash_set_portofolio");
        $this->load->view("dash/dash_foot");
    }
    public function setproject()
    {
        $this->load->view("dash/dash_head");
        $this->load->view("dash/dash_set_project");
        $this->load->view("dash/dash_foot");
    }

    public function page404()
    {
        $this->load->view("dash/dash_404");
    }

    //Logic Controller

    public function auth()
    {
        $email = $this->input->post("email");
        $password = $this->input->post("password");

        $cekUser = $this->Dashmodel->dm_login($email, $password);
        $cekData = $this->Dashmodel->dm_user_data($email, $password);

        if ($cekUser>0) {
            $this->mydashboard();

            $dataSession =  array(
              'email' => $email,
              'status' => $cekData->user_status,
              'role' =>  $cekData->user_role
            );

            $this->session->set_userdata($dataSession);
        } else {
            $this->index();
        }
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect('/');
    }
}
