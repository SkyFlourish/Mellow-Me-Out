<script type="text/javascript">
//hamburger code
    
    function toggleMenu()
    {
         
        var x = document.getElementsByClassName("testy")[0];
        var y = document.getElementsByTagName("header");
     
        if(x.style.display==="none")
            {
                x.style.display="block"; 
               
                
            }
        else
        {
           x.style.display="none"; 
            
        }
               
    }
</script>

<div class="hamburger" onclick="
toggleMenu();">
    
    <h3>Menu</h3>
    </div>
<nav class="testy">
<ul>
        <li><a href="book-now.php">Book Now</a></li>
        <li><a href="offers.php">Special Offers</a></li>
        <li><a href="products.php">Products</a></li>  
        <li><a href="about-us.php">About Us</a></li>
        <li><a href="our-team.php">Our Team</a></li>
        <li><a href="gallery.php">Gallery</a></li>
        <li><a href="blog.php">Blog</a></li>
              
</ul>
</nav> 

