function showLoading() {
    $("#pageLoader").fadeIn();
}

function hideLoading() {
    $("#pageLoader").fadeOut();
}

function alertToast(description,time){
    new PNotify({
        icon:'icon-notification2',
        title: 'Notificaci\u00F3n',
        text: description,
        addclass: 'alert alert-warning alert-styled-right',
        type: 'error',
        delay:time
    });
}
function alertToastSuccess(description,time){
    new PNotify({
        icon:'icon-notification2',
        title: 'Notificaci\u00F3n',
        text: description,
        addclass: 'alert alert-primary alert-styled-right',
        type: 'info',
        delay:time
    });

}

function clearInput(elements,pvalue){
    $.each(elements, function (index, value) {
        $("#"+value).val(pvalue);
    });
}


var AJAXRest=function(path,parameters,typeAjax){
    this._path=path;
    this._parameters=parameters;
    this._vType=typeAjax.trim();
    this._resultContent={};
    this.extractDataAjax=function(callback){
        $.ajax({
            url: this._path,
            data: this._parameters,
            dataType: "json",
            headers:{'X-CSRF-TOKEN':$("input[name='_token']").val()},
            method: this._vType,
            success: function(msg){
                this._resultContent=msg;
                callback(this._resultContent,200);
                hideLoading();
            },
            error: function(xhr, status) {
                hideLoading();
                this._resultContent={};
                if( xhr.status == 422 ) {
                    errors = xhr.responseJSON;
                    var errores='';
                    $.each( errors.errors, function( key, value ) {
                        errores += value[0]+"\n";
                    });
                    if(errores.trim()!=""){
                        this._resultContent={message:errores,code:422};
                    }
                }else{
                    if( xhr.status == '404' ) {
                        this._resultContent={message:"C\u00F3digo o Pagina no encontrado",code:404};
                    }else{
                        this._resultContent={message:"Error de procesamiento (cod: "+xhr.status+ ")\n"+xhr.responseText,code:500};
                    }

                }

                callback(this._resultContent,xhr.status );


            },
            beforeSend: function(){
                showLoading();
            }
        });
    }
    function ajaxrequest(rtndata) {

    }

}
