function authorization()
{
    let login=$('[name = "login"]').val();
    let password=$('[name = "password"]').val();
    $.ajax({
        type: "POST",
        url: "authorization.php",
        data: 'login=' +login + '&' + 'password=' + password,
        success: function(msg){
            if(msg == "ok")
            {
                window.location.replace("PersonalPage.php");
            }
            else
            {
                $('#alert').css('display','block');
                $('#alert').html(msg);
            }
        }
    });
}

function abort()
{

}