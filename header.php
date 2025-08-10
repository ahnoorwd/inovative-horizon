<nav style="display:flex;align-items:center;justify-content:space-between;background:#222;padding:10px 20px;font-family:Arial,sans-serif;">
    <div class="logo">
        <img src="./logo.jpg" alt="Logo" style="width:70px;height:70px;border-radius:50%;">
    </div>
    <ul style="list-style:none;display:flex;margin:0;padding:0;">
        <li style="margin-left:15px;"><a href="index.php">Home</a></li>
        <li style="margin-left:15px;"><a href="enrolment.php">Enrolment</a></li>
        <li style="margin-left:15px;"><a href="courses.php">Courses</a></li>
        <li style="margin-left:15px;"><a href="admitted.php">Admitted</a></li>
        <li style="margin-left:15px;"><a href="your_details.php">Feedback</a></li>
        <li style="margin-left:15px;"><a href="about.php">About Us</a></li>
    </ul>
</nav>

<style>
    nav ul li a {
        text-decoration: none;
        color: white;
        background: #444;
        padding: 10px 18px;
        border-radius: 25px;
        transition: all 0.3s ease;
        display: inline-block;
    }
    nav ul li a:hover {
        background: #ff9800;
    }
    nav ul li a.active {
        background: #ff5722;
    }
</style>

<script>
    // Detect current page
    const currentPage = location.pathname.split('/').pop();
    document.querySelectorAll('nav ul li a').forEach(link => {
        if (link.getAttribute('href') === currentPage || (currentPage === '' && link.getAttribute('href') === 'index.php')) {
            link.classList.add('active');
        }
    });
</script>
