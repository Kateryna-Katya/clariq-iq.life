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
                <h1 data-aos="fade-right">Polityka przetwarzania danych osobowych</h1>

                <h2 data-aos="fade-up">1. Postanowienia ogólne</h2>
                <p data-aos="fade-up">
                    Niniejsza polityka przetwarzania danych osobowych (dalej —
                    „Polityka”) określa zasady i warunki przetwarzania danych osobowych
                    podejmowane przez platformę <strong><?= $domainTitle ?></strong> (dalej — „Operator”) oraz
                    ustanawia środki zapewniające bezpieczeństwo tych danych zgodnie z wymogami RODO (GDPR).
                </p>
                <p data-aos="fade-up">
                    1.1. Najważniejszym celem Operatora jest przestrzeganie praw i wolności człowieka podczas
                    przetwarzania jego danych osobowych, w tym ochrona prawa do
                    prywatności oraz tajemnicy osobistej.
                </p>
                <p data-aos="fade-up">
                    1.2. Niniejsza Polityka ma zastosowanie do wszystkich informacji, które
                    Operator może uzyskać o odwiedzających (dalej — „Użytkownicy”)
                    serwis internetowy <strong><?= $fullDomain ?></strong>.
                </p>

                <h2 data-aos="fade-up">2. Podstawowe pojęcia</h2>
                <ul data-aos="fade-up">
                    <li>
                        <strong>Serwis internetowy</strong> — zasób znajdujący się pod adresem 
                        <strong><?= $fullDomain ?></strong>, dostarczający informacji o praktykach zastosowania AI.
                    </li>
                    <li><strong>Użytkownik</strong> — każda osoba odwiedzająca serwis internetowy.</li>
                    <li>
                        <strong>Dane osobowe</strong> — wszelkie informacje
                        odnoszące się bezpośrednio lub pośrednio do Użytkownika serwisu.
                    </li>
                    <li>
                        <strong>Bezpieczeństwo danych</strong> — ochrona danych
                        przed nieuprawnionym dostępem, zniszczeniem lub zmianą.
                    </li>
                </ul>

                <h2 data-aos="fade-up">3. Dane, które przetwarzamy</h2>
                <p data-aos="fade-up">Operator może przetwarzać następujące kategorie danych:</p>
                <ul data-aos="fade-up">
                    <li>
                        <strong>Dostarczane przez Użytkownika:</strong>
                        <ul>
                            <li>Imię (w celu personalizacji komunikacji);</li>
                            <li>Adres e-mail (w celu odpowiadania na zapytania);</li>
                            <li>Numery telefonów (z walidacją według standardów polskich).</li>
                        </ul>
                    </li>
                    <li>
                        <strong>Gromadzone automatycznie:</strong>
                        <ul>
                            <li>
                                Zanonimizowane dane o odwiedzających (pliki „cookie”) za pomocą usług
                                statystycznych. Obejmuje to adres IP, typ przeglądarki i parametry urządzenia.
                            </li>
                        </ul>
                    </li>
                </ul>

                <h2 data-aos="fade-up">4. Cele przetwarzania</h2>
                <ul data-aos="fade-up">
                    <li>
                        Zapewnienie dostępu do treści edukacyjnych platformy <strong><?= $domainTitle ?></strong>.
                    </li>
                    <li>
                        Nawiązywanie kontaktu zwrotnego, w tym przesyłanie powiadomień o nowych technologiach i narzędziach AI.
                    </li>
                    <li>
                        Realizacja zapytań Użytkownika dotyczących usług doradczych w krajach UE.
                    </li>
                    <li>
                        Poprawa jakości działania serwisu na podstawie analityki.
                    </li>
                </ul>

                <h2 data-aos="fade-up">5. Bezpieczeństwo i przechowywanie danych</h2>
                <ul data-aos="fade-up">
                    <li>
                        Operator podejmuje techniczne środki ochrony danych zgodnie z normami prawodawstwa europejskiego.
                    </li>
                    <li>
                        Dane nigdy nie są przekazywane osobom trzecim bez uzasadnionych podstaw prawnych.
                    </li>
                    <li>
                        Użytkownik może w dowolnym momencie wycofać zgodę, wysyłając wiadomość na adres:
                        <a href="mailto:support@<?= $fullDomain ?>" class="text-gradient" style="text-decoration: none; font-weight: 600;">support@<?= $fullDomain ?></a>.
                    </li>
                </ul>

                <div class="pages-footer" data-aos="fade-in" style="margin-top: 50px; padding-top: 30px; border-top: 1px solid rgba(255,255,255,0.05);">
                    <p style="font-size: 0.9rem; color: var(--text-muted);">Aktualna wersja Polityki <?= $domainTitle ?>: Luty 2026</p>
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
                Ta strona używa plików cookie w celu poprawy jakości usług. Więcej informacji — w naszej 
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