	<script language="javascript">
    function valida_campo_vacio()       // Funcion para validar campos vacios del formulario  
    {                                    
      if (document.form.user.value == "" || document.form.pass.value == "") //Validamos que los campos no esten vacios
      {
        alert("Por favor ingrese un dato en el campo nombre/contraseña");
        return false;                   
      }
      else
      {
        return true;                     
      }
    }
	function valida_campos()       // Funcion para validar campos vacios del formulario  
    {                                    
      if (document.form2.name.value == "" || document.form2.descripcion.value == "" || document.form2.valor.value == "") //Validamos que los campos no esten vacios
      {
        alert("Por favor ingrese un dato en los campos");
        return false;                   
      }
	  if (isNaN(parseInt(document.form2.valor.value))) //Validamos que el campo valor tenga valores numericos
	  {
            alert('El campo value debe ser un número'); 
            return false;
      }
	  else
      {
        return true;                     
      }
    }
</script>