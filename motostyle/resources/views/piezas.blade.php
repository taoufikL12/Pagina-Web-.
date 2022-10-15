@extends('layouts.app')

@section('title','piezas')

@section('meta-description','piezas meta description')

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


<h2 class="texto-motillos">Tienda</h2>
        <div class="botones-motillos">
            <button class="todos">Todos</button>
            <button class="yamaha">Yamaha XMAX 300</button>
            <button class="kawasaki">Kawasaki Z 900</button>
            <button class="honda">Honda Forza 125</button>
            <button class="Sym">SYM Symphony 125</button>

            
        </div>

    <div class="page-content">
        <div class="product-container">
            <h3>nombre</h3>
            <img data-src="sliders/27.jpg"/>
            <h1>50€</h1>
            <button class="button-add" onclick="add('product-1', 50)">Agregar</button>
        </div>

        <div class="product-container">
            <h3>nombre</h3>
            <img data-src="sliders/27.jpg" />
            <h1>300€</h1>
            <button class="button-add" onclick="add('product-2', 300)">Agregar</button>
        </div>

        <div class="product-container">
            <h3>nombre</h3>
            <img data-src="sliders/27.jpg" />
            <h1>250€</h1>
            <button class="button-add" onclick="add('product-3', 250)">Agregar</button>
        </div>

        <div class="product-container">
            <h3>nombre</h3>
            <img data-src="sliders/27.jpg" />
            <h1>200€</h1>
            <button class="button-add" onclick="add('product-4', 200)">Agregar</button>
        </div>

        <div class="product-container">
            <h3>nombre</h3>
            <img data-src="sliders/27.jpg" />
            <h1>10€</h1>
            <button class="button-add" onclick="add('product-5', 10)">Agregar</button>
        </div>

        <div class="product-container">
            <h3>nombre</h3>
            <img data-src="sliders/27.jpg" />
            <h1>650€</h1>
            <button class="button-add" onclick="add('product-6', 650)">Agregar</button>
        </div>
    </div>

   <br>

    <div class="page-content">
        <div class="product-container">
            <h3>nombre</h3>
            <img data-src="sliders/27.jpg"/>
            <h1>50€</h1>
            <button class="button-add" onclick="add('product-1', 50)">Agregar</button>
        </div>

        <div class="product-container">
            <h3>nombre</h3>
            <img data-src="sliders/27.jpg" />
            <h1>300€</h1>
            <button class="button-add" onclick="add('product-2', 300)">Agregar</button>
        </div>

        <div class="product-container">
            <h3>nombre</h3>
            <img data-src="sliders/24.jpg" />
            <h1>250€</h1>
            <button class="button-add" onclick="add('product-3', 250)">Agregar</button>
        </div>

        <div class="product-container">
            <h3>nombre</h3>
            <img data-src="sliders/25.jpg" />
            <h1>200€</h1>
            <button class="button-add" onclick="add('product-4', 200)">Agregar</button>
        </div>

        <div class="product-container">
            <h3>nombre</h3>
            <img data-src="sliders/26.jpg" />
            <h1>10€</h1>
            <button class="button-add" onclick="add('product-5', 10)">Agregar</button>
        </div>

        <div class="product-container">
            <h3>nombre</h3>
            <img data-src="sliders/27.jpg" />
            <h1>650€</h1>
            <button class="button-add" onclick="add('product-6', 650)">Agregar</button>
        </div>
    </div>

    

<script src="piezas.js"></script>
</body>
</html>


           
<style>

*{
    margin:0;
    padding:0;
    box-sizing: border-box;
    
}
    body {
    
        background-position:center;
        background-repeat:no-repeat;
        background-size:cover;
        background-color:#232536;
        font-family: 'Roboto', sans-serif;
}



.texto-motillos{
        color:#fff;
        text-align:center;
        font-size:5rem;
        font-family: 'Roboto', sans-serif;

    }
    .todos{
      color:#FFD050;  
      background-color:#000000;
      padding:10px 20px;
      font-size:20px;
      font-weight:bold;
      border:none;
      border-radius:10px;
      margin-bottom:2rem;
    }

    .yamaha{
      color:#FFD050;
      background-color:#000000;
      padding:10px 20px;
      font-size:20px;
      font-weight:bold;
      border:none;
      border-radius:10px;
      margin-bottom:2rem;

    }

    
    .kawasaki{
      color:#FFD050;
      background-color:#000000;
      padding:10px 20px;
      font-size:20px;
      font-weight:bold;
      border:none;
      border-radius:10px;
      margin-bottom:2rem;

    }
    

    .honda{

    color:#FFD050;
      background-color:#000000;
      padding:10px 20px;
      font-size:20px;
      font-weight:bold;
      border:none;
      border-radius:10px;
      margin-bottom:2rem;

    }

    
.Sym{
      color:#FFD050;
      background-color:#000000;
      padding:10px 20px;
      font-size:20px;
      font-weight:bold;
      border:none;
      border-radius:10px;
      margin-bottom:2rem; 
}

.botones-motillos{
    margin-left:19rem;
}


button {
    font-size: 16px;
    text-align: center;
    border-radius: 8px;
    padding: 10px 20px;
}

.page-nav {
    
    position: relative;
}

.page-nav h1 {
    color:#FFD050;
    margin: 20px;
}

.button-checkout {
    background-color: white;
    color: black;
    border: 2px solid #008CBA; /* Blue */
    transition-duration: 0.4s;
    position: absolute;
    right: 15px;
    bottom: 15px;
}

.button-checkout:hover {
    background-color: #008CBA; /* Blue */
    color: white;
}

.page-content {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-evenly;
}

.product-container {
    margin: 15px;
    padding: 2px 16px;
    position: relative;
    box-shadow: 0 4px 8px 0 rgba(0,0,0,0.1);
    background-color: white;
    border-radius:10px;
}

.product-container:hover {
    box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
  }

.product-container img {
    width: 300px;
}

.product-container h1 {
    margin-bottom: 10px;
    margin-left: 15px;
}

.button-add {
    background-color: white;
    color: black;
    border: 2px solid #4CAF50; /* Green */
    transition-duration: 0.4s;
    position: absolute;
    right: 15px;
    bottom: 10px;
}
  
.button-add:hover {
    background-color: #4CAF50; /* Green */
    color: white;
}
</style>
             