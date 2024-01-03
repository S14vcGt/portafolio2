@extends('layouts.landing')
@section('title','Contacto')

@section('body')
<section id='hero'>
    <h1 style="margin-top: 50px; width: 1000px; align-self: center">
        En este apartado puede encontrar links a mis redes sociales
    </h1>

    <div>
        <ul style="margin-top: 30px">
            <li><a  href="https://www.linkedin.com/in/sebastián-mata-195704274/">
                    <img src="{{asset('assets/images/linkedin.png')}}" width="30px">
                </a>
                <a style="padding: 20px"  href="https://www.instagram.com/s14vc/">
                    <img src="{{asset('assets/images/instagram.png')}}" width="30px">
                </a>
            </li>

        </ul>
    </div>

</section>
@endsection
