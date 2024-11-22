<section id="contact-me"> 
    <div class="form-container">
        <div class="contact-info">
            <h2 class="info-title">Get In Touch!</h2>
            <!-- <p>
                Please free to contact me for any business enquiries,
                or to discuss anything of relevant interest.
            </p> -->
            <div class="myinfo">
                <div class="info">
                    <i class="fa-solid fa-envelope"></i>
                    <p>moyosorebanjoko@gmail.com</p>
                </div>
                <!-- <div class="info">
                    <i class="fa-solid fa-square-phone"></i>
                    <p>+44 784-642-9782</p>
                </div> -->

                <!-- <div class="socials">
                    <p>Connect With Me :</p>
                    <a href="https://www.linkedin.com/in/moyosore-banjoko-90a892166/" class="linked" target="_blank">
                        <i class="fa-brands fa-linkedin"></i>
                    </a>
                    <a href="https://github.com/rachaelmob" class="github" target="_blank">
                        <i class="fa-brands fa-github"></i>
                    </a>
                </div> -->

            </div>
        </div>


        <form action="/inc/mailer.php" method="post" id="contactForm">
            <h2 class="form-title">Contact Me</h2>
            <div class="input-group">
                <input type="text" required id="firstname" name="user_firstname"> 
                <label for="firstname">
                    <!-- <i class="fa-solid fa-user-pen"></i>  -->
                    Your Name
                </label>
                <div class="error-message" id="firstNameError"></div>
            </div>
            

            <div class="input-group">
                <input type="text" required id="lastname" name="user_lastname">
                <label for="lastname">
                    <!-- <i class="fa-solid fa-user"></i>  -->
                    Your Surname
                </label>
                <div class="error-message" id="lastNameError"></div>
            </div>
            

            <div class="input-group">
                <input type="email" required id="email" name="user_email">
                <label for="email">
                    <!-- <i class="fa-regular fa-envelope"></i>  -->
                    Email Address
                </label>
                <div class="error-message" id="emailError"></div>
            </div>
            

            <div class="input-group">
                <input type="tel" required id="telephone" name="user_telephone">
                <label for="telephone">
                    <!-- <i class="fa-solid fa-phone"></i>  -->
                    Phone Number
                </label>
                <div class="error-message" id="telError"></div>
            </div>
            

            <div class="input-group">
                <input type="text" required id="subject" name="user_subject"> 
                <label for="subject">
                    <!-- <i class="fa-solid fa-pen-fancy"></i>  -->
                    Subject
                </label>
                <div class="error-message" id="subjectError"></div>
            </div>
            

            <div class="input-group">
                <textarea id="message" name="user_message" rows="8" required></textarea>
                <label for="messgae">
                    <!-- <i class="fa-regular fa-comments"></i>  -->
                    Your Message
                </label>
                <div class="error-message" id="messageError"></div>
            </div>
            


            <button type="submit" class="submit">
            <i class="fa-solid fa-paper-plane"></i> 
            SUBMIT
            </button>
        </form>
    </div>
</section>