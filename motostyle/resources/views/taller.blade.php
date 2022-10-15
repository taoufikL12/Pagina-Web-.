@extends('layouts.app')

@section('title','taller')
@section('meta-description','taller meta description')

@section('content')
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
    <header>
        <div class="container">
            <p class="logo">Pide Tu Cita Ya!</p>
            <nav>
                <a href="#somos-proya">Taller</a>
                <a href="#nuestros-programas">Nuestros Precios</a>
                <a href="#caracteristicas">Características</a>
            </nav>
        </div>
    </header>

    <section id="hero">
        <h1>Pide Cita <br>con los Mejores</h1>
        <button>Reserva Ya!</button>
    </section>

    <section id="somos-proya">
        <div class="container">
            <div class="img-container">
                <img src="sliders/1.png">
            </div>
            <div class="texto">

                <h2>Somos <span class="color-acento">MotoStyle</span></h2>
                <p>La empresa Nacio en el 2022 en un pequeño taller de morcin por el que nos sentimos 
               muy felices y orgullosos de ser morcileños el pueblo de los jabalis.

               Nuestro equipo te da las gracias por vistarnos , tenemos varios servicios. 
               Para cualquier averia contacta en la sección de perfil, 
               te atenderemos encantados. </p>
            </div>
        </div>
    </section>

    <section id="nuestros-programas">
        <div class="container">
            <h2>Nuestros pack</h2>
            <div class="programas">
                <div class="carta">
                    <h3>Reparación</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt vero corporis incidunt saepe qui commodi quasi neque veniam quam, aspernatur est beatae maxime animi sed reiciendis mollitia ducimus veritatis repellendus?</p>
                    <button>+ Info</button>
                </div>
                <div class="carta">
                    <h3>Mantenimiento</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt vero corporis incidunt saepe qui commodi quasi neque veniam quam, aspernatur est beatae maxime animi sed reiciendis mollitia ducimus veritatis repellendus?</p>
                    <button>+ Info</button>
                </div>
                <div class="carta">
                    <h3>Restauración</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt vero corporis incidunt saepe qui commodi quasi neque veniam quam, aspernatur est beatae maxime animi sed reiciendis mollitia ducimus veritatis repellendus?</p>
                    <button>+ Info</button>
                </div>  
            </div>
        </div>
    </section>

    <section id="caracteristicas">
        <div class="container">
            <ul>
                <li>✔️ 100% fiables</li>
                <li>✔️ Flexibilidad de horarios</li>
                <li>✔️ Calidad al mejor precio</li>
                <li>✔️ Asistencia Inmediata</li>
            </ul>
        </div>
    </section>

    <section id="final">
        <h2>Listo para Reparar?</h2>
        <a href="{{route('resevervaya')}}">Reserva YA!</a>
    </section>

    <footer>
        <div class="container">
            <p>&copy; MotoStyle 2022</p>
        </div>
    </footer>
    </body>
    </html>


    <style>

*{
    box-sizing: border-box;
}

html{
    scroll-behavior: smooth;
}

body{
    font-family: 'Roboto', sans-serif;
    margin: 0;
}


h1{ font-size: 3.5em;}
h2{ font-size: 2.7em;}
h3{ font-size: 2em;}
p{ font-size: 1.25em;}
ul{ list-style: none;}
li{ font-size: 1.25em;}

button{
    font-size: 1.25em;
    font-weight: bold;
    padding: 10px 30px;
    border-radius: 5px;
    border: 2px solid rgba(0,0,0,0.3);
    box-shadow: 2px 2px 10px rgba(0,0,0,0.5);
    color: white;
    background-color:#F0B40F;
}


#final a{
    font-size: 1.25em;
    font-weight: bold;
    padding: 10px 30px;
    border-radius: 5px;
    border: 2px solid rgba(0,0,0,0.3);
    box-shadow: 2px 2px 10px rgba(0,0,0,0.5);
    color: white;
    background-color:#F0B40F;
}

button:hover{
    background-color: rgb(101, 33, 165);
}

.container{
    max-width: 1400px;
    margin: auto;
}

.color-acento{ color:#F0B40F; }

header{
    background-color: rgb(245,245,245);
    
}

header .logo{
    margin: 0;
    padding: 25px 30px;
    font-weight: bold;
    color:#F0B40F;
    font-size: 1.6em;
}

header .container{
    display: flex;
    flex-direction: column;
    align-items: center;
}

header nav{
    display: flex;
    flex-direction: column;
    text-align: center;
    padding-bottom: 25px;
}

header a{
    padding: 5px 12px;
    text-decoration: none;
    font-weight: bold;
    color: black;
}

header a:hover{
    color: blueviolet;
}

#hero{
    display: flex;
    align-items: center;
    justify-content: center;
    text-align: center;
    flex-direction: column;
    height: 90vh;
    background-image: linear-gradient(
        0deg,
        rgba(0,0,0,0.5),
        rgba(0,0,0,0.5)
    )
    ,url("media/hero.jpg");
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center center;
}

#hero h1{
    color:#F0B40F;
}

#hero button{
    font-size: 1.75em;
}

#somos-proya .container{
    text-align: center;
    padding: 200px 12px;
}

#nuestros-programas{
    background-color: rgb(30,30,30);
    color: white;
    text-align: center;
}

#nuestros-programas .container{
    padding: 150px 12px;
}

#nuestros-programas h2{
    margin-top: 0;
    font-size: 3.2em;
}

#nuestros-programas p{
    display: none;
}

#nuestros-programas .carta{
    background-position: center center;
    background-size: cover;
    padding: 50px 0px;
    margin: 30px;
    border-radius: 15px;
}

.carta:first-child{
    background-image: linear-gradient(
        0deg,
        rgba(0,0,0,0.5),
        rgba(0,0,0,0.5)
    )
    ,url("media/front-end.jpg");

}

.carta:nth-child(2){
    background-image: linear-gradient(
        0deg,
        rgba(0,0,0,0.5),
        rgba(0,0,0,0.5)
    )
    ,url("media/full-stack.jpg");
}

.carta:nth-child(3){
    background-image: linear-gradient(
        0deg,
        rgba(0,0,0,0.5),
        rgba(0,0,0,0.5)
    )
    ,url("media/python.jpg");

}

#caracteristicas .container{
    text-align: center;
    padding: 250px 12px;
}

#caracteristicas li{
    margin: 16px 0px;
    font-weight: bold;
}

#final{
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    text-align: center;
    background-color: rgb(30,30,30);
    color: white;
    height: 80vh;
}

#final h2{
    font-size: 9vw;
}

#final button{
    font-size: 5vw;
}

footer{
    background-color: rgb(230,230,230);
}

footer p{
    margin: 0;
    padding: 12px;
    color: rgb(100,100,100);
}

footer .container{
    height: 150px;
    display: flex;
    justify-content: center;
    align-items: flex-end;
}

@media (min-width: 850px){
    header{
        position: fixed;
        width: 100%;
    }

    header .container{
        flex-direction: row;
        justify-content: space-between;
    }

    header nav{
        flex-direction: row;
        padding-bottom: 0;
        padding-right: 20px;
    }

    #hero h1{
        font-size: 5em;
    }

    #somos-proya .container{
        display: flex;
        justify-content: space-evenly;
    }

    #somos-proya .texto{
        width: 50%;
        max-width: 600px;
        text-align: initial;
        padding-left: 30px;
        display: flex;
        flex-direction: column;
        justify-content: center;
    }

    #somos-proya h2{
        margin-top: 0px;
    }

    #somos-proya .img-container{
        background-image: url("media/somos-proya.jpg");
        background-size: cover;
        background-position: center center;
        height: 500px;
        width: 400px; 
    }

    #nuestros-programas .programas{
        display: flex;
        justify-content: center;
    }

    #nuestros-programas p{
        display: block;
        margin-bottom: 30px;
    }

    #nuestros-programas h2{
        font-size: 4em;
    }

    #nuestros-programas h3{
        margin-top: 0;
    }

    #nuestros-programas .carta{
        padding: 50px;
        background-size: 100% 150px;
        background-repeat: no-repeat;
        background-position-y: 0;
        background-color: rgba(50, 50, 50, 1);
        box-shadow: 2px 2px 10px rgba(0,0,0,0.5);
    }

    .carta:first-child{
        background-image: linear-gradient(
            0deg,
            rgba(0,0,0,0.5),
            rgba(0,0,0,0.5)
        )
        ,url("media/front-end-cropped.jpg");

    }

    .carta:nth-child(2){
        background-image: linear-gradient(
            0deg,
            rgba(0,0,0,0.5),
            rgba(0,0,0,0.5)
        )
        ,url("media/full-stack-cropped.jpg");
    }

    .carta:nth-child(3){
        background-image: linear-gradient(
            0deg,
            rgba(0,0,0,0.5),
            rgba(0,0,0,0.5)
        )
        ,url("media/python-cropped.jpg");

    }

    #caracteristicas{
        background-image: url("media/background-2.jpeg");
        background-repeat: no-repeat;
        background-size: 500px 400px;
        background-position: calc(100vw - 500px) 120px;
    }

    #caracteristicas .container{
        text-align: initial;
    }

    #caracteristicas ul{
        margin-left: 100px;
    }

    #final h2{
        font-size: 5em;
    }

    #final button{
        font-size: 2em;
    }

    footer .container{
        justify-content: flex-end;
    }
}

@media (min-width: 1200px) {
    #caracteristicas{
        background-position-x: calc(100vw - 800px);
    }
}
    </style>
@endsection

