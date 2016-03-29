// webroot/js/global.js

$( document ).ready(function() {
    console.log( "ready!" );
    
    
    $('form').submit( function(e) {
        e.preventDefault();
        
        var form = $(this);
        var submit_button = $(form).find('input[type=submit]');
        var loading = form.attr('data-loading');
        var update = form.attr('data-update');
        var form_data = form.serialize();
        var url = form.attr('action');
        
         console.log(form_data);
        $.ajax({
        url: url,
        type: 'POST',
        dataType: 'json',
        data: form_data,
        beforeSend: function(){
           $('#loading').fadeIn();
           submit_button.attr('disabled','disabled');
      
           $('input[type=text]').blur();
        },
        complete: function(){
           $('#' + loading).fadeOut();
           submit_button.removeAttr('disabled');
        },
        success: function(data) {
            console.log("cityUpdate");
            $('#' + update ).fadeIn().html(data.content);
                 },
        error: function(data){
            console.log(data);
        }
        });
    });
});
