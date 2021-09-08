<?php

session_start();

    class Work{
        private $host = "localhost";
        private $username = "root";
        private $password = "";
        private $db = "olx2";

        private $connect;

        public function __construct(){
            $this->connect = new mysqli($this->host, $this->username, $this->password, $this->db);
            
            if(mysqli_connect_error()){
                trigger_error("database connection failed". mysqli_connect_error());
            }
            else{
                return $this->connect;
            }
        }

        //inserting data

        public function insert($table, $fields){
            $col = implode(",",array_keys($fields));
            $rows = implode("','",array_values($fields));

            $sql = $this->connect->query("INSERT into $table($col) VALUE('$rows')");

            if($sql){
                $_SESSION['alert'] = "DATA INSERTED SUCCESSFULLY";
                // $this->redirect($page);
            }
            else{
                echo "failed";
            }

            }

        public function countData($query){
            $run =$this->connect->query($query);
            return $run->num_rows;
        }

        public function redirect($page){
            echo "<script>window.open('$page.php','_self')</script>";
        }

        public function getData($query){
            $run = $this->connect->query($query);

            $array = [];
            if($run->num_rows > 0){
                while($row = $run->fetch_assoc()){
                    $array[] = $row;
                }
                return $array;
            }
                else{
                    echo "No records found";
                    return $array;
                }
        }
    }


    $saitama = new Work();
        
    

?>