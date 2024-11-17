<?php
/**
 * @license MIT
 *
 * Modified by impress-org on 19-February-2024 using Strauss.
 * @see https://github.com/BrianHenryIE/strauss
 */

namespace Give\Vendors\Faker\Provider\nl_NL;

class PhoneNumber extends \Give\Vendors\Faker\Provider\PhoneNumber
{
    protected static $formats = [
        '06 ########',
        '06-########',
        '+316-########',
        '+31(0)6-########',
        '+316 ########',
        '+31(0)6 ########',
        '01# #######',
        '(01#) #######',
        '+311# #######',
        '02# #######',
        '(02#) #######',
        '+312# #######',
        '03# #######',
        '(03#) #######',
        '+313# #######',
        '04# #######',
        '(04#) #######',
        '+314# #######',
        '05# #######',
        '(05#) #######',
        '+315# #######',
        '07# #######',
        '(07#) #######',
        '+317# #######',
        '0800 ######',
        '+31800 ######',
        '088 #######',
        '+3188 #######',
        '0900 ######',
        '+31900 ######',
    ];
}
