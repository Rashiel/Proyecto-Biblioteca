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
   /**
    * Store Data from this method.
    *
    * @return Response
   */
   public function store()
   {
       $categoria=new CategoriaModel;
       $categoria->insert_categ();
       redirect(base_url('categoria'));
    }
   /**
    * Edit Data from this method.
    *
    * @return Response
   */
   public function edit($cate_id)
   {
       $categ = $this->db->get_where('categoria', array('cate_id' => $cate_id))->row();
       $this->load->view('includes/header');
       $this->load->view('categoria/edit',array('categ'=>$categ));
       $this->load->view('includes/footer');   
   }
   /**
    * Update Data from this method.
    *
    * @return Response
   */
   public function update($cate_id)
   {
       $categoria=new CategoriaModel;
       $categoria->update_categ($cate_id);
       redirect(base_url('categoria'));
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