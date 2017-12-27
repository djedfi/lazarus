$(document).ready(function(){
  $('#txtDesde').datetimepicker({
            viewMode: 'years',
            format: 'YYYY'
  });

  $('#txtHasta').datetimepicker({
            viewMode: 'years',
            format: 'YYYY',
            useCurrent: false
  });

  $("#txtDesde").on("dp.change", function (e) {
        $('#txtHasta').data("DateTimePicker").minDate(e.date);
  });

  $("#txtHasta").on("dp.change", function (e) {
      $('#txtDesde').data("DateTimePicker").maxDate(e.date);
  });
});
