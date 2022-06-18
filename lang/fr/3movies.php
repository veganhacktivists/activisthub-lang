<?php

return [
    /* 3movies.org translation files */

    // top-level elements
    'title' => "3 films qui vont changer votre vie | 3movies.org",
    'header' => "Nous vous aidons sur le chemin du véganisme !",
    'subheader' => "Visionnez trois films qui poussent à la réflexion, mettant en lumière des réalités difficiles, et découvrez d'autres ressources pratiques !",

    // enter-your-code modal
    'modal.welcome' => 'Bienvenue sur 3Movies.org',
    'modal.description' => 'Les ressources de ce site exposent des réalités qui sont intentionnellement cachées aux consommateurs.',
    'modal.enter-code' => 'Veuillez entrer votre code :',
    'modal.no-code' => "Vous n'avez pas de code ?",
    'modal.yes-code' => 'Vous avez un code ?',
    'modal.referrer' => 'Où avez-vous entendu parler de nous ?',
    'modal.referrer.event' => 'À travers une action de rue',
    'modal.referrer.social' => 'Sur les réseaux sociaux',
    'modal.referrer.rec' => 'Via des amis ou de la famille',
    'modal.powered-by' => 'Développé par <a href=":url">ActivistHub.org</a>',

    // free-vegan-mentor element
    'mentor.signup' => 'Inscrivez-vous pour recevoir un',
    'mentor.header' => 'Accompagnement Vegan Gratuit !',
    'mentor.desc.1' => "Nous nous sommes associés au programme d'accompagnement végane de Vegan Outreach pour faciliter la transition en offrant un soutien personnel individuel !",
    'mentor.desc.2' => "Vous serez mis en contact avec votre propre conseiller qui pourra répondre à vos questions et vous guider en vous donnant des conseils sur la cuisine, les sorties, le shopping, la nutrition, etc. Le programme vise à favoriser un changement de mode de vie sain et durable en offrant un réseau de soutien et des ressources qui privilégient la bonté à la cruauté.",
    'mentor.request-button' => 'Demander un conseiller',

    // footer
    'footer.hub-link' => 'Personnalisez et partagez cette page via <a href=":url" target="_blank"><u>Activist Hub !</u></a>',
    'footer.vh-link' => 'Un projet des <a href=":url" target="_blank"><u>Vegan Hacktivists</u></a>',
    'footer.patreon-link' => 'Nous Soutenir',

    // resources
    'resources.website' => 'Consulter le Site Web',
    'resources.youtube' => 'Visionner sur YouTube',
    'resources.netflix' => 'Visionner sur Netflix',
    'resources.video' => 'Visionner la Vidéo',

    // resource categories. This should match available categories in \App\Models\Resources::MAIN_CATEGORY_TAGS
    'resources.category.movie' => 'Films',
    'resources.category.video' => 'Vidéos',
    'resources.category.challenge' => 'Challenges',
    'resources.category.book' => 'Livres',
    'resources.category.website' => 'Sites Web',
    'resources.category.podcast' => 'Podcasts',
    'resources.category.recipe' => 'Recettes',
    'resources.category.blog' => 'Blogs',
    'resources.category.audiobook' => 'Livres audio',

    // Override some resource names and descriptions in the database.
    // Translation IDs below are based on the database field `resources.name` (the English name) and `Str::slug()`.
    // This makes it possible to translate our most popular resources manually - but our admins (who add resources to the database) can't access this code.
    //
    // TODO: add multilingual resource support to Backpack and the database, and delete these lines.
    'resources.title.dominion' => 'Dominion',
    'resources.desc.dominion' => "Dominion utilise des drones et des caméras cachées afin d'exposer les dessous sombres de l'élevage moderne, remettant en question la moralité et la validité de la domination du genre humain sur le reste du règne animal.",
    'resources.title.seaspiracy' => 'Seaspiracy',
    'resources.desc.seaspiracy' => "En enquêtant sur les dommages causés par les humains à la vie marine, un cinéaste passionné met à jour une grave corruption à l'échelle mondiale.",
    'resources.title.the-game-changers' => 'The Game Changers',
    'resources.desc.the-game-changers' => "Aux côtés de chercheurs visionnaires et d'athlètes d'élite, un champion de sports de combats part en quête de l'alimentation optimale pour la santé et les performances humaines.",
    'resources.title.cowspiracy' => 'Cowspiracy',
    'resources.desc.cowspiracy' => "Découvre comment l'élevage intensif détruit notre environnement et décime nos ressources naturelles sans que les principaux groupes écologistes ne réagissent.",

    'resources.feedback.love' => 'FAITES NOUS UN RETOUR !',
    'resources.feedback.submit' => 'Envoyer',
    'resources.feedback.success' => 'Merci pour votre Feedback !',
    'resources.feedback.question.default.multi' => "Qu'avez-vous pensé de cette ressource ?",
    'resources.feedback.question.default.multi.answer.1' => "Je n'ai pas été impacté·e plus que ça.",
    'resources.feedback.question.default.multi.answer.2' => "J'ai été inspiré·e faire plus de recherches.",
    'resources.feedback.question.default.multi.answer.3' => "J'ai été inspiré·e à réduire le nombre de produits d'origine animale que je consomme.",
    'resources.feedback.question.default.multi.answer.4' => "J'ai été inspiré·e à ne consommer plus que des produits vegans.",
];
