<?php

return [
    /* 3movies.org translation files */

    // top-level elements
    'title' => '3 filmy, które zmieni twoje życie |3movies.org.',
    'header' => 'Jesteśmy tutaj, aby pomóc Ci w swojej wegańskiej podróży!',
    'subheader' => 'Oglądaj trzy prowokujące filmy, które rzuciły światło na niewygodne rzeczywistości i zbadaj inne zasoby na wsparcie!',

    // enter-your-code modal
    'modal.welcome' => 'Witamy na 3movies.org.',
    'modal.description' => 'Zasoby na tej stronie ujawniają fakty, które są celowo ukryte przed konsumentami.',
    'modal.enter-code' => 'Wpisz swój kod:',
    'modal.no-code' => 'Nie masz kodu?',
    'modal.yes-code' => 'Mieć kod?',
    'modal.referrer' => 'Gdzie o nas dowiedziałeś?',
    'modal.referrer.event' => 'Wydarzenie uliczne.',
    'modal.referrer.social' => 'Media społecznościowe',
    'modal.referrer.rec' => 'Przyjaciele rodzina',
    'modal.powered-by' => 'Powered by <a href=":url"> Activisthub.org </a>',

    // free-vegan-mentor element
    'mentor.signup' => 'Zarejestruj się',
    'mentor.header' => 'Darmowy mentor wegański!',
    'mentor.desc.1' => 'Współpracowaliśmy z programem wegańskiego programu wegańskiego Mentor Outreach, aby pomóc złagodzić przejście, zapewniając osobiste wsparcie indywidualne!',
    'mentor.desc.2' => 'Będziesz sparowany ze swoim własnym mentorem, który może odpowiedzieć na pytania i poprowadzić Cię z wskazówkami na temat zakupów, gotowania, jedzenia, informacji żywieniowych i więcej.Program dąży do wspierania zdrowego, zrównoważonego stylu zmiany biegów, oferując sieć wsparcia i zasobów, które promują dobroć nad okrucieństwem.',
    'mentor.request-button' => 'Poproś o mentor',

    // footer
    'footer.hub-link' => 'Dostosuj i udostępniaj tę stronę przez <a href=":url" target="_blank"> <u> Activist Hub! </ U> </a>',
    'footer.vh-link' => 'Projekt przez <a href=":url" target="_blank"> <u> Vegan Hacktivists </ u> </a>',
    'footer.patreon-link' => 'Wesprzyj nas',

    // resources
    'resources.website' => 'Odwiedź stronę',
    'resources.youtube' => 'Oglądaj na YouTube.',
    'resources.netflix' => 'Oglądaj Netflix.',
    'resources.video' => 'Oglądać wideo',

    // resource categories. This should match available categories in \App\Models\Resources::MAIN_CATEGORY_TAGS
    'resources.category.movie' => 'Kino',
    'resources.category.video' => 'Filmy',
    'resources.category.challenge' => 'Wyzwania',
    'resources.category.book' => 'Książki',
    'resources.category.website' => 'Strony internetowe.',
    'resources.category.podcast' => 'Podcasty.',
    'resources.category.recipe' => 'Przepisy',
    'resources.category.blog' => 'Blogi',
    'resources.category.audiobook' => 'Audiobooks.',

    // Override some resource names and descriptions in the database.
    // Translation IDs below are based on the database field `resources.name` (the English name) and `Str::slug()`.
    // This makes it possible to translate our most popular resources manually - but our admins (who add resources to the database) can't access this code.
    //
    // TODO: add multilingual resource support to Backpack and the database, and delete these lines.
    'resources.title.dominion' => 'Dominion',
    'resources.desc.dominion' => 'Dominion korzysta z dronów, ukrytych i przenośnych kamer, aby odsłonić ciemne podbrzusze z nowoczesnych rolnictwa zwierząt, kwestionując moralność i ważność panowania Humankind w Królestwie zwierząt.',
    'resources.title.seaspiracy' => 'Seaspiracy',
    'resources.desc.seaspiracy' => 'Namiętny życia oceanu, filmowca wyznacza, aby udokumentować szkodę, że ludzie robią na gatunki morskie - i odkrywają alarmujące globalne korupcja.',
    'resources.title.the-game-changers' => 'The Game Changers',
    'resources.desc.the-game-changers' => 'Spotkanie wizjonerów naukowców i najlepszych sportowców, myśliwiec UFC wyrusza na misję, aby znaleźć optymalną dietę dla ludzkiej wydajności i zdrowia.',
    'resources.title.cowspiracy' => 'Cowspiracy.',
    'resources.desc.cowspiracy' => 'Podążaj za szokującym, ale humorystycznym, podróż aspirującym ekologicznie, ponieważ niewiele stara się znaleźć prawdziwe rozwiązanie do najbardziej naciskających kwestie środowiskowe i prawdziwą drogę do zrównoważonego rozwoju.',
];
