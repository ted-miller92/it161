<!DOCTYPE html>
<head>
    <!--<link rel="stylesheet" href="../css/reset.css">-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@400&display=swap" rel="stylesheet">
</head>
<html lang="en">
    <ul class="topNav" id="nav">
        <li class="homeLink"><a href="index.php">Home</a></li>
        <li class="secondaryLink"><a href="services.php">Services</a></li>
        <li class="secondaryLink"><a href="about.php">About</a></li>
        <li class="secondaryLink"><a href="contact.php">Contact</a></li>
        <li class="icon"><a href="javascript:void(0);" class="icon" onclick="responsiveNav()"><i class="fa fa-bars"></i></a></li>
    </ul>
    <script>
        function responsiveNav(){
            var x = document.getElementById("nav");
            if(x.className === "topNav"){
                x.className += "Responsive";
            } else {
                x.className = "topNav";
            }
        }
    </script>
</html>