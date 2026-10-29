	<?php $frontAssetBase = ENVIRONMENT === 'development' ? 'front/assets/' : 'public/front/assets/'; ?>
	<script src="<?php echo base_url($frontAssetBase . 'js/jquery-3.6.0.min.js')?>"></script>
	<script src="<?php echo base_url($frontAssetBase . 'js/bootstrap.bundle.min.js')?>"></script>
	<script src="<?php echo base_url($frontAssetBase . 'js/jquery.appear.js')?>"></script>
	<script src="<?php echo base_url($frontAssetBase . 'js/jquery.easing.min.js')?>"></script>
	<script src="<?php echo base_url($frontAssetBase . 'js/jquery.magnific-popup.min.js')?>"></script>
	<script src="<?php echo base_url($frontAssetBase . 'js/modernizr.custom.13711.js')?>"></script>
	<script src="<?php echo base_url($frontAssetBase . 'js/swiper-bundle.min.js')?>"></script>
	<script src="<?php echo base_url($frontAssetBase . 'js/wow.min.js')?>"></script>
	<script src="<?php echo base_url($frontAssetBase . 'js/progress-bar.min.js')?>"></script>
	<script src="<?php echo base_url($frontAssetBase . 'js/circle-progress.js')?>"></script>
	<script src="<?php echo base_url($frontAssetBase . 'js/isotope.pkgd.min.js')?>"></script>
	<script src="<?php echo base_url($frontAssetBase . 'js/imagesloaded.pkgd.min.js')?>"></script>
	<script src="<?php echo base_url($frontAssetBase . 'js/jquery.nice-select.min.js')?>"></script>
	<script src="<?php echo base_url($frontAssetBase . 'js/count-to.js')?>"></script>
	<script src="<?php echo base_url($frontAssetBase . 'js/jquery.scrolla.min.js')?>"></script>
	<script src="<?php echo base_url($frontAssetBase . 'js/YTPlayer.min.js')?>"></script>
	<script src="<?php echo base_url($frontAssetBase . 'js/TweenMax.min.js')?>"></script>
	<script src="<?php echo base_url($frontAssetBase . 'js/rangeSlider.min.js')?>"></script>
	<script src="<?php echo base_url($frontAssetBase . 'js/jquery-ui.min.js')?>"></script>
	<script src="<?php echo base_url($frontAssetBase . 'js/validnavs.js')?>"></script>
	<script src="<?php echo base_url($frontAssetBase . 'js/main.js')?>"></script>
	
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

    const siteCountryData = {
        oman: {
            accent: '#0d6b58',
            short: 'OM',
            label: 'Oman',
            title: 'Growth strategy for Oman, GCC and export markets.',
            subtitle: 'Growth Investment & Development partners with organizations across Oman and the wider Gulf to deliver sustainability, governance and operational improvement strategies that create measurable value.',
            demoTitle: 'See how Growth can support your Oman sustainability and growth agenda.',
            demoSubtitle: 'We help Omani organizations improve ESG performance, reporting readiness, energy efficiency and operational resilience through practical, commercially grounded advisory.',
            globalHeading: 'Supported across the region',
            globalSubheading: 'Regional strategy, reporting and operational support for organizations building resilient growth in Oman and beyond.'
        },
        uae: {
            accent: '#146fa9',
            short: 'AE',
            label: 'UAE',
            title: 'Regional advisory for resilient, future-ready growth in the UAE.',
            subtitle: 'Growth helps UAE businesses strengthen sustainability governance, operational performance and strategic execution with practical ESG and value creation support.',
            demoTitle: 'See how Growth can accelerate your UAE sustainability roadmap.',
            demoSubtitle: 'We support organizations in the UAE with ESG readiness, energy efficiency, reporting and improvement programs designed to unlock sustainable growth.',
            globalHeading: 'Built for the Gulf growth agenda',
            globalSubheading: 'Practical sustainability and delivery support for organizations driving performance and resilience across the UAE market.'
        },
        saudi: {
            accent: '#58a66c',
            short: 'SA',
            label: 'Saudi Arabia',
            title: 'Sustainability and operational excellence for Saudi growth.',
            subtitle: 'Growth supports organizations in Saudi Arabia with ESG strategy, compliance preparation and operational improvement programs that improve business resilience.',
            demoTitle: 'See how Growth supports your Saudi sustainability and operational priorities.',
            demoSubtitle: 'We help leaders in Saudi Arabia align governance, reporting and efficiency improvements with practical delivery and measurable business outcomes.',
            globalHeading: 'Strategic support across the region',
            globalSubheading: 'Supporting transformation with ESG advisory, sustainability execution and operational improvement expertise across Saudi Arabia.'
        },
        qatar: {
            accent: '#b27831',
            short: 'QA',
            label: 'Qatar',
            title: 'Commercially grounded sustainability for Qatar-led growth.',
            subtitle: 'Growth supports Qatar-based organizations with practical ESG and operational strategies focused on efficiency, reporting and long-term business value.',
            demoTitle: 'See how Growth can align your Qatar strategy with measurable sustainability goals.',
            demoSubtitle: 'We work with organizations in Qatar to improve governance, reporting and operational decisions through practical sustainability execution.',
            globalHeading: 'Trusted across the GCC',
            globalSubheading: 'Helping organizations in Qatar move from strategy to implementation with clearer sustainability and operational priorities.'
        },
        turkey: {
            accent: '#2e70b6',
            short: 'TR',
            label: 'Turkey',
            title: 'Practical ESG and operational strategy for market growth in Turkey.',
            subtitle: 'Growth supports organizations in Turkey with sustainability planning, energy optimization and governance strategies designed for real commercial impact.',
            demoTitle: 'See how Growth can help shape your next sustainability and improvement agenda.',
            demoSubtitle: 'We support Turkish organizations with ESG readiness, energy performance and operational improvement programs rooted in regional execution and measurable value.',
            globalHeading: 'Regional support across markets',
            globalSubheading: 'Sustainability, governance and operational guidance designed to help organizations build resilient performance in Turkey.'
        }
    };

    const heroTitle = document.getElementById('heroTitle');
    const heroSubtitle = document.getElementById('heroSubtitle');
    const demoTitle = document.getElementById('demoTitle');
    const demoSubtitle = document.getElementById('demoSubtitle');
    const globalHeading = document.getElementById('globalHeading');
    const globalSubheading = document.getElementById('globalSubheading');
    const buttonFlag = document.querySelector('.country-selector-toggle .country-flag');
    const buttonLabel = document.querySelector('.country-selector-toggle .country-label');
    const selector = document.querySelector('.country-selector');
    const optionButtons = document.querySelectorAll('.country-option');
    const countryToggle = document.querySelector('.country-selector-toggle');
    const megaTriggers = document.querySelectorAll('.growth-mega-trigger');

    megaTriggers.forEach(function (trigger) {
        trigger.addEventListener('click', function () {
            const item = trigger.closest('.growth-mega-item');
            const willOpen = !item.classList.contains('open');

            document.querySelectorAll('.growth-mega-item').forEach(function (menuItem) {
                menuItem.classList.remove('open');
                const menuTrigger = menuItem.querySelector('.growth-mega-trigger');
                if (menuTrigger) {
                    menuTrigger.setAttribute('aria-expanded', 'false');
                }
            });

            if (willOpen) {
                item.classList.add('open');
                trigger.setAttribute('aria-expanded', 'true');
            }
        });
    });

    document.addEventListener('click', function (event) {
        if (!event.target.closest('.growth-mega-item')) {
            document.querySelectorAll('.growth-mega-item').forEach(function (item) {
                item.classList.remove('open');
                const trigger = item.querySelector('.growth-mega-trigger');
                if (trigger) {
                    trigger.setAttribute('aria-expanded', 'false');
                }
            });
        }
    });

    document.addEventListener('keydown', function (event) {
        if (event.key === 'Escape') {
            document.querySelectorAll('.growth-mega-item.open').forEach(function (item) {
                item.classList.remove('open');
                const trigger = item.querySelector('.growth-mega-trigger');
                if (trigger) {
                    trigger.setAttribute('aria-expanded', 'false');
                    trigger.focus();
                }
            });
        }
    });

    function applyCountry(countryKey) {
        const country = siteCountryData[countryKey] || siteCountryData.oman;
        document.documentElement.style.setProperty('--country-accent', country.accent);
        document.documentElement.style.setProperty('--country-accent-soft', country.accent + '1a');
        document.documentElement.style.setProperty('--country-accent-strong', country.accent + '2d');

        if (heroTitle) { heroTitle.textContent = country.title; }
        if (heroSubtitle) { heroSubtitle.textContent = country.subtitle; }
        if (demoTitle) { demoTitle.textContent = country.demoTitle; }
        if (demoSubtitle) { demoSubtitle.textContent = country.demoSubtitle; }
        if (globalHeading) { globalHeading.textContent = country.globalHeading; }
        if (globalSubheading) { globalSubheading.textContent = country.globalSubheading; }
        if (buttonFlag) { buttonFlag.textContent = country.short; }
        if (buttonLabel) { buttonLabel.textContent = country.label; }

        optionButtons.forEach(function (button) {
            button.classList.toggle('active', button.dataset.country === countryKey);
        });
    }

    countryToggle.addEventListener('click', function () {
        selector.classList.toggle('open');
    });

    optionButtons.forEach(function (button) {
        button.addEventListener('click', function () {
            applyCountry(button.dataset.country);
            selector.classList.remove('open');
        });
    });

    document.addEventListener('click', function (event) {
        if (selector && !event.target.closest('.country-selector')) {
            selector.classList.remove('open');
        }
    });

    const requestForm = document.getElementById('requestForm');
    if (requestForm) {
        requestForm.addEventListener('submit', function (event) {
            event.preventDefault();
            handleRequestForm();
        });
    }

    const growthDemoForm = document.getElementById('growthDemoForm');
    if (growthDemoForm) {
        growthDemoForm.addEventListener('submit', function (event) {
            event.preventDefault();
            const form = $(growthDemoForm);
            const submitButton = form.find('button[type="submit"]');
            const phone = form.find('[name="phone"]').val().trim();
            const email = form.find('[name="email"]').val().trim();
            const emailPattern = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
            const phonePattern = /^\+?[0-9\s()-]{7,20}$/;

            if (form.find('[name="website"]').val()) {
                toastr.error('Unable to submit this request.');
                return;
            }
            if (!emailPattern.test(email)) {
                toastr.error('Please enter a valid work email address.');
                form.find('[name="email"]').trigger('focus');
                return;
            }
            if (!phonePattern.test(phone)) {
                toastr.error('Please enter a valid phone number.');
                form.find('[name="phone"]').trigger('focus');
                return;
            }

            submitButton.prop('disabled', true).text('Sending…');
            $.ajax({
                url: '<?php echo base_url('submit-request-form') ?>',
                type: 'POST',
                data: form.serialize(),
                dataType: 'json'
            }).done(function (response) {
                if (response.status === 1) {
                    toastr.success(response.message);
                    growthDemoForm.reset();
                } else {
                    toastr.error(response.message || 'Your request could not be submitted. Please try again.');
                }
            }).fail(function () {
                toastr.error('Your request could not be sent. Please try again or contact Growth directly.');
            }).always(function () {
                submitButton.prop('disabled', false).text('Submit');
            });
        });
    }

    applyCountry('oman');

    // -------------------------------------------------------------
    // LIVE CARBON TICKER ANIMATION (Greenly Style)
    // -------------------------------------------------------------
    (function () {
        const counterEl = document.getElementById('liveCarbonCounter');
        if (counterEl) {
            let currentVal = 1480250;
            setInterval(function () {
                currentVal += Math.floor(Math.random() * 3) + 1;
                counterEl.textContent = new Intl.NumberFormat('en-US').format(currentVal);
            }, 3000);
        }
    })();

    // -------------------------------------------------------------
    // GROWPILOT FLOATING AI AGENT (Bottom-Right)
    // -------------------------------------------------------------
    window.toggleGrowPilotDrawer = function () {
        const drawer = document.getElementById('growpilotDrawer');
        if (drawer) {
            drawer.classList.toggle('open');
            if (drawer.classList.contains('open')) {
                const input = document.getElementById('growpilotInput');
                if (input) setTimeout(() => input.focus(), 250);
            }
        }
    };

    window.sendGrowpilotPrompt = function (text) {
        const input = document.getElementById('growpilotInput');
        if (input) {
            input.value = text;
            handleGrowpilotSubmit();
        }
    };

    window.handleGrowpilotSubmit = function () {
        const input = document.getElementById('growpilotInput');
        const messages = document.getElementById('growpilotMessages');
        if (!input || !messages) return;

        const query = input.value.trim();
        if (!query) return;

        // Append User Message
        const userMsg = document.createElement('div');
        userMsg.className = 'growpilot-msg user';
        userMsg.textContent = query;
        messages.appendChild(userMsg);
        input.value = '';
        messages.scrollTop = messages.scrollHeight;

        // Generate GrowPilot Response
        setTimeout(function () {
            const assistantMsg = document.createElement('div');
            assistantMsg.className = 'growpilot-msg assistant';

            const lower = query.toLowerCase();
            let replyHtml = '';

            if (lower.includes('energy') || lower.includes('bill') || lower.includes('saving') || lower.includes('audit')) {
                replyHtml = '⚡ <strong>Energy Savings & Audits:</strong><br>Our certified engineers conduct ASHRAE level audits across Oman and GCC, typically unlocking 15%–28% in utility bill reductions.<br><br>👉 <a href="<?php echo base_url('energy-management-audit-services') ?>" style="color:#0d6b58; font-weight:700;">Explore Energy Audits →</a> or use our <a href="<?php echo base_url('') ?>#energy-calculator" style="color:#0d6b58; font-weight:700;">Free Savings Calculator</a>.';
            } else if (lower.includes('esg') || lower.includes('compliance') || lower.includes('2026') || lower.includes('oman') || lower.includes('vision 2040')) {
                replyHtml = '📋 <strong>Oman & GCC ESG Compliance 2026:</strong><br>Under Oman Vision 2040 and Muscat Stock Exchange (MSX) disclosure guidelines, companies must disclose Scope 1 & 2 carbon metrics and governance criteria.<br><br>👉 <a href="<?php echo base_url('esg-compliance-services') ?>" style="color:#0d6b58; font-weight:700;">Read ESG Compliance Guide →</a>';
            } else if (lower.includes('carbon') || lower.includes('scope') || lower.includes('ghg') || lower.includes('net zero')) {
                replyHtml = '🌱 <strong>Carbon Assessment & Decarbonization:</strong><br>Growth provides end-to-end GHG Protocol Scope 1, 2 and 3 accounting, Product Life Cycle Analysis (LCA), and verified science-based targets.<br><br>👉 <a href="<?php echo base_url('sustainability-services') ?>" style="color:#0d6b58; font-weight:700;">View Sustainability Services →</a>';
            } else if (lower.includes('consultation') || lower.includes('demo') || lower.includes('contact') || lower.includes('book') || lower.includes('price')) {
                replyHtml = '📞 <strong>Book a Free 30-Min Consultation:</strong><br>Our named senior advisors in Muscat and Nagpur are ready to review your facilities and reporting goals.<br><br>👉 <a href="<?php echo base_url('contact') ?>" style="color:#0d6b58; font-weight:700;">Schedule Consultation Now →</a>';
            } else {
                replyHtml = 'Hello! I am <strong>GrowPilot</strong>, your AI ESG &amp; Sustainability co-pilot. I can guide you through:<br>• <strong>Carbon Assessment</strong> (Scope 1-3)<br>• <strong>Energy Audits</strong> in Oman & GCC<br>• <strong>Oman Vision 2040</strong> ESG Compliance<br>• <strong>Process Safety</strong> &amp; Lean Operations.<br><br>How can I assist your team today?';
            }

            assistantMsg.innerHTML = replyHtml;
            messages.appendChild(assistantMsg);
            messages.scrollTop = messages.scrollHeight;
        }, 400);
    };

    // -------------------------------------------------------------
    // OREN & GREENLY STYLE COUNTUP ANIMATION FOR ALL NUMBERS
    // -------------------------------------------------------------
    function animateCountUp(el, target, duration, suffix, prefix) {
        duration = duration || 1600;
        suffix = suffix || '';
        prefix = prefix || '';
        const start = 0;
        const startTime = performance.now();
        function update(currentTime) {
            const elapsed = currentTime - startTime;
            const progress = Math.min(elapsed / duration, 1);
            // Ease out cubic
            const easeOut = 1 - Math.pow(1 - progress, 3);
            const current = Math.floor(start + (target - start) * easeOut);
            el.textContent = prefix + new Intl.NumberFormat('en-US').format(current) + suffix;
            if (progress < 1) {
                requestAnimationFrame(update);
            } else {
                el.textContent = prefix + new Intl.NumberFormat('en-US').format(target) + suffix;
            }
        }
        requestAnimationFrame(update);
    }

    document.addEventListener('DOMContentLoaded', function () {
        const counterObserver = new IntersectionObserver(function (entries, observer) {
            entries.forEach(function (entry) {
                if (entry.isIntersecting) {
                    const el = entry.target;
                    const countAttr = el.getAttribute('data-count');
                    if (countAttr) {
                        const target = parseFloat(countAttr.replace(/,/g, ''));
                        const isPct = el.textContent.includes('%');
                        const isPlus = el.textContent.includes('+');
                        const suffix = isPct ? '%' : (isPlus ? '+' : '');
                        animateCountUp(el, target, 1600, suffix);
                        observer.unobserve(el);
                    }
                }
            });
        }, { threshold: 0.2 });

        document.querySelectorAll('[data-count]').forEach(function (el) {
            counterObserver.observe(el);
        });
    });
    </script>

    <!-- GrowPilot Floating Widget Component -->
    <div class="growpilot-widget" id="growpilotWidget">
        <button type="button" class="growpilot-toggle-btn" onclick="toggleGrowPilotDrawer()" aria-label="Open GrowPilot AI Assistant">
            <span class="growpilot-avatar">✦</span>
            <span class="growpilot-badge-text">GrowPilot</span>
            <span class="growpilot-status-dot"></span>
        </button>

        <div class="growpilot-drawer" id="growpilotDrawer">
            <div class="growpilot-drawer-header">
                <div class="growpilot-header-title">
                    <span class="growpilot-avatar" style="background:#00E676; color:#041a13;">✦</span>
                    <div>
                        <strong>GrowPilot ESG Suite</strong>
                        <small>AI Sustainability Co-pilot • Oman &amp; GCC</small>
                    </div>
                </div>
                <button type="button" class="growpilot-close-btn" onclick="toggleGrowPilotDrawer()" aria-label="Close GrowPilot">×</button>
            </div>

            <!-- Quick prompt chips -->
            <div class="growpilot-quick-prompts">
                <button type="button" class="growpilot-chip" onclick="sendGrowpilotPrompt('How to calculate energy savings in Oman?')">⚡ Energy Savings</button>
                <button type="button" class="growpilot-chip" onclick="sendGrowpilotPrompt('Oman ESG 2026 reporting requirements')">📋 ESG Compliance</button>
                <button type="button" class="growpilot-chip" onclick="sendGrowpilotPrompt('How does Scope 1-3 carbon assessment work?')">🌱 Carbon Scopes</button>
                <button type="button" class="growpilot-chip" onclick="sendGrowpilotPrompt('Book a free consultation')">📞 Book Demo</button>
            </div>

            <div class="growpilot-messages-body" id="growpilotMessages">
                <div class="growpilot-msg assistant">
                    Marhaban! I am <strong>GrowPilot</strong>, Growth's AI ESG &amp; Sustainability co-pilot. Ask me anything about carbon reporting, energy savings, or Oman Vision 2040 compliance!
                </div>
            </div>

            <form class="growpilot-form" onsubmit="event.preventDefault(); handleGrowpilotSubmit();">
                <input type="text" id="growpilotInput" class="growpilot-input" placeholder="Ask about ESG, energy audits, Oman regulations..." autocomplete="off">
                <button type="submit" class="growpilot-send-btn" aria-label="Send query">
                    <i class="fas fa-paper-plane"></i>
                </button>
            </form>
        </div>
    </div>

