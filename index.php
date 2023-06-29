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
            <a href="#about" class="smoothscroll">SOBRE NÓS</a>
            <a href="#services" class="smoothscroll">SERVIÇOS</a>
            <a href="#partners" class="smoothscroll">PARCEIROS</a>
            <a href="#cases" class="smoothscroll">CASES</a>
            <a href="#contact" class="smoothscroll">CONTATO</a>
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
                                <span>CONTATE-NOS</span> +55 (16) 3555-0065 <img src="media/img/icon_header_contact3.png" class="header_top_img2" alt=""> WHATSAPP <span><a href="https://api.whatsapp.com/send?phone=5516991991078" target="_blank">+55 (16) 99199-1078</a></span>
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
                <li><a href="#about" class="smoothscroll">SOBRE NÓS</a></li>
                <li><a href="#services" class="smoothscroll">SERVIÇOS</a></li>
                <li><a href="#partners" class="smoothscroll">PARCEIROS</a></li>
                <li><a href="#cases" class="smoothscroll">CASES</a></li>
                <li><a href="#contact" class="smoothscroll">CONTATO</a></li>
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
                       <h1>BRQueiroz está a <br>mais de <span>20 anos no<br> mercado</span>, trazendo o<br> que há de melhor em<br> soluções de T.I. para<br> Ribeirão Preto e região.</h1>
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
                        <h2>A TECNOLOGIA QUE SUA EMPRESA PRECISA PARA</h2>
                           <h3>ATINGIR O <span>PRÓXIMO NÍVEL</span></h3>
                        <h4><em>Para uma empresa crescer sólida e com força, invista no que há de melhor</em></h4>
                        <div class="col-sm-11 col-md-11 col-md-offset-1 col-sm-offset-1">
                           <div class="col-sm-6 col-md-6 col-xs-12 text-left header-box">
                               <div class="col-md-5"><img src="media/img/icon_header1.png" alt=""></div>
                               <div class="col-md-7">
                               <h5>Consultoria</h5>
                               <h6>Planeje a melhor rota p/ soluções de qualidade.</h6>
                               <a class="btn btn-primary smoothscroll" href="#services"  role="button">veja mais</a>
                               </div>
                           </div>
                           <div class="col-sm-6 col-md-6 col-xs-12 text-left header-box">
                               <div class="col-md-5"><img src="media/img/icon_header2.png" alt=""></div>
                               <div class="col-md-7">
                               <h5>Infraestrutura</h5>
                               <h6>Estrutura essencial para um crescimento sólido.</h6>
                               <a class="btn btn-primary smoothscroll" href="#infrastructure" role="button">veja mais</a>
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
                            <h1>SOBRE <span>NÓS</span></h1>
                            <h2 class="text-justify">A BRQueiroz foi idealizada com base no crescimento constante que o mundo digital tem tido, que gera a necessidade de soluções objetivas e confiáveis na estruturação e crescimento de uma empresa.<br><br>
                            Agora com mais de 20 anos no mercado, a BRQueiroz se mostra sempre preocupada em trazer o que há de melhor nas áreas de <strong>Consultoria e Infraestrutura em Tecnologia da Informação</strong> para todos os clientes e parceiros em todo território nacional.<br><br>
                            Atualmente, a empresa possui uma equipe de profissionais altamente qualificados e cerficados, prontos para dar o suporte e o atendimento necessitado por qualquer cliente ou parceiro.
                            </h2>
                            <div class="about-year-box">
                                <div class="col-sm-3 col-md-2">
                                <div class="row">
                                <div class="about-year">
                                <p>20</p><span>ANOS</span>
                                    </div>
                                    </div>
                                </div>
                                <div class="col-sm-9 col-md-9"><h4><em>Compromisso e experiência. Você pode ficar tranquilo com a qualidade do serviço e atendimento.</em></h4></div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-3 values-company">
                        <h3>VALORES QUE <? if(!$_mobile){?><br><? }?> NOS GUIAM</h3>
                            <ul>
                                <li><span>Confiabilidade</span></li>
                                <li><span>Experiência</span></li>
                                <li><span>Engajamento</span></li>
                                <li><span>Segurança</span></li>
                                <li><span>Ética</span></li>
                                <li><span>Compromisso</span></li>
                                <li><span>Desenvolvimento</span></li>
                                <li><span><span>Confiança</span></li>
                                <li><span>Investimento em desenvolvimento</span></li>
                            </ul>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <? if(!$_mobile){?>
                    <div class="col-md-8 col-sm-12">
                       <div class="row">
                       <div class="about-banner">
                        <span class="about-banner1">CONTATE-NOS <img src="media/img/contract_arrow.png"></span>
                        <span class="about-banner2">Descubra o que podemos fazer por sua empresa!</span>
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
                    <h1>A <span>CONSULTORIA</span> <small>SERVIÇOS BRQUEIROZ</small></h1>
                    <h2>A Consultoria é especializada no planejamento e montagem da estrutura de programas que vai manter a empresa funcionando durante o cotidiano, assim como soluções para situações de emergência, prevenção de possíveis desastres e estruturação de um sistema de segurança completo. </h2>
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
                            Sistemas Operacionais p/ Servidores
                        </div>
                        <div class="consulting-partner-photo" >
                            <img src="media/img/consulting_partner_microsoft.jpg" class="img-responsive center-block" alt="">
                        </div>
                        <div class="consulting-partner-item-box">
                            <div class="consulting-partner-item">
                            Windows<br> Server 2008
                            </div>
                            <div class="consulting-partner-item">
                            Windows<br> Server 2008 R2
                            </div>
                            <div class="consulting-partner-item">
                            Windows<br> Server 2012
                            </div>
                            <div class="consulting-partner-item">
                            Windows<br> Server 2012 R2
                            </div>
                            <div class="consulting-partner-item-last">
                            Windows<br> Server 2016
                            </div>
                        </div>
                    </div>
                   <div class="col-lg-2 col-md-3 col-sm-4 col-xs-6 consulting-partner">
                        <div class="consulting-partner-title3">
                            Virtualização
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
                            Serviços de Análise de rede de Dados
                            </div>
                        </div>
                        <div class="consulting-partner-photo" >
                            <img src="media/img/consulting_partner_cisco.jpg" class="img-responsive center-block" alt="">
                        </div>
                       <div class="consulting-partner-item-box">
                            <div class="consulting-partner-item-last">
                            Serviços de Network em Cisco
                            </div>                            
                        </div>
                    </div>
                   <div class="col-lg-2 col-md-3 col-sm-4 col-xs-6 consulting-partner">
                        <div class="consulting-partner-title5">
                            Sistemas de Gerenciamento Monitoramento
                        </div>
                        <div class="consulting-partner-photo" >
                            <img src="media/img/consulting_partner_microsoft.jpg" class="img-responsive center-block" alt="">
                        </div>
                       <div class="consulting-partner-item-box">
                            <div class="consulting-partner-item-last">
                            System Center 2012
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
                            Segurança
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
                          <span>MONITORAMENTO 24/7</span><small>SERVIÇOS BRQUEIROZ</small>
                      </h1>
                      <h2>Com o monitoramento é possível prever falhas, antecipar tendências e trabalhar estrategicamente para promover a melhor experiência aos usuários da rede corporativa. </h2>
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
                                  <span>Monitoramento de Servidores</span>
                              </div>
                              <div>
                                  <div class="infrastructure-service-item">
                                      Os servidores são a espinha dorsal do seu negócio.
                                  </div>
                                  <div class="infrastructure-service-item">
                                      Para minimizar o tempo de inatividade e garantir o desempenho máximo de
                                      seu site e serviços, o monitoramento constante de sua infraestrutura de
                                      servidores e seu datacenter é vital.<br />
                                      Ao rastrear o tempo de atividade, integridade, espaço em disco e desempenho
                                      de seus servidores, você pode evitar interrupções e identificar hogs de largura
                                      de banda.<br />
                                  </div>


                              </div>
                          </div>
                      </div>
                      <div class="col-sm-4 col-md-4 infrastructure-service">
                          <div class="infrastructure-service-item-box2">
                              <div class="infrastructure-service-title2">
                                  <h5>FIREWALL</h5>
                                  <span>Monitoramento de Firewalls</span>
                              </div>

                              <div class="infrastructure-service-item">
                                  A estabilidade do firewall da rede é responsável pela proteção tanto dos processos em execução quanto dos dados sensíveis.<br />

                              </div>
                              <div class="infrastructure-service-item">
                                  É de maior importância para a segurança corporativa que o firewall seja estável, e ainda mais vital, portanto,
                                  que o firewall permaneça ininterrupto.
                              </div>



                          </div>
                      </div>
                      <div class="col-sm-4 col-md-4 infrastructure-service">
                          <div class="infrastructure-service-item-box3">
                              <div class="infrastructure-service-title3">
                                  <h5>INFRAESTRUTURA</h5>
                                  <span>Monitoramento da Infraestrutura de TI</span>
                              </div>
                              <div>
                                  <div class="infrastructure-service-item">
                                      As interrupções nos serviços de TI podem paralisar a empresa.
                                  </div>

                                  <div class="infrastructure-service-item">
                                      Com o monitoramento 24/7 da BRQueiroz, você obtém uma série de sensores que tornam o monitoramento da sua
                                      infraestrutura algo simples. Desfrute de uma visão geral clara do tráfego de rede de entrada e saída e seja informado imediatamente em caso de falha.
                                      Isso permitirá que você tome medidas imediatas para restaurar a segurança do seu sistema.

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
                    <h1>A <span>INFRAESTRUTURA</span> <small>SERVIÇOS BRQUEIROZ</small></h1>
                    <h2>Uma boa infra-estrutura cria as bases para sua empresa ter estabilidade e segurança nos processos e equipamentos. Aqui a BRQueiroz vai acompanhar a necessidade da sua empresa, para garantir que a melhor performance e estabilidade estarão sempre ao seu alcance.</h2>
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
                                <span>Implantação de Projetos de Cabeamento Estrutura e Fibra Óptica</span>
                            </div>
                            <div>
                                <div class="infrastructure-service-item">
                                Cabeamento Estruturado Cat5, Cat6 e Cat6A
                                </div>
                                <div class="infrastructure-service-item">
                                Backbones ópticos monomodo e multímodo
                                </div>
                                <div class="infrastructure-service-item">
                                Montagem e Reestruturação de Racks
                                </div>
                                <div class="infrastructure-service-item">
                                Confecção de Espelhamentos UTP entre Racks
                                </div>
                                <div class="infrastructure-service-item-last">
                                Certificação de ambiente UTP e óptico
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 col-md-4 infrastructure-service">
                        <div class="infrastructure-service-item-box2">
                            <div class="infrastructure-service-title2">
                                <h5>WIRELESS</h5>
                                <span>Implantação de projetos de Rede sem fio indoor e interligações ponto a ponto de longa distância</span>
                            </div>
                            <div>
                                <div class="infrastructure-service-item">
                                Ambiente Wireless 5.8Ghz
                                </div>
                                <div class="infrastructure-service-item">
                                Conexões ponto a ponto
                                </div>
                                <div class="infrastructure-service-item">
                                Conexões ponto multiponto
                                </div>
                                <div class="infrastructure-service-item">
                                Ambientes internos de rede sem fio (WiFi)
                                </div>
                                <div class="infrastructure-service-item-last">
                                Elaboração de projetos e construção de estruturas Wireless
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 col-md-4 infrastructure-service">
                        <div class="infrastructure-service-item-box3">
                            <div class="infrastructure-service-title3">
                                <h5>CÂMERA (IP)</h5>
                                <span>Implantação de Projetos de Câmeras IP em ambientes industriais e patrimoniais</span>
                            </div>
                            <div>
                                <div class="infrastructure-service-item">
                                Ambientes de câmera IP Fixas
                                </div>
                                <div class="infrastructure-service-item">
                                Ambientes de câmera IP Panorâmicas
                                </div>
                                <div class="infrastructure-service-item">
                                Ambientes de câmera IP 360°
                                </div>
                                <div class="infrastructure-service-item-last">
                                Sistema de Monitoramento Digifort
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
                        <h1>CONTRATO DE <span>SUPORTE 24X7</span></h1>
                        <h2>Nosso contrato garante a você e sua empresa a tranquilidade necessária para gerenciar seus negócios sem a preocupação de travamentos, quebras ou imprevistos do dia-a-dia.<br><br>
                        A contratação é modular e pode envolver simultaneamente serviços de monitoramento on-line dos serviços contratatos, suporte técnico remoto e presencial dos nossos especialistas, reposição de peças, dentro outros serviços diferenciais.
                        </h2>

                    <div class="clearfix"></div>
                    <? if(!$_mobile){?>
                    <div class="col-md-12">
                       <div class="row">
                       <div class="contract_banner">
                        <span class="contract_banner1">ENTRE EM CONTATO E FAÇA UM<br>ORÇAMENTO SEM COMPROMISSO</span>
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
                            <li>Monitoramento da infraestrutura de banco de dados</li>
                            <li>Plantão 24x7 e Service Desk</li>
                            <li>Prevenção contra qualquer ocorrência ou mal funcionamento</li>
                            <li>Garantia de atendimento preferencial e imediato</li>
                            <li>Reposição das peças da infra-estrutura com defeito</li>
                            <li>Economia em contratação de consultoria e serviços</li>
                            <li>Dispensa a contratação de equipe interna à empresa</li>
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
                       <h1>RESULTADOS<br> <span>VISÍVEIS</span></h1>
                       <h2>QUALIDADE<br> <span>GARANTIDA</span></h2>
                       <img src="media/img/infrastructure_gallery_icon.png" class="img-responsive center-block" alt="">
                       <h3><em>Confira nossa galeria de trabalhos executados</em></h3>
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
                       <h1>RESULTADOS<br> <span>VISÍVEIS</span></h1>
                       <h2>QUALIDADE<br> <span>GARANTIDA</span></h2>
                       <img src="media/img/infrastructure_gallery_icon.png" class="img-responsive center-block" alt="">
                       <h3><em>Confira nossa galeria de trabalhos executados</em></h3>
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
                       <h1><em style="background: #2461a9; font-size: 20px; line-height: 35px; color: #ffffff; float: left; padding: 0px 12px; margin-right: 15px; display:block; font-style: normal;">DESTAQUE</em> <span style="display: block; float: left; text-transform: uppercase; font-size: 20px; line-height: 35px; color: #2762c0;">INFRA-ESTRUTURA COMPLETA + DATA CENTER - 08/2018</span></h1>            
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
						<span>Confira a galeria completa do<br> processo de implementação no <b>SUMERBOL SUPERMERCADOS</b></span>
						<em>VER A GALERIA (29 FOTOS)</em>
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
                    <h1>PRINCIPAIS <span>PARCEIROS</span> <small><em>Empresas parceiras que fazem a diferença na entrega de um serviço de qualidade</em></small></h1>
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
                  <h1>CASES DE <span>SUCESSO</span></h1>
              </div>
              <div class="col-md-12">
                  <div class="case-box">
                  <div class="col-sm-3 col-md-2">
                      <div class="row">
                      <h2><em>ATUALIZAÇÃO DE INFRAESTRUTURA TECNOLÓGICA</em></h2>
                      <h3><em>INSTITUIÇÃO EDUCACIONAL</em></h3>
                      </div>
                      </div>
                  </div>
                  <div class="col-sm-9 col-md-10">
                      <p>Desenvolvemos um grande projeto de atualização de infraestrutura tecnológica, com foco na preparação de sua infraestrutura, para possibilitar ainda mais avanços tecnológicos, com ênfase na utilização de tecnologias Microsoft.</p>
                      <p>O projeto teve como objetivo a atualização e otimização de infraestruturas de virtualização com Windows Server 2012 R2, Hyper-V, Failover Clustering com gerenciamento provido através do System Center Virtual Machine Manager 2012 R2, provendo uma camada para sustentação dos serviços do Microsoft Active Directory e suas features, além de estruturas de virtualização de aplicações com o Remote Desktop Services e infraestruturas de Banco de dados do Microsoft SQL Server 2012.</p>
                  </div>
              </div>
              <div class="clearfix"></div>
              <div class="col-md-12">
                  <div class="case-box">
                  <div class="col-sm-3 col-md-2">
                      <div class="row">
                      <h2><em>REFORMULAÇÃO DA ESTRUTURA<br> DE EMAILS E COMUNICAÇÃO</em></h2>
                      <h3><em>EMPRESA DO SEGMENTO AÉREO</em></h3>
                      </div>
                  </div>
                  </div>
                  <div class="col-sm-9 col-md-10">
                      <p>Em virtude da segmentação de seus negócios e também na busca pelo ganho de produtividade, nossos arquitetos, analisaram a infraestrutura e identificaram a oportunidade de utilização dos serviços do Office365, </p>
                      <p>O projeto teve por objetivo a segmentação de empresas em diferentes Tenants do Office365, além da ativação de novos recursos para compartilhamento arquivos através da utilização do Sharepoint e da utilização de frentes de colaboração Skype for Business, possibilitando aos usuários o planejamento e a execução de reuniões via áudio e videoconferência, ambas com compartilhamento de documentos e recursos, otimizando e reduzindo custos.</p>
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
                    <p>Ligue agora ou envie um e-mail para <strong>contato@brqueiroz.com.br</strong></p>
                </div>
                </div>
                <div class="col-md-6 contact-info-details">
                <div class="col-sm-10 col-md-10">
                    <h4>ONDE ESTAMOS</h4>
                    <address>Rua Cândido Portinari, n° 254<br />
                    CEP 14020-140 | Bairro Jd. América<br />
                    Ribeirão Preto, São Paulo | Brasil</address>
                </div>
                </div>
                <div class="clearfix"></div>
            	<? }?>
                <div class="col-sm-5 col-md-4">
                   <div class="contact-form">
                    <h2>ENTRE EM CONTATO</h2>
                    <h3>DEIXE SUA MENSAGEM</h3>
                    <form id="form" method="post">
                        <div class="row">
                          <div class="col-md-12">
                              <div class="form-group">
                              	<label>Nome</label>
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
                              <label>Telefone</label>
                                <input type="text" class="form-control input-lg validar" name="phone" id="phone" placeholder="Telefone" value="">
                              </div>
                          </div>
                          <div class="col-md-6">
                              <div class="form-group">
                              	<label>Celular</label>
                                <input type="text" class="form-control input-lg validar" name="mobile" id="mobile" placeholder="Celular" value="">
                              </div>
                          </div>
                          <div class="col-md-12">
                              <div class="form-group">
                              	<label>Cidade e Estado</label>
                                <input type="text" class="form-control input-lg validar" name="city" id="city" placeholder="Cidade e Estado" value="">
                              </div>
                          </div>
                          <div class="col-md-12">
                              <div class="form-group">
                              	<label>Mensagem</label>
                                <textarea class="form-control input-lg" rows="6" name="message" id="message" placeholder="Digite sua mensagem"></textarea>
                              </div>
                          </div>
                        </div>
                      <button type="submit" class="btn btn-primary btn-md pull-right btn-submit" id="submit-form" name="submit-form">Enviar</button>
                    </form>
                </div>
              </div>
                <div class="col-sm-7 col-md-8">
                <div class="contact-info">
                <? if(!$_mobile){?>
                    <div class="col-md-6 contact-info-details">
                    <div class="col-sm-2 col-md-2"><img src="media/img/contact_place.png" alt=""></div>
                    <div class="col-sm-10 col-md-10">
                        <h4>ONDE ESTAMOS</h4>
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
                        <p>Ligue agora ou envie um e-mail para <strong>contato@brqueiroz.com.br</strong></p>
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
                            <p><img src="media/img/footer_arrow.png" alt=""> Copyright 2017 Todos os direitos reservados.</p>
                        </div>
                        <? if(!$_mobile){?>
                        <div class="col-sm-6 col-md-6 text-right">
                            <p><a href="http://www.julioguimaraes.com.br" target="_blank">desenvolvido por Julio Guimarães | Inventandus</a></p>
                        </div>
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