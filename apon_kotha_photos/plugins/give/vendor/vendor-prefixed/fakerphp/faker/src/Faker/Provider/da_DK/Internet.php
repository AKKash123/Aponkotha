<?php
/**
 * @license MIT
 *
 * Modified by impress-org on 19-February-2024 using Strauss.
 * @see https://github.com/BrianHenryIE/strauss
 */

namespace Give\Vendors\Faker\Provider\da_DK;

class Internet extends \Give\Vendors\Faker\Provider\Internet
{
    /**
     * @var array Some safe email TLD.
     */
    protected static $safeEmailTld = [
        'org', 'com', 'net', 'dk', 'dk', 'dk',
    ];

    /**
     * @var array Some email domains in Denmark.
     */
    protected static $freeEmailDomain = [
        'gmail.com', 'yahoo.com', 'yahoo.dk', 'hotmail.com', 'hotmail.dk', 'mail.dk', 'live.dk',
    ];

    /**
     * @var array Some TLD.
     */
    protected static $tld = [
        'com', 'com', 'com', 'biz', 'info', 'net', 'org', 'dk', 'dk', 'dk',
    ];
}
