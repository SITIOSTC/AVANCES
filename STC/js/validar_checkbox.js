
    function validar_checkbox() {
        var ok = 0;
        var ckbox = document.getElementsByName('linea[]');
            for (var i=0; i < ckbox.length; i++){
                if(ckbox[i].checked == true){
                ok = 1;
                }
            }
            
            if(ok == 0){
                alert('Por favor seleccione al menos una linea');
                    return false;
            }
    }