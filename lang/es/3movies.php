<?php

return [
    /* 3movies.org translation files */

    // top-level elements
    'title' => '3 películas que cambiarán tu vida | 3movies.org',
    'header' => '¡Estamos aquí para ayudarte en tu viaje vegano!',
    'subheader' => '¡Vea tres películas que invitan a la reflexión que arrojan luz sobre realidades incómodas y explore otros recursos de apoyo!',

    // enter-your-code modal
    'modal.welcome' => 'Bienvenido a 3Movies.org',
    'modal.description' => 'Los recursos de este sitio exponen hechos que se ocultan intencionalmente a los consumidores.',
    'modal.enter-code' => 'Por favor ingrese su código:',
    'modal.no-code' => '¿No tienes un código?',
    'modal.yes-code' => '¿Tienes un código?',
    'modal.referrer' => '¿Dónde escuchaste de nosotros?',
    'modal.referrer.event' => 'Evento callejero',
    'modal.referrer.social' => 'Red social',
    'modal.referrer.rec' => 'Amigos / familia',
    'modal.powered-by' => 'Energizado por <a href=":url">ActivistHub.org</a>',

    // free-vegan-mentor element
    'mentor.signup' => 'Regístrese para su',
    'mentor.header' => 'Mentor vegano gratis!',
    'mentor.desc.1' => '¡Nos hemos asociado con el Programa de mentores veganos de Vegan Outreach para ayudar a facilitar la transición al brindar apoyo personal personalizado!',
    'mentor.desc.2' => 'Lo emparejarán con su propio mentor, quien puede responder preguntas y guiarlo con consejos sobre compras, cocinar, comer fuera, información nutricional y más. El programa se esfuerza por fomentar un cambio de estilo de vida saludable y sostenible al ofrecer una red de apoyo y recursos que promueven la bondad sobre la crueldad.',
    'mentor.request-button' => 'Solicite un mentor',

    // footer
    'footer.hub-link' => 'Personaliza y comparte esta página a través de <a href=":url" target="_blank"><u>Activist Hub!</u></a>',
    'footer.vh-link' => 'Un proyecto de la <a href=":url" target="_blank"><u>Vegan Hacktivists</u></a>',
    'footer.patreon-link' => 'Apoyanos',

    // resources
    'resources.website' => 'Visita la página web',
    'resources.youtube' => 'Míralo en YouTube',
    'resources.netflix' => 'Ver en Netflix',
    'resources.video' => 'Ver video',

    // resource categories. This should match available categories in \App\Models\Resources::MAIN_CATEGORY_TAGS
    'resources.category.movie' => 'Películas',
    'resources.category.video' => 'Videos',
    'resources.category.challenge' => 'Desafíos',
    'resources.category.book' => 'Libros',
    'resources.category.website' => 'Sitios web',
    'resources.category.podcast' => 'Podcasts',
    'resources.category.recipe' => 'Recetas',
    'resources.category.blog' => 'Blogs',
    'resources.category.audiobook' => 'Audiolibros',

    // Override some resource names and descriptions in the database.
    // Translation IDs below are based on the database field `resources.name` (the English name) and `Str::slug()`.
    // This makes it possible to translate our most popular resources manually - but our admins (who add resources to the database) can't access this code.
    //
    // TODO: add multilingual resource support to Backpack and the database, and delete these lines.
    'resources.title.dominion' => 'Dominion',
    'resources.desc.dominion' => 'Dominion usa drones, cámaras ocultas y de mano para exponer la parte más oscura de la agricultura animal moderna, cuestionando la moralidad y validez del dominio de la humanidad sobre el reino animal.',
    'resources.title.seaspiracy' => 'Seaspiracy',
    'resources.desc.seaspiracy' => 'Apasionado por la vida marina, un cineasta se propone documentar el daño que los humanos hacen a las especies marinas y descubre una alarmante corrupción global.',
    'resources.title.the-game-changers' => 'The Game Changers',
    'resources.desc.the-game-changers' => 'Al reunirse con científicos visionarios y atletas de alto nivel, un luchador de UFC se embarca en una búsqueda para encontrar la dieta óptima para el rendimiento y la salud humanos.',
    'resources.title.cowspiracy' => 'Cowspiracy',
    'resources.desc.cowspiracy' => 'Siga el impactante, pero divertido, viaje de un aspirante a ambientalista, mientras busca audazmente encontrar la solución real a los problemas ambientales más urgentes y el verdadero camino hacia la sostenibilidad.',
];
