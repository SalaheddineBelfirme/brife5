<?php 
session_start();

spl_autoload_register('auto');
function auto($clasname){
    $pagess=array(
        'database/',
        'Model/',
        'Controller/',
        'botsrap/'
    );
    $path=explode('/',$clasname);
    $name=array_pop($path);
    
    foreach($pagess as $path){
        $file=sprintf($path.'%s.php',$name);
        if(is_file($file)){
            include_once $file;
        }
        
    }
       
}
?>