<?php
    class UserDTO
    {
        private $id_user;
        private $first_name;
        private $last_name;

        public function __construct($id_user, $first_name, $last_name){
            $this->id_user = $id_user;
            $this->first_name = $first_name;
            $this->last_name = $last_name;
        }

        public function get_first_name():string{
            return $this->first_name;
        }

        public function get_last_name():string{
            return $this->last_name;
        }

        public function get_id(){
            return $this->id_user;
        }
    }
?>