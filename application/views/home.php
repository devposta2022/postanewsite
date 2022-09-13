<?php $this->load->view('header'); ?>
    <!-- /HEADER -->

    <!-- contents -->
        <div class="home-page px-0 ">
        <div class="col-12 slider px-xs-0 px-0">
            <div id="carouselExampleCaptions" class="carousel slide carousel-fade" data-ride="carousel"
                 data-interval="3000"> <!-- 4000 -->
                <div class="carousel-inner">
                                            <div class="carousel-item  active  ">
                            <img class="d-block w-100" alt="JAMHURI YA MUUNGANO WA TANZANIA"
                                 src="assets/uploads/gallery/postaoman.jpg">
                        </div>
                                            <div class="carousel-item ">
                            <img class="d-block w-100" alt="JAMHURI YA MUUNGANO WA TANZANIA"
                                 src="assets/uploads/gallery/truck2.jpg">
                        </div>
                                            <!-- <div class="carousel-item ">
                            <img class="d-block w-100" alt="JAMHURI YA MUUNGANO WA TANZANIA"
                                 src="uploads/gallery/40b64994eec6c75d705dfd160aec0760.jpg">
                        </div> -->
                                            <div class="carousel-item ">
                            <img class="d-block w-100" alt="JAMHURI YA MUUNGANO WA TANZANIA"
                                 src="assets/uploads/gallery/hudumapamoja.jpg">
                        </div>
                                            <div class="carousel-item ">
                            <img class="d-block w-100" alt="JAMHURI YA MUUNGANO WA TANZANIA"
                                 src="assets/uploads/gallery/truck.jpg">
                        </div>
                                            <!-- <div class="carousel-item ">
                            <img class="d-block w-100" alt="JAMHURI YA MUUNGANO WA TANZANIA"
                                 src="uploads/gallery/barua.jpeg"> -->
                        </div>
                                    </div>
                <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>


                <!-- <div class="overlay-news-nov2021 col-md-3 py-3 sm-hide">
                    <div class="overlay-news-title-nov2021">
                        <h4>Habari Mpya</h4>
                    </div>
                                                                    <div class="media mt-2">
                            <div class="media-body">
                                <p>
                                                                            <a class="" target="_blank"
                                           href="uploads/newsdocs/sw-1660908818-Public%20Notice-19.8.2022.pdf">Taarifa kwa Umma: Ombi la Leseni Chini ya Mfumo wa Leseni Ul... </a>
                                                                        <br>
                                    <small class="text-dark">Aug 19, 2022</small>
                                </p>
                            </div>
                        </div>
                                                                    <div class="media mt-2">
                            <div class="media-body">
                                <p>
                                                                            <a class="" target="_blank"
                                           href="uploads/newsdocs/sw-1660544922-Public%20Notice%20for%20Draft%20Information%20Memorandum_15-08-2022.pdf">Public Notice for Draft Information Memorandum </a>
                                                                        <br>
                                    <small class="text-dark">Aug 15, 2022</small>
                                </p>
                            </div>
                        </div>
                                                                    <div class="media mt-2">
                            <div class="media-body">
                                <p>
                                                                            <a class=""
                                           href="tcra-news/tcra-launches-campaign-to-curb-online-fraud.html">TCRA yazindua Kampeni kutokomeza Utapeli Mtandaoni </a>
                                                                        <br>
                                    <small class="text-dark">Aug 05, 2022</small>
                                </p>
                            </div>
                        </div>
                                                                <div class="row mt-1" style="float: right; padding-right: 20px;">
                        <a href="tcra-news.html" class="text-dark f-900"> <i>Angalia Zaidi <i
                                        class="far fa-arrow-alt-circle-right"></i></i></a>
                    </div>
                </div>
                    </div> -->

        
<!-- HABARI NA MATUKIO -->
        <div class="" style="background-color: #eee;">
            <div class="row" style="margin-left: %; margin-right: 1%; margin-bottom: 1%;">


    <div class="col-sm-6 col-md-4 col-lg-9 mt-2" style="background-color: #eff3f6;" >

                <div style="background-color: ;" class="card card-tcra">
                    <div class="card col-sm-6 col-md-6 col-lg-11 mt-2" style="border-radius: 10px; margin-bottom: 1%; background-color: #c31f26; margin-left: 4%; margin-right: -4%;">
                        <h1 style="align-content:left; font-family: 'Times New Roman', 'Times', serif; font-weight: 500 !important; color: #fcd403;  padding-left: ;" class="text-center">Habari Na Matukio</h1>
                    </div>
                    </div>
                    <div class="row" style="margin: 0%; ">
                        <?php $count = 0 ?>
                        <?php foreach($post_details as $news): ?>
                        <div class="col-sm-6 col-md-2 col-lg-4 mt-1  about-section" >
                        <!-- col-sm-6 col-md-4 col-lg-4 mt-4 about-section -->
                        
                            <div class="card mt-0 ml-4 mr-4 overflow-hidden " style="border-radius: 10px; height: 70vh">
                                <!-- ?php echo $news->post_image; ?> -->
                            <img class="card-img" src="assets/site/images/news/zanzibar.png" alt="Tanganza Biashara" width="90px" height="190px">

                            <div class="card-body">
                              <h4 class="card-title" style="font-family: 'Times New Roman', 'Times', serif; font-size:20px;"><?php echo $news->post_title; ?></h4>
                              <small class="text-muted cat">
                                <i class="fas fa-clock text-info"></i> <?php echo $news->created_on; ?>
                              </small>
                              <p class="card-text text-truncate"><?php echo $news->post_desc; ?></p>
                              <a href="#" class="btn btn-info" style="cursor: pointer; border-radius: 10px; background-color: #c31f26;">Soma zaidi</a>
                            </div>
                          </div>
   
                    </div>
                        <?php 
                            $count++;

                            if($count==3){
                                break;
                            }
                        ?>
                    <?php endforeach; ?>     
                </div>
<!--  -->
    

<!--  -->
                      <div class="mt-3 ml-5 mb-3" style="width: 30%; height: 5%;">
                        <a href="#" class="btn btn-info" style="cursor: pointer; border-radius: 10px; background-color: #c31f26;">Soma habari zote</a>
                      </div>
                </div>
                
                <div class="col-sm-6 col-md-8 col-lg-3 mt-2" style="background-color: white;" >
                        <div class="card col-sm-6 col-md-6 col-lg-11 mt-2" style="border-radius: 10px; margin-bottom: 1%; background-color: #c31f26; margin-left: 4%; margin-right: -4%;">
                        <h1 style="align-content:left; font-family: 'Times New Roman', 'Times', serif; font-weight: 500 !important; color: #fcd403;  padding-left: ;" class="text-center">Majarida</h1>
                    </div>
                    <div>
                        
                    </div>
                    <div class="mt-5 ml-3 mb-3" style="width: 30%; height: 5%;">
                        <a href="#" class="btn btn-info" style="cursor: pointer; border-radius: 10px; background-color: #c31f26;">Angalia Yote</a>
                    </div>
                </div>

                
            </div>
        </div>
        <!-- END HABARI NA MATUKIO -->

        <br/>
        </div>


        <!-- SECTION WITH BOXES -->

            </div>
    <!-- /contents -->

    <!-- FOOTER -->



<!-- YOUTUBE VIDEO -->
<footer class="ega-footer ega-section col-12 pb-0" id="">
    <div class="col-md-12 px-0" >
        
            <div class="row px-xs-2 px-3" >
                <div class="col-md-12" >
                    <div class="row">
                        <div class="video-section col-md-12 mb-xs-2" style="margin-top: 0%;">
                            <div class="row">
                                                                                                                            <div class="col-md-4 mb-3x">
                                                                                                                                                    <p>
                                                        <a href="https://www.youtube.com/watch?v=36amooh-oWw" class="zoom border-radius-2 popup-youtube">
                                                    <div class="video pl-3" >
                                                        <img src="assets/site/images/youtube/oman_na_tanzania.jpg" alt="KWEA KIDIJITALI" class="w-100">
                                                        <div class="play-button"><span></span></div>
                                                        <h6 class="mt-2 w-100" style="color: #000000;"> <!-- color is Hard coded-->
                                                            POSTA YA TANZANIA NA OMAN</h6>
                                                    </div>
                                                    </a>
                                                    </p>
                                                                                            </div>
                                                                                                                                <div class="col-md-4 mb-3x">
                                                                                                                                                    <p>
                                                                                                            <!--                                        <a href="https://www.youtube.com/c/MamlakaYaMawasilianoTanzaniaTCRA" class="zoom border-radius-2 popup-youtubex" target=”_blank”>-->
                                                            <!--                                            <div class="video pl-3">-->
                                                        <!--                                                <img src="https://www.tcra.go.tz/site/images/youtube-big-thumbnail.jpg" alt="" class="w-100">-->
                                                            <!--                                                <div class="play-button"> <span></span></div>-->
                                                            <!--                                                <h6 class="mt-2 w-100" style="color: #000000;">Angalia zaidi YouTube</h6> -->
                                                            <!--                                            </div>-->
                                                            <!--                                        </a>-->

                                                        <a href="https://www.youtube.com/watch?v=4JtcCxD8lGU" class="zoom border-radius-2 popup-youtube">
                                                    <div class="video pl-3" >
                                                        <img src="assets/site/images/youtube/duka_mtandao.jpg" alt="KWEA KIDIJITALI" class="w-100">
                                                        <div class="play-button"><span></span></div>
                                                        <h6 class="mt-2 w-100" style="color: #000000;"> <!-- color is Hard coded-->
                                                            DUKA MTANDAO</h6>
                                                    </div>
                                                    </a>
                                                    </p>
                                                                                            </div>
                                                                                                                                <div class="col-md-4 mb-3x">
                                                                                                                                                    <p>

                                                        <a href="https://www.youtube.com/watch?v=QRnMPVZMlT8" class="zoom border-radius-2 popup-youtube">
                                                    <div class="video pl-3" >
                                                        <img src="assets/site/images/youtube/air_ticket.jpg" alt="KWEA KIDIJITALI" class="w-100">
                                                        <div class="play-button"><span></span></div>
                                                        <h6 class="mt-2 w-100" style="color: #000000;"> <!-- color is Hard coded-->
                                                            TICKET ZA NDEGE AIR TANZANIA</h6>
                                                    </div>
                                                    </a>
                                                    </p>
                                                                                            </div>
                                                                                                                                <div class="col-md-4 mb-3x">
                                                                                    </div>
                                    <div class="col-md-12 mb-3 text-black-50 text-right" >
                                        
                                        <a href="#" class="btn btn-info" style="cursor: pointer; border-radius: 10px; background-color: #c31f26; color: white;">Angalia habari zote</a>
                                         <!-- color is Hard coded-->
                                    </div>
                                                            </div>
                                            </div>
                </div>
            </div>
        </div>
</footer>

<!-- END YOUTUBE VIDEO -->

<!--  -->
<!-- PARTNERS -->
    <footer class="ega-footer ega-section col-12 pb-2" id=""style="background-color: white;">

    
        <div class="footer-content container" >
            
                
                    <div class="row">
                        <h3  style="color:#c31f26; text-align: center"><strong>Wadau wetu</strong></h3>
                        <!--  -->
                        <!--  -->
                        <!-- <h1>PARTNERS</h1> -->
                        <!--  -->
                    <div class="col-sm-12"> 
                        <div class="slider1">
                        <div class="slider-track">
                            <div class="slide1">
                            <img src="<?php echo base_url('assets/uploads/gallery/partners/heslb.png'); ?>" alt="heslb image" width="100" height="100">
                        </div>
                        <div class="slide1">
                             <img src="<?php echo base_url('assets/uploads/gallery/partners/nmb.png'); ?>" alt="nmb image" width="100" height="100">
                         </div>
                         <div class="slide1">
                              <img src="<?php echo base_url('assets/uploads/gallery/partners/ttcl.png'); ?>" alt="ttcl image" width="100" height="100">
                          </div>
                          <div class="slide1">
                              <img src="<?php echo base_url('assets/uploads/gallery/partners/necta.jpeg'); ?>" alt="ttcl image" width="100" height="100">
                          </div>
                          <div class="slide1">
                              <img src="<?php echo base_url('assets/uploads/gallery/partners/crdb.png'); ?>" alt="ttcl image" width="100" height="100">
                          </div>
                          <div class="slide1">
                            <img src="<?php echo base_url('assets/uploads/gallery/partners/heslb.png'); ?>" alt="heslb image" width="100" height="100">
                        </div>
                        <div class="slide1">
                             <img src="<?php echo base_url('assets/uploads/gallery/partners/nmb.png'); ?>" alt="nmb image" width="100" height="100">
                         </div>
                         <div class="slide1">
                              <img src="<?php echo base_url('assets/uploads/gallery/partners/ttcl.png'); ?>" alt="ttcl image" width="100" height="100">
                          </div>
                          <div class="slide1">
                              <img src="<?php echo base_url('assets/uploads/gallery/partners/necta.jpeg'); ?>" alt="ttcl image" width="100" height="100">
                          </div>
                          <div class="slide1">
                              <img src="<?php echo base_url('assets/uploads/gallery/partners/crdb.png'); ?>" alt="ttcl image" width="100" height="100">
                          </div>
                        </div>
                    </div>
         
                    </div>
            </div>
       
        
</footer>
<!-- END OF PARTNERS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js"></script>



    <script type="text/javascript">
        $(document).ready(function(){
    $('.customer-logos').slick({
        slidesToShow: 6,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 1500,
        arrows: false,
        dots: false,
        pauseOnHover: false,
        responsive: [{
            breakpoint: 768,
            settings: {
                slidesToShow: 4
            }
        }, {
            breakpoint: 520,
            settings: {
                slidesToShow: 3
            }
        }]
    });
});
    </script>
<?php $this->load->view('footer');?>
<!-- footer -->
