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
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing 
                        elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                        Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut 
                        aliquip ex ea commodo consequat.</p>
                    </div>

                    <input type="radio" name="stickyheadtab" id="css">
                    <label for="css">CSS</label>
                    <div class="tab">
                        <h1>CSS</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing 
                        elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                        Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut 
                        aliquip ex ea commodo consequat.</p>
                    </div>

                    <input type="radio" name="stickyheadtab" id="javascript">
                    <label for="javascript">JAVASCRIPT</label>
                    <div class="tab">
                        <h1>JAVASCRIPT</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing 
                        elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                        Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut 
                        aliquip ex ea commodo consequat.</p>
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
                    </div>

                    <input type="radio" name="mytabs2" id="css2">
                    <label for="css2">CSS</label>
                    <div class="tab">
                        <h1>CSS</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing 
                        elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                        Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut 
                        aliquip ex ea commodo consequat.</p>
                    </div>

                    <input type="radio" name="mytabs2" id="javascript2">
                    <label for="javascript2">JAVASCRIPT</label>
                    <div class="tab">
                        <h1>JAVASCRIPT</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing 
                        elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                        Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut 
                        aliquip ex ea commodo consequat.</p>
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
                    </div>

                    <input type="radio" name="mytabs3" id="css3">
                    <label for="css3">CSS</label>
                    <div class="tab">
                        <h1>CSS</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing 
                        elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                        Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut 
                        aliquip ex ea commodo consequat.</p>
                    </div>

                    <input type="radio" name="mytabs3" id="javascript3">
                    <label for="javascript3">JAVASCRIPT</label>
                    <div class="tab">
                        <h1>JAVASCRIPT</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing 
                        elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                        Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut 
                        aliquip ex ea commodo consequat.</p>
                    </div>

                </div>
            </div>


        </section>

        

    </div> <!-- content -->
</div> <!--page wrap-->

<?php include("inc/html.footer.php") ?>