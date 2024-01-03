@extends('layouts.landing')
@section('title','Sobre mi')

@section('body')
<section id='hero' style="background-image:url('/assets/images/jupiter.png')">
    <h1 style="margin-top: 50px; width: 1000px; align-self: center">Este apartado tiene el prosito de presentarme, aqui podra leer sobre mis metas e intereses.</h1>
    <div style= "font-size: 1.3rem;text-align: justify; line-height: 1.5; margin-top: 10px; margin-right: 300px; margin-bottom: 15px; margin-left: 300px">
        <p style="margin-bottom: 50px" >Soy un estudiante de informática en la UDO actualmente cursando el 5to semestre,
            teniendo un promedio general en la carrera de 8.02 hasta ahora (suficiente para la mención Cum Laude).
            Si bien mi falta de experticia en el campo laboral es evidente, tengo una excelente disposición y rapidez para
            aprender, lo que, aun teniendo habilidades básicas en el desarrollo web, me hace potencialmente valioso
            para muchos entornos laborales.
            Además, tengo un compromiso constante con mi formación profesional y académica,
            así como con los valores que me representan en todos mis facetas: Responsabilidad, Compromiso, Excelencia y Disciplina.
            Dentro de su compañía espero ocupar un cargo relacionado al desarrollo
            y mantenimiento de aplicaciones web (especificamente del lado del servidor)
            , APIs y bases de datos, sean de tipo SQL o no.

        </p>
        <div style="display: flex; flex-direction: column">
            <img src="{{asset('assets/images/My_Toolbox.png')}}" alt="my_toolbox" width="800px" height="800px" style="align-self: center; border-radius: 20px">
            <p style="margin-top: 20px">
                Aunque espero conseguir un lugar en su empresa, como dije tengo un compromiso conmigo mismo,
                estando mis áreas de genuino interés laboral y académico más bien orientadas al Aprendizaje Automático, la Ciencia
                de Datos y algunos campos vanguardistas y más científicos, influenciados por estas áreas, como la Computación
                Cuántica y la Bioinformática. En la imagen de arriba se puede apreciar un mapa mental de
                mis intereses y las herramientas con las que siempre estoy dispuesto a trabajar y aprender.
            </p>
        </div>
    </div>
</section>
@endsection
