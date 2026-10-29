<!-- Start Header Top -->
<?php $frontAssetBase = ENVIRONMENT === 'development' ? 'front/assets/' : 'public/front/assets/'; ?>
<?php $resourcesMenuBlog = $headerResourceBlog ?? null; ?>

<!-- Carbon Monitored & Live Status Ticker (No phone/email/linkedin as requested) -->
<div class="growth-ticker-bar">
    <div class="container text-center">
        <div class="d-inline-flex align-items-center justify-content-center gap-2 flex-wrap">
            <span class="pulse-dot"></span>
            <span>CARBON &amp; ENERGY MONITORED IN GCC: <strong id="liveCarbonCounter" style="color:#00E676;" data-count="1480250">1,480,250</strong> tCO2e</span>
            <span style="opacity:0.4;">•</span>
            <span style="color:#a3c2b5;">🇴🇲 Sultanate of Oman &amp; GCC Sustainable Suite</span>
        </div>
    </div>
</div>

<!-- Main Greenly-Style Navigation Header -->
<header class="growth-header-greenly">
    <div class="container d-flex justify-content-between align-items-center py-2">
        <!-- Logo -->
        <div class="d-flex align-items-center gap-4">
            <a class="navbar-brand m-0" href="<?php echo base_url('') ?>">
                <img src="<?php echo base_url($frontAssetBase . 'img/logo.png') ?>" alt="Growth Investment & Development" height="42">
            </a>

            <!-- Desktop Nav Links (Clean, No Overlaps) -->
            <nav class="d-none d-lg-block">
                <ul class="growth-nav-list">
                    <!-- Solutions Dropdown -->
                    <li class="growth-nav-item">
                        <a href="<?php echo base_url('services') ?>" class="growth-nav-link">
                            <span data-i18n="nav_solutions">Solutions</span> <span class="dropdown-chevron">▼</span>
                        </a>
                        <div class="growth-dropdown-menu growth-dropdown-wide">
                            <div>
                                <div class="dropdown-group-title"><span data-i18n="grp_carbon">Carbon &amp; Sustainability</span></div>
                                <a href="<?php echo base_url('sustainability-services') ?>" class="dropdown-item-card">
                                    <strong><span data-i18n="item_sust_title">Sustainability Services</span></strong>
                                    <span><span data-i18n="item_sust_desc">Decarbonization, Net Zero roadmaps &amp; LCA</span></span>
                                </a>
                                <a href="<?php echo base_url('esg-compliance-services') ?>" class="dropdown-item-card">
                                    <strong><span data-i18n="item_esg_title">ESG Compliance &amp; Reporting</span></strong>
                                    <span><span data-i18n="item_esg_desc">Oman &amp; GCC frameworks, GRI, TCFD, BRSR</span></span>
                                </a>
                                <a href="<?php echo base_url('energy-management-audit-services') ?>" class="dropdown-item-card">
                                    <strong><span data-i18n="item_energy_title">Energy Management &amp; Audits</span></strong>
                                    <span><span data-i18n="item_energy_desc">Cut consumption &amp; verify savings</span></span>
                                </a>
                            </div>
                            <div>
                                <div class="dropdown-group-title"><span data-i18n="grp_ops">Operations &amp; Safety</span></div>
                                <a href="<?php echo base_url('process-safety-management') ?>" class="dropdown-item-card">
                                    <strong><span data-i18n="item_psm_title">Process Safety Management (PSM)</span></strong>
                                    <span><span data-i18n="item_psm_desc">HAZOP, risk mitigation &amp; compliance</span></span>
                                </a>
                                <a href="<?php echo base_url('continuous-improvement') ?>" class="dropdown-item-card">
                                    <strong><span data-i18n="item_ci_title">Continuous Improvement &amp; Lean</span></strong>
                                    <span><span data-i18n="item_ci_desc">Operational excellence &amp; efficiency</span></span>
                                </a>
                                <a href="<?php echo base_url('training-mentorship') ?>" class="dropdown-item-card">
                                    <strong><span data-i18n="item_train_title">Training &amp; Capability Development</span></strong>
                                    <span><span data-i18n="item_train_desc">Executive ESG mentoring &amp; workshops</span></span>
                                </a>
                            </div>
                        </div>
                    </li>

                    <!-- Platform / Technology Dropdown -->
                    <li class="growth-nav-item">
                        <a href="<?php echo base_url('') ?>#audit-ready-dashboards" class="growth-nav-link">
                            <span data-i18n="nav_platform">Platform</span> <span class="dropdown-chevron">▼</span>
                        </a>
                        <div class="growth-dropdown-menu">
                            <div class="dropdown-group-title">Digital Suite &amp; Tools</div>
                            <a href="<?php echo base_url('') ?>#audit-ready-dashboards" class="dropdown-item-card">
                                <strong>Audit-Ready Dashboards</strong>
                                <span>BRSR, GRI, TCFD assurance in minutes</span>
                            </a>
                            <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#esgMaturityModal" class="dropdown-item-card">
                                <strong>ESG Maturity Assessment Tool</strong>
                                <span>Oren-aligned AI readiness diagnostic</span>
                            </a>
                            <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#benchmarkingModal" class="dropdown-item-card">
                                <strong>ESG Peer Benchmarking</strong>
                                <span>Compare performance with GCC &amp; global peers</span>
                            </a>
                            <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#crmCalculatorModal" class="dropdown-item-card">
                                <strong>CRM Energy Savings Calculator</strong>
                                <span>Estimate facility savings &amp; ROI instantly</span>
                            </a>
                        </div>
                    </li>

                    <!-- Resources Dropdown -->
                    <li class="growth-nav-item">
                        <a href="<?php echo base_url('resources') ?>" class="growth-nav-link <?php if(isset($activemenu) && $activemenu=='resources') {echo 'active';} ?>">
                            <span data-i18n="nav_resources">Resources</span> <span class="dropdown-chevron">▼</span>
                        </a>
                        <div class="growth-dropdown-menu">
                            <div class="dropdown-group-title">Knowledge &amp; Tools</div>
                            <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#whitepaperModal" class="dropdown-item-card">
                                <strong>Whitepaper &amp; Guides</strong>
                                <span>Master MSX &amp; GCC ESG Assessments</span>
                            </a>
                            <a href="javascript:void(0)" onclick="openMadeSimpleSeriesModal('msx')" class="dropdown-item-card">
                                <strong>Exchange Disclosures "Made Simple"</strong>
                                <span>MSX Oman, Tadawul, Boursa Kuwait, SGX &amp; PSE</span>
                            </a>
                            <a href="<?php echo base_url('resources') ?>" class="dropdown-item-card">
                                <strong>Resource Library</strong>
                                <span>All guides, webinars &amp; stories</span>
                            </a>
                            <a href="<?php echo base_url('blogs') ?>" class="dropdown-item-card">
                                <strong>Knowledge Blog &amp; Articles</strong>
                                <span>GCC ESG, energy trends &amp; analysis</span>
                            </a>
                            <a href="<?php echo base_url('resources?q=case-study') ?>" class="dropdown-item-card">
                                <strong>Case Studies &amp; Stories</strong>
                                <span>Verified industrial client results</span>
                            </a>
                            <a href="<?php echo base_url('resources?q=webinar') ?>" class="dropdown-item-card">
                                <strong>Webinars &amp; Events</strong>
                                <span>On-demand briefings &amp; podcasts</span>
                            </a>
                        </div>
                    </li>

                    <!-- About Growth Dropdown -->
                    <li class="growth-nav-item">
                        <a href="<?php echo base_url('about') ?>" class="growth-nav-link <?php if(isset($activemenu) && $activemenu=='about') {echo 'active';} ?>">
                            <span data-i18n="nav_about">About Growth</span> <span class="dropdown-chevron">▼</span>
                        </a>
                        <div class="growth-dropdown-menu">
                            <div class="dropdown-group-title">Company Profile</div>
                            <a href="<?php echo base_url('about') ?>" class="dropdown-item-card">
                                <strong>Who We Are</strong>
                                <span>Our vision, leadership and credentials</span>
                            </a>
                            <a href="<?php echo base_url('about') ?>#vision-2040" class="dropdown-item-card">
                                <strong>Oman Vision 2040</strong>
                                <span>National sustainability commitment</span>
                            </a>
                            <a href="<?php echo base_url('') ?>#regional-presence" class="dropdown-item-card">
                                <strong>Regional Presence</strong>
                                <span>Muscat (Oman) &amp; Nagpur (India)</span>
                            </a>
                            <a href="<?php echo base_url('') ?>#growth-clients" class="dropdown-item-card">
                                <strong>Partners &amp; Clients</strong>
                                <span>Organizations we partner with</span>
                            </a>
                            <a href="<?php echo base_url('career') ?>" class="dropdown-item-card">
                                <strong>Careers</strong>
                                <span>Join our sustainability advisory team</span>
                            </a>
                        </div>
                    </li>

                    <!-- GrowPilot (Branded Pill Button) -->
                    <li>
                        <button type="button" class="growpilot-nav-btn" onclick="toggleGrowPilotDrawer()" aria-label="Open GrowPilot AI Assistant">
                            <span class="growpilot-spark">✦</span> <span data-i18n="nav_growpilot">GrowPilot</span>
                        </button>
                    </li>
                </ul>
            </nav>
        </div>

        <!-- Header Actions: Interactive Circular Country/Lang Selector + <span data-i18n="nav_login">Login</span> + Demo CTA (User Pic 2) -->
        <div class="d-flex align-items-center gap-2 gap-md-3">
            <!-- Dynamic Circular Country & Language Selector Dropdown (User Pic 2) -->
            <div class="position-relative" id="countrySelectorWrap">
                <button type="button" id="countrySelectorBtn" onclick="toggleCountryDropdown()" class="d-inline-flex align-items-center gap-2" style="background:#f4f8f6; border:1.5px solid #d8e8e0; border-radius:999px; padding:5px 14px 5px 6px; font-size:13px; font-weight:700; color:#062319; cursor:pointer;" aria-label="Select Country &amp; Language">
                    <span class="flag-circle" id="currentCountryFlag">🇴🇲</span>
                    <span id="currentCountryName">Oman</span>
                    <span style="font-size:10px; opacity:0.6;">▼</span>
                </button>
                <div id="countryDropdownMenu" class="country-lang-dropdown" style="display:none;">
                    <div style="font-size:11px; font-weight:800; color:#85a89b; text-transform:uppercase; padding:4px 12px 8px; letter-spacing:0.08em;">
                        Country &amp; Language
                    </div>
                                        <!-- 1. Oman (HQ) -->
                    <button type="button" class="country-lang-item active" onclick="selectCountry('om', '🇴🇲', 'عُمان (العربية)', '#00E676', 'OMR', 'ar')">
                        <span class="flag-circle">🇴🇲</span>
                        <span class="lang-name">سلطنة عُمان (العربية)</span>
                        <span class="curr-pill">OMR</span>
                    </button>
                    <!-- 2. Saudi Arabia -->
                    <button type="button" class="country-lang-item" onclick="selectCountry('sa', '🇸🇦', 'السعودية (العربية)', '#00C853', 'SAR', 'ar')">
                        <span class="flag-circle">🇸🇦</span>
                        <span class="lang-name">المملكة العربية السعودية (العربية)</span>
                        <span class="curr-pill">SAR</span>
                    </button>
                    <!-- 3. UAE -->
                    <button type="button" class="country-lang-item" onclick="selectCountry('ae', '🇦🇪', 'الإمارات (العربية)', '#00B0FF', 'AED', 'ar')">
                        <span class="flag-circle">🇦🇪</span>
                        <span class="lang-name">الإمارات العربية المتحدة (العربية)</span>
                        <span class="curr-pill">AED</span>
                    </button>
                    <!-- 4. Qatar -->
                    <button type="button" class="country-lang-item" onclick="selectCountry('qa', '🇶🇦', 'قطر (العربية)', '#00E676', 'QAR', 'ar')">
                        <span class="flag-circle">🇶🇦</span>
                        <span class="lang-name">دولة قطر (العربية)</span>
                        <span class="curr-pill">QAR</span>
                    </button>
                    <div style="height:1px; background:rgba(6,35,25,0.06); margin:6px 0;"></div>
                    <!-- 5. English Global -->
                    <button type="button" class="country-lang-item" onclick="selectCountry('om', '🌐', 'English', '#00E676', 'USD', 'en')">
                        <span class="flag-circle">🌐</span>
                        <span class="lang-name">English (Global GCC)</span>
                        <span class="curr-pill">USD $</span>
                    </button>
                </div>
            </div>

            <!-- <span data-i18n="nav_login">Login</span> Button (As shown in User Pic 2) -->
            <a href="<?php echo base_url('admin') ?>" class="btn btn-sm d-none d-sm-inline-block" style="border:1.5px solid #d8e8e0; border-radius:10px; font-weight:700; color:#062319; padding:7px 16px; font-size:13.5px; background:#ffffff;">
                <span data-i18n="nav_login">Login</span>
            </a>

            <!-- Request a Demo CTA -->
            <a href="<?php echo base_url('contact') ?>" class="btn-greenly" id="headerDemoBtn" style="padding:7px 18px; font-size:13.5px; border-radius:10px;">
                Request a Demo
            </a>

            <!-- Mobile Hamburger Toggle -->
            <button class="navbar-toggle d-lg-none" type="button" data-bs-toggle="collapse" data-bs-target="#mobileNavMenu" aria-label="Toggle navigation" style="border:none; background:transparent; font-size:22px; color:#062319;">
                <i class="fa fa-bars"></i>
            </button>
        </div>
    </div>

    <!-- Mobile Nav Collapse -->
    <div class="collapse d-lg-none bg-white p-3 border-top" id="mobileNavMenu">
        <ul class="list-unstyled mb-0">
            <li class="py-2"><a href="<?php echo base_url('') ?>" class="text-dark fw-bold text-decoration-none">Home</a></li>
            <li class="py-2"><a href="<?php echo base_url('services') ?>" class="text-dark fw-bold text-decoration-none">Solutions &amp; Services</a></li>
            <li class="py-2"><a href="<?php echo base_url('resources') ?>" class="text-dark fw-bold text-decoration-none">Resources</a></li>
            <li class="py-2"><a href="<?php echo base_url('about') ?>" class="text-dark fw-bold text-decoration-none">About Growth</a></li>
            <li class="py-2"><a href="<?php echo base_url('career') ?>" class="text-dark fw-bold text-decoration-none">Careers</a></li>
            <li class="py-2"><a href="<?php echo base_url('contact') ?>" class="text-dark fw-bold text-decoration-none">Contact Us</a></li>
            <li class="py-2">
                <button type="button" class="growpilot-nav-btn w-100 justify-content-center" onclick="toggleGrowPilotDrawer()">
                    <span class="growpilot-spark">✦</span> Launch GrowPilot AI
                </button>
            </li>
        </ul>
    </div>
</header>

<script>
function toggleCountryDropdown() {
    var menu = document.getElementById('countryDropdownMenu');
    if (menu) {
        menu.style.display = (menu.style.display === 'none' || menu.style.display === '') ? 'block' : 'none';
    }
}

document.addEventListener('click', function(e) {
    var wrap = document.getElementById('countrySelectorWrap');
    var menu = document.getElementById('countryDropdownMenu');
    if (wrap && menu && !wrap.contains(e.target)) {
        menu.style.display = 'none';
    }
});

function selectCountry(countryCode, flagEmoji, name, themeColor, currency, lang) {
    localStorage.setItem('growth_lang', lang);
    localStorage.setItem('growth_country', countryCode);
    document.body.setAttribute('data-country', countryCode);
    var flagEl = document.getElementById('currentCountryFlag');
    var nameEl = document.getElementById('currentCountryName');
    if (flagEl) flagEl.textContent = flagEmoji;
    if (nameEl) nameEl.textContent = name;
    
    // Close dropdown
    var menu = document.getElementById('countryDropdownMenu');
    if (menu) menu.style.display = 'none';

    // Highlight active item
    document.querySelectorAll('.country-lang-item').forEach(function(item) {
        item.classList.remove('active');
        if (item.textContent.includes(name)) item.classList.add('active');
    });

    // Dynamic accent color
    document.documentElement.style.setProperty('--greenly-primary', themeColor);
    document.documentElement.style.setProperty('--country-accent', themeColor);

    // Sync CRM currency dropdown if present
    var crmSelect = document.getElementById('crmCurrencySelect');
    if (crmSelect) {
        for (var i = 0; i < crmSelect.options.length; i++) {
            if (crmSelect.options[i].value === currency) {
                crmSelect.selectedIndex = i;
                if (typeof updateCrmCalculator === 'function') updateCrmCalculator();
                break;
            }
        }
    }

    // Sync localized text labels
    var demoBtn = document.getElementById('headerDemoBtn');
    if (demoBtn) {
        if (lang === 'ar') demoBtn.textContent = 'احجز استشارة';
        else if (lang === 'fr') demoBtn.textContent = 'Commencer';
        else if (lang === 'de') demoBtn.textContent = 'Jetzt starten';
        else if (lang === 'hi') demoBtn.textContent = 'डेमो अनुरोध';
        else demoBtn.textContent = 'Request a Demo';
    }

    // Call global translation dictionary for all data-i18n elements
    if (typeof window.applySiteTranslations === 'function') {
        window.applySiteTranslations(lang);
    }
    if (typeof window.syncMadeSimpleCountry === 'function') {
        window.syncMadeSimpleCountry(countryCode);
    }

    // Dynamic Toastr notification
    if (window.toastr) {
        toastr.info('Region set to ' + flagEmoji + ' ' + name + ' (' + currency + ')');
    }
}
</script>