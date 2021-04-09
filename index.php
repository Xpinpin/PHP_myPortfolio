<?php

include 'includes/header.php';

?>
<!-- ======= Hero Section ======= -->
<div id="hero" class="home">
    <div style="margin-left: 0; margin-right:0;">
        <div class="hero-content">
            <h1 style=" margin-left: 3%;">I'm <span class="typed"></span></h1>
            <p class="typed-items" data-typed-person="Nguyen Pham" style=" margin-left: 3%;">
                Web Developer, App Developer, Full-Stack Developer
            </p>

            <ul class="list-unstyled list-social" style=" margin-left: 3%;">
                <li>
                    <a href="https://www.facebook.com/pham.sonnguyen"><i class="ion-social-facebook"></i></a>
                </li>

                <li>
                    <a href="https://www.instagram.com/xpinpin_/"><i class="ion-social-instagram"></i></a>
                </li>


                <li>
                    <a href="https://www.linkedin.com/in/pham-son-nguyen-203838192/"><i class="ion-social-linkedin"></i></a>
                </li>
            </ul>
        </div>
    </div>
</div>
<!-- End Hero -->

<main class="container">

    <div class="background-white" id="aboutMe" style="margin-bottom: 10%; text-align: unset;">
        <h1>Profile</h1>
        <h2>Nguyen Son Pham</h2>
        <h3>Web And Mobile App Developer</h3>
        <br>
        <hr>
        <br>
        <div class="row">
            <div class="col-sm">
                <h4>About Me</h4>
                <p>
                    I am currently a student studying Web and Mobile Application Development in Moncton, New Brunswick, Canada.
                    I am also looking for internship opportunities for IT companies as I want myself to indulge in the working environment to earn experiences and develop my skills.
                    For leisures, I love playing the piano, playing basketball, reading books as well as playing games.
                </p>
            </div>
            <div class="col-sm">
                <img id="profilePic" src="/myPortfolio/images/1547906666817.JPG">
            </div>
            <div class="col-sm">
                <h4>Details</h4>
                <h5>Age:</h5>
                <p>19 years</p>
                <h5>Current Location:</h5>
                <p>Moncton, NB, Canada</p>
                <h5>Nationality:</h5>
                <p>Vietnam</p>
            </div>
        </div>

    </div>
    <div id="backgroundsPage">
        <h1 style="font-style:oblique;">Backgrounds</h1>
        <br>
        <hr>
        <br>

        <h2 style="text-align: left; text-decoration:underline;">Educations:</h2>
        <br>
        <div class="row">
            <div class="col-sm-3">
                <h4 style="text-align: left;">New Brunswick Community College</h4>
                <p>Sept 2019 - Current</p>
            </div>
            <div class="col-sm-9">
                <h4 style="text-align: left;">Associate Degree - Web and Mobile Application Development</h4>
                <p>&nbsp; My 2-year of learning from the basic to the advaced principles of Web Development as well
                    as Mobile Platform Designing to fit in the IT Industry. This course has helped me in recognizing the
                    importance of Information Techonoly as a whole and Web Development in specific.</p>
            </div>
        </div>
        <br><br>


        <h2 style="text-align: left; text-decoration:underline;">Careers:</h2>
        <br>
        <div class="row">
            <div class="col-sm-3">
                <h4 style="text-align: left;">Circle K Irving Oil</h4>
                <p>Jul 2020 - Current</p>
            </div>
            <div class="col-sm-9">
                <h4 style="text-align: left;">Part-Time Customer Services Representative</h4>
                <p>&nbsp; This is my first ever job in my life that I can make money for my own. This job is like
                    a leverage to help me in growing up into an adult. For the job, my primary thing to do is
                    dealing with customers' payments as well as their inquiries in the store. Apart from that,
                    I can hone my skills in teamwork along with communication alot when I work in this job.</p>
            </div>
        </div>
    </div>

    <div id="portfolio" class="paddsection">
        <div class="container">
            <div class="section-title text-center">
                <h1 style="font-style:oblique;">Projects</h1>
                <br>
                <hr>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-lg-12 d-flex justify-content-center">
                    <ul id="portfolio-flters">
                        <li data-filter="*" class="filter-active">All</li>
                        <li data-filter=".filter-app">App</li>
                        <li data-filter=".filter-card">Card</li>
                        <li data-filter=".filter-web">Web</li>
                    </ul>
                </div>
            </div>

            <div class="row portfolio-container">
                <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                    <img src="./images/Killer13_bg.jpg" class="img-fluid" alt="" />
                    <div class="portfolio-info">
                        <h4>Killer 13 Card Game</h4>
                        <p>Desktop Application</p>
                        <a href="./images/Killer13_bg.jpg" data-gall="portfolioGallery" class="venobox preview-link" title="App 1"><i class="bx bx-plus"></i></a>
                        <a href="./projectDetails.php?id=1" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                    <img src="./images/realestate_bg.png" class="img-fluid" alt="" width="800" height="600" />
                    <div class="portfolio-info">
                        <h4>Real Estate MVC Project</h4>
                        <p>Web Application</p>
                        <a href="./images/realestate_bg.png" data-gall="portfolioGallery" class="venobox preview-link" title="Web 3"><i class="bx bx-plus"></i></a>
                        <a href="./projectDetails.php?id=2" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                    <img src="./images/hotelreservation_bg.png" class="img-fluid" alt="" />
                    <div class="portfolio-info">
                        <h4>Hotel Reservation Project</h4>
                        <p>Desktop Application</p>
                        <a href="./images/hotelreservation_bg.png" data-gall="portfolioGallery" class="venobox preview-link" title="App 2"><i class="bx bx-plus"></i></a>
                        <a href="./projectDetails.php?id=3" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                    <img src="assets/img/portfolio/portfolio-4.jpg" class="img-fluid" alt="" />
                    <div class="portfolio-info">
                        <h4>Card 2</h4>
                        <p>Card</p>
                        <a href="assets/img/portfolio/portfolio-4.jpg" data-gall="portfolioGallery" class="venobox preview-link" title="Card 2"><i class="bx bx-plus"></i></a>
                        <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                    <img src="assets/img/portfolio/portfolio-5.jpg" class="img-fluid" alt="" />
                    <div class="portfolio-info">
                        <h4>Web 2</h4>
                        <p>Web</p>
                        <a href="assets/img/portfolio/portfolio-5.jpg" data-gall="portfolioGallery" class="venobox preview-link" title="Web 2"><i class="bx bx-plus"></i></a>
                        <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                    <img src="assets/img/portfolio/portfolio-6.jpg" class="img-fluid" alt="" />
                    <div class="portfolio-info">
                        <h4>App 3</h4>
                        <p>App</p>
                        <a href="assets/img/portfolio/portfolio-6.jpg" data-gall="portfolioGallery" class="venobox preview-link" title="App 3"><i class="bx bx-plus"></i></a>
                        <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <a href="./projects.php" style="text-align:left; font-size:large; font-weight:bolder">SEE ALL PROJECTS <i class="fas fa-sign-in-alt"></i>
    </a>

    <div id="journal" class="text-left paddsection">
        <div class="section-title text-center">
            <h1 style="font-style:oblique;">Blogs</h1>
            <br>
            <hr>
        </div>

        <div class="container">
            <div class="journal-block">
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="journal-info">
                            <a href="/myPortfolio/blogDetails.php?id=4"><img src="/myPortfolio/images/prettierFormatter.png" class="img-responsive" alt="img" /></a>

                            <div class="journal-txt">
                                <h4>
                                    <a href="blog-single.html">My Favourite Visual Studio Code 2019 Extension</a>
                                </h4>
                                <p class="separator">
                                    Visual studio code, is arguably the best code editor to use at the present time....
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="journal-info">
                            <a href="/myPortfolio/blogDetails.php?id=6"><img src="/myPortfolio/images/reactJS.jpg" class="img-responsive" alt="img" /></a>

                            <div class="journal-txt">
                                <h4>
                                    <a href="blog-single.html">Why I choose React.JS for Front-End Development?</a>
                                </h4>
                                <p class="separator">
                                    When it comes to front-end development, we have observed that Angular is the default choice among business owners who wants to take their business online. </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="journal-info">
                            <a href="/myPortfolio/blogDetails.php?id=7"><img src="/myPortfolio/images/quality_assurance_in_web_development_cover.jpg" class="img-responsive" alt="img" /></a>

                            <div class="journal-txt">
                                <h4>
                                    <a href="blog-single.html">The Importance of QA Testing To Web And App Development?</a>
                                </h4>
                                <p class="separator">
                                    Both MySQL and SQL Server, both are relational database management systems or RDBMS.
                                    MySQL is open source and is free to use whereas SQL Server is licensed product of Microsoft.

                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>



        </div>
        <a href="./blog.php" style="text-align:left; font-size:large; font-weight:bolder">SEE ALL BLOGS <i class="fas fa-sign-in-alt"></i>
        </a>
    </div>
    <hr>
</main>

<?php

include 'includes/footer.php'

?>