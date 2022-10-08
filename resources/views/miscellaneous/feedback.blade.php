<!DOCTYPE html>
<html lang="zxx">

@include("partials.head")

<body>

<!-- Wrapper -->
<div id="wrapper" class="wrapper">

    <!-- Header -->
    @include("partials.header")
    <!--// Header -->



    <!-- Page Content -->
    <main class="page-content">
        <!-- Contact Area -->
        <div class="tm-section tm-contact-area tm-padding-section bg-white">
            <div class="container">
                <div class="tm-contact-forms tm-padding-section-top">
                    <div class="row justify-content-center">
                        <div class="col-lg-6 col-12">
                            <div class="tm-sectiontitle text-center">
                                <h3>SEND US YOUR FEEDBACK</h3>
                                <p>You can contact us for any of your inconveniences
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <form id="tm-contactform" action="{{ route("feedback.store") }}"
                                  class="tm-contact-forminner tm-form" method="POST">
                                @csrf
                                <div class="tm-form-inner">
                                    <div class="tm-form-field tm-form-fieldhalf">
                                        <label for="contact-form-name">Name</label>
                                        <input type="text" id="contact-form-name" placeholder="Your name here"
                                               name="name" required>
                                    </div>
                                    <div class="tm-form-field tm-form-fieldhalf">
                                        <label for="contact-form-email">Email</label>
                                        <input type="email" id="contact-form-email" placeholder="surose@example.com"
                                               name="email" required>
                                    </div>
                                    <div class="tm-form-field tm-form-fieldhalf">
                                        <label for="contact-form-phone">Phone</label>
                                        <input type="text" id="contact-form-phone"
                                               placeholder="Your phone number here" name="phone" required>
                                    </div>
                                    <div class="tm-form-field tm-form-fieldhalf">
                                        <label for="contact-form-subject">Subject</label>
                                        <input type="text" id="contact-form-subject" placeholder="Your subjert"
                                               name="subject">
                                    </div>
                                    <div class="tm-form-field">
                                        <label for="contact-form-message">Message</label>
                                        <textarea cols="30" rows="5" id="contact-form-message"
                                                  placeholder="Write your message" name="message"></textarea>
                                    </div>
                                    <div class="tm-form-field text-center">
                                        <button type="submit" class="tm-button tm-button-block">Send
                                            Message</button>
                                    </div>
                                </div>
                            </form>
                            <p class="form-messages"></p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!--// Contact Area -->

    </main>
    <!--// Page Content -->

    <!-- Footer -->
    @include("partials.footer")
    <!--// Footer -->

    <button id="back-top-top"><i class="ion-arrow-up-c"></i></button>

</div>
<!--// Wrapper -->

<!-- JS FILES HERE -->

<!-- inject:js -->
@include("partials.scripts")
<!-- endinject -->
</body>

</html>
