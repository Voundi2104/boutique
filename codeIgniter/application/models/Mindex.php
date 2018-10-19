<?php
    class Mindex extends CI_Model
    {
        protected $table="client";
        public function select()
        {
            $query = $this->db->SELECT('')
            ->get("produit");
            if($query->num_rows() > 0)
            {
                return $query->result();
            }
            else
            {
                return false;
            }
        }
    }
?>