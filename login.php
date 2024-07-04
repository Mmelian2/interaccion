<?php 
(include 'conexion.php');

if(isset($_POST['enviar'])){
    if (empty($_POST['usuario']) and empty($_POST['password'])) {
        echo "Los campos estan vacios";
        # code...
    }else {
        $usuario=$_POST['usuario'];
        $clave=$_POST['password'];
        $ip=$_SERVER['REMOTE_ADDR'];
        $captcha=$_POST['g-recaptcha-response'];
        $secretkey='6LcEEfwpAAAAAEwzXoK0fcUUGjHyf_QRhMCZn4nt';
        $response=file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=$secretkey&response=$captcha&remoteip=$ip");
        $atributos=json_decode($response,true);
        ?>
	    <script >
			alert($atributos);
            console.log($atributos);
	    </script>	
	    <?php
        
        if ($atributos['success'] ) {
            
            $sql=$conexion->query( "SELECT * FROM usuarios WHERE alias='$usuario' and clave='$clave'");
            $datos=$sql->fetch_object();
            if ($datos) {
                $_SESSION=$usuario;
                header('location:lista-usuario.php');
            } else {
                echo '<div class="alert alert-danger">Acceso denegado</div>';
            }
            
        } else {
            
            echo '<div class="alert alert-danger">Verifique el captcha</div>';
        }
    }
    
}

?>