<?php
/**
 * @license MIT
 *
 * Modified by impress-org on 19-February-2024 using Strauss.
 * @see https://github.com/BrianHenryIE/strauss
 */

namespace Give\Vendors\Faker\Provider\zh_TW;

/**
 * @deprecated Use {@link \Faker\Provider\Internet} instead
 * @see \Give\Vendors\Faker\Provider\Internet
 */
class Internet extends \Give\Vendors\Faker\Provider\Internet
{
    /**
     * @deprecated Use {@link \Faker\Provider\Internet::userName()} instead
     * @see \Give\Vendors\Faker\Provider\Internet::userName()
     */
    public function userName()
    {
        return parent::userName();
    }

    /**
     * @deprecated Use {@link \Faker\Provider\Internet::domainWord()} instead
     * @see \Give\Vendors\Faker\Provider\Internet::domainWord()
     */
    public function domainWord()
    {
        return parent::domainWord();
    }
}
