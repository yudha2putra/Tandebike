<!DOCTYPE html>
<!--[if lt IE 8 ]><html class="no-js ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="no-js ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 8)|!(IE)]><!-->
<html class="no-js" lang="en"> <!--<![endif]-->
<head>
	<style>
       /* Set the size of the div element that contains the map */
      #map {
        height: 600px;  /* The height is 600 pixels */
        width: 100%;  /* The width is the width of the web page */
       }
    </style>


   <!--- Basic Page Needs
   ================================================== -->
   <meta charset="utf-8">
	<title>Tandebike Motorcycle Renting</title>
	<meta name="description" content="">
	<meta name="author" content="">

   <!-- Mobile Specific Metas
   ================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

  <!-- Favicons -->
  <link href="<?=base_url();?>/assets/favicon.png" rel="shortcut icon">

	<!-- CSS
    ================================================== -->
   <link rel="stylesheet" href="<?=base_url();?>assets/css/default.css">
	<link rel="stylesheet" href="<?=base_url();?>assets/css/layout.css">
   <link rel="stylesheet" href="<?=base_url();?>assets/css/media-queries.css">
   <link rel="stylesheet" href="<?=base_url();?>assets/css/magnific-popup.css">

   <!-- Script
   ================================================== -->
	<script src="<?=base_url();?>/assets/js/modernizr.js"></script>

</head>

<body>
   <!-- Header
   ================================================== -->
   <header id="home">
      <nav id="nav-wrap">
         <a class="mobile-btn" href="#nav-wrap" title="Show navigation">Show navigation</a>
	      <a class="mobile-btn" href="#" title="Hide navigation">Hide navigation</a>
        <ul id ="nav"><img alt="" src="<?= base_url()?>assets/images/logo.png" width="200" height="2"></ul>
         <ul id="nav">
            <li class="current"><a class="smoothscroll" href="#home">Home</a></li>
            <li><a class="smoothscroll" href="#fitur">Fitur</a></li>
            <!--<li><a class="smoothscroll" href="#portofolio">Partnership</a></li>-->
            <li><a class="smoothscroll" href="#monitoring">Monitoring</a></li>
            <li><a class="smoothscroll" href="#penawaran">Menjadi Mitra</a></li>
            <li><a class="smoothscroll" href="#contact">Contact</a></li>
            <li><a class="smoothscroll" href="#about">About</a></li>
         </ul> <!-- end #nav -->

      </nav> <!-- end #nav-wrap -->
      <div class="row banner">
         <div class="banner-text">
            <h1 class="responsive-headline" ></h1>
             <img alt="" src="<?= base_url()?>assets/images/logo-central.png" width="400" height="100">
            <h2><b>Sewa sepeda motor favoritmu melalui aplikasi<br>Tanpa perlu terima kunci!<br><a class="smoothscroll" href="#about">Daftar Sekarang</a>.</h2>
            <div class="container">
               <p>
                  <a href="#" class="button"><i class="fa fa-daftar"></i>Sewa Motor</a>

                  <a href="#" class="button"><i class="fa fa-daftar"></i>Menjadi Mitra</a>
               </p>
            </div>
            <hr />
            <ul class="social">
               <li><a href="https://www.facebook.com/mountableid.id"><i class="fa fa-facebook"></i></a></li>
               <li><a href="https://twitter.com/mountableid"><i class="fa fa-twitter"></i></a></li>
               <li><a href="https://www.linkedin.com/company/mountable/about/"><i class="fa fa-linkedin"></i></a></li>
               <li><a href="https://www.instagram.com/mountable.id/"><i class="fa fa-instagram"></i></a></li>
               <li><a href="https://t.me/joinchat/J3ZmjxNg1QuTApw1uPOZTQ"><i class="fa fa-telegram"></i></a></li>
            </ul>
         </div>
      </div>
      <nav class="navbar navbar-default navbar-fixed-top is-scrolling">

</nav>
      <p class="scrolldown">
         <a class="smoothscroll" href="#about"><i class="icon-down-circle"></i></a>
      </p>

   </header> <!-- Header End -->

     <!-- Feature Section -->
   <section id="fitur">
       <div class="container">
           <div class="row">
               <div class="col-lg-12 text-center">
                   <h1 class="section-heading">Fitur</h1>
                   <h3 class="section-subheading text-muted">Mengapa harus Tandebike?</h3>
               </div>
           </div>
           <div class="row">
               <div class="col-lg-12">
                   <ul class="timeline">
                       <li>
                           <div class="timeline-image">
                               <img class="img-circle img-responsive" src="<?php echo base_url(IMAGES); ?>/about/motorcycle.png" alt="">
                           </div>
                           <div class="timeline-panel">
                               <div class="timeline-heading">
                                   <h4 class="subheading">Motorbike Sharing</h4>
                               </div>
                               <div class="timeline-body">
                                   <p class="text-muted">Berbagi sepeda motor dimanapun dan kapanpun</p>
                               </div>
                           </div>
                       </li>
                       <li class="timeline-inverted">
                           <div class="timeline-image">
                               <img class="img-circle img-responsive" src="<?php echo base_url(IMAGES); ?>/about/smartphone.png" alt="">
                           </div>
                           <div class="timeline-panel">
                               <div class="timeline-heading">
                                   <h4 class="subheading">Self Service</h4>
                               </div>
                               <div class="timeline-body">
                                   <p class="text-muted">Temukan dan sewa sepeda motor terdekat melalui aplikasi tanpa terima kunci</p>
                               </div>
                           </div>
                       </li>
                       <li>
                           <div class="timeline-image">
                               <img class="img-circle img-responsive" src="<?php echo base_url(IMAGES); ?>/about/stopwatch.png" alt="">
                           </div>
                           <div class="timeline-panel">
                               <div class="timeline-heading">
                                   <h4 class="subheading">Flexible</h4>
                               </div>
                               <div class="timeline-body">
                                   <p class="text-muted">Sewa sepeda motor fleksibel sesuai kebutuhanmu </p>
                               </div>
                           </div>
                       </li>
                       <li class="timeline-inverted">
                           <div class="timeline-image">
                               <img class="img-circle img-responsive" src="<?php echo base_url(IMAGES); ?>/about/shield.png" alt="">
                           </div>
                           <div class="timeline-panel">
                               <div class="timeline-heading">
                                   <h4 class="subheading">Safe Rent</h4>
                               </div>
                               <div class="timeline-body">
                                   <p class="text-muted">Kami menggunakan teknologi Internet of Things sehingga sepeda motor mitra kami dapat dipantau secara real time</p>
                               </div>
                           </div>
                       </li>
                   </ul>
               </div>
           </div>
       </div>
   </section>

   <!-- Resume Section
   ================================================== --
   <section id="resume">
   <!-- Education
      ----------------------------------------------- --
      <div class="row education">

         <div class="three columns header-col">
            <h1><span>Education</span></h1>
         </div>

         <div class="nine columns main-col">

            <div class="row item">

               <div class="twelve columns">

                  <h3>University of Life</h3>
                  <p class="info">Master in Graphic Design <span>&bull;</span> <em class="date">April 2007</em></p>

                  <p>
                  Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.
                  Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis,
                  ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.
                  Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. Nullam dictum felis eu pede mollis pretium.
                  </p>

               </div>

            </div> <!-- item end --

            <div class="row item">

               <div class="twelve columns">

                  <h3>School of Cool Designers</h3>
                  <p class="info">B.A. Degree in Graphic Design <span>&bull;</span> <em class="date">March 2003</em></p>

                  <p>
                  This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet.
                  Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem
                  nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan
                  ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non  mauris vitae erat
                  </p>

               </div>

            </div> <!-- item end --

         </div> <!-- main-col end --

      </div> <!-- End Education -->


      <!-- Work
      ----------------------------------------------- --
      <div class="row work">

         <div class="three columns header-col">
            <h1><span>Work</span></h1>
         </div>

         <div class="nine columns main-col">

            <div class="row item">

               <div class="twelve columns">

                  <h3>Awesome Design Studio</h3>
                  <p class="info">Senior UX Designer <span>&bull;</span> <em class="date">March 2010 - Present</em></p>

                  <p>
                  Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.
                  Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis,
                  ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.
                  Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. Nullam dictum felis eu pede mollis pretium.
                  </p>

               </div>

            </div> <!-- item end --

            <div class="row item">

               <div class="twelve columns">

                  <h3>Super Cool Studio</h3>
                  <p class="info">UX Designer <span>&bull;</span> <em class="date">March 2007 - February 2010</em></p>

                  <p>
                  This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet.
                  Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem
                  nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan
                  ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non  mauris vitae erat
                  </p>

               </div>

            </div> <!-- item end --

         </div> <!-- main-col end --

      </div> <!-- End Work --


      <!-- Skills
      ---------------------------------------------- --
      <div class="row skill">

         <div class="three columns header-col">
            <h1><span>Skills</span></h1>
         </div>

         <div class="nine columns main-col">

            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam,
            eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam
            voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione
            voluptatem sequi nesciunt.
            </p>

				<div class="bars">

				   <ul class="skills">
					   <li><span class="bar-expand photoshop"></span><em>Photoshop</em></li>
                  <li><span class="bar-expand illustrator"></span><em>Illustrator</em></li>
						<li><span class="bar-expand wordpress"></span><em>Wordpress</em></li>
						<li><span class="bar-expand css"></span><em>CSS</em></li>
						<li><span class="bar-expand html5"></span><em>HTML5</em></li>
                  <li><span class="bar-expand jquery"></span><em>jQuery</em></li>
					</ul>

				</div><!-- end skill-bars ->

			</div> <!-- main-col end ->

      </div> <!-- End skills -->

   </section> <!-- Resume Section End-->


   <!-- Portfolio Section
   ================================================== --
   <section id="portofolio">

      <div class="row">

         <div class="twelve columns collapsed">

            <h1>Check Out Some of My Works.</h1>

            <!-- portfolio-wrapper --
            <div id="portofolio-wrapper" class="bgrid-quarters s-bgrid-thirds cf">

          	   <div class="columns portofolio-item">
                  <div class="item-wrap">

                     <a href="#modal-01" title="">
                        <img alt="" src="<?=base_url();?>/assets/images/portfolio/coffee.jpg">
                        <div class="overlay">
                           <div class="portofolio-item-meta">
          					      <h5>Coffee</h5>
                              <p>Illustrration</p>
          					   </div>
                        </div>
                        <div class="link-icon"><i class="icon-plus"></i></div>
                     </a>

                  </div>
          		</div> <!-- item end --

               <div class="columns portofolio-item">
                  <div class="item-wrap">

                     <a href="#modal-02" title="">
                        <img alt="" src="<?=base_url();?>/assets/images/portfolio/console.jpg">
                        <div class="overlay">
                           <div class="portofolio-item-meta">
          					      <h5>Console</h5>
                              <p>Web Development</p>
          					   </div>
                        </div>
                        <div class="link-icon"><i class="icon-plus"></i></div>
                     </a>

                  </div>
          		</div> <!-- item end --

               <div class="columns portofolio-item">
                  <div class="item-wrap">

                     <a href="#modal-03" title="">
                        <img alt="" src="<?=base_url();?>/assets/images/portfolio/judah.jpg">
                        <div class="overlay">
                           <div class="portofolio-item-meta">
          					      <h5>Judah</h5>
                              <p>Webdesign</p>
          					   </div>
                        </div>
                        <div class="link-icon"><i class="icon-plus"></i></div>
                     </a>

                  </div>
          		</div> <!-- item end --

               <div class="columns portofolio-item">
                  <div class="item-wrap">

                     <a href="#modal-04" title="">
                        <img alt="" src="<?=base_url();?>/assets/images/portfolio/into-the-light.jpg">
                        <div class="overlay">
                           <div class="portofolio-item-meta">
          					      <h5>Into The Light</h5>
                              <p>Photography</p>
          					   </div>
                        </div>
                        <div class="link-icon"><i class="icon-plus"></i></div>
                     </a>

                  </div>
          		</div> <!-- item end --

               <div class="columns portofolio-item">
                  <div class="item-wrap">

                     <a href="#modal-05" title="">
                        <img alt="" src="<?=base_url();?>/assets/images/portfolio/farmerboy.jpg">
                        <div class="overlay">
                           <div class="portfoolio-item-meta">
          					      <h5>Farmer Boy</h5>
                              <p>Branding</p>
          					   </div>
                        </div>
                        <div class="link-icon"><i class="icon-plus"></i></div>
                     </a>

                  </div>
          		</div> <!-- item end --

               <div class="columns portofolio-item">
                  <div class="item-wrap">

                     <a href="#modal-06" title="">
                        <img alt="" src="<?=base_url();?>/assets/images/portfolio/girl.jpg">
                        <div class="overlay">
                           <div class="portofolio-item-meta">
          					      <h5>Girl</h5>
                              <p>Photography</p>
          					   </div>
                        </div>
                        <div class="link-icon"><i class="icon-plus"></i></div>
                     </a>

                  </div>
          		</div> <!-- item end --

               <div class="columns portofolio-item">
                  <div class="item-wrap">

                     <a href="#modal-07" title="">
                        <img alt="" src="<?=base_url();?>/assets/images/portfolio/origami.jpg">
                        <div class="overlay">
                           <div class="portofolio-item-meta">
          					      <h5>Origami</h5>
                              <p>Illustrration</p>
          					   </div>
                        </div>
                        <div class="link-icon"><i class="icon-plus"></i></div>
                     </a>

                  </div>
          		</div> <!-- item end --

               <div class="columns portofolio-item">
                  <div class="item-wrap">

                     <a href="#modal-08" title="">
                        <img alt="" src="<?=base_url();?>/assets/images/portfolio/retrocam.jpg">
                        <div class="overlay">
                           <div class="portofolio-item-meta">
          					      <h5>Retrocam</h5>
                              <p>Web Development</p>
          					   </div>
                        </div>
                        <div class="link-icon"><i class="icon-plus"></i></div>
                     </a>

                  </div>
          		</div>  <!-- item end -->

            </div> <!-- portfolio-wrapper end -->

         </div> <!-- twelve columns end -->


         <!-- Modal Popup
	      --------------------------------------------------------------- -->

         <div id="modal-01" class="popup-modal mfp-hide">

		      <img class="scale-with-grid" src="<?=base_url();?>/assets/images/portfolio/modals/m-coffee.jpg" alt="" />

		      <div class="description-box">
			      <h4>Coffee Cup</h4>
			      <p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit.</p>
               <span class="categories"><i class="fa fa-tag"></i>Branding, Webdesign</span>
		      </div>

            <div class="link-box">
               <a href="http://srikrishnacommunication.com/Giridesigns.html" target="_blank">Details</a>
		         <a class="popup-modal-dismiss">Close</a>
            </div>

	      </div><!-- modal-01 End -->

         <div id="modal-02" class="popup-modal mfp-hide">

		      <img class="scale-with-grid" src="<?=base_url();?>/assets/images/portfolio/modals/m-console.jpg" alt="" />

		      <div class="description-box">
			      <h4>Console</h4>
			      <p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit.</p>
               <span class="categories"><i class="fa fa-tag"></i>Branding, Web Development</span>
		      </div>

            <div class="link-box">
               <a href="http://srikrishnacommunication.com/Giridesigns.html" target="_blank">Details</a>
		         <a class="popup-modal-dismiss">Close</a>
            </div>

	      </div><!-- modal-02 End -->

         <div id="modal-03" class="popup-modal mfp-hide">

		      <img class="scale-with-grid" src="<?=base_url();?>/assets/images/portfolio/modals/m-judah.jpg" alt="" />

		      <div class="description-box">
			      <h4>Judah</h4>
			      <p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit.</p>
               <span class="categories"><i class="fa fa-tag"></i>Branding</span>
		      </div>

            <div class="link-box">
               <a href="http://srikrishnacommunication.com/Giridesigns.html" target="_blank">Details</a>
		         <a class="popup-modal-dismiss">Close</a>
            </div>

	      </div><!-- modal-03 End -->

         <div id="modal-04" class="popup-modal mfp-hide">

		      <img class="scale-with-grid" src="<?=base_url();?>/assets/images/portfolio/modals/m-intothelight.jpg" alt="" />

		      <div class="description-box">
			      <h4>Into the Light</h4>
			      <p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit.</p>
               <span class="categories"><i class="fa fa-tag"></i>Photography</span>
		      </div>

            <div class="link-box">
               <a href="http://srikrishnacommunication.com/Giridesigns.html" target="_blank">Details</a>
		         <a class="popup-modal-dismiss">Close</a>
            </div>

	      </div><!-- modal-04 End -->

         <div id="modal-05" class="popup-modal mfp-hide">

		      <img class="scale-with-grid" src="<?=base_url();?>/assets/images/portfolio/modals/m-farmerboy.jpg" alt="" />

		      <div class="description-box">
			      <h4>Farmer Boy</h4>
			      <p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit.</p>
               <span class="categories"><i class="fa fa-tag"></i>Branding, Webdesign</span>
		      </div>

            <div class="link-box">
               <a href="http://srikrishnacommunication.com/Giridesigns.html" target="_blank">Details</a>
		         <a class="popup-modal-dismiss">Close</a>
            </div>

	      </div><!-- modal-05 End -->

         <div id="modal-06" class="popup-modal mfp-hide">

		      <img class="scale-with-grid" src="<?=base_url();?>/assets/images/portfolio/modals/m-girl.jpg" alt="" />

		      <div class="description-box">
			      <h4>Girl</h4>
			      <p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit.</p>
               <span class="categories"><i class="fa fa-tag"></i>Photography</span>
		      </div>

            <div class="link-box">
               <a href="http://srikrishnacommunication.com/Giridesigns.html" target="_blank">Details</a>
		         <a class="popup-modal-dismiss">Close</a>
            </div>

	      </div><!-- modal-06 End -->

         <div id="modal-07" class="popup-modal mfp-hide">

		      <img class="scale-with-grid" src="<?=base_url();?>/assets/images/portfolio/modals/m-origami.jpg" alt="" />

		      <div class="description-box">
			      <h4>Origami</h4>
			      <p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit.</p>
               <span class="categories"><i class="fa fa-tag"></i>Branding, Illustration</span>
		      </div>

            <div class="link-box">
               <a href="http://srikrishnacommunication.com/Giridesigns.html" target="_blank">Details</a>
		         <a class="popup-modal-dismiss">Close</a>
            </div>

	      </div><!-- modal-07 End -->

         <div id="modal-08" class="popup-modal mfp-hide">

		      <img class="scale-with-grid" src="<?=base_url();?>/assets/images/portfolio/modals/m-retrocam.jpg" alt="" />

		      <div class="description-box">
			      <h4>Retrocam</h4>
			      <p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit.</p>
               <span class="categories"><i class="fa fa-tag"></i>Webdesign, Photography</span>
		      </div>

            <div class="link-box">
               <a href="http://srikrishnacommunication.com/Giridesigns.html" target="_blank">Details</a>
		         <a class="popup-modal-dismiss">Close</a>
            </div>

	      </div><!-- modal-01 End -->


      </div> <!-- row End -->

   </section> <!-- Portfolio Section End-->


   <!-- Call-To-Action Section
   ================================================== -->
   <section id="call-to-action">

      <div class="row">

         <div class="two columns header-col">

            <h1><span>Get Hosting.</span></h1>

         </div>

         <div class="seven columns">

            <h2><span class="lead">Hadir Di Kota-Kota Besar</span></h2>
            <p><span class="lead">Saat ini kami telah hadir di beberapa kota besar di Indonesia </span></p>

         </div>

         <div class="three columns action">



         </div>

      </div>

   </section> <!-- Call-To-Action Section End-->


   <!-- Monitoring Section
   ================================================== -->
   <section id="monitoring">

      <div id="map"></div>

   </section> <!-- Monitoring Section End-->

   <!-- Penawaran Section
   ================================================== -->
   <section id="penawaran">
      <div class="row">
        <img alt="" src="<?= base_url()?>assets/images/motorbike.png" width="256px" height="256px">
        <div class="columns download">
           <p>
             <p><font size="+2">Punya sepeda motor tidak terpakai?<br>Jadilah Mitra Kami.</font></p>
              <a href="#" class="button"><i class="fa fa-daftar"></i>Menjadi Mitra</a>
           </p>
        </div>
        </div>

         </div> <!-- end .main-col -->

      </div>

   </section> <!-- About Section End-->

   <!-- Contact Section
   ================================================== -->

   <section id="contact">

         <div class="row section-head">

            <div class="two columns header-col">

               <h1><span>Get In Touch.</span></h1>

            </div>

            <div class="ten columns">

                  <p class="lead">Kirimkan pertanyaan, kritik, maupun saran Anda pada kolom pesan yang telah kami sediakan.<br> Atau emailkan ke alamat support@tandebike.com
                  </p>

            </div>

         </div>

         <div class="row">

            <div class="eight columns">

               <!-- form -->
               <form action="" method="post" id="contactForm" name="contactForm">
					<fieldset>

                  <div>
						   <label for="contactName">Name <span class="required">*</span></label>
						   <input type="text" value="" size="35" id="contactName" name="contactName">
                  </div>

                  <div>
						   <label for="contactEmail">Email <span class="required">*</span></label>
						   <input type="text" value="" size="35" id="contactEmail" name="contactEmail">
                  </div>

                  <div>
						   <label for="contactSubject">Subject</label>
						   <input type="text" value="" size="35" id="contactSubject" name="contactSubject">
                  </div>

                  <div>
                     <label for="contactMessage">Message <span class="required">*</span></label>
                     <textarea cols="50" rows="15" id="contactMessage" name="contactMessage"></textarea>
                  </div>

                  <div>
                     <button class="submit">Submit</button>
                     <span id="image-loader">
                        <img alt="" src="images/loader.gif">
                     </span>
                  </div>

					</fieldset>
				   </form> <!-- Form End -->

               <!-- contact-warning -->
               <div id="message-warning"> Error boy</div>
               <!-- contact-success -->
				   <div id="message-success">
                  <i class="fa fa-check"></i>Your message was sent, thank you!<br>
				   </div>

            </div>


            <aside class="four columns footer-widgets">

               <div class="widget widget_contact">

					   <h4>Address and Phone</h4>
					   <p class="address">
               Centennial Tower,<br>
               Jalan Gatot Subroto,<br>
               No.27 Lantai 29, <br>
						   Jakarta Selatan 12950.<br>
						   <span>+62 813 8222 6439</span>
					   </p>

				   </div>

            </aside>

      </div>

   </section> <!-- Contact Section End-->

   <!-- About Section
   ================================================== -->
   <section id="about">

      <div class="row">

         <div class="nine columns main-col">

            <h2>Tentang Kami</h2>

            <p>Tandebike merupakan aplikasi sewa rental<br>sepeda motor berbasis motorbike sharing secara lepas<br>kunci menggunakan aplikasi.
            </p>

            <div class="row">

               <div class="columns contact-details">

                  <h2>Contact Details</h2>
                  <p class="address">
               <span>Mochtar Riyadi Plaza Quantum University of Indonesia,<br>
                     Jl. Prof. DR. Ir Somantri Brodjonegoro, Kukusan, Beji, Kota Depok, Jawa Barat 16425
                     </span><br>
               <span>+62 823 11206710</span><br>
                     <span>support@tandebike.id</span>
             </p>

               </div>

            </div> <!-- end row -->

         </div> <!-- end .main-col -->

      </div>

   </section> <!-- About Section End-->

   <!-- footer
   ================================================== -->
   <footer>

      <div class="row">

         <div class="twelve columns">

            <ul class="social-links">
              <li><a href="https://www.facebook.com/mountableid.id"><i class="fa fa-facebook"></i></a></li>
              <li><a href="https://twitter.com/mountableid"><i class="fa fa-twitter"></i></a></li>
              <li><a href="https://www.linkedin.com/company/mountable/about/"><i class="fa fa-linkedin"></i></a></li>
              <li><a href="https://www.instagram.com/mountable.id/"><i class="fa fa-instagram"></i></a></li>
              <li><a href="#"><i class="fa fa-telegram"></i></a></li>
            </ul>

            <ul class="copyright">
               <li>TandeBike &copy; Copyright 2019</li>
               <li>Design by <a href="https://www.linkedin.com/in/yudachandrawiguna/" title="Styleshout" target="_blank">Yuda Chandra W</a></li>
            </ul>

         </div>

         <div id="go-top"><a class="smoothscroll" title="Back to Top" href="#home"><i class="icon-up-open"></i></a></div>

      </div>

   </footer> <!-- Footer End-->

   <!-- Java Script
   ================================================== -->
   <script>window.jQuery || document.write('<script src="<?= base_url();?>assets/js/jquery-1.10.2.min.js"><\/script>')</script>
   <script type="text/javascript" src="<?= base_url();?>assets/js/jquery-migrate-1.2.1.min.js"></script>

   <script src="<?= base_url();?>assets/js/jquery.flexslider.js"></script>
   <script src="<?= base_url();?>assets/js/waypoints.js"></script>
   <script src="<?= base_url();?>assets/js/jquery.fittext.js"></script>
   <script src="<?= base_url();?>assets/js/magnific-popup.js"></script>
   <script src="<?= base_url();?>assets/js/init.js"></script>
    <script>
	// Initialize and add the map
	function initMap() {
	  // The location of Uluru
	  var uluru = {lat: -6.2774855, lng: 106.7688571};
	  var mrpq = {lat: -6.3621931, lng: 106.82130041};
	  // The map, centered at Uluru
	  var map = new google.maps.Map(
		  document.getElementById('map'), {zoom: 10, center: uluru});
	  // The marker, positioned at Uluru
		  var contentString = 
      '<div id="bodyContent">'+
      '<p>Motor 1</p>'+
      '</div>'+
	  '<p>Plat Nomor = B 1234 ABC</p>'+
	  '</div>'+		  
	  '<p>Status = Active</p>';
			var contentString2 = 
      '<div id="bodyContent">'+
      '<p>Motor 2</p>'+
      '</div>'+
	  '<p>Plat Nomor = B 4321 CBA</p>'+
	  '</div>'+		  
	  '<p>Status = Non-Active</p>';
	  var marker = new google.maps.Marker({position: uluru, map: map});
	  var marker2 = new google.maps.Marker({position: mrpq, map: map});
	  var infowindow = new google.maps.InfoWindow({
    	content: contentString
  	  });
	  var infowindow2 = new google.maps.InfoWindow({
    	content: contentString2
  	  });
	  marker.addListener('click', function() {
      	infowindow.open(map, marker);
  	  });
		marker2.addListener('click', function() {
		infowindow2.open(map, marker2);
  	  });
	}
		</script>
		<!--Load the API from the specified URL
		* The async attribute allows the browser to render the page while the API loads
		* The key parameter will contain your own API key (which is not needed for this tutorial)
		* The callback parameter executes the initMap() function
		-->
		<script async defer
		src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCFagTsfeYd8Qoj_fXc_qg7gjn78UaD9JY&callback=initMap">
		</script>

</body>

</html>
