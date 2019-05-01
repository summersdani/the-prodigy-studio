<?php
/*
Template Name: Contact Form
*/
?>


<?php 
//If the form is submitted
if(isset($_POST['submitted'])) {

	//Check to see if the honeypot captcha field was filled in
	if(trim($_POST['checking']) !== '') {
		$captchaError = true;
	} else {
	
		//Check to make sure that the name field is not empty
		if(trim($_POST['fname']) === '') {
			$nameError = 'You forgot to enter your first name.';
			$hasError = true;
		} else {
			$name = trim($_POST['fname']);
		}
		
                if(trim($_POST['lname']) === '') {
			$nameError = 'You forgot to enter your last name.';
			$hasError = true;
		} else {
			$name = trim($_POST['lname']);
		}
                
		//Check to make sure sure that a valid email address is submitted
		if(trim($_POST['email']) === '')  {
			$emailError = 'You forgot to enter your email address.';
			$hasError = true;
		} else if (!eregi("^[A-Z0-9._%-]+@[A-Z0-9._%-]+\.[A-Z]{2,4}$", trim($_POST['email']))) {
			$emailError = 'You entered an invalid email address.';
			$hasError = true;
		} else {
			$email = trim($_POST['email']);
		}
                
                if(trim($_POST['address']) === '') {
			$nameError = 'You forgot to enter your address.';
			$hasError = true;
		} else {
			$name = trim($_POST['address']);
		}
                
                if(trim($_POST['pcode']) === '') {
			$nameError = 'You forgot to enter your zip code.';
			$hasError = true;
		} else {
			$name = trim($_POST['pcode']);
		}
                
                if(trim($_POST['phone']) === '') {
			$nameError = 'You forgot to enter your phone number.';
			$hasError = true;
		} else {
			$name = trim($_POST['phone']);
		}
			
		//Check to make sure comments were entered	
		if(trim($_POST['message']) === '') {
			$commentError = 'You forgot to enter your message.';
			$hasError = true;
		} else {
			if(function_exists('stripslashes')) {
				$comments = stripslashes(trim($_POST['message']));
			} else {
				$comments = trim($_POST['message']);
			}
		}
			
		//If there is no error, send the email
		if(!isset($hasError)) {

			$emailTo = 'danibsummers@gmail.com';
			$subject = 'Contact Form Submission from '.$fname;
			$sendCopy = trim($_POST['sendCopy']);
			$body = "Name: $fname $lname \n\nEmail: $email \n\nAddress: $address \n\nPostal Code: $pcode \n\nPhone: $phone \n\nMessage: $message";
			$headers = 'From: My Site <'.$emailTo.'>' . "\r\n" . 'Reply-To: ' . $email;
			
			mail($emailTo, $subject, $body, $headers);

			if($sendCopy == true) {
				$subject = 'You emailed Your Name';
				$headers = 'From: Your Name <noreply@somedomain.com>';
				mail($email, $subject, $body, $headers);
			}

			$emailSent = true;

		}
	}
} ?>

<?php get_header(); ?>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/contact-form.js"></script>

<?php if(isset($emailSent) && $emailSent == true) { ?>

	<div class="thanks">
		<h1>Thanks, <?=$name;?></h1>
		<p>Your email was successfully sent. I will be in touch soon.</p>
	</div>

<?php } else { ?>

	<?php if (have_posts()) : ?>
	
	<?php while (have_posts()) : the_post(); ?>
		<h1><?php the_title(); ?></h1>
		<?php the_content(); ?>
		
		<?php if(isset($hasError) || isset($captchaError)) { ?>
			<p class="error">There was an error submitting the form.<p>
		<?php } ?>

<div class="content-index">

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

                       		<div class="locationMessageForm">
                                    <div class="messageformtitle">
                                        <h2>GET YOUR CHILD ON THE RIGHT<br> TRACK BY SIGNING UP TODAY!</h2>
                                    </div>
                                    
   		<form action="<?php the_permalink(); ?>" id="contactForm" method="post">
			
   	             <input type="hidden" value="false" id="isInternational">
                     
   	             <input type="text" placeholder="*Parent's First Name" maxlength="64" id="fname" name="fname" required="" value="<?php if(isset($_POST['fname'])) echo $_POST['fname'];?>" class="requiredField" />
			
   	             <input type="text" placeholder="*Parent's Last Name" maxlength="64" id="lname" name="lname" value="" required="">
			
   	             <input type="email" placeholder="*Email" maxlength="128" id="email" name="email" value="" required="">
			
   	             <input type="text" placeholder="*Street Address" maxlength="128" id="address" name="address" value="" required="">
			
   	             <div class="phoneRow">
   	                 <input class="postalCode" type="text" placeholder="*Postal Code" maxlength="10" name="pcode" value="" required="">
				
   	                 <input class="phoneNumber" type="phone" placeholder="*Phone Number" id="phone" name="phone" value="" required="">
   	             </div>
   	             <textarea placeholder="Message" name="message" maxlength="2048" id="message"></textarea>
                     <span class="requiredField"><font color="red">*</font> Required Field</span>
   	             <!-- Checkbox -->
   	             <div class="newsletterSignUp">
   	                 <input type="checkbox" name="newsLetter" id="newsLetter">
   	                 <span class="checkbox-style">Keep me updated on all of Prodigy's events</span>
   	             </div>
   	             <div class="submitContainer">
   	                  <input type="submit" value="Submit">
   	             </div>
				 
   			 </form>
   	 </div>

		</main><!-- #main -->
	</div><!-- #primary -->

</div><!-- .content-index -->

<?php endwhile; ?>
	<?php endif; ?>
<?php } ?>

<?php
get_footer();