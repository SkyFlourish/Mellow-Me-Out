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
        <li><a href="book-now.php"><div class="navImg" style="background-image: url(img/book2_Icon.png);" ></div>Book Now</a></li>
        <li><a href="offers.php"><div class="navImg" style="background-image: url(img/DiscountNav_Icon.png);" ></div>Special Offers</a></li>
        <li><a href="products.php"><div class="navImg" style="background-image: url(img/products_Icon.png);" ></div>Products</a></li>  
        <li><a href="about-us.php"><div class="navImg" style="background-image: url(img/about_Icon.png);" ></div>About Us</a></li>
        <li><a href="our-team.php"><div class="navImg" style="background-image: url(img/team_Icon.png);" ></div>Our Team</a></li>
        <li><a href="gallery.php"><div class="navImg" style="background-image: url(img/gallery_Icon.png);" ></div>Gallery</a></li>
        <li><a href="blog.php"><div class="navImg" style="background-image: url(img/blog_Icon.png);" ></div>Blog</a></li>
              
</ul>
</nav> 

