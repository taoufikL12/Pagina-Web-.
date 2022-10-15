@extends('layouts.app')

@section('title','home')
@section('meta-description','home meta description')
@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <title>Document</title>
    
</head>
<body>
@include('portials.navegacion')

    
   <header class="encabezado">
   <div class="contenedor-navegacion">
        <div class="contenido-navegacion contenedor">
            <div class="logo">
            <h1 class="logo">Moto<span>Style</span></h1>
            </div>
        <nav class="navegacion ocultar">
            <a href="{{route('perfil')}}">Perfil</a>
            <a href="{{route('piezas')}}">Tienda</a>
            <a href="{{route('taller')}}">Taller</a>
        </nav>
        <div class="hamburguesa">
            <span></span><span></span><span></span>
        </div>
        </div>
   </div>
    
   <div class="contenido-header">
        <div class="contenedor-encabezado">
            <div class="texto-encabezado">
                <h2>Bienvenidos<h2>
                <a href="#" class="btn bordes">Nuestro Servicio</a>
            </div>
            <video autoplay loop muted >
                <source src="/sliders/17.mp4">
            </video>
        </div>
   </div> 
</header>



<div class="contenedor-nosotros contenedor">
    
        <div class="texto-nosotros">
            <p class="bienvenida">Bienvenido</p>
            <h1>Taller Mostostyle</h1>
            <p>La empresa Nacio en el 2022 en un pequeño taller de morcin por el que nos sentimos 
               muy felices y orgullosos de ser morcileños el pueblo de los jabalis.

               Nuestro equipo te da las gracias por vistarnos , tenemos varios servicios. 
               Para cualquier averia contacta en la sección de perfil, 
               te atenderemos encantados. 

               Mostostyle
            </p>
            <a class="btn btn-rojo" href="{{route('contactar')}}">Contactar</a>
        </div>

        <div class="imagenes-nosotros">
            <div class="imagenes2">
            <img data-src="sliders/20.jpg" alt="moto guantes">
            <img data-src="sliders/21.jpg" alt="moto flecha">
        </div>

        </div>
    
</div>


<br>
<br>


        
<br>
<br>
     

<footer class="footer">
        <p>Todos los derechos reservados &copy; 2022 MotoStyle, desarrollado por Taoufik</p>

       
    </footer>

<script src="home.js"></script>    
</body>
</html>



<style>
body{
    font-size:1.6rem;
    overflow-x:hidden;
    
} 

*,*::after,*::before{
    box-sizing: inherit;
}

.contenedor{
    max-width:120rem;
    margin:0 auto;
    width:95%;
    

}

h1,h2{
    font-family:'Roboto', sans-serif;
}

.contenedor-navegacion{
    background-color:#000;
    position:relative;
    z-index: 5;
}

.contenido-navegacion{
    display:flex;
    align-items:center;
    justify-content: space-between;

}

.logo h1, .navegacion a{
   color:#fff; 

}

.logo h1{
    font-size:4rem;
}
.verde{
    color:#F0B40F;
}

.rojo{
    color:#E90C0C;
}

.navegacion a {
    text-decoration:none;
    font-size:2.2rem;
    padding:1.5rem;
    padding-left:4rem;
    font-family:'Roboto', sans-serif;
    display:block;
    transition:color .3s ease-in-out;
    text-align:center;
    
}

@media(min-width:168px){
    .navegacion a{
        text-align:left;
    }

}



.navegacion{
    position:absolute;
    top:0;
    right:0;
    bottom:0;
    height:100vh;
    width:40rem;
    padding: 3rem 4rem;
    background-color:#000;
    animation: desplazamiento .5s ease-in-out;
}

.navegacion a:nth-child(even):hover{
    color:#F0B40F;
}

.navegacion a:nth-child(odd):hover{
    color:#F43838;
}

.ocultar{
    display:none;
}


.btn-cerrar{
    font-size:3rem;
    font-weight:bold;
    color:#fff;
    position:absolute;
    top:0;
    right:50px;
    user-select:none;




    
}

.btn-cerrar:hover{
     cursor:pointer;  
}

.hamburguesa:hover{
    cursor:pointer;
}

.hamburguesa span{
    background-color:#fff;
    display:block;
    width:4rem;
    height:.4rem;
    margin-bottom:.5rem;
    

}

.pantalla-completa{
    position: absolute;
    top:0;
    left:0;
    bottom:0;
    right:0;
    background-color:rgba(0,0,0,.5);
    z-index:4;
}


@keyframes desplazamiento {
    0%{
        transform:translateX(100%);
    }

    100%{
        transform:translateX(0);
    }
}

video{
    width:100%;
    height:100%;


}

.contenido-header{
    position:relative;

}

.contenido-header::before{
    content:'';
    position:absolute;
    top:0;
    right:0;
    bottom:0;
    


}

.texto-encabezado{
    position:absolute;
    z-index:2;
    width: 100%;
    height:80%;
   
    display:flex;
    flex-direction:column;
    align-items:center;
    justify-content:center;

}

.texto-encabezado h2{
    font-family:'Roboto', sans-serif;
    color:#fff;
    font-size:5.5rem;
}

.btn{

    text-decoration:none;
    color:#F0B40F;
    font-size:3rem;
    font-family:'Roboto', sans-serif;
    text-transform:capitalize;
    padding: .5rem 2.8rem;
    border-radius:5px;
    transition:all .3s ease-in-out;


}

.bordes{
    border:4px solid #fff;
   
}

@media(min-width:768px){
        .texto-encabezado h2{
            font-size:8rem;
        }
}

@media(min-width:768px){
    .btn{
        font-size:2.2rem;
    }
}


img{
    max-width:100%;
}


.contenedor-nosotros{
    display:flex;
    justify-content:space-between;
    padding-top:5rem;

}


@media(min-width:768px){

    .contenedor-nosotros{

        display:flex;
        justify-content:space-between;

    }
}


.texto-nosotros, .imagenes-nosotros{
    flex: 0 0 calc(50%-1rem);
}

.imagenes-nosotros{
    display:flex;
    justify-content:start;
    

}

.imagenes2{
    width: 28rem;
    flex:0 0 calc(50%-1rem);
    
    

}

.imagenes2 img{
    margin-bottom:1rem;
}

.imagenes-nosotros img{

    border-radius:10px;

}

.texto-nosotros .bienvenida{
    font-size:3rem;
    color:#F0B40F;

}

.texto-nosotros h1{
   font-size:5rem; 
}


.texto-nosotros p{
    font-size:2rem;
}

.btn-rojo{
    background-color:#000;
    font-weight:bold;
    display:inline-block;
    margin-top:2rem;
    
}


.sociales{
    
    width: 50px;
}

.social2{
    width: 50px;
}

.social3{
    
    width: 50px;
}




.footer{
    text-align: center;
    background-color:#000000;
    color:#FFD050;
    padding: 2rem;
    font-size: 2rem;
}


.logo {
    text-align: center;
    font-size: 3em;
}

.logo span {
    color: #B70E21;
}

</style>
    
@endsection