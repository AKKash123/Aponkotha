<?php
/**
 * @license MIT
 *
 * Modified by impress-org on 19-February-2024 using Strauss.
 * @see https://github.com/BrianHenryIE/strauss
 */

namespace Give\Vendors\Faker\Provider;

class Medical extends Base
{
    protected static $bloodTypes = ['A', 'AB', 'B', 'O'];

    protected static $bloodRhFactors = ['+', '-'];

    /**
     * @example 'AB'
     */
    public static function bloodType(): string
    {
        return static::randomElement(static::$bloodTypes);
    }

    /**
     * @example '+'
     */
    public static function bloodRh(): string
    {
        return static::randomElement(static::$bloodRhFactors);
    }

    /**
     * @example 'AB+'
     */
    public function bloodGroup(): string
    {
        return $this->generator->parse('{{bloodType}}{{bloodRh}}');
    }
}
