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
 * Nastavení firmy.
 *
 * @note Tato položka nemá dostupné položky evidence
 * @note Tato evidence není veřejně dostupná na demo.abraflexi.eu
 */
class Nastaveni extends RO
{
    /**
     * Evidence užitá objektem.
     */
    public ?string $evidence = 'nastaveni';
}
