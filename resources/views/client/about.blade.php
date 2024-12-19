@extends('client.layouts.main', ['type'=>'white'])

{{-- Styles Section --}}
@section('page-extra-css')
    <link rel="stylesheet" href="{{asset('css/about.css?v=1.0.0')}}">
@endsection

{{-- Main Content Section --}}
@section('page-content')
    <div class="page-cover">
        <img class="dotted-shape" src="{{asset('images/bg-shapes/dots-2row-light.svg')}}" alt="">
        <h1>
            WE INVEST MORE THAN JUST MONEY
        </h1>
    </div>
    <main style="margin-top: 50px">
        <article class="basic-text-content">
            <h2>Our <span class="blue">History</span></h2>
            <p>
                At the age of 8 we fled our beautiful Afghanistan, a route that will always stay with me. On foot through 11 countries, en route to the Netherlands, a journey that lasted no less than 6 months. My motivation in life has been given a huge boost as a result, after arriving in the Netherlands at the age of 9 I decided and promised my parents to become successful before I was 30 and to make them proud.
            </p>
        </article>

        <article class="whois-gholzad-section">
                <div class="section-content">
                    <h2>who is gholzad?</h2>
                    <p>
                        Nice to meet you! My name is Ajmal Gholzad (32). I have more than 15 years of experience in entrepreneurship of e-commerce companies in different markets. I work with professionals, entrepreneurs and I like to work together. 
                    </p>
                    <h3>
                        How do I describe myself? 
                    </h3>
                    <p>
                        An entrepreneur who creates new business, implements strategies and helps companies find opportunities and achieve goals. Experience in multinational relationships. I have a proven track record of building and maintaining strong working relationships with key clients. 
                    </p>
                    <h3>
                        ‘An entrepreneur with experience in multinationals.’ 
                    </h3>
                    <p>
                        Feel free to contact me at ajmal@gholzad.com if you have any ideas, comments or questions about my work. I am always interested in making new professional contacts.
                    </p>
                </div>
                <div class="section-image">
                    <img src="{{asset('images/about/ajmal.webp')}}" alt="Ajmal Gholzad">
                    <img src="{{asset('images/about/ajmal-mobile.webp')}}" alt="Ajmal Gholzad">
                </div>
        </article>

        <article class="about-cards-section">
            <div class="about-card">
                <img src="{{asset('images/about/icons-20.webp')}}" alt="Our Expertise Icon">
                <h4> Our Expertises </h4>
                <p>
                    Thanks to years of experience within various companies and industries, we can offer a wide range of expertise.
                </p>
            </div>

            <div class="about-card">
                <img src="{{asset('images/about/icons-21.webp')}}" alt="Financial Investments">
                <h4> Financial Investments </h4>
                <p>
                    Flexible room to grow thanks to financial investments that match the potential of the company.
                </p>
            </div>

            <div class="about-card">
                <img src="{{asset('images/about/icons-22.webp')}}" alt="Identity & Branding">
                <h4> Identity & Branding </h4>
                <p>
                    Development of the (online) identity and branding for an optimal image and business operations.
                </p>
            </div>

            <div class="about-card">
                <img src="{{asset('images/about/icons-23.webp')}}" alt="Growth Hacking">
                <h4> Growth Hacking </h4>
                <p>
                    Realization and optimization of online growth by applying growth hacking.
                </p>
            </div>

            <div class="about-card">
                <img src="{{asset('images/about/icons-24.webp')}}" alt="Process Automation">
                <h4> Process Automation </h4>
                <p>
                    Optimization of business processes for optimal efficiency and better overview.
                </p>
            </div>

            <div class="about-card">
                <img src="{{asset('images/about/icons-25.webp')}}" alt="Supply Chain Optimization">
                <h4> Supply Chain Optimization </h4>
                <p>
                    Optimization of Supply Chains through better purchasing agreements, thanks to a large network of specialists.
                </p>
            </div>
        </article>

        <article class="scroll-items-section">
                <div class="scroll-item-content">
                    Does Your Company Have The Potential And Ambition To Grow And Does Our Approach Appeal To You? 
                    <p class="text-bold">
                        We Look Forward To Meeting You!
                    </p>
                </div>

                <div class="scroll-item-content">
                    Our Goal Is To Realize Growth, And To Automate And Optimize All Business Processes For Optimal Efficiency.
                </div>
                <div class="scroll-item-content">
                    In Addition To Financial Resources, We Contribute Knowledge And Expertise, And We Have An Extensive Network For Companies With (Online) Growth Potential.
                </div>
                <div class="scroll-item-content">
                    In Recent Years, Gholzad Investments Has Been Involved In The Establishment Of Various Companies And We Have Entered Companies As An Investor. Get To Know Our Brands And Projects!
                </div>
        </article>

        <article class="about-in-cards-section">
            <div class="about-in-card">
                <img src="{{asset('images/about/icons-33.webp')}}" alt="Financial Resources">
                <h4> Financial Resources </h4>
                <p>
                    Flexible room to grow through the contribution of financial resources.
                </p>
            </div>

            <div class="about-in-card">
                <img src="{{asset('images/about/icons-34.webp')}}" alt="Knowledge & Time">
                <h4> Knowledge & Time </h4>
                <p>
                    Knowledge in all areas of business and development.
                </p>
            </div>

            <div class="about-in-card">
                <img src="{{asset('images/about/icons-35.webp')}}" alt="Network & Growth">
                <h4> Network & Growth </h4>
                <p>
                    An extensive new network with opportunities for growth.
                </p>
            </div>
        </article>

        <article class="our-method-section">
            <h2>Our <span class="blue">Method</span></h2>
            <p style="max-width: 600px;">
                We always want to be able to put all our energy into projects. That is why we have set up a process to determine whether your company is suitable for a collaboration with us.
            </p>

            <div class="steps-section">
                <div class="method-step">
                    <img src="{{asset('images/about/icons-n-1.webp')}}" alt="Start Collaboration">
                    <h4> Pitch Your Company </h4>
                    <p>
                        Through an online pitch you tell us who you are, what your company does and how we can help you. Now is the time to impress us!
                    </p>
                </div>
                <div class="method-step">
                    <img src="{{asset('images/about/icons-n-2.webp')}}" alt="Pitch Your Company">
                    <h4> Getting To Know Gholzad </h4>
                    <p>
                        Have you aroused our interest? Then we make an appointment for an introduction. During this meeting we get to know each other and discuss the possibilities.
                    </p>
                </div>
                <div class="method-step">
                    <img src="{{asset('images/about/icons-n-3.webp')}}" alt="Start Collaboration">
                    <h4> Start Collaboration </h4>
                    <p>
                        After the meeting, we evaluate the options internally. If we are enthusiastic, we draw up a plan and start the collaboration with your company.
                    </p>
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
    <script>
        var isInViewport = function (elem) {
            var distance = elem.getBoundingClientRect();

            return (
                distance.top >= 0 &&
                distance.left >= 0 &&
                (distance.bottom - 110) <= ((window.innerHeight || document.documentElement.clientHeight)) &&
                distance.right <= (window.innerWidth || document.documentElement.clientWidth)
            );
        };

        var scrollItemsSection = document.querySelector('.scroll-items-section');

        window.addEventListener('scroll', function(event) {
            if (isInViewport(scrollItemsSection)) {
                scrollItemsSection.classList.add('visible');
                scrollItemsSection.classList.remove('hidden');
            } else {
                scrollItemsSection.classList.add('hidden');
                scrollItemsSection.classList.remove('visible');
            }
        }, false);
    </script>
@endsection   