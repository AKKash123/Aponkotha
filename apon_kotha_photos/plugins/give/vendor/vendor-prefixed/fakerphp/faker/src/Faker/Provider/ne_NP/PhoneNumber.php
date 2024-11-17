<?php
/**
 * @license MIT
 *
 * Modified by impress-org on 19-February-2024 using Strauss.
 * @see https://github.com/BrianHenryIE/strauss
 */

namespace Give\Vendors\Faker\Provider\ne_NP;

class PhoneNumber extends \Give\Vendors\Faker\Provider\PhoneNumber
{
    protected static $formats = [
        '01-4######',
        '01-5######',
        '01-6######',
        '9841######',
        '9849######',
        '98510#####',
        '9803######',
        '9808######',
        '9813######',
        '9818######',
    ];
}
