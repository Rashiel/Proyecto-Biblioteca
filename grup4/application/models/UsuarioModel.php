<?php
class UsuarioModel extends CI_Model{
    
    public function get_usuario(){
        if(!empty($this->input->get("search"))){
            $this->db->like('usua_id', $this->input->get("search"));
          $this->db->or_like('usua_login', $this->input->get("search"));
          $this->db->or_like('usua_password', $this->input->get("search"));
          $this->db->or_like('usua_codigo', $this->input->get("search"));
          $this->db->or_like('usua_nombres', $this->input->get("search"));
          $this->db->or_like('usua_apellidos', $this->input->get("search"));
          $this->db->or_like('usua_direccion', $this->input->get("search"));
          $this->db->or_like('usua_email', $this->input->get("search"));
          $this->db->or_like('usua_telefono', $this->input->get("search"));    
          $this->db->or_like('usua_esadmin', $this->input->get("search"));
              
            
        }
        $query = $this->db->get("usuario");
        return $query->result();
    }
    public function insert_usuar()
    {    
        $data = array(
            'usua_id' => $this->input->post('usua_id'),
            'usua_login' => $this->input->post('usua_login'),
            'usua_password' => $this->input->post('usua_password'),
            'usua_codigo' => $this->input->post('usua_codigo'),
            'usua_nombres' => $this->input->post('usua_nombres'),
            'usua_apellidos' => $this->input->post('usua_apellidos'),
            'usua_direccion' => $this->input->post('usua_direccion'),
            'usua_email' => $this->input->post('usua_email'),
            'usua_telefono' => $this->input->post('usua_telefono'),
            'usua_esadmin' => $this->input->post('usua_esadmin')
       
        );
        return $this->db->insert('usuario', $data);
    }
    public function update_usuar($usua_id) 
    {
        $data=array(
            'usua_id' => $this->input->post('usua_id'),
            'usua_login' => $this->input->post('usua_login'),
            'usua_password' => $this->input->post('usua_password'),
            'usua_codigo' => $this->input->post('usua_codigo'),
            'usua_nombres' => $this->input->post('usua_nombres'),
            'usua_apellidos' => $this->input->post('usua_apellidos'),
            'usua_direccion' => $this->input->post('usua_direccion'),
            'usua_email' => $this->input->post('usua_email'),
            'usua_telefono' => $this->input->post('usua_telefono'),
            'usua_esadmin' => $this->input->post('usua_esadmin')
        );
        if($usua_id==0){
            return $this->db->insert('usuario',$data);
        }else{
            $this->db->where('usua_id',$usua_id);
            return $this->db->update('usuario',$data);
        }        
    }
}
?>