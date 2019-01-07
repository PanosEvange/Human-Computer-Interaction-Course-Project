<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link href="./vendor/fontawesome-free-5.5.0-web/css/all.css" rel="stylesheet">
        <link rel="stylesheet" href="style.css">

        <!-- Bootstrap core CSS -->
        <link href="./vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

        <!-- Bootstrap core JavaScript -->
        <script src="./vendor/jquery/jquery.min.js"></script>
        <script src="./vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

        <link href="./vendor/select2-4.0.6-rc.1/dist/css/select2.css" rel="stylesheet">
        <script src="./vendor/select2-4.0.6-rc.1/dist/js/select2.js"></script>

        <script src="./vendor/bootstrap-datepicker-1.6.4-dist/js/bootstrap-datepicker.min.js"></script>
        <link href="./vendor/bootstrap-datepicker-1.6.4-dist/css/bootstrap-datepicker.standalone.css" rel="stylesheet">

        <link href="./vendor/jquery-ui-1.12.1.custom/jquery-ui.min.css" rel="stylesheet">
        <script src="./vendor/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>

        <script src="main.js"></script>
        <title> New Eudoxus </title>
    </head>
    <body>

        <?php include 'header.php';?>

        <?php include 'userOptions.php';?>

        <div class="below-nav-bar">
            <div class="secretary-app my-breadcrumb">
                <ul class="breadcrumb">
                  <li><a href="./index.php"><i class="fa fa-home" aria-hidden="true"></i></a></li>
                  <li><a href="./secretary_app.php">Εφαρμογή Γραμματείας</a></li>
                  <li>Επεξεργασία Συγγραμμάτων Για Μαθήματα</li>
                </ul>
            </div>

            <?php include 'isLoggedIn.php';?>

        </div>

        <div class="search-subject-to-edit">
            <div class="search-semister">
                <!-- <span class="search-subject-label-input">Εξάμηνο:</span> <input type="text" name="semister"> -->
                <span class="search-subject-label-input">Εξάμηνο:</span>
                <select id="search-subject-to-edit-select1">
                    <option value="" selected disabled hidden>Νο</option>
                    <option value="1">1ο</option>
                    <option value="2">2ο</option>
                    <option value="3">3ο</option>
                    <option value="4">4ο</option>
                    <option value="5">5ο</option>
                    <option value="6">6ο</option>
                    <option value="7">7ο</option>
                    <option value="8">8ο</option>
                </select>
            </div>
            <div class="search-subject">
                <!-- <span class="search-subject-label-input">Μάθημα:</span> <input type="text" name="subject"> -->
                <span class="search-subject-label-input">Μάθημα:</span>
                <select id="search-subject-to-edit-select2">
                    <option value="" selected disabled hidden>Επιλέξτε Μάθημα</option>
                    <option value="1">Διακριτά Μαθηματικά 1</option>
                    <option value="2">Διακριτά Μαθηματικά 2</option>
                    <option value="3">Φυσική</option>
                    <option value="4">Χημεία</option>
                </select>

            </div>
            <div class="search-button-subject">
                <a href="#" class="btn" id="search-subject-secretary">Αναζήτηση</a>
            </div>
        </div>

        <div class="append-results" id="to-append-results">
            <div class="placeholder">
            </div>
        </div>

        <!-- <h3 class="results-title"> Αποτελέσματα Αναζήτησης </h1>

        <div class="subject-info-to-edit">
            <div class="subject-info-to-edit-title">
                <b>Μάθημα:</b>   Διακριτά Μαθηματικά 1
            </div>
            <div class="subject-info-to-edit-professor">
                <b>Καθηγητής:</b> Ιάκωβος Χριστόπουλος
            </div>
            <div class="subject-info-to-edit-line">
                <div class="subject-info-to-edit-semister">
                    <b>Εξάμηνο:</b> 3ο
                </div>
                <div class="subject-info-to-edit-button">
                    <a href="diakrita1.php">Επεξεργασία Μαθήματος</a>
                </div>
            </div>
        </div>

        <div class="placeholder-secretary-edit-books">

        </div> -->

        <?php include 'footer.php';?>

    </body>
</html>