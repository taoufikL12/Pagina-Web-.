@extends('layouts.app')

@section('title','perfil')
@section('meta-description','perfil meta description')
@section('content')
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
        
        <title>Perfil</title>

    </head>
    <body>

    <div class="container-form sign-in">
    <form class="formulario">
                
                <div class="iconos">
                    <div class="border-icon">
                    <span class="material-symbols-outlined">
                        mail
                    </span>
                    </div>
                    <div class="border-icon">
                    <span class="material-symbols-outlined">
                            live_help
                    </span>
                    </div>
                    <div class="border-icon">
                    <span class="material-symbols-outlined">
                        tools_wrench
                    </span>
                    </div>
                </div>
                <p class="cuenta-gratis">¿Aun no tienes una cuenta?</p>
                    <input type="email" placeholder="Email">
                    <input type="password" value="Contraseña">
                    <input type="button" value="iniciar sesion">
            </form>
            <div class="welcome-back">
                <div class="message">
                    <h2>Bienvenido de nuevo</h2>
                    <p>¿No tienes cuenta? Registrate</p>
                    <button class="sign-in-btn">Registrate</button>
                </div>
            </div>
            
        </div>
        <div class="container-form sign-up">
            <div class="welcome-back">
                <div class="message">
                    <h2>MotoStyle</h2>
                    <p>¿ya tienes un cuenta?</p>
                    <button class="sign-up-btn">Iniciar Sesion</button>
                </div>
            </div>
            <form class="formulario">
                
                <div class="iconos">
                    <div class="border-icon">
                    <span class="material-symbols-outlined">
                        mail
                    </span>
                    </div>
                    <div class="border-icon">
                    <span class="material-symbols-outlined">
                            live_help
                    </span>
                    </div>
                    <div class="border-icon">
                    <span class="material-symbols-outlined">
                        tools_wrench
                    </span>
                    </div>
                </div>
                <p class="cuenta-gratis">Crear una cuenta gratis</p>
                <input type="text" placeholder="Nombre">
                <input type="text" placeholder="Apellidos">
                <input type="email" placeholder="Email">
                <input type="password" value="Contraseña">
                <input type="button" value="Registrarse">
                

            </form>
        </div>
        <script src="perfil.js"></script>
    </body>
    </html>
    





<style>

*{
    margin:0;
    padding:0;
    box-sizing: border-box;
    font-family:'Roboto',sans-serif;
}

body{
   height:100vh;
   display:flex;
   align-items:center; 
   justify-content:center;
   background-image:url(sliders/8.jpg);
   background-position:center;
   background-repeat:no-repeat;
   background-size:cover;
   color:#fff;
}

.container-form{
    width:90%;
    height:90vh;
    display:flex;
    justify-content:space-around;
    transition:all .5s ease-out;

}

.welome-back{
    display:flex;
    align-items:center;
    text-align:center:


}

.message{
    padding:6rem;
}

.message h2{
    color:#F0B40F;
    font-size:4.7rem;
    padding:1rem 0;

}

.message button{
    padding:1rem;
    font-weight:400;
    background-color:#4a4aee;
    border-radius:2rem;
    border:none;
    outline:none;
    cursor:pointer;
    font-size:.9rem;
    margin-top:2rem;
    transition:all .3s ease-in;
    color:#fff;

}

.message button:hover{
    #background-color:#6464f8;
}
.formulario{
    width:400px;
    padding:1rem;
    margin:2rem;
    background-color:rgb(51,51,51,0.602);
    text-align:center;
}

.create-acount{
        padding:2.7rem 0;
        font-size:1.7rem;

}

.iconos{
    width:200px;
    display:flex;
    justify-content:space-around;
    margin:auto;

}

.border-icon{
    height:20px;
    width: 20px;
    display:flex;
    align-items:center;
    justify-content:center;
    padding:1.5rem;
    border:solid thin white;
    border-radius:50%;
    font-size:1.5rem;
    transition:all .3s ease-in;

}

.border-icon:hover{
    background-color:#4a4aee;
    cursor:pointer;
}
.cuenta-gratis{
    padding:2rem 0;
}

.formulario input{
    width:70%;
    display:block;
    margin:auto;
    margin-bottom:2rem;
    background-color:transparent;
    border:none;
    border-bottom:white thin solid;
    text-align:center;
    outline:none;
    padding:.2rem 0;
    font-size:.9rem;
    color:white;


}

.formulario input[type="button"]{
    width:60%;
    margin:auto;
    border:solid thin white;
    padding:.7rem;
    border-radius:2rem;
    background-color:grey;
    font-weight:600;
    margin-top:3rem;
    font-size:.8rem;
    cursor:pointer;
    color:#222;

}

.sign-in{
    position:absolute;
    opacity:0;
    visibility:hidden;
}

.sign-in.active{
    opacity:1;
    visibility:visible;
}

.sign-up.active{
    opacity:0;
    visibility:hidden;
}

    </style>
@endsection