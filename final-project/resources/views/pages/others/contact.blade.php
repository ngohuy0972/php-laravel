@extends('layouts.app')

@section('contact')
  <div class="container">
    <section class="page-add">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="page-breadcrumb">
                        <h2>Dresses<span>.</span></h2>
                        <a href="{{asset('/')}}">Home</a>
                        <a class="active" href="{{asset('/contact')}}">Contact</a>
                    </div>
                </div>
                <div class="col-lg-8">
                    <img src="{{asset('frontend/img/add.jpg')}}" alt="">
                </div>
            </div>
        </div>
      </section> 
    <div class="row">
        <div class="col-lg-8">
            <form action="#" class="contact-form">
                <div class="row">
                    <div class="col-lg-6">
                        <input type="text" placeholder="First Name">
                    </div>
                    <div class="col-lg-6">
                        <input type="text" placeholder="Last Name">
                    </div>
                    <div class="col-lg-12">
                        <input type="email" placeholder="E-mail">
                        <input type="text" placeholder="Subject">
                        <textarea placeholder="Message"></textarea>
                    </div>
                    <div class="col-lg-12 text-right">
                        <button type="submit">Send message</button>
                    </div>
                </div>
            </form>
        </div>
        <div class="col-lg-3 offset-lg-1">
            <div class="contact-widget">
                <div class="cw-item">
                    <h5>Location</h5>
                    <ul>
                        <li>K7/2A Pasteur, </li>
                        <li>Hai Chau I, Da Nang City</li>
                    </ul>
                </div>
                <div class="cw-item">
                    <h5>Phone</h5>
                    <ul>
                        <li>(+84) 856 787 657</li>
                    </ul>
                </div>
                <div class="cw-item">
                    <h5>E-mail</h5>
                    <ul>
                        <li>huyngoit99@gmail.com</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="map">
        <div class="row">
            <div class="col-lg-12">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3833.9135219115915!2d108.21668961439497!3d16.06997674368747!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31421836a12699db%3A0xaa58a2add3d216f!2zUGFzdGV1ciwgSOG6o2kgQ2jDonUsIMSQw6AgTuG6tW5nIDU1MDAwMCwgVmnhu4d0IE5hbQ!5e0!3m2!1svi!2sus!4v1624149266427!5m2!1svi!2sus" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
        </div>
    </div>
</div>
@endsection