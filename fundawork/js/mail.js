$(document).ready(function(){
    $("form").submit(function(){  
        var nombre = $("#nombre").val();
        var email = $("#email").val();
        var telefono = $("#telefono").val();     
        var mensaje = $("#mensaje").val(); 
        // Returns successful data submission message when the entered information is stored in database.
        var dataString = 'nombre='+ nombre +'&email='+ email +'&email='+ email +'&telefono='+ telefono +'&mensaje='+ mensaje;
        if(nombre==''|| mensaje=='' ||email==''|| telefono=='')
        {
            alert("Por favor, rellene todos los campos");
        }
        else
        {
            // AJAX Code To Submit Form.
            $.ajax({
                type: "POST",
                url: "send-email.php",
                data: dataString,
                cache: false,
                success: function(result){
                    alert(result);
                    $("#nombre").val('');
                    $("#email").val('');
                    $("#telefono").val('');
                    $("#mensaje").val('');
                }
            });
        }
    return false;
    });
});