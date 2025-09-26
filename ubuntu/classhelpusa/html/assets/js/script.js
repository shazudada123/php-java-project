// import 'bootstrap-icons/font/bootstrap-icons.css';
// import { faUser } from "@fortawesome/pro-solid-svg-icons";


jQuery(".hero-slider").slick({
  dots: false,
  infinite: true,
  arrows: false,
  autoplay: true,
  autoplaySpeed: 5000,
  speed: 500,
  slidesToShow: 1,
  slidesToScroll: 1,
  prevArrow:
    '<button type="button" class="slick-prev hero-prev custom-prev"><i class="fas fa-caret-left"></i></button>',
  nextArrow:
    '<button type="button" class="slick-next hero-next custom-next"><i class="fas fa-caret-right"></i></button>',
  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
        infinite: true,
        dots: false,
      },
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false,
      },
    },
    {
      breakpoint: 767,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false,
      },
    },
    // You can unslick at a given breakpoint now by adding:
    // settings: "unslick"
    // instead of a settings object
  ],
});
jQuery(".running-projects").slick({
  dots: false,
  infinite: true,
  arrows: true,
  autoplay: true,
  autoplaySpeed: 2000,
  speed: 300,
  slidesToShow: 4,
  slidesToScroll: 1,
  prevArrow:
    '<button type="button" class="slick-prev custom-prev"><i class="fas fa-caret-left"></i></button>',
  nextArrow:
    '<button type="button" class="slick-next custom-next"><i class="fas fa-caret-right"></i></button>',
  responsive: [
    {
      breakpoint: 1025,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 1,
        infinite: true,
        dots: false,
      },
    },
    {
      breakpoint: 769,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1,
        arrows: false,
      },
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false,
      },
    },
    // You can unslick at a given breakpoint now by adding:
    // settings: "unslick"
    // instead of a settings object
  ],
});
jQuery(".country-base-projects").slick({
  dots: false,
  infinite: true,
  arrows: true,
  autoplay: true,
  autoplaySpeed: 2000,
  speed: 300,
  slidesToShow: 4,
  slidesToScroll: 1,
  prevArrow:
    '<button type="button" class="slick-prev custom-prev"><i class="fas fa-caret-left"></i></button>',
  nextArrow:
    '<button type="button" class="slick-next custom-next"><i class="fas fa-caret-right"></i></button>',
  responsive: [
    {
      breakpoint: 1025,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 1,
        infinite: true,
        dots: false,
      },
    },
    {
      breakpoint: 769,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1,
        arrows: false,
      },
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false,
      },
    },
    // You can unslick at a given breakpoint now by adding:
    // settings: "unslick"
    // instead of a settings object
  ],
});
//   responsive Headers
jQuery(".open-menu").click(function () {
  jQuery(".responsive-menu").addClass("active");
});
jQuery(".menu-close").click(function () {
  jQuery(".responsive-menu").removeClass("active");
});

jQuery(".responsive-links ul li").click(function () {
  jQuery(this).children("ul").slideToggle();
});


// // Focus the input when the modal is shown
// document.getElementById('exampleModal').addEventListener('shown.bs.modal', function () {
//     document.getElementById('myInput').focus();
// });


jQuery(document).ready(function() {
    jQuery('#readMoreBtn').click(function(e) {
        e.preventDefault();

        var readMoreDiv = jQuery('.read-more');

        if (readMoreDiv.is(':visible')) {
            // Slide up the content
            readMoreDiv.slideUp(500);
        } else {
            // Slide down the content
            readMoreDiv.stop(true, true).slideDown(500);
        }
    });
});

$(document).ready(function() {
    // When the form is submitted
    $('#banner-form').on('submit', function(e) {
        e.preventDefault();  // Prevent the default form submission

        // Get the reCAPTCHA response
        var captchaResponse = grecaptcha.getResponse();

        // Check if CAPTCHA is solved
        if (captchaResponse.length === 0) {
            alert("Please complete the CAPTCHA!");
            return false;
        }

        // Create an object for form data
        var formData = {
            'fullName': $('#full-name').val(),
            'email': $('#email-address').val(),
            'phone': $('#phone-number').val(),
            'subject': $('#subject').val(),
            'message': $('#message').val(),
            'g-recaptcha-response': captchaResponse  // Include the CAPTCHA response
        };

        // Use jQuery AJAX to send the form data to your server for processing
        $.ajax({
            url: 'your-server-endpoint.php',  // Your server endpoint for handling form submissions
            type: 'POST',
            data: formData,
            success: function(response) {
                // Handle success (show a message or redirect)
                alert("Form submitted successfully!");
            },
            error: function() {
                // Handle error (show a message or log error)
                alert("There was an error submitting the form.");
            }
        });
    });
});

function showModal() {
    const myModal = new bootstrap.Modal(document.getElementById('exampleModal'));
    myModal.show();
}
    // Show modal on page load
    window.onload = function() {
        showModal();
    };
// Event listener for when the modal is hidden
document.getElementById('exampleModal').addEventListener('hidden.bs.modal', function() {
    // Set a timeout to show the modal again after 1 minute
    setTimeout(() => {
        showModal();
    }, 120000); // 60000 milliseconds = 1 minute
});
const modalButtons = document.getElementsByClassName('triggerModal');

// Add event listeners to all buttons with the class
Array.from(modalButtons).forEach(button => {
    button.addEventListener('click', function() {
        showModal();
    });
});



$("#load_more").click(function(){
  $("#hide-review").css("display", "block");
  $(".load-more-button-reviews").css("display", "none");
  $("#load_more_1").css("display", "inline-block");
});

$(document).ready(function() {
  // Function to handle showing and hiding elements
  function loadMore(revealId, hideId, nextButtonId) {
    $(revealId).css("display", "block");
    $(hideId).css("display", "none");
    if (nextButtonId) {
      $(nextButtonId).css("display", "inline-block");
    }
  }

  // Attach click handlers to all load more buttons from 1 to 844
  for (let i = 1; i <= 76; i++) {
    const loadMoreButton = $(`#load_more_${i}`);
    const revealId = `#hide-review-${i}`;
    const nextButtonId = (i < 76) ? `#load_more_${i + 1}` : null;

    if (loadMoreButton.length) { // Check if the button exists
      loadMoreButton.click(function() {
        //console.log(`Button clicked: #load_more_${i}`); // Debugging line
        loadMore(revealId, loadMoreButton, nextButtonId);
      });
    }
  }

  // Special case for the last button
  const lastButton = $("#load_more_76");
  if (lastButton.length) { // Check if the button exists
    lastButton.click(function(){
      //console.log(`Button clicked: #load_more_844`); // Debugging line
      $("#hide-review-76").css("display", "block");
      lastButton.css("display", "none");
    });
  }
});




//navbar

document.addEventListener('DOMContentLoaded', function() {
    const allCustomDropdowns = document.querySelectorAll('.custom-nav-item.custom-dropdown');
    
    allCustomDropdowns.forEach(function(dropdown) {
        const toggle = dropdown.querySelector('.custom-nav-link.custom-dropdown-toggle');
        
        if (toggle) {
            // Click event for ALL custom dropdowns
            toggle.addEventListener('click', function(e) {
                e.preventDefault();
                e.stopPropagation();
                
                // Check if screen is mobile or desktop
                const isMobile = window.innerWidth < 992;
                
                // Check current state
                const isShowClass = dropdown.classList.contains('custom-show');
                
                // Close all other custom dropdowns first
                allCustomDropdowns.forEach(function(otherDropdown) {
                    if (otherDropdown !== dropdown) {
                        otherDropdown.classList.remove('custom-show', 'custom-clicked-closed');
                        const otherToggle = otherDropdown.querySelector('.custom-nav-link.custom-dropdown-toggle');
                        if (otherToggle) {
                            otherToggle.setAttribute('aria-expanded', 'false');
                        }
                    }
                });
                
                if (isMobile) {
                    // Mobile: simple toggle - close if already open
                    if (isShowClass) {
                        dropdown.classList.remove('custom-show');
                        toggle.setAttribute('aria-expanded', 'false');
                    } else {
                        dropdown.classList.add('custom-show');
                        toggle.setAttribute('aria-expanded', 'true');
                    }
                } else {
                    // Desktop: handle hover vs click states
                    const isClickedClosed = dropdown.classList.contains('custom-clicked-closed');
                    
                    if (isShowClass || !isClickedClosed) {
                        // If currently showing (via hover or click), close it
                        dropdown.classList.add('custom-clicked-closed');
                        dropdown.classList.remove('custom-show');
                        toggle.setAttribute('aria-expanded', 'false');
                    } else {
                        // If clicked closed, open it
                        dropdown.classList.remove('custom-clicked-closed');
                        dropdown.classList.add('custom-show');
                        toggle.setAttribute('aria-expanded', 'true');
                    }
                }
            });
            
            // Desktop hover behavior
            if (window.innerWidth >= 992) {
                dropdown.addEventListener('mouseenter', function() {
                    if (!dropdown.classList.contains('custom-clicked-closed')) {
                        dropdown.classList.add('custom-show');
                        toggle.setAttribute('aria-expanded', 'true');
                    }
                });

                dropdown.addEventListener('mouseleave', function() {
                    if (!dropdown.classList.contains('custom-clicked-closed')) {
                        dropdown.classList.remove('custom-show');
                        toggle.setAttribute('aria-expanded', 'false');
                    }
                });
            }
        }
    });
 
        
    // Close custom dropdowns when clicking outside
    document.addEventListener('click', function(e) {
        const clickedDropdown = e.target.closest('.custom-nav-item.custom-dropdown');
        if (!clickedDropdown) {
            allCustomDropdowns.forEach(function(dropdown) {
                dropdown.classList.remove('custom-show', 'custom-clicked-closed');
                const toggle = dropdown.querySelector('.custom-nav-link.custom-dropdown-toggle');
                if (toggle) {
                    toggle.setAttribute('aria-expanded', 'false');
                }
            });
        }
    });
    
    // Close custom dropdown on ESC key
    document.addEventListener('keydown', function(e) {
        if (e.key === 'Escape') {
            allCustomDropdowns.forEach(function(dropdown) {
                dropdown.classList.remove('custom-show', 'custom-clicked-closed');
                const toggle = dropdown.querySelector('.custom-nav-link.custom-dropdown-toggle');
                if (toggle) {
                    toggle.setAttribute('aria-expanded', 'false');
                }
            });
        }
    });

    // Handle window resize to adjust behavior
    window.addEventListener('resize', function() {
        if (window.innerWidth < 992) {
            // Mobile: remove hover-based show states and clicked-closed states
            allCustomDropdowns.forEach(function(dropdown) {
                dropdown.classList.remove('custom-clicked-closed');
                if (!dropdown.classList.contains('custom-show')) {
                    const toggle = dropdown.querySelector('.custom-nav-link.custom-dropdown-toggle');
                    if (toggle) {
                        toggle.setAttribute('aria-expanded', 'false');
                    }
                }
            });
        }
    });
});


document.addEventListener("DOMContentLoaded", function () {
    document.querySelectorAll(".custom-dropdown-toggle-icon").forEach(function (toggle) {
        toggle.addEventListener("click", function (e) {
            e.preventDefault();
            e.stopPropagation();

            let parent = toggle.closest(".custom-dropdown");
            let menu = parent.querySelector(".custom-dropdown-menu");

            // Close other open dropdowns
            document.querySelectorAll(".custom-dropdown.show").forEach(function (open) {
                if (open !== parent) {
                    open.classList.remove("show");
                    open.querySelector(".custom-dropdown-menu").classList.remove("show");
                }
            });

            // Toggle current dropdown
            parent.classList.toggle("show");
            menu.classList.toggle("show");
        });
    });
});




// document.addEventListener("DOMContentLoaded", function () {
//     // Toggle main dropdowns
//     document.querySelectorAll(".custom-dropdown-toggle-icon-sub").forEach(function (toggle) {
//         toggle.addEventListener("click", function (e) {
//             e.preventDefault();
//             e.stopPropagation();

//             let parent = toggle.closest(".custom-dropdown");
//             let menu = parent.querySelector(".custom-dropdown-menu");

//             parent.classList.toggle("show");
//             menu.classList.toggle("show");
//         });
//     });

//     // Toggle inner submenus
//     document.querySelectorAll(".custom-submenu-toggle-icon-sub").forEach(function (toggle) {
//         toggle.addEventListener("click", function (e) {
//             e.preventDefault();
//             e.stopPropagation();

//             let parent = toggle.closest(".custom-dropdown-submenu");
//             let submenu = parent.querySelector(".custom-submenu-dropdowns");

//             parent.classList.toggle("show");
//             submenu.classList.toggle("show");
//         });
//     });
// });


// document.addEventListener("DOMContentLoaded", function () {
//   // sabhi submenu toggles lo
//   const submenuToggles = document.querySelectorAll(".custom-dropdown-submenu > .custom-submenu-toggle-icon-sub");

//   submenuToggles.forEach(toggle => {
//     toggle.addEventListener("click", function (e) {
//       e.preventDefault();
//       e.stopPropagation();

//       // parent li lo
//       const parent = this.closest(".custom-dropdown-submenu");
//       const submenu = parent.querySelector(".custom-submenu-dropdowns");

//       // toggle class
//       submenu.classList.toggle("show");
//     });
//   });
// });


document.addEventListener("DOMContentLoaded", function () {
  // 🔹 Toggle main dropdowns (Services, About, etc.)
  document.querySelectorAll(".custom-dropdown-toggle-icon-sub").forEach(function (toggle) {
    toggle.addEventListener("click", function (e) {
      e.preventDefault();
      e.stopPropagation();

      let parent = toggle.closest(".custom-dropdown");
      let menu = parent.querySelector(".custom-dropdown-menu");

      parent.classList.toggle("show");
      menu.classList.toggle("show");
    });
  });

  // 🔹 Toggle inner submenus (Online Class Help, etc.)
  document.querySelectorAll(".custom-submenu-toggle-icon-sub").forEach(function (toggle) {
    toggle.addEventListener("click", function (e) {
      e.preventDefault();
      e.stopPropagation();

      let parent = toggle.closest(".custom-dropdown-submenu");
      let submenu = parent.querySelector(".custom-submenu-dropdowns");

      parent.classList.toggle("show");
      submenu.classList.toggle("show");

      // (Optional) chevron rotate kare
      toggle.classList.toggle("active");
    });
  });
  });
