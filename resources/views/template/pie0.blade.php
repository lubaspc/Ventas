<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/smoke.js"></script>
<script src="lang/es.js"></script>
<script type="text/javascript">
  // Form Validation
$('#btnSubmit').click(function(e) {
  e.preventDefault();
  if ($('form').smkValidate()) {
     $('form').submit();
  }
  else{
    $.smkAlert({
      text: 'Faltan datos, favor de corregir!',
      type: 'warning'
    });
  }
});

</script>