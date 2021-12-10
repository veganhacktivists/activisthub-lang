<?php

return [
    /* 3movies.org translation files */

    // top-level elements
    'title' => '3 film yang akan mengubah hidup Anda |3movies.org.',
    'header' => 'Kami di sini untuk membantu Anda dalam perjalanan vegan Anda!',
    'subheader' => 'Tonton tiga film yang memprovokasi pemikiran yang menjelaskan realitas yang tidak nyaman, dan jelajahi sumber daya lain untuk dukungan!',

    // enter-your-code modal
    'modal.welcome' => 'Selamat datang di 3movies.org.',
    'modal.description' => 'Sumber daya di situs ini mengekspos fakta yang sengaja disembunyikan dari konsumen.',
    'modal.enter-code' => 'Silakan masukkan kode Anda:',
    'modal.no-code' => 'Tidak punya kode?',
    'modal.yes-code' => 'Punya kode?',
    'modal.referrer' => 'Dari mana anda mendengar tentang kami?',
    'modal.referrer.event' => 'Acara jalanan',
    'modal.referrer.social' => 'Media sosial',
    'modal.referrer.rec' => 'Teman / keluarga',
    'modal.powered-by' => 'Didukung oleh <a href=":url"> ActivIsThub.org </a>',

    // free-vegan-mentor element
    'mentor.signup' => 'Mendaftar untuk Anda',
    'mentor.header' => 'Mentor vegan gratis!',
    'mentor.desc.1' => 'Kami telah bermitra dengan program Mentor Vegan Outreach Vegan untuk membantu meringankan transisi dengan memberikan dukungan pribadi satu lawan satu!',
    'mentor.desc.2' => 'Anda akan dipasangkan dengan mentor Anda sendiri yang dapat menjawab pertanyaan dan memandu Anda dengan tips berbelanja, memasak, makan di luar, informasi nutrisi, dan banyak lagi.Program ini berusaha untuk menumbuhkan pergeseran gaya hidup yang sehat dan berkelanjutan dengan menawarkan jaringan dukungan dan sumber daya yang mempromosikan kebaikan atas kekejaman.',
    'mentor.request-button' => 'Minta seorang Mentor',

    // footer
    'footer.hub-link' => 'Kustomisasi dan bagikan halaman ini melalui <a href=":url" target="_blank"> <u> hub aktivis! </ U> </a>',
    'footer.vh-link' => 'Sebuah proyek oleh <a href=":url" target="_blank"> <u> peretas vegan </ u> </a>',
    'footer.patreon-link' => 'Mendukung kami',

    // resources
    'resources.website' => 'Kunjungi situs web',
    'resources.youtube' => 'Tonton di YouTube.',
    'resources.netflix' => 'Tonton di Netflix.',
    'resources.video' => 'Menonton video',

    // resource categories. This should match available categories in \App\Models\Resources::MAIN_CATEGORY_TAGS
    'resources.category.movie' => 'Film.',
    'resources.category.video' => 'Video',
    'resources.category.challenge' => 'TANTANGAN.',
    'resources.category.book' => 'Buku',
    'resources.category.website' => 'Situs web',
    'resources.category.podcast' => 'Podcast.',
    'resources.category.recipe' => 'Resep',
    'resources.category.blog' => 'Blog.',
    'resources.category.audiobook' => 'AudioBooks.',

    // Override some resource names and descriptions in the database.
    // Translation IDs below are based on the database field `resources.name` (the English name) and `Str::slug()`.
    // This makes it possible to translate our most popular resources manually - but our admins (who add resources to the database) can't access this code.
    //
    // TODO: add multilingual resource support to Backpack and the database, and delete these lines.
    'resources.title.dominion' => 'Kekuasaan',
    'resources.desc.dominion' => 'Dominion menggunakan drone, kamera tersembunyi dan genggam untuk mengekspos kedanaan gelap pertanian hewan modern, mempertanyakan moralitas dan validitas kekuasaan manusia atas kerajaan hewan.',
    'resources.title.seaspiracy' => 'Seaspiracy.',
    'resources.desc.seaspiracy' => 'Bergairah tentang Lautan Kehidupan, seorang pembuat film berangkat untuk mendokumentasikan bahaya yang dilakukan manusia terhadap spesies laut - dan mengungkap korupsi global yang mengkhawatirkan.',
    'resources.title.the-game-changers' => 'The Game Changers.',
    'resources.desc.the-game-changers' => 'Bertemu dengan para ilmuwan visionis dan atlet top, seorang pejuang UFC memulai pencarian untuk menemukan diet optimal untuk kinerja manusia dan kesehatan.',
    'resources.title.cowspiracy' => 'Cowspiracy.',
    'resources.desc.cowspiracy' => 'Ikuti perjalanan yang mengejutkan, namun lucu, lingkungan yang bercita-cita tinggi, karena ia ingin mencari solusi nyata untuk masalah lingkungan yang paling mendesak dan jalur sejati untuk keberlanjutan.',
];
