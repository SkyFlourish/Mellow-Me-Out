<!DOCTYPE html>
<html>
<head>
    <title>Offers</title> <!-- Web Tab Title -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- Enabling zoom on mobile devices -->
    
    <meta name="keywords" content="spas, beauty, massages, eyelashes, melbourne">
    
    <meta name="description" content="Relaxing Spas. Book now today!">
    
    <link rel="stylesheet" type="text/css" href="offers.css"> <!-- Link to external CSS file -->
    <script type="text/javascript" src="slideshow.js"></script>
</head>
    
<body onload="ChangeDots">
    <div class="wrapper">
        <!-- Header -->
        <?php include('header.php')?>
        
    
    <!-- Navigation bar -->
        <?php include('nav.php')?>

    <!-- MAIN CONTENT -->
        <div class="content">
        <h2>Special Offers</h2>
            <p>Here are our latest offers! To use the vouchers, visit MellowMeOut and present these at payment.</p>
            <!--Voucher stuff-->
            <div class="voucher">
           
                <div class="voucherLeft">
                <div class="voucherImage">
                    </div>
              
                <div class="voucherExpiry">
                    <h5>Apr 04, 2018 - Apr 16, 2018</h5>
                </div>
            </div>
                
                <div class="voucherRight">
                <div class="voucherLogo">
                    <img src="img/mellowMeOut_Logo.png" alt="Mellow Me Out logo">
                    </div>
                    <h4>Get 10% off any massage when you present this at the counter</h4>
                    <br>
                    <h5>Voucher terms and conditions:</h5>
                    <ul>
                       <li>Each voucher is redeemable for one serice only</li>
                           <li>Each voucher can only be used for one transaction</li>
                         <li>No replacement or extenstion is given to expired vouchers</li>
                        <li>Voucher can be used on all services except discounted specials</li> 
                    </ul>
                </div>
                
            </div>
            <!--Other special offers part-->
            <h2 class="">Other special Offers</h2>
            <div class="centerList">
            <ul>
            <li>Bring a friend get 25% off your next treatment
                </li>
            <li>Get your first aromatic massage with 20% off
                </li>
            </ul>
            </div>
            <br>
            <br>
            <br>
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