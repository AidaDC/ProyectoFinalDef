<?php /**
* @author Andreu Sanz Miedes y Aida Dahdah Castelló
* @author asanzm.sanz@gmail.com, aidadahdah@gmail.com
* @copyright 2015 PROYECTO FINAL
* @version 1.0
*/

	final class insert extends Controller{
		
		
		function __construct($params){
			parent::__construct($params);
			$this->conf=Registry::getInstance();
			$this->model=new minsert;
			$this->view=new vinsert;
		}

		function home(){
		}

		
 	/**
    * 
    * @return esta función llama al método insert el cual si nos retorna true 
    * redirigimos a la página home
    *o por el contrario a la página de error
    */


		function insert(){
		if(isset($_POST['email'])){ 
		$dni=filter_input(INPUT_POST, 'dni', FILTER_SANITIZE_STRING);		
		$nombre=filter_input(INPUT_POST, 'nombre', FILTER_SANITIZE_STRING);
		$apellidos=(filter_input(INPUT_POST, 'apellidos', FILTER_SANITIZE_STRING));
		$nusuario=filter_input(INPUT_POST, 'nusuario', FILTER_SANITIZE_STRING);
        $telefono=filter_input(INPUT_POST, 'telefono', FILTER_SANITIZE_STRING);
        $direccion=filter_input(INPUT_POST, 'direccion', FILTER_SANITIZE_STRING);          
		$poblacion=filter_input(INPUT_POST, 'poblacion', FILTER_SANITIZE_STRING);
        $email=filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING);
        $cpostal=(filter_input(INPUT_POST, 'cpostal', FILTER_SANITIZE_STRING));
        $password=md5(filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING));
		$rpassword=filter_input(INPUT_POST, 'rpassword', FILTER_SANITIZE_STRING);
		$user=$this->model->insert($dni,$nombre,$apellidos,$nusuario,$telefono,$direccion,$poblacion,$email,$cpostal,$password,$rpassword);
        if ($user==TRUE){
               header('Location:'.APP_W.'home');
         }
         else{
               header('Location:'.APP_W.'error');
             }
  		  }
		}

	}