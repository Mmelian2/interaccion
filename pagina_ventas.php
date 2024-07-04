<?php 
include('conexion.php');

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>pagina_ventas</title>
    <link rel="icon" type="image/x-icon" href="./assets/favicon.ico" />
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <!-- SWEET ALERT -->
    <link rel="stylesheet" href="styles.css">
  <!-- Your code -->
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  </head>

  <body>
    <header >
      <img src="imagenes/logo.png" alt="logo" class="logo">
      <nav>
        <ul class="nav_links">
          <li><a href="">Inicio</a></li>
          <li><a href="">Productos</a></li>
          <li>
          <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@fat">Iniciar Sesion</a>
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-body">
                                  <div class="main">  	
                                      <input type="checkbox" id="chk" aria-hidden="true">
                                        <div class="login">
                                            <form class="form">
                                              <label for="chk" aria-hidden="true">Iniciar Sesion</label>
                                              <input class="input" type="usuario" name="usuario" placeholder="Usuario" required="">
                                              <input class="input" type="password" name="clave" placeholder="Clave" required="">
                                              <div class="g-recaptcha" data-sitekey="6LcEEfwpAAAAALC7iJy-UYX5WWY--qmcYNt4bZ38"></div>
                                              <button>Iniciar</button>
                                              <a href="">Olividaste tu contraseña?</a>
                                            </form>
                                        </div>

                                        <div class="Register">
                                          <form class="form">
                                              <label for="chk" aria-hidden="true">Registrarse</label>
                                              <input class="input" type="email" name="txt" placeholder="Email" aria-placeholder="$21" required="">
                                              <input class="input" type="text" name="usuario" placeholder="Usuario" required="">
                                              <input class="input" type="password" name="clave" placeholder="Clave" required="">
                                              <div class="g-recaptcha" data-sitekey="6LcEEfwpAAAAALC7iJy-UYX5WWY--qmcYNt4bZ38"></div>
                                              <button>Registrarse</button>
                                          </form>
                                        </div>
                                  </div>
                                </div>
                            </div>
                        </div>
                    </div>
          </li>
          <li><a href="">Nosotros</a></li>
          <li><div class="buscar">
          <input checked="" class="checkbox" type="checkbox"> 
          <div class="mainbox">
              <div class="iconContainer">
                  <svg viewBox="0 0 512 512" height="1em" xmlns="http://www.w3.org/2000/svg" class="search_icon"><path d="M416 208c0 45.9-14.9 88.3-40 122.7L502.6 457.4c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L330.7 376c-34.4 25.2-76.8 40-122.7 40C93.1 416 0 322.9 0 208S93.1 0 208 0S416 93.1 416 208zM208 352a144 144 0 1 0 0-288 144 144 0 1 0 0 288z"></path></svg>
              </div>
          <input class="search_input" placeholder="Buscar" type="text">
          </div>
        </div></li>
        </ul>
      </nav>
      <a href="" class="cta"><button class="button">Contacto</button></a>
    </header>
    <div class="container">
      <div class="text">SUCU</div>
      <div class="image">
          <span class="overlay-text">MORA</span>
      </div>
    </div>
    <div>
      <div class="carousel-container">
        <div class="seccion">Nuestros articulos más vendidos</div>
        <div class="carousel" id="carousel">
          <div
            class="m-2 group px-10 py-5 bg-white/10 after:border-2 after:border-[#5CA651] after:bg-transparent rounded-lg flex flex-col items-center justify-center gap-2 relative after:absolute after:h-full  z-20 shadow-lg after:-z-20 after:w-full after:inset-0 after:rounded-lg transition-all duration-300 hover:transition-all hover:duration-300 after:transition-all after:duration-500 after:hover:transition-all after:hover:duration-500 overflow-hidden cursor-pointer after:-translate-y-full after:hover:translate-y-0 [&amp;_p]:delay-200 [&amp;_p]:transition-all"
              >
            <svg
                xmlns="http://www.w3.org/2000/svg"
                xmlns:xlink="http://www.w3.org/1999/xlink"
                version="1.1"
                class="w-44 card1img aspect-square text-[#5CA651] group-hover:bg-gray-800 text-5xl rounded-full p-2 transition-all duration-300 group-hover:transition-all group-hover:duration-300 group-hover:-translate-y-2 mx-auto"
                viewBox="0 0 256 256"
                xml:space="preserve"
                >
                <defs></defs>
                  <g
                    style="stroke: none; stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: none; fill-rule: nonzero; opacity: 1;"
                    transform="translate(1.4065934065934016 1.4065934065934016) scale(2.81 2.81)"
                  >
                <path
                  d="M 37.712 41.541 c -2.437 -10.14 2.919 -19.609 8.772 -25.137 c -6.221 11.54 -7.41 20.104 -3.461 33.177 l 2.29 -0.854 c -0.882 -2.464 -1.413 -4.873 -1.685 -7.241 c 8.23 -2.355 13.883 -7.209 15.231 -15.926 C 59.796 13.651 52.042 6.72 43.718 0.117 c 3.04 9.758 -11.581 17.964 -10.296 30.949 c 0.271 2.741 0.697 5.33 1.326 7.825"
                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(127,178,65); fill-rule: nonzero; opacity: 1;"
                    transform="matrix(1 0 0 1 0 0)"
                  stroke-linecap="round"
                ></path>
                <path
                  d="M 34.069 30.999 c 0.917 -12.923 13.599 -21.098 9.649 -30.883 c 1.394 8.216 -9.771 12.38 -12.663 22.195 c -1.575 5.836 -1.151 11.452 3.693 16.579 C 34.119 36.396 33.937 33.751 34.069 30.999 z"
                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(113,156,64); fill-rule: nonzero; opacity: 1;"
                  transform="matrix(1 0 0 1 0 0)"
                  stroke-linecap="round"
                ></path>
                <polygon
                  points="68.77,61.09 70.46,47.61 43.69,47.61 19.54,47.61 21.23,61.09"
                  style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(160,126,99); fill-rule: nonzero; opacity: 1;"
                  transform="matrix(1 0 0 1 0 0)"
                ></polygon>
                <polyline
                  points="63.11,61.09 59.5,90 44.01,90 30.5,90 26.89,61.09"
                  style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(160,126,99); fill-rule: nonzero; opacity: 1;"
                  transform="matrix(1 0 0 1 0 0)"
                ></polyline>
                <polygon
                  points="62.61,65.09 63.11,61.09 26.89,61.09 27.39,65.09"
                  style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(145,107,77); fill-rule: nonzero; opacity: 1;"
                    transform="matrix(1 0 0 1 0 0)"
                ></polygon>
              </g>
              </svg>

                  <p
                    class="cardtxt font-semibold text-black-200 tracking-wider group-hover:text-gray-700 text-xl"
                        >
                        Suculenta 
                  </p>
                  <p class="blueberry font-semibold text-gray-700 text-xs">
                      ideal para interiores &amp; unica en su coleccion
                      </p>
                  <div class="orderno  flex flex-row justify-between items-center w-full">
                    <p
                      class="ordernow-text text-[#5CA651] font-semibold group-hover:text-gray-800"
                      >
                        $2.500
                    </p>
                    <p
                        class="btun4 lg:inline-flex items-center gap-3 group-hover:bg-white/10 bg-[#5CA651] shadow-[10px_10px_150px_#ff9f0d] cursor-pointer py-2 px-4 text-sm font-semibold rounded-full butn"
                      >
                              Comprar
                    </p>
                  </div>
              </div>
          <div
            class="m-2 group px-10 py-5 bg-white/10 after:border-2 after:border-[#5CA651] after:bg-transparent rounded-lg flex flex-col items-center justify-center gap-2 relative after:absolute after:h-full after:bg-[#5CA651] z-20 shadow-lg after:-z-20 after:w-full after:inset-0 after:rounded-lg transition-all duration-300 hover:transition-all hover:duration-300 after:transition-all after:duration-500 after:hover:transition-all after:hover:duration-500 overflow-hidden cursor-pointer after:-translate-y-full after:hover:translate-y-0 [&amp;_p]:delay-200 [&amp;_p]:transition-all"
              >
            <svg
                xmlns="http://www.w3.org/2000/svg"
                xmlns:xlink="http://www.w3.org/1999/xlink"
                version="1.1"
                class="w-44 card1img aspect-square text-[#5CA651] group-hover:bg-gray-800 text-5xl rounded-full p-2 transition-all duration-300 group-hover:transition-all group-hover:duration-300 group-hover:-translate-y-2 mx-auto"
                viewBox="0 0 256 256"
                xml:space="preserve"
                >
                <defs></defs>
                  <g
                    style="stroke: none; stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: none; fill-rule: nonzero; opacity: 1;"
                    transform="translate(1.4065934065934016 1.4065934065934016) scale(2.81 2.81)"
                  >
                <path
                  d="M 37.712 41.541 c -2.437 -10.14 2.919 -19.609 8.772 -25.137 c -6.221 11.54 -7.41 20.104 -3.461 33.177 l 2.29 -0.854 c -0.882 -2.464 -1.413 -4.873 -1.685 -7.241 c 8.23 -2.355 13.883 -7.209 15.231 -15.926 C 59.796 13.651 52.042 6.72 43.718 0.117 c 3.04 9.758 -11.581 17.964 -10.296 30.949 c 0.271 2.741 0.697 5.33 1.326 7.825"
                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(127,178,65); fill-rule: nonzero; opacity: 1;"
                    transform="matrix(1 0 0 1 0 0)"
                  stroke-linecap="round"
                ></path>
                <path
                  d="M 34.069 30.999 c 0.917 -12.923 13.599 -21.098 9.649 -30.883 c 1.394 8.216 -9.771 12.38 -12.663 22.195 c -1.575 5.836 -1.151 11.452 3.693 16.579 C 34.119 36.396 33.937 33.751 34.069 30.999 z"
                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(113,156,64); fill-rule: nonzero; opacity: 1;"
                  transform="matrix(1 0 0 1 0 0)"
                  stroke-linecap="round"
                ></path>
                <polygon
                  points="68.77,61.09 70.46,47.61 43.69,47.61 19.54,47.61 21.23,61.09"
                  style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(160,126,99); fill-rule: nonzero; opacity: 1;"
                  transform="matrix(1 0 0 1 0 0)"
                ></polygon>
                <polyline
                  points="63.11,61.09 59.5,90 44.01,90 30.5,90 26.89,61.09"
                  style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(160,126,99); fill-rule: nonzero; opacity: 1;"
                  transform="matrix(1 0 0 1 0 0)"
                ></polyline>
                <polygon
                  points="62.61,65.09 63.11,61.09 26.89,61.09 27.39,65.09"
                  style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(145,107,77); fill-rule: nonzero; opacity: 1;"
                    transform="matrix(1 0 0 1 0 0)"
                ></polygon>
              </g>
              </svg>

                  <p
                    class="cardtxt font-semibold text-black-200 tracking-wider group-hover:text-gray-700 text-xl"
                        >
                        Suculenta
                  </p>
                  <p class="blueberry font-semibold text-gray-700 text-xs">
                      ideal para interiores &amp; Unica en su clase.
                      </p>
                  <div class="orderno  flex flex-row justify-between items-center w-full">
                    <p
                      class="ordernow-text text-[#5CA651] font-semibold group-hover:text-gray-800"
                      >
                        $2.500
                    </p>
                    <p
                        class="btun4 lg:inline-flex items-center gap-3 group-hover:bg-white/10 bg-[#5CA651] shadow-[10px_10px_150px_#ff9f0d] cursor-pointer py-2 px-4 text-sm font-semibold rounded-full butn"
                      >
                              Comprar
                    </p>
                  </div>
              </div>
          <div
            class="m-2 group px-10 py-5 bg-white/10 after:border-2 after:border-[#5CA651] after:bg-transparent rounded-lg flex flex-col items-center justify-center gap-2 relative after:absolute after:h-full after:bg-[#5CA651] z-20 shadow-lg after:-z-20 after:w-full after:inset-0 after:rounded-lg transition-all duration-300 hover:transition-all hover:duration-300 after:transition-all after:duration-500 after:hover:transition-all after:hover:duration-500 overflow-hidden cursor-pointer after:-translate-y-full after:hover:translate-y-0 [&amp;_p]:delay-200 [&amp;_p]:transition-all"
              >
            <svg
                xmlns="http://www.w3.org/2000/svg"
                xmlns:xlink="http://www.w3.org/1999/xlink"
                version="1.1"
                class="w-44 card1img aspect-square text-[#5CA651] group-hover:bg-gray-800 text-5xl rounded-full p-2 transition-all duration-300 group-hover:transition-all group-hover:duration-300 group-hover:-translate-y-2 mx-auto"
                viewBox="0 0 256 256"
                xml:space="preserve"
                >
                <defs></defs>
                  <g
                    style="stroke: none; stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: none; fill-rule: nonzero; opacity: 1;"
                    transform="translate(1.4065934065934016 1.4065934065934016) scale(2.81 2.81)"
                  >
                <path
                  d="M 37.712 41.541 c -2.437 -10.14 2.919 -19.609 8.772 -25.137 c -6.221 11.54 -7.41 20.104 -3.461 33.177 l 2.29 -0.854 c -0.882 -2.464 -1.413 -4.873 -1.685 -7.241 c 8.23 -2.355 13.883 -7.209 15.231 -15.926 C 59.796 13.651 52.042 6.72 43.718 0.117 c 3.04 9.758 -11.581 17.964 -10.296 30.949 c 0.271 2.741 0.697 5.33 1.326 7.825"
                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(127,178,65); fill-rule: nonzero; opacity: 1;"
                    transform="matrix(1 0 0 1 0 0)"
                  stroke-linecap="round"
                ></path>
                <path
                  d="M 34.069 30.999 c 0.917 -12.923 13.599 -21.098 9.649 -30.883 c 1.394 8.216 -9.771 12.38 -12.663 22.195 c -1.575 5.836 -1.151 11.452 3.693 16.579 C 34.119 36.396 33.937 33.751 34.069 30.999 z"
                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(113,156,64); fill-rule: nonzero; opacity: 1;"
                  transform="matrix(1 0 0 1 0 0)"
                  stroke-linecap="round"
                ></path>
                <polygon
                  points="68.77,61.09 70.46,47.61 43.69,47.61 19.54,47.61 21.23,61.09"
                  style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(160,126,99); fill-rule: nonzero; opacity: 1;"
                  transform="matrix(1 0 0 1 0 0)"
                ></polygon>
                <polyline
                  points="63.11,61.09 59.5,90 44.01,90 30.5,90 26.89,61.09"
                  style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(160,126,99); fill-rule: nonzero; opacity: 1;"
                  transform="matrix(1 0 0 1 0 0)"
                ></polyline>
                <polygon
                  points="62.61,65.09 63.11,61.09 26.89,61.09 27.39,65.09"
                  style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(145,107,77); fill-rule: nonzero; opacity: 1;"
                    transform="matrix(1 0 0 1 0 0)"
                ></polygon>
              </g>
              </svg>

                  <p
                    class="cardtxt font-semibold text-black-200 tracking-wider group-hover:text-gray-700 text-xl"
                        >
                        Suculenta
                  </p>
                  <p class="blueberry font-semibold text-gray-700 text-xs">
                      ideal para interiores &amp; Unica en su clase.
                      </p>
                  <div class="orderno  flex flex-row justify-between items-center w-full">
                    <p
                      class="ordernow-text text-[#5CA651] font-semibold group-hover:text-gray-800"
                      >
                        $2.500
                    </p>
                    <p
                        class="btun4 lg:inline-flex items-center gap-3 group-hover:bg-white/10 bg-[#5CA651] shadow-[10px_10px_150px_#ff9f0d] cursor-pointer py-2 px-4 text-sm font-semibold rounded-full butn"
                      >
                              Comprar
                    </p>
                  </div>
              </div>

          <div
          class="m-2 group px-10 py-5 bg-white/10 after:border-2 after:border-[#5CA651] after:bg-transparent rounded-lg flex flex-col items-center justify-center gap-2 relative after:absolute after:h-full after:bg-[#5CA651] z-20 shadow-lg after:-z-20 after:w-full after:inset-0 after:rounded-lg transition-all duration-300 hover:transition-all hover:duration-300 after:transition-all after:duration-500 after:hover:transition-all after:hover:duration-500 overflow-hidden cursor-pointer after:-translate-y-full after:hover:translate-y-0 [&amp;_p]:delay-200 [&amp;_p]:transition-all"
          >
          <svg
            xmlns="http://www.w3.org/2000/svg"
            xmlns:xlink="http://www.w3.org/1999/xlink"
            version="1.1"
            class="w-44 card1img aspect-square text-[#5CA651] group-hover:bg-gray-800 text-5xl rounded-full p-2 transition-all duration-300 group-hover:transition-all group-hover:duration-300 group-hover:-translate-y-2 mx-auto"
            viewBox="0 0 256 256"
            xml:space="preserve"
            >
            <defs></defs>
            <g
              style="stroke: none; stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: none; fill-rule: nonzero; opacity: 1;"
              transform="translate(1.4065934065934016 1.4065934065934016) scale(2.81 2.81)"
            >
              <path
                d="M 37.712 41.541 c -2.437 -10.14 2.919 -19.609 8.772 -25.137 c -6.221 11.54 -7.41 20.104 -3.461 33.177 l 2.29 -0.854 c -0.882 -2.464 -1.413 -4.873 -1.685 -7.241 c 8.23 -2.355 13.883 -7.209 15.231 -15.926 C 59.796 13.651 52.042 6.72 43.718 0.117 c 3.04 9.758 -11.581 17.964 -10.296 30.949 c 0.271 2.741 0.697 5.33 1.326 7.825"
                style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(127,178,65); fill-rule: nonzero; opacity: 1;"
                transform="matrix(1 0 0 1 0 0)"
                stroke-linecap="round"
              ></path>
              <path
                d="M 34.069 30.999 c 0.917 -12.923 13.599 -21.098 9.649 -30.883 c 1.394 8.216 -9.771 12.38 -12.663 22.195 c -1.575 5.836 -1.151 11.452 3.693 16.579 C 34.119 36.396 33.937 33.751 34.069 30.999 z"
                style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(113,156,64); fill-rule: nonzero; opacity: 1;"
                transform="matrix(1 0 0 1 0 0)"
                stroke-linecap="round"
              ></path>
              <polygon
                points="68.77,61.09 70.46,47.61 43.69,47.61 19.54,47.61 21.23,61.09"
                style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(160,126,99); fill-rule: nonzero; opacity: 1;"
                transform="matrix(1 0 0 1 0 0)"
              ></polygon>
              <polyline
                points="63.11,61.09 59.5,90 44.01,90 30.5,90 26.89,61.09"
                style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(160,126,99); fill-rule: nonzero; opacity: 1;"
                transform="matrix(1 0 0 1 0 0)"
              ></polyline>
              <polygon
                points="62.61,65.09 63.11,61.09 26.89,61.09 27.39,65.09"
                style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(145,107,77); fill-rule: nonzero; opacity: 1;"
                transform="matrix(1 0 0 1 0 0)"
              ></polygon>
            </g>
            </svg>
        
            <p
              class="cardtxt font-semibold text-black-200 tracking-wider group-hover:text-gray-700 text-xl"
            >
              Suculenta
            </p>
            <p class="blueberry font-semibold text-gray-700 text-xs">
              ideal para interiores &amp; Unica en su clase.
            </p>
            <div class="ordernow flex flex-row justify-between items-center w-full">
              <p
                class="ordernow-text text-[#5CA651] font-semibold group-hover:text-gray-800"
              >
                $2.500
              </p>
              <p
                class="btun4 lg:inline-flex items-center gap-3 group-hover:bg-white/10 bg-[#5CA651] shadow-[10px_10px_150px_#ff9f0d] cursor-pointer py-2 px-4 text-sm font-semibold rounded-full butn"
              >
                Comprar
              </p>
            </div>
          </div>        
        </div>
        <div>
        </div>        
    </div>
    <div class="seccion">Ofertas imperdibles</div>
    <div class="container3">
      <div class="container4">
        <div class="group origin-bottom-right  hover:-skew-x-12 skew-x-0 ">
          <div class="duration-500 group-hover:duration-400 relative rounded-2xl w-64 h-36 bg-[#5CA651] text-gray-50 flex flex-col justify-center items-center gap-1 before:-skew-x-12  before:rounded-2xl  before:absolute before:content['']  before:bg-[#3B773B] before:right-3 before:top-0 before:w-64 before:h-32 before:-z-10 group-hover:before:-right-3 group-hover:before:skew-x-12 before:duration-500 group-hover:duration-500">
                <span class="text-5xl font-bold">50%</span>
                <p class="text-amber-300 font-thin">- Descuento -</p>
          </div>
        </div>
        <div class="container2 scroll-1">
          <div class="card02">
            <div class="card__image"><img src="imagenes/jade.png" alt=""></div>
              <div class="card__content">
                      <span class="card__title">Árbol de jade </span>
                      <p class="card__describe">
                          Ideal para járdines.
                      </p>
                      <p>$2.500,00</p>
                      <button type="button" class="comprar">
                        <span class="button__text">Comprar</span>
                        <span class="button__icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" viewBox="0 0 24 24" stroke-width="2" stroke-linejoin="round" stroke-linecap="round" stroke="currentColor" height="24" fill="none" class="svg"><line y2="19" y1="5" x2="12" x1="12"></line><line y2="12" y1="12" x2="19" x1="5"></line></svg></span>
                      </button>
              </div>
          </div>
          <div class="card02">
            <div class="card__image"><img src="imagenes/jade.png" alt=""></div>
            <div class="card__content">
                      <span class="card__title">Árbol de jade</span>
                      <p class="card__describe">
                          Ideal para járdines.
                      </p>
                      <p>$2.500,00</p>
                      <button type="button" class="comprar">
                        <span class="button__text">Comprar</span>
                        <span class="button__icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" viewBox="0 0 24 24" stroke-width="2" stroke-linejoin="round" stroke-linecap="round" stroke="currentColor" height="24" fill="none" class="svg"><line y2="19" y1="5" x2="12" x1="12"></line><line y2="12" y1="12" x2="19" x1="5"></line></svg></span>
                      </button>
            </div>
          </div>
            <div class="card02">
              <div class="card__image"><img src="imagenes/jade.png" alt=""></div>
              <div class="card__content">
                      <span class="card__title">Árbol de jade</span>
                      <p class="card__describe">
                          Ideal para járdines.
                      </p>
                      <p>$2.500,00</p>
                      <button type="button" class="comprar">
                        <span class="button__text">Comprar</span>
                        <span class="button__icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" viewBox="0 0 24 24" stroke-width="2" stroke-linejoin="round" stroke-linecap="round" stroke="currentColor" height="24" fill="none" class="svg"><line y2="19" y1="5" x2="12" x1="12"></line><line y2="12" y1="12" x2="19" x1="5"></line></svg></span>
                      </button>
              </div>
            </div>
        </div>
      </div>
      <div class="container4">
        <div class="group origin-bottom-right  hover:-skew-x-12 skew-x-0 ">
          <div class="duration-500 group-hover:duration-400 relative rounded-2xl w-64 h-36 bg-[#5CA651] text-gray-50 flex flex-col justify-center items-center gap-1 before:-skew-x-12  before:rounded-2xl  before:absolute before:content['']  before:bg-[#3B773B] before:right-3 before:top-0 before:w-64 before:h-32 before:-z-10 group-hover:before:-right-3 group-hover:before:skew-x-12 before:duration-500 group-hover:duration-500">
                <span class="text-5xl font-bold">30%</span>
                <p class="text-amber-300 font-thin">- Descuento -</p>
          </div>
        </div>
        <div class="container2 scroll-1">
          <div class="card02">
            <div class="card__image"><img src="imagenes/jade.png" alt=""></div>
            <div class="card__content">
                      <span class="card__title">Árbol de jade</span>
                      <p class="card__describe">
                          Ideal para járdines.
                      </p>
                      <p>$2.500,00</p>
                      <button type="button" class="comprar">
                        <span class="button__text">Comprar</span>
                        <span class="button__icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" viewBox="0 0 24 24" stroke-width="2" stroke-linejoin="round" stroke-linecap="round" stroke="currentColor" height="24" fill="none" class="svg"><line y2="19" y1="5" x2="12" x1="12"></line><line y2="12" y1="12" x2="19" x1="5"></line></svg></span>
                      </button>
            </div>
          </div>
          <div class="card02">
            <div class="card__image"><img src="imagenes/jade.png" alt=""></div>
            <div class="card__content">
                      <span class="card__title">Árbol de jade</span>
                      <p class="card__describe">
                          Ideal para járdines.
                      </p>
                      <p>$2.500,00</p>
                      <button type="button" class="comprar">
                        <span class="button__text">Comprar</span>
                        <span class="button__icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" viewBox="0 0 24 24" stroke-width="2" stroke-linejoin="round" stroke-linecap="round" stroke="currentColor" height="24" fill="none" class="svg"><line y2="19" y1="5" x2="12" x1="12"></line><line y2="12" y1="12" x2="19" x1="5"></line></svg></span>
                      </button>
            </div>
          </div>
          <div class="card02">
            <div class="card__image"><img src="imagenes/jade.png" alt=""></div>
            <div class="card__content">
                      <span class="card__title">Árbol de jade</span>
                      <p class="card__describe">
                          Ideal para járdines.
                      </p>
                      <p>$2.500,00</p>
                      <button type="button" class="comprar">
                        <span class="button__text">Comprar</span>
                        <span class="button__icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" viewBox="0 0 24 24" stroke-width="2" stroke-linejoin="round" stroke-linecap="round" stroke="currentColor" height="24" fill="none" class="svg"><line y2="19" y1="5" x2="12" x1="12"></line><line y2="12" y1="12" x2="19" x1="5"></line></svg></span>
                      </button>
            </div>
          </div>
        </div>
      </div>
      <div class="container4">
        <div class="group origin-bottom-right  hover:-skew-x-12 skew-x-0 ">
          <div class="duration-500 group-hover:duration-400 relative rounded-2xl w-64 h-36 bg-[#5CA651] text-gray-50 flex flex-col justify-center items-center gap-1 before:-skew-x-12  before:rounded-2xl  before:absolute before:content['']  before:bg-[#3B773B] before:right-3 before:top-0 before:w-64 before:h-32 before:-z-10 group-hover:before:-right-3 group-hover:before:skew-x-12 before:duration-500 group-hover:duration-500">
                <span class="text-5xl font-bold">20%</span>
                <p class="text-amber-300 font-thin">- Descuento -</p>
          </div>
        </div>
        <div class="container2 scroll-1">
          <div class="card02">
            <div class="card__image"><img src="imagenes/jade.png" alt=""></div>
            <div class="card__content">
                      <span class="card__title">Árbol de jade</span>
                      <p class="card__describe">
                          Ideal para járdines.
                      </p>
                      <p>$2.500,00</p>
                      <button type="button" class="comprar">
                        <span class="button__text">Comprar</span>
                        <span class="button__icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" viewBox="0 0 24 24" stroke-width="2" stroke-linejoin="round" stroke-linecap="round" stroke="currentColor" height="24" fill="none" class="svg"><line y2="19" y1="5" x2="12" x1="12"></line><line y2="12" y1="12" x2="19" x1="5"></line></svg></span>
                      </button>
            </div>
          </div>
          <div class="card02">
            <div class="card__image"><img src="imagenes/jade.png" alt=""></div>
            <div class="card__content">
                      <span class="card__title">Árbol de jade</span>
                      <p class="card__describe">
                          Ideal para járdines.
                      </p>
                      <p>$2.500,00</p>
                      <button type="button" class="comprar">
                        <span class="button__text">Comprar</span>
                        <span class="button__icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" viewBox="0 0 24 24" stroke-width="2" stroke-linejoin="round" stroke-linecap="round" stroke="currentColor" height="24" fill="none" class="svg"><line y2="19" y1="5" x2="12" x1="12"></line><line y2="12" y1="12" x2="19" x1="5"></line></svg></span>
                      </button>
            </div>
          </div>
          <div class="card02">
            <div class="card__image"><img src="imagenes/jade.png" alt=""></div>
              <div class="card__content">
                      <span class="card__title">Árbol de jade</span>
                      <p class="card__describe">
                          Ideal para járdines.
                      </p>
                      <p>$2.500,00</p>
                      <button type="button" class="comprar">
                        <span class="button__text">Comprar</span>
                        <span class="button__icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" viewBox="0 0 24 24" stroke-width="2" stroke-linejoin="round" stroke-linecap="round" stroke="currentColor" height="24" fill="none" class="svg"><line y2="19" y1="5" x2="12" x1="12"></line><line y2="12" y1="12" x2="19" x1="5"></line></svg></span>
                      </button>
              </div>
          </div>
        </div>
      </div>
    </div>
      

  
    <footer class="footer">
        <div class="container-footer">
            <div class="footer-section">
                <h3 class="footer-title">Acerca de Nosotros</h3>
                <p class="footer-description">Somos una empresa dedicada a ofrecer los mejores servicios.</p>
            </div>
            <div class="footer-section">
                <h3 class="footer-title">Enlaces Rápidos</h3>
                <ul class="footer-links">
                    <li><a href="#">Inicio</a></li>
                    <li><a href="#">Servicios</a></li>
                    <li><a href="#">Contacto</a></li>
                </ul>
            </div>
            <div class="footer-section">
                <h3 class="footer-title">Síguenos</h3>
                <div class="social-links">
                <div class="social">
  <a class="socialContainer containerOne" href="#">
    <svg viewBox="0 0 16 16" class="socialSvg instagramSvg">
      <path
        d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"
      ></path>
    </svg>
  </a>

  <a class="socialContainer containerTwo" href="#">
    <svg viewBox="0 0 16 16" class="socialSvg twitterSvg">
      <path
        d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z"
      ></path>
    </svg>
  </a>

  <a class="socialContainer containerThree" href="#">
    <svg viewBox="0 0 448 512" class="socialSvg linkdinSvg">
      <path
        d="M100.28 448H7.4V148.9h92.88zM53.79 108.1C24.09 108.1 0 83.5 0 53.8a53.79 53.79 0 0 1 107.58 0c0 29.7-24.1 54.3-53.79 54.3zM447.9 448h-92.68V302.4c0-34.7-.7-79.2-48.29-79.2-48.29 0-55.69 37.7-55.69 76.7V448h-92.78V148.9h89.08v40.8h1.3c12.4-23.5 42.69-48.3 87.88-48.3 94 0 111.28 61.9 111.28 142.3V448z"
      ></path>
    </svg>
  </a>

  <a class="socialContainer containerFour" href="#">
    <svg viewBox="0 0 16 16" class="socialSvg whatsappSvg">
      <path
        d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z"
      ></path>
    </svg>
  </a>
</div>

                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <p>&copy; 2024 SucuMora. Todos los derechos reservados.</p>
        </div>
    </footer>
    <script src="script.js"></script>
  </body>
</html>