$(document).ready(function(){

	$(".page-scroll").click(function(e){
		var destination = $(this).attr('href');
		$('html, body').animate({
			scrollTop: $(destination).offset().top}, 1000);
	});
        
    
        $('input[name=iskustvo]').click(function(){
            if(this.id === "sa_iskustvom") {
                $("#show_firma").show('slow');
            }
            else {
                $("#show_firma").hide('slow');
                $("#input_firma").val('');
            }
        });
        
        
        $("tr#zaposleni").click(function(){
            $("tr#prikaz_firmi").toggle('show');
        });
        
        
        var max_fields = 20;
        var input_firma = $(".input_field_firma");
        var add_button = $(".add_firma_button");
       
        
        var x = 1;
        $(add_button).click(function(e){
            e.preventDefault();
            if(x < max_fields){
                x++;
                $(input_firma).append('<div class="input-group"><input type="text" name="ime_firme[]" class="form-control" placeholder="Naziv firme" id="input_firma">\n\
                                       <span class="input-group-addon remove_field"><a href="#"><i class="fa fa-times"></i></a></span></div>');
            }
        });
        
        $(input_firma).on("click",".remove_field", function(e){
            e.preventDefault();
            $(this).parent('div').remove();
            x--;
        });


}); 