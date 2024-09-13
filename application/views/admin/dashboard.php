<!DOCTYPE html>
<html lang="en" data-footer="true">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <title>Acorn Admin Template | Analytic Dashboard</title>
    <meta name="description" content="Another dashboard alternative that focused on data, listing and charts." />
    <!-- Favicon Tags Start -->
    <link rel="apple-touch-icon-precomposed" sizes="57x57" href="<?php echo base_url(); ?>assets/img/favicon/apple-touch-icon-57x57.png" />
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo base_url(); ?>assets/img/favicon/apple-touch-icon-114x114.png" />
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo base_url(); ?>assets/img/favicon/apple-touch-icon-72x72.png" />
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo base_url(); ?>assets/img/favicon/apple-touch-icon-144x144.png" />
    <link rel="apple-touch-icon-precomposed" sizes="60x60" href="<?php echo base_url(); ?>assets/img/favicon/apple-touch-icon-60x60.png" />
    <link rel="apple-touch-icon-precomposed" sizes="120x120" href="<?php echo base_url(); ?>assets/img/favicon/apple-touch-icon-120x120.png" />
    <link rel="apple-touch-icon-precomposed" sizes="76x76" href="<?php echo base_url(); ?>assets/img/favicon/apple-touch-icon-76x76.png" />
    <link rel="apple-touch-icon-precomposed" sizes="152x152" href="<?php echo base_url(); ?>assets/img/favicon/apple-touch-icon-152x152.png" />
    <link rel="icon" type="image/png" href="<?php echo base_url(); ?>assets/img/favicon/favicon-196x196.png" sizes="196x196" />
    <link rel="icon" type="image/png" href="<?php echo base_url(); ?>assets/img/favicon/favicon-96x96.png" sizes="96x96" />
    <link rel="icon" type="image/png" href="<?php echo base_url(); ?>assets/img/favicon/favicon-32x32.png" sizes="32x32" />
    <link rel="icon" type="image/png" href="<?php echo base_url(); ?>assets/img/favicon/favicon-16x16.png" sizes="16x16" />
    <link rel="icon" type="image/png" href="<?php echo base_url(); ?>assets/img/favicon/favicon-128.png" sizes="128x128" />
    <meta name="application-name" content="&nbsp;" />
    <meta name="msapplication-TileColor" content="#FFFFFF" />
    <meta name="msapplication-TileImage" content="img/favicon/mstile-144x144.png" />
    <meta name="msapplication-square70x70logo" content="img/favicon/mstile-70x70.png" />
    <meta name="msapplication-square150x150logo" content="img/favicon/mstile-150x150.png" />
    <meta name="msapplication-wide310x150logo" content="img/favicon/mstile-310x150.png" />
    <meta name="msapplication-square310x310logo" content="img/favicon/mstile-310x310.png" />
    <!-- Favicon Tags End -->
    <!-- Font Tags Start -->
    <link rel="preconnect" href="<?php echo base_url(); ?>assets/https://fonts.gstatic.com" />
    <link href="<?php echo base_url(); ?>assets/https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;700&display=swap" rel="stylesheet" />
    <link href="<?php echo base_url(); ?>assets/https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;700&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/font/CS-Interface/style.css" />
    <!-- Font Tags End -->
    <!-- Vendor Styles Start -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/vendor/bootstrap.min.css" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/vendor/OverlayScrollbars.min.css" />

    <!-- Vendor Styles End -->
    <!-- Template Base Styles Start -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/styles.css" />
    <!-- Template Base Styles End -->

    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/main.css" />
    <script src="<?php echo base_url(); ?>assets/js/base/loader.js"></script>
  </head>

  <body>
    <div id="root">
      <div id="nav" class="nav-container d-flex">
        <div class="nav-content d-flex">
          <!-- Logo Start -->
          <div class="logo position-relative">
            <a href="<?php echo base_url(); ?>admin/dashboard">
              <!-- Logo can be added directly -->
              <!-- <img src="<?php echo base_url(); ?>assets/img/logo/logo-white.svg" alt="logo" /> -->

              <!-- Or added via css to provide different ones for different color themes -->
              <div class="img"></div>
            </a>
          </div>
          <!-- Logo End -->

          <!-- Language Switch Start -->
          <div class="language-switch-container">
            <button class="btn btn-empty language-button dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">EN</button>
            <div class="dropdown-menu">
              <a href="<?php echo base_url(); ?>assets/#" class="dropdown-item">DE</a>
              <a href="<?php echo base_url(); ?>assets/#" class="dropdown-item active">EN</a>
              <a href="<?php echo base_url(); ?>assets/#" class="dropdown-item">ES</a>
            </div>
          </div>
          <!-- Language Switch End -->

          <!-- User Menu Start -->
          <div class="user-container d-flex">
            <a href="<?php echo base_url(); ?>assets/#" class="d-flex user position-relative" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <img class="profile" alt="profile" src="<?php echo base_url(); ?>assets/img/profile/profile-9.webp" />
              <div class="name">Lisa Jackson</div>
            </a>
            <div class="dropdown-menu dropdown-menu-end user-menu wide">
              <div class="row mb-3 ms-0 me-0">
                <div class="col-12 ps-1 mb-2">
                  <div class="text-extra-small text-primary">ACCOUNT</div>
                </div>
                <div class="col-6 ps-1 pe-1">
                  <ul class="list-unstyled">
                    <li>
                      <a href="<?php echo base_url(); ?>assets/#">User Info</a>
                    </li>
                    <li>
                      <a href="<?php echo base_url(); ?>assets/#">Preferences</a>
                    </li>
                    <li>
                      <a href="<?php echo base_url(); ?>assets/#">Calendar</a>
                    </li>
                  </ul>
                </div>
                <div class="col-6 pe-1 ps-1">
                  <ul class="list-unstyled">
                    <li>
                      <a href="<?php echo base_url(); ?>assets/#">Security</a>
                    </li>
                    <li>
                      <a href="<?php echo base_url(); ?>assets/#">Billing</a>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="row mb-1 ms-0 me-0">
                <div class="col-12 p-1 mb-2 pt-2">
                  <div class="text-extra-small text-primary">APPLICATION</div>
                </div>
                <div class="col-6 ps-1 pe-1">
                  <ul class="list-unstyled">
                    <li>
                      <a href="<?php echo base_url(); ?>assets/#">Themes</a>
                    </li>
                    <li>
                      <a href="<?php echo base_url(); ?>assets/#">Language</a>
                    </li>
                  </ul>
                </div>
                <div class="col-6 pe-1 ps-1">
                  <ul class="list-unstyled">
                    <li>
                      <a href="<?php echo base_url(); ?>assets/#">Devices</a>
                    </li>
                    <li>
                      <a href="<?php echo base_url(); ?>assets/#">Storage</a>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="row mb-1 ms-0 me-0">
                <div class="col-12 p-1 mb-3 pt-3">
                  <div class="separator-light"></div>
                </div>
                <div class="col-6 ps-1 pe-1">
                  <ul class="list-unstyled">
                    <li>
                      <a href="<?php echo base_url(); ?>assets/#">
                        <i data-acorn-icon="help" class="me-2" data-acorn-size="17"></i>
                        <span class="align-middle">Help</span>
                      </a>
                    </li>
                    <li>
                      <a href="<?php echo base_url(); ?>assets/#">
                        <i data-acorn-icon="file-text" class="me-2" data-acorn-size="17"></i>
                        <span class="align-middle">Docs</span>
                      </a>
                    </li>
                  </ul>
                </div>
                <div class="col-6 pe-1 ps-1">
                  <ul class="list-unstyled">
                    <li>
                      <a href="<?php echo base_url(); ?>assets/#">
                        <i data-acorn-icon="gear" class="me-2" data-acorn-size="17"></i>
                        <span class="align-middle">Settings</span>
                      </a>
                    </li>
                    <li>
                      <a href="<?php echo base_url(); ?>assets/#">
                        <i data-acorn-icon="logout" class="me-2" data-acorn-size="17"></i>
                        <span class="align-middle">Logout</span>
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <!-- User Menu End -->

          <!-- Icons Menu Start -->
          <ul class="list-unstyled list-inline text-center menu-icons">
            <li class="list-inline-item">
              <a href="<?php echo base_url(); ?>assets/#" data-bs-toggle="modal" data-bs-target="#searchPagesModal">
                <i data-acorn-icon="search" data-acorn-size="18"></i>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="<?php echo base_url(); ?>assets/#" id="pinButton" class="pin-button">
                <i data-acorn-icon="lock-on" class="unpin" data-acorn-size="18"></i>
                <i data-acorn-icon="lock-off" class="pin" data-acorn-size="18"></i>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="<?php echo base_url(); ?>assets/#" id="colorButton">
                <i data-acorn-icon="light-on" class="light" data-acorn-size="18"></i>
                <i data-acorn-icon="light-off" class="dark" data-acorn-size="18"></i>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="<?php echo base_url(); ?>assets/#" data-bs-toggle="dropdown" data-bs-target="#notifications" aria-haspopup="true" aria-expanded="false" class="notification-button">
                <div class="position-relative d-inline-flex">
                  <i data-acorn-icon="bell" data-acorn-size="18"></i>
                  <span class="position-absolute notification-dot rounded-xl"></span>
                </div>
              </a>
              <div class="dropdown-menu dropdown-menu-end wide notification-dropdown scroll-out" id="notifications">
                <div class="scroll">
                  <ul class="list-unstyled border-last-none">
                    <li class="mb-3 pb-3 border-bottom border-separator-light d-flex">
                      <img src="<?php echo base_url(); ?>assets/img/profile/profile-1.webp" class="me-3 sw-4 sh-4 rounded-xl align-self-center" alt="..." />
                      <div class="align-self-center">
                        <a href="<?php echo base_url(); ?>assets/#">Joisse Kaycee just sent a new comment!</a>
                      </div>
                    </li>
                    <li class="mb-3 pb-3 border-bottom border-separator-light d-flex">
                      <img src="<?php echo base_url(); ?>assets/img/profile/profile-2.webp" class="me-3 sw-4 sh-4 rounded-xl align-self-center" alt="..." />
                      <div class="align-self-center">
                        <a href="<?php echo base_url(); ?>assets/#">New order received! It is total $147,20.</a>
                      </div>
                    </li>
                    <li class="mb-3 pb-3 border-bottom border-separator-light d-flex">
                      <img src="<?php echo base_url(); ?>assets/img/profile/profile-3.webp" class="me-3 sw-4 sh-4 rounded-xl align-self-center" alt="..." />
                      <div class="align-self-center">
                        <a href="<?php echo base_url(); ?>assets/#">3 items just added to wish list by a user!</a>
                      </div>
                    </li>
                    <li class="pb-3 pb-3 border-bottom border-separator-light d-flex">
                      <img src="<?php echo base_url(); ?>assets/img/profile/profile-6.webp" class="me-3 sw-4 sh-4 rounded-xl align-self-center" alt="..." />
                      <div class="align-self-center">
                        <a href="<?php echo base_url(); ?>assets/#">Kirby Peters just sent a new message!</a>
                      </div>
                    </li>
                  </ul>
                </div>
              </div>
            </li>
          </ul>
          <!-- Icons Menu End -->

          <!-- Menu Start -->
			<?php $this->load->view('admin/common/top_menu'); ?>
          <!-- Menu End -->

          <!-- Mobile Buttons Start -->
          <div class="mobile-buttons-container">
            <!-- Scrollspy Mobile Button Start -->
            <a href="<?php echo base_url(); ?>assets/#" id="scrollSpyButton" class="spy-button" data-bs-toggle="dropdown">
              <i data-acorn-icon="menu-dropdown"></i>
            </a>
            <!-- Scrollspy Mobile Button End -->

            <!-- Scrollspy Mobile Dropdown Start -->
            <div class="dropdown-menu dropdown-menu-end" id="scrollSpyDropdown"></div>
            <!-- Scrollspy Mobile Dropdown End -->

            <!-- Menu Button Start -->
            <a href="<?php echo base_url(); ?>assets/#" id="mobileMenuButton" class="menu-button">
              <i data-acorn-icon="menu"></i>
            </a>
            <!-- Menu Button End -->
          </div>
          <!-- Mobile Buttons End -->
        </div>
        <div class="nav-shadow"></div>
      </div>

      <main>
        <div class="container">
          <div class="row">
            <div class="col-12">
              <div class="page-title-container">
                <h1 class="mb-0 pb-0 display-4" id="title">Analytic Dashboard</h1>
                <nav class="breadcrumb-container d-inline-block" aria-label="breadcrumb">
                  <ul class="breadcrumb pt-0">
                    <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>assets/Dashboards.Default.html">Home</a></li>
                    <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>assets/Dashboards.html">Dashboards</a></li>
                  </ul>
                </nav>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-12 col-lg-6">
              <!-- Stats Start -->
              <div class="d-flex">
                <div class="dropdown-as-select me-3" data-setActive="false" data-childSelector="span">
                  <a class="pe-0 pt-0 align-top lh-1 dropdown-toggle" href="<?php echo base_url(); ?>assets/#" data-bs-toggle="dropdown" aria-expanded="false" aria-haspopup="true">
                    <span class="small-title"></span>
                  </a>
                  <div class="dropdown-menu font-standard">
                    <div class="nav flex-column" role="tablist">
                      <a class="active dropdown-item text-medium" href="<?php echo base_url(); ?>assets/#" aria-selected="true" role="tab">Today's</a>
                      <a class="dropdown-item text-medium" href="<?php echo base_url(); ?>assets/#" aria-selected="false" role="tab">Weekly</a>
                      <a class="dropdown-item text-medium" href="<?php echo base_url(); ?>assets/#" aria-selected="false" role="tab">Monthly</a>
                      <a class="dropdown-item text-medium" href="<?php echo base_url(); ?>assets/#" aria-selected="false" role="tab">Yearly</a>
                    </div>
                  </div>
                </div>
                <h2 class="small-title">Stats</h2>
              </div>

              <div class="mb-5">
                <div class="row g-2">
                  <div class="col-12 col-sm-6 col-lg-6">
                    <div class="card sh-11 hover-scale-up cursor-pointer">
                      <div class="h-100 row g-0 card-body align-items-center py-3">
                        <div class="col-auto pe-3">
                          <div class="bg-gradient-light sh-5 sw-5 rounded-xl d-flex justify-content-center align-items-center">
                            <i data-acorn-icon="navigate-diagonal" class="text-white"></i>
                          </div>
                        </div>
                        <div class="col">
                          <div class="row gx-2 d-flex align-content-center">
                            <div class="col-12 col-xl d-flex">
                              <div class="d-flex align-items-center lh-1-25">Shipped Orders</div>
                            </div>
                            <div class="col-12 col-xl-auto">
                              <div class="cta-2 text-primary">22</div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="col-12 col-sm-6 col-lg-6">
                    <div class="card sh-11 hover-scale-up cursor-pointer">
                      <div class="h-100 row g-0 card-body align-items-center py-3">
                        <div class="col-auto pe-3">
                          <div class="bg-gradient-light sh-5 sw-5 rounded-xl d-flex justify-content-center align-items-center">
                            <i data-acorn-icon="check" class="text-white"></i>
                          </div>
                        </div>
                        <div class="col">
                          <div class="row gx-2 d-flex align-content-center">
                            <div class="col-12 col-xl d-flex">
                              <div class="d-flex align-items-center lh-1-25">Delivered Orders</div>
                            </div>
                            <div class="col-12 col-xl-auto">
                              <div class="cta-2 text-primary">35</div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="col-12 col-sm-6 col-lg-6">
                    <div class="card sh-11 hover-scale-up cursor-pointer">
                      <div class="h-100 row g-0 card-body align-items-center py-3">
                        <div class="col-auto pe-3">
                          <div class="bg-gradient-light sh-5 sw-5 rounded-xl d-flex justify-content-center align-items-center">
                            <i data-acorn-icon="alarm" class="text-white"></i>
                          </div>
                        </div>
                        <div class="col">
                          <div class="row gx-2 d-flex align-content-center">
                            <div class="col-12 col-xl d-flex">
                              <div class="d-flex align-items-center lh-1-25">Pending Orders</div>
                            </div>
                            <div class="col-12 col-xl-auto">
                              <div class="cta-2 text-primary">14</div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="col-12 col-sm-6 col-lg-6">
                    <div class="card sh-11 hover-scale-up cursor-pointer">
                      <div class="h-100 row g-0 card-body align-items-center py-3">
                        <div class="col-auto pe-3">
                          <div class="bg-gradient-light sh-5 sw-5 rounded-xl d-flex justify-content-center align-items-center">
                            <i data-acorn-icon="sync-horizontal" class="text-white"></i>
                          </div>
                        </div>
                        <div class="col">
                          <div class="row gx-2 d-flex align-content-center">
                            <div class="col-12 col-xl d-flex">
                              <div class="d-flex align-items-center lh-1-25">Unconfirmed Orders</div>
                            </div>
                            <div class="col-12 col-xl-auto">
                              <div class="cta-2 text-primary">3</div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- Stats End -->

              <!-- Sales Start -->
              <h2 class="small-title">Sales</h2>
              <div class="card mb-5 sh-40">
                <div class="card-body">
                  <div class="custom-legend-container mb-3 pb-3 d-flex flex-row"></div>
                  <!-- Custom legend template used by js -->
                  <template class="custom-legend-item">
                    <a href="<?php echo base_url(); ?>assets/#" class="d-flex flex-row g-0 align-items-center me-5">
                      <div class="pe-2">
                        <div class="icon-container border sh-5 sw-5 rounded-xl d-flex justify-content-center align-items-center">
                          <i class="icon"></i>
                        </div>
                      </div>
                      <div>
                        <div class="text p mb-0 d-flex align-items-center text-small text-muted">Title</div>
                        <div class="value cta-4">Value</div>
                      </div>
                    </a>
                  </template>
                  <!-- Custom Legend Template End -->
                  <div class="sh-25">
                    <canvas id="customLegendBarChart"></canvas>
                    <!-- Custom tooltip template used by js -->
                    <div
                      class="custom-tooltip position-absolute bg-foreground rounded-md border border-separator pe-none p-3 d-flex z-index-1 align-items-center opacity-0 basic-transform-transition"
                    >
                      <div
                        class="icon-container border d-flex align-middle align-items-center justify-content-center align-self-center rounded-xl sh-5 sw-5 rounded-xl me-3"
                      >
                        <span class="icon"></span>
                      </div>
                      <div>
                        <span class="text d-flex align-middle text-muted align-items-center text-small">Bread</span>
                        <span class="value d-flex align-middle align-items-center cta-4">300</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- Sales End -->
            </div>

            <!-- Products Start -->
            <div class="col-12 col-lg-6 mb-5">
              <div class="d-flex justify-content-between">
                <h2 class="small-title">Stocks</h2>
                <button class="btn btn-icon btn-icon-end btn-xs btn-background-alternate p-0 text-small" type="button">
                  <span class="align-bottom">View More</span>
                  <i data-acorn-icon="chevron-right" class="align-middle" data-acorn-size="12"></i>
                </button>
              </div>
              <div class="scroll-out">
                <div class="scroll-by-count" data-count="8">
                  <div class="card mb-2 sh-10 sh-md-8">
                    <div class="card-body pt-0 pb-0 h-100">
                      <div class="row g-0 h-100 align-content-center">
                        <div class="col-12 col-md-5 d-flex align-items-center mb-2 mb-md-0">
                          <a href="<?php echo base_url(); ?>assets/Pages.Portfolio.Detail.html" class="body-link text-truncate">Barmbrack</a>
                        </div>
                        <div class="col-4 col-md-2 d-flex align-items-center text-muted text-medium mb-1 mb-md-0">
                          <span class="badge bg-outline-tertiary me-1">STOCK</span>
                        </div>
                        <div class="col-4 col-md-3 d-flex align-items-center text-medium text-danger justify-content-center">
                          <i data-acorn-icon="arrow-bottom" data-acorn-size="14" class="me-1"></i>
                          <span class="text-medium">-18.4%</span>
                        </div>
                        <div class="col-4 col-md-2 d-flex align-items-center justify-content-end text-muted text-medium">
                          <span>$ 3.25</span>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="card mb-2 sh-10 sh-md-8">
                    <div class="card-body pt-0 pb-0 h-100">
                      <div class="row g-0 h-100 align-content-center">
                        <div class="col-12 col-md-5 d-flex align-items-center mb-2 mb-md-0">
                          <a href="<?php echo base_url(); ?>assets/Pages.Portfolio.Detail.html" class="body-link text-truncate">Cheesymite Scroll</a>
                        </div>
                        <div class="col-4 col-md-2 d-flex align-items-center text-muted text-medium mb-1 mb-md-0">
                          <span class="badge bg-outline-tertiary me-1">STOCK</span>
                        </div>
                        <div class="col-4 col-md-3 d-flex align-items-center text-medium text-danger justify-content-center">
                          <i data-acorn-icon="arrow-bottom" data-acorn-size="14" class="me-1"></i>
                          <span class="text-medium">-13.4%</span>
                        </div>
                        <div class="col-4 col-md-2 d-flex align-items-center justify-content-end text-muted text-medium">
                          <span>$ 4.50</span>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="card mb-2 sh-10 sh-md-8">
                    <div class="card-body pt-0 pb-0 h-100">
                      <div class="row g-0 h-100 align-content-center">
                        <div class="col-12 col-md-5 d-flex align-items-center mb-2 mb-md-0">
                          <a href="<?php echo base_url(); ?>assets/Pages.Portfolio.Detail.html" class="body-link text-truncate">Cholermüs</a>
                        </div>
                        <div class="col-4 col-md-2 d-flex align-items-center text-muted text-medium mb-1 mb-md-0">
                          <span class="badge bg-outline-primary me-1">SALE</span>
                        </div>
                        <div class="col-4 col-md-3 d-flex align-items-center text-medium text-success justify-content-center">
                          <i data-acorn-icon="arrow-top" data-acorn-size="14" class="me-1"></i>
                          <span class="text-medium">+9.7%</span>
                        </div>
                        <div class="col-4 col-md-2 d-flex align-items-center justify-content-end text-muted text-medium">
                          <span>$ 1.75</span>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="card mb-2 sh-10 sh-md-8">
                    <div class="card-body pt-0 pb-0 h-100">
                      <div class="row g-0 h-100 align-content-center">
                        <div class="col-12 col-md-5 d-flex align-items-center mb-2 mb-md-0">
                          <a href="<?php echo base_url(); ?>assets/Pages.Portfolio.Detail.html" class="body-link text-truncate">Ruisreikäleipä</a>
                        </div>
                        <div class="col-4 col-md-2 d-flex align-items-center text-muted text-medium mb-1 mb-md-0">
                          <span class="badge bg-outline-primary me-1">SALE</span>
                        </div>
                        <div class="col-4 col-md-3 d-flex align-items-center text-medium text-success justify-content-center">
                          <i data-acorn-icon="arrow-top" data-acorn-size="14" class="me-1"></i>
                          <span class="text-medium">+5.3%</span>
                        </div>
                        <div class="col-4 col-md-2 d-flex align-items-center justify-content-end text-muted text-medium">
                          <span>$ 3.00</span>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="card mb-2 sh-10 sh-md-8">
                    <div class="card-body pt-0 pb-0 h-100">
                      <div class="row g-0 h-100 align-content-center">
                        <div class="col-12 col-md-5 d-flex align-items-center mb-2 mb-md-0">
                          <a href="<?php echo base_url(); ?>assets/Pages.Portfolio.Detail.html" class="body-link text-truncate">Bagel</a>
                        </div>
                        <div class="col-4 col-md-2 d-flex align-items-center text-muted text-medium mb-1 mb-md-0">
                          <span class="badge bg-outline-tertiary me-1">STOCK</span>
                        </div>
                        <div class="col-4 col-md-3 d-flex align-items-center text-medium text-danger justify-content-center">
                          <i data-acorn-icon="arrow-bottom" data-acorn-size="14" class="me-1"></i>
                          <span class="text-medium">-2.3%</span>
                        </div>
                        <div class="col-4 col-md-2 d-flex align-items-center justify-content-end text-muted text-medium">
                          <span>$ 4.25</span>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="card mb-2 sh-10 sh-md-8">
                    <div class="card-body pt-0 pb-0 h-100">
                      <div class="row g-0 h-100 align-content-center">
                        <div class="col-12 col-md-5 d-flex align-items-center mb-2 mb-md-0">
                          <a href="<?php echo base_url(); ?>assets/Pages.Portfolio.Detail.html" class="body-link text-truncate">Buccellato di Lucca</a>
                        </div>
                        <div class="col-4 col-md-2 d-flex align-items-center text-muted text-medium mb-1 mb-md-0">
                          <span class="badge bg-outline-secondary me-1">TREND</span>
                        </div>
                        <div class="col-4 col-md-3 d-flex align-items-center text-medium text-danger justify-content-center">
                          <i data-acorn-icon="arrow-bottom" data-acorn-size="14" class="me-1"></i>
                          <span class="text-medium">-5.3%</span>
                        </div>
                        <div class="col-4 col-md-2 d-flex align-items-center justify-content-end text-muted text-medium">
                          <span>$ 3.75</span>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="card mb-2 sh-10 sh-md-8">
                    <div class="card-body pt-0 pb-0 h-100">
                      <div class="row g-0 h-100 align-content-center">
                        <div class="col-12 col-md-5 d-flex align-items-center mb-2 mb-md-0">
                          <a href="<?php echo base_url(); ?>assets/Pages.Portfolio.Detail.html" class="body-link text-truncate">Chapati</a>
                        </div>
                        <div class="col-4 col-md-2 d-flex align-items-center text-muted text-medium mb-1 mb-md-0">
                          <span class="badge bg-outline-primary me-1">SALE</span>
                        </div>
                        <div class="col-4 col-md-3 d-flex align-items-center text-medium text-success justify-content-center">
                          <i data-acorn-icon="arrow-top" data-acorn-size="14" class="me-1"></i>
                          <span class="text-medium">+7.1%</span>
                        </div>
                        <div class="col-4 col-md-2 d-flex align-items-center justify-content-end text-muted text-medium">
                          <span>$ 1.85</span>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="card mb-2 sh-10 sh-md-8">
                    <div class="card-body pt-0 pb-0 h-100">
                      <div class="row g-0 h-100 align-content-center">
                        <div class="col-12 col-md-5 d-flex align-items-center mb-2 mb-md-0">
                          <a href="<?php echo base_url(); ?>assets/Pages.Portfolio.Detail.html" class="body-link text-truncate">Pullman Loaf</a>
                        </div>
                        <div class="col-4 col-md-2 d-flex align-items-center text-muted text-medium mb-1 mb-md-0">
                          <span class="badge bg-outline-secondary me-1">TREND</span>
                        </div>
                        <div class="col-4 col-md-3 d-flex align-items-center text-medium text-success justify-content-center">
                          <i data-acorn-icon="arrow-top" data-acorn-size="14" class="me-1"></i>
                          <span class="text-medium">+2.3%</span>
                        </div>
                        <div class="col-4 col-md-2 d-flex align-items-center justify-content-end text-muted text-medium">
                          <span>$ 2.25</span>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="card mb-2 sh-10 sh-md-8">
                    <div class="card-body pt-0 pb-0 h-100">
                      <div class="row g-0 h-100 align-content-center">
                        <div class="col-12 col-md-5 d-flex align-items-center mb-2 mb-md-0">
                          <a href="<?php echo base_url(); ?>assets/Pages.Portfolio.Detail.html" class="body-link text-truncate">Chapati</a>
                        </div>
                        <div class="col-4 col-md-2 d-flex align-items-center text-muted text-medium mb-1 mb-md-0">
                          <span class="badge bg-outline-primary me-1">SALE</span>
                        </div>
                        <div class="col-4 col-md-3 d-flex align-items-center text-medium text-success justify-content-center">
                          <i data-acorn-icon="arrow-top" data-acorn-size="14" class="me-1"></i>
                          <span class="text-medium">+7.1%</span>
                        </div>
                        <div class="col-4 col-md-2 d-flex align-items-center justify-content-end text-muted text-medium">
                          <span>$ 1.85</span>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="card mb-2 sh-10 sh-md-8">
                    <div class="card-body pt-0 pb-0 h-100">
                      <div class="row g-0 h-100 align-content-center">
                        <div class="col-12 col-md-5 d-flex align-items-center mb-2 mb-md-0">
                          <a href="<?php echo base_url(); ?>assets/Pages.Portfolio.Detail.html" class="body-link text-truncate">Fougasse</a>
                        </div>
                        <div class="col-4 col-md-2 d-flex align-items-center text-muted text-medium mb-1 mb-md-0">
                          <span class="badge bg-outline-primary me-1">SALE</span>
                        </div>
                        <div class="col-4 col-md-3 d-flex align-items-center text-medium text-success justify-content-center">
                          <i data-acorn-icon="arrow-top" data-acorn-size="14" class="me-1"></i>
                          <span class="text-medium">+2.3%</span>
                        </div>
                        <div class="col-4 col-md-2 d-flex align-items-center justify-content-end text-muted text-medium">
                          <span>$ 2.25</span>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="card mb-2 sh-10 sh-md-8">
                    <div class="card-body pt-0 pb-0 h-100">
                      <div class="row g-0 h-100 align-content-center">
                        <div class="col-12 col-md-5 d-flex align-items-center mb-2 mb-md-0">
                          <a href="<?php echo base_url(); ?>assets/Pages.Portfolio.Detail.html" class="body-link text-truncate">Biscotti</a>
                        </div>
                        <div class="col-4 col-md-2 d-flex align-items-center text-muted text-medium mb-1 mb-md-0">
                          <span class="badge bg-outline-secondary me-1">TREND</span>
                        </div>
                        <div class="col-4 col-md-3 d-flex align-items-center text-medium text-success justify-content-center">
                          <i data-acorn-icon="arrow-top" data-acorn-size="14" class="me-1"></i>
                          <span class="text-medium">+2.3%</span>
                        </div>
                        <div class="col-4 col-md-2 d-flex align-items-center justify-content-end text-muted text-medium">
                          <span>$ 2.25</span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- Products End -->
          </div>

          <div class="row">
            <!-- Logs Start -->
            <div class="col-xl-6 mb-5">
              <h2 class="small-title">Logs</h2>
              <div class="card sh-35 h-xl-100-card">
                <div class="card-body scroll-out h-100">
                  <div class="scroll h-100">
                    <div class="row g-0 mb-2">
                      <div class="col-auto">
                        <div class="sw-3 d-inline-block d-flex justify-content-start align-items-center h-100">
                          <div class="sh-3">
                            <i data-acorn-icon="circle" class="text-primary align-top"></i>
                          </div>
                        </div>
                      </div>
                      <div class="col">
                        <div class="card-body d-flex flex-column pt-0 pb-0 ps-3 pe-4 h-100 justify-content-center">
                          <div class="d-flex flex-column">
                            <div class="text-alternate mt-n1 lh-1-25">New user registiration</div>
                          </div>
                        </div>
                      </div>
                      <div class="col-auto">
                        <div class="d-inline-block d-flex justify-content-end align-items-center h-100">
                          <div class="text-muted ms-2 mt-n1 lh-1-25">18 Dec</div>
                        </div>
                      </div>
                    </div>
                    <div class="row g-0 mb-2">
                      <div class="col-auto">
                        <div class="sw-3 d-inline-block d-flex justify-content-start align-items-center h-100">
                          <div class="sh-3">
                            <i data-acorn-icon="circle" class="text-primary align-top"></i>
                          </div>
                        </div>
                      </div>
                      <div class="col">
                        <div class="card-body d-flex flex-column pt-0 pb-0 ps-3 pe-4 h-100 justify-content-center">
                          <div class="d-flex flex-column">
                            <div class="text-alternate mt-n1 lh-1-25">3 new product added</div>
                          </div>
                        </div>
                      </div>
                      <div class="col-auto">
                        <div class="d-inline-block d-flex justify-content-end align-items-center h-100">
                          <div class="text-muted ms-2 mt-n1 lh-1-25">18 Dec</div>
                        </div>
                      </div>
                    </div>
                    <div class="row g-0 mb-2">
                      <div class="col-auto">
                        <div class="sw-3 d-inline-block d-flex justify-content-start align-items-center h-100">
                          <div class="sh-3">
                            <i data-acorn-icon="square" class="text-secondary align-top"></i>
                          </div>
                        </div>
                      </div>
                      <div class="col">
                        <div class="card-body d-flex flex-column pt-0 pb-0 ps-3 pe-4 h-100 justify-content-center">
                          <div class="d-flex flex-column">
                            <div class="text-alternate mt-n1 lh-1-25">
                              Product out of stock:
                              <a href="<?php echo base_url(); ?>assets/#" class="alternate-link underline-link">Breadstick</a>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-auto">
                        <div class="d-inline-block d-flex justify-content-end align-items-center h-100">
                          <div class="text-muted ms-2 mt-n1 lh-1-25">16 Dec</div>
                        </div>
                      </div>
                    </div>
                    <div class="row g-0 mb-2">
                      <div class="col-auto">
                        <div class="sw-3 d-inline-block d-flex justify-content-start align-items-center h-100">
                          <div class="sh-3">
                            <i data-acorn-icon="square" class="text-secondary align-top"></i>
                          </div>
                        </div>
                      </div>
                      <div class="col">
                        <div class="card-body d-flex flex-column pt-0 pb-0 ps-3 pe-4 h-100 justify-content-center">
                          <div class="d-flex flex-column">
                            <div class="text-alternate mt-n1 lh-1-25">Category page returned an error</div>
                          </div>
                        </div>
                      </div>
                      <div class="col-auto">
                        <div class="d-inline-block d-flex justify-content-end align-items-center h-100">
                          <div class="text-muted ms-2 mt-n1 lh-1-25">15 Dec</div>
                        </div>
                      </div>
                    </div>
                    <div class="row g-0 mb-2">
                      <div class="col-auto">
                        <div class="sw-3 d-inline-block d-flex justify-content-start align-items-center h-100">
                          <div class="sh-3">
                            <i data-acorn-icon="circle" class="text-primary align-top"></i>
                          </div>
                        </div>
                      </div>
                      <div class="col">
                        <div class="card-body d-flex flex-column pt-0 pb-0 ps-3 pe-4 h-100 justify-content-center">
                          <div class="d-flex flex-column">
                            <div class="text-alternate mt-n1 lh-1-25">14 products added</div>
                          </div>
                        </div>
                      </div>
                      <div class="col-auto">
                        <div class="d-inline-block d-flex justify-content-end align-items-center h-100">
                          <div class="text-muted ms-2 mt-n1 lh-1-25">15 Dec</div>
                        </div>
                      </div>
                    </div>
                    <div class="row g-0 mb-2">
                      <div class="col-auto">
                        <div class="sw-3 d-inline-block d-flex justify-content-start align-items-center h-100">
                          <div class="sh-3">
                            <i data-acorn-icon="hexagon" class="text-tertiary align-top"></i>
                          </div>
                        </div>
                      </div>
                      <div class="col">
                        <div class="card-body d-flex flex-column pt-0 pb-0 ps-3 pe-4 h-100 justify-content-center">
                          <div class="d-flex flex-column">
                            <div class="text-alternate mt-n1 lh-1-25">
                              New sale:
                              <a href="<?php echo base_url(); ?>assets/#" class="alternate-link underline-link">Steirer Brot</a>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-auto">
                        <div class="d-inline-block d-flex justify-content-end align-items-center h-100">
                          <div class="text-muted ms-2 mt-n1 lh-1-25">15 Dec</div>
                        </div>
                      </div>
                    </div>
                    <div class="row g-0 mb-2">
                      <div class="col-auto">
                        <div class="sw-3 d-inline-block d-flex justify-content-start align-items-center h-100">
                          <div class="sh-3">
                            <i data-acorn-icon="hexagon" class="text-tertiary align-top"></i>
                          </div>
                        </div>
                      </div>
                      <div class="col">
                        <div class="card-body d-flex flex-column pt-0 pb-0 ps-3 pe-4 h-100 justify-content-center">
                          <div class="d-flex flex-column">
                            <div class="text-alternate mt-n1 lh-1-25">
                              New sale:
                              <a href="<?php echo base_url(); ?>assets/#" class="alternate-link underline-link">Soda Bread</a>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-auto">
                        <div class="d-inline-block d-flex justify-content-end align-items-center h-100">
                          <div class="text-muted ms-2 mt-n1 lh-1-25">15 Dec</div>
                        </div>
                      </div>
                    </div>
                    <div class="row g-0 mb-2">
                      <div class="col-auto">
                        <div class="sw-3 d-inline-block d-flex justify-content-start align-items-center h-100">
                          <div class="sh-3">
                            <i data-acorn-icon="triangle" class="text-warning align-top"></i>
                          </div>
                        </div>
                      </div>
                      <div class="col">
                        <div class="card-body d-flex flex-column pt-0 pb-0 ps-3 pe-4 h-100 justify-content-center">
                          <div class="d-flex flex-column">
                            <div class="text-alternate mt-n1 lh-1-25">Recived a support ticket</div>
                          </div>
                        </div>
                      </div>
                      <div class="col-auto">
                        <div class="d-inline-block d-flex justify-content-end align-items-center h-100">
                          <div class="text-muted ms-2 mt-n1 lh-1-25">14 Dec</div>
                        </div>
                      </div>
                    </div>
                    <div class="row g-0 mb-2">
                      <div class="col-auto">
                        <div class="sw-3 d-inline-block d-flex justify-content-start align-items-center h-100">
                          <div class="sh-3">
                            <i data-acorn-icon="hexagon" class="text-tertiary align-top"></i>
                          </div>
                        </div>
                      </div>
                      <div class="col">
                        <div class="card-body d-flex flex-column pt-0 pb-0 ps-3 pe-4 h-100 justify-content-center">
                          <div class="d-flex flex-column">
                            <div class="text-alternate mt-n1 lh-1-25">
                              New sale:
                              <a href="<?php echo base_url(); ?>assets/#" class="alternate-link underline-link">Cholermüs</a>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-auto">
                        <div class="d-inline-block d-flex justify-content-end align-items-center h-100">
                          <div class="text-muted ms-2 mt-n1 lh-1-25">13 Dec</div>
                        </div>
                      </div>
                    </div>
                    <div class="row g-0 mb-2">
                      <div class="col-auto">
                        <div class="sw-3 d-inline-block d-flex justify-content-start align-items-center h-100">
                          <div class="sh-3">
                            <i data-acorn-icon="hexagon" class="text-tertiary align-top"></i>
                          </div>
                        </div>
                      </div>
                      <div class="col">
                        <div class="card-body d-flex flex-column pt-0 pb-0 ps-3 pe-4 h-100 justify-content-center">
                          <div class="d-flex flex-column">
                            <div class="text-alternate mt-n1 lh-1-25">
                              New sale:
                              <a href="<?php echo base_url(); ?>assets/#" class="alternate-link underline-link">Bazlama</a>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-auto">
                        <div class="d-inline-block d-flex justify-content-end align-items-center h-100">
                          <div class="text-muted ms-2 mt-n1 lh-1-25">13 Dec</div>
                        </div>
                      </div>
                    </div>
                    <div class="row g-0 mb-2">
                      <div class="col-auto">
                        <div class="sw-3 d-inline-block d-flex justify-content-start align-items-center h-100">
                          <div class="sh-3">
                            <i data-acorn-icon="triangle" class="text-warning align-top"></i>
                          </div>
                        </div>
                      </div>
                      <div class="col">
                        <div class="card-body d-flex flex-column pt-0 pb-0 ps-3 pe-4 h-100 justify-content-center">
                          <div class="d-flex flex-column">
                            <div class="text-alternate mt-n1 lh-1-25">Recived a comment</div>
                          </div>
                        </div>
                      </div>
                      <div class="col-auto">
                        <div class="d-inline-block d-flex justify-content-end align-items-center h-100">
                          <div class="text-muted ms-2 mt-n1 lh-1-25">13 Dec</div>
                        </div>
                      </div>
                    </div>
                    <div class="row g-0 mb-2">
                      <div class="col-auto">
                        <div class="sw-3 d-inline-block d-flex justify-content-start align-items-center h-100">
                          <div class="sh-3">
                            <i data-acorn-icon="triangle" class="text-warning align-top"></i>
                          </div>
                        </div>
                      </div>
                      <div class="col">
                        <div class="card-body d-flex flex-column pt-0 pb-0 ps-3 pe-4 h-100 justify-content-center">
                          <div class="d-flex flex-column">
                            <div class="text-alternate mt-n1 lh-1-25">Recived an email</div>
                          </div>
                        </div>
                      </div>
                      <div class="col-auto">
                        <div class="d-inline-block d-flex justify-content-end align-items-center h-100">
                          <div class="text-muted ms-2 mt-n1 lh-1-25">13 Dec</div>
                        </div>
                      </div>
                    </div>
                    <div class="row g-0 mb-2">
                      <div class="col-auto">
                        <div class="sw-3 d-inline-block d-flex justify-content-start align-items-center h-100">
                          <div class="sh-3">
                            <i data-acorn-icon="hexagon" class="text-tertiary align-top"></i>
                          </div>
                        </div>
                      </div>
                      <div class="col">
                        <div class="card-body d-flex flex-column pt-0 pb-0 ps-3 pe-4 h-100 justify-content-center">
                          <div class="d-flex flex-column">
                            <div class="text-alternate mt-n1 lh-1-25">
                              New sale:
                              <a href="<?php echo base_url(); ?>assets/#" class="alternate-link underline-link">Bazlama</a>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-auto">
                        <div class="d-inline-block d-flex justify-content-end align-items-center h-100">
                          <div class="text-muted ms-2 mt-n1 lh-1-25">12 Dec</div>
                        </div>
                      </div>
                    </div>
                    <div class="row g-0 mb-2">
                      <div class="col-auto">
                        <div class="sw-3 d-inline-block d-flex justify-content-start align-items-center h-100">
                          <div class="sh-3">
                            <i data-acorn-icon="triangle" class="text-warning align-top"></i>
                          </div>
                        </div>
                      </div>
                      <div class="col">
                        <div class="card-body d-flex flex-column pt-0 pb-0 ps-3 pe-4 h-100 justify-content-center">
                          <div class="d-flex flex-column">
                            <div class="text-alternate mt-n1 lh-1-25">Recived a comment</div>
                          </div>
                        </div>
                      </div>
                      <div class="col-auto">
                        <div class="d-inline-block d-flex justify-content-end align-items-center h-100">
                          <div class="text-muted ms-2 mt-n1 lh-1-25">12 Dec</div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- Logs End -->

            <!-- Progress Start -->
            <div class="col-xl-6 mb-5">
              <h2 class="small-title">Progress</h2>
              <div class="row g-2">
                <div class="col-12 col-md-6">
                  <div class="card sh-13">
                    <div class="card-body py-0 d-flex">
                      <div class="row g-0 d-flex w-100 align-items-center">
                        <div class="col sh-6 d-flex flex-column justify-content-center custom-legend-container"></div>
                        <template class="custom-legend-item">
                          <div class="text-small text-muted text mt-2"></div>
                          <div class="cta-3 text-primary value"></div>
                        </template>
                        <div class="col-auto">
                          <canvas id="smallDoughnutChart1" class="sw-7 sh-7"></canvas>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-12 col-md-6">
                  <div class="card sh-13">
                    <div class="card-body py-0 d-flex">
                      <div class="row g-0 d-flex w-100 align-items-center">
                        <div class="col sh-7 d-flex flex-column justify-content-center custom-legend-container"></div>
                        <template class="custom-legend-item">
                          <div class="text-small text-muted text mt-2"></div>
                          <div class="cta-3 text-primary value"></div>
                        </template>
                        <div class="col-auto">
                          <canvas id="smallDoughnutChart2" class="sw-7 sh-7"></canvas>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-12 col-md-6">
                  <div class="card sh-13">
                    <div class="card-body py-0 d-flex">
                      <div class="row g-0 d-flex w-100 align-items-center">
                        <div class="col sh-7 d-flex flex-column justify-content-center custom-legend-container"></div>
                        <template class="custom-legend-item">
                          <div class="text-small text-muted text mt-2"></div>
                          <div class="cta-3 text-primary value"></div>
                        </template>
                        <div class="col-auto">
                          <canvas id="smallDoughnutChart3" class="sw-7 sh-7"></canvas>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-12 col-md-6">
                  <div class="card sh-13">
                    <div class="card-body py-0 d-flex">
                      <div class="row g-0 d-flex w-100 align-items-center">
                        <div class="col sh-7 d-flex flex-column justify-content-center custom-legend-container"></div>
                        <template class="custom-legend-item">
                          <div class="text-small text-muted text mt-2"></div>
                          <div class="cta-3 text-primary value"></div>
                        </template>
                        <div class="col-auto">
                          <canvas id="smallDoughnutChart4" class="sw-7 sh-7"></canvas>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-12 col-md-6">
                  <div class="card sh-13">
                    <div class="card-body py-0 d-flex">
                      <div class="row g-0 d-flex w-100 align-items-center">
                        <div class="col sh-7 d-flex flex-column justify-content-center custom-legend-container"></div>
                        <template class="custom-legend-item">
                          <div class="text-small text-muted text mt-2"></div>
                          <div class="cta-3 text-primary value"></div>
                        </template>
                        <div class="col-auto">
                          <canvas id="smallDoughnutChart5" class="sw-7 sh-7"></canvas>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-12 col-md-6">
                  <div class="card sh-13">
                    <div class="card-body py-0 d-flex">
                      <div class="row g-0 d-flex w-100 align-items-center">
                        <div class="col sh-7 d-flex flex-column justify-content-center custom-legend-container"></div>
                        <template class="custom-legend-item">
                          <div class="text-small text-muted text mt-2"></div>
                          <div class="cta-3 text-primary value"></div>
                        </template>
                        <div class="col-auto">
                          <canvas id="smallDoughnutChart6" class="sw-7 sh-7"></canvas>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- Progress End -->
          </div>

          <div class="row gy-5">
            <!-- Bubble Chart Start -->
            <div class="col-12 col-xl-6">
              <h2 class="small-title">Consumptions</h2>
              <div class="card h-xl-100-card sh-50">
                <div class="card-body h-100">
                  <div class="h-100">
                    <canvas id="bubbleChart"></canvas>
                  </div>
                </div>
              </div>
            </div>
            <!-- Bubble Chart End -->

            <!-- Small Line Charts Start -->
            <div class="col-12 col-xl-6" id="smallLineChartsContainer">
              <h2 class="small-title">Coins</h2>
              <div class="row g-2">
                <div class="col-12 col-md-6 col-xl-12">
                  <div class="card sh-13">
                    <div class="card-body py-0 d-flex align-items-center">
                      <div class="row g-0 d-flex w-100 align-items-center">
                        <div class="col d-flex flex-column justify-content-center">
                          <div class="custom-tooltip">
                            <div class="title heading"></div>
                            <div class="text-small text-muted text"></div>
                            <i class="icon d-inline-block align-middle me-1 text-primary" data-acorn-size="15"></i>
                            <div class="cta-4 text-primary value d-inline-block align-middle"></div>
                          </div>
                        </div>
                        <div class="col-auto">
                          <canvas id="smallLineChart1" class="sw-17 sw-xl-35 sh-10"></canvas>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-12 col-md-6 col-xl-12">
                  <div class="card sh-13">
                    <div class="card-body py-0 d-flex align-items-center">
                      <div class="row g-0 d-flex w-100 align-items-center">
                        <div class="col d-flex flex-column justify-content-center">
                          <div class="custom-tooltip">
                            <div class="title heading"></div>
                            <div class="text-small text-muted text"></div>
                            <i class="icon d-inline-block align-middle me-1 text-primary" data-acorn-size="15"></i>
                            <div class="cta-4 text-primary value d-inline-block align-middle"></div>
                          </div>
                        </div>
                        <div class="col-auto">
                          <canvas id="smallLineChart2" class="sw-17 sw-xl-35 sh-10"></canvas>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-12 col-md-6 col-xl-12">
                  <div class="card sh-13">
                    <div class="card-body py-0 d-flex align-items-center">
                      <div class="row g-0 d-flex w-100 align-items-center">
                        <div class="col d-flex flex-column justify-content-center">
                          <div class="custom-tooltip">
                            <div class="title heading"></div>
                            <div class="text-small text-muted text"></div>
                            <i class="icon d-inline-block align-middle me-1 text-primary" data-acorn-size="15"></i>
                            <div class="cta-4 text-primary value d-inline-block align-middle"></div>
                          </div>
                        </div>
                        <div class="col-auto">
                          <canvas id="smallLineChart3" class="sw-17 sw-xl-35 sh-10"></canvas>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-12 col-md-6 col-xl-12">
                  <div class="card sh-13">
                    <div class="card-body py-0 d-flex align-items-center">
                      <div class="row g-0 d-flex w-100 align-items-center">
                        <div class="col d-flex flex-column justify-content-center">
                          <div class="custom-tooltip">
                            <div class="title heading"></div>
                            <div class="text-small text-muted text"></div>
                            <i class="icon d-inline-block align-middle me-1 text-primary" data-acorn-size="15"></i>
                            <div class="cta-4 text-primary value d-inline-block align-middle"></div>
                          </div>
                        </div>
                        <div class="col-auto">
                          <canvas id="smallLineChart4" class="sw-17 sw-xl-35 sh-10"></canvas>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- Small Line Charts End -->
          </div>
        </div>
      </main>

      <!-- Layout Footer Start -->
      <footer>
        <div class="footer-content">
          <div class="container">
            <div class="row">
              <div class="col-12 col-sm-6">
                <p class="mb-0 text-muted text-medium">Colored Strategies 2021</p>
              </div>
              <div class="col-sm-6 d-none d-sm-block">
                <ul class="breadcrumb pt-0 pe-0 mb-0 float-end">
                  <li class="breadcrumb-item mb-0 text-medium">
                    <a href="<?php echo base_url(); ?>assets/https://1.envato.market/BX5oGy" target="_blank" class="btn-link">Review</a>
                  </li>
                  <li class="breadcrumb-item mb-0 text-medium">
                    <a href="<?php echo base_url(); ?>assets/https://1.envato.market/BX5oGy" target="_blank" class="btn-link">Purchase</a>
                  </li>
                  <li class="breadcrumb-item mb-0 text-medium">
                    <a href="<?php echo base_url(); ?>assets/https://acorn-html-docs.coloredstrategies.com/" target="_blank" class="btn-link">Docs</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </footer>
      <!-- Layout Footer End -->
    </div>

    <!-- Theme Settings Modal Start -->
    <div
      class="modal fade modal-right scroll-out-negative"
      id="settings"
      data-bs-backdrop="true"
      tabindex="-1"
      role="dialog"
      aria-labelledby="settings"
      aria-hidden="true"
    >
      <div class="modal-dialog modal-dialog-scrollable full" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Theme Settings</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>

          <div class="modal-body">
            <div class="scroll-track-visible">
              <div class="mb-5" id="color">
                <label class="mb-3 d-inline-block form-label">Color</label>
                <div class="row d-flex g-3 justify-content-between flex-wrap mb-3">
                  <a href="<?php echo base_url(); ?>assets/#" class="flex-grow-1 w-50 option col" data-value="light-blue" data-parent="color">
                    <div class="card rounded-md p-3 mb-1 no-shadow color">
                      <div class="blue-light"></div>
                    </div>
                    <div class="text-muted text-part">
                      <span class="text-extra-small align-middle">LIGHT BLUE</span>
                    </div>
                  </a>
                  <a href="<?php echo base_url(); ?>assets/#" class="flex-grow-1 w-50 option col" data-value="dark-blue" data-parent="color">
                    <div class="card rounded-md p-3 mb-1 no-shadow color">
                      <div class="blue-dark"></div>
                    </div>
                    <div class="text-muted text-part">
                      <span class="text-extra-small align-middle">DARK BLUE</span>
                    </div>
                  </a>
                </div>
                <div class="row d-flex g-3 justify-content-between flex-wrap mb-3">
                  <a href="<?php echo base_url(); ?>assets/#" class="flex-grow-1 w-50 option col" data-value="light-teal" data-parent="color">
                    <div class="card rounded-md p-3 mb-1 no-shadow color">
                      <div class="teal-light"></div>
                    </div>
                    <div class="text-muted text-part">
                      <span class="text-extra-small align-middle">LIGHT TEAL</span>
                    </div>
                  </a>
                  <a href="<?php echo base_url(); ?>assets/#" class="flex-grow-1 w-50 option col" data-value="dark-teal" data-parent="color">
                    <div class="card rounded-md p-3 mb-1 no-shadow color">
                      <div class="teal-dark"></div>
                    </div>
                    <div class="text-muted text-part">
                      <span class="text-extra-small align-middle">DARK TEAL</span>
                    </div>
                  </a>
                </div>
                <div class="row d-flex g-3 justify-content-between flex-wrap mb-3">
                  <a href="<?php echo base_url(); ?>assets/#" class="flex-grow-1 w-50 option col" data-value="light-sky" data-parent="color">
                    <div class="card rounded-md p-3 mb-1 no-shadow color">
                      <div class="sky-light"></div>
                    </div>
                    <div class="text-muted text-part">
                      <span class="text-extra-small align-middle">LIGHT SKY</span>
                    </div>
                  </a>
                  <a href="<?php echo base_url(); ?>assets/#" class="flex-grow-1 w-50 option col" data-value="dark-sky" data-parent="color">
                    <div class="card rounded-md p-3 mb-1 no-shadow color">
                      <div class="sky-dark"></div>
                    </div>
                    <div class="text-muted text-part">
                      <span class="text-extra-small align-middle">DARK SKY</span>
                    </div>
                  </a>
                </div>
                <div class="row d-flex g-3 justify-content-between flex-wrap mb-3">
                  <a href="<?php echo base_url(); ?>assets/#" class="flex-grow-1 w-50 option col" data-value="light-red" data-parent="color">
                    <div class="card rounded-md p-3 mb-1 no-shadow color">
                      <div class="red-light"></div>
                    </div>
                    <div class="text-muted text-part">
                      <span class="text-extra-small align-middle">LIGHT RED</span>
                    </div>
                  </a>
                  <a href="<?php echo base_url(); ?>assets/#" class="flex-grow-1 w-50 option col" data-value="dark-red" data-parent="color">
                    <div class="card rounded-md p-3 mb-1 no-shadow color">
                      <div class="red-dark"></div>
                    </div>
                    <div class="text-muted text-part">
                      <span class="text-extra-small align-middle">DARK RED</span>
                    </div>
                  </a>
                </div>
                <div class="row d-flex g-3 justify-content-between flex-wrap mb-3">
                  <a href="<?php echo base_url(); ?>assets/#" class="flex-grow-1 w-50 option col" data-value="light-green" data-parent="color">
                    <div class="card rounded-md p-3 mb-1 no-shadow color">
                      <div class="green-light"></div>
                    </div>
                    <div class="text-muted text-part">
                      <span class="text-extra-small align-middle">LIGHT GREEN</span>
                    </div>
                  </a>
                  <a href="<?php echo base_url(); ?>assets/#" class="flex-grow-1 w-50 option col" data-value="dark-green" data-parent="color">
                    <div class="card rounded-md p-3 mb-1 no-shadow color">
                      <div class="green-dark"></div>
                    </div>
                    <div class="text-muted text-part">
                      <span class="text-extra-small align-middle">DARK GREEN</span>
                    </div>
                  </a>
                </div>
                <div class="row d-flex g-3 justify-content-between flex-wrap mb-3">
                  <a href="<?php echo base_url(); ?>assets/#" class="flex-grow-1 w-50 option col" data-value="light-lime" data-parent="color">
                    <div class="card rounded-md p-3 mb-1 no-shadow color">
                      <div class="lime-light"></div>
                    </div>
                    <div class="text-muted text-part">
                      <span class="text-extra-small align-middle">LIGHT LIME</span>
                    </div>
                  </a>
                  <a href="<?php echo base_url(); ?>assets/#" class="flex-grow-1 w-50 option col" data-value="dark-lime" data-parent="color">
                    <div class="card rounded-md p-3 mb-1 no-shadow color">
                      <div class="lime-dark"></div>
                    </div>
                    <div class="text-muted text-part">
                      <span class="text-extra-small align-middle">DARK LIME</span>
                    </div>
                  </a>
                </div>
                <div class="row d-flex g-3 justify-content-between flex-wrap mb-3">
                  <a href="<?php echo base_url(); ?>assets/#" class="flex-grow-1 w-50 option col" data-value="light-pink" data-parent="color">
                    <div class="card rounded-md p-3 mb-1 no-shadow color">
                      <div class="pink-light"></div>
                    </div>
                    <div class="text-muted text-part">
                      <span class="text-extra-small align-middle">LIGHT PINK</span>
                    </div>
                  </a>
                  <a href="<?php echo base_url(); ?>assets/#" class="flex-grow-1 w-50 option col" data-value="dark-pink" data-parent="color">
                    <div class="card rounded-md p-3 mb-1 no-shadow color">
                      <div class="pink-dark"></div>
                    </div>
                    <div class="text-muted text-part">
                      <span class="text-extra-small align-middle">DARK PINK</span>
                    </div>
                  </a>
                </div>
                <div class="row d-flex g-3 justify-content-between flex-wrap mb-3">
                  <a href="<?php echo base_url(); ?>assets/#" class="flex-grow-1 w-50 option col" data-value="light-purple" data-parent="color">
                    <div class="card rounded-md p-3 mb-1 no-shadow color">
                      <div class="purple-light"></div>
                    </div>
                    <div class="text-muted text-part">
                      <span class="text-extra-small align-middle">LIGHT PURPLE</span>
                    </div>
                  </a>
                  <a href="<?php echo base_url(); ?>assets/#" class="flex-grow-1 w-50 option col" data-value="dark-purple" data-parent="color">
                    <div class="card rounded-md p-3 mb-1 no-shadow color">
                      <div class="purple-dark"></div>
                    </div>
                    <div class="text-muted text-part">
                      <span class="text-extra-small align-middle">DARK PURPLE</span>
                    </div>
                  </a>
                </div>
              </div>
              <div class="mb-5" id="navcolor">
                <label class="mb-3 d-inline-block form-label">Override Nav Palette</label>
                <div class="row d-flex g-3 justify-content-between flex-wrap">
                  <a href="<?php echo base_url(); ?>assets/#" class="flex-grow-1 w-33 option col" data-value="default" data-parent="navcolor">
                    <div class="card rounded-md p-3 mb-1 no-shadow">
                      <div class="figure figure-primary top"></div>
                      <div class="figure figure-secondary bottom"></div>
                    </div>
                    <div class="text-muted text-part">
                      <span class="text-extra-small align-middle">DEFAULT</span>
                    </div>
                  </a>
                  <a href="<?php echo base_url(); ?>assets/#" class="flex-grow-1 w-33 option col" data-value="light" data-parent="navcolor">
                    <div class="card rounded-md p-3 mb-1 no-shadow">
                      <div class="figure figure-secondary figure-light top"></div>
                      <div class="figure figure-secondary bottom"></div>
                    </div>
                    <div class="text-muted text-part">
                      <span class="text-extra-small align-middle">LIGHT</span>
                    </div>
                  </a>
                  <a href="<?php echo base_url(); ?>assets/#" class="flex-grow-1 w-33 option col" data-value="dark" data-parent="navcolor">
                    <div class="card rounded-md p-3 mb-1 no-shadow">
                      <div class="figure figure-muted figure-dark top"></div>
                      <div class="figure figure-secondary bottom"></div>
                    </div>
                    <div class="text-muted text-part">
                      <span class="text-extra-small align-middle">DARK</span>
                    </div>
                  </a>
                </div>
              </div>

              <div class="mb-5" id="placement">
                <label class="mb-3 d-inline-block form-label">Menu Placement</label>
                <div class="row d-flex g-3 justify-content-between flex-wrap">
                  <a href="<?php echo base_url(); ?>assets/#" class="flex-grow-1 w-50 option col" data-value="horizontal" data-parent="placement">
                    <div class="card rounded-md p-3 mb-1 no-shadow">
                      <div class="figure figure-primary top"></div>
                      <div class="figure figure-secondary bottom"></div>
                    </div>
                    <div class="text-muted text-part">
                      <span class="text-extra-small align-middle">HORIZONTAL</span>
                    </div>
                  </a>
                  <a href="<?php echo base_url(); ?>assets/#" class="flex-grow-1 w-50 option col" data-value="vertical" data-parent="placement">
                    <div class="card rounded-md p-3 mb-1 no-shadow">
                      <div class="figure figure-primary left"></div>
                      <div class="figure figure-secondary right"></div>
                    </div>
                    <div class="text-muted text-part">
                      <span class="text-extra-small align-middle">VERTICAL</span>
                    </div>
                  </a>
                </div>
              </div>

              <div class="mb-5" id="behaviour">
                <label class="mb-3 d-inline-block form-label">Menu Behaviour</label>
                <div class="row d-flex g-3 justify-content-between flex-wrap">
                  <a href="<?php echo base_url(); ?>assets/#" class="flex-grow-1 w-50 option col" data-value="pinned" data-parent="behaviour">
                    <div class="card rounded-md p-3 mb-1 no-shadow">
                      <div class="figure figure-primary left large"></div>
                      <div class="figure figure-secondary right small"></div>
                    </div>
                    <div class="text-muted text-part">
                      <span class="text-extra-small align-middle">PINNED</span>
                    </div>
                  </a>
                  <a href="<?php echo base_url(); ?>assets/#" class="flex-grow-1 w-50 option col" data-value="unpinned" data-parent="behaviour">
                    <div class="card rounded-md p-3 mb-1 no-shadow">
                      <div class="figure figure-primary left"></div>
                      <div class="figure figure-secondary right"></div>
                    </div>
                    <div class="text-muted text-part">
                      <span class="text-extra-small align-middle">UNPINNED</span>
                    </div>
                  </a>
                </div>
              </div>

              <div class="mb-5" id="layout">
                <label class="mb-3 d-inline-block form-label">Layout</label>
                <div class="row d-flex g-3 justify-content-between flex-wrap">
                  <a href="<?php echo base_url(); ?>assets/#" class="flex-grow-1 w-50 option col" data-value="fluid" data-parent="layout">
                    <div class="card rounded-md p-3 mb-1 no-shadow">
                      <div class="figure figure-primary top"></div>
                      <div class="figure figure-secondary bottom"></div>
                    </div>
                    <div class="text-muted text-part">
                      <span class="text-extra-small align-middle">FLUID</span>
                    </div>
                  </a>
                  <a href="<?php echo base_url(); ?>assets/#" class="flex-grow-1 w-50 option col" data-value="boxed" data-parent="layout">
                    <div class="card rounded-md p-3 mb-1 no-shadow">
                      <div class="figure figure-primary top"></div>
                      <div class="figure figure-secondary bottom small"></div>
                    </div>
                    <div class="text-muted text-part">
                      <span class="text-extra-small align-middle">BOXED</span>
                    </div>
                  </a>
                </div>
              </div>

              <div class="mb-5" id="radius">
                <label class="mb-3 d-inline-block form-label">Radius</label>
                <div class="row d-flex g-3 justify-content-between flex-wrap">
                  <a href="<?php echo base_url(); ?>assets/#" class="flex-grow-1 w-33 option col" data-value="rounded" data-parent="radius">
                    <div class="card rounded-md radius-rounded p-3 mb-1 no-shadow">
                      <div class="figure figure-primary top"></div>
                      <div class="figure figure-secondary bottom"></div>
                    </div>
                    <div class="text-muted text-part">
                      <span class="text-extra-small align-middle">ROUNDED</span>
                    </div>
                  </a>
                  <a href="<?php echo base_url(); ?>assets/#" class="flex-grow-1 w-33 option col" data-value="standard" data-parent="radius">
                    <div class="card rounded-md radius-regular p-3 mb-1 no-shadow">
                      <div class="figure figure-primary top"></div>
                      <div class="figure figure-secondary bottom"></div>
                    </div>
                    <div class="text-muted text-part">
                      <span class="text-extra-small align-middle">STANDARD</span>
                    </div>
                  </a>
                  <a href="<?php echo base_url(); ?>assets/#" class="flex-grow-1 w-33 option col" data-value="flat" data-parent="radius">
                    <div class="card rounded-md radius-flat p-3 mb-1 no-shadow">
                      <div class="figure figure-primary top"></div>
                      <div class="figure figure-secondary bottom"></div>
                    </div>
                    <div class="text-muted text-part">
                      <span class="text-extra-small align-middle">FLAT</span>
                    </div>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Theme Settings Modal End -->

    <!-- Niches Modal Start -->
    <div
      class="modal fade modal-right scroll-out-negative"
      id="niches"
      data-bs-backdrop="true"
      tabindex="-1"
      role="dialog"
      aria-labelledby="niches"
      aria-hidden="true"
    >
      <div class="modal-dialog modal-dialog-scrollable full" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Niches</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>

          <div class="modal-body">
            <div class="scroll-track-visible">
              <div class="mb-5">
                <label class="mb-2 d-inline-block form-label">Classic Dashboard</label>
                <div class="hover-reveal-buttons position-relative hover-reveal cursor-default">
                  <div class="position-relative mb-3 mb-lg-5 rounded-sm">
                    <img
                      src="<?php echo base_url(); ?>assets/https://acorn.coloredstrategies.com/img/page/classic-dashboard.webp"
                      class="img-fluid rounded-sm lower-opacity border border-separator-light"
                      alt="card image"
                    />
                    <div class="position-absolute reveal-content rounded-sm absolute-center-vertical text-center w-100">
                      <a
                        target="_blank"
                        href="<?php echo base_url(); ?>assets/https://acorn-html-classic-dashboard.coloredstrategies.com/"
                        class="btn btn-primary btn-sm sw-10 sw-lg-12 d-block mx-auto my-1"
                      >
                        Html
                      </a>
                      <a
                        target="_blank"
                        href="<?php echo base_url(); ?>assets/https://acorn-laravel-classic-dashboard.coloredstrategies.com/"
                        class="btn btn-primary btn-sm sw-10 sw-lg-12 d-block mx-auto my-1"
                      >
                        Laravel
                      </a>
                      <a
                        target="_blank"
                        href="<?php echo base_url(); ?>assets/https://acorn-dotnet-classic-dashboard.coloredstrategies.com/"
                        class="btn btn-primary btn-sm sw-10 sw-lg-12 d-block mx-auto my-1"
                      >
                        .Net5
                      </a>
                    </div>
                  </div>
                </div>
              </div>

              <div class="mb-5">
                <label class="mb-2 d-inline-block form-label">Medical Assistant</label>
                <div class="hover-reveal-buttons position-relative hover-reveal cursor-default">
                  <div class="position-relative mb-3 mb-lg-5 rounded-sm">
                    <img
                      src="<?php echo base_url(); ?>assets/https://acorn.coloredstrategies.com/img/page/medical-assistant.webp"
                      class="img-fluid rounded-sm lower-opacity border border-separator-light"
                      alt="card image"
                    />
                    <div class="position-absolute reveal-content rounded-sm absolute-center-vertical text-center w-100">
                      <a
                        target="_blank"
                        href="<?php echo base_url(); ?>assets/https://acorn-html-medical-assistant.coloredstrategies.com/"
                        class="btn btn-primary btn-sm sw-10 sw-lg-12 d-block mx-auto my-1"
                      >
                        Html
                      </a>
                      <a
                        target="_blank"
                        href="<?php echo base_url(); ?>assets/https://acorn-laravel-medical-assistant.coloredstrategies.com/"
                        class="btn btn-primary btn-sm sw-10 sw-lg-12 d-block mx-auto my-1"
                      >
                        Laravel
                      </a>
                      <a
                        target="_blank"
                        href="<?php echo base_url(); ?>assets/https://acorn-dotnet-medical-assistant.coloredstrategies.com/"
                        class="btn btn-primary btn-sm sw-10 sw-lg-12 d-block mx-auto my-1"
                      >
                        .Net5
                      </a>
                    </div>
                  </div>
                </div>
              </div>

              <div class="mb-5">
                <label class="mb-2 d-inline-block form-label">Service Provider</label>
                <div class="hover-reveal-buttons position-relative hover-reveal cursor-default">
                  <div class="position-relative mb-3 mb-lg-5 rounded-sm">
                    <img
                      src="<?php echo base_url(); ?>assets/https://acorn.coloredstrategies.com/img/page/service-provider.webp"
                      class="img-fluid rounded-sm lower-opacity border border-separator-light"
                      alt="card image"
                    />
                    <div class="position-absolute reveal-content rounded-sm absolute-center-vertical text-center w-100">
                      <a
                        target="_blank"
                        href="<?php echo base_url(); ?>assets/https://acorn-html-service-provider.coloredstrategies.com/"
                        class="btn btn-primary btn-sm sw-10 sw-lg-12 d-block mx-auto my-1"
                      >
                        Html
                      </a>
                      <a
                        target="_blank"
                        href="<?php echo base_url(); ?>assets/https://acorn-laravel-service-provider.coloredstrategies.com/"
                        class="btn btn-primary btn-sm sw-10 sw-lg-12 d-block mx-auto my-1"
                      >
                        Laravel
                      </a>
                      <a
                        target="_blank"
                        href="<?php echo base_url(); ?>assets/https://acorn-dotnet-service-provider.coloredstrategies.com/"
                        class="btn btn-primary btn-sm sw-10 sw-lg-12 d-block mx-auto my-1"
                      >
                        .Net5
                      </a>
                    </div>
                  </div>
                </div>
              </div>

              <div class="mb-5">
                <label class="mb-2 d-inline-block form-label">Elearning Portal</label>
                <div class="hover-reveal-buttons position-relative hover-reveal cursor-default">
                  <div class="position-relative mb-3 mb-lg-5 rounded-sm">
                    <img
                      src="<?php echo base_url(); ?>assets/https://acorn.coloredstrategies.com/img/page/elearning-portal.webp"
                      class="img-fluid rounded-sm lower-opacity border border-separator-light"
                      alt="card image"
                    />
                    <div class="position-absolute reveal-content rounded-sm absolute-center-vertical text-center w-100">
                      <a
                        target="_blank"
                        href="<?php echo base_url(); ?>assets/https://acorn-html-elearning-portal.coloredstrategies.com/"
                        class="btn btn-primary btn-sm sw-10 sw-lg-12 d-block mx-auto my-1"
                      >
                        Html
                      </a>
                      <a
                        target="_blank"
                        href="<?php echo base_url(); ?>assets/https://acorn-laravel-elearning-portal.coloredstrategies.com/"
                        class="btn btn-primary btn-sm sw-10 sw-lg-12 d-block mx-auto my-1"
                      >
                        Laravel
                      </a>
                      <a
                        target="_blank"
                        href="<?php echo base_url(); ?>assets/https://acorn-dotnet-elearning-portal.coloredstrategies.com/"
                        class="btn btn-primary btn-sm sw-10 sw-lg-12 d-block mx-auto my-1"
                      >
                        .Net5
                      </a>
                    </div>
                  </div>
                </div>
              </div>

              <div class="mb-5">
                <label class="mb-2 d-inline-block form-label">Ecommerce Platform</label>
                <div class="hover-reveal-buttons position-relative hover-reveal cursor-default">
                  <div class="position-relative mb-3 mb-lg-5 rounded-sm">
                    <img
                      src="<?php echo base_url(); ?>assets/https://acorn.coloredstrategies.com/img/page/ecommerce-platform.webp"
                      class="img-fluid rounded-sm lower-opacity border border-separator-light"
                      alt="card image"
                    />
                    <div class="position-absolute reveal-content rounded-sm absolute-center-vertical text-center w-100">
                      <a
                        target="_blank"
                        href="<?php echo base_url(); ?>assets/https://acorn-html-ecommerce-platform.coloredstrategies.com/"
                        class="btn btn-primary btn-sm sw-10 sw-lg-12 d-block mx-auto my-1"
                      >
                        Html
                      </a>
                      <a
                        target="_blank"
                        href="<?php echo base_url(); ?>assets/https://acorn-laravel-ecommerce-platform.coloredstrategies.com/"
                        class="btn btn-primary btn-sm sw-10 sw-lg-12 d-block mx-auto my-1"
                      >
                        Laravel
                      </a>
                      <a
                        target="_blank"
                        href="<?php echo base_url(); ?>assets/https://acorn-dotnet-ecommerce-platform.coloredstrategies.com/"
                        class="btn btn-primary btn-sm sw-10 sw-lg-12 d-block mx-auto my-1"
                      >
                        .Net5
                      </a>
                    </div>
                  </div>
                </div>
              </div>

              <div class="mb-5">
                <label class="mb-2 d-inline-block form-label">Starter Project</label>
                <div class="hover-reveal-buttons position-relative hover-reveal cursor-default">
                  <div class="position-relative mb-3 mb-lg-5 rounded-sm">
                    <img
                      src="<?php echo base_url(); ?>assets/https://acorn.coloredstrategies.com/img/page/starter-project.webp"
                      class="img-fluid rounded-sm lower-opacity border border-separator-light"
                      alt="card image"
                    />
                    <div class="position-absolute reveal-content rounded-sm absolute-center-vertical text-center w-100">
                      <a
                        target="_blank"
                        href="<?php echo base_url(); ?>assets/https://acorn-html-starter-project.coloredstrategies.com/"
                        class="btn btn-primary btn-sm sw-10 sw-lg-12 d-block mx-auto my-1"
                      >
                        Html
                      </a>
                      <a
                        target="_blank"
                        href="<?php echo base_url(); ?>assets/https://acorn-laravel-starter-project.coloredstrategies.com/"
                        class="btn btn-primary btn-sm sw-10 sw-lg-12 d-block mx-auto my-1"
                      >
                        Laravel
                      </a>
                      <a
                        target="_blank"
                        href="<?php echo base_url(); ?>assets/https://acorn-dotnet-starter-project.coloredstrategies.com/"
                        class="btn btn-primary btn-sm sw-10 sw-lg-12 d-block mx-auto my-1"
                      >
                        .Net5
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Niches Modal End -->

    <!-- Theme Settings & Niches Buttons Start -->
    <div class="settings-buttons-container">
      <button type="button" class="btn settings-button btn-primary p-0" data-bs-toggle="modal" data-bs-target="#settings" id="settingsButton">
        <span class="d-inline-block no-delay" data-bs-delay="0" data-bs-offset="0,3" data-bs-toggle="tooltip" data-bs-placement="left" title="Settings">
          <i data-acorn-icon="paint-roller" class="position-relative"></i>
        </span>
      </button>
      <button type="button" class="btn settings-button btn-primary p-0" data-bs-toggle="modal" data-bs-target="#niches" id="nichesButton">
        <span class="d-inline-block no-delay" data-bs-delay="0" data-bs-offset="0,3" data-bs-toggle="tooltip" data-bs-placement="left" title="Niches">
          <i data-acorn-icon="toy" class="position-relative"></i>
        </span>
      </button>
    </div>
    <!-- Theme Settings & Niches Buttons End -->

    <!-- Search Modal Start -->
    <div class="modal fade modal-under-nav modal-search modal-close-out" id="searchPagesModal" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header border-0 p-0">
            <button type="button" class="btn-close btn btn-icon btn-icon-only btn-foreground" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body ps-5 pe-5 pb-0 border-0">
            <input id="searchPagesInput" class="form-control form-control-xl borderless ps-0 pe-0 mb-1 auto-complete" type="text" autocomplete="off" />
          </div>
          <div class="modal-footer border-top justify-content-start ps-5 pe-5 pb-3 pt-3 border-0">
            <span class="text-alternate d-inline-block m-0 me-3">
              <i data-acorn-icon="arrow-bottom" data-acorn-size="15" class="text-alternate align-middle me-1"></i>
              <span class="align-middle text-medium">Navigate</span>
            </span>
            <span class="text-alternate d-inline-block m-0 me-3">
              <i data-acorn-icon="arrow-bottom-left" data-acorn-size="15" class="text-alternate align-middle me-1"></i>
              <span class="align-middle text-medium">Select</span>
            </span>
          </div>
        </div>
      </div>
    </div>
    <!-- Search Modal End -->

    <!-- Vendor Scripts Start -->
    <script src="<?php echo base_url(); ?>assets/js/vendor/jquery-3.5.1.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/vendor/bootstrap.bundle.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/vendor/OverlayScrollbars.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/vendor/autoComplete.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/vendor/clamp.min.js"></script>

    <script src="<?php echo base_url(); ?>assets/icon/acorn-icons.js"></script>
    <script src="<?php echo base_url(); ?>assets/icon/acorn-icons-interface.js"></script>

    <script src="<?php echo base_url(); ?>assets/js/vendor/Chart.bundle.min.js"></script>

    <script src="<?php echo base_url(); ?>assets/js/vendor/chartjs-plugin-datalabels.js"></script>

    <script src="<?php echo base_url(); ?>assets/js/vendor/chartjs-plugin-rounded-bar.min.js"></script>

    <!-- Vendor Scripts End -->

    <!-- Template Base Scripts Start -->
    <script src="<?php echo base_url(); ?>assets/js/base/helpers.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/base/globals.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/base/nav.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/base/search.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/base/settings.js"></script>
    <!-- Template Base Scripts End -->
    <!-- Page Specific Scripts Start -->

    <script src="<?php echo base_url(); ?>assets/js/cs/charts.extend.js"></script>

    <script src="<?php echo base_url(); ?>assets/js/pages/dashboard.analytic.js"></script>

    <script src="<?php echo base_url(); ?>assets/js/common.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/scripts.js"></script>
    <!-- Page Specific Scripts End -->
  </body>
</html>
