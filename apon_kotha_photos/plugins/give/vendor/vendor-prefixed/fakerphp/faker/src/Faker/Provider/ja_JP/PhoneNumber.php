<?php
/**
 * @license MIT
 *
 * Modified by impress-org on 19-February-2024 using Strauss.
 * @see https://github.com/BrianHenryIE/strauss
 */

namespace Give\Vendors\Faker\Provider\ja_JP;

class PhoneNumber extends \Give\Vendors\Faker\Provider\PhoneNumber
{
    /**
     * @see http://www.soumu.go.jp/main_sosiki/joho_tsusin/top/tel_number/number_shitei.html#kotei-denwa
     */
    protected static $formats = [
        '080-####-####',
        '090-####-####',
        '0#-####-####',
        '0####-#-####',
        '0###-##-####',
        '0##-###-####',
        '0##0-###-###',
    ];
}
