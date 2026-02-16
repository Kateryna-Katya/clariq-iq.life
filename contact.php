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
                <h1 data-aos="fade-right">Informacje kontaktowe</h1>

                <p data-aos="fade-up">
                    Jesteśmy zawsze otwarci na nowe projekty i profesjonalne dyskusje. 
                    Skontaktuj się z zespołem <strong><?= $domainTitle ?></strong> w dowolny dogodny dla Ciebie sposób. 
                    Nasi specjaliści w Warszawie są gotowi odpowiedzieć na Twoje pytania w dni robocze od 09:00 do 18:00.
                </p>

                <div class="contact-cards">
                    <div class="contact-card" data-aos="zoom-in" data-aos-delay="100">
                        <div class="contact-card__icon">
                            <i data-lucide="mail"></i>
                        </div>
                        <h2>Napisz do nas</h2>
                        <p>W przypadku pytań ogólnych, sugestii i zapytań dotyczących consultingu:</p>
                        <a href="mailto:support@<?= $fullDomain ?>" class="contact-link">support@<?= $fullDomain ?></a>
                    </div>

                    <div class="contact-card" data-aos="zoom-in" data-aos-delay="200">
                        <div class="contact-card__icon">
                            <i data-lucide="phone"></i>
                        </div>
                        <h2>Zadzwoń</h2>
                        <p>Bezpośrednia linia wsparcia klienta i konsultacji eksperckich:</p>
                        <a href="tel:+48226332549" class="contact-link">+48226332549</a>
                    </div>

                    <div class="contact-card" data-aos="zoom-in" data-aos-delay="300">
                        <div class="contact-card__icon">
                            <i data-lucide="map-pin"></i>
                        </div>
                        <h2>Nasze biuro</h2>
                        <p>Główne biuro firmy <?= $domainTitle ?> znajduje się pod adresem:</p>
                        <address class="contact-address">
                            ul. Marszałkowska 126/134,<br>
                            00-008 Warszawa,<br>
                            Polska
                        </address>
                    </div>
                </div>

                <div class="contact-extra" data-aos="fade-up">
                    <p>
                        Możesz również skorzystać z formularza kontaktowego na 
                        <a href="./#contact" class="text-gradient" style="font-weight: 600; text-decoration: none;">stronie głównej</a>, aby szybko wysłać zapytanie.
                    </p>
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