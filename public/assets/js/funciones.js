var Alquiler1 = function(){
    return {
        validacionGeneral: function(id, reglas, mensajes){
            const formulario = $('#' + id);
            formulario.validate({
                rules: reglas,
                messages: mensajes,
                errorElement: 'span', //default input error message container
                errorClass: 'help-block help-block-error', //default input error message class
                focusInvalid: false, //do not focus the last invalid input 
                ignore: "", //validate all fields including form hidden input 
                highlight: function(element,errorClass,validClass){ // hightlight errors inputs 
                    $(element).closest('.form-group').addClass('has-error');//set error class to the control group 
                },
                unhighlight: function(element){//revert the change donde by hightlight
                    $(element).closest('.form-group').removeClass('has-error');//set error class to the control group 
                },
                success: function(label){
                    label.closest('.form-group').removeClass('has-error');//set error class to the control group 
                },
                errorPlacement: function(error, element){
                    if ($(element).is('select') && element.hasClass('bs-select')) {// para los select boostrap
                        error.insertAfter(element);//element.next().after(error);
                    } else if ($(element).is('select') && element.hasClass('select2-hidden-accesible')) {
                        element.next().after(error);
                    } else if (element.attr("data-error-container")) {
                        error.appendTo(element.attr("data-error-container"));
                    } else {
                        error.insertAfter(element);//default placement for everything else
                    }
                },
                invalidHandler: function(event, validator){//fisplay error alert on form submit
                },
                submitHamdler: function(form){
                    return true;
                }
            });
        },
    }
}();