<?php

return [
    /* 3movies.org translation files */

    // top-level elements
    'title' => '3 ταινίες που θα αλλάξουν τη ζωή σας | 3Movies.org',
    'header' => 'Είμαστε εδώ για να σας βοηθήσουμε στο vegan ταξίδι σας!',
    'subheader' => 'Παρακολουθήστε τρεις ταινίες που προκαλούν σκέψη που ρίχνουν φως σε άβολα πραγματικότητα και εξερευνήστε άλλους πόρους για υποστήριξη!',

    // enter-your-code modal
    'modal.welcome' => 'Καλώς ήρθατε στο 3Movies.org',
    'modal.description' => 'Οι πόροι σε αυτόν τον ιστότοπο εκθέτουν γεγονότα που είναι σκόπιμα κρυμμένα από τους καταναλωτές.',
    'modal.enter-code' => 'Εισαγάγετε τον κωδικό σας:',
    'modal.no-code' => 'Δεν έχετε κώδικα;',
    'modal.yes-code' => 'Έχετε έναν κώδικα;',
    'modal.referrer' => 'Πού μάθατε για εμάς;',
    'modal.referrer.event' => 'Οδός',
    'modal.referrer.social' => 'Μεσα ΚΟΙΝΩΝΙΚΗΣ ΔΙΚΤΥΩΣΗΣ',
    'modal.referrer.rec' => 'Φίλοι / Οικογένεια',
    'modal.powered-by' => 'Powered by <a href="hturl"> activisthub.org </a>',

    // free-vegan-mentor element
    'mentor.signup' => 'Εγγραφείτε για σας',
    'mentor.header' => 'Δωρεάν Vegan Mentor!',
    'mentor.desc.1' => 'Έχουμε συνεργαστεί με το Vegan Verteach του προγράμματος Vegan Mentor για να βοηθήσει στη διευκόλυνση της μετάβασης παρέχοντας μια προσωπική υποστήριξη ενός σε ένα!',
    'mentor.desc.2' => 'Θα αντιστοιχίσετε με τον δικό σας μέντορα που μπορεί να απαντήσει σε ερωτήσεις και να σας καθοδηγήσει με συμβουλές για ψώνια, μαγείρεμα, φαγητό έξω, πληροφορίες διατροφής και πολλά άλλα.Το πρόγραμμα προσπαθεί να προωθήσει μια υγιή, βιώσιμη αλλαγή του τρόπου ζωής προσφέροντας ένα δίκτυο υποστήριξης και πόρων που προωθούν την καλοσύνη σε σκληρότητα.',
    'mentor.request-button' => 'Ζητήστε έναν μέντορα',

    // footer
    'footer.hub-link' => 'Προσαρμόστε και μοιραστείτε αυτήν τη σελίδα μέσω <a href="herul" target="_blank"> <u> activist hub! </ U> </a>',
    'footer.vh-link' => 'Ένα έργο από το <a href="hturl" target="_blank"> <u> Vegan Hacktivists </ u> </a>',
    'footer.patreon-link' => 'Υποστήριξε μας',

    // resources
    'resources.website' => 'Επισκέψου την ιστοσελίδα',
    'resources.youtube' => 'Παρακολουθήστε στο YouTube',
    'resources.netflix' => 'Παρακολουθήστε στο Netflix',
    'resources.video' => 'Δες το βίντεο',

    // resource categories. This should match available categories in \App\Models\Resources::MAIN_CATEGORY_TAGS
    'resources.category.movie' => 'Κινηματογράφος',
    'resources.category.video' => 'Βίντεο',
    'resources.category.challenge' => 'Προκλήσεις',
    'resources.category.book' => 'Βιβλία',
    'resources.category.website' => 'Ιστοσελίδα',
    'resources.category.podcast' => 'podcasts',
    'resources.category.recipe' => 'Συνταγές',
    'resources.category.blog' => 'blogs',
    'resources.category.audiobook' => 'audiobooks',

    // Override some resource names and descriptions in the database.
    // Translation IDs below are based on the database field `resources.name` (the English name) and `Str::slug()`.
    // This makes it possible to translate our most popular resources manually - but our admins (who add resources to the database) can't access this code.
    //
    // TODO: add multilingual resource support to Backpack and the database, and delete these lines.
    'resources.title.dominion' => 'Dominion',
    'resources.desc.dominion' => 'Η κυριαρχία χρησιμοποιεί drones, κρυφές και χειροκίνητες κάμερες για να εκθέσει το σκοτεινό υπογάριστο της σύγχρονης γεωργίας των ζώων, να αμφισβητεί την ηθική και την εγκυρότητα της κυριαρχίας της ανθρωπότητας πάνω στο ζωικό βασίλειο.',
    'resources.title.seaspiracy' => 'Seaspiracy',
    'resources.desc.seaspiracy' => 'Παθιασμένος με την ωκεάνια ζωή, ένας σκηνοθέτης καθορίζεται για να τεκμηριώσει τη ζημιά που κάνουν οι άνθρωποι στα θαλάσσια είδη - και αποκαλύπτουν την ανησυχητική παγκόσμια διαφθορά.',
    'resources.title.the-game-changers' => 'The Game Changers',
    'resources.desc.the-game-changers' => 'Αντιμετώπιση των οραματιστών επιστήμονων και κορυφαίων αθλητών, ένας μαχητής UFC ξεκινάει μια προσπάθεια να βρει τη βέλτιστη διατροφή για την ανθρώπινη απόδοση και την υγεία.',
    'resources.title.cowspiracy' => 'Cowspiracy',
    'resources.desc.cowspiracy' => 'Ακολουθήστε το συγκλονιστικό, αλλά χιουμοριστικό, ταξίδι ενός φιλοδοξικού περιβαλλοντολόγου, καθώς αποσκοπεί στην πραγματικότητα να βρει την πραγματική λύση στα πιο πιεστικά περιβαλλοντικά ζητήματα και την αληθινή πορεία προς τη βιωσιμότητα.',
];
