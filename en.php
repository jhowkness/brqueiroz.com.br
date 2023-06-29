<?php
require_once("config.php");


?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>BR Queiroz</title>
    
    <base href="http://brqueiroz.com.br/" />
    <? if($_mobile){?><meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=3, user-scalable=yes"><? }else{?>
    <meta name="viewport" content="width=1000, initial-scale=1">
    <? }?>
    <meta name="description" content="">
    <meta name="author" content="">
    <meta property="og:title" content="BR Queiroz"/>
    <meta property="og:image" content="media/img/imageOGFacebook.jpg"/>
    <meta property="og:url" content=""/>
    <meta property="og:site_name" content="BR Queiroz"/>
    <meta property="og:description" content=""/>
    <meta name="twitter:title" content="BR Queiroz" />
    <meta name="twitter:image" content="media/img/imageOGFacebook.jpg" />
    <meta name="twitter:url" content="" />
    <meta name="twitter:card" content="" />
    <link rel="shortcut icon" href="favicon.ico" />
    <link href="media/css/bootstrap.min.css" rel="stylesheet">
    <link href="media/css/animate.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="media/css/jquery.fancybox.css">
    <? if(!$_mobile){?>
    <link href="style.css" rel="stylesheet">
    <? }else{?>
    <link href="styleMobile.css" rel="stylesheet">
    <? }?>
    <? /*<script src="http://maps.googleapis.com/maps/api/js?v=3.exp&amp;sensor=false&amp;key=AIzaSyAEU7kfadsJST4THakx0hEyTx1bc_e54xM" async="" defer="defer" type="text/javascript"></script> */?>
	<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAEU7kfadsJST4THakx0hEyTx1bc_e54xM"></script>
    <script src="media/js/jquery.min.js"></script>
    <script src="media/js/jquery.validar.js"></script>
    <script>
	$(document).ready(function(){
		$("form a[href='#submit']").click(function(e){
			e.preventDefault();
			$(this).parents("form").validar();
			return false;
		})
		$(".btn-submit").click(function(e){
			e.preventDefault();
			$(this).parents("form").validar();
			return false;
		})
	});
    </script>
  </head>
  <body id="page-top">
<? if($_mobile){?>
<div class="estruturaTopo">
    <div class="topo">
        <h1><a href="#top"><img alt="BR Queiroz" src="media/img/logotipobrQueiroz.png"></a></h1>
        <a href="#menu" class="menu"><span></span></a>
        <div class="menuNUC">
            <a href="#" style="background:none;" class="menuInterno"><span></span></a>
            <div class="linha"></div>
            <a href="#about" class="smoothscroll">ABOUT US</a>
            <a href="#services" class="smoothscroll">SERVICES</a>
            <a href="#partners" class="smoothscroll">PARTNERS</a>
            <a href="#cases" class="smoothscroll">CASES</a>
            <a href="#contact" class="smoothscroll">CONTACT US</a>
            <a href="#" style="background:none;" class="fecha"></a>
        </div>
    </div><!--topo-->
    <ul class="dropdown-menu" style="display:none;">
       <li>
        <p>ACESSO <span>HELPDESK</span></p>
        <form action="https://helpdesk.brqueiroz.com.br/helpdesk/WebObjects/Helpdesk.woa">
          <div class="form-group">
            <input type="text" name="userName" class="form-control validar" id="login" placeholder="Login">
          </div>
          <div class="form-group">
            <input type="text" name="password" class="form-control validar" id="password" placeholder="Senha">
          </div>
          <button type="submit" class="btn btn-warning pull-right">Entrar</button>
        </form>
        </li>
    </ul>
    <div class="mascara" style="display: none;background: rgba(0,0,0,0.7);top: 0;left: 0;width: 100%;height: 100%;z-index: 9;position: fixed;"></div>
</div><!--estruturaTopo-->	
<? }?>
    <div id="header" class="header-page">
    	<? if(!$_mobile){?>
        <nav class="navbar navbar-default navbar-fixed-top">
          <div class="container-fluid header-top">
              <div class="container">
                  <div class="row">
                        <div class="col-xs-6 col-sm-12 col-md-12 header-top-right pull-right">
                            <div class="hidden-xs">
                                <img src="media/img/icon_header_contact1.png" class="header_top_img1" alt="">
                                <span>CONTACT US</span> +55 (16) 3555-0065 <img src="media/img/icon_header_contact3.png" class="header_top_img2" alt=""> WHATSAPP <span><a href="https://api.whatsapp.com/send?phone=5516991991078" target="_blank">+55 (16) 99199-1078</a></span>
                            </div>
                        </div>
                  </div>
              </div> 
          </div>
          <div class="container-fluid navbar-fluid-top" id="navbar">
           <div class="container">
            <div class="navbar-header">
              <a class="navbar-brand" href="#top">
                <img alt="BR Queiroz" src="media/img/logotipobrQueiroz.png">
              </a>
            </div>
            <div id="navbar" class="collapse navbar-collapse">
              <ul class="nav navbar-nav navbar-right">
                <li><a href="#about" class="smoothscroll">ABOUT US</a></li>
                <li><a href="#services" class="smoothscroll">SERVICES</a></li>
                <li><a href="#partners" class="smoothscroll">PARTNERS</a></li>
                <li><a href="#cases" class="smoothscroll">CASES</a></li>
                <li><a href="#contact" class="smoothscroll">CONTACT US</a></li>
                 </ul>
            </div>
          </div>
            </div>
        </nav>
        <? }?>
        <div class="container">
            <div class="col-sm-12 col-md-12">
                <div class="row">
                    <div class="col-sm-5 col-md-2">
                       <h1>BRQueiroz is <br>more than <span>20 years in<br> market</span>, bringing the<br> what's best in<br> I.T. solutions for<br> Ribeirão Preto e region.</h1>
                       <div class="header-partners-divider"><img src="media/img/header_divider.png" alt=""></div>
                      <? if(!$_mobile){?><div class="row header-partners" style="margin:20px -58px 0 -17px;"><? }?>
	
                       <div class="col-sm-6 col-md-6 col-xs-12" style="margin-bottom:10px;"><img src="media/img/header_partner_microsoft.png" alt=""></div>
       <? if(!$_mobile){?><div class="col-sm-12 col-md-2"></div><? }?>
                       <div class="col-sm-6 col-md-6 col-xs-12" style="margin-bottom:10px;"><img src="media/img/header_partner_legrand.png" alt=""></div>
                
                       <div class="col-sm-6 col-md-6 col-xs-12"><img src="media/img/header_partner_vmware.png" alt=""></div>
                       <div class="col-sm-12 col-md-6 col-xs-12"><img src="media/img/header_partner_cisco.png" alt="" style="margin: 10px auto 0 auto;"></div>
                       
                       </div>
                    </div>
                    <div class="col-sm-7 col-md-8 col-md-offset-2 col-sm-offset-2 text-right">
                        <div class="row">
                        <h2>THE TECNOLOGY YOUR COMPANY NEEDS FOR</h2>
                           <h3>REACH THE <span>NEXT LEVEL</span></h3>
                        <h4><em>For a company to grow solid and strong, invest in the best</em></h4>
                        <div class="col-sm-11 col-md-11 col-md-offset-1 col-sm-offset-1">
                           <div class="col-sm-6 col-md-6 col-xs-12 text-left header-box">
                               <div class="col-md-5"><img src="media/img/icon_header1.png" alt=""></div>
                               <div class="col-md-7">
                               <h5>Consultancy</h5>
                               <h6>Plan the best route to quality solutions.</h6>
                               <a class="btn btn-primary smoothscroll" href="#services"  role="button">see more</a>
                               </div>
                           </div>
                           <div class="col-sm-6 col-md-6 col-xs-12 text-left header-box">
                               <div class="col-md-5"><img src="media/img/icon_header2.png" alt=""></div>
                               <div class="col-md-7">
                               <h5>Infraestrutura</h5>
                               <h6>Essential structure for solid growth.</h6>
                               <a class="btn btn-primary smoothscroll" href="#infrastructure" role="button">see more</a>
                               </div>
                           </div>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section id="about">
       <div class="test">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="col-sm-6 col-md-6">
                            <h1>ABOUT <span>US</span></h1>
                            <h2 class="text-justify">BRQueiroz was conceived based on the constant growth that the digital world has had, which generates the need for objective and reliable solutions in the structuring and growth of a company.<br><br>
                            Now with more than 20 years in the market, BRQueiroz is always concerned with bringing the best in the areas of <strong> Consulting and Infrastructure in Information Technology </strong> to all customers and partners throughout the national territory.<br><br>
                            Currently, the company has a team of highly qualified and certified professionals, ready to provide the support and service needed by any customer or partner.
                            </h2>
                            <div class="about-year-box">
                                <div class="col-sm-3 col-md-2">
                                <div class="row">
                                <div class="about-year">
                                <p>20</p><span>YEARS</span>
                                    </div>
                                    </div>
                                </div>
                                <div class="col-sm-9 col-md-9"><h4><em>Commitment and experience. You can rest assured with the quality of service and care.</em></h4></div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-3 values-company">
                        <h3>VALUES THAT <? if(!$_mobile){?><br><? }?> GUIDE US</h3>
                            <ul>
                                <li><span>Reliability</span></li>
                                <li><span>Experience</span></li>
                                <li><span>Engagement</span></li>
                                <li><span>Security</span></li>
                                <li><span>Ethic</span></li>
                                <li><span>Commitment</span></li>
                                <li><span>Development</span></li>
                                <li><span><span>Trust</span></li>
                                <li><span>investment in development</span></li>
                            </ul>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <? if(!$_mobile){?>
                    <div class="col-md-8 col-sm-12">
                       <div class="row">
                       <div class="about-banner">
                        <span class="about-banner1">CONTACT US <img src="media/img/contract_arrow.png"></span>
                        <span class="about-banner2">Discover what we can do for your company!</span>
                           <span class="about-banner3"><em>+55</em> 16 3555-0065</span>
                        </div>
                        </div>
                    </div>
                    <? }?>
                </div>
            </div>
        </div>
    </section>

    <div id="consulting" class="section-img">
        <div class="container">
           <div class="row">
                <div class="col-1 col-sm-2 col-md-2 text-center wow fadeInLeft" data-wow-delay=".3s">
                    <img src="media/img/consulting_icon.png" class="img-responsive" alt="">
                </div>
                <div class="col-sm-10 col-md-10 wow fadeInUp" data-wow-delay=".3s">
                    <h1>THE <span>CONSULTANCY</span> <small>SERVICES BRQUEIROZ</small></h1>
                    <h2>The Consultancy specializes in planning and setting up the structure of programs that will keep the company running on a daily basis, as well as solutions for emergency situations, preventing possible disasters and structuring a complete security system. </h2>
                </div>
            </div>
        </div>
    </div>

    <section id="services">
        <div class="container">
              <div class="row seven-cols">
				   <div class="col-lg-1 col-md-3 col-sm-4 col-xs-6 consulting-partner">
				  </div>
                   <div class="col-lg-2 col-md-3 col-sm-4 col-xs-6 consulting-partner">
                        <div class="consulting-partner-title1">
                            Operating Systems for Servers
                        </div>
                        <div class="consulting-partner-photo" >
                            <img src="media/img/consulting_partner_microsoft.jpg" class="img-responsive center-block" alt="">
                        </div>
                       <div class="consulting-partner-item-box">
                            <div class="consulting-partner-item">
                            Windows<br> Server 2016
                            </div>
                            <div class="consulting-partner-item">
                            Windows<br> Server 2019
                            </div>
                            <div class="consulting-partner-item">
                            Windows<br> Server 2022
                            </div>
                            <div class="consulting-partner-item-last">
                            Azure Stack HCI
                            </div>
                            </div>
                    </div>
                   <div class="col-lg-2 col-md-3 col-sm-4 col-xs-6 consulting-partner">
                        <div class="consulting-partner-title3">
                            Virtualization
                        </div>
                        <div class="consulting-partner-photo" >
                            <img src="media/img/consulting_partner_microsoft.jpg" class="img-responsive center-block" alt="">
                        </div>
                       <div class="consulting-partner-item-box">
                            <div class="consulting-partner-item">
                            Hyper-V
                            </div>
                            <div class="consulting-partner-item-last">
                            FailOver<br> Clustering
                            </div>
                        </div>
                        <div class="consulting-partner-photo" >
                            <img src="media/img/consulting_partner_vmware.jpg" class="img-responsive center-block" alt="">
                        </div>
                       <div class="consulting-partner-item-box">
                            <div class="consulting-partner-item">
                            vSphere
                            </div>
                            <div class="consulting-partner-item">
                            vCenter
                            </div>
						   <div class="consulting-partner-item-last">
                            vSAN
                            </div>
                        </div>
                    </div>
                   <div class="col-lg-2 col-md-3 col-sm-4 col-xs-6 consulting-partner">
                         <div class="consulting-partner-title4">
                            Network Assessment
                        </div>
                        <div class="consulting-partner-photo" >
                            <img src="media/img/consulting_partner_sqlserver.jpg?3" class="img-responsive center-block" alt="">
                        </div>
                       <div class="consulting-partner-item-box">
                            <div class="consulting-partner-item">
                            UniFi
                            </div>
                        </div>
<!--
                    	<div class="consulting-partner-photo" >
                            <img src="media/img/consulting_partner_oracle.jpg" class="img-responsive center-block" alt="">
                        </div>
                       <div class="consulting-partner-item-box">
                            <div class="consulting-partner-item-last">
                            Oracle
                            </div>
                        </div>
-->
                        <div class="consulting-partner-item-box">
                            <div class="consulting-partner-item-last">
                            Data Network Analysis Services
                            </div>
                        </div>
                        <div class="consulting-partner-photo" >
                            <img src="media/img/consulting_partner_cisco.jpg" class="img-responsive center-block" alt="">
                        </div>
                       <div class="consulting-partner-item-box">
                            <div class="consulting-partner-item-last">
                           Cisco Networking Services
                            </div>                            
                        </div>
                    </div>
                   <div class="col-lg-2 col-md-3 col-sm-4 col-xs-6 consulting-partner">
                        <div class="consulting-partner-title5">
                            Monitoring Management Systems
                        </div>
                        <div class="consulting-partner-photo" >
                            <img src="media/img/consulting_partner_microsoft.jpg" class="img-responsive center-block" alt="">
                        </div>
                       <div class="consulting-partner-item-box">
                            <div class="consulting-partner-item-last">
                            System Center
                            Windows Admin Center
                            </div>
                        </div>
                        <? /*
                        <div class="consulting-partner-photo" >
                            <img src="media/img/consulting_partner_zabbix.jpg" class="img-responsive center-block" alt="">
                        </div>
                       <div class="consulting-partner-item-box">
                            <div class="consulting-partner-item-last">
                            Zabbix
                            </div>
                        </div>
 */ ?>
                    </div>
                   <div class="col-lg-2 col-md-3 col-sm-4 col-xs-6 consulting-partner">
                        <div class="consulting-partner-title7">
                            Security
                        </div>
                        <div class="consulting-partner-photo" >
                            <img src="media/img/consulting_partner_sonicwall.jpg" class="img-responsive center-block" alt="">
                        </div>
                       <div class="consulting-partner-item-box">
                            <div class="consulting-partner-item-last">
                            Sonic Wall
                            </div>
                        </div>
                    </div>      
				  <div class="col-lg-1 col-md-3 col-sm-4 col-xs-6 consulting-partner">
				  </div>
                </div>
          </div>
    </section>

      <div id="consulting" class="section-img">
          <div class="container">
              <div class="row">
                  <div class="col-sm-2 col-md-2 text-center wow fadeInLeft" data-wow-delay=".3s">
                      <img src="media/img/monitor.png" class="img-responsive" alt="" />
                  </div>
                  <div class="col-sm-10 col-md-10 wow fadeInUp" data-wow-delay=".3s">
                      <h1>
                          <span>24/7 MONITORING </span><small>BRQUEIROZ SERVICES</small>
                      </h1>
                      <h2>With monitoring, it is possible to predict failures, anticipate trends and work strategically to promote the best experience for corporate network users. </h2>
                  </div>
              </div>
          </div>
      </div>


      <section id="monitoring-service">

          <div class="container">
              <div class="row">
                  <div class="col-md-12">
                      <div class="col-sm-4 col-md-4 infrastructure-service">
                          <div class="infrastructure-service-item-box2">
                              <div class="infrastructure-service-title1">
                                  <h5>SERVER</h5>
                                  <span>Server Monitoring</span>
                              </div>
                              <div>
                                  <div class="infrastructure-service-item">
                                      Servers are the backbone of your business.
                                  </div>
                                  <div class="infrastructure-service-item">
                                      To minimize downtime and ensure peak performance of your website and services, constant monitoring of your server infrastructure and datacenter is vital.<br />
                                      By tracking the uptime, health, disk space and performance of your servers, you can avoid outages and identify bandwidth hogs.<br />
                                  </div>


                              </div>
                          </div>
                      </div>
                      <div class="col-sm-4 col-md-4 infrastructure-service">
                          <div class="infrastructure-service-item-box2">
                              <div class="infrastructure-service-title2">
                                  <h5>FIREWALL</h5>
                                  <span>Firewall Monitoring</span>
                              </div>

                              <div class="infrastructure-service-item">
                                  The stability of the network firewall is responsible for protecting both running processes and sensitive data.<br />

                              </div>
                              <div class="infrastructure-service-item">
                                  It is of utmost importance to corporate security that the firewall be stable, and even more vital, therefore, that the firewall remain uninterrupted.
                              </div>



                          </div>
                      </div>
                      <div class="col-sm-4 col-md-4 infrastructure-service">
                          <div class="infrastructure-service-item-box3">
                              <div class="infrastructure-service-title3">
                                  <h5>INFRAESTRUCTURE</h5>
                                  <span>IT Infrastructure Monitoring</span>
                              </div>
                              <div>
                                  <div class="infrastructure-service-item">
                                     Outages in IT services can bring a business to a standstill.
                                  </div>

                                  <div class="infrastructure-service-item">
                                      With BRQueiroz's 24/7 monitoring, you get a series of sensors that make monitoring your infrastructure simple. Enjoy a clear overview of incoming and outgoing network traffic and be informed immediately in the event of a failure. 
                                      This will allow you to take immediate action to restore your system's security.

                                  </div>

                              </div>
                          </div>
                      </div>
                  </div>
              </div>

      </section>


    <div id="infrastructure" class="section-img">
        <div class="container">
            <div class="col-sm-2 col-md-2 text-center wow fadeInLeft" data-wow-delay=".3s">
               <img src="media/img/infrastructure_icon.png" class="img-responsive" alt="">
            </div>
            <div class="col-sm-10 col-md-10 wow fadeInUp" data-wow-delay=".3s">
                <div class="row">
                    <h1>THE<span> INFRASTRUCTURE</span> <small>BRQUEIROZ SERVICES</small></h1>
                    <h2>A good infrastructure creates the bases for your company to have stability and security in processes and equipment. Here, BRQueiroz will follow your company's needs, to ensure that the best performance and stability will always be within your reach.</h2>
                </div>
            </div>
        </div>
    </div>

    <section id="infrastructure-services">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="col-sm-4 col-md-4 infrastructure-service">
                        <div class="infrastructure-service-item-box2">
                            <div class="infrastructure-service-title1">
                                <h5>CABLING</h5>
                                <span>Implementation of Structure and Fiber Optic Cabling Projects</span>
                            </div>
                            <div>
                                <div class="infrastructure-service-item">
                                Structured Cabling Cat5, Cat6 and Cat6A
                                </div>
                                <div class="infrastructure-service-item">
                                Singlemode and multimode optical backbones
                                </div>
                                <div class="infrastructure-service-item">
                                Assembly and Restructuring of Racks
                                </div>
                                <div class="infrastructure-service-item">
                                Making UTP Mirrors between Racks
                                </div>
                                <div class="infrastructure-service-item-last">
                                UTP and optical environment certification
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 col-md-4 infrastructure-service">
                        <div class="infrastructure-service-item-box2">
                            <div class="infrastructure-service-title2">
                                <h5>WIRELESS</h5>
                                <span>Implementation of indoor wireless network projects and long-distance point-to-point interconnections</span>
                            </div>
                            <div>
                                <div class="infrastructure-service-item">
                                Wireless 5.8Ghz environment
                                </div>
                                <div class="infrastructure-service-item">
                               point-to-point connections
                                </div>
                                <div class="infrastructure-service-item">
                                point to multipoint connections
                                </div>
                                <div class="infrastructure-service-item">
                                Indoor wireless networking (WiFi)
                                </div>
                                <div class="infrastructure-service-item-last">
                                Elaboration of projects and construction of wireless structures
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 col-md-4 infrastructure-service">
                        <div class="infrastructure-service-item-box3">
                            <div class="infrastructure-service-title3">
                                <h5>(IP) CAMERA</h5>
                                <span>Implementation of IP Camera Projects in industrial and heritage environments</span>
                            </div>
                            <div>
                                <div class="infrastructure-service-item">
                                Fixed IP camera environments
                                </div>
                                <div class="infrastructure-service-item">
                               Panoramic IP camera environments
                                </div>
                                <div class="infrastructure-service-item">
                                360° IP camera environments
                                </div>
                                <div class="infrastructure-service-item-last">
                                Digifort Monitoring System
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="contract">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="col-sm-6 col-md-5">
                        <h1>24X7 SUPPORT <span>AGREEMENT</span></h1>
                        <h2>Our contract guarantees you and your company the necessary peace of mind to manage your business without worrying about crashes, crashes or day-to-day unforeseen events.<br><br>
                        Hiring is modular and may simultaneously involve online monitoring services for contracted services, remote and on-site technical support from our specialists, spare parts, among other differential services.
                        </h2>

                    <div class="clearfix"></div>
                    <? if(!$_mobile){?>
                    <div class="col-md-12">
                       <div class="row">
                       <div class="contract_banner">
                        <span class="contract_banner1">CONTACT US AND MAKE<br>A QUOTE WITHOUT COMMITMENT</span>
                        <span class="contract_banner2"><em>+55</em> 16 3555-0065</span>
                        </div>
                        </div>
                    </div>
					<? }?>
                    </div>
                    <? if(!$_mobile){?>
                    <div class="col-sm-2 col-md-2 hidden-sm">
                        <img src="media/img/infrastructure_clock.png" class="img-responsive center-block" alt="">
                    </div>
                    <? }?>
                    <div class="col-sm-6 col-md-5">
                        <ul>
                            <li>Database infrastructure monitoring</li>
                            <li>24x7 on call and Service Desk</li>
                            <li>Prevention against any occurrence or malfunction</li>
                            <li>Guarantee of preferential and immediate service</li>
                            <li>Replacement of faulty infrastructure parts</li>
                            <li>Savings on consulting and services</li>
                            <li>Eliminates the need to hire a team internal to the company</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="infrastructure_gallery">
        <div class="container">
              <div class="row seven-cols">
				   <? if($_mobile){?>
                   <div class="col-lg-1 col-md-3 col-sm-3 col-xs-6 consulting-partner">
                       <h1>RESULTS<br> <span>VISIBLE</span></h1>
                       <h2>QUALITY<br> <span>GUARANTEED</span></h2>
                       <img src="media/img/infrastructure_gallery_icon.png" class="img-responsive center-block" alt="">
                       <h3><em>Check out our gallery of completed works.
</em></h3>
                    </div>
                    <? }?>
                   <div class="col-lg-1 col-md-3 col-sm-3 col-xs-6 consulting-partner">
                           <a href="media/img/galeria/infra_gallery1.jpg" data-fancybox="galeria"><img src="media/img/infra_gallery1.jpg" class="img-responsive center-block" alt=""></a>
                    </div>
                   <div class="col-lg-1 col-md-3 col-sm-3 col-xs-6 consulting-partner">
                           <a href="media/img/galeria/infra_gallery2.jpg" data-fancybox="galeria"><img src="media/img/infra_gallery2.jpg" class="img-responsive center-block" alt=""></a>
                    </div>
                   <div class="col-lg-1 col-md-3 col-sm-3 col-xs-6 consulting-partner">
                           <a href="media/img/galeria/infra_gallery3.jpg" data-fancybox="galeria"><img src="media/img/infra_gallery3.jpg" class="img-responsive center-block" alt=""></a>
                    </div>
				   <? if(!$_mobile){?>
                   <div class="col-lg-1 col-md-3 col-sm-3 col-xs-6 consulting-partner">
                       <h1>RESULTS<br> <span>VISIBLE</span></h1>
                       <h2>QUALITY<br> <span>GUARANTEED</span></h2>
                       <img src="media/img/infrastructure_gallery_icon.png" class="img-responsive center-block" alt="">
                       <h3><em>Check out our gallery of completed works.</em></h3>
                    </div>
                    <? }?>
                   <div class="col-lg-1 col-md-3 col-sm-3 col-xs-6 consulting-partner">
                           <a href="media/img/galeria/infra_gallery4.jpg" data-fancybox="galeria"><img src="media/img/infra_gallery4.jpg" class="img-responsive center-block" alt=""></a>
                    </div>
                   <div class="col-lg-1 col-md-3 col-sm-3 col-xs-6 consulting-partner">
                           <a href="media/img/galeria/infra_gallery5.jpg" data-fancybox="galeria"><img src="media/img/infra_gallery5.jpg" class="img-responsive center-block" alt=""></a>
                    </div>
                   <div class="col-lg-1 col-md-3 col-sm-3 col-xs-6 consulting-partner">
                           <a href="media/img/galeria/infra_gallery6.jpg" data-fancybox="galeria"><img src="media/img/infra_gallery6.jpg" class="img-responsive center-block" alt=""></a>
                    </div>
                </div>
			
				<div class="row four-cols" id="sumerbol">
                   <div style="clear: both; width: 100%; margin-top: 40px; overflow: hidden; padding-left: 7px; box-sizing: border-box; padding-bottom: 10px;">
                       <h1><em style="background: #2461a9; font-size: 20px; line-height: 35px; color: #ffffff; float: left; padding: 0px 12px; margin-right: 15px; display:block; font-style: normal;">EMPHASIS</em> 
                       <span style="display: block; float: left; text-transform: uppercase; font-size: 20px; line-height: 35px; color: #2762c0;">HIGHLIGHT COMPLETE INFRASTRUCTURE + DATA CENTER - 08/2018</span></h1>            
                   </div>
                   <div class="col-md-12 col-sm-12 col-xs-12 consulting-partner seg">
					<a href="#" class="galeria2">
                   	<img src="media/img/galeria2-1.jpg" class="img-responsive center-block" alt="">
                   	<img src="media/img/galeria2-2.jpg" class="img-responsive center-block" alt="">
                   	<img src="media/img/galeria2-3.jpg" class="img-responsive center-block" alt="">
					</a>
                   </div>

				   <div class="col-md-3 col-sm-3 col-xs-12 consulting-partner seg">
                   	<a href="#" class="galeria2"><img src="media/img/galeria2-4.jpg" class="img-responsive center-block" alt=""></a>
                   </div>
				   <div class="col-md-3 col-sm-3 col-xs-12 consulting-partner seg">
                   	<a href="#" class="galeria2"><img src="media/img/galeria2-5.jpg" class="img-responsive center-block" alt=""></a>
                   </div>
				   <div class="col-md-3 col-sm-3 col-xs-12 consulting-partner seg">
                   	<a href="#" class="galeria2"><img src="media/img/galeria2-6.jpg" class="img-responsive center-block" alt=""></a>
                   </div>
					
				   <div class="col-md-3 col-sm-3 col-xs-12 consulting-partner seg">
                   	<a href="#" class="galeria2"><img src="media/img/galeria2-7.jpg" class="img-responsive center-block" alt=""></a>
					<a href="#" class="botao galeria2">
						<span>Check out the full gallery of<br> implementation process in <b>SUMERBOL SUPERMARKETS</b></span>
						<em>SEE THE GALLERY (29 PHOTOS)</em>
					</a>
					<div class="imagensSumerbol">
						<? for($cr = 1;$cr<=33;$cr++){?>
						<? if($cr != 2 && $cr != 20 && $cr != 24 && $cr != 28){?>
						<a href="media/img/galeria2/summerbol<?=$cr?>.jpg" data-fancybox="galeria2"></a>
						<? }?>
						<? }?>
					</div>
					
                   </div>
                </div>
			
				<div class="row four-cols">
                   <div style="clear: both; width: 100%; margin-top: 40px; overflow: hidden; padding-left: 7px; box-sizing: border-box; padding-bottom: 10px;">
                       <h1><em style="background: #2461a9; font-size: 20px; line-height: 35px; color: #ffffff; float: left; padding: 0px 12px; margin-right: 15px; display:block; font-style: normal;">DESTAQUE</em> <span style="display: block; float: left; text-transform: uppercase; font-size: 20px; line-height: 35px; color: #2762c0;">novo datacenter entregue - 05/2018</span></h1>            
                   </div>
                   <div class="col-md-3 col-sm-4 col-xs-8 consulting-partner">
                           <a href="media/img/galeria/infra_gallery7.jpg" data-fancybox="galeria"><img src="media/img/infra_gallery7.jpg" class="img-responsive center-block" alt=""></a>
                    </div>
                   <div class="col-md-3 col-sm-4 col-xs-8 consulting-partner">
                           <a href="media/img/galeria/infra_gallery8.jpg" data-fancybox="galeria"><img src="media/img/infra_gallery8.jpg" class="img-responsive center-block" alt=""></a>
                    </div> 
                   <div class="col-md-3 col-sm-4 col-xs-8 consulting-partner">
                           <a href="media/img/galeria/infra_gallery9.jpg" data-fancybox="galeria"><img src="media/img/infra_gallery9.jpg" class="img-responsive center-block" alt=""></a>
                    </div>
					<div class="col-md-3 col-sm-4 col-xs-8 consulting-partner">
                           <a href="media/img/galeria/infra_gallery10.jpg" data-fancybox="galeria"><img src="media/img/infra_gallery10.jpg" class="img-responsive center-block" alt=""></a>
                    </div>
                </div>
			
          </div>
    </section>

    <section id="partners">
        <div class="container">
             <div class="row">
                <div class="col-md-12">
                    <h1>MAIN  <span>PARTNERS </span> <small><em>Partner companies that make the difference in delivering a quality service</em></small></h1>
                </div>
             </div>
              <div class="row five-cols">
                    <div class="col-lg-1 col-md-3 col-sm-3 col-xs-6">
                        <div class="contract_partner">
                            <img src="media/img/contract_partner_microsoft.png" class="img-responsive center-block" alt="">
                        </div>
                    </div>
                    <div class="col-lg-1 col-md-3 col-sm-3 col-xs-6">
                        <div class="contract_partner">
                            <img src="media/img/contract_partner_cisco.png" class="img-responsive center-block" alt="">
                        </div>
                    </div>
                    <div class="col-lg-1 col-md-3 col-sm-3 col-xs-6">
                        <div class="contract_partner">
                            <img src="media/img/contract_partner_dell.png" class="img-responsive center-block" alt="">
                        </div>
                    </div>
                    <div class="col-lg-1 col-md-3 col-sm-3 col-xs-6">
                        <div class="contract_partner">
                            <img src="media/img/contract_partner_veritas.png?4" class="img-responsive center-block" alt="">
                        </div>
                    </div>
                    <div class="col-lg-1 col-md-3 col-sm-3 col-xs-6">
                        <div class="contract_partner">
                            <img src="media/img/contract_partner_legrand.png" class="img-responsive center-block" alt="">
                        </div>
                    </div> 
                    <div class="col-lg-1 col-md-3 col-sm-3 col-xs-6">
                        <div class="contract_partner">
                            <img src="media/img/contract_partner_sonicwall.png" class="img-responsive center-block" alt="">
                        </div>
                    </div>
                    <div class="col-lg-1 col-md-3 col-sm-3 col-xs-6">
                        <div class="contract_partner">
                            <img src="media/img/contract_partner_vmware.png" class="img-responsive center-block" alt="">
                        </div>
                    </div>
                    <? if(!$_mobile){?>
                    <div class="col-lg-1 col-md-3 col-sm-3 col-xs-6">
                        <div class="contract_partner arrow_partner">
                            <img src="media/img/partners_arrow.png" class="img-responsive" alt="">
                        </div>
                    </div>
                    <? }?>
                    
                </div>
          </div>
    </section>

    <div id="cases" class="section-img">
        <div class="container">
           <div class="row">
              <div class="col-md-12">
                  <h1>CASES <span>SUCCESS</span></h1>
              </div>
              <div class="col-md-12">
                  <div class="case-box">
                  <div class="col-sm-3 col-md-2">
                      <div class="row">
                      <h2><em>TECHNOLOGICAL INFRASTRUCTURE UPDATE</em></h2>
                      <h3><em>EDUCATIONAL INSTITUTION</em></h3>
                      </div>
                      </div>
                  </div>
                  <div class="col-sm-9 col-md-10">
                      <p>We have developed a major technological infrastructure upgrade project, focusing on preparing your infrastructure to enable even more technological advances, with an emphasis on the use of Microsoft technologies.</p>
                      <p>The project aimed to update and optimize virtualization infrastructures with Windows Server 2012 R2, Hyper-V, Failover Clustering with management provided through System Center Virtual Machine Manager 2012 R2,
                      providing a layer to support Microsoft Active Directory services and its features, as well as application virtualization structures with Remote Desktop Services and Microsoft SQL Server 2012 Database infrastructure.</p>
                  </div>
              </div>
              <div class="clearfix"></div>
              <div class="col-md-12">
                  <div class="case-box">
                  <div class="col-sm-3 col-md-2">
                      <div class="row">
                      <h2><em>REFORMULATION OF THE STRUCTURE<br> OF EMAILS AND COMMUNICATION</em></h2>
                      <h3><em>AIRLINE COMPANY</em></h3>
                      </div>
                  </div>
                  </div>
                  <div class="col-sm-9 col-md-10">
                      <p>Due to the segmentation of their businesses and also in the search for productivity gains, our architects analyzed the infrastructure and identified the opportunity to use the Office365 services, </p>
                      <p>The objective of the project was to segment companies into different Office365 Tenants, in addition to activating new resources for sharing files through the use of Sharepoint and the use of Skype for Business collaboration fronts, 
                      enabling users to plan and carry out meetings via audio and videoconferencing, both sharing documents and resources, optimizing and reducing costs.</p>
                  </div>
              </div>
            </div>
        </div>
    </div>

   <section id="contact">
        <div class="container">
			<? if(!$_mobile){?><div class="mapa"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3720.0214941664576!2d-47.80250228450315!3d-21.191305085910642!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94b9bf212e46c4c9%3A0xc29f4bf60220f5fe!2sR.%20C%C3%A2ndido%20Portinari%2C%20254%20-%20Jardim%20America%2C%20Ribeir%C3%A3o%20Preto%20-%20SP%2C%2014020-140!5e0!3m2!1spt-BR!2sbr!4v1598895939304!5m2!1spt-BR!2sbr" width="800" height="600" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe></div><? }?>
            <div class="row">
            	<? if($_mobile){?>
                <div class="col-md-6 contact-info-details">
                <div class="col-sm-10 col-md-10">
                    <h5><span>+55</span> 16 3555-0065</h5>
                    <h5><span>+55</span> 16 99199-1078 <img src="media/img/contact_whatsapp.png" alt=""></h5>
                    <p>Call now or send an email to  <strong>contato@brqueiroz.com.br</strong></p>
                </div>
                </div>
                <div class="col-md-6 contact-info-details">
                <div class="col-sm-10 col-md-10">
                    <h4>WHERE WE ARE</h4>
                    <address>Rua Cândido Portinari, n° 254<br />
                    CEP 14020-140 | Bairro Jd. América<br />
                    Ribeirão Preto, São Paulo | Brasil</address>
                </div>
                </div>
                <div class="clearfix"></div>
            	<? }?>
                <div class="col-sm-5 col-md-4">
                   <div class="contact-form">
                    <h2>CONTACT</h2>
                    <h3>LEAVE YOUR MESSAGE</h3>
                    <form id="form" method="post">
                        <div class="row">
                          <div class="col-md-12">
                              <div class="form-group">
                              	<label>Name</label>
                                <input type="text" class="form-control input-lg validar" name="name" id="name" placeholder="Nome" value="">
                              </div>
                          </div>
                          <div class="col-md-12">
                          <div class="form-group">
		                        <label>E-mail</label>
                                <input type="email" class="form-control input-lg validar" name="email" id="email" placeholder="Email" value="">
                              </div>
                          </div>
                          <div class="col-md-6">
                              <div class="form-group">
                              <label>Telephone</label>
                                <input type="text" class="form-control input-lg validar" name="phone" id="phone" placeholder="Telefone" value="">
                              </div>
                          </div>
                          <div class="col-md-6">
                              <div class="form-group">
                              	<label>Cell phone</label>
                                <input type="text" class="form-control input-lg validar" name="mobile" id="mobile" placeholder="Celular" value="">
                              </div>
                          </div>
                          <div class="col-md-12">
                              <div class="form-group">
                              	<label>City and state</label>
                                <input type="text" class="form-control input-lg validar" name="city" id="city" placeholder="Cidade e Estado" value="">
                              </div>
                          </div>
                          <div class="col-md-12">
                              <div class="form-group">
                              	<label>Message</label>
                                <textarea class="form-control input-lg" rows="6" name="message" id="message" placeholder="enter your message"></textarea>
                              </div>
                          </div>
                        </div>
                      <button type="submit" class="btn btn-primary btn-md pull-right btn-submit" id="submit-form" name="submit-form">Send</button>
                    </form>
                </div>
              </div>
                <div class="col-sm-7 col-md-8">
                <div class="contact-info">
                <? if(!$_mobile){?>
                    <div class="col-md-6 contact-info-details">
                    <div class="col-sm-2 col-md-2"><img src="media/img/contact_place.png" alt=""></div>
                    <div class="col-sm-10 col-md-10">
                        <h4>WHERE WE ARE</h4>
                        <address>Rua Cândido Portinari, n° 254<br />
                        CEP 14020-140 | Bairro Jd. América<br />
                        Ribeirão Preto, São Paulo | Brasil</address>
                    </div>
                    </div>
                    <div class="col-md-6 contact-info-details">
                    <div class="col-sm-2 col-md-2"><img style="width: 18px;display: block;position: absolute;right: -9px;top: -2px;z-index: 5;" src="media/img/contact_phone.png" alt=""><img style="width: 20px;display: block;position: absolute;right: -11px;top: 24px;z-index: 4;" src="media/img/contact_whatsapp.png" alt=""></div>
                    <div class="col-sm-10 col-md-10">
                        <h5><span>+55</span> 16 3555-0065</h5>
                        <h5 style="padding-top: 5px;"><a href="https://api.whatsapp.com/send?phone=5516991991078" target="_blank"><span>+55</span> 16 99199-1078</a></h5>
                        <p>Call now or send an email to  <strong>contato@brqueiroz.com.br</strong></p>
                    </div>
                    </div>
                    <div class="clearfix"></div>
                <? }?>
                </div>
                </div>
            </div>
        </div>
        <? if($_mobile){?><div id="googlemaps"></div><? }?>
    </section>
    

   <footer>
        <div class="container-full footer-bottom">
           <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-sm-6 col-md-6">
                            <p><img src="media/img/footer_arrow.png" alt=""> Copyright 2023 All rights reserved.</p>
                        </div>
                      <!--  <? if(!$_mobile){?>
                        <div class="col-sm-6 col-md-6 text-right">
                         <p><a href="http://www.julioguimaraes.com.br" target="_blank">desenvolvido por Julio Guimarães | Inventandus</a></p>
                        </div> -->
                        <? }?>
                    </div>
                </div>
            </div>
        </div>
        </div>
  </footer>
    <script src="media/js/bootstrap.min.js"></script>
    <script src="media/js/jquery.easing.min.js"></script>
    <script src="media/js/wow.min.js"></script>

    <script type="text/javascript" src="media/js/jquery.fancybox.min.js"></script>


    <script src="media/js/main.js"></script>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-97340102-1', 'auto');
  ga('send', 'pageview');

</script>

    <script type="text/javascript">
	$(document).ready(function(){
		$(".galeria2").click(function(e) {
		  e.preventDefault();
			$(".imagensSumerbol a:first").trigger('click');
			return false;
		});	
	});
	<? if($_GET['sumerbol'] == 1){?>
		$('html, body').animate({
			scrollTop: $("#sumerbol").offset().top
		}, 2000);
	<? }?>
	<? if($_mobile){?>
	$(document).ready(function(){
		$("a[href='helpdesk']").click(function(e){
			e.preventDefault();
			$(".dropdown-menu").fadeIn();
			$('.mascara').fadeIn();
			$('.menuNUC').removeClass('ativo');
			return false;
		})
		
		$(".mascara").click(function(e) {
		  e.preventDefault();
			$(".dropdown-menu").fadeOut();
			$('.mascara').fadeOut();
			return false;
		});	
		
		$(".menu").click(function(e) {
		  e.preventDefault();
		  $(".menuNUC").toggleClass("ativo");
		  $('.menu').removeClass('on');
		  
		});	
		
		$(".menuInterno").click(function(e) {
		  e.preventDefault();
		  $(".menuNUC").toggleClass("ativo");
		  $('.menu').removeClass('on');		
		  
		});	
		
		$(".fecha").click(function(e) {
		  e.preventDefault();
		  $('.menuNUC').removeClass('ativo');
		})
		$("[galeria]").fancybox({
			
		});
	});
	
	$(window).scroll(function(event) {
		if($(this) .scrollTop() > 50){
			$('.menu').addClass('on');
			$('.menuNUC').addClass('on');
			$('.menuNUC.ativo').addClass('on');
			$('.menu.on').html('<span></span>');
		}else{
			$('.menu').removeClass('on');
			$('.menuNUC.ativo').removeClass('on');
			$('.menu').html('<span></span>');
		}
	});
	<? }?>
 

    var position = [-21.191461, -47.800324];

    function showGoogleMaps() {

        var latLng = new google.maps.LatLng(position[0], position[1]);

    var icon = 'media/img/pinMapa.png';

        var mapOptions = {
            zoom: 16, // initialize zoom level - the max value is 21
            streetViewControl: false, // hide the yellow Street View pegman
            scaleControl: true, // allow users to zoom the Google Map
            mapTypeId: google.maps.MapTypeId.ROADMAP,
            center: latLng,
            scrollwheel: false,
            styles: [{
             stylers: [{
               saturation: -100
              }]
            }]
        };

        map = new google.maps.Map(document.getElementById('googlemaps'),
            mapOptions);

        marker = new google.maps.Marker({
            position: latLng,
            map: map,
            draggable: false,
            animation: google.maps.Animation.DROP,
            icon: icon
        });
    }

    google.maps.event.addDomListener(window, 'load', showGoogleMaps);
    </script>

  </body>
</html>