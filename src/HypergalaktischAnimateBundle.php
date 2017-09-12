<?php
/**
 * @copyright  Georg Jaedicke
 * @author     Georg Jaedicke (hypergalaktisch)
 * @package    Animate
 * @license    LGPL-3.0+
 * @see	       https://github.com/hypergalaktisch/contao-animate
 */

namespace Hypergalaktisch\AnimateBundle;

use Hypergalaktisch\AnimateBundle\DependencyInjection\HypergalaktischAnimateExtension;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\HttpKernel\Bundle\Bundle;

/**
 * Configures the Contao animate bundle.
 *
 * @author Georg Jaedicke
 */
class HypergalaktischAnimateBundle extends Bundle
{
    /**
     * Builds the bundle.
     *
     * It is only ever called once when the cache is empty.
     *
     * This method can be overridden to register compilation passes,
     * other extensions, ...
     *
     * @param ContainerBuilder $container A ContainerBuilder instance
     */
    public function build(ContainerBuilder $container)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function getContainerExtension()
    {
        return new HypergalaktischAnimateExtension();
    }
}
