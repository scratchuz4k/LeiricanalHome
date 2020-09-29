<!DOCTYPE html>
<html>
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

  <style>

  .navbar{
    background-color:white;
    border-bottom: 1px solid #1f1475;
    width: 100vw;
    padding: 0;
    position:fixed;
    z-index: 1;
  }

  .nav-link {
    color: #1f1475;
    text-align: center;
  }

  .nav-link:hover{
    color: white;
    background-color: #1f1475;
    transition: 0.5s;
  }


    color: white;
  }

  .navbar-brand{
    padding: 1vh;
  }


  .navbar-brand img{
    width:40%;
    height:100%;
    padding: 1px;
  }


  body {
    position: relative;
  }
  #home {
      padding-top:50px;height:100vh;
      background-image: url("<?php echo e(asset('img/Slider.jpg')); ?>");
      background-repeat: no-repeat;
      background-size: cover;
      color:white;
      font-weight: bold;
      }

  #section2 {padding-top:8vh;height:500px;color: #fff; background-color: #673ab7;}
  #section3 {padding-top:8vh;height:500px;color: #fff; background-color: #ff9800;}
  #section41 {padding-top:8vh;height:500px;color: #fff; background-color: #00bcd4;}
  #section42 {padding-top:8vh;height:500px;color: #fff; background-color: #009688;}
  </style>


</head>
<body>

<?php echo $__env->yieldContent('content'); ?>

<script>
$(document).ready(function(){
  // Add scrollspy to <body>
  $('body').scrollspy({target: ".navbar", offset: 50});

  // Add smooth scrolling on all links inside the navbar
  $("#myNavbar a").on('click', function(event) {
    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 800, function(){

        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    }  // End if
  });
});
</script>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
</html>
<?php /**PATH C:\wamp64\www\LeiricanalHome\resources\views/layout/app.blade.php ENDPATH**/ ?>