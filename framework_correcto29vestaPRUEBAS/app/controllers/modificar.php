<?php /**
* @author Andreu Sanz Miedes y Aida Dahdah Castelló
* @author asanzm.sanz@gmail.com, aidadahdah@gmail.com
* @copyright 2015 PROYECTO FINAL
* @version 1.0
*/
	class Modificar extends Controller{
		
		function __construct(){
			parent::__construct($this->params);
			$this->conf=Registry::getInstance();

			$this->model=new mModificar;
			$this->view=new vModificar;
		}
		function home(){
			}	
		

   
    /**
    * 
    * @return esta función llama al método modificar el cual si nos retorna true 
    * redirigimos a la página home
    *o por el contrario a la página de error
    */


		function modificar(){
		if(isset($_POST['email'])){ 
        $nif=filter_input(INPUT_POST, 'nif', FILTER_SANITIZE_STRING); 
    
        $email=filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING);    
        $nombre_usuario=filter_input(INPUT_POST, 'nusuario', FILTER_SANITIZE_STRING);
        $_SESSION['user']=$nombre_usuario;
        $telefono=filter_input(INPUT_POST, 'telefono', FILTER_SANITIZE_STRING);
        $direccion=filter_input(INPUT_POST, 'direccion', FILTER_SANITIZE_STRING);          
        $poblacion=filter_input(INPUT_POST, 'poblacion', FILTER_SANITIZE_STRING);
        $codigo_postal=filter_input(INPUT_POST, 'cpostal', FILTER_SANITIZE_STRING);
        $password=md5(filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING));
        $user=$this->model->modificar($nif,$email,$poblacion,$codigo_postal,$direccion,$telefono,$nombre_usuario,$password);
         
         if ($user==TRUE){
               header('Location:'.APP_W.'home');
         }
         else{
               header('Location:'.APP_W.'error');
             }
  		  }
		}
	}
