<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-5VKZTVM');</script>
    <!-- End Google Tag Manager -->
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/png" href="{{asset("assets/favicon.png")}}">
    <link rel="stylesheet" href="{{asset("styles/plugins.css")}}">
    <link rel="stylesheet" href="{{asset("styles/main.css")}}">

    <!-- seo  -->
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="@yield(" title") | {{config("app.name")}}" />
    <meta property="og:description" content="@yield(" description")" />
    <meta property="og:url" content="{{request()->url()}}" />
    <meta property="og:site_name" content="{{config("app.name")}}" />
    <meta property="article:publisher" content="{{config("app.name")}}" />
    <meta property="og:image" content="{{asset("assets/svg/emprise-logo-dark.png")}}" />
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:creator" content="@earthtrektours" />
    <meta name="twitter:site" content="@earthtrektours" />
    <meta name="twitter:image:src" content="{{asset("assets/svg/emprise-logo-dark.png")}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title> @yield("title") | {{config("app.name")}}</title>
    <meta name="description" content="@yield(" description")" />
    <link rel="stylesheet" type="text/css" href="{{asset("assets/emprise-font-icons/font/flaticon.css")}}">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    @yield("head")
</head>

<body class="rlr-body rlr-js-banner-search">
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5VKZTVM"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
    <!-- Main Content -->
    <main id="rlr-main" class="rlr-main">
        <!-- Hero Banner -->
        <aside class="rlr-hero--half-mast">
            <header>
                @if(request()->url() == route('front.home'))
                @include("layout.home-header")
                @else
                @include("layout.header")
                @endif

            </header>
        </aside>


        @yield("content")
    </main>
    <!-- Footer -->
    <footer class="rlr-footer rlr-section rlr-section__mt" id="footer_section" >
        <div class="container">
            <div class="rlr-footer__getintouch">
                <div class="rlr-footer__getintouch_col rlr-footer__getintouch__col--title">
                    <h4>Get in travel</h4>
                    <p>Adventures Calling You Guys!</p>
                </div>
                {{-- <div
                class="rlr-footer__getintouch_col rlr-footer__getintouch__col--address">
                <h4>Our Offices</h4>
                <a href="#">Nepal, USA, India</a>
            </div> --}}
            </div> <!-- Footer menu -->
            <div class="rlr-footer__menu">
                <nav class="rlr-footer__menu__col">
                    <!-- Footer menu col -->
                    <h4>Destinations</h4>
                    <ul>

                        @foreach(\App\Models\Destination::destinationsHasManyTours()->paginate(6) as $destination)
                        <li><a href="{{url('tours/')}}?destination_title={{$destination->name}}">{{$destination->name}}</a></li>
                        @endforeach
                    </ul>
                </nav>
                <nav class="rlr-footer__menu__col">
                    <!-- Footer menu col -->
                    <h4>Adventures</h4>
                    <ul>
                        @foreach(\App\Models\Category::get() as $cat)
                        <li><a href="{{url('tours/')}}?category_title={{$cat->name}}">{{$cat->name}}</a></li>

                        @endforeach
                    </ul>
                </nav>
                <nav class="rlr-footer__menu__col">
                    <!-- Footer menu col -->
                    <h4>Quick Links</h4>
                    <ul>
                        <li><a href="javascript:void(0)" data-toggle="modal" data-target="#requestTourModal">Plan Your Trip </a></li>
                        <li><a href="{{url('tours')}}">Tours</a></li>
                        <li><a href="{{url('about-us')}}">About Us</a></li>
                        <li><a href="{{url('contact-us')}}">Contact Us</a></li>
                        <li><a href="{{url('register')}}">Become a member</a></li>
                        <li><a href="{{url('login')}}">Log in</a></li>
                    </ul>
                </nav>
                <!-- Subscribe -->
                <nav class="rlr-footer__menu__col rlr-footer__menu__col--lg">
                    <h4>Get In Touch</h4>
                    @include("messages")
                    <a href="{{url("contact-us")}}" class="rlr-footer__menu__col__letstalk">Let’s Talk</a>
                    <form action="{{route('front.newsletter.store')}}" method="POST" class="rlr-subscribe" data-aos-disabled="fade-up" data-aos-disabled-offset="250" data-aos-disabled-duration="700">
                        @csrf
                        <input type="email" class="rlr-subscribe__input" name="email" placeholder="Enter your email">
                        <button class="btn">Send Now!</button>
                    </form>
                </nav>
            </div> <!-- Footer bottom -->
            <div class="rlr-footer__legal" >
                <div class="rlr-footer__legal__row rlr-footer__legal__row--top">
                    <div class="rlr-footer__legal__row__col ">
                        <a  href="{{url('privacy-policy')}}">Privacy Policy</a>
                        <a class="p-4" href="{{url('Refund-policy')}}">Refund Policy</a>
                        <a class="p-2" href="{{url('terms-conditions')}}">Terms & Conditions</a>
                    </div>

                    <!-- Footer social links -->
                    <div class="rlr-footer__legal__row__col">
                        <a href="https://www.linkedin.com/in/earth-treks-18843a21b/">Linkedin</a>
                        <span class="separate">/</span>
                        <a href="https://www.facebook.com/earthtrektours">Facebook</a>
                        <span class="separate">/</span>
                        <a href="https://www.instagram.com/earthtrektours/">Instagram</a>
                    </div>
                </div>
                <!-- Footer copyright -->
                <div class="rlr-footer__legal__row rlr-footer__legal__row--bottom" >
                    <div class="rlr-footer__legal__row__col">
                        <span>{{date("Y")}} © {{config("app.name")}}</span>
                    </div>
                    <!-- Footer payment thumbs -->
                    <div class="rlr-footer__legal__row__col">
                        <img src="{{asset("assets/images/ele-payments.png")}}" alt="Payments">
                    </div>
                </div>
            </div>
        </div>
    </footer> <!-- Scripts -->
    <a href="https://api.whatsapp.com/send?phone={{str_replace("+","",config("constants.contact.phone"))}}&text=" class="whatsapp-btn-float" target="_blank">
        <img src="{{asset('assets/svg/whatsapp.svg')}}" class="my-whatsapp-btn-float" alt="whatsappicon">
        {{-- <i class="fa fa-whatsapp my-whatsapp-btn-float"></i> --}}
    </a>
    @include("modals.request-tour")


    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
    <script src="{{asset('vendors/navx/js/navigation.min.js')}}"></script>
    <script src="{{asset('js/main.js')}}"></script>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <!-- Uncomment Lines below to Start of ChatBot (www.chatbot.com) code -->
    <!-- End of ChatBot code -->
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>



    <script>
        let select2Select = $(".select2_tag_modal");
        select2Select.select2({
            dropdownParent: $("#" + select2Select.closest(".modal").attr('id')),
            dropdownAutoWidth: true,
            width: 'auto',
            allowClear: false,
            tags: true,
            tokenSeparators: [',', ' ']

        })
        $(".select2_text").select2({
            tags: true,
            tokenSeparators: [',', ' ']
        })

        const swiper = new Swiper('.reviews-home-slider', {
            speed: 400,
            spaceBetween: 100,
        });
    </script>

    @yield("script")
    <script>
        function logout() {
            document.getElementById('logoutForm').submit();
        }
    </script>

    <!--Start of Tawk.to Script-->
<script type="text/javascript">
    var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
    (function(){
    var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
    s1.async=true;
    s1.src='https://embed.tawk.to/5f982100aca01a16883620e9/1ell8at69';
    s1.charset='UTF-8';
    s1.setAttribute('crossorigin','*');
    s0.parentNode.insertBefore(s1,s0);

    })();
    window.Tawk_API.onLoad = function(){
    //place your code here
        let buttonChat = $(".tawk-button-large");
        console.log(buttonChat);
    };


    $("body").on("click",'.modalClose',function(){
       $(this).closest(".modal").modal("hide");
    })
    </script>
    <!--End of Tawk.to Script-->
</body>

</html>
