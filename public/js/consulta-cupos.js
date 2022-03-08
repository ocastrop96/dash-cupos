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
    $("#bloqueCupos2").html("");
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
        $("#bloqueCupos2").html(respuesta);
        // console.log(respuesta);
    }).fail(function () {
        console.log("error");
    })
}

function CargarTablas(nombreClase) {
    $('.' + nombreClase + '').DataTable({
        deferRender: true,
        retrieve: true,
        processing: true,
        paging: true,
        lengthChange: false,
        pageLength: 5,
        searching: true,
        ordering: false,
        order: [
            [1, "asc"]
        ],
        info: false,
        autoWidth: false,
        language: {
            url: "public/views/resources/js/dataTables.spanish.lang",
        },
    });
}

// CargarTotalDisponible('contadorEspecialidad126', 40)

// CargarTotalDisponible()
function CargarTotalDisponible(nombreClase2, total) {
    $('#' + nombreClase2 + '').html(total)
    // $("#contadorEspecialidad126").html(20);

    console.log(nombreClase2 + " -  " + total);
}