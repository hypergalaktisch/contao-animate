<?php
/**
 * @copyright  Georg Jaedicke
 * @author     Georg Jaedicke (hypergalaktisch)
 * @package    Animate
 * @license    LGPL-3.0+
 * @see	       https://github.com/hypergalaktisch/contao-animate
 */

namespace Hypergalaktisch\AnimateBundle\EventListener;

use Contao\CoreBundle\Framework\ContaoFrameworkInterface;
use Hypergalaktisch\AnimateBundle\Animate;

class HookListener
{
    /**
     * @var ContaoFrameworkInterface
     */
    private $framework;

    /**
     * Constructor.
     *
     * @param ContaoFrameworkInterface $framework
     */
    public function __construct(ContaoFrameworkInterface $framework)
    {
        $this->framework = $framework;
    }

    /**
     * Extend content element
     *
     * @param ContentElement $objElement
     * @param Sring $strBuffer
     */
    public function getContentElement(ContentElement $objElement, $strBuffer)
    {
        $animation = '';
        if ($objElement->xlAnimateAdd) {
            $GLOBALS['TL_CSS']['xl-animate-animate-css'] = 'bundles/hypergalaktischanimate/css/animate.min.css|static';
            $GLOBALS['TL_CSS']['xl-animate'] = 'bundles/hypergalaktischanimate/css/xl-animate.css|static';
            $GLOBALS['TL_JQUERY']['xl-viewportchecker'] = '<script src="bundles/hypergalaktischanimate/js/viewportchecker.min.js"></script>';
            $GLOBALS['TL_JQUERY']['xl-animate'] = '<script src="bundles/hypergalaktischanimate/js/animations.js"></script>';
            if ($objElement->xlAnimateEffect) {
                $animation .= ' data-effect="' . $objElement->xlAnimateEffect . '"';
            }
            if ($objElement->xlAnimateEffectDelay > 0) {
                $animation .= ' data-delay="' . $objElement->xlAnimateEffectDelay . '"';
            }
        }
        return $animation != '' ? '<div class="xl-animate"' . $animation . '>' . $strBuffer . '</div>' : $strBuffer;
    }
}
