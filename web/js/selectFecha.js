$(function () {
  $('#form_fechaInicio').datetimepicker({format: 'YYYY-MM-DD HH:mm', locale: 'es',});
  $('#form_fechaFin').datetimepicker({
    format: 'YYYY-MM-DD HH:mm',
    locale: 'es',
    useCurrent: false //Important! See issue #1075
  });
  $("#form_fechaInicio").on(function (e) {
    $('#form_fechaInicio').data("DateTimePicker").minDate(today);
  });
  
  $( document ).ready(function() {
     $('#form_fechaInicio').data("DateTimePicker").minDate(new Date());
  });
  $("#form_fechaInicio").on("dp.change", function (e) {
    $('#form_fechaFin').data("DateTimePicker").minDate(e.date);
  });
  $("#form_fechaFin").on("dp.change", function (e) {
    $('#form_fechaInicio').data("DateTimePicker").maxDate(e.date);
  });
});
