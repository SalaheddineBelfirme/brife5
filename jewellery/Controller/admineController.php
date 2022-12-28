<?php 
class admineController{

    public function logincont(){
        
       return admin::login($_POST['email'],$_POST['pass']);

       
    }
}


if(isset($_POST["submitlog"])){
   
    $admin=new admineController();
    $boll=$admin->logincont();
    
    
    if(count($boll)>0){
        session_start();
        $_SESSION['login']=1;
         header("location:data");
    }
    
  
    
}

?>