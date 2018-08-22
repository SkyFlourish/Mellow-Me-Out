<?php
session_start();
include_once($_SERVER['DOCUMENT_ROOT'].'/mellowMeOut_Sprint3_includes/input-validation.inc.php');
include_once($_SERVER['DOCUMENT_ROOT'].'/mellowMeOut_Sprint3_includes/db-connect.php');
include_once($_SERVER['DOCUMENT_ROOT'].'/mellowMeOut_Sprint3_includes/staff_account_processing.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="utf-8">
        <!--Icon and Title-->
        <link rel="icon" type="image/png" href="img/favicon.png">
        <title>Admin page - MellowMeOut</title>
        <!--Keywords for search-->
        <meta name="keywords" content="Massage, eyelash extensions, beauty, melbourne, mellowMeOut, spas, Brow Tint, Aromatherapy Massage, Lymphatic massage, Indian head massage, Body Mud wrap, Body exfoliate, Eyelash Tint, Combat Stress, Revitalise ">
        <!--Description of page-->
        <meta name="description" content="Mellow Me Out wants to be your primary choice for all your beauty and relaxation needs. We have truly soothing and calming pampering experiences available for every client. It’s an ideal place to gather with friends, reconnect with loved ones or turn to as your destination for self-renewal and stress relief.">

        <meta name="viewport" content="width=device-width, initial-scale=1"> <!--Mobile view-->
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="blog.css">

        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

        <!-- Popper JS -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>

        <!-- Latest compiled JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
        <!-- FONT AWESOME ICONS -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.1/css/all.css" integrity="sha384-O8whS3fhG2OnA5Kas0Y9l3cfpmYjapjI0E4theH4iuMD+pLhbf6JI0jIMfYcK3yZ" crossorigin="anonymous">
        <script>
            document.addEventListener("DOMContentLoaded", function(event) { //run when page loads
                nav_Counter=4;
            });
        </script>
    </head>
<!-- Style Sheet for Nav and Footer-->
<style>
    <?php include 'nav_footer.css';?>
</style>

 <!-- ===CODE START=== -->
<body>
 <!-- NAVIGATION BAR CODE -->
<?php include'nav.php';?>
 <!-- End of Nav Code -->

        <!-- Administrator console would go here for now -->
        <!--  -->
    <div id="manage-center">
        <div id="manage-left">
            <table>
                <tr>
                    <td>
                        <a href="admin-page.php?selection=1">Manage bookings</a>
                    </td>
                </tr>
                <tr>
                    <td>
                        <a href="admin-page.php?selection=2">Manage services</a>
                    </td>
                </tr>
                <tr>
                    <td>
                        <a href="admin-page.php?selection=3">Manage blogs</a>
                    </td>
                </tr>
                <tr>
                    <td>
                        <a href="admin-page.php?selection=4">Manage staff</a>
                    </td>
                </tr>
                <tr>
                    <td>
                        <a href="admin-page.php?selection=5">Delete bookings</a>
                    </td>
                </tr>
                <tr>
                    <td>
                        <a href="admin-page.php?selection=6">Delete blogs</a>
                    </td>
                </tr>
                <tr>
                    <td>
                        <a href="admin-page.php?selection=7">Delete services</a>
                    </td>
                </tr>
                <tr>
                    <td>
                        <a href="admin-page.php?selection=8">Delete staff</a>
                    </td>
                </tr>
                <tr>
                    <td>
                        <a href="admin-page.php?selection=9">Add blogs</a>
                    </td>
                </tr>
                <tr>
                    <td>
                        <a href="admin-page.php?selection=10">Add services</a>
                    </td>
                </tr>
                <tr>
                    <td>
                        <a href="admin-page.php?selection=11">Add staff</a>
                    </td>
                </tr>
            </table>
        </div>
        <div id="manage-right">
            <?php include_once=
        </div>
    </div>

<!-- FOOTER CODE-->
<?php include 'footer.php';?>


</body>

</html>
