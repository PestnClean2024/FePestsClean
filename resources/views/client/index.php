<?php include 'layouts/header.php' ?>

<section class="container-fluid p-0">
    <!-- Carousel -->
    <div id="homeCarouselBanner" class="carousel carousel-dark slide carousel-fade" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#homeCarouselBanner" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#homeCarouselBanner" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#homeCarouselBanner" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
            <button type="button" data-bs-target="#homeCarouselBanner" data-bs-slide-to="3"
                aria-label="Slide 4"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="../../images/Home/home-slider-banner2.png" class="d-block w-100" alt="">
            </div>
            <div class="carousel-item">
                <img src="../../images/Home/home-slider-banner1.png" class="d-block w-100" alt="">
            </div>
            <div class="carousel-item">
                <img src="../../images/Home/home-slider-banner3.png" class="d-block w-100" alt="">
            </div>
            <div class="carousel-item">
                <img src="../../images/Home/home-slider-banner4.png" class="d-block w-100" alt="">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#homeCarouselBanner"
            data-bs-slide="prev">
            <div class="home-carousel-button-container"><svg xmlns="http://www.w3.org/2000/svg" width="33"
                    height="32" viewBox="0 0 33 32" fill="none">
                    <path d="M7.16663 16H25.8333" stroke="#868E96" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" />
                    <path d="M7.16663 16L15.1666 24" stroke="#868E96" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" />
                    <path d="M7.16663 16L15.1666 8" stroke="#868E96" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" />
                </svg></div>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#homeCarouselBanner"
            data-bs-slide="next">
            <div class="home-carousel-button-container"><svg xmlns="http://www.w3.org/2000/svg" width="33"
                    height="32" viewBox="0 0 33 32" fill="none">
                    <path d="M7.45097 16H26.1176" stroke="#141718" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" />
                    <path d="M18.1176 24L26.1176 16" stroke="#141718" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" />
                    <path d="M18.1176 8L26.1176 16" stroke="#141718" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" />
                </svg></div>
            <span class="visually-hidden">Next</span>
        </button>
        <div class="home-icons-contact-container">
            <div class="home-icon-contact-container"><svg width="50" height="48" viewBox="0 0 70 68" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <g id="Phone">
                        <path id="Vector"
                            d="M34.1375 43.4297C38.7195 41.243 42.4152 37.5916 44.6222 33.0703C44.7825 32.7368 44.8518 32.3679 44.8235 32C44.7951 31.632 44.67 31.2777 44.4605 30.9719L39.9593 24.3313C39.7574 24.0379 39.6342 23.6988 39.6012 23.3458C39.5682 22.9928 39.6265 22.6373 39.7707 22.3125L45.1882 9.88126C45.3677 9.45639 45.6838 9.10143 46.0881 8.87105C46.4923 8.64066 46.9622 8.54762 47.4253 8.60626C50.5458 9.00026 53.4137 10.5013 55.4923 12.8285C57.571 15.1557 58.718 18.1496 58.7187 21.25C58.7187 30.8309 54.8567 40.0195 47.9823 46.7942C41.108 53.569 31.7843 57.375 22.0625 57.375C18.9165 57.3743 15.8786 56.2439 13.5171 54.1954C11.1557 52.1469 9.63257 49.3206 9.23277 46.2453C9.17328 45.7889 9.26768 45.3258 9.50146 44.9274C9.73523 44.5291 10.0954 44.2175 10.5265 44.0406L23.1675 38.7016C23.4919 38.5627 23.846 38.5046 24.1985 38.5324C24.551 38.5602 24.8912 38.673 25.189 38.8609L32.0351 43.2969C32.3448 43.4944 32.7006 43.6103 33.0687 43.6335C33.4368 43.6568 33.8048 43.5866 34.1375 43.4297Z"
                            fill="#005CA9" stroke="#005CA9" stroke-width="3.39" stroke-linecap="round"
                            stroke-linejoin="round" />
                    </g>
                </svg>
            </div>
            <div class="home-icon-contact-container">
                <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="50" height="48" viewBox="0 0 50 50">
                    <path
                        d="M 9 4 C 6.2504839 4 4 6.2504839 4 9 L 4 41 C 4 43.749516 6.2504839 46 9 46 L 41 46 C 43.749516 46 46 43.749516 46 41 L 46 9 C 46 6.2504839 43.749516 4 41 4 L 9 4 z M 9 6 L 15.580078 6 C 12.00899 9.7156859 10 14.518083 10 19.5 C 10 24.66 12.110156 29.599844 15.910156 33.339844 C 16.030156 33.549844 16.129922 34.579531 15.669922 35.769531 C 15.379922 36.519531 14.799687 37.499141 13.679688 37.869141 C 13.249688 38.009141 12.97 38.430859 13 38.880859 C 13.03 39.330859 13.360781 39.710781 13.800781 39.800781 C 16.670781 40.370781 18.529297 39.510078 20.029297 38.830078 C 21.379297 38.210078 22.270625 37.789609 23.640625 38.349609 C 26.440625 39.439609 29.42 40 32.5 40 C 36.593685 40 40.531459 39.000731 44 37.113281 L 44 41 C 44 42.668484 42.668484 44 41 44 L 9 44 C 7.3315161 44 6 42.668484 6 41 L 6 9 C 6 7.3315161 7.3315161 6 9 6 z M 33 15 C 33.55 15 34 15.45 34 16 L 34 25 C 34 25.55 33.55 26 33 26 C 32.45 26 32 25.55 32 25 L 32 16 C 32 15.45 32.45 15 33 15 z M 18 16 L 23 16 C 23.36 16 23.700859 16.199531 23.880859 16.519531 C 24.050859 16.829531 24.039609 17.219297 23.849609 17.529297 L 19.800781 24 L 23 24 C 23.55 24 24 24.45 24 25 C 24 25.55 23.55 26 23 26 L 18 26 C 17.64 26 17.299141 25.800469 17.119141 25.480469 C 16.949141 25.170469 16.960391 24.780703 17.150391 24.470703 L 21.199219 18 L 18 18 C 17.45 18 17 17.55 17 17 C 17 16.45 17.45 16 18 16 z M 27.5 19 C 28.11 19 28.679453 19.169219 29.189453 19.449219 C 29.369453 19.189219 29.65 19 30 19 C 30.55 19 31 19.45 31 20 L 31 25 C 31 25.55 30.55 26 30 26 C 29.65 26 29.369453 25.810781 29.189453 25.550781 C 28.679453 25.830781 28.11 26 27.5 26 C 25.57 26 24 24.43 24 22.5 C 24 20.57 25.57 19 27.5 19 z M 38.5 19 C 40.43 19 42 20.57 42 22.5 C 42 24.43 40.43 26 38.5 26 C 36.57 26 35 24.43 35 22.5 C 35 20.57 36.57 19 38.5 19 z M 27.5 21 C 27.39625 21 27.29502 21.011309 27.197266 21.03125 C 27.001758 21.071133 26.819727 21.148164 26.660156 21.255859 C 26.500586 21.363555 26.363555 21.500586 26.255859 21.660156 C 26.148164 21.819727 26.071133 22.001758 26.03125 22.197266 C 26.011309 22.29502 26 22.39625 26 22.5 C 26 22.60375 26.011309 22.70498 26.03125 22.802734 C 26.051191 22.900488 26.079297 22.994219 26.117188 23.083984 C 26.155078 23.17375 26.202012 23.260059 26.255859 23.339844 C 26.309707 23.419629 26.371641 23.492734 26.439453 23.560547 C 26.507266 23.628359 26.580371 23.690293 26.660156 23.744141 C 26.819727 23.851836 27.001758 23.928867 27.197266 23.96875 C 27.29502 23.988691 27.39625 24 27.5 24 C 27.60375 24 27.70498 23.988691 27.802734 23.96875 C 28.487012 23.82916 29 23.22625 29 22.5 C 29 21.67 28.33 21 27.5 21 z M 38.5 21 C 38.39625 21 38.29502 21.011309 38.197266 21.03125 C 38.099512 21.051191 38.005781 21.079297 37.916016 21.117188 C 37.82625 21.155078 37.739941 21.202012 37.660156 21.255859 C 37.580371 21.309707 37.507266 21.371641 37.439453 21.439453 C 37.303828 21.575078 37.192969 21.736484 37.117188 21.916016 C 37.079297 22.005781 37.051191 22.099512 37.03125 22.197266 C 37.011309 22.29502 37 22.39625 37 22.5 C 37 22.60375 37.011309 22.70498 37.03125 22.802734 C 37.051191 22.900488 37.079297 22.994219 37.117188 23.083984 C 37.155078 23.17375 37.202012 23.260059 37.255859 23.339844 C 37.309707 23.419629 37.371641 23.492734 37.439453 23.560547 C 37.507266 23.628359 37.580371 23.690293 37.660156 23.744141 C 37.739941 23.797988 37.82625 23.844922 37.916016 23.882812 C 38.005781 23.920703 38.099512 23.948809 38.197266 23.96875 C 38.29502 23.988691 38.39625 24 38.5 24 C 38.60375 24 38.70498 23.988691 38.802734 23.96875 C 39.487012 23.82916 40 23.22625 40 22.5 C 40 21.67 39.33 21 38.5 21 z">
                    </path>
                </svg>
            </div>
        </div>
    </div>
</section>

<!-- Services -->
<section class="container-fluid p-0">
    <div class="services-container">
        <div class="texts-container">
            <h1>Giải pháp dành cho bạn</h1>
            <p>Enim neque massa porta adipiscing elit. Sem libero id faucibus nibh amet dictum pellentesque sed. Eu
                non
                turpis risus odio sapien, fames sit rhoncus.
                Nec magna sed interdum sit purus tellus. Et volutpat proin neque placerat at bibendum quam tellus.
            </p>
        </div>
        <div class="row-container">
            <div class="column-selector">
                <ul class="list-group w-100">
                    <li class="list-group-item p-3 active" aria-current="true">KIỂM SOÁT CÔN TRÙNG</li>
                    <li class="list-group-item p-3">KIỂM SOÁT MỐI</li>
                    <li class="list-group-item p-3">VỆ SINH CÔNG NGHIỆP</li>
                    <li class="list-group-item p-3">VỆ SINH NHÀ Ở</li>
                    <li class="list-group-item p-3">GIẢI PHÁP VỆ SINH</li>
                    <li class="list-group-item p-3">GIẢI PHÁP MÙI HƯƠNG</li>
                    <li class="list-group-item p-3">THI CÔNG CẢNH QUAN</li>
                    <li class="list-group-item p-3">TTHI CÔNG CÂY CẢNH</li>
                </ul>
            </div>
            <div class="section-images">
                <div class="text-container-with-bg-image">
                    <div class="text-container">
                        <h5>
                            KIỂM SOÁT CÔN TRÙNG
                        </h5>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                            incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                            exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure
                            dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                            Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt
                            mollit anim id est laborum.
                        </p>
                        <a href="#">Xem thêm</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include 'layouts/footer.php' ?>