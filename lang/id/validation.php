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

    'accepted' => ': Atribut harus diterima.',
    'active_url' => 'Atribut: bukan url yang valid.',
    'after' => ': Atribut harus berupa tanggal setelah: Tanggal.',
    'after_or_equal' => 'Atribut: harus berupa tanggal setelah atau sama dengan: Tanggal.',
    'alpha' => 'Atribut: hanya dapat berisi huruf.',
    'alpha_dash' => 'Atribut: dapat hanya berisi huruf, angka, tanda hubung dan garis bawah.',
    'alpha_num' => 'Atribut: dapat hanya berisi huruf dan angka.',
    'array' => ': Atribut harus berupa array.',
    'before' => ': Atribut harus berukuran sebelum: Tanggal.',
    'before_or_equal' => ': Atribut harus berukuran sebelum atau sama dengan: Tanggal.',
    'between' => [
        'numeric' => ': Atribut harus antara: menit dan: maks.',
        'file' => ': Atribut harus antara: mnt dan: max kilobytes.',
        'string' => ': Atribut harus antara: mnt dan: karakter maks.',
        'array' => ': Atribut harus memiliki antara: menit dan: item maks.',
    ],
    'boolean' => 'Bidang atribut harus benar atau salah.',
    'confirmed' => 'Konfirmasi atribut tidak cocok.',
    'date' => 'Atribut: bukan tanggal yang valid.',
    'date_equals' => ': Atribut harus berupa tanggal yang sama dengan: Tanggal.',
    'date_format' => 'Atribut: Atribut tidak cocok dengan format: format.',
    'different' => ': Atribut dan: lainnya harus berbeda.',
    'digits' => ': Atribut harus: digit digit.',
    'digits_between' => ': Atribut harus antara: mnt dan: digit maks.',
    'dimensions' => ': Atribut memiliki dimensi gambar tidak valid.',
    'distinct' => 'Bidang atribut: memiliki nilai duplikat.',
    'email' => ': Atribut harus berupa alamat email yang valid.',
    'ends_with' => 'Atribut: Atribut harus diakhiri dengan salah satu dari yang berikut :: Nilai',
    'exists' => 'Atribut yang dipilih: tidak valid.',
    'file' => ': Atribut harus berupa file.',
    'filled' => ': Bidang atribut harus memiliki nilai.',
    'gt' => [
        'numeric' => ': Atribut harus lebih besar dari: Nilai.',
        'file' => 'Atribut: Atribut harus lebih besar dari: Nilai kilobyte.',
        'string' => ': Atribut harus lebih besar dari: nilai karakter.',
        'array' => ': Atribut harus memiliki lebih dari: nilai item.',
    ],
    'gte' => [
        'numeric' => ': Atribut harus lebih besar dari atau sama: nilai.',
        'file' => ': Atribut harus lebih besar dari atau sama: nilai kilobytes.',
        'string' => ': Atribut harus lebih besar dari atau sama: karakter nilai.',
        'array' => ': Atribut harus memiliki: item nilai atau lebih.',
    ],
    'image' => ': Atribut harus menjadi gambar.',
    'in' => 'Atribut yang dipilih: tidak valid.',
    'in_array' => 'Bidang atribut tidak ada di: lainnya.',
    'integer' => 'Atribut: Atribut harus bilangan bulat.',
    'ip' => 'Atribut: Atribut harus berupa alamat IP yang valid.',
    'ipv4' => ': Atribut harus berupa alamat IPv4 yang valid.',
    'ipv6' => ': Atribut harus berupa alamat IPv6 yang valid.',
    'json' => ': Atribut harus berupa string JSON yang valid.',
    'lt' => [
        'numeric' => ': Atribut harus kurang dari: Nilai.',
        'file' => ': Atribut harus kurang dari: nilai kilobytes.',
        'string' => 'Atribut: Atribut harus kurang dari: karakter nilai.',
        'array' => ': Atribut harus memiliki kurang dari: item nilai.',
    ],
    'lte' => [
        'numeric' => ': Atribut harus kurang dari atau sama: nilai.',
        'file' => ': Atribut harus kurang dari atau sama: nilai kilobytes.',
        'string' => ': Atribut harus kurang dari atau sama: karakter nilai.',
        'array' => ': Atribut tidak boleh memiliki lebih dari: Nilai item.',
    ],
    'max' => [
        'numeric' => ': Atribut mungkin tidak lebih besar dari: maks.',
        'file' => ': Atribut mungkin tidak lebih besar dari: max kilobytes.',
        'string' => 'Atribut: mungkin tidak lebih besar dari: karakter maks.',
        'array' => ': Atribut mungkin tidak memiliki lebih dari: item maks.',
    ],
    'mimes' => 'Atribut: Atribut harus berupa file ::: Nilai.',
    'mimetypes' => 'Atribut: Atribut harus berupa file ::: Nilai.',
    'min' => [
        'numeric' => 'Atribut: setidaknya harus: min.',
        'file' => 'Atribut: setidaknya harus: min kilobyte.',
        'string' => 'Atribut: minimal harus: karakter minimum.',
        'array' => 'Atribut: Atribut harus memiliki setidaknya: Barang Min.',
    ],
    'not_in' => 'Atribut yang dipilih: tidak valid.',
    'not_regex' => 'Format atribut: tidak valid.',
    'numeric' => ': Atribut harus berupa angka.',
    'present' => 'Bidang atribut harus ada.',
    'regex' => 'Format atribut: tidak valid.',
    'required' => 'Diperlukan bidang atribut.',
    'required_if' => 'Bidang atribut: diperlukan kapan: lainnya adalah: nilai.',
    'required_unless' => 'Bidang atribut: diperlukan, kecuali: lainnya dalam: Nilai.',
    'required_with' => 'Bidang atribut: diperlukan saat: nilai ada.',
    'required_with_all' => 'Bidang atribut yang diperlukan ketika: Nilai hadir.',
    'required_without' => 'Bidang atribut: diperlukan kapan: nilai tidak ada.',
    'required_without_all' => 'Bidang atribut yang diperlukan ketika tidak ada: nilai hadir.',
    'same' => ': Atribut dan: lainnya harus cocok.',
    'size' => [
        'numeric' => ': Atribut harus: ukuran.',
        'file' => 'Atribut: Atribut harus: ukuran kilobyte.',
        'string' => 'Atribut: Atribut harus: ukuran karakter.',
        'array' => ': Atribut harus mengandung: ukuran item.',
    ],
    'starts_with' => 'Atribut: Atribut harus dimulai dengan salah satu dari yang berikut :: Nilai',
    'string' => ': Atribut harus berupa string.',
    'timezone' => ': Atribut harus berupa zona yang valid.',
    'unique' => 'Atribut: telah diambil.',
    'uploaded' => 'Atribut: Atribut gagal mengunggah.',
    'url' => 'Format atribut: tidak valid.',
    'uuid' => 'Atribut: harus berupa UUID yang valid.',

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
            'rule-name' => 'Kustom-pesan',
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
        'refCode' => 'kode',
        'referral-code-value' => 'Bagikan Kode',
        'referral-code-create-value' => 'Bagikan Kode',
    ],
];
