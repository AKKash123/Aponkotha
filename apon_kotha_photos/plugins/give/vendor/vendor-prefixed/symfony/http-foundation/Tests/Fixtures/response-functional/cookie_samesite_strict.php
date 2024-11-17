<?php
/**
 * @license MIT
 *
 * Modified by impress-org on 19-February-2024 using Strauss.
 * @see https://github.com/BrianHenryIE/strauss
 */

use Give\Vendors\Symfony\Component\HttpFoundation\Cookie;

$r = require __DIR__.'/common.inc';

$r->headers->setCookie(new Cookie('CookieSamesiteStrictTest', 'StrictValue', 0, '/', null, false, true, false, Cookie::SAMESITE_STRICT));
$r->sendHeaders();
