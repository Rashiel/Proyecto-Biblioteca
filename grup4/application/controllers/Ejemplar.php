<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Ejemplar extends CI_Controller {

   public function __construct() {
      parent::__construct(); 
      $this->load->model('EjemplarModel');         
   }
   public function index()
   {
       $ejemplar=new EjemplarModel;
       $data['data']=$ejemplar->get_ejemplar();
       $this->load->view('includes/header');       
       $this->load->view('ejemplar/list',$data);
       $this->load->view('includes/footer'); 
   }
   public function create()
   {  
      $this->load->view('includes/header');
      $this->load->helper('form');
      $this->load->model('EjemplarModel');
      $opciones=$this->EjemplarModel->getCategoria();
      $data['opciones']=$opciones;
      $this->load->view('ejemplar/create');
      $this->load->view('includes/footer');      
   }
   public function Validar_campos(){
       $this->form_validation->set_rules("ejem_titulo", "Titulo", "trim|required");
       $this->form_validation->set_rules("ejem_editorial", "Editorial", "trim|required|alpha_numeric_spaces");
       $this->form_validation->set_rules("ejem_paginas", "Nro_paginas", "trim|required|numeric");
       $this->form_validation->set_rules("ejem_idioma", "Idioma", "trim|required|alpha");
       $this->form_validation->set_rules("ejem_portada", "Portada", "trim|required|alpha");
       $this->form_validation->set_rules("ejem_digital", "Digital", "trim|required");
       $this->form_validation->set_rules("ejem_audio", "Audio", "trim|required");
       $this->form_validation->set_rules("ejem_resumen", "Resumen", "trim|required");
       $this->form_validation->set_rules("ejem_tipo_id", "Tipo de libro", "trim|required");
       $this->form_validation->set_rules("ejem_cate_id", "Categoria", "trim","callback_ejem_cate_id_check");
       $this->form_validation->set_rules("ejem_valoracion", "Valoracion", "trim|required");
       $this->form_validation->set_rules("ejem_anio", "Año", "trim|required|numeric|min_lenght[4]");
       $this->form_validation->set_rules("ejem_prestamos", "Nro_prestamos", "trim|required");
   }

   public function novalidar1(){
       $this->load->view('includes/header');
       $this->load->view('ejemplar/create');
       $this->load->view('includes/footer');
   }

   public function novalidar2(){
       $this->load->view('includes/header');
       $this->load->view('ejemplar/edit');
       $this->load->view('includes/header');
   }
   
   public function store()
   {
       $ejemplar=new EjemplarModel;
       $ejemplar->insert_ejemp();
       redirect(base_url('ejemplar'));
    }
   /**
    * Edit Data from this method.
    *
    * @return Response
   */
   public function edit($ejem_id)
   {
       $ejemp = $this->db->get_where('ejemplar', array('ejem_id' => $ejem_id))->row();
       $this->load->view('includes/header');
       $this->load->view('ejemplar/edit',array('ejemp'=>$ejemp));
       $this->load->view('includes/footer');   
   }
   /**
    * Update Data from this method.
    *bbb
    * @return Response
   */
   public function update($ejem_id)
   {
       $ejemplar=new EjemplarModel;
       $ejemplar->update_ejemp($ejem_id);
       redirect(base_url('ejemplar'));
   }
   /**
    * Delete Data from this method.
    *
    * @return Response
   */
   public function delete($ejem_id)
   {
       $this->db->where('ejem_id', $ejem_id);
       $this->db->delete('ejemplar');
       redirect(base_url('ejemplar'));
   }
    
   public function crear(){
         $this->load->helper('form');
         $this->load->model('EjemplarModel');
         $opciones = $this->EjemplarModel->getCategoria();
         $data['opciones']=$opciones;

         
         $this->load->view("ejemplar/formulario",$data);

    }

    public function listar(){
        $rows = $this->db->query("SELECT * FROM ejemplar,categoria WHERE ejem_cate_id=cate_id")->result();
        $data['rows']=$rows;
        $this->load->view("ejemplar/listar",$data);
    }

    public function evalua(){
        $categoria= $this->input->post('cate_id');
        
    }
    

    
    
}