<?php
session_start();

?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CUATRO PATA</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
    <link rel="stylesheet"  href="style/style.css">
</head>

<body>

    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <header class="header">
    <div class="logo">
        <img src="imagenes\logo_cuatro_pata-removebg-preview.png" alt="logo">
        
    </div>
    <div>
        <?php
       echo $_SESSION["usuario"];
        ?>
    </div>
 
    <nav>
        <ul class="nav-links">
            <li ><a href="#">HOMBRE</li>
                <li ><a href="#">MUJER</li>
                    <li ><a href="#">NIÑO</li>
                    
        </ul>
   </nav>
   <a href="index.php" class="btn"><button type="button" img src="imagenes\agregar-contacto (2).png"     width=30px
    height=30px>
iniciar sesion
   </button></a>
   <a href="registro.php" class="btn"><button type="button" img src="lupa (2).png">registrarse</button></a>
    </header>
    <div class="encabezado-img" >
       
        <h1>ZAPATERIA FOUR PATA'S</h1>
        <p>dejando huella</p>
    </div>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>

   <div class="titulo"> <h1><center>CATALOGO
    
    
    
     PRINCIPAL</center> </h1> </div>

    <div class="swiper mySwiper">
        <div class="swiper-wrapper">

            <!--slider 1-->
            <div class="swiper-slide">
                <div class="icons">
                    <i class="fa-solid fa-circle-arrow-left"></i>
                    <img src="imagenes/lupa (2).png">
                    <i class="fa-regular fa-hear"></i>
                </div>
                <div class="product-content">
                    <div class="product-txt">
                        <span>$1600</span>
                        <h3>botas converse </h3>
                        <p>
                            el mejor par para lucir a la moda al estilo de veracruz en el municipio de jualotepec
                            al pisar con este calzado te sentiras como en la playa por su granescencia de la costa
                        </p>
                    </div>
                    <div class="product-img"> <img src="imagenes/tenis-converse-bota-larga-negros-originales-D_NQ_NP_633400-MLM26732940791_012018-F-removebg-preview.png">
                    </div>
                </div>
                 <a href="#" class="brn-1">COMPRAR </a>
                </div>

                <!--slider 2 -->
                <div class="swiper-slide">
                    <div class="icons">
                        <i class="fa-solid fa-circle-arrow-left"></i>
                        <img src="imagenes/lupa (2).png">
                        <i class="fa-regular fa-hear"></i>
                    </div>
                    <div class="product-content">
                        <div class="product-txt">
                            <span>$1800</span>
                            <h3>Zapatos de pescado ft.chuy </h3>
                            <p>
                                el mejor par para lucir a la moda al estilo de veracruz en el municipio de jualotepec
                               al pisar con este calzado te sentiras como en la playa por su granescencia de la costa
                              
                            </p>
                        </div>
                        <div class="product-img"> <img src="imagenes/pescado-removebg-preview.png"">
                        </div>
                    </div>
                     <a href="#" class="brn-1">COMPRAR </a>
                    </div>

                    <!--slider 3-->
                    <div class="swiper-slide">
                        <div class="icons">
                            <i class="fa-solid fa-circle-arrow-left"></i>
                            <img src="imagenes/lupa (2).png">
                            <i class="fa-regular fa-hear"></i>
                        </div>
                        <div class="product-content">
                            <div class="product-txt">
                                <span>$2000</span>
                                <h3>Nike Dunk negros</h3>
                                <p>
                                   Tenis color negro con bota para una mayor estabilidad en el tobillo, perfectos para dunkearla al mismisimo estilo
                                   de daniflow, con estos papos te sentiras con una comodidad indescriptible 
                                     
                                </p>
                            </div>
                            <div class="product-img"> <img src="imagenes/kike-removebg-preview.png">
                            </div>
                        </div>
                         <a href="#" class="brn-1">COMPRAR </a>
                        </div>

                         <!--slider 4-->
            <div class="swiper-slide">
                <div class="icons">
                    <i class="fa-solid fa-circle-arrow-left"></i>
                    <img src="imagenes/lupa (2).png">
                    <i class="fa-regular fa-hear"></i>
                </div>
                <div class="product-content">
                    <div class="product-txt">
                        <span>$800</span>
                        <h3>Panam del metro cdmx </h3>
                        <p>
                          panam del metro de la cuidad de mexico para calzar al lucir las lienas del metro y no te pierdas 
                          panam del metro de la cuidad de mexico para calzar al lucir las lienas del metro y no te pierda
                          
                              
                        </p>
                    </div>
                    <div class="product-img"> <img src="imagenes/panam_metro-removebg-preview.png">
                    </div>
                </div>
                 <a href="#" class="brn-1">COMPRAR </a>
                </div>

                <!--slider 5 -->
                <div class="swiper-slide">
                    <div class="icons">
                        <i class="fa-solid fa-circle-arrow-left"></i>
                        <img src="imagenes/lupa (2).png">
                        <i class="fa-regular fa-hear"></i>
                    </div>
                    <div class="product-content">
                        <div class="product-txt">
                            <span>$1600</span>
                            <h3>botas l</h3>
                            <p>
                                Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                                 Eum cum quia soluta magnam perferendis,
                                  
                            </p>
                        </div>
                        <div class="product-img"> <img src="imagenes/platformboots_110322_paristexas.jpg"">
                        </div>
                    </div>
                     <a href="#" class="brn-1">COMPRAR </a>
                    </div>

                    <!--slider 6-->
                    <div class="swiper-slide">
                        <div class="icons">
                            <i class="fa-solid fa-circle-arrow-left"></i>
                            <img src="imagenes/lupa (2).png">
                            <i class="fa-regular fa-hear"></i>
                        </div>
                        <div class="product-content">
                            <div class="product-txt">
                                <span>$1600</span>
                                <h3>botas</h3>
                                <p>
                                    Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                                     Eum cum quia soluta magnam perferendis,
                                  
                                </p>
                            </div>
                            <div class="product-img"> <img src="imagenes/pescado-removebg-preview.png">
                            </div>
                        </div>
                         <a href="#" class="brn-1">COMPRAR </a>
                        </div>
        
                   <!--slider 7-->
            <div class="swiper-slide">
                <div class="icons">
                    <i class="fa-solid fa-circle-arrow-left"></i>
                    <img src="imagenes/lupa (2).png">
                    <i class="fa-regular fa-hear"></i>
                </div>
                <div class="product-content">
                    <div class="product-txt">
                        <span>$1600</span>
                        <h3>botasl</h3>
                        <p>
                            Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                             Eum cum quia soluta magnam perferendis,
                              
                        </p>
                    </div>
                    <div class="product-img"> <img src="imagenes/717t5KN0L4L._UF1000,1000_QL80_.jpg">
                    </div>
                </div>
                 <a href="#" class="brn-1">COMPRAR </a>
                </div>

                <!--slider 8 -->
                <div class="swiper-slide">
                    <div class="icons">
                        <i class="fa-solid fa-circle-arrow-left"></i>
                        <img src="imagenes/lupa (2).png">
                        <i class="fa-regular fa-hear"></i>
                    </div>
                    <div class="product-content">
                        <div class="product-txt">
                            <span>$1600</span>
                            <h3>botas goticas cadenas de metal</h3>
                            <p>
                                Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                                 Eum cum quia soluta magnam perferendis,
                                  ipsam maiores numquam totam voluptatem obcaecati,
                                  et autem! Debitis libero velit accusamus assumenda labore cumque dolor.
                            </p>
                        </div>
                        <div class="product-img"> <img src="imagenes/platformboots_110322_paristexas.jpg"">
                        </div>
                    </div>
                     <a href="#" class="brn-1">COMPRAR </a>
                    </div>

                    <!--slider 9-->
                    <div class="swiper-slide">
                        <div class="icons">
                            <i class="fa-solid fa-circle-arrow-left"></i>
                            <img src="imagenes/lupa (2).png">
                            <i class="fa-regular fa-hear"></i>
                         </div>
                         <div class="product-content">
                            <div class="product-txt">
                                <span>$1600</span>
                                <h3>botas goticas cadenas de metal</h3>
                                <p>
                                    Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                                     Eum cum quia soluta magnam perferendis,
                                     
                                </p>
                            </div>
                            <div class="product-img"> <img src="imagenes/41JJcMKOO2L._AC_.jpg">
                            </div>
                         </div>
                         <a href="#" class="brn-1">COMPRAR </a>
                        </div>

        </div>
     </div>
     


      <!--pie de pagina-->
     <footer class="pie-pagina">
        <div class="grupo1">
            <div class="box">
                <figure>
                    <a href="#">
                        <img src="Img/logo-black.jpeg" alt="ZAPATERIA CUATRO PATA">
                    </a>
                </figure>
            </div>
            <div class="box">
                <h2>
                    SOBRE NOSOTROS:
                </h2>
                <p>
                    En Zapateria four pata, ofrecemos calzado de calidad y estilo, con un compromiso inquebrantable con 
                    nuestros clientes.
                </p>
            </div>
            <div class="box">
                <h2>
                    SIGUENOS EN:
                </h2>
                <div class="red-social">
                    <a href="https://www.facebook.com/profile.php?id=61557542833391&mibextid=ZbWKwL">
                        <i class="fa-brands fa-facebook"></i>
                    </a>
                    <a href="https://www.instagram.com/cuatropataa?igsh=YmFlNmMwajB3Y2lm">
                        <i class="fa-brands fa-instagram"></i>
                    </a>
                    <a href="https://www.tiktok.com/@cuatro_pataa?_t=8lX4PSlV9wT&_r=1">
                        <i class="fa-brands fa-tiktok"></i>
                    </a>
                    <a href="https://whatsapp.com/channel/0029VaawN8r4SpkH4akgjG1C">
                        <i class="fa-brands fa-whatsapp"></i>
                    </a>
                </div>
            </div>
        </div>
        <div class="grupo-2">
            <small>&copy; 2024 <b>Zapateria FP</b> Todos los derechos reservados</small>
        </div>
    </footer>


    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
     <script>
        var swiper = new Swiper (".mySwiper", {
            effect: "coverflow",
            grabCursor: true,
            centeredSlides: true,
            slidesPerView: "auto",
            loop: true,
            coverflowEffect: {
                depth:500,
                modifer:1,
                slidesShadows:true,
                rotate:0,
                stretch:0
            }
        })
     </script>
</body>
</html>
