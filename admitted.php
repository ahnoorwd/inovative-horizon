<?php include './header.php'; ?>
<?php include './db.php'; ?>
<link rel="stylesheet" href="style.css">

<h2 style="text-align: center; font-family: Arial, sans-serif; color: #2c3e50; margin-top: 40px;">Admitted Students</h2>

<div style="display: flex; flex-wrap: wrap; justify-content: center; gap: 20px; padding: 40px;">
<?php
$result = $conn->query("SELECT * FROM enrolments");

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "<div style='flex: 1 1 calc(25% - 20px); max-width: 300px; border: 1px solid #ddd; padding: 20px; border-radius: 10px; box-shadow: 0 4px 8px rgba(0,0,0,0.1); text-align: center; background: #ffffff; font-family: Arial, sans-serif; transition: transform 0.3s ease;'>";
        echo "<h3 style='color: #2c3e50; margin-bottom: 10px;'>" . $row['name'] . "</h3>";
        echo "<p style='margin: 5px 0; color: #34495e;'>Email: <strong>" . $row['email'] . "</strong></p>";
        echo "<p style='margin: 5px 0; color: #16a085;'>Course: <strong>" . $row['course'] . "</strong></p>";
        echo "</div>";
    }
} else {
    echo "<p style='text-align: center; font-family: Arial, sans-serif;'>No admitted students yet.</p>";
}
?>
</div>






<footer style="background-color: #4d4daef2; color: white; padding: 40px 20px 10px; font-family: Arial, sans-serif;">
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
