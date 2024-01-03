<header>
    <div class="navbar">
        <div class= "logo"><a href="#">Mi Portafolio</a></div>
        <ul class="links">
            <li><a href="{{route('inicio')}}">Inicio</a></li>
            <li><a href="{{route('about')}}">Sobre mi</a></li>
            <li><a href="{{route('proyectos')}}">Proyectos</a></li>
            <li><a href="{{route('contacto')}}">Contacto</a></li>
        </ul>
        <a href="{{route('curriculum')}}" class="action_btn">Mi Curriculum</a>
        <div class="toggle_btn">
           <i class="fa-solid fa-dna fa-spin" style="color: #9e19e6;"></i>
        </div>
       </div>
       <div class="dropdown_menu">
        <li><a href="{{route('inicio')}}">Inicio</a></li>
        <li><a href="{{route('about')}}">Sobre mi</a></li>
        <li><a href="{{route('proyectos')}}">Proyectos</a></li>
        <li><a href="{{route('contacto')}}">Contacto</a></li>
       <li><a href="{{route('curriculum')}}" class="action_btn" >Mi Curriculum</a></li>
    </div>
</header>
