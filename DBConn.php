<?php
function connDB()
    {
        global $mysqli;
        // connect to the database
        $mysqli = mysqli_connect("localhost", "root","", "hotelDB");
        // if failed
        if (mysqli_connect_error())
        {
            printf("Connection failed: %s\n ", mysqli_connect_error());
        }
    }
    ?>