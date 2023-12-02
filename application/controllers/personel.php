<?php

/**
 *   @property db $db
 *   @property input $input
 */

class Personel extends CI_Controller{

    public function index(){

        $rows = $this->db->get("personel")->result();

        $viewData = new stdClass();
        $viewData->rows = $rows;
        
        $this->load->view('listeleme',$viewData);
    }

    public function insertPage(){
        $this->load->view('ekle');
    }

    public function insert(){
        $username = $this->input->post("username");
        $detail   = $this->input->post("detail");

        $data = array(
            "username" => $username,
            "detail"   => $detail
        );

        $islem = $this->db->insert("personel",$data);

        if($islem)
            redirect(base_url("personel"));
        else
            echo 'HATA! Kayıt Eklenemedi';
    }

    public function updatePage(){
        echo 'duzenleme sayfası';
    }

    public function update(){
        echo 'update işlemi';
    }

    public function delete(){

    }
}