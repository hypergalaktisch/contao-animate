<?php

/**
 * @copyright  Georg Jaedicke
 * @author     Georg Jaedicke (hypergalaktisch)
 * @package    Animate
 * @license    LGPL-3.0+
 * @see	       https://github.com/hypergalaktisch/contao-animate
 */

$GLOBALS['TL_DCA']['tl_content']['palettes']['__selector__'][] = 'xlAnimateAdd';

Contao\CoreBundle\DataContainer\PaletteManipulator::create()
    ->addLegend('xlAnimate_legend', 'protected_legend', Contao\CoreBundle\DataContainer\PaletteManipulator::POSITION_BEFORE, true)
    ->addField('xlAnimateAdd', 'xlAnimate_legend', Contao\CoreBundle\DataContainer\PaletteManipulator::POSITION_APPEND)
    ->applyToPalette('headline', 'tl_content')
    ->applyToPalette('text', 'tl_content')
    ->applyToPalette('html', 'tl_content')
    ->applyToPalette('list', 'tl_content')
    ->applyToPalette('table', 'tl_content')
    ->applyToPalette('hyperlink', 'tl_content')
    ->applyToPalette('toplink', 'tl_content')
    ->applyToPalette('image', 'tl_content')
    ->applyToPalette('download', 'tl_content')
    ->applyToPalette('downloads', 'tl_content')
    ->applyToPalette('form', 'tl_content');

$GLOBALS['TL_DCA']['tl_content']['subpalettes']['xlAnimateAdd'] = 'xlAnimateEffect,xlAnimateEffectDelay';

$GLOBALS['TL_DCA']['tl_content']['fields']['xlAnimateAdd'] = array(
    'label'     => &$GLOBALS['TL_LANG']['tl_content']['xlAnimateAdd'],
    'exclude'   => true,
    'inputType' => 'checkbox',
    'eval'      => array('submitOnChange' => true),
    'sql'       => "char(1) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_content']['fields']['xlAnimateEffect'] = array(
    'label'            => &$GLOBALS['TL_LANG']['tl_content']['xlAnimateEffect'],
    'exclude'          => true,
    'inputType'        => 'select',
    'options_callback' => array('tl_content_animate', 'getAnimations'),
    'eval'             => array('tl_class' => 'w50', 'includeBlankOption' => true, 'chosen' => true),
    'sql'              => "varchar(32) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_content']['fields']['xlAnimateEffectDelay'] = array(
    'label'     => &$GLOBALS['TL_LANG']['tl_content']['xlAnimateEffectDelay'],
    'exclude'   => true,
    'inputType' => 'text',
    'eval'      => array('rgxp' => 'natural', 'tl_class' => 'w50'),
    'sql'       => "smallint(5) unsigned NOT NULL default '0'"
);

$GLOBALS['TL_DCA']['tl_content']['fields']['xlAnimateEffect1'] = array(
    'label'            => &$GLOBALS['TL_LANG']['tl_content']['xlAnimateEffect'],
    'exclude'          => true,
    'inputType'        => 'select',
    'options_callback' => array('tl_content_animate', 'getAnimations'),
    'eval'             => array('tl_class' => 'w50', 'includeBlankOption' => true, 'chosen' => true),
    'sql'              => "varchar(32) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_content']['fields']['xlAnimateEffect1Delay'] = array(
    'label'     => &$GLOBALS['TL_LANG']['tl_content']['xlAnimateEffectDelay'],
    'exclude'   => true,
    'inputType' => 'text',
    'eval'      => array('rgxp' => 'natural', 'tl_class' => 'w50'),
    'sql'       => "smallint(5) unsigned NOT NULL default '0'"
);

$GLOBALS['TL_DCA']['tl_content']['fields']['xlAnimateEffect2'] = array(
    'label'            => &$GLOBALS['TL_LANG']['tl_content']['xlAnimateEffect'],
    'exclude'          => true,
    'inputType'        => 'select',
    'options_callback' => array('tl_content_animate', 'getAnimations'),
    'eval'             => array('tl_class' => 'w50', 'includeBlankOption' => true, 'chosen' => true),
    'sql'              => "varchar(32) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_content']['fields']['xlAnimateEffect2Delay'] = array(
    'label'     => &$GLOBALS['TL_LANG']['tl_content']['xlAnimateEffectDelay'],
    'exclude'   => true,
    'inputType' => 'text',
    'eval'      => array('rgxp' => 'natural', 'tl_class' => 'w50'),
    'sql'       => "smallint(5) unsigned NOT NULL default '0'"
);

$GLOBALS['TL_DCA']['tl_content']['fields']['xlAnimateEffect3'] = array(
    'label'            => &$GLOBALS['TL_LANG']['tl_content']['xlAnimateEffect'],
    'exclude'          => true,
    'inputType'        => 'select',
    'options_callback' => array('tl_content_animate', 'getAnimations'),
    'eval'             => array('tl_class' => 'w50', 'includeBlankOption' => true, 'chosen' => true),
    'sql'              => "varchar(32) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_content']['fields']['xlAnimateEffect3Delay'] = array(
    'label'     => &$GLOBALS['TL_LANG']['tl_content']['xlAnimateEffectDelay'],
    'exclude'   => true,
    'inputType' => 'text',
    'eval'      => array('rgxp' => 'natural', 'tl_class' => 'w50'),
    'sql'       => "smallint(5) unsigned NOT NULL default '0'"
);

class tl_content_animate extends Backend
{
    /**
     * Animationen der animate.css
     *
     * @return array
     */
    public function getAnimations()
    {
        $options = array(
            'flash',
            'pulse',
            'rubberBand',
            'shake',
            'headShake',
            'swing',
            'tada',
            'wobble',
            'jello',
            'bounceIn',
            'bounceInDown',
            'bounceInLeft',
            'bounceInRight',
            'bounceInUp',
            'bounceOut',
            'bounceOutDown',
            'bounceOutLeft',
            'bounceOutRight',
            'bounceOutUp',
            'fadeIn',
            'fadeInDown',
            'fadeInDownBig',
            'fadeInLeft',
            'fadeInLeftBig',
            'fadeInRight',
            'fadeInRightBig',
            'fadeInUp',
            'fadeInUpBig',
            'fadeOut',
            'fadeOutDown',
            'fadeOutDownBig',
            'fadeOutLeft',
            'fadeOutLeftBig',
            'fadeOutRight',
            'fadeOutRightBig',
            'fadeOutUp',
            'fadeOutUpBig',
            'flipInX',
            'flipInY',
            'flipOutX',
            'flipOutY',
            'lightSpeedIn',
            'lightSpeedOut',
            'rotateIn',
            'rotateInDownLeft',
            'rotateInDownRight',
            'rotateInUpLeft',
            'rotateInUpRight',
            'rotateOut',
            'rotateOutDownLeft',
            'rotateOutDownRight',
            'rotateOutUpLeft',
            'rotateOutUpRight',
            'hinge',
            'rollIn',
            'rollOut',
            'zoomIn',
            'zoomInDown',
            'zoomInLeft',
            'zoomInRight',
            'zoomInUp',
            'zoomOut',
            'zoomOutDown',
            'zoomOutLeft',
            'zoomOutRight',
            'zoomOutUp',
            'slideInDown',
            'slideInLeft',
            'slideInRight',
            'slideInUp',
            'slideOutDown',
            'slideOutLeft',
            'slideOutRight',
            'slideOutUp'
        );
        return $options;
    }
}
