<!-- Start of Footer --> 
<div class="container-fluid cfoot">
    <div class="row">
        <div class="col-md-6 col-xs-6 copy_right">
            <i class="far fa-copyright"></i> <label class="label_copy">COPYRIGHT 2018 By <a href="http://krimok.com/">KRIMOK TECHNOLOGIES</a></label>
        </div>
    </div>
</div>
</body>
</html>
<script>
    function show_login()
    {
             document.getElementById("loginDiv").style.display="block";
    }
     function hide_login()
    {
             document.getElementById("loginDiv").style.display="none";
    }

    // Select all links with hashes
    $('a[href*="#"]')
    // Remove links that don't actually link to anything
  .not('[href="#"]')
  .not('[href="#0"]')
  .click(function (event) {
      // On-page links
      if (
      location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '')
      &&
      location.hostname == this.hostname
    ) {
          // Figure out element to scroll to
          var target = $(this.hash);
          target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
          // Does a scroll target exist?
          if (target.length) {
              // Only prevent default if animation is actually gonna happen
              event.preventDefault();
              $('html, body').animate({
                  scrollTop: target.offset().top
              }, 1000, function () {
                  // Callback after animation
                  // Must change focus!
                  var $target = $(target);
                  $target.focus();
                  if ($target.is(":focus")) { // Checking if the target was focused
                      return false;
                  } else {
                      //$target.attr('tabindex', '-1'); // Adding tabindex for elements not focusable
                      $target.focus(); // Set focus again
                  };
              });
          }
      }
  });
</script>