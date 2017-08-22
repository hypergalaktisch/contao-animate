<?php

class Animations
{
    public function getContentElementWithAnimations($objElement, $strBuffer)
    {
        $animation = '';
        if ($objElement->xlAnimateAdd) {
            $GLOBALS['TL_CSS']['xl-animate-animate-css'] = 'system/modules/xl-animate/assets/css/animate.min.css|static';
            $GLOBALS['TL_CSS']['xl-animate'] = 'system/modules/xl-animate/assets/css/xl-animate.css|static';
            $GLOBALS['TL_JQUERY']['xl-viewportchecker'] = '<script src="system/modules/xl-animate/assets/js/viewportchecker.min.js"></script>';
            $GLOBALS['TL_JQUERY']['xl-animate'] = '<script src="system/modules/xl-animate/assets/js/animations.js"></script>';
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
