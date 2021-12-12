<?php

return [
    /* 3movies.org translation files */

    // top-level elements
    'title' => '3 filmy, które zmienią Twoje życie |3movies.org.',
    'header' => 'Jesteśmy tutaj, aby pomóc Ci w Twojej drodze do weganizmu!',
    'subheader' => 'Zobacz trzy prowokujące filmy, które rzucają światło na niewygodną rzeczywistość i sprawdź materiały!',

    // enter-your-code modal
    'modal.welcome' => 'Witamy na 3movies.org.',
    'modal.description' => 'Materiały na tej stronie ujawniają fakty, które są celowo ukrywane przed konsumentami.',
    'modal.enter-code' => 'Wpisz swój kod:',
    'modal.no-code' => 'Nie masz kodu?',
    'modal.yes-code' => 'Masz kod?',
    'modal.referrer' => 'Gdzie się o nas dowiedziałeś/aś?',
    'modal.referrer.event' => 'Wydarzenie uliczne',
    'modal.referrer.social' => 'Media społecznościowe',
    'modal.referrer.rec' => 'Przyjaciele lub rodzina',
    'modal.powered-by' => 'Powered by <a href=":url"> Activisthub.org </a>',

    // free-vegan-mentor element
    'mentor.signup' => 'Zarejestruj się',
    'mentor.header' => 'Wegański Mentor za darmo!',
    'mentor.desc.1' => 'Nawiązaliśmy współpracę z z programem Vegan Mentor organizacji Vegan Outreach, aby pomóc ułatwić przejście, dzięki zapewnieniu indywidualnego wsparcia!',
    'mentor.desc.2' => 'Zostanie Ci przypisany mentor lub mentorka, który może odpowiedzieć na pytania i poprowadzić Cię poprzez wskazówki na temat zakupów, gotowania, jedzenia, informacji żywieniowych i innych. Celem programu jest wspieranie zdrowego, zrównoważonego sposobu zmiany stylu życia poprzez udostępnienie sieć wsparcia i materiałów, które promują prymat dobroci nad okrucieństwem.',
    'mentor.request-button' => 'Poproś o mentora',

    // footer
    'footer.hub-link' => 'Dostosuj i udostępniaj tę stronę przez <a href=":url" target="_blank"> <u> Activist Hub! </ U> </a>',
    'footer.vh-link' => 'Projekt stworzony przez <a href=":url" target="_blank"> <u> Vegan Hacktivists </ u> </a>',
    'footer.patreon-link' => 'Wesprzyj nas',

    // resources
    'resources.website' => 'Odwiedź stronę',
    'resources.youtube' => 'Zobacz na YouTube.',
    'resources.netflix' => 'Zobacz na Netflix.',
    'resources.video' => 'Zobacz wideo',

    // resource categories. This should match available categories in \App\Models\Resources::MAIN_CATEGORY_TAGS
    'resources.category.movie' => 'Filmy',
    'resources.category.video' => 'Wideo',
    'resources.category.challenge' => 'Wyzwania',
    'resources.category.book' => 'Książki',
    'resources.category.website' => 'Strony internetowe.',
    'resources.category.podcast' => 'Podcasty.',
    'resources.category.recipe' => 'Przepisy',
    'resources.category.blog' => 'Blogi',
    'resources.category.audiobook' => 'Audiobooki',

    // Override some resource names and descriptions in the database.
    // Translation IDs below are based on the database field `resources.name` (the English name) and `Str::slug()`.
    // This makes it possible to translate our most popular resources manually - but our admins (who add resources to the database) can't access this code.
    //
    // TODO: add multilingual resource support to Backpack and the database, and delete these lines.
    'resources.title.dominion' => 'Dominion',
    'resources.desc.dominion' => 'Przy produkcji filmu Dominion korzystano z dronów, ukrytych i przenośnych kamer, aby odsłonić ciemną stronę współczesnej hodowli zwierząt, kwestionując moralność i ważność panowania ludzkości w Królestwie zwierząt.',
    'resources.title.seaspiracy' => 'Seaspiracy',
    'resources.desc.seaspiracy' => 'Pasjonujący się życiem oceanów filmowiec wyrusza, by udokumentować szkody, jakie ludzie wyrządzają morskim gatunkom - i odkrywa niepokojącą globalną korupcję.',
    'resources.title.the-game-changers' => 'The Game Changers',
    'resources.desc.the-game-changers' => 'Spotykając się z wizjonerskimi naukowcami i najlepszymi sportowcami, zawodnik UFC wyrusza na poszukiwanie optymalnej diety dla zdrowia i wydajności człowieka.',
    'resources.title.cowspiracy' => 'Cowspiracy.',
    'resources.desc.cowspiracy' => 'Poznaj szokującą, a zarazem pełną humoru podróż aspirującego ekologa, który odważnie poszukuje prawdziwego rozwiązania najbardziej palących problemów środowiskowych i prawdziwej drogi do zrównoważonego rozwoju.',
];
