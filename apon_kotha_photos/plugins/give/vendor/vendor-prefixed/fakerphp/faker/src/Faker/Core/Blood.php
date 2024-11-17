<?php
/**
 * @license MIT
 *
 * Modified by impress-org on 19-February-2024 using Strauss.
 * @see https://github.com/BrianHenryIE/strauss
 */

declare(strict_types=1);

namespace Give\Vendors\Faker\Core;

use Give\Vendors\Faker\Extension;

/**
 * @experimental This class is experimental and does not fall under our BC promise
 */
final class Blood implements Extension\BloodExtension
{
    /**
     * @var string[]
     */
    private $bloodTypes = ['A', 'AB', 'B', 'O'];

    /**
     * @var string[]
     */
    private $bloodRhFactors = ['+', '-'];

    public function bloodType(): string
    {
        return Extension\Helper::randomElement($this->bloodTypes);
    }

    public function bloodRh(): string
    {
        return Extension\Helper::randomElement($this->bloodRhFactors);
    }

    public function bloodGroup(): string
    {
        return sprintf(
            '%s%s',
            $this->bloodType(),
            $this->bloodRh()
        );
    }
}
