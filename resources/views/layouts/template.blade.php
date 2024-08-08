<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, shrink-to-fit=9">
  <meta name="description" content="Gambolthemes">
  <meta name="author" content="Gambolthemes">
  <title>UMKM Sumenep || E-Commerce</title>

  <!-- Favicon Icon -->
  <link rel="icon" type="image/png" href="{{ asset('assets') }}/images/fav.png">

  <!-- Stylesheets -->
  <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,500' rel='stylesheet'>
  <link href='{{ asset('assets') }}/vendor/unicons-2.0.1/css/unicons.css' rel='stylesheet'>
  <link href="{{ asset('assets') }}/css/vertical-responsive-menu.min.css" rel="stylesheet">
  <link href="{{ asset('assets') }}/css/style.css" rel="stylesheet">
  <link href="{{ asset('assets') }}/css/responsive.css" rel="stylesheet">
  <link href="{{ asset('assets') }}/css/night-mode.css" rel="stylesheet">

  <!-- Vendor Stylesheets -->
  <link href="{{ asset('assets') }}/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="{{ asset('assets') }}/vendor/OwlCarousel/assets/owl.carousel.css" rel="stylesheet">
  <link href="{{ asset('assets') }}/vendor/OwlCarousel/assets/owl.theme.default.min.css" rel="stylesheet">
  <link href="{{ asset('assets') }}/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="{{ asset('assets') }}/vendor/bootstrap-select/docs/docs/dist/css/bootstrap-select.min.css"
    rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="{{ asset('assets') }}/vendor/semantic/semantic.min.css">

</head>

<body>
  <!-- Header Start -->
  <header class="header clearfix">
    <button type="button" id="toggleMenu" class="toggle_menu">
      <i class='uil uil-bars'></i>
    </button>
    <button id="collapse_menu" class="collapse_menu">
      <i class="uil uil-bars collapse_menu--icon "></i>
      <span class="collapse_menu--label"></span>
    </button>
    <div class="main_logo" id="logo">
      <a href="index.html"><img src="{{ asset('assets') }}/images/" alt=""></a>
      <a href="index.html"><img class="logo-inverse" src="{{ asset('assets') }}/images/" alt=""></a>
    </div>
    <div class="search120">
      <div class="ui search">
        <div class="ui left icon input swdh10">
          <input class="prompt srch10" type="text" placeholder="Search for Tuts Videos, Tutors, Tests and more..">
          <i class='uil uil-search-alt icon icon1'></i>
        </div>
      </div>
    </div>
    <div class="header_right">
      <ul>
        <li>
          <a href="create_new_course.html" class="upload_btn" title="Create New Course">Create New Course</a>
        </li>
        <li>
          <a href="shopping_cart.html" class="option_links" title="cart"><i
              class='uil uil-shopping-cart-alt'></i><span class="noti_count">2</span></a>
        </li>
        <li class="dropdown-msg">
          <a href="#" class="option_links" data-bs-toggle="dropdown" data-bs-auto-close="true"
            aria-expanded="false"><i class='uil uil-envelope-alt'></i><span class="noti_count">3</span></a>
          <div class="dropdown-menu dropdown_ms drop-down">
            <a href="#" class="channel_my item">
              <div class="profile_link">
                <img src="{{ asset('assets') }}/images/left-imgs/img-6.jpg" alt="">
                <div class="pd_content">
                  <h6>Zoena Singh</h6>
                  <p>Hi! Sir, How are you. I ask you one thing please explain it this video price.</p>
                  <span class="nm_time">2 min ago</span>
                </div>
              </div>
            </a>
            <a href="#" class="channel_my item">
              <div class="profile_link">
                <img src="{{ asset('assets') }}/images/left-imgs/img-5.jpg" alt="">
                <div class="pd_content">
                  <h6>Joy Dua</h6>
                  <p>Hello, I paid you video tutorial but did not play error 404.</p>
                  <span class="nm_time">10 min ago</span>
                </div>
              </div>
            </a>
            <a href="#" class="channel_my item">
              <div class="profile_link">
                <img src="{{ asset('assets') }}/images/left-imgs/img-8.jpg" alt="">
                <div class="pd_content">
                  <h6>Jass</h6>
                  <p>Thanks Sir, Such a nice video.</p>
                  <span class="nm_time">25 min ago</span>
                </div>
              </div>
            </a>
            <a class="vbm_btn" href="instructor_messages.html">View All <i class='uil uil-arrow-right'></i></a>
          </div>
        </li>
        <li class="dropdown-noti">
          <a href="#" class="option_links" data-bs-toggle="dropdown" data-bs-auto-close="true"
            aria-expanded="false"><i class='uil uil-bell'></i><span class="noti_count">3</span></a>
          <div class="dropdown-menu dropdown_mn drop-down">
            <a href="#" class="channel_my item">
              <div class="profile_link">
                <img src="{{ asset('assets') }}/images/left-imgs/img-1.jpg" alt="">
                <div class="pd_content">
                  <h6>Rock William</h6>
                  <p>Like Your Comment On Video <strong>How to create sidebar menu</strong>.</p>
                  <span class="nm_time">2 min ago</span>
                </div>
              </div>
            </a>
            <a href="#" class="channel_my item">
              <div class="profile_link">
                <img src="{{ asset('assets') }}/images/left-imgs/img-2.jpg" alt="">
                <div class="pd_content">
                  <h6>Jassica Smith</h6>
                  <p>Added New Review In Video <strong>Full Stack PHP Developer</strong>.</p>
                  <span class="nm_time">12 min ago</span>
                </div>
              </div>
            </a>
            <a href="#" class="channel_my item">
              <div class="profile_link">
                <img src="{{ asset('assets') }}/images/left-imgs/img-9.jpg" alt="">
                <div class="pd_content">
                  <p> Your Membership Approved <strong>Upload Video</strong>.</p>
                  <span class="nm_time">20 min ago</span>
                </div>
              </div>
            </a>
            <a class="vbm_btn" href="instructor_notifications.html">View All <i class='uil uil-arrow-right'></i></a>
          </div>
        </li>
        <li class="profile-dropdown">
          <a href="#" class="opts_account" data-bs-toggle="dropdown" data-bs-auto-close="outside"
            aria-expanded="false">
            <img src="{{ asset('assets') }}/images/hd_dp.jpg" alt="">
          </a>
          <div class="dropdown-menu dropdown_account drop-down dropdown-menu-end">
            <div class="channel_my">
              <div class="profile_link">
                <img src="{{ asset('assets') }}/images/hd_dp.jpg" alt="">
                <div class="pd_content">
                  <div class="rhte85">
                    <h6>Joginder Singh</h6>
                    <div class="mef78" title="Verify">
                      <i class='uil uil-check-circle'></i>
                    </div>
                  </div>
                  <span>gambol943@gmail.com</span>
                </div>
              </div>
              <a href="my_instructor_profile_view.html" class="dp_link_12">View Instructor Profile</a>
            </div>
            <div class="night_mode_switch__btn">
              <a href="#" id="night-mode" class="btn-night-mode">
                <i class="uil uil-moon"></i> Night mode
                <span class="btn-night-mode-switch">
                  <span class="uk-switch-button"></span>
                </span>
              </a>
            </div>
            <a href="instructor_dashboard.html" class="item channel_item">Cursus dashboard</a>
            <a href="membership.html" class="item channel_item">Paid Memberships</a>
            <a href="setting.html" class="item channel_item">Setting</a>
            <a href="help.html" class="item channel_item">Help</a>
            <a href="feedback.html" class="item channel_item">Send Feedback</a>
            <a href="sign_in.html" class="item channel_item">Sign Out</a>
          </div>
        </li>
      </ul>
    </div>
  </header>
  <!-- Header End -->
  <!-- Left Sidebar Start -->
  <nav class="vertical_nav">
    <div class="left_section menu_left" id="js-menu">
      <div class="left_section">
        <h6 class="left_title">BERANDA</h6>
        <ul>
          <li class="menu--item">
            <a href="index.html" class="menu--link active" title="Home">
              <i class='uil uil-home-alt menu--icon'></i>
              <span class="menu--label">Beranda</span>
            </a>
          </li>
          <li class="menu--item">
            <a href="explore.html" class="menu--link" title="Explore">
              <i class='uil uil-search menu--icon'></i>
              <span class="menu--label">Cari</span>
            </a>
          </li>
          <li class="menu--item menu--item__has_sub_menu">
            <label class="menu--link" title="Categories">
              <i class='uil uil-layers menu--icon'></i>
              <span class="menu--label">Kategori</span>
            </label>
            <ul class="sub_menu">
              <li class="sub_menu--item">
                <a href="#" class="sub_menu--link">Makanan</a>
              </li>
              <li class="sub_menu--item">
                <a href="#" class="sub_menu--link">Minuman</a>
              </li>
              <li class="sub_menu--item">
                <a href="#" class="sub_menu--link">Pakaian</a>
              </li>
              <li class="sub_menu--item">
                <a href="#" class="sub_menu--link">Aksesoris</a>
              </li>
            </ul>
          </li>
          <li class="menu--item">
            <a href="#" class="menu--link" title="Saved Courses">
              <i class="uil uil-heart-alt menu--icon"></i>
              <span class="menu--label">Promo Menarik</span>
            </a>
          </li>
        </ul>
      </div>
      <div class="left_section pt-2">
        <h6 class="left_title">SETTING & LAINNYA</h6>
        <ul>
          <li class="menu--item">
            <a href="setting.html" class="menu--link" title="Setting">
              <i class='uil uil-cog menu--icon'></i>
              <span class="menu--label">Setting</span>
            </a>
          </li>
          <li class="menu--item">
            <a href="help.html" class="menu--link" title="Help">
              <i class='uil uil-question-circle menu--icon'></i>
              <span class="menu--label">Bantuan</span>
            </a>
          </li>
          <li class="menu--item">
            <a href="report_history.html" class="menu--link" title="Report History">
              <i class='uil uil-windsock menu--icon'></i>
              <span class="menu--label">HIstori Belanja</span>
            </a>
          </li>
          <li class="menu--item">
            <a href="feedback.html" class="menu--link" title="Send Feedback">
              <i class='uil uil-comment-alt-exclamation menu--icon'></i>
              <span class="menu--label">Beri Masukan</span>
            </a>
          </li>
        </ul>
      </div>
      <div class="left_footer">
        <ul>
          <li><a href="#">Tentang</a></li>
          <li><a href="#">Kontak Kami</a></li>
          <li><a href="#">UMKM</a></li>
          <li><a href="#">Hak Cipta</a></li>
          <li><a href="#">Kebijakan Privasi</a></li>
          <li><a href="#">Ketentuan</a></li>
        </ul>
        <div class="left_footer_content">
          <p>© 2024 <strong>Ananda & Rahman</strong><br>. All Rights Reserved.</p>
        </div>
      </div>
    </div>
  </nav>
  <!-- Left Sidebar End -->
  <!-- Body Start -->
  @yield('content')
  <!-- Body End -->

  <script src="{{ asset('assets') }}/js/vertical-responsive-menu.min.js"></script>
  <script src="{{ asset('assets') }}/js/jquery-3.7.1.min.js"></script>
  <script src="{{ asset('assets') }}/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="{{ asset('assets') }}/vendor/OwlCarousel/owl.carousel.js"></script>
  <script src="{{ asset('assets') }}/vendor/semantic/semantic.min.js"></script>
  <script src="{{ asset('assets') }}/vendor/bootstrap-select/docs/docs/dist/js/bootstrap-select.js"></script>
  <script src="{{ asset('assets') }}/js/custom.js"></script>
  <script src="{{ asset('assets') }}/js/night-mode.js"></script>


</body>

</html>
