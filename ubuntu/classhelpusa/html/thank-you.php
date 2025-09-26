<?php
//	header('Content-Type: application/json'); // Tell the browser we're sending JSON
	require 'vendor/autoload.php';

	use PHPMailer\PHPMailer\PHPMailer;
	use PHPMailer\PHPMailer\Exception;

	$response = ["status" => "error", "message" => "Unknown error"];

	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		$mail = new PHPMailer(true);
		try {
		 //	$mail->SMTPDebug = 3; // Or 2
		 //	$mail->Debugoutput = 'html';
			$mail->isSMTP();    
			$mail->Host = 'mail.classhelpusa.com';
			$mail->SMTPAuth = true;
			$mail->Username = 'info@classhelpusa.com';
			$mail->Password = 'iTu}ag@!TN2H';
			$mail->SMTPSecure = 'tls';
			$mail->Port = 587;
			$mail->SMTPOptions = array(
		'ssl' => array(
			'verify_peer' => false,
			'verify_peer_name' => false,
			'allow_self_signed' => true
		)
	);

			$mail->setFrom('info@classhelpusa.com', 'Contact Form');
			$mail->addAddress('info@classhelpusa.com');
                        $mail->addCC('avinash.1ramchandani@gmail.com');
			
			// Check if email exists before adding reply-to
			if (isset($_POST['emladd'])) {
				$mail->addReplyTo($_POST['emladd']);
			}

			$mail->isHTML(false);
			$mail->Subject = 'New Contact Form Submission';
			
			// Safely get form values with fallbacks
			$firstName = isset($_POST['fl-name']) ? $_POST['fl-name'] : 'Not provided';
			$email = isset($_POST['emladd']) ? $_POST['emladd'] : 'Not provided';
			$phone = isset($_POST['phnumber']) ? $_POST['phnumber'] : 'Not provided';
			$subject = isset($_POST['subject']) ? $_POST['subject'] : 'Not provided';
			
			$mail->Body =
			 "First Name: {$firstName}\n" .
				"Email: {$email}\n" .
				"Phone: {$phone}\n" .
				"Description: {$subject}";

			$mail->send();
			$mail->smtpClose();
			$response = ["status" => "success", "message" => "Message sent successfully."];
		 } 
         catch (Exception $e) {
			$response = ["status" => "error", "message" => "Mailer Error: " . $mail->ErrorInfo];
		}
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="noindex, nofollow"/>
    <title>Thank You</title>

    <link rel="icon" href="uploads/2025/01/cropped-fav-icon-1-32x32.png" sizes="32x32" />
	<link rel="icon" href="uploads/2025/01/cropped-fav-icon-1-192x192.png" sizes="192x192" />

    <!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-3WLKC6K739"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-3WLKC6K739');
</script>


    <style>
        /* Page Transition Overlay */
        .page-transition-overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(135deg, #25D366, #1DA851);
            z-index: 9999;
            transform: translateX(-100%);
            transition: transform 0.6s cubic-bezier(0.25, 0.46, 0.45, 0.94);
        }

        .page-transition-overlay.active {
            transform: translateX(0);
        }

        .page-transition-overlay.exit {
            transform: translateX(100%);
        }

        /* Loading Spinner */
        .loading-overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(37, 211, 102, 0.95);
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            z-index: 9998;
            opacity: 0;
            visibility: hidden;
            transition: all 0.4s ease;
        }

        .loading-overlay.show {
            opacity: 1;
            visibility: visible;
        }

        .spinner {
            width: 50px;
            height: 50px;
            border: 4px solid rgba(255,255,255,0.3);
            border-top: 4px solid #fff;
            border-radius: 50%;
            animation: spin 1s linear infinite;
            margin-bottom: 20px;
        }

        .loading-text {
            color: white;
            font-size: 16px;
            font-weight: bold;
        }

        @keyframes spin {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }

        /* Page entrance animation */
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            opacity: 0;
            animation: pageEnter 0.8s ease-out 0.2s forwards;
        }

        @keyframes pageEnter {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .container {
            background-color: #fff;
            padding: 20px 40px;
            border-radius: 8px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            text-align: center;
            position: relative;
            transform: scale(0.9);
            animation: containerEnter 0.6s ease-out 0.4s forwards;
        }

        @keyframes containerEnter {
            from {
                transform: scale(0.9);
                opacity: 0.7;
            }
            to {
                transform: scale(1);
                opacity: 1;
            }
        }

        h1 {
            color: #4CAF50;
            margin-bottom: 20px;
            opacity: 0;
            animation: slideInUp 0.8s ease-out 0.6s forwards;
        }

        p {
            font-size: 18px;
            color: #333;
            margin-bottom: 30px;
            opacity: 0;
            animation: slideInUp 0.8s ease-out 0.8s forwards;
        }

        .btn {
            display: inline-block;
            padding: 10px 20px;
            font-size: 16px;
            color: #fff;
            background-color: #25D366;
            border: none;
            border-radius: 5px;
            text-decoration: none;
            transition: all 0.3s ease;
            margin: 5px;
            opacity: 0;
            transform: translateY(20px);
            animation: slideInUp 0.6s ease-out forwards;
            cursor: pointer;
        }

        .btn:nth-child(1) { animation-delay: 1.0s; }
        .btn:nth-child(2) { animation-delay: 1.2s; }
        .btn:nth-child(3) { animation-delay: 1.4s; }

        .btn:hover {
            background-color: #1DA851;
            transform: translateY(-2px);
            box-shadow: 0 8px 15px rgba(37, 211, 102, 0.3);
        }

        @keyframes slideInUp {
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .logo {
            max-width: 100%;
            margin-bottom: 20px;
            opacity: 0;
            animation: logoFadeIn 1s ease-out 0.3s forwards;
        }

        @keyframes logoFadeIn {
            from {
                opacity: 0;
                transform: scale(0.8);
            }
            to {
                opacity: 1;
                transform: scale(1);
            }
        }

        .close-button {
            position: absolute;
            top: 10px;
            right: 10px;
            background-color: transparent;
            color: #f44336;
            border: none;
            font-size: 24px;
            cursor: pointer;
            transition: all 0.3s ease;
            opacity: 0;
            animation: fadeIn 0.5s ease-out 1.6s forwards;
        }

        .close-button:hover {
            transform: rotate(90deg) scale(1.1);
            color: #d32f2f;
        }

        @keyframes fadeIn {
            to {
                opacity: 1;
            }
        }

        /* Success checkmark animation */
        .success-checkmark {
            width: 176px;
            height: 176px;
            border-radius: 50%;
            display: block;
            stroke-width: 3;
            stroke: #4CAF50;
            stroke-miterlimit: 10;
            margin: 20px auto;
            box-shadow: inset 0px 0px 0px #4CAF50;
            animation: fill 0.4s ease-in-out 0.4s forwards, scale 0.3s ease-in-out 0.9s both;
        }

        .success-checkmark__circle {
            stroke-dasharray: 100;
            stroke-dashoffset: 100;
            stroke-width: 3;
            stroke-miterlimit: 10;
            stroke: #4CAF50;
            fill: none;
            animation: stroke 0.6s cubic-bezier(0.65, 0, 0.45, 1) forwards;
        }

        .success-checkmark__check {
            transform-origin: 50% 50%;
            stroke-dasharray: 48;
            stroke-dashoffset: 48;
            animation: stroke 0.3s cubic-bezier(0.65, 0, 0.45, 1) 0.8s forwards;
        }

        @keyframes stroke {
            100% {
                stroke-dashoffset: 0;
            }
        }

        @keyframes scale {
            0%, 100% {
                transform: none;
            }
            50% {
                transform: scale3d(1.1, 1.1, 1);
            }
        }

        @keyframes fill {
            100% {
                box-shadow: inset 0px 0px 0px 30px #4CAF50;
            }
        }

        /* Pulse effect for buttons */
        .btn-pulse {
            animation: pulse 2s infinite;
        }

        @keyframes pulse {
            0% {
                box-shadow: 0 0 0 0 rgba(37, 211, 102, 0.7);
            }
            70% {
                box-shadow: 0 0 0 10px rgba(37, 211, 102, 0);
            }
            100% {
                box-shadow: 0 0 0 0 rgba(37, 211, 102, 0);
            }
        }
    </style>
</head>

<body>
    <!-- Page Transition Overlay -->
    <div class="page-transition-overlay" id="pageTransition"></div>
    
    <!-- Loading Overlay -->
    <div class="loading-overlay" id="loadingOverlay">
        <div class="spinner"></div>
        <div class="loading-text">Loading...</div>
    </div>

    <div class="container">
        <button class="close-button" onclick="redirectWithTransition('/')">✖</button>
        
        <!-- Success Checkmark SVG -->
        <svg class="success-checkmark" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 52 52">
            <circle class="success-checkmark__circle" cx="26" cy="26" r="25" fill="none"/>
            <path class="success-checkmark__check" fill="none" d="m14.1 27.2l7.1 7.2 16.7-16.8"/>
        </svg>
        
        <img src="https://www.classhelpusa.com/assets/images/Logo.png" alt="Class Help USA" class="logo">
        <h1> <b>Thank You! Your request has been received.<b></h1>
        <p>One of our experts will get in touch with you shortly.</p>
        <a href="https://www.classhelpusa.com" class="btn">Back to Home Page</a>
        <a href="https://wa.me/+447909058881" class="btn">Contact Us on WhatsApp</a>
        <a href="info@classhelpusa.com" class="btn">Send Email</a>
        
        
        <p>100% Confidential | US Native Writers | On-Time Delivery</p>
    </div>

    <script>
        // Page load animation
        document.addEventListener('DOMContentLoaded', function() {
            // Add staggered animation delays for buttons
            const buttons = document.querySelectorAll('.btn');
            buttons.forEach((btn, index) => {
                btn.style.animationDelay = (1.0 + index * 0.2) + 's';
            });
        });

        // Redirect with transition animation
        function redirectWithTransition(url, animationType = 'slide') {
            const overlay = document.getElementById('pageTransition');
            
            if (animationType === 'slide') {
                overlay.classList.add('active');
                setTimeout(() => {
                    window.location.href = url;
                }, 600);
            } else if (animationType === 'loading') {
                const loadingOverlay = document.getElementById('loadingOverlay');
                loadingOverlay.classList.add('show');
                setTimeout(() => {
                    window.location.href = url;
                }, 1500);
            }
        }

        // Enhanced go to home page function
        function goToHomePage() {
            redirectWithTransition('/');
        }

        // Add click animations to buttons
        document.querySelectorAll('.btn').forEach(button => {
            button.addEventListener('click', function(e) {
                // Only add animation for redirecting buttons, not external links
                if (this.getAttribute('href') === '#') {
                    e.preventDefault();
                    
                    // Add click effect
                    this.style.transform = 'scale(0.95)';
                    setTimeout(() => {
                        this.style.transform = '';
                    }, 150);
                }
            });
        });

        // Smooth scroll for better UX (if page has multiple sections)
        function smoothScrollTo(elementId) {
            document.getElementById(elementId).scrollIntoView({
                behavior: 'smooth'
            });
        }

        // Optional: Add particle effect
        function createParticles() {
            const container = document.querySelector('.container');
            for (let i = 0; i < 6; i++) {
                const particle = document.createElement('div');
                particle.style.cssText = `
                    position: absolute;
                    width: 6px; height: 6px;
                    background: #25D366;
                    border-radius: 50%;
                    pointer-events: none;
                    top: ${Math.random() * 100}%;
                    left: ${Math.random() * 100}%;
                    animation: float ${3 + Math.random() * 4}s ease-in-out infinite;
                    opacity: 0.6;
                `;
                container.appendChild(particle);
            }
        }

        // Add floating animation keyframes
        const style = document.createElement('style');
        style.textContent = `
            @keyframes float {
                0%, 100% { transform: translateY(0px); }
                50% { transform: translateY(-20px); }
            }
        `;
        document.head.appendChild(style);

        // Initialize particles after page load
        setTimeout(createParticles, 2000);
    </script>
</body>
</html>
