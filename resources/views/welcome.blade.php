<x-app-layout>
    <link rel="stylesheet" href="{{asset('css/slider.css')}}">

           <!--Hecho por Feder  w-full md:w-3/4 lg:w-1/2-->
          
           <div class="contenedor">
              <div class="slider" id="slider">
            
                  <div class="seccion-slider"><img src="{{asset('img/imgSlider/imagen1.jpg')}}" alt="" class="slider--imagenes">
                      <div class="contenido">
                         <!--   <h2 class="titulo">El mejor calzado para hombres</h2>
                          <p class="texto-slider">Y las mejores marcas</p>
                          <a href="" class="boton-contenido">SHOP NOW</a>-->
                      </div>
                  </div>
                  <div class="seccion-slider"><img src="{{asset('img/imgSlider/imagen2.jpg')}}" alt="" class="slider--imagenes">
                      <div class="contenido">
                           <!--   <h2 class="titulo">El mejor calzado para hombres</h2>
                          <p class="texto-slider">Y las mejores marcas</p>
                          <a href="" class="boton-contenido">SHOP NOW</a>-->
                      </div>
                  </div>
                  <div class="seccion-slider"><img src="{{asset('img/imgSlider/imagen3.jpg')}}" alt="" class="slider--imagenes">
                      <div class="contenido">
                           <!--   <h2 class="titulo">El mejor calzado para hombres</h2>
                          <p class="texto-slider">Y las mejores marcas</p>
                          <a href="" class="boton-contenido">SHOP NOW</a>-->
                      </div>
                  </div>
                  <div class="seccion-slider"><img src="https://images.pexels.com/photos/838413/pexels-photo-838413.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" alt="" class="slider--imagenes">
                      <div class="contenido">
                          <!--   <h2 class="titulo">El mejor calzado para hombres</h2>
                          <p class="texto-slider">Y las mejores marcas</p>
                          <a href="" class="boton-contenido">SHOP NOW</a>-->
                      </div>
                  </div>  
                 
              </div>
              <div class="boton-slider boton-right" id="boton-right">&#62</div>
              <div class="boton-slider boton-left" id="boton-left">&#60</div>
            </div>
              </section>
            
             
            <!--------------------------------------------------------------------------------------->
            <script src="{{ asset('js/slider.js')}}"></script>
</x-app-layout>
