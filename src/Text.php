<?php declare(strict_types=1);

namespace DOMWrap;

use DOMWrap\Traits\{
    NodeTrait,
    CommonTrait,
    TraversalTrait,
    ManipulationTrait
};

/**
 * Text Node
 *
 * @package DOMWrap
 * @license http://opensource.org/licenses/BSD-3-Clause BSD 3 Clause
 */
class Text extends \DOMText
{
    use CommonTrait;
    use NodeTrait;
    use TraversalTrait;
    use ManipulationTrait;
}
