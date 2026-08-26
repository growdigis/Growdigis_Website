<?php

$con = mysqli_connect('localhost','growdigi_admin','Growdigi@123','growdigi_DB');

if (isset($_POST['Submit'])) {
    $Email = $_POST['email'];

    // Validate the email address using a regular expression
    if (filter_var($Email, FILTER_VALIDATE_EMAIL)) {
        mysqli_query($con, "INSERT INTO `enquire`(`email`) VALUES ('$Email')");
        echo "
            <script>
            alert('Thank you! We will get back to you soon.');
            window.location.href = '../index.php';
            </script>
        ";
    } else {
        echo "
            <script>
            alert('Invalid email address. Please enter a valid email address.');
            window.location.href = '../index.php';
            </script>
        ";
    }
}
?>