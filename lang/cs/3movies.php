<?php

return [
    /* 3movies.org translation files */

    // top-level elements
    'title' => '3 filmy, které změní váš život | 3Movies.org.',
    'header' => 'Jsme tu, abychom vám pomohli na vaší veganské cestě!',
    'subheader' => 'Sledujte tři myšlenky-provokující filmy, které vyhodily světlo na nepříjemné reality, a prozkoumat další zdroje pro podporu!',

    // enter-your-code modal
    'modal.welcome' => 'Vítejte na 3Movies.org.',
    'modal.description' => 'Zdroje na těchto stránkách vystavují fakta, které jsou úmyslně skryty od spotřebitelů.',
    'modal.enter-code' => 'Zadejte prosím kód:',
    'modal.no-code' => 'Nemáte kód?',
    'modal.yes-code' => 'Mít kód?',
    'modal.referrer' => 'Kde jste se o nás dozvěděli?',
    'modal.referrer.event' => 'Ulice Event.',
    'modal.referrer.social' => 'Sociální média',
    'modal.referrer.rec' => 'Přátelé / rodina',
    'modal.powered-by' => 'Powered by <a href=":Url"> Activishub.org </a>',

    // free-vegan-mentor element
    'mentor.signup' => 'Zaregistrujte se pro své',
    'mentor.header' => 'Volný veganský mentor!',
    'mentor.desc.1' => 'Propartovali jsme s programem pro veganské dosahu veganské mladiství, abychom pomohli zmírnit přechod tím, že poskytuje osobní podpora jednorázové!',
    'mentor.desc.2' => 'Budete spárováni s vlastním mentorem, který může odpovědět na otázky a vést vás s tipy na nákupy, vaření, stravování, informace výživy a další.Program se snaží podporovat zdravý, udržitelný posun životního stylu tím, že nabízí síť podpory a zdrojů, které podporují laskavost přes krutost.',
    'mentor.request-button' => 'Požádat o mentor.',

    // footer
    'footer.hub-link' => 'Přizpůsobit a sdílet tuto stránku přes <a href=":URL" cortends="_blank"> <U> Activist Hub! </ U> </a>',
    'footer.vh-link' => 'Projekt <a href=":URL" cortle="_blank"> <u> Vegan Hacktivists </ u> </a>',
    'footer.patreon-link' => 'Podpoř nás',

    // resources
    'resources.website' => 'Navštivte webové stránky',
    'resources.youtube' => 'Sledujte na YouTube.',
    'resources.netflix' => 'Sledujte na Netflix.',
    'resources.video' => 'Sledovat video',

    // resource categories. This should match available categories in \App\Models\Resources::MAIN_CATEGORY_TAGS
    'resources.category.movie' => 'Filmy',
    'resources.category.video' => 'Videa',
    'resources.category.challenge' => 'Výzvy',
    'resources.category.book' => 'Knihy',
    'resources.category.website' => 'Webové stránky',
    'resources.category.podcast' => 'Podcasty',
    'resources.category.recipe' => 'Recepty',
    'resources.category.blog' => 'Blogy',
    'resources.category.audiobook' => 'Audioknihy',

    // Override some resource names and descriptions in the database.
    // Translation IDs below are based on the database field `resources.name` (the English name) and `Str::slug()`.
    // This makes it possible to translate our most popular resources manually - but our admins (who add resources to the database) can't access this code.
    //
    // TODO: add multilingual resource support to Backpack and the database, and delete these lines.
    'resources.title.dominion' => 'Dominion',
    'resources.desc.dominion' => 'Dominion používá drony, skryté a kapesní kamery, aby vystavili temné podbřišně moderního zemědělství zemědělství, zpochybňující morálku a platnost dominionu lidstva nad zvířecí královstvím.',
    'resources.title.seaspiracy' => 'Seaspiracy',
    'resources.desc.seaspiracy' => 'Vášnivý o oceánu život, filmař se stanoví, aby dokázal škodu, že lidé dělají mořský druh - a odhazuje alarmující globální korupci.',
    'resources.title.the-game-changers' => 'The Game Changers',
    'resources.desc.the-game-changers' => 'Setkání s vizionářskými vědci a špičkovými atleti, UFC bojovník se pustí na hledání, aby našel optimální stravu pro lidský výkon a zdraví.',
    'resources.title.cowspiracy' => 'Cowspiracy',
    'resources.desc.cowspiracy' => 'Následujte šokující, přesto vtipné, cesty aspirujícího životního prostředí, protože odvážně se snaží najít skutečné řešení nejrůznějším otázkám životního prostředí a skutečné cesty k udržitelnosti.',
];
