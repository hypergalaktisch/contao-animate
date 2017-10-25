<?php
if (TL_MODE == 'FE') {
    $GLOBALS['TL_HOOKS']['getContentElement'][] = array('Animations', 'getContentElementWithAnimations');
}
