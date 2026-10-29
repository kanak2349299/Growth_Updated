<!DOCTYPE html>
<html lang="en">
<head>
    <?php include 'includes/head.php' ?>
    <title>ESG Maturity Assessment Tool | Growth</title>
    <style>
        .mat-page-wrap { padding-top: 100px; background: #ffffff; min-height: 100vh; }
        .mat-hero { background: #f8fbf9; padding: 60px 0; border-bottom: 1px solid #e1eee8; }
        .mat-container { max-width: 900px; margin: 0 auto; padding: 50px 20px 80px; }
        .mat-opt-btn { background: #f4f8f6; border: 1.5px solid #d4e3dc; border-radius: 12px; padding: 18px 20px; cursor: pointer; transition: all 0.25s ease; text-align: left; width: 100%; display: flex; align-items: center; gap: 14px; }
        .mat-opt-btn:hover { border-color: #00E676; background: #edf7f2; transform: translateY(-2px); }
        .mat-opt-btn.selected { border-color: #00a854; background: #e8f7ee; box-shadow: 0 4px 15px rgba(0,168,84,0.15); }
    </style>
</head>
<body class="home-solar">
    <?php include 'includes/header.php' ?>

    <div class="mat-page-wrap">
        <section class="mat-hero">
            <div class="container text-center">
                <span class="badge" style="background:#e8f7ee; color:#008744; font-weight:800; padding:6px 14px; border-radius:99px; margin-bottom:14px;">
                    ✦ AI-POWERED READINESS DIAGNOSTIC
                </span>
                <h1 style="font-size: clamp(2.2rem, 3.8vw, 3rem); font-weight:900; color:#062319; margin-bottom:14px;">
                    ESG Maturity Assessment Tool
                </h1>
                <p style="color:#55796b; font-size:16px; max-width:680px; margin:0 auto;">
                    Evaluate your organization's Environmental, Social, and Governance maturity in under 5 minutes. Receive personalized scores, peer benchmarks, and an audit-ready compliance roadmap.
                </p>
            </div>
        </section>

        <div class="mat-container">
            <!-- Dynamic Assessment Card -->
            <div id="matCardWrap" class="p-4 p-md-5 rounded-4 shadow-sm" style="border:1.5px solid #e1eee8; background:#fff;">
                <div class="d-flex justify-content-between align-items-center mb-4 pb-3 border-bottom">
                    <div>
                        <span id="matPillarTag" style="font-size:12px; font-weight:800; color:#00a352; text-transform:uppercase; letter-spacing:0.08em;">
                            PILLAR 1: ENVIRONMENTAL EXCELLENCE
                        </span>
                        <h3 id="matQTitle" style="font-size:1.35rem; font-weight:800; color:#062319; margin-top:6px;">
                            How does your organization currently track greenhouse gas (GHG) emissions?
                        </h3>
                    </div>
                    <span id="matStepBadge" class="badge" style="background:#f4f8f6; color:#062319; border:1px solid #d4e3dc; padding:8px 14px; font-weight:700;">
                        Step 1 of 5
                    </span>
                </div>

                <!-- Radio Options List -->
                <div id="matOptionsBox" class="d-flex flex-column gap-3 mb-4">
                    <button type="button" class="mat-opt-btn" onclick="chooseMaturityOpt(0, 10, this)">
                        <input type="radio" name="mat_q" style="accent-color:#00a854;">
                        <div>
                            <strong style="color:#062319; display:block;">Ad-hoc / Spreadsheets</strong>
                            <span style="font-size:13px; color:#55796b;">Manual utility bill records with no standardized GHG protocol accounting.</span>
                        </div>
                    </button>
                    <button type="button" class="mat-opt-btn selected" onclick="chooseMaturityOpt(0, 50, this)">
                        <input type="radio" name="mat_q" checked style="accent-color:#00a854;">
                        <div>
                            <strong style="color:#062319; display:block;">Scope 1 &amp; Scope 2 Calculated</strong>
                            <span style="font-size:13px; color:#55796b;">Electricity and direct fuels calculated with localized GCC emission factors.</span>
                        </div>
                    </button>
                    <button type="button" class="mat-opt-btn" onclick="chooseMaturityOpt(0, 85, this)">
                        <input type="radio" name="mat_q" style="accent-color:#00a854;">
                        <div>
                            <strong style="color:#062319; display:block;">Comprehensive Scope 1-3 &amp; Decarbonization Roadmap</strong>
                            <span style="font-size:13px; color:#55796b;">Full value-chain emissions tracked with Science-Based Targets (SBTi/Oman 2040).</span>
                        </div>
                    </button>
                </div>

                <div class="d-flex justify-content-between align-items-center pt-3 border-top">
                    <button type="button" id="matBackBtn" class="btn btn-outline-secondary" style="font-weight:700; border-radius:10px; padding:10px 22px; display:none;" onclick="prevMaturityStep()">
                        ← Previous
                    </button>
                    <button type="button" id="matNextBtn" class="btn-greenly ms-auto" style="padding:12px 28px; font-size:14px; border-radius:10px;" onclick="nextMaturityStep()">
                        <span>Next Step</span> <i class="fas fa-arrow-right ms-2"></i>
                    </button>
                </div>
            </div>

            <!-- Result Box (Hidden initially) -->
            <div id="matResultBox" class="p-4 p-md-5 rounded-4 shadow-sm text-center" style="border:1.5px solid #00E676; background:#fafffd; display:none;">
                <div style="width:72px; height:72px; background:#e8f7ee; color:#00a854; border-radius:50%; display:flex; align-items:center; justify-content:center; font-size:32px; margin:0 auto 20px;">
                    ✓
                </div>
                <h2 style="font-weight:900; color:#062319; margin-bottom:10px;">Your ESG Maturity Score: <span id="matScoreVal" style="color:#00a854;">78 / 100</span></h2>
                <p style="color:#55796b; font-size:16px; max-width:620px; margin:0 auto 28px;">
                    <strong>Tier: Proactive Compliance (GCC Leader)</strong><br>
                    Your enterprise possesses solid Scope 1-2 accounting and governance policies, with priority opportunities in Supply Chain Scope 3 tracing and double materiality alignment.
                </p>
                <div class="d-flex justify-content-center gap-3 flex-wrap">
                    <a href="<?php echo base_url('contact') ?>" class="btn-greenly" style="padding:12px 30px; font-size:14.5px;">
                        <span>Download Full Audit Blueprint (PDF)</span> <i class="fas fa-download ms-2"></i>
                    </a>
                    <button type="button" class="btn btn-outline-dark" onclick="restartMaturity()" style="border-radius:10px; font-weight:700; padding:12px 24px;">
                        Retake Assessment
                    </button>
                </div>
            </div>
        </div>
    </div>

    <?php include 'includes/footer.php' ?>
    <?php include 'includes/footerjs.php' ?>

    <script>
    const matSteps = [
        {
            pillar: 'PILLAR 1: ENVIRONMENTAL EXCELLENCE',
            q: 'How does your organization currently track greenhouse gas (GHG) emissions?',
            opts: [
                { t: 'Ad-hoc / Spreadsheets', s: 'Manual records with no standard protocol.', pts: 20 },
                { t: 'Scope 1 & Scope 2 Calculated', s: 'Electricity and direct fuels calculated with localized GCC emission factors.', pts: 55 },
                { t: 'Comprehensive Scope 1-3 & Decarbonization Targets', s: 'Full value chain emissions verified by external auditor.', pts: 95 }
            ]
        },
        {
            pillar: 'PILLAR 2: ENERGY AUDITS & TRANSITION',
            q: 'What level of energy auditing has been performed at your primary facilities?',
            opts: [
                { t: 'No formal energy audits conducted to date', s: 'Utility expenses absorbed as general overhead.', pts: 15 },
                { t: 'ASHRAE Level 1 / Preliminary Energy Walkthrough', s: 'Key energy savings identified with estimated payback.', pts: 60 },
                { t: 'Detailed Investment-Grade Audit (ASHRAE Level 2/3) with Solar PV', s: 'Sub-metering and active continuous energy monitoring.', pts: 90 }
            ]
        },
        {
            pillar: 'PILLAR 3: SOCIAL RESPONSIBILITY & OMANISATION',
            q: 'How structured is your human capital and workforce sustainability program?',
            opts: [
                { t: 'Basic compliance with minimum labor standards', s: 'No dedicated ESG welfare charter.', pts: 30 },
                { t: 'Omanisation & diversity targets with structured safety KPIs', s: 'Continuous HSE training and low lost-time-injury record.', pts: 75 },
                { t: 'Benchmarked employer with supplier code of conduct enforcement', s: 'Audited across Tier-1 vendors with community impact programs.', pts: 95 }
            ]
        },
        {
            pillar: 'PILLAR 4: GOVERNANCE & REPORTING MANDATES',
            q: 'Which framework guides your current ESG governance and public disclosures?',
            opts: [
                { t: 'Internal management summary only', s: 'No formal public framework adopted.', pts: 25 },
                { t: 'MSX Oman / GRI Core / BRSR Alignment', s: 'Board-reviewed sustainability section in annual report.', pts: 80 },
                { t: 'Multi-Framework Assurance (GRI, TCFD, ISSB, CSRD)', s: 'Third-party assured with XBRL digital tagging.', pts: 98 }
            ]
        }
    ];

    let currentStep = 0;
    let scores = [55, 60, 75, 80];

    function renderMatStep() {
        const item = matSteps[currentStep];
        document.getElementById('matPillarTag').textContent = item.pillar;
        document.getElementById('matQTitle').textContent = item.q;
        document.getElementById('matStepBadge').textContent = 'Step ' + (currentStep + 1) + ' of ' + matSteps.length;
        document.getElementById('matBackBtn').style.display = (currentStep > 0) ? 'inline-block' : 'none';

        const box = document.getElementById('matOptionsBox');
        box.innerHTML = '';
        item.opts.forEach((o, idx) => {
            const btn = document.createElement('button');
            btn.type = 'button';
            btn.className = 'mat-opt-btn' + (idx === 1 ? ' selected' : '');
            btn.innerHTML = `
                <input type="radio" name="mat_q" ${idx === 1 ? 'checked' : ''} style="accent-color:#00a854;">
                <div>
                    <strong style="color:#062319; display:block;">${o.t}</strong>
                    <span style="font-size:13px; color:#55796b;">${o.s}</span>
                </div>
            `;
            btn.onclick = () => chooseMaturityOpt(currentStep, o.pts, btn);
            box.appendChild(btn);
        });

        if (currentStep === matSteps.length - 1) {
            document.getElementById('matNextBtn').innerHTML = '<span>Calculate Maturity Score</span> <i class="fas fa-check ms-2"></i>';
        } else {
            document.getElementById('matNextBtn').innerHTML = '<span>Next Step</span> <i class="fas fa-arrow-right ms-2"></i>';
        }
    }

    function chooseMaturityOpt(step, pts, el) {
        scores[step] = pts;
        document.querySelectorAll('.mat-opt-btn').forEach(b => {
            b.classList.remove('selected');
            const r = b.querySelector('input[type="radio"]');
            if (r) r.checked = false;
        });
        el.classList.add('selected');
        const radio = el.querySelector('input[type="radio"]');
        if (radio) radio.checked = true;
    }

    function nextMaturityStep() {
        if (currentStep < matSteps.length - 1) {
            currentStep++;
            renderMatStep();
        } else {
            // Show result
            const avg = Math.round(scores.reduce((a, b) => a + b, 0) / scores.length);
            document.getElementById('matCardWrap').style.display = 'none';
            const res = document.getElementById('matResultBox');
            res.style.display = 'block';
            document.getElementById('matScoreVal').textContent = avg + ' / 100';
        }
    }

    function prevMaturityStep() {
        if (currentStep > 0) {
            currentStep--;
            renderMatStep();
        }
    }

    function restartMaturity() {
        currentStep = 0;
        document.getElementById('matCardWrap').style.display = 'block';
        document.getElementById('matResultBox').style.display = 'none';
        renderMatStep();
    }
    </script>
</body>
</html>