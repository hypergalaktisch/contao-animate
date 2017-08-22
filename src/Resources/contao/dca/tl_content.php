<?php

$GLOBALS['TL_DCA']['tl_content']['palettes']['__selector__'][] = 'xlAnimateAdd';
$GLOBALS['TL_DCA']['tl_content']['palettes']['headline'] = str_replace('{protected_legend:hide}', '{xlAnimate_legend:hide},xlAnimateAdd;{protected_legend:hide}', $GLOBALS['TL_DCA']['tl_content']['palettes']['headline']);
$GLOBALS['TL_DCA']['tl_content']['palettes']['text'] = str_replace('{protected_legend:hide}', '{xlAnimate_legend:hide},xlAnimateAdd;{protected_legend:hide}', $GLOBALS['TL_DCA']['tl_content']['palettes']['text']);
$GLOBALS['TL_DCA']['tl_content']['palettes']['html'] = str_replace('{protected_legend:hide}', '{xlAnimate_legend:hide},xlAnimateAdd;{protected_legend:hide}', $GLOBALS['TL_DCA']['tl_content']['palettes']['html']);
$GLOBALS['TL_DCA']['tl_content']['palettes']['list'] = str_replace('{protected_legend:hide}', '{xlAnimate_legend:hide},xlAnimateAdd;{protected_legend:hide}', $GLOBALS['TL_DCA']['tl_content']['palettes']['list']);
$GLOBALS['TL_DCA']['tl_content']['palettes']['table'] = str_replace('{protected_legend:hide}', '{xlAnimate_legend:hide},xlAnimateAdd;{protected_legend:hide}', $GLOBALS['TL_DCA']['tl_content']['palettes']['table']);
$GLOBALS['TL_DCA']['tl_content']['palettes']['hyperlink'] = str_replace('{protected_legend:hide}', '{xlAnimate_legend:hide},xlAnimateAdd;{protected_legend:hide}', $GLOBALS['TL_DCA']['tl_content']['palettes']['hyperlink']);
$GLOBALS['TL_DCA']['tl_content']['palettes']['toplink'] = str_replace('{protected_legend:hide}', '{xlAnimate_legend:hide},xlAnimateAdd;{protected_legend:hide}', $GLOBALS['TL_DCA']['tl_content']['palettes']['toplink']);
$GLOBALS['TL_DCA']['tl_content']['palettes']['image'] = str_replace('{protected_legend:hide}', '{xlAnimate_legend:hide},xlAnimateAdd;{protected_legend:hide}', $GLOBALS['TL_DCA']['tl_content']['palettes']['image']);
$GLOBALS['TL_DCA']['tl_content']['palettes']['download'] = str_replace('{protected_legend:hide}', '{xlAnimate_legend:hide},xlAnimateAdd;{protected_legend:hide}', $GLOBALS['TL_DCA']['tl_content']['palettes']['download']);
$GLOBALS['TL_DCA']['tl_content']['palettes']['downloads'] = str_replace('{protected_legend:hide}', '{xlAnimate_legend:hide},xlAnimateAdd;{protected_legend:hide}', $GLOBALS['TL_DCA']['tl_content']['palettes']['downloads']);
$GLOBALS['TL_DCA']['tl_content']['palettes']['form'] = str_replace('{protected_legend:hide}', '{xlAnimate_legend:hide},xlAnimateAdd;{protected_legend:hide}', $GLOBALS['TL_DCA']['tl_content']['palettes']['form']);

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