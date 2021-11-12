<?php $this->load->view('_blocks/header'); ?>

<!--######### Banner End #########-->
<div class="clr"></div>
<div class="sm_wrapper min_height">
<div class="inside_page">
     <section id="about-2" class="wide-60 about-section division">
    <div class="container">
	<?php echo fuel_var('body'); ?>
    </div>
     </section>
     <!-- VIDEO-3 BRANDS -->
    <div class="video-3-brands division">
      <div class="container">
        <div class="row">
            <?php if(isset($brand_list)){ ?>
          <div class="col text-center"> 
            
            
            <!-- Brands Carousel -->
            <div class="owl-carousel brands-carousel"> 
              <?php foreach ($brand_list as $brand){ if($brand['brand_image']!=""){?>
              <!-- BRAND LOGO IMAGE -->
              
              <div class="brand-logo"> <img class="img-fluid" src="<?=img_path($brand['brand_image'])?>" alt="<?=$brand['brand']?>" /> </div>
              <?php }} ?>
            </div>
            <!-- Brands Carousel --> 
            
          </div>
          <!-- End col --> 
            <?php } ?>
        </div>
        <!-- End row --> 
         <?php if(isset($brand_list)){ ?>
          <section id="services-5" class="bg-lightgrey wide-60 services-section division bg-whitesmoke">
    <div class="container"> 
      
     
      
      
      <div class="row"> 
        <?php foreach ($service_list as $service){ ?>
        <!-- SERVICE BOX #1 -->
        <div class="col-md-12 col-lg-12">
          <div class="banner-5-txt"> 
            
            <!-- Icon --> 
            <img class="img-70" src="<?=img_path($service['image'])?>" alt="service-icon" /> 
            
            <!-- Text -->
            <div class="b5-txt"> 
              
              <!-- Title -->
              <h5 class="h5-md"><?=$service['name']?></h5>
              
              <!-- Text -->
              <p class="grey-color"><?=$service['intro']?></p>
            </div>
          </div>
        </div>
        <!-- END SERVICE BOX #1 --> 
        <?php } ?> 
     
        
      </div>
      <!-- End row --> 
    </div>
    <!-- End container --> 
  </section>
  <!-- End SERVICES-5 --> 
  
    <?php } ?>
      </div>
      <!-- End container --> 
    </div>
    <!-- END VIDEO-3 BRANDS --> 
    
</div>
    <div class="clr"></div>
</div>

<?php $this->load->view('_blocks/footer'); ?>