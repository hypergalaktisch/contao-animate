<?php
/**
 * @copyright  Georg Jaedicke
 * @author     Georg Jaedicke (hypergalaktisch)
 * @package    Animate
 * @license    LGPL-3.0+
 * @see	       https://github.com/hypergalaktisch/contao-animate
 */
namespace Hypergalaktisch\AnimateBundle\ContaoManager;

use Hypergalaktisch\AnimateBundle\HypergalaktischAnimateBundle;
use Contao\ManagerPlugin\Bundle\Config\BundleConfig;
use Contao\ManagerPlugin\Bundle\BundlePluginInterface;
use Contao\ManagerPlugin\Bundle\Parser\ParserInterface;
use Symfony\Component\Config\Loader\LoaderResolverInterface;
use Symfony\Component\HttpKernel\KernelInterface;
use Symfony\Component\Routing\RouteCollection;

/**
 * Plugin for the Contao Manager.
 *
 * @author Georg Jaedicke (hypergalaktisch)
 */
class Plugin implements BundlePluginInterface
{
    /**
     * {@inheritdoc}
     */
    public function getBundles(ParserInterface $parser)
    {
        return [
            BundleConfig::create(HypergalaktischAnimateBundle::class)
                ->setLoadAfter(['Contao\CoreBundle\ContaoCoreBundle'])
        ];
    }

    /**
     * Returns a collection of routes for this bundle.
     *
     * @param LoaderResolverInterface $resolver
     * @param KernelInterface         $kernel
     *
     * @return null|RouteCollection
     */
    public function getRouteCollection(LoaderResolverInterface $resolver, KernelInterface $kernel)
    {
        return $resolver
            ->resolve(__DIR__.'/../Resources/config/routing.yml')
            ->load(__DIR__.'/../Resources/config/routing.yml')
            ;
    }
}
