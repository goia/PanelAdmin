<!DOCTYPE html>
<!--[if IE 8]> 				 <html class="no-js lt-ie9" lang="en" > <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="es" > <!--<![endif]-->

  <head>  	
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1"> 
	<meta name="description" content="Login bootstrap"/>
	<meta name="keywords" content="Template, Theme, web, html5, css3, Bootstrap,Bootstrap 3.0 Responsive Theme" />
	<meta name="author" content="Iago Gonzalez"/>
    <link rel="shortcut icon" href="favicon.png"> 
    
	<title>Login</title>
    <!-- Bootstrap core CSS -->
    <link href="./css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="./css/login.css" rel="stylesheet">
    <link href="./css/animate-custom.css" rel="stylesheet">
   

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->
    

   
  </head>
    <body>
    	<!-- start Login box -->
    	<div class="container" id="login-block">
    		<div class="row">
			    <div class="col-sm-6 col-md-4 col-sm-offset-3 col-md-offset-4">
		
			       <div class="login-box clearfix animated flipInY">
			        	<div class="login-logo">
			        		<a href="#"><img src="img/lgoOoO.png" alt="Company Logo" /></a>
			        	</div> 
			        	<hr />
			        	<div class="login-form">
			        		<div class="alert alert-error hide">
								  <button type="button" class="close" data-dismiss="alert">&times;</button>
								  <h4>Error!</h4>
								   Your Error Message goes here
							</div>
                        
                            <form name="login" action="../../index.php" method="post">
						   		 <input type="text" placeholder="Usuario" name="user" id="user" required/> 
						   		 <input type="password" name="password" id="password"  placeholder="Password" required/> 
						   		 <!--<button type="submit" class="btn btn-red"name="login" value="Entrar"></button> -->
						   		 <input type="submit" name="login" class="btn btn-red" value="Entrar">
							</form>	
							<div class="login-links"> 
					            <a href="forgot-password.html">
					          	   ¿Perdiste la contraseña?
					            </a>
					            <br />
					            <a href="sign-up.html">¿No tienes cuenta? <strong>INICIA SESIÓN</strong>
					            </a>
							</div>      		
			        	</div> 			        	
			       </div>
			  	   	
			       <div class="social-login row">
			        		<div class="fb-login col-lg-6 col-md-12 animated flipInX">
			        			<a href="#" class="btn btn-facebook btn-block">Siguenos en <strong>Facebook</strong></a>
			        		</div>
			        		<div class="twit-login col-lg-6 col-md-12 animated flipInX">
			        			<a href="#" class="btn btn-twitter btn-block">Siguenos en<strong>Twitter</strong></a>
			        		</div>
			        </div>
			    </div>
			</div>
    	</div>
     
      	<!-- End Login box -->
     	<footer class="container">
     		<p id="footer-text"><small>Copyright &copy; 2016 </small></p>
     	</footer>

        <script src="./js/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="./js/jquery-1.9.1.min.js"><\/script>')</script> 
        <script src="./js/bootstrap.min.js"></script> 
        <script src="./js/placeholder-shim.min.js"></script>        
        <script src="./js/custom.js"></script>
    </body>
</html>
