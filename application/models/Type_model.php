<?php 

class Type_model extends CI_model{
   public function delete_data( $where, $table) {
      $this->db->where($where);
      $this->db->delete($table);
   }
}