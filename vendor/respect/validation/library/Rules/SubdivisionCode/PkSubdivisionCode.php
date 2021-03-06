<?php

/*
 * This file is part of Respect/Validation.
 *
 * (c) Alexandre Gomes Gaigalas <alexandre@gaigalas.net>
 *
 * For the full copyright and license information, please view the "LICENSE.md"
 * file that was distributed with this source code.
 */

namespace Respect\Validation\Rules\SubdivisionCode;

use Respect\Validation\Rules\AbstractSearcher;

/**
 * Validator for Pakistan subdivision code.
 *
 * ISO 3166-1 alpha-2: PK
 *
 * @link http://www.geonames.org/PK/administrative-division-pakistan.html
 */
class PkSubdivisionCode extends AbstractSearcher
{
    public $haystack = [
        'BA', // Balochistan
        'IS', // Islamabad Capital Territory
        'JK', // Azad Kashmir
        'NA', // Gilgit-Baltistan
        'NW', // Khyber Pakhtunkhwa
        'PB', // Punjab
        'SD', // Sindh
        'TA', // Federally Administered Tribal Areas
    ];

    public $compareIdentical = true;
}
