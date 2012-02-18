$(document).ready(function() {

    $( "#tabs" ).tabs();
    $( "#creation_date, #update_date" ).datepicker({ dateFormat: 'yy-mm-dd' });
    $( "#status, #type, #category" ).buttonset();
    $( "#comments" ).button();
    $( "#add_comments" ).button();
 
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