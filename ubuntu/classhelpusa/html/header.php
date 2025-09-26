<?php

function getUserIP() {
    if (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
        $ips = explode(',', $_SERVER['HTTP_X_FORWARDED_FOR']);
        return trim($ips[0]);
    } elseif (!empty($_SERVER['HTTP_CLIENT_IP'])) {
        return $_SERVER['HTTP_CLIENT_IP'];
    } else {
        return $_SERVER['REMOTE_ADDR'];
    }
}

$ip = getUserIP();

$response = file_get_contents("http://ip-api.com/json/{$ip}");
$data = json_decode($response, true);

if ($data && isset($data['status']) && $data['status'] === 'success') {
    if ($data['country'] === 'Pakistan') {
        // Redirect to denied page
        //header("Location: denied.php");
		$script = "<script>
			window.location = 'denied.php';</script>";
			echo $script;
        exit();
    }

    //echo "User IP Address: " . htmlspecialchars($ip) . "<br>";
    //echo "Country: " . $data['country'] . "<br>";
    //echo "City: " . $data['city'] . "<br>";
    //echo "ISP: " . $data['isp'] . "<br>";
} else {
    //header("Location: denied.php");
		$script = "<script>
			window.location = 'denied.php';</script>";
			echo $script;
        exit();
    //exit();
	
}

?>

	<link rel="shortcut icon" href="https://www.classhelpusa.com/assets/images/fav-icon.png">
    <link rel="stylesheet" href="https://www.classhelpusa.com/assets/css/style.css" />
    <link rel="stylesheet" href="https://www.classhelpusa.com/assets/css/responsive.css" />
   <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" />
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css?ver=6.1" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&family=Oswald:wght@200..700&display=swap" />
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>

      <!--Start of Tawk.to Script-->
            <script type="text/javascript">
            var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
            (function(){
            var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
            s1.async=true;
            s1.src='https://embed.tawk.to/67aa40743a842732607c93bf/1ijogni9d';
            s1.charset='UTF-8';
            s1.setAttribute('crossorigin','*');
            s0.parentNode.insertBefore(s1,s0);
            })();
            </script>
        <!--End of Tawk.to Script-->
        
      <!-- Google Tag Manager -->
        <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
        new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
        j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
        'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-WSQB9DQT');</script>
        <!-- End Google Tag Manager -->
        
        <!-- Google tag (gtag.js) -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=G-RLTVQYTZ9T"></script>
        <script>
          window.dataLayer = window.dataLayer || [];
          function gtag(){dataLayer.push(arguments);}
          gtag('js', new Date());
        
          gtag('config', 'G-RLTVQYTZ9T');
        </script>
		
		<script type="application/ld+json">
		{
		  "@context": "https://schema.org",
		  "@type": "Organization",
		  "name": "ClassHelpUSA",
		  "url": "https://www.classhelpusa.com/",
		  "logo": "https://www.classhelpusa.com/assets/images/Logo.png",
		  "description": "ClassHelpUSA offers online academic support including class help, assignments, exams, and homework assistance for students in the USA.",
		  "address": {
			"@type": "PostalAddress",
			"streetAddress": "4461 Wayside Lane",
			"addressLocality": "Richmond",
			"addressRegion": "California",
			"postalCode": "94804",
			"addressCountry": "US"
		  },
		  "contactPoint": [
			{
			  "@type": "ContactPoint",
			  "contactType": "customer service",
			  "email": "info@classhelpusa.com",
			  "telephone": "(+1) 4698 1220 83",
			  "availableLanguage": ["English"],
			  "areaServed": "US"
			}
		  ],
		  "sameAs": [
			"https://x.com/classhelpusa",
			"https://www.facebook.com/theclasshelpusaofficial",
			"https://www.linkedin.com/company/classhelpusa",
			"https://www.instagram.com/classhelpusa/",
			"https://www.pinterest.com/classhelpusa/"
		  ],
		  "serviceOffered": [
			{
			  "@type": "Service",
			  "name": "Online Class Help",
			  "description": "Support for students with their online classes and study tasks."
			},
			{
			  "@type": "Service",
			  "name": "Assignment Help",
			  "description": "Help with completing academic assignments on time."
			},
			{
			  "@type": "Service",
			  "name": "Exam Help",
			  "description": "Guidance and assistance for online exams and quizzes."
			},
			{
			  "@type": "Service",
			  "name": "Homework Help",
			  "description": "Easy support for daily homework tasks in different subjects."
			}
		  ]
		}
		</script>
     
      <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    
   
    </head>

  <body>
      
   <!-- Google Tag Manager (noscript) -->
	<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WSQB9DQT"
	height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
	<!-- End Google Tag Manager (noscript) -->
        
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="rows-models">
            <div class="custom-model-boxes">
                <div class="modal-side-content">
                    <div class="modal-side-content-inner-body">
                        <span>Unlock Up to</span>
                        <p>70% OFF</p>
                        <span>Your First Class!</span>
                    </div>
                    <button type="button" class="btn-close response-none" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
            <!--<div class="col-lg-6">-->
                <div class="modal-form">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h3 class="modal-title" id="exampleModalLabel">Sign Up Now And<br> Get A Free Class Quote</h3>
                            <div class="response-show">
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                        </div>
                        <div class="modal-paragraph">
                            <p>The Exclusive Offer won't last long - it's time to invest in your future.</p>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <form action="thank-you" method="post" class="contact-form">
                                      <div class="container">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="contact-form-input">
                                                  <input type="text" name="fl-name" placeholder="Last Name">
                                                </div>
                                                <div class="contact-form-input">
                                                  <input type="email" name="emladd" placeholder="Email Address...">
                                                </div>
                                                <div class="contact-form-input">
                                                  <input type="tel" name="phnumber" placeholder="Phone No..">
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <div class="captcha">
                                                            <div class="g-recaptcha" data-sitekey="6LcNwjwlAAAAAO1BW4zH_51xiDBzZ4a8eD66Zt7P"></div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="contact-form-inputs">
                                                          <input type="submit" name="sbmtbtn" value="Submit">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                          </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
				</div>
            </div>
        </div>
    </div>
    
    <header>
      <div class="upper-header">
        <div class="container-fluid">
          <div class="row">
            <div class="col-lg-5"></div>
            <div class="col-lg-7">
              <div class="header-contacts responsive-none-contacts">
                <div class="our-contact-details">
                  <i class="fa-solid fa-headset"></i>
                  <a href="javascript:void(Tawk_API.toggle())" id="liveSupportLink">Live Support</a>
                </div>
                <div class="our-contact-details">
                  <i class="fa-solid fa-phone"></i>
                  <a href="tel:+14698122083">Phone</a>
                </div>
                <div class="our-contact-details">
                  <i class="far fa-alarm-clock"></i>
                  <a href="javascript:;" class="triggerModal">Quick Query</a>
                </div>
                <div class="our-contact-details">
                  <i class="far fa-envelope"></i>
                  <a href="mailto:info@classhelpusa.com">Send Email</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="lower-header">
        <div class="container">
          <div class="row">
				<!-- Custom Navbar -->
                <nav class="navbar navbar-expand-lg navbar-light">
                    <div class="container-fluid">
                        <a class="navbar-brand" href="https://www.classhelpusa.com">
                            <div class="custom-logo">
                                <img src="https://www.classhelpusa.com/assets/images/Logo.png" alt="Class Help USA">
                            </div>
                        </a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#customNavbarNav" aria-controls="customNavbarNav" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        
                        <div class="collapse navbar-collapse" id="customNavbarNav">
                            <ul class="navbar-nav custom-navbar-nav">
                                <li class="nav-item custom-nav-item">
                                    <a class="nav-link custom-nav-link active" aria-current="page" href="https://www.classhelpusa.com">Home</a>
                                </li>
                                
                                <!-- About Custom Dropdown -->
                                <!-- <li class="nav-item custom-nav-item custom-dropdown">
                                    <a class="nav-link custom-nav-link custom-dropdown-toggle" href="https://www.classhelpusa.com/about-us" id="customAboutDropdown" role="button" aria-expanded="false">
                                        About
                                    </a>
                                    <ul class="dropdown-menu custom-dropdown-menu" aria-labelledby="customAboutDropdown">
                                        <li><a class="dropdown-item custom-dropdown-item" href="https://www.classhelpusa.com/profile">Profile</a></li>
                                        <li><a class="dropdown-item custom-dropdown-item" href="https://www.classhelpusa.com/our-team">Our Team</a></li>
                                        <li><a class="dropdown-item custom-dropdown-item" href="https://www.classhelpusa.com/work-module">Work Module</a></li>
                                        <li><a class="dropdown-item custom-dropdown-item" href="https://www.classhelpusa.com/why-us">Why Us</a></li>
                                    </ul>
                                </li> -->

                              <li class="nav-item custom-nav-item custom-dropdown">
                                <!-- About link -->
                                <a class="nav-link custom-nav-link" href="https://www.classhelpusa.com/about-us" id="customAboutDropdown">
                                    About
                                </a>

                                <!-- Chevron toggle -->
                                <span class="custom-dropdown-toggle-icon"></span>

                                <ul class="dropdown-menu custom-dropdown-menu" aria-labelledby="customAboutDropdown">
                                    <li><a class="dropdown-item custom-dropdown-item" href="https://www.classhelpusa.com/profile">Profile</a></li>
                                    <li><a class="dropdown-item custom-dropdown-item" href="https://www.classhelpusa.com/our-team">Our Team</a></li>
                                    <li><a class="dropdown-item custom-dropdown-item" href="https://www.classhelpusa.com/work-module">Work Module</a></li>
                                    <li><a class="dropdown-item custom-dropdown-item" href="https://www.classhelpusa.com/why-us">Why Us</a></li>
                                </ul>
                            </li>


                                <!-- Services Custom Dropdown with BOTH Hover AND Click Behavior -->
                                <li class="nav-item custom-nav-item custom-dropdown" id="customServicesDropdownContainer">
                                    <a class="nav-link custom-nav-link custom-dropdown-toggle" href="#" id="customServicesDropdown" role="button" aria-expanded="false">
                                        Services 
                                    </a>
                                    <ul class="dropdown-menu custom-dropdown-menu" aria-labelledby="customServicesDropdown">
                                      
                                        <li class="custom-dropdown-submenu">
    <!-- Parent link (always navigates) -->
                                              <a class="dropdown-item custom-dropdown-item" href="online-class-help">
                                                  Online Class Help
                                              </a>

                                              <!-- Chevron for submenu toggle -->
                                              <span class="custom-submenu-toggle-icon-sub"></span>
                                            
                                            <ul class="dropdown-menu custom-dropdown-menu custom-submenu-dropdowns ">
                                                <li><a class="dropdown-item custom-dropdown-item" href="https://www.classhelpusa.com/accounting-class-help">Accounting Class Help</a></li>
                                                <li><a class="dropdown-item custom-dropdown-item" href="https://www.classhelpusa.com/anatomy-class-help">Anatomy Class Help</a></li>
                                                <li><a class="dropdown-item custom-dropdown-item" href="https://www.classhelpusa.com/algebra-class-help">Algebra Class Help</a></li>
                                                <li><a class="dropdown-item custom-dropdown-item" href="https://www.classhelpusa.com/astrophysics-class-help">Astrophysics Class Help</a></li>
                                                <li><a class="dropdown-item custom-dropdown-item" href="https://www.classhelpusa.com/thermodynamics-class-help">Accounting Class Help</a></li>
                                                <li><a class="dropdown-item custom-dropdown-item" href="https://www.classhelpusa.com/architecture-class-help">Architecture Class Help</a></li>
                                                <li><a class="dropdown-item custom-dropdown-item" href="https://www.classhelpusa.com/astronomy-class-help">Astronomy Class Help</a></li>
                                                <li><a class="dropdown-item custom-dropdown-item" href="https://www.classhelpusa.com/biomedical-class-help">Biomedical Class Help</a></li>
                                                <li><a class="dropdown-item custom-dropdown-item" href="https://www.classhelpusa.com/business-class-help">Business Class Help</a></li>
                                                <li><a class="dropdown-item custom-dropdown-item" href="https://www.classhelpusa.com/biology-class-help">Biology Class Help</a></li>
                                                <li><a class="dropdown-item custom-dropdown-item" href="https://www.classhelpusa.com/chemistry-class-help">Chemistry Class Help</a></li>
                                                <li><a class="dropdown-item custom-dropdown-item" href="https://www.classhelpusa.com/coding-class-help">Coding Class Help</a></li>
                                                <li><a class="dropdown-item custom-dropdown-item" href="https://www.classhelpusa.com/calculus-class-help">Calculus Class Help</a></li>
                                                <li><a class="dropdown-item custom-dropdown-item" href="https://www.classhelpusa.com/dentistry-class-help">Dentistry Class Help</a></li>
                                                <li><a class="dropdown-item custom-dropdown-item" href="https://www.classhelpusa.com/data-science-class-help">Data Science Class Help</a></li>
                                                <li><a class="dropdown-item custom-dropdown-item" href="https://www.classhelpusa.com/economics-class-help">Economics Class Help</a></li>
                                                <li><a class="dropdown-item custom-dropdown-item" href="https://www.classhelpusa.com/engineering-class-help">Engineering Class Help</a></li>
                                                <li><a class="dropdown-item custom-dropdown-item" href="https://www.classhelpusa.com/english-literature-class-help">English Literature Class Help</a></li>
                                                <li><a class="dropdown-item custom-dropdown-item" href="https://www.classhelpusa.com/finance-class-help">Finance Class Help</a></li>
                                                <li><a class="dropdown-item custom-dropdown-item" href="https://www.classhelpusa.com/history-class-help">History Class Help</a></li>
                                                <li><a class="dropdown-item custom-dropdown-item" href="https://www.classhelpusa.com/law-class-help">Law Class Help</a></li>
                                                <li><a class="dropdown-item custom-dropdown-item" href="https://www.classhelpusa.com/marketing-class-help">Marketing Class Help</a></li>
                                                <li><a class="dropdown-item custom-dropdown-item" href="https://www.classhelpusa.com/management-class-help">Management Class Help</a></li>
                                                <li><a class="dropdown-item custom-dropdown-item" href="https://www.classhelpusa.com/medicine-class-help">Medicine Class Help</a></li>
                                                <li><a class="dropdown-item custom-dropdown-item" href="https://www.classhelpusa.com/math-class-help">Math Class Help</a></li>
                                                <li><a class="dropdown-item custom-dropdown-item" href="https://www.classhelpusa.com/nursing-class-help">Nursing Class Help</a></li>
                                                <li><a class="dropdown-item custom-dropdown-item" href="https://www.classhelpusa.com/programming-class-help">Programming Class Help</a></li>
                                                <li><a class="dropdown-item custom-dropdown-item" href="https://www.classhelpusa.com/pharmacy-class-help">Pharmacy Class Help</a></li>
                                                <li><a class="dropdown-item custom-dropdown-item" href="https://www.classhelpusa.com/physics-class-help">Physics Class Help</a></li>
                                                <li><a class="dropdown-item custom-dropdown-item" href="https://www.classhelpusa.com/psychology-class-help">Psychology Class Help</a></li>
                                                <li><a class="dropdown-item custom-dropdown-item" href="https://www.classhelpusa.com/python-class-help">Python Class Help</a></li>
                                                <li><a class="dropdown-item custom-dropdown-item" href="https://www.classhelpusa.com/science-class-help">Science Class Help</a></li>
                                                <li><a class="dropdown-item custom-dropdown-item" href="https://www.classhelpusa.com/statistics-class-help">Statistics Class Help</a></li>
                                                <li><a class="dropdown-item custom-dropdown-item" href="https://www.classhelpusa.com/linguistic-class-help">Linguistic Class Help</a></li>
                                                <li><a class="dropdown-item custom-dropdown-item" href="https://www.classhelpusa.com/thermodynamics-class-help">Thermodynamics Class Help</a></li> 
                                            </ul>
                                        </li>
                                        <li class="custom-dropdown-submenu">
                                            <a class="dropdown-item custom-dropdown-item" href="online-course-help">Online Course Help</a>
                                            <span class="custom-submenu-toggle-icon-sub"></span>
                                            <ul class="dropdown-menu custom-dropdown-menu custom-submenu-dropdowns">
                                                <li><a class="dropdown-item custom-dropdown-item" href="https://www.classhelpusa.com/edgenuity-course-help">Edgenuity Course Help</a></li>
                                                <li><a class="dropdown-item custom-dropdown-item" href="https://www.classhelpusa.com/pearson-course-help">Pearson Course Help</a></li>
                                                <li><a class="dropdown-item custom-dropdown-item" href="https://www.classhelpusa.com/online-course-help">Online Course Help</a></li>
                                                <li><a class="dropdown-item custom-dropdown-item" href="https://www.classhelpusa.com/cpma-course-help">CPMA Course Help</a></li>
                                                <li><a class="dropdown-item custom-dropdown-item" href="https://www.classhelpusa.com/sophia-course-help">Sophia Course Help</a></li>
                                                <li><a class="dropdown-item custom-dropdown-item" href="https://www.classhelpusa.com/cipd-course-help">CIPD Course Help</a></li>
                                                <li><a class="dropdown-item custom-dropdown-item" href="https://www.classhelpusa.com/ged-course-help">GED Course Help</a></li>
                                                <li><a class="dropdown-item custom-dropdown-item" href="https://www.classhelpusa.com/gre-course-help">GRE Course Help</a></li>
                                                <li><a class="dropdown-item custom-dropdown-item" href="https://www.classhelpusa.com/ati-teas-course-help">ATI TEAS Course Help</a></li>
                                                <li><a class="dropdown-item custom-dropdown-item" href="https://www.classhelpusa.com/aleks-course-help">Aleks Course Help</a></li>
                                                <li><a class="dropdown-item custom-dropdown-item" href="https://www.classhelpusa.com/edx-course-help">Edx Course Help</a></li>
                                                <li><a class="dropdown-item custom-dropdown-item" href="https://www.classhelpusa.com/insurance-course-help">Insurance Course Help</a></li>
                                                <li><a class="dropdown-item custom-dropdown-item" href="https://www.classhelpusa.com/eppp-course-help">EPPP Course Help</a></li>
                                                <li><a class="dropdown-item custom-dropdown-item" href="https://www.classhelpusa.com/mpje-course-help">MPJE Course Help</a></li>
                                                <li><a class="dropdown-item custom-dropdown-item" href="https://www.classhelpusa.com/neplex-course-help">NEPLEX Course Help</a></li>
                                                <li><a class="dropdown-item custom-dropdown-item" href="https://www.classhelpusa.com/cisa-course-help">CISA Course Help</a></li>
                                                <li><a class="dropdown-item custom-dropdown-item" href="https://www.classhelpusa.com/cism-course-help">CISM Course Help</a></li>
                                                <li><a class="dropdown-item custom-dropdown-item" href="https://www.classhelpusa.com/ccsp-course-help">CCSP Course Help</a></li>
                                                <li><a class="dropdown-item custom-dropdown-item" href="https://www.classhelpusa.com/six-sigma-course-help">Six Sigma Course Help</a></li>
                                                <li><a class="dropdown-item custom-dropdown-item" href="https://www.classhelpusa.com/hesi-a2-course-help">HESI A2 Course Help</a></li>
                                                <li><a class="dropdown-item custom-dropdown-item" href="https://www.classhelpusa.com/praxis-course-help">PRAXIS Course Help</a></li>
                                                <li><a class="dropdown-item custom-dropdown-item" href="https://www.classhelpusa.com/nclex-course-help">NCLEX Course Help</a></li>
                                                <li><a class="dropdown-item custom-dropdown-item" href="https://www.classhelpusa.com/phr-course-help">PHR Course Help</a></li>
                                                <li><a class="dropdown-item custom-dropdown-item" href="https://www.classhelpusa.com/shrm-course-help">SHRM Course Help</a></li>
                                                <li><a class="dropdown-item custom-dropdown-item" href="https://www.classhelpusa.com/cplp-course-help">CPLP Course Help</a></li>
                                                <li><a class="dropdown-item custom-dropdown-item" href="https://www.classhelpusa.com/cqe-course-help">CQE Course Help</a></li>
                                                <li><a class="dropdown-item custom-dropdown-item" href="https://www.classhelpusa.com/eit-course-help">EIT Course Help</a></li>
                                                <li><a class="dropdown-item custom-dropdown-item" href="https://www.classhelpusa.com/fe-course-help">FE Course Help</a></li>
                                                <li><a class="dropdown-item custom-dropdown-item" href="https://www.classhelpusa.com/pe-course-help">PE Course Help</a></li>
                                                <li><a class="dropdown-item custom-dropdown-item" href="https://www.classhelpusa.com/cfa-course-help">CFA Course Help</a></li>
                                                <li><a class="dropdown-item custom-dropdown-item" href="https://www.classhelpusa.com/csm-course-help">CSM Course Help</a></li>
                                                <li><a class="dropdown-item custom-dropdown-item" href="https://www.classhelpusa.com/pmp-course-help">PMP Course Help</a></li>
                                                <li><a class="dropdown-item custom-dropdown-item" href="https://www.classhelpusa.com/capm-course-help">CAPM Course Help</a></li>
                                                <li><a class="dropdown-item custom-dropdown-item" href="https://www.classhelpusa.com/dele-course-help">DELE Course Help</a></li>
                                                <li><a class="dropdown-item custom-dropdown-item" href="https://www.classhelpusa.com/cpt-course-help">CPT Course Help</a></li>
                                                <li><a class="dropdown-item custom-dropdown-item" href="https://www.classhelpusa.com/chs-course-help">CHS Course Help</a></li>
                                                <li><a class="dropdown-item custom-dropdown-item" href="https://www.classhelpusa.com/texes-course-help">TExES Course Help</a></li>
                                                <li><a class="dropdown-item custom-dropdown-item" href="https://www.classhelpusa.com/cset-course-help">CSET Course Help</a></li>
                                                <li><a class="dropdown-item custom-dropdown-item" href="https://www.classhelpusa.com/comlex-course-help">COMLEX Course Help</a></li>
                                                <li><a class="dropdown-item custom-dropdown-item" href="https://www.classhelpusa.com/lsat-course-help">LSAT Course Help</a></li>
                                                <li><a class="dropdown-item custom-dropdown-item" href="https://www.classhelpusa.com/cbap-course-help">CBAP Course Help</a></li>
                                                <li><a class="dropdown-item custom-dropdown-item" href="https://www.classhelpusa.com/cscp-course-help">CSCP Course Help</a></li>
                                            
                                            </ul>
                                        </li>
                                        <li><a class="dropdown-item custom-dropdown-item" href="https://www.classhelpusa.com/online-exam-help">Online Exam Help</a></li>
                                        <li><a class="dropdown-item custom-dropdown-item" href="https://www.classhelpusa.com/take-my-class">Take My Online Class</a></li>
                                        <li><a class="dropdown-item custom-dropdown-item" href="https://www.classhelpusa.com/take-my-course">Take My Online Course</a></li>
                                        <li><a class="dropdown-item custom-dropdown-item" href="https://www.classhelpusa.com/online-class-professionals">Online Class Professionals</a></li>
                                        <li><a class="dropdown-item custom-dropdown-item" href="https://www.classhelpusa.com/online-classroom-help">Online Classroom Help</a></li>
                                        <li><a class="dropdown-item custom-dropdown-item" href="https://www.classhelpusa.com/university-class-help">University Class Help</a></li>
                                        <li><a class="dropdown-item custom-dropdown-item" href="https://www.classhelpusa.com/college-class-help">College Course Help</a></li>
                                        
                                    </ul>
                                </li>
                                
                                <li class="nav-item custom-nav-item">
                                    <a class="nav-link custom-nav-link" href="https://www.classhelpusa.com/countries">Countries</a>
                                </li>
                                <li class="nav-item custom-nav-item">
                                    <a class="nav-link custom-nav-link" href="https://www.classhelpusa.com/blog">Blog</a>
                                </li>
                                <li class="nav-item custom-nav-item">
                                    <a class="nav-link custom-nav-link" href="https://www.classhelpusa.com/contact-us">Contact Us</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
          </div>
        </div>
      </div>
      
    </header>