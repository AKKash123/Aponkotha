<?php
/**
 * @license MIT
 *
 * Modified by impress-org on 19-February-2024 using Strauss.
 * @see https://github.com/BrianHenryIE/strauss
 */

namespace Give\Vendors\Faker\Provider\ar_EG;

class Payment extends \Give\Vendors\Faker\Provider\Payment
{
    /**
     * International Bank Account Number (IBAN)
     *
     * @see https://www.upiqrcode.com/iban-generator/eg/egypt
     */
    public function bankAccountNumber(): string
    {
        return self::iban('EG', '', 25);
    }
}
