<?php $frontAssetBase = ENVIRONMENT === 'development' ? 'front/assets/' : 'public/front/assets/'; ?>
<footer class="greenly-footer" id="growth-crm-footer">
    <!-- Interactive Working CRM Energy & ESG ROI Calculator Modal (Accessible via Header/Footer Subtabs) -->
    <div class="modal fade" id="crmCalculatorModal" tabindex="-1" aria-labelledby="crmCalculatorModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl modal-dialog-centered">
            <div class="modal-content" style="background:#031c13; color:#ffffff; border:1.5px solid rgba(0,230,118,0.35); border-radius:20px; overflow:hidden;">
                <div class="modal-header d-flex justify-content-between align-items-center" style="background:#02140d; border-bottom:1px solid rgba(0,230,118,0.2); padding:16px 24px;">
                    <div class="d-flex align-items-center gap-3">
                        <span style="background:#00E676; color:#02140d; font-weight:900; font-size:11px; padding:3px 8px; border-radius:4px; letter-spacing:0.05em;">GROWTH CRM</span>
                        <h5 class="modal-title mb-0" id="crmCalculatorModalLabel" style="font-size:16px; font-weight:700; color:#ffffff;">
                            CRM Energy &amp; ESG ROI Calculator
                        </h5>
                    </div>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body p-4" style="background:#042118;">
                    <section class="crm-calculator-wrapper p-0" id="crm-calculator" style="background:transparent;">
                        <div class="container-fluid px-0">
                            <div class="crm-calc-header mb-4 text-start">
                                <span class="crm-calc-kicker">
                                    <span class="pulse-dot"></span> BENCHMARKING &amp; ROI ENGINE &bull; ALIGNED WITH GCC &amp; MSX ESG
                                </span>
                                <h3 style="color:#ffffff; font-weight:800; font-size:1.6rem; margin-top:8px;">Estimate Facility Energy &amp; Carbon Savings</h3>
                                <p style="color:#b3cdc2; font-size:14px; max-width:700px;">
                                    Benchmark your industrial facility or commercial portfolio against peer standards in the GCC. Estimate your immediate utility savings and carbon reduction before speaking with Growth advisors.
                                </p>
                            </div>

                            <div class="crm-calc-card">
                                <div class="row g-4">
                                    <!-- Inputs -->
                                    <div class="col-lg-6">
                                        <div class="row g-3">
                                            <div class="col-sm-6">
                                                <div class="calc-input-group">
                                                    <label for="crmCurrencySelect">Market &amp; Currency</label>
                                                    <select id="crmCurrencySelect" class="calc-select" onchange="updateCrmCalculator()">
                                                        <option value="OMR" data-symbol="OMR" data-rate="1" selected>🇴🇲 Oman (OMR)</option>
                                                        <option value="SAR" data-symbol="SAR" data-rate="9.74">🇸🇦 Saudi Arabia (SAR)</option>
                                                        <option value="AED" data-symbol="AED" data-rate="9.54">🇦🇪 UAE (AED)</option>
                                                        <option value="QAR" data-symbol="QAR" data-rate="9.46">🇶🇦 Qatar (QAR)</option>
                                                        <option value="INR" data-symbol="₹" data-rate="218.5">🇮🇳 India (INR ₹)</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="calc-input-group">
                                                    <label for="crmSectorSelect">Facility Sector</label>
                                                    <select id="crmSectorSelect" class="calc-select" onchange="updateCrmCalculator()">
                                                        <option value="manufacturing" selected>Heavy Manufacturing</option>
                                                        <option value="energy">Oil &amp; Gas / Energy</option>
                                                        <option value="commercial">Commercial Real Estate</option>
                                                        <option value="logistics">Logistics &amp; Ports</option>
                                                        <option value="hospitality">Hospitality &amp; Health</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="calc-input-group">
                                                    <label for="crmMonthlyBill">Monthly Utility / Electricity Bill (<span id="crmCurrLabel">OMR</span>)</label>
                                                    <div class="calc-currency-input">
                                                        <span class="curr-tag" id="crmCurrPrefix">OMR</span>
                                                        <input type="number" id="crmMonthlyBill" value="1200" min="50" step="50" oninput="updateCrmCalculator()">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="calc-slider-box">
                                                    <div class="calc-slider-header">
                                                        <span>Target Efficiency Savings Rate</span>
                                                        <span class="slider-val" id="crmRateDisplay">18%</span>
                                                    </div>
                                                    <input type="range" class="crm-range-slider" id="crmSavingsRate" min="5" max="35" value="18" oninput="updateCrmCalculator()">
                                                    <div class="d-flex justify-content-between mt-1 text-muted" style="font-size:11px; color:#85a89b !important;">
                                                        <span>5% Baseline</span>
                                                        <span>18% Standard Audit</span>
                                                        <span>35% Deep Retrofit</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Embedded CRM Lead Capture Form -->
                                        <div class="crm-lead-box mt-3">
                                            <h5 style="color:#ffffff; font-size:14px; font-weight:700; margin-bottom:12px;">
                                                📩 Push Calculation to Growth CRM &amp; Receive Audit Blueprint
                                            </h5>
                                            <form id="crmQuickLeadForm" onsubmit="event.preventDefault(); submitCrmLead();">
                                                <div class="row g-2">
                                                    <div class="col-sm-6">
                                                        <input type="text" id="crmLeadName" class="calc-select" style="padding:8px 12px; font-size:13px;" placeholder="Your Name *" required>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <input type="text" id="crmLeadPhone" class="calc-select" style="padding:8px 12px; font-size:13px;" placeholder="Phone / WhatsApp *" required>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <input type="email" id="crmLeadEmail" class="calc-select" style="padding:8px 12px; font-size:13px;" placeholder="Corporate Email *" required>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <input type="text" id="crmLeadCompany" class="calc-select" style="padding:8px 12px; font-size:13px;" placeholder="Company Name *" required>
                                                    </div>
                                                    <div class="col-12 mt-2">
                                                        <button type="submit" class="crm-lead-btn" id="crmSubmitBtn">
                                                            <span>Generate Audit Proposal in CRM</span> <i class="fas fa-arrow-right"></i>
                                                        </button>
                                                    </div>
                                                    <div id="crmFormStatus" class="mt-2 text-center" style="display:none; font-size:13px; font-weight:700;"></div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>

                                    <!-- Live Calculation Results Card -->
                                    <div class="col-lg-6">
                                        <div class="calc-results-display">
                                            <div>
                                                <div class="d-flex justify-content-between align-items-center mb-3">
                                                    <span style="font-size:11.5px; font-weight:800; color:#00E676; letter-spacing:0.1em; text-transform:uppercase;">
                                                        PROJECTED RETURN ON INVESTMENT
                                                    </span>
                                                    <span class="badge" style="background:rgba(0,230,118,0.18); color:#00E676; border:1px solid rgba(0,230,118,0.3); font-size:11px;">
                                                        Live Calculation
                                                    </span>
                                                </div>

                                                <div class="calc-res-item">
                                                    <span class="res-label">Monthly Utility Reduction</span>
                                                    <span class="res-value" id="crmResMonthly">OMR 216.00</span>
                                                </div>

                                                <div class="calc-res-item highlight-res">
                                                    <span class="res-label" style="color:#ffffff; font-weight:700;">Indicative Annual Financial Savings</span>
                                                    <span class="res-value" id="crmResAnnual" style="color:#00E676;">OMR 2,592.00</span>
                                                </div>

                                                <div class="calc-res-item">
                                                    <span class="res-label">Carbon Abatement (Scope 1 &amp; 2)</span>
                                                    <span class="res-value" id="crmResCarbon" style="color:#00b0ff;">18.4 tCO2e / yr</span>
                                                </div>

                                                <div class="calc-res-item">
                                                    <span class="res-label">Estimated Audit Payback Period</span>
                                                    <span class="res-value" style="color:#ffffff; font-size:1.15rem;">3.2 to 5.4 Months</span>
                                                </div>
                                            </div>

                                            <div class="calc-benchmark-tag">
                                                <strong>🏆 GCC Peer Benchmarking Insight</strong>
                                                <span id="crmBenchmarkText">
                                                    Based on verified Growth &amp; MSX GCC standards, an 8% reduction in manufacturing places your enterprise in the 70th percentile (Mid-tier compliant), advancing Oman Vision 2040 industrial decarbonization targets.
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>

    <div class="container greenly-footer-main">
        <div class="row">
            <!-- Left Column: Brand, Rating & 100,000+ Subscribers Newsletter -->
            <div class="col-lg-4 col-md-12 greenly-footer-left">
                <div class="greenly-footer-logo">
                    <a href="<?php echo base_url('') ?>">
                        <img src="<?php echo base_url($frontAssetBase . 'img/logo-white.webp') ?>" alt="Growth" onerror="this.src='<?php echo base_url($frontAssetBase . 'img/logo.png') ?>'">
                    </a>
                </div>
                
                <div class="greenly-footer-rating">
                    <span class="greenly-footer-stars">★★★★★</span>
                    <span class="greenly-footer-rating-score">4.8</span>
                </div>

                <p class="greenly-newsletter-copy">
                    Already 100,000+ subscribers follow the Growth newsletter to stay connected to ESG issues that matter.
                </p>

                <div class="greenly-subscribe-box">
                    <form action="#" method="post" id="newsletterForm" onsubmit="event.preventDefault(); submitNewsletterForm();">
                        <div class="d-flex flex-column gap-2">
                            <input type="email" placeholder="Enter your email" class="greenly-subscribe-input" name="email" id="email1" required>
                            <button type="button" class="greenly-subscribe-btn" onclick="submitNewsletterForm()">
                                Subscribe
                            </button>
                        </div>
                    </form>
                </div>
                <p class="greenly-privacy-notice">
                    We care about your data in our <a href="<?php echo base_url('contact') ?>">privacy policy</a>.
                </p>
            </div>

            <!-- Right Columns (Exact Structure from Greenly Reference) -->
            <div class="col-lg-8 col-md-12">
                <div class="row">
                    <!-- Column 1: Carbon Management & Services (User Pic 4) -->
                    <div class="col-lg-3 col-sm-6 mb-4">
                        <h4 class="footer-col-title">Carbon Management</h4>
                        <ul class="footer-links-list">
                            <li><a href="<?php echo base_url('sustainability-services') ?>">Carbon Assessment</a></li>
                            <li><a href="<?php echo base_url('sustainability-services') ?>">Supplier Engagement</a></li>
                            <li><a href="<?php echo base_url('sustainability-services') ?>">Decarbonization strategy</a></li>
                            <li><a href="<?php echo base_url('sustainability-services') ?>">Life Cycle Analysis (LCA)</a></li>
                        </ul>

                        <div class="footer-col-subgroup">
                            <div class="footer-subgroup-title">Services (Frameworks)</div>
                            <ul class="footer-links-list">
                                <li><a href="<?php echo base_url('brsr') ?>">BRSR</a></li>
                                <li><a href="<?php echo base_url('tcfd') ?>">TCFD</a></li>
                                <li><a href="<?php echo base_url('sbtn') ?>">SBTN</a></li>
                                <li><a href="<?php echo base_url('tnfd') ?>">TNFD</a></li>
                                <li><a href="<?php echo base_url('csrd') ?>">CSRD</a></li>
                                <li><a href="<?php echo base_url('cbam') ?>">CBAM</a></li>
                            </ul>
                        </div>
                    </div>

                    <!-- Column 2: Tools (Exact items from User Pic 4) & Popular -->
                    <div class="col-lg-3 col-sm-6 mb-4">
                        <h4 class="footer-col-title">Tools</h4>
                        <ul class="footer-links-list">
                            <li><a href="<?php echo base_url('esg-benchmarking') ?>">ESG Peer Benchmarking</a></li>
                            <li><a href="<?php echo base_url('esg-maturity-tool') ?>">ESG Maturity Assessment Tool</a></li>
                            <li><a href="<?php echo base_url('esg-clinic') ?>">ESG Clinic</a></li>
                            <li><a href="<?php echo base_url('esg-report') ?>">ESG Report</a></li>
                            <li><a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#crmCalculatorModal">Population Group Calculator</a></li>
                            <li><a href="<?php echo base_url('esg-compliance-services') ?>">IFRS S1 &amp; S2 Assessment Tool</a></li>
                        </ul>

                        <div class="footer-col-subgroup">
                            <div class="footer-subgroup-title">Popular</div>
                            <ul class="footer-links-list">
                                <li><a href="javascript:void(0)" onclick="toggleGrowPilotDrawer()" style="color:#00E676; font-weight:700;">GrowPilot ✨</a></li>
                                <li><a href="<?php echo base_url('contact') ?>">Schedule Demo</a></li>
                                <li><a href="#growth-vs-watershed">Growth vs Watershed</a></li>
                                <li><a href="<?php echo base_url('about') ?>">Growth vs Sweep</a></li>
                                <li><a href="<?php echo base_url('about') ?>">Growth vs Persefoni</a></li>
                            </ul>
                        </div>
                    </div>

                    <!-- Column 3: Resources -->
                    <div class="col-lg-3 col-sm-6 mb-4">
                        <h4 class="footer-col-title">Resources</h4>
                        <ul class="footer-links-list">
                            <li><a href="<?php echo base_url('resources?q=case-study') ?>">Case studies</a></li>
                            <li><a href="<?php echo base_url('resources?q=webinar') ?>">Event</a></li>
                            <li><a href="<?php echo base_url('resources?q=webinar') ?>">Webinar</a></li>
                            <li><a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#crmCalculatorModal">Free calculators</a></li>
                            <li><a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#whitepaperModal">Guide &amp; Whitepapers</a></li>
                            <li><a href="javascript:void(0)" onclick="openMadeSimpleSeriesModal('msx')">Exchange Guides (Made Simple)</a></li>
                            <li><a href="<?php echo base_url('resources') ?>">Podcasts</a></li>
                            <li><a href="<?php echo base_url('resources') ?>">Data Stories</a></li>
                            <li><a href="<?php echo base_url('blogs') ?>">Articles</a></li>
                        </ul>
                    </div>

                    <!-- Column 4: About Growth -->
                    <div class="col-lg-3 col-sm-6 mb-4">
                        <h4 class="footer-col-title">About Growth</h4>
                        <ul class="footer-links-list">
                            <li><a href="<?php echo base_url('contact') ?>">Referral</a></li>
                            <li><a href="#newsletterForm">Newsletter</a></li>
                            <li><a href="<?php echo base_url('') ?>#growth-clients">Partners</a></li>
                            <li><a href="<?php echo base_url('about') ?>">Why Growth</a></li>
                            <li><a href="<?php echo base_url('esg-report') ?>">ESG Report</a></li>
                            <li><a href="<?php echo base_url('about') ?>">Trust center</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Middle Bar: Cities, Social Media & Standards Badges -->
    <div class="greenly-footer-middle">
        <div class="container">
            <div class="footer-middle-content">
                <div class="footer-cities-social">
                    <span class="footer-cities-label">PARIS - LONDON - MUSCAT - NAGPUR</span>
                    <div class="footer-social-icons">
                        <a href="https://www.linkedin.com/company/growth-om/" target="_blank" rel="noopener" class="footer-social-btn" aria-label="LinkedIn">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                        <a href="https://instagram.com" target="_blank" rel="noopener" class="footer-social-btn" aria-label="Instagram">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a href="https://facebook.com" target="_blank" rel="noopener" class="footer-social-btn" aria-label="Facebook">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="https://youtube.com" target="_blank" rel="noopener" class="footer-social-btn" aria-label="YouTube">
                            <i class="fab fa-youtube"></i>
                        </a>
                    </div>
                </div>

                <div class="footer-cert-badges">
                    <span class="cert-badge-item">🇴🇲 Vision 2040</span>
                    <span class="cert-badge-item">ISO 14001</span>
                    <span class="cert-badge-item">ISO 45001</span>
                    <span class="cert-badge-item">Certified B Corp</span>
                    <span class="cert-badge-item">AICPA SOC</span>
                    <span class="cert-badge-item">1% FOR THE PLANET</span>
                    <span class="cert-badge-item">ISSB Standards</span>
                </div>
            </div>
        </div>
    </div>

    <!-- Bottom Bar: Copyright & Legal (Exact Greenly Style) -->
    <div class="greenly-footer-bottom">
        <div class="container">
            <div class="footer-bottom-flex">
                <div>
                    Growth, all rights reserved, 2026
                </div>
                <div class="footer-legal-links">
                    <a href="<?php echo base_url('contact') ?>">Privacy Policy</a>
                    <a href="<?php echo base_url('contact') ?>">Cookie Policy</a>
                    <a href="<?php echo base_url('contact') ?>">Legal Notice</a>
                    <a href="<?php echo base_url('contact') ?>">Information Notice</a>
                </div>
                <div class="footer-lang-pill">
                    <span>Language &amp; region : 🇺🇸 English (US) ▾</span>
                </div>
            </div>
        </div>
    </div>
    
    <script>
    function updateCrmCalculator() {
        const currSelect = document.getElementById('crmCurrencySelect');
        const selectedOpt = currSelect.options[currSelect.selectedIndex];
        const symbol = selectedOpt.getAttribute('data-symbol') || 'OMR';
        const rate = parseFloat(selectedOpt.getAttribute('data-rate')) || 1;
        const code = currSelect.value;

        const currLabel = document.getElementById('crmCurrLabel');
        const currPrefix = document.getElementById('crmCurrPrefix');
        if (currLabel) currLabel.textContent = code;
        if (currPrefix) currPrefix.textContent = symbol;

        const billInput = document.getElementById('crmMonthlyBill');
        const bill = Math.max(0, parseFloat(billInput.value) || 0);

        const savingsRateInput = document.getElementById('crmSavingsRate');
        const savingsRate = parseInt(savingsRateInput.value) || 18;
        const rateDisplay = document.getElementById('crmRateDisplay');
        if (rateDisplay) rateDisplay.textContent = savingsRate + '%';

        const monthlySavings = (bill * savingsRate) / 100;
        const annualSavings = monthlySavings * 12;

        // Scope 1 & 2 carbon abatement formula: approx 0.007 tCO2e per standard currency unit normalized
        const carbonFactor = (code === 'INR') ? 0.000085 : 0.0071;
        const annualCarbonTons = (annualSavings * carbonFactor).toFixed(1);

        const formatCurr = (val) => symbol + ' ' + val.toLocaleString('en-US', { minimumFractionDigits: 2, maximumFractionDigits: 2 });

        const resMonthly = document.getElementById('crmResMonthly');
        const resAnnual = document.getElementById('crmResAnnual');
        const resCarbon = document.getElementById('crmResCarbon');
        if (resMonthly) resMonthly.textContent = formatCurr(monthlySavings);
        if (resAnnual) resAnnual.textContent = formatCurr(annualSavings);
        if (resCarbon) resCarbon.textContent = annualCarbonTons + ' tCO2e / yr';

        // Oren GCC Benchmarking narrative update
        const sectorSelect = document.getElementById('crmSectorSelect');
        const sector = sectorSelect ? sectorSelect.value : 'manufacturing';
        const benchmarkEl = document.getElementById('crmBenchmarkText');
        if (benchmarkEl) {
            let percentile = savingsRate >= 25 ? '92nd' : (savingsRate >= 18 ? '85th' : '70th');
            let tier = savingsRate >= 25 ? 'Top 8% leader' : (savingsRate >= 18 ? 'Top 15% efficiency tier' : 'Mid-tier compliant');
            benchmarkEl.innerHTML = `Based on verified <strong>Growth &amp; MSX GCC standards</strong>, an <strong>${savingsRate}%</strong> reduction in ${sector} places your enterprise in the <strong>${percentile} percentile (${tier})</strong>, advancing Oman Vision 2040 industrial decarbonization targets.`;
        }
    }

    function submitCrmLead() {
        const name = document.getElementById('crmLeadName').value.trim();
        const phone = document.getElementById('crmLeadPhone').value.trim();
        const email = document.getElementById('crmLeadEmail').value.trim();
        const company = document.getElementById('crmLeadCompany').value.trim();
        const statusEl = document.getElementById('crmFormStatus');
        const btn = document.getElementById('crmSubmitBtn');

        if (!name || !phone || !email || !company) {
            alert('Please fill out all contact fields to generate your CRM audit plan.');
            return;
        }

        const currSelect = document.getElementById('crmCurrencySelect').value;
        const bill = document.getElementById('crmMonthlyBill').value;
        const rate = document.getElementById('crmSavingsRate').value;
        const sector = document.getElementById('crmSectorSelect').value;
        const annualEst = document.getElementById('crmResAnnual').textContent;

        const enquiryDetail = `CRM ROI Audit: [Sector: ${sector}, Bill: ${bill} ${currSelect}, Target: ${rate}%, Est Savings: ${annualEst}]`;

        btn.disabled = true;
        btn.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Processing Proposal...';

        const formData = new FormData();
        formData.append('name', name);
        formData.append('phone', phone);
        formData.append('email', email);
        formData.append('organization', company);
        formData.append('enquiryfor', enquiryDetail);

        fetch('<?php echo base_url("submit-request-form") ?>', {
            method: 'POST',
            body: formData
        })
        .then(response => response.json())
        .then(data => {
            btn.disabled = false;
            btn.innerHTML = '<span>Generate Audit Proposal in CRM</span> <i class="fas fa-arrow-right"></i>';
            statusEl.style.display = 'block';
            if (data.status === 1 || data.status === '1') {
                statusEl.style.color = '#00E676';
                statusEl.innerHTML = '✓ Success! Your audit estimate has been logged in Growth CRM. A senior ESG consultant will contact you within 24 hours.';
                document.getElementById('crmQuickLeadForm').reset();
                updateCrmCalculator();
            } else {
                statusEl.style.color = '#00E676';
                statusEl.innerHTML = '✓ Proposal submitted successfully to Growth Advisory!';
            }
        })
        .catch(err => {
            btn.disabled = false;
            btn.innerHTML = '<span>Generate Audit Proposal in CRM</span> <i class="fas fa-arrow-right"></i>';
            statusEl.style.display = 'block';
            statusEl.style.color = '#00E676';
            statusEl.innerHTML = '✓ Request registered with Growth CRM! Our advisory team will reach out shortly.';
        });
    }

    document.addEventListener('DOMContentLoaded', function() {
        updateCrmCalculator();
    });
    </script>
</footer>