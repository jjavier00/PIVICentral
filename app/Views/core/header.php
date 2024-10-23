<!DOCTYPE html>
<html lang="en" >

<head>

    <title>PIVI Central</title>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <link rel="shortcut icon" href="assets/images/System/PIVI/PIVI.png"/>

    <!--begin::Fonts(mandatory for all pages)-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700"/>        <!--end::Fonts-->
  
    <!--begin::Global Stylesheets Bundle(mandatory for all pages)-->
    <link href="/assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css"/>
    <link href="/assets/css/style.bundle.css" rel="stylesheet" type="text/css"/>
  
    <link href="<?php echo base_url('assets/plugins/global/fontawesome-free-6.5.2-web/css/all.min.css')?>" rel="stylesheet" type="text/css">


    

    <script>
        // Frame-busting to prevent site from being loaded within a frame without permission (click-jacking)
        if (window.top != window.self) {
            window.top.location.replace(window.self.location.href);
        }
    </script>
    <style>
        .circle-image {
            width: 50px;
            height: 40px;
            border-radius: 40px;
        }
        .chosen-container-single .chosen-single {
            height: 35px;
            line-height: 30px;
        }
        .chosen-container-single {
            width: 100% !important;
        }
        .swal2-backdrop-no-click {
            pointer-events: none;
            background: rgba(0, 0, 0, 0.4);
        }

    </style>
    <!--begin::Global Javascript Bundle(mandatory for all pages)-->
    <script src="<?php echo base_url('assets/plugins/global/plugins.bundle.js');?>"></script>
    <script src="<?php echo base_url('assets/js/scripts.bundle.js');?>"></script>
    <!--end::Global Javascript Bundle-->
    <!--begin::Vendors Javascript(used for this page only)-->
    <script src="<?php echo base_url('assets/plugins/custom/leaflet/leaflet.bundle.js');?>"></script>
    <script src="<?php echo base_url('assets/plugins/custom/datatables/datatables.bundle.js');?>"></script>
    <!--end::Vendors Javascript-->
    <!--begin::Custom Javascript(used for this page only)-->
    <!-- <script src="/public/assets/js/custom/pages/general/contact.js"></script> -->
    <script src="<?php echo base_url('assets/js/widgets.bundle.js');?>"></script>
    <script src="<?php echo base_url('assets/js/custom/widgets.js');?>"></script>
    <script src="<?php echo base_url('assets/js/custom/apps/chat/chat.js');?>"></script>
    <script src="<?php echo base_url('assets/js/custom/utilities/modals/upgrade-plan.js');?>"></script>
    <script src="<?php echo base_url('assets/js/custom/utilities/modals/create-app.js');?>"></script>
    <script src="<?php echo base_url('assets/js/custom/utilities/modals/users-search.js');?>"></script>
    <!--end::Custom Javascript-->
    <!--    <script type="text/javascript" src="/assets/node_modules/chosen-js/chosen.jquery.min.js"></script>-->

    <script src="<?php echo base_url('assets/js/utils.js');?>"></script>

    <!-- Initial Project - JV -->
    <!-- <script src="<?php echo base_url('assets/custom/bootstrap-5.3.3-dist/js/bootstrap.bundle.min.js');?>" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script> -->

    <script src="<?php echo base_url('assets/custom/jquery/jquery-3.7.1.min.js');?>"  ></script>
    <!-- Initial Project - JV -->

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" rel="stylesheet" />
</head>
<!--end::Head-->
<style>
    body{
        font-family: Arial;
    }
</style>
<!--begin::Body-->
<body  id="kt_app_body" data-kt-app-layout="dark-sidebar" data-kt-app-header-fixed="true" data-kt-app-sidebar-enabled="true" data-kt-app-sidebar-fixed="true" data-kt-app-sidebar-hoverable="true" data-kt-app-sidebar-push-header="true" data-kt-app-sidebar-push-toolbar="true" data-kt-app-sidebar-push-footer="true" data-kt-app-toolbar-enabled="true"  class="app-default" >
<!--begin::Theme mode setup on page load-->
<script>
    var defaultThemeMode = "light";
    var themeMode;

    if ( document.documentElement ) {
        if ( document.documentElement.hasAttribute("data-bs-theme-mode")) {
            themeMode = document.documentElement.getAttribute("data-bs-theme-mode");
        } else {
            if ( localStorage.getItem("data-bs-theme") !== null ) {
                themeMode = localStorage.getItem("data-bs-theme");
            } else {
                themeMode = defaultThemeMode;
            }
        }
        if (themeMode === "system") {
            themeMode = window.matchMedia("(prefers-color-scheme: dark)").matches ? "dark" : "light";
        }
        document.documentElement.setAttribute("data-bs-theme", themeMode);
    }
</script>
<!--end::Theme mode setup on page load-->

<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5FS8GGP" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>

<!--begin::App-->
<div class="d-flex flex-column flex-root app-root" id="kt_app_root">
    <!--begin::Page-->
    <div class="app-page  flex-column flex-column-fluid " id="kt_app_page">
        <!--begin::Header-->

