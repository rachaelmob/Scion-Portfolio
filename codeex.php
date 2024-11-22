<?php include("inc/html.head.php")?>



<body>

<div class="body-container">

    <!-- ============================ SIDE BAR ============================ -->
    <?php include("inc/sidenav.php");?>



    <!-- ============================ PAGE CONTENT ============================ -->
    <div class="page-content">
        

        <!-- ============================ BANNER ============================ -->
        <?php include("inc/banner.php")?>

        
        <!-- ============================ CODE EXAMPLES ============================ -->
        <section id="code-examples">
            <h1>CODE EXAMPLES</h1>
        
            <button class="accordion">Netmatters Sticky Header</button>
            <div class="panel">
                <div class="mytabs">

                    <input type="radio" name="stickyheadtab" id="html" checked="checked">
                    <label for="html">HTML</label>
                    <div class="tab">
                        <h1>HTML</h1>
                        <p>
                            The header and navigation code inside the shy-nav and fixed-nav ids. There are two headers the 
                            fixed-nav stays at the top of the page at all times whilst the shy-nav id is the header that hides on scroll down
                            and reappears when you scroll up. Copy the code inside the shy-nav div and paste it in the fixed-nav. 
                        </p>
                        <div class="code-wrap">
                            <pre>
                                <code id="code">
&lt;header&gt;
&lt;div id=&quot;shy-nav&quot;&gt;
    &lt;!-- ================================ HEADER ================================  --&gt;
    &lt;div class=&quot;header-container&quot;&gt;
        &lt;div class=&quot;container&quot;&gt;
            &lt;div class=&quot;header-row&quot;&gt;

                &lt;div class=&quot;logo-head&quot;&gt;
                    &lt;a href=&quot;./index.php&quot;&gt;
                        &lt;img src=&quot;./img/netmatters-logo-header.png&quot; alt=&quot;netmatterslogo navy blue&quot;&gt;
                    &lt;/a&gt;
                &lt;/div&gt;

                &lt;div class=&quot;phone-burger&quot;&gt;
                    &lt;div class=&quot;phone&quot;&gt;
                        &lt;a href=&quot;#&quot;&gt;
                            &lt;span&gt;&lt;i class=&quot;fa-solid fa-phone-volume&quot;&gt;&lt;/i&gt;&lt;/span&gt;
                        &lt;/a&gt;
                    &lt;/div&gt;
                    &lt;div class=&quot;actions&quot;&gt;
                            &lt;a href=&quot;#&quot; class=&quot;btn support&quot;&gt;
                                &lt;span&gt;&lt;i class=&quot;fa-solid fa-computer-mouse&quot;&gt;&lt;/i&gt;&lt;/span&gt;
                                Support
                            &lt;/a&gt;
                            &lt;a href=&quot;contact-us.php&quot; class=&quot;btn contact&quot;&gt;
                                &lt;span&gt;&lt;i class=&quot;fa-regular fa-paper-plane&quot;&gt;&lt;/i&gt;&lt;/span&gt;
                                Contact
                            &lt;/a&gt;
                            &lt;div class=&quot;search-bar&quot;&gt;
                                &lt;form method=&quot;GET&quot; action=&quot;#&quot; accept-charset=&quot;UTF-8&quot;&gt;
                                    &lt;label for=&quot;search-bar&quot;&gt;&lt;/label&gt;
                                    &lt;input type=&quot;text&quot; id=&quot;search-bar&quot; placeholder=&quot;Search...&quot;&gt;
                                    &lt;button type=&quot;submit&quot;&gt;
                                        &lt;i class=&quot;fa-solid fa-magnifying-glass&quot;&gt;&lt;/i&gt;
                                    &lt;/button&gt;
                                &lt;/form&gt;
                            &lt;/div&gt;

                            &lt;button type=&quot;button&quot; class=&quot;hamburger btn&quot;&gt;
                                &lt;span class=&quot;ham-box&quot;&gt;
                                    &lt;span class=&quot;ham-bar&quot;&gt;&lt;/span&gt;
                                &lt;/span&gt;
                            &lt;/button&gt;
                    &lt;/div&gt; 
                &lt;/div&gt;
            &lt;/div&gt;

            &lt;div class=&quot;search-mobile&quot;&gt;
                &lt;form method=&quot;GET&quot; action=&quot;#&quot; accept-charset=&quot;UTF-8&quot;&gt;
                    &lt;label for=&quot;search-mobile&quot;&gt;&lt;/label&gt;
                    &lt;input type=&quot;text&quot; id=&quot;search-mobile&quot; placeholder=&quot;Search...&quot;&gt;
                    &lt;button type=&quot;submit&quot;&gt;
                        &lt;i class=&quot;fa-solid fa-magnifying-glass&quot;&gt;&lt;/i&gt;
                    &lt;/button&gt;
                &lt;/form&gt;
                &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;  

    &lt;!-- ================================ NAVIGATION BAR ================================  --&gt;
    &lt;div class=&quot;nav-bar&quot;&gt;
        &lt;div class=&quot;container&quot;&gt;
            &lt;!-- &lt;nav&gt; --&gt;
            &lt;ul class=&quot;main-nav&quot;&gt;
                &lt;li class=&quot;software&quot;&gt;
                    &lt;a&gt;
                        &lt;i class=&quot;fa-solid fa-laptop&quot;&gt;&lt;/i&gt;
                        &lt;small&gt;Bespoke&lt;/small&gt;
                        Software
                    &lt;/a&gt;
                    &lt;div class=&quot;drop-menu&quot;&gt;
                        &lt;ul class=&quot;container&quot;&gt;
                            &lt;li class=&quot;drop-title&quot;&gt;Our Bespoke Software Services&lt;/li&gt;
                            &lt;li&gt;
                                &lt;a href=&quot;#&quot;&gt;
                                    &lt;i class=&quot;fa-solid fa-gears&quot; aria-hidden=&quot;true&quot;&gt;&lt;/i&gt;
                                    &lt;span&gt;Bespoke CRM&lt;/span&gt;
                                &lt;/a&gt;
                            &lt;/li&gt;
                            &lt;li&gt;
                            &lt;a href=&quot;#&quot;&gt;&lt;i class=&quot;fa-solid fa-briefcase&quot; aria-hidden=&quot;true&quot;&gt;&lt;/i&gt;
                                &lt;span&gt;Business Automation&lt;/span&gt;
                            &lt;/a&gt;
                            &lt;/li&gt;
                            &lt;li&gt;
                            &lt;a href=&quot;#&quot;&gt;&lt;i class=&quot;fa-solid fa-shuffle&quot; aria-hidden=&quot;true&quot;&gt;&lt;/i&gt;
                                &lt;span&gt;Software Integrations&lt;/span&gt;
                            &lt;/a&gt;
                            &lt;/li&gt;
                            &lt;li&gt;
                                &lt;a href=&quot;#&quot;&gt;&lt;i class=&quot;fa-solid fa-mobile-screen&quot; aria-hidden=&quot;true&quot;&gt;&lt;/i&gt;
                                &lt;span&gt;Mobile App Development&lt;/span&gt;
                            &lt;/a&gt;
                            &lt;/li&gt;
                            &lt;li&gt;
                                &lt;a href=&quot;#&quot;&gt;&lt;i class=&quot;fa-solid fa-folder-open&quot; aria-hidden=&quot;true&quot;&gt;&lt;/i&gt;
                                &lt;span&gt;Bespoke Databases&lt;/span&gt;
                            &lt;/a&gt;
                            &lt;/li&gt;
                            &lt;li&gt;
                                &lt;a href=&quot;#&quot;&gt;&lt;i class=&quot;fa-solid fa-right-left&quot; aria-hidden=&quot;true&quot;&gt;&lt;/i&gt;
                                &lt;span&gt;Sharepoint Development&lt;/span&gt;
                            &lt;/a&gt;
                            &lt;/li&gt;
                            &lt;li&gt;
                            &lt;a href=&quot;#&quot;&gt;&lt;i class=&quot;fa-solid fa-download&quot; aria-hidden=&quot;true&quot;&gt;&lt;/i&gt;
                                &lt;span&gt;Operational Systems&lt;/span&gt;
                            &lt;/a&gt;
                            &lt;/li&gt;
                            &lt;li&gt;
                            &lt;a href=&quot;#&quot;&gt;&lt;i class=&quot;fa-solid fa-users&quot; aria-hidden=&quot;true&quot;&gt;&lt;/i&gt;
                                &lt;span&gt;Business Central Implementation&lt;/span&gt;
                            &lt;/a&gt;
                            &lt;/li&gt;
                            &lt;li&gt;
                            &lt;a href=&quot;#&quot;&gt;&lt;i class=&quot;fa-solid fa-laptop&quot; aria-hidden=&quot;true&quot;&gt;&lt;/i&gt;
                                &lt;span&gt;Internet of Things (IoT) Software&lt;/span&gt;
                            &lt;/a&gt;
                            &lt;/li&gt;
                            &lt;li&gt;
                            &lt;a href=&quot;#&quot;&gt;&lt;i class=&quot;fa-solid fa-cloud&quot; aria-hidden=&quot;true&quot;&gt;&lt;/i&gt;
                                &lt;span&gt;Intranet Development&lt;/span&gt;
                            &lt;/a&gt;
                            &lt;/li&gt;
                            &lt;li&gt;
                            &lt;a href=&quot;#&quot;&gt;&lt;i class=&quot;fa-solid fa-cloud-arrow-down&quot; aria-hidden=&quot;true&quot;&gt;&lt;/i&gt;
                                &lt;span&gt;Customer Portal Development&lt;/span&gt;
                            &lt;/a&gt;
                            &lt;/li&gt;
                            &lt;li&gt;
                            &lt;a href=&quot;#&quot;&gt;&lt;i class=&quot;fa-solid fa-earth-europe&quot; aria-hidden=&quot;true&quot;&gt;&lt;/i&gt;
                                &lt;span&gt;Reporting Hub&lt;/span&gt;
                            &lt;/a&gt;
                            &lt;/li&gt;
                        &lt;/ul&gt;
                    &lt;/div&gt;
                &lt;/li&gt;
    
                &lt;li class=&quot;support&quot;&gt;
                    &lt;a&gt;
                        &lt;i class=&quot;fa-solid fa-desktop&quot;&gt;&lt;/i&gt;  
                        &lt;small&gt;IT&lt;/small&gt;
                        &lt;span&gt;Support&lt;/span&gt;   
                    &lt;/a&gt;
                    &lt;div class=&quot;drop-menu&quot;&gt;
                        &lt;ul class=&quot;container&quot;&gt;
                            &lt;li class=&quot;drop-title&quot;&gt;Our IT Support Services&lt;/li&gt;
                            &lt;li&gt;
                                &lt;a href=&quot;#&quot;&gt;&lt;i class=&quot;fa-solid fa-headphones&quot; aria-hidden=&quot;true&quot;&gt;&lt;/i&gt;
                                    &lt;span&gt;Managed IT Support&lt;/span&gt;
                                &lt;/a&gt;
                            &lt;/li&gt;
                            &lt;li&gt;
                            &lt;a href=&quot;#&quot;&gt;&lt;i class=&quot;fa-solid fa-briefcase&quot; aria-hidden=&quot;true&quot;&gt;&lt;/i&gt;
                                &lt;span&gt;Business IT Support&lt;/span&gt;
                            &lt;/a&gt;
                            &lt;/li&gt;
                            &lt;li&gt;
                            &lt;a href=&quot;#&quot;&gt;&lt;i class=&quot;fa-solid fa-laptop&quot; aria-hidden=&quot;true&quot;&gt;&lt;/i&gt;
                                &lt;span&gt;Office 365 for Business&lt;/span&gt;
                            &lt;/a&gt;
                            &lt;/li&gt;
                            &lt;li&gt;
                            &lt;a href=&quot;#&quot;&gt;&lt;i class=&quot;fa-solid fa-graduation-cap&quot; aria-hidden=&quot;true&quot;&gt;&lt;/i&gt;
                                &lt;span&gt;IT Consultancy&lt;/span&gt;
                            &lt;/a&gt;
                            &lt;/li&gt;
                            &lt;li&gt;
                            &lt;a href=&quot;#&quot;&gt;&lt;i class=&quot;fa-solid fa-cloud&quot; aria-hidden=&quot;true&quot;&gt;&lt;/i&gt;
                                &lt;span&gt;Cloud Service Provider&lt;/span&gt;
                            &lt;/a&gt;
                            &lt;/li&gt;
                            &lt;li&gt;
                            &lt;a href=&quot;#&quot;&gt;&lt;i class=&quot;fa-solid fa-right-left&quot; aria-hidden=&quot;true&quot;&gt;&lt;/i&gt;
                                &lt;span&gt;Data Backup &amp;amp; Disaster Recovery&lt;/span&gt;
                            &lt;/a&gt;
                            &lt;/li&gt;
                        &lt;/ul&gt;
                    &lt;/div&gt;
                &lt;/li&gt;
    
                &lt;li class=&quot;digital&quot;&gt;
                    &lt;a&gt;
                        &lt;i class=&quot;fa-solid fa-chart-simple&quot;&gt;&lt;/i&gt;   
                        &lt;small&gt;Digital&lt;/small&gt;
                        Marketing
                    &lt;/a&gt;
                    &lt;div class=&quot;drop-menu&quot;&gt;
                        &lt;ul class=&quot;container&quot;&gt;
                            &lt;li class=&quot;drop-title&quot;&gt;Our Digital Marketing Services&lt;/li&gt;
                            &lt;li&gt;
                                &lt;a href=&quot;#&quot;&gt;&lt;i class=&quot;fa-solid fa-magnifying-glass&quot; aria-hidden=&quot;true&quot;&gt;&lt;/i&gt;
                                &lt;span&gt;Search Engine Optimisation (SEO)&lt;/span&gt;
                                &lt;/a&gt;
                            &lt;/li&gt;
                            &lt;li&gt;
                                &lt;a href=&quot;#&quot;&gt;&lt;i class=&quot;fa-solid fa-money-bill-1&quot; aria-hidden=&quot;true&quot;&gt;&lt;/i&gt;
                                &lt;span&gt;Pay Per Click Advertising (PPC)&lt;/span&gt;
                                &lt;/a&gt;
                            &lt;/li&gt;
                            &lt;li&gt;
                                &lt;a href=&quot;#&quot;&gt;&lt;i class=&quot;fa-solid fa-arrow-trend-up&quot; aria-hidden=&quot;true&quot;&gt;&lt;/i&gt;
                                &lt;span&gt;Conversion Rate Optimisation (CRO)&lt;/span&gt;
                                &lt;/a&gt;
                            &lt;/li&gt;
                            &lt;li&gt;
                                &lt;a href=&quot;#&quot;&gt;&lt;i class=&quot;fa-solid fa-envelope&quot; aria-hidden=&quot;true&quot;&gt;&lt;/i&gt;
                                &lt;span&gt;Email Marketing&lt;/span&gt;
                                &lt;/a&gt;
                            &lt;/li&gt;
                            &lt;li&gt;
                                &lt;a href=&quot;#&quot;&gt;&lt;i class=&quot;fa-solid fa-users&quot; aria-hidden=&quot;true&quot;&gt;&lt;/i&gt;
                                &lt;span&gt;Social Media Marketing&lt;/span&gt;
                                &lt;/a&gt;
                            &lt;/li&gt;
                            &lt;li&gt;
                                &lt;a href=&quot;#&quot;&gt;&lt;i class=&quot;fa-solid fa-pen&quot; aria-hidden=&quot;true&quot;&gt;&lt;/i&gt;
                                &lt;span&gt;Content Marketing&lt;/span&gt;
                                &lt;/a&gt;
                            &lt;/li&gt;
                        &lt;/ul&gt;
                    &lt;/div&gt;
                &lt;/li&gt;
    
                &lt;li class=&quot;telecoms&quot;&gt;
                    &lt;a&gt;
                        &lt;i class=&quot;fa-solid fa-phone-volume&quot;&gt;&lt;/i&gt;
                        &lt;small&gt;Telecoms&lt;/small&gt;
                        Services 
                    &lt;/a&gt;
                    &lt;div class=&quot;drop-menu&quot;&gt;
                        &lt;ul class=&quot;container&quot;&gt;
                            &lt;li class=&quot;drop-title&quot;&gt;Our Telecom Services&lt;/li&gt;
                    &lt;li&gt;
                    &lt;a href=&quot;#&quot;&gt;&lt;i class=&quot;fa-solid fa-ticket&quot; aria-hidden=&quot;true&quot;&gt;&lt;/i&gt;
                        &lt;span&gt;Business Mobile&lt;/span&gt;
                    &lt;/a&gt;
                    &lt;/li&gt;
                    &lt;li&gt;
                    &lt;a href=&quot;#&quot;&gt;&lt;i class=&quot;fa-solid fa-phone&quot; aria-hidden=&quot;true&quot;&gt;&lt;/i&gt;
                        &lt;span&gt;Hosted VoIP Provider&lt;/span&gt;
                    &lt;/a&gt;
                    &lt;/li&gt;
                    &lt;li&gt;
                    &lt;a href=&quot;#&quot;&gt;&lt;i class=&quot;fa-solid fa-square-phone&quot; aria-hidden=&quot;true&quot;&gt;&lt;/i&gt;
                        &lt;span&gt;Business VoIP System&lt;/span&gt;
                    &lt;/a&gt;
                    &lt;/li&gt;
                    &lt;li&gt;
                    &lt;a href=&quot;#&quot;&gt;&lt;i class=&quot;fa-solid fa-gauge&quot; aria-hidden=&quot;true&quot;&gt;&lt;/i&gt;
                        &lt;span&gt;Business Broadband&lt;/span&gt;
                    &lt;/a&gt;
                    &lt;/li&gt;
                    &lt;li&gt;
                    &lt;a href=&quot;#&quot;&gt;&lt;i class=&quot;fa-regular fa-handshake&quot; aria-hidden=&quot;true&quot;&gt;&lt;/i&gt;
                        &lt;span&gt;Leased Lines Provider&lt;/span&gt;
                    &lt;/a&gt;
                    &lt;/li&gt;
                    &lt;li&gt;
                    &lt;a href=&quot;#&quot;&gt;&lt;i class=&quot;fa-solid fa-phone-volume&quot; aria-hidden=&quot;true&quot;&gt;&lt;/i&gt;
                        &lt;span&gt;3CX Systems&lt;/span&gt;
                    &lt;/a&gt;
                    &lt;/li&gt;
                        &lt;/ul&gt;
                    &lt;/div&gt;
                &lt;/li&gt;
    
                &lt;li class=&quot;webdesign&quot;&gt;
                    &lt;a&gt;
                        &lt;i class=&quot;fa-solid fa-code&quot;&gt;&lt;/i&gt;   
                        &lt;small&gt;Web&lt;/small&gt;
                        Design  
                    &lt;/a&gt;
                    &lt;div class=&quot;drop-menu&quot;&gt;
                        &lt;ul class=&quot;container&quot;&gt;
                            &lt;li class=&quot;drop-title&quot;&gt;Our Website Design Services&lt;/li&gt;
                            &lt;li&gt;
                                &lt;a href=&quot;#&quot;&gt;&lt;i class=&quot;fa-solid fa-pen&quot; aria-hidden=&quot;true&quot;&gt;&lt;/i&gt;
                                &lt;span&gt;Bespoke Website Design&lt;/span&gt;
                                &lt;/a&gt;
                            &lt;/li&gt;
                            &lt;li&gt;
                                &lt;a href=&quot;#&quot;&gt;&lt;i class=&quot;fa-solid fa-cart-shopping fa-flip-horizontal&quot; aria-hidden=&quot;true&quot;&gt;&lt;/i&gt;
                                &lt;span&gt;eCommerce Website Design&lt;/span&gt;
                                &lt;/a&gt;
                            &lt;/li&gt;
                            &lt;li&gt;
                                &lt;a href=&quot;#&quot;&gt;&lt;i class=&quot;fa-solid fa-display&quot; aria-hidden=&quot;true&quot;&gt;&lt;/i&gt;
                                &lt;span&gt;Pay Monthly Websites&lt;/span&gt;
                                &lt;/a&gt;
                            &lt;/li&gt;
                            &lt;li&gt;
                                &lt;a href=&quot;#&quot;&gt;&lt;i class=&quot;fa-solid fa-bullhorn&quot; aria-hidden=&quot;true&quot;&gt;&lt;/i&gt;
                                &lt;span&gt;Branding &amp;amp; Design&lt;/span&gt;
                                &lt;/a&gt;
                            &lt;/li&gt;
                            &lt;li&gt;
                                &lt;a href=&quot;#&quot;&gt;&lt;i class=&quot;fa-solid fa-mobile-screen&quot; aria-hidden=&quot;true&quot;&gt;&lt;/i&gt;
                                &lt;span&gt;Mobile App Development&lt;/span&gt;
                                &lt;/a&gt;
                            &lt;/li&gt;
                            &lt;li&gt;
                                &lt;a href=&quot;#&quot;&gt;&lt;i class=&quot;fa-solid fa-cloud&quot; aria-hidden=&quot;true&quot;&gt;&lt;/i&gt;
                                &lt;span&gt;Web Hosting&lt;/span&gt;
                                &lt;/a&gt;
                            &lt;/li&gt;
                        &lt;/ul&gt;
                    &lt;/div&gt;
                &lt;/li&gt;
    
                &lt;li class=&quot;cyber&quot;&gt;
                    &lt;a&gt;
                        &lt;i class=&quot;fa-solid fa-shield-halved&quot;&gt;&lt;/i&gt;     
                        &lt;small&gt;Cyber&lt;/small&gt;
                        Security   
                    &lt;/a&gt;
                    &lt;div class=&quot;drop-menu&quot;&gt;
                        &lt;ul class=&quot;container&quot;&gt;
                            &lt;li class=&quot;drop-title&quot;&gt;Our Cyber Security Services&lt;/li&gt;
                            &lt;li&gt;
                                &lt;a href=&quot;#&quot;&gt;&lt;i class=&quot;fa-solid fa-paste&quot; aria-hidden=&quot;true&quot;&gt;&lt;/i&gt;
                                &lt;span&gt;Cyber Security Assessment&lt;/span&gt;
                                &lt;/a&gt;
                            &lt;/li&gt;
                            &lt;li&gt;
                                &lt;a href=&quot;#&quot;&gt;&lt;i class=&quot;fa-regular fa-clock&quot; aria-hidden=&quot;true&quot;&gt;&lt;/i&gt;
                                &lt;span&gt;Cyber Security Management&lt;/span&gt;
                                &lt;/a&gt;
                            &lt;/li&gt;
                            &lt;li&gt;
                                &lt;a href=&quot;#&quot;&gt;&lt;i class=&quot;fa-solid fa-flask&quot; aria-hidden=&quot;true&quot;&gt;&lt;/i&gt;
                                &lt;span&gt;Cyber Penetration Testing&lt;/span&gt;
                                &lt;/a&gt;
                            &lt;/li&gt;
                            &lt;li&gt;
                                &lt;a href=&quot;#&quot;&gt;&lt;i class=&quot;fa-solid fa-graduation-cap&quot; aria-hidden=&quot;true&quot;&gt;&lt;/i&gt;
                                &lt;span&gt;Cyber Essentials Certification&lt;/span&gt;
                                &lt;/a&gt;
                            &lt;/li&gt;
                            &lt;li&gt;
                                &lt;a href=&quot;#&quot;&gt;&lt;i class=&quot;fa-solid fa-shield-halved&quot; aria-hidden=&quot;true&quot;&gt;&lt;/i&gt;
                                &lt;span&gt;PCI Compliance&lt;/span&gt;
                                &lt;/a&gt;
                            &lt;/li&gt;
                            &lt;li&gt;
                                &lt;a href=&quot;#&quot;&gt;&lt;i class=&quot;fa-solid fa-lock&quot; aria-hidden=&quot;true&quot;&gt;&lt;/i&gt;
                                &lt;span&gt;Hacking Prevention&lt;/span&gt;
                                &lt;/a&gt;
                            &lt;/li&gt;
                        &lt;/ul&gt;
                    &lt;/div&gt;
                &lt;/li&gt;
    
                &lt;li class=&quot;developer&quot;&gt;
                    &lt;a&gt;
                        &lt;i class=&quot;fa-solid fa-graduation-cap&quot;&gt;&lt;/i&gt;   
                        &lt;small&gt;Developer&lt;/small&gt;
                        Course
                    &lt;/a&gt;
                    &lt;div class=&quot;drop-menu&quot;&gt;
                        &lt;ul class=&quot;container&quot;&gt;
                            &lt;li class=&quot;drop-title&quot;&gt;Our Developer Course Services&lt;/li&gt;
                            &lt;li&gt;
                                &lt;a href=&quot;#&quot;&gt;&lt;i class=&quot;fa-solid fa-laptop&quot; aria-hidden=&quot;true&quot;&gt;&lt;/i&gt;
                                &lt;span&gt;Train For A Career In Tech&lt;/span&gt;
                                &lt;/a&gt;
                            &lt;/li&gt;
                            &lt;li&gt;
                                &lt;a href=&quot;#&quot;&gt;&lt;i class=&quot;fa-solid fa-code&quot; aria-hidden=&quot;true&quot;&gt;&lt;/i&gt;
                                &lt;span&gt;Skills Bootcamp&lt;/span&gt;
                                &lt;/a&gt;
                            &lt;/li&gt;
                            &lt;li&gt;
                                &lt;a href=&quot;#&quot;&gt;&lt;i class=&quot;fa-solid fa-circle-question&quot; aria-hidden=&quot;true&quot;&gt;&lt;/i&gt;
                                &lt;span&gt;Scion Scheme Frequently Asked Questions&lt;/span&gt;
                                &lt;/a&gt;
                            &lt;/li&gt;
                            &lt;li&gt;
                                &lt;a href=&quot;#&quot;&gt;&lt;i class=&quot;fa-regular fa-handshake&quot; aria-hidden=&quot;true&quot;&gt;&lt;/i&gt;
                                &lt;span&gt;Scion Collaborators&lt;/span&gt;
                                &lt;/a&gt;
                            &lt;/li&gt;
                        &lt;/ul&gt;
                    &lt;/div&gt;
                &lt;/li&gt;
            &lt;/ul&gt;
            &lt;!-- &lt;/nav&gt; --&gt;
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;

&lt;div id=&quot;fixed-nav&quot;&gt;
&lt;-- Copy & paste header and navigation code here --&gt;
&lt;/div&gt;
&lt;/header&gt;
                                </code>
                            </pre>
                        </div>
                    </div>

                    <input type="radio" name="stickyheadtab" id="css">
                    <label for="css">CSS</label>
                    <div class="tab">
                        <h1>CSS</h1>
                        <p>
                            Apply the styling on the shy-nav so the header always appears on the page 
                            but using position "fixed". The styling on the transition property allows
                            for smooth animation when the header appears and reappears. 
                        </p>
                        <div class="code-wrap">
                            <pre>
                                <code id="code">
#shy-nav {
    top: 0;
    z-index: 20;
    width: 100vw;
    position: fixed;
    background-color: #fff;
    transition: all 500ms ease;
}
                                </code>
                        </div>
                    </div>

                    <input type="radio" name="stickyheadtab" id="javascript">
                    <label for="javascript">JAVASCRIPT</label>
                    <div class="tab">
                        <h1>JAVASCRIPT</h1>
                        <p>
                            Add an addEventListener for scrolling which triggers when the user 
                            scrolls up or down of the page. Using the if...else statement check 
                            that when the the user scrolls up and it is less than 0 (lastScrollTop) then
                            add the styling top: -220px which hided the header out of window view. Else, if
                            the scrolling is not less than 0 then the user is scrolling down therefore the 
                            top attribute should be 0 and the heade displays fixed at the top of the page.
                        </p>

                        <div class="code-wrap">
                            <pre>
                                <code id="code">
const shyNav = document.querySelector('#shy-nav');
let lastScrollTop = 0;

//When user is scrolling 
window.addEventListener('scroll', function() {
const isScrolling = window.scrollY;
let scrollingUp = isScrolling;

    if (scrollingUp >= lastScrollTop) {
        shyNav.style.top = '-220px';
    } else {
        shyNav.style.top = '0';
    }
    lastScrollTop = scrollingUp;
})
                                </code>
                        </div>
                    </div>

                </div>

            </div>

            <button class="accordion">Coming Soon</button>
            <div class="panel">
                <!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing 
                elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut 
                aliquip ex ea commodo consequat.</p> -->
                <div class="mytabs">

                    <input type="radio" name="mytabs2" id="html2" checked="checked">
                    <label for="html2">HTML</label>
                    <div class="tab">
                        <h1>HTML</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing 
                        elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                        Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut 
                        aliquip ex ea commodo consequat.</p>
                        <div class="code-wrap">
                            <pre>
                                <code id="code">

                                </code>
                        </div>
                    </div>

                    <input type="radio" name="mytabs2" id="css2">
                    <label for="css2">CSS</label>
                    <div class="tab">
                        <h1>CSS</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing 
                        elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                        Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut 
                        aliquip ex ea commodo consequat.</p>
                        <div class="code-wrap">
                            <pre>
                                <code id="code">

                                </code>
                        </div>
                    </div>

                    <input type="radio" name="mytabs2" id="javascript2">
                    <label for="javascript2">JAVASCRIPT</label>
                    <div class="tab">
                        <h1>JAVASCRIPT</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing 
                        elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                        Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut 
                        aliquip ex ea commodo consequat.</p>
                        <div class="code-wrap">
                            <pre>
                                <code id="code">

                                </code>
                        </div>
                    </div>

                </div>
            </div>

            <button class="accordion">Coming Soon</button>
            <div class="panel">
                <div class="mytabs">

                    <input type="radio" name="mytabs3" id="html3" checked="checked">
                    <label for="html3">HTML</label>
                    <div class="tab">
                        <h1>HTML</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing 
                        elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                        Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut 
                        aliquip ex ea commodo consequat.</p>
                        <div class="code-wrap">
                            <pre>
                                <code id="code">

                                </code>
                        </div>
                    </div>

                    <input type="radio" name="mytabs3" id="css3">
                    <label for="css3">CSS</label>
                    <div class="tab">
                        <h1>CSS</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing 
                        elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                        Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut 
                        aliquip ex ea commodo consequat.</p>
                        <div class="code-wrap">
                            <pre>
                                <code id="code">

                                </code>
                        </div>
                    </div>

                    <input type="radio" name="mytabs3" id="javascript3">
                    <label for="javascript3">JAVASCRIPT</label>
                    <div class="tab">
                        <h1>JAVASCRIPT</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing 
                        elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                        Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut 
                        aliquip ex ea commodo consequat.</p>
                        <div class="code-wrap">
                            <pre>
                                <code id="code">

                                </code>
                        </div>
                    </div>

                </div>
            </div>

            <button class="accordion">Coming Soon</button>
            <div class="panel">
                <div class="mytabs">

                    <input type="radio" name="mytabs3" id="html3" checked="checked">
                    <label for="html3">HTML</label>
                    <div class="tab">
                        <h1>HTML</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing 
                        elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                        Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut 
                        aliquip ex ea commodo consequat.</p>
                        <div class="code-wrap">
                            <pre>
                                <code id="code">

                                </code>
                        </div>
                    </div>

                    <input type="radio" name="mytabs3" id="css3">
                    <label for="css3">CSS</label>
                    <div class="tab">
                        <h1>CSS</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing 
                        elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                        Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut 
                        aliquip ex ea commodo consequat.</p>
                        <div class="code-wrap">
                            <pre>
                                <code id="code">

                                </code>
                        </div>
                    </div>

                    <input type="radio" name="mytabs3" id="javascript3">
                    <label for="javascript3">JAVASCRIPT</label>
                    <div class="tab">
                        <h1>JAVASCRIPT</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing 
                        elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                        Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut 
                        aliquip ex ea commodo consequat.</p>
                        <div class="code-wrap">
                            <pre>
                                <code id="code">

                                </code>
                        </div>
                    </div>

                </div>
            </div>


        </section>

        

    </div> <!-- content -->



</div> <!--page wrap-->

<?php include("inc/html.footer.php") ?>