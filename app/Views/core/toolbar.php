<div>
    <!-- Happiness is not something readymade. It comes from your own actions. - Dalai Lama -->
</div>
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<style>
        
    .icon-button {
    position: relative;
    display: flex;
    align-items: center;
    justify-content: center;
    width: 50px;
    height: 50px;
    color: #333333;
    background: #dddddd;
    border: none;
    outline: none;
    border-radius: 50%;
    }

    .icon-button:hover {
    cursor: pointer;
    }

    .icon-button:active {
    background: #cccccc;
    }

    .icon-button__badge {
    position: absolute;
    top: -10px;
    right: -10px;
    width: 25px;
    height: 25px;
    background: red;
    color: #ffffff;
    display: flex;
    justify-content: center;
    align-items: center;
    border-radius: 50%;
    }
</style>
<div id="kt_app_header" class="app-header ">
    <!--begin::Header container-->
    <div class="app-container  container-fluid d-flex align-items-stretch justify-content-between " id="kt_app_header_container">
        <!--begin::Sidebar mobile toggle-->
        <div class="d-flex align-items-center d-lg-none ms-n3 me-1 me-md-2" title="Show sidebar menu">
            <div class="btn btn-icon btn-active-color-primary w-35px h-35px" id="kt_app_sidebar_mobile_toggle">
                <i class="ki-duotone ki-abstract-14 fs-2 fs-md-1"><span class="path1"></span><span class="path2"></span></i>
            </div>
        </div>
        <!--end::Sidebar mobile toggle-->
        <!--begin::Mobile logo-->
        <div class="d-flex align-items-center flex-grow-1 flex-lg-grow-0">
            <a href="#" class="d-lg-none">
                <img alt="Logo" src="<?php echo base_url('assets/images/System/PIVI/PIVI.png');?>" class="h-30px"/>
            </a>
        </div>
        <!--end::Mobile logo-->
        <!--begin::Header wrapper-->
         
        <div class="d-flex align-items-stretch justify-content-between flex-lg-grow-1" id="kt_app_header_wrapper">
            <!--begin::Menu wrapper-->
            <div
                class="
                     app-header-menu
                     app-header-mobile-drawer
                     align-items-stretch
                     "
                data-kt-drawer="true"
                data-kt-drawer-name="app-header-menu"
                data-kt-drawer-activate="{default: true, lg: false}"
                data-kt-drawer-overlay="true"
                data-kt-drawer-width="250px"
                data-kt-drawer-direction="end"
                data-kt-drawer-toggle="#kt_app_header_menu_toggle"
                data-kt-swapper="true"
                data-kt-swapper-mode="{default: 'append', lg: 'prepend'}"
                data-kt-swapper-parent="{default: '#kt_app_body', lg: '#kt_app_header_wrapper'}"
            >
                <!--begin::Menu-->
                <div
                    class="
                        menu
                        menu-rounded
                        menu-column
                        menu-lg-row
                        my-5
                        my-lg-0
                        align-items-stretch
                        fw-semibold
                        px-2 px-lg-0
                        "
                    id="kt_app_header_menu"
                    data-kt-menu="true"
                >

                    <!--end:Menu item-->

                </div>
                <!--end::Menu-->
            </div>
            <!--end::Menu wrapper-->
            <!--begin::Navbar-->
            <div class="app-navbar flex-shrink-0">
                <!--begin::Search-->
                <div class="app-navbar-item align-items-stretch ms-1 ms-md-3">
                    <!--begin::Search-->
                    <div
                        id="kt_header_search"
                        class="header-search d-flex align-items-stretch"
                        data-kt-search-keypress="true"
                        data-kt-search-min-length="2"
                        data-kt-search-enter="enter"
                        data-kt-search-layout="menu"

                        data-kt-menu-trigger="auto"
                        data-kt-menu-overflow="false"
                        data-kt-menu-permanent="true"
                        data-kt-menu-placement="bottom-end"

                    > 
                        <button style="display:none;" class="btn btn-primary" id="showToastButton">Show Toast</button>
                        <div id="toast_div"></div>
                       
                        <div class="d-flex align-items-center" data-kt-search-element="toggle" id="kt_header_search_toggle">
                            <div class="btn btn-icon btn-custom btn-active-light btn-active-color-primary w-30px h-30px w-md-40px h-md-40px"> 
                                <i class="ki-duotone ki-magnifier fs-2 fs-lg-1"><span class="path1"></span><span class="path2"></span></i>
                            </div>
                        </div>
                      
                        <div data-kt-search-element="content" class="menu menu-sub menu-sub-dropdown p-7 w-325px w-md-375px">
                            <!--begin::Wrapper-->
                            <div data-kt-search-element="wrapper">
                                <!--begin::Form-->
                                <div  class="w-100 position-relative mb-3" autocomplete="off">
                                    <!--begin::Icon-->
                                    <i class="ki-duotone ki-magnifier fs-2 text-gray-500 position-absolute top-50 translate-middle-y ms-0"><span class="path1"></span><span class="path2"></span></i>    <!--end::Icon-->
                                    <!--begin::Input-->
                                    <input type="text" class="search-input form-control form-control-flush ps-10" id="SearchID" name="SearchID" value="" placeholder="Search..." data-kt-search-element="input" />
                                    <!--end::Input--> 
                                </div>
                                <!--end::Form-->
                                <!--begin::Separator-->
                                <div class="separator border-gray-200 mb-6"></div>
                                <!--end::Separator-->
                                <!--begin::Recently viewed-->

                                <!--end::Recently viewed-->
                                <!--begin::Recently viewed-->
                                <div class="mb-5" data-kt-search-element="main">
                                    <!--begin::Heading-->
                                    <div class="flex-stack fw-semibold mb-4">
                                         
                                    </div>
                                    <!--end::Heading-->
                                    <!--begin::Items-->
                                    <div class="scroll-y mh-200px mh-lg-325px" id="ResultSearchMenu">

                                    </div>
                                    <!--end::Items-->
                                </div>


                            </div>
                            <!--end::Wrapper-->

                        </div>
                        <!--end::Menu-->
                    </div>
                    <!--end::Search-->
                </div>
                <!--end::Search-->

                <!--begin::Notifications-->
               
                <!--end::Notifications-->


                <!--begin::Theme mode-->
                <div class="app-navbar-item ms-1 ms-md-3">
                    <!--begin::Menu toggle-->
                    <!-- <a href="#" class="btn btn-icon btn-custom btn-icon-muted btn-active-light btn-active-color-primary w-30px h-30px w-md-40px h-md-40px" data-kt-menu-trigger="{default:'click', lg: 'hover'}" data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end">
                        <i class="ki-duotone ki-night-day theme-light-show fs-2 fs-lg-1"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span><span class="path5"></span><span class="path6"></span><span class="path7"></span><span class="path8"></span><span class="path9"></span><span class="path10"></span></i>    <i class="ki-duotone ki-moon theme-dark-show fs-2 fs-lg-1"><span class="path1"></span><span class="path2"></span></i></a> -->
                    <!--begin::Menu toggle-->
                    <!--begin::Menu-->
                     
                    <!--end::Menu-->
                </div>
                <!--end::Theme mode-->
                <!--begin::User menu-->
                <div class="app-navbar-item ms-1 ms-md-3" id="kt_header_user_menu_toggle">
                    <!--begin::Menu wrapper-->
                    <div class="cursor-pointer symbol symbol-30px symbol-md-40px"
                         data-kt-menu-trigger="{default: 'click', lg: 'hover'}"
                         data-kt-menu-attach="parent"
                         data-kt-menu-placement="bottom-end">
                           <span  class="menu-icon" >
                  <i class="ki-duotone ki-setting-4 fs-4">
                  <span class="path1"></span><span class="path2">
                  </span><span class="path3">
                  </span><span class="path4">
                  </span></i></span>
                    </div>
                    <!--begin::User account menu-->
                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg menu-state-color fw-semibold py-4 fs-6 w-275px" data-kt-menu="true">
                        <!--begin::Menu item-->
                        <div class="menu-item px-3">
                            <div class="menu-content d-flex align-items-center px-3">
                                <!--begin::Avatar-->
                                <div class="symbol symbol-50px me-5">
                                    <button style="border-radius: 40px;height: 45px;width: 45px;font-size: 15px;color: white;background: #03c6fc !important;">
                                        <b> <?= session('initial') ?>  </b></button>
                                </div>


                                <!--end::Avatar-->
                                <!--begin::Username-->
                                <div class="d-flex flex-column">
                                    <div class="fw-bold d-flex align-items-center fs-5">
                                        <?= session('name') ?>
                                    </div>
                                    <a href="#" class="fw-semibold text-muted text-hover-primary fs-7">
                                        <?= session('userAccount') ?>
                                    </a>
                                    <a href="#" class="fw-semibold text-muted text-hover-primary fs-7">
                                        <?= session('email') ?>
                                    </a>
                                </div>
                                <!--end::Username-->
                            </div>
                        </div>
                        <!--end::Menu item-->
                        <!--begin::Menu separator-->
                        <div class="separator my-2"></div>
                        <!--end::Menu separator-->
                        <!--begin::Menu item-->
                        <div class="menu-item px-5">
                            <a href="<?php echo base_url('ChangePassword');?>" class="menu-link px-5">
                                Change Password
                            </a>
                        </div>



                        <div class="separator my-2"></div>
                        <!--begin::Menu item-->
                        <div class="menu-item px-5" id="signout" onclick="SignOut()" >
                            <a href="#" class="menu-link px-5">
                                Sign Out
                            </a>
                        </div>
                        <!--end::Menu item-->
                    </div>
                    <!--end::User account menu-->
                    <!--end::Menu wrapper-->
                </div>
                <!--end::User menu-->

            </div>
            <!--end::Navbar-->
        </div>
        <!--end::Header wrapper-->
    </div>
    <!--end::Header container-->
</div>

<script>
    // JavaScript to show the toast
    // document.getElementById('showToastButton').addEventListener('click', function() {
    //     var toastEl = document.getElementById('toast');
    //     var toast = new bootstrap.Toast(toastEl);
    //     toast.show();
    // });

    $(document).ready(function(){ 

        $.ajax({
            type: "POST",
            url:"<?php echo base_url('Loans/getduestodaycount');?>", 
            success:function(data){ 
                var data = JSON.parse(data);  
                data.forEach(row => { 
                    duetoday = row.DueToday;
                })  
                if(duetoday!=0){  
                    $('#toast_div').append(`<div class="position-fixed bottom-1 end-0 p-3 pt-20" style="z-index: 11">
                                                <div id="toast" class="toast align-items-center text-white bg-danger border-0" role="alert" aria-live="assertive" aria-atomic="true">
                                                    <div class="d-flex">
                                                        <div class="toast-body fw-bold text-end">
                                                            <span class="text-end"><i class="fs-8">${duetoday} Unpaid dues for the date today.</i></span>
                                                        </div>
                                                        <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
                                                    </div>
                                                </div>
                                            </div>`);
                    document.getElementById('showToastButton').addEventListener('click', function() {
                        var toastEl = document.getElementById('toast');
                        var toast = new bootstrap.Toast(toastEl);
                        toast.show();
                    });                    
                    setTimeout(function(){ 
                        $('#showToastButton').trigger('click');
                    },1000);    
                    
                }
            }
        })
    })

</script>