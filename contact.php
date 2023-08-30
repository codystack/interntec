<?php
    include "./components/header.php";
    include "./components/offcanvas.php";
    include "./components/search.php";
    include "./components/navbar.php";
?>

<main>
    <section class="pb-0">
        <div class="container">
            <div class="row d-flex justify-content-lg-between">
                <div class="col-12">
                    <!-- Typing text -->
                    <h1 class="display-3 caret-primary">
                    <span class="typed" data-type-text="Hello&&Bonjour&&Hola&&Olá&&Ciao&&你好&&Asalaam alaikum&&Guten Tag&&Hola&&Zdravstvuyte"></span>
                    </h1>
                    <a href="mailto:hello@interntec.com" class="display-8 text-dark"><u>hello@interntec.com</u></a><br>
                    <a href="tel:08032090933" class="display-8 text-dark">+(234) 803-209-0933</a>
                    <!-- Social links -->
                    <ul class="list-unstyled list-group-inline lead">
                        <li> <a class="text-facebook me-4" href="#">Facebook</a> </li>
                        <li> <a class="text-instagram-gradient me-4" href="#">Instagram </a> </li>
                        <li> <a class="text-twitter me-4" href="#">Twitter </a> </li>
                        <li> <a class="text-linkedin me-4" href="#">LinkedIn </a> </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section class="h-400">
        <iframe class="w-100 h-400 grayscale" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3975.8354437206176!2d7.0315775250820955!3d4.798287340803636!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1069cd5339a6c6b3%3A0x5d9bc6a4a5bcc177!2sTrans-Amadi%20Gardens%20Residential%20Estate!5e0!3m2!1sen!2sin!4v1686650759033!5m2!1sen!2sin" height="500" style="border:0;" aria-hidden="false" tabindex="0"></iframe>	
    </section>

    <section class="pt-9">
        <div class="container">
            <div class="row">
                <!-- Title -->
                <div class="col-lg-3">
                    <h3>Contact us</h3>
                    <p>Get in touch with us to see how we can help you with your project</p>
                </div>
                <!-- Form -->
                <div class="col-lg-9">
                    <!-- Form START -->
                    <form class="contact-form form-line" id="contact-form" name="contactform" method="POST" action="assets/include/contact-action.php.html">
                        <!-- Main form -->
                        <div class="row">
                            <div class="col-md-6">
                                <!-- name -->
                                <div class="mb-3 position-relative">
                                    <input required id="con-name" name="name" type="text" class="form-control" placeholder="Name">
                                    <span class="focus-border"></span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <!-- email -->
                                <div class="mb-3 position-relative">
                                    <input required id="con-email" name="email" type="email" class="form-control" placeholder="E-mail">
                                    <span class="focus-border"></span>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <!-- Subject -->
                                <div class="mb-3 position-relative">
                                    <input required id="con-subject" name="subject" type="text" class="form-control" placeholder="Subject">
                                    <span class="focus-border"></span>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <!-- Message -->
                                <div class="mb-3 position-relative">
                                    <textarea required id="con-message" name="message" cols="40" rows="6" class="form-control" placeholder="Message"></textarea>
                                    <span class="focus-border"></span>
                                </div>
                            </div>
                            <!-- submit button -->
                            <div class="col-md-12 text-start"><button class="btn btn-primary btn-line" type="submit">Send Message</button></div>
                        </div>
                    </form>
                    <!-- Form END -->
                </div>
            </div>
        </div>
    </section>

</main>

<?php include "./components/footer.php"; ?>