$("#fBusqueda").inputmask('dd/mm/yyyy', { 'placeholder': 'dd/mm/yyyy' })
$('#fBusqueda').datepicker({
    'format': 'dd/mm/yyyy',
    'autoclose': true,
    'language': 'es',
    'startDate': '-1m',
    'endDate': '+2m'
});

CargarTablaCupos($("#fBusqueda").val());

$("#fBusqueda").change(function () {
    $("#bloqueCupos").html("");
    var fecha = $(this).val();
    CargarTablaCupos(fecha);

});
function CargarTablaCupos(fechaBusqueda) {
    $.ajax({
        url: "public/views/src/ajaxCupos.php",
        method: "POST",
        dataType: "html",
        data: { fechaBusqueda: fechaBusqueda }
    }).done(function (respuesta) {
        $("#bloqueCupos").html(respuesta);
        $(".datatableCuposDisponibles").DataTable({
            deferRender: true,
            retrieve: true,
            processing: true,
            paging: true,
            lengthChange: false,
            pageLength: 20,
            searching: true,
            ordering: true,
            order: [
                [1, "asc"]
            ],
            info: true,
            autoWidth: false,
            language: {
                url: "public/views/resources/js/dataTables.spanish.lang",
            },
        });
    }).fail(function () {
        console.log("error");
    })
}