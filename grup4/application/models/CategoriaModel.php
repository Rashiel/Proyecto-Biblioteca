<?php
class CategoriaModel extends CI_Model{
    
    public function get_categoria(){
        if(!empty($this->input->get("search"))){
            $this->db->like('cate_id', $this->input->get("search"));
          $this->db->or_like('cate_nombre', $this->input->get("search"));
         
              
            
        }
        $query = $this->db->get("categoria");
        return $query->result();
    }
    public function insert_categ()
    {    
        $data = array(
            'cate_id' => $this->input->post('cate_id'),
            'cate_nombre' => $this->input->post('cate_nombre')
       
        );
        return $this->db->insert('categoria', $data);
    }
    public function update_categ($cate_id) 
    {
        $data=array(
            'cate_id' => $this->input->post('cate_id'),
            'cate_nombre' => $this->input->post('cate_nombre') 
            
            
        );
        if($cate_id==0){
            return $this->db->insert('categoria',$data);
        }else{
            $this->db->where('cate_id',$cate_id);
            return $this->db->update('categoria',$data);
        }        
    }
}
?>