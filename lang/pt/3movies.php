<?php

return [
    /* 3movies.org translation files */

    // top-level elements
    'title' => '3 filmes que vão mudar sua vida | 3Movies.org.',
    'header' => 'Estamos aqui para ajudá-lo em sua jornada vegana!',
    'subheader' => 'Assista a três filmes instigantes que derramam luz sobre realidades desconfortáveis e explore outros recursos para apoio!',

    // enter-your-code modal
    'modal.welcome' => 'Bem-vindo a 3Movies.org.',
    'modal.description' => 'Os recursos neste site exponha fatos que são intencionalmente escondidos dos consumidores.',
    'modal.enter-code' => 'Por favor, digite seu código:',
    'modal.no-code' => 'Não tem um código?',
    'modal.yes-code' => 'Tem um código?',
    'modal.referrer' => 'Onde você ouviu sobre nós?',
    'modal.referrer.event' => 'Evento de rua',
    'modal.referrer.social' => 'Mídia social',
    'modal.referrer.rec' => 'Família de amigos',
    'modal.powered-by' => 'Alimentado por <a href=":url"> activisthub.org </a>',

    // free-vegan-mentor element
    'mentor.signup' => 'Inscreva-se para o seu',
    'mentor.header' => 'MENTOR VEGAN GRATUITO!',
    'mentor.desc.1' => 'Nós fizemos uma parceria com o programa vegan Mentor do Vegan Outreach para ajudar a aliviar a transição fornecendo suporte pessoal individual!',
    'mentor.desc.2' => 'Você será emparelhado com seu próprio mentor que pode responder a perguntas e guiá-lo com dicas sobre compras, cozinhar, comer fora, informações de nutrição e muito mais.O programa se esforça para promover uma mudança saudável e sustentável de estilo de vida, oferecendo uma rede de apoio e recursos que promovam a bondade sobre a crueldade.',
    'mentor.request-button' => 'Solicitar um mentor',

    // footer
    'footer.hub-link' => 'Personalize e compartilhe esta página via <a href=":url" target="_blank"> <u> hub ativista! </ U> </a>',
    'footer.vh-link' => 'Um projeto pelo <a href=":url" target="_blank"> <u> Vegan Hacktivists </ u> </a>',
    'footer.patreon-link' => 'Apoie-nos',

    // resources
    'resources.website' => 'Visite o site',
    'resources.youtube' => 'Assista no YouTube.',
    'resources.netflix' => 'Assista na Netflix.',
    'resources.video' => 'Assista vídeo',

    // resource categories. This should match available categories in \App\Models\Resources::MAIN_CATEGORY_TAGS
    'resources.category.movie' => 'Filmes',
    'resources.category.video' => 'Vídeos',
    'resources.category.challenge' => 'DESAFIOS',
    'resources.category.book' => 'Livros',
    'resources.category.website' => 'Websites.',
    'resources.category.podcast' => 'Podcasts.',
    'resources.category.recipe' => 'Receitas',
    'resources.category.blog' => 'Blogs.',
    'resources.category.audiobook' => 'Audiobooks.',

    // Override some resource names and descriptions in the database.
    // Translation IDs below are based on the database field `resources.name` (the English name) and `Str::slug()`.
    // This makes it possible to translate our most popular resources manually - but our admins (who add resources to the database) can't access this code.
    //
    // TODO: add multilingual resource support to Backpack and the database, and delete these lines.
    'resources.title.dominion' => 'Dominion',
    'resources.desc.dominion' => 'Dominion usa câmeras drones, ocultas e portáteis para expor o revestimento escuro da agricultura animal moderna, questionando a moralidade e validade do domínio da humanidade sobre o reino animal.',
    'resources.title.seaspiracy' => 'Seaspiracy.',
    'resources.desc.seaspiracy' => 'Apaixonada pela vida do oceano, um cineasta estabelece-se para documentar o dano que os seres humanos fazem para espécies marinhas - e descobriram a corrupção global alarmante.',
    'resources.title.the-game-changers' => 'The Game Changers',
    'resources.desc.the-game-changers' => 'Encontro cientistas visionários e atletas principais, um lutador UFC embarca em uma missão para encontrar a ideia ideal para o desempenho e a saúde humanos.',
    'resources.title.cowspiracy' => 'Cowspiracy.',
    'resources.desc.cowspiracy' => 'Siga a viagem chocante, mas bem humorada de um ambientalista aspirante, como ele se infiltrou a encontrar a solução real para as questões ambientais mais prementes e o verdadeiro caminho para a sustentabilidade.',
];
