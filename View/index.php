<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Your LMS Website</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="../Includes/Css/style.css">

</head>

<body>

    <!-- Header -->
    <?php include '../Includes/Components/header.php'; ?>


    <!-- Hero Image -->
    <div class="hero-image">
        <div class="info-box">
            <h1>Logic Lab</h1>
            <p>Join our school to learn more than 5 coding languages!</p>
            <button class="btn btn-primary">Learn More</button>
        </div>
    </div>

    <!-- Company Information -->
    <div class="container mt-4">
        <div class="row  bg-text-gray  ml-n5">
            <div class="col-md-6">
                <img src="../Includes/img/company.jpg" alt="Company Image 1" class="img-fluid mb-3">
            </div>
            <div class="col-md-6">
                <h2>About Our Company</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam aliquam libero et velit pretium,
                    sed laoreet felis feugiat. Integer tincidunt mauris eu mauris scelerisque, non vestibulum elit
                    sagittis. Ut at convallis elit.</p>
                <p>Proin hendrerit sapien nec risus malesuada, nec mattis nunc accumsan. Sed et nunc eget felis
                    facilisis convallis.</p>
                <p>Our mission is to provide high-quality education in computer science and programming. We aim to
                    empower students with the knowledge and skills they need to succeed in the rapidly evolving
                    tech industry.</p>
            </div>
        </div>
        <br><br>
        <!-- Programs Offered Section -->
        <div class="row mt-4  bg-text-gray ml-5">
            <div class="col-md-6">
                <h2>Programs Offered</h2>
                <ul>
                    <li>Full Stack Web Development</li>
                    <li>Data Science and Analytics</li>
                    <li>Mobile App Development</li>
                    <li>Artificial Intelligence and Machine Learning</li>
                </ul>
            </div>
            <div class="col-md-6">
                <img src="../Includes/img/coding.jpg" alt="Programs Image" class="img-fluid">
            </div>
        </div>
        <br><br><br>
        <!-- Facilities Section -->
        <div class="row mt-4 bg-text-gray ml-n5">
            <div class="col-md-6">
                <img src="../Includes/img/facilities.jpg" alt="Facilities Image" class="img-fluid">
            </div>
            <div class="col-md-6">
                <h2>Our Facilities</h2>
                <p>We provide state-of-the-art facilities to enhance the learning experience:</p>
                <ul>
                    <li>Modern Classrooms</li>
                    <li>Computer Labs with the Latest Equipment</li>
                    <li>Library with Extensive Tech Resources</li>
                    <li>Collaborative Workspaces</li>
                </ul>
            </div>
        </div>
        <br><br><br>
        <!-- Achievements Section -->
        <div class="row mt-4 bg-text-gray ml-5">
            <div class="col-md-6">
                <h2>Our Achievements</h2>
                <p>Recognized for excellence in education and innovation:</p>
                <ul>
                    <li>Top-rated Coding School in the Region</li>
                    <li>Featured in Tech Magazines and Blogs</li>
                    <li>Graduates Employed at Leading Tech Companies</li>
                </ul>
            </div>
            <div class="col-md-6">
                <img src="../Includes/img/achievements.jpg" alt="Achievements Image" class="img-fluid">
            </div>
        </div>
    </div><br><br>
    <hr>



    <!-- Teachers Section -->
    <div class="container teacher-section mt-5">
        <div class="row">
            <!-- Teacher 1 -->
            <div class="col-md-4 teacher">
                <img src="../Includes/img/pfp.jpg" alt="Teacher 1" class="img-fluid rounded-circle teacher-pfp">
                <h4>Teacher 1</h4>
                <p>Description of Teacher 1.</p>
            </div>
            <!-- Teacher 2 -->
            <div class="col-md-4 teacher">
                <img src="../Includes/img/pfp.jpg" alt="Teacher 2" class="img-fluid rounded-circle teacher-pfp">
                <h4>Teacher 2</h4>
                <p>Description of Teacher 2.</p>
            </div>
            <!-- Teacher 3 -->
            <div class="col-md-4 teacher">
                <img src="../Includes/img/pfp.jpg" alt="Teacher 3" class="img-fluid rounded-circle teacher-pfp">
                <h4>Teacher 3</h4>
                <p>Description of Teacher 3.</p>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <?php include '../Includes/Components/footer.php'; ?>


    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

</body>

</html>
