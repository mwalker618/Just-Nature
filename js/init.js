(function($){
  $(function(){


  // Initialize collapse button
  $(".button-collapse").sideNav();
  // Initialize collapsible (uncomment the line below if you use the dropdown variation)
  $('.collapsible').collapsible();

  
    $('.dropdown-button').dropdown({
      inDuration: 300,
      outDuration: 225,
      constrain_width: false, // Does not change width of dropdown to that of the activator
      hover: true, // Activate on hover
      gutter: 0, // Spacing from edge
      belowOrigin: true // Displays dropdown below the button
    }
  );

  // Toggle search
	$('a#toggle-search').click(function()
	{
		var search = $('div#search');

		search.is(":visible") ? search.slideUp() : search.slideDown(function()
		{
			search.find('input').focus();
		});

		return false;
	});

	$(document).ready(function(){
    // the "href" attribute of .modal-trigger must specify the modal ID that wants to be triggered
    $('.modal-trigger').leanModal();
  });
  
  // slider
  $(document).ready(function(){
      $('.slider').slider({full_width: true});
    });
 
 //scrollfire
  var options = [
    {selector: '#staggered-test', offset: 400, callback: 'Materialize.showStaggeredList("#staggered-test")' },
    {selector: '.product2', offset: 300, callback: 'Materialize.showproduct2("#staggered-test")' },
  ];
  Materialize.scrollFire(options);
  
  
  //Pushpin
/*   $(document).ready(function(){
    $('.tabs-wrapper .row').pushpin({ top: $('.tabs-wrapper').offset().top });
  }); */
     
  //Tabs
  $(document).ready(function(){
    $('ul.tabs').tabs();
  });
      
  //Select
  $(document).ready(function() {
    $('select').material_select();
  });
  
  //datepicker
  $('.datepicker').pickadate({
    selectMonths: true, // Creates a dropdown to control month
    selectYears: 10 // Creates a dropdown of 15 years to control year
  });
       
	//checkout payment toggler
	$("[name=checkoutToggler]").click(function(){
		$('.toHide').hide();
		$("#form-"+$(this).val()).show('fast');
	});
	
	
	$("[name=cardToggler]").click(function(){
		$('.toHide').hide();
		$("#form-"+$(this).val()).show('fast');
	});
	
  
    $(".displayForm").click(function(){
		$( ".showForm" ).show('fast');
	});
	
	/* $("#displayAddCard").click(function(){
		$( "#AddCard" ).show('fast');
	});
	
	$("#displayEditCard").click(function(){
		$( "#EditCard" ).show('fast');
	});  */
	
      
  }); // end of document ready
})(jQuery); // end of jQuery name space



