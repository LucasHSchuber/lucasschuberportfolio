 <!--============================= Fixed buttons ==============================-->
  


  <div id="arrowbtn">
    <a type="button" onclick="topFunction()" id="arrow" class="rounded-circle btn fixed-button arrowtop btn-lg" data-trigger="hover" data-toggle="popover" data-placement="top" data-content="till toppen"><i class="fas fa-arrow-up"></i></a>
  </div> 




<script>

  // When the user clicks on the button, scroll to the top of the document
      function topFunction() {
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
      }
  
          // Show/hide arrow btn on scroll
        $(document).scroll(function() {
          var y = $(this).scrollTop();
          if (y > 20) {
            $('.arrowtop').fadeIn();
          } else {
            $('.arrowtop').fadeOut();
          }
        });
  
    // popover when hover over arrowbtn
  
  $(document).ready(function(){
    $('[data-toggle="popover"]').popover();   
});
</script>