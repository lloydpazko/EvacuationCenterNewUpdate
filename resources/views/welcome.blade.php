<!DOCTYPE html>
<html style="font-size: 16px;" lang="en"><head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="Evacuation locator SYSTEM, Contact Us">
    <meta name="description" content="">
    <title>Evacuation Center Locator APP</title>
    <link rel="stylesheet" href="{{ asset('nicepage.css') }}" media="screen">
<link rel="stylesheet" href="{{ asset('Maps.css') }}" media="screen">
    <script class="u-script" type="text/javascript" src="jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="nicepage.js" defer=""></script>
    <meta name="generator" content="Nicepage 6.0.3, nicepage.com">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">




    <script type="application/ld+json">{
		"@context": "",
		"@type": "",
		"name": "",
		"logo": "images/2560px-National_Disaster_Risk_Reduction_and_Management_Council_NDRMMC.svg.png"
}</script>
    <meta name="theme-color" content="#478ac9">
    <meta property="og:title" content="Maps">
    <meta property="og:type" content="website">
  <meta data-intl-tel-input-cdn-path="intlTelInput/"></head>
  <body data-home-page="Maps.html" data-home-page-title="Maps" data-path-to-root="./" data-include-products="false" class="u-body u-xl-mode" data-lang="en"><header class="u-clearfix u-header u-header" id="sec-d09c"><div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
        <nav class="u-offcanvas u-menu-1">
          <div class="menu-collapse" style="font-size: 1rem; letter-spacing: 0px;">
            <a class="u-button-style u-custom-left-right-menu-spacing u-custom-padding-bottom u-custom-top-bottom-menu-spacing u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="#">
              <svg class="" viewBox="0 0 24 24"><use xmlns:xlink="" xlink:href="#menu-hamburger"></use></svg>
              <svg class="" version="1.1" id="" viewBox="0 0 16 16" x="0px" y="0px" xmlns:xlink="" xmlns=""><g><rect y="1" width="16" height="2"></rect><rect y="7" width="16" height="2"></rect><rect y="13" width="16" height="2"></rect>
</g></svg>
            </a>
          </div>
          @if (Route::has('login'))
          <div class="u-custom-menu u-nav-container">
            <ul class="u-nav u-unstyled u-nav-1">
                <li class="u-nav-item">
                    <a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" rel="nofollow" style="padding: 10px 20px;" href="{{ url('/dashboard') }}">Dashboard</a>
</li>
@auth
<li class="u-nav-item">
    <a href="{{ route('Locatorapps.index') }}" class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" rel="nofollow" style="padding: 10px 20px;">Maps</a>
</li>
@else
<li class="u-nav-item">
    <a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" rel="nofollow" style="padding: 10px 20px;" href="{{ route('ViewMaps.Viewmapslocation') }}">View Maps Evacuation Facilities</a>
</li>
<li class="u-nav-item">
    <a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" rel="nofollow" style="padding: 10px 20px;" href="{{ route('login') }}">Login</a>
</li>
@if (Route::has('register'))
<li class="u-nav-item">
    <a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" rel="nofollow" style="padding: 10px 20px;" href="{{ route('register') }}">Register</a>
</li>
@endif
@endauth

@endif
</ul>
          </div>
          <div class="u-custom-menu u-nav-container-collapse">
            <div class="u-black u-container-style u-inner-container-layout u-opacity u-opacity-95 u-sidenav">
              <div class="u-inner-container-layout u-sidenav-overflow">
                <div class="u-menu-close"></div>
                <ul class="u-align-center u-nav u-popupmenu-items u-unstyled u-nav-2"><li class="u-nav-item"><a class="u-button-style u-nav-link" rel="nofollow">dashboard</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" rel="nofollow">Maps</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" rel="nofollow">Login</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" rel="nofollow">Register</a>
</li></ul>
              </div>
            </div>
            <div class="u-black u-menu-overlay u-opacity u-opacity-70"></div>
          </div>
        </nav>
        <a href="" class="u-image u-logo u-image-1" data-image-width="2560" data-image-height="1014">
          <img src="images/2560px-National_Disaster_Risk_Reduction_and_Management_Council_NDRMMC.svg.png" class="u-logo-image u-logo-image-1">
        </a>
      </div></header>
    <section class="u-align-center u-clearfix u-image u-shading u-section-1" src="" data-image-width="256" data-image-height="256" id="sec-02a7">
      <div class="u-clearfix u-sheet u-sheet-1">
        <h1 class="u-text u-text-default u-title u-text-1">Evacuation Center Locator APP</h1>
        <p class="u-large-text u-text u-text-default u-text-variant u-text-2">Powered by Aparrianos</p>

      </div>
    </section>

    <section class="u-align-center u-clearfix u-valign-bottom-lg u-valign-bottom-md u-valign-bottom-sm u-valign-bottom-xs u-section-2" id="carousel_f0cc">
      <div class="u-clearfix u-sheet u-sheet-1">
        <h2 class="u-text u-text-3">Mission</h2>
        <div class="u-border-7 u-border-palette-2-base u-line u-line-horizontal u-line-1"></div>
        <p class="u-text u-text-2"> Zero Loss of Life, Effectively Respond To and Recover From
the Effects of Disaster, Natural or Man-Made, In Nature </p>
        <h2 class="u-text u-text-3">Vision</h2>
        <div class="u-border-7 u-border-palette-2-base u-line u-line-horizontal u-line-1"></div>
        <p class="u-text u-text-4">&nbsp; Safer, Adaptive and Disaster- Resilient Community Towards
Sustainable Development&nbsp;&nbsp;</p>
        <h2 class="u-text u-text-5">Goal</h2>
        <div class="u-border-7 u-border-palette-2-base u-line u-line-horizontal u-line-1"></div>
        <p class="u-text u-text-2">&nbsp; ​
To effectively provide a more responsive and accessible
delivery of quality social services to communities for a God-loving, healthy
and empowered citizens
Ensure sustainable management, utilization, development of
land and natural resources and conservation of biodiversity
To uplift the quality of life by providing innovative and
high technology infrastructure support services and utilities for a sustainable
growth, progressive economy and liveable community. </p>
        <div class="data-layout-selected u-clearfix u-expanded-width u-gutter-0 u-layout-wrap u-layout-wrap-1">
          <div class="u-gutter-0 u-layout">
            <div class="u-layout-row">
              <div class="u-size-60">
                <div class="u-layout-col">
                  <div class="u-size-30">
                    <div class="u-layout-row">
                      <div class="u-align-center u-container-style u-layout-cell u-left-cell u-palette-5-dark-3 u-size-30 u-layout-cell-1">
                        <div class="u-container-layout u-container-layout-1"><span class="u-border-3 u-border-grey-15 u-icon u-icon-circle u-text-grey-40 u-icon-1"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 512 512" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-ac97"></use></svg><svg class="u-svg-content" viewBox="0 0 512 512" x="0px" y="0px" id="svg-ac97" style="enable-background:new 0 0 512 512;"><g><g><path d="M256,0C156.748,0,76,80.748,76,180c0,33.534,9.289,66.26,26.869,94.652l142.885,230.257    c2.737,4.411,7.559,7.091,12.745,7.091c0.04,0,0.079,0,0.119,0c5.231-0.041,10.063-2.804,12.75-7.292L410.611,272.22    C427.221,244.428,436,212.539,436,180C436,80.748,355.252,0,256,0z M384.866,256.818L258.272,468.186l-129.905-209.34    C113.734,235.214,105.8,207.95,105.8,180c0-82.71,67.49-150.2,150.2-150.2S406.1,97.29,406.1,180    C406.1,207.121,398.689,233.688,384.866,256.818z"></path>
</g>
</g><g><g><path d="M256,90c-49.626,0-90,40.374-90,90c0,49.309,39.717,90,90,90c50.903,0,90-41.233,90-90C346,130.374,305.626,90,256,90z     M256,240.2c-33.257,0-60.2-27.033-60.2-60.2c0-33.084,27.116-60.2,60.2-60.2s60.1,27.116,60.1,60.2    C316.1,212.683,289.784,240.2,256,240.2z"></path>
</g>
</g></svg></span>
                          <h5 class="u-text u-text-grey-40 u-text-7">Address:</h5>
                          <p class="u-text u-text-8">Aparri,Cagayan Philipines</p>
                          <p class="u-text u-text-9">Municipal Disaster Risk Reduction and Management Office</p>
                          <p class="u-text u-text-10">Municipal Governement of Aparri</p>
                        </div>
                      </div>
                      <div class="u-container-style u-layout-cell u-palette-5-dark-3 u-size-30 u-layout-cell-2">
                        <div class="u-container-layout u-valign-middle u-container-layout-2"><span class="u-border-3 u-border-grey-50 u-icon u-icon-circle u-text-grey-40 u-icon-2"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 479.058 479.058" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-219f"></use></svg><svg class="u-svg-content" viewBox="0 0 479.058 479.058" id="svg-219f"><path d="m434.146 59.882h-389.234c-24.766 0-44.912 20.146-44.912 44.912v269.47c0 24.766 20.146 44.912 44.912 44.912h389.234c24.766 0 44.912-20.146 44.912-44.912v-269.47c0-24.766-20.146-44.912-44.912-44.912zm0 29.941c2.034 0 3.969.422 5.738 1.159l-200.355 173.649-200.356-173.649c1.769-.736 3.704-1.159 5.738-1.159zm0 299.411h-389.234c-8.26 0-14.971-6.71-14.971-14.971v-251.648l199.778 173.141c2.822 2.441 6.316 3.655 9.81 3.655s6.988-1.213 9.81-3.655l199.778-173.141v251.649c-.001 8.26-6.711 14.97-14.971 14.97z"></path></svg></span>
                          <h5 class="u-align-center u-text u-text-grey-40 u-text-11">Email:</h5>
                          <a href="https://nicepage.com/c/full-width-slider-html-templates" class="u-border-active-none u-border-hover-none u-btn u-btn-rectangle u-button-style u-none u-text-body-alt-color u-text-hover-palette-2-base u-btn-1">aparri@gmail.com</a>
                          <a href="https://nicepage.review" class="u-border-active-none u-border-hover-none u-btn u-btn-rectangle u-button-style u-none u-text-body-alt-color u-text-hover-palette-2-base u-btn-2">cics.gmail.com</a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="u-size-30">
                    <div class="u-layout-row">
                      <div class="u-align-center u-container-style u-layout-cell u-left-cell u-palette-5-dark-3 u-size-30 u-layout-cell-3">
                        <div class="u-container-layout u-container-layout-3"><span class="u-border-3 u-border-grey-15 u-icon u-icon-circle u-text-grey-40 u-icon-3"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 384 384" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-2adf"></use></svg><svg class="u-svg-content" viewBox="0 0 384 384" x="0px" y="0px" id="svg-2adf" style="enable-background:new 0 0 384 384;"><g><g><path d="M353.188,252.052c-23.51,0-46.594-3.677-68.469-10.906c-10.906-3.719-23.323-0.833-30.438,6.417l-43.177,32.594    c-50.073-26.729-80.917-57.563-107.281-107.26l31.635-42.052c8.219-8.208,11.167-20.198,7.635-31.448    c-7.26-21.99-10.948-45.063-10.948-68.583C132.146,13.823,118.323,0,101.333,0H30.812C13.823,0,0,13.823,0,30.812    C0,225.563,158.438,384,353.188,384c16.99,0,30.813-13.823,30.813-30.813v-70.323C384,265.875,370.177,252.052,353.188,252.052z     M362.667,353.188c0,5.229-4.25,9.479-9.479,9.479c-182.99,0-331.854-148.865-331.854-331.854c0-5.229,4.25-9.479,9.479-9.479    h70.521c5.229,0,9.479,4.25,9.479,9.479c0,25.802,4.052,51.125,11.979,75.115c1.104,3.542,0.208,7.208-3.375,10.938L82.75,165.427    c-2.458,3.26-2.844,7.625-1,11.26c29.927,58.823,66.292,95.188,125.531,125.542c3.604,1.885,8.021,1.49,11.292-0.979    l49.677-37.635c2.51-2.51,6.271-3.406,9.667-2.25c24.156,7.979,49.479,12.021,75.271,12.021c5.229,0,9.479,4.25,9.479,9.479    V353.188z"></path>
</g>
</g></svg></span>
                          <h5 class="u-text u-text-grey-40 u-text-12">Call us:</h5>
                          <p class="u-text u-text-13"> +63 997 2404 984 <br> +63 956 6542 894
                          </p>
                        </div>
                      </div>
                      <div class="u-align-center u-container-style u-layout-cell u-palette-5-dark-3 u-size-30 u-layout-cell-4">
                        <div class="u-container-layout u-valign-middle u-container-layout-4">
                          <h5 class="u-text u-text-grey-40 u-text-14">Contact Us</h5>
                          <p class="u-text u-text-15">Contact us for more info</p>
                          <div class="u-social-icons u-spacing-10 u-social-icons-1">
                            <a class="u-social-url" target="_blank" href=""><span class="u-icon u-icon-circle u-social-facebook u-social-icon u-icon-4"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 112 112" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-d6d9"></use></svg><svg x="0px" y="0px" viewBox="0 0 112 112" id="svg-d6d9" class="u-svg-content"><path d="M75.5,28.8H65.4c-1.5,0-4,0.9-4,4.3v9.4h13.9l-1.5,15.8H61.4v45.1H42.8V58.3h-8.8V42.4h8.8V32.2 c0-7.4,3.4-18.8,18.8-18.8h13.8v15.4H75.5z"></path></svg></span>
                            </a>
                            <a class="u-social-url" target="_blank" href=""><span class="u-icon u-icon-circle u-social-icon u-social-twitter u-icon-5"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 112 112" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-05d4"></use></svg><svg x="0px" y="0px" viewBox="0 0 112 112" id="svg-05d4" class="u-svg-content"><path d="M92.2,38.2c0,0.8,0,1.6,0,2.3c0,24.3-18.6,52.4-52.6,52.4c-10.6,0.1-20.2-2.9-28.5-8.2 c1.4,0.2,2.9,0.2,4.4,0.2c8.7,0,16.7-2.9,23-7.9c-8.1-0.2-14.9-5.5-17.3-12.8c1.1,0.2,2.4,0.2,3.4,0.2c1.6,0,3.3-0.2,4.8-0.7 c-8.4-1.6-14.9-9.2-14.9-18c0-0.2,0-0.2,0-0.2c2.5,1.4,5.4,2.2,8.4,2.3c-5-3.3-8.3-8.9-8.3-15.4c0-3.4,1-6.5,2.5-9.2 c9.1,11.1,22.7,18.5,38,19.2c-0.2-1.4-0.4-2.8-0.4-4.3c0.1-10,8.3-18.2,18.5-18.2c5.4,0,10.1,2.2,13.5,5.7c4.3-0.8,8.1-2.3,11.7-4.5 c-1.4,4.3-4.3,7.9-8.1,10.1c3.7-0.4,7.3-1.4,10.6-2.9C98.9,32.3,95.7,35.5,92.2,38.2z"></path></svg></span>
                            </a>
                            <a class="u-social-url" target="_blank" href=""><span class="u-icon u-icon-circle u-social-icon u-social-instagram u-icon-6"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 112 112" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-301e"></use></svg><svg x="0px" y="0px" viewBox="0 0 112 112" id="svg-301e" class="u-svg-content"><path d="M55.9,32.9c-12.8,0-23.2,10.4-23.2,23.2s10.4,23.2,23.2,23.2s23.2-10.4,23.2-23.2S68.7,32.9,55.9,32.9z M55.9,69.4c-7.4,0-13.3-6-13.3-13.3c-0.1-7.4,6-13.3,13.3-13.3s13.3,6,13.3,13.3C69.3,63.5,63.3,69.4,55.9,69.4z"></path><path d="M79.7,26.8c-3,0-5.4,2.5-5.4,5.4s2.5,5.4,5.4,5.4c3,0,5.4-2.5,5.4-5.4S82.7,26.8,79.7,26.8z"></path><path d="M78.2,11H33.5C21,11,10.8,21.3,10.8,33.7v44.7c0,12.6,10.2,22.8,22.7,22.8h44.7c12.6,0,22.7-10.2,22.7-22.7 V33.7C100.8,21.1,90.6,11,78.2,11z M91,78.4c0,7.1-5.8,12.8-12.8,12.8H33.5c-7.1,0-12.8-5.8-12.8-12.8V33.7 c0-7.1,5.8-12.8,12.8-12.8h44.7c7.1,0,12.8,5.8,12.8,12.8V78.4z"></path></svg></span>
                            </a>
                            <a class="u-social-url" target="_blank" href="#"><span class="u-icon u-icon-circle u-social-icon u-social-pinterest u-icon-7"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 112 112" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-497a"></use></svg><svg x="0px" y="0px" viewBox="0 0 112 112" id="svg-497a" class="u-svg-content"><path d="M61.9,79.8c-5.5-0.3-7.8-3.1-12-5.8c-2.3,12.4-5.4,24.3-13.8,30.5c-2.6-18.7,3.8-32.8,6.9-47.7 c-5.1-8.7,0.7-26.2,11.5-21.9c13.5,5.4-11.6,32.3,5.1,35.7c17.6,3.5,24.7-30.5,13.8-41.4c-15.7-16.1-45.7-0.5-42,22.3 c0.9,5.6,6.7,7.2,2.3,15c-10.1-2.2-13-10.2-12.7-20.7c0.6-17.3,15.5-29.3,30.5-31.1c19-2.2,36.8,6.9,39.2,24.7 C93.4,59.5,82.3,81.3,61.9,79.8z"></path></svg></span>
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
        </div>
      </div>
    </section>



    <footer class="u-align-center u-clearfix u-footer u-grey-80 u-footer" id="sec-5e91"><div class="u-clearfix u-sheet u-sheet-1">
        <p class="u-small-text u-text u-text-variant u-text-1">Powered by GoogleMaps</p>
      </div></footer>
    <section class="u-backlink u-clearfix u-grey-80">
        <span>Website Templates</span>
      </a>
      <p class="u-text">
        <span>created with</span>
      </p>
      <a class="u-link" href="" target="_blank">
        <span>CICS department @ Csu-Aparri</span>
      </a>.
    </section>

</body></html>

<!--
        <div class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">
            @if (Route::has('login'))
                <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            -->

