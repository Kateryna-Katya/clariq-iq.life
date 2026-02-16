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
                <h1 data-aos="fade-right">Polityka Prywatności</h1>

                <p data-aos="fade-up">
                    Polityka prywatności dotyczy danych osobowych dostarczanych przez klientów <strong><?= $domainTitle ?></strong>, zarówno w celu świadczenia różnego rodzaju usług doradczych w zakresie AI, jak i w ramach innych interakcji drogą elektroniczną, a także podczas udziału klientów w programach eksperckich i promocjach.
                </p>

                <p data-aos="fade-up">
                    <strong><?= $domainTitle ?></strong> zastrzega sobie prawo do wprowadzania zmian i uzupełnień do obowiązujących postanowień. Zmiany te będą miały pierwszeństwo przed obecnymi zapisami. Należy pamiętać, że nasze usługi mogą zawierać linki do zasobów stron trzecich (np. serwisów OpenAI lub platform analitycznych). W takich przypadkach <strong><?= $domainTitle ?></strong> nie ponosi odpowiedzialności za zachowanie poufności przez firmy zewnętrzne.
                </p>

                <h2 data-aos="fade-up">Procedura gromadzenia, przechowywania i usuwania danych</h2>
                <p data-aos="fade-up">
                    <strong><?= $domainTitle ?></strong> gromadzi dane osobowe wyłącznie za zgodą użytkownika i tylko w celu świadczenia wysokiej jakości usług: dostępu do materiałów edukacyjnych, udziału w sesjach strategicznych oraz wdrażania innowacji. Stosujemy nowoczesne protokoły szyfrowania w celu ochrony Twoich informacji.
                </p>

                <p data-aos="fade-up">
                    Maksymalny okres przechowywania danych osobowych wynosi 75 lat od daty otrzymania informacji, o ile przepisy prawa UE nie stanowią inaczej. Usunięcie lub anonimizacja danych następuje po osiągnięciu celów ich gromadzenia lub na oficjalną prośbę klienta.
                </p>

                <h2 data-aos="fade-up">Informacje techniczne</h2>
                <ul data-aos="fade-up">
                    <li>Czas dostępu i adres IP;</li>
                    <li>Źródła wejść na zasób <strong><?= $fullDomain ?></strong>;</li>
                    <li>Strony internetowe odwiedzane przez użytkownika;</li>
                    <li>Inne informacje techniczne dostarczane przez przeglądarkę;</li>
                    <li>Numer telefonu (w przypadku połączenia z numerami podanymi na stronie).</li>
                </ul>

                <h2 data-aos="fade-up">Informacje osobiste</h2>
                <p data-aos="fade-up">Podczas wypełniania formularzy kontaktowych gromadzimy:</p>
                <ul data-aos="fade-up">
                    <li>Nazwę użytkownika;</li>
                    <li>E-mail (np. w formacie <em>support@<?= $fullDomain ?></em>) oraz numer telefonu.</li>
                </ul>

                <h2 data-aos="fade-up">Cele przetwarzania danych</h2>
                <ul data-aos="fade-up">
                    <li>Zapewnienie dostępu do bazy praktyk zastosowania AI;</li>
                    <li>Uwzględnienie sugestii przy aktualizacji narzędzi AI;</li>
                    <li>Informowanie o promocjach i nowych materiałach na blogu;</li>
                    <li>Zapewnienie wsparcia eksperckiego na wszystkich etapach.</li>
                </ul>

                <h2 data-aos="fade-up">Przekazywanie danych osobom trzecim</h2>
                <p data-aos="fade-up"><strong><?= $domainTitle ?></strong> nie udostępnia danych osobom trzecim, z wyjątkiem:</p>
                <ul data-aos="fade-up">
                    <li>Wyraźnej zgody użytkownika;</li>
                    <li>Wymagań właściwych organów w Polsce zgodnie z prawem;</li>
                    <li>Przypadków strategicznej fuzji lub przejęcia firmy.</li>
                </ul>

                <h2 data-aos="fade-up">Cookies i prawa użytkownika</h2>
                <p data-aos="fade-up">
                    Pliki cookie pozwalają nam analizować ruch i zapisywać Twoje preferencje (region Polska, ustawienia interfejsu). Jeśli chcesz edytować swoje dane lub zaprzestać ich przetwarzania zgodnie z normami RODO, prosimy o kontakt:
                </p>
                
                <div class="pages-footer" data-aos="fade-in" style="margin-top: 40px; padding: 30px; background: rgba(255,255,255,0.02); border-radius: 20px;">
                    <p>Email: <a href="mailto:support@<?= $fullDomain ?>" class="text-gradient" style="text-decoration: none; font-weight: 600;">support@<?= $fullDomain ?></a></p>
                    <p>Telefon: <a href="tel:+48226332549" style="color: inherit; text-decoration: none;">+48226332549</a></p>
                    <p style="font-size: 0.8rem; margin-top: 15px; opacity: 0.6;">Zaktualizowano: Luty 2026</p>
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