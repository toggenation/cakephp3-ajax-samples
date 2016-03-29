$(document).ready(function () {

    $('form').submit(function (e) {

        e.preventDefault();
        var form = $(this);


        var form_data = form.serialize();
        var url = form.attr('data-ajax');

        console.log(form_data);
        $.ajax({
            url: url,
            type: 'POST',
            dataType: 'json',
            data: form_data,
            beforeSend: function () {

            },
            complete: function () {

            },
            success: function (data) {
                console.log(data.errors);
                if (data.errors){
                    for (var key in data.errors) {
                        if (data.errors.hasOwnProperty(key)) {
                                for( var k in data.errors[key]) {
                                    if (data.errors[key].hasOwnProperty(k)) {
                                        
                                       $('input[name=' +  key + ']').parent('div').removeClass('error');
                                        $('input[name=' +  key + ']').next('div').remove();
                                        $('[name=' +  key + ']').parent('div').removeClass('error');
                                        $('[name=' +  key + ']').next('div').remove();
                                        $('[name=' + key + ']').parent('div').addClass('error');
                                       //console.log(data.errors[key]);
                                        $('[name=' + key + ']').after('<div class="error-message">' + data.errors[key][k] + '</div>');
                                         
                                    }
                                }
                            }
                        }
                    
                      
                    
            
                } else {
                    console.log("After de call");
                }
                   },
            error: function (data) {
                console.log(data);
            }
        });
    });

    $("#ae").click(function (e) {
        e.preventDefault();

        items = ['title1', 'body1'];
        for (i = 0; i < items.length; i++) {
            name = items[i];
            console.log(name);
            error_message = "This is a disaster";
            $('[name=' + name + ']').parent('div').addClass('error');
            $('[name=' + name + ']').after('<div class="error-message">' + error_message + '</div>');
        }
        return false;

    });
    $('#re').click(function () {
        $('input[name=title1]').parent('div').removeClass('error');
        $('input[name=title1]').next('div').remove();
        $('[name=body1]').parent('div').removeClass('error');
        $('[name=body1]').next('div').remove();
        return false;
    });

});