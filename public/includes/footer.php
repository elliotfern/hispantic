<footer class="py-5 border-top" style="background-color:#f8fafc;">

    <div class="container">

        <div class="row g-4">

            <!-- BRAND -->
            <div class="col-lg-4">

                <h5 class="fw-bold mb-2">Hispantic</h5>

                <p class="text-muted mb-0" style="max-width: 320px;">
                    Construimos y mantenemos sistemas de software en producción.
                </p>

            </div>

            <!-- NAV -->
            <div class="col-6 col-lg-2">

                <h6 class="fw-bold mb-3">Navegación</h6>

                <ul class="list-unstyled small">

                    <li class="mb-2">
                        <a class="text-decoration-none <?= ($page ?? '') === 'home' ? 'text-primary fw-semibold' : 'text-muted' ?>"
                            href="<?= routeUrl('/', $lang ?? 'es') ?>">
                            <?= t('nav.home') ?>
                        </a>
                    </li>

                     <li class="mb-2">
                        <a class="text-decoration-none <?= ($page ?? '') === 'principios' ? 'text-primary fw-semibold' : 'text-muted' ?>"
                            href="<?= routeUrl('/principios', $lang ?? 'es') ?>">
                            <?= t('nav.principios') ?>
                        </a>
                    </li>

                    <li class="mb-2">
                        <a class="text-decoration-none <?= ($page ?? '') === 'servicios' ? 'text-primary fw-semibold' : 'text-muted' ?>"
                            href="<?= routeUrl('/servicios', $lang ?? 'es') ?>">
                            <?= t('nav.services') ?>
                        </a>
                    </li>

                    <li class="mb-2">
                        <a class="text-decoration-none <?= ($page ?? '') === 'casos' ? 'text-primary fw-semibold' : 'text-muted' ?>"
                            href="<?= routeUrl('/casos', $lang ?? 'es') ?>">
                            <?= t('nav.cases') ?>
                        </a>
                    </li>

                    <li class="mb-2">
                        <a class="text-decoration-none <?= ($page ?? '') === 'nosotros' ? 'text-primary fw-semibold' : 'text-muted' ?>"
                            href="<?= routeUrl('/nosotros', $lang ?? 'es') ?>">
                            <?= t('nav.about') ?>
                        </a>
                    </li>

                </ul>

            </div>

            <!-- LEGAL -->
            <div class="col-6 col-lg-3">

                <h6 class="fw-bold mb-3">Legal</h6>

                <ul class="list-unstyled small">

                    <li class="mb-2">
                        <a class="text-muted text-decoration-none"
                            href="<?= routeUrl('/aviso-legal', $lang ?? 'es') ?>">
                            Aviso legal
                        </a>
                    </li>

                    <li class="mb-2">
                        <a class="text-muted text-decoration-none"
                            href="<?= routeUrl('/politica-privacidad', $lang ?? 'es') ?>">
                            Política de privacidad
                        </a>
                    </li>

                    <li class="mb-2">
                        <a class="text-muted text-decoration-none"
                            href="<?= routeUrl('/politica-cookies', $lang ?? 'es') ?>">
                            Política de cookies
                        </a>
                    </li>

                </ul>

            </div>

            <!-- LANG -->
            <div class="col-lg-3 text-lg-end">

                <h6 class="fw-bold mb-3">Idioma</h6>

                <div class="small">

                    <a href="<?= routeUrl($uriForRouting ?? '/', 'es') ?>"
                        class="<?= ($lang ?? '') === 'es' ? 'text-primary fw-semibold' : 'text-muted' ?>">
                        ES
                    </a>

                    <span class="text-primary mx-1">|</span>

                    <a href="<?= routeUrl($uriForRouting ?? '/', 'en') ?>"
                        class="<?= ($lang ?? '') === 'en' ? 'text-primary fw-semibold' : 'text-muted' ?>">
                        EN
                    </a>

                    <span class="text-primary mx-1">|</span>

                    <a href="<?= routeUrl($uriForRouting ?? '/', 'ca') ?>"
                        class="<?= ($lang ?? '') === 'ca' ? 'text-primary fw-semibold' : 'text-muted' ?>">
                        CA
                    </a>

                    <span class="text-primary mx-1">|</span>

                    <a href="<?= routeUrl($uriForRouting ?? '/', 'it') ?>"
                        class="<?= ($lang ?? '') === 'it' ? 'text-primary fw-semibold' : 'text-muted' ?>">
                        IT
                    </a>

                </div>

            </div>

        </div>

        <!-- BOTTOM BAR -->
        <div class="border-top mt-4 pt-3 d-flex flex-column flex-md-row justify-content-between small text-muted gap-2">

            <div>
                © <?= date('Y') ?> Hispantic
            </div>

            <div>
                Systems in production
            </div>

        </div>

    </div>

</footer>