<!DOCTYPE html>
<html lang="en">
    <?php include "includes/header.php"?>
            <!--BEGIN LEFT COLUMN-->
            <section>
                <h2>Contact Ted</h2>
                <div>
    <?php
        /*
         * Below are 2 different forms to be re-used       
         * 
         * Only use one at a time, comment out the other!       
         *
         */

        include 'includes/contact_include.php'; #site keys & code here
    
        $toAddress = "ted.miller92@gmail.com";  //place your/your client's email address here
        $toName = "Ted Miller"; //place your client's name here
        $website = "Contact form test";  //place NAME of your client's website

        //echo loadContact('simple.php');#demonstrates a simple contact form
        echo loadContact('multiple.php');#demonstrates multiple form elements

	?>
  </div>
            </section>
            <!--END LEFT COLUMN-->
            <!--BEGIN RIGHT COLUMN-->
            <aside>
                <h2>About Ted</h2>
                <p>Ted is currently attending Seattle Central College, studying web development. He hopes to one day work independently, and he looks forward to learning more about the wide world of web development</p>
            </aside>
            <!-- END RIGHT COLUMN-->
            <?php include "includes/footer.php"?>
        </main>
    </body>
</html>