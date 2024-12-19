@extends('client.layouts.main', ['type'=>'white'])

{{-- Styles Section --}}
@section('page-extra-css')
    <link rel="stylesheet" href="{{asset('css/projects.css?v=1.0.0')}}">
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
            <h2>Our <span class="blue">Projects</span></h2>
            <p>
                At the age of 8 we fled our beautiful Afghanistan, a route that will always stay with me. On foot through 11 countries, en route to the Netherlands, a journey that lasted no less than 6 months. My motivation in life has been given a huge boost as a result, after arriving in the Netherlands at the age of 9 I decided and promised my parents to become successful before I was 30 and to make them proud.
            </p>
        </article>
        <article class="company-section">
            <div class="image-section">
                <img src="{{asset('images/projects/company-1.webp')}}" alt="">
            </div>
            <div class="company-card">
                <img src="{{asset('images/home/gholzad-yachts-logo.svg')}}" alt="" class="company-logo">
                <p class="only-desktop">
                    Not all plumbing companies can guarantee up-front pricing, superior workmanship and parts, licensed and insured plumbing contractors, and courteous support from uniformed professionals Not all plumbing companies can guarantee up-front pricing, superior workmanship and parts, licensed and insured plumbing contractors, and courteous support from uniformed professionalsNot all plumbing companies can guarantee up-front pricing, superior workmanship and parts, licensed and insured plumbing contractors, and courteous support from uniformed professionals superior workmanship and parts, licensed and insured plumbing contractors, and courteous support from uniformed professionalsNot all plumbing companies can guarantee up-front pricing.
                </p>
                <p class="only-mobile">
                    Not all plumbing companies can guarantee up-front pricing, superior workmanship and parts, licensed and insured plumbing contractors, and courteous support from uniformed professionals Not all plumbing companies can guarantee up-front pricing, 
                </p>
                <a href="{{env('COMPANY_WEBSITE_GHOLZAD_YACHTS')}}" class="btn-grey-outline">Visit website</a>
            </div>
        </article>
        <article class="company-section company-section-inverse">
            <div class="company-card">
                <img src="{{asset('images/home/coolmix-logo.svg')}}" alt="" class="company-logo coolmix-logo">
                <p class="only-desktop">
                    Not all plumbing companies can guarantee up-front pricing, superior workmanship and parts, licensed and insured plumbing contractors, and courteous support from uniformed professionals Not all plumbing companies can guarantee up-front pricing, superior workmanship and parts, licensed and insured plumbing contractors, and courteous support from uniformed professionalsNot all plumbing companies can guarantee up-front pricing, superior workmanship and parts, licensed and insured plumbing contractors, and courteous support from uniformed professionals superior workmanship and parts, licensed and insured plumbing contractors, and courteous support from uniformed professionalsNot all plumbing companies can guarantee up-front pricing.
                </p>
                <p class="only-mobile">
                    Not all plumbing companies can guarantee up-front pricing, superior workmanship and parts, licensed and insured plumbing contractors, and courteous support from uniformed professionals Not all plumbing companies can guarantee up-front pricing, 
                </p>
                <a href="{{env('COMPANY_WEBSITE_COOLMIX')}}" class="btn-grey-outline">Visit website</a>
            </div>
            <div class="image-section">
                <img src="{{asset('images/projects/company-2.webp')}}" alt="">
            </div>
        </article>
        <article class="company-section">
            <div class="image-section">
                <img src="{{asset('images/projects/company-3.webp')}}" alt="">
            </div>
            <div class="company-card">
                <img src="{{asset('images/home/mixglobal-logo.svg')}}" alt="" class="company-logo">
                <p class="only-desktop">
                    Not all plumbing companies can guarantee up-front pricing, superior workmanship and parts, licensed and insured plumbing contractors, and courteous support from uniformed professionals Not all plumbing companies can guarantee up-front pricing, superior workmanship and parts, licensed and insured plumbing contractors, and courteous support from uniformed professionalsNot all plumbing companies can guarantee up-front pricing, superior workmanship and parts, licensed and insured plumbing contractors, and courteous support from uniformed professionals superior workmanship and parts, licensed and insured plumbing contractors, and courteous support from uniformed professionalsNot all plumbing companies can guarantee up-front pricing.
                </p>
                <p class="only-mobile">
                    Not all plumbing companies can guarantee up-front pricing, superior workmanship and parts, licensed and insured plumbing contractors, and courteous support from uniformed professionals Not all plumbing companies can guarantee up-front pricing, 
                </p>
                <a href="{{env('COMPANY_WEBSITE_MIXGLOBAL')}}" class="btn-grey-outline">Visit website</a>
            </div>
        </article>
        <article class="company-section company-section-inverse">
            <div class="company-card">
                <img src="{{asset('images/home/rma-check-logo.svg')}}" alt="" class="company-logo coolmix-logo">
                <p class="only-desktop">
                    Not all plumbing companies can guarantee up-front pricing, superior workmanship and parts, licensed and insured plumbing contractors, and courteous support from uniformed professionals Not all plumbing companies can guarantee up-front pricing, superior workmanship and parts, licensed and insured plumbing contractors, and courteous support from uniformed professionalsNot all plumbing companies can guarantee up-front pricing, superior workmanship and parts, licensed and insured plumbing contractors, and courteous support from uniformed professionals superior workmanship and parts, licensed and insured plumbing contractors, and courteous support from uniformed professionalsNot all plumbing companies can guarantee up-front pricing.
                </p>
                <p class="only-mobile">
                    Not all plumbing companies can guarantee up-front pricing, superior workmanship and parts, licensed and insured plumbing contractors, and courteous support from uniformed professionals Not all plumbing companies can guarantee up-front pricing, 
                </p>
                <a href="{{env('COMPANY_WEBSITE_RMA')}}" class="btn-grey-outline">Visit website</a>
            </div>
            <div class="image-section">
                <img src="{{asset('images/projects/company-4.webp')}}" alt="">
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

    </script>
@endsection   