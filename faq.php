<?php
    include "./components/header.php";
    include "./components/offcanvas.php";
    include "./components/search.php";
    include "./components/navbar.php";
?>

<main>

    <section class="bg-dark pattern-overlay-4 position-relative text-center">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1 class="text-white-stroke display-5">Frequently Asked Questions</h1>
                    <p class="lead">We're ready to deliver you best technology solutions for your business success.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="pb-3">
        <div class="container">
            <div class="row justify-content-between">

                <div class="col-md-8 col-lg-8 mb-5 mx-auto">
                    <div class="accordion accordion-icon" id="accordiongeneralfaq">
                        <div class="accordion-item">
                            <h5 class="accordion-header" id="heading-1">
                                <button class="accordion-button fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-1" aria-expanded="true" aria-controls="collapse-1">
                                    What is Innovates Lab?
                                </button>
                            </h5>
                            <div id="collapse-1" class="accordion-collapse collapse show" aria-labelledby="heading-1" data-bs-parent="#accordiongeneralfaq">
                                <div class="accordion-body">
                                    Interntec Innovates Lab is an incubation program designed to support very early stage tech-enabled ventures with relevant skills, networking opportunities and mentorship from seasoned industry experts to achieve a minimum viable product; geared towards building a competitive and sustainable brand.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h5 class="accordion-header" id="heading-2">
                                <button class="accordion-button fw-bold collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-2" aria-expanded="false" aria-controls="collapse-2">
                                    What are the payment methods available?
                                </button>
                            </h5>
                            <div id="collapse-2" class="accordion-collapse collapse" aria-labelledby="heading-2" data-bs-parent="#accordiongeneralfaq">
                                <div class="accordion-body">
                                At the moment, we only accept Credit/Debit cards and Paypal payments. Paypal is the easiest way to make payments online. While checking out your order. Be sure to fill in correct details for fast & hassle-free payment processing.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h5 class="accordion-header" id="heading-3">
                                <button class="accordion-button fw-bold collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-3" aria-expanded="false" aria-controls="collapse-3">
                                    Can i pay without a paypal account?
                                </button>
                            </h5>
                            <div id="collapse-3" class="accordion-collapse collapse" aria-labelledby="heading-3" data-bs-parent="#accordiongeneralfaq">
                                <div class="accordion-body">
                                    Yes! It is commonly misunderstood that a Paypal account is needed in order to make payments through Paypal. The truth is you DO NOT need one, although we strongly recommend you sign up to enjoy the added ease of use.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h5 class="accordion-header" id="heading-4">
                                <button class="accordion-button fw-bold collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-4" aria-expanded="false" aria-controls="collapse-4">
                                    How does the 30-day free trial work?
                                </button>
                            </h5>
                            <div id="collapse-4" class="accordion-collapse collapse" aria-labelledby="heading-4" data-bs-parent="#accordiongeneralfaq">
                                <div class="accordion-body">
                                    Go ahead, kick the tires. You have full access to all the features of folio Standard for 30 days. After 30 days you will need to provide a credit card to continue using the Standard features.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h5 class="accordion-header" id="heading-5">
                                <button class="accordion-button fw-bold collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-5" aria-expanded="false" aria-controls="collapse-5">
                                    What should I do if I miss my delivery?
                                </button>
                            </h5>
                            <div id="collapse-5" class="accordion-collapse collapse" aria-labelledby="heading-5" data-bs-parent="#accordiongeneralfaq">
                                <div class="accordion-body">
                                    We make 3 attempts on 3 continuing business days. In case you miss the delivery, give us a call on (251) 854-6308 or contact us at help@folio.com
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h5 class="accordion-header" id="heading-6">
                                <button class="accordion-button fw-bold collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-6" aria-expanded="false" aria-controls="collapse-6">
                                    How can I get a refund in case I cancel my plan?
                                </button>
                            </h5>
                            <div id="collapse-6" class="accordion-collapse collapse" aria-labelledby="heading-6" data-bs-parent="#accordiongeneralfaq">
                                <div class="accordion-body">
                                    The refund is provided as per with our cancellation policy. The refund can be credited to the source of payment (Example: debit card, credit card, net banking).
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

</main>

<?php include "./components/footer.php"; ?>