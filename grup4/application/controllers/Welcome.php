<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		/*$this->load->view('header');*/
		$this->load->view('menu');
        $this->load->view('formulario');
        /*$this->load->view('footer');*/
       
	}
    
    public function confidencial(){
        if($this->session->userdata('auth')!=true) die("Acceso denegado");
        
        $idp = $this->session->userdata('id');
        $data['persona']=$this->db->query("SELECT * FROM persona WHERE id ='{$idp}'")->row(); 
        
        $this->load->view('header');
		$this->load->view('menu');
        $this->load->view('confidencial',$data);      
        $this->load->view('footer');     
    }
}
