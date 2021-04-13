<?php
        //BRING IN VARIABLES AND FUNCTIONS TO BE USED IN SCRIPT
        require_once("php/form-handler.php");


        //CHECK IF FORM HAS BEEN SUBMITTED

        if(filter_has_var(INPUT_POST, 'submit')) {

            if ($_POST['age'] !== "1") {
                die("Form could not be submitted");
            }

            //Required fields
            $firstName = htmlspecialchars($_POST['firstName']);
            $lastName = htmlspecialchars($_POST['lastName']);
            $email = htmlspecialchars($_POST['email']);
            $phone = htmlspecialchars($_POST['phone']);
            $message = htmlspecialchars($_POST['message']);

            //Not required fields

            if (isset($_POST['moveTimeFrame'])) {
                $moveTimeFrame = $_POST['moveTimeFrame'];
            } else {
                $moveTimeFrame = "";
            }

            if (isset($_POST['floorPlans'])) {
                $floorPlans = htmlspecialchars($_POST['floorPlans']);
            } else {
                $floorPlans = "";
            }

            if (isset($_POST['howYouHeard'])) {
                $howYouHeard = implode(", ", $_POST['howYouHeard']);
            } else {
                $howYouHeard = "";
            }

            if (isset($_POST['tour-style'])) {
                $tourStyle = $_POST['tour-style'];
            } else {
                $tourStyle = "";
            }

            if (isset($_POST['preferredDate'])) {
                $preferredDate = htmlspecialchars($_POST['preferredDate']);
            } else {
                $preferredDate = "";
            }
            
            if (isset($_POST['preferredTime'])) {
                $preferredTime = htmlspecialchars($_POST['preferredTime']);
            } else {
                $preferredTime = "";
            }

            validateFirstName($firstName);
            validateLastName($lastName);
            validateEmail($email);
            validatePhone($phone);
            validateMessage($message);

            if($validForm) {

                        $toEmail = 'contact@willyhedge.com';
                        $subject = 'Contact form submission from '. $firstName . " " . $lastName;
                        $emailBody = '<h2>Contact Form Submission</h2>
                                      <h3>Name</h3><p>'. $firstName . ' ' . $lastName.'</p>
                                      <h3>Email Address</h3><p>' .$email. '</p>
                                      <h3>Phone Number</h3><p>' . $phone . '</p>
                                      <h3>Moving Time Frame</h3>' . $moveTimeFrame . '</p>
                                      <h3>Message</h3><p>'.$message.'</p>
                                      <h3>Additional Information</h3><h4>
                                      Floor plans</h4>' . '<p>' . $floorPlans . '</p><h4>
                                      How they heard about us</h4>' . '<p>' . $howYouHeard . '</p><h4>
                                      Virtual or in-person tour</h4>' . '<p>' . $tourStyle . '</p><h4>
                                      Tour Date</h4>' . '<p>' . $preferredDate . '</p><h4>
                                      Preferred Tour Time</h4>' . '<p>' . $preferredTime . '</p>';
                            

                        $emailHeaders = "MIME-Version: 1.0" . "\r\n";
                        $emailHeaders .= "Content-Type: text/html; charset=UTF-8" . "\r\n";

                        $emailHeaders .= "From: " .$firstName . '' . $lastName . "<" .$email. ">". "\r\n";

                        if (mail($toEmail, $subject, $emailBody, $emailHeaders)) {
                            $msg = "Your email has been sent, we will get back to you as soon as possible. Thanks!";
                        } else {
                            $msg = "Your email was not sent, please try again later";
                        }                       
                    }
            }   else {
                
                $msg = "";
            }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"
        integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap-theme.min.css"
        integrity="sha384-6pzBo3FDv/PJ8r2KRkGHifhEocL+1X2rVCTTkUfGk7/0pbek5mMa1upzvWbrUbOZ" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"
        integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd"
        crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

    <link rel="stylesheet" type="text/css" href="css/vintage.css">
    <link rel="stylesheet" type="text/css" href="css/footer.css">
    <link rel="stylesheet" href="css/contact.css">
</head>
<body>

    <nav class="navbar navbar-expand-md bg-light">

        <a class="navbar-brand" href="index.html"><img src="img/PrairieTrailResize.png"
                alt="Vintage Cooperative of Prairie Trail logo"></a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavMobile"
            aria-controls="navbarNavMobile" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNavMobile">
            <div class="navbar-nav">
                <a class="nav-item nav-link glow" href="index.html">HOME</a>
                <a class="nav-item nav-link glow" href="coop.html">WHY CO-OPS?</a>
                <a class="nav-item nav-link glow" href="newNeighbor.html">THE NEIGHBORHOOD</a>
                <a class="nav-item nav-link glow" href="about.html">FAQs</a>
                <a class="nav-item nav-link glow" href="floor-plans.html">FLOOR PLANS</a>
                <a class="nav-item nav-link glow" href="contact.php">CONTACT US</a>
            </div>
        </div>
    </nav>



    <div class="contact-wrap">

    <h2 class="contact-head">Come find us for more information!</h2>

        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2978.14834440132!2d-93.62032398426582!3d41.717317683438864!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x87ee85268e01fa69%3A0x31ab78b7b7ff3adf!2s1370%20SW%20Magazine%20Rd%2C%20Ankeny%2C%20IA%2050023!5e0!3m2!1sen!2sus!4v1615846891443!5m2!1sen!2sus" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>

        <h1 class="contact-head">Contact Us</h1>
        <h4 class="contact-head">OR</h4>
        <h3 class="contact-head">Call us now at <a href="tel:+1-515-289-2530">(515) 289-2530</a></h3>

        <span class="confirmation-message"><?php echo $msg ?></span>

        <form id="contact-form" name="contact-form" method="POST" action="<?php echo $_SERVER['PHP_SELF'] ?>">

            <ul class="flex-outer">

            <li>
                <label for="firstName">First Name <span class="form-required">*</span></label>
                <input type="text" id="firstName" name="firstName" value="<?php echo $firstName ?>"><span class="<?php echo $msgClass ?>"><?php echo $firstNameError ?></span>
            </li>

            <li>
                <label for="lastName">Last Name <span class="form-required">*</span></label>
                <input type="text" id="lastName" name="lastName" value="<?php echo $lastName ?>"><span class="<?php echo $msgClass ?>"><?php echo $lastNameError ?></span>
            </li>

            <li id="#honeypot" style="display: none;">
                <label for="age" style="display: none;">Age</label>
                <input type="text" id="age" name="age" value="1" style="display: none;">
            </li>

            <li>
                <label for="email">Email Address <span class="form-required">*</span></label>
                <input type="email" id="email" name="email" value="<?php echo $email ?>"><span class="<?php echo $msgClass ?>"><?php echo $emailError ?></span>
            </li>

            <li>
                <label for="phone">Phone Number <span class="form-required">*</span></label>
                <input type="tel" id="phone" name="phone" placeholder="515-515-5151" value="<?php echo $phone ?>"><span class="<?php echo $msgClass ?>"><?php echo $phoneError ?></span>
            </li>

            <li>
                <label for="floorPlans">Floor Plans</label>
                <input type="text" id="floorPlans" name="floorPlans" placeholder="Please enter any floor plans you are interested in" value="<?php echo $floorPlans ?>">
            </li>

            <li>
                <p class="label-p">How soon are you looking to move?</p>

                <ul class="flex-inner">

                    <li>
                        <input type="radio" id="less-than-3-months" name="moveTimeFrame" value="less than 3 months">
                        <label for="less-than-3-months">Less than 3 Months</label>
                    </li>

                    <li>
                        <input type="radio" id="3to6" name="moveTimeFrame" value="3 to 6 months">
                        <label for="3to6">3-6 Months</label>
                    </li>

                    <li>
                        <input type="radio" id="6to9" name="moveTimeFrame" value="6 to 9 months">
                        <label for="6to9">6-9 Months</label>
                    </li>

                    <li>
                        <input type="radio" id="9to12" name="moveTimeFrame" value="9 to 12 months">
                        <label for="9to12">9-12 Months</label>
                    </li>

                </ul>

            </li>

            <li>

                <p class="label-p">How did you hear about us?</p>

                <ul class="flex-inner">

                    <li>
                        <input type="checkbox" id="mail" name="howYouHeard[]" value="Mail">
                        <label for="mail">Mail</label>
                    </li>

                    <li>
                        <input type="checkbox" id="socialMedia" name="howYouHeard[]" value="SocialMedia">
                        <label for="socialMedia">Social Media</label>
                    </li>

                    <li>
                        <input type="checkbox" id="drive-by" name="howYouHeard[]" value="DriveBy">

                        <label for="drive-by">Drive By</label>
                    </li>

                    <li>
                        <input type="checkbox" id="other" name="howYouHeard[]" value="Other">
                        <label for="other">Other</label>
                    </li>

                </ul>
            
            </li>

        </ul> <!--END FLEX OUTER CLASS-->

        <div class="schedule-tour">

            <h2 class="contact-head">If you would like to schedule a tour, select a date & time</h2>

                <ul class="flex-inner">

                    <p class="label-p">Would you prefer an in-person or virtual tour?</p>

                    <li>
                        <input type="radio" name="tour-style" value="in-person" id="in-person">
                        <label for="in-person">In-Person</label>
                    </li>

                    <li>
                        <input type="radio" name="tour-style" value="virtual" id="virtual">
                        <label for="virtual">Virtual</label>
                    </li>

                </ul>
                
                <ul class="flex-inner">

                    <li>
                        <label for="preferredDate">Select Preferred Date</label>
                        <input type="date" name="preferredDate" id="preferredDate">
                    </li>

                    <li>
                        <label for="preferredTime">Select Preferred Time</label>
                    </li>


                    <li>
                        <input type="radio" id="preferMorning" name="preferredTime" value="Morning">
                        <label for="preferMorning">Morning</label>
                    </li>

                    <li>
                        <input type="radio" id="preferAfternoon" name="preferredTime" value="Afternoon">
                        <label for="preferAfternoon">Afternoon</label>
                    </li>

                </ul>
                    
                <label for="message" style="display: block;">Comments or Questions: <span class="form-required">*</span></label>
                <textarea id="message" name="message"><?php echo $message ?></textarea><span class="<?php echo $msgClass ?>"><?php echo $messageError ?></span>

            </div>

            <div class="button-wrap">
                <input name="submit" type="submit" value="Submit">
            </div>

        </form>
    </div>

    <footer class="flex-footer">

<div class="footer-nav">

    <h1>Navigation</h1>

    <div class="footer-nav-flex">

        <div class="footer-nav-links">
            <a class="nav-item nav-link glow" href="#">HOME</a>
            <a class="nav-item nav-link glow" href="#">WHY CO-OPS?</a>
            <a class="nav-item nav-link glow" href="#">THE NEIGHBORHOOD</a>
           
        </div>


        <div class="footer-nav-links">
          <a class="nav-item nav-link glow" href="#">ABOUT US</a>
            <a class="nav-item nav-link glow" href="#">FLOOR PLANS</a>
            <a class="nav-item nav-link glow" href="#">CONTACT US</a>
        </div>

    </div>
</div>

<div class="footer-contact">
    <img src="img/PrairieTrail.png">

    <div class="contact-icons">
        <a href="tel:+1-515-289-2530"><i class="fas fa-phone-alt"></i></a>
        <a href="mailto: abc@example.com"><i class="fas fa-envelope"></i></a>
    </div>

    <div class="rights-reserved">
        <p>Copyright &#169;</i>
            <script>
                let date = new Date(); 
                document.write(date.getFullYear());
           </script>   
           Vintage Cooperative of Prairie Trail - All Rights Reserved
        </p>
    </div>
</div>

<div class="footer-information">
    <h1>General Information</h1>

    <h2>Hours</h2>

    <p>Monday - Thurday: 8:30AM - 4PM</p>
    <p>Friday - Sunday: Closed</p>

    <h2>Contact Information</h2>
    <p>Email: office@VintagePrairieTrail.com</p>
    <p>Phone: (515)289-2350</p>
    <p>Address: 1370 SW Magazine Rd
        Ankeny, IA 50023
    </p>
</div>

</footer>
    
</body>
</html>