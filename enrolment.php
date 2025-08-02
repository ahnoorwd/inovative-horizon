<!-- <?php include 'header.php'; ?>
<link rel="stylesheet" href="style.css">

<h2>Enrol Now</h2>

<form action="process_enrolment.php" method="POST">
    <input type="text" name="name" placeholder="Your Name" required><br>
    <input type="email" name="email" placeholder="Your Email" required><br>
    <input type="text" name="course" placeholder="Course Name" required><br>
    <button type="submit">Submit</button>
</form> -->
<!-- 

<?php
include 'header.php';
include 'db.php';
?>
<link rel="stylesheet" href="style.css">

<h2>Enrol Now</h2>

<form action="process_enrolment.php" method="POST">
    <input type="text" name="name" placeholder="Your Name" required><br>
    <input type="email" name="email" placeholder="Your Email" required><br>
    
    <select name="course" required>
        <option value="">Select a Course</option>
        <?php
        $course_result = $conn->query("SELECT course_name FROM courses");
        while($course = $course_result->fetch_assoc()) {
            echo "<option value='{$course['course_name']}'>{$course['course_name']}</option>";
        }
        ?>
    </select><br>

    <button type="submit">Submit</button>
</form> -->


<h2 style="text-align:center; margin-top:100px; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; margin-bottom: 25px; color: #333;">Enrol Now</h2>

<form action="process_enrolment.php" method="POST" style="
  max-width: 400px;
  margin: 0 auto 50px;
  padding: 30px 40px;
  background: #f0f8ff;
  border-radius: 15px;
  box-shadow: 0 8px 25px rgba(0, 123, 255, 0.2);
  font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
  display: flex;
 
  flex-direction: column;
  gap: 20px;
">

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

  <button style="
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
  ><a style="text-decoration:none; color: white;" href="./index.php">Back To Home</a></button>

</form>


<!-- footer are here  -->
