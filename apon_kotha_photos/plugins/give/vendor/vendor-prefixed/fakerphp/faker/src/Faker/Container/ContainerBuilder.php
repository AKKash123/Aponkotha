<?php
/**
 * @license MIT
 *
 * Modified by impress-org on 19-February-2024 using Strauss.
 * @see https://github.com/BrianHenryIE/strauss
 */

declare(strict_types=1);

namespace Give\Vendors\Faker\Container;

use Give\Vendors\Faker\Core;
use Give\Vendors\Faker\Extension\BarcodeExtension;
use Give\Vendors\Faker\Extension\BloodExtension;
use Give\Vendors\Faker\Extension\ColorExtension;
use Give\Vendors\Faker\Extension\DateTimeExtension;
use Give\Vendors\Faker\Extension\FileExtension;
use Give\Vendors\Faker\Extension\NumberExtension;
use Give\Vendors\Faker\Extension\UuidExtension;
use Give\Vendors\Faker\Extension\VersionExtension;

/**
 * @experimental This class is experimental and does not fall under our BC promise
 */
final class ContainerBuilder
{
    /**
     * @var array<string, callable|object|string>
     */
    private $definitions = [];

    /**
     * @param callable|object|string $value
     *
     * @throws \InvalidArgumentException
     */
    public function add($value, string $name = null): self
    {
        if (!is_string($value) && !is_callable($value) && !is_object($value)) {
            throw new \InvalidArgumentException(sprintf(
                'First argument to "%s::add()" must be a string, callable or object.',
                self::class
            ));
        }

        if ($name === null) {
            if (is_string($value)) {
                $name = $value;
            } elseif (is_object($value)) {
                $name = get_class($value);
            } else {
                throw new \InvalidArgumentException(sprintf(
                    'Second argument to "%s::add()" is required not passing a string or object as first argument',
                    self::class
                ));
            }
        }

        $this->definitions[$name] = $value;

        return $this;
    }

    public function build(): ContainerInterface
    {
        return new Container($this->definitions);
    }

    /**
     * Get an array with extension that represent the default English
     * functionality.
     */
    public static function defaultExtensions(): array
    {
        return [
            BarcodeExtension::class => Core\Barcode::class,
            BloodExtension::class => Core\Blood::class,
            ColorExtension::class => Core\Color::class,
            DateTimeExtension::class => Core\DateTime::class,
            FileExtension::class => Core\File::class,
            NumberExtension::class => Core\Number::class,
            VersionExtension::class => Core\Version::class,
            UuidExtension::class => Core\Uuid::class,
        ];
    }

    public static function getDefault(): ContainerInterface
    {
        $instance = new self();

        foreach (self::defaultExtensions() as $id => $definition) {
            $instance->add($definition, $id);
        }

        return $instance->build();
    }
}
