<?php
/**
 * @license MIT
 *
 * Modified by impress-org on 19-February-2024 using Strauss.
 * @see https://github.com/BrianHenryIE/strauss
 */

namespace Give\Vendors\Faker\Provider\bn_BD;

class Company extends \Give\Vendors\Faker\Provider\Company
{
    protected static $formats = [
        '{{companyName}} {{companyType}}',
    ];

    protected static $names = [
        'রহিম', 'করিম', 'বাবলু',
    ];

    protected static $types = [
        'সিমেন্ট', 'সার', 'ঢেউটিন',
    ];

    public static function companyType()
    {
        return static::randomElement(static::$types);
    }

    public static function companyName()
    {
        return static::randomElement(static::$names);
    }
}
