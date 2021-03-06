<?php

namespace Fisharebest\Localization\Territory;

/**
 * Class AbstractTerritory - Representation of the territory ER - Eritrea.
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2019 Greg Roach
 * @license   GPLv3+
 */
class TerritoryEr extends AbstractTerritory implements TerritoryInterface
{
    public function code()
    {
        return 'ER';
    }

    public function firstDay()
    {
        return 6;
    }
}
