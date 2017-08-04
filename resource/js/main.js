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







   });