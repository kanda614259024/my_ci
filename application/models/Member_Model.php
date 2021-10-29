<?php
class Member_model extends CI_Model
 {

   public function addmember()
        {
                $data = array(
                        'm_name'=> $this->input->post('m_name'),
                        'm_lname'=> $this->input->post('m_lname'),
                );
                $query=$this->db->insert('tbl_member',$data);
                
                if($query){
                echo 'add OK';
                }   
                else{
                echo 'false';
                }
        }
        public function addmember2()
        {
                $config['upload_path'] = './img/';
                $config['allowed_types'] = 'gif|jpg|png';
                $config['max_size'] = '2000';
                $config['max_width'] = '3000';
                $config['maz_height'] = '3000';
                $config['encrypt_name'] = TRUE;

                $this->load->library('upload',$config);
                
                if( ! $this->upload->do_upload('m_img')){
                     echo $this->upload->display_errors();
                }   
                else
                {
               $data = $this->upload->data();
               $filename = $data['file_name'];
                $data = array(
                        'm_name'=> $this->input->post('m_name'),
                        'm_lname'=> $this->input->post('m_lname'),
                        'm_img'=> $filename
                        );
                $query=$this->db->insert('tbl_member',$data);
                
               // if($query){
                //echo 'add OK';
               // }else{
               // echo 'false';
               // }          
        }
    }
         public function editmember()
        {
                $data = array(
                        'm_name'=> $this->input->post('m_name'),
                        'm_lname'=> $this->input->post('m_lname'),
                );
                $this->db->where('my_id',$this->input->post('my_id'));
                $query=$this->db->update('tbl_member',$data);
                //if($query){
               // echo 'edit OK';
              //  }   
              //  else{
               // echo 'false';
               // }
        }

        public function showdata()
        {
                $query = $this->db->get('tbl_member');
                return $query->result();
        }
         public function read($my_id)
        {
                $this->db->select('*');
                $this->db->from('tbl_member');
                $this->db->where('my_id',$my_id);
                $query = $this->db->get();
                if($query->num_rows() > 0){
                    $data = $query->row();
                    return $data;
                }
                return FALSE;
        }
        public function deldata($my_id)
        {
                $this->db->delete('tbl_member',array('my_id'=>$my_id));        
        }
         
 }    