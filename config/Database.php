<?php 
    class Database {
        private $host = 'nnsgluut5mye50or.cbetxkdyhwsb.us-east-1.rds.amazonaws.com';
        private $db_name = 'cpb23pb80w70wkw8';
        private $username = 'optgyp1iqzc076og';
        private $password = getenv('MY_PASS');
        private $conn;

        public function connect() {
            $this->conn = null;

            try {
                $this->conn = new PDO("mysql:host={$this->host};dbname={$this->db_name}", $this->username, $this->password); 
                $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch (PDOException $e) {
                $error_message = 'Database Error: ';
                $error_message .= $e->getMessage();
                echo $error_message;
                exit('Unable to connect to the database');
            }
            return $this->conn;
        }
    }

