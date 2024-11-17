<?php
/**
 * @license MIT
 *
 * Modified by impress-org on 19-February-2024 using Strauss.
 * @see https://github.com/BrianHenryIE/strauss
 */

namespace Give\Vendors\Faker\Provider\zh_TW;

/**
 * @deprecated Use {@link \Faker\Provider\Payment} instead
 * @see \Give\Vendors\Faker\Provider\Payment
 */
class Payment extends \Give\Vendors\Faker\Provider\Payment
{
    /**
     * @return array
     *
     * @deprecated Use {@link \Faker\Provider\Payment::creditCardDetails()} instead
     * @see \Give\Vendors\Faker\Provider\Payment::creditCardDetails()
     */
    public function creditCardDetails($valid = true)
    {
        return parent::creditCardDetails($valid);
    }
}
