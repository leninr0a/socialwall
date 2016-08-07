$(function(){
    //scrollDownToTop();
    //fadingEffect();
   
    
});

function scrollDownToTop(){
    $('body','html').animate({ scrollTop: $(document).height() - $(window).height() }, 25000).animate({ scrollTop: 0 }, 25000,function(){
      scrollDownToTop();
    }); 
}

function fadingEffect(){
    var id='#pic'+Math.floor((Math.random() * 25) + 1);;
    console.log("fading "+id);
    $(id).fadeTo(500,0.5).fadeTo(500,1,function(){
        fadingEffect();
    });
    
}
