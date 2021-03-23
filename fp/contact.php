<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Lauren Sewell Consulting</title>
        <meta charset="utf-8">
        <meta name="description" content="Grant writing and services for your business or foundation">
        <!--Font-->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@400&display=swap" >
        <link rel="stylesheet" href="css/reset.css">
        <link rel="stylesheet" href="css/header.css">
        <link rel="stylesheet" href="css/nav.css">
        <link rel="stylesheet" href="css/fp.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <!--Header-->
        <?php include "includes/header.php"?>
        <!--Navigation-->
        <?php include "includes/nav.php"?>
        <!--Main-->
        <main>
            <!--Left side-->
            <article>
                <h2>Contact</h2>
                <p>Are you ready to give your organization the funding it requires?</p>
                <p>Provide with a little information and we will get back to you as soon as we can. Our work together starts now.</p>
                <?php
                /*
                * Below are 2 different forms to be re-used       
                * 
                * Only use one at a time, comment out the other!       
                *
                */

                include 'includes/contact_include.php'; #site keys & code here
    
                $toAddress = "theodoremiller92@protonmail.com";  //place your/your client's email address here
                $toName = "Ted Miller"; //place your client's name here
                $website = "Contact form test";  //place NAME of your client's website

                //echo loadContact('simple.php');#demonstrates a simple contact form
                echo loadContact('multiple.php');#demonstrates multiple form elements
                ?>
            </article>
            <!--Right side-->
            <aside>
                <img src="images/lauren.jpg">
                <p>Lauren is a Northwest grant writer passionate about social services, conservation, literary arts and programs that improve the fabric of the Puget Sound region</p>
                <div class="linkBox">
                    <a href="#" class="fa fa-linkedin"></a>
                    <a href="#" class="fa fa-instagram"></a>
                    <a href="#" class="fa fa-google"></a>
                </div>    
            </aside>
        </main>
        <?php include "includes/footer.php"?>
    </body>
</html>