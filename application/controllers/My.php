<?php
defined('BASEPATH') or exit('No direct script access allowed');

class My extends CI_Controller
{
    public function index()
    {
        //$this->load->view('welcome_message', array('error' => ' ' ));
        $this->load->view('my-login');
    }

    public function auth()
    {
        $this->input->post('my-email');
        $this->input->post('my-password');
    }



    public function profiles()
    {
        echo base_url();
    }


    public function welcome($error = array())
    {
        $this->load->view('welcome_message', $error);
    }



    public function dashboard()
    {
        $this->load->view('my-header');
        $this->load->view('my-navigate');
        $this->load->view('my-dashboard');
        $this->load->view('my-footer');
    }


    // public function portfolio()
    // {
    //     $this->load->view('my-header');
    //     $this->load->view('my-navigate');
    //     $this->load->view('my-portfolio');
    //     $this->load->view('my-footer');
    // }


    public function navigation($identifier)
    {
        $this->load->view('my-header');
        $this->load->view('my-navigate');
        $data["labelHeader"] = "";
        $data["labelSetform"] = "";

        if ($identifier==1) {
            $data["labelHeader"] = "Portfolio";
            $data["labelSetform"] = "1";
        } else {
            $data["labelHeader"] = "Work History";
            $data["labelSetform"] = "2";
        }


        $this->load->view('my-listview', $data);
        $this->load->view('my-footer');
    }


    public function setform($identifier)
    {
        $labelname="";

        switch ($identifier) {
           case 1:
               $labelname="Portfolio";

               break;
           case 2:
               $labelname="Work History";
               break;
           case 3:
               $labelname="Articles";
               break;

           default:
               $labelname="Portfolio";
        }



        $data["identifier"] = $identifier;
        $data["labelname"] = $labelname;

        //  echo json_encode($data);
        $this->load->view('my-header');
        $this->load->view('my-navigate');
        $this->load->view('my-cms', $data);
        $this->load->view('my-footer');
    }



    public function aksi_upload()
    {
        $config['upload_path']          = './my-assets/';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['max_size']             = 2048;
        $config['max_width']            = 2048;
        $config['max_height']           = 1200;
        $config['file_name']           = "portfolio-".date('dmyhis');

        $this->load->library('upload', $config);

        if (! $this->upload->do_upload('berkas')) {
            $error = array('error' => $this->upload->display_errors());
            $this->welcome($error);
            //echo json_encode($error);
        } else {
            $data = array('upload_data' => $this->upload->data());
            //$this->load->view('v_upload_sukses', $data);
            echo json_encode($this->upload->data());
        }
    }
}
