<?php

$fullDomain = strtolower($_SERVER['HTTP_HOST'] ?? '');
$fullDomain = explode(':', $fullDomain)[0];

$parts = explode('.', $fullDomain);
$domainSlug = count($parts) >= 2
        ? $parts[count($parts) - 2]
        : $fullDomain;

$domainTitle = ucwords(str_replace('-', ' ', $domainSlug));

?>
<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $domainTitle ?> — Praktyki AI dla każdego
    </title>
    <link rel="icon"
        href="data:image/svg+xml,%3Csvg width='32' height='32' viewBox='0 0 32 32' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Ccircle cx='16' cy='16' r='14' stroke='%23c1ff00' stroke-width='2'/%3E%3Ccircle cx='16' cy='16' r='6' fill='%23c1ff00'%3E%3Canimate attributeName='opacity' values='1;0.5;1' dur='3s' repeatCount='indefinite' /%3E%3C/circle%3E%3Cpath d='M16 2L16 6M16 26L16 30M30 16L26 16M6 16L2 16' stroke='%23c1ff00' stroke-width='2' stroke-linecap='round'/%3E%3C/svg%3E"
        type="image/svg+xml">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&family=Montserrat:wght@700;800&display=swap"
        rel="stylesheet">
    <script src="https://unpkg.com/lucide@latest"></script>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <header class="header">
        <div class="container header__container">
            <a href="./#hero" class="logo">
                <span class="logo__dot"></span>
                <span class="logo__text">
                    <?= $domainTitle ?>
                </span>
            </a>
            <nav class="nav">
                <ul class="nav__list">
                    <li><a href="./#hero" class="nav__link">Strona główna</a></li>
                    <li><a href="./#capabilities" class="nav__link">Możliwości</a></li>
                    <li><a href="./#workflow" class="nav__link">Jak to działa</a></li>
                    <li><a href="./#education" class="nav__link">Edukacja</a></li>
                    <li><a href="./#community" class="nav__link">Społeczność</a></li>
                </ul>
            </nav>
            <a href="./#contact" class="btn btn--outline header__btn">Kontakt</a>
            <button class="burger" aria-label="Menu">
                <span></span>
            </button>
        </div>
    </header>

    <main>
        <section class="pages">
            <div class="container">
                <h1 data-aos="fade-right">Zastrzeżenia prawne</h1>

                <div class="pages-content" data-aos="fade-up">
                    <p>
                        <strong>Informacje ogólne:</strong> Wszystkie materiały, artykuły i informacje
                        publikowane na stronie <strong><?= $domainTitle ?></strong> mają charakter wyłącznie
                        informacyjno-edukacyjny. Nie stanowią one i nie powinny być
                        traktowane jako osobista rekomendacja techniczna, profesjonalna porada prawna
                        lub finansowa, oferta publiczna ani zachęta do dokonywania jakichkolwiek
                        operacji finansowych. Udostępniamy treści edukacyjne dotyczące 
                        <em>praktyk zastosowania AI dla każdego</em>.
                    </p>

                    <p>
                        <strong>Brak gwarancji:</strong> Zespół <strong><?= $domainTitle ?></strong> nie udziela żadnych gwarancji
                        co do dokładności, kompletności ani aktualności informacji przedstawionych na blogu. 
                        Wszelkie wzmianki o potencjalnym wzroście efektywności, programach dochodu pasywnego 
                        czy przeszłych wynikach korzystania z narzędzi AI nie gwarantują podobnych wyników 
                        w przyszłości. Indywidualne efekty Twojej działalności zależą od wielu czynników, 
                        w tym poziomu przygotowania technicznego oraz warunków rynkowych w Polsce i UE, 
                        i mogą znacząco odbiegać od przedstawionych przykładów.
                    </p>

                    <p>
                        <strong>Ograniczenie odpowiedzialności:</strong> Administracja strony <strong><?= $fullDomain ?></strong>,
                        jej właściciele i podmioty stowarzyszone nie ponoszą odpowiedzialności za
                        jakiekolwiek bezpośrednie lub pośrednie straty, decyzje lub działania
                        podjęte przez użytkownika na podstawie informacji z tego serwisu. Cała
                        odpowiedzialność za korzystanie z proponowanych metodologii, promptów 
                        i rozwiązań programowych spoczywa wyłącznie na użytkowniku. Treści platformy 
                        <strong><?= $domainTitle ?></strong> są gromadzone ze źródeł uznanych za wiarygodne 
                        w momencie publikacji.
                    </p>

                    <p>
                        <strong>Ostrzeżenie o ryzyku:</strong> Każda działalność mająca na celu
                        automatyzację procesów biznesowych lub wykorzystanie sieci neuronowych w celach 
                        komercyjnych wiąże się z określonym poziomem ryzyka (w tym dokładności danych 
                        i aspektów etycznych AI). Przed podjęciem jakichkolwiek ważnych decyzji 
                        strategicznych stanowczo zalecamy przeprowadzenie własnych badań i skonsultowanie 
                        się z wykwalifikowanym, niezależnym specjalistą.
                    </p>

                    <p>
                        <strong>Potwierdzenie użytkownika:</strong> Kontynuując korzystanie ze
                        strony <strong><?= $domainTitle ?></strong>, potwierdzasz, że masz ukończone 18 lat, 
                        działasz z własnej woli, w pełni rozumiesz i akceptujesz wszystkie 
                        wymienione ryzyka oraz warunki niniejszego zastrzeżenia.
                    </p>
                </div>

                <div class="pages-footer" data-aos="fade-in" style="margin-top: 50px; padding-top: 30px; border-top: 1px solid rgba(255,255,255,0.05);">
                    <p style="font-size: 0.9rem; color: var(--text-muted);">Ostatnia aktualizacja: Luty 2026</p>
                    <a href="./" class="btn btn--outline" style="margin-top: 20px; font-size: 0.8rem; padding: 10px 20px;">Wróć do strony głównej</a>
                </div>
            </div>
        </section>
    </main>

    <footer class="footer">
        <div class="container footer__grid">
            <div class="footer__col">
                <a href="./#hero" class="logo footer__logo">
                    <span class="logo__dot"></span>
                    <span class="logo__text">
                        <?= $domainTitle ?>
                    </span>
                </a>
                <p class="footer__description">Technologie, które pracują dla Ciebie. Przemyśl na nowo podejście do rozwoju wraz z profesjonalnym wsparciem.</p>
            </div>
            <div class="footer__col">
                <h4 class="footer__title">Menu</h4>
                <ul class="footer__links">
                    <li><a href="./#hero">Strona główna</a></li>
                    <li><a href="./#capabilities">Możliwości</a></li>
                    <li><a href="./#workflow">Proces</a></li>
                    <li><a href="./#contact">Kontakt</a></li>
                </ul>
            </div>
            <div class="footer__col">
                <h4 class="footer__title">Dokumenty</h4>
                <ul class="footer__links">
                    <li><a href="./privacy.php">Polityka Prywatności</a></li>
                    <li><a href="./cookies.php">Polityka Cookies</a></li>
                    <li><a href="./terms.php">Regulamin Usług</a></li>
                    <li><a href="./return.php">Polityka Zwrotów</a></li>
                    <li><a href="./disclaimer.php">Zastrzeżenia</a></li>
                    <li><a href="./contact.php">Kontakt</a></li>
                    <li><a href="./personal-data-policy.php">Polityka Danych</a></li>
                </ul>
            </div>
            <div class="footer__col">
                <h4 class="footer__title">Kontakt</h4>
                <ul class="footer__contact-info">
                    <li><i data-lucide="phone"></i> +48226332549</li>
                    <li><i data-lucide="mail"></i> hello@<?= $fullDomain ?></li>
                    <li><i data-lucide="map-pin"></i> ul. Marszałkowska 126/134, 00-008 Warszawa, Polska</li>
                </ul>
            </div>
        </div>
        <div class="container footer__bottom">
            <p>&copy; 2026 <?= $domainTitle ?>. Wszelkie prawa zastrzeżone. Oferta aktywna w krajach UE.</p>
        </div>
    </footer>

    <div class="menu-overlay" id="menu-overlay">
        <nav class="mobile-nav">
            <ul class="mobile-nav__list">
                <li><a href="./#hero" class="mobile-nav__link">Strona główna</a></li>
                <li><a href="./#capabilities" class="mobile-nav__link">Możliwości</a></li>
                <li><a href="./#workflow" class="mobile-nav__link">Proces</a></li>
                <li><a href="./#education" class="mobile-nav__link">Edukacja</a></li>
                <li><a href="./#community" class="mobile-nav__link">Społeczność</a></li>
                <li><a href="./#contact" class="mobile-nav__link btn btn--primary">Zacznij teraz</a></li>
            </ul>
        </nav>
    </div>

    <div class="cookie-popup" id="cookie-popup">
        <div class="cookie-popup__content">
            <p class="cookie-popup__text">
                Ta strona używa plików cookies w celu poprawy jakości usług. Więcej informacji — w naszej 
                <a href="./cookies.php">Polityce Cookies</a>.
            </p>
            <button class="btn btn--primary btn--sm" id="cookie-accept">Akceptuję</button>
        </div>
    </div>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r128/three.min.js"></script>
    <script src="script.js"></script>
</body>

</html>