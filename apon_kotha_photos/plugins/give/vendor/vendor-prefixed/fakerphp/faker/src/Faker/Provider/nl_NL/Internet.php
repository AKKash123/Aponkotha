<?php
/**
 * @license MIT
 *
 * Modified by impress-org on 19-February-2024 using Strauss.
 * @see https://github.com/BrianHenryIE/strauss
 */

namespace Give\Vendors\Faker\Provider\nl_NL;

class Internet extends \Give\Vendors\Faker\Provider\Internet
{
    protected static $freeEmailDomain = ['gmail.com', 'hotmail.nl', 'live.nl', 'yahoo.nl'];
    protected static $tld = ['com', 'com', 'com', 'net', 'org', 'nl', 'nl', 'nl'];
}
