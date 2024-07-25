<div id="homeslider" class="carousel slide" data-bs-ride="true">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#homeslider" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#homeslider" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#homeslider" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="<?php echo base_url('FrontTheme/images/slide5.jpeg') ?>" class="d-block w-100" alt="">
        </div>
        <div class="carousel-item">
            <img src="<?php echo base_url('FrontTheme/images/slide2.webp') ?>" class="d-block w-100" alt="">
        </div>
        <div class="carousel-item">
            <img src="<?php echo base_url('FrontTheme/images/slide6.png') ?>" class="d-block w-100" alt="...">
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#homeslider" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#homeslider" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>

<section id="About" class="pt-5 pb-5">
    <p class="d-none">We are on the Home Page</p>
    <div class="container">
        <div class="row flex-column-reverse flex-md-row">
            <div class="col-md-6 __Aboutframe">
                <img src="<?php echo base_url('FrontTheme/images/aboutus.jpeg') ?>" class="img-fluid" />
            </div>
            <div class="col-md-6">
                <p class="d-none">Home page first paragraph</p>
                <content class="__AboutText">
                    <div class="heading">
                        <h2><b>Explore City</b></h2>
                        <span>Barwaha Jn.</span>
                        <label></label>
                    </div>
                    <p id="menucolor">
                        Barwaha is a municipality and sub district in Khargone district in the state of Madhya Pradesh, India situated on the banks of Narmada river. Barwaha is second biggest city of District after Khargone city. The Barwaha city is divided into 28 wards for which elections are held every 5 years. The Barwaha Municipality has population of 61,973 of which 32,940 are males while 29,033 are females as per report released by Census India 2011. Literacy rate of Barwaha is 87.27% higher than state average of 69.32%. In Barwaha, Male literacy is around 92.73% while female literacy rate is 81.23%. Barwaha Municipality has total administration over 10,133 houses to which it supplies basic a MapWikimedia | © OpenStreetMap Barwaha City menities like water and sewerage.
                    </p>
                    <a href="<?= base_url(route_to('aboutus')) ?>" class="btn_nagda mt-5 float-right">Read
                        More <i class="fas fa-long-arrow-alt-right"></i></a>

                </content>
            </div>
        </div>
    </div>
</section>

<section id="About" class="pt-5 pb-5 bg-light">
    <p class="d-none">Home page Second paragraph</p>
    <div class="container">
        <div class="row">
            <div class="col-md-6 mb-sm-3">
                <div class="card shadow-sm border-light">
                    <div class="card-header">Demographic</div>
                    <div class="card-body">
                        <ul class="list-group simple-list">
                            <li class="p-1 list-group-item border-bottom"><span class="text-primary mdi mdi-fire icon mr-1"></span>State<span class=" float-end font-weight-bolder">Madhya Pradesh</span></li>
                            <li class="p-1 list-group-item border-bottom"><span class="text-primary mdi mdi-fire icon mr-1"></span>Division<span class=" float-end font-weight-bolder">Indore</span></li>
                            <li class="p-1 list-group-item border-bottom"><span class="text-primary mdi mdi-fire icon mr-1"></span>Region<span class=" float-end font-weight-bolder">Nimar</span></li>
                            <li class="p-1 list-group-item border-bottom"><span class="text-primary mdi mdi-fire icon mr-1"></span>District<span class=" float-end font-weight-bolder">Khargone</span></li>
                            <li class="p-1 list-group-item border-bottom"><span class="text-primary mdi mdi-fire icon mr-1"></span>Block<span class=" float-end font-weight-bolder">Barwaha</span></li>
                            <li class="p-1 list-group-item border-bottom"><span class="text-primary mdi mdi-fire icon mr-1"></span>Population<span class=" float-end font-weight-bolder">38,740</span></li>
                            <li class="p-1 list-group-item border-bottom"><span class="text-primary mdi mdi-fire icon mr-1"></span>Co-Ordinates<span class=" float-end font-weight-bolder">22°10′59.98″N 76°04′0.12″E</span></li>
                            <li class="p-1 list-group-item border-bottom"><span class="text-primary mdi mdi-fire icon mr-1"></span>Time Zone<span class=" float-end font-weight-bolder">Indian (IST) (UTC+5:30)</span></li>
                            <li class="p-1 list-group-item border-bottom"><span class="text-primary mdi mdi-fire icon mr-1"></span>PIN Code<span class=" float-end font-weight-bolder">451111</span></li>
                            <li class="p-1 list-group-item border-bottom"><span class="text-primary mdi mdi-fire icon mr-1"></span>Languages<span class=" float-end font-weight-bolder">Hindi, English and Nimari</span></li>
                        </ul>
                    </div>
                </div>
                <div class="border d-flex gap-1 py-2 px-3 mt-2">
                    <div class="row align-items-center">
                        <div class="col-4">
                            <img src="<?php echo base_url('FrontTheme/images/President.jpg') ?>" alt="Rakesh Gupta" class="img-fluid">
                        </div>
                        <div class="col-8">
                            <p class="mb-0">
                                <strong>President</strong><br>
                                <span>Rakesh Gupta</span>
                            </p>
                        </div>
                    </div>
                    <div class="row align-items-center">
                        <div class="col-3">
                            <img src="<?php echo base_url('FrontTheme/images/demo.jpg') ?>" alt="Kuldeep Kinshuk" class="img-fluid">
                        </div>
                        <div class="col-9">
                            <p class="mb-0">
                                <strong>Chief Municipal Officer</strong><br>
                                <span>Kuldeep Kinshuk</span>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 mb-sm-3">
                <div class="bg-white py-3 px-4">
                    <div class="recent_tenders">
                        <h2><b>History</b></h2>
                    </div>
                    <p>
                        Barwaha is a municipality in the District of Khargone is situated in the state of Madhya Pradesh in the central region of India. Khargone was formerly known as West Nimar. A part of the Indore Division lying on the region of Nimar, The District headquarters is located in the city of Khargone along with other functional offices i.e., police station, the collectorate office, telecom and other governmental organizations. <br>

                        In ancient times, the Haihayas of Mahishmati (present-day Maheshwar) ruled this region. In early medieval age, the area was under the Paramaras of Malwa and the Ahirs of Asirgarh. In late medieval age, the area was under Malwa Sultanate of Mandu. In 1531, Gujarat sultan Bahadur Shah brought this area under his control. In 1562, Akbar annexed this territory along with the whole Malwa to Mughal empire.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="counter_section">
    <div class="container">
        <div class="col-md-12">
            <ul class="MIT__strength" id="counter">
                <li>
                    <div class="icon">
                        <img src="<?php echo base_url('FrontTheme/images/area.png') ?>" alt="Total Area" />
                    </div>
                    <span class="counter-value" data-count="1731.47">0</span>

                    <div class="title">Total Area <sup>km²</sup></div>
                </li>
                <li>
                    <div class="icon">
                        <img src="<?php echo base_url('FrontTheme/images/population.png') ?>" alt="population" />
                    </div>
                    <span class="counter-value" data-count="61973">0</span>
                    <div class="title">Population </div>
                </li>
                <li>
                    <div class="icon">
                        <img src="<?php echo base_url('FrontTheme/images/ward.png') ?>" alt="ward" />
                    </div>
                    <span>No.</span>
                    <span class="counter-value" data-count="28">0</span>
                    <div class="title">wards </div>
                </li>
            </ul>
        </div>
    </div>
</section>

<!-- city details and links -->
<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h4>FIND SERVICES</h4>
                <div class="gen-list box-list">
                    <ul>
                        <li class="blue-bg  border-radius-medium">
                            <a href="" title="Certificates">
                                <span class="list-icon icon-certificate border-radius-round"></span>
                                <div class="list-text">Certificates </div>
                            </a>
                        </li>
                        <li class="green-bg  border-radius-medium">
                            <a href="https://www.mpenagarpalika.gov.in:8005/sap/bc/webdynpro/sap/zlogin?sap-client%3D500%26sap-language%3DEN%23" title="Property Tax">
                                <span class="list-icon icon-taxes-2 border-radius-round"></span>
                                <div class="list-text">Property Tax </div>
                            </a>
                        </li>
                        <li class="red-bg  border-radius-medium">
                            <a href="https://www.mpenagarpalika.gov.in:8005/sap/bc/webdynpro/sap/zlogin?sap-client=500&sap-language=EN#"
                          target="_blank" title="Citizen login">
                                <span class="list-icon icon-revenue border-radius-round"></span>
                                <div class="list-text">Citizen login </div>
                            </a>
                        </li>
                        <li class="orange-bg  border-radius-medium">
                            <a href="https://www.mpenagarpalika.gov.in/irj/portal/anonymous?NavigationTarget=navurl://5609ad0982baf9e44b71141197c5df61"
                          target="_blank" title="Fire servicess">
                                <span class="list-icon icon-social-security border-radius-round"></span>
                                <div class="list-text">Fire services </div>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-md-6">
                <h4>PUBLIC UTILITIES </h4>
                <div class="gen-list no-bg no-border normal-font  col-two padding-0 statistics-list ">
                    <ul>
    
                        <li>
                            <a href="https://mandsaur.nic.in/en/public-utility-category/banks/" title="Banks">
                                <span class="list-icon border-radius-none blue-bg">6</span>
                                <div class="list-text">Banks</div>
                            </a>
                        </li>
    
                        <li>
                            <a href="https://mandsaur.nic.in/en/public-utility-category/colleges/" title="Colleges / Universities">
                                <span class="list-icon border-radius-none green-bg">2</span>
                                <div class="list-text">Colleges </div>
                            </a>
                        </li>
    
                        <li>
                            <a href="https://mandsaur.nic.in/en/public-utility-category/hospitals/" title="Hospitals">
                                <span class="list-icon border-radius-none red-bg">1</span>
                                <div class="list-text">Hospitals</div>
                            </a>
                        </li>
    
                        <li>
                            <a href="https://mandsaur.nic.in/en/public-utility-category/municipality/" title="Municipalities">
                                <span class="list-icon border-radius-none orange-bg">1</span>
                                <div class="list-text">Municipalities</div>
                            </a>
                        </li>
    
                        <li>
                            <a href="https://mandsaur.nic.in/en/public-utility-category/postal/" title="Postal">
                                <span class="list-icon border-radius-none gray-bg">1</span>
                                <div class="list-text">Postal</div>
                            </a>
                        </li>
    
                        <li>
                            <a href="https://mandsaur.nic.in/en/public-utility-category/schools/" title="Schools">
                                <span class="list-icon border-radius-none light-grey-bg">3</span>
                                <div class="list-text">Schools</div>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
