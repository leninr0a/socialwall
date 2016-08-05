$(function(){
    scrollDownToTop();
   
    
});

function scrollDownToTop(){
    $('body').animate({ scrollTop: $(document).height() - $(window).height() }, 8000).animate({ scrollTop: 0 }, 3000,function(){
       
    }); 
    
    
}