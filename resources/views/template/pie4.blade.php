<script type="text/javascript">
  function ocultar(){     
      document.getElementById('clientes').style.display = 'none';      
      document.getElementById('registro_formulario').style.display = 'block';

    }
    function mostrar(){     
      document.getElementById('clientes').style.display = 'block';
      document.getElementById('registro_formulario').style.display = 'none';
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