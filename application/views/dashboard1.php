  <!DOCTYPE html>
  <html>
    <head>
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

      <!-- my css -->
      <link rel="stylesheet" type="text/css" href="css/style.css">

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

      <title>Ruang Ide Nusantara</title>
    </head>

    <body id="home" class="scrollspy">

      <!-- NAVBAR -->
      <div class="navbar-fixed">
        <nav class="blue darken-2">
          <div class="container">
            <div class="nav-wrapper">
              <a href="#home" class="brand-logo">Ruang Ide Nusantara</a>
               <a href="#" data-target="mobile-nav" class="sidenav-trigger"><i class="material-icons">menu</i></a>
              <ul class="right hide-on-med-and-down">
                <li><a href="#about">About Us</a></li>
                <li><a href="#client">Clients</a></li>
                <li><a href="#services">Services</a></li>
                <li><a href="#portofolio">Portofolio</a></li>
                <li><a href="#contact">Contact Us</a></li>
                <li><a href="<?=base_url()?>Auth">Login</a></li>
              </ul>
            </div>
          </div>
        </nav>
      </div>

      <!-- sidenav -->
      <ul class="sidenav" id="mobile-nav">
        <li><a href="#about">About Us</a></li>
        <li><a href="#client">Clients</a></li>
        <li><a href="#services">Services</a></li>
        <li><a href="#portfolio">Portofolio</a></li>
        <li><a href="#contact">Contact Us</a></li>
        <li><a href="#">Login</a></li>
      </ul>

      <!-- slider -->
      <div class="slider">
        <ul class="slides">
          <li>
            <img src="img/slider/1.png">
            <div class="caption left-align">
              <h3>ENLIGHTENING YOUR BUSINESS TO ACHIEVE YOUR OBJECTIVE</h3>
              <h5 class="light grey-text text-lighten-3">Teamwork is number one.</h5>
            </div>
          </li>

          <li>
            <img src="img/slider/2.png">
            <div class="caption right-align">
              <h3>ENLIGHTENING YOUR BUSINESS TO ACHIEVE YOUR OBJECTIVE</h3>
              <h5 class="light grey-text text-lighten-3">Teamwork is number one.</h5>
            </div>
          </li>

          <li>
            <img src="img/slider/3.png">
            <div class="caption center-align">
              <h3>ENLIGHTENING YOUR BUSINESS TO ACHIEVE YOUR OBJECTIVE</h3>
              <h5 class="light grey-text text-lighten-3">Teamwork is number one.</h5>
            </div>
          </li>
        </ul>
      </div>

      <!-- about us -->
      <section id="about" class="about scrollspy">
        <div class="container">
          <div class="row">
            <h3 class="center light grey-text text-darken-3">About Us</h3>
            <div class="col m6 light">
              <h5>We Are Professional</h5>
              <p>We give you parameters to measure employee's career</p>
            </div>

            <div class="col m6 light">
              <p>WEB DEVELOPMENT</p>
                <div class="progress">
                    <div class="determinate" style="width: 30%"></div>
                </div>

              <p>CONTENT CREATOR</p>
                <div class="progress">
                    <div class="determinate" style="width: 90%"></div>
                </div>

              <p>DESIGN</p>
                <div class="progress">
                    <div class="determinate" style="width: 95%"></div>
                </div>

            </div>
          </div>
        </div>
      </section>

      <!-- clients -->
      <div id="client" class="parallax-container scrollspy">
        <div class="parallax"><img src="img/slider/4.png"></div>

        <div class="container clients">
          <h3 class="center light white-text">Our Clients</h3>
          <div class="row">
            <div class="col m4 s12 center">
              <img src="img/clients/gojek.png">
            </div>
            <div class="col m4 s12 center">
              <img src="img/clients/tokopedia.png">
            </div>
            <div class="col m4 s12 center">
              <img src="img/clients/traveloka.png">
            </div>
          </div>
        </div>
      </div>

      <!-- services -->
      <section id="services" class="services grey lighten-3 scrollspy">
        <div class="container">
          <div class="row">
            <h3 class="light center grey-text text-darken-3">Our Services</h3>
            <div class="col m4 s12">
              <div class="card-panel center">
                <i class="material-icons medium">desktop_windows</i>
                <h5>Web Development</h5>
                <p>Web Development</p>
              </div>
            </div>

            <div class="col m4 s12">
              <div class="card-panel center">
                <i class="material-icons medium">developer_mode</i>
                <h5>Content Creator</h5>
                <p>Content Creator</p>
              </div>
            </div>

            <div class="col m4 s12">
              <div class="card-panel center">
                <i class="material-icons medium">brush</i>
                <h5>Design</h5>
                <p>Design</p>
              </div>
            </div>

          </div>
        </div>
      </section>

      <!-- portofolio -->
      <section id="portofolio" class="portofolio scrollspy">
        <div class="container">
          <h3 class="light center grey-text text-darken-3">Portofolio</h3>
          <div class="row">
            <div class="col m3 s12">
              <img src="img/portfolio/1.png" class="responsive-img materialboxed">
            </div>
            <div class="col m3 s12">
              <img src="img/portfolio/2.png" class="responsive-img materialboxed">
            </div>
            <div class="col m3 s12">
              <img src="img/portfolio/3.png" class="responsive-img materialboxed">
            </div>
            <div class="col m3 s12">
              <img src="img/portfolio/4.png" class="responsive-img materialboxed">
            </div>
          </div>

          <div class="row">
            <div class="col m3 s12">
              <img src="img/portfolio/5.png" class="responsive-img materialboxed">
            </div>
            <div class="col m3 s12">
              <img src="img/portfolio/6.png" class="responsive-img materialboxed">
            </div>
            <div class="col m3 s12">
              <img src="img/portfolio/1.png" class="responsive-img materialboxed">
            </div>
            <div class="col m3 s12">
              <img src="img/portfolio/2.png" class="responsive-img materialboxed">
            </div>
          </div>
        </div>
      </section>

      <!-- contact us -->
      <section id="contact" class="contact grey lighten-3 scrollspy">
        <div class="container">
          <h3 class="light grey-text text-darken-3 center">Contact Us</h3>
          <div class="row">
            <div class="col m5 s12">
              <div class="card-panel blue darken-2 center white-text">
                <i class="material-icons">email</i>
                <h5>Contact</h5>
                <p>Silahkan hubungi kami melalui mmail</p>
              </div>
              <ul class="collection with-header">
                <li class="collection-header"><h4>Our Office</h4></li>
                <li class="collection-item">Ruang Ide Nusantara</li>
                <li class="collection-item">Margonda Depok</li>
                <li class="collection-item">West Java, Indonesia</li>
              </ul>
            </div>

            <div class="col m7 s12">
              <form>
                <div class="card-panel">
                  <h5>Please fill out this form</h5>
                  <div class="input-field">
                    <input type="text" name="name" id="name" required class="validate">
                    <label for="name">Name</label>
                  </div>
                  <div class="input-field">
                    <input type="email" name="email" id="email" class="validate">
                    <label for="email">Email</label>
                  </div>
                  <div class="input-field">
                    <input type="text" name="phone" id="phone" required class="validate">
                    <label for="phone">Phone Number</label>
                  </div>
                  <div class="input-field">
                    <textarea name="message" id="message" class="materialize-textarea"></textarea>
                    <label for="message">Message</label>
                  </div>
                  <button type="submit" class="btn blue darken-2">Send</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </section>

      <!-- footer -->
      <footer class="blue darken-2 white-text center">
        <p class="flow-text">Copyright &copy; Ruang Ide Nusantara <?php echo date('Y')?></p>
      </footer>

      <!--JavaScript at end of body for optimized loading-->
      <script type="text/javascript" src="js/materialize.min.js"></script>
      <script>
        // buat navbar
        const sideNav = document.querySelectorAll('.sidenav');
        M.Sidenav.init(sideNav);

        // buat slider
        const slider = document.querySelectorAll('.slider');
        M.Slider.init(slider, {
          indicators: false,
          height: 500,
          transition: 600,
          interval: 3000
        });

        const parallax = document.querySelectorAll('.parallax');
        M.Parallax.init(parallax);

        const materialbox = document.querySelectorAll('.materialboxed');
        M.Materialbox.init(materialbox);

        const scroll = document.querySelectorAll('.scrollspy');
        M.Scrollspy.init(scroll, {
          scrollOffset: 50
        });
      </script>

      <script type="text/javascript">
        function add() {
          $.ajax({
            type: 'POST',
            url: '<?php echo base_url() ?>auth/login',
            beforeSend: function(data) {
              $.blockUI({
                message: 'Mohon tunggu !',
                overlayCSS: {
                  backgroundColor: '#1b2024',
                  opacity: 0.8,
                  zIndex: 1200,
                  cursor: 'wait'
                },
                css: {
                  border: 0,
                  color: '#fff',
                  zIndex: 1201,
                  padding: 0,
                  backgroundColor: 'transparent'
                }
              });
            },
            error: function (data) {
              $.unblockUI();
              alert('Opps, gagal memuat data!', 'info')
            },
            success: function (data) {
              $.unblockUI();
              $('#content_data').html(data);
            }
          })
        }
      </script>
    </body>
</html>