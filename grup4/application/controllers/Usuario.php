<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Usuario extends CI_Controller {
   /**
    * Get All Data from this method.
    *
    * @return Response
   */
   public function __construct() {
    //load database in autoload libraries 
      parent::__construct(); 
      $this->load->model('UsuarioModel');         
   }
   public function index()
   {
       $usuario=new UsuarioModel;
       $data['data']=$usuario->get_usuario();
       $this->load->view('includes/header');       
       $this->load->view('usuario/list',$data);
       $this->load->view('includes/footer'); 
   }
   public function create()
   {
      $this->load->view('includes/header');
      $this->load->view('usuario/create');
      $this->load->view('includes/footer');      
   }
   /**
    * Store Data from this method.
    *
    * @return Response
   */
   public function store()
   {
       $usuario=new UsuarioModel;
       $usuario->insert_usuar();
       redirect(base_url('usuario'));
    }
   /**
    * Edit Data from this method.
    *
    * @return Response
   */
   public function edit($usua_id)
   {
       $usuar = $this->db->get_where('usuario', array('usua_id' => $usua_id))->row();
       $this->load->view('includes/header');
       $this->load->view('usuario/edit',array('usua_id'=>$usua_id));
       $this->load->view('includes/footer');   
   }
   /**
    * Update Data from this method.
    *
    * @return Response
   */
   public function update($usua_id)
   {
       $usuario=new UsuarioModel;
       $usuario->update_usuar($usua_id);
       redirect(base_url('usuario'));
   }
   /**
    * Delete Data from this method.
    *
    * @return Response
   */
   public function delete($usua_id)
   {
       $this->db->where('usua_id', $usua_id);
       $this->db->delete('usuario');
       redirect(base_url('usuario'));
   }
}