<?php

return [
    /* 3movies.org translation files */

    // top-level elements
    'title' => '3 films die je leven zullen veranderen | 3movies.org',
    'header' => 'We zijn hier om je te helpen op je veganistische reis!',
    'subheader' => 'Bekijk drie tot nadenken stemmende films die licht werpen op ongemakkelijke realiteiten en ontdek andere bronnen voor ondersteuning!',

    // enter-your-code modal
    'modal.welcome' => 'Welkom bij 3Movies.org',
    'modal.description' => 'De bronnen op deze site onthullen feiten die opzettelijk voor consumenten verborgen zijn.',
    'modal.enter-code' => 'Voer uw code in:',
    'modal.no-code' => 'Heb je geen code?',
    'modal.yes-code' => 'Heb je een code?',
    'modal.referrer' => 'Waar heb je over ons gehoord?',
    'modal.referrer.event' => 'Straatevenement',
    'modal.referrer.social' => 'Social media',
    'modal.referrer.rec' => 'Vrienden / familie',
    'modal.powered-by' => 'Aangedreven door <a href=":url">ActivistHub.org</a>',

    // free-vegan-mentor element
    'mentor.signup' => 'Schrijf je in voor jouw',
    'mentor.header' => 'Gratis veganistische mentor!',
    'mentor.desc.1' => "We werken samen met Vegan Outreach's Vegan Mentor Program om de overgang te vergemakkelijken door persoonlijke ondersteuning te bieden!",
    'mentor.desc.2' => 'Je wordt gekoppeld aan je eigen mentor die vragen kan beantwoorden en je kan begeleiden met tips over winkelen, koken, uit eten gaan, voedingsinformatie en meer. Het programma streeft naar een gezonde, duurzame verandering van levensstijl door een netwerk van ondersteuning en middelen te bieden die vriendelijkheid boven wreedheid bevorderen.',
    'mentor.request-button' => 'Vraag een mentor aan',

    // footer
    'footer.hub-link' => 'Pas deze pagina aan en deel deze via <a href=":url" target="_blank"><u>Activist Hub!</u></a>',
    'footer.vh-link' => 'Een project van de <a href=":url" target="_blank"><u>Vegan Hacktivists</u></a>',
    'footer.patreon-link' => 'Steun ons',

    // resources
    'resources.website' => 'Bezoek website',
    'resources.youtube' => 'Kijk op YouTube',
    'resources.netflix' => 'Kijk op Netflix',
    'resources.video' => 'Bekijk video',

    // resource categories. This should match available categories in \App\Models\Resources::MAIN_CATEGORY_TAGS
    'resources.category.movie' => 'Films',
    'resources.category.video' => 'Videos',
    'resources.category.challenge' => 'Uitdagingen',
    'resources.category.book' => 'Boeken',
    'resources.category.website' => 'Websites',
    'resources.category.podcast' => 'Podcasts',
    'resources.category.recipe' => 'Recepten',
    'resources.category.blog' => 'Blogs',
    'resources.category.audiobook' => 'Audioboeken',

    // Override some resource names and descriptions in the database.
    // Translation IDs below are based on the database field `resources.name` (the English name) and `Str::slug()`.
    // This makes it possible to translate our most popular resources manually - but our admins (who add resources to the database) can't access this code.
    //
    // TODO: add multilingual resource support to Backpack and the database, and delete these lines.
    'resources.title.dominion' => 'Dominion',
    'resources.desc.dominion' => 'Dominion gebruikt drones, verborgen camera\'s en handcamera\'s om de donkere onderbuik van de moderne veehouderij bloot te leggen en de moraliteit en geldigheid van de heerschappij van de mensheid over het dierenrijk in twijfel te trekken.',
    'resources.title.seaspiracy' => 'Seaspiracy',
    'resources.desc.seaspiracy' => 'Gepassioneerd door het leven in de oceaan, probeert een filmmaker de schade te documenteren die mensen aan mariene soorten toebrengen - en onthult alarmerende wereldwijde corruptie.',
    'resources.title.the-game-changers' => 'The Game Changers',
    'resources.desc.the-game-changers' => 'Meeting visionary scientists and top athletes, a UFC fighter embarks on a quest to find the optimal diet for human performance and health.Een UFC-vechter ontmoet visionaire wetenschappers en topatleten en gaat op zoek naar het optimale dieet voor menselijke prestaties en gezondheid.',
    'resources.title.cowspiracy' => 'Cowspiracy',
    'resources.desc.cowspiracy' => 'Volg de schokkende, maar humoristische reis van een aspirant-milieuactivist, terwijl hij gedurfd op zoek is naar de echte oplossing voor de meest dringende milieuproblemen en het ware pad naar duurzaamheid.',
];
