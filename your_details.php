<!-- Your_Details urfe Feedback -->

<?php include 'header.php'; ?>
<?php include 'db.php'; ?>

<h2 style="
    text-align: center;
    font-family: 'Segoe UI', sans-serif;
    margin-top: 30px;
    font-size: 30px;
    font-weight: 600;
    color: #333;
">Feedback</h2>

<form action="process_user_details.php" method="POST" style="
    max-width: 500px;
    margin: 30px auto;
    background: linear-gradient(135deg, #ffffff, #f3f7ff);
    padding: 30px;
    border-radius: 12px;
    box-shadow: 0 8px 25px rgba(0,0,0,0.12);
    font-family: 'Segoe UI', sans-serif;
    color: #444;
">

    <label style="display: block; margin-bottom: 6px; font-weight: 600; font-size: 14px;">Name:</label>
    <input type="text" name="name" required style="
        width: 100%;
        padding: 12px;
        border: 1px solid #ccc;
        border-radius: 8px;
        margin-bottom: 16px;
        font-size: 14px;
        transition: 0.3s;
    " onfocus="this.style.borderColor='#4CAF50'" onblur="this.style.borderColor='#ccc'">

    <label style="display: block; margin-bottom: 6px; font-weight: 600; font-size: 14px;">Username:</label>
    <input type="text" name="username" required style="
        width: 100%;
        padding: 12px;
        border: 1px solid #ccc;
        border-radius: 8px;
        margin-bottom: 16px;
        font-size: 14px;
        transition: 0.3s;
    " onfocus="this.style.borderColor='#4CAF50'" onblur="this.style.borderColor='#ccc'">

    <label style="display: block; margin-bottom: 6px; font-weight: 600; font-size: 14px;">Email:</label>
    <input type="email" name="email" required style="
        width: 100%;
        padding: 12px;
        border: 1px solid #ccc;
        border-radius: 8px;
        margin-bottom: 16px;
        font-size: 14px;
        transition: 0.3s;
    " onfocus="this.style.borderColor='#4CAF50'" onblur="this.style.borderColor='#ccc'">

    <label style="display: block; margin-bottom: 6px; font-weight: 600; font-size: 14px;">Phone Number:</label>
    <input type="text" name="phone" required style="
        width: 100%;
        padding: 12px;
        border: 1px solid #ccc;
        border-radius: 8px;
        margin-bottom: 16px;
        font-size: 14px;
        transition: 0.3s;
    " onfocus="this.style.borderColor='#4CAF50'" onblur="this.style.borderColor='#ccc'">

    <label style="display: block; margin-bottom: 6px; font-weight: 600; font-size: 14px;">Location:</label>
    <input type="text" name="location" required style="
        width: 100%;
        padding: 12px;
        border: 1px solid #ccc;
        border-radius: 8px;
        margin-bottom: 16px;
        font-size: 14px;
        transition: 0.3s;
    " onfocus="this.style.borderColor='#4CAF50'" onblur="this.style.borderColor='#ccc'">

    <label style="display: block; margin-bottom: 6px; font-weight: 600; font-size: 14px;">Message:</label>
    <textarea name="message" rows="4" required style="
        width: 100%;
        padding: 12px;
        border: 1px solid #ccc;
        border-radius: 8px;
        resize: vertical;
        margin-bottom: 20px;
        font-size: 14px;
        transition: 0.3s;
    " onfocus="this.style.borderColor='#4CAF50'" onblur="this.style.borderColor='#ccc'"></textarea>

    <button type="submit" style="
        width: 100%;
        background-color: #4CAF50;
        color: white;
        padding: 14px;
        font-size: 16px;
        font-weight: bold;
        border: none;
        border-radius: 8px;
        cursor: pointer;
        transition: background-color 0.3s ease, transform 0.2s ease;
    " onmouseover="this.style.backgroundColor='#45a049'; this.style.transform='scale(1.02)';"
      onmouseout="this.style.backgroundColor='#4CAF50'; this.style.transform='scale(1)';">Submit</button>
</form>





<footer style="margin-top:150px; background-color: #4d4daef2; color: white; padding: 40px 20px 10px; font-family: Arial, sans-serif;">
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
