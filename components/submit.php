<?php

$con = mysqli_connect('localhost','growdigi_admin','Growdigi@123','growdigi_DB');

if(isset($_POST['Submit'])){
    $CompanyName = $_POST['cname'];
    $Name = $_POST['name'];
    $Email = $_POST['email'];
    $Mobile = $_POST['number'];
    $Message = $_POST['message'];
    $ServiceArr = $_POST['service'];
    $Service = implode(', ',$ServiceArr);

    // Database connection error handling
    if (!$con) {
        die("
        <script>
        alert('Database connection failed');
        window.history.back(); // Go back to the form
        </script>");
    }

    // Construct SQL query with error checking
    $query = "INSERT INTO `contactUsForm` (`company`, `name`, `email`, `mobile`, `service`, `message`, `createdDate`)
              VALUES ('$CompanyName', '$Name', '$Email', '$Mobile', '$Service', '$Message', NOW())";

    // Run the query and check if it's successful
    if (mysqli_query($con, $query)) {
        // Success message
        echo "
        <script>
        alert('Thank you for contacting us!');
        window.location.href = '../contactus.php'; // Redirect to another page after success
        </script>
        ";
    } else {
        // Query error handling
        echo "
        <script>
        alert('Error: Could not submit form. " . mysqli_error($con) . "');
        window.history.back(); // Go back to the form
        </script>
        ";
    }

    // Close the database connection
    mysqli_close($con);
}
?>