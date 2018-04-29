<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Project_model extends CI_Model {

      public function pm_insert_user($data){
              $this->db->insert('jncode_user', $data);
      }
      public function pm_delete_user($data){
              $this->db->where($data);
              $this->db->delete('jncode_user');
      }


}
