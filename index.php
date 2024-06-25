<?php include("inc/html.head.php")?>


<body>

<div class="body-container">

    <!-- ============================ SIDE BAR ============================ -->
    <?php include("inc/sidenav.php")?>


    <!-- ============================ PAGE CONTENT ============================ -->
    <div class="page-content">


        <!-- ============================ BANNER ============================ -->
        <?php include("inc/banner.php")?>


        <!-- ============================ ABOUT ME ============================ -->
        <section id="about-me">

            <div class="about-content">
                <img src="img/girl-reading-pexels-thought-catalog.jpg" alt="a woman reading near a window">

                <div class="about-text">
                    <h1>ABOUT ME</h1>
                    <h5>Moyosore Banjoko, 25, Web developer</h5>
                    <p>
                        I am an aspiring web developer who is learning how to code throught the netmatters 
                        scion scheme. Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit 
                        dignissimos, ipsam accusamus inventore blanditiis in voluptas sint incidunt? 
                        Quam at provident aliquid odio dicta, ipsa accusantium ratione a harum veniam?
                    </p>
                    <form method="get" action="./pdf/GENERAL CV 2023 PDF.pdf CV 2023 PDF.pdf" target="_blank">
                    <button class="cv-btn">Download CV</button>
                    </form>
                </div>
            </div>
        </section>




    </div> <!-- content -->

</div> <!--page wrap-->
<?php include("inc/html.footer.php")?>