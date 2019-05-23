<script language="javascript">

  function avisoreset(){
    if (confirm("¡Atención! Los datos del formulario se van a borrar")) {
      document.datos.reset()
    }
  }
 // Form Validation
function confirmacion(){
  var mensaje = confirm("Desea finalizar el registro del producto");
  if (mensaje) {
    if ($('form').smkValidate()) {
      $('form').submit()
      alert("Registrado Exitosamente");
    }
    else{
      $.smkAlert({
        text: 'Faltan datos favor de corregir!',
            type: 'warning'});
      alert("¡Faltan datos favor de corregir!");
    }
  }
  else{               
    alert("¡Haz denegado el mensaje!");
    }
  }

// Form Clear
$('#btnClear').click(function(e) {
  e.preventDefault();
  $('form').smkClear();
});


</script>
</body>
</html>