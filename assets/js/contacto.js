$("#form_contacto").validator().on('submit', function (event)
{
    if($('#form-submit').hasClass('disabled') == false)
    {
        event.preventDefault();
        submitForm();
    }
});

function submitForm()
{
    var nombre  = $("#nombre_input").val();
    var movil   = $("#movil_input").val();
    var correo  = $("#correo_input").val();
    var titulo 	= $("#titulo_input").val();
    var mensaje = $("#input_mensaje").val();

    $.ajax(
    {
        type: "POST",
        url: "/classes/Contacto.php",
        data: "nombre=" + nombre + "&correo=" + correo + "&movil=" + movil +"&asunto=" + titulo + "&mensaje=" + mensaje,
        success : function(data)
        {
            submitMSG();
        }
    });
}

function submitMSG()
{
    $("#form-submit").removeClass("btn btn-cl");
    $("#msgSubmit").removeClass().addClass('animated fadeIn h3 text-center col-md-6 col-md-offset-3').text("Mensaje enviado correctamente");
}