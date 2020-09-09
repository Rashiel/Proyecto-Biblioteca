<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Categoria extends CI_Controller {
   /**
    * Get All Data from this method.
    *
    * @return Response
   */
   public function __construct() {
    //load database in autoload libraries 
      parent::__construct(); 
      $this->load->model('CategoriaModel');         
   }
   public function index()
   {
       $categoria=new CategoriaModel;
       $data['data']=$categoria->get_categoria();
       $this->load->view('includes/header');       
       $this->load->view('categoria/list',$data);
       $this->load->view('includes/footer'); 
   }
   public function create()
   {
      $this->load->view('includes/header');
      $this->load->view('categoria/create');
      $this->load->view('includes/footer');      
   }
   public function Validar_campos()
   {
       $this->form_validation->set_rules("cate_nombre"."Categoria","trim|required|alpha_numeric_spaces");
   }
   public function novalidar1()
   {
       $this->load->view('includes/header');
       $this->load->view('categoria/create');
       $this->load->view('includes/footer');
   }
   public function novalidar2()
   {
       $this->load->view('includes/header');
       $this->load->view('categoria/edit');
       $this->load->view('includes/footer');
   }
   public function guardar()
   {
       $this->Validar_campos();

           $cate_nombre = $this->input->post('cate_nombre');
       $this->load->model('model_categoria');
       $data = array('cate_nombre'=>$cate_nombre);
       if($this->form_validation->run()){
           $this->model_categoria->guardar($data);
           redirect('categoria');
       }else{
           $this->novalidar1();
       }
   }




   public function store()
   {
       $categoria=new CategoriaModel;
       $categoria->insert_categ();
       redirect(base_url('categoria'));
    }
   
   public function edit($cate_id)
   {
       $categ = $this->db->get_where('categoria', array('cate_id' => $cate_id))->row();
       $this->load->view('includes/header');
       $this->load->view('categoria/edit',array('categ'=>$categ));
       $this->load->view('includes/footer');   
   }
   
   public function update($cate_id)
   {
       $categoria=new CategoriaModel;
       $categoria->update_categ($cate_id);
       redirect(base_url('categoria'));
       $this->Validar_campos();
   }
   /**
    * Delete Data from this method.
    *
    * @return Response
   */
   public function delete($cate_id)
   {
       $this->db->where('cate_id', $cate_id);
       $this->db->delete('categoria');
       redirect(base_url('categoria'));
   }
}