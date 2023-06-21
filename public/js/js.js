

/*$(document).ready(function() {

 $("#owl-demo").owlCarousel({

     autoPlay:3000, //Set AutoPlay to 3 seconds

     items:4,
     itemsDesktop : [1199,3],
     itemsDesktopSmall : [979,3]

 });

 });*/

 $(document).ready(function() {
 
  $("#owl-example").owlCarousel({
      itemsDesktop : [1499,4],
      itemsDesktopSmall : [1199,3],
      itemsTablet : [899,2],
      itemsMobile : [599,1],
      navigation : true,
      navigationText : ['<span class="fa-stack"><i class="fa fa-circle fa-stack-1x"></i><i class="fa fa-chevron-circle-left fa-stack-1x fa-inverse"></i></span>','<span class="fa-stack"><i class="fa fa-circle fa-stack-1x"></i><i class="fa fa-chevron-circle-right fa-stack-1x fa-inverse"></i></span>'],
  });
  
});

   //     counter
$('.count').each(function () {
   $(this).prop('Counter',0).animate({
       Counter: $(this).text()
   }, {

       duration: 2000,
       easing: 'swing',
       step: function (now) {
           $(this).text(Math.ceil(now));
       }
   });
});

