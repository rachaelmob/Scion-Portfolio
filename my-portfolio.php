<?php include("inc/html.head.php")?>

<body>

<div class="body-container">

    <!-- ============================ SIDE BAR ============================ -->
    <?php include("inc/sidenav.php")?>


    <!-- ============================ PAGE CONTENT ============================ -->
    <div class="page-content">
        

        <!-- ============================ BANNER ============================ -->
        <?php include("inc/banner.php")?>




        <!-- ============================ PORTFOLIO ============================ -->
        <section id="my-portfolio">
            <h1>MY PORTFOLIO</h1>

            <div class="cards-container">
                <div class="row">

                    <div class="image">
                        <img src="./img/netmatterspage.jpg" alt="">
                        <div class="img-details">
                            <h2>NetMatters <span>replica</span></h2>
                            <p> A monitired and graded scion scheme assessment to replicate the
                                official Netmatters web homepage using HTML, CSS, Sass & JavaScript.
                            </p>
                            <div class="view-project">
                                <a href="#" class="view-link">
                                    View Project 
                                    <i class="fa-solid fa-arrow-right-long"></i>
                                </a>
                                <div class="view-icons">
                                    <i class="fa-brands fa-html5"></i>
                                    <i class="fa-brands fa-css3-alt"></i>
                                    <i class="fa-brands fa-sass"></i>
                                    <i class="fa-brands fa-js"></i>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="image">
                        <img src="./img/mountains-eberhard-grossgasteiger.jpg" alt="">
                        <div class="img-details">
                            <h2>Coming <span>Soon</span></h2>
                            <p> 
                                No project to see here, I am working on one.
                                Stay at the edge of you seat for something new.
                            </p>
                            <div class="view-project">
                                <a href="#" class="view-link">
                                    View Project 
                                    <i class="fa-solid fa-arrow-right-long"></i>
                                </a>
                                <div class="view-icons">
                                    <i class="fa-solid fa-spinner"></i>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="row">
                    <div class="image">
                        <img src="./img/mountains-eberhard-grossgasteiger.jpg" alt="">
                        <div class="img-details">
                            <h2>Coming <span>Soon</span></h2>
                            <p> 
                                No project to see here, I am working on one.
                                Stay at the edge of you seat for something new.
                            </p>
                            <div class="view-project">
                                <a href="#" class="view-link">
                                    View Project 
                                    <i class="fa-solid fa-arrow-right-long"></i>
                                </a>
                                <div class="view-icons">
                                    <i class="fa-solid fa-spinner"></i>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="image">
                        <img src="./img/mountains-eberhard-grossgasteiger.jpg" alt="">
                        <div class="img-details">
                            <h2>Coming <span>Soon</span></h2>
                            <p> 
                                No project to see here, I am working on one.
                                Stay at the edge of you seat for something new.
                            </p>
                            <div class="view-project">
                                <a href="#" class="view-link">
                                    View Project 
                                    <i class="fa-solid fa-arrow-right-long"></i>
                                </a>
                                <div class="view-icons">
                                    <i class="fa-solid fa-spinner"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div> <!--cards container-->


            <!-- <div class="card-wrap">

                <div class="card">
                    <img src="./img/purple-sunset-mountain-rok-romih.jpg">
                    <div class="card-info">
                        <h2>Netmatters</h2>
                        <p>
                         A project assigned by netmatters to recreate their website 
                         homepage using only HTML and CSS.
                        </p>
                        <a href="https://rachaelmob.github.io/Netmatters-Projects/" class="card-btn" target="_blank">
                        Preview</a>
                    </div>
                </div>

                <div class="card">
                    <img src="./img/purple-sunset-mountain-rok-romih.jpg">
                    <div class="card-info">
                        <h2>Coming Soon...</h2>
                        <p>I am still learning, new content will be 
                        added soon. Please anticipate great things.
                        </p>
                        <a href="#" class="card-btn">Preview</a>
                    </div>
                </div>

                <div class="card">
                    <img src="./img/purple-sunset-mountain-rok-romih.jpg">
                    <div class="card-info">
                        <h2>Coming Soon...</h2>
                        <p>I am still learning, new content will be 
                        added soon. Please anticipate great things.
                        </p>
                        <a href="#" class="card-btn">Preview</a>
                    </div>
                </div>

                <div class="card">
                    <img src="./img/purple-sunset-mountain-rok-romih.jpg">
                    <div class="card-info">
                        <h2>Coming Soon...</h2>
                        <p>I am still learning, new content will be 
                        added soon. Please anticipate great things.
                        </p>
                        <a href="#" class="card-btn">Preview</a>
                    </div>
                </div>

                <div class="card">
                    <img src="./img/purple-sunset-mountain-rok-romih.jpg">
                    <div class="card-info">
                        <h2>Coming Soon...</h2>
                        <p>I am still learning, new content will be 
                        added soon. Please anticipate great things.
                        </p>
                        <a href="#" class="card-btn">Preview</a>
                    </div>
                </div>

                <div class="card">
                    <img src="./img/purple-sunset-mountain-rok-romih.jpg">
                    <div class="card-info">
                        <h2>Coming Soon...</h2>
                        <p>I am still learning, new content will be 
                        added soon. Please anticipate great things.
                        </p>
                        <a href="#" class="card-btn">Preview</a>
                    </div>
                </div>
                
            </div> -->

        </section>



        <!-- ============================ CONTACT ME FORM ============================ -->
        <section id="contact-me">
            <h1>CONTACT ME</h1>

            <div class="form-container">
            <form action="index.html" method="post">

                <div class="input-group">
                    <input type="text" required id="firstname" name="user_firstname"> 
                    <label for="firstname"><i class="fa-solid fa-user-pen"></i> Your Name</label>
                    <div class="error-hint hide-hint">Please insert your name</div>
                </div>

                <div class="input-group">
                    <input type="text" required id="lastname" name="user_lastname">
                    <label for="lastname"><i class="fa-solid fa-user"></i> Your Surname</label>
                    <div class="error-hint hide-hint">Please insert a name</div>
                </div>

                <div class="input-group">
                    <input type="email" required id="email" name="user_email">
                    <label for="email"><i class="fa-regular fa-envelope"></i> Email Address</label>
                    <div class="error-hint hide-hint">Please insert a valid email</div>
                </div>

                <div class="input-group">
                    <input type="tel" required id="telephone" name="user_telephone">
                    <label for="telephone"><i class="fa-solid fa-phone"></i> Phone Number</label>
                    <div class="error-hint hide-hint">Please insert a valid number</div>
                </div>

                <div class="input-group">
                    <input type="text" required id="subject" name="user_subject"> 
                    <label for="subject"><i class="fa-solid fa-pen-fancy"></i> Subject</label>
                    <div class="error-hint hide-hint">Please include a subject</div>
                </div>

                <div class="input-group">
                    <textarea id="message" name="user_message" rows="8" required></textarea>
                    <label for="messgae"><i class="fa-regular fa-comments"></i> Your Message</label>
                    <div class="error-hint hide-hint">Please type a message</div>        
                </div>
                <button type="submit" class="submit">
                <i class="fa-solid fa-paper-plane"></i> 
                 SUBMIT</button>
            </form>
            <div class="thankyou hide-hint">Thank You For Contacting Me!</div>

            </div>
        </section>

    </div> <!-- content -->
</div> <!--page wrap-->


<?php include("inc/html.footer.php")?>