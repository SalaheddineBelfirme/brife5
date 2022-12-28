<!-- slider section -->
<?php
require_once './Controller/prodactController.php';
 ?>
<section class=" slider_section position-relative">
        <div class="design-box">
          <img src="./public/images/design-1.png" alt="">
        </div>
        <div class="container">
          <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <div class="row">
                  <div class="col-md-6">
                    <div class="detail_box">
                      <h2>
                        <span> Special Prices</span>
                        <hr>
                      </h2>
                      <h1>
                        Necklaces
                      </h1>
                      <p>
                        Lorem ipsum dolor sit amet consec tetur adipiscing elit elit at felislacinia
                        aptent taciti sociosqu ad litora torquent per conubia nostra
                      </p>
                      <div>
                        <a href="">Buy Now</a>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="img-box">
                      <img src="./public/images/511178NHGAA00_1-removebg-preview.png" alt="">
                    </div>
                  </div>
                </div>
              </div>
              <div class="carousel-item ">
                <div class="row">
                  <div class="col-md-6">
                    <div class="detail_box">
                      <h2>
                        <span> Trending</span>
                        <hr>
                      </h2>
                      <h1>
                        Golden Ring
                      </h1>
                      <p>
                        Lorem ipsum dolor sit amet consec tetur adipiscing elit elit at felislacinia
                        aptent taciti sociosqu ad litora torquent per conubia nostra
                      </p>
                      <div>
                        <a href="">Shop Now</a>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="img-box">
                      <img src="./public/images/slider-img.png" alt="">
                    </div>
                  </div>
                </div>
              </div>
              <div class="carousel-item ">
                <div class="row">
                  <div class="col-md-6">
                    <div class="detail_box">
                      <h2>
                        <span> Best Selling This Week</span>
                        <hr>
                      </h2>
                      <h1>
                        Marriage Ring
                      </h1>
                      <p>
                        Lorem ipsum dolor sit amet consec tetur adipiscing elit elit at felislacinia
                        aptent taciti sociosqu ad litora torquent per conubia nostra
                      </p>
                      <div>
                        <a href="">Shop Now</a>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="img-box">
                      <img src="./public/images/mr.png" alt="">
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
  
      </section>
      <!-- end slider section -->
      <section class="price_section layout_padding">
    <div class="container">
      <div class="heading_container">
        <h2>
          Our Jewellery Price
        </h2>
      </div>
      <div class="price_container">
    
      <?php
      foreach ($prods as $prod) {
      ?>
        <div class="box">
          <div class="name">
            <h6>
            
            <?php echo ($prod['name']);?>
            </h6>
          </div>
          <div class="img-box">

            <img src="./public/images/<?php echo ($prod['4']); ?>" alt="Jewelry">
          </div>
          <div class="detail-box">
            <h5>
              $<span><?php echo ($prod['prix']); ?></span>
            </h5>
            <form action="detail" method="post">
            <button name="subdit" type="submit"> Buy Now</button>
            <input type="hidden" class="form-control" name="id_ed" value="<?php echo $prod[0]; ?>">
            </form>
          
          
          </div>
        </div>
        <?php }?>
      </div>
      <!-- <div class="d-flex justify-content-center">
        <a href="#" class="price_btn">
          See More
        </a>
      </div> -->
 
    </div>
  </section>