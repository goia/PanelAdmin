<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Login Panel Admin</title>

        <link rel="stylesheet" href="./validator/vendor/bootstrap/css/bootstrap.css"/>
        <link rel="stylesheet" href="./validator/dist/css/bootstrapValidator.css"/>
        <script type="text/javascript" src="./validator/vendor/jquery/jquery-1.10.2.min.js"></script>
        <script type="text/javascript" src="./validator/vendor/bootstrap/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="./validator/dist/js/bootstrapValidator.js"></script>
        
        <!-- CSS -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
        <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="assets/css/form-elements.css">
        <link rel="stylesheet" href="assets/css/style.css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

        <!-- Favicon and touch icons -->
        <link rel="shortcut icon" href="assets/ico/favicon.png">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">

    </head>

    <body>

        <!-- Top content -->
        <div class="top-content">

            <div class="inner-bg">
                <div class="container">
                    <div class="row">
                    </div>
                    <div class="row">
                        <div class="col-sm-6 col-sm-offset-3 form-box">
                        	<div class="form-top">
                        		<div class="form-top-left">
                        			<h3>Entra en nuestra parte privada</h3>
                            		<p style="text-align:center;">Introduce tu clave y usuario:</p>
                        		</div>
                        		<div class="form-top-right">
                        			<i class="fa fa-lock"></i>
                        		</div>
                            </div>
                            <div class="form-bottom">
                            <form id="defaultForm" method="post" class="form-horizontal" action="comprobarUsuario.php">
                                    <div class="form-group">
                                        <label class="col-lg-3 control-label">LOGIN</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control inputLogin" name="nombre" id="nombre" />
                                        </div>
                                    </div>
                                   
                                    <div class="form-group">
                                        <label class="col-lg-3 control-label">PASSWORD</label>
                                        <div class="col-lg-9">
                                            <input type="password" class="form-control inputLogin" name="password" id="password"/>
                                        </div>
                                    </div>
                                    

                                    <div class="form-group">
                                        <div class="col-lg-9 col-lg-offset-3">
                                            <button type="submit" href='#' class="btn btn-primary">Entra</button>
                                        </div>
                                    </div>
                                </form>
		                    </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
     
<!---__________________________________________________________________------------------------>

      <script type="text/javascript">
$(document).ready(function() {
    $('#defaultForm').bootstrapValidator({
            message: 'Este valor no es valido',
            feedbackIcons: {
                valid: 'glyphicon glyphicon-ok',
                invalid: 'glyphicon glyphicon-remove',
                validating: 'glyphicon glyphicon-refresh'
            },
            fields: {
                nombre: {
                    message: 'El nombre introducido no es valido',
                    validators: {
                        notEmpty: {
                            message: 'el nombre es obligatorio y no puede quedar vacio'
                        },
                        stringLength: {
                            min: 4,
                            max: 30,
                            message: 'El nombre debe tener entre 4 y 40 caracteres de largo'
                        },
                        regexp: {
                            regexp: /^[a-zA-Z_áéíóúñ\s]*$/,
                            message: 'El nombre solo puede contener letras y números, no se aceptan simbolos'
                        }
                        /*remote: {
                            url: 'remote.php',
                            message: 'The username is not available'
                        },*/
                       
                    }
                }, 

                password: {
                    validators: {
                        notEmpty: {
                            message: 'El password es obligatorio y no se puede dejar vacio'
                        },
                        identical: {
                            field: 'confirmPassword',
                            message: 'The password and its confirm are not the same'
                        },
                        stringLength: {
                            min: 6,
                            max: 30,
                            message: 'El password debe contener entre 6 y 40 caracteres de largo'
                        }
                    }
            },
            }
        })
        
});
</script>  
         
        
        
<!---__________________________________________________________________------------------------>
        <!-- Javascript -->
        
        <script src="assets/js/jquery.backstretch.min.js"></script>
        <script src="assets/js/scripts.js"></script>
        
        <!--[if lt IE 10]>
            <script src="assets/js/placeholder.js"></script>
        <![endif]-->

    </body>

</html>