<!DOCTYPE html>
<html lang="en">
<head>
    <?php include 'includes/head.php' ?>
    <title>ESG Peer Benchmarking Platform | Growth Investment & Development</title>
    <style>
        .bm-page-wrap {
            padding-top: 110px;
            background: #f7faf8;
            min-height: 100vh;
        }
        .bm-hero {
            background: linear-gradient(135deg, #02140d 0%, #062319 60%, #0a3d2e 100%);
            padding: 55px 0 45px;
            color: #ffffff;
            margin-bottom: 35px;
        }
        .bm-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px 60px;
        }
        .bm-filter-card {
            background: #ffffff;
            border: 1.5px solid #dce8e1;
            border-radius: 16px;
            padding: 24px;
            box-shadow: 0 10px 30px rgba(6,35,25,0.05);
            margin-bottom: 25px;
        }
        .bm-pill-tag {
            background: rgba(0,230,118,0.12);
            color: #054f30;
            border: 1.5px solid #00E676;
            font-weight: 700;
            font-size: 13px;
            padding: 7px 16px;
            border-radius: 99px;
            display: inline-flex;
            align-items: center;
            gap: 10px;
        }
        .bm-table-card {
            background: #ffffff;
            border: 1.5px solid #e1eee8;
            border-radius: 16px;
            overflow: hidden;
            box-shadow: 0 12px 35px rgba(6,35,25,0.06);
        }
        .bm-table th {
            background: #f0f7f3;
            color: #062319;
            font-weight: 800;
            font-size: 13.5px;
            padding: 16px 20px;
            border-bottom: 1.5px solid #dce8e1;
        }
        .bm-table td {
            padding: 15px 20px;
            font-size: 14px;
            color: #2b453a;
            border-bottom: 1px solid #edf4f0;
            vertical-align: middle;
        }
        .bm-table tr:hover {
            background: #fafdfb;
        }
    </style>
</head>
<body class="home-solar">
    <?php include 'includes/header.php' ?>

    <div class="bm-page-wrap">
        <section class="bm-hero">
            <div class="container">
                <div class="d-flex align-items-center gap-2 mb-2">
                    <span style="background:#00E676; color:#031c13; font-weight:900; font-size:11px; padding:3px 10px; border-radius:4px;">BENCHMARKING</span>
                    <span style="color:#00E676; font-size:12px; font-weight:700;">GCC &amp; MSX VERIFIED PEER STANDARDS</span>
                </div>
                <h1 style="font-size:2.5rem; font-weight:900; color:#ffffff; margin-bottom:12px;">
                    ESG Peer Benchmarking Platform
                </h1>
                <p style="color:#c2dfd2; font-size:15.5px; max-width:700px; margin:0;">
                    Compare your enterprise ESG metrics, decarbonization pathways, and reporting completeness with verified listed peers across Oman and the GCC.
                </p>
            </div>
        </section>

        <div class="bm-container">
            <!-- Filter Bar -->
            <div class="bm-filter-card">
                <div class="row align-items-center g-3">
                    <div class="col-lg-4">
                        <label style="font-size:12px; font-weight:800; color:#55796b; text-transform:uppercase; margin-bottom:6px; display:block;">Select Sector</label>
                        <select id="bmPageSectorSelect" onchange="switchBmPageSector(this.value)" class="form-select" style="font-weight:700; border-color:#00E676; padding:10px 14px; border-radius:10px;">
                            <option value="growth" selected>Sustainability &amp; ESG Advisory (Growth HQ)</option>
                            <option value="pdo">Energy &amp; Oil &amp; Gas (PDO)</option>
                            <option value="sohar">Metals &amp; Aluminium (Sohar Aluminium)</option>
                            <option value="cables">Manufacturing (Oman Cables Industry)</option>
                        </select>
                    </div>
                    <div class="col-lg-8">
                        <label style="font-size:12px; font-weight:800; color:#55796b; text-transform:uppercase; margin-bottom:6px; display:block;">Active Benchmarked Peer</label>
                        <div class="d-flex align-items-center gap-2 flex-wrap">
                            <span class="bm-pill-tag">
                                <span id="bmPagePillName">Growth Investment &amp; Development LLC</span>
                                <i class="fas fa-times" style="cursor:pointer;" onclick="resetBmPage()"></i>
                            </span>
                            <select id="bmPagePeerSelect" onchange="switchBmPagePeer(this.value)" class="form-select d-inline-block w-auto" style="border-style:dashed; border-color:#00a352; font-size:13px; font-weight:700; border-radius:10px;">
                                <option value="">+ Compare with another GCC Peer...</option>
                                <option value="growth">Growth Investment &amp; Development</option>
                                <option value="pdo">Petroleum Development Oman (PDO)</option>
                                <option value="sohar">Sohar Aluminium Company</option>
                                <option value="cables">Oman Cables Industry</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>

                        <!-- Visual Peer Benchmarking Comparison & Percentile Radar -->
            <div class="row g-4 mb-4">
                <div class="col-lg-6">
                    <div class="p-4 rounded-4 h-100 shadow-sm" style="background:#ffffff; border:1.5px solid #dce8e1;">
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <div>
                                <h4 style="font-size:17px; font-weight:800; color:#062319; margin:0;">GCC Peer Decarbonization Radar</h4>
                                <span style="font-size:12px; color:#55796b;">Compared across 85+ listed Oman &amp; GCC industrial peers</span>
                            </div>
                            <span class="badge" style="background:#e8f7ee; color:#008744; font-weight:700; padding:6px 12px;">Top Quartile (70th %)</span>
                        </div>

                        <!-- Animated Comparative Bars -->
                        <div class="d-flex flex-column gap-3 mt-3">
                            <div>
                                <div class="d-flex justify-content-between mb-1" style="font-size:12.5px; font-weight:700; color:#062319;">
                                    <span>Scope 1 &amp; 2 Carbon Intensity (tCO₂e/OMR)</span>
                                    <strong style="color:#00a854;">78th Percentile</strong>
                                </div>
                                <div class="progress" style="height:10px; background:#e8f2ec; border-radius:999px;">
                                    <div class="progress-bar" style="width:78%; background:#00a854; border-radius:999px; transition:width 1s ease;"></div>
                                </div>
                            </div>

                            <div>
                                <div class="d-flex justify-content-between mb-1" style="font-size:12.5px; font-weight:700; color:#062319;">
                                    <span>Renewable Energy Share (%)</span>
                                    <strong style="color:#0284c7;">64th Percentile</strong>
                                </div>
                                <div class="progress" style="height:10px; background:#e8f2ec; border-radius:999px;">
                                    <div class="progress-bar" style="width:64%; background:#0284c7; border-radius:999px; transition:width 1s ease;"></div>
                                </div>
                            </div>

                            <div>
                                <div class="d-flex justify-content-between mb-1" style="font-size:12.5px; font-weight:700; color:#062319;">
                                    <span>Water Recycling &amp; Efficiency Rate</span>
                                    <strong style="color:#f59e0b;">82nd Percentile</strong>
                                </div>
                                <div class="progress" style="height:10px; background:#e8f2ec; border-radius:999px;">
                                    <div class="progress-bar" style="width:82%; background:#f59e0b; border-radius:999px; transition:width 1s ease;"></div>
                                </div>
                            </div>

                            <div>
                                <div class="d-flex justify-content-between mb-1" style="font-size:12.5px; font-weight:700; color:#062319;">
                                    <span>MSX &amp; CMA Governance Disclosure Grade</span>
                                    <strong style="color:#00a854;">92nd Percentile</strong>
                                </div>
                                <div class="progress" style="height:10px; background:#e8f2ec; border-radius:999px;">
                                    <div class="progress-bar" style="width:92%; background:#00a854; border-radius:999px; transition:width 1s ease;"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="p-4 rounded-4 h-100 shadow-sm position-relative overflow-hidden" style="background:linear-gradient(145deg, #062319 0%, #03140e 100%); color:#ffffff; border:1.5px solid rgba(0,230,118,0.3);">
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <div>
                                <h4 style="font-size:17px; font-weight:800; color:#ffffff; margin:0;">Live Peer Telemetry Benchmark</h4>
                                <span style="font-size:12px; color:#00E676;">Verified MSX &amp; Tadawul Filings</span>
                            </div>
                            <span class="badge" style="background:rgba(0,230,118,0.2); color:#00E676; border:1px solid rgba(0,230,118,0.4); font-size:11px;">Active Benchmark</span>
                        </div>

                        <!-- SVG Benchmark Visual -->
                        <div class="position-relative text-center my-3">
                            <svg width="100%" height="160" viewBox="0 0 450 160">
                                <defs>
                                    <linearGradient id="bmGrad" x1="0" y1="0" x2="0" y2="1">
                                        <stop offset="0%" stop-color="#00E676" stop-opacity="0.35"/>
                                        <stop offset="100%" stop-color="#00E676" stop-opacity="0.0"/>
                                    </linearGradient>
                                </defs>
                                <!-- Median Line -->
                                <line x1="0" y1="90" x2="450" y2="90" stroke="rgba(255,255,255,0.2)" stroke-dasharray="4 4" stroke-width="1.5"/>
                                <text x="440" y="85" text-anchor="end" fill="#9abfb0" font-size="10">GCC Industry Median (50%)</text>
                                <!-- Area Curve -->
                                <path d="M 0,130 Q 80,110 160,85 T 300,50 T 450,25 L 450,160 L 0,160 Z" fill="url(#bmGrad)"/>
                                <path d="M 0,130 Q 80,110 160,85 T 300,50 T 450,25" fill="none" stroke="#00E676" stroke-width="3" stroke-linecap="round"/>
                                <!-- Highlight Node -->
                                <circle cx="300" cy="50" r="6" fill="#00E676" stroke="#ffffff" stroke-width="2"/>
                                <text x="300" y="38" text-anchor="middle" fill="#ffffff" font-size="11" font-weight="700">Your Enterprise</text>
                            </svg>
                        </div>

                        <div class="d-flex justify-content-between align-items-center pt-2" style="border-top:1px solid rgba(255,255,255,0.1); font-size:12px; color:#a3c2b5;">
                            <span>🏆 Rank: <strong>14 of 88</strong> in Sector</span>
                            <span>Pathway: <strong>Net Zero 2050 On-Track</strong></span>
                        </div>
                    </div>
                </div>
            </div>
<!-- Table of Peer Disclosures -->
            <div class="bm-table-card">
                <table class="bm-table w-100">
                    <tbody>
                        <tr>
                            <th style="width:28%;">Metric Parameter</th>
                            <th>Verified Disclosure (FY 2024 Filings)</th>
                        </tr>
                        <tr>
                            <td class="fw-bold">Company Name</td>
                            <td><strong id="bmPName" style="color:#008744; font-size:16px;">Growth Investment &amp; Development LLC</strong></td>
                        </tr>
                        <tr>
                            <td class="fw-bold">CIN / Commercial Registration</td>
                            <td id="bmPCin">CR 1385492 (Sultanate of Oman)</td>
                        </tr>
                        <tr>
                            <td class="fw-bold">Reporting Period</td>
                            <td id="bmPPeriod">01/01/2024 &mdash; 31/12/2024 (Annual Cycle)</td>
                        </tr>
                        <tr>
                            <td class="fw-bold">Incorporation Year</td>
                            <td id="bmPYear">2018</td>
                        </tr>
                        <tr>
                            <td class="fw-bold">Official Website</td>
                            <td><a href="https://growthom.com" target="_blank" id="bmPWeb" style="color:#0284c7; font-weight:700;">https://growthom.com</a></td>
                        </tr>
                        <tr>
                            <td class="fw-bold">Advisory &amp; Lead Contact</td>
                            <td id="bmPContact">Eng. Tariq Al-Balushi (advisory@growth-i-d.com)</td>
                        </tr>
                        <tr>
                            <td class="fw-bold">Reporting Boundary</td>
                            <td id="bmPBoundary">GCC Operations • Sultanate of Oman &amp; UAE Advisory Network</td>
                        </tr>
                        <tr>
                            <td class="fw-bold">Core Business Activity</td>
                            <td id="bmPActivity">Sustainability consulting, carbon accounting, energy audits, process safety management and ESG reporting across GCC.</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <!-- Benchmark Insight Trophy Banner -->
            <div class="mt-4 p-4 rounded-4" style="background:linear-gradient(135deg, #031c13 0%, #062319 100%); border:1.5px solid rgba(0,230,118,0.4); color:#fff;">
                <div class="d-flex align-items-center gap-3 mb-2">
                    <span style="font-size:26px;">🏆</span>
                    <h4 style="color:#ffffff; margin:0; font-weight:800; font-size:1.25rem;">Growth GCC Peer Benchmarking Insight</h4>
                </div>
                <p style="color:#c2ded1; font-size:14.5px; line-height:1.7; margin:0;">
                    Based on verified <strong>Growth &amp; MSX GCC standards</strong>, an <strong>8% reduction</strong> in emissions places your enterprise in the <span style="background:#00E676; color:#031c13; font-weight:800; padding:2px 8px; border-radius:6px;">70th percentile (Mid-tier compliant)</span>, advancing Oman Vision 2040 industrial decarbonization targets.
                </p>
                <div class="mt-3">
                    <a href="<?php echo base_url('contact') ?>" class="btn-greenly" style="padding:10px 24px; font-size:13.5px;">
                        <span>Request Custom Peer Dataset for Your Board</span> <i class="fas fa-arrow-right ms-2"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <?php include 'includes/footer.php' ?>
    <?php include 'includes/footerjs.php' ?>

    <script>
    const bmDataSet = {
        growth: {
            name: 'Growth Investment & Development LLC',
            cin: 'CR 1385492 (Sultanate of Oman)',
            period: '01/01/2024 — 31/12/2024',
            year: '2018',
            web: 'https://growthom.com',
            contact: 'Eng. Tariq Al-Balushi (advisory@growth-i-d.com)',
            boundary: 'GCC Operations • Sultanate of Oman & UAE Advisory Network',
            activity: 'Sustainability consulting, carbon accounting, energy audits, process safety management and ESG reporting across GCC.'
        },
        pdo: {
            name: 'Petroleum Development Oman (PDO)',
            cin: 'OM-CR-1002340',
            period: '01/01/2023 — 31/12/2023',
            year: '1937',
            web: 'https://www.pdo.co.om',
            contact: 'Dr. Salim Al Harthy (sustainability@pdo.co.om)',
            boundary: 'Concession Block 6 • Oil & Gas Exploration, Miraah Solar Thermal & EOR Operations',
            activity: 'Exploration and production of crude oil and natural gas, solar steam generation, and industrial water recycling.'
        },
        sohar: {
            name: 'Sohar Aluminium Company LLC',
            cin: 'OM-CR-1049210',
            period: '01/01/2023 — 31/12/2023',
            year: '2004',
            web: 'https://www.sohar-aluminium.com',
            contact: 'Ahmed Al Kharusi (hse@sohar-aluminium.com)',
            boundary: 'Standalone • Sohar Aluminium Smelter, 1000MW Captive Power Plant and Port Facilities',
            activity: 'Primary aluminium smelting, hot metal casting, and energy recovery operations in Sohar Industrial Port.'
        },
        cables: {
            name: 'Oman Cables Industry SAOG',
            cin: 'OM-CR-1123489',
            period: '01/01/2023 — 31/12/2023',
            year: '1984',
            web: 'https://www.omancables.com',
            contact: 'Fatma Al Zadjali (esg@omancables.com)',
            boundary: 'Consolidated • Rusayl Industrial City Manufacturing Plants & GCC Distribution Hubs',
            activity: 'Manufacturing and sale of medium/low voltage electrical cables and overhead conductors.'
        }
    };

    function updateBmView(key) {
        const d = bmDataSet[key] || bmDataSet.growth;
        document.getElementById('bmPagePillName').textContent = d.name;
        document.getElementById('bmPName').textContent = d.name;
        document.getElementById('bmPCin').textContent = d.cin;
        document.getElementById('bmPPeriod').textContent = d.period;
        document.getElementById('bmPYear').textContent = d.year;
        const web = document.getElementById('bmPWeb');
        web.href = d.web;
        web.textContent = d.web;
        document.getElementById('bmPContact').textContent = d.contact;
        document.getElementById('bmPBoundary').textContent = d.boundary;
        document.getElementById('bmPActivity').textContent = d.activity;
    }

    function switchBmPageSector(val) {
        updateBmView(val);
    }
    function switchBmPagePeer(val) {
        if (!val) return;
        updateBmView(val);
    }
    function resetBmPage() {
        document.getElementById('bmPageSectorSelect').value = 'growth';
        updateBmView('growth');
    }
    </script>
</body>
</html>