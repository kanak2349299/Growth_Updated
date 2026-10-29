<!DOCTYPE html>
<html lang="en">
<head>
    <?php include 'includes/head.php' ?>
    <title>ESG Clinic &amp; Diagnostic Advisory | Growth</title>
    <style>
        .clinic-hero { background: linear-gradient(135deg, #02140d 0%, #062319 60%, #0a3d2e 100%); padding: 120px 0 65px; color:#fff; }
        .clinic-card { background:#fff; border:1.5px solid #e1eee8; border-radius:18px; padding:32px; box-shadow:0 12px 35px rgba(6,35,25,0.05); height:100%; }
        .clinic-icon { width:52px; height:52px; background:#e8f7ee; color:#00a854; border-radius:12px; display:flex; align-items:center; justify-content:center; font-size:22px; margin-bottom:18px; }
    </style>
</head>
<body class="home-solar">
    <?php include 'includes/header.php' ?>

    <main>
        <section class="clinic-hero text-center">
            <div class="container">
                <span class="badge" style="background:#00E676; color:#031c13; font-weight:800; padding:6px 16px; border-radius:99px; margin-bottom:16px;">
                    ✦ GROWTH ESG CLINIC
                </span>
                <h1 style="font-size:clamp(2.2rem, 3.8vw, 3rem); font-weight:900; margin-bottom:16px;">
                    One-on-One ESG Advisory &amp; Compliance Clinic
                </h1>
                <p style="color:#c2dfd2; font-size:16px; max-width:680px; margin:0 auto 28px;">
                    Book a dedicated 45-minute clinical diagnostic with Growth’s senior sustainability and energy auditors in Muscat. Review your compliance gaps, Scope 1-3 footprint, and board ESG disclosures.
                </p>
                <a href="<?php echo base_url('contact') ?>" class="btn-greenly" style="padding:14px 34px; font-size:15px; border-radius:12px;">
                    <span>Schedule Free Clinic Session</span> <i class="fas fa-calendar-check ms-2"></i>
                </a>
            </div>
        </section>

        <section class="py-5" style="background:#f7faf8;">
            <div class="container py-4">
                <div class="text-center mb-5">
                    <span style="font-size:12px; font-weight:800; color:#00a352; text-transform:uppercase; letter-spacing:0.1em;">CLINIC SERVICE MODULES</span>
                    <h2 style="font-size:2.2rem; font-weight:900; color:#062319; margin-top:6px;">What We Diagnose in the ESG Clinic</h2>
                </div>

                <div class="row g-4">
                    <div class="col-lg-4 col-md-6">
                        <div class="clinic-card">
                            <div class="clinic-icon"><i class="fas fa-leaf"></i></div>
                            <h4 style="font-weight:800; color:#062319; font-size:1.2rem;">Scope 1, 2 &amp; 3 Verification</h4>
                            <p style="color:#55796b; font-size:14px; line-height:1.65;">Review your activity data collection protocols, utility bills, and calculation methodologies against ISO 14064 standards.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="clinic-card">
                            <div class="clinic-icon"><i class="fas fa-file-contract"></i></div>
                            <h4 style="font-weight:800; color:#062319; font-size:1.2rem;">MSX &amp; CMA Disclosure Audit</h4>
                            <p style="color:#55796b; font-size:14px; line-height:1.65;">Ensure your annual report meets Muscat Stock Exchange 30 core ESG metrics and Oman Vision 2040 net-zero targets.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="clinic-card">
                            <div class="clinic-icon"><i class="fas fa-bolt"></i></div>
                            <h4 style="font-weight:800; color:#062319; font-size:1.2rem;">Energy Audit &amp; Solar ROI</h4>
                            <p style="color:#55796b; font-size:14px; line-height:1.65;">Estimate immediately realizable electricity savings, HVAC optimization, and on-site rooftop solar feasibility.</p>
                        </div>
                    </div>
                </div>

                <div class="mt-5 p-4 rounded-4 text-center" style="background:#ffffff; border:1.5px solid #dce8e1;">
                    <h3 style="font-weight:800; color:#062319; margin-bottom:8px;">Ready for your clinic diagnosis?</h3>
                    <p style="color:#55796b; margin-bottom:20px;">Advisory slots are complimentary for GCC corporate leaders and listed enterprise executives.</p>
                    <a href="<?php echo base_url('contact') ?>" class="btn-greenly" style="padding:12px 30px;">Book Session Now</a>
                </div>
            </div>
        </section>
    </main>

    <?php include 'includes/footer.php' ?>
    <?php include 'includes/footerjs.php' ?>
</body>
</html>