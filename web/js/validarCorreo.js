function validarCorreo(){
    var email = document.getElementById('fos_user_registration_form_email').value;
    var correosPermitidos = new Array("@ugr.es", "@correo.ugr.es");

    correo = (email.substring(email.lastIndexOf("@")));

    var permitida = false;



      for (var i = 0; i < correosPermitidos.length; i++) {
         if (correosPermitidos[i] == correo) {
         permitida = true;
         break;
         }
      }
      if (!permitida) {
         document.getElementById('errorEmail').textContent="formato correo inválido";
         document.getElementById('fos_user_registration_form_email').focus();
         return false;
       }else{
          //submito!
         formulario.submit();
         return true;
       }

   //si estoy aqui es que no se ha podido submitir
   alert (mierror);
   return 0;

}
