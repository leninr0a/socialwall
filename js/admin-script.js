$(function(){
    
    
    //Instagram user add function
    $('#instagram-user-button').click(function(){
        var user = $('#instagram-user').val();
        $('.tagpool').append("<span class='label label-ig'><i class='fa fa-at'></i>"+user+"<i class='fa fa-close'></i></span>");
        addCloseFunction();
        cleanInput('#instagram-user');
    });

    //Instagram hashtag add function
    $('#instagram-hashtag-button').click(function(){
        var hashtag = $('#instagram-hashtag').val();
        $('.tagpool').append("<span class='label label-ig'><i class='fa fa-hashtag'></i>"+hashtag+"<i class='fa fa-close'></i></span>");
        addCloseFunction();
        cleanInput('#instagram-hashtag');
    });
        
    //Twitter user add function
     $('#twitter-user-button').click(function(){
        var user = $('#twitter-user').val();
        $('.tagpool').append("<span class='label label-tw'><i class='fa fa-at'></i>"+user+"<i class='fa fa-close'></i></span>");
        addCloseFunction();
        cleanInput('#twitter-user');
    });
    
    //Twitter hashtag add function
    $('#twitter-hashtag-button').click(function(){
        var hashtag = $('#twitter-hashtag').val();
        $('.tagpool').append("<span class='label label-tw'><i class='fa fa-hashtag'></i>"+hashtag+"<i class='fa fa-close'></i></span>");
        addCloseFunction();
        cleanInput('#twitter-hashtag');
    });
    
      //Facebook user add function
     $('#facebook-user-button').click(function(){
        var user = $('#facebook-user').val();
        $('.tagpool').append("<span class='label label-fb'>"+user+"<i class='fa fa-close'></i></span>");
        addCloseFunction();
        cleanInput('#facebook-user');
    });
    
    //Twitter hashtag add function
    $('#facebook-hashtag-button').click(function(){
        var hashtag = $('#facebook-hashtag').val();
        $('.tagpool').append("<span class='label label-fb'><i class='fa fa-hashtag'></i>"+hashtag+"<i class='fa fa-close'></i></span>");
        addCloseFunction();
        cleanInput('#facebook-hashtag');
    });
    
});


//Add the close functionality to the fa-close icon
function addCloseFunction(){
        $('.fa-close').click(function(){
            $(this).parent().remove();
        });
}

//Cliean the input which id is receive by parameter
function cleanInput(idInput){
    $(idInput).val('');
}