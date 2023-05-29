<div style="padding-top:40px; background: linear-gradient(to right, #7EE8FA, #EEC0C6);">
    <section class="contact-us">
        <div id="errorMsg"></div>
        <div class="row">
            <div class="contact-col">

                <div>
                    <i class="fa fa-home"></i>
                    <span>
                        <h5>Chapariya</h5>
                        <p>Bihar , India</p>
                    </span>
                </div>
                <div>
                    <i class="fa fa-phone"></i>
                    <span>
                        <h5>9576301867</h5>
                        <p>Monday to Saturday 10 A.M to 6 P.M</p>
                    </span>
                </div>
                <div>
                    <i class="fa fa-envelope-o"></i>
                    <span>
                        <h5>rajesh.mandal123@gmail.com</h5>
                        <p>Email us your query</p>
                    </span>
                </div>
            </div>
            <div class="contact-col">
                <form id="contactForm">
                    <div class="contactusinput"> <input type="text" id='name' name="name"
                            placeholder="Enter Your Name" onkeyup="validateName()" required />
                        <span id="name-error"></span>
                    </div>
                    <div class="contactusinput">
                        <input type="email" id='email' name="email" placeholder="Enter Your Email"
                            onkeyup="validateEmail()"required />
                        <span id="email-error"></span>
                    </div>
                    <div class="contactusinput">
                        <input type="text" id='contact'name="contact" placeholder="Enter Your Contact Number"
                            onkeyup="validateContact()" required />
                        <span id="contact-error"></span>
                    </div>
                    <div class="contactusinput">
                        <textarea rows="4" id='message' name="message" placeholder="Message" onkeyup="validateMessage()" required></textarea>
                        <span id="msg-error"></span>
                    </div>

                    <button class="btn btn-primary btn-block" type="button" id="btnenquiry">
                        <span>Send Message</span>
                    </button>
                    <span id="submit-Error"></span>

                </form>
            </div>
        </div>
    </section>
</div>

<section class="location">
    <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14306.03072891624!2d85.91086962099756!3d26.31005548425108!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39edb59cc8705e2d%3A0x571e1e01b12564fe!2sChaparia%2C%20Bihar%20847122!5e0!3m2!1sen!2sin!4v1660209683573!5m2!1sen!2sin"
        width="600" height="450" style="border: 0" allowfullscreen="" loading="lazy"
        referrerpolicy="no-referrer-when-downgrade"></iframe>
</section>

@section('contactajax')
  <script src="{{asset('js/contactform.js')}}"></script>
@endsection
