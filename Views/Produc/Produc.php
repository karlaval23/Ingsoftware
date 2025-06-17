<?=headerCliente();?>
<?=navCliente();?>







<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="estilo.css">
    <script src="app.js" async></script>
</link>
<br>
<!-- ======= Menu Section ======= -->
<section id="menu" class="menu">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>TIENDA VIRTUAL</h2>
          <p>PETSHOP  <span>Malenic</span></p>
        </div>

        <ul class="nav nav-tabs d-flex justify-content-center" data-aos="fade-up" data-aos-delay="200">

          <li class="nav-item">
            <a class="nav-link active show" data-bs-toggle="tab" data-bs-target="#menu-starters">
              <h4>Veterinaria</h4>
            </a>
          </li><!-- End tab nav item -->

          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="tab" data-bs-target="#menu-breakfast">
              <h4>Alimento</h4>
            </a><!-- End tab nav item -->

          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="tab" data-bs-target="#menu-lunch">
              <h4>Petshop</h4>
            </a>
          </li><!-- End tab nav item -->
        </ul>

        <div class="tab-content" data-aos="fade-up" data-aos-delay="300">

          <div class="tab-pane fade active show" id="menu-starters">

            <div class="tab-header text-center">
              <p>Productos</p>
              <h3>Veterinaria</h3>
            </div>

            <div class="row gy-5">

              <div class="col-lg-4 menu-item">
                <a href="<?= mediaCliente();?>Productos_edit" class="glightbox"><img src="<?= mediaCliente();?>img_petshop/lechegato.jpg" class="menu-img img-fluid" alt=""></a>
                <h4>LECHE PARA GATO</h4>
                <p class="ingredients">
                  Presentacion de 120gr
                </p>
                <p class="price">
                  S/15.00
                </p>
              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="<?= mediaCliente();?>img_petshop/lecheperro.jpg" class="glightbox"><img src="<?= mediaCliente();?>img_petshop/lecheperro.jpg" class="menu-img img-fluid" alt=""></a>
                <h4>LECHE PARA PERRO</h4>
                <p class="ingredients">
                Presentacion de 120gr
                </p>
                <p class="price">
                S/20.00
                </p>
              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="<?= mediaCliente();?>img_petshop/biberones.jpg" class="glightbox"><img src="<?= mediaCliente();?>img_petshop/biberones.jpg" class="menu-img img-fluid" alt=""></a>
                <h4>BIBERONES</h4>
                <p class="ingredients">
                  50ml
                </p>
                <p class="price">
                S/5.00
                </p>
              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="<?= mediaCliente();?>img_petshop/curamic.png" class="glightbox"><img src="<?= mediaCliente();?>img_petshop/curamic.png" class="menu-img img-fluid" alt=""></a>
                <h4>CURAMIC PLATA</h4>
                <p class="ingredients">
                  Presentacion de 290gr
                </p>
                <p class="price">
                S/35.00
                </p>
              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="<?= mediaCliente();?>img_petshop/k-nino.png" class="glightbox"><img src="<?= mediaCliente();?>img_petshop/k-nino.png" class="menu-img img-fluid" alt=""></a>
                <h4>K-NINO</h4>
                <p class="ingredients">
                  Presentacion 2 en 1
                </p>
                <p class="price">
                S/40.00
                </p>
              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="<?= mediaCliente();?>img_petshop/fiproler.png" class="glightbox"><img src="<?= mediaCliente();?>img_petshop/fiproler.png" class="menu-img img-fluid" alt=""></a>
                <h4>FIPROLER</h4>
                <p class="ingredients">
                  Pipetas para pulgas
                </p>
                <p class="price">
                S/25.00
                </p>
              </div><!-- Menu Item -->

            </div>
          </div><!-- End Starter Menu Content -->

          <div class="tab-pane fade" id="menu-breakfast">

            <div class="tab-header text-center">
              <p>Productos</p>
              <h3>Alimento</h3>
            </div>

            <div class="row gy-5">

              <div class="col-lg-4 menu-item">
                <a href="<?= mediaCliente();?>img_petshop/Cambo.jpg" class="glightbox"><img src="<?= mediaCliente();?>img_petshop/Cambo.jpg" class="menu-img img-fluid" alt=""></a>
                <h4>CAMBO CACHORRO</h4>
                <p class="ingredients">
                  Presentación de 7KG
                </p>
                <p class="price">
                  S/75.00
                </p>
              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="<?= mediaCliente();?>img_petshop/cambo_lata.jpg" class="glightbox"><img src="<?= mediaCliente();?>img_petshop/cambo_lata.jpg" class="menu-img img-fluid" alt=""></a>
                <h4>CAMBO PATE</h4>
                <p class="ingredients">
                  Presentacion Adulto en Lata
                </p>
                <p class="price">
                  S/10.00
                </p>
              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="<?= mediaCliente();?>img_petshop/LataGato.png" class="glightbox"><img src="<?= mediaCliente();?>img_petshop/LataGato.png" class="menu-img img-fluid" alt=""></a>
                <h4>RICOCAT PATE</h4>
                <p class="ingredients">
                  Presentación en lata
                </p>
                <p class="price">
                  S/ 7.00
                </p>
              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="<?= mediaCliente();?>img_petshop/RicocatGato.png" class="glightbox"><img src="<?= mediaCliente();?>img_petshop/RicocatGato.png" class="menu-img img-fluid" alt=""></a>
                <h4>RICOCAT BOLSA</h4>
                <p class="ingredients">
                  Presentación de 1KG
                </p>
                <p class="price">
                  S/ 12.00                </p>
              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="<?= mediaCliente();?>img_petshop/RicocanLata.png" class="glightbox"><img src="<?= mediaCliente();?>img_petshop/RicocanLata.png" class="menu-img img-fluid" alt=""></a>
                <h4>Ricocan Pate</h4>
                <p class="ingredients">
                  Presentación de 330gr
                </p>
                <p class="price">
                 S/ 9.00
                </p>
              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="<?= mediaCliente();?>img_petshop/RicocanPer.png" class="glightbox"><img src="<?= mediaCliente();?>img_petshop/RicocanPer.png" class="menu-img img-fluid" alt=""></a>
                <h4>Ricocan en Bolsa</h4>
                <p class="ingredients">
                  Presentación de 1KG
                </p>
                <p class="price">
                  S/ 12.00
                </p>
              </div><!-- Menu Item -->

            </div>
          </div><!-- End Breakfast Menu Content -->

          <div class="tab-pane fade" id="menu-lunch">

            <div class="tab-header text-center">
              <p>Productos</p>
              <h3>Petshop</h3>
            </div>

            <div class="row gy-5">

              <div class="col-lg-4 menu-item">
                <a href="<?= mediaCliente();?>img_petshop/b1.png" class="glightbox"><img src="<?= mediaCliente();?>img_petshop/b1.png" class="menu-img img-fluid" alt=""></a>
                <h4>BEBEDERO DE MANO</h4>
                <p class="ingredients">
                  Diversos colores
                </p>
                <p class="price">
                  S/ 10.00
                </p>
              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="<?= mediaCliente();?>img_petshop/b7.png" class="glightbox"><img src="<?= mediaCliente();?>img_petshop/b7.png" class="menu-img img-fluid" alt=""></a>
                <h4>JUGUETE DE MAIZ</h4>
                <p class="ingredients">
                  Presentacion que se pega al suelo
                </p>
                <p class="price">
                  S/14.00
                </p>
              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="<?= mediaCliente();?>img_petshop/b3.png" class="glightbox"><img src="<?= mediaCliente();?>img_petshop/b3.png" class="menu-img img-fluid" alt=""></a>
                <h4>PLATO I DOG</h4>
                <p class="ingredients">
                  Diversos colores
                </p>
                <p class="price">
                  S/7.00
                </p>
              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="<?= mediaCliente();?>img_petshop/b4.png" class="glightbox"><img src="<?= mediaCliente();?>img_petshop/b4.png" class="menu-img img-fluid" alt=""></a>
                <h4>ZAPATILLAS </h4>
                <p class="ingredients">
                  Tallas XS, S Y M
                </p>
                <p class="price">
                  S/ 15.00
                </p>
              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="<?= mediaCliente();?>img_petshop/b5.png" class="glightbox"><img src="<?= mediaCliente();?>img_petshop/b5.png" class="menu-img img-fluid" alt=""></a>
                <h4>BEBEDERO Y COMEDERO </h4>
                <p class="ingredients">
                  Colores verde y rosado
                </p>
                <p class="price">
                  S/30.00
                </p>
              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="<?= mediaCliente();?>img_petshop/b6.png" class="glightbox"><img src="<?= mediaCliente();?>img_petshop/b6.png" class="menu-img img-fluid" alt=""></a>
                <h4>MOCHILA TRASPORTADORA</h4>
                <p class="ingredients">
                  Material Importado 
                </p>
                <p class="price">
                  S/75.00
                </p>
              </div><!-- Menu Item -->

            </div>
          </div><!-- End Lunch Menu Content -->

        

        </div>

      </div>
    </section><!-- End Menu Section -->


    


 <?=footerCliente();?>