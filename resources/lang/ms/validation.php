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

    'accepted' => 'Butiran :attribute mesti diterima.',
    'active_url' => 'URL :attribute tidak sah.',
    'after' => 'Tarikh :attribute mesti bertarikh selepas :date.',
    'after_or_equal' => ':attribute mesti selepas atau pada :date.',
    'alpha' => ':attribute mungkin mengandungi perkataan.',
    'alpha_dash' => ':attribute mungkin mengandungi perkataan, nombor, sengkang dan _.',
    'alpha_num' => ':attribute mungkin mengandungi nombor dan perkataan.',
    'array' => ':attribute mesti dalam array.',
    'before' => ':attribute mesti bertarikh sebelum :date.',
    'before_or_equal' => ':attribute mesti sebelum atau pada :date.',
    'between' => [
        'numeric' => ':attribute mesti diantara :min dan :max.',
        'file' => ':attribute mesti diantara :min and :max kilobytes.',
        'string' => ':attribute mesti diantara :min dan :max aksara.',
        'array' => ':attribute mesti diantara :min dan :max perkara.',
    ],
    'boolean' => ':attribute ruang mesti benar atau salah.',
    'confirmed' => ':attribute Pengesahan tidak sama.',
    'date' => ':attribute tarikh tidak sah.',
    'date_equals' => ':attribute tarikh mesti sama seperti :date.',
    'date_format' => ':attribute tidak sama denga format :format.',
    'different' => ':attribute dan :other mesti berlainan.',
    'digits' => ':attribute mesti :digits digit.',
    'digits_between' => ':attribute mesti diantara :min dan :max digits.',
    'dimensions' => ':attribute ada dimensi yang tidak sah.',
    'distinct' => ':attribute ruang mempunyai nilai yang sama.',
    'email' => ':attribute mesti mempunya emel yang sah.',
    'ends_with' => ':attribute mesti berakhir dengan salah satu : :values',
    'exists' => 'Pilihan :attribute tidak sah.',
    'file' => ':attribute Mesti dalam bentuk File.',
    'filled' => ':attribute ruang mesti ada isian.',
    'gt' => [
        'numeric' => ':attribute mesti lebih besar dari :value.',
        'file' => ':attribute mesti lebih besar dari :value kilobytes.',
        'string' => ':attribute mesti lebih besar dari :value aksara.',
        'array' => ':attribute mesti lebih dari :value item.',
    ],
    'gte' => [
        'numeric' => ':attribute mesti lebih besar atau sama dengan :value.',
        'file' => ':attribute mesti lebih besar atau sama dengan :value kilobytes.',
        'string' => ':attribute mesti lebih besar atau sama dengan :value aksara.',
        'array' => ':attribute mesti ada :value item atau lebih.',
    ],
    'image' => ':attribute mesti ada gambar.',
    'in' => 'Pilihan :attribute tidak sah.',
    'in_array' => ':attribute ruang tidak sah di :other.',
    'integer' => ':attribute mesti dalam bentuk nombor.',
    'ip' => ':attribute mesti mempunyai IP address yang sah.',
    'ipv4' => ':attribute mesti mempunyai IPv4 address yang sah.',
    'ipv6' => ':attribute mesti mempunyai IPv6 address yang sah.',
    'json' => ':attribute mesti mempunyai JSON string yang sah.',
    'lt' => [
        'numeric' => ':attribute mesti kurang daripada :value.',
        'file' => ':attribute mesti kurang daripada :value kilobytes.',
        'string' => ':attribute mesti kurang daripada :value aksara.',
        'array' => ':attribute mesti kurang daripada :value item.',
    ],
    'lte' => [
        'numeric' => ':attribute mesti kurang atau sama dengan :value.',
        'file' => ':attribute mesti kurang atau sama dengan :value kilobytes.',
        'string' => ':attribute mesti kurang atau sama dengan :value characters.',
        'array' => ':attribute mesti tidak lebih dari :value items.',
    ],
    'max' => [
        'numeric' => ':attribute mesti tidak lebih dari :max.',
        'file' => ':attribute mesti tidak lebih dari :max kilobytes.',
        'string' => ':attribute mesti tidak lebih dari :max characters.',
        'array' => ':attribute mesti tidak lebih dari :max items.',
    ],
    'mimes' => ':attribute mesti jenis file adalah : :values.',
    'mimetypes' => ':attribute mesti jenis file adalah : :values.',
    'min' => [
        'numeric' => ':attribute mesti sekurang-kurangnya :min.',
        'file' => ':attribute mesti sekurang-kurangnya :min kilobytes.',
        'string' => ':attribute mesti sekurang-kurangnya :min characters.',
        'array' => ':attribute mesti sekurang-kurangnya :min items.',
    ],
    'not_in' => 'Pilihan :attribute tidak sah.',
    'not_regex' => ':attribute format tidak sah.',
    'numeric' => ':attribute mesti dalam bentuk nombor.',
    'password' => 'Password salah.',
    'present' => ':attribute ruang mesti ada.',
    'regex' => ':attribute format tidak sah.',
    'required' => ':attribute ruang di perlukan.',
    'required_if' => ':attribute ruang diperlukan sekiranya :other adalah :value.',
    'required_unless' => ':attribute ruang diperlukan melainkan :other ada di dalam :values.',
    'required_with' => ':attribute ruang diperlukan apabila :values ada.',
    'required_with_all' => ':attribute ruang diperlukan apabila :values ada.',
    'required_without' => ':attribute ruang diperlukan apabila :values tidak ada.',
    'required_without_all' => ':attribute ruang diperlukan apabila tiada :values.',
    'same' => ':attribute dan :other mesti sama.',
    'size' => [
        'numeric' => ':attribute mesti :size.',
        'file' => ':attribute mesti :size kilobytes.',
        'string' => ':attribute mesti :size characters.',
        'array' => ':attribute mesti mengandungi :size items.',
    ],
    'starts_with' => ':attribute mesti bermula salah satu dengan: :values',
    'string' => ':attribute mesti perkataan.',
    'timezone' => ':attribute mesti zon yang sah.',
    'unique' => ':attribute telah diambil.',
    'uploaded' => ':attribute gagal dimuat naik.',
    'url' => ':attribute format tidak sah.',
    'uuid' => ':attribute mesti UUID yang sah.',

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

    'attributes' => [],

];