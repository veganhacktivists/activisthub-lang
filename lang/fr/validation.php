<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |
    */

    'accepted' => 'Le :attribute doit être accepté.',
    'active_url' => "Le :attribute n'est pas un URL valide.",
    'after' => 'Le :attribute doit être une date postérieure à :date.',
    'after_or_equal' => 'Le :attribute doit être une date postérieure ou égale à :date.',
    'alpha' => 'Le :attribute ne peut contenir que des lettres.',
    'alpha_dash' => 'Le :attribute ne peut contenir que des lettres, nombres, tirets du bas et tirets.',
    'alpha_num' => 'Le :attribute ne peut contenir que des lettres et nombres.',
    'array' => 'Le :attribute doit être un tableau (de type array).',
    'before' => 'Le :attribute doit être une date antérieure à :date.',
    'before_or_equal' => 'Le :attribute doit être une date antérieure ou égale à :date.',
    'between' => [
        'numeric' => 'Le :attribute doit se trouver entre :min et :max.',
        'file' => 'Le :attribute doit peser entre :min et :max kilobytes.',
        'string' => 'Le :attribute doit faire entre :min et :max caractères.',
        'array' => 'Le :attribute doit comporter entre :min et :max items.',
    ],
    'boolean' => 'Le champ :attribute doit être "vrai" ou "faux".',
    'confirmed' => 'La confirmation :attribute ne correspond pas.',
    'date' => "Le :attribute n'est pas une date valide.",
    'date_equals' => 'Le :attribute doit être une date égale à :date.',
    'date_format' => 'Le :attribute ne correspond pas au format :format.',
    'different' => 'Le :attribute et le :other doivent être différents.',
    'digits' => 'Le :attribute doit faire :digits chiffres.',
    'digits_between' => 'Le :attribute doit faire entre :min et :max chiffres.',
    'dimensions' => "Le :attribute a des dimensions d'image invalides.",
    'distinct' => 'Le champ :attribute a une valeur en double.',
    'email' => 'Le :attribute doit être une adresse e-mail valide.',
    'ends_with' => 'Le :attribute doit se terminer par un des caractères suivants: :values',
    'exists' => 'Le :attribute sélectionné est invalide.',
    'file' => 'Le :attribute doit être un fichier.',
    'filled' => 'Le champ :attribute doit avoir une valeur.',
    'gt' => [
        'numeric' => 'Le :attribute doit être supérieur à :value.',
        'file' => 'Le :attribute doit faire plus que :value kilobytes.',
        'string' => 'Le :attribute doit faire plus que :value caractères.',
        'array' => 'Le :attribute doit comporter plus de :value items.',
    ],
    'gte' => [
        'numeric' => 'Le :attribute doit être supérieur ou égal à :value.',
        'file' => 'Le :attribute doit peser au moins :value kilobytes.',
        'string' => 'Le :attribute doit faire au moins :value caractères.',
        'array' => 'Le :attribute doit comporter au moins :value items.',
    ],
    'image' => 'Le :attribute doit être une image.',
    'in' => 'Le :attribute sélectionné est invalide.',
    'in_array' => "Le champ :attribute n'existe pas dans :other.",
    'integer' => 'Le :attribute doit être un nombre entier.',
    'ip' => 'Le :attribute doit être une adresse IP valide.',
    'ipv4' => 'Le :attribute doit être une adresse IPv4 valide.',
    'ipv6' => 'Le :attribute doit être une adresse IPv6 valide.',
    'json' => 'Le :attribute doit être une chaîne de caractères JSON valide.',
    'lt' => [
        'numeric' => 'Le :attribute doit être inférieur à :value.',
        'file' => 'Le :attribute doit faire moins que :value kilobytes.',
        'string' => 'Le :attribute doit faire moins que :value caractères.',
        'array' => 'Le :attribute doit comporter moins de :value items.',
    ],
    'lte' => [
        'numeric' => 'Le :attribute doit être inférieur ou égale à :value.',
        'file' => 'Le :attribute doit faire au plus :value kilobytes.',
        'string' => 'Le :attribute doit faire au plus :value caractères.',
        'array' => 'Le :attribute doit comporter au plus :value items.',
    ],
    'max' => [
        'numeric' => 'Le :attribute ne peut dépasser :max.',
        'file' => 'Le :attribute ne peut dépasser :max kilobytes.',
        'string' => 'Le :attribute ne peut dépasser :max caractères.',
        'array' => 'Le :attribute ne peut comporter plus que :max items.',
    ],
    'mimes' => 'Le :attribute doit être un fichier du type: :values.',
    'mimetypes' => 'Le :attribute doit être un fichier du type: :values.',
    'min' => [
        'numeric' => 'Le :attribute doit être supérieur ou égal à :min.',
        'file' => 'Le :attribute doit peser au moins :min kilobytes.',
        'string' => 'Le :attribute doit faire au moins :min caractères.',
        'array' => 'Le :attribute doit comporter au moins :min items.',
    ],
    'not_in' => 'Le :attribute sélectionné est invalide.',
    'not_regex' => 'Le format :attribute est invalide.',
    'numeric' => 'Le :attribute doit être un nombre.',
    'present' => 'Le champ :attribute doit ête présent.',
    'regex' => 'Le format :attribute est invalide.',
    'required' => 'Le champ :attribute est requis.',
    'required_if' => 'Le champ :attribute est requis lorsque :other vaut :value.',
    'required_unless' => 'Le champ :attribute est requis à moins que :other soit dans :values.',
    'required_with' => 'Le champ :attribute est requis lorsque :values est présent.',
    'required_with_all' => 'Le champ :attribute est requis lorsque :values sont présentes.',
    'required_without' => "Le champ :attribute est requis lorsque :values n'est pas présent.",
    'required_without_all' => "Le champ :attribute est requis lorsque aucune des valeurs :values n'est présente.",
    'same' => 'Le :attribute et le :other doivent concorder.',
    'size' => [
        'numeric' => 'Le :attribute doit être de taille :size.',
        'file' => 'Le :attribute doit être de taille :size kilobytes.',
        'string' => 'Le :attribute doit faire :size caractères.',
        'array' => 'Le :attribute doit contenir :size items.',
    ],
    'starts_with' => 'Le :attribute doit commencer avec un caractère parmi: :values',
    'string' => 'Le :attribute doit être une chaîne de caractères.',
    'timezone' => 'Le :attribute doit être une zone valide.',
    'unique' => 'Le :attribute a déjà été sélectionné.',
    'uploaded' => 'Le téléchargement de :attribute a échoué.',
    'url' => 'Le format du :attribute est invalide.',
    'uuid' => 'Le :attribute doit être un UUID valide.',

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap our attribute placeholder
    | with something more reader friendly such as "E-Mail Address" instead
    | of "email". This simply helps us make our message more expressive.
    |
    */

    'attributes' => [
        'refCode' => 'code',
        'referral-code-value' => 'share code',
        'referral-code-create-value' => 'share code',
    ],
];
