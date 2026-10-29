<!-- ========== Meta Tags ========== -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- ========== Page Title/Desc/Keyword ========== -->
    <title><?php echo $seotitle ?></title>
    <meta name="description" content="At Growth Investment & Development, we are committed to transforming industries through sustainable practices, ESG compliance, and process safety. ">
    <meta name="keywords" content="Growth Investment & Development, sustainable services, ESG compliance,process safety,training,project management">

    <!-- ========== Favicon Icon ========== -->
    <?php $frontAssetBase = ENVIRONMENT === 'development' ? 'front/assets/' : 'public/front/assets/'; ?>
    <link rel="shortcut icon" href="<?php echo base_url($frontAssetBase . 'img/favicon.ico')?>" type="image/x-icon">

    <!-- ========== Start Stylesheet ========== -->
    <link href="<?php echo base_url($frontAssetBase . 'css/bootstrap.min.css') ?>" rel="stylesheet">
    <link href="<?php echo base_url($frontAssetBase . 'css/font-awesome.min.css') ?>" rel="stylesheet">
    <link href="<?php echo base_url($frontAssetBase . 'css/themify-icons.css') ?>" rel="stylesheet">
    <link href="<?php echo base_url($frontAssetBase . 'css/elegant-icons.css') ?>" rel="stylesheet">
    <link href="<?php echo base_url($frontAssetBase . 'css/flaticon-set.css') ?>" rel="stylesheet">
    <link href="<?php echo base_url($frontAssetBase . 'css/magnific-popup.css') ?>" rel="stylesheet">
    <link href="<?php echo base_url($frontAssetBase . 'css/swiper-bundle.min.css') ?>" rel="stylesheet">
    <link href="<?php echo base_url($frontAssetBase . 'css/animate.css') ?>" rel="stylesheet">
    <link href="<?php echo base_url($frontAssetBase . 'css/validnavs2.css') ?>" rel="stylesheet">
    <link href="<?php echo base_url($frontAssetBase . 'css/helper.css') ?>" rel="stylesheet">
    <link href="<?php echo base_url($frontAssetBase . 'css/unit-test.css') ?>" rel="stylesheet">
    <link href="<?php echo base_url($frontAssetBase . 'css/style7.css') ?>" rel="stylesheet">
    <link href="<?php echo base_url($frontAssetBase . 'css/main.css') ?>" rel="stylesheet">
    <link href="<?php echo base_url($frontAssetBase . 'css/greenly-theme.css') ?>" rel="stylesheet">
    <script src="<?php echo base_url($frontAssetBase . 'js/growth-i18n.js') ?>"></script>
<!-- ========== End Stylesheet ========== -->
<style>
/* RTL Styles for Arabic Navigation & Content */
html[dir="rtl"] {
    direction: rtl;
    text-align: right;
}
html[dir="rtl"] body {
    text-align: right;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
}
html[dir="rtl"] .growth-dropdown-menu {
    left: auto !important;
    right: 0 !important;
    text-align: right !important;
}
html[dir="rtl"] .dropdown-chevron {
    margin-right: 4px;
    margin-left: 0;
}
html[dir="rtl"] .ms-auto {
    margin-right: auto !important;
    margin-left: 0 !important;
}
html[dir="rtl"] .me-2, html[dir="rtl"] .me-3 {
    margin-left: 0.5rem !important;
    margin-right: 0 !important;
}
html[dir="rtl"] .fa-arrow-right:before {
    content: "\f060"; /* Left arrow in RTL */
}
</style>
    <style>
        .contact-form-style-one {
    padding: 40px 60px;
    border: 2px solid #43ae4c;
    animation: borderColorChange 1s infinite alternate;
}
@keyframes borderColorChange {
    from {
        border-color: #43ae4c; /* Green */
    }
    to {
        border-color: #0b5980; /* Blue */
    }
}
    </style>