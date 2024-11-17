<?php
/**
 * @license MIT
 *
 * Modified by impress-org on 19-February-2024 using Strauss.
 * @see https://github.com/BrianHenryIE/strauss
 */

namespace Give\Vendors\Faker\Provider\de_DE;

class Internet extends \Give\Vendors\Faker\Provider\Internet
{
    /**
     * @see https://www.statista.com/statistics/446418/most-popular-e-mail-providers-germany/
     * @see http://blog.shuttlecloud.com/the-10-most-popular-email-providers-in-germany
     */
    protected static $freeEmailDomain = [
        'web.de',
        'gmail.com',
        'hotmail.de',
        'yahoo.de',
        'googlemail.com',
        'aol.de',
        'gmx.de',
        'freenet.de',
        'posteo.de',
        'mail.de',
        'live.de',
        't-online.de',
    ];
    protected static $tld = ['com', 'com', 'com', 'net', 'org', 'de', 'de', 'de'];
}
