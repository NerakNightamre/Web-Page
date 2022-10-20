<!-- Navbar Start -->
<div class="container-fluid fixed-top px-0 wow fadeIn" data-wow-delay="0.1s">
    <div class="top-bar text-white-50 row gx-0 align-items-center d-none d-lg-flex">
        <div class="col-lg-6 px-5 text-start">
            <small><i class="fa fa-map-marker-alt me-2"></i>Jalisco</small>
            <small class="ms-4"><i class="fa fa-envelope me-2"></i>proproxjal@gmail.com</small>
        </div>
        <div class="col-lg-6 px-5 text-end">
            <small>Siguenos:</small>
            <a class="text-white-50 ms-3" href="https://www.facebook.com/proproxjal" target="_blank"><i
                    class="fab fa-facebook-f"></i></a>
            <!-- <a class="text-white-50 ms-3" href=""><i class="fab fa-twitter"></i></a>
                <a class="text-white-50 ms-3" href=""><i class="fab fa-linkedin-in"></i></a>
                <a class="text-white-50 ms-3" href=""><i class="fab fa-instagram"></i></a> -->
        </div>
    </div>

    <nav class="navbar navbar-expand-lg navbar-dark py-lg-0 px-lg-5 wow fadeIn" data-wow-delay="0.1s">
        <a href="{{ route('home') }}" class="navbar-brand ms-4 ms-lg-0">
            <h1 class="fw-bold text-primary m-0"><span class="text-white">Profesionales en Proximidad<br> Social
                    Jalisco A.C</span></h1>
        </a>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <a href="{{ route('home') }}">Inicio</a>
                <a href="{{ route('posts.index') }}" class="nav-item nav-link">Blog</a>
                <a href="inventario.html" class="nav-item nav-link">Catálogo</a>
                <a href="contact.html" class="nav-item nav-link">Contacto</a>
            </div>
            <div class="d-none d-lg-flex ms-2">
                <a class="btn btn-outline-primary py-2 px-3" href="">
                    Donar
                    <div class="d-inline-flex btn-sm-square bg-white text-primary rounded-circle ms-2">
                        <i class="fa fa-arrow-right"></i>
                    </div>
                </a>
            </div>
        </div>
    </nav>
</div>
<!-- Navbar End -->
