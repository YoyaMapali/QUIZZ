<?php
   
  class Security extends Controller {
   
    
    public function __construct(){
      parent::__construct();
        $this->dirname="security"; 
        $this->layout="layout_connexion";
        $this->validator=new Validator();
       

    }

public function loadViewInscription(){
 
   $this->views="inscription";
   $this->render();
} 

    public function index(){
       $this->views="connexion";
       $this->render();
      
    }
    public function seConnecter(){
      
       if(isset($_POST["btn_connexion"])){
          extract($_POST);

        var_dump($_POST);
        

         $this->validator-> is_empty($_POST['login'],'login',"login obligatoire");
         $this->validator-> is_empty($_POST['password'],'password',"password obligatoire");
         if($this->validator->is_valid()){
            die("donnes correct");

            $this->manager=new UserManager();
            $user=null;
            $user=$this->$manager->getUserByLoginAndPwd($login,$password);  
            if ( !empty ($user)){
               $this->layout="layout_admin";
               $this->views="inscription";
               $this->render();  
         
            }else{
              
              $this->data ['erreur']="login ou mot de pas incoreect";
              $this->views="connexion";
              $this->render();
            }
             
            }else{
            $erreur=$this->validator->getErrors();
           $this->data ['erreur']=$erreur;
           $this->views="connexion";
           $this->render();
         }
             
      }
}

   

  
