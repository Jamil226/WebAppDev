<?php
    include("helpers/config.php");
    include("helpers/variables.php");
?>
<!--
************************************************************************************************
                        Hackers Third Eye 
                        Development Date : 14-03-2024
                        Page Updated on  : 21-03-2024
************************************************************************************************
-->
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Home | <?php echo(constant('SiteTitle'));?></title>
    <?php include("components/meta.php")?>
    <?php include("components/favicon.php")?>
    <?php include("components/links.php")?>
</head>
<body>
    <?php include("components/header.php")?>
    <section class="banner-section bg-cover" style="background-image: url(images/banner-bg.png);">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="banner-content">
                        <h4>Clean and Protect Your Website Fast</h4>
                        <p>Restore your peace of mind by securing your websites with our cloud-based platform & experienced security analysts.</p>
                        <div class="banner-btn">
                            <a href="#" class="btn bg-red">Fix Hacked Site</a>
                            <a href="#" class="btn bg-red-outline">Our Pricing</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="banner-img">
                        <img class="img-fluid" src="images/home-page-banner.webp" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section-pad">
        <div class="container">
            <div class="section-header">
                <h3>Security Resource Center</h3>
                <p>Stay on top of emerging website security threats with our DIY guides, skill-building email course, and our security insights blog.</p>
            </div>
            <div class="row">
            <?php
                $Query = "SELECT * FROM resourcecenter WHERE status = 1";
                $Result = mysqli_query($conn, $Query);
                if ($Result->num_rows > 0) {            
                    while($row = mysqli_fetch_array($Result))
                    {
            ?> 
                <div class="col-lg-4">
                    <div class="service-box d-flex flex-column red-shadow">
                        <img src="<?php echo $row['image'];?>" alt="Image Not Found">
                        <div class="service-box-content">
                            <h4><?php echo $row['title'];?></h4>
                            <p><?php echo $row['shortdescription'];?></p>
                        </div>
                        <div class="learn-btn mt-auto">
                            <a href="<?php echo $row['url'];?>" target="_blank" class="btn">Learn More</a>
                        </div>
                    </div>
                </div>
                <?php
                    }
                }
                else
                {
                    echo "No Result Found";
                }
            ?>	
            </div>
        </div>
    </section>
    <section class="section-pad bg-cover" style="background-image: url(images/section-bg-1.png);">
        <div class="container">
            <div class="row">
            <?php
                $Query = "SELECT * FROM quickservices WHERE status = 1";
                $Result = mysqli_query($conn, $Query);
                if ($Result->num_rows > 0) {            
                    while($row = mysqli_fetch_array($Result))
                    {
            ?> 
                <div class="col-lg-3 col-md-6">
                    <div class="feature-box d-flex flex-column">
                        <img class="feature-box-icon" src="<?php echo $row['image'];?>" alt="Image Not Found">
                        <h4><?php echo $row['title'];?></h4>
                        <p><?php echo $row['shortdescription'];?></p>
                        <a href="<?php echo $row['url'];?>" class="btn mt-auto">Learn More <img src="images/arrow-right.svg" alt=""></a>
                    </div>
                </div>
                <?php
                    }
                }
                else
                {
                    echo "No Result Found";
                }
            ?>	
            </div>
            <div class="tools-logo">
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="tools-logo-img">
                            <img src="images/tools-logo/1.svg" alt="">
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="tools-logo-img">
                            <img src="images/tools-logo/2.svg" alt="">
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="tools-logo-img">
                            <img src="images/tools-logo/3.svg" alt="">
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="tools-logo-img">
                            <img src="images/tools-logo/4.svg" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section-pad">
        <div class="container">
            <div class="section-header">
                <h3>Reliable Website Security Solutions</h3>
                <p>24/7 website security with zero hidden costs – built for small businesses, web professionals and enterprise organizations.</p>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-4 col-6">
                    <div class="price-top-content">
                        <ul>
                            <li><img src="images/price-icon/1.svg" alt=""> 30-Day Guarantee</li>
                            <li><img src="images/price-icon/2.svg" alt=""> Platform Agnostic</li>
                            <li><img src="images/price-icon/3.svg" alt=""> 24/7 Security Team</li>
                        </ul>
                    </div>
                    <div class="price-top-list">
                        <ul>
                            <li>Site covered <span data-bs-toggle="tooltip" data-bs-title="Default tooltip"><img src="images/price-icon/question-icon.svg" alt=""></span></li>
                            <li>Malware & hack removals by our security experts. <span data-bs-toggle="tooltip" data-bs-title="Default tooltip"><img src="images/price-icon/question-icon.svg" alt=""></span></li>
                            <li>Malware Removal SLA <span data-bs-toggle="tooltip" data-bs-title="Default tooltip"><img src="images/price-icon/question-icon.svg" alt=""></span></li>
                            <li>Post-cleanup basic report <span data-bs-toggle="tooltip" data-bs-title="Default tooltip"><img src="images/price-icon/question-icon.svg" alt=""></span></li>
                            <li>Frequency of advanced security scans <span data-bs-toggle="tooltip" data-bs-title="Default tooltip"><img src="images/price-icon/question-icon.svg" alt=""></span></li>
                            <li>Website Application Firewall (WAF) <span data-bs-toggle="tooltip" data-bs-title="Default tooltip"><img src="images/price-icon/question-icon.svg" alt=""></span></li>
                            <li>Blocklist Monitoring & Removal <span data-bs-toggle="tooltip" data-bs-title="Default tooltip"><img src="images/price-icon/question-icon.svg" alt=""></span></li>
                            <li>SSL Support & Monitoring <span data-bs-toggle="tooltip" data-bs-title="Default tooltip"><img src="images/price-icon/question-icon.svg" alt=""></span></li>
                            <li>Stop Hacks (Virtual Patching/Hardening) <span data-bs-toggle="tooltip" data-bs-title="Default tooltip"><img src="images/price-icon/question-icon.svg" alt=""></span></li>
                            <li>Firewall Protection – HTTPS & PCI compliant <span data-bs-toggle="tooltip" data-bs-title="Default tooltip"><img src="images/price-icon/question-icon.svg" alt=""></span></li>
                            <li>Advanced DDoS Mitigation <span data-bs-toggle="tooltip" data-bs-title="Default tooltip"><img src="images/price-icon/question-icon.svg" alt=""></span></li>
                            <li>CDN Speed Enhancement <span data-bs-toggle="tooltip" data-bs-title="Default tooltip"><img src="images/price-icon/question-icon.svg" alt=""></span></li>
                            <li>High Availability/Load Balancing <span data-bs-toggle="tooltip" data-bs-title="Default tooltip"><img src="images/price-icon/question-icon.svg" alt=""></span></li>
                            <li>CMS & Hosting Compatibility <span data-bs-toggle="tooltip" data-bs-title="Default tooltip"><img src="images/price-icon/question-icon.svg" alt=""></span></li>
                            <li>Support Requests <span data-bs-toggle="tooltip" data-bs-title="Default tooltip"><img src="images/price-icon/question-icon.svg" alt=""></span></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-9 col-md-8 col-6">
                    <div class="swiper swiper-container mySwiper">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="price-box">
                                    <div class="price-box-top-content text-center">
                                        <h4>Basic <br> Platform</h4>
                                        <p>Perfect for bloggers and small site owners requiring occasional cleanups with ongoing security scans.</p>
                                        <h3>$ <b>199.99</b>/yr</h3>
                                        <a href="#" class="btn buy-btn bg-red">Buy Now</a>
                                    </div>
                                    <div class="price-box-feature d-flex flex-column text-center">
                                        <ul>
                                            <li><b>1</b></li>
                                            <li><b>Unlimited</b></li>
                                            <li><b>30</b> hrs</li>
                                            <li><img src="images/price-icon/check-icon.svg" alt=""></li>
                                            <li>Every <b>12</b> hrs</li>
                                            <li><img src="images/price-icon/check-icon.svg" alt=""></li>
                                            <li><img src="images/price-icon/check-icon.svg" alt=""></li>
                                            <li><img src="images/price-icon/check-icon.svg" alt=""></li>
                                            <li><img src="images/price-icon/check-icon.svg" alt=""></li>
                                            <li><img src="images/price-icon/check-icon.svg" alt=""></li>
                                            <li><img src="images/price-icon/check-icon.svg" alt=""></li>
                                            <li><img src="images/price-icon/check-icon.svg" alt=""></li>
                                            <li><img src="images/price-icon/check-icon.svg" alt=""></li>
                                            <li>Agnostic</li>
                                            <li>Ticket</li>
                                        </ul>
                                        <a href="#" class="btn buy-btn mt-auto bg-red">Buy Now</a>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="price-box">
                                    <div class="price-box-top-content text-center">
                                        <h4>Pro <br> Platform</h4>
                                        <p>Ideal for SMBs who want to minimize disruptions with advanced support for quick SSL certificate transfers.</p>
                                        <h3>$ <b>199.99</b>/yr</h3>
                                        <a href="#" class="btn buy-btn bg-red">Buy Now</a>
                                    </div>
                                    <div class="price-box-feature d-flex flex-column text-center">
                                        <ul>
                                            <li><b>1</b></li>
                                            <li><b>Unlimited</b></li>
                                            <li><b>30</b> hrs</li>
                                            <li><img src="images/price-icon/check-icon.svg" alt=""></li>
                                            <li>Every <b>12</b> hrs</li>
                                            <li><img src="images/price-icon/check-icon.svg" alt=""></li>
                                            <li><img src="images/price-icon/check-icon.svg" alt=""></li>
                                            <li><img src="images/price-icon/check-icon.svg" alt=""></li>
                                            <li><img src="images/price-icon/check-icon.svg" alt=""></li>
                                            <li><img src="images/price-icon/check-icon.svg" alt=""></li>
                                            <li><img src="images/price-icon/check-icon.svg" alt=""></li>
                                            <li><img src="images/price-icon/check-icon.svg" alt=""></li>
                                            <li><img src="images/price-icon/check-icon.svg" alt=""></li>
                                            <li>Agnostic</li>
                                            <li>Ticket</li>
                                        </ul>
                                        <a href="#" class="btn buy-btn mt-auto bg-red">Buy Now</a>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="price-box">
                                    <div class="price-box-top-content text-center">
                                        <h4>Business <br> Platform</h4>
                                        <p>Fastest response time for site cleanups with frequent scans to avoid vulnerabilities.</p>
                                        <h3>$ <b>199.99</b>/yr</h3>
                                        <a href="#" class="btn buy-btn bg-red">Buy Now</a>
                                    </div>
                                    <div class="price-box-feature d-flex flex-column text-center">
                                        <ul>
                                            <li><b>1</b></li>
                                            <li><b>Unlimited</b></li>
                                            <li><b>30</b> hrs</li>
                                            <li><img src="images/price-icon/check-icon.svg" alt=""></li>
                                            <li>Every <b>12</b> hrs</li>
                                            <li><img src="images/price-icon/check-icon.svg" alt=""></li>
                                            <li><img src="images/price-icon/check-icon.svg" alt=""></li>
                                            <li><img src="images/price-icon/check-icon.svg" alt=""></li>
                                            <li><img src="images/price-icon/check-icon.svg" alt=""></li>
                                            <li><img src="images/price-icon/check-icon.svg" alt=""></li>
                                            <li><img src="images/price-icon/check-icon.svg" alt=""></li>
                                            <li><img src="images/price-icon/check-icon.svg" alt=""></li>
                                            <li><img src="images/price-icon/check-icon.svg" alt=""></li>
                                            <li>Agnostic</li>
                                            <li>Ticket</li>
                                        </ul>
                                        <a href="#" class="btn buy-btn mt-auto bg-red">Buy Now</a>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="price-box custom-plans-price">
                                    <div class="price-box-top-content text-center">
                                        <h4>Multi-site & <br> Custom Plans</h4>
                                        <p>Designed for web pros and agencies looking for enterprise level features and coverage.</p>
                                        <h3>Price upon request</h3>
                                        <a href="#" class="btn buy-btn bg-red">Buy Now</a>
                                    </div>
                                    <div class="price-box-feature d-flex flex-column text-center">
                                        <ul>
                                            <li class="justify-content-center"><b>Call: 1–888–873–0817</b></li>
                                            <li><img src="images/price-icon/check-icon.svg" alt=""> Multi-site discounts</li>
                                            <li><img src="images/price-icon/check-icon.svg" alt=""> Seamless integration</li>
                                            <li><img src="images/price-icon/check-icon.svg" alt=""> Emergency response SLAs</li>
                                            <li><img src="images/price-icon/check-icon.svg" alt=""> Custom server configuration</li>
                                            <li><img src="images/price-icon/check-icon.svg" alt=""> Multi-site discounts</li>
                                            <li><img src="images/price-icon/check-icon.svg" alt=""> Dedicated support team</li>
                                        </ul>
                                        <a href="#" class="btn buy-btn mt-auto bg-red">Buy Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                      </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container">
            <div class="site-stats bg-cover" style="background-image: url(images/stats-bg.webp);">
                <div class="row align-items-center">
                    <div class="col-lg-5">
                        <div class="site-stats-img">
                            <img class="img-fluid" src="images/stats-img.svg" alt="">
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="stats-boxes">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="stats-box">
                                        <h4>99%</h4>
                                        <p>Support Ticket satisfaction</p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="stats-box">
                                        <h4>700+</h4>
                                        <p>Sites cleaned daily</p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="stats-box">
                                        <h4>30+</h4>
                                        <p>Billion monthly pagesviews</p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="stats-box">
                                        <h4>99%</h4>
                                        <p>Support Ticket satisfaction</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section-pad">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="website-security-header section-header">
                        <h3>Find and fix every single security loophole with our hacker-style pentest.</h3>
                    </div>
                </div>
            </div>
            <div class="row align-items-center">
                <div class="col-lg-5">
                    <div class="websecurity-content">
                        <div class="accordion" id="accordionExample">
                            <div class="accordion-item">
                              <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                 <span class="d-flex align-items-center justify-content-center">
                                    <svg width="23" height="22" viewBox="0 0 23 22" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <g clip-path="url(#clip0_283_562)">
                                                <path
                                                    d="M20.9561 3.59639L12.3311 0.158889C12.0683 0.0546382 11.7867 0.000976563 11.5022 0.000976562C11.2178 0.000976563 10.9362 0.0546382 10.6734 0.158889L2.04844 3.59639C1.24434 3.91436 0.71875 4.66631 0.71875 5.49991C0.71875 14.0292 5.8623 19.9245 10.6689 21.8409C11.199 22.0515 11.7965 22.0515 12.3266 21.8409C16.1764 20.3069 22.2812 15.0089 22.2812 5.49991C22.2812 4.66631 21.7557 3.91436 20.9561 3.59639ZM11.7785 20.5733C11.6033 20.6421 11.4057 20.6421 11.226 20.5733C6.82812 18.9062 2.15625 13.0624 2.15625 5.49991C2.15625 5.22061 2.33145 4.97139 2.59648 4.86397L11.2215 1.42647C11.3922 1.35772 11.5943 1.35342 11.774 1.42647L20.399 4.86397C20.6686 4.97139 20.8393 5.22061 20.8393 5.49991C20.8438 13.0624 16.1719 18.9062 11.7785 20.5733Z"
                                                    fill="#818181" />
                                            </g>
                                            <defs>
                                                <clipPath id="clip0_283_562">
                                                    <rect width="23" height="22" fill="white" />
                                                </clipPath>
                                            </defs>
                                    </svg>
                                </span> Get the industry’s deepest & broadest vulnerability coverage
                                </button>
                              </h2>
                              <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Test for 8000+ vulnerabilities including industry standard OWASP & SANS tests.
                                </div>
                              </div>
                            </div>
                            <div class="accordion-item">
                              <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    <span class="d-flex align-items-center justify-content-center">
                                        <svg width="27" height="21" viewBox="0 0 27 21" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path opacity="0.4"
                                            d="M4.05 9.1875C4.58401 9.1875 5.10603 9.03355 5.55004 8.74511C5.99405 8.45667 6.34012 8.0467 6.54448 7.56705C6.74883 7.08739 6.8023 6.55959 6.69812 6.05039C6.59394 5.54119 6.33679 5.07346 5.95919 4.70635C5.58159 4.33923 5.10049 4.08923 4.57674 3.98794C4.053 3.88665 3.51012 3.93864 3.01675 4.13732C2.52339 4.336 2.10171 4.67245 1.80503 5.10413C1.50835 5.53581 1.35 6.04333 1.35 6.5625C1.35067 7.25849 1.63535 7.9258 2.14155 8.41794C2.64775 8.91008 3.33412 9.18685 4.05 9.1875ZM24.3 10.5H21.6C20.8869 10.4993 20.2026 10.7736 19.6973 11.2629C20.5519 11.715 21.2844 12.3572 21.835 13.137C22.3856 13.9169 22.7387 14.8122 22.8656 15.75H25.65C26.008 15.75 26.3514 15.6117 26.6046 15.3656C26.8578 15.1194 27 14.7856 27 14.4375V13.125C26.9993 12.429 26.7147 11.7617 26.2084 11.2696C25.7022 10.7774 25.0159 10.5007 24.3 10.5ZM2.7 10.5C1.98412 10.5007 1.29775 10.7774 0.791552 11.2696C0.285349 11.7617 0.000670194 12.429 0 13.125V14.4375C0 14.7856 0.142232 15.1194 0.395406 15.3656C0.64858 15.6117 0.991958 15.75 1.35 15.75H4.13016C4.25869 14.8122 4.61298 13.9171 5.16422 13.1374C5.71547 12.3578 6.44812 11.7155 7.30266 11.2629C6.79741 10.7736 6.11312 10.4993 5.4 10.5H2.7ZM22.95 9.1875C23.484 9.1875 24.006 9.03355 24.45 8.74511C24.8941 8.45667 25.2401 8.0467 25.4445 7.56705C25.6488 7.08739 25.7023 6.55959 25.5981 6.05039C25.4939 5.54119 25.2368 5.07346 24.8592 4.70635C24.4816 4.33923 24.0005 4.08923 23.4767 3.98794C22.953 3.88665 22.4101 3.93864 21.9168 4.13732C21.4234 4.336 21.0017 4.67245 20.705 5.10413C20.4084 5.53581 20.25 6.04333 20.25 6.5625C20.2507 7.25849 20.5354 7.9258 21.0416 8.41794C21.5478 8.91008 22.2341 9.18685 22.95 9.1875Z"
                                            fill="#818181" />
                                        <path
                                            d="M16.7399 11.8125H16.3897C15.4897 12.2402 14.5017 12.4646 13.4999 12.4688C12.4621 12.4688 11.4918 12.2227 10.6101 11.8125H10.2599C8.97105 11.8128 7.73509 12.3107 6.82373 13.1968C5.91238 14.0828 5.40024 15.2845 5.3999 16.5375V17.7188C5.3999 18.2409 5.61325 18.7417 5.99301 19.1109C6.37277 19.4801 6.88784 19.6875 7.4249 19.6875H19.5749C20.112 19.6875 20.627 19.4801 21.0068 19.1109C21.3866 18.7417 21.5999 18.2409 21.5999 17.7188V16.5375C21.5996 15.2845 21.0874 14.0828 20.1761 13.1968C19.2647 12.3107 18.0288 11.8128 16.7399 11.8125ZM13.4999 10.5C14.4344 10.5 15.3479 10.2306 16.125 9.72582C16.902 9.22105 17.5076 8.5036 17.8652 7.6642C18.2229 6.82481 18.3164 5.90116 18.1341 5.01006C17.9518 4.11896 17.5018 3.30043 16.841 2.65798C16.1802 2.01553 15.3383 1.57802 14.4217 1.40077C13.5051 1.22352 12.5551 1.31449 11.6917 1.66218C10.8283 2.00987 10.0904 2.59866 9.57121 3.3541C9.05202 4.10954 8.7749 4.99769 8.7749 5.90625C8.77457 6.5096 8.89656 7.1071 9.13389 7.66459C9.37123 8.22207 9.71926 8.72861 10.1581 9.15524C10.5969 9.58188 11.1179 9.92024 11.6913 10.151C12.2647 10.3817 12.8793 10.5003 13.4999 10.5Z"
                                            fill="#818181" />
                                    </svg>
                                    </span>   Get the industry’s deepest & broadest vulnerability coverage
                                </button>
                              </h2>
                              <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Test for 8000+ vulnerabilities including industry standard OWASP & SANS tests.
                                </div>
                              </div>
                            </div>
                            <div class="accordion-item">
                              <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    <span class="d-flex align-items-center justify-content-center">
                                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <g clip-path="url(#clip0_283_609)">
                                                <path
                                                    d="M10 18.75C10.6523 18.75 11.5781 18.1875 12.418 16.5117C12.8047 15.7383 13.1289 14.8047 13.3594 13.75H6.64062C6.87109 14.8047 7.19531 15.7383 7.58203 16.5117C8.42188 18.1875 9.34766 18.75 10 18.75ZM6.41797 12.5H13.582C13.6914 11.7109 13.75 10.8711 13.75 10C13.75 9.12891 13.6914 8.28906 13.582 7.5H6.41797C6.30859 8.28906 6.25 9.12891 6.25 10C6.25 10.8711 6.30859 11.7109 6.41797 12.5ZM6.64062 6.25H13.3594C13.1289 5.19531 12.8047 4.26172 12.418 3.48828C11.5781 1.8125 10.6523 1.25 10 1.25C9.34766 1.25 8.42188 1.8125 7.58203 3.48828C7.19531 4.26172 6.87109 5.19531 6.64062 6.25ZM14.8438 7.5C14.9453 8.30078 15 9.13672 15 10C15 10.8633 14.9453 11.6992 14.8438 12.5H18.3906C18.625 11.707 18.7539 10.8672 18.7539 10C18.7539 9.13281 18.6289 8.29297 18.3906 7.5H14.8438ZM17.9102 6.25C16.8984 4.12109 15.0547 2.46484 12.7969 1.70703C13.6172 2.8125 14.2656 4.39453 14.6406 6.25H17.9141H17.9102ZM5.36719 6.25C5.74219 4.39062 6.39062 2.8125 7.21094 1.70703C4.94922 2.46484 3.10156 4.12109 2.09375 6.25H5.36328H5.36719ZM1.61719 7.5C1.38281 8.29297 1.25391 9.13281 1.25391 10C1.25391 10.8672 1.37891 11.707 1.61719 12.5H5.15625C5.05469 11.6992 5 10.8633 5 10C5 9.13672 5.05469 8.30078 5.15625 7.5H1.61328H1.61719ZM12.793 18.293C15.0508 17.5312 16.8945 15.8789 17.9062 13.75H14.6367C14.2617 15.6094 13.6133 17.1875 12.793 18.293ZM7.20703 18.293C6.38672 17.1875 5.74219 15.6055 5.36328 13.75H2.09375C3.10547 15.8789 4.94922 17.5352 7.20703 18.293ZM10 20C7.34784 20 4.8043 18.9464 2.92893 17.0711C1.05357 15.1957 0 12.6522 0 10C0 7.34784 1.05357 4.8043 2.92893 2.92893C4.8043 1.05357 7.34784 0 10 0C12.6522 0 15.1957 1.05357 17.0711 2.92893C18.9464 4.8043 20 7.34784 20 10C20 12.6522 18.9464 15.1957 17.0711 17.0711C15.1957 18.9464 12.6522 20 10 20Z"
                                                    fill="#818181" />
                                            </g>
                                            <defs>
                                                <clipPath id="clip0_283_609">
                                                    <rect width="20" height="20" fill="white" />
                                                </clipPath>
                                            </defs>
                                        </svg>
                                    </span>   Ensure continuous ISO, SOC 2, GDPR or HIPAA Compliance
                                </button>
                              </h2>
                              <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Test for 8000+ vulnerabilities including industry standard OWASP & SANS tests.
                                </div>
                              </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingFour">
                                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                    <span class="d-flex align-items-center justify-content-center">
                                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M1.34766 16.4219C1.28516 16.5312 1.25 16.6563 1.25 16.7852C1.25 17.1836 1.57031 17.5039 1.96875 17.5039H18.0312C18.4297 17.5039 18.75 17.1836 18.75 16.7852C18.75 16.6563 18.7148 16.5352 18.6523 16.4219L10.8008 2.96094C10.6328 2.67578 10.3281 2.5 10 2.5C9.67188 2.5 9.36719 2.67578 9.19922 2.96094L1.34766 16.4219ZM0.269531 15.7891L8.12109 2.32812C8.51172 1.66016 9.22656 1.25 10 1.25C10.7734 1.25 11.4883 1.66016 11.8789 2.32812L19.7305 15.7891C19.9062 16.0898 20 16.4336 20 16.7812C20 17.8672 19.1172 18.75 18.0312 18.75H1.96875C0.882813 18.75 0 17.8672 0 16.7812C0 16.4336 0.09375 16.0898 0.269531 15.7891ZM10 6.25C10.3438 6.25 10.625 6.53125 10.625 6.875V11.875C10.625 12.2188 10.3438 12.5 10 12.5C9.65625 12.5 9.375 12.2188 9.375 11.875V6.875C9.375 6.53125 9.65625 6.25 10 6.25ZM9.0625 15C9.0625 14.7514 9.16127 14.5129 9.33709 14.3371C9.5129 14.1613 9.75136 14.0625 10 14.0625C10.2486 14.0625 10.4871 14.1613 10.6629 14.3371C10.8387 14.5129 10.9375 14.7514 10.9375 15C10.9375 15.2486 10.8387 15.4871 10.6629 15.6629C10.4871 15.8387 10.2486 15.9375 10 15.9375C9.75136 15.9375 9.5129 15.8387 9.33709 15.6629C9.16127 15.4871 9.0625 15.2486 9.0625 15Z"
                                            fill="#818181" />
                                    </svg>
                                    </span>   Triage & address business-critical threats instantly
                                  </button>
                                </h2>
                                <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                                  <div class="accordion-body">
                                    Test for 8000+ vulnerabilities including industry standard OWASP & SANS tests.
                                  </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingFive">
                                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                    <span class="d-flex align-items-center justify-content-center">
                                        <svg width="26" height="20" viewBox="0 0 26 20" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <g clip-path="url(#clip0_283_617)">
                                                <path
                                                    d="M8.45 1.875H24.05V14.375H12.6019L13.1869 16.25H24.05H26V14.375V1.875V0H24.05H8.45H6.5V1.875V3.75C7.19062 3.75 7.84875 3.87891 8.45 4.11328V1.875ZM20.8 9.375L21.45 8.75V4.375H16.9L16.25 5L17.8344 6.52344L15.6 8.67188L13.6906 6.83594L13 6.17188L11.6228 7.5L12.3134 8.16406L14.9134 10.6641L15.6041 11.3281L16.2947 10.6641L19.2197 7.85156L20.8041 9.375H20.8ZM6.5 6.875C6.75608 6.875 7.00965 6.9235 7.24623 7.01773C7.48282 7.11195 7.69778 7.25006 7.87886 7.42417C8.05993 7.59828 8.20357 7.80498 8.30157 8.03247C8.39956 8.25995 8.45 8.50377 8.45 8.75C8.45 8.99623 8.39956 9.24005 8.30157 9.46753C8.20357 9.69502 8.05993 9.90172 7.87886 10.0758C7.69778 10.2499 7.48282 10.388 7.24623 10.4823C7.00965 10.5765 6.75608 10.625 6.5 10.625C6.24392 10.625 5.99035 10.5765 5.75377 10.4823C5.51718 10.388 5.30222 10.2499 5.12114 10.0758C4.94007 9.90172 4.79643 9.69502 4.69843 9.46753C4.60044 9.24005 4.55 8.99623 4.55 8.75C4.55 8.50377 4.60044 8.25995 4.69843 8.03247C4.79643 7.80498 4.94007 7.59828 5.12114 7.42417C5.30222 7.25006 5.51718 7.11195 5.75377 7.01773C5.99035 6.9235 6.24392 6.875 6.5 6.875ZM6.5 12.5C7.01216 12.5 7.5193 12.403 7.99247 12.2145C8.46564 12.0261 8.89557 11.7499 9.25772 11.4017C9.61986 11.0534 9.90714 10.64 10.1031 10.1851C10.2991 9.73009 10.4 9.24246 10.4 8.75C10.4 8.25754 10.2991 7.76991 10.1031 7.31494C9.90714 6.85997 9.61986 6.44657 9.25772 6.09835C8.89557 5.75013 8.46564 5.47391 7.99247 5.28545C7.5193 5.097 7.01216 5 6.5 5C5.98784 5 5.4807 5.097 5.00753 5.28545C4.53436 5.47391 4.10443 5.75013 3.74228 6.09835C3.38013 6.44657 3.09286 6.85997 2.89687 7.31494C2.70088 7.76991 2.6 8.25754 2.6 8.75C2.6 9.24246 2.70088 9.73009 2.89687 10.1851C3.09286 10.64 3.38013 11.0534 3.74228 11.4017C4.10443 11.7499 4.53436 12.0261 5.00753 12.2145C5.4807 12.403 5.98784 12.5 6.5 12.5ZM3.40031 15.625H9.59969L10.3797 18.125H2.62031L3.40031 15.625ZM11.05 13.75H1.95L0.585 18.125L0 20H2.03531H10.9647H13L12.415 18.125L11.05 13.75Z"
                                                    fill="#818181" />
                                            </g>
                                            <defs>
                                                <clipPath id="clip0_283_617">
                                                    <rect width="26" height="20" fill="white" />
                                                </clipPath>
                                            </defs>
                                        </svg>
                                    </span>  Rest easy with the lowest false positives rate
                                  </button>
                                </h2>
                                <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
                                  <div class="accordion-body">
                                    Test for 8000+ vulnerabilities including industry standard OWASP & SANS tests.
                                  </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="website-security-img">
                        <img class="img-fluid" src="images/websitesecurity.webp" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section-pad bg-cover" style="background-image: url(images/performance-bg.svg);">
        <div class="container">
            <div class="row">
    <?php
        $Query = "SELECT title, shortdescription, image FROM features WHERE status = 1 AND category = 'Home' ORDER BY id ASC";
        $Result = mysqli_query($conn, $Query);
        if($Result->num_rows > 0){
            while($row = mysqli_fetch_array($Result)){   
    ?>
                    <div class="col-lg-4 col-md-6">
                        <div class="performance-box d-flex flex-column">
                            <img src="<?php echo $row['image'];?>" alt="No Image Found">
                            <h4><?php echo $row['title'];?></h4>
                            <p><?php echo $row['shortdescription'];?></p>
                            <div class="learn-btn mt-auto">
                                <a href="#" class="btn">Learn More</a>
                            </div>
                        </div>
                    </div>
        <?php
                }
            }
            else {
                echo "No Record Found";
            }
        ?>
                </div>
            </div>
    </section>
    <section class="section-pad">
        <div class="container">
            <div class="section-header">
                <h3>Frequently asked questions</h3>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="faq-accordian">
                        <div class="accordion" id="accordion">
                            <?php
								$query = "SELECT * FROM faqs";
								$result = mysqli_query($conn, $query);
								if ($result->num_rows > 0) {            
									while($row = mysqli_fetch_array($result))
									{
							?>  
                            <div class="accordion-item">
                              <h2 class="accordion-header" id="heading<?php echo $row['id']; ?>">
                                <button class="accordion-button <?php if($row['id']==1){echo "";} else{ echo "collapsed";} ?>" type="button" data-bs-toggle="collapse" data-bs-target="#collapse<?php echo $row['id']; ?>" aria-expanded="false" aria-controls="collapse<?php echo $row['id']; ?>">
                                    <?php echo $row['question']; ?>
                                </button>
                              </h2>
                              <div id="collapse<?php echo $row['id']; ?>" class="accordion-collapse collapse <?php if($row['id']==1){echo "show";} else{ echo "";} ?>" aria-labelledby="heading<?php echo $row['id']; ?>" data-bs-parent="#accordion">
                                <div class="accordion-body">
                                    <?php echo $row['answer']; ?>
                                </div>
                              </div>
                            </div>
                            <?php
                                    }
                                }
                                else
                                {
                                    echo "No Result Found";
                                }
                            ?>	
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="footer-top-area">
        <div class="container">
            <div class="footer-top">
                <div class="row align-items-center">
                    <div class="col-lg-7">
                        <div class="footer-top-content">
                            <h4>Let’s get started</h4>
                            <p>Mauris blandit arcu nec tellus lobortis, vitae aliquam lectus varius. Nunc sed magna ac nisi ultrices aliquam a ac turpis.</p>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="footer-action-btn text-lg-end text-center">
                            <a href="#" class="btn bg-red">Contact Us Now</a>
                            <a href="#" class="btn bg-red-outline">Our Pricing</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php include("components/footer.php");?>
    <?php include("components/scripts.php");?>
</body>
</html>