<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Institucional extends CI_Controller {

    public function index()
    {
        $data['title'] = "LCI | Home";
        $data['description'] = "Exercício de exemplo do capítulo 5 do livro CodeIgniter";
        $this->load->view('home', $data);
    }

    public function empresa()
    {
        $data['title'] = "LCI | A Empresa";
        $data['description'] = "Informações sobre a empresa";
        $this->load->view('commons/header');
        $this->load->view('empresa', $data);
        $this->load->view('commons/footer');
    }

    public function servicos()
    {
        $data['title'] = "LCI | Serviços";
        $data['description'] = "Informações sobre os serviços prestados";
        $this->load->view('servicos', $data);
    }
}
