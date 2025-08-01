<?php

return [
    'accepted' => ':attribute kabul edilmelidir.',
    'accepted_if' => ':attribute, :other :value olduğunda kabul edilmelidir.',
    'active_url' => ':attribute geçerli bir URL olmalıdır.',
    'after' => ':attribute :date tarihinden sonraki bir tarih olmalıdır.',
    'after_or_equal' => ':attribute :date tarihine eşit veya daha sonraki bir tarih olmalıdır.',
    'alpha' => ':attribute sadece harflerden oluşmalıdır.',
    'alpha_dash' => ':attribute sadece harfler, sayılar, tire ve alt çizgi içerebilir.',
    'alpha_num' => ':attribute sadece harfler ve sayılardan oluşabilir.',
    'array' => ':attribute bir dizi olmalıdır.',
    'before' => ':attribute :date tarihinden önceki bir tarih olmalıdır.',
    'before_or_equal' => ':attribute :date tarihine eşit veya daha önceki bir tarih olmalıdır.',
    'between' => [
        'numeric' => ':attribute :min ile :max arasında olmalıdır.',
        'file' => ':attribute :min ile :max kilobayt arasında olmalıdır.',
        'string' => ':attribute :min ile :max karakter arasında olmalıdır.',
        'array' => ':attribute :min ile :max arasında öğe içermelidir.',
    ],
    'boolean' => ':attribute alanı doğru veya yanlış olmalıdır.',
    'confirmed' => ':attribute onayı eşleşmiyor.',
    'current_password' => 'Şifre hatalı.',
    'date' => ':attribute geçerli bir tarih olmalıdır.',
    'date_equals' => ':attribute :date tarihine eşit olmalıdır.',
    'date_format' => ':attribute :format formatıyla eşleşmiyor.',
    'declined' => ':attribute kabul edilmemelidir.',
    'declined_if' => ':attribute, :other :value olduğunda kabul edilmemelidir.',
    'different' => ':attribute ile :other farklı olmalıdır.',
    'digits' => ':attribute :digits basamaklı olmalıdır.',
    'digits_between' => ':attribute :min ile :max basamak arasında olmalıdır.',
    'dimensions' => ':attribute geçersiz görsel boyutlarına sahiptir.',
    'distinct' => ':attribute alanında yinelenen bir değer var.',
    'doesnt_end_with' => ':attribute şunlardan biriyle bitmemelidir: :values.',
    'doesnt_start_with' => ':attribute şunlardan biriyle başlamamalıdır: :values.',
    'email' => ':attribute geçerli bir e-posta adresi olmalıdır.',
    'ends_with' => ':attribute şu değerlerden biriyle bitmelidir: :values',
    'enum' => 'Seçili :attribute geçersiz.',
    'exists' => 'Seçili :attribute geçersiz.',
    'file' => ':attribute bir dosya olmalıdır.',
    'filled' => ':attribute alanı bir değer içermelidir.',
    'gt' => [
        'numeric' => ':attribute :value sayısından büyük olmalıdır.',
        'file' => ':attribute :value kilobayttan büyük olmalıdır.',
        'string' => ':attribute :value karakterden büyük olmalıdır.',
        'array' => ':attribute :value öğeden fazla içermelidir.',
    ],
    'gte' => [
        'numeric' => ':attribute :value veya daha büyük olmalıdır.',
        'file' => ':attribute :value kilobayt veya daha büyük olmalıdır.',
        'string' => ':attribute :value karakter veya daha uzun olmalıdır.',
        'array' => ':attribute :value veya daha fazla öğe içermelidir.',
    ],
    'image' => ':attribute bir resim olmalıdır.',
    'in' => 'Seçili :attribute geçersiz.',
    'in_array' => ':attribute :other içinde mevcut değil.',
    'integer' => ':attribute bir tam sayı olmalıdır.',
    'ip' => ':attribute geçerli bir IP adresi olmalıdır.',
    'ipv4' => ':attribute geçerli bir IPv4 adresi olmalıdır.',
    'ipv6' => ':attribute geçerli bir IPv6 adresi olmalıdır.',
    'json' => ':attribute geçerli bir JSON dizesi olmalıdır.',
    'lt' => [
        'numeric' => ':attribute :value sayısından küçük olmalıdır.',
        'file' => ':attribute :value kilobayttan küçük olmalıdır.',
        'string' => ':attribute :value karakterden kısa olmalıdır.',
        'array' => ':attribute :value öğeden az içermelidir.',
    ],
    'lte' => [
        'numeric' => ':attribute :value veya daha küçük olmalıdır.',
        'file' => ':attribute :value kilobayt veya daha küçük olmalıdır.',
        'string' => ':attribute :value karakter veya daha kısa olmalıdır.',
        'array' => ':attribute :value veya daha fazla öğe içermemelidir.',
    ],
    'mac_address' => ':attribute geçerli bir MAC adresi olmalıdır.',
    'max' => [
        'numeric' => ':attribute :max sayısından büyük olmamalıdır.',
        'file' => ':attribute :max kilobayttan büyük olmamalıdır.',
        'string' => ':attribute :max karakterden uzun olmamalıdır.',
        'array' => ':attribute :max öğeden fazla içermemelidir.',
    ],
    'max_digits' => ':attribute :max basamaktan fazla olmamalıdır.',
    'mimes' => ':attribute dosya türü :values olmalıdır.',
    'mimetypes' => ':attribute dosya türü :values olmalıdır.',
    'min' => [
        'numeric' => ':attribute en az :min olmalıdır.',
        'file' => ':attribute en az :min kilobayt olmalıdır.',
        'string' => ':attribute en az :min karakter olmalıdır.',
        'array' => ':attribute en az :min öğe içermelidir.',
    ],
    'min_digits' => ':attribute en az :min basamak olmalıdır.',
    'multiple_of' => ':attribute :value katı olmalıdır.',
    'not_in' => 'Seçili :attribute geçersiz.',
    'not_regex' => ':attribute formatı geçersiz.',
    'numeric' => ':attribute bir sayı olmalıdır.',
    'password' => [
        'letters' => ':attribute en az bir harf içermelidir.',
        'mixed' => ':attribute en az bir büyük ve bir küçük harf içermelidir.',
        'numbers' => ':attribute en az bir rakam içermelidir.',
        'symbols' => ':attribute en az bir sembol içermelidir.',
        'uncompromised' => ':attribute bir veri sızıntısında yer almış. Lütfen farklı bir :attribute seçin.',
    ],
    'present' => ':attribute alanı mevcut olmalıdır.',
    'prohibited' => ':attribute alanı yasaktır.',
    'prohibited_if' => ':attribute alanı, :other :value olduğunda yasaktır.',
    'prohibited_unless' => ':attribute alanı, :other :values içinde olmadığı sürece yasaktır.',
    'prohibits' => ':attribute alanı, :other alanının mevcut olmasını engeller.',
    'regex' => ':attribute formatı geçersiz.',
    'required' => ':attribute alanı zorunludur.',
    'required_array_keys' => ':attribute alanı :values için girişler içermelidir.',
    'required_if' => ':attribute alanı, :other :value olduğunda zorunludur.',
    'required_unless' => ':attribute alanı, :other :values içinde olmadığı sürece zorunludur.',
    'required_with' => ':attribute alanı, :values varken zorunludur.',
    'required_with_all' => ':attribute alanı, :values mevcut olduğunda zorunludur.',
    'required_without' => ':attribute alanı, :values yokken zorunludur.',
    'required_without_all' => ':attribute alanı, :values değerlerinden hiçbiri yoksa zorunludur.',
    'same' => ':attribute ile :other eşleşmelidir.',
    'size' => [
        'numeric' => ':attribute :size olmalıdır.',
        'file' => ':attribute :size kilobayt olmalıdır.',
        'string' => ':attribute :size karakter olmalıdır.',
        'array' => ':attribute :size öğe içermelidir.',
    ],
    'starts_with' => ':attribute şunlardan biriyle başlamalıdır: :values',
    'string' => ':attribute bir metin olmalıdır.',
    'timezone' => ':attribute geçerli bir saat dilimi olmalıdır.',
    'unique' => ':attribute zaten alınmış.',
    'uploaded' => ':attribute yüklenirken hata oluştu.',
    'url' => ':attribute geçerli bir URL olmalıdır.',
    'uuid' => ':attribute geçerli bir UUID olmalıdır.',

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'özel-mesaj',
        ],
    ],

    'attributes' => [],
];
