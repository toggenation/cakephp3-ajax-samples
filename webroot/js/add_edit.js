$(document).ready(function () {

    var _loadingDiv = $("#loadingDiv");
    var redirect_action = '';

    $('form').submit(function (e) {
        e.preventDefault();
        form_action = $(this).attr('action');
        redirect_action = $(this).attr('data-redirect');
        console.log(form_action);
        console.log($(this).serialize());
        // alert(form_action); 
        _loadingDiv.show();
        $.post(form_action,
                $(this).serialize(),
                afterValidate,
                "JSON"
                );
        return false;
    });

    function afterValidate(data, status) {
        $(".error").removeClass('error');
        $('#flashMessage').remove();
        $(".error-message").remove();

        if (data.errors) {
            onError(data.errors);
        } else if (data.success) {
            onSuccess(data.success);
        }
    }

    function onSuccess(data) {
        console.log("In Success");
        flashMessage(data.message, 'success');
        _loadingDiv.hide();
        console.log(data);
        window.setTimeout(function () {
            window.location.href = data.redirect;
        }, 2000);
    }
    ;

    function onError(data) {
        console.log("In Error");
        console.log(data.data);
        flashMessage(data.message, 'error');
        $.each(data.data, function (field, errors) {
            console.log({"model": field});
            console.log({'errors': errors});
            error_message = '';
            for (var fieldName in this) {
                console.log({'fieldName': fieldName});
                if (error_message.length == 0){
                    error_message = this[fieldName];
                } else {
                   error_message += ", " + this[fieldName];
                }
            }
            
                $('[name=' + field + ']').parent('div').removeClass('error');
                $('[name=' + field + ']').next('div').remove();
                $('[name=' + field + ']').parent('div').addClass('error');
                $('[name=' + field + ']').after('<div class="error-message">' + error_message + '</div>');
            
            _loadingDiv.hide();
        });
    }
    ;

    function flashMessage(message, errortype) {
        
        var classes = 'message';
        
        if(errortype == 'success'){
            classes += ' success';
        } else {
            classes += ' error';
            
        };
        
        var _insert = $(document.createElement('div')).css('display', 'none');
        _insert.attr('id', 'flashMessage').addClass(classes).text(message);
        _insert.insertAfter($("nav:first")).fadeIn();
    }

});