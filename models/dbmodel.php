<?php 
    
    class Dbmodel
    {
        private $db;

        public function __construct($db)
        {
            $this->db = $db;
        }

        public function getAllDb()
        {
            return $this->db->query("SELECT * from tab");
        }

        public function getAllDbBy($order, $by)
        {
            return $this->db->query("SELECT * from tab order by $by $order");
        }
    }