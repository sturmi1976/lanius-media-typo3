<?php

class Standard_action_index_5374178e87cda6500a77fe4cc21d919ba86320f2 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

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

$output0 .= '<?xml version="1.0" encoding="UTF-8"?><?xml-stylesheet type="text/xsl" href="';
$array1 = array (
);
$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('xslFile', $array1)]);

$output0 .= '"?>

<sitemapindex xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure3 = function() use ($renderingContext, $self) {
$output5 = '';

$output5 .= '
        <sitemap>
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SpacelessViewHelper
$renderChildrenClosure7 = function() use ($renderingContext, $self) {
$output8 = '';

$output8 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure10 = function() use ($renderingContext, $self) {
$output31 = '';

$output31 .= '
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure33 = function() use ($renderingContext, $self) {
$output34 = '';

$output34 .= '<loc>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\PageViewHelper
$renderChildrenClosure36 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments35 = array();
$arguments35['pageUid'] = NULL;
$arguments35['additionalParams'] = array (
);
$arguments35['pageType'] = 0;
$arguments35['noCache'] = false;
$arguments35['language'] = NULL;
$arguments35['section'] = '';
$arguments35['linkAccessRestrictedPages'] = false;
$arguments35['absolute'] = false;
$arguments35['addQueryString'] = false;
$arguments35['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments35['addQueryStringMethod'] = NULL;
$array37 = array (
);$arguments35['pageType'] = $renderingContext->getVariableProvider()->getByPath('type', $array37);
// Rendering Array
$array38 = array();
$array39 = array (
);$array38['sitemap'] = $renderingContext->getVariableProvider()->getByPath('sitemap.key', $array39);
$array40 = array (
);$array38['page'] = $renderingContext->getVariableProvider()->getByPath('sitemap.page', $array40);
$arguments35['additionalParams'] = $array38;
// Rendering Boolean node
// Rendering Array
$array41 = array();
$array41['0'] = 'true';

$expression42 = function($context) {return TRUE;};
$arguments35['absolute'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression42(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array41)
					),
					$renderingContext
				);

$output34 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Uri\PageViewHelper::renderStatic($arguments35, $renderChildrenClosure36, $renderingContext)]);

$output34 .= '</loc>';
return $output34;
};
$arguments32 = array();

$output31 .= '';

$output31 .= '
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure44 = function() use ($renderingContext, $self) {
$output45 = '';

$output45 .= '<loc>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\PageViewHelper
$renderChildrenClosure47 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments46 = array();
$arguments46['pageUid'] = NULL;
$arguments46['additionalParams'] = array (
);
$arguments46['pageType'] = 0;
$arguments46['noCache'] = false;
$arguments46['language'] = NULL;
$arguments46['section'] = '';
$arguments46['linkAccessRestrictedPages'] = false;
$arguments46['absolute'] = false;
$arguments46['addQueryString'] = false;
$arguments46['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments46['addQueryStringMethod'] = NULL;
$array48 = array (
);$arguments46['pageType'] = $renderingContext->getVariableProvider()->getByPath('type', $array48);
// Rendering Array
$array49 = array();
$array50 = array (
);$array49['sitemap'] = $renderingContext->getVariableProvider()->getByPath('sitemap.key', $array50);
$arguments46['additionalParams'] = $array49;
// Rendering Boolean node
// Rendering Array
$array51 = array();
$array51['0'] = 'true';

$expression52 = function($context) {return TRUE;};
$arguments46['absolute'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression52(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array51)
					),
					$renderingContext
				);

$output45 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Uri\PageViewHelper::renderStatic($arguments46, $renderChildrenClosure47, $renderingContext)]);

$output45 .= '</loc>';
return $output45;
};
$arguments43 = array();
$arguments43['if'] = NULL;

$output31 .= '';

$output31 .= '
                ';
return $output31;
};
$arguments9 = array();
$arguments9['then'] = NULL;
$arguments9['else'] = NULL;
$arguments9['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array28 = array();
$array29 = array (
);$array28['0'] = $renderingContext->getVariableProvider()->getByPath('sitemap.page', $array29);

$expression30 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments9['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression30(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array28)
					),
					$renderingContext
				);
$arguments9['__thenClosure'] = function() use ($renderingContext, $self) {
$output11 = '';

$output11 .= '<loc>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\PageViewHelper
$renderChildrenClosure13 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments12 = array();
$arguments12['pageUid'] = NULL;
$arguments12['additionalParams'] = array (
);
$arguments12['pageType'] = 0;
$arguments12['noCache'] = false;
$arguments12['language'] = NULL;
$arguments12['section'] = '';
$arguments12['linkAccessRestrictedPages'] = false;
$arguments12['absolute'] = false;
$arguments12['addQueryString'] = false;
$arguments12['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments12['addQueryStringMethod'] = NULL;
$array14 = array (
);$arguments12['pageType'] = $renderingContext->getVariableProvider()->getByPath('type', $array14);
// Rendering Array
$array15 = array();
$array16 = array (
);$array15['sitemap'] = $renderingContext->getVariableProvider()->getByPath('sitemap.key', $array16);
$array17 = array (
);$array15['page'] = $renderingContext->getVariableProvider()->getByPath('sitemap.page', $array17);
$arguments12['additionalParams'] = $array15;
// Rendering Boolean node
// Rendering Array
$array18 = array();
$array18['0'] = 'true';

$expression19 = function($context) {return TRUE;};
$arguments12['absolute'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression19(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array18)
					),
					$renderingContext
				);

$output11 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Uri\PageViewHelper::renderStatic($arguments12, $renderChildrenClosure13, $renderingContext)]);

$output11 .= '</loc>';
return $output11;
};
$arguments9['__elseClosures'][] = function() use ($renderingContext, $self) {
$output20 = '';

$output20 .= '<loc>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\PageViewHelper
$renderChildrenClosure22 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments21 = array();
$arguments21['pageUid'] = NULL;
$arguments21['additionalParams'] = array (
);
$arguments21['pageType'] = 0;
$arguments21['noCache'] = false;
$arguments21['language'] = NULL;
$arguments21['section'] = '';
$arguments21['linkAccessRestrictedPages'] = false;
$arguments21['absolute'] = false;
$arguments21['addQueryString'] = false;
$arguments21['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments21['addQueryStringMethod'] = NULL;
$array23 = array (
);$arguments21['pageType'] = $renderingContext->getVariableProvider()->getByPath('type', $array23);
// Rendering Array
$array24 = array();
$array25 = array (
);$array24['sitemap'] = $renderingContext->getVariableProvider()->getByPath('sitemap.key', $array25);
$arguments21['additionalParams'] = $array24;
// Rendering Boolean node
// Rendering Array
$array26 = array();
$array26['0'] = 'true';

$expression27 = function($context) {return TRUE;};
$arguments21['absolute'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression27(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array26)
					),
					$renderingContext
				);

$output20 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Uri\PageViewHelper::renderStatic($arguments21, $renderChildrenClosure22, $renderingContext)]);

$output20 .= '</loc>';
return $output20;
};

$output8 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments9, $renderChildrenClosure10, $renderingContext);

$output8 .= '
            ';
return $output8;
};
$arguments6 = array();

$output5 .= TYPO3Fluid\Fluid\ViewHelpers\SpacelessViewHelper::renderStatic($arguments6, $renderChildrenClosure7, $renderingContext);

$output5 .= '
            <lastmod>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper
$renderChildrenClosure54 = function() use ($renderingContext, $self) {
$array55 = array (
);return $renderingContext->getVariableProvider()->getByPath('sitemap.lastMod', $array55);
};
$arguments53 = array();
$arguments53['date'] = NULL;
$arguments53['format'] = '';
$arguments53['base'] = NULL;
$arguments53['format'] = 'c';
$renderChildrenClosure54 = ($arguments53['date'] !== null) ? function() use ($arguments53) { return $arguments53['date']; } : $renderChildrenClosure54;
$output5 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper::renderStatic($arguments53, $renderChildrenClosure54, $renderingContext)]);

$output5 .= '</lastmod>
        </sitemap>
    ';
return $output5;
};
$arguments2 = array();
$arguments2['each'] = NULL;
$arguments2['as'] = NULL;
$arguments2['key'] = NULL;
$arguments2['reverse'] = false;
$arguments2['iteration'] = NULL;
$array4 = array (
);$arguments2['each'] = $renderingContext->getVariableProvider()->getByPath('sitemaps', $array4);
$arguments2['as'] = 'sitemap';

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments2, $renderChildrenClosure3, $renderingContext);

$output0 .= '
</sitemapindex>
';

return $output0;
}


}
#