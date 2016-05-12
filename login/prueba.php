<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Login campusourenseCb</title>

        <!-- CSS -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
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

    <body>    <link rel="stylesheet" href="https://rawgit.com/Eonasdan/bootstrap-datetimepicker/master/build/css/bootstrap-datetimepicker.min.css
    "/>
    <script src="//oss.maxcdn.com/momentjs/2.8.2/moment.min.js"></script>
    <script src="https://rawgit.com/Eonasdan/bootstrap-datetimepicker/master/src/js/bootstrap-datetimepicker.js"></script>
    <form id="registrationForm" method="post" class="form-horizontal mitad" action="#">
    			
    				<h2>Formulario de Registro</h2>
    					<div class="form-group">
    						<label class="col-lg-3 control-label">Nombres</label>
    						<div class="col-lg-3">
    							<input type="text" class="form-control" name="nombre" />
    						</div>
    					</div>
     
    					 <div class="form-group">
    						<label class="col-lg-3 control-label">Apellidos</label>
    						<div class="col-lg-3">
    							<input type="text" class="form-control" name="apellido" />
    						</div>
    					</div>
     
    					<div class="form-group">
    						<label class="col-lg-3 control-label">Correo Electrónico</label>
    						<div class="col-lg-3">
    							<input type="text" class="form-control" name="email" />
    						</div>
    	 			 </div>
     
    					<div class="form-group">
    						<label class="col-lg-3 control-label">Password</label>
    						<div class="col-lg-3">
    							<input type="password" class="form-control" name="password" />
    						</div>
    					</div>
     
    					<div class="form-group">
    		<label class="col-lg-3 control-label">Fecha de Nacimiento</label>
    		<div class="col-lg-3">
    				<input type="text" class="form-control" name="datetimepicker" id="datetimepicker" data-date-format="YYYY-MM-DD" />
    		 </div>
    			</div>
     
    					<div class="form-group">
    						<label class="col-lg-3 control-label">Sexo</label>
    						<div class="col-lg-9">
    							<div class="radio">
    								<label>
    									<input type="radio" name="sexo" value="M" /> Masculino
    								</label>
    							</div>
    							<div class="radio">
    								<label>
    									<input type="radio" name="sexo" value="F" /> Femenino
    								</label>
    							</div>
    						</div>
    					</div>
     
    					<div class="form-group">
    						<label class="col-lg-3 control-label">Teléfono</label>
    						<div class="col-lg-3">
    							<input type="text" class="form-control" name="telefono" />
    						</div>
    					</div>
     
    					<div class="form-group">
    			 		 <label class="col-lg-3 control-label">Teléfono Celular</label>
    						<div class="col-lg-3">
    							<input type="text" class="form-control" name="telefono_cel" />
    						</div>
    			 	 </div>	
     
    			 <div class="form-group">
    						<div class="col-lg-9 col-lg-offset-3">
    							<button type="submit" class="btn btn-success left">Registrarse</button>
    						</div>
    					</div>
    				</form>
<!---_________________  _________________________________________________------------------------>
 <script>
    $('#registrationForm').bootstrapValidator({
    	 feedbackIcons: {
    		 valid: 'glyphicon glyphicon-ok',
    		 invalid: 'glyphicon glyphicon-remove',
    		 validating: 'glyphicon glyphicon-refresh'
    	 },
    	 fields: {
    		 nombre: {
    			 validators: {
    				 notEmpty: {
    					 message: 'El nombre es requerido'
    				 }
    			 }
    		 },
    		 apellido: {
    			 validators: {
    				 notEmpty: {
    					 message: 'El apellido es requerido'
    				 }
    			 }
    		 },
    		 email: {
    			 validators: {
    				 notEmpty: {
    					 message: 'El correo es requerido y no puede ser vacio'
    				 },
    				 emailAddress: {
    					 message: 'El correo electronico no es valido'
    				 }
    			 }
    		 },
    		 password: {
    			 validators: {
    				 notEmpty: {
    					 message: 'El password es requerido y no puede ser vacio'
    				 },
    				 stringLength: {
    					 min: 8,
    					 message: 'El password debe contener al menos 8 caracteres'
    				 }
    			 }
    		 },
    		 datetimepicker: {
    			 validators: {
    				 notEmpty: {
    					 message: 'La fecha de nacimiento es requerida y no puede ser vacia'
    				 },
    				 date: {
    					 format: 'YYYY-MM-DD',
    					 message: 'La fecha de nacimiento no es valida'
    				 }
    			 }
    		 },
    		 sexo: {
    			 validators: {
    				 notEmpty: {
    					 message: 'El sexo es requerido'
    				 }
    			 }
    		 },
    		 telefono: {
    			 message: 'El teléfono no es valido',
    			 validators: {
    				 notEmpty: {
    					 message: 'El teléfono es requerido y no puede ser vacio'
    				 },
    				 regexp: {
    					 regexp: /^[0-9]+$/,
    					 message: 'El teléfono solo puede contener números'
    				 }
    			 }
    		 },
    		 telefono_cel: {
    			 message: 'El teléfono no es valido',
    			 validators: {
    				 regexp: {
    					 regexp: /^[0-9]+$/,
    					 message: 'El teléfono solo puede contener números'
    				 }
    			 }
    		 },
     
    	 }
    });
</script>
        
        
        
        
        
        
        
<!---__________________________________________________________________------------------------>

    </body>

</html>