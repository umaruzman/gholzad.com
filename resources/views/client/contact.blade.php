@extends('client.layouts.main', ['type'=>'white'])

{{-- Styles Section --}}
@section('page-extra-css')
    <link rel="stylesheet" href="{{asset('css/contact.css?v=1.0.0')}}">
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
        <article class="world-map-section">
            <h2>
                we are <span class="blue">worldwide</span>
            </h2>
            <img src="{{asset('images/common/world-map.webp')}}" alt="">
        </article>

        <article class="about-cards-section">
            <div class="about-card">
                <img src="{{asset('images/contact/call.svg')}}" alt="Conact Number Icon">
                <h4> +31 85 047 0600 </h4>
            </div>

            <div class="about-card">
                <img src="{{asset('images/contact/email.svg')}}" alt="Email Icon">
                <h4> ajmal@gholzad.com </h4>
            </div>

            <div class="about-card">
                <img src="{{asset('images/contact/location.svg')}}" alt="Address Icon">
                <h4> De Corridor 16-D 3621 Bz Breukelen <br> The Netherlands </h4>
            </div>
        </article>

        <article class="form-section">
            <form action="{{route('client.contact.post')}}" method="POST">
                @csrf
                <div class="row">
                   @if (\Session::has('success')) 
                     <div class="col-12">
                         <div class="success-message">
                            We have received your inquiry. We will get back to you as soon as possible.
                         </div>
                     </div>
                   @endif

                    <div class="col-6">
                        <input type="text" class="form-control" placeholder="Name" required name="name">
                    </div>
                    <div class="col-6">
                        <input type="email" class="form-control" placeholder="Email" required name="email">
                    </div>
                    <div class="col-6">
                        <input type="text" class="form-control" placeholder="Phone" required name="phone">
                    </div>
                    <div class="col-6">
                        <input type="text" class="form-control" placeholder="Subject" required name="subject">
                    </div>
                    <div class="col-12">
                        <textarea class="form-control" id="" cols="30" rows="10" placeholder="Message" required name="message"></textarea>
                    </div>

                    <div class="col-12 center-items">
                        <button class="btn-submit">
                            Submit
                        </button>
                    </div>

                </div>
            </form>
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