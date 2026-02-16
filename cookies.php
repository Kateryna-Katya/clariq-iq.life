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
                <h1 data-aos="fade-right">Polityka plików cookie</h1>

                <p data-aos="fade-up">
                    Witamy na <strong><?= $domainTitle ?></strong>! Aby ulepszyć Twoje doświadczenie podczas korzystania z naszej strony, zapewnić jej poprawne działanie oraz analizować aktywność użytkowników, używamy plików cookie i podobnych technologii. Niniejsza polityka szczegółowo wyjaśnia, jakie technologie stosujemy, w jakich celach oraz jak możesz nimi zarządzać.
                </p>

                <h2 data-aos="fade-up">Czym są pliki cookie?</h2>
                <p data-aos="fade-up">
                    Plik cookie to mały fragment danych (plik tekstowy), który strona internetowa zapisuje na Twoim urządzeniu (komputerze, tablecie lub smartfonie) podczas jej odwiedzania. Pozwala to platformie <strong><?= $domainTitle ?></strong> "zapamiętać" Twoje działania i preferencje (np. ustawienia regionalne dla Polski, wybrane tematy AI i inne parametry) przez określony czas, dzięki czemu nie musisz ich wprowadzać ponownie przy każdej wizycie.
                </p>

                <h2 data-aos="fade-up">Jakie rodzaje plików cookie wykorzystujemy?</h2>
                <p data-aos="fade-up">
                    Klasyfikujemy pliki cookie używane na stronie <strong><?= $fullDomain ?></strong> według następujących kategorii:
                </p>
                <ul data-aos="fade-up">
                    <li>
                        <strong>Ściśle niezbędne pliki cookie:</strong> Pliki te są kluczowe dla funkcjonowania strony. Pozwalają na poruszanie się po serwisie <strong><?= $domainTitle ?></strong> i korzystanie z jego podstawowych funkcji.
                    </li>
                    <li>
                        <strong>Analityczne i wydajnościowe pliki cookie:</strong> Gromadzą one anonimowe informacje o tym, jak odwiedzający korzystają z naszej strony, pomagając nam ulepszać treści naszego bloga o praktykach AI.
                    </li>
                    <li>
                        <strong>Funkcjonalne pliki cookie:</strong> Pozwalają one stronie zapamiętać Twoje wybory, aby zapewnić bardziej spersonalizowane doświadczenie w ramach naszych interaktywnych usług.
                    </li>
                    <li>
                        <strong>Reklamowe (marketingowe) pliki cookie:</strong> Są używane do dostarczania ogłoszeń odpowiadających Twoim zainteresowaniom technologiami nowej generacji.
                    </li>
                </ul>

                <h2 data-aos="fade-up">Dlaczego używamy plików cookie?</h2>
                <p data-aos="fade-up">Główne cele stosowania plików cookie na stronie <strong><?= $domainTitle ?></strong>:</p>
                <ul data-aos="fade-up">
                    <li>Zapewnienie stabilnego i bezpiecznego działania platformy.</li>
                    <li>Analiza zachowań użytkowników w celu optymalizacji struktury strony.</li>
                    <li>Personalizacja treści i ustawień dla wygody użytkowników w Europie.</li>
                    <li>Dostarczanie istotnych materiałów o innowacyjnych technologiach.</li>
                </ul>

                <h2 data-aos="fade-up">Twój wybór i zarządzanie plikami cookie</h2>
                <p data-aos="fade-up">
                    Masz pełną kontrolę nad plikami cookie. W każdej chwili możesz zmienić swoje ustawienia w przeglądarce lub poprzez nasz baner cookie. Należy jednak pamiętać: wyłączenie niezbędnych plików cookie może prowadzić do nieprawidłowego działania niektórych funkcji naszej strony.
                </p>

                <h2 data-aos="fade-up">Pliki cookie podmiotów trzecich</h2>
                <p data-aos="fade-up">
                    Na stronach <strong><?= $domainTitle ?></strong> możemy korzystać z usług firm zewnętrznych, takich jak Google Analytics do statystyk lub <strong>Three.js</strong> do renderowania grafiki 3D w sekcji Hero. Zalecamy zapoznanie się z ich politykami prywatności.
                </p>

                <h2 data-aos="fade-up">Informacje kontaktowe</h2>
                <p data-aos="fade-up">
                    Jeśli masz jakiekolwiek pytania dotyczące naszej polityki plików cookie na <strong><?= $domainTitle ?></strong>, prosimy o kontakt:
                    <br><br>
                    Email: <a href="mailto:support@<?= $fullDomain ?>" class="text-gradient" style="text-decoration: none; font-weight: 600;">support@<?= $fullDomain ?></a><br>
                    Telefon: <a href="tel:+48226332549" style="color: inherit; text-decoration: none;">+48226332549</a><br>
                    Adres: ul. Marszałkowska 126/134, 00-008 Warszawa, Polska
                </p>
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