<?php 
// Example: submit_form.php
// Simulate email and OTP verification (replace with your actual verification logic)
$email = $_POST['email'];
$otp = $_POST['otp'];
// Your verification logic here
$verificationSuccessful = ($email == 'test@example.com' && $otp == '123456');
if ($verificationSuccessful) {
  echo json_encode(['success' => true, 'message' => 'Verification successful']);
} else {
  echo json_encode(['success' => false, 'message' => 'Verification failed']);
}
?>