<?php
$pageTitle = "Project Detail";
include 'includes/subHeader.php';
include 'includes/db/dbConnection.php';
$projectId = $_GET['id'];
?>

<main>
    <div class="main-content paddsection">
        <div class="container">
            <h2>Hotel Reservation Project</h2>
            <p style="font-size:large"><Strong>Author:</Strong> Nguyen Pham |
                <strong>Date Posted:</strong> 24 Mar 2021

            </p>
            <br>
            <br>
            <img class="vs_project_img" src="/myPortfolio/images/hotelreservation_bg.png">


            <div>
                <p style="font-style:italic"><span id="bigLetter">T</span>his is my project specifying in N-Tier Architecture, which has
                    Model Layer, Repository Layer, Service Layer before getting to the Real Web Application Layer. <br>
                    Here is the link for to the project:
                    <a style="margin: 0 0;" href="https://github.com/Xpinpin/HotelReservationProject">
                        https://github.com/Xpinpin/HotelReservationProject
                    </a>
                </p>
            </div>

            <div style="margin-top: 10%;">
                <h3> 1. Introduction</h3>
                <p>
                    This project focuses in maintaining the records for the hotel's reservation . I completed this web
                    individually along with the help from my instructors. Along with that, I also used SQL Server
                    Management Studio to deal with the records in this web.
                </p>


                <h3> 2. Functionalities</h3>
                <p>
                    I have added abundance of functionalities for this application to maintain the records.
                <ul>
                    <li>
                        Creation of reservation.
                        <img class="vs_project_img" src="/myPortfolio/images/hotelreservation_1.png">

                    </li>
                    <li>
                        Showcasing the list of reservations from the database to the App.
                        <img class="vs_project_img" src="/myPortfolio/images/hotelreservation_2.png">


                    </li>
                    <li>
                        Highliting the details for the reservation.
                        <img class="vs_project_img" src="/myPortfolio/images/hotelreservation_3.png">

                    </li>
                    <li>
                        And more...
                    </li>

                </ul>
                </p>


                <h3>Final Touch</h3>

            </div>
            <a href="projects.php"> <i class="fas fa-arrow-circle-left"></i>
                Back to Project
            </a>

        </div>
</main>