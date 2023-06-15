<?php
$conn = mysqli_connect('localhost', 'root', '');
if ($conn)
    echo "<p>Connection set up successfully.</p>";
mysqli_query($conn, "DROP DATABASE IF EXISTS hotelDB");
if (mysqli_query($conn, "CREATE DATABASE hotelDB"))
    echo "<p>Database created successfully.</p>";
mysqli_select_db($conn, "hotelDB");

// room_type table
$myStatement = "CREAT TABLE room_type
    (room_type_id INT NOT NULL AUTO_INCREMENT,
     room_type_name VARCHAR(100),
     total_room INT DEFAULT 5,
     CONSTRAINT pk_room_type PRIMARY KEY (room_type_id)
); ";

if (mysqli_query($conn, $myStatement))
    echo "<p>room_type table created successfully.</p>";

// reservation table
$myStatement = "CREATE TABLE reservation
(
reservation_id INT NOT NULL AUTO_INCREMENT,
room_type_id INT NOT NULL,
begin_date DATE NOT NULL,
end_date DATE NOT NULL,
confirm_number CHAR(13),
CONSTRAINT pk_reservation PRIMARY KEY (reservation_id),
CONSTRAINT fk_reservation_room_type FOREIGN KEY (room_type_id)
); ";
if (mysqli_query($conn, $myStatement))
    echo "<p>reservation table created successfully.</p>";
?>