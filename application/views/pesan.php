
<script type="text/javascript">
    $(document).ready(function() {
      var navigasi = $(".carousel").offset().top;
      var sticky = function(){
        var scrollTop = $(window).scrollTop();
        if(scrollTop > navigasi)
        {
          $(".navbar-default").addClass("fix");
          $(".navbar-default .navbar-nav > li > a").addClass("a");
            $(".navbar-default .navbar-brand").addClass("b");
        }
        else {
          $(".navbar-default").removeClass("fix");
          $(".navbar-default .navbar-nav > li > a").removeClass("a");
          $(".navbar-default .navbar-brand").removeClass("b");
        }
      }
      sticky();
      $(window).scroll(function() {
        sticky();
      });
    });
</script>
