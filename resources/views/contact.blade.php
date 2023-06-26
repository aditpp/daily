@extends('layouts.main')

@section('title', 'Contact Page')

@section('content')
<div role="main" class="main">

    <!-- Google Maps - Go to the bottom of the page to change settings and map location. -->
    <div id="googlemaps" class="google-map mt-0" style="height: 500px;">
        <iframe style="height:100%;width:100%;border:0;" frameborder="0" src="https://www.google.com/maps/embed/v1/place?q=bandung&key=AIzaSyBFw0Qbyq9zTFTd-tUY6dZWTgaQzuU17R8"></iframe>
    </div>

    

    <div class="container">

        <div class="row py-4">
            <div class="col-lg-6">

                <h2 class="font-weight-bold text-8 mt-2 mb-0">Contact Us</h2>
                <p class="mb-4">Feel free to ask for details, don't save any questions!</p>

                <form class="contact-form" action="php/contact-form.php" method="POST">
                    <div class="contact-form-success alert alert-success d-none mt-4">
                        <strong>Success!</strong> Your message has been sent to us.
                    </div>

                    <div class="contact-form-error alert alert-danger d-none mt-4">
                        <strong>Error!</strong> There was an error sending your message.
                        <span class="mail-error-message text-1 d-block"></span>
                    </div>

                    <div class="row">
                        <div class="form-group col-lg-6">
                            <label class="form-label mb-1 text-2">Full Name</label>
                            <input type="text" value="" data-msg-required="Please enter your name." maxlength="100" class="form-control text-3 h-auto py-2" name="name" required>
                        </div>
                        <div class="form-group col-lg-6">
                            <label class="form-label mb-1 text-2">Email Address</label>
                            <input type="email" value="" data-msg-required="Please enter your email address." data-msg-email="Please enter a valid email address." maxlength="100" class="form-control text-3 h-auto py-2" name="email" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col">
                            <label class="form-label mb-1 text-2">Subject</label>
                            <input type="text" value="" data-msg-required="Please enter the subject." maxlength="100" class="form-control text-3 h-auto py-2" name="subject" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col">
                            <label class="form-label mb-1 text-2">Message</label>
                            <textarea maxlength="5000" data-msg-required="Please enter your message." rows="8" class="form-control text-3 h-auto py-2" name="message" required></textarea>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col">
                            <input type="submit" value="Send Message" class="btn btn-primary btn-modern" data-loading-text="Loading...">
                        </div>
                    </div>
                </form>

            </div>
            <div class="col-lg-6">

                <div class="appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="800">
                    <h4 class="mt-2 mb-1">Our <strong>Office</strong></h4>
                    <ul class="list list-icons list-icons-style-2 mt-2">
                        <li><i class="fas fa-map-marker-alt top-6"></i> <strong class="text-dark">Address:</strong> Jl. Ibrahim Adjie No 12, Bandung, Jawa Barat</li>
                        <li><i class="fas fa-phone top-6"></i> <strong class="text-dark">Phone:</strong> (62) 877-0833-5307</li>
                        <li><i class="fas fa-envelope top-6"></i> <strong class="text-dark">Email:</strong> <a href="mailto:mail@example.com">
                            azetapp@gmail.com</a>
                        </li>
                    </ul>
                </div>

                <div class="appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="950">
                    <h4 class="pt-5">Business <strong>Hours</strong></h4>
                    <ul class="list list-icons list-dark mt-2">
                        <li><i class="far fa-clock top-6"></i> Monday - Friday - 9am to 5pm</li>
                        <li><i class="far fa-clock top-6"></i> Saturday - 9am to 2pm</li>
                        <li><i class="far fa-clock top-6"></i> Sunday - Closed</li>
                    </ul>
                </div>

                <h4 class="pt-5">Get in <strong>Touch</strong></h4>
                <p class="lead mb-0 text-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur eget leo at velit imperdiet varius. In eu ipsum vitae velit congue iaculis vitae at risus. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>

            </div>

        </div>

    </div>

</div>
@endsection