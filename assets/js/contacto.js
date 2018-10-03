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
        url: "./assets/contacto/contacto.php",
        data: "name=" + nombre + "&email=" + correo + "&phone=" + movil +"&subject=" + titulo + "&message=" + mensaje,
        success : function(data)
        {
            if (data == "success")
            {
                submitMSG('Mensaje enviado correctamente');
            } 
            else
            {
                submitMSG(data);
            }
        }
    });
}

//submit message
function submitMSG(msg)
{
    $("#msgSubmit").removeClass().addClass('animated fadeIn h3 text-center col-md-6 col-md-offset-3').text(msg);
}