<?php
    mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
    require_once("dbModel.php");
    require_once("userDTO.php");
    class UserModel extends dbModel
    {
        const GET_ALL_USERS_PROC_NAME = "get_all_users";
        const GET_USER_BY_ID = "get_user_by_id";
        const GET_USER_BY_NAME = "get_user_by_name";

        public function get_all_users():array{  
            $result = $this->mysqli->query("CALL ".self::GET_ALL_USERS_PROC_NAME."()");

            $users = array();
            while ($row = $result->fetch_assoc()) {
                array_push($users, new UserDTO($row["id_user"], $row["first_name"], $row["last_name"]));
            }
            return $users;
        }

        public function get_user(int $user_id){
            $result = $this->mysqli->query("CALL ".self::GET_USER_BY_ID."(".$this->escape_string($user_id).")");

            if ($row = $result->fetch_assoc()) {
                return new UserDTO($row["id_user"], $row["first_name"], $row["last_name"]);
            }
            die ("NOT FOUND");
        }

        public function get_user_name(string $user_name){
            $result = $this->mysqli->query("CALL ".self::GET_USER_BY_NAME."('".$this->escape_string($user_name)."')");

            if ($row = $result->fetch_assoc()) {
                return new UserDTO($row["id_user"], $row["first_name"], $row["last_name"]);
            }
            die ("NOT FOUND");
        }

        private function escape_string($variable_to_escape){
            return $this->mysqli->escape_string($variable_to_escape);
        }
    }
?>