<?PHP
public function logueo($usuario, $contrasenia){
        //El password obtenido se le aplica el crypt
        //Posteriormente se compara en el query
        $pass_c = $contrasenia;
        $q = "select * from usuarios where nombre='$usuario' and password='$pass_c'";
 
        $result = $this->mysqli->query($q);
        //Si el resultado obtenido no tiene nada
        //Muestra el error y redirige al index
        if( $result->num_rows == 0)
        {
            echo'<script type="text/javascript">
                alert("Usuario o Contraseña Incorrecta");
                window.location="http://localhost:8888/PanelAdmin/ajax/page_login.html"
                </script>';
        }
 
        //En otro caso
        //En $reg se guarda el resultado de la consulta
        //Al segundo posición de SESION se le asigna el id del usuario
        //Redirige a página logueada
        else{
            $reg = mysqli_fetch_assoc($result);
            $_SESSION["session"][] = $reg["id"];
            header("location:/PanelAdmin/ajax/index.php");
        }
 
    }
 
    public function agregaUsuario($nombre, $apellidos, $mail, $contras){
 
        //Selecciona el correo ingresado para validarlo, en la variable valida
        //está el resultado de la consulta
 
        /*$nuevo_correo = "select correo from usuarios where correo='$mail'";
        $valida = $this->mysqli->query($nuevo_correo);
 
        //Como correo es UNIQUE si valida tiene más de un resultado,
        //el correo ya estaba en la base de datos
        if($valida->num_rows > 0)
        {
              echo'<script type="text/javascript">
                alert("Error al registrar! - Correo Duplicado - Ingresa otro");
                window.location="http://localhost/login/php/registro.php"
                </script>';
        }
        //Sino hubo correo repetido
        else
        {*/
            //Inserta en la BD
            $q = "INSERT INTO usuarios (nombre, apellidos, correo, password) VALUES ('$nombre','$apellidos', '$mail', '$contras'); ";
 
            $result = $this->mysqli->query($q);
            if($result){ //Si resultado es true, se agregó correctamente
                    echo'<script type="text/javascript">
                        alert("Agregado Exitosamente");
                        window.location="http://localhost:8888/PanelAdmin/ajax/index.php"
                        </script>';
            }
            else{ //Si hubo error al insertar, se avisa
                echo'<script type="text/javascript">
                     alert("Algo fallo");
                     window.location="http://localhost:8888/PanelAdmin/ajax/page_login.html"
                     </script>';
 
            }
               
        /*}*/
    }
 
?>