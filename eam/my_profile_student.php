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

        <script src="main.js"></script>
        <title> New Eudoxus </title>
    </head>
    <body>

        <?php include 'header.php';?>

        <?php include 'userOptions.php';?>
        
        <div class="below-nav-bar">
            <div class="my-breadcrumb">
                <ul class="breadcrumb">
                  <li><a href="./index.php"><i class="fa fa-home" aria-hidden="true"></i></a></li>
                  <li>Το προφίλ μου - Φοιτητής</li>
                </ul>
            </div>

            <?php include 'isLoggedIn.php';?>

        </div>

        <?php include 'student_profile_info.php';?>

        <div class="my-main-content-registration my-profile-info">
        <form method="post" action="" autocomplete="false">

            <div class="my-reg-account-info">
                <h> Στοιχεία Λογαριασμού </h>
                  <div class="form-group row">
                    <label for="myEmail" class="col-5 col-form-label"><i class="fa fa-envelope" aria-hidden="true"></i>  Email:</label>
                    <div class="col-6 myEmail-edit" id="myEmail-edit-content">
                        <input id="myEmail-edit-content-value" type=text value="<?php echo $email;?>" disabled/>
                    </div>
                    <div class="col-1 myEmail-edit-icon" id="myEmail-edit-icon-content">
                        <i class="fa fa-pencil-alt" aria-hidden="true"></i>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="myPassword" class="col-5 col-form-label"><i class="fa fa-lock" aria-hidden="true"></i>   Κωδικός:</label>
                    <div class="col-6 myPassword-edit" id="myPassword-edit-content">
                        <input id="myPassword-edit-content-value" type=password value="<?php echo $pass;?>" disabled/>
                    </div>
                    <div class="col-1 myPassword-edit-icon" id="myPassword-edit-icon-content">
                        <i class="fa fa-pencil-alt" aria-hidden="true"></i>
                    </div>
                  </div>
            </div>
            <div class="my-reg-personal-info">
                <h> Προσωπικά Στοιχεία </h>
                <div class="form-group row">
                  <label for="myFirstName" class="col-5 col-form-label">Όνομα:</label>
                  <div class="col-6">
                      <?php echo $firstName;?>
                  </div>
                </div>
                <div class="form-group row">
                  <label for="myLastName" class="col-5 col-form-label">Επώνυμο:</label>
                  <div class="col-6">
                      <?php echo $lastName ;?>
                  </div>
                </div>
                <div class="form-group row">
                  <label for="myBirthDate" class="col-5 col-form-label">Ημερομηνία Γέννησης:</label>
                  <div class="col-6">
                      <?php echo $date ;?>
                  </div>
                </div>
            </div>
            <div class="my-university-info">
                <h> Στοιχεία Σχολής </h>
                <div class="form-group row">
                  <label for="myUniv" class="col-5 col-form-label">Σχολή:</label>
                  <div class="col-6">
                      <?php echo $uni;?>
                  </div>
                </div>
                <div class="form-group row">
                  <label for="myDepart" class="col-5 col-form-label">Τμήμα:</label>
                  <div class="col-6">
                      <?php echo $dept;?>
                  </div>
                </div>
                <div class="form-group row">
                  <label for="myDepart" class="col-5 col-form-label">Αριθμός Μητρώου:</label>
                  <div class="col-6">
                      <?php echo $am;?>
                  </div>
                </div>
            </div>
            <div class="my-reg-contact-info">
                <h> Στοιχεία Επικοινωνίας </h>
                <div class="form-group row">
                  <label for="myPhoneNumber" class="col-5 col-form-label"><i class="fa fa-phone" aria-hidden="true"></i> Τηλέφωνο Επικοινωνίας:</label>
                  <div class="col-6 myPhone-edit" id="myPhone-edit-content">
                      <input id="myPhone-edit-content-value" type=text value="<?php echo $phone;?>" disabled/>
                  </div>
                  <div class="col-1 myPhone-edit-icon" id="myPhone-edit-icon-content">
                      <i class="fa fa-pencil-alt" aria-hidden="true"></i>
                  </div>
                </div>
                <div class="form-group row">
                  <label for="myAddress" class="col-5 col-form-label">Διεύθυνση Κατοικίας:</label>
                  <div class="col-6 myAddress-edit" id="myAddress-edit-content">
                      <input id="myAddress-edit-content-value" type=text value="<?php echo $address;?>" disabled/>
                  </div>
                  <div class="col-1 myAddress-edit-icon" id="myAddress-edit-icon-content">
                      <i class="fa fa-pencil-alt" aria-hidden="true"></i>
                  </div>
                </div>

            </div>
        </form>


        </div>

        <?php include 'footer.php';?>

        <!-- Email Edit Modal -->
        <div class="modal" id="successEdit-email">
          <div class="modal-dialog">
            <div class="modal-content">

              <!-- Modal Header -->
              <div class="modal-header">
                <h4 class="modal-title">Ευχαριστούμε!!</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
              </div>

              <!-- Modal body -->
              <div class="modal-body">
                Το email σας ενημερώθηκε επιτυχώς!
              </div>

              <!-- Modal footer -->
              <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
              </div>

            </div>
          </div>
        </div>

        <!-- Password Edit Modal -->
        <div class="modal" id="successEdit-password">
          <div class="modal-dialog">
            <div class="modal-content">

              <!-- Modal Header -->
              <div class="modal-header">
                <h4 class="modal-title">Ευχαριστούμε!!</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
              </div>

              <!-- Modal body -->
              <div class="modal-body">
                Το password σας ενημερώθηκε επιτυχώς!
              </div>

              <!-- Modal footer -->
              <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
              </div>

            </div>
          </div>
        </div>

        <!-- Phone Edit Modal -->
        <div class="modal" id="successEdit-phone">
          <div class="modal-dialog">
            <div class="modal-content">

              <!-- Modal Header -->
              <div class="modal-header">
                <h4 class="modal-title">Ευχαριστούμε!!</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
              </div>

              <!-- Modal body -->
              <div class="modal-body">
                Το τηλέφωνο σας ενημερώθηκε επιτυχώς!
              </div>

              <!-- Modal footer -->
              <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
              </div>

            </div>
          </div>
        </div>

        <!-- Address Edit Modal -->
        <div class="modal" id="successEdit-address">
          <div class="modal-dialog">
            <div class="modal-content">

              <!-- Modal Header -->
              <div class="modal-header">
                <h4 class="modal-title">Ευχαριστούμε!!</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
              </div>

              <!-- Modal body -->
              <div class="modal-body">
                Η διεύθυνσή σας ενημερώθηκε επιτυχώς!
              </div>

              <!-- Modal footer -->
              <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
              </div>

            </div>
          </div>
        </div>

    </body>
</html>
