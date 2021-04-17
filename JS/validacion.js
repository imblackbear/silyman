(function() {
  'use strict';
  window.addEventListener('load', function() {
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.getElementsByClassName('needs-validation');
    // Loop over them and prevent submission
    var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    });
  }, false);
})();

//Valicacion de contraseñas
    function validacion(){
        var p1 = document.getElementById('password').value;
        var p2 = document.getElementById('cpassword').value;
        if(p1 != p2){
            swal({
                text: 'Las contraseñas no coinciden',
                icon: 'error'
            });
            var pass1 = document.getElementById('password');
            var pass2 = document.getElementById('cpassword');
            pass1.value = '';
            pass2.value = '';
            return false;
        }else{
          swal({
            text: 'Registro exitoso',
            icon: 'success',
            button: false
          });
            return true;
        }
    }

