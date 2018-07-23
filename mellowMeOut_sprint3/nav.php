<div class="container-fluid">
<nav class="navbar navbar-expand-sm navbar-dark navbar-style" style="background-color:#2d3436">
     <a class="navbar-brand" href="index.php">
    <img src="img/mellowMeOut_Logo.png" alt="Logo" style="width:240px;">
  </a>
    <!-- Navbar text-->
  
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
</nav>
<script>
    //CONTROLS WHAT PAGE WE ARE IN
    $( document ).ready(function() {
        
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
    });    
</script>
</div>