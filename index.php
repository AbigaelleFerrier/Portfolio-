<!DOCTYPE html>
<html lang="fr">

        <?php include'php/head.php'; ?>


<body>

    <?php include 'php/nav.php'; ?>

    <div id="index-banner" class="parallax-container">
        <div class="section no-pad-bot">
            <div class="container">
                <br><br>
                <h1 class="header center teal-text text-lighten-2"><i class="fas fa-terminal"></i> Portfolio</h1>
                
                <div class="row center">
                    <h5>Ce site comprend :
                      <span
                         class="txt-rotate"
                         data-period="2000"
                         data-rotate='[ "mes Stages", "des Projets", "mon Experience", "ect..." ]'></span>
                    </h5>
                </div>
            
            <div class="row center">
                <a href="#start" id="download-button" class="btn-large waves-effect waves-light teal lighten-1 js-scrollTo">Do it</a>
            </div>
            <br><br>
        </div>
    </div>



    <div class="parallax"><img src="background1.jpg" alt="Unsplashed background img 1"></div>
    </div>


    <div class="container" >
        <div class="section" id="start">
            <!--   Header   -->
                <div class="row">
                    <div class="col s12">
                        <div class="card-panel grey lighten-5 z-depth-1">
                            <div class="row valign-wrapper">
                                <div class="col s2">
                                  <img src="images/moi.jpg" alt="" class="circle responsive-img"> <!-- notice the "circle" class -->
                                </div>

                                <div class="col s10">
                                    <h3>Cirill Ferrier</h3>
                                    <span class="black-text">
                                        Auto-entrepreneur & étudiant en Bts Sio
                                    </span>

                                    <div class="progress">
                                        <div class="determinate" style="width: 70%"></div>
                                    </div>
                                    <div class="progress">
                                        <div class="determinate" style="width: 70%"></div>
                                    </div>
                                </div>
                          </div>
                        </div>
                    </div>
                </div>

            <!--   Icon Section   -->
                <div class="row">
                    <div class="col s12 m4">
                        <div class="icon-block">
                            <h2 class="center brown-text"><i class="material-icons">flash_on</i></h2>
                            <h5 class="center">Speeds up development</h5>

                            <p class="light">We did most of the heavy lifting for you to provide a default stylings that incorporate our custom components. Additionally, we refined animations and transitions to provide a smoother experience for developers.</p>
                        </div>
                    </div>

                    <div class="col s12 m4">
                        <div class="icon-block">
                            <h2 class="center brown-text"><i class="material-icons">group</i></h2>
                            <h5 class="center">User Experience Focused</h5>

                            <p class="light">By utilizing elements and principles of Material Design, we were able to create a framework that incorporates components and animations that provide more feedback to users. Additionally, a single underlying responsive system across all platforms allow for a more unified user experience.</p>
                        </div>
                    </div>

                    <div class="col s12 m4">
                        <div class="icon-block">
                            <h2 class="center brown-text"><i class="material-icons">settings</i></h2>
                            <h5 class="center">Easy to work with</h5>

                            <p class="light">We have provided detailed documentation as well as specific code examples to help new users get started. We are also always open to feedback and can answer any questions a user may have about Materialize.</p>
                        </div>
                    </div>
                </div>
        </div>
    </div>
    
    <div class="section">
        <div class="container">
             <hr>
            <h3><blockquote>Mon travail :</blockquote></h3>
        </div> 
           
            <!--   PortFolio -->
                <div class="row" id="PortFolio">
                    <!-- 1 -->
                        <a class="modal-trigger col l3 m6 s6 modalBtn" href="#modal1">
                            <h3>MGVPC</h3>
                            <p>Application de plateforme Logistique</p>
                        </a>
                        <a class="modal-trigger col l3 m6 s6 modalBtn" href="#ArtsPluriel">
                            <h3>Arts Pluriel</h3>
                            <p>Site web de mise en relation d'artiste</p>
                        </a>
                        <a class="modal-trigger col l3 m6 s6 modalBtn" href="#modal1">
                            <h3>FatyConcept</h3>
                            <p>Site E-Commerce de stickers</p>
                        </a>
                        <a class="modal-trigger col l3 m6 s6 modalBtn" href="#modal1">
                            <h3>FatyConcept</h3>
                            <p>Site E-Commerce de stickers</p>
                        </a>

                    <!-- 2 -->
                        <a class="modal-trigger col l3 m6 s6 modalBtn" href="#modal1">
                            <h3>MGVPC</h3>
                            <p>Application de plateforme Logistique</p>
                        </a>
                        <a class="modal-trigger col l3 m6 s6 modalBtn" href="#ArtsPluriel">
                            <h3>Arts Pluriel</h3>
                            <p>Site web de mise en relation d'artiste</p>
                        </a>
                        <a class="modal-trigger col l3 m6 s6 modalBtn" href="#modal1">
                            <h3>FatyConcept</h3>
                            <p>Site E-Commerce de stickers</p>
                        </a>
                        <a class="modal-trigger col l3 m6 s6 modalBtn" href="#modal1">
                            <h3>FatyConcept</h3>
                            <p>Site E-Commerce de stickers</p>
                        </a>

                    <!-- 3 -->
                        <a class="modal-trigger col l3 m6 s6 modalBtn" href="#modal1">
                            <h3>MGVPC</h3>
                            <p>Application de plateforme Logistique</p>
                        </a>
                        <a class="modal-trigger col l3 m6 s6 modalBtn" href="#ArtsPluriel">
                            <h3>Arts Pluriel</h3>
                            <p>Site web de mise en relation d'artiste</p>
                        </a>
                        <a class="modal-trigger col l3 m6 s6 modalBtn" href="#modal1">
                            <h3>FatyConcept</h3>
                            <p>Site E-Commerce de stickers</p>
                        </a>
                        <a class="modal-trigger col l3 m6 s6 modalBtn" href="#modal1">
                            <h3>FatyConcept</h3>
                            <p>Site E-Commerce de stickers</p>
                        </a>


                </div>

            <!--   Stage   -->
                <div class="row" id="Stage">
                    
                </div>
        </div>
    



<?php
    include 'php/pageModal.php';
    include 'php/footer.php';
    include 'php/script.php';
?>

<script type="text/javascript">
    document.getElementById('PortFolio').style = "display : inherit";

    /* JS */
        var TxtRotate = function(el, toRotate, period) {
          this.toRotate = toRotate;
          this.el = el;
          this.loopNum = 0;
          this.period = parseInt(period, 10) || 2000;
          this.txt = '';
          this.tick();
          this.isDeleting = false;
        };

        TxtRotate.prototype.tick = function() {
          var i = this.loopNum % this.toRotate.length;
          var fullTxt = this.toRotate[i];

          if (this.isDeleting) {
            this.txt = fullTxt.substring(0, this.txt.length - 1);
          } else {
            this.txt = fullTxt.substring(0, this.txt.length + 1);
          }

          this.el.innerHTML = '<span class="wrap">'+this.txt+'</span>';

          var that = this;
          var delta = 300 - Math.random() * 100;

          if (this.isDeleting) { delta /= 2; }

          if (!this.isDeleting && this.txt === fullTxt) {
            delta = this.period;
            this.isDeleting = true;
          } else if (this.isDeleting && this.txt === '') {
            this.isDeleting = false;
            this.loopNum++;
            delta = 500;
          }

          setTimeout(function() {
            that.tick();
          }, delta);
        };

        window.onload = function() {
          var elements = document.getElementsByClassName('txt-rotate');
          for (var i=0; i<elements.length; i++) {
            var toRotate = elements[i].getAttribute('data-rotate');
            var period = elements[i].getAttribute('data-period');
            if (toRotate) {
              new TxtRotate(elements[i], JSON.parse(toRotate), period);
            }
          }
          // INJECT CSS
          var css = document.createElement("style");
          css.type = "text/css";
          css.innerHTML = ".txt-rotate > .wrap { border-right: 0.08em solid #666 }";
          document.body.appendChild(css);
        };
</script>


</body>
</html>
