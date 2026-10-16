	<script src="<?php echo base_url('public/front/assets/js/jquery-3.6.0.min.js')?>"></script>
	<script src="<?php echo base_url('public/front/assets/js/bootstrap.bundle.min.js')?>"></script>
	<script src="<?php echo base_url('public/front/assets/js/jquery.appear.js')?>"></script>
	<script src="<?php echo base_url('public/front/assets/js/jquery.easing.min.js')?>"></script>
	<script src="<?php echo base_url('public/front/assets/js/jquery.magnific-popup.min.js')?>"></script>
	<script src="<?php echo base_url('public/front/assets/js/modernizr.custom.13711.js')?>"></script>
	<script src="<?php echo base_url('public/front/assets/js/swiper-bundle.min.js')?>"></script>
	<script src="<?php echo base_url('public/front/assets/js/wow.min.js')?>"></script>
	<script src="<?php echo base_url('public/front/assets/js/progress-bar.min.js')?>"></script>
	<script src="<?php echo base_url('public/front/assets/js/circle-progress.js')?>"></script>
	<script src="<?php echo base_url('public/front/assets/js/isotope.pkgd.min.js')?>"></script>
	<script src="<?php echo base_url('public/front/assets/js/imagesloaded.pkgd.min.js')?>"></script>
	<script src="<?php echo base_url('public/front/assets/js/jquery.nice-select.min.js')?>"></script>
	<script src="<?php echo base_url('public/front/assets/js/count-to.js')?>"></script>
	<script src="<?php echo base_url('public/front/assets/js/jquery.scrolla.min.js')?>"></script>
	<script src="<?php echo base_url('public/front/assets/js/YTPlayer.min.js')?>"></script>
	<script src="<?php echo base_url('public/front/assets/js/TweenMax.min.js')?>"></script>
	<script src="<?php echo base_url('public/front/assets/js/rangeSlider.min.js')?>"></script>
	<script src="<?php echo base_url('public/front/assets/js/jquery-ui.min.js')?>"></script>
	<script src="<?php echo base_url('public/front/assets/js/validnavs.js')?>"></script>
	<script src="<?php echo base_url('public/front/assets/js/main.js')?>"></script>
	
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" integrity="sha512-vKMx8UnXk60zUwyUnUPM3HbQo8QfmNx7+ltw8Pm5zLusl1XIfwcxo8DbWCqMGKaWeNxWA8yrx5v3SaVpMvR3CA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
	<script>
    function handleRequestForm() {
        var name = $('#name').val();
        var email = $('#email').val();
        var phone = $('#phone').val();
        var organization = $('#organization').val();
        var enquiryfor = $('#enquiryfor').val();
        var website = $('#website').val();
        
        // Check if website field is filled (possible spam check)
        if (website) {
            toastr.error('Something went wrong, try again later');
            return;
        }

        // Regular expressions for validation
        var emailPattern = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
        var phonePattern = /^\+?\d+$/; // Modify if needed for different formats

        // Check if all fields are filled
        if (!name || !email || !phone || !organization || !enquiryfor) {
            toastr.error('All fields are required');
            return;
        }

        // Email validation
        if (!emailPattern.test(email)) {
            toastr.error('Please enter a valid email address');
            return;
        }

        // Phone validation
        if (!phonePattern.test(phone)) {
            toastr.error('Please enter a valid phone number');
            return;
        }

        // Gather form data
        var formData = {
            name: name,
            email: email,
            phone: phone,
            organization: organization,
            enquiryfor: enquiryfor
        };

        // Send AJAX request
        $.ajax({
            url: '<?php echo base_url('submit-request-form') ?>', // Corrected the URL string closure
            type: 'POST',
            data: formData,
            dataType: 'json', // Expect JSON response from the server
            success: function(response) {
                // Handle the response from the server
                if (response.status == 1) {
                    toastr.success(response.message);
                    $('#requestForm')[0].reset(); // Reset form
                } else {
                    toastr.error(response.message);
                }
            },
            error: function(xhr, status, error) {
                // Handle errors
                toastr.error('Something went wrong, try again later');
            }
        });
    }
    function submitContactForm() {
        var name = $('#name').val();
        var email = $('#email').val();
        var phone = $('#phone').val();
        var message = $('#message').val();
        var website = $('#website').val();
        
        // Check if website field is filled (possible spam check)
        if (website) {
            toastr.error('Something went wrong, try again later');
            return;
        }

        // Regular expressions for validation
        var emailPattern = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
        var phonePattern = /^\+?\d+$/; // Modify if needed for different formats

        // Check if all fields are filled
        if (!name || !email || !phone || !message) {
            toastr.error('All fields are required');
            return;
        }

        // Email validation
        if (!emailPattern.test(email)) {
            toastr.error('Please enter a valid email address');
            return;
        }

        // Phone validation
        if (!phonePattern.test(phone)) {
            toastr.error('Please enter a valid phone number');
            return;
        }

        // Gather form data
        var formData = {
            name: name,
            email: email,
            phone: phone,
            message: message,
        };

        // Send AJAX request
        $.ajax({
            url: '<?php echo base_url('submit-contact-form') ?>', // Corrected the URL string closure
            type: 'POST',
            data: formData,
            dataType: 'json', // Expect JSON response from the server
            success: function(response) {
                // Handle the response from the server
                if (response.status == 1) {
                    toastr.success(response.message);
                    $('#contactForm')[0].reset(); // Reset form
                } else {
                    toastr.error(response.message);
                }
            },
            error: function(xhr, status, error) {
                // Handle errors
                toastr.error('Something went wrong, try again later');
            }
        });
    }
    function submitServiceForm() {
        var name = $('#name').val();
        var email = $('#email').val();
        var phone = $('#phone').val();
        var message = $('#message').val();
        var website = $('#website').val();
        var service = $('#service').val();
        
        // Check if website field is filled (possible spam check)
        if (website) {
            toastr.error('Something went wrong, try again later');
            return;
        }

        // Regular expressions for validation
        var emailPattern = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
        var phonePattern = /^\+?\d+$/; // Modify if needed for different formats

        // Check if all fields are filled
        if (!name || !email || !phone || !message) {
            toastr.error('All fields are required');
            return;
        }

        // Email validation
        if (!emailPattern.test(email)) {
            toastr.error('Please enter a valid email address');
            return;
        }

        // Phone validation
        if (!phonePattern.test(phone)) {
            toastr.error('Please enter a valid phone number');
            return;
        }

        // Gather form data
        var formData = {
            name: name,
            email: email,
            phone: phone,
            service: service,
            message: message,
        };

        // Send AJAX request
        $.ajax({
            url: '<?php echo base_url('submit-service-form') ?>', // Corrected the URL string closure
            type: 'POST',
            data: formData,
            dataType: 'json', // Expect JSON response from the server
            success: function(response) {
                // Handle the response from the server
                if (response.status == 1) {
                    toastr.success(response.message);
                    $('#serviceForm')[0].reset(); // Reset form
                } else {
                    toastr.error(response.message);
                }
            },
            error: function(xhr, status, error) {
                // Handle errors
                toastr.error('Something went wrong, try again later');
            }
        });
    }
    function submitNewsletterForm() {
        var email = $('#email1').val();
        // Regular expressions for validation
        var emailPattern = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;

        // Check if all fields are filled
        if (!email) {
            toastr.error('Please Enter Email address');
            return;
        }

        // Email validation
        if (!emailPattern.test(email)) {
            toastr.error('Please enter a valid email address');
            return;
        }

        // Gather form data
        var formData = {
            email: email,
        };

        // Send AJAX request
        $.ajax({
            url: '<?php echo base_url('submit-newsletter-form') ?>', // Corrected the URL string closure
            type: 'POST',
            data: formData,
            dataType: 'json', // Expect JSON response from the server
            success: function(response) {
                // Handle the response from the server
                if (response.status == 1) {
                    toastr.success(response.message);
                    $('#newsletterForm')[0].reset(); // Reset form
                } else {
                    toastr.error(response.message);
                }
            },
            error: function(xhr, status, error) {
                // Handle errors
                toastr.error('Something went wrong, try again later');
            }
        });
    }
    function submitCareerForm() {
        var name = $('#name').val();
        var email = $('#email').val();
        var phone = $('#phone').val();
        var website = $('#website').val();
         var resume = $('#resume')[0].files[0];
        // Check if website field is filled (possible spam check)
        if (website) {
            toastr.error('Something went wrong, try again later');
            return;
        }

        // Regular expressions for validation
        var emailPattern = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
        var phonePattern = /^\+?\d+$/; // Modify if needed for different formats

        // Check if all fields are filled
        if (!name || !email || !phone || !resume) {
            toastr.error('All fields are required');
            return;
        }

        // Email validation
        if (!emailPattern.test(email)) {
            toastr.error('Please enter a valid email address');
            return;
        }

        // Phone validation
        if (!phonePattern.test(phone)) {
            toastr.error('Please enter a valid phone number');
            return;
        }

        // Gather form data
        var formData = new FormData();
        formData.append('name', name);
        formData.append('email', email);
        formData.append('phone', phone);
        formData.append('resume', resume); // Add the file
        // Send AJAX request
        $.ajax({
            url: '<?php echo base_url('submit-career-form') ?>', // Corrected the URL string closure
            type: 'POST',
            data: formData,
            contentType: false, // Required for file uploads
            processData: false, // Required for file uploads
            dataType: 'json', // Expect JSON response from the server
            success: function(response) {
                // Handle the response from the server
                if (response.status == 1) {
                    toastr.success(response.message);
                    $('#careerForm')[0].reset(); // Reset form
                } else {
                    toastr.error(response.message);
                }
            },
            error: function(xhr, status, error) {
                // Handle errors
                toastr.error('Something went wrong, try again later');
            }
        });
    }
    </script>
