<?php
    require_once('/var/www/html/MYSITE/app/libraries/database.php');
    class Doctor{
        private $id;
        private $name;
        private $db;
        public function __construct(){
            $this->db=new Database();
        }
        public function fetchDoctorByEmail($email){
             $this->db->prepare("SELECT * FROM doctors WHERE email=". "'" .$email."'");
             $this->db->execute();
             if($this->db->rowCount()==0){return "false";}
             return "true";        
        }
        public function login($email,$passwd){
            $this->db->prepare("SELECT * FROM doctors WHERE email=". "'" .$email."'");
            $this->db->execute();
            $line=$this->db->single();
            if ($line['email']==$email && $line['passwd']==$passwd){return "true";};
            return "false";

        }
        public function register($data){
            $this->db->prepare("INSERT INTO doctors (name,email,passwd,speciality) VALUES ('".$data['name']."','".$data['email']."','".$data['passwd']."','".$data['speciality']."');");
            $this->db->execute();
        } 
        public function getDoctorById($doctor_id){
            $this->db->prepare("SELECT * FROM doctors WHERE id=". "'" .$doctor_id."'");
            $this->db->execute();
            return $this->db->single(); 
        }

     }

    

?>