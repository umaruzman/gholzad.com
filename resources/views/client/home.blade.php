@extends('client.layouts.main')

{{-- Styles Section --}}
@section('page-extra-css')
    <link rel="stylesheet" href="{{asset('css/home.css?v=1.0.0')}}">
@endsection

{{-- Main Content Section --}}
@section('page-content')
    <main>
        <article class="banner">
            <img src="{{asset('images/bg-shapes/circle.svg')}}" alt="circle shape in the background" class="banner-circle">
            <div class="banner-text">
                <div class="dots-shape">
                    <img src="{{asset('images/bg-shapes/dots-2row.svg')}}" alt="dots shape in the background">
                </div>
                <h1 class="banner-variable-item active" data-banner="1">
                    WE <span class="blue">INVEST</span> MORE THAN JUST MONEY
                </h1>
                <h1 class="banner-variable-item" data-banner="2">
                    You need <span class="blue">profits</span> we know profits
                </h2>
                <div class="sub-text">
                    <h4 class="font-open-sans banner-variable-item active" data-banner="1">We Always Want To Win!</h4>  
                    <h4 class="font-open-sans banner-variable-item" data-banner="2">Make The Smart Move Today!</h4>  
                    <img src="{{asset('images/home/banner-subtext-rectangle.svg')}}" alt="rectangle shape in subtext">
                </div>  
                <div class="slider-control">
                    <button class="button-clean" onclick="bannerPrev()" data-tootltip data-tootltip-text="Previous">
                        <img src="{{asset('images/home/arrow-left.svg')}}" alt="previous arrrow icon">
                    </button>
                    <button class="button-clean" onclick="bannerNext()" data-tootltip data-tootltip-text="Next">
                        <img src="{{asset('images/home/arrow-right.svg')}}" alt="next arrrow icon" >
                    </button>
                </div>
            </div>
            <div class="banner-image">
                <img class="banner-variable-item active" data-banner="1" src="{{asset('images/banner/banner-image-1.webp')}}" alt="Banner Image depicting investment">
                <img class="banner-variable-item" data-banner="2" src="{{asset('images/banner/banner-image-2.webp')}}" alt="Banner Image depicting investment">
            </div>
        </article>

        <article class="basic-text-content">
            <h2>About <span class="blue">Gholzad</span></h2>
            <p>
                We are not standard investors. We believe that companies and entrepreneurs can best grow through a total package of investments, tailored to the company. 
            </p>
            <p>
                The approach to our investments always starts with the financial situation. Based on the required financial resources and the growth forecast, we then draw up a plan with which we can take your company to the next level together. We do this by bringing in extensive knowledge in various areas and an extensive network in addition to money. We call this a Full Service Investment. 
            </p>
            <p>
                We invest a full-service package consisting of financial resources, specialist knowledge, a broad network and many opportunities for (online) growth.
            </p>

            <a href="" class="read-more">Read more</a>
        </article>

        <article class="why-us-section">
            <div class="background-container">
                &nbsp;
            </div>
            <h2>Why choose <span class="blue">Gholzad management?</span></h2>
            <div class="why-choose-cards">
                <div class="why-choose-card">
                    <img src="{{asset('images/home/why-choose-us-1.webp')}}" alt="Freedom & Entrepreneurship">
                    <h4>
                        Freedom & Entrepreneurship
                    </h4>
                    <p>
                        Young and driven entrepreneurs with a lot of experience. As a new team member you get the freedom to bring in your own ideas and to develop them by our forces.
                    </p>
                </div>
                <div class="why-choose-card">
                    <img src="{{asset('images/home/why-choose-us-2.webp')}}" alt="Our Brands & Projects">
                    <h4>
                        Our Brands <br> & Projects
                    </h4>
                    <p style="width: 150px">
                        We have an extensive portfolio of brands and companies with different backgrounds and capabilities.
                    </p>
                </div>
                <div class="why-choose-card">
                    <img src="{{asset('images/home/why-choose-us-3.webp')}}" alt="More Than 15 Years Of Experience">
                    <h4>
                        More Than 15 Years Of Experience
                    </h4>
                    <p>
                        We have more than 15 years of experience in building and expanding brands and making and acquiring investments from both home and abroad.
                    </p>
                </div>
                <div class="why-choose-card">
                    <img src="{{asset('images/home/why-choose-us-4.webp')}}" alt="International Experience & Expertise">
                    <h4>
                        International Experience & Expertise
                    </h4>
                    <p>
                        We have years of experience in the Benelux as well as the United States, the Middle East and in China & Hong Kong, we also speak more than 10 languages.
                    </p>
                </div>
            </div>
        </article>

        <article class="ceo-section">
            <img class="blue-background" src="{{asset('images/home/ceo-bg-rectangle.svg')}}" alt="Background Rectangle">
            <img class="quote-icon" src="{{asset('images/home/qoute-icon.svg')}}" alt="Quote Icon">
            <img class="ceo-image" src="{{asset('images/home/ajmal.webp')}}" alt="Ajmal Gholzad">
            <div class="ceo-content">
                <p class="quote">
                    “Investing is a journey of self-discovery. It reveals your relationship with money, your tolerance for risk, and your ability to stay disciplined in the face of uncertainty.”
                </p>
                <h4>
                    Ajmal Gholzad
                </h4>
                <h5>
                    Chief executive officer
                </h5>
                <a href="" class="read-more-white">Read more</a>
            </div>
        </article>

        <article class="ceo-section ceo-section-mobile">
                <img class="ceo-image-mobile" src="{{asset('images/home/ajmal-mobile.webp')}}" alt="Ajmal Gholzad">
                <div class="ceo-content" style="background: #36B4FF">
                    <p class="quote">
                        “Investing is a journey of self-discovery. It reveals your relationship with money, your tolerance for risk, and your ability to stay disciplined in the face of uncertainty.”
                    </p>
                    <h4>
                        Ajmal Gholzad
                    </h4>
                    <h5>
                        Chief executive officer
                    </h5>
                </div>
            </div>
        </article>

        <article class="journey-section">
            <h2>Our <span class="blue">Journey</span></h2>
            <div class="journey-map">
                <img class="journey-trail" src="{{asset('images/home/journey-dummy.svg')}}" alt="">
                <div class="year-circle" style="top: 48%; left: 45%" data-hover-content="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce et suscipit est. Maecenas vestibulum in lectus et dignissim.">
                    2014
                </div>
                <div class="year-circle" style="top: 40%; left: 25%" data-hover-content="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce et suscipit est. Maecenas vestibulum in lectus et dignissim.">
                    2015
                </div>
                <div class="year-circle" style="top: 43%; left: 66%" data-hover-content="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce et suscipit est. Maecenas vestibulum in lectus et dignissim.">
                    2016
                </div>
                <div class="year-circle" style="top: 13%; left: 39%" data-hover-content="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce et suscipit est. Maecenas vestibulum in lectus et dignissim.">
                    2017
                </div>
                <div class="year-circle" style="top: 67%; left: 19%" data-hover-content="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce et suscipit est. Maecenas vestibulum in lectus et dignissim.">
                    2018
                </div>
                <div class="year-circle" style="top: 68%; left: 68%" data-hover-content="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce et suscipit est. Maecenas vestibulum in lectus et dignissim.">
                    2019
                </div>
                <div class="year-circle" style="top: 10%; left: 9%" data-hover-content="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce et suscipit est. Maecenas vestibulum in lectus et dignissim.">
                    2020
                </div>
                <div class="year-circle" style="top: 88%; left: 26%" data-hover-content="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce et suscipit est. Maecenas vestibulum in lectus et dignissim.">
                    2021
                </div>
                <div class="year-circle" style="top: 46%; left: 94%" data-hover-content="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce et suscipit est. Maecenas vestibulum in lectus et dignissim.">
                    2022
                </div>
                <div class="year-circle" style="top: 7%; left: 85%" data-hover-content="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce et suscipit est. Maecenas vestibulum in lectus et dignissim.">
                    2023
                </div>
            </div>
        </article>

        <article class="companies-section">
            <h2>Our <span class="blue">Companies</span></h2>

            <div class="company-list">
                <div class="company-item">
                    <div class="company-image" style="background-image: url({{asset('images/home/gy-bg.webp')}})">

                    </div>
                    <div class="company-detail">
                        <h3>Gholzad Yachts</h3>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus congue id ipsum quis consequat. Interdum et malesuada fames ac ante ipsum primis in faucibus. Mauris elementum tempor maximus. Ut ac dolor quis eros semper vehicula.
                        </p>
                        <img class="company-logo" src="{{asset('images/home/gholzad-yachts-logo.svg')}}" alt="Gholzad Yachts Logo" width="200px" style="margin-top: 10px">
                    </div>
                </div>

                <div class="company-item">
                    <div class="company-image" style="background-image: url({{asset('images/home/cm-bg.webp')}})">

                    </div>
                    <div class="company-detail">
                        <h3>Coolmix</h3>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus congue id ipsum quis consequat. Interdum et malesuada fames ac ante ipsum primis in faucibus. Mauris elementum tempor maximus. Ut ac dolor quis eros semper vehicula.
                        </p>
                        <img class="company-logo" src="{{asset('images/home/coolmix-logo.svg')}}" alt="Gholzad Yachts Logo" width="150px" style="margin-top: 20px">
                    </div>
                </div>

                <div class="company-item">
                    <div class="company-image" style="background-image: url({{asset('images/home/mg-bg.webp')}})">

                    </div>
                    <div class="company-detail">
                        <h3>Mix Global</h3>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus congue id ipsum quis consequat. Interdum et malesuada fames ac ante ipsum primis in faucibus. Mauris elementum tempor maximus. Ut ac dolor quis eros semper vehicula.
                        </p>
                        <img class="company-logo" src="{{asset('images/home/mixglobal-logo.svg')}}" alt="Gholzad Yachts Logo" width="150px" style="margin-top: 20px">
                    </div>
                </div>
                <div class="company-item">
                    <div class="company-image" style="background-image: url({{asset('images/home/rma-bg.webp')}})">

                    </div>
                    <div class="company-detail">
                        <h3>RMA Check</h3>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus congue id ipsum quis consequat. Interdum et malesuada fames ac ante ipsum primis in faucibus. Mauris elementum tempor maximus. Ut ac dolor quis eros semper vehicula.
                        </p>
                        <img class="company-logo" src="{{asset('images/home/rma-check-logo.svg')}}" alt="Gholzad Yachts Logo" width="150px" style="margin-top: 20px">
                    </div>
                </div>
            </div>
        </article>
        <article class="world-map-section">
            <h2>
                we are <span class="blue">worldwide</span>
            </h2>
            <img src="{{asset('images/common/world-map.webp')}}" alt="">
        </article>
        <article class="lets-work-together-section">
            <img src="{{asset('images/common/lets-work-together-bg.svg')}}" alt="Blue Background" style="max-width: 800px; width: 100%">
            <div class="section-content">
                <h3>Let's Work Together</h3>
                <div class="contact-me-container">
                    <svg width="50px" viewBox="0 0 632 392" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M42.3335 205H575.667M575.667 205L442.333 71.6667M575.667 205L442.333 338.333" stroke="#ffffff" stroke-width="40" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                    <a class="contact-me-button" href="">Contact Me</a>
                </div>
                    
            </div>
        </article>
    </main>
@endsection

{{-- Javascript Section --}}
@section('page-extra-js')
    <script src="{{asset('js/jquery.dragnscroll.min.js')}}"></script>
    <script src="{{asset('js/home.js')}}"></script>
@endsection   