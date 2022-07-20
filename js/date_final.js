var target_date = new Date('11/19/2022 6:00 PM').getTime();
var days, hours, minutes, seconds;
var invitados = {};
var boletos_adulto = {};
var boleto_niño = {};
var confirmacion = {};
var id_invitado = 0;

function checarTiempo() {
    $('#datos_encontrados').hide();
    $('#confirmados').hide();
    $('#gracias').hide();
    $('#selector_nino').hide();
    $('#ninos_conta').hide();
    consultarInvitados();
    setInterval(function () {
        var current_date = new Date().getTime();

        var seconds_left = (target_date - current_date) / 1000;

        days = parseInt(seconds_left / 86400);

        seconds_left = seconds_left % 86400;

        hours = parseInt(seconds_left / 3600);

        seconds_left = seconds_left % 3600;

        minutes = parseInt(seconds_left / 60);

        seconds = parseInt(seconds_left % 60);
        document.getElementById('date-day').innerHTML = days;
        document.getElementById('date-hr').innerHTML = hours;
        document.getElementById('date-min').innerHTML = minutes;
        document.getElementById('date-seg').innerHTML = seconds;

    }, 1000);
    
}
function buscar(){
    $('#datos_encontrados').hide();
    $('#confirmados').hide();
    $('#gracias').hide();
    $('#select_adultos' ).find('option').remove();
    $('#select_ninos' ).find('option').remove();
    $('#selector_nino').hide();
    $('#ninos_conta').hide();
    var campo = document.getElementById('nombre_search');
    var encontrado = 0;
    var nombre_encontrado_normal = '';
    const $select_adult = document.querySelector("#select_adultos");
    const $select_nin = document.querySelector("#select_ninos");
    if(campo.value !=''){
        var nombre_buscado = campo.value.trim().toLowerCase();
        for (var item in invitados) {
            var nombre_lista = invitados[item].trim().toLowerCase();
            var find = nombre_lista.indexOf(nombre_buscado);
            if(find != -1){
                encontrado = item;
                nombre_encontrado = nombre_lista;
                nombre_encontrado_normal = invitados[item].trim();
            }
        }


        if(encontrado != 0){
            if(confirmacion[encontrado] == '0'){
                id_invitado = encontrado;
                $('#nombre_encontrado').html( nombre_encontrado_normal);
                var b_adul = parseInt(boletos_adulto[encontrado]);
                var b_niñ = parseInt(boleto_niño[encontrado]);
                $('#boletos_adulto').html( boletos_adulto[encontrado]);
                $('#boletos_nino').html( boleto_niño[encontrado]);
                if(b_adul > 1 || b_adul == 0 ){
                    document.getElementById('subject_adult').innerHTML = 'boletos';
                }else{
                    document.getElementById('subject_adult').innerHTML = 'boleto';
                }
                if(b_niñ > 1 ){
                    $('#ninos_conta').show();
                    document.getElementById('subject_nin').innerHTML = 'boletos';
                }else if ( b_niñ == 0){
                    console.log('entra');
                    $('#ninos_conta').hide();
                }else{
                    $('#ninos_conta').show();
                    document.getElementById('subject_nin').innerHTML = 'boleto';
                }
                
                for (let index = 1; index <= b_adul; index++) {
                    const option_adult = document.createElement('option');
                    option_adult.value = index;
                    option_adult.text = index;
                    $select_adult.appendChild(option_adult);
                }
                document.getElementById('select_adultos').value=b_adul;
                
                if(b_niñ==0){
                    $('#selector_nino').hide();
                    const option_nin = document.createElement('option');
                    option_nin.value = 0;
                    option_nin.text = 0;
                    $select_nin.appendChild(option_nin);
                }else{
                    $('#selector_nino').show();
                    for (let index1 = 1; index1 <= b_niñ; index1++) {
                        const option_nin = document.createElement('option');
                        option_nin.value = index1;
                        option_nin.text = index1;
                        $select_nin.appendChild(option_nin);
                    }
                    document.getElementById('select_ninos').value=b_niñ;
                }
                $('#confirmados').hide();
                $('#datos_encontrados').show();
            }else if(confirmacion[encontrado] == '1'){
                $('#datos_encontrados').hide();
                $('#nombre_encontrado_confirmado').html( nombre_encontrado_normal);
                $('#confirmados').show();
            }
            
        }else{
            alert('Parece que tu nombre no aparece en la lista, consulta con Edgar o Evelyn para corroborar');
        }
    }else{
        alert('Por favor coloca un nombre para buscar');
    }
}

function consultarInvitados(){
    id_invitado = 0;
    const url = 'consulta_invitados.php'
    $.get(url, function(respuesta, status){
        if (status == 'success'){
           var object = JSON.parse(respuesta);
            $.each(object,((index,value)=>{
                invitados[value[0]] = value[1];
                boletos_adulto[value[0]] = value[3];
                boleto_niño[value[0]] = value[4];
                confirmacion[value[0]] = value[2];
            }));
        }
    });
}
function confirmar(confirmacion){
    var confirm = (confirmacion)? 1 : 2;
    var adultos = $('#select_adultos option:selected' ).val();
    var ninos = $('#select_ninos option:selected' ).val();
    $.get('confirma.php',{
        id: id_invitado,
        confirma: confirm,
        adultos: adultos,
        ninos: ninos
    }).done(function(data){
        $('#datos_encontrados').hide();
        $('#confirmados').hide();
        $('#gracias').show();
        consultarInvitados();
    });
}