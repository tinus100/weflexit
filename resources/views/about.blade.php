<!DOCTYPE html>
<html lang="en">


@extends('layout')

@section('content')

    <!-- Page Content -->
    <!-- Heading Starts Here -->
    <div class="page-heading header-text">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h1>Over Ons</h1>
            <p><a href="index.html">Home</a> / <span>Over Ons</span></p>
          </div>
        </div>
      </div>
    </div>
    <!-- Heading Ends Here -->


    <!-- About Us Starts Here -->
    <div class="about-us">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <div class="left-image">
              <img src="assets/images/our-team.jpg" alt="">
            </div>
          </div>
          <div class="col-md-6">
            <div class="right-content">
              <div class="section-heading">
                <span>Over Ons</span>
                <h2>Achtergrond van het bedrijf</h2>
                <p>Duis sit amet nibh non sapien tincidunt bibendum. Curabitur rutrum justo id leo ornare, suscipit lobortis augue volutpat. Sed ligula arcu, interdum eu magna eget, tristique aliquet nibh.</p>
              </div>
              <div id='tabs'>
                  <ul>
                    <li><a href='#tabs-1'>fdfas</a></li>
                    <li><a href='#tabs-2'>Onze Werkwijzen</a></li>
                    <li><a href='#tabs-3'>Ons Doel</a></li>
                  </ul>
                  <section class='tabs-content'>
                    <article id='tabs-1'>
                      <p>Ut elementum a elit sed tristique. Pellentesque sed semper erat. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aenean quam erat, rutrum ut malesuada a, commodo vitae lectus. Integer volutpat sapien in arcu fringilla, ac eleifend est facilisis.
                      <br><br>Phasellus finibus lacus eu scelerisque rutrum. Duis purus eros, blandit ultricies iaculis in, commodo quis lacus. Pellentesque interdum varius enim nec accumsan.</p>
                    </article>
                    <article id='tabs-2'>
                      <p>Aenean molestie, odio quis viverra ultricies, leo tellus lacinia neque, sit amet maximus tortor nunc aliquet felis. Duis sit amet nibh non sapien tincidunt bibendum. Curabitur rutrum justo id leo ornare, suscipit lobortis augue volutpat.
                      <br><br>Sed ligula arcu, interdum eu magna eget, tristique aliquet nibh. Aenean sodales justo vitae ex pharetra, vitae tincidunt dolor condimentum. Cras vel mattis risus.</p>
                    </article>
                    <article id='tabs-3'>
                      <p>Fusce in semper velit, at tempus augue. Morbi quis auctor ipsum, ut accumsan neque. Vivamus dapibus ipsum placerat ante commodo, eget suscipit tortor hendrerit. Quisque lacinia sed velit et maximus.
                      <br><br>Quisque dictum, lacus a malesuada finibus, arcu magna luctus risus, eu accumsan risus elit vitae lacus. Vestibulum et lorem non erat efficitur iaculis ut nec nibh. Vestibulum mauris ipsum, tempor tincidunt justo sit amet, bibendum tincidunt dui.</p>
                    </article>
                  </section>
                </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- About Us Ends Here -->


    <!-- Team Starts Here -->
    <div class="team-section">
      <div class="container">
        <div class="row">
          <div class="col-md-8 offset-md-2">
            <div class="section-heading">
              <span>Ons Team</span>
              <h2>Meet the greatest people</h2>
              <p>Integer blandit, tellus varius vulputate cursus, purus orci tincidunt tortor, eget tincidunt elit justo non leo. Donec mollis nulla id est suscipit, ut laoreet nibh faucibus.</p>
            </div>
          </div>
          <div class="col-md-4 col-sm-6 col-xs-12">
            <div class="team-item">
              <img src="assets/images/foto1.jpg" alt="">
              <div class="down-content">
                <h4>Tijn Traas</h4>
                <span>Eigenaar/Developer</span>
              </div>
            </div>
          </div>
          <!-- <div class="col-md-4 col-sm-6 col-xs-12">
            <div class="team-item">
              <img src="assets/images/team-02.jpg" alt="">
              <div class="down-content">
                <h4>Mary Morris</h4>
                <span>Co-Founder</span>
              </div>
            </div>
          </div>
          <div class="col-md-4 col-sm-6 col-xs-12">
            <div class="team-item">
              <img src="assets/images/team-03.jpg" alt="">
              <div class="down-content">
                <h4>George White</h4>
                <span>Co-Founder</span> -->
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Team Ends Here -->


    <!-- Testimonials Starts Here -->
    <<div class="testimonials-section">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <span>Testimonials</span>
              <h2>What they say about us</h2>
            </div>
          </div>
          <div class="col-md-10 offset-md-1">
            <div class="owl-testimonials owl-carousel">
              <div class="testimonial-item">
                <div class="icon">
                  <i class="fa fa-quote-right"></i>
                </div>
                <p>"Ut elementum a elit sed tristique. Pellentesque sed semper erat. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aenean quam erat, rutrum ut malesuada."</p>
                <h4>William Smith</h4>
                <span>New Co-Founder</span>
              </div>
              <div class="testimonial-item">
                <div class="icon">
                  <i class="fa fa-quote-right"></i>
                </div>
                <p>"Quisque lacinia sed velit et maximus. Quisque dictum, lacus a malesuada finibus, arcu magna luctus risus, eu accumsan risus elit vitae lacus."</p>
                <h4>Vinny Smart</h4>
                <span>Digital Marketer</span>
              </div>
              <div class="testimonial-item">
                <div class="icon">
                  <i class="fa fa-quote-right"></i>
                </div>
                <p>"Vestibulum mauris ipsum, tempor tincidunt justo sit amet, bibendum tincidunt dui. Aenean molestie, odio quis viverra ultricies, leo tellus lacinia neque, sit amet maximus tortor nunc aliquet felis."</p>
                <h4>Trevor Liam</h4>
                <span>Technology Chef</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Testimonials Ends Here -->


    <!-- Footer Starts Here -->
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="footer-item">
              <div class="footer-heading">
                <h2>About Us</h2>
              </div>
              <p>Host Cloud is provided by TemplateMo for free of charge. Anyone can download and use this CSS Bootstrap template for commercial purposes.</p>
            </div>
          </div>

          <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="footer-item">
              <div class="footer-heading">
                <h2>Hosting Plans</h2>
              </div>
              <ul class="footer-list">
                <li><a href="#">Basic Cloud 5X</a></li>
                <li><a href="#">Cloud VPS 10X</a></li>
                <li><a href="#">Advanced Cloud</a></li>
                <li><a href="#">Custom Designs</a></li>
                <li><a href="#">Special Solutions</a></li>
              </ul>
            </div>
          </div>


          <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="footer-item">
              <div class="footer-heading">
                <h2>Useful Links</h2>
              </div>
              <ul class="footer-list">
                <li><a href="#">Cloud Hosting Platform</a></li>
                <li><a href="#">Light Speed Zone</a></li>
                <li><a href="#">Content Delivery Network</a></li>
                <li><a href="#">Customer Support</a></li>
                <li><a href="#">Latest News</a></li>
              </ul>
            </div>
          </div>

          <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="footer-item">
              <div class="footer-heading">
                <h2>More Information</h2>
              </div>
              <ul class="footer-list">
                <li>Phone: <a href="#">010-020-0560</a></li>
                <li>Email: <a href="#">mail@company.com</a></li>
                <li>Support: <a href="#">support@company.com</a></li>
                <li>Website: <a href="#">www.company.com</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md-12">
            <div class="sub-footer">
              <p>Copyright &copy; 2020 Cloud Hosting Company
				- Designed by <a rel="nofollow" href="https://templatemo.com">TemplateMo</a></p>
            </div>
          </div>
        </div>
      </div>
    </footer>
    <!-- Footer Ends Here -->

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Additional Scripts -->
    <script src="assets/js/custom.js"></script>
    <script src="assets/js/owl.js"></script>
    <script src="assets/js/accordions.js"></script>

    <script language = "text/Javascript">
      cleared[0] = cleared[1] = cleared[2] = 0; //set a cleared flag for each field
      function clearField(t){                   //declaring the array outside of the
      if(! cleared[t.id]){                      // function makes it static and global
          cleared[t.id] = 1;  // you could use true and false, but that's more typing
          t.value='';         // with more chance of typos
          t.style.color='#fff';
          }
      }
    </script>

  </body>
</html>

@endsection
