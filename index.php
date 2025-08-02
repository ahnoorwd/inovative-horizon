<!-- <?php include 'header.php'; ?>
<link rel="stylesheet" href="./style.css">

<div class="hero" style="background-image: url('banner.jpg');"></div>

<div class="cards">
    <?php for($i=1; $i<=5; $i++): ?>
        <div class="card">
            <h3>Course <?php echo $i; ?></h3>
            <p>Shortwww description for course <?php echo $i; ?>.</p>
        </div>
    <?php endfor; ?>
</div> -->

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

<!-- COURSES SECTION -->
<div id="trainers" style="display: flex; justify-content: center; gap: 60px; flex-wrap: wrap; padding: 40px 20px;">

  <!-- Trainer 1 -->
  <div style="background: #f8f9fa; padding: 20px; border-radius: 10px; width: 280px; box-shadow: 0 6px 15px rgba(0,0,0,0.1); text-align: center;">
    <img src="./noorprofile1.png" alt="Trainer 1" 
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
  <div style="background: #f8f9fa; padding: 20px; border-radius: 10px; width: 280px; box-shadow: 0 6px 15px rgba(0,0,0,0.1); text-align: center;">
    <img src="./trainer2.jpg" alt="Trainer 2" 
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


<!-- footer star's here  -->

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

