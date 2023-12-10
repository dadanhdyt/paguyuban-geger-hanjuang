<header class="main_header" id="main-header">
    <nav class="main_header__top_nav">
        <div class="container">
            <div class="main_header__top_nav__wrap">
                <span>{{ config('app.name') }}</span>
                <span>PAGUYUBAN GEGER HANJUANG</span>
            </div>
        </div>
    </nav>
    <div class="main_header__main">
        <div class="container">
            <div class="flex items-center justify-start">
                <div class="main_header__main__center">
                    <div class="main_geader__main__center__nav_logo">
                        <img src="{{ asset('assets/images/logo/logo.png') }}" alt="">
                    </div>
                    <nav class="main_header__main__center__nav_menu">
                        
                        <ul class="links">
                            <li><a href="">Beranda</a></li>
                            <li><a href="">About</a></li>
                            <li><a href="">Keanggotaan</a></li>
                            <li><a href="">Kontak</a></li>
                            <li><a href="">Berita</a></li>
                            <li class="with_button">
                                <a href="">LOGIN</a>
                            </li>
                        </ul>
                    </nav>

                   
                    <div class="main_geader__main__center__nav_toggle">
                        <button class="toggle_button">
                            <span></span>
                            <span></span>
                            <span></span>
                        </button>
                    </div>

                </div>
            </div>
        </div>
    </div>
</header>
