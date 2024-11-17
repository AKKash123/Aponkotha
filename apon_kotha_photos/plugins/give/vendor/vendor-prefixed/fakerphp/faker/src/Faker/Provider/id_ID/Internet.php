<?php
/**
 * @license MIT
 *
 * Modified by impress-org on 19-February-2024 using Strauss.
 * @see https://github.com/BrianHenryIE/strauss
 */

namespace Give\Vendors\Faker\Provider\id_ID;

class Internet extends \Give\Vendors\Faker\Provider\Internet
{
    /**
     * @var array some email domains
     */
    protected static $freeEmailDomain = [
        'gmail.com', 'yahoo.com', 'gmail.co.id', 'yahoo.co.id',
    ];

    /**
     * General tld and local tld
     *
     * @see http://idwebhost.com/
     * @see http://domain.id/
     */
    protected static $tld = [
        'com', 'net', 'org', 'asia', 'tv', 'biz', 'info', 'in', 'name', 'co',
        'ac.id', 'sch.id', 'go.id', 'mil.id', 'co.id', 'or.id', 'web.id',
        'my.id', 'biz.id', 'desa.id', 'id',
    ];
}
