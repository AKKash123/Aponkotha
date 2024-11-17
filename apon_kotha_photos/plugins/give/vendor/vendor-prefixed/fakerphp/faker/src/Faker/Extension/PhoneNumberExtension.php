<?php
/**
 * @license MIT
 *
 * Modified by impress-org on 19-February-2024 using Strauss.
 * @see https://github.com/BrianHenryIE/strauss
 */

namespace Give\Vendors\Faker\Extension;

/**
 * @experimental This interface is experimental and does not fall under our BC promise
 */
interface PhoneNumberExtension extends Extension
{
    /**
     * @example '555-123-546'
     */
    public function phoneNumber(): string;

    /**
     * @example +27113456789
     */
    public function e164PhoneNumber(): string;
}
