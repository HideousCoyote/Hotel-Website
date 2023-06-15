<?php
$page_title = "Home";
include ("header.inc");
?>
<div id="slideshow">
    <div id="slideshowWindow">
        <div class = "slide"> <img src = "http://placekitten.com/1401/300">
            <div class = "slideText">
                <h1 class = "slideHeading">Slide One</h1>
            </div>
        </div>
        <div class = "slide" id = "slide2"> <img src = "http://placekitten.com/1400/300">
            <div class = "slideText">
                <h1 class = "slideHeading">Slide Two</h1>
            </div>
        </div>   
        <div class = "slide"> <img src = "http://placekitten.com/1399/300">
            <div class = "slideText">
                <h1 class = "slideHeading">Slide Three</h1>
            </div>
        </div>
    </div>
</div> 
<div id = "main">
    <!--Page unique content -->
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3378.4
        69639880567!2d-81.24378908483406!3d32.13762258116982!2m3!1f0!2f0!3f0!
        3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x88fba1574d4c111b%3A0x2510fee3ce3ef
        890!2s100%20Outlet%20Pkwy%2C%20Pooler%2C%20GA%2031322!5e0!3m2!1sen!2sus
        !4v1686758643819!5m2!1sen!2sus" 
        width="100%" height="400px" 1frameborder="0" style="border:0;" 
        allowfullscreen></iframe>

    </div>
    <script src = "https://code.jquery.com/jquery-2.1.3.min.js"></script>
    <script src="slider.js"></script>
    <?php
    include ("footer.inc");
    ?>
