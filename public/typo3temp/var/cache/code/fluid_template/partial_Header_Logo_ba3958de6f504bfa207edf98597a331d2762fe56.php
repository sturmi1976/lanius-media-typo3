<?php

class partial_Header_Logo_ba3958de6f504bfa207edf98597a331d2762fe56 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

public function getLayoutName(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
return (string) '';
}
public function hasLayout() {
return FALSE;
}
public function addCompiledNamespaces(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$renderingContext->getViewHelperResolver()->addNamespaces(array (
  'core' => 
  array (
    0 => 'TYPO3\\CMS\\Core\\ViewHelpers',
  ),
  'f' => 
  array (
    0 => 'TYPO3Fluid\\Fluid\\ViewHelpers',
    1 => 'TYPO3\\CMS\\Fluid\\ViewHelpers',
  ),
  'formvh' => 
  array (
    0 => 'TYPO3\\CMS\\Form\\ViewHelpers',
  ),
  'pvh' => 
  array (
    0 => 'Buepro\\Pvh\\ViewHelpers',
  ),
));
}

/**
 * Main Render function
 */
public function render(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output0 = '';

$output0 .= '
';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\PageViewHelper
$renderChildrenClosure2 = function() use ($renderingContext, $self) {
$output3 = '';

$output3 .= '
    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$renderChildrenClosure5 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments4 = array();
$arguments4['additionalAttributes'] = NULL;
$arguments4['data'] = NULL;
$arguments4['aria'] = NULL;
$arguments4['class'] = NULL;
$arguments4['dir'] = NULL;
$arguments4['id'] = NULL;
$arguments4['lang'] = NULL;
$arguments4['style'] = NULL;
$arguments4['title'] = NULL;
$arguments4['accesskey'] = NULL;
$arguments4['tabindex'] = NULL;
$arguments4['onclick'] = NULL;
$arguments4['alt'] = NULL;
$arguments4['ismap'] = NULL;
$arguments4['longdesc'] = NULL;
$arguments4['usemap'] = NULL;
$arguments4['loading'] = NULL;
$arguments4['decoding'] = NULL;
$arguments4['src'] = '';
$arguments4['treatIdAsReference'] = false;
$arguments4['image'] = NULL;
$arguments4['crop'] = NULL;
$arguments4['cropVariant'] = 'default';
$arguments4['fileExtension'] = NULL;
$arguments4['width'] = NULL;
$arguments4['height'] = NULL;
$arguments4['minWidth'] = NULL;
$arguments4['minHeight'] = NULL;
$arguments4['maxWidth'] = NULL;
$arguments4['maxHeight'] = NULL;
$arguments4['absolute'] = false;
$arguments4['class'] = 'image-embed-item img-fluid';
$arguments4['src'] = 'typo3conf/ext/provider/Resources/Public/Images/logo-typo3-lanius.png';
$arguments4['width'] = 300;
$arguments4['loading'] = 'lazy';
$arguments4['alt'] = 'Agentur - Logo';
// Rendering Array
$array6 = array();
$output7 = '';

$output7 .= '{f:uri.image(src: typo3conf/ext/provider/Resources/Public/Images/logo-typo3-lanius.png, maxWidth: 768)}';

$output7 .= ' 768w,
                                        ';

$output7 .= '{f:uri.image(src: typo3conf/ext/provider/Resources/Public/Images/logo-typo3-lanius.png, maxWidth: 990)}';

$output7 .= ' 990w,
                                        ';

$output7 .= '{f:uri.image(src: typo3conf/ext/provider/Resources/Public/Images/logo-typo3-lanius.png, maxWidth: 1200)}';

$output7 .= ' 1200w,
                                        ';

$output7 .= '{f:uri.image(src: typo3conf/ext/provider/Resources/Public/Images/logo-typo3-lanius.png, maxWidth: 1440)}';

$output7 .= ' 1440w,
                                        ';

$output7 .= '{f:uri.image(src: typo3conf/ext/provider/Resources/Public/Images/logo-typo3-lanius.png, maxWidth: 1900)}';

$output7 .= ' 1900w';
$array6['srcset'] = $output7;
$array6['sizes'] = '(min-width: 1200px) 50vw, 100vw';
$arguments4['additionalAttributes'] = $array6;

$output3 .= TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper::renderStatic($arguments4, $renderChildrenClosure5, $renderingContext);

$output3 .= '
';
return $output3;
};
$arguments1 = array();
$arguments1['additionalAttributes'] = NULL;
$arguments1['data'] = NULL;
$arguments1['aria'] = NULL;
$arguments1['class'] = NULL;
$arguments1['dir'] = NULL;
$arguments1['id'] = NULL;
$arguments1['lang'] = NULL;
$arguments1['style'] = NULL;
$arguments1['title'] = NULL;
$arguments1['accesskey'] = NULL;
$arguments1['tabindex'] = NULL;
$arguments1['onclick'] = NULL;
$arguments1['target'] = NULL;
$arguments1['rel'] = NULL;
$arguments1['pageUid'] = NULL;
$arguments1['pageType'] = NULL;
$arguments1['noCache'] = NULL;
$arguments1['language'] = NULL;
$arguments1['section'] = NULL;
$arguments1['linkAccessRestrictedPages'] = NULL;
$arguments1['additionalParams'] = NULL;
$arguments1['absolute'] = NULL;
$arguments1['addQueryString'] = NULL;
$arguments1['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments1['addQueryStringMethod'] = NULL;
$arguments1['pageUid'] = 1;

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\Link\PageViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext);

return $output0;
}


}
#