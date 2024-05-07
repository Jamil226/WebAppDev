<?php
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
        <title>Contact Us | <?php echo(constant('SiteTitle'));?></title>
        <?php include("components/meta.php")?>
        <?php include("components/favicon.php")?>
        <?php include("components/links.php")?>
    </head>

    <body>
        <?php include("components/header.php")?>
        <section class="inner-page-banner">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="banner-content">
                            <h4>Contact Us</h4>
                            <p>
                                Thank you for your interest in HackersThirdEye. We value your feedback, inquiries, and
                                suggestions. Please feel free to reach out to us using the contact information provided
                                below. Our dedicated team is here to assist you with any questions or concerns you may
                                have.
                            </p>
                            <div class="banner-btn">
                                <a href="#" class="btn bg-red">Let’s Talk</a>
                                <a href="#" class="btn bg-red-outline">Our Pricing</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="banner-img">
                            <img class="img-fluid" src="images/eccomerce/banner-img.svg" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="section-pad">
            <div class="container">
                <div class="section-header">
                    <h3>Reliable Website Security Solutions</h3>
                    <p>24/7 website security with zero hidden costs – built for small businesses, web professionals and
                        enterprise organizations.</p>
                </div>
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-12">
                        <form action="contact-script.php" method="post">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="name" name="fullname" placeholder="John Doe">
                                <label for="name">Full Name</label>
                            </div>
                            <div class="form-floating mb-3">
                                <select class="form-select" id="floatingSelect"
                                    aria-label="dropdown" name="service">
                                    <option value="Web App Pentest">Web App Pentest</option>
                                    <option value="Cloud Security Pentest">Cloud Security Pentest</option>
                                    <option value="Mobile App Pentest">Mobile App Pentest</option>
                                </select>
                                <label for="floatingSelect">Select Service</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="email" class="form-control" id="email" name="email" placeholder="name@example.com">
                                <label for="email">Email address</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="contact" class="form-control" id="contact" name="contact" placeholder="+123456789">
                                <label for="contact">Contact Number</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="subject" class="form-control" id="subject" name="subject" placeholder="Looking for Mobile Pentest Services">
                                <label for="subject">Subject</label>
                            </div>
                            <div class="form-floating mb-3">
                                <textarea class="form-control" name="message" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
                                <label for="floatingTextarea2">Your Message</label>
                            </div>
                            <button type="submit" name="submit" class="nav-link header-btn">Submit Your Message</button>
                        </form>
                    </div>

                </div>
            </div>
        </section>
        <section class="section-pad bg-cover" style="background-image: url(images/web-pentest-bg.svg);">
            <div class="container">
                <div class="section-header">
                    <h3 class="text-white">How We Remove Website Malware & Viruses</h3>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="performance-box extend-box d-flex flex-column">
                            <img src="images/eccomerce/icons/1.svg" alt="">
                            <h4>Experienced Security Analysts</h4>
                            <p>Our dedicated researchers monitor active malware campaigns. With a trained team of
                                analysts, we aim to provide the best malware removal service around.</p>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="performance-box extend-box d-flex flex-column">
                            <img src="images/eccomerce/icons/2.svg" alt="">
                            <h4>Webstore Hack Protection</h4>
                            <p>Block attackers, malicious scripts, and bad bots by filtering malicious traffic to your
                                online store.</p>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="performance-box extend-box d-flex flex-column">
                            <img src="images/eccomerce/icons/3.svg" alt="">
                            <h4>Prevent Downtime</h4>
                            <p>Uptime monitoring helps you take immediate action when customers can’t access your online
                                store.</p>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="performance-box extend-box d-flex flex-column">
                            <img src="images/eccomerce/icons/4.svg" alt="">
                            <h4>Keep Ads Online</h4>
                            <p>Helps protect against ads being suspended by Google or Facebook if malware is detected on
                                your ecommerce website.</p>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="performance-box extend-box d-flex flex-column">
                            <img src="images/eccomerce/icons/5.svg" alt="">
                            <h4>Protect Your Reputation</h4>
                            <p>Credit card theft and data leaks can harm your reputation with customers and website
                                visitors.</p>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="performance-box extend-box d-flex flex-column">
                            <img src="images/eccomerce/icons/6.svg" alt="">
                            <h4>Clean Up Malware & Spam</h4>
                            <p>SEO spam, JavaScript injections, and malicious redirects can harm your reputation and
                                deter customers.</p>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="performance-box extend-box d-flex flex-column">
                            <img src="images/eccomerce/icons/7.svg" alt="">
                            <h4>Remove Blocklisting</h4>
                            <p>Get blocklist removal requests submitted on your behalf, remove security warnings, and
                                protect your web stores’ search rankings.</p>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="performance-box extend-box d-flex flex-column">
                            <img src="images/eccomerce/icons/8.svg" alt="">
                            <h4>Ensure PCI Compliance</h4>
                            <p>Help meet PCI requirements and harden your environment with the Sucuri web application
                                firewall.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="section-pad response-box pb-0">
            <div class="container">
                <div class="section-header">
                    <h3>How We Scan for Magecart & Credit Card Skimmers</h3>
                </div>
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="feature-box d-flex flex-column">
                            <img class="feature-box-icon" src="images/eccomerce/icons/9.svg" alt="">
                            <h4>Signatures & Advanced Scans</h4>
                            <p>Heuristic and signature-based techniques detect and block malicious requests before they
                                reach your store. Website scanning tools are constantly updated by our advanced malware
                                research team to detect website malware and emerging threats to ecommerce environments.
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="feature-box d-flex flex-column">
                            <img class="feature-box-icon" src="images/eccomerce/icons/10.svg" alt="">
                            <h4>Intrusion Prevention System (IPS)</h4>
                            <p>Web application firewall and Intrusion Prevent System runs inline to block the delivery
                                of malicious payloads to your ecommerce storefront. Virtual patching helps to protect
                                against vulnerability exploits, SQL injections, cross-site scripting (XSS), and remote
                                code execution (RCE).</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="feature-box d-flex flex-column">
                            <img class="feature-box-icon" src="images/eccomerce/icons/11.svg" alt="">
                            <h4>Customizable Alerts & Reports</h4>
                            <p>Notifications for SMS, Slack, RSS, and custom post options to help you stay notified of
                                any issues. Check for changes for DNS, server errors, SSL modifications, uptime and
                                WHOIS. Email alerts enabled by default, with options for weekly and monthly summaries.
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="feature-box d-flex flex-column">
                            <img class="feature-box-icon" src="images/eccomerce/icons/12.svg" alt="">
                            <h4>Ecommerce Scanning Engine</h4>
                            <p>Comprehensive monitoring solution scans at the client and server levels to detect credit
                                card skimmers, JavaScript injections, and other malware. We provide all the components
                                needed to detect indicators of compromise (IoC) on your online store.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="section-pad">
            <div class="container">
                <div class="section-header">
                    <h3>How to Activate Ecommerce Security for Your Online Store</h3>
                </div>
                <div class="enablingMalware_grid_latout page-2">
                    <div class="d-flex flex-column align-items-center gap-2">
                        <div>
                            <span class="d-flex align-items-center justify-content-center step-count">1</span>
                        </div>
                        <div class="vertical_l"></div>
                        <div>
                            <span class="d-flex align-items-center justify-content-center step-count">2</span>
                        </div>
                        <div class="vertical_l"></div>
                        <div>
                            <span class="d-flex align-items-center justify-content-center step-count">3</span>
                        </div>
                        <div class="vertical_l"></div>
                        <div>
                            <span class="d-flex align-items-center justify-content-center step-count">4</span>
                        </div>
                    </div>
                    <div class=" d-flex flex-column align-items-start card_column">
                        <div class="enablemalware_rightcard">
                            <h3>Add Your Store to the Firewall</h3>
                            <p>Signup for a Platform plan and type your store’s domain to get started.</p>
                            <p>If you’re currently experiencing a DDoS attack, select the option “I am currently under
                                attack”. Restrict admin access to allowlisted IP addresses and apply settings to harden
                                your environment.</p>
                        </div>
                        <div class="enablemalware_rightcard">
                            <h3>Activate Protection in Seconds</h3>
                            <p>Simply change your DNS records to enable the web application firewall on your web store.
                            </p>
                            <p>At this point all incoming HTTP/HTTPS packets will be intercepted and inspected prior to
                                arriving at your server. SSL certificates are automatically created to protect data in
                                transit. Our analysts are available 24/7 to assist with set up.</p>
                        </div>
                        <div class="enablemalware_rightcard">
                            <h3>Select From Caching Options</h3>
                            <p>Take your ecommerce store to the next level with content delivery and performance
                                optimization.</p>
                            <p>Enable the site headers caching firewall setting for proper ecommerce configuration. Site
                                speed is accelerated through high-performance caching and globally distributed AnyCast
                                network. Smart caching supports dynamic page content across your storefront.</p>
                        </div>
                        <div class="enablemalware_rightcard">
                            <h3>Get Ecommerce Malware Removal</h3>
                            <p>Submit a ticket for quick response to any threats in your environment.</p>
                            <p>Analysts connect to your site to clean malware infections and credit card skimmers from
                                your websites files and database. Secure backups created prior to cleanup. Communication
                                at every touchpoint with a comprehensive report of all our findings. </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="section-pad bg-cover" style="background-image: url(images/section-bg-1.png);">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="feature-box d-flex flex-column">
                            <img class="feature-box-icon" src="images/feature-icon/1.svg" alt="">
                            <h4>Filtered Traffic</h4>
                            <p>The Sucuri Firewall surrounds your website with a defense system, leveraging our
                                proprietary virtual patching and hardening technology.</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="feature-box d-flex flex-column">
                            <img class="feature-box-icon" src="images/feature-icon/2.svg" alt="">
                            <h4>SSL Encryption</h4>
                            <p>We offer free SSL certificates through LetsEncrypt. We also support existing SSL
                                certificates. Keep your customer data encrypted and secure in transit.</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="feature-box d-flex flex-column">
                            <img class="feature-box-icon" src="images/feature-icon/3.svg" alt="">
                            <h4>PCI Compliant Firewall</h4>
                            <p>The first requirement of PCI compliance is to use a website application firewall, like
                                the Sucuri Firewall. We are a Level 1 PCI compliant service provider.</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="feature-box d-flex flex-column">
                            <img class="feature-box-icon" src="images/feature-icon/4.svg" alt="">
                            <h4>Brand Trust</h4>
                            <p>The shame of a data breach can ruin your brand. Recovering requires significant
                                investment in reputation management, marketing and PR.</p>
                        </div>
                    </div>
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
                            <div class="accordion" id="accordionExample1">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingOne">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapseOne" aria-expanded="true"
                                            aria-controls="collapseOne">
                                            What is Web Security?
                                        </button>
                                    </h2>
                                    <div id="collapseOne" class="accordion-collapse collapse show"
                                        aria-labelledby="headingOne" data-bs-parent="#accordionExample1">
                                        <div class="accordion-body">
                                            Web hosting is a service that lets you rent web space on the internet to
                                            publish a web site. Email services are usually also included in most web
                                            hosting packages. Same goes for the domain registration of your first site
                                            name. The domain name is the address people enter in their browsers to
                                            access a specific website.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingTwo">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseTwo"
                                            aria-expanded="false" aria-controls="collapseTwo">
                                            What is Web Security?
                                        </button>
                                    </h2>
                                    <div id="collapseTwo" class="accordion-collapse collapse"
                                        aria-labelledby="headingTwo" data-bs-parent="#accordionExample1">
                                        <div class="accordion-body">
                                            Web hosting is a service that lets you rent web space on the internet to
                                            publish a web site. Email services are usually also included in most web
                                            hosting packages. Same goes for the domain registration of your first site
                                            name. The domain name is the address people enter in their browsers to
                                            access a specific website.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingThree">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseThree"
                                            aria-expanded="false" aria-controls="collapseThree">
                                            What is Web Security?
                                        </button>
                                    </h2>
                                    <div id="collapseThree" class="accordion-collapse collapse"
                                        aria-labelledby="headingThree" data-bs-parent="#accordionExample1">
                                        <div class="accordion-body">
                                            Web hosting is a service that lets you rent web space on the internet to
                                            publish a web site. Email services are usually also included in most web
                                            hosting packages. Same goes for the domain registration of your first site
                                            name. The domain name is the address people enter in their browsers to
                                            access a specific website.
                                        </div>
                                    </div>
                                </div>
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
                                <p>Mauris blandit arcu nec tellus lobortis, vitae aliquam lectus varius. Nunc sed magna
                                    ac nisi ultrices aliquam a ac turpis.</p>
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