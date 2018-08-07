<template>
  <div>
  <header class="header-global">
    <nav id="navbar-main" class="navbar navbar-main navbar-expand-lg navbar-transparent navbar-light">
      <div class="container">
        <a class="navbar-brand mr-lg-5" href="../index.html">
          <!-- <img :src="public_path + '/images/img/brand/white.png'" alt=""> -->
          <img :src="public_path + '/images/logo_brand.png'" alt="Nexseed">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar_global" aria-controls="navbar_global" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="navbar-collapse collapse" id="navbar_global">
          <div class="navbar-collapse-header">
            <div class="row">
              <div class="col-6 collapse-brand">
                <a href="../index.html">
                  <img :src="public_path + '/images/logo_brand.png'" alt="">
                </a>
              </div>
              <div class="col-6 collapse-close">
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbar_global" aria-controls="navbar_global" aria-expanded="false" aria-label="Toggle navigation">
                  <span></span>
                  <span></span>
                </button>
              </div>
            </div>
          </div>
          <ul class="navbar-nav navbar-nav-hover align-items-lg-center">
            <li class="nav-item dropdown">
              <a href="#" class="nav-link" data-toggle="dropdown" role="button">
                <i class="ni ni-ui-04 d-lg-none"></i>
                <span class="nav-link-inner--text">Companies</span>
              </a>
              <div class="dropdown-menu dropdown-menu-xl">
                <div class="dropdown-menu-inner">
                  <a href="https://demos.creative-tim.com/argon-design-system/docs/getting-started/overview.html" class="media d-flex align-items-center">
                    <div class="icon icon-shape bg-gradient-primary rounded-circle text-white">
                      <i class="ni ni-spaceship"></i>
                    </div>
                    <div class="media-body ml-3">
                      <h6 class="heading text-primary mb-md-1">Getting started</h6>
                      <p class="description d-none d-md-inline-block mb-0">Get started with Bootstrap, the world's most popular framework for building responsive sites.</p>
                    </div>
                  </a>
                  <a href="https://demos.creative-tim.com/argon-design-system/docs/components/alerts.html" class="media d-flex align-items-center">
                    <div class="icon icon-shape bg-gradient-warning rounded-circle text-white">
                      <i class="ni ni-ui-04"></i>
                    </div>
                    <div class="media-body ml-3">
                      <h5 class="heading text-warning mb-md-1">Components</h5>
                      <p class="description d-none d-md-inline-block mb-0">Learn how to use Argon compiling Scss, change brand colors and more.</p>
                    </div>
                  </a>
                </div>
              </div>
            </li>
            <li class="nav-item dropdown">
              <a href="#" class="nav-link" data-toggle="dropdown" role="button">
                <i class="ni ni-collection d-lg-none"></i>
                <span class="nav-link-inner--text">Openings</span>
              </a>
              <div class="dropdown-menu">
                <a href="../examples/landing.html" class="dropdown-item">Landing</a>
                <a href="../examples/profile.html" class="dropdown-item">Profile</a>
                <a href="../examples/login.html" class="dropdown-item">Login</a>
                <a href="../examples/register.html" class="dropdown-item">Register</a>
              </div>
            </li>
          </ul>
          <ul class="navbar-nav align-items-lg-center ml-lg-auto">
            <template v-if="authenticated">
              <li class="nav-item">
                <router-link :to="{ name: 'home' }">
                  {{ $t('home') }}
                </router-link>
              </li>
            </template>
            <template v-else>
              <li class="nav-item d-none d-lg-block ml-lg-4">
                <router-link :to="{ name: 'login' }">
                  {{ $t('login') }}
                </router-link>
                <router-link :to="{ name: 'register' }">
                  {{ $t('register') }}
                </router-link>
              </li>
            </template>
          </ul>
        </div>
      </div>
    </nav>
  </header>
  <main>
    <div class="position-relative">
      <!-- shape Hero -->
      <section class="section-shaped my-0">
        <div class="shape shape-style-1 shape-default shape-skew">
          <span></span>
          <span></span>
          <span></span>
          <span></span>
          <span></span>
          <span></span>
          <span></span>
          <span></span>
          <span></span>
        </div>
        <div class="container shape-container d-flex">
          <div class="col px-0">
            <div class="row">
              <div class="col-lg-6">
                <h1 class="display-3  text-white">Quality job search
                  <span>for programmers</span>
                </h1>
                <p class="lead  text-white">Build your professional identity online and stay connected with opportunities.</p>
                <!-- <div class="btn-wrapper">
                  <a href="https://demos.creative-tim.com/argon-design-system/docs/components/alerts.html" class="btn btn-info btn-icon mb-3 mb-sm-0">
                    <span class="btn-inner--icon"><i class="fa fa-code"></i></span>
                    <span class="btn-inner--text">Components</span>
                  </a>
                  <a href="https://www.creative-tim.com/product/argon-design-system" class="btn btn-white btn-icon mb-3 mb-sm-0">
                    <span class="btn-inner--icon"><i class="ni ni-cloud-download-95"></i></span>
                    <span class="btn-inner--text">Download HTML</span>
                  </a>
                </div> -->
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- 1st Hero Variation -->
    </div>
    <section class="section section-lg pt-lg-0 mt--200">
      <div class="container slider-opening">
        <div class="row justify-content-center">
          <div class="col-lg-12">
            <div class="row row-grid">
              <div class="col-lg-4">

                <div class="card card-lift--hover shadow border-0">
                  <div class="profile">
                      <div class="profile__header">
                          <img class="profile__background" src="https://media.glassdoor.com/l/eb/60/dd/bf/interior-view.jpg" />
                          <img class="profile__picture_sl-opening" src="https://i.imgur.com/7ZOgkok.jpg" />
                      </div>
                      <div class="profile__content">
                          <div class="profile__bio">
                              <h3 class="profile__name">PHP Web developer</h3>
                          </div>
                          <div class="profile__twitter">
                              <div class="profile__twitter__stats profile__twitter__stats--followers">
                                  <span class="profile__twitter__stats__count">97,000</span>
                                  <span class="profile__twitter__stats__label">Employees</span>
                              </div>
                              <div class="profile__twitter__stats profile__twitter__stats--following">
                                  <span class="profile__twitter__stats__count">57</span>
                                  <span class="profile__twitter__stats__label">Jobs</span>
                              </div>
                              <div class="profile__twitter__follow">
                                  <button class="profile__twitter__follow__button">View jobs</button>
                              </div>
                          </div>
                      </div>
                  </div>
                </div>


              </div>
              <div class="col-lg-4">

                <div class="card card-lift--hover shadow border-0">
                  <div class="profile">
                      <div class="profile__header">
                          <img class="profile__background" src="http://negosentro.com/wp-content/uploads/2017/01/accenture-12-620x330.jpg" />
                          <img class="profile__picture_sl-opening" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRHprj7pAgUi2CNdJSIL8dpq1nZo0G8hU0jX7i-thPMI3k9iFH1" />
                      </div>
                      <div class="profile__content">
                          <div class="profile__bio">
                              <h3 class="profile__name">Python Developer</h3>
                              <!-- <p class="profile__info">American film actress known for her work in films like Lost in Translation, Vicky Cristina Barcelona, and Hitchcock.</p> -->
                          </div>
                          <!-- <div class="profile__links">
                              <a class="profile__link" href="#">
                                  <i class="profile__link__icon fa fa-map-marker"></i>
                                  <span class="profile__link__text">New York</span>
                              </a>
                              <a class="profile__link" href="#">
                                  <i class="profile__link__icon fa fa-envelope"></i>
                                  <span class="profile__link__text">Send Email </span>
                              </a>
                          </div> -->
                          <div class="profile__twitter">
                              <div class="profile__twitter__stats profile__twitter__stats--followers">
                                  <span class="profile__twitter__stats__count">97,000</span>
                                  <span class="profile__twitter__stats__label">Employees</span>
                              </div>
                              <div class="profile__twitter__stats profile__twitter__stats--following">
                                  <span class="profile__twitter__stats__count">57</span>
                                  <span class="profile__twitter__stats__label">Jobs</span>
                              </div>
                              <div class="profile__twitter__follow">
                                  <button class="profile__twitter__follow__button">View jobs</button>
                              </div>
                          </div>
                      </div>
                  </div>
                </div>

              </div>
              <div class="col-lg-4">
                <div class="card card-lift--hover shadow border-0">
                  <div class="profile">
                      <div class="profile__header">
                          <img class="profile__background" src="http://business.inquirer.net/files/2015/08/alcoves5.jpg" />
                          <img class="profile__picture_sl-opening" src="http://findonline.ph/wp-content/uploads/2017/11/Square-Ayala-Premier.jpg" />
                      </div>
                      <div class="profile__content">
                          <div class="profile__bio">
                              <h3 class="profile__name">Ruby on rails .NET Developer</h3>
                              <!-- <p class="profile__info">American film actress known for her work in films like Lost in Translation, Vicky Cristina Barcelona, and Hitchcock.</p> -->
                          </div>
                          <!-- <div class="profile__links">
                              <a class="profile__link" href="#">
                                  <i class="profile__link__icon fa fa-map-marker"></i>
                                  <span class="profile__link__text">New York</span>
                              </a>
                              <a class="profile__link" href="#">
                                  <i class="profile__link__icon fa fa-envelope"></i>
                                  <span class="profile__link__text">Send Email </span>
                              </a>
                          </div> -->
                          <div class="profile__twitter">
                              <div class="profile__twitter__stats profile__twitter__stats--followers">
                                  <span class="profile__twitter__stats__count">97,000</span>
                                  <span class="profile__twitter__stats__label">Employees</span>
                              </div>
                              <div class="profile__twitter__stats profile__twitter__stats--following">
                                  <span class="profile__twitter__stats__count">57</span>
                                  <span class="profile__twitter__stats__label">Jobs</span>
                              </div>
                              <div class="profile__twitter__follow">
                                  <button class="profile__twitter__follow__button">View jobs</button>
                              </div>
                          </div>
                      </div>
                  </div>
                </div>

              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="section section-lg">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-12">
            <div class="row row-grid">
              <div class="col-lg-4">
                <div class="card card-lift--hover shadow border-0">
                  <div class="profile">
                      <div class="profile__header">
                          <img class="profile__background" src="http://negosentro.com/wp-content/uploads/2017/01/accenture-12-620x330.jpg" />
                          <img class="profile__picture" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRHprj7pAgUi2CNdJSIL8dpq1nZo0G8hU0jX7i-thPMI3k9iFH1" />
                      </div>
                      <div class="profile__content">
                          <div class="profile__bio">
                              <h3 class="profile__name">Accenture</h3>
                          </div>

                          <div class="profile__twitter">
                              <div class="profile__twitter__stats profile__twitter__stats--followers">
                                  <span class="profile__twitter__stats__count">97,000</span>
                                  <span class="profile__twitter__stats__label">Employees</span>
                              </div>
                              <div class="profile__twitter__stats profile__twitter__stats--following">
                                  <span class="profile__twitter__stats__count">57</span>
                                  <span class="profile__twitter__stats__label">Jobs</span>
                              </div>
                              <div class="profile__twitter__follow">
                                  <button class="profile__twitter__follow__button">View company</button>
                              </div>
                          </div>
                      </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-4">
                <div class="card card-lift--hover shadow border-0">
                  <div class="profile">
                      <div class="profile__header">
                          <img class="profile__background" src="https://www.livemint.com/rf/Image-621x414/LiveMint/Period2/2016/05/02/Photos/callcentre-kpVC--621x414@LiveMint.jpg" />
                          <img class="profile__picture" src="https://botw-pd.s3.amazonaws.com/styles/logo-thumbnail/s3/052013/convergys_logo.png?itok=Lwu77IHC" />
                      </div>
                      <div class="profile__content">
                          <div class="profile__bio">
                              <h3 class="profile__name">Convergys</h3>
                          </div>
                          <div class="profile__twitter">
                              <div class="profile__twitter__stats profile__twitter__stats--followers">
                                  <span class="profile__twitter__stats__count">97,000</span>
                                  <span class="profile__twitter__stats__label">Employees</span>
                              </div>
                              <div class="profile__twitter__stats profile__twitter__stats--following">
                                  <span class="profile__twitter__stats__count">57</span>
                                  <span class="profile__twitter__stats__label">Jobs</span>
                              </div>
                              <div class="profile__twitter__follow">
                                  <button class="profile__twitter__follow__button">View company</button>
                              </div>
                          </div>
                      </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-4">
                <div class="card card-lift--hover shadow border-0">
                  <div class="profile">
                      <div class="profile__header">
                          <img class="profile__background" src="http://www.alliance.com.ph/images/news/20160505_1.png" />
                          <img class="profile__picture" src="https://s3-media4.fl.yelpcdn.com/bphoto/88ofcrzV3VrJTQbUm_Xjtw/o.jpg" />
                      </div>
                      <div class="profile__content">
                          <div class="profile__bio">
                              <h3 class="profile__name">Alliance</h3>
                              <!-- <p class="profile__info">American firm known for IT technology like Lost in Translation, Vicky Cristina Barcelona, and Hitchcock.</p> -->
                          </div>
                          <!-- <div class="profile__links">
                              <a class="profile__link" href="#">
                                  <i class="profile__link__icon fa fa-map-marker"></i>
                                  <span class="profile__link__text">New York</span>
                              </a>
                              <a class="profile__link" href="#">
                                  <i class="profile__link__icon fa fa-envelope"></i>
                                  <span class="profile__link__text">Send Email </span>
                              </a>
                          </div> -->
                          <div class="profile__twitter">
                              <div class="profile__twitter__stats profile__twitter__stats--followers">
                                  <span class="profile__twitter__stats__count">97,000</span>
                                  <span class="profile__twitter__stats__label">Employees</span>
                              </div>
                              <div class="profile__twitter__stats profile__twitter__stats--following">
                                  <span class="profile__twitter__stats__count">57</span>
                                  <span class="profile__twitter__stats__label">Jobs</span>
                              </div>
                              <div class="profile__twitter__follow">
                                  <button class="profile__twitter__follow__button">View company</button>
                              </div>
                          </div>
                      </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-12">
            <div class="row row-grid">
              <div class="col-lg-4">
                <div class="card card-lift--hover shadow border-0">
                  <div class="profile">
                      <div class="profile__header">
                          <img class="profile__background" src="http://res.cloudinary.com/hrscywv4p/image/upload/c_limit,f_auto,h_900,q_80,w_1200/v1/263321/http_s3.amazonaws.com_feather-files-aviary-prod-us-east-1_f5da8ea5e_2015-02-20_025c01d3e38340509e44f94c0db18547_aozhp1.jpg" />
                          <img class="profile__picture" src="https://liginc.co.jp/wp-content/uploads/2014/02/141.jpg" />
                      </div>
                      <div class="profile__content">
                          <div class="profile__bio">
                              <h3 class="profile__name">Nexseed</h3>
                              <!-- <p class="profile__info">Japanese company known for best ESL School in Cebu, Taiwan, and Japan.</p> -->
                          </div>
                          <!-- <div class="profile__links">
                              <a class="profile__link" href="#">
                                  <i class="profile__link__icon fa fa-map-marker"></i>
                                  <span class="profile__link__text">New York</span>
                              </a>
                              <a class="profile__link" href="#">
                                  <i class="profile__link__icon fa fa-envelope"></i>
                                  <span class="profile__link__text">Send Email </span>
                              </a>
                          </div> -->
                          <div class="profile__twitter">
                              <div class="profile__twitter__stats profile__twitter__stats--followers">
                                  <span class="profile__twitter__stats__count">1,500</span>
                                  <span class="profile__twitter__stats__label">Employees</span>
                              </div>
                              <div class="profile__twitter__stats profile__twitter__stats--following">
                                  <span class="profile__twitter__stats__count">15</span>
                                  <span class="profile__twitter__stats__label">Jobs</span>
                              </div>
                              <div class="profile__twitter__follow">
                                  <button class="profile__twitter__follow__button">View company</button>
                              </div>
                          </div>
                      </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-4">
                <div class="card card-lift--hover shadow border-0">
                  <div class="profile">
                      <div class="profile__header">
                          <img class="profile__background" src="https://officesnapshots.com/wp-content/uploads/2018/05/qbe-insurance-offices-hong-kong-1-700x467.jpg" />
                          <img class="profile__picture" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSQRneLvqpg9ZV8QxmfZrzXp9pZmEmMfo7wcR4H-Ud0X6OdicvY" />
                      </div>
                      <div class="profile__content">
                          <div class="profile__bio">
                              <h3 class="profile__name">QBE Inc.</h3>
                              <!-- <p class="profile__info">American film actress known for her work in films like Lost in Translation, Vicky Cristina Barcelona, and Hitchcock.</p> -->
                          </div>
                          <div class="profile__twitter">
                              <div class="profile__twitter__stats profile__twitter__stats--followers">
                                  <span class="profile__twitter__stats__count">97,000</span>
                                  <span class="profile__twitter__stats__label">Employees</span>
                              </div>
                              <div class="profile__twitter__stats profile__twitter__stats--following">
                                  <span class="profile__twitter__stats__count">57</span>
                                  <span class="profile__twitter__stats__label">Jobs</span>
                              </div>
                              <div class="profile__twitter__follow">
                                  <button class="profile__twitter__follow__button">View company</button>
                              </div>
                          </div>
                      </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-4">
                <div class="card card-lift--hover shadow border-0">
                  <div class="profile">
                      <div class="profile__header">
                          <img class="profile__background" src="https://c1.staticflickr.com/7/6075/6044820487_843464499a_b.jpg" />
                          <img class="profile__picture" src="data:image/png;base64,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" />
                      </div>
                      <div class="profile__content">
                          <div class="profile__bio">
                              <h3 class="profile__name">Ripeconcepts</h3>
                              <!-- <p class="profile__info">American film actress known for her work in films like Lost in Translation, Vicky Cristina Barcelona, and Hitchcock.</p> -->
                          </div>
                          <!-- <div class="profile__links">
                              <a class="profile__link" href="#">
                                  <i class="profile__link__icon fa fa-map-marker"></i>
                                  <span class="profile__link__text">New York</span>
                              </a>
                              <a class="profile__link" href="#">
                                  <i class="profile__link__icon fa fa-envelope"></i>
                                  <span class="profile__link__text">Send Email </span>
                              </a>
                          </div> -->
                          <div class="profile__twitter">
                              <div class="profile__twitter__stats profile__twitter__stats--followers">
                                  <span class="profile__twitter__stats__count">97,000</span>
                                  <span class="profile__twitter__stats__label">Employees</span>
                              </div>
                              <div class="profile__twitter__stats profile__twitter__stats--following">
                                  <span class="profile__twitter__stats__count">57</span>
                                  <span class="profile__twitter__stats__label">Jobs</span>
                              </div>
                              <div class="profile__twitter__follow">
                                  <button class="profile__twitter__follow__button">View company</button>
                              </div>
                          </div>
                      </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
     
    </section>
    <section class="section section section-shaped my-0 overflow-hidden">
      <div class="shape shape-style-1 bg-gradient-warning shape-skew">
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
      </div>
      <div class="container py-0">
        <div class="row row-grid align-items-center">
          <div class="col-md-5 order-lg-2 ml-lg-auto">
            <div class="position-relative pl-md-5">
              <img :src="public_path+ '/images/img/ill/ill-2.svg'" class="img-center img-fluid">
            </div>
          </div>
          <div class="col-lg-7 order-lg-1">
            <div class="d-flex px-3">
              <div class="pl-4">
                <h4 class="display-3 text-white">By Programming language</h4>
                <p class="text-white">Choose the job based on your language specialty</p>
              </div>
            </div>
            <!-- <div class="card shadow shadow-lg--hover mt-5">
              <div class="card-body">
                <div class="d-flex px-3">
                  <div>
                    <div class="icon icon-shape bg-gradient-success rounded-circle text-white">
                      <i class="ni ni-satisfied"></i>
                    </div>
                  </div>
                  <div class="pl-4">
                    <h5 class="title text-success">Awesome Support</h5>
                    <p>The Arctic Ocean freezes every winter and much of the sea-ice then thaws every summer, and that process will continue whatever happens.</p>
                    <a href="#" class="text-success">Learn more</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="card shadow shadow-lg--hover mt-5">
              <div class="card-body">
                <div class="d-flex px-3">
                  <div>
                    <div class="icon icon-shape bg-gradient-warning rounded-circle text-white">
                      <i class="ni ni-active-40"></i>
                    </div>
                  </div>
                  <div class="pl-4">
                    <h5 class="title text-warning">Modular Components</h5>
                    <p>The Arctic Ocean freezes every winter and much of the sea-ice then thaws every summer, and that process will continue whatever happens.</p>
                    <a href="#" class="text-warning">Learn more</a>
                  </div>
                </div>
              </div>
            </div> -->

        <ul class="ud-list">
            <li>
                <a href="#">
                    <div class="round-icon medium-round-icon lang-php">
                        <img src="http://www.rnm.solutions/wp-content/uploads/2018/01/icon-php1-1.png">
                    </div>
                    <b>Php</b>
                </a>
            </li>
            <li>
                    <a href="#">
                    <div class="round-icon medium-round-icon lang-ruby">
                        <img src="https://rebornix.gallerycdn.vsassets.io/extensions/rebornix/ruby/0.15.0/1503328840286/Microsoft.VisualStudio.Services.Icons.Default">
                    </div>
                    <b>Ruby</b>
                </a>
            </li>
            <li>
                <a href="#">
                    <div class="round-icon medium-round-icon lang-java">
                        <img src="https://images.sftcdn.net/images/t_optimized,f_auto/p/2f4c04f4-96d0-11e6-9830-00163ed833e7/3163796423/java-runtime-environment-logo.png">
                    </div>
                    <b>Java</b>
                </a>
            </li>
            <li>
                    <a href="#">
                    <div class="round-icon medium-round-icon lang-cplus2">
                        <img src="https://png.icons8.com/color/1600/c-plus-plus-logo.png">
                    </div>
                    <b>C++</b>
                </a>
            </li>
            <li>
                <a href="#">
                    <div class="round-icon medium-round-icon lang-python">
                        <img src="http://www.iconarchive.com/download/i73027/cornmanthe3rd/plex/Other-python.ico">
                    </div>
                    <b>Python</b>
                </a>
            </li>
        </ul>
        <ul class="ud-list" style="margin-top:-50px;">
            <li>
                <a href="#">
                    <div class="round-icon medium-round-icon lang-swift">
                        <div class="swift-round">
                            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/9d/Swift_logo.svg/2000px-Swift_logo.svg.png">
                        </div>
                    </div>
                    <b>Swift</b>
                </a>
            </li>
            <li>
                <a href="#">
                    <div class="round-icon medium-round-icon lang-go">
                        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/a/ac/Gogophercolor.png/1024px-Gogophercolor.png">
                    </div>
                    <b>Go</b>
                </a>
            </li>
            <li>
                <a href="#">
                    <div class="round-icon medium-round-icon csharp">
                        <img src="https://developer.fedoraproject.org/static/logo/csharp.png">
                    </div>
                    <b>C#</b>
                </a>
            </li>
            <li>
                <a href="#">
                    <div class="round-icon medium-round-icon lang-javascript">
                        <img src="http://www.northeastjsconference.com/wp-content/uploads/2015/11/learn-javascript.png"  id="javascript-imgsize">
                    </div>
                    <b>Javascript</b>
                </a>
            </li>
            <li>
                <a href="#">
                    <div class="round-icon medium-round-icon lang-r-language">
                        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/1/1b/R_logo.svg/2000px-R_logo.svg.png">
                    </div>
                    <b>R</b>
                </a>
            </li>
        </ul>

          </div>
        </div>
      </div>
    </section>
    <section class="section section-lg">
      <div class="container">
        <div class="row row-grid justify-content-center">
          <div class="col-lg-8 text-center">
            <div class="text-center">
              <h4 class="display-4 mb-5 mt-5">Available on these technologies</h4>
              <div class="row justify-content-center">
                <div class="col-lg-2 col-4">
                  <a href="https://getbootstrap.com/" target="_blank" data-toggle="tooltip" data-original-title="Bootstrap 4 - Most popular front-end component library">
                    <img src="https://s3.amazonaws.com/creativetim_bucket/tim_static_images/presentation-page/bootstrap.jpg" class="img-fluid">
                  </a>
                </div>
                <div class="col-lg-2 col-4">
                  <a href="https://www.sketchapp.com/" target="_blank" data-toggle="tooltip" data-original-title="[Coming Soon] Sketch - Digital design toolkit">
                    <img src="https://s3.amazonaws.com/creativetim_bucket/tim_static_images/presentation-page/sketch.jpg" class="img-fluid opacity-5">
                  </a>
                </div>
                <div class="col-lg-2 col-4">
                  <a href="https://www.adobe.com/products/photoshop.html" data-toggle="tooltip" data-original-title="[Coming Soon] Adobe Photoshop - Software for digital images manipulation">
                    <img src="https://s3.amazonaws.com/creativetim_bucket/tim_static_images/presentation-page/ps.jpg" class="img-fluid  opacity-5">
                  </a>
                </div>
                <div class="col-lg-2 col-4">
                  <a href="https://vuejs.org/" target="_blank" data-toggle="tooltip" data-original-title="[Coming Soon] Vue.js - The progressive javascript framework">
                    <img src="https://s3.amazonaws.com/creativetim_bucket/tim_static_images/presentation-page/vue.jpg" class="img-fluid opacity-5">
                  </a>
                </div>
                <div class="col-lg-2 col-4">
                  <a href="https://angularjs.org/" target="_blank" data-toggle="tooltip" data-original-title="[Coming Soon] Angular - One framework. Mobile &amp; desktop">
                    <img src="https://s3.amazonaws.com/creativetim_bucket/tim_static_images/presentation-page/angular.jpg" class="img-fluid opacity-5">
                  </a>
                </div>
                <div class="col-lg-2 col-4">
                  <a href="https://reactjs.org/" target="_blank" data-toggle="tooltip" data-original-title="[Coming Soon] React - A JavaScript library for building user interfaces">
                    <img src="https://s3.amazonaws.com/creativetim_bucket/tim_static_images/presentation-page/react.jpg" class="img-fluid opacity-5">
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>
  <footer class="footer has-cards">
    <div class="container container-lg">
      <div class="row">
        <div class="col-md-6 mb-5 mb-md-0">
          <div class="card card-lift--hover shadow border-0">
            <a href="../examples/landing.html" title="Landing Page">
              <img :src="public_path+ '/images/img/theme/landing.jpg'" class="card-img">
            </a>
          </div>
        </div>
        <div class="col-md-6 mb-5 mb-lg-0">
          <div class="card card-lift--hover shadow border-0">
            <a href="../examples/profile.html" title="Profile Page">
              <img :src="public_path + '/images/img/theme/profile.jpg'" class="card-img">
            </a>
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row row-grid align-items-center my-md">
        <div class="col-lg-6">
          <h3 class="text-primary font-weight-light mb-2">Thank you for supporting us!</h3>
          <h4 class="mb-0 font-weight-light">Let's get in touch on any of these platforms.</h4>
        </div>
        <div class="col-lg-6 text-lg-center btn-wrapper">
          <a target="_blank" href="https://twitter.com/creativetim" class="btn btn-neutral btn-icon-only btn-twitter btn-round btn-lg" data-toggle="tooltip" data-original-title="Follow us">
            <i class="fa fa-twitter"></i>
          </a>
          <a target="_blank" href="https://www.facebook.com/creativetim" class="btn btn-neutral btn-icon-only btn-facebook btn-round btn-lg" data-toggle="tooltip" data-original-title="Like us">
            <i class="fa fa-facebook-square"></i>
          </a>
          <a target="_blank" href="https://dribbble.com/creativetim" class="btn btn-neutral btn-icon-only btn-dribbble btn-lg btn-round" data-toggle="tooltip" data-original-title="Follow us">
            <i class="fa fa-dribbble"></i>
          </a>
          <a target="_blank" href="https://github.com/creativetimofficial" class="btn btn-neutral btn-icon-only btn-github btn-round btn-lg" data-toggle="tooltip" data-original-title="Star on Github">
            <i class="fa fa-github"></i>
          </a>
        </div>
      </div>
      <hr>
      <div class="row align-items-center justify-content-md-between">
        <div class="col-md-6">
          <div class="copyright">
            &copy; 2018
            <a href="https://www.creative-tim.com" target="_blank">Creative Tim</a>.
          </div>
        </div>
        <div class="col-md-6">
          <ul class="nav nav-footer justify-content-end">
            <li class="nav-item">
              <a href="https://www.creative-tim.com" class="nav-link" target="_blank">Creative Tim</a>
            </li>
            <li class="nav-item">
              <a href="https://www.creative-tim.com/presentation" class="nav-link" target="_blank">About Us</a>
            </li>
            <li class="nav-item">
              <a href="http://blog.creative-tim.com" class="nav-link" target="_blank">Blog</a>
            </li>
            <li class="nav-item">
              <a href="https://github.com/creativetimofficial/argon-design-system/blob/master/LICENSE.md" class="nav-link" target="_blank">MIT License</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </footer>
  </div>
</template>

<script>
  import {
    mapGetters
  } from 'vuex'

  export default {
    layout: "welcome",

    metaInfo() {
      return {
        title: this.$t('home')
      }
    },

    data: () => ({
      title: window.config.appName,
      public_path: location.origin
    }),

    computed: mapGetters({
      authenticated: 'auth/check'
    })
  }

</script>

<style scoped>
  .top-right {
    position: absolute;
    right: 10px;
    top: 18px;
  }
  
  .navbar.navbar-transparent{
    border-bottom: none;
  }

  .title {
    font-size: 85px;
  }

</style>
