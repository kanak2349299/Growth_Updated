-- phpMyAdmin SQL Dump
-- version 5.2.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Oct 16, 2026 at 06:58 AM
-- Server version: 11.8.9-MariaDB-log
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `u541085680_growthomdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `xyz_admin`
--

CREATE TABLE `xyz_admin` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(500) NOT NULL,
  `role` varchar(50) NOT NULL,
  `created` datetime NOT NULL,
  `updated` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `xyz_admin`
--

INSERT INTO `xyz_admin` (`id`, `name`, `email`, `password`, `role`, `created`, `updated`) VALUES
(1, 'Growth Team', 'info@growth-i-d.com', '48469275490b18ef27278dcd01b4f397', 'Superadmin', '2024-08-16 09:26:14', '2024-08-16 09:26:14');

-- --------------------------------------------------------

--
-- Table structure for table `xyz_blogs`
--

CREATE TABLE `xyz_blogs` (
  `id` int(11) NOT NULL,
  `title` varchar(500) NOT NULL,
  `blogdate` date NOT NULL,
  `blogslug` varchar(500) NOT NULL,
  `blogdetails` text NOT NULL,
  `image` varchar(500) NOT NULL,
  `created` datetime NOT NULL,
  `updated` datetime NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE current_timestamp(),
  `writer` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `xyz_blogs`
--

INSERT INTO `xyz_blogs` (`id`, `title`, `blogdate`, `blogslug`, `blogdetails`, `image`, `created`, `updated`, `writer`) VALUES
(1, 'Oman’s Net Zero Plan for 2050 : A Vision for a Sustainable Future', '2024-09-25', 'omans-net-zero-plan-for-2050-a-vision-for-a-sustainable-future', '<p>In the face of global climate challenges, the Sultanate of Oman has made a bold commitment to achieve net zero emissions by 2050, aligning with the objectives of the Paris Climate Agreement. This ambitious target places Oman among over 70 nations committed to combating climate change. Oman&rsquo;s pathway, referred to as the &quot;orderly transition,&quot; balances economic sustainability with environmental goals, ensuring the journey to net zero is feasible, affordable, and beneficial for the nation.</p>\r\n\r\n<p><strong>Current Emission Landscape</strong></p>\r\n\r\n<p>As of 2021, Oman emitted approximately 90 million tons of CO2 equivalent (MtCO2e), primarily from five key sectors: industry (32%), oil and gas (26%), power (19%), transport (18%), and buildings. Without action, emissions are projected to rise by 16%, reaching 104 MtCO2e by 2050.</p>\r\n\r\n<p>The challenge is clear: Oman must reduce emissions while ensuring economic growth and energy security. To achieve this, the country has identified five guiding objectives: environmental sustainability, energy cost minimization, economic optimization, job creation, and energy supply security.</p>\r\n\r\n<p><strong>The Orderly Transition Pathway</strong></p>\r\n\r\n<p>Oman&#39;s transition to net zero will follow an orderly pathway, meaning the country will prioritize cost-effective, scalable solutions before gradually addressing more difficult-to-abate emissions. This middle-ground approach contrasts with delayed or accelerated strategies, which either defer costly action or push for early, expensive decarbonization.</p>\r\n\r\n<p>An orderly transition could enable Oman to reduce emissions by 97 MtCO2e by 2050. Decarbonization efforts through 2030 are expected to account for 6% of the reduction, while 54% will be achieved by 2040. The remaining &ldquo;last mile&rdquo; emissions (about 7 Mt) will be tackled using advanced technologies, such as direct-air capture (DAC), and behavioural changes.</p>\r\n\r\n<p><strong>Key Sectors and Technologies</strong></p>\r\n\r\n<p>Six core decarbonization technologies are at the heart of Oman&rsquo;s net zero strategy: energy efficiency, electrification, renewable energy, battery technologies, sustainable hydrogen, and carbon capture and storage (CCS). Together, these technologies are projected to cover 90% of the required emissions abatement.</p>\r\n\r\n<ul>\r\n	<li>Industry: As the largest emitter, the industrial sector, including petroleum refining, iron and steel, and cement, will play a crucial role. Electrification of heat processes, hydrogen-based production, and CCS will be instrumental in reducing emissions by 41%​.</li>\r\n	<li>Power: The power sector will transition towards renewable energy, primarily solar and wind, which could provide 60% of Oman&rsquo;s electricity needs by 2050. This shift is expected to reduce generation costs by 50%, offsetting much of the initial investment.</li>\r\n	<li>Transport: Passenger cars and trucks are significant contributors to emissions. The adoption of battery-electric and hydrogen fuel-cell vehicles, supported by infrastructure investments, will reduce transport emissions by nearly 100% by 2050​.</li>\r\n	<li>Oil and Gas: Oman&rsquo;s oil and gas sector will continue to operate during the transition, but decarbonization will be achieved through electrification, CCS, and repurposing natural gas. Emissions from this sector are expected to drop by 94%​.</li>\r\n</ul>\r\n\r\n<p><strong>Economic and Social Benefits</strong></p>\r\n\r\n<p>The transition to net zero presents substantial economic opportunities. It is projected to contribute an additional 50% to Oman&rsquo;s GDP by 2050, primarily driven by investments in hydrogen and green energy. Oman&rsquo;s abundant solar and wind resources offer the potential to create a hydrogen export economy, positioning the country as a global leader in green hydrogen production.</p>\r\n\r\n<p>Socially, the transition is expected to generate between 20-30% more jobs, particularly in the renewable energy and hydrogen sectors. Upskilling and reskilling initiatives will ensure Omani citizens are equipped to take advantage of these new opportunities​.</p>\r\n\r\n<p><strong>Financial Considerations</strong></p>\r\n\r\n<p>Oman&#39;s net zero journey will require an additional USD 190 billion in capital investment by 2050. This figure rises to USD 230 billion when considering the investments necessary to unlock the hydrogen export economy. However, these expenditures are not expected to be fully borne by the government; the private sector is anticipated to finance 70-80% of the global energy transition​.</p>\r\n\r\n<p><strong>Conclusion</strong></p>\r\n\r\n<p>Oman&rsquo;s commitment to achieving net zero by 2050 represents a visionary approach to addressing the global climate crisis. Through its orderly transition pathway, Oman is not only ensuring a sustainable future but also positioning itself as a leader in the emerging green economy. With careful planning, technological innovation, and international collaboration, Oman is on the path to a cleaner, more prosperous future.</p>\r\n', '20241007_114506_Growth Blog Cover - Oman’s Net Zero Plan for 2050.jpg', '0000-00-00 00:00:00', '2024-10-07 11:45:06', 'Saud AlJunaibi'),
(2, 'The Power of Sustainability: Shaping Our Future', '2024-10-01', 'the-power-of-sustainability-shaping-our-future', '<p>One of the most important challenges and opportunities of our day is sustainability. Adopting sustainable methods is becoming imperative as environmental concerns grow and pressure on the world&#39;s resources increases. After giving 15+ years in the field and understanding the concepts I finally addressed that fundamentally, sustainability is about addressing current demands without sacrificing the capacity of future generations to address their own. Maintaining this equilibrium necessitates careful resource management, cutting down on waste, and choosing more wisely when it comes to energy production, use, and consumption. The benefits of sustainability to the environment are among its main advantages. We can drastically lessen our dependency on fossil fuels, which contribute to climate change, by embracing renewable energy sources like hydropower, solar electricity, and wind.</p>\r\n\r\n<p>Ecosystem preservation, biodiversity protection, and pollution reduction can also be achieved through the use of sustainable agricultural, waste management, and water conservation strategies. But sustainability also has social and economic implications in addition to environmental ones. Businesses that include sustainability into their business plans frequently experience long-term cost savings, improved brand recognition, and closer ties with customers who are becoming more and more interested in eco-friendly goods. Furthermore, by guaranteeing a more equitable and responsible distribution of resources, sustainable communities advance social fairness. Even with the advancements, problems still exist. It will take extensive change in all spheres of society&mdash;industry, government, and individual&mdash;to move toward a more sustainable future. Overcoming challenges like high initial expenses and little awareness of sustainable practices will require cooperation and creativity.</p>\r\n\r\n<p>Sustainable development offers a way to achieve long-term resilience and prosperity in the face of environmental difficulties around the world. We can give future generations a brighter world by embracing sustainability now.</p>\r\n', '20241007_114517_Growth Blog Cover - The Power of Sustainability-Shaping Our Future.jpg', '0000-00-00 00:00:00', '2024-10-07 11:45:17', 'Mandar Sathe'),
(3, 'Energy Management and Process Safety: A Vital Partnership', '2024-10-07', 'energy-management-and-process-safety-a-vital-partnership', '<p>Having spent the past 20+ years working in the GCC, I&rsquo;ve seen first-hand how the region&#39;s industries have evolved in energy management and process safety. Both areas are crucial to ensuring operational efficiency, environmental sustainability, and the safety of workers. While these two domains are often treated separately, they are deeply interconnected, and their integration is key to driving long-term industrial success.</p>\r\n\r\n<p>Energy management focuses on reducing energy consumption, improving efficiency, and optimizing the use of resources. In a region like the GCC, where energy demand is high and resources need to be managed carefully, energy management has become a priority. Advanced technologies such as energy audits, smart metering, and data analytics allow companies to track their energy usage, identify inefficiencies, and implement corrective actions. This not only reduces operational costs but also lowers carbon emissions, aligning with sustainability goals.</p>\r\n\r\n<p>On the other hand, process safety ensures that industrial operations, especially in high-risk sectors like oil and gas, petrochemicals, and manufacturing, are carried out safely. Over the years, I&rsquo;ve witnessed significant advancements in this area, from better risk assessments to the use of advanced safety systems. However, no matter how robust the systems, complacency is dangerous. Regular training, audits, and safety culture development are essential to avoid accidents and protect workers.</p>\r\n\r\n<p>The integration of energy management with process safety is vital. Inefficient energy systems can lead to hazardous conditions, while poor process safety can disrupt energy flows and increase consumption. By managing both effectively, industries can achieve operational excellence, safeguard their workforce, and contribute to a more sustainable future for the GCC.</p>\r\n', '20241007_114529_Growth Blog Cover - Energy Management and Process Safety-A Vital Partnership.jpg', '0000-00-00 00:00:00', '2024-10-07 11:45:29', 'Avinash S. Gore ');

-- --------------------------------------------------------

--
-- Table structure for table `xyz_career`
--

CREATE TABLE `xyz_career` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `resume` varchar(500) NOT NULL,
  `created` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `xyz_career`
--

INSERT INTO `xyz_career` (`id`, `name`, `email`, `phone`, `resume`, `created`) VALUES
(1, 'Agmrf', 'saud@growth-i-d.com', '7777', '1728136632_37332ff1330cba7826da.pdf', '2024-10-05'),
(4, 'HARSHAL JAGDAMBE', 'harshal.jagdambe13@gmail.com', '9067384798', '1760507964_68196ccb7a4e9d13ff81.docx', '2025-10-15'),
(5, 'Charlene Legrand', 'charlenelegrand.cl@gmail.com', '+971524160189', '1770702197_8d56cacea4031f80bf7c.pdf', '2026-02-10'),
(6, 'Charlene Legrand', 'charlenelegrand.cl@gmail.com', '+971524160189', '1770702198_629c8e99e923bb204217.pdf', '2026-02-10'),
(7, 'Abdullah bilal Hanoush ', 'abdullah.hanoush904@gmail.com', '+962780449792', '1774995526_02ee0401e6dc13ba97c5.pdf', '2026-03-31'),
(8, 'Andriya Pias', 'andriyapias@gmail.com', '0526514264', '1776025630_d637ac13e88f70de281c.pdf', '2026-04-12'),
(9, 'Shubham Nayak', 'shubhamnayak.nayak25@gmail.com', '8898827318', '1776655582_ae8b13ee0b151d21dd88.pdf', '2026-04-20'),
(10, 'Abdul Hamid Al Yaqoubi', 'abdul7amid.yaqoubi@gmail.com', '96168621', '1782726547_d9fa6c55cc7e47e692cb.pdf', '2026-06-29'),
(11, 'abhishek p', 'abhishekponthen1007@gmail.com', '9446796574', '1782739896_4d3921a093bd57f99e1d.pdf', '2026-06-29'),
(12, 'Harvey Ellis', 'harv.ellis6@gmail.com', '447500245598', '1783736817_62646b56cae386996dbc.docx', '2026-07-11');

-- --------------------------------------------------------

--
-- Table structure for table `xyz_contact`
--

CREATE TABLE `xyz_contact` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `message` varchar(500) NOT NULL,
  `created` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `xyz_contact`
--

INSERT INTO `xyz_contact` (`id`, `name`, `email`, `phone`, `message`, `created`) VALUES
(2, 'Gary Charles', 'gary-charles@dominatingkeywords.com', '8054002077', 'https://www.dominatingkeywords.comWant to know how to get more traffic to your website?\nHere is a simple 3-step online demo:\n\n- Go to our website and click on DEMO link;\n- Type your website and any keyword;\n- Click on VIEW ONLINE DEMO and see your website banner on top of search results.\n\nInterested?\nIf your answer is yes then fill in the online quote and start getting tons of organic search engine traffic from your keywords. ', '2024-10-16'),
(3, 'Gary Charles', 'gary.charles@dominatingkeywords.com', '8054002077', 'https://www.dominatingkeywords.comI am not offering SEO or PPC services. This is something entirely different. Simply send us your desired keywords or fill online quote form on our website, and your website will instantly appear at the top of Google and Bing search results, without any Pay Per Click charges. Let me demonstrate how it works and you\'ll be pleasantly surprised by the results. ', '2025-01-25'),
(4, 'vPYtcMprbNePJYN', 'iduroro220@gmail.com', '9440003244', 'ALILiLDMh', '2025-10-04'),
(5, 'mihsimnPmsPwRWi', 'obodarof509@gmail.com', '8470811885', 'MkGdhFNgErunmcfY', '2025-10-08'),
(6, 'LeTMcpXONRFIGm', 'ogebotobul20@gmail.com', '2543914370', 'hKrZXygSjGuzWjy', '2025-10-16'),
(7, 'fBrTAqmtHFpgvrS', 'zigakeguc51@gmail.com', '7884857376', 'NqQGEUSDl', '2025-10-18'),
(8, 'ZNdpykFRfScWTKg', 'itaxilijeyo66@gmail.com', '2681909317', 'qDMImxGJorMxERFi', '2025-10-19'),
(9, 'zOGlpFJzDLrJdAEuZ', 'butuxezapaqo13@gmail.com', '6769319537', 'gkamhHyIPDxiHaKhKEIqVY', '2025-10-21'),
(10, 'rutmLvXhZgkLcKJF', 'novonoq175@gmail.com', '9404442660', 'HXFdfWygcFtXPJgDLL', '2025-10-24'),
(11, 'bdyPXUbNbTidiaVMCGxpouxv', 'emataa662@gmail.com', '7928862238', 'nrtVIgePqwSkyIOSvO', '2025-10-25'),
(12, 'FlolmubiYovHmeHSPdlsXn', 'etoceyom198@gmail.com', '3022398536', 'xBibOiyjiCjRGvtsrBpeu', '2025-10-25'),
(13, 'ObwzLvYWYhVFYnSGr', 'acahilunotod69@gmail.com', '7149555617', 'UjSLhXHSTjzYSiXOuYUt', '2025-10-26'),
(14, 'tjCRvPZVyMbQRPJWv', 'unerifi246@gmail.com', '2835207576', 'RcxuVxINpHgHIpVCoqYJemGe', '2025-10-31'),
(15, 'MvMxYzTrxxBQFDOFhLSrWLD', 'usudicahewu54@gmail.com', '5921693101', 'YwimuMmovonMKDCtciy', '2025-11-03'),
(16, 'tsCpKyiNJUHOfQFdJMfrUtG', 'juliluza116@gmail.com', '3581296730', 'QOudKAfioHKQEljkzLYWcKvO', '2025-11-09'),
(17, 'nprdLeYVhBjsLdpkmPGzx', 'qikigadiz241@gmail.com', '2459428790', 'RBvUNKPrZPrbSkUsjyDhwg', '2025-11-18'),
(18, 'hDluufDVTLFWByNXK', 'ujipiwokoku960@gmail.com', '8011477002', 'YIepbPOrqxhpzvapBxMz', '2025-11-26'),
(19, 'gLWXjdvTcTQoKWUeqoVHMY', 'ibudelunaza87@gmail.com', '4348609025', 'DnZYufdtouztuGpMFvS', '2025-11-27'),
(20, 'fPoxXJTmnnegYzBgtWG', 'eqacuxegibi482@gmail.com', '6371675268', 'FOAYFNwndAWyekLzKpa', '2025-12-01'),
(21, 'RNixYPizXUgLcpenLkIBSI', 'okequniway07@gmail.com', '6487625111', 'lxEgTNtWXrUxQURdEclNG', '2025-12-02'),
(22, 'MiMEzhKViJloTgxkv', 'opobolasut569@gmail.com', '9141991363', 'gvZYYDwuOOSyFWWDuUFU', '2025-12-20'),
(23, 'wgJiuYUtOXowLVaLMAu', 'd.od.uta.h.i4.8.5@gmail.com', '4339151066', 'kHoAzflwxvRepHCA', '2026-09-13'),
(24, 'BjajODCEubRRcRjaTxqo', 'i.d.e.p.e.n.iv9.0.3@gmail.com', '3208134752', 'jptzlQFaQvzRrXhsIKrRuRZx', '2026-09-21');

-- --------------------------------------------------------

--
-- Table structure for table `xyz_newsletter`
--

CREATE TABLE `xyz_newsletter` (
  `id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `created` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `xyz_newsletter`
--

INSERT INTO `xyz_newsletter` (`id`, `email`, `created`) VALUES
(2, 'butuxezapaqo13@gmail.com', '2025-10-21'),
(3, 'novonoq175@gmail.com', '2025-10-24'),
(4, 'emataa662@gmail.com', '2025-10-25'),
(5, 'etoceyom198@gmail.com', '2025-10-25'),
(6, 'acahilunotod69@gmail.com', '2025-10-26'),
(7, 'unerifi246@gmail.com', '2025-10-31'),
(8, 'usudicahewu54@gmail.com', '2025-11-03'),
(9, 'juliluza116@gmail.com', '2025-11-09'),
(10, 'qikigadiz241@gmail.com', '2025-11-18'),
(11, 'ujipiwokoku960@gmail.com', '2025-11-26'),
(12, 'ibudelunaza87@gmail.com', '2025-11-27'),
(13, 'wapijazebos248@gmail.com', '2025-11-29'),
(14, 'eqacuxegibi482@gmail.com', '2025-12-01'),
(15, 'okequniway07@gmail.com', '2025-12-02'),
(16, 'mansoor-work@outlook.com', '2025-12-13'),
(17, 'opobolasut569@gmail.com', '2025-12-20'),
(18, 'ope.yuxem.ida.29.1@gmail.com', '2026-02-24'),
(19, 'a.rc.hi.ga4@gmail.com', '2026-05-22'),
(20, 'k.l.e.i.burn.19.84@gmail.com', '2026-08-14'),
(21, 'd.od.uta.h.i4.8.5@gmail.com', '2026-09-13'),
(22, 'i.d.e.p.e.n.iv9.0.3@gmail.com', '2026-09-21');

-- --------------------------------------------------------

--
-- Table structure for table `xyz_request`
--

CREATE TABLE `xyz_request` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `organization` varchar(500) NOT NULL,
  `enquiryfor` varchar(500) NOT NULL,
  `created` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `xyz_request`
--

INSERT INTO `xyz_request` (`id`, `name`, `email`, `phone`, `organization`, `enquiryfor`, `created`) VALUES
(1, 'Sauf', 'saud@growth-i-d.com', '777777', 'Oman', 'Investment ', '2024-10-05'),
(3, 'tvdaSumDUqPtlxOO', 'iduroro220@gmail.com', '3167534986', 'CKeicGKQnjGBD', 'ueIZahtkyB', '2025-10-04'),
(4, 'madxAJgQg', 'obodarof509@gmail.com', '9839541473', 'LkxVIQYVvtTyHhmw', 'gfxUsMInwmiy', '2025-10-08'),
(5, 'UFFJKRdUPOMdanA', 'ogebotobul20@gmail.com', '9977318042', 'WUYQVolVaIsQFfX', 'rEQbzNxUpSDQOeo', '2025-10-16'),
(6, 'RVEVkOvgJgeORN', 'zigakeguc51@gmail.com', '2615070346', 'LInEHSrBJv', 'TonOTmTnVKDNl', '2025-10-18'),
(7, 'kmkaYttwlHP', 'itaxilijeyo66@gmail.com', '6577786440', 'rrlrwSXevRh', 'UDWRoIWyvlF', '2025-10-19'),
(8, 'HhOZLYTnVFGYUzCRJVMIfIH', 'butuxezapaqo13@gmail.com', '5999742936', 'mZXRQsHUHcdzPSfxF', 'yzzbjDorjVpvpTaWcKk', '2025-10-21'),
(9, 'ZZmJkGcQmKFnktePeK', 'novonoq175@gmail.com', '4558261830', 'gdBPPccAtMXUJPTCFSFAus', 'hVnNiHYGRFIcQiKbt', '2025-10-24'),
(10, 'odfnwvscywkfJXCkTwtqnl', 'emataa662@gmail.com', '6270861577', 'zwDbtBnqipIOvthOlk', 'YgSXSWqVozwrIJzOQvStzR', '2025-10-25'),
(11, 'vEbPwewJyyWQayAYgPu', 'etoceyom198@gmail.com', '9996050208', 'YpBxQaCFCFlfLsVva', 'SbPCVmwJYQEueKBzFIieZeWb', '2025-10-25'),
(12, 'UfiLGUqrpInODewyuCpwEOw', 'acahilunotod69@gmail.com', '5143394244', 'ujdbdWgVZQFFEmJowrAeavH', 'SBUuKlXgwiPsqoVfglC', '2025-10-26'),
(13, 'qHioOzGPGHFZlunTfdgCB', 'unerifi246@gmail.com', '5217886855', 'GcZDdPNdbobOJfHmeo', 'UMZSeBwLkygrbXrgcqa', '2025-10-31'),
(14, 'fPucovqZSCAxDMPlBvMFJN', 'usudicahewu54@gmail.com', '8000288681', 'bHqheFVdmKynoEsHUiZfF', 'toyrISlqStYRoJcssJvLN', '2025-11-03'),
(15, 'ESapNVFkiVFdSDknydryk', 'juliluza116@gmail.com', '3445521753', 'HkFibvBFqyiQNZPF', 'OworKwUVdZyarUBP', '2025-11-09'),
(16, 'pjjvztowGswtIenLnAqMtAe', 'qikigadiz241@gmail.com', '8076755841', 'VylDxSnOTRgVDEQxaMz', 'UxXyUzBJNtqTZDpwKkrNu', '2025-11-18'),
(17, 'LhVtNUyXtFrOCCHFHaZScOeV', 'ujipiwokoku960@gmail.com', '7156581266', 'ExSEpaujXcQSamWMwATfW', 'QjNuDsFjGXcWCbZT', '2025-11-26'),
(18, 'eppttVPrwfIFiKPIVwmacu', 'ibudelunaza87@gmail.com', '6836853929', 'NSJqiLijiCgcydJcxRKqVR', 'GBWxnCLvUGVhIBXZFfo', '2025-11-27'),
(19, 'EcVMfZnVSscHNhXASEv', 'eqacuxegibi482@gmail.com', '9408869811', 'gNZZBcfqSYScDMtbDVXElN', 'yFRpauWCbERkitenMn', '2025-12-01'),
(20, 'iNqiIRGjypigJhEmYoXOWrFS', 'okequniway07@gmail.com', '5307338881', 'TuzGwmULKmOBJVRdADz', 'WcfjeqYzjouQivTTTQnhOr', '2025-12-02'),
(21, 'gdWmniRwtdWbLAWaWv', 'opobolasut569@gmail.com', '4381522026', 'hpzxNPKIQbaXkepSXPqwL', 'XrvZvXWTOKvKUfrBAztENIT', '2025-12-20'),
(22, 'chat', 'wwe@gmail.com', '+17665337721', 'wwe', 'jon', '2025-12-25'),
(23, 'XxJLNoEmTnKOSANl', 'ope.yuxem.ida.29.1@gmail.com', '6407430137', 'NRlOcKIeGRmVquEI', 'xRptoXRgJsuBEyokXcUAcXyS', '2026-02-24'),
(24, 'iIdmfTmHVCnHitiCDuqG', 'd.od.uta.h.i4.8.5@gmail.com', '4103882492', 'Rquye LLC', 'DQVvUKywXAwNGUkugHgXQLSp', '2026-09-13'),
(25, 'NNwTVoTLggzDxnLMfiiACPxF', 'i.d.e.p.e.n.iv9.0.3@gmail.com', '6680106658', 'Myrjlja LLC', 'rFiNmFtVoPEpUKjPPRc', '2026-09-21');

-- --------------------------------------------------------

--
-- Table structure for table `xyz_serviceEnquiry`
--

CREATE TABLE `xyz_serviceEnquiry` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `service` varchar(200) NOT NULL,
  `message` varchar(500) NOT NULL,
  `created` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `xyz_serviceEnquiry`
--

INSERT INTO `xyz_serviceEnquiry` (`id`, `name`, `email`, `phone`, `service`, `message`, `created`) VALUES
(2, 'ViXGWdYjYXQnrkJqlwbS', 'butuxezapaqo13@gmail.com', '2498415818', 'Process Safety Management', 'LjjItJeXImDyVKGAMiAV', '2025-10-21'),
(3, 'GyVeMDhlZBWpsIiUzMFrsFi', 'novonoq175@gmail.com', '9582016288', 'Sustainability Services', 'LvQCxorgxRoWmdnxJrS', '2025-10-24'),
(4, 'HttxJDskxickSngTe', 'emataa662@gmail.com', '2801088166', 'Energy Management & Audit Services', 'XLigydEmlfavFRxLmBsgFMU', '2025-10-25'),
(5, 'snRbBevtDneEEftslqb', 'etoceyom198@gmail.com', '8064890406', 'ESG Compliance', 'LNmrmiDbafTwwCzJM', '2025-10-25'),
(6, 'qFExQJzOWnORSahegQYJZjMQ', 'acahilunotod69@gmail.com', '9177832181', 'Sustainability Services', 'crhZEDJyNVzpSmvgwjDhAqP', '2025-10-26'),
(7, 'XllPMutLNujmicWZvhWnkiY', 'unerifi246@gmail.com', '4800976317', 'Sustainability Services', 'JOLJhAFPsppNfOjMwPccZf', '2025-10-31'),
(8, 'ZOfNQeGJuSoPKAoEEQMe', 'usudicahewu54@gmail.com', '2153394392', 'Sustainability Services', 'fMKimyHmvRMHeVNNgqhX', '2025-11-03'),
(9, 'vEvhVUEEMhHFpjAQ', 'juliluza116@gmail.com', '8917018498', 'Sustainability Services', 'QNXdsGETHautvVFrMWntlU', '2025-11-09'),
(10, 'EIoRHHikQhkKrMTrPQz', 'qikigadiz241@gmail.com', '2247230205', 'Project Management', 'znQIbxeLaGKqvXMPFICMqro', '2025-11-18'),
(11, 'rNDloNCRkEOQiNoGn', 'ujipiwokoku960@gmail.com', '8875706687', 'Process Safety Management', 'ZmYyxgpfEBYIUaGUb', '2025-11-26'),
(12, 'HrSZBeAnhPVpuNDScUXkDXQx', 'ibudelunaza87@gmail.com', '8183866884', 'Continuous Improvement', 'zXrovXKvVQCfkOtIpQiesuIz', '2025-11-27'),
(13, 'SbnZaOyAXWqZsyobFYDADAHW', 'eqacuxegibi482@gmail.com', '8803770623', 'Energy Management & Audit Services', 'QSpqThBuJRWmDcDmcUWlu', '2025-12-01'),
(14, 'awcJquaDDHGIMXeZZY', 'okequniway07@gmail.com', '4414225853', 'Project Management', 'afgpKwbREuHarLDZwuhMm', '2025-12-02'),
(15, 'uqpPaEasoJmOiTCjngS', 'opobolasut569@gmail.com', '5828373660', 'Training & Mentorship', 'qAjBFrAsFhsEIZHbzIzHnfwh', '2025-12-20'),
(16, 'ptRIlTIjEDwCUAkGfK', 'ope.yuxem.ida.29.1@gmail.com', '6651397922', 'Energy Management & Audit Services', 'lyNgSvoCuhrTKnaUpdU', '2026-02-24'),
(17, 'Abdullah bilal Hanoush ', 'abdullah.hanoush904@gmail.com', '+962780449792', 'Energy Management & Audit Services', 'Greetings.\n\nMechanical Engineer, Seeking to gain a professional position contributing to improve my technical knowledge, advancing my skills in order to develop my organization and achieve its goals .I have experience in solar energy projects implementation and I have a good background in HVAC and fire fighting and energy audit.\n\n\nBest Regards.', '2026-03-31'),
(18, 'oeZjaCzobBYpEpxxMCymr', 'd.od.uta.h.i4.8.5@gmail.com', '9333277252', 'Energy Management & Audit Services', 'dGKUIZMHzdHthbdqVwKCMGv', '2026-09-13'),
(19, 'nSdnlJmuDGnqwHASpvYqnV', 'i.d.e.p.e.n.iv9.0.3@gmail.com', '3980710461', 'Energy Management & Audit Services', 'NTWFAGBeFHTHozYE', '2026-09-21');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `xyz_admin`
--
ALTER TABLE `xyz_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `xyz_blogs`
--
ALTER TABLE `xyz_blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `xyz_career`
--
ALTER TABLE `xyz_career`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `xyz_contact`
--
ALTER TABLE `xyz_contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `xyz_newsletter`
--
ALTER TABLE `xyz_newsletter`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `xyz_request`
--
ALTER TABLE `xyz_request`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `xyz_serviceEnquiry`
--
ALTER TABLE `xyz_serviceEnquiry`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `xyz_admin`
--
ALTER TABLE `xyz_admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `xyz_blogs`
--
ALTER TABLE `xyz_blogs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `xyz_career`
--
ALTER TABLE `xyz_career`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `xyz_contact`
--
ALTER TABLE `xyz_contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `xyz_newsletter`
--
ALTER TABLE `xyz_newsletter`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `xyz_request`
--
ALTER TABLE `xyz_request`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `xyz_serviceEnquiry`
--
ALTER TABLE `xyz_serviceEnquiry`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
