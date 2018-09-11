
<nav class="navbar navbar-expand-sm navbar-dark navbar-style shadow fixed-top" style="background-color:#2d3436">
<div class="container">
     <a class="navbar-brand" href="index.php">
    <img src="img/mellowMeOut_Logo.png" alt="Logo" style="width:240px;">
  </a>
    <!--HAMBURGER MENU -->
    <button class="navbar-toggler" id="nav-toggle" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <i class="fas fa-bars" id="hamburger-icon"></i>
  </button>
    <!-- Navbar text-->
  <div class="collapse navbar-collapse" id="navbarSupportedContent">

    <ul class="navbar-nav ml-auto">
    <li class="nav-item">
      <a class="nav-link" id="nav-home" href="index.php">Home</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" id="nav-book" href="book-now.php">Book Now</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" id="nav-products" href="products.php">Products</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" id="nav-gallery" href="gallery.php">Gallery</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" id="nav-blog" href="blog.php">Blog</a>
    </li>
  </ul>
    </div>
    </div>
</nav>
<script>

    $( document ).ready(function() {
        var hamburger_Open = false;
        var lock = false;
   
        //hamburger menu icon change
        $("#nav-toggle").click(function(){
            if(hamburger_Open == false){
                hamburger_Open = true;
                lock = true;
    
                $("#hamburger-icon").removeClass("fa-bars").addClass("fa-times");
              
            }
            else if(hamburger_Open == true ){
                hamburger_Open = false;
 
                $("#hamburger-icon").removeClass("fa-times").addClass("fa-bars");
              
            }
           
        });
        
        //CONTROLS WHAT PAGE WE ARE IN
        //Choosing the highlighting of the nav
        if(nav_Counter ==0){
            $("#nav-home").css("border-bottom-style","solid");
        }
        else{
            $("#nav-home").css("border-bottom-style","none");
        }
        if(nav_Counter ==1){
            $("#nav-book").css("border-bottom-style","solid");
        }
        else{
            $("#nav-book").css("border-bottom-style","none");
        }
        if(nav_Counter ==2){
            $("#nav-products").css("border-bottom-style","solid");
        }
        else{
            $("#nav-products").css("border-bottom-style","none");
        }
        if(nav_Counter ==3){
            $("#nav-gallery").css("border-bottom-style","solid");
        }
        else{
            $("#nav-gallery").css("border-bottom-style","none");
        }
        if(nav_Counter ==4){
            $("#nav-blog").css("border-bottom-style","solid");
        }
        else{
            $("#nav-blog").css("border-bottom-style","none");
        }
        
        //NOTE: PAGES THAT ARE NOT IN NAV ARE ASSIGNED -1 TO STOP CONSOLE ERRORS
        
        //Navigation show and hide on Scroll
        $(function () {
        var lastScrollTop = 0;

        $(window).scroll(function(event){
            var current = $(this).scrollTop();

            if (current > lastScrollTop) { // scroll down
            $('.navbar').slideUp(200);
      
            } else { // scroll up
      
            $('.navbar').slideDown(200);
            }
            
            lastScrollTop = current;
        });
    });
});    
</script>
