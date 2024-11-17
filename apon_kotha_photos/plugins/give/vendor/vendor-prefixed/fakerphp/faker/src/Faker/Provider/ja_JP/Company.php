<?php
/**
 * @license MIT
 *
 * Modified by impress-org on 19-February-2024 using Strauss.
 * @see https://github.com/BrianHenryIE/strauss
 */

namespace Give\Vendors\Faker\Provider\ja_JP;

class Company extends \Give\Vendors\Faker\Provider\Company
{
    protected static $formats = [
        '{{companyPrefix}} {{lastName}}',
    ];

    protected static $companyPrefix = ['株式会社', '有限会社'];

    public static function companyPrefix()
    {
        return static::randomElement(static::$companyPrefix);
    }
}
