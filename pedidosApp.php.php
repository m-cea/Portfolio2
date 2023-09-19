
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>pedidosApp</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">

        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="css/fontAwesome.css">
        <link rel="stylesheet" href="css/hero-slider.css">
        <link rel="stylesheet" href="css/owl-carousel.css">
        <link rel="stylesheet" href="css/datepicker.css">
        <link rel="stylesheet" href="css/tooplate-style.css">

        <link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800,900" rel="stylesheet">

        <script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
    </head>
<!--
Tooplate 2112 Brunch
https://www.tooplate.com/view/2112-brunch
-->
<body class="informatica_b">
 
    <div class="wrap inner-header">
        <header id="header">
            <div class="container-fluid">
                <div class="col-md-12">
                    <button id="primary-nav-button" type="button">Menu</button>
                    <div class="logo">
                        <a href="index.html"><img src="img/foto.jpg" alt="Foto"></a>
                        <span class="nombre">Matias Cea</span>
                    </div>
                    <nav id="primary-nav" class="dropdown cf">
                        <ul class="dropdown menu">
                            <li class='active'><a href="/">Home</a></li>
                            <li><a href="/psicologia">Psicología</a></li>
                            <li><a href="/informatica">Informática</a></li>
                            <li><a href="/about">Sobre Mí</a></li>
                            <li><a href="https://www.linkedin.com/in/m-cea/" target="_blank">LinkedIn</a></li>
                        </ul>
                    </nav><!-- / #primary-nav -->
                </div>
            </div>
        </header>
    </div>


    <div class="informatica">
        <div class="container">
            <div class="col-md-12">
                <h2>PedidosApp</h2>
                <div class="line-dec"></div>
            </div>
        </div>
    </div>

    <div class="left-right-image">
        <div class="container">
            <div class="col-md-8 col-md-offset-2">
                <div class="right-image">
                    <div class="row">
                        <div class="col-md-6">
                            <h2 class="hidden-sm hidden-xs">Resumen</h2>
                            <h2 class="hidden-lg hidden-md">Resumen</h2>
                            <span>Tab Resumen</span>
                            <p>Muestra los pedidos del día seleccionado, permitiendo al clicar los elementos de la lista ver información de cada uno y descargarlo en PDF.</p> <br />
                            <p>Además, cuenta con botones de acceso rápido al total de artículos pedidos, con bajo stock y con mayor reserva del stock disponible.</p>
                            <div class="blue-border-button">
                                <a href="/informatica">Volver</a>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="image">
                                <img src={{ asset("img/pedidosApp.jpg")}} alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="left-image">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="image">
                                <img src={{ asset("img/pedidos.jpg")}} alt="">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <h2 class="hidden-sm hidden-xs">Pedidos</h2>
                            <h2 class="hidden-lg hidden-md">Pedidos</h2>
                            <span>Tab Pedidos</span>
                            <p>CRUD de pedidos.</p> <br/> 
                            <p>Permite ver los pedidos disponibles, agregar, modificarlos, eliminarlos, completarlos y descargarlos.</p>
                            <div class="blue-border-button">
                                <a href="/informatica">Volver</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="left-right-image">
        <div class="container">
            <div class="col-md-8 col-md-offset-2">
                <div class="right-image">
                    <div class="row">
                        <div class="col-md-6">
                            <h2 class="hidden-sm hidden-xs">Artículos</h2>
                            <h2 class="hidden-lg hidden-md">Artículos</h2>
                            <span>Tab Artículos</span>
                            <p>CRUD de artículos.</p> <br/> 
                            <p>Permite ver los artículos disponibles, modificarlos, eliminarlos y agregar.</p>
                            <div class="blue-border-button">
                                <a href="/informatica">Volver</a>
                            </div>                            
                        </div>
                        <div class="col-md-6">
                            <div class="image">
                                <img src={{ asset("img/articulos.jpg")}} alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="left-image">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="image">
                                <img src={{ asset("img/clientes.jpg")}} alt="">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <h2 class="hidden-sm hidden-xs">Clientes</h2>
                            <h2 class="hidden-lg hidden-md">Clientes</h2>
                            <span>Tab Clientes</span>
                            <p>CRUD de clientes.</p> <br/> 
                            <p>Permite ver los clientes disponibles, modificarlos, eliminarlos y agregar.</p>
                            <div class="blue-border-button">
                                <a href="/informatica">Volver</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="left-right-image">
        <div class="container">
            <div class="col-md-8 col-md-offset-2">
                <div class="right-image">
                    <div class="row">
                        <div class="col-md-6">
                            <h2 class="hidden-sm hidden-xs">Pedido descargado</h2>
                            <h2 class="hidden-lg hidden-md">Pedido descargado</h2>
                            <span>Ejemplo de pedido descargado</span>
                            <p>Brinda fecha, cliente y artículos del pedido.</p> <br/>
                            <div class="blue-border-button">
                                <a href="/informatica">Volver</a>
                            </div>                          
                        </div>
                        <div class="col-md-6">
                            <div class="image">
                                <img src={{ asset("img/pdf.jpg")}} alt="">
                            </div>
                        </div>
                    </div>
                </div>
                    </div></div>
                </div></div>    
    <br>

    <div class="sub-footer">
        <div class="container">
            <div class="col-md-12">
                <p>2023 Matias Cea. - liccealaboral@gmail.com - Derivado de Plantilla Brunch (by Tooplate)</p>                
            </div>
        </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.2.min.js"><\/script>')</script>

    <script src="js/vendor/bootstrap.min.js"></script>
    
    <script src="js/datepicker.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/main.js"></script>
</body>
</html>