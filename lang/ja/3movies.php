<?php

return [
    /* 3movies.org translation files */

    // top-level elements
    'title' => 'あなたの人生を変える3映画..3Movies.org',
    'header' => '私たちはあなたのビーガンの旅にあなたを助けるためにここにいます！',
    'subheader' => '不快な現実に光を当てる3つの思考挑発映画を見て、サポートの他の情報も見ています！',

    // enter-your-code modal
    'modal.welcome' => '3Movies.orgへようこそ',
    'modal.description' => 'このサイトのリソースは、消費者から意図的に隠されている事実を公開しています。',
    'modal.enter-code' => 'コードを入力してください：',
    'modal.no-code' => 'コードがありませんか？',
    'modal.yes-code' => 'コードがありますか？',
    'modal.referrer' => 'あなたは私たちをどこで知りましたか？',
    'modal.referrer.event' => 'ストリートイベント',
    'modal.referrer.social' => 'ソーシャルメディア',
    'modal.referrer.rec' => '友達/家族',
    'modal.powered-by' => '<a href=":url"> activisthub.org </a>',

    // free-vegan-mentor element
    'mentor.signup' => 'あなたのためにサインアップしてください',
    'mentor.header' => '無料のビーガンメンター！',
    'mentor.desc.1' => '私たちはVegan OutReachのVegan Mentorプログラムと提携して、一対一のパーソナルサポートを提供することによって移行を容易にします。',
    'mentor.desc.2' => 'あなたは質問に答えることができるあなた自身のメンターとペアになり、買い物、料理、外食、栄養情報などのヒントをあなたに導きます。プログラムは、残酷に優しさを促進するサポートとリソースのネットワークを提供することによって、健康的で持続可能なライフスタイルシフトを促進するよう努めています。',
    'mentor.request-button' => 'メンターをリクエストする',

    // footer
    'footer.hub-link' => 'このページを介してこのページをカスタマイズして共有する<a href="> target="_blank"> <u> Activist Hub！</ U> </a>',
    'footer.vh-link' => '<a href="> target="_blank"> <u> Vegan Hacktivists</ u> </a>',
    'footer.patreon-link' => '私たちを応援してください',

    // resources
    'resources.website' => 'サイトを訪れる',
    'resources.youtube' => 'YouTubeを見てください',
    'resources.netflix' => 'Netflixで見る',
    'resources.video' => 'ビデオを見る',

    // resource categories. This should match available categories in \App\Models\Resources::MAIN_CATEGORY_TAGS
    'resources.category.movie' => '映画',
    'resources.category.video' => 'ビデオ',
    'resources.category.challenge' => 'chall chall',
    'resources.category.book' => '本',
    'resources.category.website' => 'ウェブサイト',
    'resources.category.podcast' => 'ポッドキャスト',
    'resources.category.recipe' => 'レシピ',
    'resources.category.blog' => 'ブログ',
    'resources.category.audiobook' => 'AudioBooks.',

    // Override some resource names and descriptions in the database.
    // Translation IDs below are based on the database field `resources.name` (the English name) and `Str::slug()`.
    // This makes it possible to translate our most popular resources manually - but our admins (who add resources to the database) can't access this code.
    //
    // TODO: add multilingual resource support to Backpack and the database, and delete these lines.
    'resources.title.dominion' => 'Dominion',
    'resources.desc.dominion' => 'Dominionは、ドローン、隠されたカメラ、およびハンドヘルドカメラを使用して、現代の動物の農業の暗闇の下に暗くなり、動物の王国に対する人類の支配の道徳と妥当性について尋問しています。',
    'resources.title.seaspiracy' => 'Seaspiracy',
    'resources.desc.seaspiracy' => 'オーシャンライフに情熱を注いで、映画菓子は人間の種に行う危害を文書化し、世界的な汚職を警戒していない。',
    'resources.title.the-game-changers' => 'The Game Changers',
    'resources.desc.the-game-changers' => '人間のパフォーマンスと健康のための最適な食事を見つけるための探求に富んだ科学者とトップアスリートの出会いの出会い。',
    'resources.title.cowspiracy' => 'Cowspiracy',
    'resources.desc.cowspiracy' => '彼は大胆に最も押さえされている環境問題と持続可能性への真の道を見つけようとしているように、意欲的な環境地リストの衝撃的な、ユーモラスな旅に従ってください。',
];
