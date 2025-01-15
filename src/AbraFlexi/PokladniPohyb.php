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
 * Pokladní pohyb.
 *
 * @see https://demo.flexibee.eu/c/demo/pokladni-pohyb/properties položky evidence
 */
class PokladniPohyb extends RW implements \AbraFlexi\Document
{
    use stitky;
    use firma;
    use sum;
    use subItems;
    use email;
    use getChanges;
    use lock;

    /**
     * Evidence AbraFlexi.
     */
    public ?string $evidence = 'pokladni-pohyb';
}
