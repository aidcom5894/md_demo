<?php 

$fetchUser = $this->db->query("SELECT * FROM user_directory WHERE username = '{$_SESSION['loggedinUser']}'");
foreach ($fetchUser->result() as $row)
{
  $activeUserDetails = $row->username;
  $activeUserPic = $row->user_profile;
}

?>
<!DOCTYPE html>
<html lang="en">

  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Meta -->
    <meta name="description" content="Responsive Bootstrap 5 Admin Dashboards" />
    <meta name="author" content="Bootstrap Gallery" />
    <link rel="canonical" href="https://www.bootstrap.gallery/">
    <meta property="og:url" content="https://www.bootstrap.gallery">
    <meta property="og:title" content="Admin Templates - Dashboard Templates | Bootstrap Gallery">
    <meta property="og:description" content="Marketplace for Bootstrap Admin Dashboards">
    <meta property="og:type" content="Website">
    <meta property="og:site_name" content="Bootstrap Gallery">
    <link rel="shortcut icon" href="<?php echo base_url(); ?>modules/system_creation/assets/images/favicon.svg" />

    <!-- Title -->
    <title>Bootstrap Gallery - Cliq Admin Dashboard</title>

    <!-- *************
			************ Common Css Files *************
		************ -->
    <!-- Animated css -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>modules/system_creation/assets/css/animate.css" />

    <!-- Icomoon Font Icons css -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>modules/system_creation/assets/fonts/icomoon/icomoon.css" />

    <!-- Main css -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>modules/system_creation/assets/css/main.min.css" />

    <!-- *************
			************ Vendor Css Files *************
		************ -->

    <!-- Scrollbar CSS -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>modules/system_creation/assets/vendor/overlay-scroll/OverlayScrollbars.min.css" />
  </head>

  <body>

    <!-- Loading wrapper start -->
    <div id="loading-wrapper">
      <div class="spinner-border"></div>
      <div class="loading-messsage">
        <span>L</span>
        <span>o</span>
        <span>a</span>
        <span>d</span>
        <span>i</span>
        <span>n</span>
        <span>g</span>
      </div>
    </div>
    <!-- Loading wrapper end -->

    <!-- Page wrapper start -->
    <div class="page-wrapper">

      <!-- Sidebar wrapper start -->
      <nav class="sidebar-wrapper">

        <!-- Sidebar brand starts -->
        <div class="sidebar-brand">
          <a href="index.html" class="logo">
            <img src="<?php echo base_url(); ?>modules/system_creation/assets/images/logo.svg" alt="Admin Dashboard Templates" />
          </a>
        </div>
        <!-- Sidebar brand starts -->

        <!-- Sidebar menu starts -->
        
      </nav>
      <!-- Sidebar wrapper end -->

      <!-- *************
				************ Main container start *************
			************* -->
      <div class="main-container">

        <!-- Page header starts -->
        <div class="page-header">

          <!-- Breadcrumb container start -->
          <div class="breadcrumb-container">

            <!-- Toggle sidebar start -->
            <div class="toggle-sidebar" id="toggle-sidebar">
              <i class="icon-menu"></i>
            </div>
            <!-- Toggle sidebar end -->


            <!-- App brand start -->
            <div class="app-brand-sm">
              <a href="index.html" class="d-xl-none d-lg-block">
                <img src="<?php echo base_url(); ?>modules/system_creation/assets/images/logo.svg" class="logo" alt="Bootstrap Gallery">
              </a>
            </div>
            <!-- App brand end -->

            <!-- Breadcrumb start -->
            <ol class="breadcrumb d-xl-flex d-none">
              <li class="breadcrumb-item">
                <i class="icon-house_siding"></i>
                <a href="<?php echo base_url('django_terminal'); ?>">Home</a>
              </li>
              <li class="breadcrumb-item breadcrumb-active" aria-current="page">
                Dashboard
              </li>
            </ol>
            <!-- Breadcrumb end -->

          </div>
          <!-- Breadcrumb container end -->

          <!-- Header actions ccontainer start -->
          <div class="header-actions-container">

            <!-- Search container start -->
            <div class="search-container d-lg-block d-none">

              <!-- Search input group start -->
              <div class="input-group">
                <input type="text" class="form-control" id="searchAny" placeholder="Search..." />
                <button class="btn" type="button">
                  <i class="icon-search"></i>
                </button>
              </div>
              <!-- Search input group end -->

            </div>
            <!-- Search container end -->

            <!-- Header actions start -->
            <ul class="header-actions">
              <li class="dropdown d-none d-xl-block">
                <a href="#" id="countries" data-toggle="dropdown" aria-haspopup="true">
                  <img src="<?php echo base_url(); ?>modules/system_creation/assets/images/flags/1x1/gb.svg" class="flag-img" alt="Bootstrap gallery" />
                </a>
                <div class="dropdown-menu dropdown-menu-end mini" aria-labelledby="countries">
                  <div class="country-container">
                    <a href="index.html">
                      <img src="<?php echo base_url(); ?>modules/system_creation/assets/images/flags/1x1/us.svg" alt="Admin Themes" />
                    </a>
                    <a href="index.html">
                      <img src="<?php echo base_url(); ?>modules/system_creation/assets/images/flags/1x1/in.svg" alt="Bootstrap Dashboards" />
                    </a>
                    <a href="index.html">
                      <img src="<?php echo base_url(); ?>modules/system_creation/assets/images/flags/1x1/br.svg" alt="Bootstrap Themes" />
                    </a>
                    <a href="index.html">
                      <img src="<?php echo base_url(); ?>modules/system_creation/assets/images/flags/1x1/tr.svg" alt="Bootstrap Admin Dashboards" />
                    </a>
                    <a href="index.html">
                      <img src="<?php echo base_url(); ?>modules/system_creation/assets/images/flags/1x1/id.svg" alt="Bootstrap Dashboards" />
                    </a>
                  </div>
                </div>
              </li>
              <li class="dropdown d-none d-xl-block">
                <a href="#" id="bookmarks" data-toggle="dropdown" aria-haspopup="true">
                  <i class="icon-star_outline"></i>
                </a>
                <div class="dropdown-menu dropdown-menu-end lrg" aria-labelledby="bookmarks">
                  <div class="bookmarks-container">
                    <a href="#" class="bookmark-block">
                      <img src="<?php echo base_url(); ?>modules/system_creation/assets/images/social/dribbble.svg" alt="Bootstrap Dashboards" />
                      <h5>Dribbble</h5>
                    </a>
                    <a href="#" class="bookmark-block">
                      <img src="<?php echo base_url(); ?>modules/system_creation/assets/images/social/behance.svg" alt="Bootstrap Dashboards" />
                      <h5>Behance</h5>
                    </a>
                    <a href="#" class="bookmark-block">
                      <img src="<?php echo base_url(); ?>modules/system_creation/assets/images/social/evernote.svg" alt="Bootstrap Dashboards" />
                      <h5>Evernote</h5>
                    </a>
                    <a href="#" class="bookmark-block">
                      <img src="<?php echo base_url(); ?>modules/system_creation/assets/images/social/dropbox.svg" alt="Bootstrap Dashboards" />
                      <h5>Dropbox</h5>
                    </a>
                    <a href="#" class="bookmark-block">
                      <img src="<?php echo base_url(); ?>modules/system_creation/assets/images/social/amazon.svg" alt="Bootstrap Dashboards" />
                      <h5>Amazon</h5>
                    </a>
                    <a href="#" class="bookmark-block">
                      <img src="<?php echo base_url(); ?>modules/system_creation/assets/images/social/youtube.svg" alt="Bootstrap Dashboards" />
                      <h5>Youtube</h5>
                    </a>
                  </div>
                </div>
              </li>
              <li class="dropdown d-none d-lg-block">
                <a href="#" id="notifications" data-toggle="dropdown" aria-haspopup="true">
                  <i class="icon-notifications_none animate__animated animate__swing animate__infinite infinite"></i>
                  <span
                    class="count-label gradient-red animate__animated animate__heartBeat animate__infinite infinite">7</span>
                </a>
                <div class="dropdown-menu dropdown-menu-end lrg" aria-labelledby="notifications">
                  <div class="scroll240">
                    <ul class="header-notifications">
                      <li class="gradient-grey">
                        <a href="#">
                          <div class="user-img">
                            <img src="<?php echo base_url(); ?>modules/system_creation/assets/images/user2.png" alt="Best Admin Dashboards" />
                          </div>
                          <div class="details">
                            <div class="user-title">Larkyn</div>
                            <div class="noti-details">
                              Check out every table in detail.
                            </div>
                            <div class="noti-date">Today, 03:00 pm</div>
                          </div>
                        </a>
                      </li>
                      <li class="gradient-grey">
                        <a href="#">
                          <div class="user-img">
                            <img src="<?php echo base_url(); ?>modules/system_creation/assets/images/user2.png" alt="Best Bootstrap Dashboards" />
                          </div>
                          <div class="details">
                            <div class="user-title">Braxten</div>
                            <div class="noti-details">Approved new design.</div>
                            <div class="noti-date">Today, 12:00 am</div>
                          </div>
                        </a>
                      </li>
                      <li class="gradient-grey">
                        <a href="#">
                          <div class="user-img">
                            <img src="<?php echo base_url(); ?>modules/system_creation/assets/images/user2.png" alt="Best Bootstrap Admin Dashboards" />
                          </div>
                          <div class="details">
                            <div class="user-title">Maria</div>
                            <div class="noti-details">
                              Membership has been ended.
                            </div>
                            <div class="noti-date">Today, 09:30 am</div>
                          </div>
                        </a>
                      </li>
                      <li class="gradient-grey">
                        <a href="#">
                          <div class="user-img">
                            <img src="<?php echo base_url(); ?>modules/system_creation/assets/images/user5.png" alt="Bootstrap Gallery" />
                          </div>
                          <div class="details">
                            <div class="user-title">Alex</div>
                            <div class="noti-details">Design Review.</div>
                            <div class="noti-date">Yesterday, 09:30 am</div>
                          </div>
                        </a>
                      </li>
                      <li class="gradient-green">
                        <a href="#">
                          <div class="user-img">
                            <img src="<?php echo base_url(); ?>modules/system_creation/assets/images/user2.png" alt="Modern Admin Dashboards" />
                          </div>
                          <div class="details">
                            <div class="user-title">Sunny</div>
                            <div class="noti-details">UI Discussion</div>
                            <div class="noti-date">Yesterday, 09:30 am</div>
                          </div>
                        </a>
                      </li>
                    </ul>
                  </div>
                </div>
              </li>
              <li class="dropdown">
                <a href="#" id="userSettings" class="user-settings" data-toggle="dropdown" aria-haspopup="true">
                  <span class="user-name d-none d-md-block"><?php echo $activeUserDetails; ?></span>
                  <span class="avatar">
                    <img src="<?php echo $activeUserPic; ?>" alt="Admin Themes" />
                    <span class="status online"></span>
                  </span>
                </a>
                <div class="dropdown-menu dropdown-menu-end md" aria-labelledby="userSettings">
                  <div class="header-profile-avatar">
                    <img src="<?php echo base_url(); ?>modules/system_creation/assets/images/user.png" alt="Admin Themes" />
                  </div>
                  <div class="header-profile-block">
                    <h5><?php echo $activeUserDetails; ?></h5>
                    <p>Intruder</p>
                  </div>
                  <div class="header-profile-actions">
                    <a href="profile.html" class="gradient-blue"><i class="icon-person_outline"></i>Profile</a>
                    <a href="account-settings.html" class="gradient-green"><i class="icon-edit_road"></i>Settings</a>
                    <a href="<?php echo base_url('user_logout'); ?>" class="gradient-red"><i class="icon-power_settings_new"></i>Logout</a>
                  </div>
                </div>
              </li>
            </ul>
            <!-- Header actions end -->

          </div>
          <!-- Header actions ccontainer end -->

        </div>
        <!-- Page header ends -->

        <!-- Content wrapper scroll start -->
        <div class="content-wrapper-scroll">

          <!-- Content wrapper start -->
          <div class="content-wrapper">

            <!-- Row start -->
            <div class="row gutters">
              <div class="col-xxl-3 col-sm-4 col-12">
                <div class="card gradient-teal card-450">
                  <div class="gradient-vertical-strip"></div>
                  <button type="button" class="download-icon download-reports">
                    <img src="<?php echo base_url(); ?>modules/system_creation/assets/images/download.svg" alt="Admin Templates" />
                  </button>
                  <div class="card-body">
                    <div class="card-title">
                      Earnings
                    </div>
                    <div id="earningsGraph"></div>
                  </div>
                </div>
                <div class="card gradient-peach card-152">
                  <div class="card-body">
                    <div class="car-locan-container">
                      <div class="loan-amount">
                        <p>Loan Balance</p>
                        <h3>$65,000</h3>
                      </div>
                      <div id="carLocan"></div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xxl-3 col-sm-4 col-12">
                <div class="card gradient-grey3 card-370">
                  <div class="card-body">
                    <div class="google-drive-container">
                      <img src="<?php echo base_url(); ?>modules/system_creation/assets/images/google-drive.svg" alt="Google Drive" />
                      <h4>Google Drive</h4>
                      <div class="drive-progress">
                        <div class="progress">
                          <div class="progress-bar" role="progressbar" style="width: 75%" aria-valuenow="75"
                            aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <div class="drive-space-container">
                          <div>21 <span>GB</span></div>
                          <div>30 <span>GB</span></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="card gradient-violet3 card-232">
                  <div class="card-body">
                    <div class="get-latest-updates">
                      <div class="update-details">
                        <h5>
                          Get the latest tech news &amp; updates!
                        </h5>
                        <button type="button" class="download-btn">
                          <span class="icon">
                            <img src="<?php echo base_url(); ?>modules/system_creation/assets/images/download-white.svg" alt="Admin Templates" />
                          </span>
                          Get an App
                        </button>
                      </div>
                      <img src="<?php echo base_url(); ?>modules/system_creation/assets/images/blocks2.svg"
                        class="blocks-img animate__animated animate__pulse animate__infinite infinite" alt="Blocks" />
                    </div>
                  </div>
                </div>
              </div>

              <?php 

                $countMalware = $this->db->query("SELECT * FROM malware");
                
              ?>
              <div class="col-xxl-3 col-sm-4 col-12">
                <div class="card gradient-orange2 card-270">
                  <div class="gradient-vertical-strip"></div>
                  <button type="button" class="download-icon download-reports">
                    <img src="<?php echo base_url(); ?>modules/system_creation/assets/images/download.svg" alt="Admin Templates" />
                  </button>
                  <div class="card-body">
                    <div class="card-title">Malware Injected</div>
                    <div class="subscribers">
                      <div class="total-subscribers"><?php echo $countMalware->num_rows(); ?></div>
                      <a href="subscribers.html" class="subscribers-status">View all subscribers</a>
                    </div>
                  </div>
                </div>
                <div class="card gradient-green card-332">
                  <div class="gradient-vertical-strip"></div>
                  <button type="button" class="download-icon download-reports">
                    <img src="<?php echo base_url(); ?>modules/system_creation/assets/images/download.svg" alt="Admin Templates" />
                  </button>
                  <div class="card-body">
                    <div class="card-title">Orders</div>
                    <div id="ordersGraph" class="apex-hide-lines"></div>
                    <div class="orders-badge">3600</div>
                  </div>
                </div>
              </div>
              <div class="col-xxl-3 col-sm-12 col-12">
                <div class="card gradient-teal-cream card-210">
                  <div class="card-body">
                    <!-- Row start -->
                    <div class="row gutters">
                      <div class="col-sm-6 col-12">
                        <div class="earnings">
                          <div id="weeklyEarnings"></div>
                          <p>Earnings</p>
                          <h3>$8,590</h3>
                        </div>
                      </div>
                      <div class="col-sm-6 col-12">
                        <div class="earnings">
                          <div id="monthlyEarnings"></div>
                          <p>Expenses</p>
                          <h3>$5,850</h3>
                        </div>
                      </div>
                    </div>
                    <!-- Row end -->
                  </div>
                </div>
                <div class="card gradient-teal-brown card-392">
                  <div class="gradient-vertical-strip"></div>
                  <a href="contacts.html" class="download-icon">
                    <img src="<?php echo base_url(); ?>modules/system_creation/assets/images/settings.svg" alt="Admin Themes" />
                  </a>
                  <div class="card-body">
                    <div class="card-title">
                      Admins &amp; Members
                    </div>
                    <ul class="admins-container">
                      <li>
                        <a href="account-settings.html">
                          <img src="<?php echo base_url(); ?>modules/system_creation/assets/images/user2.png" class="avatar" alt="Google Admin" />
                          <div class="admin-details">
                            <h6>Gale Hunt</h6>
                            <div class="admin-type">Admin</div>
                          </div>
                          <div class="admin-more">
                            <i class="icon-arrow_forward_ios"></i>
                          </div>
                        </a>
                      </li>
                      <li>
                        <a href="account-settings.html">
                          <img src="<?php echo base_url(); ?>modules/system_creation/assets/images/user3.png" class="avatar" alt="Google Admin" />
                          <div class="admin-details">
                            <h6>Kendrick Rowse</h6>
                            <div class="admin-type">Admin</div>
                          </div>
                          <div class="admin-more">
                            <i class="icon-arrow_forward_ios"></i>
                          </div>
                        </a>
                      </li>
                      <li>
                        <a href="account-settings.html">
                          <img src="<?php echo base_url(); ?>modules/system_creation/assets/images/user.png" class="avatar" alt="Google Admin" />
                          <div class="admin-details">
                            <h6>Belinda Newton</h6>
                            <div class="admin-type">Member</div>
                          </div>
                          <div class="admin-more">
                            <i class="icon-arrow_forward_ios"></i>
                          </div>
                        </a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <!-- Row end -->

            <!-- Row start -->
            <div class="row gutters">
              <div class="col-xxl-3 col-sm-6 col-12">
                <div class="card gradient-violet-pink card-170">
                  <div class="card-body">
                    <div class="uploading-container">
                      <a href="#" class="pause" id="play-pause">
                        <i class="icon-pause_circle_outline"></i>
                      </a>
                      <div class="upload-progress-container">
                        <div class="upload-icon">
                          <img src="<?php echo base_url(); ?>modules/system_creation/assets/images/upload.svg" alt="Admin Templates" />
                        </div>
                        <div class="upload-progress">
                          <div class="upload-space-container">
                            <div>
                              45<span>%</span><span class="ms-2">Uploading...</span>
                            </div>
                            <div>100<span>GB</span></div>
                          </div>
                          <div class="progress">
                            <div class="progress-bar" role="progressbar" style="width: 45%" aria-valuenow="45"
                              aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xxl-3 col-sm-6 col-12">
                <div class="card gradient-teal-cream card-170">
                  <div class="card-body">
                    <div class="notifications-container">
                      <div class="notify-details-block">
                        <div class="notify-icon">
                          <i
                            class="icon-notifications_none blocks-img animate__animated animate__swing animate__infinite infinite"></i>
                        </div>
                        <div class="notify-details">
                          <h5>Notifications</h5>
                          <h3>125</h3>
                          <div class="notify-high-low">+7.8%</div>
                        </div>
                      </div>
                      <div id="notificationsGraph" class="apex-hide-lines"></div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xxl-3 col-sm-6 col-12">
                <div class="card gradient-yellow card-170">
                  <div class="card-body">
                    <div class="active-users-container">
                      <div class="active-users-details">
                        <div class="details">
                          <h6>Active Users</h6>
                          <h3>6500</h3>
                          <span class="active-users-high-low">+21.5%</span>
                        </div>
                        <div id="signupsGraph" class="apex-hide-lines"></div>
                        <div class="active-users-icon">
                          <i class="icon-av_timer"></i>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xxl-3 col-sm-6 col-12">
                <div class="card gradient-peach3 card-170">
                  <div class="card-body">
                    <div class="upgrade-plan">
                      <div>
                        <img src="<?php echo base_url(); ?>modules/system_creation/assets/images/award.svg" alt="Award" />
                      </div>
                      <div class="plan-details">
                        <h5>Upgrade your plan and get complete access.</h5>
                        <a href="pricing.html" class="btn">Upgrade Now</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- Row end -->

          </div>
          <!-- Content wrapper end -->

          <!-- App Footer start -->
          <div class="app-footer">
            <span>© Bootstrap Gallery 2024</span>
          </div>
          <!-- App footer end -->

        </div>
        <!-- Content wrapper scroll end -->

      </div>
      <!-- *************
				************ Main container end *************
			************* -->
    </div>
    <!-- Page wrapper end -->

    <!-- *************
			************ Required JavaScript Files *************
		************* -->
    <!-- Required jQuery first, then Bootstrap Bundle JS -->
    <script src="<?php echo base_url(); ?>modules/system_creation/assets/js/jquery.min.js"></script>
    <script src="<?php echo base_url(); ?>modules/system_creation/assets/js/bootstrap.bundle.min.js"></script>
    <script src="<?php echo base_url(); ?>modules/system_creation/assets/js/modernizr.js"></script>
    <script src="<?php echo base_url(); ?>modules/system_creation/assets/js/moment.js"></script>

    <!-- *************
			************ Vendor Js Files *************
		************* -->

    <!-- Overlay Scroll JS -->
    <script src="<?php echo base_url(); ?>modules/system_creation/assets/vendor/overlay-scroll/jquery.overlayScrollbars.min.js"></script>
    <script src="<?php echo base_url(); ?>modules/system_creation/assets/vendor/overlay-scroll/custom-scrollbar.js"></script>

    <!-- Apex Charts -->
    <script src="<?php echo base_url(); ?>modules/system_creation/assets/vendor/apex/apexcharts.min.js"></script>
    <script src="<?php echo base_url(); ?>modules/system_creation/assets/vendor/apex/custom/home/earningsGraph.js"></script>
    <script src="<?php echo base_url(); ?>modules/system_creation/assets/vendor/apex/custom/home/ordersGraph.js"></script>
    <script src="<?php echo base_url(); ?>modules/system_creation/assets/vendor/apex/custom/home/notificationsGraph.js"></script>
    <script src="<?php echo base_url(); ?>modules/system_creation/assets/vendor/apex/custom/home/signupsGraph.js"></script>

    <!-- Circleful Charts -->
    <script src="<?php echo base_url(); ?>modules/system_creation/assets/vendor/circliful/circliful.min.js"></script>
    <script src="<?php echo base_url(); ?>modules/system_creation/assets/vendor/circliful/circliful.custom.js"></script>

    <!-- Main Js Required -->
    <script src="<?php echo base_url(); ?>modules/system_creation/assets/js/main.js"></script>
  </body>

</html>