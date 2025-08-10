<?php
include 'db.php';
?>

<!-- Light transparent background wrapper -->
<div style="
  min-height: 100vh;
  background: linear-gradient(135deg, rgba(255,255,255,0.8) 0%, rgba(230, 240, 255, 0.6) 100%);
  display: flex;
  justify-content: center;
  align-items: center;
  padding: 60px 20px;
  box-sizing: border-box;
">

  <form action="process_enrolment.php" method="POST" style="
    max-width: 420px;
    width: 100%;
    background: #f0f8ffcc;
    border-radius: 20px;
    box-shadow: 0 15px 40px rgba(0, 123, 255, 0.3);
    padding: 40px 35px;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    display: flex;
    flex-direction: column;
    gap: 25px;
    backdrop-filter: blur(10px);
  ">

    <h2 style="text-align:center; margin-bottom: 10px; color: #2575fc;">Enrol Now</h2>
    <p style="text-align:center; color: #555; font-size: 0.95rem; margin-bottom: 25px;">
      Join our courses and start your journey to success today!
    </p>

    <input type="text" name="name" placeholder="Your Name" required
      style="
        padding: 14px 20px;
        border: 2px solid #007bff;
        border-radius: 50px;
        font-size: 1rem;
        outline: none;
        box-shadow: inset 0 0 6px #cce4ff;
        transition: all 0.3s ease;
      "
      onfocus="this.style.borderColor='#0056b3'; this.style.boxShadow='0 0 12px #0056b3'; this.style.backgroundColor='#e6f0ff';"
      onblur="this.style.borderColor='#007bff'; this.style.boxShadow='inset 0 0 6px #cce4ff'; this.style.backgroundColor='';"
    >

    <input type="email" name="email" placeholder="Your Email" required
      style="
        padding: 14px 20px;
        border: 2px solid #007bff;
        border-radius: 50px;
        font-size: 1rem;
        outline: none;
        box-shadow: inset 0 0 6px #cce4ff;
        transition: all 0.3s ease;
      "
      onfocus="this.style.borderColor='#0056b3'; this.style.boxShadow='0 0 12px #0056b3'; this.style.backgroundColor='#e6f0ff';"
      onblur="this.style.borderColor='#007bff'; this.style.boxShadow='inset 0 0 6px #cce4ff'; this.style.backgroundColor='';"
    >

    <select name="course" required
      style="
        padding: 14px 20px;
        border: 2px solid #007bff;
        border-radius: 50px;
        font-size: 1rem;
        outline: none;
        box-shadow: inset 0 0 6px #cce4ff;
        appearance: none;
        background: url('data:image/svg+xml;utf8,<svg fill=\"%23007bff\" height=\"24\" viewBox=\"0 0 24 24\" width=\"24\" xmlns=\"http://www.w3.org/2000/svg\"><path d=\"M7 10l5 5 5-5z\"/></svg>') no-repeat right 15px center;
        background-size: 18px 18px;
        cursor: pointer;
        transition: all 0.3s ease;
      "
      onfocus="this.style.borderColor='#0056b3'; this.style.boxShadow='0 0 12px #0056b3'; this.style.backgroundColor='#e6f0ff';"
      onblur="this.style.borderColor='#007bff'; this.style.boxShadow='inset 0 0 6px #cce4ff'; this.style.backgroundColor='';"
    >
      <option value="" disabled selected>Select a Course</option>
      <?php
      $course_result = $conn->query("SELECT course_name FROM courses");
      while($course = $course_result->fetch_assoc()) {
          echo "<option value='{$course['course_name']}'>{$course['course_name']}</option>";
      }
      ?>
    </select>

    <button type="submit" style="
      padding: 14px 0;
      border: none;
      border-radius: 50px;
      background: linear-gradient(90deg, #007bff 0%, #00c6ff 100%);
      color: white;
      font-size: 1.2rem;
      font-weight: 600;
      cursor: pointer;
      transition: background 0.4s ease, transform 0.2s ease;
      box-shadow: 0 5px 15px rgba(0, 123, 255, 0.5);
    "
    onmouseover="this.style.background='linear-gradient(90deg, #0056b3 0%, #0099cc 100%)'; this.style.boxShadow='0 8px 20px rgba(0, 86, 179, 0.7)';"
    onmouseout="this.style.background='linear-gradient(90deg, #007bff 0%, #00c6ff 100%)'; this.style.boxShadow='0 5px 15px rgba(0, 123, 255, 0.5)';"
    onmousedown="this.style.transform='scale(0.97)';"
    onmouseup="this.style.transform='scale(1)';"
    >Submit</button>

    <button type="button" style="
      padding: 14px 0;
      border: none;
      border-radius: 50px;
      background: linear-gradient(90deg, #007bff 0%, #00c6ff 100%);
      font-size: 1.2rem;
      font-weight: 600;
      cursor: pointer;
      transition: background 0.4s ease, transform 0.2s ease;
      box-shadow: 0 5px 15px rgba(0, 123, 255, 0.5);
    "
    onmouseover="this.style.background='linear-gradient(90deg, #0056b3 0%, #0099cc 100%)'; this.style.boxShadow='0 8px 20px rgba(0, 86, 179, 0.7)';"
    onmouseout="this.style.background='linear-gradient(90deg, #007bff 0%, #00c6ff 100%)'; this.style.boxShadow='0 5px 15px rgba(0, 123, 255, 0.5)';"
    onmousedown="this.style.transform='scale(0.97)';"
    onmouseup="this.style.transform='scale(1)';"
    >
      <a href="./index.php" style="color: white; text-decoration: none; display: block;">Back To Home</a>
    </button>

  </form>
</div>
