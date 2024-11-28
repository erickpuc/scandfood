<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CarWorld</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.0/font/bootstrap-icons.min.css">


        <style>

        body {
            background-color: #f4f4f4;
            font-family: 'Arial', sans-serif;
        }
        

        h2 {
            color: #c9d2db;
            font-weight: bold;
        }

        .card {
            border-radius: 15px;
            box-shadow: 0 6px 15px rgba(0, 0, 0, 0.1);
            transition: transform 0.2s, box-shadow 0.2s;
        }

        .card:hover {
            transform: scale(1.03);
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.15);
        }

        .card img {
            border-top-left-radius: 15px;
            border-top-right-radius: 15px;
            height: 220px;
            object-fit: cover;
        }

        .card-body {
            padding: 1.5rem;
        }

        .card-title {
            font-weight: bold;
            color: #333;
        }

        .card-text {
            color: #555;
        }

        .card-footer {
            background-color: #f8f9fa;
            border-top: none;
            padding-top: 0.75rem;
            padding-bottom: 0.75rem;
        }

        .btn-details {
            background-color: #dce0e4;
            border-color: #f7f7f7;
        }

        .btn-details:hover {
            background-color: #fdfffe;
            border-color: #004085;
        }
     
        .btn-lg {
            background-color: #ffffff;
            border-radius: 50px;
            padding: 0.75rem 2rem;
        }

   

        .product-img {
            height: 220px;
            object-fit: cover;
        }
    </style>
</head>
<body>
    
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top shadow-sm">
        <div class="container">
            <a href="http://127.0.0.1:8000/home" class="navbar-brand">
                <span class="text-primary"></span>scan food
            </a>
    
            <!-- Botón para el menú principal -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-start" aria-controls="navbar-start" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
    
            <!-- Menú de navegación principal -->
            <div class="collapse navbar-collapse" id="navbar-start">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a href="http://127.0.0.1:8000/AgregarProducto" class="nav-link active">Agregar producto</a>
                    </li>
                    <li class="nav-item">
                        <a href="http://127.0.0.1:8000/HistorialCompra" class="nav-link active">Historial de compras</a>
                    </li>
              
                </ul>
    
                <!-- Filtro de búsqueda -->
                <div class="d-flex ms-3">
                    <input class="form-control me-2" type="search" id="filtro" placeholder="Buscar productos..." aria-label="Search" name="query">
                    <button class="btn btn-outline-primary" type="button" onclick="filtrar()">Buscar</button>
                </div>
            </div>
    
            <!-- Botón para las opciones de cuenta (solo visible en pantallas pequeñas) -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-account" aria-controls="navbar-account" aria-expanded="false" aria-label="Toggle navigation">
                <span class="bi bi-person-circle"></span>
            </button>

        </div>
    </nav>
    
    


    <div id="carouselE1" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselE1" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselE1" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselE1" data-bs-slide-to="2" aria-label="Slide 3"></button>
            <button type="button" data-bs-target="#carouselE1" data-bs-slide-to="3" aria-label="Slide 4"></button>
            <button type="button" data-bs-target="#carouselE1" data-bs-slide-to="4" aria-label="Slide 5"></button>
        </div>

        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{ asset('assets/c1.jpg') }}" class="d-block w-100 shadow" alt="...">
                <div class="carousel-caption">
                    <h5>Los mejores motores</h5>
                    <p>CarWorld ofrece una amplia variedad de artículos, desde repuestos y accesorios, hasta herramientas de mantenimiento y productos de personalización.</p>
                    <p><a href="#" class="btn btn-primary mt-3">Leer más</a></p>
                </div>
            </div>

            <div class="carousel-item">
                <img src="{{ asset('assets/c2.jpg') }}" class="d-block w-100 shadow" alt="...">
                <div class="carousel-caption">
                    <h5>Las mejores piezas de autos</h5>
                    <p>Encuentra todo lo necesario para mejorar y personalizar tu vehículo con productos de alta calidad.</p>
                    <p><a href="#" class="btn btn-primary mt-3">Leer más</a></p>
                </div>
            </div>

            <div class="carousel-item">
                <img src="{{ asset('assets/c3.jpg') }}" class="d-block w-100 shadow" alt="...">
                <div class="carousel-caption">
                    <h5>La mejor calidad</h5>
                    <p>Con productos de las mejores marcas, garantizamos la satisfacción de nuestros clientes.</p>
                    <p><a href="#" class="btn btn-primary mt-3">Leer más</a></p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{ asset('assets/car1.jpg') }}" class="d-block w-100 shadow" alt="...">
                <div class="carousel-caption">
                    <h5>La mejor calidad</h5>
                    <p>Con productos de las mejores marcas, garantizamos la satisfacción de nuestros clientes.</p>
                    <p><a href="#" class="btn btn-primary mt-3">Leer más</a></p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{ asset('assets/car2.png') }}" class="d-block w-100 shadow" alt="...">
                <div class="carousel-caption">
                    <h5>La mejor calidad</h5>
                    <p>Con productos de las mejores marcas, garantizamos la satisfacción de nuestros clientes.</p>
                    <p><a href="#" class="btn btn-primary mt-3">Leer más</a></p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{ asset('assets/car3.jpg') }}" class="d-block w-100 shadow" alt="...">
                <div class="carousel-caption">
                    <h5>La mejor calidad</h5>
                    <p>Con productos de las mejores marcas, garantizamos la satisfacción de nuestros clientes.</p>
                    <p><a href="#" class="btn btn-primary mt-3">Leer más</a></p>
                </div>
            </div>


        </div>

        <button class="carousel-control-prev" type="button" data-bs-target="#carouselE1" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Anterior</span>
        </button>

        <button class="carousel-control-next" type="button" data-bs-target="#carouselE1" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Siguiente</span>
        </button>
    </div>

    <section class="product py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-header text-center pb-5">
                        <h2>Productos</h2>
                        <p>ofrecemos productos de alta calidad</p>
                    </div>
                </div>
            </div>

            <div class="row" id="seccion_productos">
               

              

                
            </div>
        </div>
    </section>

     <section class="contact-section py-5 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h3>redes sociales</h3>
                    <ul class="list-unstyled">
                        <li  class="bi bi-facebook"> <strong>facebook:</strong> scan food</li>
                       
                        <i class="bi bi-whatsapp"> <strong>whatsapp</strong> +52 999 234 87</i>
                    </ul>
                    <p>En FoodWorld, nos especializamos en ofrecer una amplia variedad de productos frescos y deliciosos para tus comidas. Si tienes alguna duda o quieres conocer más sobre nuestra oferta, no dudes en contactarnos.</p>
                    <p>También puedes seguirnos en nuestras redes sociales para estar al día con nuestras últimas promociones y novedades.</p>
                </div>
            </div>
        </div>
        
    </section>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script>
        


        fetch('http://127.0.0.1:8000/api/products')
        .then(res=>res.json())
        .then(response=>{
            console.log(response)
            let htmlcard="";
            response.forEach(element => {
                console.log(element.nombre)

                htmlcard+=`
                  <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card bg-light shadow-sm border-0 h-100">
                        <div class="text-center p-3">
                            <img src="${element.imagen}" class="img-fluid" alt="Producto 2">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">${element.nombre}</h5>
                            <p class="card-text">${element.descripcion}</p>
                             <p>$${element.precio}</p>
                            <a href="DetalleProducto/${element.idProducto}" class="btn btn-primary">Comprar</a>
                        
                        </div>
                    </div>
                </div>
                `
            });

            document.getElementById('seccion_productos').innerHTML=htmlcard
        })

 function filtrar(){
   const filtro= document.getElementById('filtro').value

   fetch(`http://127.0.0.1:8000/api/products?filtro=${filtro}`)
        .then(res=>res.json())
        .then(response=>{
            console.log(response)
            let htmlcard="";
            response.forEach(element => {
                console.log(element.nombre)

                htmlcard+=`
                  <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card bg-light shadow-sm border-0 h-100">
                        <div class="text-center p-3">
                            <img src="${element.imagen}" class="img-fluid" alt="Producto 2">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">${element.nombre}</h5>
                            <p class="card-text">${element.descripcion}</p>
                             <p>$${element.precio}</p>
                            <a href="DetalleProducto/${element.idProducto}" class="btn btn-primary">Comprar</a>
                        
                        </div>
                    </div>
                </div>
                `
            });

            document.getElementById('seccion_productos').innerHTML=htmlcard
        })
 }
    </script>
</body>
</html>
