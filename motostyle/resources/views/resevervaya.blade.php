<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Formulario de Contacto</title>
    <link rel="stylesheet" href="estilos.css">
    <!--Icon-Font-->
    <script src="https://kit.fontawesome.com/eb496ab1a0.js" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container-form">
        <div class="info-form">
            <h2>Reserva Ya</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Qui eligendi est voluptates quae ipsam eius, in quasi odio porro aut vel beatae aperiam.</p>
            <a href="#"><i class="fa fa-phone"></i> 123-456-789</a>
            <a href="#"><i class="fa fa-envelope"></i>motoStyle@gmail.com</a>
            <a href="#"><i class="fa fa-map-marked"></i> Madrid, España</a>
        </div>
        <form action="#" autocomplete="off">
            <input type="text" name="nombre" placeholder="Tu Nombre" class="campo">
            <input type="emal" name="email" placeholder="Tu Email" class="campo">
            <textarea name="mensaje" placeholder="Tu Mensaje..."></textarea>
            <input type="submit" name="enviar" value="Enviar Mensaje" class="btn-enviar">
        </form>
    </div>
</body>
</html>

<style>

@import url('https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;700&display=swap');
*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Open Sans', sans-serif;
}

body{

background-color:#191D2D;

}

.container-form{
    width: 100%;
    max-width: 1100px;
    margin: auto;
    display: grid;
    grid-template-columns: repeat(2,1fr);
    grid-gap: 50px;
    margin-top: 90px;
}
.container-form h2{
    color:white;
    margin-bottom: 15px;
    font-size: 35px
}
.container-form p{
    color:white;
    font-size: 17px;
    line-height: 1.6;
    margin-bottom: 30px;
}
.container-form a{
    font-size: 17px;
    display: inline-block;
    text-decoration: none;
    width: 100%;
    margin-bottom: 15px;
    color: white;
    font-weight: 700;
}
.container-form a i{
    color: orange;
    margin-right: 10px;
}
.container-form form .campo, textarea{
    width: 100%;
    padding: 15px 10px;
    font-size: 16px;
    border: 1px solid #dbdbdb;
    margin-bottom: 20px;
    border-radius: 3px;
    outline: 0px;
}
.container-form form textarea{
    max-width: 530px;
    min-width: 530px;
    min-height: 140px;
    max-height: 150px;
}
.container-form .btn-enviar{
    padding: 15px;
    font-size: 16px;
    border: none;
    outline: 0px;
    background: orange;
    color: white;
    border-radius: 3px;
    cursor: pointer;
    transition: all 300ms ease;
}
.container-form .btn-enviar:hover{
    background: #e39403;
}

</style>