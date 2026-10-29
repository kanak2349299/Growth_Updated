<!DOCTYPE html>
<html lang="en">

<head>
    <?php include 'includes/head.php' ?>
    <title>CSRD Compliance — Audit-Ready European Sustainability Reporting | Growth Investment & Development</title>
    <style>
        .fw-page-enter {
            animation: fwSlideUp 0.6s cubic-bezier(0.22, 1, 0.36, 1) forwards;
        }
        @keyframes fwSlideUp {
            from { opacity: 0; transform: translateY(35px); }
            to { opacity: 1; transform: translateY(0); }
        }
        .fw-hero {
            background: linear-gradient(135deg, #02140d 0%, #062319 50%, #093b2c 100%);
            padding: 130px 0 70px;
            color: #ffffff;
            position: relative;
            overflow: hidden;
        }
        .fw-hero::before {
            content: '';
            position: absolute;
            top: -30%;
            right: -15%;
            width: 550px;
            height: 550px;
            background: radial-gradient(circle, rgba(0,230,118,0.12) 0%, transparent 70%);
            border-radius: 50%;
            pointer-events: none;
        }
        .fw-hero::after {
            content: '';
            position: absolute;
            bottom: -20%;
            left: -10%;
            width: 450px;
            height: 450px;
            background: radial-gradient(circle, rgba(0,176,255,0.06) 0%, transparent 70%);
            border-radius: 50%;
            pointer-events: none;
        }
        .fw-hero-badge {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            background: rgba(0,230,118,0.12);
            border: 1px solid rgba(0,230,118,0.3);
            border-radius: 999px;
            padding: 7px 18px;
            font-size: 11.5px;
            font-weight: 800;
            color: #00E676;
            margin-bottom: 22px;
            letter-spacing: 0.08em;
            text-transform: uppercase;
        }
        .fw-hero h1 {
            font-size: 2.85rem;
            font-weight: 900;
            line-height: 1.15;
            margin-bottom: 20px;
            color: #ffffff;
        }
        .fw-hero h1 span {
            color: #00E676;
        }
        .fw-hero-desc {
            font-size: 1.15rem;
            color: #b3cdc2;
            max-width: 620px;
            line-height: 1.7;
            margin-bottom: 28px;
        }
        .fw-hero-cta {
            display: inline-flex;
            align-items: center;
            gap: 10px;
            background: #00E676;
            color: #031c13;
            font-weight: 800;
            padding: 14px 34px;
            border-radius: 12px;
            text-decoration: none;
            font-size: 15px;
            transition: all 0.3s ease;
            box-shadow: 0 10px 28px rgba(0,230,118,0.28);
        }
        .fw-hero-cta:hover {
            background: #00ff88;
            transform: translateY(-2px);
            box-shadow: 0 14px 36px rgba(0,230,118,0.4);
            color: #031c13;
        }
        .fw-hero-cta-secondary {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            background: rgba(255,255,255,0.08);
            border: 1.5px solid rgba(255,255,255,0.2);
            color: #ffffff;
            font-weight: 700;
            padding: 14px 28px;
            border-radius: 12px;
            text-decoration: none;
            font-size: 14.5px;
            transition: all 0.3s ease;
            margin-left: 12px;
        }
        .fw-hero-cta-secondary:hover {
            background: rgba(255,255,255,0.15);
            color: #00E676;
            border-color: #00E676;
        }
        .fw-section {
            padding: 85px 0;
        }
        .fw-section-alt {
            background: #f5f9f7;
        }
        .fw-section-title {
            font-size: 2.3rem;
            font-weight: 850;
            color: #062319;
            margin-bottom: 16px;
            letter-spacing: -0.02em;
        }
        .fw-section-subtitle {
            color: #55796b;
            font-size: 1.08rem;
            max-width: 720px;
            line-height: 1.65;
            margin: 0 auto 48px;
        }
        .fw-feature-card {
            background: #ffffff;
            border: 1.5px solid #e1eee8;
            border-radius: 18px;
            padding: 34px 28px;
            height: 100%;
            transition: all 0.35s ease;
            box-shadow: 0 6px 20px rgba(6,35,25,0.03);
        }
        .fw-feature-card:hover {
            transform: translateY(-6px);
            box-shadow: 0 20px 45px rgba(6,35,25,0.1);
            border-color: #00E676;
        }
        .fw-feature-icon {
            width: 58px;
            height: 58px;
            background: linear-gradient(135deg, #e8f7ee, #d0f0de);
            border-radius: 16px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 24px;
            margin-bottom: 20px;
        }
        .fw-feature-card h4 {
            font-size: 1.2rem;
            font-weight: 800;
            color: #062319;
            margin-bottom: 12px;
        }
        .fw-feature-card p {
            color: #55796b;
            font-size: 0.95rem;
            line-height: 1.65;
            margin-bottom: 0;
        }
        .fw-steps-section {
            background: #02140d;
            padding: 90px 0;
            color: #ffffff;
            position: relative;
        }
        .fw-step-item {
            display: flex;
            gap: 24px;
            margin-bottom: 34px;
            padding: 20px 24px;
            background: rgba(255,255,255,0.02);
            border: 1px solid rgba(0,230,118,0.15);
            border-radius: 16px;
            transition: all 0.3s ease;
        }
        .fw-step-item:hover {
            background: rgba(0,230,118,0.05);
            border-color: rgba(0,230,118,0.4);
            transform: translateX(6px);
        }
        .fw-step-number {
            width: 48px;
            height: 48px;
            min-width: 48px;
            background: rgba(0,230,118,0.15);
            border: 2px solid #00E676;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 900;
            font-size: 19px;
            color: #00E676;
        }
        .fw-step-content h4 {
            font-weight: 800;
            font-size: 1.15rem;
            color: #ffffff;
            margin-bottom: 6px;
        }
        .fw-step-content p {
            color: #a4c7b8;
            font-size: 0.95rem;
            line-height: 1.6;
            margin-bottom: 0;
        }
        .fw-cta-banner {
            background: linear-gradient(135deg, #00E676 0%, #00c853 100%);
            padding: 65px 0;
            text-align: center;
            color: #031c13;
        }
        .fw-cta-banner h2 {
            font-size: 2.2rem;
            font-weight: 900;
            color: #031c13;
            margin-bottom: 12px;
        }
        .fw-cta-banner p {
            font-size: 1.12rem;
            color: #073523;
            max-width: 650px;
            margin: 0 auto 28px;
        }
        .fw-cta-btn-dark {
            display: inline-flex;
            align-items: center;
            gap: 10px;
            background: #031c13;
            color: #ffffff;
            font-weight: 800;
            padding: 15px 38px;
            border-radius: 12px;
            text-decoration: none;
            font-size: 15px;
            transition: all 0.3s ease;
            box-shadow: 0 10px 30px rgba(3,28,19,0.3);
        }
        .fw-cta-btn-dark:hover {
            background: #000000;
            color: #00E676;
            transform: translateY(-2px);
            box-shadow: 0 15px 40px rgba(3,28,19,0.45);
        }
    </style>
</head>

<body class="home-solar">
    <?php include 'includes/header.php' ?>

    <main class="fw-page-enter">
        <!-- Hero Section -->
        <section class="fw-hero">
            <div class="container position-relative" style="z-index:2;">
                <div class="row align-items-center">
                    <div class="col-lg-8">
                        <div class="fw-hero-badge">
                            <span class="growpilot-spark">✦</span>
                            <span>EU DIRECTIVE • ESRS COMPLIANCE FOR GLOBAL ENTERPRISES</span>
                        </div>
                        <h1>CSRD Compliance — <span>Audit-Ready European Sustainability Reporting</span></h1>
                        <p class="fw-hero-desc">Prepare your organization for the EU Corporate Sustainability Reporting Directive (CSRD) and European Sustainability Reporting Standards (ESRS). Growth delivers double materiality assessments, automated data architecture, and digital XBRL tagging.</p>
                        <div class="d-flex align-items-center flex-wrap gap-2">
                            <a href="<?php echo base_url('contact') ?>" class="fw-hero-cta">
                                <span>Prepare for CSRD Compliance</span>
                                <i class="fas fa-arrow-right"></i>
                            </a>
                            <a href="#how-it-works" class="fw-hero-cta-secondary">
                                <span>Explore Methodology</span>
                                <i class="fas fa-chevron-down"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Stats Ticker -->
                <div class="row mt-5 pt-3">
                        <div class="col-6 col-md-3 mb-3">
                            <div class="p-3 rounded-3 text-center" style="background:rgba(255,255,255,0.06); border:1px solid rgba(0,230,118,0.25);">
                                <div style="font-size:2rem; font-weight:900; color:#00E676; line-height:1.1;">12</div>
                                <div style="font-size:12px; color:#cbe3d9; font-weight:600; margin-top:6px;">ESRS Standards Covered</div>
                            </div>
                        </div>                        <div class="col-6 col-md-3 mb-3">
                            <div class="p-3 rounded-3 text-center" style="background:rgba(255,255,255,0.06); border:1px solid rgba(0,230,118,0.25);">
                                <div style="font-size:2rem; font-weight:900; color:#00E676; line-height:1.1;">1,000+</div>
                                <div style="font-size:12px; color:#cbe3d9; font-weight:600; margin-top:6px;">Audit-Ready Datapoints</div>
                            </div>
                        </div>                        <div class="col-6 col-md-3 mb-3">
                            <div class="p-3 rounded-3 text-center" style="background:rgba(255,255,255,0.06); border:1px solid rgba(0,230,118,0.25);">
                                <div style="font-size:2rem; font-weight:900; color:#00E676; line-height:1.1;">XBRL</div>
                                <div style="font-size:12px; color:#cbe3d9; font-weight:600; margin-top:6px;">Native ESEF Tagging</div>
                            </div>
                        </div>                        <div class="col-6 col-md-3 mb-3">
                            <div class="p-3 rounded-3 text-center" style="background:rgba(255,255,255,0.06); border:1px solid rgba(0,230,118,0.25);">
                                <div style="font-size:2rem; font-weight:900; color:#00E676; line-height:1.1;">Big 4</div>
                                <div style="font-size:12px; color:#cbe3d9; font-weight:600; margin-top:6px;">Pre-Assurance Validation</div>
                            </div>
                        </div>
                </div>
            </div>
        </section>

        <!-- Overview Section -->
        <section class="fw-section">
            <div class="container text-center">
                <span style="font-size:12px; font-weight:800; color:#00a352; text-transform:uppercase; letter-spacing:0.1em;">
                    FRAMEWORK ARCHITECTURE &bull; GROWTH SUITE
                </span>
                <h2 class="fw-section-title mt-2">The Most Comprehensive Sustainability Regulation in History</h2>
                <p class="fw-section-subtitle">CSRD affects not only European enterprises but any global enterprise with significant EU subsidiaries, turnover (€150M+), or European supply chain relationships. Covering 12 ESRS standards spanning climate, pollution, workforce, and business conduct, compliance demands robust data governance and mandatory third-party assurance.</p>

                <!-- Features Grid -->
                <div class="row text-start mt-4">
                        <div class="col-lg-4 col-md-6 mb-4">
                            <div class="fw-feature-card">
                                <div class="fw-feature-icon">
                                    <i class="fas fa-arrows-alt-h" style="color:#00E676;"></i>
                                </div>
                                <h4>Double Materiality Assessment</h4>
                                <p>Simultaneously assess impact materiality (inside-out effect on people & planet) and financial materiality (outside-in risk to enterprise value).</p>
                            </div>
                        </div>                        <div class="col-lg-4 col-md-6 mb-4">
                            <div class="fw-feature-card">
                                <div class="fw-feature-icon">
                                    <i class="fas fa-th-list" style="color:#00E676;"></i>
                                </div>
                                <h4>12 ESRS Standards Coverage</h4>
                                <p>Full data mapping across ESRS 1 & 2 (cross-cutting) and ESRS E1-E5 (environmental), S1-S4 (social), and G1 (governance).</p>
                            </div>
                        </div>                        <div class="col-lg-4 col-md-6 mb-4">
                            <div class="fw-feature-card">
                                <div class="fw-feature-icon">
                                    <i class="fas fa-search" style="color:#00E676;"></i>
                                </div>
                                <h4>Granular Gap Analysis</h4>
                                <p>Evaluate current data maturity against 1,000+ potential CSRD datapoints, surfacing gaps before statutory auditor scrutiny.</p>
                            </div>
                        </div>                        <div class="col-lg-4 col-md-6 mb-4">
                            <div class="fw-feature-card">
                                <div class="fw-feature-icon">
                                    <i class="fas fa-code" style="color:#00E676;"></i>
                                </div>
                                <h4>Digital Tagging (ESEF / XBRL)</h4>
                                <p>Tag all narrative and quantitative disclosures in machine-readable XBRL format ready for the European Single Access Point (ESAP).</p>
                            </div>
                        </div>                        <div class="col-lg-4 col-md-6 mb-4">
                            <div class="fw-feature-card">
                                <div class="fw-feature-icon">
                                    <i class="fas fa-network-wired" style="color:#00E676;"></i>
                                </div>
                                <h4>Value Chain Data Architecture</h4>
                                <p>Engage upstream and downstream value chain partners with automated data collection templates tailored to non-EU suppliers.</p>
                            </div>
                        </div>                        <div class="col-lg-4 col-md-6 mb-4">
                            <div class="fw-feature-card">
                                <div class="fw-feature-icon">
                                    <i class="fas fa-certificate" style="color:#00E676;"></i>
                                </div>
                                <h4>Limited & Reasonable Assurance Ready</h4>
                                <p>Pre-audit documentation, internal controls, and data lineage tracking engineered specifically for Big 4 assurance standards.</p>
                            </div>
                        </div>
                </div>
            </div>
        </section>

        <!-- Implementation Steps (Dark Section) -->
        <section class="fw-steps-section" id="how-it-works">
            <div class="container">
                <div class="row align-items-center mb-5">
                    <div class="col-lg-8">
                        <span style="font-size:12px; font-weight:800; color:#00E676; text-transform:uppercase; letter-spacing:0.1em;">
                            STEP-BY-STEP ADVISORY WORKFLOW
                        </span>
                        <h2 style="font-size:2.2rem; font-weight:900; color:#ffffff; margin-top:8px;">
                            How Growth Deploys This Framework In Your Organization
                        </h2>
                    </div>
                    <div class="col-lg-4 text-lg-end mt-3 mt-lg-0">
                        <a href="<?php echo base_url('contact') ?>" class="btn-greenly" style="padding:10px 22px; font-size:13.5px;">
                            <span>Speak to an ESG Advisor</span> <i class="fas fa-user-tie ms-1"></i>
                        </a>
                    </div>
                </div>

                <div class="row justify-content-center">
                    <div class="col-lg-10">
                        <div class="fw-step-item">
                            <div class="fw-step-number">1</div>
                            <div class="fw-step-content">
                                <h4>Step 1: Scoping & Group Entity Perimeter</h4>
                                <p>Determine group applicability timelines (2024-2028), subsidiary thresholds, and EU consolidation requirements.</p>
                            </div>
                        </div>                        <div class="fw-step-item">
                            <div class="fw-step-number">2</div>
                            <div class="fw-step-content">
                                <h4>Step 2: Double Materiality Assessment (DMA)</h4>
                                <p>Engage internal & external stakeholders to score impacts, risks, and opportunities (IROs) using rigorous threshold scoring.</p>
                            </div>
                        </div>                        <div class="fw-step-item">
                            <div class="fw-step-number">3</div>
                            <div class="fw-step-content">
                                <h4>Step 3: ESRS Datapoint Gap Analysis</h4>
                                <p>Map existing ERP and ESG metrics against mandatory and material ESRS disclosures, identifying missing data.</p>
                            </div>
                        </div>                        <div class="fw-step-item">
                            <div class="fw-step-number">4</div>
                            <div class="fw-step-content">
                                <h4>Step 4: Data Collection & Internal Control System (ICS)</h4>
                                <p>Implement structured data governance, audit trails, and automated calculation models across all operational units.</p>
                            </div>
                        </div>                        <div class="fw-step-item">
                            <div class="fw-step-number">5</div>
                            <div class="fw-step-content">
                                <h4>Step 5: Report Synthesis, XBRL Tagging & Pre-Assurance</h4>
                                <p>Generate the integrated CSRD report within your management report, apply digital XBRL tags, and facilitate auditor sign-off.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Call to Action Banner -->
        <section class="fw-cta-banner">
            <div class="container">
                <h2>Accelerate Your ESG Compliance with Growth</h2>
                <p>Join top organizations across Oman, Saudi Arabia, the UAE, and global markets leveraging Growth's proven sustainability and carbon accounting suite.</p>
                <a href="<?php echo base_url('contact') ?>" class="fw-cta-btn-dark">
                    <span>Prepare for CSRD Compliance</span>
                    <i class="fas fa-arrow-right"></i>
                </a>
            </div>
        </section>
    </main>

    <?php include 'includes/footer.php' ?>
    <?php include 'includes/footerjs.php' ?>
</body>

</html>