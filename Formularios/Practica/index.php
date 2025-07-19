<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="styles.css">
</head>
<body>
  <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
    <label for="name">Name:</label>
    <input type="text" placeholder="Enter your name" id="name" name="name" value="<?php echo isset($name) ? $name : ''; ?>"><br>

    <label for="email">Email:</label>
    <input type="text" placeholder="Enter your email" id="email" name="email" value="<?php echo isset($email) ? $email : ''; ?>"><br>

    <label for="message">Message:</label><br>
    <textarea placeholder="Write your message here" id="message" name="message" rows="5" cols="50"><?php echo isset($message) ? $message : ''; ?></textarea><br>

    <?php if (!empty($errors)): ?>
      <div class="error">
        <?php foreach ($errors as $error): ?>
          <p class="error"><?php echo $error; ?></p>
        <?php endforeach; ?>
      </div>
    <?php elseif (isset($_POST['submit']) && empty($errors)): ?>
      <p><?php echo $name; ?> </p>  <p><?php echo $email; ?></p> <p><?php echo $message; ?></p>
      <div class="success">
        <p>Form submitted successfully!</p>
      </div>
    <?php endif; ?>

    <input type="submit" name="submit" value="Submit">
  </form>
</body>
</html>