<?php

declare(strict_types=1);

/**
 * This file is part of the SpojeNet\AbraFlexi package.
 *
 * (c) 2019-2024 SpojeNet s.r.o. <http://spoje.net/>
 * (c) 2025 SpojeNetIT s.r.o. <http://spojenet.cz/>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace AbraFlexi;

/**
 * @see https://demo.abraflexi.eu/c/demo/udalost/properties api udalost evidence
 */
class Udalost extends RW
{
    use stitky;
    use firma;

    /**
     * Evidence užitá objektem.
     */
    public ?string $evidence = 'udalost';
}
