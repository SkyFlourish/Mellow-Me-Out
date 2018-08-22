<?php

// Load functions
require($_SERVER['DOCUMENT_ROOT'].'/mellowMeOut_Sprint3_includes/administer-blog-content.inc.php');

$selection = $_GET["selection"]

switch ($selection) {
    case '1':
    echo "<form action="
        break;

    case '2':
        // code...
        break;

    case '3':
        // code...
        break;

    case '4':
        // code...
        break;

    case '5':
        // code...
        break;

    case '6':
        // code...
        break;

    case '7':
        // code...
        break;

    case '8':
        // code...
        break;

    case '9':
        echo '<form action="administer-blog-content?action=add" method="POST">
                <p>
                <h4>Blog Title:</h4>
                <textarea placeholder="Title..." name="title" type="text"></textarea>
                </p>
                <p>
                <h4>Blog Category:</h4>
                <textarea placeholder="Category..." name="category" type="text"></textarea>
                </p>
                <p>
                <h4>Blog Contents</h4>
                <textarea placeholder="Blog content..." name="content" type="text" rows=15 cols=80></textarea>
                </p>
                <button type="submit" name="submitblog" sytle="background-color: green; height: 340px; width: 340px; color: white; ">SUBMIT BLOG
                </button>
            </form>';
        break;

    case '10':
        break;

    case '11':
        // code...
        break;

    default:
        // code...
        break;
}
