<?php
/**
 * @license MIT
 *
 * Modified by impress-org on 19-February-2024 using Strauss.
 * @see https://github.com/BrianHenryIE/strauss
 */

namespace Give\Vendors\Faker\Provider\is_IS;

class Internet extends \Give\Vendors\Faker\Provider\Internet
{
    /**
     * @var array Some email domains in Denmark.
     */
    protected static $freeEmailDomain = [
        'gmail.com', 'yahoo.com', 'hotmail.com', 'visir.is', 'simnet.is', 'internet.is',
    ];

    /**
     * @var array Some TLD.
     */
    protected static $tld = [
        'com', 'com', 'com', 'net', 'is', 'is', 'is',
    ];
}
