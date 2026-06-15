<header id="site-header" class="site-header">

    <nav class="navbar navbar-expand-lg h-100">

        <div class="container">

            <!-- LOGO -->
            <a class="navbar-brand d-flex align-items-center" href="<?= routeUrl('/', $lang ?? 'es') ?>">
                <img
                    src="/images/hispantic.svg"
                    alt="Hispantic"
                    class="logo">
            </a>

            <!-- TOGGLER -->
            <button
                class="navbar-toggler"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#navbarMain">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- NAV -->
            <div class="collapse navbar-collapse justify-content-end" id="navbarMain">

                <ul class="navbar-nav align-items-lg-center gap-lg-4">

                    <li class="nav-item">
                        <a class="nav-link <?= ($page ?? '') === 'home' ? 'active' : '' ?>"
                            href="<?= routeUrl('/', $lang ?? 'es') ?>">
                            <?= t('nav.home') ?>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link <?= ($page ?? '') === 'principios' ? 'active' : '' ?>"
                            href="<?= routeUrl('/principios', $lang ?? 'es') ?>">
                            <?= t('nav.principios') ?>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link <?= ($page ?? '') === 'servicios' ? 'active' : '' ?>"
                            href="<?= routeUrl('/servicios', $lang ?? 'es') ?>">
                            <?= t('nav.services') ?>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link <?= ($page ?? '') === 'casos' ? 'active' : '' ?>"
                            href="<?= routeUrl('/casos', $lang ?? 'es') ?>">
                            <?= t('nav.cases') ?>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link <?= ($page ?? '') === 'nosotros' ? 'active' : '' ?>"
                            href="<?= routeUrl('/nosotros', $lang ?? 'es') ?>">
                            <?= t('nav.about') ?>
                        </a>
                    </li>

                    <!-- IDIOMAS -->
                    <li class="nav-item ms-lg-4 d-flex align-items-center">

                        <a class="nav-link px-1 <?= ($lang ?? '') === 'es' ? 'active' : '' ?>"
                            href="<?= routeUrl('/', 'es') ?>">ES</a>

                        <span class="lang-separator">|</span>

                        <a class="nav-link px-1 <?= ($lang ?? '') === 'en' ? 'active' : '' ?>"
                            href="<?= routeUrl('/', 'en') ?>">EN</a>

                        <span class="lang-separator">|</span>

                        <a class="nav-link px-1 <?= ($lang ?? '') === 'ca' ? 'active' : '' ?>"
                            href="<?= routeUrl('/', 'ca') ?>">CA</a>

                        <span class="lang-separator">|</span>

                        <a class="nav-link px-1 <?= ($lang ?? '') === 'it' ? 'active' : '' ?>"
                            href="<?= routeUrl('/', 'it') ?>">IT</a>

                    </li>

                </ul>


            </div>

        </div>

    </nav>

</header>

<script>
    window.addEventListener("scroll", function() {
        const header = document.getElementById("site-header");

        if (window.scrollY > 20) {
            header.classList.add("scrolled");
        } else {
            header.classList.remove("scrolled");
        }
    });
</script>