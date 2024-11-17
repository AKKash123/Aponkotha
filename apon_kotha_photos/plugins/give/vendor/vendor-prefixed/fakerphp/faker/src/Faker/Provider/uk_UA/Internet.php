<?php
/**
 * @license MIT
 *
 * Modified by impress-org on 19-February-2024 using Strauss.
 * @see https://github.com/BrianHenryIE/strauss
 */

namespace Give\Vendors\Faker\Provider\uk_UA;

class Internet extends \Give\Vendors\Faker\Provider\Internet
{
    protected static $tld = ['ua', 'com.ua', 'org.ua', 'net.ua', 'com', 'net', 'org'];
    protected static $freeEmailDomain = ['gmail.com', 'mail.ru', 'ukr.net', 'i.ua', 'rambler.ru'];
}
