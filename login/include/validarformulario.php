<script>
$(document).ready(function() {

    $('#formulario').formValidation({
        framework: 'bootstrap',
        icon: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            formusuario: {
                row: '.form-group',
                validators: {
                    notEmpty: {
                        message: 'El USUARIO es obligatorio'
                    }
                }
            },
            formusername: {
                row: '.form-group',
                validators: {
                    notEmpty: {
                        message: 'El NOMBRE es obligatorio'
                    }
                }
            },
            formapellido: {
                validators: {
                    notEmpty: {
                        message: 'Los apellidos son obligatorios'
                    },
                    stringLength: {
                        min: 6,
                        max: 30,
                        message: 'Los apellidos tienen que tener entre 6 y 30 caracteres '
                    },
                    regexp: {
                        regexp: /^[a-zA-Z0-9_\.]+$/,
                        message: 'Los apellidos solo pueden contener letras'
                    }
                }
            },
            formmail: {
                validators: {
                    notEmpty: {
                        message: 'El mail es obligatorio'
                    },
                    emailAddress: {
                        message: 'Esta no es una direccion válida'
                    }
                }
            },
            formpassword: {
                validators: {
                    notEmpty: {
                        message: 'El password es obligatorio'
                    },
                    different: {
                        field: 'formusername',
                        message: 'EL password no puede ser el mismo que tu nombre'
                    }
                }
            },
            gender: {
                validators: {
                    notEmpty: {
                        message: 'El género es obligatorio'
                    }
                }
            },
            agree: {
                validators: {
                    notEmpty: {
                        message: 'Tu debes cumplir con todos los campos obligatorios'
                    }
                }
            }
        }
    });
});
</script>