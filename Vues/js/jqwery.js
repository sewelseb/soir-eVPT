/**
 * Created by sebastien on 16-03-16.
 */


$('#testCode').click(function(){
    var data = {'code': document.getElementById('codeInput').value};
    $.post( "Controller/controlCode.php", data,  function( response ) {
        console.log(response);
        var rep = JSON.parse(response);
        if(rep.response)
        {
            $('#code').hide('slow');
            $('#form-de-reponse').show('slow');
        }
        else
        {
            alert('mauvais code!');
        }

    });
});



$('.btn-code-promo').click(function(){
    $('.main-menu').hide('slow');
    $('.from-register-by-code').show('slow');
});

$('.btn-rally').click(function(){
    $('.main-menu').hide('slow');
    $('.from-register-by-rally').show('slow');
});

$('.btn-register-form').click(function(){
    $('.main-menu').hide('slow');
    $('.from-register-other').show('slow');
});

$('.return-to-main-menu').click(function(){
    $('.from-register-by-code').hide('slow');
    $('.from-register-by-rally').hide('slow');
    $('.from-register-other').hide('slow');
    $('.main-menu').show('slow');
});
