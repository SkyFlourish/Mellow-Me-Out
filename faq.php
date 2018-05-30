<!DOCTYPE html>
<html>
<head>
    <title>FAQ</title> <!-- Web Tab Title -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- Enabling zoom on mobile devices -->
    
    <meta name="keywords" content="spas, beauty, massages, eyelashes, melbourne">
    
    <meta name="description" content="Relaxing Spas. Book now today!">
    
    <link rel="stylesheet" type="text/css" href="faq.css"> <!-- Link to external CSS file -->
    <script type="text/javascript" src="slideshow.js"></script>
</head>
    
<body onload="ChangeDots">
    <div class="wrapper">
        <!-- Header -->
        <?php include('header.php')?>
        
    
    <!-- Navigation bar -->
        <?php include('nav.php')?>


<script type="text/javascript">
//javascript implementation
    var faqNum = 0;    
    function toggle()
    {
        
        var x = document.getElementsByClassName("collapseContent")[faqNum];
        var icon = document.getElementsByClassName("collapseIcon")[faqNum];
        
        if(x.style.display==="block")
            {
                x.style.display="none"; icon.style.background="url(img/plusIcon.png)";
                x.style.maxHeight=null;
                
          
            }
        else
        {
           x.style.display="block";  icon.style.background="url(img/minusIcon.png)";
            x.style.maxHeight=x.scrollHeight + "px";
        }
                
    }
    function collapseAll()
        { 
            faqNum=0;
            while(faqNum < 5)
            {
            var x = document.getElementsByClassName("collapseContent")[faqNum];
            var icon = document.getElementsByClassName("collapseIcon")[faqNum];
            
                if (x.style.display==="block")
                {
                    x.style.display="none"; 
                    icon.style.background="url(img/plusIcon.png)";
                }
            faqNum++;
            }
            
        }
          
        </script>
    <!-- MAIN CONTENT -->
    <div class= "content"> 
        <h2>FAQ</h2>
        <p>Looking for answers? Some of the most common questions can be answered by expanding the boxes bellow. Please contact us if the questions here do not answer your Inquiries.</p>
       
        <div class="faqContent">
          <h3>General Inquiries</h3>
            <button class="faqCollapse" onclick="faqNum = 0; toggle();">What payment options do you offer in store?<div class="collapseIcon"></div></button>
            <div class="collapseContent">We offer a wide range of payment options in store. You can either pay with cash or card. Currently there is no online payment for security reasons.
            </div>
        
     <button class="faqCollapse" onclick="faqNum = 1; toggle();">What is the massage attire?<div class="collapseIcon"></div></button>
            <div class="collapseContent">Attire is not strict at Mellow Me Out and we encourage you to wear the most comfortable clothes you can. When wearing our robes, please keep underwear on for hygenic reasons.
            </div>
                
        
            
            <h3>Massage and Skin Treatment</h3>
             <button class="faqCollapse" onclick="faqNum = 2; toggle();">Is Mellow Me Out suitable for men?<div class="collapseIcon"></div></button>
            <div class="collapseContent">
            Content coming soon..
            </div>
            
            <button class="collapseAllBut"  onclick="collapseAll();">Collapse all</button>   
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