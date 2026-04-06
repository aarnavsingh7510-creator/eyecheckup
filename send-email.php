<?php
if ($_POST['fullName']) {
    $to = "aarnavsingh7510@gmail.com"; // ✅ HIDDEN server-side
    $subject = "New Eye Appointment - " . $_POST['fullName'];
    $message = "
    Name: " . $_POST['fullName'] . "
    Phone: " . $_POST['phone'] . "
    Age: " . $_POST['age'] . "
    Prescription: " . $_POST['filename'] . "
    Problem: " . $_POST['problem'];
    
    mail($to, $subject, $message);
    echo "success";
}
?>