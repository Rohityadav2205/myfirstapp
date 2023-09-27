
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Empower Educare</title>
    <!--bootstrap css-->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <!--font awesome-->
    <link rel="stylesheet" type="text/css" href="/assets/font-awesome/css/font-awesome.css">
    <!--owl carousel-->
    <link rel="stylesheet" type="text/css" href="/assets/css/owl.carousel.min.css">
    <!--custom css-->
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="assets/css/custom.css">
</head>

<body>

    @include('layouts.navbar')

    <!--Get in touch-->
    <div class="mp-color">
        <div class="icon inOut">
            <span>
                Get In Touch
            </span>
        </div>
        <br>
        <div id="">
            <form action="process.php" method="post" enctype="multipart/form-data">
                <div class="messages">
                </div>
                <div class="form-group mb-2 me-3 ms-3">
                    <input type="text" class="form-control" name="name" id="name" placeholder="I am" >
                </div>
                <div class="form-group mb-2 me-3 ms-3">
                    <input type="email" class="form-control" name="name" id="name" placeholder="Name" >
                </div>
                <div class="form-group mb-2 me-3 ms-3">
                    <input type="text" class="form-control" name="number" id="number" placeholder="Phone Number*" required="">
                </div>
                <div class="form-group mb-2 me-3 ms-3">
                    <input type="text" class="form-control" name="email" id="email" placeholder="Email ID">
                </div>
                <div class="form-group mb-1 me-3 ms-3">
                    <input type="text" class="form-control" name="pin code" id="email" placeholder="Pin Code" >
                </div>
                <div class="form-group mb-1 me-3 ms-3 checkbox-1">
                    <input type="checkbox"  name="accept" >
                    <label for="accept"> I have read and accepted the T&C</label>
                </div>
                <button class="btn mt-2 get_btn" name="Submit">Submit</button>
                <br>
                <br>
            </form>
        </div>
    </div>

    <!--slider-->
    
       <!--slider-->
    <section class="home-section">
        <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
            
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="assets/img/Banner/1.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption home-section-carousel">
                        <div class="heading-text text-start">
                            <h1>Welcome to Empower Educare <br>
                                <h3>
                                    <h3 class="typewrite" data-period="2000" data-type='[ "AND STUDY WITH EXPERTS" ]'>
                                        <span class="wrap"></span>
                                    </h3>
                                </h3>
                            </h1>
                            <p>
                            Empower Educare,a unit of  IFAP Institute.
                            A distinguished hub of educational excellence and innovation. 
                            From over 20 years, we have championed the cause of holistic education,
                             instilling in our students a passion for learning and a commitment to lifelong growth.
                            </p>
                            <p>
                            Our curriculum is designed to be challenging and engaging, 
                            and our teachers are passionate about helping their students learn and grow.
                             We believe in creating a supportive and inclusive learning environment where all 
                             students feel valued and respected.

                            </p>
                            

                            <div class="home-btn butn">
                                <a href="registration.html" class="btn btn-primary first-btn">Register Now</a>
                                <a href="#!" class="btn btn-primary second-btn">View All Courses</a>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="carousel-item">
                    <img src="assets/img/Banner/4.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption  home-section-carousel">
                            <div class="heading-text text-start">
                                 <h1> WE ARE COMMITTED TO EXCELLENCE IN TEACHING</h1>
                                <h3>
                                    <h3 class="typewrite" data-period="2000" data-type='[ "AND STUDY WITH EXPERTS" ]'>
                                        <span class="wrap"></span>
                                    </h3>
                                </h3>
                                 
                                <!-- <P>Behind Every SUCCESSFUL BUSINESS There is a SMART ACCOUNTANT</P>  -->

                                 <p>
                                 Our accomplished team of educators is dedicated to nurturing the unique potential of each student,
                                  fostering not just academic prowess but also character, creativity, and critical thinking.
                                </p>
                               
        
                                <div class="home-btn butn home-btn1">
                                    <a href="registration.html" class="btn btn-primary first-btn">Register Now</a>
                                    <a href="#!" class="btn btn-primary second-btn">View All Courses</a>
                                </div>
                            </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="assets/img/Banner/5.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption  home-section-carousel">
                            <div class="heading-text text-start">
                                <!-- <h1>Love to Accounting ?</h1> -->
                                <h3>
                                    <h3 class="typewrite" data-period="2000" data-type='[ "EMPOWER EDUCARE,A UNIT OF IFAP INSTITUTE ." ]'>
                                        <span class="wrap"></span>
                                    </h3>
                                </h3>
                                <p> We believe in a personalized approach that caters to diverse learning styles, 
                                    from early childhood education to college preparation.</p>
                                 <div class="home-btn butn home-btn1">
                                    <a href="registration.html" class="btn btn-primary first-btn">Register Now</a>
                                    <a href="#!" class="btn btn-primary second-btn">View All Courses</a>
                                </div>
                            </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="assets/img/Banner/6.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption  home-section-carousel">
                            <div class="heading-text text-start">
                                <!-- <h1>Learn Tally Prime From The Experts</h1> -->
                                <h3>
                                    <h3 class="typewrite" data-period="2000" data-type='[ "AND STUDY WITH TALLY EXPERTS" ]'>
                                        <span class="wrap"></span>
                                    </h3>
                                </h3>
                                <p>
                                As a beacon of educational leadership, we empower our students with the skills, 
                                knowledge, and values needed to excel in a dynamic world. 
                                </p>
        
                               
        
                                <div class="home-btn butn home-btn1">
                                    <a href="registration.html" class="btn btn-primary first-btn">Register Now</a>
                                    <a href="#!" class="btn btn-primary second-btn">View All Courses</a>
                                </div>
                            </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="assets/img/Banner/7.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption  home-section-carousel">
                            <div class="heading-text text-start">
                                <h3>WHAT IS BEST FOR YOUR INSTITUTE</h3>

                                <h3>
                                    <h3 class="typewrite" data-period="2000" data-type='[ "AND STUDY WITH EXPERTS" ]'>
                                        <span class="wrap"></span>
                                    </h3>
                                </h3>
                                <p>
                                Empower Educare understands students- helps then show their advantages most 
                                effective by making their future be unique to attract potential student, keep long-term 
                                students who will become greatest marketers for business.
                            </p>
                                
                               

                                <!-- <p> You Are Not Just an Accountant ,You Are  "The Soldier  of Bussiness" </p>
                                <P> To Become a Best Accountant  Join  Our Institute</P> -->

        
                                <div class="home-btn butn home-btn1">
                                    <a href="registration.html" class="btn btn-primary first-btn">Register Now</a>
                                    <a href="#!" class="btn btn-primary second-btn">View All Courses</a>
                                </div>
                            </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="assets/img/Banner/8.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption  home-section-carousel">
                            <div class="heading-text text-start">
                                <h1>EMPOWER EDUCARE</h1>
                                <h3>
                                    <h3 class="typewrite" data-period="2000" data-type='[ "AND STUDY WITH EXPERTS" ]'>
                                        <span class="wrap"></span>
                                    </h3>
                                </h3>
                                <p>
                                At Empower Educare, we go beyond traditional education, embracing innovation
                                 and cutting-edge methodologies to prepare our students for a future of limitless possibilities.
                                </p>
                               
                               
                                
                                <P> You Can Turn Today into Tomorrow's Success Story.</P>
        
                                <div class="home-btn butn home-btn1">
                                    <a href="registration.html" class="btn btn-primary first-btn">Register Now</a>
                                    <a href="#!" class="btn btn-primary second-btn">View All Courses</a>
                                </div>
                            </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="assets/img/Banner/9.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption  home-section-carousel">
                            <div class="heading-text text-start">
                                <!-- <h1>Financial Thoughts</h1> -->
                                <h3>
                                    <h3 class="typewrite" data-period="2000" data-type='[ "AND STUDY WITH EXPERTS" ]'>
                                        <span class="wrap"></span>
                                    </h3>
                                </h3>
                                <p>
                                   AN INSTITUTE WHERE  EVERY LEARNER IS A LEADER
                                </p>
                                <P> The First Major Step Toward Success.. is Taking Admission into our institute </p>
        
                                <div class="home-btn butn home-btn1">
                                    <a href="registration.html" class="btn btn-primary first-btn">Register Now</a>
                                    <a href="#!" class="btn btn-primary second-btn">View All Courses</a>
                                </div>
                            </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="assets/img/Banner/10.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption  home-section-carousel">
                            <div class="heading-text text-start">
                                <h1>Train Your Brain With Us</h1>
                                <h3>
                                    <h3 class="typewrite" data-period="2000" data-type='[ "AND STUDY WITH EXPERTS" ]'>
                                        <span class="wrap"></span>
                                    </h3>
                                </h3>
                                <p>
                                    <!-- WALKIN WITH YOUR DREAM WALK OUT WITH YOUR FUTURE.. -->
                                    Join us on this remarkable journey, where education is not just a destination,
                                     but an ongoing adventure. Together, we'll shape a brighter tomorrow.
                                </p>
                                <br>
                                <p> EDUCATION IS NOT THE LEARNING OF FACTS,but THE TRAINING OF THE MIND TO THINK </P>
        
                                <div class="home-btn butn home-btn1">
                                    <a href="registration.html" class="btn btn-primary first-btn">Register Now</a>
                                    <a href="#!" class="btn btn-primary second-btn">View All Courses</a>
                                </div>
                            </div>
                    </div>
                </div>

                <div class="carousel-item">
                    <img src="assets/img/Banner/banner.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption  home-section-carousel">
                        <div class="heading-text text-start">
                            <h1>India's No.1 Financial Accounting Institute </h1>

                            <h1>
                                <h1 href="" class="typewrite" data-period="2000" data-type='[ "LEARNING AT EMPOWER EDUCARE" ]'>
                                    <span class="wrap"></span>
                                </h1>
                            </h1>
                            <p>Our alumni, now successful professionals, stand as a testament to
                                     the transformative power of our programs.</P>
                            

                            <div class="home-btn butn home-btn1">
                                <a href="registration.html" class="btn btn-primary first-btn">Register Now</a>
                                <a href="#!" class="btn btn-primary second-btn">View All Courses</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
            </button>
        </div>
    </section>


    <section class="offers">
        <div class="container">
            <div class="row  border-line">
                <div class="col-lg-3 col-md-6 col-12 mb-2">
                    <div class="row ">
                        <div class="col-3">
                            <img src="assets/img/Logo/Online-Courses.png" alt="online-course-img" class="img-fluid">
                        </div>
                        <div class="col-9">
                            <h6>72 Online Courses</h6>
                            <p>Enjoy a variety of fresh topics</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-12 mb-2">
                    <div class="row">
                        <div class="col-3">
                            <img src="assets/img/Logo/epert.png" alt="expert-img" class="img-fluid">
                        </div>
                        <div class="col-9">
                            <h6>Expert Instruction</h6>
                            <p>Enjoy a variety of fresh topics</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-12 mb-2">
                    <div class="row">
                        <div class="col-3">
                            <img src="assets/img/Logo/Lifetime-access.png" alt="lifetime-access-img" class="img-fluid">
                        </div>
                        <div class="col-9">
                            <h6>Lifetime access</h6>
                            <p>Learn on your schedule</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-12 mb-2">
                    <div class="row">
                        <div class="col-3">
                            <img src="assets/img/Logo/online-exam.png" alt="online-exam-img" class="img-fluid">
                        </div>
                        <div class="col-9">
                            <h6>Online Exam and Certication</h6>
                            <p>Access any time any where </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Program section -->
    <section class="programs">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 col-md-12 col-12 mb-2" id="firstCol">
                    <div class="heading">
                        <h2>Creating For Quality Education </h2>
                        <p>Follow Us For Join Our Events</p>
                    </div>
                    <div class="line"></div>

                    <div class="program-dtl">
                        <div class="row">
                            <div class="col-lg-2 col-md-2 col-3">
                                <div class="box">
                                    <img src="assets/img/Logo/Certificate.png" alt="certificate-program-logo"
                                        class="img-fluid">
                                </div>
                            </div>
                            <div class="col-lg-10 col-md-12 col-12 mb-2 text-in ps-4">
                                <h4>Certificate Programs</h4>
                                <p>Certification courses are basically worked for those students who are not able to
                                    avail degree programs. These certificates courses last for three to six years of
                                    duration whereas some certificate courses are also last for six to one years of
                                    duration that varies from one courses to another.</p>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-lg-2 col-md-2 col-3">
                                <div class="box">
                                    <img src="assets/img/Logo/Diploma.png" alt="diploma-logo" class="img-fluid">
                                </div>
                            </div>
                            <div class="col-lg-10 col-md-12 col-12 mb-2 ps-4">
                                <h4>Diploma Programs</h4>
                                <p>A Diploma is a short-term course, lasting 6 or 12 months, and is not necessarily
                                    given by a university. It could be also conducted by an institute as well. Only a
                                    university can confer a degree. To pursue higher education, a degree from only
                                    a UGC approved university is accepted.</p>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-lg-2 col-md-2 col-3">
                                <div class="box">
                                    <img src="assets/img/Logo/Financial.png" alt="financial-logo" class="img-fluid">
                                </div>
                            </div>
                            <div class="col-lg-10 col-md-12 col-12 mb-2 ps-4">
                                <h4>Financial Accounting Programs</h4>
                                <p>Financial Accounting Program introduce students to the practical application
                                    of financial accounting principles. Students use real-world examples to prepare and
                                    evalute financial statements. Topics include accounts receivable, financial ratios,
                                    debt, and inventory</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 col-md-12 col-12 mb-2">
                    <div class="image">
                        <img src="assets/img/Image/6.png" alt="program-img" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="banner">
        <div class="container">
            <div class="banner-content">
                <div class="row">
                    <div class="col-lg-2 col-md-3 lines pt-2">
                        <button type="button" class="btn btn-danger">Free Trials</button>
                        <p class="bold pt-1 ps-2"><b>03 Days</b></p>
                    </div>
                    <div class="col-lg-8 col-md-6 lines">
                        <p class="text">We're excited to offer you a 03-days free trial before you actually start your
                            journey with us! Sign Up Now!</p>
                    </div>
                    <div class="col-lg-2 col-md-3 pt-3 pb-2 lines2">
                        <button type="button" class="btn btn-primary px-3">Register</button>
                        <!-- <p class="register"><i class="fa-solid fa-hand-pointer"></i> Register</p> -->
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Verfied Certificate Section start -->
    <section class="certificates">
        <div class="container">
            <div class="img text-center">
                <img src="assets/img/Logo/verified-certificate.png" alt="verified-logo" class="img-fluid">
            </div>
            <div class="heading text-center">
                <h2>Verified Certificates</h2>
            </div>
            <p class="head-txt text-center">Verified certification of diploma courses typically refers to a formal
                recognition of
                completion or
                achievement
                in a specific field of study or training program. It verifies that an individual has successfully
                completed a
                diploma course and has met the necessary requirements.
            </p>

            <div class="row">
                <div class="col-lg-4 col-md-4 col-12 mb-2">
                    <div class="butns">
                        <button class="btn btn-primary" onclick="show('first-certificate')">Accredited Institutions</button>
                        <button class="btn btn-primary" onclick="show('second-certificate')">Course Completion</button>
                        <button class="btn btn-primary" onclick="show('third-certificate')">Verification Process</button>
                        <button class="btn btn-primary" onclick="show('fourth-certificate')">Certification Issuance</button>
                        <button class="btn btn-primary" onclick="show('fifth-certificate')">Digital Certificates</button>
                    </div>
                </div>
                <div class="col-lg-8 col-md-8 col-12 mb-2">
                    <div class="verify-box" id="first-certificate" style="display: block;">
                        <h5><i class="fa-solid fa-circle-check"></i> <span>Accredited Institutions</span></h5>
                        <p class="txt">
                            It is essential to pursue diploma courses from reputable and accredited educational
                            institutions or organizations. Accreditation ensures that the program meets certain
                            standards of quality and credibility.
                        </p>
                    </div>
                    <div class="verify-box" id="second-certificate"  style="display: none;">
                        <h5><i class="fa-solid fa-circle-check"></i> <span>Course Completion
                            </span></h5>
                        <p class="txt">
                            To obtain a verified certification, you will typically need to complete all the required
                            coursework, assignments, and assessments associated with the diploma course.
                            This may include attending classes, submitting assignments, participating in
                            practical exercises, and passing exams.
                        </p>
                    </div>
                    <div class="verify-box" id="third-certificate"   style="display: none;">
                        <h5><i class="fa-solid fa-circle-check"></i> <span>Verification Process</span></h5>
                        <p class="txt">
                            After completing the necessary course requirements, you may need to go through
                            a verification process to confirm your eligibility for certification. This process can
                            involve submitting relevant documents, such as transcripts, to prove your
                            completion of the course.
                        </p>
                    </div>
                    <div class="verify-box" id="fourth-certificate"  style="display: none;">
                        <h5><i class="fa-solid fa-circle-check"></i> <span>Certification Issuance</span></h5>
                        <p class="txt">
                            Once the verification process is complete, the institution or organization offering
                            the diploma course will issue a verified certification. This certification typically
                            includes details such as the course name, your name, the date of completion,
                            and any relevant accreditation or authentication marks.
                        </p>
                    </div>
                    <div class="verify-box" id="fifth-certificate"  style="display: none;">
                        <h5><i class="fa-solid fa-circle-check"></i> <span>Digital Certificates</span></h5>
                        <p class="txt">
                            In recent years, many institutions have started providing digital certificates that 
                            can be shared electronically. These digital certificates often come with unique 
                            identification codes or links that allow potential employers or educational 
                            institutions to verify the authenticity of the certification.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
<!-- course section -->
    <!-- <section class="courses">
        <div class="container">
            <div class="heading text-center">
                <img src="assets/img/three-stars.png" alt="star-img" width="50" class="img-fluid ">
                <h2>Popular Courses</h2>
                <p>All The Top Courses Offered</p>
            </div>
            <div class="row courseRow">
                <div class="owl-slider my_dl">
                    <div id="carousel2" class="owl-carousel">
                        <div class="item">
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 mb-2">
                                <div class="card">
                                    <div class="row">
                                        <div class="col-lg-2 col-2 bg-clr">
                                            <div class="card-1">
                                                <div class="img">
                                                    <img src="assets/img/Logo/events-tally.jpeg" alt="company-logo" class="img-fluid">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-10 col-10">
                                            <div class="right-side">
                                                <h5>Tally Champion</h5>
                                                <p class="tag pt1">Professional Courses</p>
                                                <div class="row dtl">
                                                    <div class="col-lg-6 col-md-6 col-6">
                                                        <p>65 Lectures</p>
                                                    </div>
                                                    <div class="col-lg-6 col-md-6 col-6">
                                                        <p> 6 Months </p>
                                                    </div>
                                                </div>
                                                <div class="row dtl">
                                                    <div class="col-lg-6 col-md-6 col-6">
                                                        <p><strong> Rs. 9000.00</strong></p>
                                                    </div>
                                                    <div class="col-lg-6 col-md-6 col-6">
                                                        <p class="tag">Register Now</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 mb-2">
                                <div class="card">
                                    <div class="row">
                                        <div class="col-2 bg-clr">
                                            <div class="card-1">
                                                <div class="img">
                                                    <img src="assets/img/Logo/DCIA.png" alt="company-logo" class="img-fluid">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-10">
                                            <div class="right-side">
                
                                                <h5>DCIA</h5>
                
                                                <p class="tag pt2">Beginner Courses</p>
                
                                                <div class="row dtl">
                                                    <div class="col-6">
                                                        <p>80 Lectures</p>
                                                    </div>
                                                    <div class="col-6">
                                                        <p> 12 Months </p>
                                                    </div>
                                                </div>
                                                <div class="row dtl">
                                                    <div class="col-6">
                                                        <p><strong> Rs. 14000.00</strong></p>
                                                    </div>
                                                    <div class="col-6">
                                                        <p class="tag">Register Now</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 mb-2">
                                <div class="card">
                                    <div class="row">
                                        <div class="col-2 bg-clr">
                                            <div class="card-1">
                                                <div class="img">
                                                    <img src="assets/img/Logo/Office.png" alt="company-logo" class="img-fluid">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-10">
                                            <div class="right-side">
                
                                                <h5>Office Specialist 2019</h5>
                
                                                <p class="tag pt3">Beginner Courses</p>
                
                                                <div class="row dtl">
                                                    <div class="col-6">
                                                        <p>45 Lectures</p>
                                                    </div>
                                                    <div class="col-6">
                                                        <p> 3 Months </p>
                                                    </div>
                                                </div>
                                                <div class="row dtl">
                                                    <div class="col-6">
                                                        <p><strong> Rs. 4000.00</strong></p>
                                                    </div>
                                                    <div class="col-6">
                                                        <p class="tag"> Register Now</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 mb-2">
                                <div class="card">
                                    <div class="row">
                                        <div class="col-lg-2 col-2 bg-clr">
                                            <div class="card-1">
                                                <div class="img">
                                                    <img src="assets/img/Logo/events-excel.jpeg" alt="company-logo" class="img-fluid">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-10 col-10">
                                            <div class="right-side">
                                                <h5>Xcel Champion</h5>
                                                <p class="tag pt4">Advance Courses</p>
                                                <div class="row dtl">
                                                    <div class="col-lg-6 col-md-6 col-6">
                                                        <p>45 Lectures</p>
                                                    </div>
                                                    <div class="col-lg-6 col-md-6 col-6">
                                                        <p> 4 Months </p>
                                                    </div>
                                                </div>
                                                <div class="row dtl">
                                                    <div class="col-lg-6 col-md-6 col-6">
                                                        <p><strong> Rs. 4500.00</strong></p>
                                                    </div>
                                                    <div class="col-lg-6 col-md-6 col-6">
                                                        <p class="tag">Register Now</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->

    <section class="certificate-banner">
        <!-- <div class="contain"> -->
        <div class="row">
            <div class="col-lg-5 col-md-12 col-12">
                <div class="img">
                    <img src="assets/img/Image/14.jpg" alt="image" class="img-fluid">
                </div>
            </div>
            <div class="col-lg-7 col-md-12 col-12 mb-2">
                <div class="content text-center">
                    <div class="img text-center">
                        <img src="assets/img/Logo/02.png" alt="badge" width="80" class="img-fluid">
                    </div>
                    <h3>Get Your Quality Skills Certificate <br> Through Online Exam</h3>
                    <p>
                        Students friendly pricing for the certificate programs helps individuals to get their skill
                        certificate easier than ever!
                    </p>

                    <div class="butn">
                        <a href="#!" class="btn btn-primary">View All Courses</a>
                        <a href="#!" class="btn btn-primary">View All Certificates</a>
                    </div>
                </div>
            </div>
            </div>
        <!-- </div> -->
    </section>

    <!-- Events Section -->
     <!-- <section class="event">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="heading text-center">
                        <img src="assets/img/three-stars.png" alt="star-img" width="50" class="img-fluid ">
                        <h2>Upcoming Events</h2>
                        <p>Unleash Your Potential: Join us for an Extraordinary Journey
                        </p>
                       
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-12 col-sm-6 mb-2">
                    <div class="card e-card">
                        <div class="card-header">
                            <img src="assets/img/Image/37.jpg" class="img-fluid">
                        </div>
                        <div class="card-body">
                            <div class="box-content">
                                <p class="date"><i class="fa fa-calendar"></i> <span>12 Nov 2023</span></p>
                                <h4 class="title">
                                    National Round Tally
                                    Championship 2023
                                </h4>
                                <p class="time"><i class="fa fa-clock-o" aria-hidden="true"></i><span>10:00 AM TO 05:30 PM</span></p>
                                <p class="venue"><i class="fa fa-map-marker" aria-hidden="true"></i><span>Swami Keshwanand
                                        Shikshan Sansthan
                                        Sector 22 Noida (U.P.)</span></p>
    
                                <a href="#!" class="btn btn-primary">Join Event</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-12 col-sm-6 crad-info mb-2">
                    <div class="card e-card">
                        <div class="card-header">
                            <img src="assets/img/Image/56.jpg" class="img-fluid">
                        </div>
                        <div class="card-body">
                            <div class="box-content">
                                <p class="date"><i class="fa fa-calendar"></i> <span>20 Dec 2023</span></p>
                                <h4 class="title">International Round Tally
                                    Championship 2023</h4>
                                <p class="time"><i class="fa fa-clock-o" aria-hidden="true"></i><span>10:00 AM TO 04:00 PM</span></p>
                                <p class="venue"><i class="fa fa-map-marker" aria-hidden="true"></i><span>SD Inter College, Sec 62,
                                        NOIDA, U.P.
                                        Sector 22 Noida (U.P.)</span></p>
    
                                <a href="#!" class="btn btn-primary">Join Event</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-12 col-sm-6 crad-info mb-2">
                    <div class="card e-card">
                        <div class="card-header">
                            <img src="assets/img/Image/61.jpg" class="img-fluid">
                        </div>
                        <div class="card-body">
                            <div class="box-content">
                                <p class="date"><i class="fa fa-calendar"></i> <span>25 Dec 2023
                                    </span></p>
                                <h4 class="title">International IT
                                    Championship 2023
                                </h4>
                                <p class="time"><i class="fa fa-clock-o" aria-hidden="true"></i><span>11:00 AM TO 04:00 PM</span></p>
                                <p class="venue"><i class="fa fa-map-marker" aria-hidden="true"></i><span>SD Inter College, Sec 62,
                                        NOIDA, U.P.
                                        Sector 22 Noida (U.P.)
                                    </span></p>
    
                                <a href="#!" class="btn btn-primary">Join Event</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>  -->

    <!-- online-learning section -->
    <section class="online-learning">
        <div class="row">
            <div class="col-lg-5 col-md-12 col-12">
                <div class="image">
                    <img src="assets/img/Image/15.jpg" alt="" class="img-fluid">
                </div>
            </div>
            <div class="col-lg-7 col-md-12 col-12">
                <div class="right-side">
                    <p class="sub-heading">Online Learning</p>
                    <h4>Develop Your Skills, Learn <br>
                        Something New, and Grow Your <br>
                        Skills From Any where in the World!</h4>
                    <p>We understand better that online-based learning can make a significant change to reach students
                        from all over the world! Giving options to learn better always can offer the best outcomes!</p>
                    <div class="lists">
                        <div class="row">
                            <div class="col-6">
                                <ul>
                                    <li class="list"><i class="fa-solid fa-circle-check"></i> <span>Expert Trainers
                                        </span></li>
                                    <li class="list"><i class="fa-solid fa-circle-check"></i> <span>Remote Learning
                                        </span></li>
                                </ul>
                            </div>
                            <div class="col-6">
                                <ul>
                                    <li class="list"><i class="fa-solid fa-circle-check"></i> <span>Lifetime Access
                                        </span></li>
                                    <li class="list"><i class="fa-solid fa-circle-check"></i> <span>Self
                                            Development</span></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="butn text-center">
                        <a href="#!" class="btn btn-primary">View All Courses</a>
                        <a href="registration.html" class="btn btn-primary">Register Now</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonial section -->
    <!-- <section class="testimonial">
        <div class="container">
            <div class="row">
                <div class="heading text-center">
                    <img src="assets/img/three-stars.png" alt="star-img" width="50" class="img-fluid ">
                    <h2> What Students Says About Us</h2>
                </div>

                <div class="col-lg-6 col-md-12 col-12 mb-2">
                    <div class="test-box">
                        <div class="row">
                            <div class="col-2 col-md-12">
                                <div class="img">
                                    <img src="assets/img/Image/Tanu Vishwakarma pic.jpg" alt="" class="img-fluid">
                                </div>
                            </div>
                            <div class="col-10 col-md-12">
                                <div class="test-desc">
                                    <p class="title">Tanu Vishwakarma </p>
                                    <p> IFAP</p>
                                    <p>Nichibagh, Near Post office, </p>
                                       <p> Varanasi- 221001</p>
                                    <p> Batch 2022-2023</p>

                                </div>
                            </div>
                        </div>
                        <p class="comment">
                            “ Ifap institute is well organized institution for academic purpose, n 
                                it is the best place for those who wanted to learn many skills at one place, 
                                here teachers are not just give us knowledge but they given life lessons too, 
                                and i feel very fortunate i get took admission here....thanks to "Ashish sir"& "Dheeraj Sir" too....🙏
                          .”
                        </p>
                    </div>
                </div>
               

                 
                <br>
                <div class="col-lg-6 col-md-12 col-12 mb-2">
                    <div class="test-box">
                        <div class="row">
                            <div class="col-2 col-md-12">
                                <div class="img">
                                    <img src="assets/img/Image/AMISHA PIC 22.jpg" alt="" class="img-fluid">
                                </div>
                            </div>
                            <div class="col-10 col-md-12">
                                <div class="test-desc">
                                    <p class="title">AMISHA  </p>
                                    <p> IFAP</p>
                                    <p>Nichibagh, Near Post office, </p>
                                       <p> Varanasi- 221001</p>
                                    <p> Batch 2020-2022</p>

                                </div>
                            </div>
                        </div>
                        <p class="comment">
                            “ IFAP INSTITUTE is a very good institute. We have got to learn a lot here. every day we got to learn something new or 
                            the other since we come here. IFAP INSTITUTE is one of the best institutes for Tally.”
                        </p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-12 mb-2">
                    <div class="test-box">
                        <div class="row">
                            <div class="col-2 col-md-12">
                                <div class="img">
                                    <img src="assets/img/Image/Shivani Chaurasia.jpeg" alt="" class="img-fluid">
                                </div>
                            </div>
                            <div class="col-10 col-md-12">
                                <div class="test-desc">
                                    <p class="title">Shivani Chaurasia</p>
                                    <p> IFAP</p>
                                    <p>Nichibagh, Near Post office, </p>
                                       <p> Varanasi- 221001</p>
                                    <p> Batch 2021-2022</p>

                                </div>
                            </div>
                        </div>
                        <p class="comment">
                            “This is the best place to learn tally and other courses as well. I am a non-commerce student but still i am able to understand things very well, thanks to the Ashish sir and Dheeraj sir. 
                            They are so calm and polite in teaching. I am so grateful that I joined 😄❤️”
                        </p>
                    </div>
                </div>

                <div class="col-lg-6 col-md-12 col-12 mb-2">
                    <div class="test-box">
                        <div class="row">
                            <div class="col-2 col-md-12">
                                <div class="img">
                                    <img src="assets/img/Image/Divyanshi.png" alt="" class="img-fluid">

                                </div>
                            </div>
                            <div class="col-10 col-md-12">
                                <div class="test-desc">
                                    <p class="title">Divyanshi</p>
                                    <p> IFAP</p>
                                    <p>Nichibagh, Near Post office, </p>
                                       <p> Varanasi- 221001</p>
                                    <p> Batch 2022-2023</p>

                                </div>
                            </div>
                        </div>
                        <p class="comment">
                            “I like this institute because, they provide a lot of knowledge or opportunity.
                             best training institute for IT & software training for all technology. trainer are very experience and qualified .
                             👍 Thanks team ifap institute....and Special Thanks to Honorable Director Ashish Sir”
                        </p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-12 mb-2">
                    <div class="test-box">
                        <div class="row">
                            <div class="col-2 col-md-12">
                                <div class="img">
                                    <img src="assets/img/Image/achal singh pic.jpg" alt="" class="img-fluid">
                                </div>
                            </div>
                            <div class="col-10 col-md-12">
                                <div class="test-desc">
                                    <p class="title">Anchal Singh</p>
                                    <p> IFAP</p>
                                    <p>Nichibagh, Near Post office, </p>
                                       <p> Varanasi- 221001</p>
                                    <p> Batch 2019-2020</p>

                                </div>
                            </div>
                        </div>
                        <p class="comment">
                            “It was good experience with trainer and teaching skill good and interact and answering every questions asked by student. 
                            Good knowledge and updated with his reliable courses. And Ashish sir are very friendly 😊😊🤗🤗”
                        </p>
                    </div>
                </div>

                <div class="col-lg-6 col-md-12 col-12 mb-2">
                    <div class="test-box">
                        <div class="row">
                            <div class="col-2 col-md-12">
                                <div class="img">
                                    <img src="assets/img/Image/Zainab Parveen - Copy.jpeg" alt="" class="img-fluid">
                                </div>
                            </div>
                            <div class="col-10 col-md-12">
                                <div class="test-desc">
                                    <p class="title">Zainab Parveen </p>
                                    <p> IFAP</p>
                                    <p>Nichibagh, Near Post office, </p>
                                       <p> Varanasi- 221001</p>
                                    <p> Batch 2018-2019</p>

                                </div>
                            </div>
                        </div>
                        <p class="comment">
                            “ This institution is one of the best in Varanasi. The teacher and staff members are very helpful.
                            Teachers are very experienced and clear all the doubts. Complete place for education in computer skills.😇
                              ”
                        </p>
                    </div>
                </div>


                <div class="col-lg-6 col-md-12 col-12 mb-2">
                    <div class="test-box">
                        <div class="row">
                            <div class="col-2 col-md-12">
                                <div class="img">
                                    <img src="assets/img/Image/UTKARSH DAVE PIC.jpg" alt="" class="img-fluid">
                                </div>
                            </div>
                            <div class="col-10 col-md-12">
                                <div class="test-desc">
                                    <p class="title">Utkarsh Dev</p>
                                    <p> IFAP</p>
                                    <p>Nichibagh, Near Post office, </p>
                                       <p> Varanasi- 221001</p>
                                    <p> Batch 2020-2022</p>

                                </div>
                            </div>
                        </div>
                        <p class="comment">
                            “Ifap institute बहुत अच्छा institute है हमे यहा बहुत कुछ सीखने को मिला । जब से यहां आए तब से कुछ ना 
                            कुछ हर दिन सीखने को मिला । यहां के सभी अध्यापक अच्छे है । और यहां के सभी अध्यापक सभी छात्रों को मन से पढ़ाते है।
                             और यहां के सभी अध्यापक सभी छात्रों को एक समान मानते है और किसी भी छात्र छात्राओं से किसी प्रकार का भेद भाव नही करते है 
                             सभी को एक समान पढ़ाते है (यहां की अच्छी खूबी है की अगर कोई छात्र/छात्राएं 6 से 7 दिन तक इंस्टीट्यूट नही आते है तो उन्हें फोन कर
                              के पूछे जाते है आप institute क्यों नहीं आ रहे है ) ये यहां की अच्छी खूबी है ।”
                        </p>
                    </div>
                </div>
                <br>

                <div class="col-lg-6 col-md-12 col-12 mb-2">
                    <div class="test-box">
                        <div class="row">
                            <div class="col-2 col-md-12">
                                <div class="img">
                                    <img src="assets/img/Image/veera jain pic 2.jpg" alt="" class="img-fluid">
                                </div>
                            </div>
                            <div class="col-10 col-md-12">
                                <div class="test-desc">
                                    <p class="title">Veera Jain </p>
                                     <p> IFAP</p>
                                    <p>Nichibagh, Near Post office, </p>
                                       <p> Varanasi- 221001</p>
                                    <p> Batch 2020-2021</p>

                                </div>
                            </div>
                        </div>
                        <p class="comment">
                            “Tally Academy is the best education institute in Varanasi for computer courses,
                             we got best education and felt better future planning while doing TALLY course from here.
                              And all the students who are studied here, they are leading their future. 'IFAP Institute' 
                              is always active in improving Study skill, followed by Rules & Regulations, Discipline Unity,
                               Trust of completing the course according to time and motivating for the Job. 
                               Special Thanks to the Honorable Director 'Ashish Sir', who struggling in making best educational institution of 'Tally Academy'.”
                        </p>
                    </div>
                </div>

                <div class="col-lg-6 col-md-12 col-12 mb-2">
                    <div class="test-box">
                        <div class="row">
                            <div class="col-2 col-md-12">
                                <div class="img">
                                    <img src="assets/img/Image/saurabh kumar pic. - Copy.jpg" alt="" class="img-fluid">
                                </div>
                            </div>
                            <div class="col-10 col-md-12">
                                <div class="test-desc">
                                    <p class="title">Saurabh Kumar</p>
                                    <p> IFAP</p>
                                    <p>Nichibagh, Near Post office, </p>
                                       <p> Varanasi- 221001</p>
                                        <p> Batch 2017-2018</p>

                                </div>
                            </div>
                        </div>
                        <p class="comment">
                            “Thanks to IFAP institute one of the best in Varanasi. The teacher and staff members are very helpful.
                            Teachers are very experienced and clear all the doubts. Complete place for education in computer skills.😇 ”
                        </p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-12 mb-2">
                    <div class="test-box">
                        <div class="row">
                            <div class="col-2 col-md-12">
                                <div class="img">
                                    <img src="assets/img/Image/khushi srivastava pic 1.jpg" alt="" class="img-fluid">
                                </div>
                            </div>
                            <div class="col-10 col-md-12">
                                <div class="test-desc">
                                    <p class="title">khushi srivastava </p>

                                     <p> IFAP</p>
                                    <p>Nichibagh, Near Post office, </p>
                                       <p> Varanasi- 221001</p>
                                    <p> Batch 2019-2020</p>

                                </div>
                            </div>
                        </div>
                        <p class="comment">
                            “Thank you for the valuable knowledge and skills I have gained during my time here
                            The DCIA course has been a transformative experience for me, and I appreciate
                            the institute for providing such a comprehensive program”
                        </p>
                    </div>
                </div>


            </div>
        </div>
    </section> -->
     <!-- Testimonial section -->
     <section class="testimonial">
        <div class="container">
            <div class="row">
                <div class="heading text-center">
                    <img src="assets/img/three-stars.png" alt="star-img" width="50" class="img-fluid ">
                    <h2>Our Happy Students</h2>
                </div>

                <div class="col-lg-6 col-md-12 col-12 mb-2">
                    <div class="test-box">
                        <div class="row">
                            <div class="col-2 col-md-12">
                                <div class="img">
                                    <img src="assets/img/Image/khushi srivastava pic 1.jpg" alt="" class="img-fluid">
                                </div>
                            </div>
                            <div class="col-10 col-md-12">
                                <div class="test-desc">
                                    <p class="title">khushi srivastava </p>

                                     <p> IFAP</p>
                                    <p>Nichibagh, Near Post office, </p>
                                       <p> Varanasi- 221001</p>
                                    <p> Batch 2019-2020</p>

                                </div>
                            </div>
                        </div>
                        <p class="comment">
                        “Thanks to IFAP institute one of the best in Varanasi. The teacher and staff members are very helpful.
                            Teachers are very experienced and clear all the doubts. Complete place for education in computer skills.😇 ”
                        
                        </p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-12 mb-2">
                    <div class="test-box">
                        <div class="row">
                            <div class="col-2 col-md-12">
                                <div class="img">
                                    <img src="assets/img/Image/Tanu Vishwakarma pic.jpg" alt="" class="img-fluid">
                                </div>
                            </div>
                            <div class="col-10 col-md-12">
                                <div class="test-desc">
                                    <p class="title">Tanu Vishwakarma </p>
                                    <p> IFAP</p>
                                    <p>Nichibagh, Near Post office, </p>
                                       <p> Varanasi- 221001</p>
                                    <p> Batch 2022-2023</p>

                                </div>
                            </div>
                        </div>
                        <p class="comment">
                            “ Ifap institute is well organized institution for academic purpose, n 
                                it is the best place for those who wanted to learn many skills at one place, 
                                here teachers are not just give us knowledge but they given life lessons too, 
                                and i feel very fortunate i get took admission here....thanks to "Ashish sir"& "Dheeraj Sir" too....🙏
                          .”
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
   

 <!--slider changes to testimonials-->
 
    

    

  <!-- Partners section -->
    <section class="partners">
        <div class="container">
            <div class="row">
                <div class="heading text-center">
                    <img src="assets/img/three-stars.png" alt="star-img" width="50" class="img-fluid ">
                    <h2>Our Affiliates</h2>
                </div>

                <div class="col-lg-3 col-sm-6 col-12 mb-3">
                    <div class="partnr-logo">
                        <img src="assets/img/Logo/pmkvy1.jpg" alt="" class="img-fluid">
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 col-12 mb-3">
                    <div class="partnr-logo">
                        <img src="assets/img/Logo/nsdc.png" alt="" class="img-fluid">
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 col-12 mb-3">
                    <div class="partnr-logo">
                        <img src="assets/img/Logo/msme1.jpg" alt="" class="img-fluid">
                    </div>
                </div>

                <div class="col-lg-3 col-sm-6 col-12 mb-3">
                    <div class="partnr-logo">
                        <img src="assets/img/Logo/skillindia.png" alt="" class="img-fluid">
                    </div>
                </div>

            </div>
            <!-- second partner section -->
            <div class="row">
                <!-- <div class="heading text-center">
                    <img src="assets/img/three-stars.png" alt="star-img" width="50" class="img-fluid ">
                    <h2>Our Affiliates</h2>
                </div> -->

                <div class="col-lg-3 col-sm-6 col-12 mb-3">
                    <div class="partnr-logo">
                        <img src="assets/img/Logo/iso.jpg" alt="" class="img-fluid">
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 col-12 mb-3">
                    <div class="partnr-logo">
                        <img src="assets/img/Logo/bosch1.png" alt="" class="img-fluid">
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 col-12 mb-3">
                    <div class="partnr-logo">
                        <img src="assets/img/Logo/edge.png" alt="" class="img-fluid">
                    </div>
                </div>

                <div class="col-lg-3 col-sm-6 col-12 mb-3">
                    <div class="partnr-logo">
                        <img src="assets/img/Logo/skillindia.png" alt="" class="img-fluid">
                    </div>
                </div>

            </div>
        </div>
    </section> 

    <!-- Footer start -->
    <footer class="footer" id="footer">
        <div class="container">
            <div class="footer-logo text-center">
                <img src="assets/img/Logo/emlogo.png" alt="footer-logo" class="img-fluid">
            </div>
            <div class="footer-content">
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-12 mb-3">
                        <div class="content">
                            <div class="heading">
                                <p>About Us</p>
                            </div>
                            <p class="txt">
                            Empower Educare, a unit of IFAP Institute Pvt. Ltd. 
                            we are ISO 9001: 2015 Certified (Regd. under Companies act 1956 Govt. of India),
                             we are working since 2003 and is now today we are one of the emerging educational
                              institution of Indiawhich provides training in Financial Accounting in India.
                            </p>
                            <!-- <div class="heading">
                                <p>Project</p>
                            </div> -->
                            <div class="project-list">
                                <ul>
                                    <!-- <li> IT Championship 2023</li> -->
                                    <li> Tally Championship 2023</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 col-12 mb-3">
                        <div class="content">
                            <div class="heading">
                                <p>Courses</p>
                            </div>
                            <ul>
                                <li> Office Specialist 2019</li>
                                <li>Xcel Champion</li>
                                <li>Tally Champion</li>
                                <li>Kreative Artist</li>
                                <li>DIAP</li>
                            </ul>
                            <div class="heading">
                                <p>Important Links</p>
                            </div>
                            <div class="lists">
                                <ul>
                                    <li>Courses</li>
                                    <li>Partners</li>
                                    <li>Verification</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 col-12 mb-3">
                        <div class="content">
                            <div class="heading">
                                <p>Head Office Address</p>
                            </div>
                            <p class="txt">
                                 Ck 59/ 25, IFAP Building,
                                    Behind Axis Bank,
                                    Nichibagh, Near Post office, Varanasi- 221001
                                    Call us: 8081726401
                                    Email: empowereducare09@gmail.com
                            </p>
                            <!-- <select name="city" id="select">
                                <option value="Mumbai">Varanasi</option>
                            </select>
                            <p class="txt">
                                Ck 59/ 25, IFAP Building,
                                    Behind Axis Bank,
                                    Nichibagh, Near Post office, Varanasi- 221001
                                    Call us: 8081726401
                                    Email: empowereducare09@gmail.com
                            </p> -->
                        </div>
                    </div>
                </div>
            </div>
            <div class="last-footer text-center">
                <p class="txt">All Rights Reserved © 2023 EMPOWER EDUCARE  INDIA Pvt. Ltd. </p>
            </div>
        </div>
    </footer>

    
    <!--jquery-->
    <script src="assets/js/jquery-3.6.4-jquery.min.js"></script>
    <!-- bootstrap JavaScript -->
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <!--owl carousel cdn-->
    <script src="assets/js/owl.carousel.min.js"></script>"
    <!--custom js-->
    <script src="assets/js/app.js"></script>
    
    <script>
        $(document).ready(function(){
            // this code will popup the modal directly
            //$('#exampleModal_1').modal('show');
        });
    </script>
</body>

</html>