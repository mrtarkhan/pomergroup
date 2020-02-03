<?php

if(isset($_POST['submitted'])) {

    if(trim($_POST['contactName']) === "") {
        $nameError = 'Please enter your name.';
        $hasError = true;
    } else {
        $name = trim($_POST['contactName']);
    }


    if(trim($_POST['email']) === "")  {

        $emailError = 'Please enter your email address.';
        $hasError = true;
    } else if (!preg_match("/^[[:alnum:]][a-z0-9_.-]*@[a-z0-9.-]+.[a-z]{2,4}$/i", trim($_POST['email']))) {
    $emailError = 'You entered an invalid email address.';
    $hasError = true;
    } else {
        $email = trim($_POST['email']);
    }


    if(trim($_POST['comments']) === "") {
        $commentError = 'Please enter a message.';
        $hasError = true;
    } else {
        if(function_exists('stripslashes')) {
            $comments = stripslashes(trim($_POST['comments']));
        } else {
            $comments = trim($_POST['comments']);
        }
    }


    if(!isset($hasError)) {
        $emailTo = get_option('tz_email');
    if (!isset($emailTo) || ($emailTo == "") ){
        $emailTo = get_option('admin_email');
    }
        $subject = 'From '.$name;
        $body = "Name: $name nnEmail: $email nnComments: $comments";
        $headers = 'From: '.$name.' <'.$emailTo.'>' . "rn" . 'Reply-To: ' . $email;
        wp_mail($emailTo, $subject, $body, $headers);
        $emailSent = true;
    }
} ?>


<div>

<?php if(isset($emailSent) && $emailSent == true) { ?>

<div>

<p>Thanks, your email was sent successfully.</p>

</div>

<?php } else { ?>

<?php if(isset($hasError) || isset($captchaError)) { ?>

<p>Sorry, an error occured.<p>

<?php } ?>

<!-- forme tamas -->
<div class="full-section bg-white">
    <div class="container container-margin-side-120 flex-center">

        <form action="<?php the_permalink(); ?>" id="contactForm" method="post">


            <label for="contactName">Name:</label>

            <input type="text" name="contactName" id="contactName" value="" />



            <label for="email">Email</label>

            <input type="text" name="email" id="email" value="" />

            <label for="commentsText">Message:</label>

            <textarea name="comments" id="commentsText" rows="20″ cols=" 30″></textarea>

            <button type="submit">Send email</button>


            <input type="hidden" name="submitted" id="submitted" value="true" />

        </form>

    </div>
</div>

<?php get_footer(); ?>