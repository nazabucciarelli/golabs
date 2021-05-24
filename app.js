$(document).ready(function(){

    if(window.innerWidth < 768){
        $('.btn').addClass('btn-sm');
    }

    else if(window.innerWidth > 600){
        $('.btn').removeClass('btn-sm');
    }

    
});