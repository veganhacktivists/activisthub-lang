<?php

return [
    /* 3movies.org translation files */

    // top-level elements
    'title' => '3 կինոնկար, որոնք կփոխեն ձեր կյանքը | 3Movies.org',
    'header' => 'Մենք այստեղ ենք, որպեսզի օգնենք ձեզ ձեր Vegan ճանապարհորդության մեջ:',
    'subheader' => 'Դիտեք երեք մտածող կինոնկար, որոնք լույս են սփռում անհարմար իրողությունների վրա եւ աջակցության համար ուսումնասիրում այլ ռեսուրսներ:',

    // enter-your-code modal
    'modal.welcome' => 'Բարի գալուստ 3Movies.org',
    'modal.description' => 'Այս կայքի ռեսուրսները բացահայտում են փաստերը, որոնք դիտավորյալ թաքնված են սպառողներից:',
    'modal.enter-code' => 'Մուտքագրեք ձեր ծածկագիրը.',
    'modal.no-code' => 'Չունեք կոդ:',
    'modal.yes-code' => 'Ունեք կոդ:',
    'modal.referrer' => 'Որտեղ եք լսել մեր մասին.',
    'modal.referrer.event' => 'Փողոցային իրադարձություն',
    'modal.referrer.social' => 'Սոցիալական լրատվամիջոց',
    'modal.referrer.rec' => 'Ընկերներ / ընտանիք',
    'modal.powered-by' => 'Powered by <a href=":url"> ActivisHub.org </a>',

    // free-vegan-mentor element
    'mentor.signup' => 'Գրանցվեք ձեր համար',
    'mentor.header' => 'Անվճար Vegan մենթոր:',
    'mentor.desc.1' => 'Մենք համագործակցել ենք Vegan Outreach- ի Vegan Mentor ծրագրի հետ `օգնելու համար հեշտացնել անցումը` տրամադրելով մեկ-մեկ անձնական աջակցություն:',
    'mentor.desc.2' => 'Դուք զույգ կլինեք ձեր սեփական դաստիարակին, ով կարող է պատասխանել հարցերին եւ ձեզ առաջնորդել խորհուրդներ գնումներ կատարելու, խոհարարության, ուտելու, սննդի տեղեկատվության եւ այլնի վերաբերյալ:Ծրագիրը ձգտում է խթանել առողջ, կայուն կենսակերպի տեղաշարժ `առաջարկելով աջակցության եւ ռեսուրսների ցանց, որը նպաստում է բարությունը դաժանության նկատմամբ:',
    'mentor.request-button' => 'Հայցել դաստիարակ',

    // footer
    'footer.hub-link' => 'Անհատականացրեք եւ կիսեք այս էջը <a href=":Rblank"> <u> ակտիվիստ հանգույցի միջոցով: </ u> </a>',
    'footer.vh-link' => 'Ծրագիր <a href=":Url" tared="_Blank"> <u> Vegan Hacktivists </ u> </a>',
    'footer.patreon-link' => 'Աջակցեք մեզ',

    // resources
    'resources.website' => 'Այցելեք կայք',
    'resources.youtube' => 'Դիտեք YouTube- ում',
    'resources.netflix' => 'Դիտեք Netflix- ում',
    'resources.video' => 'Դիտեք տեսանյութը',

    // resource categories. This should match available categories in \App\Models\Resources::MAIN_CATEGORY_TAGS
    'resources.category.movie' => 'Ֆիլմեր',
    'resources.category.video' => 'Տեսանյութեր',
    'resources.category.challenge' => 'Մարտահրավերներ',
    'resources.category.book' => 'Գրքեր',
    'resources.category.website' => 'Կայքեր',
    'resources.category.podcast' => 'podcasts',
    'resources.category.recipe' => 'Բաղադրատոմսեր',
    'resources.category.blog' => 'Բլոգեր',
    'resources.category.audiobook' => 'audiobooks',

    // Override some resource names and descriptions in the database.
    // Translation IDs below are based on the database field `resources.name` (the English name) and `Str::slug()`.
    // This makes it possible to translate our most popular resources manually - but our admins (who add resources to the database) can't access this code.
    //
    // TODO: add multilingual resource support to Backpack and the database, and delete these lines.
    'resources.title.dominion' => 'Dominion',
    'resources.desc.dominion' => 'Դոմինակը օգտագործում է անօդաչու թռչող սարքեր, թաքնված եւ ձեռքի տեսախցիկներ `ժամանակակից կենդանիների գյուղատնտեսության մութ ներքնակը, կասկածի տակ առնելով կենդանիների թագավորության նկատմամբ մարդկության տիրապետության բարոյականությունն ու վավերությունը:',
    'resources.title.seaspiracy' => 'Seaspiracy',
    'resources.desc.seaspiracy' => 'Կրքոտ օվկիանոսի կյանքի մասին, կինոռեժիսորը սահմանում է, որպեսզի փաստաթղթավորի այն վնասը, որը մարդիկ անում են ծովային տեսակների համար եւ բացահայտում են գլոբալ կոռուպցիան:',
    'resources.title.the-game-changers' => 'The Game Changers',
    'resources.desc.the-game-changers' => 'Հանդիպելով ակնածող գիտնականների եւ լավագույն մարզիկների, UFC- ի կործանիչը սկսում է ձգտել գտնել մարդու աշխատանքի եւ առողջության համար օպտիմալ դիետան:',
    'resources.title.cowspiracy' => 'Cowspiracy',
    'resources.desc.cowspiracy' => 'Հետեւեք ցնցող, բայց հումորին, ձգտող բնապահպանի ճանապարհորդությանը, քանի որ նա դահիճում փորձում է գտնել իրական լուծումը առավել հրաշալի բնապահպանական խնդիրների եւ կայունության իրական ճանապարհին:',
];
