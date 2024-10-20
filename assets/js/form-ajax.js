// Ajax Validation

$(document).ready(function () {
    $("#contact-form").submit(function (e)
    {
        e.preventDefault();	//STOP default action
        $('.prettyprint').html('');
        var postData = $(this).serializeArray();
        var formURL = $(this).attr("action");
        $.ajax({
            url: formURL,
            type: "POST",
            data: postData,
            dataType: 'json',
            success: function (data, textStatus, jqXHR)
            {
                
                if (data.error == true) { // error part
                    console.log('Msg not sent');
                    var errors=data.display_errors;
                    $.each(errors,function(key,message){
                        console.log(key+' '+message);
                        $('#'+key).html(message);
                    });                                
                } else { // success
                    console.log('Msg Sent');
                    $("#thank_you_msg").html(`Thank You! We'll contact you shortly!`);
                    $('#contact-form')[0].reset();
                }
            },
            error: function (jqXHR, textStatus, errorThrown)
            {
                alert(errorThrown)
                $("#thank_you_msg").html('<pre><code class="prettyprint">AJAX Request Failed<br/> textStatus=' + textStatus + ', errorThrown=' + errorThrown + '</code></pre>');
            }
        });


    });

})

// Ajax Validation

$(document).ready(function () {
    $("#sidebar-form").submit(function (e)
    {
        e.preventDefault();	//STOP default action
        $('.prettyprint').html('');
        var postData = $(this).serializeArray();
        var formURL = $(this).attr("action");
        $.ajax({
            url: formURL,
            type: "POST",
            data: postData,
            dataType: 'json',
            success: function (data, textStatus, jqXHR)
            {
                
                if (data.error == true) { // error part
                    console.log('Msg not sent');
                    var errors=data.display_errors;
                    $.each(errors,function(key,message){
                        console.log(key+' '+message);
                        $('#'+key).html(message);
                    });                                
                } else { // success
                    console.log('Msg Sent');
                    $("#thank_you_msg_sidebar").html(`Thank You! We'll contact you shortly!`);
                    $('#sidebar-form')[0].reset();
                }
            },
            error: function (jqXHR, textStatus, errorThrown)
            {
                alert(errorThrown)
                $("#thank_you_msg_sidebar").html('<pre><code class="prettyprint">AJAX Request Failed<br/> textStatus=' + textStatus + ', errorThrown=' + errorThrown + '</code></pre>');
            }
        });


    });

})

// Ajax Validation

$(document).ready(function () {
    $("#desktop-contact-form").submit(function (e)
    {
        e.preventDefault();	//STOP default action
        $('.prettyprint').html('');
        var postData = $(this).serializeArray();
        var formURL = $(this).attr("action");
        $.ajax({
            url: formURL,
            type: "POST",
            data: postData,
            dataType: 'json',
            success: function (data, textStatus, jqXHR)
            {
                
                if (data.error == true) { // error part
                    console.log('Msg not sent');
                    var errors=data.display_errors;
                    $.each(errors,function(key,message){
                        console.log(key+' '+message);
                        $('#'+key).html(message);
                    });                                
                } else { // success
                    console.log('Msg Sent');
                    $("#thank_you_msg_desktop").html(`Thank You! We'll contact you shortly!`);
                    $('#desktop-contact-form')[0].reset();
                }
            },
            error: function (jqXHR, textStatus, errorThrown)
            {
                alert(errorThrown)
                $("#thank_you_msg_desktop").html('<pre><code class="prettyprint">AJAX Request Failed<br/> textStatus=' + textStatus + ', errorThrown=' + errorThrown + '</code></pre>');
            }
        });


    });

})