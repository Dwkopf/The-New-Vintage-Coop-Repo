<?php
        $msgClass = '';     //USED FOR STYLING ERROR MESSAGE
        $msg = "";
        
        $firstName = "";
        $lastName = "";
        $email = "";
        $phone = "";
        $floorPlans = "";
        $message = "";

        $firstNameError = "";
        $lastNameError = "";
        $emailError = "";
        $phoneError = "";
        $messageError = "";

        $validForm = false;

        function validateFirstName($inValue) {
            global $validForm, $msg, $msgClass, $firstNameError;
            $inValue = trim($inValue);

            if (empty($inValue)) {
                $validForm = false;
                $firstNameError = "Please enter your first name";
                $msgClass = "form-error";
            } else {
                $validForm = true;
            }

            return $validForm;
        }

        function validateLastName($inValue) {
            global $validForm, $msg, $msgClass, $lastNameError;
            $inValue = trim($inValue);

            if (empty($inValue)) {
                $validForm = false;
                $lastNameError = "Please enter your last name";
                $msgClass = "form-error";
            } else {
                $validForm = true;
            }

            return $validForm;
        }

        function validateEmail($inValue) {
            global $validForm, $msg, $msgClass, $emailError;
            $inValue = trim($inValue);

            if (empty($inValue)) {
                $validForm = false;
                $emailError = "Please enter your email address";
                $msgClass = "form-error";
            } else if (filter_var($inValue, FILTER_VALIDATE_EMAIL) === false) {
                $validForm = false;
                $msg = "Please enter a valid email address";
                $msgClass = "form-error";
            }
            else {
                $validForm = true;
            }
            return $validForm;
        }

        function validatePhone($inValue) {
            global $validForm, $msg, $msgClass, $phoneError;
            $inValue = trim($inValue);

            if (empty($inValue)) {
                $validForm = false;
                $phoneError = "Please enter your phone number";
                $msgClass = "form-error";
            } else {
                $validForm = true;
            }

            return $validForm;
        }

        function validateMessage($inValue) {
            global $validForm, $msg, $msgClass, $messageError;
            $inValue = trim($inValue);

            if (empty($inValue)) {
                $validForm = false;
                $messageError = "Please enter a message";
                $msgClass = "form-error";
            } else {
                $validForm = true;
            }

            return $validForm;
        }
?>