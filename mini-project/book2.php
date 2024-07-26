<?php
session_start();
error_reporting(0);
include('adminconfig.php');
include('dbconnect.php');

function validateDateRange($start_date, $end_date) {
    $start_timestamp = strtotime($start_date);
    $end_timestamp = strtotime($end_date);

    // Check if start date is before end date
    if ($start_timestamp >= $end_timestamp) {
        return false; // Invalid date range
    }

    return true;
}

if (isset($_SESSION['name'])) {
    if(isset($_POST['submit'])) {
        $pid=intval($_GET['pkgid']);
        $firstname = ($_POST['firstname']);
        $middlename = ($_POST['middlename']);
        $lastname = ($_POST['lastname']);
        $gender = isset($_POST['gender']) ? $_POST['gender'] : '';
        $contact = ($_POST['contact']);
        $address = ($_POST['address']);
        $email = trim($_POST['email']);
        $guest = trim($_POST['guest']);
        $booking_from_date = $_POST['booking_from_date'];
        $booking_till_date = $_POST['booking_till_date'];

        // Validate the date range
        if (!validateDateRange($booking_from_date, $booking_till_date)) {
            $error = "Invalid date range";
        } else {
            // Prepare and execute SQL query for inserting booking details
            $sql = "INSERT INTO book (PackageId, firstname, middlename, lastname, gender, contact, address, email, guest, booking_from_date, booking_till_date) VALUES (:pid, :firstname, :middlename, :lastname, :gender, :contact, :address, :email, :guest, :booking_from_date, :booking_till_date)";

            $query = $dbh->prepare($sql);
            $query->bindParam(':pid', $pid, PDO::PARAM_INT);
            $query->bindParam(':firstname', $firstname, PDO::PARAM_STR);
            $query->bindParam(':middlename', $middlename, PDO::PARAM_STR);
            $query->bindParam(':lastname', $lastname, PDO::PARAM_STR);
            $query->bindParam(':gender', $gender, PDO::PARAM_STR);
            $query->bindParam(':contact', $contact, PDO::PARAM_STR);
            $query->bindParam(':address', $address, PDO::PARAM_STR);
            $query->bindParam(':email', $email, PDO::PARAM_STR);
            $query->bindParam(':guest', $guest, PDO::PARAM_INT);
            $query->bindParam(':booking_from_date', $booking_from_date, PDO::PARAM_STR);
            $query->bindParam(':booking_till_date', $booking_till_date, PDO::PARAM_STR);

            if ($query->execute()) {
                $lastInsertId = $dbh->lastInsertId();
                if ($lastInsertId) {
                    $msg = "Booked Successfully";
                    header("Location: tickets2.php?bkid=$lastInsertId");
                    exit; // Add this line to stop further execution after redirection
                } else {
                    $error = "Something went wrong. Please try again";
                }
            } else {
                $error = "Error in executing the query";
            }
        }
    }
} else {
    header('location: sample.php');
    exit; // Add this line to stop further execution after redirection
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Now !</title>
    <link rel="stylesheet" href="css/login.css?v=2">
    <!-- favicon -->
    <link rel="icon" sizes="32*32" href="./img/Screenshot_2024-03-01_221406-removebg-preview.png">
    <style>
   
* {
  box-sizing: border-box;
}

.row {
    display: flex;
    width: 80%;
    margin:  auto;
    /* background-color: white; */
    padding: 45px 40px 15px 40px;
}
.space{
    /* background-color: #fff; */
    /* display: contents; */
    width: 65vw;
    height: auto;
    margin: auto;
}
.space.button{
    margin: auto;
}
.button{
    display: flex;
    padding: 0px 10px 32px 10px;
}
.btn{
background-color: #fc036b;
    height: 5vh;
    width: 20vw;
    border: none;
    font-size: 16px;
    font-weight: 400;
    border-radius: 1px;
    position: relative;
    margin: auto;
}
/* Create two equal columns that sits next to each other */
.column {
  flex: 50%;
  padding: 10px;
  /* height: 300px;  */
  border-bottom: black dashed 2px;

}


    </style>
</head>
<body>
    <form method="POST" onsubmit="return validateForm()">
        <div class="space">
            <h1>NATIONAL BOOKING</h1>
            <div class="row">
                <div class="column1">
                    <img src="/img/Australia.jpg" alt="">
                </div>
                <div class="column">
                    <div class="text">
                        <label> First name </label>
                        <input type="text" class="input"  name="firstname" placeholder="Enter First Name" required>
                    </div>
                    <div class="text">
                        <label> Middle name </label>
                        <input type="text" class="input"  name="middlename" placeholder="Enter Middle Name" required>
                    </div>
                    <div class="text">
                        <label> Last name </label>
                        <input type="text" class="input"  name="lastname" placeholder="Enter Last Name" required>
                    </div>
                    <div class="text">
                <label >Gender</label>
                     </div>
                     <div class="text">
                    <span>
                     <label>
                  <input type="radio" name="gender" value="male">Male</label>
                  <label>
                  <input type="radio" name="gender" value="female">Female</label>
                  <label>
                  <input type="radio" name="gender" value="other">Other</label>
                  </span></div>
                    <div class="text">
                        <label> Contact </label>
                        <input type="tel" class="input" pattern="[0-9]{10}" maxlength="10" name="contact" required>
                    </div>
                </div>
                <div class="column">
                    <div class="text">
                        <label> Address </label>
                        <input type="text" class="input" name="address" placeholder="Address" required>
                    </div>
                    <div class="text">
                        <label> Email </label>
                        <input type="email" class="input" name="email" placeholder="Email" required>
                    </div>
                    <div class="text">
                        <label> Total number of guests </label>
                        <input type="number" min="1" class="input" name="guest" placeholder="Number Of Guests(Minimum 1)" required>
                    </div>
                    <div class="text">
                        <label for="date"> Date From: </label>
                        <input type="date" class="input" id="date_from" name="booking_from_date" required>
                    </div>
                    <div class="text">
                        <label for="date"> Date Till: </label>
                        <input type="date" class="input" id="date_till" name="booking_till_date" required>
                    </div>
                </div>
            </div>
            <div class="button">
                <button type="submit" class="btn" name="submit">Submit</button>
            </div>
        </div>
    </form>

    <script>
       function validateForm() {
            var bookingFromDate = document.getElementById('date_from').value;
            var bookingTillDate = document.getElementById('date_till').value;
            var currentTimestamp = new Date().getTime();
            if (bookingTillDate === '' || bookingFromDate >= bookingTillDate) {
                alert("Please enter a valid 'Date Till' greater than 'Date From'");
                return false; 
            }

            var bookingFromTimestamp = new Date(bookingFromDate).getTime();
            if (bookingFromTimestamp < currentTimestamp) {
                alert("Please enter a 'Date From' greater than current date");
                return false; 
            }

            return true; 
        }
    </script>
</body>
</html>
