<?php

return [
    /* 3movies.org translation files */

    // top-level elements
    'title' => '3 фильма, которые изменит вашу жизнь | 3Movies.org.',
    'header' => 'Мы здесь, чтобы помочь вам в вашем веганском путешествии!',
    'subheader' => 'Посмотрите три провоцирующих мысли, которые проливают свет на неудобные реалии и изучите другие ресурсы для поддержки!',

    // enter-your-code modal
    'modal.welcome' => 'Добро пожаловать на 3Movies.org.',
    'modal.description' => 'Ресурсы на этом сайте подвергают факты, которые намеренно скрыты от потребителей.',
    'modal.enter-code' => 'Пожалуйста, введите свой код:',
    'modal.no-code' => 'У вас нет кода?',
    'modal.yes-code' => 'Есть код?',
    'modal.referrer' => 'Где вы услышали о нас?',
    'modal.referrer.event' => 'Уличное событие',
    'modal.referrer.social' => 'Социальные медиа',
    'modal.referrer.rec' => 'Друзья / Семья',
    'modal.powered-by' => 'Powered by <a href=":url"> activisthub.org </a>',

    // free-vegan-mentor element
    'mentor.signup' => 'Подпишитесь на свой',
    'mentor.header' => 'Свободный веганский наставник!',
    'mentor.desc.1' => "Мы сотрудничали с веганской программой Vegan Authorach's Vegan Mentor, чтобы облегчить переход, предоставляя одну на одну личную поддержку!",
    'mentor.desc.2' => 'Вы будете в паре со своим собственным наставником, который может ответить на вопросы и направлять вас советами по магазинам, приготовлению, еде, питанию, информации о питании и многое другое.Программа стремится способствовать здоровому, устойчивому образу жизни, предлагая сеть поддержки и ресурсов, которые способствуют доброте по жестокости.',
    'mentor.request-button' => 'Запросить наставник',

    // footer
    'footer.hub-link' => 'Настройте и поделитесь этой страницей через <a href=":url" target="_blank"> <u> Hub Activist! </ U> </a>',
    'footer.vh-link' => 'Проект по <a href=":url" target="_blank"> <u> Vegan Hackitivists </ u> </a>',
    'footer.patreon-link' => 'Поддерживать нас',

    // resources
    'resources.website' => 'Посетить сайт',
    'resources.youtube' => 'Смотреть на Youtube',
    'resources.netflix' => 'Смотреть на Netflix.',
    'resources.video' => 'Смотреть видео',

    // resource categories. This should match available categories in \App\Models\Resources::MAIN_CATEGORY_TAGS
    'resources.category.movie' => 'Фильмы',
    'resources.category.video' => 'Видео',
    'resources.category.challenge' => 'Вызовы',
    'resources.category.book' => 'Книги',
    'resources.category.website' => 'Веб-сайты',
    'resources.category.podcast' => 'Подкастые',
    'resources.category.recipe' => 'Рецепты',
    'resources.category.blog' => 'Блоги',
    'resources.category.audiobook' => 'Audiobooks.',

    // Override some resource names and descriptions in the database.
    // Translation IDs below are based on the database field `resources.name` (the English name) and `Str::slug()`.
    // This makes it possible to translate our most popular resources manually - but our admins (who add resources to the database) can't access this code.
    //
    // TODO: add multilingual resource support to Backpack and the database, and delete these lines.
    'resources.title.dominion' => 'Dominion',
    'resources.desc.dominion' => 'Доминион использует беспилотники, скрытые и портативные камеры, чтобы подвергнуть темноту носителя современного животного сельского хозяйства, допросить мораль и действительность владычества человечества над животным царство.',
    'resources.title.seaspiracy' => 'Seaspiracy',
    'resources.desc.seaspiracy' => 'Увлеченные океане океана, режиссер устанавливается, чтобы документировать вред, который люди делают на морских видах - и раскрывают тревогу глобальной коррупции.',
    'resources.title.the-game-changers' => 'The Game Changers',
    'resources.desc.the-game-changers' => 'Встреча провидящих ученых и лучших спортсменов, боец UFC отправляются в квест, чтобы найти оптимальную диету для производительности человека и здоровья.',
    'resources.title.cowspiracy' => 'Cowspiracy',
    'resources.desc.cowspiracy' => 'Следуйте по шокирующему, но с чувству юмора, путешествия стремятся к стремлению экоста, так как он удивительно стремится найти реальное решение наиболее насущных экологических проблем и истинного пути к устойчивому развитию.',
];
