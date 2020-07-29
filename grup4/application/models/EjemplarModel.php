<?php
class EjemplarModel extends CI_Model{
    
    public function get_ejemplar(){
        if(!empty($this->input->get("search"))){
            $this->db->like('ejem_id', $this->input->get("search"));
          $this->db->or_like('ejem_titulo', $this->input->get("search"));
          $this->db->or_like('ejem_editorial', $this->input->get("search"));
          $this->db->or_like('ejem_paginas', $this->input->get("search"));
          $this->db->or_like('ejem_isbn', $this->input->get("search"));
          $this->db->or_like('ejem_idioma', $this->input->get("search"));
          $this->db->or_like('ejem_portada', $this->input->get("search"));
          $this->db->or_like('ejem_digital', $this->input->get("search"));
          $this->db->or_like('ejem_audio', $this->input->get("search"));    
          $this->db->or_like('ejem_resumen', $this->input->get("search"));
         $this->db->or_like('ejem_tipo_id', $this->input->get("search"));
         $this->db->or_like('ejem_cate_id', $this->input->get("search"));
          $this->db->or_like('ejem_valoracion', $this->input->get("search"));
          $this->db->or_like('ejem_anio', $this->input->get("search"));
          $this->db->or_like('ejem_nprestamos', $this->input->get("search"));
              
            
        }
        $query = $this->db->get("ejemplar");
        return $query->result();
    }
    public function insert_ejemp()
    {    
        $data = array(
            'ejem_id' => $this->input->post('ejem_id'),
            'ejem_titulo' => $this->input->post('ejem_titulo'),
            'ejem_editorial' => $this->input->post('ejem_editorial'),
            'ejem_paginas' => $this->input->post('ejem_paginas'),
            'ejem_isbn' => $this->input->post('ejem_isbn'),
            'ejem_idioma' => $this->input->post('ejem_idioma'),
            'ejem_portada' => $this->input->post('ejem_portada'),
            'ejem_digital' => $this->input->post('ejem_digital'),
            'ejem_audio' => $this->input->post('ejem_audio'),
            'ejem_resumen' => $this->input->post('ejem_resumen'),
           'ejem_tipo_id' => $this->input->post('ejem_tipo_id'),
           'ejem_cate_id' => $this->input->post('ejem_cate_id'),
            'ejem_valoracion' => $this->input->post('ejem_valoracion'),
            'ejem_anio' => $this->input->post('ejem_anio'),
            'ejem_nprestamos' => $this->input->post('ejem_nprestamos')
        );
        return $this->db->insert('ejemplar', $data);
    }
    public function update_ejemp($id) 
    {
        $data=array(
            'ejem_id' => $this->input->post('ejem_id'),
            'ejem_titulo' => $this->input->post('ejem_titulo'),
            'ejem_editorial' => $this->input->post('ejem_editorial'),
            'ejem_paginas' => $this->input->post('ejem_paginas'),
            'ejem_isbn' => $this->input->post('ejem_isbn'),
            'ejem_idioma' => $this->input->post('ejem_idioma'),
            'ejem_portada' => $this->input->post('ejem_portada'),
            'ejem_digital' => $this->input->post('ejem_digital'),
            'ejem_audio' => $this->input->post('ejem_audio'),
            'ejem_resumen' => $this->input->post('ejem_resumen'),
           'ejem_tipo_id' => $this->input->post('ejem_tipo_id'),
           'ejem_cate_id' => $this->input->post('ejem_cate_id'),
            'ejem_valoracion' => $this->input->post('ejem_valoracion'),
            'ejem_anio' => $this->input->post('ejem_anio'),
            'ejem_nprestamos' => $this->input->post('ejem_nprestamos')
        );
        if($id==0){
            return $this->db->insert('ejemplar',$data);
        }else{
            $this->db->where('id',$id);
            return $this->db->update('ejemplar',$data);
        }        
    }
}
?>