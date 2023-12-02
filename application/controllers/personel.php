<?php

/**
 *   @property db $db
 */

class Personel extends CI_Controller{

    public function index(){

        $rows = $this->db->get("personel")->result();

        $viewData = new stdClass();
        $viewData->rows = $rows;
        
        $this->load->view('listeleme',$viewData);
    }

    public function updatePage(){
        echo 'duzenleme sayfası';
    }

    public function update(){
        echo 'update işlemi';
    }

    public function insertPage(){
        echo 'Ekleme sayfası';
    }

    public function insert(){
        
    }

    public function delete(){

    }
}