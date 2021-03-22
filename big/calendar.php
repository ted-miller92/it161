<!DOCTYPE html>
<html lang="en">
    <?php include "includes/header.php"?>
            <!--BEGIN LEFT COLUMN-->
            <section>
                <h2>Calendar</h2>
                <!--Show/Hide month view calendar based upopn device resolution-->
                <div class='month-view embed-container'>
                    <iframe src='https://calendar.google.com/calendar/embed?height=600&wkst=1&bgcolor=%23ffffff&ctz=America%2FLos_Angeles&src=dGhlb2RvcmUubWlsbGVyQHNlYXR0bGVjZW50cmFsLmVkdQ&src=Y19wMzd1cWVocmplamExZ2FqajB1OGwxZ2k2b0Bncm91cC5jYWxlbmRhci5nb29nbGUuY29t&src=YWRkcmVzc2Jvb2sjY29udGFjdHNAZ3JvdXAudi5jYWxlbmRhci5nb29nbGUuY29t&src=ZW4udXNhI2hvbGlkYXlAZ3JvdXAudi5jYWxlbmRhci5nb29nbGUuY29t&color=%23039BE5&color=%238E24AA&color=%2333B679&color=%230B8043&showTitle=0&showPrint=0&showTabs=0&showCalendars=1&showTz=1' style='border-width:0' width='800' height='600' frameborder='0' scrolling='no'></iframe>
                </div>
                
                <!--Show/Hide agenda view calendar based upopn device resolution-->
                <div class='agenda-view embed-container'>
                    <iframe src='https://calendar.google.com/calendar/embed?height=600&wkst=1&bgcolor=%23ffffff&ctz=America%2FLos_Angeles&src=dGhlb2RvcmUubWlsbGVyQHNlYXR0bGVjZW50cmFsLmVkdQ&src=Y19wMzd1cWVocmplamExZ2FqajB1OGwxZ2k2b0Bncm91cC5jYWxlbmRhci5nb29nbGUuY29t&src=YWRkcmVzc2Jvb2sjY29udGFjdHNAZ3JvdXAudi5jYWxlbmRhci5nb29nbGUuY29t&src=ZW4udXNhI2hvbGlkYXlAZ3JvdXAudi5jYWxlbmRhci5nb29nbGUuY29t&color=%23039BE5&color=%238E24AA&color=%2333B679&color=%230B8043&showTitle=0&showPrint=0&showTabs=0&showCalendars=1&showTz=1&mode=AGENDA' style='border-width:0' width='800' height='600' frameborder='0' scrolling='no'></iframe>
                </div>
            </section>
            <!--END LEFT COLUMN-->
            <!--BEGIN RIGHT COLUMN-->
            <aside>
                <h2>Event Info</h2>
                <h3>Big Project Due</h3>
                <p>The website for the IT161 midterm project is due on Wednesday, February 24, 2021. </p>
            </aside>
            <!-- END RIGHT COLUMN-->
            <?php include "includes/footer.php"?>
        </main>
    </body>
</html>