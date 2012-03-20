$(document).ready(function() {

    $(".appreciate").click(function(e){

        var id = $(this).attr('rel');
        
        $.ajax({
            url: 'appreciate/'+id,
            success: function(data){
                
                $('.appreciate').addClass('appreciated');

                $('.appreciate').html('<span>O</span>Appreciated');
            }
        });

        e.preventDefault();
        //console.log($(this).html());
    });
    /*
    $('.item').hide();
    $('.list h1').toggle(
        function(){
            $(this).parent().children('.item').slideDown('fast');
            $(this).children('.toggle').html(":");
        },
        function(){
            $(this).parent().children('.item').slideUp('fast');
            $(this).children('.toggle').html(";");
        }
    )

    $('.list').each(function(){
        var nr = $(this).children('.item').size();

        if(nr == 0){
            $(this).children('h1').children('.toggle').hide();
            $(this).children('p').hide();
        }
    })*/
    
	/*
    $('.comm_form').hide();	

    $('.add_comm_toggle').toggle(
    	function(){
    		$('.comm_form').slideDown('fast');
    		$(this).children('span').html('}');
    	},
    	function(){
    		$('.comm_form').slideUp();
    		$(this).children('span').html('{');
    	}
    )
    */
});