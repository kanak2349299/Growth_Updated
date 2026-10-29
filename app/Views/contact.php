<!DOCTYPE html>
<html lang="en">
<head>
    <?php include 'includes/head.php' ?>
    <title>Request a Demo | Growth Investment & Development</title>
</head>
<body class="home-solar">
    <?php include 'includes/header.php' ?>

    <main class="request-demo-page" style="background:#f8fbf9; min-height:85vh; padding: 40px 0 80px;">
        <div class="container">
            <!-- Breadcrumb (Matches Image 3) -->
            <nav aria-label="breadcrumb" class="mb-4">
                <ol class="breadcrumb mb-0" style="font-size:13px; font-weight:600;">
                    <li class="breadcrumb-item"><a href="<?php echo base_url('') ?>" style="color:#556B62; text-decoration:none;" data-i18n="demo_breadcrumb_home">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page" style="color:#062319;"><span data-i18n="demo_breadcrumb_active">Schedule a Demo</span></li>
                </ol>
            </nav>

            <!-- Main Heading (Matches Image 3) -->
            <div class="text-center mb-5">
                <h1 style="font-size: clamp(2.3rem, 4vw, 3.2rem); font-weight:800; color:#062319; margin-bottom:12px;">
                    <span data-i18n="demo_title">Request a Demo</span>
                </h1>
                <p style="color:#556B62; font-size:16.5px; max-width:680px; margin:0 auto; line-height:1.6;">
                    <span data-i18n="demo_sub">See how Growth can help streamline your ESG reporting and sustainability management. Request a personalized demo with our team.</span>
                </p>
            </div>

            <div class="row g-5 align-items-start">
                <!-- Left Column: What you'll learn (Exact Image 3) -->
                <div class="col-lg-5">
                    <div class="pe-lg-4">
                        <h3 style="font-size:20px; font-weight:800; color:#062319; margin-bottom:24px;">
                            <span data-i18n="demo_learn_title">What you'll learn</span>
                        </h3>

                        <ul class="list-unstyled d-flex flex-column gap-3 mb-5">
                            <li class="d-flex align-items-start gap-3">
                                <span style="color:#00a854; font-size:18px; margin-top:-2px;">✓</span>
                                <span style="color:#334155; font-size:15px; line-height:1.5;"><span data-i18n="demo_learn_1">How to automate your GHG accounting and carbon footprint calculations</span></span>
                            </li>
                            <li class="d-flex align-items-start gap-3">
                                <span style="color:#00a854; font-size:18px; margin-top:-2px;">✓</span>
                                <span style="color:#334155; font-size:15px; line-height:1.5;"><span data-i18n="demo_learn_2">One-click sustainability reporting for BRSR, GRI, TCFD, CSRD, and more</span></span>
                            </li>
                            <li class="d-flex align-items-start gap-3">
                                <span style="color:#00a854; font-size:18px; margin-top:-2px;">✓</span>
                                <span style="color:#334155; font-size:15px; line-height:1.5;"><span data-i18n="demo_learn_3">AI-powered insights to identify emission reduction opportunities</span></span>
                            </li>
                            <li class="d-flex align-items-start gap-3">
                                <span style="color:#00a854; font-size:18px; margin-top:-2px;">✓</span>
                                <span style="color:#334155; font-size:15px; line-height:1.5;"><span data-i18n="demo_learn_4">Supply chain sustainability management and supplier engagement</span></span>
                            </li>
                            <li class="d-flex align-items-start gap-3">
                                <span style="color:#00a854; font-size:18px; margin-top:-2px;">✓</span>
                                <span style="color:#334155; font-size:15px; line-height:1.5;"><span data-i18n="demo_learn_5">How leading organizations are using Growth to meet their ESG goals</span></span>
                            </li>
                        </ul>

                        <!-- Trusted By Box -->
                        <div class="p-4 rounded-4" style="background:#ffffff; border:1px solid #e2ece6; box-shadow:0 10px 30px rgba(6,35,25,0.03);">
                            <div style="font-size:12px; font-weight:800; color:#556B62; text-transform:uppercase; letter-spacing:0.06em; margin-bottom:10px;">
                                <span data-i18n="demo_trusted_kicker">TRUSTED IN THE GCC &amp; GLOBALLY</span>
                            </div>
                            <p style="color:#062319; font-size:14px; font-weight:600; margin:0; line-height:1.6;">
                                <span data-i18n="demo_trusted_desc">Trusted by 500+ enterprises, industrial groups, and financial institutions across Oman, Saudi Arabia, the UAE, and India.</span>
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Right Column: Demo Request Form (Exact Image 3) -->
                <div class="col-lg-7">
                    <div class="p-4 p-md-5 rounded-4 shadow-sm" style="background:#ffffff; border:1px solid #e2ece6;">
                        <form id="requestDemoForm" onsubmit="handleDemoRequestSubmit(event)">
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <label class="form-label" style="font-size:13px; font-weight:700; color:#062319;"><span data-i18n="lbl_first_name">First Name *</span></label>
                                    <input type="text" name="first_name" id="demoFirstName" class="form-control" style="padding:10px 14px; border-radius:10px; border-color:#d4e3dc; font-size:14px;" placeholder="First name" required>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label" style="font-size:13px; font-weight:700; color:#062319;"><span data-i18n="lbl_last_name">Last Name *</span></label>
                                    <input type="text" name="last_name" id="demoLastName" class="form-control" style="padding:10px 14px; border-radius:10px; border-color:#d4e3dc; font-size:14px;" placeholder="Last name" required>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label" style="font-size:13px; font-weight:700; color:#062319;"><span data-i18n="lbl_email">Work Email *</span></label>
                                    <input type="email" name="email" id="demoEmail" class="form-control" style="padding:10px 14px; border-radius:10px; border-color:#d4e3dc; font-size:14px;" placeholder="name@company.com" required>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label" style="font-size:13px; font-weight:700; color:#062319;"><span data-i18n="lbl_company">Company Name *</span></label>
                                    <input type="text" name="organization" id="demoCompany" class="form-control" style="padding:10px 14px; border-radius:10px; border-color:#d4e3dc; font-size:14px;" placeholder="Company name" required>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label" style="font-size:13px; font-weight:700; color:#062319;"><span data-i18n="lbl_phone">Phone Number *</span></label>
                                    <input type="tel" name="phone" id="demoPhone" class="form-control" style="padding:10px 14px; border-radius:10px; border-color:#d4e3dc; font-size:14px;" placeholder="+968 9000 0000" required>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label" style="font-size:13px; font-weight:700; color:#062319;"><span data-i18n="lbl_job_title">Job Title *</span></label>
                                    <input type="text" name="job_title" id="demoJobTitle" class="form-control" style="padding:10px 14px; border-radius:10px; border-color:#d4e3dc; font-size:14px;" placeholder="e.g. Sustainability Director" required>
                                </div>
                                <div class="col-12">
                                    <label class="form-label" style="font-size:13px; font-weight:700; color:#062319;"><span data-i18n="lbl_seniority">Seniority Level</span></label>
                                    <select name="seniority" id="demoSeniority" class="form-select" style="padding:10px 14px; border-radius:10px; border-color:#d4e3dc; font-size:14px;">
                                        <option value="C-Level / Executive">C-Level / Executive (CEO, CFO, CSO)</option>
                                        <option value="VP / Director">VP / Director</option>
                                        <option value="Manager">Manager / Lead</option>
                                        <option value="Individual Contributor">Individual Contributor</option>
                                        <option value="Consultant">Consultant / External Auditor</option>
                                    </select>
                                </div>
                                <div class="col-12">
                                    <label class="form-label" style="font-size:13px; font-weight:700; color:#062319;"><span data-i18n="lbl_requirements">What are your primary sustainability requirements?</span></label>
                                    <textarea name="requirements" id="demoRequirements" class="form-control" rows="3" style="padding:10px 14px; border-radius:10px; border-color:#d4e3dc; font-size:14px;" placeholder="Tell us about your reporting goals, timelines, or emission scopes..."></textarea>
                                </div>
                                <div class="col-12">
                                    <label class="form-label" style="font-size:13px; font-weight:700; color:#062319;"><span data-i18n="lbl_referral">How did you hear about Growth?</span></label>
                                    <select name="referral" id="demoReferral" class="form-select" style="padding:10px 14px; border-radius:10px; border-color:#d4e3dc; font-size:14px;">
                                        <option value="Search Engine (Google / Bing)">Search Engine (Google / Bing)</option>
                                        <option value="Industry Event / Conference">Industry Event / Conference</option>
                                        <option value="Peer Recommendation / Referral">Peer Recommendation / Referral</option>
                                        <option value="LinkedIn">LinkedIn</option>
                                        <option value="Other">Other</option>
                                    </select>
                                </div>
                                <div class="col-12 mt-4">
                                    <button type="submit" id="requestDemoSubmitBtn" class="btn-greenly w-100" style="padding:14px; font-size:15px; border-radius:10px;">
                                        <span data-i18n="btn_submit_demo">Submit Demo Request</span> <i class="fas fa-arrow-right ms-2"></i>
                                    </button>
                                </div>
                            </div>

                            <!-- Success Banner -->
                            <div id="demoSuccessAlert" class="alert alert-success mt-4 p-3 rounded-3" style="display:none; background:#edf7f1; border-color:#b4e3c8; color:#065f46; font-size:14px; font-weight:600;">
                                <i class="fas fa-check-circle me-2"></i> Thank you! Your personalized demo request has been received. Our advisory team will reach out within 24 hours.
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <?php include 'includes/footer.php' ?>
    <?php include 'includes/footerjs.php' ?>

    <script>
    function handleDemoRequestSubmit(e) {
        e.preventDefault();
        var btn = document.getElementById('requestDemoSubmitBtn');
        var alert = document.getElementById('demoSuccessAlert');
        var fname = document.getElementById('demoFirstName').value.trim();
        var lname = document.getElementById('demoLastName').value.trim();
        var email = document.getElementById('demoEmail').value.trim();
        var company = document.getElementById('demoCompany').value.trim();
        var phone = document.getElementById('demoPhone').value.trim();
        var title = document.getElementById('demoJobTitle').value.trim();
        var reqs = document.getElementById('demoRequirements').value.trim();

        if (btn) {
            btn.innerHTML = '<i class="fas fa-spinner fa-spin me-2"></i> Submitting...';
            btn.disabled = true;
        }

        var formData = new FormData();
        formData.append('name', fname + ' ' + lname);
        formData.append('email', email);
        formData.append('phone', phone);
        formData.append('organization', company);
        formData.append('enquiryfor', 'Schedule Demo: ' + title + ' | ' + reqs);

        fetch('<?php echo base_url("submit-request-form") ?>', {
            method: 'POST',
            body: formData
        })
        .then(function(r) { return r.json(); })
        .then(function(data) {
            if (btn) {
                btn.innerHTML = '<i class="fas fa-check me-2"></i> Request Submitted';
                btn.style.background = '#00a854';
            }
            if (alert) {
                alert.style.display = 'block';
                alert.innerHTML = '<i class="fas fa-check-circle me-2"></i> ' + (data.message || 'Thank you! Your demo request has been submitted.');
            }
            document.getElementById('requestDemoForm').reset();
        })
        .catch(function() {
            if (btn) {
                btn.innerHTML = '<i class="fas fa-check me-2"></i> Request Received';
                btn.style.background = '#00a854';
            }
            if (alert) alert.style.display = 'block';
        });
    }
    </script>
</body>
</html>
