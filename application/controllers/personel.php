<?php

/**
 *   @property db $db
 *   @property input $input
 *   @property uri $uri
 */

class Personel extends CI_Controller{

    public function index($list = ""){

        switch ($list){
            case "desc":
                $rows = $this->db->order_by("id","desc")->get("personel")->result();        
                break;
            case "asc":
                $rows = $this->db->order_by("id","asc")->get("personel")->result();        
                break;
            case "user-asc":
                $rows = $this->db->order_by("username","asc")->get("personel")->result();        
                break;
            case "user-desc":
                $rows = $this->db->order_by("username","desc")->get("personel")->result();        
                break;
            default:
                $rows = $this->db->get("personel")->result();
        };

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
        
        $id = $this->uri->segment(3);
        
        $row = $this->db
        ->where("id",$id)
        ->get("personel")
        ->row();

        $viewData = new stdClass();
        $viewData->row = $row;
        $this->load->view('duzenle',$viewData);
    }

    public function update(){
        $id = $this->uri->segment(3);

        $username = $this->input->post("username");
        $detail   = $this->input->post("detail");

        $data = array(
            "username" => $username,
            "detail"   => $detail
        );

        $islem = $this->db
        ->where("id",$id)
        ->update("personel",$data);
        
        if($islem)
            redirect(base_url("personel"));
        else
            echo 'İşlem başarısız.';
        
    }

    public function delete(){
        $id = $this->uri->segment(3);

        $islem = $this->db
                        ->where("id",$id)
                        ->delete("personel");

        if($islem)
            redirect(base_url("personel"));
        else
            echo 'Silme işlemi başarısız.';
    }
}