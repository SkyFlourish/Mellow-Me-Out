<!DOCTYPE html>
<html>
<head>
    <title>Our Team</title> <!-- Web Tab Title -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- Enabling zoom on mobile devices -->
    
    <meta name="keywords" content="spas, beauty, massages, eyelashes, melbourne">
    
    <meta name="description" content="Relaxing Spas. Book now today!">
    
    <link rel="stylesheet" type="text/css" href="our-team.css"> <!-- Link to external CSS file -->
    <script type="text/javascript" src="slideshow.js"></script>
</head>
    
<body onload="ChangeDots">
    <div class="wrapper">
        <!-- Header -->
        <?php include('header.php')?>
        
    
    <!-- Navigation bar -->
        <?php include('nav.php')?>
    
    <!-- SLIDESHOW JAVASCRIPT -->
        <script type="text/javascript">
        var count = 0;//controls selection of text
            function changeText(){
                count++;//increment count on function call
                if (count==0)
                    {
                        document.getElementsByClassName("test")[0].innerHTML = ("Customer Service is number one");
                    }
                
                else if (count==1)
               {
                   document.getElementsByClassName("test")[0].innerHTML = ("We care for our people");
               }
                    
               else if (count==2)
               {
                   document.getElementsByClassName("test")[0].innerHTML = ("We respect all our customers");
                   count=-1;
               }
               
                   
                
            }
            window.onload = setInterval(changeText, 6000); //run code on load          
        </script>
<!-- SLIDESHOW HTML -->
        <div class="slideShow">
            <div class="slideShowContent">
                <h2 class="test">Customer Service is number one</h2> 
            </div>
            
    </div>
    <!-- MAIN CONTENT -->
    <div class= "content"> 
        <h2>OUR TEAM</h2>
        <p>At Mellow Me Out, we are dedicated to bring happiness to all of our customers. We will always listen to our customers and do what is right.</p>
        <div class="teamContainer">
            <div class="profileContainer">
            <div class="teamContainerProfile">
            <img src="img/profile_Stock.jpg" width: height=>
            </div>
            <div class="teamContainerProfileInfo">
                <p>
                    <b>Store Manager</b><br>
                    Jane Doe
                       </p>
                
            </div>
            </div>
            
            <div class="teamContent">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque in accumsan nunc. Cras erat nisl, maximus eu ligula a, aliquam ultrices libero. Etiam eget ante ex. Fusce aliquam varius mi vitae tincidunt. Duis non dolor nec erat congue tempor. Nullam felis leo, blandit vel justo vitae, feugiat tincidunt orci. Duis vestibulum . </p>
            </div>
     
        
        </div>
        </div>
        
      
    <!-- MAIN CONTENT END -->
    <!-- FOOTER CONTENT -->
       <?php include('footer.php')?>  
             <style>
            /* dynamic styling of footer across all pages */
            <?php include 'footer.css'; ?>
        </style>
</div>
    
    
   

</body>
</html>