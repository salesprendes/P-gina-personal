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
    var nombre  = $("#nombre_contacto").val();
    var movil   = $("#movil_contacto").val();
    var correo  = $("#correo_contacto").val();
    var asunto 	= $("#asunto_contacto").val();
    var mensaje = $("#mensaje_contacto").val();

    $.ajax(
    {
        type: "POST",
        url: "/classes/Contacto.php",
        data: "nombre=" + nombre + "&correo=" + correo + "&movil=" + movil +"&asunto=" + asunto + "&mensaje=" + mensaje,
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