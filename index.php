<?php
$title = "Shinken Monitoring - Index";
?>

<?php include 'header.php'; ?>
    <div id="container-fluid">      
        <ul id="Menu">
            <li>
                <a href="#Slide1"><img alt="Icon Menu Home Shiken Framework" src="img/menu_icons/home.png">Home</a>
            </li>     
            <li>
                <a><img alt="Icon Menu Ready to start Shiken Framework" src="img/menu_icons/start.png">Ready to start</a>
                <ul>
                    <li><a href="#ShinkenIo" data-target="#Carousel1" data-slide-to="0">Shinken Io</a></li>
                    <li><a href="#ShinkenIo" data-target="#Carousel1" data-slide-to="1">Extend Monitoring</a></li>
                </ul>
            </li>
            <li>
                <a><img alt="Icon Menu Scalability Shiken Framework" src="img/menu_icons/extend.png">Scalability</a>
                <ul>
                    <li><a href="#Slide3" data-target="#Carousel2" data-slide-to="0">LAN</a></li>
                    <li><a href="#Slide3" data-target="#Carousel2" data-slide-to="1">DMZ</a></li>                
                    <li><a href="#Slide3" data-target="#Carousel2" data-slide-to="2">Multi-Datacenters</a></li>        
                </ul>  
            </li>
            <li>
                <a><img alt="Icon Menu Business Focus Shiken Framework" src="img/menu_icons/business.png">Business Focus</a>
                <ul>
                    <li><a href="#Slide4" data-target="#Carousel3" data-slide-to="0">Root Problem analysis</a></li>
                    <li><a href="#Slide4" data-target="#Carousel3" data-slide-to="1">Alert Filtering</a></li> 
                </ul>
            </li>      
            <li>
                <a><img alt="Icon Menu Virtualisation Shiken Framework" src="img/menu_icons/virtualisation.png">Virtualisation</a>
                <ul>
                    <li><a href="#Slide5" data-target="#Carousel4" data-slide-to="0">Automatic Vmware Topology </a></li>
                    <li><a href="#Slide5" data-target="#Carousel4" data-slide-to="1">Amazon EC2 Monitoring</a></li> 
                </ul>
            </li>
        </ul>
<!--<a href="https://github.com/naparuba/shinken"><img style="position: absolute; top: 40; right: 0; border: 0;z-index:1000;" src="https://camo.githubusercontent.com/e7bbb0521b397edbd5fe43e7f760759336b5e05f/68747470733a2f2f73332e616d617a6f6e6177732e636f6d2f6769746875622f726962626f6e732f666f726b6d655f72696768745f677265656e5f3030373230302e706e67" alt="Fork me on GitHub" data-canonical-src="https://s3.amazonaws.com/github/ribbons/forkme_right_green_007200.png"></a>-->
        
    <div class="Slide row" id="Slide1">
        <div class="Gradient"></div>
        <div class="row">
            <div class="col-md-2">

            </div>
            <div class="col-md-8">
              <img alt="Mascote" class="Mascote_enterprise" src="img/mascote_enterprise.png">       
              <img alt="Mascote" class="Mascote" src="img/mascote.png">       
                <h1>Flexible. Strongly flexible.</h1>
                <p>Shinken is a monitoring Solution. It's a Python Nagios® Core total</p>
                <p>and large environment management.</p>
                <ul>
                    <li><img alt="Ready to run monitoring packs" src="img/CheckIcon.png"><a href="#Slide2">Ready to run monitoring packs</a></li>
                    <li><img alt="Endless scalability and RAID-like availability" src="img/CheckIcon.png"><a href="#Slide3">Endless scalability and RAID-like availability</a></li>
                    <li><img alt="Focus on critical business impacts only" src="img/CheckIcon.png"><a href="#Slide4">Focus on critical business impacts only</a></li>
                    <li><img alt="Full virtualization integration" src="img/CheckIcon.png"><a href="#Slide5">Full virtualization integration</a></li>
                    <li><img alt="Keep your Nagios® configuration and plugins" src="img/CheckIcon.png">Keep your Nagios® configuration and plugins</li>       
                </ul>
                <a id="download_open_source" href="download.php" class="btn btn-md btn-primary"><img alt="Download Shinken Framework" src="img/DownloadIcon.png">Download Free<br>Open Source version</a>
                <a id="download_enterprise" href="https://www.shinken-enterprise.com/contact/" class="btn btn-md btn-primary"><img alt="Ask for a quote for Shinken Enterprise" src="img/DownloadIcon.png">Try the Full version<br>( Shinken Enterprise )</a>
            </div>
            <div class="col-md-2">

            </div>
        </div>
    </div>

    <div class="Slide" id="Slide2">
    <div class="row">
        <div class="col-md-2"></div>
        <div class="TitleSlide col-md-3">
            <img alt="ShinkenIo Logo" class="LogoIO" src="img/ShinkeIo.png">       
        </div>
        <div class="col-md-7"></div>
    </div>
        <div id="Carousel1" class="carousel slide row">
            <div class="col-md-7"></div>
              <ol class="carousel-indicators col-md-3">
                <li data-target="#Carousel1" id="ShinkenIo" data-slide-to="0" class="active"><p>Shinken Io</p></li>
                <li data-target="#Carousel1" id="ExtendMonitoring" data-slide-to="1"><p>Extend Monitoring</p></li>
              </ol>
            <div class="col-md-2"></div>
      <div class="carousel-inner">
        <div class="item active col-xs-12">
          <div class="container">
            <div class="carousel-caption">
                <div class="TitleBloc row">
                    <hr>
                    <h2>Ready to start !</h2>
                </div>
                <div class="row">
                    <div class="BlocTexte col-md-6">
                      <h3>Shinken packages will allow you to :</h3>
                        <ul>
                            <li>Quickly start to monitor your servers and applications</li>
                            <li>Reuse your Nagios® configuration</li>                        
                            <li>Easily apply best practices from the monitoring community</li>                        
                            <li>Load data from new sources (Puppet, Mysql, ...) 
and add new export methods (Graphite, PNP4Nagios, ...)</li>                        
                            <li>Exchange your own best practices</li>                        
                        </ul>
                        <a class="btn-danger btn" target="_blank" href="http://www.shinken.io/"> Lead me to shinken Io</a>
                    </div>
                    <div class="Illustration col-md-6">
                        <img class="Illustration" alt="Ready to start Plan" src="img/os-operators-logos.png">
                    </div>
                </div>
            </div>
          </div>
        </div>
        <div class="item col-xs-12">
          <div class="container">
            <div class="carousel-caption">
                <div class="row TitleBloc">
                    <hr>
                    <h2>To infinity and beyond !</h2>
                </div>
                <div class="row">
                    <div class="BlocTexte col-md-6">
                      <h3>Extend your monitoring platfom :</h3>
                      <p>The monitoring node doesn't give you what you need out of the box ?  You can easily extend it with configuration packs and modules. </p>
                      <h3>Configuration Packs</h3>
                      <p>The configuration packs are basically "ready to run" Nagios® configurations files, with templates and commands. And if you already know how to write a Nagios® configuration file, then you know how to write Shinken configuration packs (and can help the community ;-) ).</p>
                        <h3>Shinken modules</h3>
                        <p>Shinken is designed to be very flexible and modular. If you want to load your configuration from a specific CMDB or export data into a brand new performance data tool, you'll be able to write modules to do that. Take a look at the sample modules, it's in Python and it's really easy.</p>
                    </div>
                    <div class="Illustration col-md-6">
                    </div>
                </div>
                <hr>
            </div>               
          </div>
        </div>
      </div>
    </div>   
    </div>

    <div class="Slide" id="Slide3">
    <div class="row">
        <div class="col-md-2"></div>
        <div class="TitleSlide col-md-3">
            <img alt="Shinken Logo" class="LogoIO" src="img/Shinken.png">       
        </div>
        <div class="col-md-7"></div>
    </div>
        <div id="Carousel2" class="carousel slide row">
            <div class="col-md-7"></div>
              <ol class="carousel-indicators col-md-3">
                <li data-target="#Carousel2" data-slide-to="0" class="active"><p>LAN</p></li>
                <li data-target="#Carousel2" data-slide-to="1"><p>DMZ</p></li>
                <li data-target="#Carousel2" data-slide-to="2"><p>Multi-datacenters</p></li>
              </ol>
            <div class="col-md-2"></div>
      <div class="carousel-inner">
        <div class="item active col-xs-12">
          <div class="container">
            <div class="carousel-caption">
                <div class="row TitleBloc">
                <hr>
                    <h2>Scale without limits </h2>
                </div>
                <div class="row">
                    <div class="BlocTexte col-md-6">
                      <h3>Easy scalability for all</h3>
                      <p>Discover a world where the tool is scalable by design. Shinken has no limits regarding distribution. Scale it to your LAN, through your DMZs and even across several datacenters! </p>
                      <h3>Raid like availability</h3>
                      <p>You can be sure Shinken won't stop: define spare nodes, and should an active node go down, the spare will take it's place.</p>
                        <h3>Mixed architectures</h3>
                        <p>It's always smoother to monitor a Windows host from another Windows host, a Linux from a Linux, and so on. Hopefully, Shinken won't force you to choose between Linux and Windows, just get both! You will be able to check windows with the WMI protocol within your Active Directory domain on a Windows poller (no more password in the configuration files!), and check your network and Unix servers from a Linux poller! </p>
                    </div>
                    <div class="Illustration col-md-6">
                        <img alt="LAN Plan" src="img/scalability.png">
                    </div>
                </div>
                <hr>
            </div>
          </div>
        </div>
        <div class="item col-xs-12">
          <div class="container">
            <div class="carousel-caption">
                <div class="row TitleBloc">
                    <hr>
                    <h2>DMZ monitoring : no more a security nightmare !</h2>
                </div>
                <div class="row">
                    <div class="BlocTexte col-md-6">
                      <h3>Reconcile with the Computer Security Manager :</h3>
                      
<p>1 . Install a Shinken poller in the DMZ</p>

<p>2 . Tag the DMZ hosts as such in your configuration file</p>

<p>3 . Enjoy : DMZ Shinken poller handles all the checks and collects all data, eliminating unnecessary interaction between LAN and DMZ.</p>

                    </div>
                    <div class="Illustration col-md-6">
                        <img alt="DMZ monitoring Plan" src="img/distant_or_dmz.png">
                    </div>
                </div>
                <hr>
            </div>               
          </div>
        </div>
        <div class="item col-xs-12">
          <div class="container">
            <div class="carousel-caption">
                <div class="row TitleBloc">
                    <hr>
                    <h2>Monitor several datacenters ? Yes you can</h2>
                </div>
                <div class="row">
                    <div class="BlocTexte col-md-6">
                      <h3>Get a structural view of your datacenters:</h3>
                        <ul>
                            <li>Centralize the configuration for all your datacenters</li>
                            <li>Get a global view of your infrastructure, or display one for each datacenter, or both!</li>                                
                            <li>Scale one datacenter or another, it's up to you</li>                        
                            <li>Organize your ressources within sub-datacenters to reflect your internal organization</li>                        
                        </ul>
                    </div>
                    <div class="Illustration col-md-6">
                        <img alt="Multi-datacenters Plan" src="img/shinken-architecture-global-realm.png">
                    </div>
                </div>
                <hr>
            </div>               
          </div>
        </div>
      </div>
    </div> 
    </div>
        
        
    <div class="Slide" id="Slide4">
    <div class="row">
        <div class="col-md-2"></div>
        <div class="TitleSlide col-md-3">
            <img alt="Shinken Logo" class="LogoIO" src="img/Shinken.png">       
        </div>
        <div class="col-md-7"></div>
    </div>
        <div id="Carousel3" class="carousel slide row">
            <div class="col-md-7"></div>
          <ol class="carousel-indicators col-md-3">
            <li data-target="#Carousel3" data-slide-to="0" class="active"><p>Root problem analysis</p></li>
            <li data-target="#Carousel3" data-slide-to="1"><p>Alert Filtering</p></li>
          </ol>
    <div class="col-md-2"></div>
      <div class="carousel-inner">
        <div class="item active col-xs-12">
          <div class="container">
            <div class="carousel-caption">
                <div class="row TitleBloc">
                    <hr>
                    <h2>Focus on your business</h2>
                </div>
                <div class="row">
                    <div class="BlocTexte col-md-6">
                      <h3>What really matters is not IT. Your end-users apps are.</h3>
                      <p>End users applications are delivered through your IT, which is shared between very important applications like e-mails or CRM, and less important ones like your development environment. With Shinken, you will be able to describe your IT from the physical servers to the high level apps. </p>
                      <h3>Find the root problem</h3>
                      <p>When facing an incident, getting a full page of 500+ red lines like common monitoring apps usually do is useless if only one of them is interesting: 499 are consequences, 1 is the root problem! Shinken can filter out the consequences for you, allowing you to diagnose faster. This will also solve your "too much" alerts problems. </p>
                        <h3>Sort by business impact</h3>
                        <p>Have you ever seen an administrator rush for the server room to fix a development server? I guess not. But for production ones, they do ;-). You need to figure out in seconds which problems are impacting your production applications, and which ones can wait after your coffee break. </p>
                    </div>
                    <div class="Illustration col-md-6">
                        <img alt="Root Problem analysis" src="img/shinken-business-rules.png">
                    </div>
                </div>
                <hr>
            </div>
          </div>
        </div>
        <div class="item col-xs-12">
          <div class="container">
            <div class="carousel-caption">
                <div class="row TitleBloc">
                    <hr>
                    <h2>Production can’t wait (but production only).</h2>
                </div>
                <div class="row">
                    <div class="BlocTexte col-md-6">
                      <p>Have you ever seen an administrator rush for the server room to fix a development server ? I guess not. But for production ones, they do ;-). Your team should focus on production, and manage the other environment later. Give them the tools taking this into account. </p>
                      <h3>Filtering testing/production alerts</h3>
                      
<p>While problems on production need to trigger a SMS, the testing environment probably doesn't. With Shinken you can easily filter root problem alarms to only receive notifications that really NEED action. </p>
                        <h3>Day != Night</h3>

<p>You may not need to receive SMS during the day, or and e-mails during the night. With Shinken you can easily manage notification canals without having to add another layer of complexity to your configuration. </p>
                        <h3>Sometime it's critical for business, sometime it's not</h3>

<p>The payroll application is a good example. Do you need to wake the administrator at 3AM because the server hosting it is down? Probably not... Unless of course we are nearing the payroll! With Shinken you are able to define business impact modulations based on the period, like the 3 days at the end of the month :). </p>

                    </div>
                    <div class="Illustration col-md-6">
                        <img alt="Alert Filtering" class="InnerSlider" src="img/criticity_prod.png">
                    </div>
                        <ul class="Rounds">
                            <li onclick="SlideImg('Slide4','criticity_prod');"></li>
                            <li onclick="SlideImg('Slide4','criticity_qualif');"></li>
                        </ul>
                <hr>
                </div>
                <hr>
            </div>               
          </div>
        </div>
      </div>
    </div>
    </div>
        
    <div class="Slide" id="Slide5">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="TitleSlide col-md-3">
                <img alt="Shinken Logo" class="LogoIO" src="img/Shinken.png">       
            </div>
            <div class="col-md-7"></div>
        </div>
            <div id="Carousel4" class="carousel slide row">
            <div class="col-md-7"></div>
              <ol class="carousel-indicators col-md-3">
                <li data-target="#Carousel4" data-slide-to="0" class="active"><p>Automatic Vmware Topology </p></li>
                <li data-target="#Carousel4" data-slide-to="1"><p>Amazon EC2 Monitoring</p></li>
              </ol>
            <div class="col-md-2"></div>
      <div class="carousel-inner">
        <div class="item active col-xs-12">
          <div class="container">
            <div class="carousel-caption">
                <div class="row TitleBloc">
                  <hr>
                    <h2>Because an ESXi host can fail</h2>
                </div>
                <div class="row">
                    <div class="BlocTexte col-md-6">
                      <h3>What if an ESXi host crashes?</h3>
                      <p> Do you rather receive 50+ simultaneous alerts for your downed VMs, or just one critical alert about the fact that your hypervisor is down? I'll bet you'll choose the latter!

The VMWare module will solve this problem for you : it will automatically check through vSphere on which ESXi are the VM now, and create notification dependencies from it. </p>
                      <h3>What about VMotion and my host-dependencies?</h3>
                      <p>Don't worry about VMotion, if your VM has moved to another ESXi, the VMWare module will detect it, and automatically update the link without restarting Shinken.</p>
                        <h3>VMWARE IS GREAT, BUT I USE XEN/KVM/OPENSTACK/...</h3>
                        <p>No problem with this. In fact Xen and KVM are already managed, and new virtualization framework is easy to add. If it has an API, it can be integrated!</p>
                    </div>
                    <div class="Illustration col-md-6">
                        <img alt="Automatic Vmware Topology" class="InnerSlider" src="img/Illustration0402.png">
                    </div>
                        <ul class="Rounds">
                            <li onclick="SlideImg('Slide5','Illustration0402');"></li>
                            <li onclick="SlideImg('Slide5','vmotion');"></li>
                        </ul>
                </div>
                <hr>
            </div>
          </div>
        </div>
        <div class="item col-xs-12">
          <div class="container">
            <div class="carousel-caption">
                <div class="row TitleBloc">
                    <hr>
                    <h2>EC2 is great. Monitor the apps on these hosts is great too.</h2>
                </div>
                <div class="row">
                    <div class="BlocTexte col-md-6">
                      <h3>Why monitor EC2 ?</h3>
                      <p>With the EC2 module you won't monitor EC2 itself, but you will be able to automatically monitor the applications (like Mysql or Apache) running on them. </p>
                      <h3>No double configuration</h3>
                      <p>This module will automatically load all your EC2 instances, and will use the EC2 tags to configure your hosts in Shinken. When your EC2 tags are filled, your configuration is done.</p>
                        <h3>Not only EC2</h3>
                        <p>As of today, only the EC2 module is available. But it won't be difficult to extend it to other cloud providers, like Rackspace, OVH or Gandi. Feel free to contribute on The Monitoring Station, we can help you for this. </p>
                    <a target="_blank" href="http://shinken.io/" class="btn btn-md btn-primary">Learn more about this</a>
                    </div>
                    <div class="Illustration col-md-6">
                        <img alt="Amazon EC2 Monitoring" src="img/ec2_shinken.png">
                    </div>
                </div>
                <hr>
            </div>               
          </div>
        </div>
      </div>
    </div> 
        </div>
</div>

    <script>
        function SlideImg(Slide,IdImg) {
            $('#'+Slide+' .InnerSlider').attr('src',"img/"+IdImg+".png");
        }
    </script>
<?php include'footer.php' ?>
