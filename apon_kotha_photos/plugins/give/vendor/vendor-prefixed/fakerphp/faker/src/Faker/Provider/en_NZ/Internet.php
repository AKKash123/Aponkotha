<?php
/**
 * @license MIT
 *
 * Modified by impress-org on 19-February-2024 using Strauss.
 * @see https://github.com/BrianHenryIE/strauss
 */

namespace Give\Vendors\Faker\Provider\en_NZ;

class Internet extends \Give\Vendors\Faker\Provider\Internet
{
    /**
     * An array of New Zealand TLDs.
     *
     * @see https://en.wikipedia.org/wiki/.nz
     *
     * @var array
     */
    protected static $tld = [
        'com', 'nz', 'ac.nz', 'co.nz', 'geek.nz', 'gen.nz', 'kiwi.nz', 'maori.nz', 'net.nz', 'org.nz', 'school.nz', 'cri.nz', 'govt.nz', 'health.nz', 'iwi.nz', 'mil.nz', 'parliament.nz',
    ];
}
