<?php include 'header.php'; ?>
<?php include 'db.php'; ?>
<link rel="stylesheet" href="style.css">

<h2 style="text-align: center; color: #333; font-size: 32px; margin: 40px 0; font-family: Arial, sans-serif;">Available Courses</h2>

<div style="display: flex; flex-wrap: wrap; gap: 30px; justify-content: center; padding: 0 20px;">
<?php
$result = $conn->query("SELECT * FROM courses");

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "<div style='background: linear-gradient(to bottom right, #f0f8ff, #e6f2ff); box-shadow: 0 4px 10px rgba(0,0,0,0.1); border-radius: 15px; padding: 25px; width: 320px; transition: transform 0.3s; font-family: Arial, sans-serif;'>";
        echo "<h3 style='font-size: 24px; color: #1e3a8a; margin-bottom: 10px;'>" . $row['course_name'] . "</h3>";
        echo "<p style='margin: 8px 0; font-size: 15px; color: #555;'><strong>Duration:</strong> " . $row['duration'] . "</p>";
        echo "<p style='margin: 8px 0 15px; font-size: 14px; color: #444; line-height: 1.4;'><strong>Description:</strong> " . $row['description'] . "</p>";
        echo "<p style='margin: 8px 0; font-size: 15px; color: #555;'><strong>Price:</strong> " . $row['price'] . "</p>";
        echo "<form action='process_enrolment.php' method='POST'>";
        echo "<input type='hidden' name='course' value='" . $row['course_name'] . "'>";
        echo "<input type='text' name='name' placeholder='Your Name' required style='width: 100%; padding: 10px; margin-bottom: 10px; border: 1px solid #ccc; border-radius: 8px;'><br>";
        echo "<input type='email' name='email' placeholder='Your Email' required style='width: 100%; padding: 10px; margin-bottom: 15px; border: 1px solid #ccc; border-radius: 8px;'><br>";
        echo "<button type='submit' style='background-color: #1e3a8a; color: white; padding: 10px 20px; border: none; border-radius: 8px; cursor: pointer; font-size: 15px; transition: background 0.3s;'>Enroll</button>";
        echo "</form>";
        echo "</div>";
    }
} else {
    echo "<p style='text-align: center; font-size: 18px;'>No courses found.</p>";
}
?>
</div>




<footer style="margin-top:100px; background-color: #4d4daef2; color: white; padding: 40px 20px 10px; font-family: Arial, sans-serif;">
  <div style="display: flex; flex-wrap: wrap; justify-content: space-between; max-width: 1200px; margin: auto;">
    
    <div style="flex: 1 1 300px; margin-bottom: 20px;">
      <h3 style="margin-bottom: 15px; font-size: 20px; border-bottom: 2px solid white; display: inline-block;">Innovative Horizon's</h3>
      <p style="font-size: 14px; line-height: 1.6;">
        Empowering learners since 2025 with future-ready technology education. Built by two passionate minds, now expanding with you.
      </p>
    </div>

    <div style="flex: 1 1 300px; margin-bottom: 20px;">
      <h4 style="margin-bottom: 15px; font-size: 20px; border-bottom: 2px solid white; display: inline-block;">Quick Links</h4>
      <ul style="list-style: none; padding: 0;">
        <li><a href="index.php" style="color: #ccc; text-decoration: none;">Home</a></li>
        <li><a href="courses.php" style="color: #ccc; text-decoration: none;">Courses</a></li>
        <li><a href="enrolment.php" style="color: #ccc; text-decoration: none;">Enrolment</a></li>
        <li><a href="admitted.php" style="color: #ccc; text-decoration: none;">Admitted</a></li>
        <li><a href="your_details.php" style="color: #ccc; text-decoration: none;">Feedback</a></li>
        <li><a href="about.php" style="color: #ccc; text-decoration: none;">About Us</a></li>
      </ul>
    </div>

    <div style="flex: 1 1 300px; margin-bottom: 20px;">
      <h4 style="margin-bottom: 15px; font-size: 20px; border-bottom: 2px solid white; display: inline-block;">Reach Us</h4>
      <p style="font-size: 14px;">Email: support@innovativehorizons.com</p>
      <p style="font-size: 14px;">Phone: +123 456 7890</p>
      <p style="font-size: 14px;">Location: Anywhere Online</p>
      <div style="margin-top: 10px;">
        <a href="#"><img src="facebook.png" alt="Facebook" style="width: 24px; height: 24px; margin-right: 10px; filter: brightness(0) invert(1); transition: transform 0.3s;"></a>
        <a href="#"><img src="instagram.png" alt="Instagram" style="width: 24px; height: 24px; margin-right: 10px; filter: brightness(0) invert(1); transition: transform 0.3s;"></a>
        <a href="#"><img src="linkedin.png" alt="LinkedIn" style="width: 24px; height: 24px; margin-right: 10px; filter: brightness(0) invert(1); transition: transform 0.3s;"></a>
        <a href="#"><img src="github.png" alt="GitHub" style="width: 24px; height: 24px; margin-right: 10px; filter: brightness(0) invert(1); transition: transform 0.3s;"></a>
      </div>
    </div>

  </div>

  <div style="text-align: center; border-top: 1px solid #ccc; margin-top: 30px; padding-top: 15px; font-size: 13px; color: #ccc;">
    <p>&copy; 2025 Innovative Horizon's. All rights reserved.</p>
  </div>
</footer>
