   $(document).ready(function(){
   	

/*For ProgressBar*/

   	$(window).scroll(function()
   	{
   		var wintop = $(window).scrollTop(),
   			docheight = $('body').height(),
   			winheight = $(window).height();
   		var totalScroll = (wintop / (docheight - winheight)) * 100;
   		$(".easyshop-progress").css("width", totalScroll + "%");
   	});


/*For Category Banner*/

   	$(document).scroll(function()
   	{
   		var scroll = $(this).scrollTop();
   		$("#banner-text").css(
   		{
   			'top': (scroll / 3) + 'px',
   			'opacity': 1 - (scroll / 1000),
   			'font-size': 0.8 - (scroll / 600) + 'em'
   		});
   		$("#banner").css(
   		{
   			'background-position': 'center' + (-scroll / 2) + 'px',
   		});
   	});

/*Plus Minus Selector*/


   var quantitiy=0;

   $('.quantity-right-plus').click(function(e){
        e.preventDefault();
        var quantity = parseInt($('#quantity').val());  
        if(quantity <=9) {

            $('#quantity').val(quantity + 1); 
         }       
    });

     $('.quantity-left-minus').click(function(e){
        e.preventDefault();
        var quantity = parseInt($('#quantity').val());
            if(quantity>0){
            $('#quantity').val(quantity - 1);
            }
    });



/*Product Carousel*/

  $('#Carousel').carousel({
        interval: 5000
    })



 /*checkout page*/

  var navListItems = $('div.setup-panel div a'),
          allWells = $('.setup-content'),
          allNextBtn = $('.nextBtn');

  allWells.hide();

  navListItems.click(function (e) {
      e.preventDefault();
      var $target = $($(this).attr('href')),
              $item = $(this);

      if (!$item.hasClass('disabled')) {
          navListItems.removeClass('btn-primary').addClass('btn-default');
          $item.addClass('btn-primary');
          allWells.hide();
          $target.show();
          $target.find('input:eq(0)').focus();
      }
  });

  allNextBtn.click(function(){
      var curStep = $(this).closest(".setup-content"),
          curStepBtn = curStep.attr("id"),
          nextStepWizard = $('div.setup-panel div a[href="#' + curStepBtn + '"]').parent().next().children("a"),
          curInputs = curStep.find("input[type='text'],input[type='email'],textarea"),
          isValid = true;

      $(".form-group").removeClass("has-error");
      
      for(var i=0; i<curInputs.length; i++){
          if (!curInputs[i].validity.valid){
              isValid = false;
              $(curInputs[i]).closest(".form-group").addClass("has-error");
          }
      }

      if (isValid)
          nextStepWizard.removeAttr('disabled').trigger('click');
  });

  $('div.setup-panel div a.btn-primary').trigger('click');


  /*end checkout*/



   });