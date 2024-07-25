<header class="clearHeader">
    <div class="border-bottom row m-0">
        <div class="col-md-5">
            <ul class="d-flex gap-2">
                <li class="border-end py-2 px-3"><a lang="hi" href="http://www.mp.gov.in" aria-label="मध्य प्रदेश  शासन  - External Regional Language Site that opens in a new window" title="मध्य प्रदेश  शासन  - External Regional Language Site that opens in a new window" target="_blank" rel="noopener noreferrer">
                        मध्य प्रदेश शासन </a></li>
                <li class="border-end py-2 px-3"><a lang="en" href="http://www.mp.gov.in/en/web/guest/home" aria-label="Government of Madhya Pradesh - External site that opens in a new window" title="Government of Madhya Pradesh - External site that opens in a new window" target="_blank" rel="noopener noreferrer">Government of Madhya Pradesh</a></li>
            </ul>
        </div>
        <div class="col-md-7">
            <ul class="d-flex justify-content-end gap-2">
                <li>
                    <button id="toggleButton" class="btn py-2 px-3 border-end" onclick="toggleSpeech()">
                        <i id="buttonIcon" class="fas fa-play"></i>
                    </button>
                </li>
                <li class="border-end py-2 px-3"><a href="https://www.facebook.com/nagarpalika.barwaha" target="_blank" aria-label="Facebook | External site that opens in a new window" title="https://www.facebook.com/ - External site that opens in a new window" rel="noopener noreferrer"><img src="https://mandsaur.nic.in/wp-content/themes/district-theme/images/ico-facebook.png" title="Facebook | External site that opens in a new window" alt="Facebook, External Link that opens in a new window"></a></li>
                <li class="border-end py-2 px-3"><a href="https://twitter.com/CBadwah" target="_blank" aria-label="Twitter | External site that opens in a new window" title="https://twitter.com/cmandsaur?lang=en#timeline - External site that opens in a new window" rel="noopener noreferrer"><img src="https://mandsaur.nic.in/wp-content/themes/district-theme/images/ico-twitter.png" title="Twitter | External site that opens in a new window" alt="Twitter | External site that opens in a new window"></a></li>
                <li class="nav-item border-end dropdown py-2 px-3">
                    <a class="nav-link dropdown-toggle" href="#" title="Accessibility Links" aria-label="Accessibility Links" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <img class="show-con" src="https://mandsaur.nic.in/wp-content/themes/district-theme/images/accessibility.png" title="Accessibility Icon" alt="Accessibility Icon">
                    </a>
                    <ul class="dropdown-menu">
                        <li class="dropdown-item">
                            <button id="increase-font" class="btn p-0" title="Font Size Increase - selected"  aria-label="Increase Font Size">A+</button>
                        </li>
                        <li class="dropdown-item">
                            <button id="decrease-font" class="btn p-0" title="Font Size Decrease" aria-label="Decrease Font Size">A-</button>

                        </li>
                        <li class="dropdown-item">
                            <button id="reset-font" class="btn p-0" title="Normal Font"  aria-label="Reset Font Size">A</button>

                        </li>
                        <!-- <li class="dropdown-item">
                            <a data-selected-text="selected" data-event-type="increase" href="javascript:void(0);" data-label="Font Size Increase" aria-label="Font Size Increase - selected" title="Font Size Increase - selected" class="link-selected"><span aria-hidden="true">A+</span></a>
                        </li>
                        <li class="dropdown-item">
                            <a data-selected-text="selected" data-event-type="normal" href="javascript:void(0);" data-label="Normal Font" aria-label="Normal Font" title="Normal Font"></a>
                        </li>
                        <li class="dropdown-item">
                            <a data-selected-text="selected" data-event-type="decrease" href="javascript:void(0);" data-label="Font Size Decrease" aria-label="Font Size Decrease" title="Font Size Decrease"><span aria-hidden="true">A-</span></a>
                        </li>
                        <li class="dropdown-item">
                            <a href="javascript:void(0);" aria-label="High Contrast" title="High Contrast"><span aria-hidden="true">A</span></a>
                        </li>
                        <li class="dropdown-item">
                            <a class="" href="javascript:void(0);" aria-label="Normal Contrast - Selected" title="Normal Contrast - Selected"><span aria-hidden="true">A</span> </a>
                        </li> -->
                    </ul>
                </li>
                <li class="nav-item dropdown py-2 px-3">
                    <a class="nav-link dropdown-toggle" href="#" title="Accessibility Links" aria-label="Accessibility Links" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        English
                    </a>
                    <ul class="dropdown-menu">
                        <li class="dropdown-item"><a lang="hi" hreflang="hi-IN" href="https://mandsaur.nic.in/" aria-label="हिन्दी" title="हिन्दी">हिन्दी</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
    <div class="top-header">
        <div class="container">
            <div class="navbar-header">
                <div class="row">
                    <div class="col-lg-8 logos">
                        <h2 class="nav-item logo_nmc mb-0 d-flex gap-2 align-items-center">
                            <a href="<?= base_url(route_to('/')) ?>" title="Logo" class="logo">
                                <img src="<?php echo base_url('FrontTheme/images/mp-logo.jpg') ?>" alt="MP logo" />
                            </a>

                            <span>Muncipal council, Barwaha <br> नगर पालिका परिषद, बड़वाह </span>
                        </h2>
                    </div>
                    <div id="menu--mohe" class="col-md-4 menu d-none menu--mohe d-md-block pt-4">
                        <ul class="text-right" id="pcontent">
                            <li class="social_tab">
                                <a href="https://www.facebook.com/" target="_blank" class="menu__item">
                                    <span class="menu__item-name">
                                        <i class="fab fa-facebook-square"></i>
                                    </span>
                                </a>
                            </li>
                            <li class="social_tab" style="color: black">
                                <a href class="menu__item">
                                    <span class="menu__item-name">
                                        <i class="fab fa-instagram-square"></i>
                                    </span>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <button class="btn btn-mobil-bar" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample" aria-controls="offcanvasExample">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </div>
    <div class="menu-sec">
        <div class="row m-0">
            <nav role="navigation" class="navbar navbar-default mainmenu">
                <div id="menu--mohe" class="menu d-none menu--mohe d-md-none d-lg-block" style="background-color: none">
                    <ul class="pt-2" style="padding-left: 70px" id>
                        <li class="nav-item">
                            <a class="menu__item" href="/">
                                <span class="menu__item-name">Home</span>
                                <!--<span class="menu__item-label">Barwaha</span>-->
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="menu__item" href="<?= base_url(route_to('Parishad')) ?>">
                                <span class="menu__item-name">Parishad</span>
                                <!--<span class="menu__item-label">Barwaha</span>-->
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="menu__item" href="#">
                                <span class="menu__item-name">
                                    Our Barwaha <i class="fa fa-caret-down"></i></span>
                            </a>
                            <ul>
                                <li>
                                    <a href="<?= base_url(route_to('aboutus')) ?>"> About Barwaha </a>
                                </li>
                                <li>
                                    <a href="<?= base_url(route_to('map')) ?>"> MAP </a>
                                </li>
                                <li>
                                    <a href="<?= base_url(route_to('howtoreach')) ?>"> How to Reach </a>
                                </li>

                                <li>
                                    <a href="<?= base_url(route_to('placestovisit')) ?>"> Places to visit </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="menu__item" href="#">
                                <span class="menu__item-name">
                                    Department <i class="fa fa-caret-down"></i></span>
                            </a>
                            <ul>
                                <li><a href="404.html" aria-current="page">Health and
                                        Environment</a></li>
                                <li><a href="404.html">Education,
                                        Social Justice, Food and Culture</a></li>
                                <li><a href="404.html">Planning and
                                        Rehabilitation</a></li>
                                <li><a href="404.html">Public Relations and
                                        Library</a></li>
                                <li><a href="404.html">Power</a></li>
                                <li><a href="404.html">Engineering</a></li>
                                <li><a href="404.html">Revenue and Project</a></li>
                                <li><a href="404.html">Accounting</a></li>
                                <li><a href="404.html">J.N.N.U.R.M.</a></li>
                                <li><a href="404.html">M.P.U.S.P.</a></li>
                                <li><a href="404.html">General Administration</a></li>
                            </ul>
                        </li>

                        <li class="nav-item">
                            <a class="menu__item" href="#">
                                <span class="menu__item-name">Business Help<i class="fa fa-caret-down"></i></span>
                            </a>
                            <ul>
                                <li>
                                    <a href> Hoarding </a>
                                    <ul>
                                        <li>
                                            <a href="https://www.mpenagarpalika.gov.in/irj/portal/anonymous?NavigationTarget=navurl://114dd4921fa93d636049062e9f568c0e" target="_blank">
                                                <i class="fas fa-dot-circle"></i>
                                                Hoarding
                                            </a>
                                        </li>
                                        <li>
                                            <a href="https://www.mpenagarpalika.gov.in/irj/portal/anonymous#" target="_blank">
                                                <i class="fas fa-dot-circle"></i>
                                                Hoarding Registeration
                                            </a>
                                        </li>
                                        <li>
                                            <a href="https://www.mpenagarpalika.gov.in/irj/portal/anonymous?NavigationTarget=navurl://d165cffe52f69b6b5d8c220538525302" target="_blank">
                                                <i class="fas fa-dot-circle"></i>
                                                Hoarding Registeration Application
                                            </a>
                                        </li>
                                        <li>
                                            <a href="https://www.mpenagarpalika.gov.in/irj/portal/anonymous#" target="_blank">
                                                <i class="fas fa-dot-circle"></i>
                                                Hoarding New Application
                                            </a>
                                        </li>
                                        <li>
                                            <a href="https://www.mpenagarpalika.gov.in/irj/portal/anonymous?NavigationTarget=navurl://54b2cb41e22fec65599889379cf44a99" target="_blank">
                                                <i class="fas fa-dot-circle"></i>
                                                Payment for Hoarding
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href> Trade / Commercial (Non-Food) </a>
                                    <ul>
                                        <li>
                                            <a href="https://www.mpenagarpalika.gov.in/irj/go/km/docs/documents/Public%20Documents/Citizen%20Services/Trade%20License/Trade%20License%20Procedure.pdf" target="_blank">
                                                <i class="fas fa-dot-circle"></i>Trade / Commercial
                                                License Procedure
                                            </a>
                                        </li>
                                        <li>
                                            <a href="https://www.mpenagarpalika.gov.in/irj/go/km/docs/documents/Public%20Documents/Citizen%20Services/Trade%20License/Trade%20License%20Procedure%20SOP.pdf" target="_blank">
                                                <i class="fas fa-dot-circle"></i>Trade / Commercial
                                                License Procedure SOP
                                            </a>
                                        </li>
                                        <li>
                                            <a href="https://www.mpenagarpalika.gov.in:8000/sap/bc/webdynpro/sap/zcrm_trade_license?sap-client=500&sap-language=EN#" target="_blank">
                                                <i class="fas fa-dot-circle"></i>
                                                Online Form - Trade / Commercial License
                                            </a>
                                        </li>

                                        <li>
                                            <a href="https://www.mpenagarpalika.gov.in:8000/sap/bc/webdynpro/sap/ztrade_lic_online#" target="_blank">
                                                <i class="fas fa-dot-circle"></i>Trade License/
                                                Commercial/Renewal - Payment/Status tracking
                                            </a>
                                        </li>
                                        <li>
                                            <a href="https://www.mpenagarpalika.gov.in:8000/sap/bc/webdynpro/sap/ztrade_cert_download#" target="_blank">
                                                <i class="fas fa-dot-circle"></i>Download Trade
                                                License Certificate
                                            </a>
                                        </li>
                                        <li>
                                            <a href="https://www.mpenagarpalika.gov.in:8000/sap/bc/webdynpro/sap/ztrade_lic_online#" target="_blank">
                                                <i class="fas fa-dot-circle"></i>Trade License
                                                Ledger Report
                                            </a>
                                        </li>
                                        <li>
                                            <a href="https://www.mpenagarpalika.gov.in/irj/portal/anonymous?NavigationTarget=navurl://13650b632b39e25830a909207de828d9" target="_blank">
                                                <i class="fas fa-dot-circle"></i>Public Service
                                                Gurantee
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href>
                                        Food License<img border="0" src="Images/new.gif" />
                                    </a>
                                    <ul>
                                        <li>
                                            <a href="https://www.mpenagarpalika.gov.in/irj/go/km/docs/documents/Public%20Documents/Citizen%20Services/Food%20License/Food%20License%20Procedure.pdf" target="_blank">
                                                <i class="fas fa-dot-circle"></i>Food License
                                                Procedure
                                            </a>
                                        </li>
                                        <li>
                                            <a href="https://www.mpenagarpalika.gov.in/irj/go/km/docs/documents/Public%20Documents/Citizen%20Services/Food%20License/Food%20License%20Procedure%20SOP.pdf" target="_blank">
                                                <i class="fas fa-dot-circle"></i>Food License
                                                Procedure SOP
                                            </a>
                                        </li>
                                        <li>
                                            <a href="https://www.mpenagarpalika.gov.in:8000/sap/bc/webdynpro/sap/zcrm_trade_license?TT=FL#" target="_blank">
                                                <i class="fas fa-dot-circle"></i>Online Form -
                                                Food/Commercial Issue
                                            </a>
                                        </li>
                                        <li>
                                            <a href="https://www.mpenagarpalika.gov.in:8000/sap/bc/webdynpro/sap/ztrade_lic_online#" target="_blank">
                                                <i class="fas fa-dot-circle"></i>Food
                                                License/Commercial/Renewal - Payment/Status Tracking
                                            </a>
                                        </li>
                                        <li>
                                            <a href="https://www.mpenagarpalika.gov.in:8000/sap/bc/webdynpro/sap/ztrade_cert_download#" target="_blank">
                                                <i class="fas fa-dot-circle"></i>Download Food
                                                License Certificate
                                            </a>
                                        </li>
                                        <li>
                                            <a href="https://www.mpenagarpalika.gov.in:8000/sap/bc/webdynpro/sap/ztrade_lic_online#" target="_blank">
                                                <i class="fas fa-dot-circle"></i>
                                                Food License Ledger Report
                                            </a>
                                        </li>
                                        <li>
                                            <a href="https://www.mpenagarpalika.gov.in/irj/portal/anonymous?NavigationTarget=navurl://ed889807d2dc9f9c9fa6f761ff727f30" target="_blank">
                                                <i class="fas fa-dot-circle"></i>
                                                Public Service Gurantee
                                            </a>
                                        </li>
                                    </ul>
                                </li>

                                <li>
                                    <a href="https://www.mpenagarpalika.gov.in:8001/sap/bc/webdynpro/sap/zre_online_pay?SAP-CLIENT=500&SAP-LANGUAGE=EN#">
                                        Rental Property / Shop Rent Online Payment
                                    </a>
                                </li>

                                <li>
                                    <a href>
                                        Auditorium-Public Amusement Places-Public Garden
                                        <img border="0" src="Images/new.gif" />
                                    </a>
                                    <ul>
                                        <li>
                                            <a href="https://www.mpenagarpalika.gov.in/irj/go/km/docs/documents/Public%20Documents/Citizen%20Services/Auditorium%20%26%20Amusement%20%26%20Public%20Garden/Auditorium-Public%20Amusement%20Places-Public%20Garden%20Procedure.pdf" target="_blank">
                                                <i class="fas fa-dot-circle"></i>Auditorium-Public
                                                Amusement Places-Public Garden Procedure
                                            </a>
                                        </li>
                                        <li>
                                            <a href="https://www.mpenagarpalika.gov.in/irj/go/km/docs/documents/Public%20Documents/Citizen%20Services/Auditorium%20%26%20Amusement%20%26%20Public%20Garden/%2bAuditorium-Public%20Amusement%20Places-Public%20Garden%20SOP.pdf" target="_blank">
                                                <i class="fas fa-dot-circle"></i>Auditorium-Public
                                                Amusement Places-Public Garden SOP
                                            </a>
                                        </li>
                                        <li>
                                            <a href="https://www.mpenagarpalika.gov.in/irj/portal/anonymous?NavigationTarget=navurl://b79a9effe9af7790316732016e886298" target="_blank">
                                                <i class="fas fa-dot-circle"></i>Request For
                                                Auditorium/ Public Amusement Places/ Public Garden
                                            </a>
                                        </li>
                                        <li>
                                            <a href="https://www.mpenagarpalika.gov.in:8000/sap/bc/webdynpro/sap/zuser_charges_payment#" target="_blank">
                                                <i class="fas fa-dot-circle"></i>Status Check and
                                                Payment(All Services and Request)
                                            </a>
                                        </li>
                                        <li>
                                            <a href="https://www.mpenagarpalika.gov.in/irj/go/km/docs/documents/Public%20Documents/Citizen%20Services/Auditorium%20%26%20Amusement%20%26%20Public%20Garden/Public%20Service%20Guarantee.pdf" target="_blank">
                                                <i class="fas fa-dot-circle"></i>Public Service
                                                Gurantee
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href>
                                        Road Cutting & Restoration
                                        <img border="0" src="Images/new.gif" />
                                    </a>
                                    <ul>
                                        <li>
                                            <a href="https://www.mpenagarpalika.gov.in/irj/go/km/docs/documents/Public%20Documents/Citizen%20Services/Road%20Cutting%20%26%20Restoration/Road%20Cutting%20%26%20Restoration%20Procedure.pdf" target="_blank">
                                                <i class="fas fa-dot-circle"></i>Road Cutting &
                                                Restoration Procedure
                                            </a>
                                        </li>
                                        <li>
                                            <a href="https://www.mpenagarpalika.gov.in/irj/go/km/docs/documents/Public%20Documents/Citizen%20Services/Road%20Cutting%20%26%20Restoration/Road%20Cutting%20%26%20Restoration%20SOP.pdf" target="_blank">
                                                <i class="fas fa-dot-circle"></i>Road Cutting &
                                                Restoration SOP
                                            </a>
                                        </li>
                                        <li>
                                            <a href="https://www.mpenagarpalika.gov.in:8001/sap/bc/webdynpro/sap/zrc_application#" target="_blank">
                                                <i class="fas fa-dot-circle"></i>Road Cutting
                                                Application Form
                                            </a>
                                        </li>
                                        <li>
                                            <a href="https://www.mpenagarpalika.gov.in:8001/sap/bc/webdynpro/sap/zrc_track_application#" target="_blank">
                                                <i class="fas fa-dot-circle"></i>Track Application/
                                                Download Approval
                                            </a>
                                        </li>
                                        <li>
                                            <a href="https://www.mpenagarpalika.gov.in/irj/go/km/docs/documents/Public%20Documents/Citizen%20Services/Auditorium%20%26%20Amusement%20%26%20Public%20Garden/Public%20Service%20Guarantee.pdf" target="_blank">
                                                <i class="fas fa-dot-circle"></i>Public Service
                                                Gurantee
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>

                        <li class="nav-item">
                            <a class="menu__item" href="#">
                                <span class="menu__item-name">
                                    Citizen Services <i class="fa fa-caret-down"></i></span>
                                <!--<span class="menu__item-label">Services</span>-->
                            </a>
                            <ul>
                                <li>
                                    <a href> Birth certificate </a>
                                    <ul>
                                        <li>
                                            <a href="http://crsorgi.gov.in/web/index.php/auth/login" target="_blank">
                                                <i class="fas fa-dot-circle"></i>
                                                Online form
                                            </a>
                                        </li>
                                        <li>
                                            <a href="https://www.mpenagarpalika.gov.in/irj/portal/anonymous?NavigationTarget=navurl://56c26b81f1b1757f64e9bad3353a80ce" target="_blank">
                                                <i class="fas fa-dot-circle"></i>
                                                Download birth certificate
                                            </a>
                                        </li>
                                        <li>
                                            <a href="https://www.mpenagarpalika.gov.in:8000/sap/bc/webdynpro/sap/zcrm_statical_dashboard?type=ZBRT&sap-client=500&sap-language=EN#" target="_blank">
                                                <i class="fas fa-dot-circle"></i>
                                                Birth certificate statistics
                                            </a>
                                        </li>
                                        <li>
                                            <a href="https://www.mpenagarpalika.gov.in/irj/go/km/docs/documents/Public%20Documents/EODB/Important%20Notice.pdf" target="_blank">
                                                <i class="fas fa-dot-circle"></i>
                                                Important notice
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href> Death certificate </a>
                                    <ul>
                                        <li>
                                            <a href="http://crsorgi.gov.in/web/index.php/auth/login" target="_blank">
                                                <i class="fas fa-dot-circle"></i>
                                                Online form
                                            </a>
                                        </li>
                                        <li>
                                            <a href="https://www.mpenagarpalika.gov.in/irj/portal/anonymous?NavigationTarget=navurl://6e270b6f1b8f7cca4bc0599a129bbec3" target="_blank">
                                                <i class="fas fa-dot-circle"></i>
                                                Download Death certificate
                                            </a>
                                        </li>
                                        <li>
                                            <a href="https://www.mpenagarpalika.gov.in:8000/sap/bc/webdynpro/sap/zcrm_statical_dashboard?type=ZDEA&sap-client=500&sap-language=EN" target="_blank">
                                                <i class="fas fa-dot-circle"></i>
                                                Death certificate statistics
                                            </a>
                                        </li>
                                        <li>
                                            <a href="https://www.mpenagarpalika.gov.in/irj/go/km/docs/documents/Public%20Documents/EODB/Important%20Notice.pdf" target="_blank">
                                                <i class="fas fa-dot-circle"></i>
                                                Important notice
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href> Marriage Registration </a>
                                    <ul>
                                        <li>
                                            <a href="https://www.mpenagarpalika.gov.in/irj/portal/anonymous?NavigationTarget=navurl://ce05bc9af52f53ad1f58387f2bab3198" target="_blank">
                                                <i class="fas fa-dot-circle"></i>
                                                Registration
                                            </a>
                                        </li>
                                        <li>
                                            <a href="https://www.mpenagarpalika.gov.in/irj/portal/anonymous?NavigationTarget=navurl://78f852682ffd97574b5d8887c04b3ad9" target="_blank">
                                                <i class="fas fa-dot-circle"></i>
                                                online form
                                            </a>
                                        </li>
                                        <li>
                                            <a href="https://www.mpenagarpalika.gov.in/irj/portal/anonymous?NavigationTarget=navurl://7052fc0ae161d14daee02606f15b046b" target="_blank">
                                                <i class="fas fa-dot-circle"></i>
                                                Download
                                            </a>
                                        </li>
                                        <li>
                                            <a href="https://www.mpenagarpalika.gov.in:8000/sap/bc/webdynpro/sap/zcrm_statical_dashboard?type=ZMRG&sap-client=500&sap-language=EN#" target="_blank">
                                                <i class="fas fa-dot-circle"></i>
                                                Statistics
                                            </a>
                                        </li>
                                        <li>
                                            <a href="https://www.mpenagarpalika.gov.in/irj/portal/anonymous?NavigationTarget=navurl://3c08f2262af1af9d42ccace70d6949d4" target="_blank">
                                                <i class="fas fa-dot-circle"></i>
                                                Payment for Marriage Registration
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href> Property Tax </a>
                                    <ul>
                                        <li>
                                            <a href="https://www.mpenagarpalika.gov.in:8005/sap/bc/webdynpro/sap/zlogin?sap-client=500&sap-language=EN#" target="_blank">
                                                <i class="fas fa-dot-circle"></i>
                                                Citizen login
                                            </a>
                                        </li>
                                        <li>
                                            <a href="https://www.mpenagarpalika.gov.in:8005/sap/bc/webdynpro/sap/zpt_qpay?sap-client=500&sap-language=EN#" target="_blank">
                                                <i class="fas fa-dot-circle"></i>
                                                Quick Pay
                                            </a>
                                        </li>
                                        <li>
                                            <a href="https://www.mpenagarpalika.gov.in:8005/sap/bc/webdynpro/sap/Zpt_wd_statistics?sap-client=500&sap-language=EN#" target="_blank">
                                                <i class="fas fa-dot-circle"></i>
                                                Registered property statistics
                                            </a>
                                        </li>
                                        <li>
                                            <a href="https://www.mpenagarpalika.gov.in:8005/sap/bc/webdynpro/sap/zpt_par#" target="_blank">
                                                <i class="fas fa-dot-circle"></i>
                                                Partial payment
                                            </a>
                                        </li>
                                        <li>
                                            <a href="https://www.mpenagarpalika.gov.in:8005/sap/bc/webdynpro/sap/zpt_qpay_old_id?sap-client=500&sap-language=EN#" target="_blank">
                                                <i class="fas fa-dot-circle"></i>
                                                Quick pay by old property id
                                            </a>
                                        </li>
                                        <li>
                                            <a href="https://www.mpenagarpalika.gov.in:8005/SAP/BC/WEBDYNPRO/SAP/ZPT_NO_DUES_CERTIFICATE?sap-client=500&sap-language=EN#" target="_blank">
                                                <i class="fas fa-dot-circle"></i>
                                                No dues certificate
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href> Fire services </a>
                                    <ul>
                                        <li>
                                            <a href="https://www.mpenagarpalika.gov.in/irj/portal/anonymous?NavigationTarget=navurl://5609ad0982baf9e44b71141197c5df61" target="_blank">
                                                <i class="fas fa-dot-circle"></i>
                                                Fire services
                                            </a>
                                        </li>
                                        <li>
                                            <a href="https://www.mpenagarpalika.gov.in/irj/portal/anonymous?NavigationTarget=navurl://0d32515a9ab65f4c05e35d36676c2952" target="_blank">
                                                <i class="fas fa-dot-circle"></i>
                                                Online form- Fire NOC
                                            </a>
                                        </li>
                                        <li>
                                            <a href="https://www.mpenagarpalika.gov.in/irj/portal/anonymous?NavigationTarget=navurl://af26d8b8c5f5a73c78864d36fe169929" target="_blank">
                                                <i class="fas fa-dot-circle"></i>
                                                Resubmission Application Form for Fire NOC
                                            </a>
                                        </li>
                                        <li>
                                            <a href="https://www.mpenagarpalika.gov.in:8000/sap/bc/webdynpro/sap/zcrm_fire_noc?sap-client=500&sap-language=EN#" target="_blank">
                                                <i class="fas fa-dot-circle"></i>
                                                Download fire noc
                                            </a>
                                        </li>
                                        <li>
                                            <a href="https://www.mpenagarpalika.gov.in/irj/portal/anonymous?NavigationTarget=navurl://ea6030f51c1a5c736d45c883b7f0e7de" target="_blank">
                                                <i class="fas fa-dot-circle"></i>
                                                Temporary Renewal Form for Fire NOC (Building)
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href> Service on Request </a>
                                    <ul class="big_w">
                                        <li>
                                            <a href="https://www.mpenagarpalika.gov.in/irj/portal/anonymous?NavigationTarget=navurl://e4df36848c88597820bd1f2cffff9a02" target="_blank">
                                                <i class="fas fa-dot-circle"></i>
                                                About Service on Request
                                            </a>
                                        </li>
                                        <li>
                                            <a href="https://www.mpenagarpalika.gov.in/irj/portal/anonymous?NavigationTarget=navurl://11e71fab5cc6b0a928c2006096ff7c96" target="_blank">
                                                <i class="fas fa-dot-circle"></i>
                                                Request for Water Tanker(Paid Service)
                                            </a>
                                        </li>
                                        <li>
                                            <a href="https://www.mpenagarpalika.gov.in/irj/portal/anonymous?NavigationTarget=navurl://94afe997448434cdec78ad87e5039a68" target="_blank">
                                                <i class="fas fa-dot-circle"></i>
                                                Request for Septic Tank & Sewerage Cleaning(Paid
                                                Service)
                                            </a>
                                        </li>
                                        <li>
                                            <a href="https://www.mpenagarpalika.gov.in/irj/portal/anonymous?NavigationTarget=navurl://5eb676187b053830115b3e64febfd933" target="_blank">
                                                <i class="fas fa-dot-circle"></i>
                                                Request for Litter Collection(Paid Service)
                                            </a>
                                        </li>
                                        <li>
                                            <a href="https://www.mpenagarpalika.gov.in/irj/portal/anonymous?NavigationTarget=navurl://99c021e9bed72fabeab33a90086c9775" target="_blank">
                                                <i class="fas fa-dot-circle"></i>
                                                Request for Debris Collection(Paid Service)
                                            </a>
                                        </li>
                                        <li>
                                            <a href="https://www.mpenagarpalika.gov.in/irj/portal/anonymous?NavigationTarget=navurl://66ec54d41ae0ec7d91e4b2dd47ac0bdb" target="_blank">
                                                <i class="fas fa-dot-circle"></i>
                                                Request for Evidence Certificate & Fire
                                                Extinguishing Service(Paid Service)
                                            </a>
                                        </li>
                                        <li>
                                            <a href="https://www.mpenagarpalika.gov.in/irj/portal/anonymous?NavigationTarget=navurl://a2a919366bfcbea3a4125cc8f732a2ad" target="_blank">
                                                <i class="fas fa-dot-circle"></i>
                                                Request for Ambulance(Free Service)
                                            </a>
                                        </li>
                                        <li>
                                            <a href="https://www.mpenagarpalika.gov.in/irj/portal/anonymous?NavigationTarget=navurl://856dbf1a1e9c5c17c05ba4ab630c416c" target="_blank">
                                                <i class="fas fa-dot-circle"></i>
                                                Request for Mobile Toilet(Free Service)
                                            </a>
                                        </li>
                                        <li>
                                            <a href="https://www.mpenagarpalika.gov.in/irj/portal/anonymous?NavigationTarget=navurl://1acae572a196353f383a52ac61f74068" target="_blank">
                                                <i class="fas fa-dot-circle"></i>
                                                Request for Funeral Van(Hearse)(Free Service)
                                            </a>
                                        </li>
                                        <li>
                                            <a href="https://www.mpenagarpalika.gov.in:8000/sap/bc/webdynpro/sap/zuser_charges_payment#" target="_blank">
                                                <i class="fas fa-dot-circle"></i>
                                                Status Check and Payment
                                            </a>
                                        </li>
                                        <li>
                                            <a href="https://www.mpenagarpalika.gov.in:8000/sap/bc/webdynpro/sap/zcrm_statical_dashboard?type=YTUC&sap-client=500&sap-language=EN#" target="_blank">
                                                <i class="fas fa-dot-circle"></i>
                                                Service on Request Statistics
                                            </a>
                                        </li>
                                    </ul>
                                </li>

                                <li>
                                    <a href="#"> Tree cutting </a>
                                    <ul class="big_w">
                                        <li>
                                            <a href="https://www.mpenagarpalika.gov.in/irj/portal/anonymous?NavigationTarget=navurl://467cda5ec2df9e2773e531bd43f1061e" target="_blank">
                                                <i class="fas fa-dot-circle"></i>
                                                Tree cutting procedure
                                            </a>
                                        </li>
                                        <li>
                                            <a href="https://www.mpenagarpalika.gov.in:8000/sap/bc/webdynpro/sap/zcrm_tree_cut?sap-client=500&sap-language=EN#" target="_blank">
                                                <i class="fas fa-dot-circle"></i>
                                                Request for Tree cutting/ trimming (paid services)
                                            </a>
                                        </li>
                                        <li>
                                            <a href="https://www.mpenagarpalika.gov.in:8000/sap/bc/webdynpro/sap/zcrm_tree_login#" target="_blank">
                                                <i class="fas fa-dot-circle"></i>
                                                Tree cutting login
                                            </a>
                                        </li>
                                        <li>
                                            <a href="https://www.mpenagarpalika.gov.in/irj/portal/anonymous?NavigationTarget=navurl://e4797d5e3ba06ab6989e5162b4d455e1" target="_blank">
                                                <i class="fas fa-dot-circle"></i>
                                                Status Check and Payment (Tree Cutting Application)
                                            </a>
                                        </li>
                                        <li>
                                            <a href="https://www.mpenagarpalika.gov.in/irj/portal/anonymous?NavigationTarget=navurl://eabf0835627d61ebf3513605cdfca441" target="_blank">
                                                <i class="fas fa-dot-circle"></i>
                                                Download Tree Cutting Certificate
                                            </a>
                                        </li>
                                        <li>
                                            <a href="https://www.mpenagarpalika.gov.in/irj/portal/anonymous?NavigationTarget=navurl://85f5f5386eb8c09c791950ff9b0e169e" target="_blank">
                                                <i class="fas fa-dot-circle"></i>
                                                Tree Transit Procedure
                                            </a>
                                        </li>
                                        <li>
                                            <a href="https://www.mpenagarpalika.gov.in/irj/portal/anonymous?NavigationTarget=navurl://e7200de1e875aa9dcb581afa00e9dd6e&NavMode=3" target="_blank">
                                                <i class="fas fa-dot-circle"></i>
                                                Request for Tree transit (paid services)
                                            </a>
                                        </li>
                                        <li>
                                            <a href="https://www.mpenagarpalika.gov.in/irj/portal/anonymous?NavigationTarget=navurl://c1cb3346719d921519549998fb747e0f&NavMode=3" target="_blank">
                                                <i class="fas fa-dot-circle"></i>
                                                Tree Transit Login
                                            </a>
                                        </li>
                                        <li>
                                            <a href="https://www.mpenagarpalika.gov.in/irj/portal/anonymous?NavigationTarget=navurl://72b3020bf306cc9144b344e75b34843c" target="_blank">
                                                <i class="fas fa-dot-circle"></i>
                                                Tree Transit Payment
                                            </a>
                                        </li>
                                        <li>
                                            <a href="https://www.mpenagarpalika.gov.in/irj/portal/anonymous?NavigationTarget=navurl://057d7d2126d5317852b5f4ee7f998eb8" target="_blank">
                                                Download Tree Transit Certificate
                                            </a>
                                        </li>
                                    </ul>
                                </li>

                                <li>
                                    <a href> Water Connection </a>
                                    <ul>
                                        <li>
                                            <a href="https://www.mpenagarpalika.gov.in/irj/portal/anonymous?NavigationTarget=navurl://76962d204b4432c611435aabc08d48fb" target="_blank">
                                                <i class="fas fa-dot-circle"></i>
                                                Water New Connection Procedure
                                            </a>
                                        </li>
                                        <li>
                                            <a href="https://www.mpenagarpalika.gov.in:8001/sap/bc/webdynpro/sap/zwt_new_connection#" target="_blank">
                                                <i class="fas fa-dot-circle"></i>
                                                Water new connection
                                            </a>
                                        </li>
                                        <li>
                                            <a href="https://www.mpenagarpalika.gov.in:8001/sap/bc/webdynpro/sap/zwt_wd_billpay?sap-client=500#" target="_blank">
                                                <i class="fas fa-dot-circle"></i>
                                                Water bill payment
                                            </a>
                                        </li>
                                        <li>
                                            <a href="https://www.mpenagarpalika.gov.in:8001/sap/bc/webdynpro/sap/zwt_track#" target="_blank">
                                                <i class="fas fa-dot-circle"></i>
                                                Water Connection Application track
                                            </a>
                                        </li>
                                        <li>
                                            <a href="https://www.mpenagarpalika.gov.in:8001/sap/bc/webdynpro/sap/zwt_water_tariff#" target="_blank">
                                                <i class="fas fa-dot-circle"></i>
                                                Water tariff
                                            </a>
                                        </li>
                                        <li>
                                            <a href="https://www.mpenagarpalika.gov.in:8001/SAP/BC/WEBDYNPRO/SAP/ZWT_USERPAY#" target="_blank">
                                                <i class="fas fa-dot-circle"></i>
                                                Payment for new connection demand
                                            </a>
                                        </li>
                                        <li>
                                            <a href="https://www.mpenagarpalika.gov.in:8001/SAP/BC/WEBDYNPRO/SAP/ZWT_mis_count#" target="_blank">
                                                <i class="fas fa-dot-circle"></i>
                                                Water Connection Statistics
                                            </a>
                                        </li>
                                    </ul>
                                </li>

                                <li>
                                    <a href="https://www.mpenagarpalika.gov.in/irj/portal/anonymous?NavigationTarget=navurl://db46d7a7ee7b3658e877771b6333a34d" target="_blank">
                                        Other Services
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a class="menu__item" href="<?= base_url(route_to('contactus')) ?>">
                                <span class="menu__item-name" id="pcontent">
                                    Contact Us</span>
                                <!-- <span class="menu__item-label"> Get in touch </span>-->
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
</header>

<div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
    <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasExampleLabel">Menu</h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
        <nav role=”navigation” class="position-relative w-100">
            <ul class="d-flex flex-column gap-2 col-12">
                <li class="border-bottom py-1 d-block">
                    <a href="<?= base_url(route_to('/')) ?>"> <i class="fas fa-home"></i> Home </a>
                </li>
                <li class="border-bottom py-2 d-block">
                    <a data-bs-toggle="collapse" href="#about" role="button" aria-expanded="false" aria-controls="about">
                        <i class="fas fa-info-circle"></i>
                        Our Barwaha <i class="fas fa-caret-down float-right"></i>
                    </a>
                    <ul class="collapse ps-3" id="about">
                        <li>
                            <a href="abou<?= base_url(route_to('aboutus')) ?>"> About Barwaha </a>
                        </li>
                        <li>
                            <a href="<?= base_url(route_to('map')) ?>"> MAP </a>
                        </li>
                        <li>
                            <a href="<?= base_url(route_to('howtoreach')) ?>"> How to Reach </a>
                        </li>

                        <li>
                            <a href="<?= base_url(route_to('placestovisit')) ?>"> Places to visit </a>
                        </li>
                    </ul>
                </li>

                <li class="border-bottom py-2 d-block">
                    <a data-bs-toggle="collapse" href="#Business" role="button" aria-expanded="false" aria-controls="Business">
                        <i class="fas fa-business-time"></i> Business Help<i class="fa fa-caret-down float-right"></i>
                    </a>
                    <ul class="collapse px-3" id="Business">
                        <li>
                            <a href="#Business1" data-toggle="collapse" aria-expanded="false">
                                Hoarding <i class="fa fa-caret-down float-right"></i>
                            </a>
                            <ul class="collapse" id="Business1">
                                <li>
                                    <a href="https://www.mpenagarpalika.gov.in/irj/portal/anonymous?NavigationTarget=navurl://114dd4921fa93d636049062e9f568c0e" target="_blank">
                                        <i class="fas fa-dot-circle"></i>
                                        Hoarding
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.mpenagarpalika.gov.in/irj/portal/anonymous#" target="_blank">
                                        <i class="fas fa-dot-circle"></i>
                                        Hoarding Registeration
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.mpenagarpalika.gov.in/irj/portal/anonymous?NavigationTarget=navurl://d165cffe52f69b6b5d8c220538525302" target="_blank">
                                        <i class="fas fa-dot-circle"></i>
                                        Hoarding Registeration Application
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.mpenagarpalika.gov.in/irj/portal/anonymous#" target="_blank">
                                        <i class="fas fa-dot-circle"></i>
                                        Hoarding New Application
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.mpenagarpalika.gov.in/irj/portal/anonymous?NavigationTarget=navurl://54b2cb41e22fec65599889379cf44a99" target="_blank">
                                        <i class="fas fa-dot-circle"></i>
                                        Payment for Hoarding
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#Business2" data-toggle="collapse" aria-expanded="false">
                                Trade / Commercial (Non-Food)
                                <i class="fa fa-caret-down float-right"></i>
                            </a>
                            <ul class="collapse" id="Business2">
                                <li>
                                    <a href="https://www.mpenagarpalika.gov.in/irj/go/km/docs/documents/Public%20Documents/Citizen%20Services/Trade%20License/Trade%20License%20Procedure.pdf" target="_blank">
                                        <i class="fas fa-dot-circle"></i>Trade / Commercial License
                                        Procedure
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.mpenagarpalika.gov.in/irj/go/km/docs/documents/Public%20Documents/Citizen%20Services/Trade%20License/Trade%20License%20Procedure%20SOP.pdf" target="_blank">
                                        <i class="fas fa-dot-circle"></i>Trade / Commercial License
                                        Procedure SOP
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.mpenagarpalika.gov.in:8000/sap/bc/webdynpro/sap/zcrm_trade_license?sap-client=500&sap-language=EN#" target="_blank">
                                        <i class="fas fa-dot-circle"></i> Online Form - Trade /
                                        Commercial License
                                    </a>
                                </li>

                                <li>
                                    <a href="https://www.mpenagarpalika.gov.in:8000/sap/bc/webdynpro/sap/ztrade_lic_online#" target="_blank">
                                        <i class="fas fa-dot-circle"></i>Trade License/
                                        Commercial/Renewal - Payment/Status tracking
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.mpenagarpalika.gov.in:8000/sap/bc/webdynpro/sap/ztrade_cert_download#" target="_blank">
                                        <i class="fas fa-dot-circle"></i>Download Trade License
                                        Certificate
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.mpenagarpalika.gov.in:8000/sap/bc/webdynpro/sap/ztrade_lic_online#" target="_blank">
                                        <i class="fas fa-dot-circle"></i>Trade License Ledger Report
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.mpenagarpalika.gov.in/irj/portal/anonymous?NavigationTarget=navurl://13650b632b39e25830a909207de828d9" target="_blank">
                                        <i class="fas fa-dot-circle"></i>Public Service Gurantee
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#Business3" data-toggle="collapse" aria-expanded="false">
                                Food License<img border="0" src="Images/new.gif" /><i class="fa fa-caret-down float-right"></i>
                            </a>
                            <ul class="collapse" id="Business3">
                                <li>
                                    <a href="https://www.mpenagarpalika.gov.in/irj/go/km/docs/documents/Public%20Documents/Citizen%20Services/Food%20License/Food%20License%20Procedure.pdf" target="_blank">
                                        <i class="fas fa-dot-circle"></i>Food License Procedure
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.mpenagarpalika.gov.in/irj/go/km/docs/documents/Public%20Documents/Citizen%20Services/Food%20License/Food%20License%20Procedure%20SOP.pdf" target="_blank">
                                        <i class="fas fa-dot-circle"></i>Food License Procedure SOP
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.mpenagarpalika.gov.in:8000/sap/bc/webdynpro/sap/zcrm_trade_license?TT=FL#" target="_blank">
                                        <i class="fas fa-dot-circle"></i>Online Form -
                                        Food/Commercial Issue
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.mpenagarpalika.gov.in:8000/sap/bc/webdynpro/sap/ztrade_lic_online#" target="_blank">
                                        <i class="fas fa-dot-circle"></i>Food
                                        License/Commercial/Renewal - Payment/Status Tracking
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.mpenagarpalika.gov.in:8000/sap/bc/webdynpro/sap/ztrade_cert_download#" target="_blank">
                                        <i class="fas fa-dot-circle"></i>Download Food License
                                        Certificate
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.mpenagarpalika.gov.in:8000/sap/bc/webdynpro/sap/ztrade_lic_online#" target="_blank">
                                        <i class="fas fa-dot-circle"></i> Food License Ledger Report
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.mpenagarpalika.gov.in/irj/portal/anonymous?NavigationTarget=navurl://ed889807d2dc9f9c9fa6f761ff727f30" target="_blank">
                                        <i class="fas fa-dot-circle"></i> Public Service Gurantee
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li>
                            <a href="https://www.mpenagarpalika.gov.in:8001/sap/bc/webdynpro/sap/zre_online_pay?SAP-CLIENT=500&SAP-LANGUAGE=EN#">
                                Rental Property / Shop Rent Online Payment
                            </a>
                        </li>

                        <li>
                            <a href="#Business4" data-toggle="collapse" aria-expanded="false">
                                Auditorium-Public Amusement Places-Public Garden
                                <img border="0" src="Images/new.gif" /><i class="fa fa-caret-down float-right"></i>
                            </a>
                            <ul class="collapse" id="Business4">
                                <li>
                                    <a href="https://www.mpenagarpalika.gov.in/irj/go/km/docs/documents/Public%20Documents/Citizen%20Services/Auditorium%20%26%20Amusement%20%26%20Public%20Garden/Auditorium-Public%20Amusement%20Places-Public%20Garden%20Procedure.pdf" target="_blank">
                                        <i class="fas fa-dot-circle"></i>Auditorium-Public Amusement
                                        Places-Public Garden Procedure
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.mpenagarpalika.gov.in/irj/go/km/docs/documents/Public%20Documents/Citizen%20Services/Auditorium%20%26%20Amusement%20%26%20Public%20Garden/%2bAuditorium-Public%20Amusement%20Places-Public%20Garden%20SOP.pdf" target="_blank">
                                        <i class="fas fa-dot-circle"></i>Auditorium-Public Amusement
                                        Places-Public Garden SOP
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.mpenagarpalika.gov.in/irj/portal/anonymous?NavigationTarget=navurl://b79a9effe9af7790316732016e886298" target="_blank">
                                        <i class="fas fa-dot-circle"></i>Request For Auditorium/
                                        Public Amusement Places/ Public Garden
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.mpenagarpalika.gov.in:8000/sap/bc/webdynpro/sap/zuser_charges_payment#" target="_blank">
                                        <i class="fas fa-dot-circle"></i>Status Check and
                                        Payment(All Services and Request)
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.mpenagarpalika.gov.in/irj/go/km/docs/documents/Public%20Documents/Citizen%20Services/Auditorium%20%26%20Amusement%20%26%20Public%20Garden/Public%20Service%20Guarantee.pdf" target="_blank">
                                        <i class="fas fa-dot-circle"></i>Public Service Gurantee
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#Business5" data-toggle="collapse" aria-expanded="false">
                                Road Cutting & Restoration
                                <img border="0" src="Images/new.gif" />
                                <i class="fa fa-caret-down float-right"></i>
                            </a>
                            <ul class="collapse" id="Business5">
                                <li>
                                    <a href="https://www.mpenagarpalika.gov.in/irj/go/km/docs/documents/Public%20Documents/Citizen%20Services/Road%20Cutting%20%26%20Restoration/Road%20Cutting%20%26%20Restoration%20Procedure.pdf" target="_blank">
                                        <i class="fas fa-dot-circle"></i>Road Cutting & Restoration
                                        Procedure
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.mpenagarpalika.gov.in/irj/go/km/docs/documents/Public%20Documents/Citizen%20Services/Road%20Cutting%20%26%20Restoration/Road%20Cutting%20%26%20Restoration%20SOP.pdf" target="_blank">
                                        <i class="fas fa-dot-circle"></i>Road Cutting & Restoration
                                        SOP
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.mpenagarpalika.gov.in:8001/sap/bc/webdynpro/sap/zrc_application#" target="_blank">
                                        <i class="fas fa-dot-circle"></i>Road Cutting Application
                                        Form
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.mpenagarpalika.gov.in:8001/sap/bc/webdynpro/sap/zrc_track_application#" target="_blank">
                                        <i class="fas fa-dot-circle"></i>Track Application/ Download
                                        Approval
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.mpenagarpalika.gov.in/irj/go/km/docs/documents/Public%20Documents/Citizen%20Services/Auditorium%20%26%20Amusement%20%26%20Public%20Garden/Public%20Service%20Guarantee.pdf" target="_blank">
                                        <i class="fas fa-dot-circle"></i>Public Service Gurantee
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>

                <li class="border-bottom py-2 d-block">
                    <a data-bs-toggle="collapse" href="#Department" role="button" aria-expanded="false" aria-controls="Department">
                        <i class="fas fa-business-time"></i> Department <i class="fa fa-caret-down float-right"></i>
                    </a>
                    <ul class="collapse px-3" id="Department">
                        <li><a href="404.html" aria-current="page">Health and
                                Environment</a></li>
                        <li><a href="404.html">Education,
                                Social Justice, Food and Culture</a></li>
                        <li><a href="404.html">Planning and
                                Rehabilitation</a></li>
                        <li><a href="404.html">Public Relations and
                                Library</a></li>
                        <li><a href="404.html">Power</a></li>
                        <li><a href="404.html">Engineering</a></li>
                        <li><a href="404.html">Revenue and Project</a></li>
                        <li><a href="404.html">Accounting</a></li>
                        <li><a href="404.html">J.N.N.U.R.M.</a></li>
                        <li><a href="404.html">M.P.U.S.P.</a></li>
                        <li><a href="404.html">General Administration</a></li>
                    </ul>
                </li>

                <li class="border-bottom py-2 d-block">
                    <a data-bs-toggle="collapse" href="#Citizen" role="button" aria-expanded="false" aria-controls="Citizen">
                        <i class="fas fa-user-cog"></i>
                        Citizen Services <i class="fas fa-caret-down float-right"></i>
                    </a>
                    <ul class="collapse px-3" id="Citizen">
                        <li>
                            <a href="#Citizen1" data-toggle="collapse" aria-expanded="false">
                                Birth certificate <i class="fas fa-caret-down float-right"></i>
                            </a>
                            <ul class="collapse" id="Citizen1">
                                <li>
                                    <a href="http://crsorgi.gov.in/web/index.php/auth/login" target="_blank">
                                        <i class="fas fa-dot-circle"></i> Online form
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.mpenagarpalika.gov.in/irj/portal/anonymous?NavigationTarget=navurl://56c26b81f1b1757f64e9bad3353a80ce" target="_blank">
                                        <i class="fas fa-dot-circle"></i>
                                        Download birth certificate
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.mpenagarpalika.gov.in:8000/sap/bc/webdynpro/sap/zcrm_statical_dashboard?type=ZBRT&sap-client=500&sap-language=EN#" target="_blank">
                                        <i class="fas fa-dot-circle"></i> Birth certificate
                                        statistics
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.mpenagarpalika.gov.in/irj/go/km/docs/documents/Public%20Documents/EODB/Important%20Notice.pdf" target="_blank">
                                        <i class="fas fa-dot-circle"></i>
                                        Important notice
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#Citizen2" data-toggle="collapse" aria-expanded="false">
                                Death certificate <i class="fas fa-caret-down float-right"></i>
                            </a>
                            <ul class="collapse" id="Citizen2">
                                <li>
                                    <a href="http://crsorgi.gov.in/web/index.php/auth/login" target="_blank">
                                        <i class="fas fa-dot-circle"></i> Online form
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.mpenagarpalika.gov.in/irj/portal/anonymous?NavigationTarget=navurl://6e270b6f1b8f7cca4bc0599a129bbec3" target="_blank">
                                        <i class="fas fa-dot-circle"></i>
                                        Download Death certificate
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.mpenagarpalika.gov.in:8000/sap/bc/webdynpro/sap/zcrm_statical_dashboard?type=ZDEA&sap-client=500&sap-language=EN" target="_blank">
                                        <i class="fas fa-dot-circle"></i> Death certificate
                                        statistics
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.mpenagarpalika.gov.in/irj/go/km/docs/documents/Public%20Documents/EODB/Important%20Notice.pdf" target="_blank">
                                        <i class="fas fa-dot-circle"></i>
                                        Important notice
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#Citizen3" data-toggle="collapse" aria-expanded="false">
                                Marriage Registration
                                <i class="fas fa-caret-down float-right"></i>
                            </a>
                            <ul class="collapse" id="Citizen3">
                                <li>
                                    <a href="https://www.mpenagarpalika.gov.in/irj/portal/anonymous?NavigationTarget=navurl://ce05bc9af52f53ad1f58387f2bab3198" target="_blank">
                                        <i class="fas fa-dot-circle"></i>
                                        Registration
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.mpenagarpalika.gov.in/irj/portal/anonymous?NavigationTarget=navurl://78f852682ffd97574b5d8887c04b3ad9" target="_blank">
                                        <i class="fas fa-dot-circle"></i> online form
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.mpenagarpalika.gov.in/irj/portal/anonymous?NavigationTarget=navurl://7052fc0ae161d14daee02606f15b046b" target="_blank">
                                        <i class="fas fa-dot-circle"></i>
                                        Download
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.mpenagarpalika.gov.in:8000/sap/bc/webdynpro/sap/zcrm_statical_dashboard?type=ZMRG&sap-client=500&sap-language=EN#" target="_blank">
                                        <i class="fas fa-dot-circle"></i>
                                        Statistics
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.mpenagarpalika.gov.in/irj/portal/anonymous?NavigationTarget=navurl://3c08f2262af1af9d42ccace70d6949d4" target="_blank">
                                        <i class="fas fa-dot-circle"></i>
                                        Payment for Marriage Registration
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#Citizen4" data-toggle="collapse" aria-expanded="false">
                                Property Tax <i class="fas fa-caret-down float-right"></i>
                            </a>
                            <ul class="collapse" id="Citizen4">
                                <li>
                                    <a href="https://www.mpenagarpalika.gov.in:8005/sap/bc/webdynpro/sap/zlogin?sap-client=500&sap-language=EN#" target="_blank">
                                        <i class="fas fa-dot-circle"></i>
                                        Citizen login
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.mpenagarpalika.gov.in:8005/sap/bc/webdynpro/sap/zpt_qpay?sap-client=500&sap-language=EN#" target="_blank">
                                        <i class="fas fa-dot-circle"></i> Quick Pay
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.mpenagarpalika.gov.in:8005/sap/bc/webdynpro/sap/Zpt_wd_statistics?sap-client=500&sap-language=EN#" target="_blank">
                                        <i class="fas fa-dot-circle"></i>
                                        Registered property statistics
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.mpenagarpalika.gov.in:8005/sap/bc/webdynpro/sap/zpt_par#" target="_blank">
                                        <i class="fas fa-dot-circle"></i>
                                        Partial payment
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.mpenagarpalika.gov.in:8005/sap/bc/webdynpro/sap/zpt_qpay_old_id?sap-client=500&sap-language=EN#" target="_blank">
                                        <i class="fas fa-dot-circle"></i> Quick pay by old property
                                        id
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.mpenagarpalika.gov.in:8005/SAP/BC/WEBDYNPRO/SAP/ZPT_NO_DUES_CERTIFICATE?sap-client=500&sap-language=EN#" target="_blank">
                                        <i class="fas fa-dot-circle"></i> No dues certificate
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#Citizen5" data-toggle="collapse" aria-expanded="false">
                                Fire services <i class="fas fa-caret-down float-right"></i>
                            </a>
                            <ul class="collapse" id="Citizen5">
                                <li>
                                    <a href="https://www.mpenagarpalika.gov.in/irj/portal/anonymous?NavigationTarget=navurl://5609ad0982baf9e44b71141197c5df61" target="_blank">
                                        <i class="fas fa-dot-circle"></i> Fire services
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.mpenagarpalika.gov.in/irj/portal/anonymous?NavigationTarget=navurl://0d32515a9ab65f4c05e35d36676c2952" target="_blank">
                                        <i class="fas fa-dot-circle"></i> Online form- Fire NOC
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.mpenagarpalika.gov.in/irj/portal/anonymous?NavigationTarget=navurl://af26d8b8c5f5a73c78864d36fe169929" target="_blank">
                                        <i class="fas fa-dot-circle"></i>
                                        Resubmission Application Form for Fire NOC
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.mpenagarpalika.gov.in:8000/sap/bc/webdynpro/sap/zcrm_fire_noc?sap-client=500&sap-language=EN#" target="_blank">
                                        <i class="fas fa-dot-circle"></i>
                                        Download fire noc
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.mpenagarpalika.gov.in/irj/portal/anonymous?NavigationTarget=navurl://ea6030f51c1a5c736d45c883b7f0e7de" target="_blank">
                                        <i class="fas fa-dot-circle"></i>
                                        Temporary Renewal Form for Fire NOC (Building)
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#Citizen6" data-toggle="collapse" aria-expanded="false">
                                Service on Request <i class="fas fa-caret-down float-right"></i>
                            </a>
                            <ul class="collapse big_w" id="Citizen6">
                                <li>
                                    <a href="https://www.mpenagarpalika.gov.in/irj/portal/anonymous?NavigationTarget=navurl://e4df36848c88597820bd1f2cffff9a02" target="_blank">
                                        <i class="fas fa-dot-circle"></i> About Service on Request
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.mpenagarpalika.gov.in/irj/portal/anonymous?NavigationTarget=navurl://11e71fab5cc6b0a928c2006096ff7c96" target="_blank">
                                        <i class="fas fa-dot-circle"></i>
                                        Request for Water Tanker(Paid Service)
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.mpenagarpalika.gov.in/irj/portal/anonymous?NavigationTarget=navurl://94afe997448434cdec78ad87e5039a68" target="_blank">
                                        <i class="fas fa-dot-circle"></i>
                                        Request for Septic Tank & Sewerage Cleaning(Paid Service)
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.mpenagarpalika.gov.in/irj/portal/anonymous?NavigationTarget=navurl://5eb676187b053830115b3e64febfd933" target="_blank">
                                        <i class="fas fa-dot-circle"></i>
                                        Request for Litter Collection(Paid Service)
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.mpenagarpalika.gov.in/irj/portal/anonymous?NavigationTarget=navurl://99c021e9bed72fabeab33a90086c9775" target="_blank">
                                        <i class="fas fa-dot-circle"></i>
                                        Request for Debris Collection(Paid Service)
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.mpenagarpalika.gov.in/irj/portal/anonymous?NavigationTarget=navurl://66ec54d41ae0ec7d91e4b2dd47ac0bdb" target="_blank">
                                        <i class="fas fa-dot-circle"></i>
                                        Request for Evidence Certificate & Fire Extinguishing
                                        Service(Paid Service)
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.mpenagarpalika.gov.in/irj/portal/anonymous?NavigationTarget=navurl://a2a919366bfcbea3a4125cc8f732a2ad" target="_blank">
                                        <i class="fas fa-dot-circle"></i>
                                        Request for Ambulance(Free Service)
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.mpenagarpalika.gov.in/irj/portal/anonymous?NavigationTarget=navurl://856dbf1a1e9c5c17c05ba4ab630c416c" target="_blank">
                                        <i class="fas fa-dot-circle"></i>
                                        Request for Mobile Toilet(Free Service)
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.mpenagarpalika.gov.in/irj/portal/anonymous?NavigationTarget=navurl://1acae572a196353f383a52ac61f74068" target="_blank">
                                        <i class="fas fa-dot-circle"></i>
                                        Request for Funeral Van(Hearse)(Free Service)
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.mpenagarpalika.gov.in:8000/sap/bc/webdynpro/sap/zuser_charges_payment#" target="_blank">
                                        <i class="fas fa-dot-circle"></i> Status Check and Payment
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.mpenagarpalika.gov.in:8000/sap/bc/webdynpro/sap/zcrm_statical_dashboard?type=YTUC&sap-client=500&sap-language=EN#" target="_blank">
                                        <i class="fas fa-dot-circle"></i>
                                        Service on Request Statistics
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li>
                            <a href="#Citizen7" data-toggle="collapse" aria-expanded="false">
                                Tree cutting <i class="fas fa-caret-down float-right"></i>
                            </a>
                            <ul class="collapse big_w" id="Citizen7">
                                <li>
                                    <a href="https://www.mpenagarpalika.gov.in/irj/portal/anonymous?NavigationTarget=navurl://467cda5ec2df9e2773e531bd43f1061e" target="_blank">
                                        <i class="fas fa-dot-circle"></i> Tree cutting procedure
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.mpenagarpalika.gov.in:8000/sap/bc/webdynpro/sap/zcrm_tree_cut?sap-client=500&sap-language=EN#" target="_blank">
                                        <i class="fas fa-dot-circle"></i>
                                        Request for Tree cutting/ trimming (paid services)
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.mpenagarpalika.gov.in:8000/sap/bc/webdynpro/sap/zcrm_tree_login#" target="_blank">
                                        <i class="fas fa-dot-circle"></i> Tree cutting login
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.mpenagarpalika.gov.in/irj/portal/anonymous?NavigationTarget=navurl://e4797d5e3ba06ab6989e5162b4d455e1" target="_blank">
                                        <i class="fas fa-dot-circle"></i> Status Check and Payment
                                        (Tree Cutting Application)
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.mpenagarpalika.gov.in/irj/portal/anonymous?NavigationTarget=navurl://eabf0835627d61ebf3513605cdfca441" target="_blank">
                                        <i class="fas fa-dot-circle"></i>
                                        Download Tree Cutting Certificate
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.mpenagarpalika.gov.in/irj/portal/anonymous?NavigationTarget=navurl://85f5f5386eb8c09c791950ff9b0e169e" target="_blank">
                                        <i class="fas fa-dot-circle"></i> Tree Transit Procedure
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.mpenagarpalika.gov.in/irj/portal/anonymous?NavigationTarget=navurl://e7200de1e875aa9dcb581afa00e9dd6e&NavMode=3" target="_blank">
                                        <i class="fas fa-dot-circle"></i>
                                        Request for Tree transit (paid services)
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.mpenagarpalika.gov.in/irj/portal/anonymous?NavigationTarget=navurl://c1cb3346719d921519549998fb747e0f&NavMode=3" target="_blank">
                                        <i class="fas fa-dot-circle"></i> Tree Transit Login
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.mpenagarpalika.gov.in/irj/portal/anonymous?NavigationTarget=navurl://72b3020bf306cc9144b344e75b34843c" target="_blank">
                                        <i class="fas fa-dot-circle"></i> Tree Transit Payment
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.mpenagarpalika.gov.in/irj/portal/anonymous?NavigationTarget=navurl://057d7d2126d5317852b5f4ee7f998eb8" target="_blank">
                                        Download Tree Transit Certificate
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li>
                            <a href="#Citizen8" data-toggle="collapse" aria-expanded="false">
                                Water Connection <i class="fas fa-caret-down float-right"></i>
                            </a>
                            <ul class="collapse big_w" id="Citizen8">
                                <li>
                                    <a href="https://www.mpenagarpalika.gov.in/irj/portal/anonymous?NavigationTarget=navurl://76962d204b4432c611435aabc08d48fb" target="_blank">
                                        <i class="fas fa-dot-circle"></i> Water New Connection
                                        Procedure
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.mpenagarpalika.gov.in:8001/sap/bc/webdynpro/sap/zwt_new_connection#" target="_blank">
                                        <i class="fas fa-dot-circle"></i> Water new connection
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.mpenagarpalika.gov.in:8001/sap/bc/webdynpro/sap/zwt_wd_billpay?sap-client=500#" target="_blank">
                                        <i class="fas fa-dot-circle"></i> Water bill payment
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.mpenagarpalika.gov.in:8001/sap/bc/webdynpro/sap/zwt_track#" target="_blank">
                                        <i class="fas fa-dot-circle"></i> Water Connection
                                        Application track
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.mpenagarpalika.gov.in:8001/sap/bc/webdynpro/sap/zwt_water_tariff#" target="_blank">
                                        <i class="fas fa-dot-circle"></i> Water tariff
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.mpenagarpalika.gov.in:8001/SAP/BC/WEBDYNPRO/SAP/ZWT_USERPAY#" target="_blank">
                                        <i class="fas fa-dot-circle"></i>
                                        Payment for new connection demand
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.mpenagarpalika.gov.in:8001/SAP/BC/WEBDYNPRO/SAP/ZWT_mis_count#" target="_blank">
                                        <i class="fas fa-dot-circle"></i> Water Connection
                                        Statistics
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li>
                            <a href="https://www.mpenagarpalika.gov.in/irj/portal/anonymous?NavigationTarget=navurl://db46d7a7ee7b3658e877771b6333a34d" target="_blank">
                                Other Services
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="<?= base_url(route_to('contactus')) ?>"> <i class="fas fa-phone-square"></i> Contact
                        Us </a>
                </li>
            </ul>
        </nav>
    </div>
</div>