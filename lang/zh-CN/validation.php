<?php

return [

    /*
    |--------------------------------------------------------------------------
    | 验证语言行
    |--------------------------------------------------------------------------
    |
    | 以下语言行包含验证器类使用的默认错误消息。其中一些规则有多个版本，
    | 如大小规则。请随意在此处调整每个消息。
    |
    */

    'accepted' => '必须接受 :attribute。',
    'accepted_if' => ':other 为 :value 时，:attribute 必须被接受。',
    'active_url' => ':attribute 不是一个有效的 URL。',
    'after' => ':attribute 必须是 :date 之后的日期。',
    'after_or_equal' => ':attribute 必须是 :date 或之后的日期。',
    'alpha' => ':attribute 只能包含字母。',
    'alpha_dash' => ':attribute 只能包含字母、数字、破折号和下划线。',
    'alpha_num' => ':attribute 只能包含字母和数字。',
    'array' => ':attribute 必须是一个数组。',
    'ascii' => ':attribute 只能包含单字节的字母数字字符和符号。',
    'before' => ':attribute 必须是 :date 之前的日期。',
    'before_or_equal' => ':attribute 必须是 :date 或之前的日期。',
    'between' => [
        'array' => ':attribute 必须包含 :min 到 :max 项。',
        'file' => ':attribute 必须在 :min 到 :max 千字节之间。',
        'numeric' => ':attribute 必须在 :min 到 :max 之间。',
        'string' => ':attribute 必须在 :min 到 :max 个字符之间。',
    ],
    'boolean' => ':attribute 必须是 true 或 false。',
    'can' => ':attribute 包含未经授权的值。',
    'confirmed' => ':attribute 的确认不匹配。',
    'current_password' => '密码不正确。',
    'date' => ':attribute 必须是有效的日期。',
    'date_equals' => ':attribute 必须等于 :date。',
    'date_format' => ':attribute 必须匹配格式 :format。',
    'decimal' => ':attribute 必须有 :decimal 位小数。',
    'declined' => ':attribute 必须被拒绝。',
    'declined_if' => ':other 为 :value 时，:attribute 必须被拒绝。',
    'different' => ':attribute 和 :other 必须不同。',
    'digits' => ':attribute 必须是 :digits 位数字。',
    'digits_between' => ':attribute 必须在 :min 和 :max 位数字之间。',
    'dimensions' => ':attribute 有无效的图像尺寸。',
    'distinct' => ':attribute 有重复的值。',
    'doesnt_end_with' => ':attribute 不能以以下之一结尾：:values。',
    'doesnt_start_with' => ':attribute 不能以以下之一开头：:values。',
    'email' => ':attribute 必须是有效的电子邮件地址。',
    'ends_with' => ':attribute 必须以以下之一结尾：:values。',
    'enum' => '选择的 :attribute 无效。',
    'exists' => '选择的 :attribute 无效。',
    'file' => ':attribute 必须是一个文件。',
    'filled' => ':attribute 必须有一个值。',
    'gt' => [
        'array' => ':attribute 必须包含超过 :value 项。',
        'file' => ':attribute 必须大于 :value 千字节。',
        'numeric' => ':attribute 必须大于 :value。',
        'string' => ':attribute 必须多于 :value 个字符。',
    ],
    'gte' => [
        'array' => ':attribute 必须包含 :value 项或更多。',
        'file' => ':attribute 必须大于或等于 :value 千字节。',
        'numeric' => ':attribute 必须大于或等于 :value。',
        'string' => ':attribute 必须多于或等于 :value 个字符。',
    ],
    'image' => ':attribute 必须是图像。',
    'in' => '选择的 :attribute 无效。',
    'in_array' => ':attribute 必须存在于 :other 中。',
    'integer' => ':attribute 必须是整数。',
    'ip' => ':attribute 必须是有效的 IP 地址。',
    'ipv4' => ':attribute 必须是有效的 IPv4 地址。',
    'ipv6' => ':attribute 必须是有效的 IPv6 地址。',
    'json' => ':attribute 必须是有效的 JSON 字符串。',
    'lowercase' => ':attribute 必须是小写字母。',
    'lt' => [
        'array' => ':attribute 必须包含少于 :value 项。',
        'file' => ':attribute 必须小于 :value 千字节。',
        'numeric' => ':attribute 必须小于 :value。',
        'string' => ':attribute 必须少于 :value 个字符。',
    ],
    'lte' => [
        'array' => ':attribute 不能包含超过 :value 项。',
        'file' => ':attribute 必须小于或等于 :value 千字节。',
        'numeric' => ':attribute 必须小于或等于 :value。',
        'string' => ':attribute 必须少于或等于 :value 个字符。',
    ],
    'mac_address' => ':attribute 必须是有效的 MAC 地址。',
    'max' => [
        'array' => ':attribute 不能包含超过 :max 项。',
        'file' => ':attribute 不能大于 :max 千字节。',
        'numeric' => ':attribute 不能大于 :max。',
        'string' => ':attribute 不能大于 :max 个字符。',
    ],
    'max_digits' => ':attribute 不能多于 :max 位数字。',
    'mimes' => ':attribute 必须是类型为 :values 的文件。',
    'mimetypes' => ':attribute 必须是类型为 :values 的文件。',
    'min' => [
        'array' => ':attribute 必须至少包含 :min 项。',
        'file' => ':attribute 必须至少为 :min 千字节。',
        'numeric' => ':attribute 必须至少为 :min。',
        'string' => ':attribute 必须至少为 :min 个字符。',
    ],
    'min_digits' => ':attribute 必须至少为 :min 位数字。',
    'missing' => ':attribute 必须丢失。',
    'missing_if' => ':other 为 :value 时，:attribute 必须丢失。',
    'missing_unless' => ':other 不是 :value 时，:attribute 必须丢失。',
    'missing_with' => ':values 存在时，:attribute 必须丢失。',
    'missing_with_all' => ':values 存在时，:attribute 必须丢失。',
    'multiple_of' => ':attribute 必须是 :value 的倍数。',
    'not_in' => '选择的 :attribute 无效。',
    'not_regex' => ':attribute 格式无效。',
    'numeric' => ':attribute 必须是数字。',
    'password' => [
        'letters' => ':attribute 必须包含至少一个字母。',
        'mixed' => ':attribute 必须包含至少一个大写字母和一个小写字母。',
        'numbers' => ':attribute 必须包含至少一个数字。',
        'symbols' => ':attribute 必须包含至少一个符号。',
        'uncompromised' => '给定的 :attribute 出现在数据泄漏中。请选择不同的 :attribute。',
    ],
    'present' => ':attribute 必须存在。',
    'prohibited' => ':attribute 是禁止的。',
    'prohibited_if' => ':other 为 :value 时，:attribute 是禁止的。',
    'prohibited_unless' => ':other 不在 :values 中时，:attribute 是禁止的。',
    'prohibits' => ':attribute 禁止 :other 存在。',
    'regex' => ':attribute 格式无效。',
    'required' => ':attribute 是必需的。',
    'required_array_keys' => ':attribute 必须包含以下条目：:values。',
    'required_if' => '当 :other 是 :value 时，:attribute 是必需的。',
    'required_if_accepted' => '当 :other 被接受时，:attribute 是必需的。',
    'required_unless' => '除非 :other 在 :values 中，否则 :attribute 是必需的。',
    'required_with' => '当 :values 存在时，:attribute 是必需的。',
    'required_with_all' => '当 :values 存在时，:attribute 是必需的。',
    'required_without' => '当 :values 不存在时，:attribute 是必需的。',
    'required_without_all' => '当 :values 都不存在时，:attribute 是必需的。',
    'same' => ':attribute 必须匹配 :other。',
    'size' => [
        'array' => ':attribute 必须包含 :size 项。',
        'file' => ':attribute 必须为 :size 千字节。',
        'numeric' => ':attribute 必须为 :size。',
        'string' => ':attribute 必须为 :size 个字符。',
    ],
    'starts_with' => ':attribute 必须以以下之一开头：:values。',
    'string' => ':attribute 必须是一个字符串。',
    'timezone' => ':attribute 必须是有效的时区。',
    'unique' => ':attribute 已经被占用。',
    'uploaded' => ':attribute 上传失败。',
    'uppercase' => ':attribute 必须是大写字母。',
    'url' => ':attribute 必须是有效的 URL。',
    'ulid' => ':attribute 必须是有效的 ULID。',
    'uuid' => ':attribute 必须是有效的 UUID。',

    /*
    |--------------------------------------------------------------------------
    | 自定义验证语言行
    |--------------------------------------------------------------------------
    |
    | 在这里，您可以为属性使用规则指定自定义验证消息，使用约定“attribute.rule”来命名这些行。这可以使我们更快速地为给定属性规则指定特定的自定义语言行。
    |
    */

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | 自定义验证属性
    |--------------------------------------------------------------------------
    |
    | 以下语言行用于将占位符属性与更具表达性的内容（例如“电子邮件地址”而不是“email”）交换。这有助于使我们的消息更具表达性。
    |
    */

    'attributes' => [],

];
