<?php
 require_once("/var/www/html/MYSITE/app/libraries/controller.php");
 class Doctors extends Controller{
    private $doctorModel=null;
    
    public function __construct(){
        $this->doctorModel=$this->loadModel("Doctor");
        
    }
    public function register(){
        $data=[
            'name'=>"",
            'email'=>"",
            'passwd'=>"",
            'speciality'=>""
        ];
       
        if($_SERVER['REQUEST_METHOD']=='POST'){
            $error=false;
            if(empty($_POST['name']))
            {
                $data['name']="**name is empty!";
                $error=true;
            }
            if(empty($_POST['email']) or $this->doctorModel->fetchDoctorByEmail($_POST['email'])=="true")
            {
                $data['email']="**email is empty or email already in use";
                $error=true;
            }
            if(empty($_POST['passwd']) || strlen($_POST['passwd'])<6)
            {
                $data['passwd']="**passwd is empty or passwd < 6";
                $error=true;
            }
            if(empty($_POST['speciality']))
            {
                $data['speciality']="**speciality is empty";
                $error=true;
            }
            if($error){
                $this->render("/views/doctors/register.php",$data);
            }
            else{
                $data=[
                    'name'=>$_POST['name'],
                    'email'=>$_POST['email'],
                    'passwd'=>$_POST['passwd'],
                    'speciality'=>$_POST['speciality']
                ];
                $this->doctorModel->register($data);
                header("Location:http://localhost/MYSITE/app/views/doctors/login.php");
            }

        }
        else{
            $this->render("/views/doctors/register.php",$data);
        }
    }
    
 }
 //pour tester la registration
    $var=new Doctors();
    $var->register();

?>