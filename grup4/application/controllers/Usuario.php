<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Persona extends CI_Controller {
   /**
    * Get All Data from this method.
    *
    * @return Response
   */
   public function __construct() {
    //load database in autoload libraries 
      parent::__construct(); 
      $this->load->model('PersonaModel');         
   }
   public function index()
   {
       $persona=new PersonaModel;
       $data['data']=$persona->get_persona();
       $this->load->view('includes/header');       
       $this->load->view('persona/list',$data);
       $this->load->view('includes/footer'); 
   }
   public function create()
   {
      $this->load->view('includes/header');
      $this->load->view('persona/create');
      $this->load->view('includes/footer');      
   }
   /**
    * Store Data from this method.
    *
    * @return Response
   */
   public function store()
   {
       $persona=new PersonaModel;
       $persona->insert_person();
       redirect(base_url('persona'));
    }
   /**
    * Edit Data from this method.
    *
    * @return Response
   */
   public function edit($id)
   {
       $person = $this->db->get_where('persona', array('id' => $id))->row();
       $this->load->view('includes/header');
       $this->load->view('persona/edit',array('person'=>$person));
       $this->load->view('includes/footer');   
   }
   /**
    * Update Data from this method.
    *
    * @return Response
   */
   public function update($id)
   {
       $persona=new PersonaModel;
       $persona->update_person($id);
       redirect(base_url('persona'));
   }
   /**
    * Delete Data from this method.
    *
    * @return Response
   */
   public function delete($id)
   {
       $this->db->where('id', $id);
       $this->db->delete('persona');
       redirect(base_url('persona'));
   }
}