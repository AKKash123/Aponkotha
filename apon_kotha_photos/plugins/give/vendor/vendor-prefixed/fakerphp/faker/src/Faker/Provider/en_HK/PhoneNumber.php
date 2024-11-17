<?php
/**
 * @license MIT
 *
 * Modified by impress-org on 19-February-2024 using Strauss.
 * @see https://github.com/BrianHenryIE/strauss
 */

namespace Give\Vendors\Faker\Provider\en_HK;

class PhoneNumber extends \Give\Vendors\Faker\Provider\PhoneNumber
{
    protected static $formats = ['2#######', '3#######', '5#######', '6#######', '9#######'];
    protected static $mobileFormats = ['5#######', '6#######', '9#######'];
    protected static $landlineFormats = ['2#######', '3#######'];
    protected static $faxFormats = ['7#######'];

    /**
     * Return an en_HK mobile phone number
     *
     * @return string
     */
    public static function mobileNumber()
    {
        return static::numerify(static::randomElement(static::$mobileFormats));
    }

    /**
     * Return an en_HK landline number
     *
     * @return string
     */
    public static function landlineNumber()
    {
        return static::numerify(static::randomElement(static::$landlineFormats));
    }

    /**
     * Return an en_HK fax number
     *
     * @return string
     */
    public static function faxNumber()
    {
        return static::numerify(static::randomElement(static::$faxFormats));
    }
}
