<?php 
$this->load->view('_blocks/header'); ?>
 
  <div class="inner-page-wrapper"> 
    
    <!-- BREADCRUMB
				============================================= -->
    <div id="breadcrumb" class="division">
                  <div class="container">
        <div class="row"> 
                      
                      <!-- BREADCRUMB NAV -->
                      <div class="col-md-12">
            <nav aria-label="breadcrumb">
                          <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">RDBMS</li>
              </ol>
                        </nav>
          </div>
                    </div>
        <!-- End row --> 
      </div>
                  <!-- End container --> 
                </div>
    <!-- END BREADCRUMB --> 
    
    <!-- NEWS-3
				============================================= -->
    <section id="news-3" class="pt-100 news-section division">
                  <div class="container">
        <div class="row  "> 
                   
                      <!-- BLOG POSTS HOLDER -->
                      <div id="list_container" class="col-lg-9 box  ">
           <div id="list_container" class="posts-holder pr-25  "> 
              <?php foreach($content as $k=>$topic ){ ?>            
                          <!-- ARTICLE #1 -->
              <div item_index="<?=$k+1?>" class="article-3 row d-flex align-items-center b-bottom  "> 
                <!-- Article Preview -->
                <div class="col-md-4"> <img class="img-fluid" src="<?=img_path($topic['intro_image'])?>" alt="article-preview"> </div>
                
                <!-- Article Text -->
                <div class="col-md-8"> 
                              
                              <!-- Title -->
                              <h4 class="h4-sm"> <a href="<?=base_url("shaft/".$topic['target_page'])?>"><?=$topic['title']?></a> </h4>
                              
                              <!-- Text -->
                              <p><?=$topic['intro']?></p> 
                              
                             
                            </div>
              </div>
                          <!-- END ARTICLE #1 --> 
              <?php } ?>             
                    
             </div>
          </div>
                      <!-- END BLOG POSTS HOLDER --> 
                      
                      <!-- SIDEBAR -->
                      <aside id="sidebar" class="col-lg-3"> 
            
            <!-- SEARCH FIELD -->
            <div id="search-field" class="sidebar-div mb-50">
                          <div class="input-group mb-3">
                              <input id="search_on"   type="text" class="form-control" placeholder="Search" aria-label="Search" aria-describedby="search-field">
                <div class="input-group-append">
                              <button class="btn" type="button"><i class="fa fa-search" aria-hidden="true"></i></button>
                            </div>
              </div>
                        </div>
            
            <!-- BLOG CATEGORIES -->
            <div class="blog-categories sidebar-div mb-50">
                          <h5>RDBMS</h5>
						   <?=fuel_nav(array( 
		  					'render_type' => 'basic'
							,'group_id' => 5
							,'container_tag_class' => 'blog-category-list clearfix'
                            , 'active_class'=>'active'
                            ,'active'=>  uri_segment(2)
							,'order' => 'precedence'
                            ,'use_nav_key'=>TRUE
							))?>
                         
                          <h5 class="pad-t-15">Big Data</h5>
						   <?=fuel_nav(array( 
		  					'render_type' => 'basic'
							,'group_id' => 6
							,'container_tag_class' => 'blog-category-list clearfix'
                            , 'active_class'=>'active'
                            ,'active'=>  uri_segment(2)
							,'order' => 'precedence'
                            ,'use_nav_key'=>TRUE
							))?>
                        
                          <h5 class="pad-t-15">Tutorials</h5>
                           <?=fuel_nav(array( 
		  					'render_type' => 'basic'
							,'group_id' => 7
							,'container_tag_class' => 'blog-category-list clearfix'
                            , 'active_class'=>'active'
                            ,'active'=>  uri_segment(2)
							,'order' => 'precedence'
                            ,'use_nav_key'=>TRUE
							))?>
                        </div>
          </aside>
                      <!-- END SIDEBAR --> 
                      
                    </div>
        <!-- End row --> 
      </div>
                  <!-- End container --> 
                </section>
    <!-- END NEWS-3 --> 
    
    <!-- PAGE PAGINATION
				============================================= -->
    <div class="page-pagination division">
                  <div class="container">
        <div class="row">
                      <div class="col-md-12"> 
            <nav aria-label="Page navigation">



               <?php 
               $item_per_page=($item_per_page>0)?$item_per_page:10;
               if($item_per_page < count($content)){ ?>
                <ul id="paginate_buttons" class="pagination justify-content-center">
                <li class="page-item disabled"> <a class="page-link" href="#" tabindex="-1"><i class="fas fa-angle-left"></i></a></li>
                <li class="page-item active"> <a class="page-link" href="#">1 <span class="sr-only">(current)</span></a></li>
                <li class="page-item"><a class="page-link" href="#">2</a> </li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item"><a class="page-link" href="#">4</a></li>
                <li class="page-item"><a class="page-link" href="#"> <i class="fas fa-angle-right"></i></a></li>
              </ul>
              <?php } ?>
                        </nav>
          </div>
                    </div>
        <!-- End row --> 
      </div>
                  <!-- End container --> 
                </div>
    <!-- END PAGE PAGINATION --> 
 
<?=js(array('spagination' ));?>
<script>
      // var $j = jQuery.noConflict();
     var item_per_page= <?=$item_per_page?>;
     
        $(document).ready(function($){
            <?php if($item_per_page < count($content)){ ?>
                new spagination(item_per_page);
            <?php } ?>
           
        });
    </script>
<?php $this->load->view('_blocks/footer'); ?>