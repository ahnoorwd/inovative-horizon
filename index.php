
<?php include 'header.php'; ?>

<link rel="stylesheet" href="./style.css">

<!-- HERO BANNER SECTION -->
<div class="hero">
    <div class="hero-content">
        <h1 class="hero-title">
  <span class="char">W</span><span class="char">e</span><span class="char">l</span><span class="char">c</span><span class="char">o</span><span class="char">m</span><span class="char">e</span>
  <!-- <span class="char">&nbsp;</span> -->
  <span class="char">t</span><span class="char">o</span>
  <!-- <span class="char">&nbsp;</span> -->
  <span class="char">I</span><span class="char">n</span><span class="char">n</span><span class="char">o</span><span class="char">v</span><span class="char">a</span><span class="char">t</span><span class="char">i</span><span class="char">v</span><span class="char">e</span>
  <!-- <span class="char">&nbsp;</span> -->
  <span class="char">H</span><span class="char">o</span><span class="char">r</span><span class="char">i</span><span class="char">z</span><span class="char">o</span><span class="char">n</span><span class="char">s</span>
</h1>
        <p class="hero-subtitle">Explore courses and boost your learning journey</p>
        <a href="./courses.php" class="hero-btn">View Courses</a>
    </div>
</div>
<!-- Add this inside your <head> or in a <style> block -->
<style>
  .slide-up {
    transform: translateY(150px);
    opacity: 0;
    animation: slideUp 1s ease-out forwards;
  }

  .slide-up:nth-child(1) {
    animation-delay: 0.2s;
  }

  .slide-up:nth-child(2) {
    animation-delay: 0.4s;
  }

  @keyframes slideUp {
    to {
      transform: translateY(0);
      opacity: 1;
    }
  }
</style>

<!-- COURSES SECTION -->
 <div>
  <h1 style="text-align:center">Our Trainers</h1>
 </div>
<div id="trainers" style="display: flex; justify-content: center; gap: 60px; flex-wrap: wrap; padding: 40px 20px;">

  <!-- Trainer 1 -->
  <div class="slide-up" style="background: #f8f9fa; padding: 20px; border-radius: 10px; width: 280px; box-shadow: 0 6px 15px rgba(0,0,0,0.1); text-align: center;">
    <img style="width: 120px; height: 120px; border-radius: 50%; object-fit: cover; margin-bottom: 15px; border: 1px solid black;" src="./noorprofile1.png" alt="Trainer 1" 
         style="width: 100px; height: 100px; border-radius: 50%; object-fit: cover; margin-bottom: 15px;">
    <h3 style="margin-bottom: 8px;">Abul Hannan Noor</h3>
    <p style="font-size: 14px; margin-bottom: 6px;"><strong>Skills:</strong>  HTML, CSS, React, NodeJs, MongDb, Php</p>
    <p style="font-size: 14px; margin-bottom: 12px;"><strong>Email:</strong> ahnoor232@gmail.com</p>
    <div style="display: flex; justify-content: center; gap: 12px;">
      <a href="https://facebook.com/trainer1" target="_blank" style="text-decoration: none; color: #3b5998;">FB</a>
      <a href="https://linkedin.com/in/trainer1" target="_blank" style="text-decoration: none; color: #0077b5;">LinkedIn</a>
      <a href="https://github.com/trainer1" target="_blank" style="text-decoration: none; color: #000;">GitHub</a>
    </div>
  </div>

  <!-- Trainer 2 -->
  <div class="slide-up" style="background: #f8f9fa; padding: 20px; border-radius: 10px; width: 280px; box-shadow: 0 6px 15px rgba(0,0,0,0.1); text-align: center;">
    <img style="width: 120px; height: 120px; border-radius: 50%; object-fit: cover; margin-bottom: 15px; border: 1px solid black;" src="./trainer2.jpg" alt="Trainer 2" 
         style="width: 100px; height: 100px; border-radius: 50%; object-fit: cover; margin-bottom: 15px;">
    <h3 style="margin-bottom: 8px;">Abu Saleh Al Amin</h3>
    <p style="font-size: 14px; margin-bottom: 6px;"><strong>Skills:</strong> HTML, CSS, React, NodeJs, MongDb, Php</p>
    <p style="font-size: 14px; margin-bottom: 12px;"><strong>Email:</strong> abusalehalamin52@gmail.com</p>
    <div style="display: flex; justify-content: center; gap: 12px;">
      <a href="https://facebook.com/trainer2" target="_blank" style="text-decoration: none; color: #3b5998;">FB</a>
      <a href="https://linkedin.com/in/trainer2" target="_blank" style="text-decoration: none; color: #0077b5;">LinkedIn</a>
      <a href="https://github.com/trainer2" target="_blank" style="text-decoration: none; color: #000;">GitHub</a>
    </div>
  </div>

</div>



<!-- OUR SUCCESS STORY SECTION -->
<section style="padding: 50px 20px; background: #f0f4f8; font-family: 'Poppins', sans-serif;">
  <h2 style="text-align: center; color: #2c3e50; margin-bottom: 40px;">🎉 Our Success Stories 🎉</h2>
  
  <div style="display: flex; flex-wrap: wrap; justify-content: center; gap: 30px; max-width: 1200px; margin: 0 auto;">
  
    <!-- Card 1 -->
    <div style="background: white; border-radius: 12px; width: 320px; padding: 20px; box-shadow: 0 6px 18px rgba(0,0,0,0.1); text-align: center; transition: transform 0.3s ease; cursor: pointer;"
         onmouseover="this.style.transform='scale(1.05)';"
         onmouseout="this.style.transform='scale(1)';">
      <img src="./stu_1.jpg" alt="Sarah Ahmed" style="width: 120px; height: 120px; border-radius: 50%; object-fit: cover; margin-bottom: 15px; border: 3px solid #2575fc;">
      <h3 style="color: #2575fc; margin-bottom: 12px;">Sarah Ahmed</h3>
      <p style="color: #555; font-size: 14px; line-height: 1.5;">
        Completed full-stack course, now working at a leading tech firm. Passionate about mentoring juniors.
      </p>
    </div>

    <!-- Card 2 -->
    <div style="background: white; border-radius: 12px; width: 320px; padding: 20px; box-shadow: 0 6px 18px rgba(0,0,0,0.1); text-align: center; transition: transform 0.3s ease; cursor: pointer;"
         onmouseover="this.style.transform='scale(1.05)';"
         onmouseout="this.style.transform='scale(1)';">
      <img src="./stu_1.jpg" alt="Rafiq Islam" style="width: 120px; height: 120px; border-radius: 50%; object-fit: cover; margin-bottom: 15px; border: 3px solid #2575fc;">
      <h3 style="color: #2575fc; margin-bottom: 12px;">Rafiq Islam</h3>
      <p style="color: #555; font-size: 14px; line-height: 1.5;">
        Founded a startup post completing React & NodeJS course, recognized locally for innovation.
      </p>
    </div>

    <!-- Card 3 -->
    <div style="background: white; border-radius: 12px; width: 320px; padding: 20px; box-shadow: 0 6px 18px rgba(0,0,0,0.1); text-align: center; transition: transform 0.3s ease; cursor: pointer;"
         onmouseover="this.style.transform='scale(1.05)';"
         onmouseout="this.style.transform='scale(1)';">
      <img src="./stu_1.jpg" alt="Mina Rahman" style="width: 120px; height: 120px; border-radius: 50%; object-fit: cover; margin-bottom: 15px; border: 3px solid #2575fc;">
      <h3 style="color: #2575fc; margin-bottom: 12px;">Mina Rahman</h3>
      <p style="color: #555; font-size: 14px; line-height: 1.5;">
        Secured remote dev role after mastering PHP & MongoDB. Active tech blogger and speaker.
      </p>
    </div>

    <!-- Card 4 -->
    <div style="background: white; border-radius: 12px; width: 320px; padding: 20px; box-shadow: 0 6px 18px rgba(0,0,0,0.1); text-align: center; transition: transform 0.3s ease; cursor: pointer;"
         onmouseover="this.style.transform='scale(1.05)';"
         onmouseout="this.style.transform='scale(1)';">
      <img src="./stu_1.jpg" alt="Nusrat Jahan" style="width: 120px; height: 120px; border-radius: 50%; object-fit: cover; margin-bottom: 15px; border: 3px solid #2575fc;">
      <h3 style="color: #2575fc; margin-bottom: 12px;">Nusrat Jahan</h3>
      <p style="color: #555; font-size: 14px; line-height: 1.5;">
        Frontend developer specialized in React. Built multiple client projects post training.
      </p>
    </div>

    <!-- Card 5 -->
    <div style="background: white; border-radius: 12px; width: 320px; padding: 20px; box-shadow: 0 6px 18px rgba(0,0,0,0.1); text-align: center; transition: transform 0.3s ease; cursor: pointer;"
         onmouseover="this.style.transform='scale(1.05)';"
         onmouseout="this.style.transform='scale(1)';">
      <img src="./stu_1.jpg" alt="Imran Hossain" style="width: 120px; height: 120px; border-radius: 50%; object-fit: cover; margin-bottom: 15px; border: 3px solid #2575fc;">
      <h3 style="color: #2575fc; margin-bottom: 12px;">Imran Hossain</h3>
      <p style="color: #555; font-size: 14px; line-height: 1.5;">
        Backend expert with strong PHP & MongoDB skills, currently leading projects at a reputed firm.
      </p>
    </div>

    <!-- Card 6 -->
    <div style="background: white; border-radius: 12px; width: 320px; padding: 20px; box-shadow: 0 6px 18px rgba(0,0,0,0.1); text-align: center; transition: transform 0.3s ease; cursor: pointer;"
         onmouseover="this.style.transform='scale(1.05)';"
         onmouseout="this.style.transform='scale(1)';">
      <img src="./stu_1.jpg" alt="Fatima Begum" style="width: 120px; height: 120px; border-radius: 50%; object-fit: cover; margin-bottom: 15px; border: 3px solid #2575fc;">
      <h3 style="color: #2575fc; margin-bottom: 12px;">Fatima Begum</h3>
      <p style="color: #555; font-size: 14px; line-height: 1.5;">
        Full-stack developer thriving in a startup environment, passionate about JavaScript & UX design.
      </p>
    </div>
  
  </div>
</section>


<!-- PAYMENT SYSTEM SECTION -->
<?php
// Database connection
$conn = new mysqli("localhost", "root", "", "education_platform");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>

<!-- PAYMENT SECTION -->
<section style="padding: 50px 20px; background: #eef3f7; font-family: 'Poppins', sans-serif;">
  <h2 style="text-align: center; color: #2c3e50; margin-bottom: 30px;">💳 Payment System</h2>

  <div style="display: flex; justify-content: center; gap: 30px; flex-wrap: wrap;">

    <!-- Pay Your Bill Card -->
    <div style="
        background: white;
        border-radius: 12px;
        width: 320px;
        padding: 20px;
        box-shadow: 0 6px 18px rgba(0,0,0,0.1);
        text-align: center;
        transition: transform 0.3s ease;
        cursor: pointer;
      "
      onclick="window.location.href='payment.php'">
      <img src="./payment-icon.png" alt="Payment" style="width: 80px; margin-bottom: 15px;">
      <h3 style="color: #2575fc; margin-bottom: 12px;">Pay Your Bill</h3>
      <p style="color: #555; font-size: 14px; line-height: 1.5;">
        Securely pay your course fees online. Click here to proceed to our payment page.
      </p>
      <button style="
          margin-top: 15px;
          background: #2575fc;
          color: white;
          padding: 10px 20px;
          border: none;
          border-radius: 6px;
          cursor: pointer;
          transition: background 0.3s ease;
        "
        onmouseover="this.style.background='#1b5dcc'"
        onmouseout="this.style.background='#2575fc'">
        Go to Payment
      </button>
    </div>

    <!-- Payment History Card -->
    <div style="
        background: white;
        border-radius: 12px;
        width: 320px;
        padding: 20px;
        box-shadow: 0 6px 18px rgba(0,0,0,0.1);
      ">
      <h4 style="margin-bottom: 15px; color: #2575fc;">Your Payment History</h4>
      <?php
      // Get the last 5 payments (you can filter by logged-in student if you have login system)
      $result = $conn->query("SELECT payment_date, amount, payment_method FROM payments ORDER BY payment_date DESC LIMIT 5");
      if ($result->num_rows > 0) {
          while($row = $result->fetch_assoc()) {
              echo "<p style='font-size: 14px; margin: 5px 0;'>
                      <strong>" . date("d M Y", strtotime($row['payment_date'])) . "</strong> — " .
                      number_format($row['amount'], 2) . " USD (" . htmlspecialchars($row['payment_method']) . ")
                    </p>";
          }
      } else {
          echo "<p style='font-size: 14px; color: gray;'>No payments found.</p>";
      }
      ?>
    </div>

  </div>
</section>




<!-- footer star's here  -->

<footer style="background-color: #4d4daef2; color: white; padding: 40px 20px 10px; font-family: Arial, sans-serif;">
  <div style="display: flex; flex-wrap: wrap; justify-content: space-between; max-width: 1200px; margin: auto;">
    
    <div style="flex: 1 1 300px; margin-bottom: 20px;">
      <h3 style="margin-bottom: 15px; font-size: 20px; border-bottom: 2px solid white; display: inline-block;">Innovative Horizon's</h3>
      <p style="font-size: 14px; line-height: 1.6;">
        Empowering learners since 2025 with future-ready <br> technology education. Built by two <br> passionate minds, now expanding with you.
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

