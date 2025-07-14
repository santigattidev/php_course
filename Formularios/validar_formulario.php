<?php

if(isset($_POST['submit'])){
  $name = $_POST['name'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $subject = $_POST['subject'];
  $message = $_POST['message'];
  if (!empty($name)) {
    $name = filter_var($name, FILTER_SANITIZE_STRING);
    $nameflag = true;
  }
  else {
    $error['name'] = "Name is required.";
  }
  if (!empty($email)) {
    $email = filter_var($email, FILTER_SANITIZE_EMAIL);
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailflag = true;
    } else {
      $error['email'] = "Invalid email format.";
    }
  }
  else {
    $error['email'] = "Email is required.";
  }
  if (!empty($phone)) {
    $phone = filter_var($phone, FILTER_SANITIZE_STRING);
    $phoneflag = true;
  }
  else {
    $error['phone'] = "Phone is required.";
  }
  if (!empty($subject)) {
    $subject = filter_var($subject, FILTER_SANITIZE_STRING);
    $subjectflag = true;
  }
  else {
    $error['subject'] = "Subject is required.";
  }
  if (!empty($message)) {
    $message = filter_var($message, FILTER_SANITIZE_STRING);
    $messageflag = true;
  }
  else {
    $error['message'] = "Message is required.";
  }
  if (isset($nameflag) && isset($emailflag) && isset($phoneflag) && isset($subjectflag) && isset($messageflag)) {
    // Here you can process the data, e.g., save to database or send an email
    echo "Form submitted successfully!";
    // Reset the form fields
    echo "<br>name: $name<br>email: $email<br>phone: $phone<br>subject: $subject<br>message: $message<br>";
    $name = $email = $phone = $subject = $message = '';
  }
  else {
    echo "Please correct the errors in the form.";
  }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
    .error {
      color: red;
    }
  </style>
</head>
<body>
  <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
    <label for="name">Name:</label>
    <input type="text" id="name" name="name" value="<?php echo isset($name) ? $name : ''; ?>">
    <span class="error"><?php echo isset($error['name']) ? $error['name'] : ''; ?></span> <br>

    <label for="email">Email:</label>
    <input type="email" id="email" name="email" value="<?php echo isset($email) ? $email : ''; ?>">
    <span class="error"><?php echo isset($error['email']) ? $error['email'] : ''; ?></span> <br>

    <label for="phone">Phone:</label>
    <input type="text" id="phone" name="phone" value="<?php echo isset($phone) ? $phone : ''; ?>">
    <span class="error"><?php echo isset($error['phone']) ? $error['phone'] : ''; ?></span> <br>

    <label for="subject">Subject:</label>
    <input type="text" id="subject" name="subject" value="<?php echo isset($subject) ? $subject : ''; ?>">
    <span class="error"><?php echo isset($error['subject']) ? $error['subject'] : ''; ?></span> <br>

    <label for="message">Message:</label>
    <textarea id="message" name="message"><?php echo isset($message) ? $message : ''; ?></textarea>
    <span class="error"><?php echo isset($error['message']) ? $error['message'] : ''; ?></span> <br>
    <br>
    <input type="submit" name="submit" value="Submit">
  </form>
</body>
</html>