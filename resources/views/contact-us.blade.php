@extends('front.layouts.app')

@section('contents')

    <section class="contactus_sec_1">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="main_contact_locationss">
                        <ul>
                            <li>
                                <div class="icons_locations">
                                    <i class="fa-solid fa-location-arrow"></i>
                                </div>
                                <div class="contact_content">
                                    <h6>Address</h6>
                                    <p>Third Floor, Office No 03, Business Hub Plaza, Gulberg Greens, Islamabad</p>
                                </div>
                            </li>
                            <li>
                                <div class="icons_locations">
                                    <i class="fa-solid fa-tty"></i>
                                </div>
                                <div class="contact_content">
                                    <a href="tel:+03205398306">++92 00000000</a>
                                </div>
                            </li>
                            <li>
                                <div class="icons_locations">
                                    <i class="fa-solid fa-envelope-open"></i>
                                </div>
                                <div class="contact_content">
                                    <h6>Email</h6>
                                    <a href="mailto:info@[Brand Name]">info@[Brand Name]</a>
                                </div>
                            </li>

                        </ul>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="contact_formr">
                        <h2>Send us a message</h2>
                        @if(session('success'))
                        <p>{{ session('success') }}</p>
                    @endif
                        <form action="/contact-us" method="POST">
                            @csrf
                            <input type="text" name="name" placeholder="Your name *" required>
                            <input type="email" name="email" placeholder="Your email *" required>
                            <textarea name="message" placeholder="Message"></textarea>
                            <input type="submit" value="Submit">
                        </form>
                    </div>
                </div>
                <div class="col-md-12 mt-5">
                    <div class="map_address">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3323.2513057447277!2d73.15258367452776!3d33.59878344154014!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x38dfedd699696bd1%3A0x2a799ddf64dee15f!2sNiazi%20Tours%20International!5e0!3m2!1sen!2s!4v1721357096602!5m2!1sen!2s"
                                width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
