<!DOCTYPE html>
<html>
<head>
  <title><link>Contact Us</link></title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <header>
    <h1><link>Contact Us</link></h1>
  </header>
  <nav>
    <ul>
      <li><a href="index.html">Home</a></li>
      <li><a href="about.html">About</a></li>
      <li><a href="contact.html">Contact</a></li>
    </ul>
  </nav>
  <main>
    <h2>Contact Page</h2>
    <form method="post" action="process_form.php">
      <label for="name">Name:</label>
      <input type="text" id="name" name="name" required><br>
      <label for="email">Email:</label>
      <input type="email" id="email" name="email" required><br>
      <label for="message">Message:</label>
      <textarea id="message" name="message" rows="4" required></textarea><br>
      <input type="submit" value="Submit">
    </form>
  </main>
  <footer>
    <p>&copy; 2022 <link>My Website</link></p>
  </footer>
</body>
</html>