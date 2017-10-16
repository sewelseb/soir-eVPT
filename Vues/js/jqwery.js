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

var rad = document.formulaireDeReponse.presence;
var prev = null;
for(var i = 0; i < rad.length; i++) {
    rad[i].onclick = function() {
        //(prev)? console.log(prev.value):null;
        if(this !== prev) {
            prev = this;
        }
        //console.log(this.value);
        if (this.value=='true')
        {
            document.getElementById('valseRefus').pause();
            document.getElementById('valseRefus').currentTime = 0;
            document.getElementById('valseAccepte').play();

        }
        else
        {
            //console.log ('test');
            document.getElementById('valseAccepte').pause();
            document.getElementById('valseAccepte').currentTime = 0;
            document.getElementById('valseRefus').play();
        }
    };
}
