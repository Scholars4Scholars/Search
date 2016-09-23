searchVisible = 0;
transparent = true;

$(document).ready(function(){

	$('.datepicker').datepicker();
	$('[data-toggle="tooltip"]').tooltip()

    
    gsdk.initPopovers();
    
        
    $('#wizard').bootstrapWizard({
        'tabClass': 'nav nav-pills',
        'nextSelector': '.btn-next',
        'previousSelector': '.btn-previous',
         onInit : function(tab, navigation,index){
         
           //check number of tabs and fill the entire row
           var $total = navigation.find('li').length;
           $width = 100/$total;
           
           $display_width = $(document).width();
           
           if($display_width < 400 && $total > 3){
               $width = 50;
           }
           navigation.find('li').css('width',$width + '%');
        },
         onTabClick : function(tab, navigation, index){
            // Disable the posibility to click on tabs
            return false;
        }, 
        onTabShow: function(tab, navigation, index) {
            var $total = navigation.find('li').length;
            var $current = index+1;
            switch ($current) {
			    case 1:
			        $("#small_info").text("This information will let us pair you with the perfect scholarships for you.");
			        break;
			    case 2:
			        $("#small_info").text("Tell us about where you live and where you are from.");
			        break;
			    case 3:
			        $("#small_info").text("Alright, now tell us your highschool and your plans for college!");
			        break;
			    case 4:
			        $("#small_info").text("Now tell us what do you do for fun.");
			        break;
			    case 5:
			        $("#small_info").text("Almost done! Just a few more questions.");
			        break;
			}
            var wizard = navigation.closest('.wizard-card');
            
            // If it's the last tab then hide the last button and show the finish instead
            if($current >= $total) {
                $(wizard).find('.btn-next').hide();
                $(wizard).find('.btn-finish').show();
            } else {
                $(wizard).find('.btn-next').show();
                $(wizard).find('.btn-finish').hide();
            }
        },
        onNext: function(tab, navigation, index) {
	    	var next_tab = index+1; 
	    	for (i = 0; i < index; i++)
	    	{
		    	$('#step_' + i).addClass("done");
	    	}
	    	if (next_tab == 3)
	    	{
		    	var user = {};
		    	$("#about :input, #location :input").each(function(){
					var input = $(this); 
					var name = input.attr("name");
					var val = input.val();
					user[name] = val;
				});

		    	console.log(user);
		    	var backend = $.post("/search/api/profile.php", { data: JSON.stringify(user) } );

				backend.done(function( data ) {
					console.log(data);
				});
	    	}
	    }
     

    });

    // Prepare the preview for profile picture
    $("#wizard-picture").change(function(){
        readURL(this);
    });
    
    
    $('[data-toggle="wizard-radio"]').click(function(event){
        wizard = $(this).closest('.wizard-card');
        wizard.find('[data-toggle="wizard-radio"]').removeClass('active');
        $(this).addClass('active');
        $(wizard).find('[type="radio"]').removeAttr('checked');
        $(this).find('[type="radio"]').attr('checked','true');
    });
    
  //  $height = $(document).height();
    //$('.set-full-height').css('height',$height);
    
     
});


 //Function to show image before upload

function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $('#wizardPicturePreview').attr('src', e.target.result).fadeIn('slow');
        }
        reader.readAsDataURL(input.files[0]);
    }
}
    












