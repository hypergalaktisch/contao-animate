<?php
/**
 * @copyright  Georg Jaedicke
 * @author     Georg Jaedicke (hypergalaktisch)
 * @package    Animate
 * @license    LGPL-3.0+
 * @see	       https://github.com/hypergalaktisch/contao-animate
 */

$GLOBALS['TL_HOOKS']['getContentElement']['hypergalaktisch_animate'] = ['hypergalaktisch_animate.listener.hooks', 'getContentElement'];
