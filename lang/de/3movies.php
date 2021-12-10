<?php

return [
    /* 3movies.org translation files */

    // top-level elements
    'title' => '3 Filme, die Ihr Leben ändern werden 3Movies.org.',
    'header' => 'Wir sind hier, um Sie auf Ihrer veganen Reise zu unterstützen!',
    'subheader' => 'Schauen Sie sich drei Filme an, die zum Nachdenken anregen und unbequeme Tatsachen beleuchten, und erkunden Sie weitere Ressourcen zur Unterstützung!',

    // enter-your-code modal
    'modal.welcome' => 'Willkommen auf 3movies.org.',
    'modal.description' => 'Das Material auf dieser Website zeigt Tatsachen auf, die absichtlich von den Verbrauchern verborgen werden.',
    'modal.enter-code' => 'Bitte geben Sie Ihren Code ein:',
    'modal.no-code' => 'Sie haben keinen Code?',
    'modal.yes-code' => 'Haben Sie einen Code?',
    'modal.referrer' => 'Wo haben Sie von uns gehört?',
    'modal.referrer.event' => 'Straßenveranstaltung',
    'modal.referrer.social' => 'Soziale Medien',
    'modal.referrer.rec' => 'Freunde / Familie',
    'modal.powered-by' => 'Powered by <a href=":URL"> ActivistHub.org </a>', // left the "by". It's pretty common to find the phrase "powered by xyz" on German websites as well

    // free-vegan-mentor element
    'mentor.signup' => 'Melden Sie sich an für Ihr',
    'mentor.header' => 'Kostenloses veganes Mentoring!', // The German language is gendered. To be inclusive for all genders (and not horrible to read) I slightly changed the meaning to "free vegan mentoring". Below I used the generic masculine version of the words.
    'mentor.desc.1' => 'Wir haben mit dem veganen Mentoring-Programm von Vegan Outreach zusammengearbeitet, um Ihnen den Einstieg zu erleichtern, indem Sie persönlichen Support bekommen!',
    'mentor.desc.2' => 'In dem Mentoring-Programm steht Ihnen ein persönlicher Mentor zur Seite, der Ihnen Fragen beantwortet und Sie mit nützlichen Tipps für das Einkaufen, Kochen und Essen gehen unterstützt und bei Ernährungsfragen hilft. Das Programm möchte eine gesunde und nachhaltige Lifestyle-Veränderung fördern, indem es Support und Informationen bietet, die Liebe über Gewalt stellen.',
    'mentor.request-button' => 'Einen Mentor anfordern',

    // footer
    'footer.hub-link' => 'Bearbeiten und teilen Sie diese Seite über <a href=":URL" target="_blank"> <u> Aktivist Hub! </ U> </a>',
    'footer.vh-link' => 'Ein Projekt von <a href=":url" target="_blank"> <u> Vegan Hacktivists </ u> </a>',
    'footer.patreon-link' => 'Unterstütze uns',

    // resources
    'resources.website' => 'Webseite aufrufen',
    'resources.youtube' => 'Auf Youtube anschauen',
    'resources.netflix' => 'Auf Netflix anschauen',
    'resources.video' => 'Video anschauen',

    // resource categories. This should match available categories in \App\Models\Resources::MAIN_CATEGORY_TAGS
    'resources.category.movie' => 'Filme',
    'resources.category.video' => 'Videos',
    'resources.category.challenge' => 'Challenges', // Frequently used in German as well (and fits on the button in contrast to "Herausforderungen")
    'resources.category.book' => 'Bücher',
    'resources.category.website' => 'Webseiten',
    'resources.category.podcast' => 'Podcasts',
    'resources.category.recipe' => 'Rezepte',
    'resources.category.blog' => 'Blogs',
    'resources.category.audiobook' => 'Hörbücher', // I removed the "." at the end as well. I don't know where it will appear later on on the website though

    // Override some resource names and descriptions in the database.
    // Translation IDs below are based on the database field `resources.name` (the English name) and `Str::slug()`.
    // This makes it possible to translate our most popular resources manually - but our admins (who add resources to the database) can't access this code.
    //
    // TODO: add multilingual resource support to Backpack and the database, and delete these lines.
    'resources.title.dominion' => 'Dominion', // It's also called Dominion in German
    'resources.desc.dominion' => 'Dominion verwendet Drohnen, versteckte und tragbare Kameras, um den Schattenseiten der modernen Tierhaltung auszudecken, die die Moral und Gültigkeit der Herrschaft der Menschheit über dem Tierreich in Frage stellt.',
    'resources.title.seaspiracy' => 'Seaspiracy', // It's also called Seaspiracy in German
    'resources.desc.seaspiracy' => 'Ein vom Meer begeisterter Filmemacher entdeckt bei seinen Nachforschungen über die Auswirkungen der Menschen auf die Meeresbewohner eine Verschwörung globalen Ausmaßes.',
    'resources.title.the-game-changers' => 'The Game Changers', // It's also called The Game Changers in German
    'resources.desc.the-game-changers' => 'Mit innovativen Wissenschaftlern und Spitzensportlern begibt sich ein UFC-Kämpfer auf die Suche nach der idealen Ernährung für optimale Gesundheit und Höchstleistung.',
    'resources.title.cowspiracy' => 'Cowspiracy', // It's also called Cowspiracy in German
    'resources.desc.cowspiracy' => 'Erfahren Sie, warum industrielle Viehhaltung unsere natürlichen Ressourcen erschöpft – und warum große Umweltschutzorganisationen das Problem zu ignorieren scheinen.',

    // I added a translation for forks-over-knives that has a different name in German:
    'resources.title.forks-over-knives' => 'Gabel statt Skalpell',
    'resources.desc.forks-over-knives' => 'Gesünder leben ohne Fleisch. Der renommierte Biochemiker Prof. Dr. T. Colin Campbell leitete in den 1970 und 1980er Jahren die sogenannte China Study, in der ein unmittelbarer Zusammenhang zwischen dem Verzehr von tierischen Produkten und dem Auftreten von Krankheiten wie Krebs, Diabetes, Herz-Kreislauf-Erkrankungen und Autoimmunerkrankungen nachgewiesen werden konnte.',
];
