<!DOCTYPE html>
<html lang="en">

<head>
	<?php include 'includes/head.php' ?>

</head>

<body class="home-solar">
	<!-- Start Preloader -->
	<div id="preloader">
		<div id="consua-preloader" class="consua-preloader">
			<div class="animation-preloader">
				<div class="spinner"></div>
				<div class="txt-loading"> <span data-text-preloader="G" class="letters-loading">
                    G
                    </span> <span data-text-preloader="R" class="letters-loading">
                    R
                    </span> <span data-text-preloader="O" class="letters-loading">
                    O
                    </span> <span data-text-preloader="W" class="letters-loading">
                    W
                    </span> <span data-text-preloader="T" class="letters-loading">
                    T
                    </span> <span data-text-preloader="H" class="letters-loading">
                    H
                    </span> 
            </div>
			</div>
			<div class="loader">
				<div class="row">
					<div class="col-3 loader-section section-left">
						<div class="bg"></div>
					</div>
					<div class="col-3 loader-section section-left">
						<div class="bg"></div>
					</div>
					<div class="col-3 loader-section section-right">
						<div class="bg"></div>
					</div>
					<div class="col-3 loader-section section-right">
						<div class="bg"></div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End Preloader -->
	<?php include 'includes/header.php' ?>

	<!-- Start Greenly-Style Hero Area -->
	<section class="greenly-hero-section">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-lg-6 mb-5 mb-lg-0">
					<div class="greenly-hero-badge">
						<span class="growpilot-spark">✦</span>
						<span>Oman &amp; GCC Sustainable Suite • Carbon &amp; ESG</span>
					</div>
					<h1 class="greenly-hero-title">
						Climate Intelligence for Better Decisions &amp; Growth.
					</h1>
					<p class="greenly-hero-subtitle">
						Measure, report, and reduce your company's emissions with Growth's carbon accounting &amp; ESG suite. Transform your climate strategy into a measurable growth driver with dedicated human advisors in Oman and GCC.
					</p>

					<div class="greenly-hero-actions">
						<a href="<?php echo base_url('contact') ?>" class="btn-greenly">
							Book a Free Consultation <i class="fas fa-arrow-right"></i>
						</a>
						<a href="#energy-calculator" class="btn-greenly-outline">
							Free Assessment Tools
						</a>
					</div>

					<div class="greenly-rating-pill">
						<div class="d-flex align-items-center gap-2">
							<span class="greenly-stars">★★★★★</span>
							<strong style="color:#062319;">4.9 / 5.0</strong>
						</div>
						<span style="color:#b2d1c4;">|</span>
						<span class="greenly-rating-text">Top-rated Sustainability &amp; Energy Suite in Oman &amp; GCC</span>
					</div>
				</div>

								<!-- Right Column: Animated Power BI Sustainability Telemetry Dashboard -->
				<div class="col-lg-6">
					<div class="powerbi-live-card">
						<!-- Power BI Header (Branded bar, No Fullscreen, No FY 2024-25) -->
						<div class="pbi-topbar">
							<div class="d-flex align-items-center gap-2">
								<div class="pbi-icon-badge">
									<svg width="22" height="22" viewBox="0 0 24 24" fill="none">
										<rect x="2" y="13" width="4" height="8" rx="1" fill="#F2C811"/>
										<rect x="8" y="9" width="4" height="12" rx="1" fill="#F2C811" opacity="0.9"/>
										<rect x="14" y="5" width="4" height="16" rx="1" fill="#F2C811" opacity="0.8"/>
										<rect x="20" y="2" width="4" height="19" rx="1" fill="#F2C811" opacity="0.6"/>
									</svg>
								</div>
								<div>
									<div class="pbi-title">Power BI Climate Telemetry</div>
									<div class="pbi-sub">Oman &amp; GCC Enterprise Suite</div>
								</div>
							</div>
							<div class="pbi-live-indicator">
								<span class="pbi-live-pulse-dot"></span> LIVE SYNC
							</div>
						</div>

						<!-- Power BI Filter Pills -->
						<div class="pbi-tabs-bar">
							<button type="button" class="pbi-tab active" id="pbiTabEnv" onclick="switchPowerBiHeroTab('env', this)">
								<i class="fas fa-leaf me-1"></i> Environment
							</button>
							<button type="button" class="pbi-tab" id="pbiTabSoc" onclick="switchPowerBiHeroTab('soc', this)">
								<i class="fas fa-users me-1"></i> Social
							</button>
							<button type="button" class="pbi-tab" id="pbiTabGov" onclick="switchPowerBiHeroTab('gov', this)">
								<i class="fas fa-shield-alt me-1"></i> Governance
							</button>
						</div>

						<!-- 4 Live KPI Cards -->
						<div class="pbi-kpi-grid">
							<div class="pbi-kpi-card">
								<span class="pbi-kpi-lbl" id="kpiLbl1">CO₂e Abatement</span>
								<div class="pbi-kpi-val" id="kpiVal1">48,214 <small style="font-size:12px; font-weight:normal;">t</small></div>
								<span class="pbi-kpi-badge down" id="kpiBadge1"><i class="fas fa-arrow-down"></i> -18.4% YoY</span>
							</div>
							<div class="pbi-kpi-card">
								<span class="pbi-kpi-lbl" id="kpiLbl2">Energy Intensity</span>
								<div class="pbi-kpi-val" id="kpiVal2">0.38 <small style="font-size:11px; font-weight:normal;">MWh/kOMR</small></div>
								<span class="pbi-kpi-badge down" id="kpiBadge2"><i class="fas fa-arrow-down"></i> -14.2% YoY</span>
							</div>
							<div class="pbi-kpi-card">
								<span class="pbi-kpi-lbl" id="kpiLbl3">Clean Energy Share</span>
								<div class="pbi-kpi-val" id="kpiVal3">64.2%</div>
								<span class="pbi-kpi-badge up" id="kpiBadge3"><i class="fas fa-arrow-up"></i> +22.8% YoY</span>
							</div>
							<div class="pbi-kpi-card">
								<span class="pbi-kpi-lbl" id="kpiLbl4">Audit Assurance</span>
								<div class="pbi-kpi-val" id="kpiVal4" style="color:#00a854;">100%</div>
								<span class="pbi-kpi-badge up" id="kpiBadge4"><i class="fas fa-check-circle"></i> ISO &amp; CMA Ready</span>
							</div>
						</div>

						<!-- Animated Telemetry Wave / Spline Chart -->
						<div class="pbi-chart-container">
							<div class="d-flex justify-content-between align-items-center mb-1">
								<span style="font-size:11.5px; font-weight:700; color:#062319;" id="pbiChartTitle">Emissions Decarbonization Trajectory (tCO₂e)</span>
								<span style="font-size:10.5px; color:#00E676; font-weight:600;"><i class="fas fa-circle me-1" style="font-size:7px;"></i> Real-Time Feed</span>
							</div>
							<div class="pbi-svg-wrap position-relative">
								<svg width="100%" height="135" viewBox="0 0 500 135" preserveAspectRatio="none">
									<defs>
										<linearGradient id="pbiGreenGrad" x1="0" y1="0" x2="0" y2="1">
											<stop offset="0%" stop-color="#00E676" stop-opacity="0.45"/>
											<stop offset="100%" stop-color="#00E676" stop-opacity="0.0"/>
										</linearGradient>
										<linearGradient id="pbiCyanGrad" x1="0" y1="0" x2="0" y2="1">
											<stop offset="0%" stop-color="#00b0ff" stop-opacity="0.25"/>
											<stop offset="100%" stop-color="#00b0ff" stop-opacity="0.0"/>
										</linearGradient>
										<linearGradient id="pbiLineGrad" x1="0" y1="0" x2="1" y2="0">
											<stop offset="0%" stop-color="#00b0ff"/>
											<stop offset="60%" stop-color="#00E676"/>
											<stop offset="100%" stop-color="#F2C811"/>
										</linearGradient>
									</defs>
									<!-- Guideline -->
									<line x1="0" y1="105" x2="500" y2="55" stroke="#cbd5e1" stroke-dasharray="4 4" stroke-width="1.5"/>
									<text x="495" y="50" text-anchor="end" fill="#64748b" font-size="9.5">2050 Net-Zero Track</text>
									
									<!-- Primary Animated Waves Area -->
									<path id="pbiChartArea" d="M 0,95 Q 80,75 160,85 T 300,55 T 420,35 T 500,22 L 500,135 L 0,135 Z" fill="url(#pbiGreenGrad)">
										<animate attributeName="d" dur="6s" repeatCount="indefinite" values="
											M 0,95 Q 80,72 160,86 T 300,52 T 420,36 T 500,22 L 500,135 L 0,135 Z;
											M 0,90 Q 80,82 160,76 T 300,60 T 420,30 T 500,26 L 500,135 L 0,135 Z;
											M 0,96 Q 80,68 160,92 T 300,48 T 420,40 T 500,19 L 500,135 L 0,135 Z;
											M 0,95 Q 80,72 160,86 T 300,52 T 420,36 T 500,22 L 500,135 L 0,135 Z
										"/>
									</path>
									
									<!-- Secondary Translucent Ripple Wave -->
									<path d="M 0,105 Q 90,85 180,95 T 320,65 T 440,45 T 500,32 L 500,135 L 0,135 Z" fill="url(#pbiCyanGrad)">
										<animate attributeName="d" dur="8s" repeatCount="indefinite" values="
											M 0,105 Q 90,85 180,95 T 320,65 T 440,45 T 500,32 L 500,135 L 0,135 Z;
											M 0,100 Q 90,92 180,86 T 320,72 T 440,38 T 500,36 L 500,135 L 0,135 Z;
											M 0,108 Q 90,78 180,100 T 320,58 T 440,49 T 500,28 L 500,135 L 0,135 Z;
											M 0,105 Q 90,85 180,95 T 320,65 T 440,45 T 500,32 L 500,135 L 0,135 Z
										"/>
									</path>

									<!-- Animated Wave Stroke Line -->
									<path id="pbiChartLine" d="M 0,95 Q 80,75 160,85 T 300,55 T 420,35 T 500,22" fill="none" stroke="url(#pbiLineGrad)" stroke-width="2.8" stroke-linecap="round">
										<animate attributeName="d" dur="6s" repeatCount="indefinite" values="
											M 0,95 Q 80,72 160,86 T 300,52 T 420,36 T 500,22;
											M 0,90 Q 80,82 160,76 T 300,60 T 420,30 T 500,26;
											M 0,96 Q 80,68 160,92 T 300,48 T 420,40 T 500,19;
											M 0,95 Q 80,72 160,86 T 300,52 T 420,36 T 500,22
										"/>
									</path>
									
									<!-- Pulsing Current Node Following Waves -->
									<circle cx="420" cy="35" r="5" fill="#00E676" stroke="#ffffff" stroke-width="2">
										<animate attributeName="r" values="4;7;4" dur="2s" repeatCount="indefinite"/>
										<animate attributeName="cy" values="36;30;40;36" dur="6s" repeatCount="indefinite"/>
									</circle>
								</svg>
								<div class="pbi-chart-tooltip" id="pbiChartTooltip">
									<i class="fas fa-check-circle text-success me-1"></i> <strong>Muscat HQ:</strong> 1,840 tCO₂e <em>(On Track)</em>
								</div>
							</div>
						</div>

						<!-- Source Breakdown Multi-Bar -->
						<div class="pbi-energy-breakdown mt-2">
							<div class="d-flex justify-content-between mb-1" style="font-size:11px; font-weight:700; color:#334155;">
								<span id="pbiSrc1"><i class="fas fa-sun text-warning me-1"></i> Solar PV (44%)</span>
								<span id="pbiSrc2"><i class="fas fa-bolt text-info me-1"></i> Grid Clean (36%)</span>
								<span id="pbiSrc3"><i class="fas fa-recycle text-success me-1"></i> Cogeneration (20%)</span>
							</div>
							<div class="pbi-multi-bar">
								<div class="bar-seg" id="pbiBar1" style="width: 44%; background: #00E676;"></div>
								<div class="bar-seg" id="pbiBar2" style="width: 36%; background: #00b0ff;"></div>
								<div class="bar-seg" id="pbiBar3" style="width: 20%; background: #F2C811;"></div>
							</div>
						</div>

						<!-- Bottom Telemetry Ticker -->
						<div class="pbi-footer-ticker d-flex justify-content-between align-items-center mt-3 pt-2">
							<div style="font-size:11px; color:#64748b;">
								<i class="fas fa-satellite-dish text-success me-1"></i> <strong>IoT Stream:</strong> 14 Muscat &amp; GCC sites streaming
							</div>
							<div class="d-flex align-items-center gap-2">
								<span class="badge" style="background:rgba(0,230,118,0.15); color:#00E676; font-weight:700; font-size:10.5px;">ISO 14064-1</span>
								<span class="badge" style="background:rgba(0,176,255,0.15); color:#00b0ff; font-weight:700; font-size:10.5px;">CMA Verified</span>
							</div>
						</div>
					</div>
				</div>
</div>
		</div>
	</section>

	<!-- End Hero Area -->

	<!-- 2. WHO WE ARE (Pic 4: Single authoritative instance) -->
	<section class="about-style-five-area default-padding overflow-hidden bg-white" id="who-we-are">
		<div class="container">
			<div class="row align-center">
				<div class="col-lg-6">
					<div class="about-style-five-thumb position-relative">
						<img src="<?php echo base_url($frontAssetBase . 'img/growth/executive-handshake.png') ?>" alt="Growth Investment & Development" class="img-fluid rounded-4 shadow-lg">
						<div class="growth-hexagon-badge">
							<span style="font-size:13px; text-transform:uppercase; letter-spacing:0.08em; opacity:0.9;">Growth</span>
							<strong style="font-size:16px; font-weight:800; line-height:1.2;">Investment &amp;<br>Development</strong>
						</div>
					</div>
				</div>
				<div class="col-lg-5 offset-lg-1">
					<div class="about-style-five-info">
						<span class="regional-kicker">WHO WE ARE</span>
						<h2 class="who-typing-heading" style="font-size: clamp(2rem, 3.2vw, 2.6rem); font-weight: 800; color: #062319; margin-bottom: 18px; line-height: 1.25; min-height: 65px;">
							<span id="whoTypingTarget" class="typing-text">Partnering with organizations to build lasting value.</span><span class="typing-cursor" style="color:#00E676; font-weight:900;">|</span>
						</h2>
						<p class="text-justify" style="color: #556B62; font-size: 15.5px; line-height: 1.7; margin-bottom: 24px;">
							Established in Oman, <b>Growth Investment &amp; Development LLC</b> supports organizations with practical sustainability, compliance, governance and operational improvement strategies. We help businesses move from strategy to execution through commercially grounded actions.
						</p>
						<h3 style="font-size: 1.3rem; font-weight: 800; color: #062319; margin-bottom: 16px;">Our focus areas</h3>
						<ul class="growth-focus-checklist">
							<li>
								<div class="icon-check"><i class="fas fa-check-circle"></i></div>
								<span>Sustainability consulting</span>
							</li>
							<li>
								<div class="icon-check"><i class="fas fa-check-circle"></i></div>
								<span>Energy efficiency &amp; audits</span>
							</li>
							<li>
								<div class="icon-check"><i class="fas fa-check-circle"></i></div>
								<span>ESG &amp; regulatory compliance</span>
							</li>
							<li>
								<div class="icon-check"><i class="fas fa-check-circle"></i></div>
								<span>Process safety &amp; project management</span>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- 3. VISION & MISSION (Pic 5: Angled two-tone innovation beacon) -->
	<section class="feature-style-one-area half-angle-shape overflow-hidden default-padding" id="vision-mission">
		<div class="container">
			<div class="row align-center">
				<div class="col-lg-5">
					<div class="feature-style-one-heading text-light">
						<div class="arrow-shape">
							<img src="<?php echo base_url($frontAssetBase . 'img/icons/arrow-green.webp') ?>" alt="Green arrow" onerror="this.src='<?php echo base_url('public/front/assets/img/icons/arrow-green.webp') ?>'">
						</div>
						<h2 class="title mb-25" style="font-size: clamp(2rem, 3.2vw, 2.75rem); font-weight:800; line-height:1.25;">
							An innovation beacon in the fields of investment and consultation services
						</h2>
						<p style="color: #d1e7dd; font-size: 15.5px; line-height: 1.7;">
							The growth team includes a selection of scientific and practical competencies, enabling the company to provide integrated solutions. Growth is keen to build relationships based on trust and transparency with its partners.
						</p>
					</div>
				</div>
				<div class="col-lg-6 offset-lg-1 pl-60 pl-md-15 pl-xs-10 mt-md-50 mt-xs-50">
					<!-- Vision Item -->
					<div class="feature-style-one wow fadeInUp">
						<div class="icon">
							<img src="<?php echo base_url($frontAssetBase . 'img/icons/vision.webp') ?>" alt="Vision Icon" onerror="this.src='<?php echo base_url('public/front/assets/img/icons/vision.webp') ?>'">
						</div>
						<div class="info">
							<h4>Vision</h4>
							<p class="text-justify">
								<i>We look forward to being one of the best strategic partners and actively contributing to building a sustainable and prosperous future for our partners.</i>
							</p>
						</div>
					</div>
					<!-- Values Item -->
					<div class="feature-style-one wow fadeInUp mt-4" data-wow-delay="300ms">
						<div class="icon">
							<img src="<?php echo base_url($frontAssetBase . 'img/icons/mission.webp') ?>" alt="Values Icon" onerror="this.src='<?php echo base_url('public/front/assets/img/icons/mission.webp') ?>'">
						</div>
						<div class="info">
							<h4>Values</h4>
							<p class="text-justify">
								<i>Our mission is to guide businesses toward a sustainable future by integrating innovative solutions in sustainability, ESG compliance, and process safety. We are dedicated to delivering value-driven results that align with our clients' long-term growth goals.</i>
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- 3. MOVING ACCREDITATION & COMPLIANCE TEXT TICKER (User Pic 2) -->
	<section class="growth-accreditation-marquee">
		<div class="growth-accreditation-track">
			<div class="accreditation-item"><span class="acc-star">★</span> <span data-i18n="t_ifrs">IFRS S1 &amp; S2 Certified</span></div>
			<div class="accreditation-item"><span class="acc-star">★</span> <span data-i18n="t_govt">Govt Approved (Oman &amp; GCC Frameworks)</span></div>
			<div class="accreditation-item"><span class="acc-star">★</span> <span data-i18n="t_tnfd">TNFD Approved &amp; Nature Aligned</span></div>
			<div class="accreditation-item"><span class="acc-star">★</span> <span data-i18n="t_tcfd">TCFD Aligned Disclosures</span></div>
			<div class="accreditation-item"><span class="acc-star">★</span> <span data-i18n="t_brsr">BRSR &amp; GRI Core Standard Ready</span></div>
			<div class="accreditation-item"><span class="acc-star">★</span> <span class="acc-highlight" data-i18n="t_top">#1 Sustainability &amp; Energy Suite in Oman</span></div>
			<div class="accreditation-item"><span class="acc-star">★</span> <span data-i18n="t_clients">50+ GCC Industrial &amp; Corporate Clients</span></div>
			<div class="accreditation-item"><span class="acc-star">★</span> <span data-i18n="t_2040">Oman Vision 2040 Decarbonization Aligned</span></div>
			<div class="accreditation-item"><span class="acc-star">★</span> <span data-i18n="t_iso">ISO 14064 GHG &amp; ISO 50001 Energy Audited</span></div>

			<!-- Duplicate for continuous loop -->
			<div class="accreditation-item"><span class="acc-star">★</span> <span data-i18n="t_ifrs">IFRS S1 &amp; S2 Certified</span></div>
			<div class="accreditation-item"><span class="acc-star">★</span> <span data-i18n="t_govt">Govt Approved (Oman &amp; GCC Frameworks)</span></div>
			<div class="accreditation-item"><span class="acc-star">★</span> <span data-i18n="t_tnfd">TNFD Approved &amp; Nature Aligned</span></div>
			<div class="accreditation-item"><span class="acc-star">★</span> <span data-i18n="t_tcfd">TCFD Aligned Disclosures</span></div>
			<div class="accreditation-item"><span class="acc-star">★</span> <span data-i18n="t_brsr">BRSR &amp; GRI Core Standard Ready</span></div>
			<div class="accreditation-item"><span class="acc-star">★</span> <span class="acc-highlight" data-i18n="t_top">#1 Sustainability &amp; Energy Suite in Oman</span></div>
			<div class="accreditation-item"><span class="acc-star">★</span> <span data-i18n="t_clients">50+ GCC Industrial &amp; Corporate Clients</span></div>
			<div class="accreditation-item"><span class="acc-star">★</span> <span data-i18n="t_2040">Oman Vision 2040 Decarbonization Aligned</span></div>
			<div class="accreditation-item"><span class="acc-star">★</span> <span data-i18n="t_iso">ISO 14064 GHG &amp; ISO 50001 Energy Audited</span></div>
		</div>
	</section>

	<!-- 4. AUDIT-READY DASHBOARDS WITH ANIMATED SLIDER (User Pic 1) -->
		<!-- 5. Audit-Ready Dashboards (Exact User Images 1, 2, 3 Stepper with Live Counter & Numbers Effect) -->
	<section class="audit-ready-section" id="audit-ready-dashboards">
		<div class="container">
			<div class="text-center mb-4">
				<h2 id="stepperMainTitle" style="font-size: clamp(2.1rem, 3.5vw, 2.85rem); font-weight:800; color:#062319; transition:all 0.3s ease;" data-i18n="audit_title">
					Audit-Ready Dashboards
				</h2>
				<p id="stepperMainSub" style="color:#556B62; font-size:16px; max-width:680px; margin:8px auto 0; transition:all 0.3s ease;" data-i18n="audit_sub">
					Generate assurance-ready reports for BRSR, GRI, TCFD, and more &mdash; in minutes, not months.
				</p>
			</div>

			<!-- Stepper Navigation (Data -> Structure -> Audit -> Advantage) -->
			<div class="audit-stepper-nav mb-4">
				<div class="audit-stepper-line"></div>
				<div class="audit-stepper-progress" id="auditStepProgress" style="width: 66.6%;"></div>
				<div class="audit-stepper-items">
					<button type="button" class="audit-step-node" onclick="setAuditStep(0)" id="stepNode0">
						<div class="audit-step-dot"></div>
						<span class="audit-step-label">Data</span>
					</button>
					<button type="button" class="audit-step-node" onclick="setAuditStep(1)" id="stepNode1">
						<div class="audit-step-dot"></div>
						<span class="audit-step-label">Structure</span>
					</button>
					<button type="button" class="audit-step-node active" onclick="setAuditStep(2)" id="stepNode2">
						<div class="audit-step-dot"></div>
						<span class="audit-step-label">Audit</span>
					</button>
					<button type="button" class="audit-step-node" onclick="setAuditStep(3)" id="stepNode3">
						<div class="audit-step-dot"></div>
						<span class="audit-step-label">Advantage</span>
					</button>
				</div>
			</div>

			<!-- Animated Slide Stage -->
			<div class="audit-slide-stage">
				<!-- Card 0: Data (Exact User Pic 1 - Spreadsheets Chaos) -->
				<div class="audit-slide-card" id="auditCard0">
					<div class="p-4 p-md-5 rounded-4 shadow-sm" style="background:#ffffff; border:1px solid #e1ede6; box-shadow:0 15px 40px rgba(6,35,25,0.06);">
						<!-- Table Header Tabs (User Pic 1) -->
						<div class="d-flex align-items-center gap-2 mb-3">
							<span style="background:#fff1f0; color:#e02e24; border:1px solid #ffccc7; font-size:12px; font-weight:700; padding:3px 10px; border-radius:6px;">
								#REF! onment
							</span>
							<span style="font-size:12px; font-weight:700; color:#556B62; display:flex; align-items:center; gap:5px; padding:3px 10px; background:#f4f8f6; border-radius:6px;">
								<span style="display:inline-block; width:8px; height:8px; border-radius:50%; background:#f59e0b;"></span> Social
							</span>
						</div>

						<!-- Spreadsheet Grid (Exact User Pic 1) -->
						<div class="table-responsive rounded-3 overflow-hidden border mb-3" style="border-color:#e6f0eb !important;">
							<table class="table table-bordered mb-0" style="font-size:13px; color:#062319;">
								<thead style="background:#f0f7f3; text-align:center;">
									<tr>
										<th style="width:40px; background:#e5efe9; color:#6b877a;"></th>
										<th style="width:25%; color:#556B62; font-weight:700;">A</th>
										<th style="width:25%; color:#556B62; font-weight:700;">B</th>
										<th style="width:25%; color:#556B62; font-weight:700;">C</th>
										<th style="width:25%; color:#556B62; font-weight:700;">D</th>
									</tr>
								</thead>
								<tbody>
									<tr style="background:#f9fcfb; font-weight:700;">
										<td class="text-center" style="background:#edf5f0; color:#6b877a;">1</td>
										<td style="color:#062319;">Company</td>
										<td style="background:#e8f7ee; color:#062319;">Scope 1 (tCO₂)</td>
										<td style="background:#e8f7ee; color:#062319;">Scope 2 (tCO₂)</td>
										<td style="background:#fef9ed; color:#062319;">Water (kL)</td>
									</tr>
									<tr>
										<td class="text-center" style="background:#edf5f0; color:#6b877a;">2</td>
										<td>Acme Corp</td>
										<td>1,245</td>
										<td style="background:#fafafa;"></td>
										<td class="position-relative">
											34
											<span class="position-absolute end-0 top-50 translate-middle-y me-2 badge" style="background:#fff1f0; color:#e02e24; border:1px solid #ffa39e; font-size:10px; font-weight:600;">
												Missing Q3
											</span>
										</td>
									</tr>
									<tr>
										<td class="text-center" style="background:#edf5f0; color:#6b877a;">3</td>
										<td class="position-relative">
											Beta Ltd
											<span class="position-absolute start-0 top-50 translate-middle-y ms-1 badge" style="background:#fff1f0; color:#e02e24; border:1px solid #ffa39e; font-size:10px; font-weight:600; z-index:2;">
												Scope 3 ???
											</span>
										</td>
										<td style="background:#fafafa;"></td>
										<td>1,102</td>
										<td>5,600</td>
									</tr>
									<tr>
										<td class="text-center" style="background:#edf5f0; color:#6b877a;">4</td>
										<td>Gamma Inc</td>
										<td>3,450</td>
										<td style="background:#fafafa;"></td>
										<td style="background:#fafafa;"></td>
									</tr>
									<tr>
										<td class="text-center" style="background:#edf5f0; color:#6b877a;">5</td>
										<td>Delta Co</td>
										<td>780</td>
										<td>445</td>
										<td class="position-relative">
											1,200
											<span class="position-absolute end-0 top-50 translate-middle-y me-2 badge" style="background:#fff1f0; color:#e02e24; border:1px solid #ffa39e; font-size:10px; font-weight:600;">
												Wrong unit
											</span>
										</td>
									</tr>
								</tbody>
							</table>
						</div>

						<div class="text-center mt-3">
							<button type="button" class="btn btn-link p-0 text-decoration-none" onclick="setAuditStep(3)" style="font-size:13.5px; font-weight:700; color:#0b5980;">
								Skip to results &rarr;
							</button>
						</div>
					</div>
				</div>

				<!-- Card 1: Structure (From Chaos to Structured Intelligence) -->
				<div class="audit-slide-card" id="auditCard1">
					<div class="p-4 p-md-5 rounded-4 shadow-sm" style="background:#ffffff; border:1px solid #e1ede6; box-shadow:0 15px 40px rgba(6,35,25,0.06);">
						<div class="d-flex justify-content-between align-items-center mb-4">
							<div>
								<h4 style="font-size:18px; font-weight:800; color:#062319; margin:0;">AI Data Structuring &amp; Factor Normalization</h4>
								<span style="font-size:12.5px; color:#556B62;">Invoices &bull; Utility Meters &bull; ERP Schema Validation</span>
							</div>
							<span class="badge" style="background:#e8f7ee; color:#008744; font-size:12px; font-weight:700; padding:6px 14px;">
								<i class="fas fa-check-circle me-1"></i> 100% Schema Validated
							</span>
						</div>

						<div class="row g-3 align-items-center mb-4">
							<div class="col-md-4">
								<div class="p-3 rounded-3" style="background:#f4f8f6; border:1px solid #d4e3dc;">
									<div class="d-flex align-items-center gap-2 mb-2">
										<i class="fas fa-file-invoice text-success"></i>
										<strong style="font-size:13px; color:#062319;">Nama/Majan Electricity</strong>
									</div>
									<div class="d-flex justify-content-between" style="font-size:11.5px; color:#556B62;">
										<span>Grid kWh</span>
										<strong style="color:#00a854;">1,420,500 kWh</strong>
									</div>
									<div class="progress mt-1" style="height:6px; background:#e2ede6;">
										<div class="progress-bar" style="width:100%; background:#00a854;"></div>
									</div>
								</div>
							</div>
							<div class="col-md-4">
								<div class="p-3 rounded-3" style="background:#f4f8f6; border:1px solid #d4e3dc;">
									<div class="d-flex align-items-center gap-2 mb-2">
										<i class="fas fa-gas-pump text-warning"></i>
										<strong style="font-size:13px; color:#062319;">Diesel &amp; Fleet Fuel</strong>
									</div>
									<div class="d-flex justify-content-between" style="font-size:11.5px; color:#556B62;">
										<span>Liters Consumed</span>
										<strong style="color:#f59e0b;">84,200 L</strong>
									</div>
									<div class="progress mt-1" style="height:6px; background:#e2ede6;">
										<div class="progress-bar" style="width:100%; background:#f59e0b;"></div>
									</div>
								</div>
							</div>
							<div class="col-md-4">
								<div class="p-3 rounded-3" style="background:#f4f8f6; border:1px solid #d4e3dc;">
									<div class="d-flex align-items-center gap-2 mb-2">
										<i class="fas fa-truck-moving text-info"></i>
										<strong style="font-size:13px; color:#062319;">Logistics &amp; Scope 3</strong>
									</div>
									<div class="d-flex justify-content-between" style="font-size:11.5px; color:#556B62;">
										<span>Freight Tonne-km</span>
										<strong style="color:#0284c7;">312,000 tkm</strong>
									</div>
									<div class="progress mt-1" style="height:6px; background:#e2ede6;">
										<div class="progress-bar" style="width:100%; background:#0284c7;"></div>
									</div>
								</div>
							</div>
						</div>

						<div class="text-center">
							<button type="button" class="btn btn-link p-0 text-decoration-none" onclick="setAuditStep(2)" style="font-size:13.5px; font-weight:700; color:#0b5980;">
								Continue to Audit Dashboard &rarr;
							</button>
						</div>
					</div>
				</div>

				<!-- Card 2: Audit (Exact User Pic 2 - Audit-Ready Dashboard) -->
				<div class="audit-slide-card" id="auditCard2">
					<div class="p-4 p-md-5 rounded-4 shadow-sm" style="background:#ffffff; border:1px solid #e1ede6; box-shadow:0 15px 40px rgba(6,35,25,0.06);">
						<div class="d-flex justify-content-between align-items-center mb-4">
							<div>
								<h3 style="font-size:20px; font-weight:800; color:#062319; margin:0;">ESG Report Dashboard</h3>
								<span style="font-size:12.5px; color:#556B62;">FY 2024-25 &bull; Audit-ready</span>
							</div>
							<span class="badge" style="background:#e8f7ee; color:#008744; font-size:12px; font-weight:700; padding:6px 14px; border-radius:999px;">
								<i class="fas fa-check me-1"></i> Report ready
							</span>
						</div>

						<div class="row align-items-center g-4 mb-4">
							<!-- Left Circular Gauge (Exact User Pic 2) -->
							<div class="col-md-5 text-center">
								<div class="position-relative d-inline-block">
									<svg width="150" height="150" viewBox="0 0 100 100" style="transform: rotate(-90deg);">
										<circle cx="50" cy="50" r="42" fill="none" stroke="#e8f2ec" stroke-width="8"></circle>
										<circle id="auditDonutCircle" cx="50" cy="50" r="42" fill="none" stroke="#00a854" stroke-width="8" stroke-dasharray="264" stroke-dashoffset="26.4" stroke-linecap="round" style="transition: stroke-dashoffset 1.4s ease;"></circle>
									</svg>
									<div class="position-absolute top-50 start-50 translate-middle text-center">
										<div id="auditCounterVal" style="font-size:32px; font-weight:800; color:#062319; line-height:1;">90%</div>
										<span style="font-size:11px; color:#556B62; font-weight:600; display:block; margin-top:2px;">Data Completion</span>
									</div>
								</div>
							</div>

							<!-- Right Emissions by Scope (Exact User Pic 2) -->
							<div class="col-md-7">
								<div style="font-size:12px; font-weight:700; color:#556B62; margin-bottom:12px;">Emissions by Scope</div>

								<!-- S1 Bar -->
								<div class="mb-3">
									<div class="d-flex align-items-center gap-3">
										<span style="width:24px; font-size:12px; font-weight:700; color:#556B62;">S1</span>
										<div class="progress flex-grow-1" style="height:14px; background:#e8f2ec; border-radius:999px;">
											<div id="scopeBar1" class="progress-bar" style="width: 70%; background:#00a854; border-radius:999px; transition:width 1.2s ease;"></div>
										</div>
									</div>
								</div>

								<!-- S2 Bar -->
								<div class="mb-3">
									<div class="d-flex align-items-center gap-3">
										<span style="width:24px; font-size:12px; font-weight:700; color:#556B62;">S2</span>
										<div class="progress flex-grow-1" style="height:14px; background:#e8f2ec; border-radius:999px;">
											<div id="scopeBar2" class="progress-bar" style="width: 48%; background:#00b894; border-radius:999px; transition:width 1.2s ease;"></div>
										</div>
									</div>
								</div>

								<!-- S3 Bar -->
								<div class="mb-2">
									<div class="d-flex align-items-center gap-3">
										<span style="width:24px; font-size:12px; font-weight:700; color:#556B62;">S3</span>
										<div class="progress flex-grow-1" style="height:14px; background:#e8f2ec; border-radius:999px;">
											<div id="scopeBar3" class="progress-bar" style="width: 82%; background:#00cec9; border-radius:999px; transition:width 1.2s ease;"></div>
										</div>
									</div>
								</div>
							</div>
						</div>

						<!-- Framework Badges (Exact User Pic 2) -->
						<div class="d-flex flex-wrap gap-2 mb-3">
							<span class="badge" style="background:#f4f8f6; color:#062319; border:1px solid #d4e3dc; font-size:11.5px; font-weight:700; padding:6px 14px; border-radius:999px;">BRSR</span>
							<span class="badge" style="background:#f4f8f6; color:#062319; border:1px solid #d4e3dc; font-size:11.5px; font-weight:700; padding:6px 14px; border-radius:999px;">GRI</span>
							<span class="badge" style="background:#f4f8f6; color:#062319; border:1px solid #d4e3dc; font-size:11.5px; font-weight:700; padding:6px 14px; border-radius:999px;">TCFD</span>
							<span class="badge" style="background:#f4f8f6; color:#062319; border:1px solid #d4e3dc; font-size:11.5px; font-weight:700; padding:6px 14px; border-radius:999px;">CSRD</span>
						</div>

						<!-- Bottom Completion Bar (Exact User Pic 2) -->
						<div class="mb-3">
							<div class="d-flex justify-content-between mb-1" style="font-size:12px;">
								<span style="color:#556B62;">Data completion</span>
								<strong style="color:#062319;">90%</strong>
							</div>
							<div class="progress" style="height:8px; background:#e8f2ec; border-radius:999px;">
								<div class="progress-bar" style="width:90%; background:#00a854; border-radius:999px;"></div>
							</div>
						</div>

						<div class="text-center mt-3">
							<button type="button" class="btn btn-link p-0 text-decoration-none" onclick="setAuditStep(3)" style="font-size:13.5px; font-weight:700; color:#0b5980;">
								Skip to results &rarr;
							</button>
						</div>
					</div>
				</div>

				<!-- Card 3: Advantage (Exact User Pic 3 - 6 Feature Cards) -->
				<div class="audit-slide-card" id="auditCard3">
					<div class="p-4 p-md-5 rounded-4 shadow-sm" style="background:#ffffff; border:1px solid #e1ede6; box-shadow:0 15px 40px rgba(6,35,25,0.06);">
						<div class="row g-4">
							<!-- 1. End-to-End Platform -->
							<div class="col-md-6 col-lg-4">
								<div class="p-4 rounded-4 h-100" style="background:#ffffff; border:1.5px solid #e2ede6; box-shadow:0 10px 25px rgba(6,35,25,0.03);">
									<div style="width:42px; height:42px; background:#0b5943; color:#fff; border-radius:10px; display:flex; align-items:center; justify-content:center; margin-bottom:14px; font-size:18px;">
										<i class="fas fa-check-circle"></i>
									</div>
									<h4 style="font-size:16px; font-weight:800; color:#062319; margin-bottom:8px;">End-to-End Platform</h4>
									<p style="font-size:13px; color:#556B62; line-height:1.6; margin:0;">
										From data collection to report generation, manage your entire sustainability journey in one place.
									</p>
								</div>
							</div>

							<!-- 2. AI-Powered Insights -->
							<div class="col-md-6 col-lg-4">
								<div class="p-4 rounded-4 h-100" style="background:#ffffff; border:1.5px solid #e2ede6; box-shadow:0 10px 25px rgba(6,35,25,0.03);">
									<div style="width:42px; height:42px; background:#0b5943; color:#fff; border-radius:10px; display:flex; align-items:center; justify-content:center; margin-bottom:14px; font-size:18px;">
										<i class="fas fa-bolt"></i>
									</div>
									<h4 style="font-size:16px; font-weight:800; color:#062319; margin-bottom:8px;">AI-Powered Insights</h4>
									<p style="font-size:13px; color:#556B62; line-height:1.6; margin:0;">
										Leverage AI to automatically analyze trends, identify risks, and generate recommendations.
									</p>
								</div>
							</div>

							<!-- 3. Multi-Framework Support -->
							<div class="col-md-6 col-lg-4">
								<div class="p-4 rounded-4 h-100" style="background:#ffffff; border:1.5px solid #e2ede6; box-shadow:0 10px 25px rgba(6,35,25,0.03);">
									<div style="width:42px; height:42px; background:#0b5943; color:#fff; border-radius:10px; display:flex; align-items:center; justify-content:center; margin-bottom:14px; font-size:18px;">
										<i class="fas fa-file-alt"></i>
									</div>
									<h4 style="font-size:16px; font-weight:800; color:#062319; margin-bottom:8px;">Multi-Framework Support</h4>
									<p style="font-size:13px; color:#556B62; line-height:1.6; margin:0;">
										Generate reports for BRSR, GRI, TCFD, CSRD, and more from a single data collection process.
									</p>
								</div>
							</div>

							<!-- 4. Supply Chain Integration -->
							<div class="col-md-6 col-lg-4">
								<div class="p-4 rounded-4 h-100" style="background:#ffffff; border:1.5px solid #e2ede6; box-shadow:0 10px 25px rgba(6,35,25,0.03);">
									<div style="width:42px; height:42px; background:#0b5943; color:#fff; border-radius:10px; display:flex; align-items:center; justify-content:center; margin-bottom:14px; font-size:18px;">
										<i class="fas fa-users"></i>
									</div>
									<h4 style="font-size:16px; font-weight:800; color:#062319; margin-bottom:8px;">Supply Chain Integration</h4>
									<p style="font-size:13px; color:#556B62; line-height:1.6; margin:0;">
										Engage suppliers and partners with customizable templates and automated data collection.
									</p>
								</div>
							</div>

							<!-- 5. Audit-Ready Reports -->
							<div class="col-md-6 col-lg-4">
								<div class="p-4 rounded-4 h-100" style="background:#ffffff; border:1.5px solid #e2ede6; box-shadow:0 10px 25px rgba(6,35,25,0.03);">
									<div style="width:42px; height:42px; background:#0b5943; color:#fff; border-radius:10px; display:flex; align-items:center; justify-content:center; margin-bottom:14px; font-size:18px;">
										<i class="fas fa-clipboard-check"></i>
									</div>
									<h4 style="font-size:16px; font-weight:800; color:#062319; margin-bottom:8px;">Audit-Ready Reports</h4>
									<p style="font-size:13px; color:#556B62; line-height:1.6; margin:0;">
										Generate assurance-ready documentation with complete data lineage and verification trails.
									</p>
								</div>
							</div>

							<!-- 6. Expert Support -->
							<div class="col-md-6 col-lg-4">
								<div class="p-4 rounded-4 h-100" style="background:#ffffff; border:1.5px solid #e2ede6; box-shadow:0 10px 25px rgba(6,35,25,0.03);">
									<div style="width:42px; height:42px; background:#0b5943; color:#fff; border-radius:10px; display:flex; align-items:center; justify-content:center; margin-bottom:14px; font-size:18px;">
										<i class="fas fa-life-ring"></i>
									</div>
									<h4 style="font-size:16px; font-weight:800; color:#062319; margin-bottom:8px;">Expert Support</h4>
									<p style="font-size:13px; color:#556B62; line-height:1.6; margin:0;">
										Access ESG specialists who guide you through reporting requirements and best practices.
									</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- 5. REGIONAL PRESENCE MAP WITH DESERT & REGION EFFECTS (User Pic 3 + Camels Pic 1) -->
	<section class="regional-desert-map-section" id="regional-presence">
		<div class="desert-sand-glow"></div>
		<div class="container position-relative" style="z-index: 2;">
			<div class="desert-map-card">
				<div class="row align-items-center mb-4">
					<div class="col-lg-7">
						<span class="camel-card-badge" style="color:#00E676; font-size:12px; letter-spacing:0.12em;" data-i18n="map_kicker">GLOBAL PRESENCE</span>
						<h2 style="font-size: clamp(2rem, 3.4vw, 2.75rem); font-weight:800; color:#ffffff; margin-top:8px;" data-i18n="map_title">
							Regional presence, rooted in Oman
						</h2>
						<p style="color:#c2ded1; font-size:15.5px; line-height:1.7; max-width:620px;" data-i18n="map_sub">
							Growth's main headquarters is in Muscat, Oman, with a regional presence and analytics engineering delivery center in Nagpur, India.
						</p>

						<div class="presence-code-badges">
							<div class="code-badge-item">
								<h3>OM</h3>
								<span data-i18n="map_om">MAIN OFFICE &bull; OMAN</span>
							</div>
							<div class="code-badge-item">
								<h3>IN</h3>
								<span data-i18n="map_in">REGIONAL PRESENCE &bull; INDIA</span>
							</div>
						</div>
					</div>

					
					</div>
				</div>

				<!-- Styled Desert Map Canvas with Glowing Pins and Camels Coastline Photo -->
								<!-- Styled Vivid Colorful Geographic Map (Oman #00E676, UAE #00B0FF, Saudi #F2C811, Qatar #BA68C8, India #FF9933) -->
				<div class="map-canvas-area position-relative">
					<!-- Geographic SVG Map Layer -->
					<div class="geographic-map-wrap">
						<svg width="100%" height="440" viewBox="0 0 950 440" class="regional-geo-svg" preserveAspectRatio="xMidYMid meet">
							<defs>
								<!-- Glow Filters -->
								<filter id="glowGreen" x="-20%" y="-20%" width="140%" height="140%">
									<feGaussianBlur stdDeviation="6" result="blur" />
									<feComposite in="SourceGraphic" in2="blur" operator="over" />
								</filter>
								<filter id="glowBlue" x="-20%" y="-20%" width="140%" height="140%">
									<feGaussianBlur stdDeviation="6" result="blur" />
									<feComposite in="SourceGraphic" in2="blur" operator="over" />
								</filter>
								<filter id="glowGold" x="-20%" y="-20%" width="140%" height="140%">
									<feGaussianBlur stdDeviation="6" result="blur" />
									<feComposite in="SourceGraphic" in2="blur" operator="over" />
								</filter>

								<!-- Water Gradients -->
								<radialGradient id="oceanGrad" cx="50%" cy="50%" r="70%">
									<stop offset="0%" stop-color="#05241b" stop-opacity="0.8"/>
									<stop offset="100%" stop-color="#02140e" stop-opacity="0.95"/>
								</radialGradient>
							</defs>

							<!-- Ocean Background Grid -->
							<rect x="0" y="0" width="950" height="440" fill="url(#oceanGrad)" rx="16"/>

							<!-- Subtle Latitude / Longitude Navigation Grid -->
							<g stroke="rgba(0, 230, 118, 0.08)" stroke-width="1" stroke-dasharray="3 6">
								<line x1="0" y1="110" x2="950" y2="110"/>
								<line x1="0" y1="220" x2="950" y2="220"/>
								<line x1="0" y1="330" x2="950" y2="330"/>
								<line x1="200" y1="0" x2="200" y2="440"/>
								<line x1="400" y1="0" x2="400" y2="440"/>
								<line x1="600" y1="0" x2="600" y2="440"/>
								<line x1="800" y1="0" x2="800" y2="440"/>
							</g>

							<!-- Ocean / Sea Labels with subtle waves -->
							<text x="290" y="290" fill="rgba(0, 230, 118, 0.25)" font-size="12" font-weight="700" letter-spacing="3">GULF OF OMAN</text>
							<text x="420" y="380" fill="rgba(0, 176, 255, 0.22)" font-size="14" font-weight="800" letter-spacing="4">ARABIAN SEA</text>
							<text x="170" y="160" fill="rgba(242, 200, 17, 0.22)" font-size="11" font-weight="700" letter-spacing="2">ARABIAN GULF</text>

							<!-- REGION 1: SAUDI ARABIA (KSA) - Gold / Amber (#F2C811) -->
							<path d="M 50,110 L 120,95 L 180,110 L 220,150 L 210,210 L 170,260 L 110,270 L 60,230 L 40,160 Z"
								  fill="#F2C811" fill-opacity="0.22" stroke="#F2C811" stroke-width="2.2" class="geo-country-shape" filter="url(#glowGold)">
								<title>Kingdom of Saudi Arabia (GCC Decarbonization Hub)</title>
							</path>
							<text x="110" y="185" fill="#F2C811" font-size="12" font-weight="800" letter-spacing="1">SAUDI ARABIA</text>

							<!-- REGION 2: QATAR - Vivid Purple (#BA68C8) -->
							<path d="M 215,165 L 230,160 L 235,178 L 222,185 Z"
								  fill="#BA68C8" fill-opacity="0.65" stroke="#BA68C8" stroke-width="2" class="geo-country-shape">
								<title>Qatar (Doha - ESG Compliance)</title>
							</path>
							<text x="238" y="172" fill="#BA68C8" font-size="10" font-weight="800">QATAR</text>

							<!-- REGION 3: UNITED ARAB EMIRATES (UAE) - Vibrant Cyan/Blue (#00B0FF) -->
							<path d="M 230,195 L 270,185 L 290,215 L 265,240 L 225,225 Z"
								  fill="#00B0FF" fill-opacity="0.32" stroke="#00B0FF" stroke-width="2.2" class="geo-country-shape" filter="url(#glowBlue)">
								<title>United Arab Emirates (Dubai & Abu Dhabi Hub)</title>
							</path>
							<text x="242" y="215" fill="#00B0FF" font-size="11" font-weight="800">U.A.E.</text>

							<!-- REGION 4: SULTANATE OF OMAN (HEADQUARTERS) - Vivid Emerald Green (#00E676) -->
							<path d="M 270,225 L 320,205 L 350,240 L 340,310 L 290,340 L 265,300 L 260,250 Z"
								  fill="#00E676" fill-opacity="0.45" stroke="#00E676" stroke-width="3" class="geo-country-shape" filter="url(#glowGreen)">
								<title>Sultanate of Oman (Growth Investment & Development HQ)</title>
							</path>
							<text x="282" y="275" fill="#00E676" font-size="14" font-weight="900" letter-spacing="1.5">OMAN (HQ)</text>

							<!-- REGION 5: INDIA - Vibrant Saffron / Orange (#FF9933) -->
							<path d="M 620,110 L 710,120 L 760,190 L 740,290 L 680,380 L 650,330 L 610,230 L 590,160 Z"
								  fill="#FF9933" fill-opacity="0.25" stroke="#FF9933" stroke-width="2.4" class="geo-country-shape">
								<title>India (Nagpur Tech & Analytics Engineering Delivery Center)</title>
							</path>
							<text x="640" y="220" fill="#FF9933" font-size="14" font-weight="900" letter-spacing="1.5">INDIA</text>
							<text x="640" y="238" fill="#ffe0b2" font-size="10.5" font-weight="700">Analytics Delivery Center</text>

							<!-- Connecting Telemetry Arc between Muscat HQ and Nagpur Tech Center -->
							<path d="M 325,230 Q 480,140 660,250" fill="none" stroke="#00E676" stroke-width="2" stroke-dasharray="6 6">
								<animate attributeName="stroke-dashoffset" values="30;0" dur="2s" repeatCount="indefinite"/>
							</path>
							<path d="M 325,230 Q 220,150 130,175" fill="none" stroke="#F2C811" stroke-width="1.8" stroke-dasharray="5 5">
								<animate attributeName="stroke-dashoffset" values="25;0" dur="2.5s" repeatCount="indefinite"/>
							</path>

							<!-- Glowing Animated Pin: Muscat, Oman (HQ) -->
							<g class="geo-map-pin" transform="translate(325, 230)">
								<circle cx="0" cy="0" r="14" fill="rgba(0, 230, 118, 0.25)">
									<animate attributeName="r" values="8;20;8" dur="2s" repeatCount="indefinite"/>
									<animate attributeName="opacity" values="0.8;0;0.8" dur="2s" repeatCount="indefinite"/>
								</circle>
								<circle cx="0" cy="0" r="6" fill="#00E676" stroke="#ffffff" stroke-width="2"/>
							</g>

							<!-- Glowing Animated Pin: Nagpur, India -->
							<g class="geo-map-pin" transform="translate(660, 250)">
								<circle cx="0" cy="0" r="12" fill="rgba(255, 153, 51, 0.3)">
									<animate attributeName="r" values="6;16;6" dur="2s" repeatCount="indefinite"/>
								</circle>
								<circle cx="0" cy="0" r="5" fill="#FF9933" stroke="#ffffff" stroke-width="2"/>
							</g>

							<!-- Glowing Pin: Riyadh, Saudi Arabia -->
							<g class="geo-map-pin" transform="translate(130, 175)">
								<circle cx="0" cy="0" r="10" fill="rgba(242, 200, 17, 0.3)">
									<animate attributeName="r" values="5;14;5" dur="2.2s" repeatCount="indefinite"/>
								</circle>
								<circle cx="0" cy="0" r="4.5" fill="#F2C811" stroke="#ffffff" stroke-width="1.5"/>
							</g>

							<!-- Glowing Pin: Dubai/Abu Dhabi, UAE -->
							<g class="geo-map-pin" transform="translate(265, 210)">
								<circle cx="0" cy="0" r="10" fill="rgba(0, 176, 255, 0.3)">
									<animate attributeName="r" values="5;14;5" dur="1.8s" repeatCount="indefinite"/>
								</circle>
								<circle cx="0" cy="0" r="4.5" fill="#00B0FF" stroke="#ffffff" stroke-width="1.5"/>
							</g>

							<!-- Glowing Pin: Doha, Qatar -->
							<g class="geo-map-pin" transform="translate(228, 172)">
								<circle cx="0" cy="0" r="9" fill="rgba(186, 104, 200, 0.3)"/>
								<circle cx="0" cy="0" r="4" fill="#BA68C8" stroke="#ffffff" stroke-width="1.5"/>
							</g>
						</svg>
					</div>

					<!-- Floating Coastal Camels Photo Frame (User Pic 1) -->
					<div class="map-camel-photo-frame">
						<img src="<?php echo base_url($frontAssetBase . 'img/growth/oman-camels-coast.jpg') ?>" alt="Growth Oman Coast Camels">
						<div style="padding:8px 12px; background:#031c13; color:#00E676; font-size:11px; font-weight:700; display:flex; justify-content:space-between; align-items:center;">
							<span>&#127476;&#127474; Coastline of Oman</span>
							<span style="color:#ffffff; opacity:0.8;">GROWTH OM</span>
						</div>
					</div>

					<!-- Vivid Regional Legend Pills -->
					<div class="map-region-legend">
						<div class="legend-pill" style="border-color:#00E676;">
							<span class="dot" style="background:#00E676;"></span>
							<strong>&#127476;&#127474; Oman</strong> — Muscat Headquarters
						</div>
						<div class="legend-pill" style="border-color:#00B0FF;">
							<span class="dot" style="background:#00B0FF;"></span>
							<strong>&#127462;&#127466; UAE</strong> — Regional Engagement Hub
						</div>
						<div class="legend-pill" style="border-color:#F2C811;">
							<span class="dot" style="background:#F2C811;"></span>
							<strong>&#127480;&#127462; Saudi Arabia</strong> — GCC Decarbonization Hub
						</div>
						<div class="legend-pill" style="border-color:#BA68C8;">
							<span class="dot" style="background:#BA68C8;"></span>
							<strong>&#127478;&#127462; Qatar</strong> — ESG Compliance
						</div>
						<div class="legend-pill" style="border-color:#FF9933;">
							<span class="dot" style="background:#FF9933;"></span>
							<strong>&#127470;&#127475; India</strong> — Analytics Delivery Center
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- 6. MEASURE, REPORT AND REDUCE -->
	<section class="measure-reduce-section" id="measure-report-reduce">
		<div class="container">
			<div class="measure-reduce-header">
				<h2>
					Measure, report and reduce.
					<span>All in one place.</span>
				</h2>
				<p>
					Automate emissions calculations, meet mandatory GCC disclosure standards, and execute decarbonization plans with precision.
				</p>
			</div>

			<div class="measure-card-grid">
				<!-- Card 1: GHG Data Calculation & Strategy -->
				<div class="measure-card">
					<div class="measure-card-top">
						<div class="measure-card-title">
							<i class="fas fa-leaf"></i>
							<span>GHG Data Calculation &amp; Strategy</span>
						</div>
						<p class="measure-card-desc">
							Streamline your carbon management, and get personalized action plans.
						</p>
						<div class="measure-card-pills">
							<a href="<?php echo base_url('sustainability-services') ?>" class="measure-pill">
								Carbon Assessment <span class="arrow">→</span>
							</a>
							<a href="<?php echo base_url('sustainability-services') ?>" class="measure-pill">
								Decarbonization Strategy <span class="arrow">→</span>
							</a>
						</div>
					</div>
					<div class="measure-card-visual">
						<div class="trajectory-chart">
							<div class="trajectory-label">Reduction Trajectory (tCO2e)</div>
														<div class="trajectory-bars">
								<div class="trajectory-col">
									<span class="trajectory-val mrr-counter" data-target="245">0</span>
									<div class="trajectory-bar mrr-grow-bar" data-height="58" style="height: 0px;"></div>
								</div>
								<div class="trajectory-col">
									<span class="trajectory-val mrr-counter" data-target="244">0</span>
									<div class="trajectory-bar mrr-grow-bar" data-height="56" style="height: 0px;"></div>
								</div>
								<div class="trajectory-col">
									<span class="trajectory-val mrr-counter" data-target="231">0</span>
									<div class="trajectory-bar mrr-grow-bar" data-height="48" style="height: 0px;"></div>
								</div>
								<div class="trajectory-col">
									<span class="trajectory-val mrr-counter" data-target="222">0</span>
									<div class="trajectory-bar mrr-grow-bar" data-height="42" style="height: 0px;"></div>
								</div>
								<div class="trajectory-col">
									<span class="trajectory-val mrr-counter" data-target="208">0</span>
									<div class="trajectory-bar mrr-grow-bar" data-height="34" style="height: 0px;"></div>
								</div>
							</div>
						</div>
					</div>
				</div>
					</div>
				</div>

				<!-- Card 2: Corporate Reporting -->
				<div class="measure-card">
					<div class="measure-card-top">
						<div class="measure-card-title">
							<i class="fas fa-shield-alt"></i>
							<span>Corporate Reporting</span>
						</div>
						<p class="measure-card-desc">
							Create future-ready reports aligned with main frameworks.
						</p>
						<div class="measure-card-pills">
							<a href="<?php echo base_url('esg-compliance-services') ?>" class="measure-pill">
								Oman MSX ESG <span class="arrow">→</span>
							</a>
							<a href="<?php echo base_url('esg-compliance-services') ?>" class="measure-pill">
								TCFD <span class="arrow">→</span>
							</a>
							<a href="<?php echo base_url('esg-compliance-services') ?>" class="measure-pill">
								SBTi <span class="arrow">→</span>
							</a>
							<a href="<?php echo base_url('esg-compliance-services') ?>" class="measure-pill">
								BRSR / GRI <span class="arrow">→</span>
							</a>
							<a href="<?php echo base_url('esg-compliance-services') ?>" class="measure-pill">
								ISSB S1/S2 <span class="arrow">→</span>
							</a>
						</div>
					</div>
					<div class="measure-card-visual">
						<div class="framework-gauge-row">
							<div class="gauge-item-mini">
								<span class="badge-emblem">🇪🇺</span>
								<strong class="mrr-counter" data-target="84" data-suffix="%">0%</strong>
								<span>CSRD / TCFD</span>
							</div>
							<div class="gauge-item-mini">
								<span class="badge-emblem">🇴🇲</span>
								<strong class="mrr-counter" data-target="92" data-suffix="%">0%</strong>
								<span>MSX ESG</span>
							</div>
							<div class="gauge-item-mini">
								<span class="badge-emblem">🌱</span>
								<strong class="mrr-counter" data-target="50" data-suffix="%">0%</strong>
								<span>SBTi Goal</span>
							</div>
						</div>
					</div>
				</div>

				<!-- Card 3: Product Reporting -->
				<div class="measure-card">
					<div class="measure-card-top">
						<div class="measure-card-title">
							<i class="fas fa-cubes"></i>
							<span>Product Reporting</span>
						</div>
						<p class="measure-card-desc">
							Deliver science-backed, ISO-aligned LCA for 100% of your products.
						</p>
						<div class="measure-card-pills">
							<a href="<?php echo base_url('sustainability-services') ?>" class="measure-pill">
								LCA <span class="arrow">→</span>
							</a>
							<a href="<?php echo base_url('sustainability-services') ?>" class="measure-pill">
								DPP <span class="arrow">→</span>
							</a>
							<span class="measure-pill" style="opacity: 0.85;">ISO 14040/44</span>
							<span class="measure-pill" style="opacity: 0.85;">EPD</span>
							<span class="measure-pill" style="opacity: 0.85;">PEF/PEP</span>
						</div>
					</div>
					<div class="measure-card-visual">
						<div class="lca-bars-list">
							<div class="lca-row">
								<div class="lca-row-left"><i class="fas fa-warehouse text-muted"></i> Raw materials</div>
								<span class="lca-row-pct mrr-counter" data-target="40" data-suffix="%">0%</span>
							</div>
							<div class="lca-row">
								<div class="lca-row-left"><i class="fas fa-industry text-muted"></i> Manufacturing</div>
								<span class="lca-row-pct mrr-counter" data-target="25" data-suffix="%">0%</span>
							</div>
							<div class="lca-row">
								<div class="lca-row-left"><i class="fas fa-truck text-muted"></i> Distribution</div>
								<span class="lca-row-pct mrr-counter" data-target="10" data-suffix="%">0%</span>
							</div>
						</div>
					</div>
				</div>

				<!-- Card 4: Value Chain Reporting -->
				<div class="measure-card">
					<div class="measure-card-top">
						<div class="measure-card-title">
							<i class="fas fa-link"></i>
							<span>Value Chain Reporting</span>
						</div>
						<p class="measure-card-desc">
							Get real data from your suppliers and stay ahead of related regulations.
						</p>
						<div class="measure-card-pills">
							<a href="<?php echo base_url('sustainability-services') ?>" class="measure-pill">
								Supplier Engagement <span class="arrow">→</span>
							</a>
							<a href="<?php echo base_url('esg-compliance-services') ?>" class="measure-pill">
								CBAM <span class="arrow">→</span>
							</a>
							<a href="<?php echo base_url('esg-compliance-services') ?>" class="measure-pill">
								EUDR <span class="arrow">→</span>
							</a>
							<span class="measure-pill" style="opacity: 0.85;">EPR</span>
						</div>
					</div>
					<div class="measure-card-visual">
						<div class="supplier-card-box">
							<div class="supplier-header">
								<span class="supplier-title">Suppliers engaged</span>
								<span class="supplier-pct-badge mrr-counter" data-target="88" data-suffix="%">0%</span>
							</div>
							<div class="supplier-progress-track">
								<div class="supplier-progress-fill" style="width: 88%;"></div>
							</div>
							<div class="supplier-avatars-row">
								<div class="supplier-avatar-group">
									<span class="supplier-avatar">OM</span>
									<span class="supplier-avatar">SA</span>
									<span class="supplier-avatar">AE</span>
									<span class="supplier-avatar">QA</span>
								</div>
								<span>Verified Scope 3</span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- 6. SERVICES WE PROVIDE & GALLERY & OUR CLIENTELE -->
	<div class="services-style-four-area bg-gray default-padding" id="services">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 offset-lg-2">
					<div class="site-heading text-center">
						<h4 class="sub-heading">What we do</h4>
						<h2 class="title">Services We Provide</h2>
						<p class="text-center">At <b>Growth Investment &amp; Development</b>, we offer specialized services in the following key areas to help businesses in the GCC region thrive sustainably.</p>
						<div class="devider"></div>
					</div>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="row">
				<!-- Single Item: Sustainability -->
				<div class="col-lg-4 col-md-6 mb-4">
					<div class="service-card-modern">
						<div class="service-card-banner">
							<img src="<?php echo base_url($frontAssetBase . 'img/growth/Sustainability-Services.png') ?>" alt="Sustainability Services">
							<span class="service-banner-badge">Carbon &amp; Net Zero</span>
						</div>
						<div class="service-card-content">
							<h5 class="service-card-title"><a href="<?php echo base_url('sustainability-services') ?>">Sustainability Services</a></h5>
							<p class="service-card-desc">Our team provides tailored solutions that promote long-term environmental stewardship, reducing environmental impact, improving resource efficiency, and developing decarbonization roadmaps.</p>
							<a href="<?php echo base_url('sustainability-services') ?>" class="service-card-btn">
								<span>Explore Service</span> <i class="fas fa-arrow-right"></i>
							</a>
						</div>
					</div>
				</div>

				<!-- Single Item: ESG Compliance -->
				<div class="col-lg-4 col-md-6 mb-4">
					<div class="service-card-modern">
						<div class="service-card-banner">
							<img src="<?php echo base_url($frontAssetBase . 'img/growth/ESG-Compliance.png') ?>" alt="ESG Compliance">
							<span class="service-banner-badge">Regulations &amp; GRI</span>
						</div>
						<div class="service-card-content">
							<h5 class="service-card-title"><a href="<?php echo base_url('esg-compliance-services') ?>">ESG Compliance &amp; Reporting</a></h5>
							<p class="service-card-desc">We assist companies in navigating the complexities of Environmental, Social, and Governance (ESG) regulations across Oman, GCC and global markets with audit-ready disclosures.</p>
							<a href="<?php echo base_url('esg-compliance-services') ?>" class="service-card-btn">
								<span>Explore Service</span> <i class="fas fa-arrow-right"></i>
							</a>
						</div>
					</div>
				</div>

				<!-- Single Item: Energy Management -->
				<div class="col-lg-4 col-md-6 mb-4">
					<div class="service-card-modern">
						<div class="service-card-banner">
							<img src="<?php echo base_url($frontAssetBase . 'img/growth/Energy-Management-Audit-Services.png') ?>" alt="Energy Management &amp; Audit Services">
							<span class="service-banner-badge">Efficiency &amp; Audits</span>
						</div>
						<div class="service-card-content">
							<h5 class="service-card-title"><a href="<?php echo base_url('energy-management-audit-services') ?>">Energy Management &amp; Audits</a></h5>
							<p class="service-card-desc">Energy efficiency is essential for cost reduction and sustainability. Our certified engineers conduct comprehensive audits to optimize energy use and lower utility costs.</p>
							<a href="<?php echo base_url('energy-management-audit-services') ?>" class="service-card-btn">
								<span>Explore Service</span> <i class="fas fa-arrow-right"></i>
							</a>
						</div>
					</div>
				</div>

				<!-- Single Item: Continuous Improvement -->
				<div class="col-lg-4 col-md-6 mb-4">
					<div class="service-card-modern">
						<div class="service-card-banner">
							<img src="<?php echo base_url($frontAssetBase . 'img/growth/Continuous Improvement.png') ?>" alt="Continuous Improvement">
							<span class="service-banner-badge">Lean &amp; Productivity</span>
						</div>
						<div class="service-card-content">
							<h5 class="service-card-title"><a href="<?php echo base_url('continuous-improvement') ?>">Continuous Improvement &amp; Lean</a></h5>
							<p class="service-card-desc">We help companies achieve a sustainable increase in productivity and eliminate waste by applying the principles of continuous improvement, Kaizen, and Lean management.</p>
							<a href="<?php echo base_url('continuous-improvement') ?>" class="service-card-btn">
								<span>Explore Service</span> <i class="fas fa-arrow-right"></i>
							</a>
						</div>
					</div>
				</div>

				<!-- Single Item: Training & Mentorship -->
				<div class="col-lg-4 col-md-6 mb-4">
					<div class="service-card-modern">
						<div class="service-card-banner">
							<img src="<?php echo base_url($frontAssetBase . 'img/growth/Training-Mentorship.png') ?>" alt="Training &amp; Mentorship">
							<span class="service-banner-badge">Leadership &amp; Skills</span>
						</div>
						<div class="service-card-content">
							<h5 class="service-card-title"><a href="<?php echo base_url('training-mentorship') ?>">Training &amp; Mentorship</a></h5>
							<p class="service-card-desc">Building the capacity of your workforce and leadership teams through certified ESG courses, safety certifications, and executive mentoring for operational excellence.</p>
							<a href="<?php echo base_url('training-mentorship') ?>" class="service-card-btn">
								<span>Explore Service</span> <i class="fas fa-arrow-right"></i>
							</a>
						</div>
					</div>
				</div>

				<!-- Single Item: Process Safety -->
				<div class="col-lg-4 col-md-6 mb-4">
					<div class="service-card-modern">
						<div class="service-card-banner">
							<img src="<?php echo base_url($frontAssetBase . 'img/growth/Process-Safety-Management.png') ?>" alt="Process Safety &amp; Management">
							<span class="service-banner-badge">HAZOP &amp; Integrity</span>
						</div>
						<div class="service-card-content">
							<h5 class="service-card-title"><a href="<?php echo base_url('process-safety-management') ?>">Process Safety Management (PSM)</a></h5>
							<p class="service-card-desc">Safety is at the heart of every operation. Our PSM services focus on minimizing industrial hazard risks, regulatory compliance, and building a culture of safety.</p>
							<a href="<?php echo base_url('process-safety-management') ?>" class="service-card-btn">
								<span>Explore Service</span> <i class="fas fa-arrow-right"></i>
							</a>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12 text-center">
					<a href="<?php echo base_url('services') ?>" class="btn btn-sm btn-theme secondary animation">
						View All Services
					</a>
				</div>
			</div>
		</div>
	</div>

	<!-- 7. TRUSTED BY PURPOSE-DRIVEN ORGANIZATIONS (User Pic 2 Marquee) -->
	<section class="trusted-by-section" id="trusted-by">
		<div class="container text-center mb-4">
			<span class="regional-kicker" data-i18n="t_trusted_kicker">ENTERPRISE CLIENTELE &amp; PARTNERS</span>
			<h2 style="font-size: clamp(1.8rem, 2.8vw, 2.3rem); font-weight:800; color:#062319; margin-top:6px;" data-i18n="t_trusted_title">
				Trusted by Leading Organizations
			</h2>
			<div class="regional-divider" style="margin: 12px auto 0;"></div>
		</div>

		<div class="trusted-logos-grid-card">
			<div class="trusted-logos-track">
				<div class="trusted-logo-box"><span style="font-size:18px; font-weight:900; color:#062319; letter-spacing:0.06em;">RAWABI</span></div>
				<div class="trusted-logo-box"><span style="font-size:19px; font-weight:900; color:#0052cc;">one</span></div>
				<div class="trusted-logo-box"><span style="font-size:18px; font-weight:800; color:#111827; letter-spacing:0.12em;">LIXIL</span></div>
				<div class="trusted-logo-box"><span style="font-size:18px; font-weight:700; color:#0284c7; letter-spacing:0.14em;">HOYA</span></div>
				<div class="trusted-logo-box"><span style="font-size:18px; font-weight:900; color:#0f172a;">HAYS</span></div>
				<div class="trusted-logo-box"><span style="font-size:15px; font-weight:800; color:#1f2937; letter-spacing:0.08em;">ROCA GROUP</span></div>
				<div class="trusted-logo-box"><span style="font-size:14px; font-weight:800; color:#005bb5;"><i class="fas fa-satellite-dish me-1"></i> MOTOROLA</span></div>
				<div class="trusted-logo-box"><span style="font-size:18px; font-weight:900; color:#000000; letter-spacing:0.1em;">SHURE</span></div>
				<div class="trusted-logo-box"><span style="font-size:22px; font-weight:900; color:#ef4444; letter-spacing:0.05em;">3M</span></div>
				<div class="trusted-logo-box"><span style="font-size:20px; font-weight:900; color:#00008f; letter-spacing:0.05em;">AXA</span></div>
				<div class="trusted-logo-box"><span style="font-size:20px; font-weight:900; font-style:italic; color:#eab308;">Hertz</span></div>
				<div class="trusted-logo-box"><span style="font-size:16px; font-weight:900; color:#000000; letter-spacing:0.04em;">DURACELL</span></div>
				<div class="trusted-logo-box"><span style="font-size:14px; font-weight:800; color:#047857;">SOHAR AL</span></div>
				<div class="trusted-logo-box"><span style="font-size:16px; font-weight:900; color:#d97706;">PDO OMAN</span></div>
				<div class="trusted-logo-box"><span style="font-size:15px; font-weight:900; color:#065f46;">OMINVEST</span></div>

				<!-- Duplicate loop for continuous smooth scroll -->
				<div class="trusted-logo-box"><span style="font-size:18px; font-weight:900; color:#062319; letter-spacing:0.06em;">RAWABI</span></div>
				<div class="trusted-logo-box"><span style="font-size:19px; font-weight:900; color:#0052cc;">one</span></div>
				<div class="trusted-logo-box"><span style="font-size:18px; font-weight:800; color:#111827; letter-spacing:0.12em;">LIXIL</span></div>
				<div class="trusted-logo-box"><span style="font-size:18px; font-weight:700; color:#0284c7; letter-spacing:0.14em;">HOYA</span></div>
				<div class="trusted-logo-box"><span style="font-size:18px; font-weight:900; color:#0f172a;">HAYS</span></div>
				<div class="trusted-logo-box"><span style="font-size:15px; font-weight:800; color:#1f2937; letter-spacing:0.08em;">ROCA GROUP</span></div>
				<div class="trusted-logo-box"><span style="font-size:14px; font-weight:800; color:#005bb5;"><i class="fas fa-satellite-dish me-1"></i> MOTOROLA</span></div>
				<div class="trusted-logo-box"><span style="font-size:18px; font-weight:900; color:#000000; letter-spacing:0.1em;">SHURE</span></div>
				<div class="trusted-logo-box"><span style="font-size:22px; font-weight:900; color:#ef4444; letter-spacing:0.05em;">3M</span></div>
				<div class="trusted-logo-box"><span style="font-size:20px; font-weight:900; color:#00008f; letter-spacing:0.05em;">AXA</span></div>
				<div class="trusted-logo-box"><span style="font-size:20px; font-weight:900; font-style:italic; color:#eab308;">Hertz</span></div>
				<div class="trusted-logo-box"><span style="font-size:16px; font-weight:900; color:#000000; letter-spacing:0.04em;">DURACELL</span></div>
				<div class="trusted-logo-box"><span style="font-size:14px; font-weight:800; color:#047857;">SOHAR AL</span></div>
				<div class="trusted-logo-box"><span style="font-size:16px; font-weight:900; color:#d97706;">PDO OMAN</span></div>
				<div class="trusted-logo-box"><span style="font-size:15px; font-weight:900; color:#065f46;">OMINVEST</span></div>
			</div>
		</div>
	</section>

	<!-- 8. GALLERY CAROUSEL (Exact Growthom.com Layout & Animation - User Pic 3) -->
	<section class="growthom-carousel-section" id="gallery">
		<div class="container">
			<div class="growthom-carousel-container position-relative">
				<!-- Slide 1 (Exact User Pic 3: Two engineers with clipboard & tablet in front of solar panels) -->
				<div class="growthom-slide-item active" id="growthomSlide0">
					<div class="row align-items-center g-4">
						<div class="col-lg-6 ps-lg-5">
							<span style="color:#00a854; font-size:13px; font-weight:800; letter-spacing:0.15em; text-transform:uppercase;" data-i18n="solar_kicker">BEST QUALITY SOLAR</span>
							<h2 style="font-size: clamp(2rem, 3.6vw, 3rem); font-weight:900; color:#0b4b6f; line-height:1.2; margin:14px 0 20px;" data-i18n="solar_title">
								Light Up With Solar &amp; Save Natural Resource
							</h2>
							<p style="color:#556B62; font-size:16px; line-height:1.7; max-width:480px; margin-bottom:26px;" data-i18n="solar_desc">
								Empowering GCC industrial and commercial facilities to shift to on-site solar PV generation, slash grid electricity costs, and fulfill Oman Vision 2040 clean energy mandates.
							</p>
							<div class="d-flex align-items-center gap-3">
								<a href="<?php echo base_url('contact') ?>" class="btn-greenly" style="padding:12px 28px;">
									<span data-i18n="solar_btn">Consult Our Solar Engineers</span> <i class="fas fa-arrow-right"></i>
								</a>
							</div>
						</div>
						<div class="col-lg-6 text-center pe-lg-5">
							<div style="position:relative; border-radius:20px; overflow:hidden; box-shadow:0 15px 40px rgba(6,35,25,0.12); border:2px solid rgba(0,168,84,0.25);">
								<img src="<?php echo base_url($frontAssetBase . 'img/banner/1.jpg') ?>" alt="Best Quality Solar - Growth Engineers" style="width:100%; height:380px; object-fit:cover;">
							</div>
						</div>
					</div>
				</div>

				<!-- Slide 2: Commercial Rooftop Solar -->
				<div class="growthom-slide-item" id="growthomSlide1">
					<div class="row align-items-center g-4">
						<div class="col-lg-6 ps-lg-5">
							<span style="color:#00a854; font-size:13px; font-weight:800; letter-spacing:0.15em; text-transform:uppercase;">INDUSTRIAL CLEAN ENERGY</span>
							<h2 style="font-size: clamp(2rem, 3.6vw, 3rem); font-weight:900; color:#0b4b6f; line-height:1.2; margin:14px 0 20px;">
								High-Yield Solar PV for Heavy Industry &amp; Ports
							</h2>
							<p style="color:#556B62; font-size:16px; line-height:1.7; max-width:480px; margin-bottom:26px;">
								Turn unused factory and warehouse rooftops into continuous clean power assets. We handle design, regulatory net-metering approvals with Nama, and turn-key EPC management.
							</p>
							<div class="d-flex align-items-center gap-3">
								<a href="<?php echo base_url('energy-management-audit-services') ?>" class="btn-greenly" style="padding:12px 28px;">
									<span>Explore Energy Services</span> <i class="fas fa-arrow-right"></i>
								</a>
							</div>
						</div>
						<div class="col-lg-6 text-center pe-lg-5">
							<div style="position:relative; border-radius:20px; overflow:hidden; box-shadow:0 15px 40px rgba(6,35,25,0.12); border:2px solid rgba(0,168,84,0.25);">
								<img src="<?php echo base_url($frontAssetBase . 'img/banner/11.webp') ?>" alt="Commercial Solar Installation" style="width:100%; height:380px; object-fit:cover;">
							</div>
						</div>
					</div>
				</div>

				<!-- Slide 3: Sustainable Solutions & Lasting Growth -->
				<div class="growthom-slide-item" id="growthomSlide2">
					<div class="row align-items-center g-4">
						<div class="col-lg-6 ps-lg-5">
							<span style="color:#00a854; font-size:13px; font-weight:800; letter-spacing:0.15em; text-transform:uppercase;">SUSTAINABLE SOLUTIONS</span>
							<h2 style="font-size: clamp(2rem, 3.6vw, 3rem); font-weight:900; color:#0b4b6f; line-height:1.2; margin:14px 0 20px;">
								Lasting Growth Through Decarbonization
							</h2>
							<p style="color:#556B62; font-size:16px; line-height:1.7; max-width:480px; margin-bottom:26px;">
								Combining continuous improvement, process safety management, and ESG compliance into an integrated operational excellence blueprint.
							</p>
							<div class="d-flex align-items-center gap-3">
								<a href="<?php echo base_url('sustainability-services') ?>" class="btn-greenly" style="padding:12px 28px;">
									<span>Our Sustainability Blueprint</span> <i class="fas fa-arrow-right"></i>
								</a>
							</div>
						</div>
						<div class="col-lg-6 text-center pe-lg-5">
							<div style="position:relative; border-radius:20px; overflow:hidden; box-shadow:0 15px 40px rgba(6,35,25,0.12); border:2px solid rgba(0,168,84,0.25);">
								<img src="<?php echo base_url($frontAssetBase . 'img/banner/b1.webp') ?>" alt="Lasting Growth" style="width:100%; height:380px; object-fit:cover;">
							</div>
						</div>
					</div>
				</div>

				<!-- Circular Navigation Arrows matching User Pic 3 -->
				<button type="button" class="growthom-carousel-nav-btn growthom-carousel-prev" onclick="slideGrowthomGallery(-1)" aria-label="Previous Slide">
					<i class="fas fa-chevron-left"></i>
				</button>
				<button type="button" class="growthom-carousel-nav-btn growthom-carousel-next" onclick="slideGrowthomGallery(1)" aria-label="Next Slide">
					<i class="fas fa-chevron-right"></i>
				</button>
			</div>
		</div>
	</section>

	<!-- 9. OUR CLIENTELE (User Pic 4: Exact 2 Rows of 8 Clean Client Logos) -->
	<section class="partner-style-one-area default-padding-bottom" id="growth-clientele" style="background:#ffffff; padding-top:20px;">
		<div class="container">
			<div class="row align-center">
				<div class="col-lg-12">
					<div class="site-heading text-center mb-4">
						<span class="regional-kicker" data-i18n="client_kicker">YOUR GROWTH, OUR MISSION</span>
						<h2 style="font-size: clamp(2rem, 3.2vw, 2.75rem); font-weight:800; color:#062319; margin-top:6px;" data-i18n="client_title">
							Our Clientele
						</h2>
						<div class="regional-divider" style="margin: 10px auto 0;"></div>
					</div>
				</div>

				<div class="col-lg-12">
					<div class="clientele-exact-grid">
						<div class="clientele-grid-cell"><img src="<?php echo base_url('public/front/assets/img/clientele/client1.webp')?>" alt="Oman Ministry of Economy"></div>
						<div class="clientele-grid-cell"><img src="<?php echo base_url('public/front/assets/img/clientele/client2.webp')?>" alt="Sultanate of Oman"></div>
						<div class="clientele-grid-cell"><img src="<?php echo base_url('public/front/assets/img/clientele/client3.webp')?>" alt="Sultan Qaboos University"></div>
						<div class="clientele-grid-cell"><img src="<?php echo base_url('public/front/assets/img/clientele/client4.webp')?>" alt="Royal Court Affairs"></div>
						<div class="clientele-grid-cell"><img src="<?php echo base_url('public/front/assets/img/clientele/client5.webp')?>" alt="Oman Chamber of Commerce"></div>
						<div class="clientele-grid-cell"><img src="<?php echo base_url('public/front/assets/img/clientele/client6.webp')?>" alt="SME Development Authority"></div>
						<div class="clientele-grid-cell"><img src="<?php echo base_url('public/front/assets/img/clientele/client7.webp')?>" alt="Oman Chamber"></div>
						<div class="clientele-grid-cell"><img src="<?php echo base_url('public/front/assets/img/clientele/client8.webp')?>" alt="Ministry of Health"></div>

						<div class="clientele-grid-cell"><img src="<?php echo base_url('public/front/assets/img/clientele/client9.webp')?>" alt="Partners in Success"></div>
						<div class="clientele-grid-cell"><img src="<?php echo base_url('public/front/assets/img/clientele/client10.webp')?>" alt="Sultan Qaboos Hospital"></div>
						<div class="clientele-grid-cell"><img src="<?php echo base_url('public/front/assets/img/clientele/client11.webp')?>" alt="Youth Center Oman"></div>
						<div class="clientele-grid-cell"><img src="<?php echo base_url('public/front/assets/img/clientele/client12.webp')?>" alt="Business Development & Quality"></div>
						<div class="clientele-grid-cell"><img src="<?php echo base_url('public/front/assets/img/clientele/client13.webp')?>" alt="Engineering Services Ministry of Defence"></div>
						<div class="clientele-grid-cell"><img src="<?php echo base_url('public/front/assets/img/clientele/client14.webp')?>" alt="Beyond Consulting"></div>
						<div class="clientele-grid-cell"><img src="<?php echo base_url('public/front/assets/img/clientele/client15.webp')?>" alt="Perpetual Solutions"></div>
						<div class="clientele-grid-cell"><img src="<?php echo base_url('public/front/assets/img/clientele/client16.webp')?>" alt="Business Growth Incubator"></div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Interactive Power BI Sustainability Dashboard Simulator Modal -->
	<div class="modal fade" id="dashboardVideoModal" tabindex="-1" aria-labelledby="dashboardVideoModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-xl modal-dialog-centered">
			<div class="modal-content" style="background:#031c13; color:#ffffff; border:1.5px solid rgba(0,230,118,0.35); border-radius:20px; overflow:hidden; box-shadow:0 25px 60px rgba(0,0,0,0.6);">
				<!-- Power BI Top Bar -->
				<div class="modal-header d-flex justify-content-between align-items-center" style="background:#02140d; border-bottom:1px solid rgba(0,230,118,0.2); padding:14px 24px;">
					<div class="d-flex align-items-center gap-3">
						<span style="background:#F2C811; color:#000000; font-weight:900; font-size:11px; padding:3px 8px; border-radius:4px; letter-spacing:0.05em;">POWER BI</span>
						<h5 class="modal-title mb-0" id="dashboardVideoModalLabel" style="font-size:15px; font-weight:700; color:#ffffff;">
							Growth Intelligence Hub • Ominvest &amp; MSX ESG Telemetry
						</h5>
						<span class="badge" style="background:rgba(0,230,118,0.15); color:#00E676; border:1px solid rgba(0,230,118,0.3); font-size:11px;">Live FY 2024-25</span>
					</div>
					<div class="d-flex align-items-center gap-2">
						<a href="<?php echo base_url('contact') ?>" class="btn-greenly" style="padding:6px 14px; font-size:12px;">Request Access</a>
						<button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
					</div>
				</div>

				<!-- Power BI Toolbar & Tabs -->
				<div class="p-3 d-flex flex-wrap align-items-center justify-content-between gap-2" style="background:rgba(255,255,255,0.03); border-bottom:1px solid rgba(255,255,255,0.06);">
					<div class="d-flex gap-2 flex-wrap">
						<button type="button" class="btn btn-sm btn-outline-success active" id="pbiTab1" onclick="switchPbiTab(1)" style="font-weight:700; font-size:12px; border-radius:8px;">
							📊 Executive KPI Summary
						</button>
						<button type="button" class="btn btn-sm btn-outline-success" id="pbiTab2" onclick="switchPbiTab(2)" style="font-weight:700; font-size:12px; border-radius:8px;">
							🌱 Scope 1-3 Decarbonization
						</button>
						<button type="button" class="btn btn-sm btn-outline-success" id="pbiTab3" onclick="switchPbiTab(3)" style="font-weight:700; font-size:12px; border-radius:8px;">
							🇴🇲 Oman Vision 2040 Milestones
						</button>
						<button type="button" class="btn btn-sm btn-outline-success" id="pbiTab4" onclick="switchPbiTab(4)" style="font-weight:700; font-size:12px; border-radius:8px;">
							⚡ Energy Audit &amp; ROI
						</button>
					</div>
					<div class="d-flex align-items-center gap-2">
						<span style="font-size:12px; color:#85a89b;">Facility Filter:</span>
						<select id="pbiFacilityFilter" onchange="updatePbiFacility(this.value)" style="background:#062319; color:#00E676; border:1px solid rgba(0,230,118,0.4); border-radius:6px; font-size:12px; padding:4px 10px; outline:none;">
							<option value="sohar">Sohar Port &amp; Industrial Freezone</option>
							<option value="ghubrah">Al Ghubrah Complex (Muscat)</option>
							<option value="salalah">Salalah Logistics Hub</option>
							<option value="duqm">Duqm SEZ Refinery</option>
						</select>
					</div>
				</div>

				<!-- Power BI Dynamic Canvas -->
				<div class="modal-body p-4" style="background:#02150e; min-height:480px;">
					<!-- TAB 1: EXECUTIVE KPI -->
					<div id="pbiPanel1">
						<!-- 4 High Impact Metric Cards -->
						<div class="row g-3 mb-4">
							<div class="col-md-3 col-6">
								<div class="p-3 rounded-3" style="background:rgba(255,255,255,0.04); border:1px solid rgba(0,230,118,0.2);">
									<span style="font-size:11px; color:#a4c5b7; text-transform:uppercase; font-weight:700; display:block;">Total GHG Footprint</span>
									<strong style="font-size:1.6rem; color:#ffffff; font-weight:800;" id="pbiFootprint">142,850</strong>
									<span style="font-size:11px; color:#00E676; display:block; font-weight:700;">↓ -18.4% YoY Reduction</span>
								</div>
							</div>
							<div class="col-md-3 col-6">
								<div class="p-3 rounded-3" style="background:rgba(255,255,255,0.04); border:1px solid rgba(0,230,118,0.2);">
									<span style="font-size:11px; color:#a4c5b7; text-transform:uppercase; font-weight:700; display:block;">Annual Energy Savings</span>
									<strong style="font-size:1.6rem; color:#00E676; font-weight:800;" id="pbiSavings">OMR 342,000</strong>
									<span style="font-size:11px; color:#b3cdc2; display:block;">Audited Payback: 4.2 mo</span>
								</div>
							</div>
							<div class="col-md-3 col-6">
								<div class="p-3 rounded-3" style="background:rgba(255,255,255,0.04); border:1px solid rgba(0,230,118,0.2);">
									<span style="font-size:11px; color:#a4c5b7; text-transform:uppercase; font-weight:700; display:block;">MSX ESG Assurance</span>
									<strong style="font-size:1.6rem; color:#00b0ff; font-weight:800;" id="pbiAssurance">94%</strong>
									<span style="font-size:11px; color:#00b0ff; display:block;">Tier-1 Third Party Ready</span>
								</div>
							</div>
							<div class="col-md-3 col-6">
								<div class="p-3 rounded-3" style="background:rgba(255,255,255,0.04); border:1px solid rgba(0,230,118,0.2);">
									<span style="font-size:11px; color:#a4c5b7; text-transform:uppercase; font-weight:700; display:block;">Renewable Solar Share</span>
									<strong style="font-size:1.6rem; color:#ffb300; font-weight:800;" id="pbiRenewable">36.5%</strong>
									<span style="font-size:11px; color:#ffb300; display:block;">On-site Solar PV Array</span>
								</div>
							</div>
						</div>

						<!-- Visual Row: Project Snapshot & Telemetry Graph -->
						<div class="row g-4 align-items-center">
							<div class="col-lg-6">
								<div class="rounded-3 overflow-hidden shadow-sm position-relative" style="height:260px; border:1px solid rgba(0,230,118,0.3);">
									<img src="<?php echo base_url($frontAssetBase . 'img/growth/desert-presence.png') ?>" alt="Oman Project Telemetry" style="width:100%; height:100%; object-fit:cover;">
									<div class="p-3 position-absolute bottom-0 start-0 end-0" style="background:linear-gradient(180deg, transparent 0%, rgba(3,25,18,0.92) 100%);">
										<span class="badge mb-1" style="background:#00E676; color:#031c13; font-weight:800;">ACTIVE SITE TELEMETRY</span>
										<h6 class="mb-0 text-white font-weight-bold" id="pbiSiteName">Sohar Industrial Terminal — Decarbonization Hub</h6>
									</div>
								</div>
							</div>
							<div class="col-lg-6">
								<div class="p-3 rounded-3" style="background:rgba(255,255,255,0.03); border:1px solid rgba(255,255,255,0.08);">
									<div class="d-flex justify-content-between mb-2">
										<span style="font-size:13px; font-weight:700; color:#ffffff;">Emissions Trajectory vs Oman 2040 Target</span>
										<span style="font-size:11px; color:#00E676;">Verified Audit Track</span>
									</div>
									<div class="mb-3">
										<div class="d-flex justify-content-between" style="font-size:11.5px; color:#b3cdc2; margin-bottom:4px;">
											<span>Scope 1 (Direct Fuel &amp; Process)</span>
											<strong class="text-white">45,200 tCO2e (-12%)</strong>
										</div>
										<div class="progress" style="height:8px; background:rgba(255,255,255,0.1);">
											<div class="progress-bar bg-success" style="width: 65%;"></div>
										</div>
									</div>
									<div class="mb-3">
										<div class="d-flex justify-content-between" style="font-size:11.5px; color:#b3cdc2; margin-bottom:4px;">
											<span>Scope 2 (Purchased Electricity)</span>
											<strong class="text-white">32,150 tCO2e (-26%)</strong>
										</div>
										<div class="progress" style="height:8px; background:rgba(255,255,255,0.1);">
											<div class="progress-bar bg-info" style="width: 45%;"></div>
										</div>
									</div>
									<div class="mb-3">
										<div class="d-flex justify-content-between" style="font-size:11.5px; color:#b3cdc2; margin-bottom:4px;">
											<span>Scope 3 (Supply Chain &amp; Transport)</span>
											<strong class="text-white">65,500 tCO2e (-8%)</strong>
										</div>
										<div class="progress" style="height:8px; background:rgba(255,255,255,0.1);">
											<div class="progress-bar" style="width: 78%; background:#00E676;"></div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

					<!-- TAB 2: SCOPE 1-3 DECARBONIZATION -->
					<div id="pbiPanel2" style="display:none;">
						<div class="row g-4">
							<div class="col-lg-6">
								<h6 class="text-white font-weight-bold mb-3">Greenly-Aligned Carbon Accounting Breakdown</h6>
								<p class="text-muted" style="font-size:13.5px;">Growth provides greenhouse gas accounting adhering to the GHG Protocol Corporate Standard, ISO 14064, and the MSX ESG Disclosure framework.</p>
								<div class="p-3 rounded-3" style="background:rgba(255,255,255,0.03); border:1px solid rgba(0,230,118,0.2);">
									<div class="d-flex justify-content-between py-2 border-bottom border-secondary">
										<span>Direct Heat &amp; Gas Flaring</span>
										<strong class="text-white">21,400 tCO2e</strong>
									</div>
									<div class="d-flex justify-content-between py-2 border-bottom border-secondary">
										<span>Industrial Machinery</span>
										<strong class="text-white">23,800 tCO2e</strong>
									</div>
									<div class="d-flex justify-content-between py-2 border-bottom border-secondary">
										<span>Grid Power (Majan / Nama Electricity)</span>
										<strong class="text-white">32,150 tCO2e</strong>
									</div>
									<div class="d-flex justify-content-between py-2">
										<span>Upstream Freight &amp; Materials</span>
										<strong class="text-white">65,500 tCO2e</strong>
									</div>
								</div>
							</div>
							<div class="col-lg-6">
								<div class="rounded-3 overflow-hidden" style="height:280px; border:1px solid rgba(0,230,118,0.3);">
									<img src="<?php echo base_url($frontAssetBase . 'img/growth/executive-handshake.png') ?>" alt="Decarbonization Solar Integration" style="width:100%; height:100%; object-fit:cover;">
								</div>
							</div>
						</div>
					</div>

					<!-- TAB 3: OMAN VISION 2040 & MSX -->
					<div id="pbiPanel3" style="display:none;">
						<div class="row g-4 align-items-center">
							<div class="col-lg-4 text-center">
								<img src="<?php echo base_url($frontAssetBase . 'img/growth/oman-vision-2040.png') ?>" alt="Oman Vision 2040" style="max-height:160px; border-radius:12px; box-shadow:0 12px 30px rgba(0,0,0,0.5);">
								<h6 class="mt-3 text-white font-weight-bold">National Net Zero 2050 Roadmap</h6>
							</div>
							<div class="col-lg-8">
								<div class="p-3 rounded-3" style="background:rgba(255,255,255,0.03); border:1px solid rgba(255,255,255,0.08);">
									<h6 class="text-white font-weight-bold mb-2">Muscat Stock Exchange (MSX) Alignment Matrix</h6>
									<p style="font-size:13px; color:#b3cdc2;">Every metric tracked in the Growth Intelligence Hub maps directly to the 30 core indicators required by the Capital Market Authority (CMA) and MSX.</p>
									<ul class="list-unstyled mb-0" style="font-size:13px; color:#e0f2ea;">
										<li class="mb-2">✓ <strong>E1. GHG Emissions:</strong> Full Scope 1-3 audit coverage</li>
										<li class="mb-2">✓ <strong>E2. Emissions Intensity:</strong> Normalized per unit output</li>
										<li class="mb-2">✓ <strong>E3. Energy Usage:</strong> Direct + indirect energy mix</li>
										<li class="mb-2">✓ <strong>E4. Renewable Energy:</strong> Solar PV % certified</li>
										<li>✓ <strong>E5. Water Usage &amp; Recycling:</strong> Desalination discharge monitoring</li>
									</ul>
								</div>
							</div>
						</div>
					</div>

					<!-- TAB 4: ENERGY AUDIT & ROI -->
					<div id="pbiPanel4" style="display:none;">
						<div class="row g-4">
							<div class="col-lg-6">
								<h6 class="text-white font-weight-bold mb-2">Energy Audit Savings Breakdown (ISO 50001)</h6>
								<p style="font-size:13px; color:#b3cdc2;">Certified Growth energy auditors identify immediate, capital-free operational tune-ups and capital retrofit investments with fast returns.</p>
								<div class="p-3 rounded-3" style="background:rgba(255,255,255,0.03); border:1px solid rgba(0,230,118,0.2);">
									<div class="d-flex justify-content-between py-2 border-bottom border-secondary">
										<span>HVAC &amp; Chiller Optimization</span>
										<strong class="text-white">OMR 112,000 / yr</strong>
									</div>
									<div class="d-flex justify-content-between py-2 border-bottom border-secondary">
										<span>Variable Speed Drives (VFD)</span>
										<strong class="text-white">OMR 94,000 / yr</strong>
									</div>
									<div class="d-flex justify-content-between py-2 border-bottom border-secondary">
										<span>Waste Heat Recovery (WHR)</span>
										<strong class="text-white">OMR 86,000 / yr</strong>
									</div>
									<div class="d-flex justify-content-between py-2">
										<span>LED Lighting &amp; Sensor Automation</span>
										<strong class="text-white">OMR 50,000 / yr</strong>
									</div>
								</div>
							</div>
							<div class="col-lg-6">
								<div class="rounded-3 overflow-hidden" style="height:280px; border:1px solid rgba(0,230,118,0.3);">
									<img src="<?php echo base_url($frontAssetBase . 'img/growth/Energy-Management-Audit-Services.png') ?>" alt="Energy Audit" style="width:100%; height:100%; object-fit:cover;">
								</div>
							</div>
						</div>
					</div>
				</div>

				<!-- Modal Footer -->
				<div class="modal-footer d-flex justify-content-between" style="background:#02140d; border-top:1px solid rgba(0,230,118,0.2); padding:14px 24px;">
					<div class="d-flex align-items-center gap-2" style="font-size:12px; color:#85a89b;">
						<i class="fas fa-check-circle text-success"></i> Connected to Growth Real-time IoT Data Pipeline • Oman
					</div>
					<div class="d-flex gap-2">
						<a href="<?php echo base_url('contact') ?>" class="btn-greenly" style="padding:8px 18px; font-size:13px;">
							Book Full Walkthrough
						</a>
						<button type="button" class="btn btn-sm btn-outline-light" data-bs-dismiss="modal">Close</button>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- 1. ESG Peer Benchmarking Modal (Oren / MSX Aligned) -->
	<div class="modal fade" id="benchmarkingModal" tabindex="-1" aria-labelledby="benchmarkingModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-xl modal-dialog-centered">
			<div class="modal-content" style="background:#031c13; color:#ffffff; border:1.5px solid rgba(0,230,118,0.35); border-radius:20px; overflow:hidden; box-shadow:0 25px 60px rgba(0,0,0,0.6);">
				<div class="modal-header d-flex justify-content-between align-items-center" style="background:#02140d; border-bottom:1px solid rgba(0,230,118,0.2); padding:16px 24px;">
					<div class="d-flex align-items-center gap-3">
						<span style="background:#00E676; color:#031c13; font-weight:900; font-size:11px; padding:3px 9px; border-radius:4px; letter-spacing:0.05em;">BENCHMARKING</span>
						<h5 class="modal-title mb-0" id="benchmarkingModalLabel" style="font-size:16px; font-weight:800; color:#ffffff;">
							Growth &amp; MSX ESG Peer Benchmarking Platform
						</h5>
					</div>
					<button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>

				<div class="modal-body p-4" style="background:#02150e; max-height:78vh; overflow-y:auto;">
					<!-- Sector & Peer Filter Bar -->
					<div class="p-3 rounded-3 mb-4 d-flex flex-wrap align-items-center justify-content-between gap-3" style="background:rgba(255,255,255,0.04); border:1px solid rgba(0,230,118,0.2);">
						<div class="d-flex align-items-center gap-3 flex-wrap">
							<label for="benchmarkSectorSelect" style="font-size:13px; font-weight:700; color:#e0f2ea; margin:0;">Sector:</label>
							<select id="benchmarkSectorSelect" onchange="switchBenchmarkSector(this.value)" style="background:#062319; border:1px solid #00E676; border-radius:8px; padding:7px 14px; font-size:13px; font-weight:600; color:#ffffff; outline:none; cursor:pointer;">
								<option value="sustainability" selected>Sustainability &amp; ESG Consulting (Growth HQ)</option>
								<option value="energy">Energy &amp; Oil &amp; Gas (Oman / GCC)</option>
								<option value="metals">Heavy Metals &amp; Aluminium</option>
								<option value="logistics">Ports &amp; Maritime Logistics</option>
							</select>
						</div>

						<div class="d-flex align-items-center gap-2 flex-wrap">
							<div id="benchmarkCompanyPills" class="d-flex gap-2">
								<span style="background:rgba(0,230,118,0.15); color:#00E676; font-size:12.5px; font-weight:700; padding:6px 14px; border-radius:99px; border:1px solid rgba(0,230,118,0.3); display:inline-flex; align-items:center; gap:8px;">
									<span id="pillCompanyName">Growth Investment & Development LLC</span>
									<i class="fas fa-times" style="cursor:pointer; opacity:0.8;" onclick="resetBenchmarkFilter()" title="Reset"></i>
								</span>
							</div>
							<div>
								<select id="benchmarkPeerDropdown" onchange="selectBenchmarkPeer(this.value)" style="background:#062319; border:1px dashed #00E676; border-radius:8px; padding:6px 14px; font-size:12.5px; font-weight:600; color:#00E676; outline:none; cursor:pointer;">
									<option value="">+ Compare with Peer...</option>
									<option value="pdo">Petroleum Development Oman (PDO)</option>
									<option value="sohar_al">Sohar Aluminium</option>
									<option value="oman_cables">Oman Cables Industry</option>
									<option value="growth">Growth Investment &amp; Development</option>
								</select>
							</div>
						</div>
					</div>

					<!-- Benchmarking Verified Filings Table -->
					<div class="table-responsive rounded-3 overflow-hidden" style="border:1px solid rgba(255,255,255,0.08);">
						<table class="benchmarking-table w-100" style="background:rgba(255,255,255,0.02); color:#ffffff; margin:0;">
							<tbody>
								<tr style="border-bottom:1px solid rgba(255,255,255,0.06);">
									<td style="padding:12px 18px; width:30%; font-weight:700; color:#85a89b;">Company Name</td>
									<td style="padding:12px 18px;"><strong id="bmCompanyName" style="color:#00E676; font-size:15px;">Growth Investment & Development LLC</strong></td>
								</tr>
								<tr style="border-bottom:1px solid rgba(255,255,255,0.06);">
									<td style="padding:12px 18px; font-weight:700; color:#85a89b;">CIN / CR Number</td>
									<td style="padding:12px 18px;" id="bmCIN">OM-CR-1385492 (Sultanate of Oman)</td>
								</tr>
								<tr style="border-bottom:1px solid rgba(255,255,255,0.06);">
									<td style="padding:12px 18px; font-weight:700; color:#85a89b;">Reporting Period</td>
									<td style="padding:12px 18px;"><span id="bmStartDate">01/01/2024</span> &mdash; <span id="bmEndDate">31/12/2024</span></td>
								</tr>
								<tr style="border-bottom:1px solid rgba(255,255,255,0.06);">
									<td style="padding:12px 18px; font-weight:700; color:#85a89b;">Year of Incorporation</td>
									<td style="padding:12px 18px;" id="bmYearInc">2018</td>
								</tr>
								<tr style="border-bottom:1px solid rgba(255,255,255,0.06);">
									<td style="padding:12px 18px; font-weight:700; color:#85a89b;">Website</td>
									<td style="padding:12px 18px;"><a href="https://growthom.com" target="_blank" rel="noopener" id="bmWebsite" style="color:#00b0ff; text-decoration:underline;">https://growthom.com</a></td>
								</tr>
								<tr style="border-bottom:1px solid rgba(255,255,255,0.06);">
									<td style="padding:12px 18px; font-weight:700; color:#85a89b;">Contact Person</td>
									<td style="padding:12px 18px;"><span id="bmContactName">Eng. Tariq Al-Balushi</span> (<span id="bmEmail" style="color:#a4c5b7;">advisory@growth-i-d.com</span>)</td>
								</tr>
								<tr style="border-bottom:1px solid rgba(255,255,255,0.06);">
									<td style="padding:12px 18px; font-weight:700; color:#85a89b;">Reporting Boundary</td>
									<td style="padding:12px 18px;" id="bmBoundary">GCC Operations • Sultanate of Oman &amp; UAE Advisory Network</td>
								</tr>
								<tr>
									<td style="padding:12px 18px; font-weight:700; color:#85a89b;">Main Business Activity</td>
									<td style="padding:12px 18px;" id="bmActivity">Sustainability consulting, carbon accounting, energy audits, process safety management and ESG reporting across GCC.</td>
								</tr>
							</tbody>
						</table>
					</div>

					<!-- 🏆 Trophy Card (User Prompt 7) -->
					<div style="background: linear-gradient(135deg, rgba(0, 230, 118, 0.12) 0%, rgba(242, 200, 17, 0.15) 100%); border: 1.5px solid rgba(0, 230, 118, 0.4); border-radius: 16px; padding: 20px 24px; margin-top: 24px;">
						<div class="d-flex align-items-center gap-2 mb-2">
							<span style="font-size:22px;">🏆</span>
							<strong style="color:#ffffff; font-size:15px; letter-spacing:0.04em;">Growth GCC Peer Benchmarking Insight</strong>
						</div>
						<p style="color:#e0f2ea; font-size:13.5px; line-height:1.6; margin:0;">
							Based on verified <strong>Growth &amp; MSX GCC standards</strong>, an <strong>8% reduction</strong> in manufacturing places your enterprise in the <span style="background:#00E676; color:#031c13; font-weight:800; padding:2px 8px; border-radius:6px;">70th percentile (Mid-tier compliant)</span>, advancing Oman Vision 2040 industrial decarbonization targets.
						</p>
					</div>
				</div>

				<div class="modal-footer d-flex justify-content-between" style="background:#02140d; border-top:1px solid rgba(0,230,118,0.2); padding:14px 24px;">
					<span style="font-size:12px; color:#85a89b;">
						<i class="fas fa-database text-success me-1"></i> Data sourced from verified annual BRSR / MSX filings.
					</span>
					<div class="d-flex gap-2">
						<a href="<?php echo base_url('contact') ?>" class="btn-greenly" style="padding:8px 18px; font-size:13px;">
							<span>Request Full Peer Dataset</span> <i class="fas fa-download ms-1"></i>
						</a>
						<button type="button" class="btn btn-sm btn-outline-light" data-bs-dismiss="modal">Close</button>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- 2. GCC ESG Master Guide & Stock Exchange "Made Simple" Whitepaper Modal -->
	<div class="modal fade" id="whitepaperModal" tabindex="-1" aria-labelledby="whitepaperModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-xl modal-dialog-centered">
			<div class="modal-content" style="background:#041f16; color:#ffffff; border:1.5px solid rgba(0,230,118,0.35); border-radius:24px; overflow:hidden; box-shadow:0 30px 70px rgba(0,0,0,0.65);">
				<!-- Modal Header with Series Switcher -->
				<div class="modal-header d-flex flex-wrap justify-content-between align-items-center gap-3" style="background:#02140d; border-bottom:1px solid rgba(0,230,118,0.2); padding:18px 26px;">
					<div>
						<div class="d-flex align-items-center gap-2 mb-1">
							<span style="color:#00E676; font-size:11px; font-weight:800; text-transform:uppercase; letter-spacing:0.12em;">GROWTH KNOWLEDGE REPOSITORY &bull; 2026 EDITION</span>
							<span class="badge" style="background:rgba(0,230,118,0.15); color:#00E676; border:1px solid rgba(0,230,118,0.4); font-size:10px; font-weight:700;">OFFICIAL GUIDES</span>
						</div>
						<h5 class="modal-title mb-0" id="whitepaperModalLabel" style="font-size:18px; font-weight:800; color:#ffffff;">
							Regulatory Disclosures &amp; Sustainability Guides
						</h5>
					</div>

					<!-- Top Tab Switcher -->
					<div class="d-flex align-items-center gap-2">
						<button type="button" id="wpTabBtnMs" onclick="switchMadeSimpleTab('madesimple')" class="btn btn-sm" style="background:#00E676; color:#031c13; font-weight:800; font-size:12.5px; border-radius:999px; padding:6px 16px; border:1px solid #00E676; transition:all 0.2s ease;">
							🏛️ Stock Exchange "Made Simple" Series
						</button>
						<button type="button" id="wpTabBtnEc" onclick="switchMadeSimpleTab('gccesg')" class="btn btn-sm" style="background:transparent; color:#cbe3d9; font-weight:700; font-size:12.5px; border-radius:999px; padding:6px 16px; border:1px solid rgba(0,230,118,0.25); transition:all 0.2s ease;">
							📘 GCC Sustainability &amp; ESG Master Guide
						</button>
						<button type="button" class="btn-close btn-close-white ms-2" data-bs-dismiss="modal" aria-label="Close"></button>
					</div>
				</div>

				<div class="modal-body p-4 p-lg-5" style="background:#02150e;">
					<!-- TAB 1: "Made Simple" Regulatory Series (Exact 5 Stock Exchanges from Google Sheet) -->
					<div id="wpMadeSimpleSection">
						<div class="mb-4">
							<div class="d-flex flex-wrap justify-content-between align-items-center gap-2 mb-3">
								<div>
									<span style="font-size:12px; font-weight:800; color:#00E676; text-transform:uppercase; letter-spacing:0.08em;">SELECT JURISDICTION / STOCK EXCHANGE</span>
									<p style="font-size:13.5px; color:#a7cfbe; margin:2px 0 0;">
										Growth's proprietary <strong>"Made Simple"</strong> series translates complex capital-market ESG regulations into audit-ready playbooks.
									</p>
								</div>
								<span style="font-size:11.5px; color:#85a89b; background:rgba(255,255,255,0.04); padding:4px 10px; border-radius:6px; border:1px solid rgba(255,255,255,0.08);">
									<i class="fas fa-file-pdf text-danger me-1"></i> 5 Verified Exchange Handbooks
								</span>
							</div>

							<!-- 5 Stock Exchange Pills from Google Sheet -->
							<div class="d-flex flex-wrap gap-2">
								<button type="button" id="msPill_msx" onclick="selectMadeSimpleExchange('msx')" class="btn btn-sm ms-exchange-pill active" style="background:#00E676; color:#031c13; font-weight:800; border-radius:10px; padding:8px 14px; border:1.5px solid #00E676; font-size:12.5px; transition:all 0.2s ease;">
									🇴🇲 Muscat MSX (Oman)
								</button>
								<button type="button" id="msPill_tadawul" onclick="selectMadeSimpleExchange('tadawul')" class="btn btn-sm ms-exchange-pill" style="background:rgba(255,255,255,0.05); color:#e0f2ea; font-weight:700; border-radius:10px; padding:8px 14px; border:1.5px solid rgba(0,230,118,0.25); font-size:12.5px; transition:all 0.2s ease;">
									🇸🇦 Saudi Tadawul (KSA)
								</button>
								<button type="button" id="msPill_kuwait" onclick="selectMadeSimpleExchange('kuwait')" class="btn btn-sm ms-exchange-pill" style="background:rgba(255,255,255,0.05); color:#e0f2ea; font-weight:700; border-radius:10px; padding:8px 14px; border:1.5px solid rgba(0,230,118,0.25); font-size:12.5px; transition:all 0.2s ease;">
									🇰🇼 Boursa Kuwait
								</button>
								<button type="button" id="msPill_sgx" onclick="selectMadeSimpleExchange('sgx')" class="btn btn-sm ms-exchange-pill" style="background:rgba(255,255,255,0.05); color:#e0f2ea; font-weight:700; border-radius:10px; padding:8px 14px; border:1.5px solid rgba(0,230,118,0.25); font-size:12.5px; transition:all 0.2s ease;">
									🇸🇬 Singapore SGX
								</button>
								<button type="button" id="msPill_pse" onclick="selectMadeSimpleExchange('pse')" class="btn btn-sm ms-exchange-pill" style="background:rgba(255,255,255,0.05); color:#e0f2ea; font-weight:700; border-radius:10px; padding:8px 14px; border:1.5px solid rgba(0,230,118,0.25); font-size:12.5px; transition:all 0.2s ease;">
									🇵🇭 Philippine PSE
								</button>
							</div>
						</div>

						<div class="row align-items-stretch g-4">
							<!-- Left Side: 3D Booklet Preview -->
							<div class="col-lg-5">
								<div class="h-100 d-flex flex-column justify-content-between p-4 rounded-4" style="background:linear-gradient(150deg, #093c2e 0%, #021a13 100%); border:1.5px solid rgba(0,230,118,0.35); box-shadow:0 18px 40px rgba(0,0,0,0.55);">
									<div>
										<div class="d-flex justify-content-between align-items-center mb-3">
											<span id="msBookSeriesBadge" style="font-size:10px; background:#00E676; color:#041a13; font-weight:800; padding:3px 8px; border-radius:4px; text-transform:uppercase; letter-spacing:0.06em;">
												MADE SIMPLE &bull; VOLUME 1
											</span>
											<span style="font-size:11px; color:#85a89b; font-weight:700;">GROWTH ADVISORY</span>
										</div>

										<h4 id="msBookTitle" style="font-size:18px; font-weight:800; color:#ffffff; line-height:1.3; margin-bottom:12px;">
											🇴🇲 Muscat Stock Exchange (MSX) ESG Disclosure Guide
										</h4>

										<p id="msBookDesc" style="font-size:12.5px; color:#cbe3d9; line-height:1.6; margin-bottom:16px;">
											CMA Oman ESG disclosure standards, Vision 2040 net-zero targets, and step-by-step reporting guidelines for listed Omani companies.
										</p>

										<div style="height:1px; background:rgba(0,230,118,0.2); margin-bottom:14px;"></div>

										<div style="font-size:11px; font-weight:800; color:#00E676; text-transform:uppercase; letter-spacing:0.08em; margin-bottom:8px;">
											WHAT'S INSIDE THIS GUIDEBOOK:
										</div>

										<ul id="msBookHighlights" class="list-unstyled" style="font-size:12px; color:#e0f2ea; line-height:1.6; margin-bottom:16px;">
											<li class="mb-1 d-flex align-items-center gap-2">
												<i class="fas fa-check-circle" style="color:#00E676; font-size:12px;"></i>
												<span>CMA Oman Mandatory ESG Circular Alignment</span>
											</li>
											<li class="mb-1 d-flex align-items-center gap-2">
												<i class="fas fa-check-circle" style="color:#00E676; font-size:12px;"></i>
												<span>Scope 1, 2 &amp; Material Scope 3 Calculation</span>
											</li>
											<li class="mb-1 d-flex align-items-center gap-2">
												<i class="fas fa-check-circle" style="color:#00E676; font-size:12px;"></i>
												<span>Oman Vision 2040 Industrial Roadmaps</span>
											</li>
											<li class="mb-1 d-flex align-items-center gap-2">
												<i class="fas fa-check-circle" style="color:#00E676; font-size:12px;"></i>
												<span>IFRS S1/S2 &amp; GRI Metric Concordance Table</span>
											</li>
										</ul>
									</div>

									<div class="pt-3 border-top" style="border-color:rgba(0,230,118,0.2) !important;">
										<div class="d-flex align-items-center justify-content-between">
											<div class="d-flex align-items-center gap-2">
												<i class="fas fa-file-pdf text-danger" style="font-size:20px;"></i>
												<div>
													<strong id="msBookFile" style="font-size:11.5px; color:#ffffff; display:block;">Made Simple 1 - Muscat MSX  .pdf</strong>
													<span style="font-size:10px; color:#85a89b;">Official Regulatory Document &bull; Growth Insights</span>
												</div>
											</div>
											<span class="badge" style="background:rgba(0,230,118,0.15); color:#00E676; font-size:10px;">Free Access</span>
										</div>
									</div>
								</div>
							</div>

							<!-- Right Side: Fast Download Form -->
							<div class="col-lg-7">
								<div class="p-4 rounded-4 h-100 d-flex flex-column justify-content-between" style="background:#031c13; border:1px solid rgba(0,230,118,0.25);">
									<div>
										<h5 style="font-size:16px; font-weight:800; color:#ffffff; margin-bottom:6px;">
											Get Your Free Stock Exchange Playbook
										</h5>
										<p style="color:#a7cfbe; font-size:13px; line-height:1.6; margin-bottom:18px;">
											Complete the short form below to instantly download the complete regulatory guide and compliance checklists.
										</p>

										<form id="madeSimpleDownloadForm" onsubmit="handleMadeSimpleSubmit(event)">
											<div class="mb-3">
												<label class="form-label" style="font-size:11.5px; font-weight:700; color:#85a89b; text-transform:uppercase; letter-spacing:0.04em;">Selected Regulatory Exchange</label>
												<select id="msFormExchangeSelect" onchange="selectMadeSimpleExchange(this.value)" class="form-select form-select-sm" style="background:#062319; color:#fff; border:1.5px solid #1a4d38; padding:8px 12px; font-size:13px; font-weight:700;">
													<option value="msx">Muscat Stock Exchange (MSX) — Oman</option>
													<option value="tadawul">Saudi Exchange (Tadawul) — Saudi Arabia</option>
													<option value="kuwait">Boursa Kuwait — Kuwait</option>
													<option value="sgx">Singapore Exchange (SGX) — Singapore</option>
													<option value="pse">Philippine Stock Exchange (PSE) — Philippines</option>
												</select>
											</div>

											<div class="row g-2 mb-2">
												<div class="col-6">
													<label class="form-label" style="font-size:11px; color:#85a89b;">First Name *</label>
													<input type="text" class="form-control form-control-sm" required placeholder="Ahmed" style="background:#062319; color:#fff; border:1px solid #1a4d38;">
												</div>
												<div class="col-6">
													<label class="form-label" style="font-size:11px; color:#85a89b;">Surname *</label>
													<input type="text" class="form-control form-control-sm" required placeholder="Al-Harthy" style="background:#062319; color:#fff; border:1px solid #1a4d38;">
												</div>
											</div>

											<div class="row g-2 mb-2">
												<div class="col-6">
													<label class="form-label" style="font-size:11px; color:#85a89b;">Company / Entity *</label>
													<input type="text" class="form-control form-control-sm" required placeholder="Organization Name" style="background:#062319; color:#fff; border:1px solid #1a4d38;">
												</div>
												<div class="col-6">
													<label class="form-label" style="font-size:11px; color:#85a89b;">Work Email *</label>
													<input type="email" class="form-control form-control-sm" required placeholder="name@company.com" style="background:#062319; color:#fff; border:1px solid #1a4d38;">
												</div>
											</div>

											<div class="mb-3">
												<label class="form-label" style="font-size:11px; color:#85a89b;">Your Region / Country *</label>
												<select class="form-select form-select-sm" style="background:#062319; color:#fff; border:1px solid #1a4d38;">
													<option value="Oman" selected>Sultanate of Oman (Muscat)</option>
													<option value="Saudi Arabia">Kingdom of Saudi Arabia (Riyadh)</option>
													<option value="UAE">United Arab Emirates (Dubai / Abu Dhabi)</option>
													<option value="Kuwait">State of Kuwait</option>
													<option value="Singapore">Singapore / ASEAN</option>
													<option value="Philippines">Philippines / APAC</option>
													<option value="India">India (Nagpur Delivery Center)</option>
												</select>
											</div>

											<button type="submit" id="msSubmitBtn" class="btn-greenly w-100 justify-content-center" style="padding:11px; font-size:14px; font-weight:800;">
												<span>Download Playbook (Instant PDF)</span> <i class="fas fa-file-download ms-2"></i>
											</button>

											<div id="msSuccessAlert" style="display:none; margin-top:12px; background:rgba(0,230,118,0.15); border:1px solid #00E676; border-radius:8px; padding:10px 14px; color:#00E676; font-size:12.5px;">
												<!-- Populated via JS -->
											</div>
										</form>
									</div>

									<div class="mt-3 pt-3 border-top d-flex align-items-center justify-content-between" style="border-color:rgba(0,230,118,0.15) !important;">
										<span style="font-size:11px; color:#85a89b;">
											<i class="fas fa-shield-alt text-success me-1"></i> Data handled in compliance with Oman PDPL regulations.
										</span>
										<a href="<?php echo base_url('contact') ?>" style="font-size:11px; color:#00E676; text-decoration:underline;">Need Advisory Support?</a>
									</div>
								</div>
							</div>
						</div>
					</div>

					<!-- TAB 2: GCC Sustainability & General ESG Master Guide -->
					<div id="wpGccEsgSection" style="display:none;">
						<div class="row align-items-center g-4">
							<div class="col-md-5 text-center">
								<div style="display:inline-block; padding:22px 26px; background:linear-gradient(145deg, #0b4536 0%, #032118 100%); border-radius:16px; border:2px solid rgba(0,230,118,0.4); box-shadow:-8px 12px 28px rgba(0,0,0,0.5);">
									<div class="d-flex justify-content-between align-items-center mb-2">
										<strong style="color:#ffffff; font-size:13px;">GROWTH</strong>
										<span style="font-size:9px; background:#00E676; color:#041a13; font-weight:800; padding:2px 5px; border-radius:4px;">WHITE PAPER</span>
									</div>
									<div style="font-size:14.5px; font-weight:800; color:#ffffff; line-height:1.3; text-align:left; margin-bottom:10px;">
										Master GCC ESG Disclosures &amp; Sustainability
									</div>
									<div style="height:2px; width:30px; background:#00E676; margin-bottom:8px;"></div>
									<div style="font-size:11px; color:#cbe3d9; text-align:left;">
										Gap analysis, scoring matrices &amp; MSX alignment roadmaps.
									</div>
								</div>
								<div class="d-flex align-items-center gap-2 justify-content-center mt-3">
									<img src="https://ui-avatars.com/api/?name=Ana+Bittar&background=00E676&color=041a13" alt="Ana Bittar" style="width:34px; height:34px; border-radius:50%;">
									<div class="text-start">
										<strong style="font-size:12px; color:#ffffff; display:block;">Ana Bittar</strong>
										<span style="font-size:10.5px; color:#a7cfbe;">Sustainability Lead</span>
									</div>
								</div>
							</div>
							<div class="col-md-7">
								<h5 style="font-size:16px; font-weight:800; color:#ffffff; margin-bottom:6px;">
									Master MSX &amp; GCC Corporate Sustainability
								</h5>
								<p style="color:#cbe3d9; font-size:13.5px; line-height:1.6; margin-bottom:16px;">
									Fill out the quick form to receive your complimentary copy of the guide, complete with practical scorecards, self-assessment matrices, and audit roadmaps.
								</p>
								<form id="whitepaperDownloadForm" onsubmit="handleWhitepaperSubmit(event)">
									<div class="row g-2 mb-2">
										<div class="col-6">
											<input type="text" class="form-control form-control-sm" required placeholder="First Name *" style="background:#062319; color:#fff; border:1px solid #1a4d38;">
										</div>
										<div class="col-6">
											<input type="text" class="form-control form-control-sm" required placeholder="Surname *" style="background:#062319; color:#fff; border:1px solid #1a4d38;">
										</div>
									</div>
									<div class="row g-2 mb-2">
										<div class="col-6">
											<input type="text" class="form-control form-control-sm" required placeholder="Company *" style="background:#062319; color:#fff; border:1px solid #1a4d38;">
										</div>
										<div class="col-6">
											<input type="email" class="form-control form-control-sm" required placeholder="Work Email *" style="background:#062319; color:#fff; border:1px solid #1a4d38;">
										</div>
									</div>
									<div class="mb-3">
										<select class="form-select form-select-sm" style="background:#062319; color:#fff; border:1px solid #1a4d38;">
											<option value="Oman" selected>Sultanate of Oman</option>
											<option value="Saudi Arabia">Saudi Arabia (KSA)</option>
											<option value="UAE">United Arab Emirates (UAE)</option>
											<option value="Qatar">Qatar</option>
											<option value="India">India</option>
										</select>
									</div>
									<button type="submit" id="wpSubmitBtn" class="btn-greenly w-100 justify-content-center" style="padding:10px; font-size:14px;">
										<span>Download Free PDF Guide</span> <i class="fas fa-arrow-right ms-2"></i>
									</button>
									<div id="wpSuccessAlert" style="display:none; margin-top:12px; background:rgba(0,230,118,0.15); border:1px solid #00E676; border-radius:8px; padding:10px 14px; color:#00E676; font-size:12.5px;">
										<i class="fas fa-check-circle me-1"></i> Ready! <a href="<?php echo base_url($frontAssetBase . 'img/growth/Growth-Company-Profile.pdf') ?>" target="_blank" style="text-decoration:underline; font-weight:700; color:#ffffff;">Click here to open PDF</a>.
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- 3. AI-Powered ESG Maturity Assessment Tool Modal (Exact User Pic 1 & 2 from Prompt 9) -->
	<div class="modal fade" id="esgMaturityModal" tabindex="-1" aria-labelledby="esgMaturityModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-xl modal-dialog-centered">
			<div class="modal-content" style="background:#ffffff; color:#062319; border-radius:24px; overflow:hidden; border:none; box-shadow:0 30px 70px rgba(0,0,0,0.35);">
				<div class="modal-header d-flex justify-content-between align-items-center" style="background:#f8fbf9; border-bottom:1px solid #e2ece6; padding:18px 28px;">
					<div class="d-flex align-items-center gap-2">
						<img src="<?php echo base_url($frontAssetBase . 'img/logo.png') ?>" alt="Growth" height="34">
						<span style="color:#556B62; font-size:13px; font-weight:700; margin-left:8px;">| Sustainability Simplified</span>
					</div>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>

				<div class="modal-body p-4 p-lg-5" id="esgMaturityBody">
					<!-- Initial View (Exact User Pic 1 from Prompt 9) -->
					<div id="maturityInitialView">
						<div class="row align-items-center g-5">
							<div class="col-lg-6">
								<h1 style="font-size: clamp(2rem, 3.4vw, 2.75rem); font-weight:800; color:#062319; line-height:1.2; margin-bottom:18px;">
									AI-Powered ESG<br>
									Maturity Assessment<br>
									<span style="color:#0b5980;">for Every Company</span>
								</h1>
								<p style="color:#556B62; font-size:15.5px; line-height:1.7; margin-bottom:16px;">
									Receive a comprehensive analysis of your organisation's Environmental, Social, and Governance practices and initiatives in just 5 minutes!
								</p>
								<p style="color:#556B62; font-size:15px; line-height:1.7; margin-bottom:28px;">
									The report includes detailed score for each theme, personalized insights, and actionable recommendations.
								</p>
								<button type="button" class="btn-greenly" onclick="startEsgMaturityAssessment()" style="padding:14px 32px; font-size:15px; background:#0b5980; border-color:#0b5980;">
									<span>Start Your Free Assessment</span> <i class="fas fa-arrow-right ms-2"></i>
								</button>
							</div>

							<!-- Right Preview Card (User Pic 1) -->
							<div class="col-lg-6">
								<div class="p-4 rounded-4 shadow-sm" style="background:#ffffff; border:1px solid #e1ede6; box-shadow:0 15px 40px rgba(6,35,25,0.06);">
									<!-- 3 Pillars Header -->
									<div class="row text-center mb-4 g-2">
										<div class="col-4">
											<div class="p-3 rounded-3" style="background:#edf7f1;">
												<div style="width:40px; height:40px; background:#00a854; color:#fff; border-radius:10px; display:flex; align-items:center; justify-content:center; margin:0 auto 8px; font-size:18px;">
													<i class="fas fa-leaf"></i>
												</div>
												<strong style="font-size:13px; color:#062319; display:block;">Environmental</strong>
												<span style="font-size:11px; color:#556B62;">Climate &amp; Resource</span>
											</div>
										</div>
										<div class="col-4">
											<div class="p-3 rounded-3" style="background:#fef9ed;">
												<div style="width:40px; height:40px; background:#f59e0b; color:#fff; border-radius:10px; display:flex; align-items:center; justify-content:center; margin:0 auto 8px; font-size:18px;">
													<i class="fas fa-users"></i>
												</div>
												<strong style="font-size:13px; color:#062319; display:block;">Social</strong>
												<span style="font-size:11px; color:#556B62;">People &amp; Community</span>
											</div>
										</div>
										<div class="col-4">
											<div class="p-3 rounded-3" style="background:#fef2ed;">
												<div style="width:40px; height:40px; background:#f97316; color:#fff; border-radius:10px; display:flex; align-items:center; justify-content:center; margin:0 auto 8px; font-size:18px;">
													<i class="fas fa-shield-alt"></i>
												</div>
												<strong style="font-size:13px; color:#062319; display:block;">Governance</strong>
												<span style="font-size:11px; color:#556B62;">Ethics &amp; Oversight</span>
											</div>
										</div>
									</div>

									<!-- ESG Maturity Score Box (User Pic 1 & 2) -->
									<div class="p-3 rounded-3" style="background:#f8fbf9; border:1px solid #e1ede6;">
										<div class="d-flex justify-content-between align-items-center mb-3">
											<strong style="color:#062319; font-size:14px;">ESG Maturity Score</strong>
											<i class="fas fa-chart-line text-success"></i>
										</div>
										<div class="mb-2">
											<div class="d-flex justify-content-between mb-1" style="font-size:12.5px;">
												<span style="color:#556B62;">Environmental</span>
												<strong style="color:#062319;" id="maturityEnvScore">82</strong>
											</div>
											<div class="progress" style="height:8px; background:#e2ede6;">
												<div class="progress-bar" style="width:82%; background:#00a854;"></div>
											</div>
										</div>
										<div class="mb-2">
											<div class="d-flex justify-content-between mb-1" style="font-size:12.5px;">
												<span style="color:#556B62;">Social</span>
												<strong style="color:#062319;" id="maturitySocScore">75</strong>
											</div>
											<div class="progress" style="height:8px; background:#e2ede6;">
												<div class="progress-bar" style="width:75%; background:#f59e0b;"></div>
											</div>
										</div>
										<div>
											<div class="d-flex justify-content-between mb-1" style="font-size:12.5px;">
												<span style="color:#556B62;">Governance</span>
												<strong style="color:#062319;" id="maturityGovScore">90</strong>
											</div>
											<div class="progress" style="height:8px; background:#e2ede6;">
												<div class="progress-bar" style="width:90%; background:#f97316;"></div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

					<!-- Interactive Assessment Steps (Dynamic Flow) -->
					<div id="maturityQuestionsView" style="display:none;">
						<div class="d-flex justify-content-between align-items-center mb-4 pb-2 border-bottom">
							<div>
								<span style="font-size:12px; font-weight:800; color:#0b5980; text-transform:uppercase; letter-spacing:0.1em;" id="matCurrentPillarLabel">PILLAR 1 OF 3: ENVIRONMENTAL</span>
								<h3 style="font-size:1.4rem; font-weight:800; color:#062319; margin-top:4px;" id="matQuestionTitle">Does your organization calculate Scope 1, 2, and 3 GHG emissions?</h3>
							</div>
							<span class="badge" style="background:#e8f7ee; color:#008744; font-size:12px; padding:6px 12px;" id="matProgressBadge">Step 1/3</span>
						</div>

						<div class="row g-3 mb-4" id="matOptionsContainer">
							<!-- Populated dynamically via JS -->
						</div>

						<div class="d-flex justify-content-between align-items-center pt-3 border-top">
							<button type="button" class="btn btn-sm btn-outline-secondary" onclick="prevMaturityStep()" id="matPrevBtn" style="display:none;">
								<i class="fas fa-arrow-left me-1"></i> Previous
							</button>
							<button type="button" class="btn-greenly" onclick="nextMaturityStep()" id="matNextBtn" style="padding:10px 24px; margin-left:auto;">
								<span>Continue</span> <i class="fas fa-arrow-right ms-1"></i>
							</button>
						</div>
					</div>

					<!-- Final Calculated Results View (Matches User Pic 2) -->
					<div id="maturityResultView" style="display:none;">
						<div class="text-center mb-4">
							<span class="badge mb-2" style="background:#00E676; color:#031c13; font-weight:800; font-size:12px; padding:6px 14px;">ASSESSMENT COMPLETED</span>
							<h2 style="font-size:2rem; font-weight:800; color:#062319;">Your Organization's ESG Maturity: <span style="color:#00a854;" id="matFinalOverallScore">82.3%</span></h2>
							<p style="color:#556B62; max-width:620px; margin:8px auto 0;">
								Based on verified GCC &amp; Oman Vision 2040 industrial benchmarks, your organization qualifies for <strong>Mid-to-High Compliance Tier</strong>.
							</p>
						</div>

						<div class="row g-4 mb-4">
							<div class="col-md-4">
								<div class="p-3 rounded-3" style="background:#edf7f1; border:1px solid #c2e5d2;">
									<div class="d-flex justify-content-between align-items-center mb-1">
										<strong>🌱 Environmental</strong>
										<span class="badge bg-success" id="matResEnv">82%</span>
									</div>
									<small style="color:#556B62;">Scope 1-2 tracked. Scope 3 supply chain integration recommended.</small>
								</div>
							</div>
							<div class="col-md-4">
								<div class="p-3 rounded-3" style="background:#fef9ed; border:1px solid #f6e3b8;">
									<div class="d-flex justify-content-between align-items-center mb-1">
										<strong>👥 Social</strong>
										<span class="badge bg-warning text-dark" id="matResSoc">75%</span>
									</div>
									<small style="color:#556B62;">HSE systems certified. Omanization and diversity disclosures in progress.</small>
								</div>
							</div>
							<div class="col-md-4">
								<div class="p-3 rounded-3" style="background:#fef2ed; border:1px solid #fad2c0;">
									<div class="d-flex justify-content-between align-items-center mb-1">
										<strong>🛡️ Governance</strong>
										<span class="badge bg-danger" id="matResGov">90%</span>
									</div>
									<small style="color:#556B62;">MSX CMA governance standards fully met with board-level oversight.</small>
								</div>
							</div>
						</div>

						<div class="d-flex justify-content-center gap-3 flex-wrap">
							<a href="<?php echo base_url('contact') ?>" class="btn-greenly" style="padding:12px 28px;">
								<span>Book Tailored ESG Advisory Walkthrough</span> <i class="fas fa-arrow-right ms-1"></i>
							</a>
							<button type="button" class="btn btn-outline-secondary" onclick="resetMaturityAssessment()" style="padding:12px 20px; font-weight:700;">
								Retake Diagnostic
							</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Modal & Regional JavaScript Logic -->
	<script>
	function openDashboardVideoModal() {
		var modalEl = document.getElementById('dashboardVideoModal');
		if (modalEl && window.bootstrap) {
			var modal = new bootstrap.Modal(modalEl);
			modal.show();
		}
	}

	function switchPbiTab(tabNum) {
		for (let i = 1; i <= 4; i++) {
			const btn = document.getElementById('pbiTab' + i);
			const panel = document.getElementById('pbiPanel' + i);
			if (btn) btn.classList.toggle('active', i === tabNum);
			if (panel) panel.style.display = (i === tabNum) ? 'block' : 'none';
		}
	}

	const pbiFacilities = {
		sohar: { footprint: '142,850', savings: 'OMR 342,000', assurance: '94%', renewable: '36.5%', site: 'Sohar Industrial Terminal — Decarbonization Hub' },
		ghubrah: { footprint: '86,400', savings: 'OMR 198,000', assurance: '96%', renewable: '28.0%', site: 'Al Ghubrah Complex (Muscat) — Energy Optimization' },
		salalah: { footprint: '115,200', savings: 'OMR 275,000', assurance: '92%', renewable: '42.0%', site: 'Salalah Logistics Hub — Green Port Initiative' },
		duqm: { footprint: '240,000', savings: 'OMR 620,000', assurance: '91%', renewable: '22.5%', site: 'Duqm Special Economic Zone — Process Safety & Steam' }
	};

	function updatePbiFacility(key) {
		const f = pbiFacilities[key];
		if (!f) return;
		document.getElementById('pbiFootprint').textContent = f.footprint;
		document.getElementById('pbiSavings').textContent = f.savings;
		document.getElementById('pbiAssurance').textContent = f.assurance;
		document.getElementById('pbiRenewable').textContent = f.renewable;
		document.getElementById('pbiSiteName').textContent = f.site;
	}

	// 1. Audit-Ready Stepper Slider (Data -> Structure -> Audit -> Advantage)
	let currentAuditStep = 1;
	const totalAuditSteps = 4;
	let auditInterval = null;

	function setAuditStep(stepIdx) {
		currentAuditStep = stepIdx;
		for (let i = 0; i < totalAuditSteps; i++) {
			const node = document.getElementById('stepNode' + i);
			const card = document.getElementById('auditCard' + i);
			if (node) node.classList.toggle('active', i === stepIdx);
			if (card) card.classList.toggle('active', i === stepIdx);
		}
		const prog = document.getElementById('auditStepProgress');
		if (prog) {
			prog.style.width = ((stepIdx / (totalAuditSteps - 1)) * 100) + '%';
		}
	}

	function startAuditAutoPlay() {
		if (auditInterval) clearInterval(auditInterval);
		auditInterval = setInterval(() => {
			let next = (currentAuditStep + 1) % totalAuditSteps;
			setAuditStep(next);
		}, 5500);
	}

	// 2. Growthom Solar Projects Carousel Slider
	let currentGallerySlide = 0;
	const totalGallerySlides = 3;

	function slideGrowthomGallery(direction) {
		currentGallerySlide = (currentGallerySlide + direction + totalGallerySlides) % totalGallerySlides;
		for (let i = 0; i < totalGallerySlides; i++) {
			const slide = document.getElementById('growthomSlide' + i);
			if (slide) slide.classList.toggle('active', i === currentGallerySlide);
		}
	}

	// Power BI Hero Tab Switcher (Environment, Social, Governance)
	function switchPowerBiHeroTabLegacy(tab, btn) {
		document.querySelectorAll('.oren-tab-btn').forEach(b => b.classList.remove('active'));
		if (btn) btn.classList.add('active');
		const emissions = document.getElementById('heroOrenEmissions');
		const water = document.getElementById('heroOrenWater');
		const energy = document.getElementById('heroOrenEnergy');

		if (tab === 'soc') {
			if (emissions) emissions.textContent = '98.5%';
			if (water) water.textContent = '4,200 hrs';
			if (energy) energy.textContent = '0 LTI';
		} else if (tab === 'gov') {
			if (emissions) emissions.textContent = '100%';
			if (water) water.textContent = '30/30';
			if (energy) energy.textContent = 'Tier-1';
		} else {
			if (emissions) emissions.textContent = '2.1 Mt';
			if (water) water.textContent = '200 kL';
			if (energy) energy.textContent = '60.1 GJ';
		}
	}

	// ESG Benchmarking Peer Data (Oren format)
	const benchmarkData = {
		iol: {
			name: 'IOL Chemicals and Pharmaceuticals Limited',
			cin: 'L24116PB1986PLC007030',
			start: '01/04/2023',
			end: '31/03/2024',
			inc: '1986',
			website: 'https://www.iolcp.com',
			email: 'investor@iolcp.com',
			contact: 'Abhay Raj Singh',
			boundary: 'Standalone • Applicable manufacturing plants and active chemical synthesis facilities',
			activity: 'Manufacturing of active pharmaceutical ingredients (APIs), specialty chemicals, and industrial bulk solvents.'
		},
		pdo: {
			name: 'Petroleum Development Oman (PDO)',
			cin: 'OM-CR-1002340',
			start: '01/01/2023',
			end: '31/12/2023',
			inc: '1937',
			website: 'https://www.pdo.co.om',
			email: 'sustainability@pdo.co.om',
			contact: 'Dr. Salim Al Harthy',
			boundary: 'Concession Block 6 • Oil & Gas Exploration, Miraah Solar Thermal & EOR Operations',
			activity: 'Exploration and production of crude oil and natural gas, solar steam generation, and industrial water recycling.'
		},
		sohar_al: {
			name: 'Sohar Aluminium Company LLC',
			cin: 'OM-CR-1049210',
			start: '01/01/2023',
			end: '31/12/2023',
			inc: '2004',
			website: 'https://www.sohar-aluminium.com',
			email: 'hse@sohar-aluminium.com',
			contact: 'Ahmed Al Kharusi',
			boundary: 'Standalone • Sohar Aluminium Smelter, 1000MW Captive Power Plant and Port Facilities',
			activity: 'Primary aluminium smelting, hot metal casting, and energy recovery operations in Sohar Industrial Port.'
		},
		oman_cables: {
			name: 'Oman Cables Industry SAOG',
			cin: 'OM-CR-1123489',
			start: '01/01/2023',
			end: '31/12/2023',
			inc: '1984',
			website: 'https://www.omancables.com',
			email: 'esg@omancables.com',
			contact: 'Fatma Al Zadjali',
			boundary: 'Consolidated • Rusayl Industrial City Manufacturing Plants & GCC Distribution Hubs',
			activity: 'Manufacturing and sale of medium/low voltage electrical cables and overhead conductors.'
		}
	};

	function renderBenchmarkCompany(key) {
		const c = benchmarkData[key];
		if (!c) return;
		document.getElementById('pillCompanyName').textContent = c.name;
		document.getElementById('bmCompanyName').textContent = c.name;
		document.getElementById('bmCIN').textContent = c.cin;
		document.getElementById('bmStartDate').textContent = c.start;
		document.getElementById('bmEndDate').textContent = c.end;
		document.getElementById('bmYearInc').textContent = c.inc;
		const webLink = document.getElementById('bmWebsite');
		if (webLink) {
			webLink.href = c.website;
			webLink.textContent = c.website;
		}
		document.getElementById('bmEmail').textContent = c.email;
		document.getElementById('bmContactName').textContent = c.contact;
		document.getElementById('bmBoundary').textContent = c.boundary;
		document.getElementById('bmActivity').textContent = c.activity;
	}

	function switchBenchmarkSector(sec) {
		if (sec === 'energy') {
			renderBenchmarkCompany('pdo');
		} else if (sec === 'metals') {
			renderBenchmarkCompany('sohar_al');
		} else if (sec === 'logistics') {
			renderBenchmarkCompany('oman_cables');
		} else {
			renderBenchmarkCompany('growth');
		}
	}

	function selectBenchmarkPeer(key) {
		if (!key) return;
		renderBenchmarkCompany(key);
	}

	function resetBenchmarkFilter() {
		renderBenchmarkCompany('growth');
		const sectorSelect = document.getElementById('benchmarkSectorSelect');
		if (sectorSelect) sectorSelect.value = 'sustainability';
	}


	// 2.2 "Made Simple" Regulatory Series (Exact 5 Stock Exchanges from Google Sheet)
	const madeSimpleData = {
		msx: {
			sr: 1,
			name: 'Muscat Stock Exchange (MSX)',
			country: 'Oman',
			flag: '🇴🇲',
			filename: 'Made Simple 1 - Muscat MSX  .pdf',
			series: 'Made Simple • Volume 1',
			title: 'Muscat Stock Exchange (MSX) ESG Disclosure Guide',
			desc: 'CMA Oman ESG disclosure standards, Vision 2040 net-zero targets, and step-by-step reporting guidelines for listed Omani companies.',
			highlights: [
				'CMA Oman Mandatory ESG Circular Alignment',
				'Scope 1, 2 & Material Scope 3 Calculation',
				'Oman Vision 2040 Industrial Roadmaps',
				'IFRS S1/S2 & GRI Metric Concordance Table'
			]
		},
		pse: {
			sr: 2,
			name: 'Philippine Stock Exchange (PSE)',
			country: 'Philippines',
			flag: '🇵🇭',
			filename: 'Made Simple 2 -  Philippines PSE  .pdf',
			series: 'Made Simple • Volume 2',
			title: 'Philippine Stock Exchange (PSE) ESG Reporting Guide',
			desc: 'SEC Philippines Memorandum Circular compliance, materiality assessment, and sustainability disclosure templates for PSE issuers.',
			highlights: [
				'SEC Philippines Sustainability Guidelines',
				'Four-Pillar Governance & Risk Disclosure',
				'Materiality Assessment & Double Materiality',
				'Value Chain Decarbonization Action Plans'
			]
		},
		tadawul: {
			sr: 3,
			name: 'Saudi Exchange (Tadawul)',
			country: 'Saudi Arabia',
			flag: '🇸🇦',
			filename: 'Made Simple 3 - Saudi Tadawul  .pdf',
			series: 'Made Simple • Volume 3',
			title: 'Saudi Exchange (Tadawul) ESG Disclosure Guidelines',
			desc: 'Practical guide to Tadawul ESG reporting metrics, Saudi Vision 2030 sustainability integration, and CMA Saudi compliance.',
			highlights: [
				'Tadawul Official ESG Disclosure Standards',
				'Saudi Vision 2030 & SGI Decarbonization Rules',
				'SASB & TCFD Climate Risk Disclosures',
				'Executive ESG Compensation & Governance'
			]
		},
		sgx: {
			sr: 4,
			name: 'Singapore Exchange (SGX)',
			country: 'Singapore',
			flag: '🇸🇬',
			filename: 'Made Simple 4 - Singapore  .pdf',
			series: 'Made Simple • Volume 4',
			title: 'Singapore Exchange (SGX) Climate & ESG Rules',
			desc: 'Mandatory climate reporting rules for SGX issuers, ISSB standards implementation, board diversity disclosures, and assurance readiness.',
			highlights: [
				'Mandatory SGX Core ESG Metrics (27 Indicators)',
				'ISSB Climate Standard Alignment Phase-in',
				'Board Diversity & Sustainability Governance',
				'Internal ESG Audit & Verification Protocols'
			]
		},
		kuwait: {
			sr: 5,
			name: 'Boursa Kuwait',
			country: 'Kuwait',
			flag: '🇰🇼',
			filename: 'Made Simple 5 - Kuwait Boursa  .pdf',
			series: 'Made Simple • Volume 5',
			title: 'Boursa Kuwait ESG Reporting Guidebook',
			desc: 'Boursa Kuwait unified ESG indicators, Capital Markets Authority (CMA) circulars, and Kuwait Vision 2035 sustainability criteria.',
			highlights: [
				'Boursa Kuwait Unified ESG Metrics',
				'CMA Kuwait Regulatory Circular Compliance',
				'Kuwait Vision 2035 Clean Growth Milestones',
				'GHG Protocol Accounting & Energy Efficiency'
			]
		}
	};

	let activeMadeSimpleKey = 'msx';

	function switchMadeSimpleTab(tab) {
		const msSection = document.getElementById('wpMadeSimpleSection');
		const ecSection = document.getElementById('wpGccEsgSection');
		const tabMsBtn = document.getElementById('wpTabBtnMs');
		const tabEcBtn = document.getElementById('wpTabBtnEc');
		if (tab === 'madesimple') {
			if (msSection) msSection.style.display = 'block';
			if (ecSection) ecSection.style.display = 'none';
			if (tabMsBtn) {
				tabMsBtn.style.background = '#00E676';
				tabMsBtn.style.color = '#031c13';
				tabMsBtn.style.borderColor = '#00E676';
			}
			if (tabEcBtn) {
				tabEcBtn.style.background = 'transparent';
				tabEcBtn.style.color = '#cbe3d9';
				tabEcBtn.style.borderColor = 'rgba(0,230,118,0.25)';
			}
		} else {
			if (msSection) msSection.style.display = 'none';
			if (ecSection) ecSection.style.display = 'block';
			if (tabEcBtn) {
				tabEcBtn.style.background = '#00E676';
				tabEcBtn.style.color = '#031c13';
				tabEcBtn.style.borderColor = '#00E676';
			}
			if (tabMsBtn) {
				tabMsBtn.style.background = 'transparent';
				tabMsBtn.style.color = '#cbe3d9';
				tabMsBtn.style.borderColor = 'rgba(0,230,118,0.25)';
			}
		}
	}

	function selectMadeSimpleExchange(key) {
		if (!madeSimpleData[key]) return;
		activeMadeSimpleKey = key;
		const doc = madeSimpleData[key];

		// Update pill buttons
		document.querySelectorAll('.ms-exchange-pill').forEach(btn => {
			btn.classList.remove('active');
			btn.style.background = 'rgba(255,255,255,0.05)';
			btn.style.borderColor = 'rgba(0,230,118,0.25)';
			btn.style.color = '#e0f2ea';
		});
		const activeBtn = document.getElementById('msPill_' + key);
		if (activeBtn) {
			activeBtn.classList.add('active');
			activeBtn.style.background = '#00E676';
			activeBtn.style.borderColor = '#00E676';
			activeBtn.style.color = '#031c13';
		}

		// Update preview card
		const badgeEl = document.getElementById('msBookSeriesBadge');
		const titleEl = document.getElementById('msBookTitle');
		const descEl = document.getElementById('msBookDesc');
		const fileEl = document.getElementById('msBookFile');
		const listEl = document.getElementById('msBookHighlights');
		const selectEl = document.getElementById('msFormExchangeSelect');

		if (badgeEl) badgeEl.textContent = doc.series;
		if (titleEl) titleEl.innerHTML = doc.flag + ' ' + doc.title;
		if (descEl) descEl.textContent = doc.desc;
		if (fileEl) fileEl.textContent = doc.filename;
		if (selectEl) selectEl.value = key;

		if (listEl) {
			listEl.innerHTML = doc.highlights.map(h => `<li class="mb-1 d-flex align-items-center gap-2"><i class="fas fa-check-circle" style="color:#00E676; font-size:12px;"></i> <span>${h}</span></li>`).join('');
		}
	}

	function handleMadeSimpleSubmit(e) {
		e.preventDefault();
		const doc = madeSimpleData[activeMadeSimpleKey] || madeSimpleData.msx;
		const btn = document.getElementById('msSubmitBtn');
		const alertBox = document.getElementById('msSuccessAlert');
		if (btn) {
			btn.innerHTML = '<span>Preparing ' + doc.name + '...</span> <i class="fas fa-spinner fa-spin ms-2"></i>';
			btn.disabled = true;
		}
		setTimeout(() => {
			if (btn) {
				btn.innerHTML = '<span>Download Complete</span> <i class="fas fa-check ms-2"></i>';
				btn.style.background = '#0284c7';
			}
			if (alertBox) {
				alertBox.style.display = 'block';
				alertBox.innerHTML = '<i class="fas fa-check-circle me-1"></i> Success! Downloading <strong>' + doc.filename + '</strong>. <a href="<?php echo base_url($frontAssetBase . "img/growth/Growth-Company-Profile.pdf") ?>" target="_blank" style="text-decoration:underline; font-weight:700; color:#ffffff;">Click here if file does not open</a>.';
			}
			const a = document.createElement('a');
			a.href = '<?php echo base_url($frontAssetBase . "img/growth/Growth-Company-Profile.pdf") ?>';
			a.download = doc.filename.trim();
			document.body.appendChild(a);
			a.click();
			document.body.removeChild(a);
			if (window.toastr) {
				toastr.success('Downloaded: ' + doc.title);
			}
		}, 700);
	}

	function openMadeSimpleSeriesModal(exchangeKey) {
		if (exchangeKey && madeSimpleData[exchangeKey]) {
			activeMadeSimpleKey = exchangeKey;
		}
		const modalEl = document.getElementById('whitepaperModal');
		if (modalEl && window.bootstrap) {
			const modal = bootstrap.Modal.getInstance(modalEl) || new bootstrap.Modal(modalEl);
			modal.show();
			switchMadeSimpleTab('madesimple');
			if (exchangeKey) selectMadeSimpleExchange(exchangeKey);
		}
	}

	// Global hook for country switch sync
	window.syncMadeSimpleCountry = function(countryCode) {
		if (countryCode === 'om') {
			selectMadeSimpleExchange('msx');
		} else if (countryCode === 'sa') {
			selectMadeSimpleExchange('tadawul');
		} else if (countryCode === 'kw') {
			selectMadeSimpleExchange('kuwait');
		} else if (countryCode === 'sg') {
			selectMadeSimpleExchange('sgx');
		} else if (countryCode === 'ph') {
			selectMadeSimpleExchange('pse');
		}
	};

	// Whitepaper Form
	function handleWhitepaperSubmit(e) {
		e.preventDefault();
		const btn = document.getElementById('wpSubmitBtn');
		const alertBox = document.getElementById('wpSuccessAlert');
		if (btn) {
			btn.innerHTML = '<span>Processing...</span> <i class="fas fa-spinner fa-spin ms-2"></i>';
			btn.disabled = true;
		}
		setTimeout(() => {
			if (btn) {
				btn.innerHTML = '<span>Whitepaper Ready</span> <i class="fas fa-check ms-2"></i>';
				btn.style.background = '#0284c7';
			}
			if (alertBox) {
				alertBox.style.display = 'block';
			}
			const a = document.createElement('a');
			a.href = '<?php echo base_url($frontAssetBase . "img/growth/Growth-Company-Profile.pdf") ?>';
			a.download = 'Growth-GCC-ESG-Whitepaper.pdf';
			document.body.appendChild(a);
			a.click();
			document.body.removeChild(a);
		}, 600);
	}

	// 3. AI-Powered ESG Maturity Tool Interactive Questionnaire
	const maturityQuestions = [
		{
			pillar: 'Environmental',
			label: 'PILLAR 1 OF 3: ENVIRONMENTAL',
			question: 'Does your enterprise track and audit Scope 1, 2, and 3 Greenhouse Gas (GHG) emissions?',
			options: [
				{ text: 'Comprehensive Scope 1, 2 & 3 audited annually (ISO 14064 / GHG Protocol)', score: 95 },
				{ text: 'Scope 1 & 2 fully measured, Scope 3 currently in progress', score: 82 },
				{ text: 'Basic electricity & fuel estimation only', score: 60 },
				{ text: 'No formal carbon emissions tracking yet', score: 40 }
			]
		},
		{
			pillar: 'Social',
			label: 'PILLAR 2 OF 3: SOCIAL',
			question: 'How are occupational health, safety (HSE), and community development managed?',
			options: [
				{ text: 'ISO 45001 certified with zero LTIs and verified Omanization targets', score: 92 },
				{ text: 'Structured HSE committee with regular safety audits and training', score: 75 },
				{ text: 'Ad-hoc health & safety checks without formal certification', score: 55 },
				{ text: 'Informal safety guidelines only', score: 35 }
			]
		},
		{
			pillar: 'Governance',
			label: 'PILLAR 3 OF 3: GOVERNANCE',
			question: 'What level of ESG oversight and regulatory disclosure does the Board maintain?',
			options: [
				{ text: 'Dedicated Board Sustainability Committee & MSX/CMA ESG disclosure alignment', score: 90 },
				{ text: 'Executive-level ESG ownership with annual sustainability reporting', score: 80 },
				{ text: 'Compliance-only legal disclosures without explicit ESG committee', score: 60 },
				{ text: 'No board-level ESG governance policy', score: 30 }
			]
		}
	];

	let matStep = 0;
	let matScores = [82, 75, 90];

	function startEsgMaturityAssessment() {
		document.getElementById('maturityInitialView').style.display = 'none';
		document.getElementById('maturityQuestionsView').style.display = 'block';
		document.getElementById('maturityResultView').style.display = 'none';
		matStep = 0;
		renderMaturityQuestion();
	}

	function renderMaturityQuestion() {
		const q = maturityQuestions[matStep];
		if (!q) return;
		document.getElementById('matCurrentPillarLabel').textContent = q.label;
		document.getElementById('matQuestionTitle').textContent = q.question;
		document.getElementById('matProgressBadge').textContent = 'Step ' + (matStep + 1) + ' of ' + maturityQuestions.length;
		document.getElementById('matPrevBtn').style.display = (matStep > 0) ? 'inline-block' : 'none';

		const container = document.getElementById('matOptionsContainer');
		container.innerHTML = '';
		q.options.forEach((opt, idx) => {
			const col = document.createElement('div');
			col.className = 'col-md-6';
			col.innerHTML = `
				<div class="p-3 rounded-3 h-100 mat-opt-card" onclick="selectMatOption(${matStep}, ${opt.score}, this)" style="background:#f4f8f6; border:1.5px solid #d4e3dc; cursor:pointer; transition:all 0.2s ease;">
					<div class="d-flex align-items-center gap-2">
						<input type="radio" name="mat_opt" ${idx === 1 ? 'checked' : ''} style="accent-color:#00a854;">
						<span style="font-size:13.5px; font-weight:600; color:#062319;">${opt.text}</span>
					</div>
				</div>
			`;
			container.appendChild(col);
		});
	}

	function selectMatOption(stepIdx, score, cardEl) {
		matScores[stepIdx] = score;
		document.querySelectorAll('.mat-opt-card').forEach(c => {
			c.style.borderColor = '#d4e3dc';
			c.style.background = '#f4f8f6';
		});
		if (cardEl) {
			cardEl.style.borderColor = '#00a854';
			cardEl.style.background = '#e8f7ee';
			const radio = cardEl.querySelector('input[type="radio"]');
			if (radio) radio.checked = true;
		}
	}

	function nextMaturityStep() {
		if (matStep < maturityQuestions.length - 1) {
			matStep++;
			renderMaturityQuestion();
		} else {
			finishMaturityAssessment();
		}
	}

	function prevMaturityStep() {
		if (matStep > 0) {
			matStep--;
			renderMaturityQuestion();
		}
	}

	function finishMaturityAssessment() {
		document.getElementById('maturityQuestionsView').style.display = 'none';
		document.getElementById('maturityResultView').style.display = 'block';

		const env = matScores[0];
		const soc = matScores[1];
		const gov = matScores[2];
		const overall = ((env + soc + gov) / 3).toFixed(1);

		document.getElementById('matResEnv').textContent = env + '%';
		document.getElementById('matResSoc').textContent = soc + '%';
		document.getElementById('matResGov').textContent = gov + '%';
		document.getElementById('matFinalOverallScore').textContent = overall + '%';

		// Update initial score cards too
		document.getElementById('maturityEnvScore').textContent = env;
		document.getElementById('maturitySocScore').textContent = soc;
		document.getElementById('maturityGovScore').textContent = gov;
	}

	function resetMaturityAssessment() {
		document.getElementById('maturityInitialView').style.display = 'block';
		document.getElementById('maturityQuestionsView').style.display = 'none';
		document.getElementById('maturityResultView').style.display = 'none';
	}

	// 4. Dynamic Multi-Language Client-Side Dictionary (Arabic, English, French, German, Hindi)
	const siteTranslations = {
		en: {
			t_ifrs: 'IFRS S1 & S2 Certified',
			t_govt: 'Govt Approved (Oman & GCC Frameworks)',
			t_tnfd: 'TNFD Approved & Nature Aligned',
			t_tcfd: 'TCFD Aligned Disclosures',
			t_brsr: 'BRSR & GRI Core Standard Ready',
			t_top: '#1 Sustainability & Energy Suite in Oman',
			t_clients: '50+ GCC Industrial & Corporate Clients',
			t_2040: 'Oman Vision 2040 Decarbonization Aligned',
			t_iso: 'ISO 14064 GHG & ISO 50001 Energy Audited',
			audit_title: 'Audit-Ready Dashboards',
			audit_sub: 'Generate assurance-ready reports for BRSR, GRI, TCFD, and more — in minutes, not months.',
			map_kicker: 'GLOBAL PRESENCE',
			map_title: 'Regional presence, rooted in Oman',
			map_sub: 'Growth\'s main headquarters is in Muscat, Oman, with a regional presence and analytics engineering delivery center in Nagpur, India.',
			map_om: 'MAIN OFFICE • OMAN',
			map_in: 'REGIONAL PRESENCE • INDIA',
			vision_pledge: 'Oman Vision 2040',
			vision_netzero: 'Net Zero Decarbonization Hub',
			t_trusted_kicker: 'ENTERPRISE CLIENTELE & PARTNERS',
			t_trusted_title: 'Trusted by Leading Organizations',
			solar_kicker: 'BEST QUALITY SOLAR',
			solar_title: 'Light Up With Solar & Save Natural Resource',
			solar_desc: 'Empowering GCC industrial and commercial facilities to shift to on-site solar PV generation, slash grid electricity costs, and fulfill Oman Vision 2040 clean energy mandates.',
			solar_btn: 'Consult Our Solar Engineers',
			client_kicker: 'YOUR GROWTH, OUR MISSION',
			client_title: 'Our Clientele'
		},
		ar: {
			t_ifrs: 'معتمد وفق معايير IFRS S1 و S2',
			t_govt: 'معتمد حكومياً (أطر سلطنة عمان ودول الخليج)',
			t_tnfd: 'معتمد من TNFD ومحاذاة التنوع البيئي',
			t_tcfd: 'إفصاحات متوافقة مع TCFD',
			t_brsr: 'جاهزية كاملة لمعايير GRI و BRSR',
			t_top: 'المنصة الأولى للاستدامة والطاقة في سلطنة عُمان',
			t_clients: 'أكثر من 50 عميلاً صناعياً ومؤسسياً في الخليج',
			t_2040: 'متوافق مع خفض الكربون لرؤية عُمان 2040',
			t_iso: 'تدقيق معتمد لغازات الدفيئة ISO 14064 والطاقة ISO 50001',
			audit_title: 'لوحات تحكم جاهزة للتدقيق المالي والبيئي',
			audit_sub: 'أنشئ تقارير معتمدة لـ BRSR و GRI و TCFD وغيرها في دقائق، لا شهور.',
			map_kicker: 'حضورنا الإقليمي والدولي',
			map_title: 'حضور إقليمي رائد، متجذر في عُمان',
			map_sub: 'يقع المقر الرئيسي لشركة جروث في مسقط بسلطنة عمان، مع مركز هندسي وتحليلي في ناغبور بالهند.',
			map_om: 'المقر الرئيسي • سلطنة عُمان',
			map_in: 'المركز التقني • الهند',
			vision_pledge: 'رؤية عُمان 2040',
			vision_netzero: 'مركز إزالة الكربون والحياد الصفري 2050',
			t_trusted_kicker: 'عملاؤنا وشركاؤنا الإقليميون',
			t_trusted_title: 'موثوق به من كبرى المؤسسات',
			solar_kicker: 'أفضل حلول الطاقة الشمسية',
			solar_title: 'أنِر أعمالك بالطاقة الشمسية واحفظ الموارد الطبيعية',
			solar_desc: 'تمكين المنشآت الصناعية والتجارية في الخليج من توليد الطاقة الشمسية في الموقع وخفض التكاليف وتحقيق أهداف رؤية عُمان 2040.',
			solar_btn: 'تواصل مع مهندسي الطاقة الشمسية',
			client_kicker: 'نموكم هو رسالتنا',
			client_title: 'عملاؤنا الكرام'
		},
		hi: {
			t_ifrs: 'IFRS S1 और S2 प्रमाणित',
			t_govt: 'ओमान और जीसीसी सरकार द्वारा अनुमोदित',
			t_tnfd: 'TNFD और प्रकृति संरेखित',
			t_tcfd: 'TCFD अनुपालन प्रकटीकरण',
			t_brsr: 'BRSR और GRI कोर मानक तैयार',
			t_top: 'ओमान में शीर्ष रेटेड स्थिरता और ऊर्जा सूट',
			t_clients: '50+ जीसीसी औद्योगिक और कॉर्पोरेट ग्राहक',
			t_2040: 'ओमान विजन 2040 डीकार्बोनाइजेशन संरेखित',
			t_iso: 'ISO 14064 GHG और ISO 50001 ऊर्जा लेखापरीक्षित',
			audit_title: 'ऑडिट-तैयार डैशबोर्ड',
			audit_sub: 'BRSR, GRI, TCFD के लिए मिनटों में सत्यापन-तैयार रिपोर्ट तैयार करें।',
			map_kicker: 'वैश्विक उपस्थिति',
			map_title: 'क्षेत्रीय उपस्थिति, ओमान में जड़ें',
			map_sub: 'ग्रोथ का मुख्य मुख्यालय मस्कट, ओमान में है, और तकनीकी वितरण केंद्र नागपुर, भारत में है।',
			map_om: 'मुख्य कार्यालय • ओमान',
			map_in: 'क्षेत्रीय उपस्थिति • भारत',
			vision_pledge: 'ओमान विजन 2040',
			vision_netzero: 'नेट ज़ीरो डीकार्बोनाइजेशन हब',
			t_trusted_kicker: 'उद्यम ग्राहक और भागीदार',
			t_trusted_title: 'अग्रणी संगठनों द्वारा विश्वसनीय',
			solar_kicker: 'सर्वोत्तम गुणवत्ता सौर ऊर्जा',
			solar_title: 'सौर ऊर्जा से रोशन करें और प्राकृतिक संसाधनों को बचाएं',
			solar_desc: 'जीसीसी औद्योगिक सुविधाओं को सौर ऊर्जा पर स्थानांतरित करने और बिजली लागत में कटौती करने में मदद।',
			solar_btn: 'हमारे सौर इंजीनियरों से संपर्क करें',
			client_kicker: 'आपकी वृद्धि, हमारा मिशन',
			client_title: 'हमारे ग्राहक'
		},
		fr: {
			t_ifrs: 'Certifié IFRS S1 & S2',
			t_govt: 'Approuvé par les gouvernements Oman & GCC',
			t_tnfd: 'Approuvé TNFD & Nature Aligné',
			t_tcfd: 'Divulgations TCFD Alignées',
			t_brsr: 'Conforme aux normes GRI & BRSR',
			t_top: 'Suite N°1 de durabilité et d\'énergie à Oman',
			t_clients: 'Plus de 50 clients industriels dans le CCG',
			t_2040: 'Aligné sur Oman Vision 2040 Décarbonation',
			t_iso: 'Audité ISO 14064 GES & ISO 50001 Énergie',
			audit_title: 'Tableaux de bord prêts pour l\'audit',
			audit_sub: 'Générez des rapports d\'assurance pour BRSR, GRI, TCFD en quelques minutes.',
			map_kicker: 'PRÉSENCE MONDIALE',
			map_title: 'Présence régionale, enracinée à Oman',
			map_sub: 'Siège social à Mascate, Oman, avec un centre d\'ingénierie analytique à Nagpur, en Inde.',
			map_om: 'SIÈGE PRINCIPAL • OMAN',
			map_in: 'PRÉSENCE RÉGIONALE • INDE',
			vision_pledge: 'Oman Vision 2040',
			vision_netzero: 'Pôle de décarbonation Net Zéro',
			t_trusted_kicker: 'CLIENTÈLE & PARTENAIRES',
			t_trusted_title: 'Reconnu par les organisations leaders',
			solar_kicker: 'SOLAIRE HAUTE QUALITÉ',
			solar_title: 'Éclairez avec le solaire et préservez les ressources',
			solar_desc: 'Permettre aux installations industrielles du CCG de passer au solaire photovoltaïque sur site.',
			solar_btn: 'Consulter nos ingénieurs solaires',
			client_kicker: 'VOTRE CROISSANCE, NOTRE MISSION',
			client_title: 'Nos Clients'
		},
		de: {
			t_ifrs: 'IFRS S1 & S2 zertifiziert',
			t_govt: 'Regierungsgeprüft (Oman & GCC)',
			t_tnfd: 'TNFD-geprüft & Natur-konform',
			t_tcfd: 'TCFD-konforme Offenlegungen',
			t_brsr: 'BRSR & GRI Standard-bereit',
			t_top: 'Führende Nachhaltigkeits- und Energiesuite in Oman',
			t_clients: '50+ Industrie- und Unternehmenskunden im GCC',
			t_2040: 'Ausgerichtet auf Oman Vision 2040 Dekarbonisierung',
			t_iso: 'ISO 14064 THG & ISO 50001 Energie auditiert',
			audit_title: 'Audit-bereite Dashboards',
			audit_sub: 'Erstellen Sie geprüfte Berichte für BRSR, GRI und TCFD in wenigen Minuten.',
			map_kicker: 'GLOBALE PRÄSENZ',
			map_title: 'Regionale Präsenz, verwurzelt in Oman',
			map_sub: 'Hauptsitz in Maskat, Oman, mit technischem Lieferzentrum in Nagpur, Indien.',
			map_om: 'HAUPTSITZ • OMAN',
			map_in: 'REGIONALE PRÄSENZ • INDIEN',
			vision_pledge: 'Oman Vision 2040',
			vision_netzero: 'Net-Zero Dekarbonisierungszentrum',
			t_trusted_kicker: 'UNTERNEHMENSKUNDEN & PARTNER',
			t_trusted_title: 'Vertraut von führenden Organisationen',
			solar_kicker: 'SOLARENERGIE HÖCHSTER QUALITÄT',
			solar_title: 'Mit Solarenergie beleuchten und Ressourcen schonen',
			solar_desc: 'Unterstützung von Industrieanlagen im GCC beim Umstieg auf Vor-Ort-Solarenergie.',
			solar_btn: 'Solaringenieure konsultieren',
			client_kicker: 'IHR WACHSTUM, UNSERE MISSION',
			client_title: 'Unsere Kunden'
		}
	};

	function applySiteTranslations(lang) {
		const dict = siteTranslations[lang] || siteTranslations['en'];
		document.querySelectorAll('[data-i18n]').forEach(el => {
			const key = el.getAttribute('data-i18n');
			if (dict[key]) {
				el.textContent = dict[key];
			}
		});

		// Set RTL for Arabic, LTR for others
		if (lang === 'ar') {
			document.documentElement.setAttribute('dir', 'rtl');
			document.documentElement.setAttribute('lang', 'ar');
			document.body.classList.add('rtl-active');
		} else {
			document.documentElement.setAttribute('dir', 'ltr');
			document.documentElement.setAttribute('lang', lang);
			document.body.classList.remove('rtl-active');
		}
	}

	// Hook into window for header selectCountry to call
	window.applySiteTranslations = applySiteTranslations;

	// Initialize on page load
	document.addEventListener('DOMContentLoaded', function() {
		startAuditAutoPlay();
	});
	</script>

	<!-- Start Footer -->
	<?php include 'includes/footer.php' ?>
	<?php include 'includes/footerjs.php' ?>

<script>

	// Live Ticking Audit Data Simulation (Atomic increments)
	let liveCO2 = 482142;
	let liveKWh = 1428980;
	setInterval(() => {
		liveCO2 += Math.floor(Math.random() * 3) + 1;
		liveKWh += Math.floor(Math.random() * 8) + 2;
		const co2El = document.getElementById('liveTickerCO2');
		const kwhEl = document.getElementById('liveTickerKWh');
		if (co2El) co2El.textContent = liveCO2.toLocaleString();
		if (kwhEl) kwhEl.textContent = liveKWh.toLocaleString();
	}, 3500);

	// Agentic AI GrowPilot Execution Handler
	function askGrowPilotPrompt(promptText) {
		if (typeof window.sendGrowpilotPrompt === 'function') {
			window.sendGrowpilotPrompt(promptText);
		} else {
			const input = document.getElementById('growpilotInput') || document.getElementById('growPilotInput');
			if (input) input.value = promptText;
			sendGrowPilotMessage();
		}
	}

	function sendGrowPilotMessage() {
		if (typeof window.handleGrowpilotSubmit === 'function') {
			window.handleGrowpilotSubmit();
			return;
		}
		const input = document.getElementById('growPilotInput');
		const msgs = document.getElementById('growPilotMessages');
		if (!input || !msgs || !input.value.trim()) return;

		const userText = input.value.trim();
		input.value = '';

		// Append user message
		const uDiv = document.createElement('div');
		uDiv.className = 'd-flex justify-content-end mb-2';
		uDiv.innerHTML = `<div style="background:#0b4536; color:#ffffff; padding:8px 14px; border-radius:14px 14px 2px 14px; font-size:13px; max-width:80%;">${userText}</div>`;
		msgs.appendChild(uDiv);
		msgs.scrollTop = msgs.scrollHeight;

		// Agent typing indicator
		const tDiv = document.createElement('div');
		tDiv.className = 'd-flex justify-content-start mb-2';
		tDiv.innerHTML = `<div style="background:#f0f7f3; color:#556B62; padding:8px 14px; border-radius:14px 14px 14px 2px; font-size:12px; font-style:italic;"><i class="fas fa-robot text-success me-1"></i> GrowPilot Agent is formulating disclosure draft...</div>`;
		msgs.appendChild(tDiv);
		msgs.scrollTop = msgs.scrollHeight;

		setTimeout(() => {
			msgs.removeChild(tDiv);
			let botReply = '';
			const low = userText.toLowerCase();

			if (low.includes('scope 1') || low.includes('carbon')) {
				botReply = `<strong>⚡ Scope 1 & 2 Decarbonization Pipeline</strong><br>Mapped 14 facility meters across Oman. Scope 1 direct emissions verified at <strong>0.7 Mt</strong>. Scope 2 grid electricity at <strong>1.4 Mt</strong>. Generated draft aligns with <em>Oman CMA Circular 2024/02</em> and <em>ISO 14064-1</em> standards.`;
			} else if (low.includes('2040') || low.includes('vision')) {
				botReply = `<strong>🇴🇲 Oman Vision 2040 Decarbonization Check</strong><br>Your manufacturing energy profile achieves <strong>70th percentile</strong> in regional compliance. Recommending on-site 1.2 MW Solar PV integration to advance toward 2050 Net-Zero mandates.`;
			} else if (low.includes('issb') || low.includes('gap')) {
				botReply = `<strong>📘 ISSB &amp; MSX Scoring Matrix Audit</strong><br>Identified 4 governance disclosures needed for Gold Medal tier. Policy on supplier code of conduct & energy management audit ready for executive review.`;
			} else {
				botReply = `<strong>✦ Agentic AI ESG Assistant</strong><br>Processing request across GHG Protocol, BRSR, and MSX Disclosure repositories. Verified data lineage ready for assurance. Would you like to schedule an advisory consultation with our Muscat team?`;
			}

			const bDiv = document.createElement('div');
			bDiv.className = 'd-flex justify-content-start mb-2';
			bDiv.innerHTML = `<div style="background:#f0f7f3; color:#062319; border:1px solid #d4e3dc; padding:10px 14px; border-radius:14px 14px 14px 2px; font-size:13px; max-width:85%; line-height:1.5;">${botReply}</div>`;
			msgs.appendChild(bDiv);
			msgs.scrollTop = msgs.scrollHeight;
		}, 800);
	}
</script>

<style>
/* ====== Modern Power BI Sustainability Telemetry Card (White / High-Contrast Theme) ====== */
.powerbi-live-card {
    background: #ffffff !important;
    border: 1.5px solid #e2e8f0 !important;
    border-radius: 20px !important;
    padding: 24px !important;
    box-shadow: 0 16px 40px rgba(6, 35, 25, 0.08), 0 2px 8px rgba(0, 0, 0, 0.04) !important;
    color: #0f172a !important;
    transition: transform 0.3s ease, box-shadow 0.3s ease !important;
}
.powerbi-live-card:hover {
    box-shadow: 0 22px 50px rgba(6, 35, 25, 0.12), 0 4px 14px rgba(0, 0, 0, 0.06) !important;
}
.pbi-topbar {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding-bottom: 16px;
    border-bottom: 1px solid #edf2f7 !important;
}
.pbi-icon-badge {
    background: #fffbeb !important;
    border: 1px solid #fde68a !important;
    border-radius: 10px;
    padding: 6px 8px;
    display: flex;
    align-items: center;
    justify-content: center;
}
.pbi-title {
    font-size: 15.5px !important;
    font-weight: 800 !important;
    color: #062319 !important;
    letter-spacing: 0.01em;
    line-height: 1.2;
}
.pbi-sub {
    font-size: 11.5px !important;
    color: #059669 !important;
    font-weight: 700 !important;
    letter-spacing: 0.02em;
}
.pbi-live-indicator {
    display: flex;
    align-items: center;
    gap: 6px;
    background: #ecfdf5 !important;
    border: 1px solid #a7f3d0 !important;
    padding: 5px 11px;
    border-radius: 20px;
    font-size: 10.5px;
    font-weight: 800;
    color: #047857 !important;
    letter-spacing: 0.08em;
}
.pbi-live-pulse-dot {
    width: 8px;
    height: 8px;
    background: #10b981 !important;
    border-radius: 50%;
    box-shadow: 0 0 8px #10b981;
    animation: pbiPulse 1.5s infinite;
}
@keyframes pbiPulse {
    0% { transform: scale(0.9); opacity: 0.7; }
    50% { transform: scale(1.3); opacity: 1; }
    100% { transform: scale(0.9); opacity: 0.7; }
}
.pbi-tabs-bar {
    display: flex;
    gap: 8px;
    margin: 16px 0 14px;
    background: #f1f5f9 !important;
    padding: 4px;
    border-radius: 10px;
    border: 1px solid #e2e8f0 !important;
}
.pbi-tab {
    flex: 1;
    background: transparent;
    border: none;
    padding: 8px 12px;
    border-radius: 8px;
    font-size: 12px;
    font-weight: 700;
    color: #475569 !important;
    cursor: pointer;
    transition: all 0.25s ease;
    display: flex;
    align-items: center;
    justify-content: center;
}
.pbi-tab:hover {
    color: #062319 !important;
    background: #e2e8f0 !important;
}
.pbi-tab.active {
    background: #00a854 !important;
    color: #ffffff !important;
    box-shadow: 0 4px 12px rgba(0, 168, 84, 0.28) !important;
    font-weight: 800 !important;
}
.pbi-kpi-grid {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 10px;
    margin-bottom: 14px;
}
.pbi-kpi-card {
    background: #f8fafc !important;
    border: 1px solid #e2e8f0 !important;
    border-radius: 12px;
    padding: 11px 14px;
    transition: background 0.2s ease, transform 0.2s ease, border-color 0.2s ease;
}
.pbi-kpi-card:hover {
    background: #ffffff !important;
    border-color: #cbd5e1 !important;
    transform: translateY(-2px);
    box-shadow: 0 6px 16px rgba(0, 0, 0, 0.04);
}
.pbi-kpi-lbl {
    font-size: 11px !important;
    color: #64748b !important;
    font-weight: 700 !important;
    text-transform: uppercase;
    letter-spacing: 0.04em;
    display: block;
    margin-bottom: 3px;
}
.pbi-kpi-val {
    font-size: 20px !important;
    font-weight: 800 !important;
    color: #062319 !important;
    letter-spacing: -0.02em;
    line-height: 1.2;
}
.pbi-kpi-badge {
    font-size: 10.5px;
    font-weight: 700;
    padding: 3px 7px;
    border-radius: 5px;
    display: inline-flex;
    align-items: center;
    gap: 3px;
    margin-top: 4px;
}
.pbi-kpi-badge.down {
    background: #ecfdf5 !important;
    color: #047857 !important;
    border: 1px solid #d1fae5;
}
.pbi-kpi-badge.up {
    background: #eff6ff !important;
    color: #0284c7 !important;
    border: 1px solid #dbeafe;
}
.pbi-chart-container {
    background: #f8fafc !important;
    border: 1px solid #e2e8f0 !important;
    border-radius: 12px;
    padding: 13px 14px;
}
.pbi-chart-tooltip {
    position: absolute;
    top: 10px;
    left: 20px;
    background: #062319 !important;
    border: 1px solid #00E676 !important;
    color: #ffffff !important;
    padding: 4px 10px;
    border-radius: 6px;
    font-size: 11px;
    box-shadow: 0 4px 12px rgba(0,0,0,0.25);
    pointer-events: none;
}
.pbi-multi-bar {
    height: 8px;
    background: #e2e8f0 !important;
    border-radius: 99px;
    overflow: hidden;
    display: flex;
}
.pbi-multi-bar .bar-seg {
    height: 100%;
    transition: width 0.6s ease;
}
.pbi-footer-ticker {
    border-top: 1px solid #edf2f7 !important;
    color: #64748b !important;
}
/* ====== Colorful Geographic Regional Presence Map ====== */
.geographic-map-wrap {
    width: 100%;
    overflow: hidden;
    border-radius: 16px;
}
.regional-geo-svg {
    display: block;
    width: 100%;
    height: auto;
    filter: drop-shadow(0 10px 30px rgba(0, 0, 0, 0.6));
}
.geo-country-shape {
    cursor: pointer;
    transition: fill-opacity 0.3s ease, stroke-width 0.3s ease, transform 0.3s ease;
}
.geo-country-shape:hover {
    fill-opacity: 0.7 !important;
    stroke-width: 3.5px !important;
}
.map-region-legend {
    display: flex;
    flex-wrap: wrap;
    gap: 10px;
    margin-top: 18px;
    justify-content: center;
}
.map-region-legend .legend-pill {
    background: rgba(6, 35, 25, 0.75);
    border: 1.5px solid;
    padding: 6px 14px;
    border-radius: 30px;
    font-size: 11.5px;
    color: #ffffff;
    display: flex;
    align-items: center;
    gap: 6px;
    backdrop-filter: blur(6px);
    transition: transform 0.2s ease, background 0.2s ease;
}
.map-region-legend .legend-pill:hover {
    transform: translateY(-2px);
    background: rgba(6, 35, 25, 0.95);
}
.map-region-legend .legend-pill .dot {
    width: 8px;
    height: 8px;
    border-radius: 50%;
    box-shadow: 0 0 8px currentColor;
}
</style>

<script>
// Power BI Hero Interactive Tab Switcher
function switchPowerBiHeroTab(cat, btn) {
    document.querySelectorAll('.pbi-tab').forEach(b => b.classList.remove('active'));
    if (btn) btn.classList.add('active');

    const data = {
        env: {
            kpi1: { lbl: 'CO₂e Abatement', val: '48,214 <small style="font-size:12px; font-weight:normal;">t</small>', badge: '<i class="fas fa-arrow-down"></i> -18.4% YoY', cls: 'down' },
            kpi2: { lbl: 'Energy Intensity', val: '0.38 <small style="font-size:11px; font-weight:normal;">MWh/kOMR</small>', badge: '<i class="fas fa-arrow-down"></i> -14.2% YoY', cls: 'down' },
            kpi3: { lbl: 'Clean Energy Share', val: '64.2%', badge: '<i class="fas fa-arrow-up"></i> +22.8% YoY', cls: 'up' },
            kpi4: { lbl: 'Audit Assurance', val: '100%', badge: '<i class="fas fa-check-circle"></i> ISO & CMA Ready', cls: 'up' },
            title: 'Emissions Decarbonization Trajectory (tCO₂e)',
            tooltip: '<i class="fas fa-check-circle text-success me-1"></i> <strong>Muscat HQ:</strong> 1,840 tCO₂e <em>(On Track)</em>',
            src1: '<i class="fas fa-sun text-warning me-1"></i> Solar PV (44%)',
            src2: '<i class="fas fa-bolt text-info me-1"></i> Grid Clean (36%)',
            src3: '<i class="fas fa-recycle text-success me-1"></i> Cogeneration (20%)',
            bars: ['44%', '36%', '20%'],
            area: 'M 0,95 Q 80,75 160,85 T 300,55 T 420,35 T 500,22 L 500,135 L 0,135 Z',
            line: 'M 0,95 Q 80,75 160,85 T 300,55 T 420,35 T 500,22'
        },
        soc: {
            kpi1: { lbl: 'Health & Safety (LTI)', val: '0.00 <small style="font-size:12px; font-weight:normal;">Rate</small>', badge: '<i class="fas fa-shield-alt"></i> Zero Incident Record', cls: 'up' },
            kpi2: { lbl: 'Omanization Ratio', val: '68.4%', badge: '<i class="fas fa-arrow-up"></i> +8.5% YoY', cls: 'up' },
            kpi3: { lbl: 'Female Leadership', val: '42.0%', badge: '<i class="fas fa-arrow-up"></i> +12.0% YoY', cls: 'up' },
            kpi4: { lbl: 'Training Dedicated', val: '18,450 <small style="font-size:11px; font-weight:normal;">hrs</small>', badge: '<i class="fas fa-award"></i> Skill Matrix Assured', cls: 'up' },
            title: 'Human Capital & Social Impact Progress',
            tooltip: '<i class="fas fa-users text-info me-1"></i> <strong>Workforce Score:</strong> 96.4/100 <em>(Top Decile)</em>',
            src1: '<i class="fas fa-user-tie text-info me-1"></i> Technical (52%)',
            src2: '<i class="fas fa-graduation-cap text-success me-1"></i> Leadership (30%)',
            src3: '<i class="fas fa-heart text-danger me-1"></i> Community (18%)',
            bars: ['52%', '30%', '18%'],
            area: 'M 0,110 Q 90,80 180,70 T 320,40 T 430,30 T 500,18 L 500,135 L 0,135 Z',
            line: 'M 0,110 Q 90,80 180,70 T 320,40 T 430,30 T 500,18'
        },
        gov: {
            kpi1: { lbl: 'Board Independence', val: '80.0%', badge: '<i class="fas fa-check-circle"></i> MSX Code Compliant', cls: 'up' },
            kpi2: { lbl: 'Anti-Corruption Audit', val: '100%', badge: '<i class="fas fa-shield-alt"></i> Clean Audit Opinion', cls: 'up' },
            kpi3: { lbl: 'Data Privacy ISO 27001', val: 'Certified', badge: '<i class="fas fa-lock"></i> Zero Breach Incidents', cls: 'up' },
            kpi4: { lbl: 'Supplier Code of Conduct', val: '98.2%', badge: '<i class="fas fa-handshake"></i> Verified Tier-1/2', cls: 'up' },
            title: 'Governance & Ethics Assurance Framework',
            tooltip: '<i class="fas fa-balance-scale text-warning me-1"></i> <strong>Assurance Tier:</strong> CMA Grade A <em>(Full Compliance)</em>',
            src1: '<i class="fas fa-gavel text-warning me-1"></i> Regulatory (60%)',
            src2: '<i class="fas fa-lock text-info me-1"></i> Cyber & Privacy (25%)',
            src3: '<i class="fas fa-search-dollar text-success me-1"></i> Audit Controls (15%)',
            bars: ['60%', '25%', '15%'],
            area: 'M 0,105 Q 100,90 200,60 T 340,35 T 440,25 T 500,15 L 500,135 L 0,135 Z',
            line: 'M 0,105 Q 100,90 200,60 T 340,35 T 440,25 T 500,15'
        }
    };

    const d = data[cat] || data.env;
    document.getElementById('kpiLbl1').textContent = d.kpi1.lbl;
    document.getElementById('kpiVal1').innerHTML = d.kpi1.val;
    const b1 = document.getElementById('kpiBadge1');
    b1.className = 'pbi-kpi-badge ' + d.kpi1.cls;
    b1.innerHTML = d.kpi1.badge;

    document.getElementById('kpiLbl2').textContent = d.kpi2.lbl;
    document.getElementById('kpiVal2').innerHTML = d.kpi2.val;
    const b2 = document.getElementById('kpiBadge2');
    b2.className = 'pbi-kpi-badge ' + d.kpi2.cls;
    b2.innerHTML = d.kpi2.badge;

    document.getElementById('kpiLbl3').textContent = d.kpi3.lbl;
    document.getElementById('kpiVal3').innerHTML = d.kpi3.val;
    const b3 = document.getElementById('kpiBadge3');
    b3.className = 'pbi-kpi-badge ' + d.kpi3.cls;
    b3.innerHTML = d.kpi3.badge;

    document.getElementById('kpiLbl4').textContent = d.kpi4.lbl;
    document.getElementById('kpiVal4').innerHTML = d.kpi4.val;
    const b4 = document.getElementById('kpiBadge4');
    b4.className = 'pbi-kpi-badge ' + d.kpi4.cls;
    b4.innerHTML = d.kpi4.badge;

    document.getElementById('pbiChartTitle').textContent = d.title;
    document.getElementById('pbiChartTooltip').innerHTML = d.tooltip;

    document.getElementById('pbiSrc1').innerHTML = d.src1;
    document.getElementById('pbiSrc2').innerHTML = d.src2;
    document.getElementById('pbiSrc3').innerHTML = d.src3;

    document.getElementById('pbiBar1').style.width = d.bars[0];
    document.getElementById('pbiBar2').style.width = d.bars[1];
    document.getElementById('pbiBar3').style.width = d.bars[2];

    const areaEl = document.getElementById('pbiChartArea');
    const lineEl = document.getElementById('pbiChartLine');
    if (areaEl) areaEl.setAttribute('d', d.area);
    if (lineEl) lineEl.setAttribute('d', d.line);
}
</script>
</body>

</html>

<script>
// Scroll-triggered animations for WHO WE ARE typing and Measure/Reduce growing bars + countup numbers
(function() {
    let whoTyped = false;
    function runWhoTypewriter() {
        if (whoTyped) return;
        const targetEl = document.getElementById('whoTypingTarget');
        if (!targetEl) return;
        whoTyped = true;
        const fullText = "Partnering with organizations to build lasting value.";
        targetEl.textContent = "";
        let i = 0;
        const speed = 40;
        function typeChar() {
            if (i < fullText.length) {
                targetEl.textContent += fullText.charAt(i);
                i++;
                setTimeout(typeChar, speed);
            }
        }
        typeChar();
    }

    let mrrAnimated = false;
    function runMrrAnimations() {
        if (mrrAnimated) return;
        mrrAnimated = true;

        // 1. Animate bar heights rising up
        document.querySelectorAll('.mrr-grow-bar').forEach(function(bar, idx) {
            const h = bar.getAttribute('data-height');
            setTimeout(function() {
                bar.style.transition = 'height 1.1s cubic-bezier(0.34, 1.56, 0.64, 1)';
                bar.style.height = h + 'px';
            }, idx * 120);
        });

        // 2. Count up numbers
        document.querySelectorAll('.mrr-counter').forEach(function(el) {
            const target = parseInt(el.getAttribute('data-target'), 10);
            const suffix = el.getAttribute('data-suffix') || '';
            const duration = 1400;
            const startTime = performance.now();

            function updateCount(currTime) {
                const elapsed = currTime - startTime;
                const progress = Math.min(elapsed / duration, 1);
                // easeOutQuad
                const easeVal = 1 - (1 - progress) * (1 - progress);
                const currentVal = Math.floor(easeVal * target);
                el.textContent = currentVal + suffix;
                if (progress < 1) {
                    requestAnimationFrame(updateCount);
                } else {
                    el.textContent = target + suffix;
                }
            }
            requestAnimationFrame(updateCount);
        });
    }

    document.addEventListener('DOMContentLoaded', function() {
        // Observer for WHO WE ARE
        const whoSec = document.getElementById('who-we-are');
        if (whoSec && 'IntersectionObserver' in window) {
            const whoObserver = new IntersectionObserver(function(entries) {
                entries.forEach(function(entry) {
                    if (entry.isIntersecting) {
                        runWhoTypewriter();
                        whoObserver.unobserve(entry.target);
                    }
                });
            }, { threshold: 0.25 });
            whoObserver.observe(whoSec);
        } else {
            runWhoTypewriter();
        }

        // Observer for Measure, Report and Reduce
        const mrrSec = document.getElementById('measure-report-reduce');
        if (mrrSec && 'IntersectionObserver' in window) {
            const mrrObserver = new IntersectionObserver(function(entries) {
                entries.forEach(function(entry) {
                    if (entry.isIntersecting) {
                        runMrrAnimations();
                        mrrObserver.unobserve(entry.target);
                    }
                });
            }, { threshold: 0.2 });
            mrrObserver.observe(mrrSec);
        } else {
            runMrrAnimations();
        }
    });
})();
</script>