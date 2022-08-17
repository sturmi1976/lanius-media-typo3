<?php

class partial_PageLayout_LanguageColumns_e454a9b461f7d590813e0b7f6327f62e3b2a9b77 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

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
  'be' => 
  array (
    0 => 'TYPO3\\CMS\\Backend\\ViewHelpers',
  ),
));
}

/**
 * Main Render function
 */
public function render(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output0 = '';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure2 = function() use ($renderingContext, $self) {
$output6 = '';

$output6 .= '
    <div class="row row-cols-auto align-items-end g-3 mb-3">
        <div class="col">
            <select class="form-select" name="createNewLanguage" data-global-event="change" data-action-navigate="$value">
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure8 = function() use ($renderingContext, $self) {
$output10 = '';

$output10 .= '
                    <option value="';
$array11 = array (
);
$output10 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('url', $array11)]);

$output10 .= '">';
$array12 = array (
);
$output10 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('languageName', $array12)]);

$output10 .= '</option>
                ';
return $output10;
};
$arguments7 = array();
$arguments7['each'] = NULL;
$arguments7['as'] = NULL;
$arguments7['key'] = NULL;
$arguments7['reverse'] = false;
$arguments7['iteration'] = NULL;
$array9 = array (
);$arguments7['each'] = $renderingContext->getVariableProvider()->getByPath('context.newLanguageOptions', $array9);
$arguments7['as'] = 'languageName';
$arguments7['key'] = 'url';

$output6 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments7, $renderChildrenClosure8, $renderingContext);

$output6 .= '
            </select>
        </div>
    </div>
';
return $output6;
};
$arguments1 = array();
$arguments1['then'] = NULL;
$arguments1['else'] = NULL;
$arguments1['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array3 = array();
$array4 = array (
);$array3['0'] = $renderingContext->getVariableProvider()->getByPath('context.newLanguageOptions', $array4);

$expression5 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments1['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression5(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array3)
					),
					$renderingContext
				);
$arguments1['__thenClosure'] = $renderChildrenClosure2;

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext);

$output0 .= '
<div class="t3-grid-container">
    <table cellpadding="0" cellspacing="0" class="t3-page-columns t3-grid-table t3js-page-columns">
        <tr>
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure14 = function() use ($renderingContext, $self) {
$output16 = '';

$output16 .= '
                <td valign="top"
                    class="t3-page-column t3-page-column-lang-name"
                    data-language-uid="';
$array17 = array (
);
$output16 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('languageColumn.context.siteLanguage.languageId', $array17)]);

$output16 .= '"
                    data-language-title="';
$array18 = array (
);
$output16 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('languageColumn.context.siteLanguage.title', $array18)]);

$output16 .= '"
                    data-flag-identifier="';
$array19 = array (
);
$output16 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('languageColumn.context.siteLanguage.flagIdentifier', $array19)]);

$output16 .= '"
                >
                    <h2>';
$array20 = array (
);
$output16 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('languageColumn.context.siteLanguage.title', $array20)]);

$output16 .= '</h2>
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure22 = function() use ($renderingContext, $self) {
$output26 = '';

$output26 .= '
                        <span class="label label-';
$array27 = array (
);
$output26 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('languageColumn.context.languageModeLabelClass', $array27)]);

$output26 .= '">';
$array28 = array (
);
$output26 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('languageColumn.context.languageMode', $array28)]);

$output26 .= '</span>
                    ';
return $output26;
};
$arguments21 = array();
$arguments21['then'] = NULL;
$arguments21['else'] = NULL;
$arguments21['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array23 = array();
$array24 = array (
);$array23['0'] = $renderingContext->getVariableProvider()->getByPath('languageColumn.context.languageMode', $array24);

$expression25 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments21['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression25(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array23)
					),
					$renderingContext
				);
$arguments21['__thenClosure'] = $renderChildrenClosure22;

$output16 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments21, $renderChildrenClosure22, $renderingContext);

$output16 .= '
                </td>
            ';
return $output16;
};
$arguments13 = array();
$arguments13['each'] = NULL;
$arguments13['as'] = NULL;
$arguments13['key'] = NULL;
$arguments13['reverse'] = false;
$arguments13['iteration'] = NULL;
$array15 = array (
);$arguments13['each'] = $renderingContext->getVariableProvider()->getByPath('languageColumns', $array15);
$arguments13['as'] = 'languageColumn';

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments13, $renderChildrenClosure14, $renderingContext);

$output0 .= '
        </tr>
        <tr>
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure30 = function() use ($renderingContext, $self) {
$output32 = '';

$output32 .= '
                <td class="t3-page-column t3-page-lang-label nowrap">
                    <div class="btn-group">
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure34 = function() use ($renderingContext, $self) {
$output38 = '';

$output38 .= '
                            <a href="#" class="btn btn-default btn-sm" ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure40 = function() use ($renderingContext, $self) {
$array41 = array (
);return $renderingContext->getVariableProvider()->getByPath('languageColumn.previewUrlAttributes', $array41);
};
$arguments39 = array();
$arguments39['value'] = NULL;

$output38 .= isset($arguments39['value']) ? $arguments39['value'] : $renderChildrenClosure40();

$output38 .= ' title="';
$array42 = array (
);
$output38 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('languageColumn.viewPageLinkTitle', $array42)]);

$output38 .= '">
                                ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure44 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments43 = array();
$arguments43['identifier'] = NULL;
$arguments43['size'] = 'small';
$arguments43['overlay'] = NULL;
$arguments43['state'] = 'default';
$arguments43['alternativeMarkupIdentifier'] = NULL;
$arguments43['identifier'] = 'actions-view';

$output38 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments43, $renderChildrenClosure44, $renderingContext);

$output38 .= '
                            </a>
                        ';
return $output38;
};
$arguments33 = array();
$arguments33['then'] = NULL;
$arguments33['else'] = NULL;
$arguments33['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array35 = array();
$array36 = array (
);$array35['0'] = $renderingContext->getVariableProvider()->getByPath('languageColumn.allowViewPage', $array36);

$expression37 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments33['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression37(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array35)
					),
					$renderingContext
				);
$arguments33['__thenClosure'] = $renderChildrenClosure34;

$output32 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments33, $renderChildrenClosure34, $renderingContext);

$output32 .= '
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure46 = function() use ($renderingContext, $self) {
$output50 = '';

$output50 .= '
                            <a href="';
$array51 = array (
);
$output50 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('languageColumn.pageEditUrl', $array51)]);

$output50 .= '" class="btn btn-default btn-sm" title="';
$array52 = array (
);
$output50 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('languageColumn.pageEditTitle', $array52)]);

$output50 .= '">
                                ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure54 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments53 = array();
$arguments53['identifier'] = NULL;
$arguments53['size'] = 'small';
$arguments53['overlay'] = NULL;
$arguments53['state'] = 'default';
$arguments53['alternativeMarkupIdentifier'] = NULL;
$arguments53['identifier'] = 'actions-open';

$output50 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments53, $renderChildrenClosure54, $renderingContext);

$output50 .= '
                            </a>
                        ';
return $output50;
};
$arguments45 = array();
$arguments45['then'] = NULL;
$arguments45['else'] = NULL;
$arguments45['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array47 = array();
$array48 = array (
);$array47['0'] = $renderingContext->getVariableProvider()->getByPath('languageColumn.allowEditPage', $array48);

$expression49 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments45['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression49(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array47)
					),
					$renderingContext
				);
$arguments45['__thenClosure'] = $renderChildrenClosure46;

$output32 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments45, $renderChildrenClosure46, $renderingContext);

$output32 .= '
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure56 = function() use ($renderingContext, $self) {
$output62 = '';

$output62 .= '
                            <a href="#" class="btn btn-default btn-sm t3js-localize disabled"
                                title="';
$array63 = array (
);
$output62 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('languageColumn.context.translatePageTitle', $array63)]);

$output62 .= '"
                                data-page="';
$array64 = array (
);
$output62 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('languageColumn.context.localizedPageRecord.title', $array64)]);

$output62 .= '"
                                data-has-elements="';
// Rendering TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\Expression\CastingExpressionNode node
$string65 = '{languageColumn.translationData.hasTranslations as integer}';
$array66 = array (
  0 => '{languageColumn.translationData.hasTranslations as integer}',
  1 => '{languageColumn.translationData.hasTranslations as integer}',
);

$output62 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [\TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\Expression\CastingExpressionNode::evaluateExpression($renderingContext, $string65, $array66)]);

$output62 .= '"
                                data-allow-copy="';
// Rendering TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\Expression\CastingExpressionNode node
$string67 = '{languageColumn.allowTranslateCopy as integer}';
$array68 = array (
  0 => '{languageColumn.allowTranslateCopy as integer}',
  1 => '{languageColumn.allowTranslateCopy as integer}',
);

$output62 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [\TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\Expression\CastingExpressionNode::evaluateExpression($renderingContext, $string67, $array68)]);

$output62 .= '"
                                data-allow-translate="';
// Rendering TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\Expression\CastingExpressionNode node
$string69 = '{languageColumn.allowTranslate as integer}';
$array70 = array (
  0 => '{languageColumn.allowTranslate as integer}',
  1 => '{languageColumn.allowTranslate as integer}',
);

$output62 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [\TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\Expression\CastingExpressionNode::evaluateExpression($renderingContext, $string69, $array70)]);

$output62 .= '"
                                data-table="tt_content"
                                data-page-id="';
$array71 = array (
);
$output62 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('context.pageId', $array71)]);

$output62 .= '"
                                data-language-id="';
$array72 = array (
);
$output62 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('languageColumn.context.siteLanguage.languageId', $array72)]);

$output62 .= '"
                                data-language-name="';
$array73 = array (
);
$output62 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('languageColumn.context.siteLanguage.title', $array73)]);

$output62 .= '">
                                ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure75 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments74 = array();
$arguments74['identifier'] = NULL;
$arguments74['size'] = 'small';
$arguments74['overlay'] = NULL;
$arguments74['state'] = 'default';
$arguments74['alternativeMarkupIdentifier'] = NULL;
$arguments74['identifier'] = 'actions-localize';

$output62 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments74, $renderChildrenClosure75, $renderingContext);

$output62 .= '
                                ';
$array76 = array (
);
$output62 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('languageColumn.translatePageTitle', $array76)]);

$output62 .= '
                            </a>
                        ';
return $output62;
};
$arguments55 = array();
$arguments55['then'] = NULL;
$arguments55['else'] = NULL;
$arguments55['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array57 = array();
$array58 = array (
);$array57['0'] = $renderingContext->getVariableProvider()->getByPath('allowEditContent', $array58);
$array57['1'] = ' && ';
$array59 = array (
);$array57['2'] = $renderingContext->getVariableProvider()->getByPath('languageColumn.context.siteLanguage.languageId', $array59);
$array57['3'] = ' && ';
$array60 = array (
);$array57['4'] = $renderingContext->getVariableProvider()->getByPath('languageColumn.translationData.untranslatedRecordUids', $array60);

$expression61 = function($context) {return ((TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) && TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"])) && TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node4"]));};
$arguments55['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression61(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array57)
					),
					$renderingContext
				);
$arguments55['__thenClosure'] = $renderChildrenClosure56;

$output32 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments55, $renderChildrenClosure56, $renderingContext);

$output32 .= '
                    </div>
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure78 = function() use ($renderingContext, $self) {
$array79 = array (
);return $renderingContext->getVariableProvider()->getByPath('languageColumn.pageIcon', $array79);
};
$arguments77 = array();
$arguments77['value'] = NULL;

$output32 .= isset($arguments77['value']) ? $arguments77['value'] : $renderChildrenClosure78();

$output32 .= '
                    ';
$array80 = array (
);
$output32 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('languageColumn.context.localizedPageTitle', $array80)]);

$output32 .= '
                </td>
            ';
return $output32;
};
$arguments29 = array();
$arguments29['each'] = NULL;
$arguments29['as'] = NULL;
$arguments29['key'] = NULL;
$arguments29['reverse'] = false;
$arguments29['iteration'] = NULL;
$array31 = array (
);$arguments29['each'] = $renderingContext->getVariableProvider()->getByPath('languageColumns', $array31);
$arguments29['as'] = 'languageColumn';

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments29, $renderChildrenClosure30, $renderingContext);

$output0 .= '
        </tr>
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure82 = function() use ($renderingContext, $self) {
$output274 = '';

$output274 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure276 = function() use ($renderingContext, $self) {
$output277 = '';

$output277 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure279 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments278 = array();
$arguments278['value'] = NULL;
$arguments278['name'] = NULL;
$arguments278['name'] = 'grid';
$array280 = array (
);$arguments278['value'] = $renderingContext->getVariableProvider()->getByPath('languageColumns.0.grid', $array280);
$renderChildrenClosure279 = ($arguments278['value'] !== null) ? function() use ($arguments278) { return $arguments278['value']; } : $renderChildrenClosure279;
$output277 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments278, $renderChildrenClosure279, $renderingContext)]);

$output277 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure282 = function() use ($renderingContext, $self) {
$output284 = '';

$output284 .= '
                    <tr>
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure286 = function() use ($renderingContext, $self) {
$output288 = '';

$output288 .= '
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure290 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments289 = array();
$arguments289['value'] = NULL;
$arguments289['name'] = NULL;
$arguments289['name'] = 'column';
// Rendering ViewHelper TYPO3\CMS\Backend\ViewHelpers\LanguageColumnViewHelper
$renderChildrenClosure292 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments291 = array();
$arguments291['languageColumn'] = NULL;
$arguments291['columnNumber'] = NULL;
$array293 = array (
);$arguments291['languageColumn'] = $renderingContext->getVariableProvider()->getByPath('languageColumn', $array293);
$array294 = array (
);$arguments291['columnNumber'] = $renderingContext->getVariableProvider()->getByPath('columnNumber', $array294);
$arguments289['value'] = TYPO3\CMS\Backend\ViewHelpers\LanguageColumnViewHelper::renderStatic($arguments291, $renderChildrenClosure292, $renderingContext);
$renderChildrenClosure290 = ($arguments289['value'] !== null) ? function() use ($arguments289) { return $arguments289['value']; } : $renderChildrenClosure290;
$output288 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments289, $renderChildrenClosure290, $renderingContext)]);

$output288 .= '
                            <td data-colpos="';
$array295 = array (
);
$output288 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('column.columnNumber', $array295)]);

$output288 .= '" valign="top">
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure297 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments296 = array();
$arguments296['section'] = NULL;
$arguments296['partial'] = NULL;
$arguments296['delegate'] = NULL;
$arguments296['renderable'] = NULL;
$arguments296['arguments'] = array (
);
$arguments296['optional'] = false;
$arguments296['default'] = NULL;
$arguments296['contentAs'] = NULL;
$arguments296['debug'] = true;
$arguments296['partial'] = 'PageLayout/Grid/ColumnHeader';
$arguments296['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output288 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments296, $renderChildrenClosure297, $renderingContext);

$output288 .= '
                            </td>
                        ';
return $output288;
};
$arguments285 = array();
$arguments285['each'] = NULL;
$arguments285['as'] = NULL;
$arguments285['key'] = NULL;
$arguments285['reverse'] = false;
$arguments285['iteration'] = NULL;
$array287 = array (
);$arguments285['each'] = $renderingContext->getVariableProvider()->getByPath('languageColumns', $array287);
$arguments285['as'] = 'languageColumn';

$output284 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments285, $renderChildrenClosure286, $renderingContext);

$output284 .= '
                    </tr>
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure300 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments299 = array();
$arguments299['value'] = NULL;
$arguments299['name'] = NULL;
$arguments299['name'] = 'column';
// Rendering ViewHelper TYPO3\CMS\Backend\ViewHelpers\LanguageColumnViewHelper
$renderChildrenClosure302 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments301 = array();
$arguments301['languageColumn'] = NULL;
$arguments301['columnNumber'] = NULL;
$array303 = array (
);$arguments301['languageColumn'] = $renderingContext->getVariableProvider()->getByPath('languageColumns.0', $array303);
$array304 = array (
);$arguments301['columnNumber'] = $renderingContext->getVariableProvider()->getByPath('columnNumber', $array304);
$arguments299['value'] = TYPO3\CMS\Backend\ViewHelpers\LanguageColumnViewHelper::renderStatic($arguments301, $renderChildrenClosure302, $renderingContext);
$renderChildrenClosure300 = ($arguments299['value'] !== null) ? function() use ($arguments299) { return $arguments299['value']; } : $renderChildrenClosure300;
$output284 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments299, $renderChildrenClosure300, $renderingContext)]);

$output284 .= '
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure306 = function() use ($renderingContext, $self) {
$output308 = '';

$output308 .= '
                        <tr>
                            <td class="t3-grid-cell" valign="top" data-colpos="';
$array309 = array (
);
$output308 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('column.columnNumber', $array309)]);

$output308 .= '">
                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure311 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments310 = array();
$arguments310['value'] = NULL;
$arguments310['name'] = NULL;
$arguments310['name'] = 'column';
// Rendering ViewHelper TYPO3\CMS\Backend\ViewHelpers\LanguageColumnViewHelper
$renderChildrenClosure313 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments312 = array();
$arguments312['languageColumn'] = NULL;
$arguments312['columnNumber'] = NULL;
$array314 = array (
);$arguments312['languageColumn'] = $renderingContext->getVariableProvider()->getByPath('languageColumns.0', $array314);
$array315 = array (
);$arguments312['columnNumber'] = $renderingContext->getVariableProvider()->getByPath('columnNumber', $array315);
$arguments310['value'] = TYPO3\CMS\Backend\ViewHelpers\LanguageColumnViewHelper::renderStatic($arguments312, $renderChildrenClosure313, $renderingContext);
$renderChildrenClosure311 = ($arguments310['value'] !== null) ? function() use ($arguments310) { return $arguments310['value']; } : $renderChildrenClosure311;
$output308 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments310, $renderChildrenClosure311, $renderingContext)]);

$output308 .= '
                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure317 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments316 = array();
$arguments316['value'] = NULL;
$arguments316['name'] = NULL;
$arguments316['name'] = 'item';
$array318 = array (
);$arguments316['value'] = $renderingContext->getVariableProvider()->getByPath('gridItem', $array318);
$renderChildrenClosure317 = ($arguments316['value'] !== null) ? function() use ($arguments316) { return $arguments316['value']; } : $renderChildrenClosure317;
$output308 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments316, $renderChildrenClosure317, $renderingContext)]);

$output308 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure320 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments319 = array();
$arguments319['section'] = NULL;
$arguments319['partial'] = NULL;
$arguments319['delegate'] = NULL;
$arguments319['renderable'] = NULL;
$arguments319['arguments'] = array (
);
$arguments319['optional'] = false;
$arguments319['default'] = NULL;
$arguments319['contentAs'] = NULL;
$arguments319['debug'] = true;
$arguments319['partial'] = 'PageLayout/Record';
$arguments319['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output308 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments319, $renderChildrenClosure320, $renderingContext);

$output308 .= '
                            </td>
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure323 = function() use ($renderingContext, $self) {
$output325 = '';

$output325 .= '
                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure327 = function() use ($renderingContext, $self) {
$output331 = '';

$output331 .= '
                                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure333 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments332 = array();
$arguments332['value'] = NULL;
$arguments332['name'] = NULL;
$arguments332['name'] = 'column';
// Rendering ViewHelper TYPO3\CMS\Backend\ViewHelpers\LanguageColumnViewHelper
$renderChildrenClosure335 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments334 = array();
$arguments334['languageColumn'] = NULL;
$arguments334['columnNumber'] = NULL;
$array336 = array (
);$arguments334['languageColumn'] = $renderingContext->getVariableProvider()->getByPath('languageColumn', $array336);
$array337 = array (
);$arguments334['columnNumber'] = $renderingContext->getVariableProvider()->getByPath('columnNumber', $array337);
$arguments332['value'] = TYPO3\CMS\Backend\ViewHelpers\LanguageColumnViewHelper::renderStatic($arguments334, $renderChildrenClosure335, $renderingContext);
$renderChildrenClosure333 = ($arguments332['value'] !== null) ? function() use ($arguments332) { return $arguments332['value']; } : $renderChildrenClosure333;
$output331 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments332, $renderChildrenClosure333, $renderingContext)]);

$output331 .= '
                                    <td class="t3-grid-cell" valign="top" data-colpos="';
$array338 = array (
);
$output331 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('column.columnNumber', $array338)]);

$output331 .= '">
                                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure340 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments339 = array();
$arguments339['value'] = NULL;
$arguments339['name'] = NULL;
$arguments339['name'] = 'languageId';
$array341 = array (
);$arguments339['value'] = $renderingContext->getVariableProvider()->getByPath('languageColumn.context.siteLanguage.languageId', $array341);
$renderChildrenClosure340 = ($arguments339['value'] !== null) ? function() use ($arguments339) { return $arguments339['value']; } : $renderChildrenClosure340;
$output331 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments339, $renderChildrenClosure340, $renderingContext)]);

$output331 .= '
                                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure343 = function() use ($renderingContext, $self) {
$output383 = '';

$output383 .= '
                                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure385 = function() use ($renderingContext, $self) {
$output386 = '';

$output386 .= '
                                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure388 = function() use ($renderingContext, $self) {
$output392 = '';

$output392 .= '
                                                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure394 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments393 = array();
$arguments393['value'] = NULL;
$arguments393['name'] = NULL;
$arguments393['name'] = 'item';
$array395 = array (
);$arguments393['value'] = $renderingContext->getVariableProvider()->getByPath('gridItem.translations.{languageId}', $array395);
$renderChildrenClosure394 = ($arguments393['value'] !== null) ? function() use ($arguments393) { return $arguments393['value']; } : $renderChildrenClosure394;
$output392 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments393, $renderChildrenClosure394, $renderingContext)]);

$output392 .= '
                                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure397 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments396 = array();
$arguments396['section'] = NULL;
$arguments396['partial'] = NULL;
$arguments396['delegate'] = NULL;
$arguments396['renderable'] = NULL;
$arguments396['arguments'] = array (
);
$arguments396['optional'] = false;
$arguments396['default'] = NULL;
$arguments396['contentAs'] = NULL;
$arguments396['debug'] = true;
$arguments396['partial'] = 'PageLayout/Record';
$arguments396['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output392 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments396, $renderChildrenClosure397, $renderingContext);

$output392 .= '
                                                ';
return $output392;
};
$arguments387 = array();
$arguments387['then'] = NULL;
$arguments387['else'] = NULL;
$arguments387['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array389 = array();
$array390 = array (
);$array389['0'] = $renderingContext->getVariableProvider()->getByPath('gridItem.translations.{languageId}', $array390);

$expression391 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments387['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression391(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array389)
					),
					$renderingContext
				);
$arguments387['__thenClosure'] = $renderChildrenClosure388;

$output386 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments387, $renderChildrenClosure388, $renderingContext);

$output386 .= '
                                            ';
return $output386;
};
$arguments384 = array();

$output383 .= '';

$output383 .= '
                                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure400 = function() use ($renderingContext, $self) {
$output401 = '';

$output401 .= '
                                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure403 = function() use ($renderingContext, $self) {
$output407 = '';

$output407 .= '
                                                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure409 = function() use ($renderingContext, $self) {
$array410 = array (
);return $renderingContext->getVariableProvider()->getByPath('languageColumns.{languageId}', $array410);
};
$arguments408 = array();
$arguments408['value'] = NULL;
$arguments408['name'] = NULL;
$arguments408['name'] = 'languageColumnNonConnected';
$renderChildrenClosure409 = ($arguments408['value'] !== null) ? function() use ($arguments408) { return $arguments408['value']; } : $renderChildrenClosure409;
$output407 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments408, $renderChildrenClosure409, $renderingContext)]);

$output407 .= '
                                                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure412 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments411 = array();
$arguments411['value'] = NULL;
$arguments411['name'] = NULL;
$arguments411['name'] = 'column';
// Rendering ViewHelper TYPO3\CMS\Backend\ViewHelpers\LanguageColumnViewHelper
$renderChildrenClosure414 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments413 = array();
$arguments413['languageColumn'] = NULL;
$arguments413['columnNumber'] = NULL;
$array415 = array (
);$arguments413['languageColumn'] = $renderingContext->getVariableProvider()->getByPath('languageColumnNonConnected', $array415);
$array416 = array (
);$arguments413['columnNumber'] = $renderingContext->getVariableProvider()->getByPath('columnNumber', $array416);
$arguments411['value'] = TYPO3\CMS\Backend\ViewHelpers\LanguageColumnViewHelper::renderStatic($arguments413, $renderChildrenClosure414, $renderingContext);
$renderChildrenClosure412 = ($arguments411['value'] !== null) ? function() use ($arguments411) { return $arguments411['value']; } : $renderChildrenClosure412;
$output407 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments411, $renderChildrenClosure412, $renderingContext)]);

$output407 .= '
                                                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure418 = function() use ($renderingContext, $self) {
$output420 = '';

$output420 .= '
                                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure422 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments421 = array();
$arguments421['section'] = NULL;
$arguments421['partial'] = NULL;
$arguments421['delegate'] = NULL;
$arguments421['renderable'] = NULL;
$arguments421['arguments'] = array (
);
$arguments421['optional'] = false;
$arguments421['default'] = NULL;
$arguments421['contentAs'] = NULL;
$arguments421['debug'] = true;
$arguments421['partial'] = 'PageLayout/Record';
$arguments421['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output420 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments421, $renderChildrenClosure422, $renderingContext);

$output420 .= '
                                                    ';
return $output420;
};
$arguments417 = array();
$arguments417['each'] = NULL;
$arguments417['as'] = NULL;
$arguments417['key'] = NULL;
$arguments417['reverse'] = false;
$arguments417['iteration'] = NULL;
$array419 = array (
);$arguments417['each'] = $renderingContext->getVariableProvider()->getByPath('column.items', $array419);
$arguments417['as'] = 'item';

$output407 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments417, $renderChildrenClosure418, $renderingContext);

$output407 .= '
                                                ';
return $output407;
};
$arguments402 = array();
$arguments402['then'] = NULL;
$arguments402['else'] = NULL;
$arguments402['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array404 = array();
$array405 = array (
);$array404['0'] = $renderingContext->getVariableProvider()->getByPath('itemIterator.isFirst', $array405);

$expression406 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments402['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression406(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array404)
					),
					$renderingContext
				);
$arguments402['__thenClosure'] = $renderChildrenClosure403;

$output401 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments402, $renderChildrenClosure403, $renderingContext);

$output401 .= '
                                            ';
return $output401;
};
$arguments399 = array();
$arguments399['if'] = NULL;

$output383 .= '';

$output383 .= '
                                        ';
return $output383;
};
$arguments342 = array();
$arguments342['then'] = NULL;
$arguments342['else'] = NULL;
$arguments342['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array380 = array();
$array381 = array (
);$array380['0'] = $renderingContext->getVariableProvider()->getByPath('languageColumn.translationData.mode', $array381);
$array380['1'] = ' == \'connected\'';

$expression382 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == 'connected');};
$arguments342['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression382(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array380)
					),
					$renderingContext
				);
$arguments342['__thenClosure'] = function() use ($renderingContext, $self) {
$output344 = '';

$output344 .= '
                                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure346 = function() use ($renderingContext, $self) {
$output350 = '';

$output350 .= '
                                                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure352 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments351 = array();
$arguments351['value'] = NULL;
$arguments351['name'] = NULL;
$arguments351['name'] = 'item';
$array353 = array (
);$arguments351['value'] = $renderingContext->getVariableProvider()->getByPath('gridItem.translations.{languageId}', $array353);
$renderChildrenClosure352 = ($arguments351['value'] !== null) ? function() use ($arguments351) { return $arguments351['value']; } : $renderChildrenClosure352;
$output350 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments351, $renderChildrenClosure352, $renderingContext)]);

$output350 .= '
                                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure355 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments354 = array();
$arguments354['section'] = NULL;
$arguments354['partial'] = NULL;
$arguments354['delegate'] = NULL;
$arguments354['renderable'] = NULL;
$arguments354['arguments'] = array (
);
$arguments354['optional'] = false;
$arguments354['default'] = NULL;
$arguments354['contentAs'] = NULL;
$arguments354['debug'] = true;
$arguments354['partial'] = 'PageLayout/Record';
$arguments354['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output350 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments354, $renderChildrenClosure355, $renderingContext);

$output350 .= '
                                                ';
return $output350;
};
$arguments345 = array();
$arguments345['then'] = NULL;
$arguments345['else'] = NULL;
$arguments345['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array347 = array();
$array348 = array (
);$array347['0'] = $renderingContext->getVariableProvider()->getByPath('gridItem.translations.{languageId}', $array348);

$expression349 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments345['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression349(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array347)
					),
					$renderingContext
				);
$arguments345['__thenClosure'] = $renderChildrenClosure346;

$output344 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments345, $renderChildrenClosure346, $renderingContext);

$output344 .= '
                                            ';
return $output344;
};
$arguments342['__elseClosures'][] = function() use ($renderingContext, $self) {
$output357 = '';

$output357 .= '
                                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure359 = function() use ($renderingContext, $self) {
$output363 = '';

$output363 .= '
                                                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure365 = function() use ($renderingContext, $self) {
$array366 = array (
);return $renderingContext->getVariableProvider()->getByPath('languageColumns.{languageId}', $array366);
};
$arguments364 = array();
$arguments364['value'] = NULL;
$arguments364['name'] = NULL;
$arguments364['name'] = 'languageColumnNonConnected';
$renderChildrenClosure365 = ($arguments364['value'] !== null) ? function() use ($arguments364) { return $arguments364['value']; } : $renderChildrenClosure365;
$output363 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments364, $renderChildrenClosure365, $renderingContext)]);

$output363 .= '
                                                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure368 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments367 = array();
$arguments367['value'] = NULL;
$arguments367['name'] = NULL;
$arguments367['name'] = 'column';
// Rendering ViewHelper TYPO3\CMS\Backend\ViewHelpers\LanguageColumnViewHelper
$renderChildrenClosure370 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments369 = array();
$arguments369['languageColumn'] = NULL;
$arguments369['columnNumber'] = NULL;
$array371 = array (
);$arguments369['languageColumn'] = $renderingContext->getVariableProvider()->getByPath('languageColumnNonConnected', $array371);
$array372 = array (
);$arguments369['columnNumber'] = $renderingContext->getVariableProvider()->getByPath('columnNumber', $array372);
$arguments367['value'] = TYPO3\CMS\Backend\ViewHelpers\LanguageColumnViewHelper::renderStatic($arguments369, $renderChildrenClosure370, $renderingContext);
$renderChildrenClosure368 = ($arguments367['value'] !== null) ? function() use ($arguments367) { return $arguments367['value']; } : $renderChildrenClosure368;
$output363 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments367, $renderChildrenClosure368, $renderingContext)]);

$output363 .= '
                                                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure374 = function() use ($renderingContext, $self) {
$output376 = '';

$output376 .= '
                                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure378 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments377 = array();
$arguments377['section'] = NULL;
$arguments377['partial'] = NULL;
$arguments377['delegate'] = NULL;
$arguments377['renderable'] = NULL;
$arguments377['arguments'] = array (
);
$arguments377['optional'] = false;
$arguments377['default'] = NULL;
$arguments377['contentAs'] = NULL;
$arguments377['debug'] = true;
$arguments377['partial'] = 'PageLayout/Record';
$arguments377['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output376 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments377, $renderChildrenClosure378, $renderingContext);

$output376 .= '
                                                    ';
return $output376;
};
$arguments373 = array();
$arguments373['each'] = NULL;
$arguments373['as'] = NULL;
$arguments373['key'] = NULL;
$arguments373['reverse'] = false;
$arguments373['iteration'] = NULL;
$array375 = array (
);$arguments373['each'] = $renderingContext->getVariableProvider()->getByPath('column.items', $array375);
$arguments373['as'] = 'item';

$output363 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments373, $renderChildrenClosure374, $renderingContext);

$output363 .= '
                                                ';
return $output363;
};
$arguments358 = array();
$arguments358['then'] = NULL;
$arguments358['else'] = NULL;
$arguments358['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array360 = array();
$array361 = array (
);$array360['0'] = $renderingContext->getVariableProvider()->getByPath('itemIterator.isFirst', $array361);

$expression362 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments358['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression362(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array360)
					),
					$renderingContext
				);
$arguments358['__thenClosure'] = $renderChildrenClosure359;

$output357 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments358, $renderChildrenClosure359, $renderingContext);

$output357 .= '
                                            ';
return $output357;
};

$output331 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments342, $renderChildrenClosure343, $renderingContext);

$output331 .= '
                                    </td>
                                ';
return $output331;
};
$arguments326 = array();
$arguments326['then'] = NULL;
$arguments326['else'] = NULL;
$arguments326['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array328 = array();
$array329 = array (
);$array328['0'] = $renderingContext->getVariableProvider()->getByPath('languageColumn.context.siteLanguage.languageId', $array329);
$array328['1'] = ' > 0';

$expression330 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) > 0);};
$arguments326['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression330(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array328)
					),
					$renderingContext
				);
$arguments326['__thenClosure'] = $renderChildrenClosure327;

$output325 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments326, $renderChildrenClosure327, $renderingContext);

$output325 .= '
                            ';
return $output325;
};
$arguments322 = array();
$arguments322['each'] = NULL;
$arguments322['as'] = NULL;
$arguments322['key'] = NULL;
$arguments322['reverse'] = false;
$arguments322['iteration'] = NULL;
$array324 = array (
);$arguments322['each'] = $renderingContext->getVariableProvider()->getByPath('languageColumns', $array324);
$arguments322['as'] = 'languageColumn';

$output308 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments322, $renderChildrenClosure323, $renderingContext);

$output308 .= '
                        </tr>
                    ';
return $output308;
};
$arguments305 = array();
$arguments305['each'] = NULL;
$arguments305['as'] = NULL;
$arguments305['key'] = NULL;
$arguments305['reverse'] = false;
$arguments305['iteration'] = NULL;
$array307 = array (
);$arguments305['each'] = $renderingContext->getVariableProvider()->getByPath('column.items', $array307);
$arguments305['as'] = 'gridItem';
$arguments305['iteration'] = 'itemIterator';

$output284 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments305, $renderChildrenClosure306, $renderingContext);

$output284 .= '
                    <tr>
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure425 = function() use ($renderingContext, $self) {
$output427 = '';

$output427 .= '
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure429 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments428 = array();
$arguments428['value'] = NULL;
$arguments428['name'] = NULL;
$arguments428['name'] = 'column';
// Rendering ViewHelper TYPO3\CMS\Backend\ViewHelpers\LanguageColumnViewHelper
$renderChildrenClosure431 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments430 = array();
$arguments430['languageColumn'] = NULL;
$arguments430['columnNumber'] = NULL;
$array432 = array (
);$arguments430['languageColumn'] = $renderingContext->getVariableProvider()->getByPath('languageColumn', $array432);
$array433 = array (
);$arguments430['columnNumber'] = $renderingContext->getVariableProvider()->getByPath('columnNumber', $array433);
$arguments428['value'] = TYPO3\CMS\Backend\ViewHelpers\LanguageColumnViewHelper::renderStatic($arguments430, $renderChildrenClosure431, $renderingContext);
$renderChildrenClosure429 = ($arguments428['value'] !== null) ? function() use ($arguments428) { return $arguments428['value']; } : $renderChildrenClosure429;
$output427 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments428, $renderChildrenClosure429, $renderingContext)]);

$output427 .= '
                            <td data-colpos="';
$array434 = array (
);
$output427 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('column.columnNumber', $array434)]);

$output427 .= '" valign="top">
                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure436 = function() use ($renderingContext, $self) {
$array437 = array (
);return $renderingContext->getVariableProvider()->getByPath('column.afterSectionMarkup', $array437);
};
$arguments435 = array();
$arguments435['value'] = NULL;

$output427 .= isset($arguments435['value']) ? $arguments435['value'] : $renderChildrenClosure436();

$output427 .= '
                            </td>
                        ';
return $output427;
};
$arguments424 = array();
$arguments424['each'] = NULL;
$arguments424['as'] = NULL;
$arguments424['key'] = NULL;
$arguments424['reverse'] = false;
$arguments424['iteration'] = NULL;
$array426 = array (
);$arguments424['each'] = $renderingContext->getVariableProvider()->getByPath('languageColumns', $array426);
$arguments424['as'] = 'languageColumn';

$output284 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments424, $renderChildrenClosure425, $renderingContext);

$output284 .= '
                    </tr>
                ';
return $output284;
};
$arguments281 = array();
$arguments281['each'] = NULL;
$arguments281['as'] = NULL;
$arguments281['key'] = NULL;
$arguments281['reverse'] = false;
$arguments281['iteration'] = NULL;
$array283 = array (
);$arguments281['each'] = $renderingContext->getVariableProvider()->getByPath('context.drawingConfiguration.activeColumns', $array283);
$arguments281['as'] = 'columnNumber';

$output277 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments281, $renderChildrenClosure282, $renderingContext);

$output277 .= '
            ';
return $output277;
};
$arguments275 = array();

$output274 .= '';

$output274 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure439 = function() use ($renderingContext, $self) {
$output440 = '';

$output440 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure442 = function() use ($renderingContext, $self) {
$output444 = '';

$output444 .= '
                    <tr>
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure446 = function() use ($renderingContext, $self) {
$output448 = '';

$output448 .= '
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure450 = function() use ($renderingContext, $self) {
$output454 = '';

$output454 .= '
                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure456 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments455 = array();
$arguments455['value'] = NULL;
$arguments455['name'] = NULL;
$arguments455['name'] = 'grid';
$array457 = array (
);$arguments455['value'] = $renderingContext->getVariableProvider()->getByPath('languageColumn.grid', $array457);
$renderChildrenClosure456 = ($arguments455['value'] !== null) ? function() use ($arguments455) { return $arguments455['value']; } : $renderChildrenClosure456;
$output454 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments455, $renderChildrenClosure456, $renderingContext)]);

$output454 .= '
                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure459 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments458 = array();
$arguments458['value'] = NULL;
$arguments458['name'] = NULL;
$arguments458['name'] = 'column';
// Rendering ViewHelper TYPO3\CMS\Backend\ViewHelpers\LanguageColumnViewHelper
$renderChildrenClosure461 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments460 = array();
$arguments460['languageColumn'] = NULL;
$arguments460['columnNumber'] = NULL;
$array462 = array (
);$arguments460['languageColumn'] = $renderingContext->getVariableProvider()->getByPath('languageColumn', $array462);
$array463 = array (
);$arguments460['columnNumber'] = $renderingContext->getVariableProvider()->getByPath('columnNumber', $array463);
$arguments458['value'] = TYPO3\CMS\Backend\ViewHelpers\LanguageColumnViewHelper::renderStatic($arguments460, $renderChildrenClosure461, $renderingContext);
$renderChildrenClosure459 = ($arguments458['value'] !== null) ? function() use ($arguments458) { return $arguments458['value']; } : $renderChildrenClosure459;
$output454 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments458, $renderChildrenClosure459, $renderingContext)]);

$output454 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure465 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments464 = array();
$arguments464['section'] = NULL;
$arguments464['partial'] = NULL;
$arguments464['delegate'] = NULL;
$arguments464['renderable'] = NULL;
$arguments464['arguments'] = array (
);
$arguments464['optional'] = false;
$arguments464['default'] = NULL;
$arguments464['contentAs'] = NULL;
$arguments464['debug'] = true;
$arguments464['partial'] = 'PageLayout/Grid/Column';
$arguments464['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output454 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments464, $renderChildrenClosure465, $renderingContext);

$output454 .= '
                            ';
return $output454;
};
$arguments449 = array();
$arguments449['then'] = NULL;
$arguments449['else'] = NULL;
$arguments449['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array451 = array();
$array452 = array (
);$array451['0'] = $renderingContext->getVariableProvider()->getByPath('languageColumn.grid.columns', $array452);

$expression453 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments449['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression453(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array451)
					),
					$renderingContext
				);
$arguments449['__thenClosure'] = $renderChildrenClosure450;

$output448 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments449, $renderChildrenClosure450, $renderingContext);

$output448 .= '
                        ';
return $output448;
};
$arguments445 = array();
$arguments445['each'] = NULL;
$arguments445['as'] = NULL;
$arguments445['key'] = NULL;
$arguments445['reverse'] = false;
$arguments445['iteration'] = NULL;
$array447 = array (
);$arguments445['each'] = $renderingContext->getVariableProvider()->getByPath('languageColumns', $array447);
$arguments445['as'] = 'languageColumn';

$output444 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments445, $renderChildrenClosure446, $renderingContext);

$output444 .= '
                    </tr>
                ';
return $output444;
};
$arguments441 = array();
$arguments441['each'] = NULL;
$arguments441['as'] = NULL;
$arguments441['key'] = NULL;
$arguments441['reverse'] = false;
$arguments441['iteration'] = NULL;
$array443 = array (
);$arguments441['each'] = $renderingContext->getVariableProvider()->getByPath('context.drawingConfiguration.activeColumns', $array443);
$arguments441['as'] = 'columnNumber';

$output440 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments441, $renderChildrenClosure442, $renderingContext);

$output440 .= '
            ';
return $output440;
};
$arguments438 = array();
$arguments438['if'] = NULL;

$output274 .= '';

$output274 .= '
        ';
return $output274;
};
$arguments81 = array();
$arguments81['then'] = NULL;
$arguments81['else'] = NULL;
$arguments81['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array271 = array();
$array272 = array (
);$array271['0'] = $renderingContext->getVariableProvider()->getByPath('context.drawingConfiguration.defaultLanguageBinding', $array272);

$expression273 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments81['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression273(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array271)
					),
					$renderingContext
				);
$arguments81['__thenClosure'] = function() use ($renderingContext, $self) {
$output83 = '';

$output83 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure85 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments84 = array();
$arguments84['value'] = NULL;
$arguments84['name'] = NULL;
$arguments84['name'] = 'grid';
$array86 = array (
);$arguments84['value'] = $renderingContext->getVariableProvider()->getByPath('languageColumns.0.grid', $array86);
$renderChildrenClosure85 = ($arguments84['value'] !== null) ? function() use ($arguments84) { return $arguments84['value']; } : $renderChildrenClosure85;
$output83 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments84, $renderChildrenClosure85, $renderingContext)]);

$output83 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure88 = function() use ($renderingContext, $self) {
$output90 = '';

$output90 .= '
                    <tr>
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure92 = function() use ($renderingContext, $self) {
$output94 = '';

$output94 .= '
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure96 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments95 = array();
$arguments95['value'] = NULL;
$arguments95['name'] = NULL;
$arguments95['name'] = 'column';
// Rendering ViewHelper TYPO3\CMS\Backend\ViewHelpers\LanguageColumnViewHelper
$renderChildrenClosure98 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments97 = array();
$arguments97['languageColumn'] = NULL;
$arguments97['columnNumber'] = NULL;
$array99 = array (
);$arguments97['languageColumn'] = $renderingContext->getVariableProvider()->getByPath('languageColumn', $array99);
$array100 = array (
);$arguments97['columnNumber'] = $renderingContext->getVariableProvider()->getByPath('columnNumber', $array100);
$arguments95['value'] = TYPO3\CMS\Backend\ViewHelpers\LanguageColumnViewHelper::renderStatic($arguments97, $renderChildrenClosure98, $renderingContext);
$renderChildrenClosure96 = ($arguments95['value'] !== null) ? function() use ($arguments95) { return $arguments95['value']; } : $renderChildrenClosure96;
$output94 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments95, $renderChildrenClosure96, $renderingContext)]);

$output94 .= '
                            <td data-colpos="';
$array101 = array (
);
$output94 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('column.columnNumber', $array101)]);

$output94 .= '" valign="top">
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure103 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments102 = array();
$arguments102['section'] = NULL;
$arguments102['partial'] = NULL;
$arguments102['delegate'] = NULL;
$arguments102['renderable'] = NULL;
$arguments102['arguments'] = array (
);
$arguments102['optional'] = false;
$arguments102['default'] = NULL;
$arguments102['contentAs'] = NULL;
$arguments102['debug'] = true;
$arguments102['partial'] = 'PageLayout/Grid/ColumnHeader';
$arguments102['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output94 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments102, $renderChildrenClosure103, $renderingContext);

$output94 .= '
                            </td>
                        ';
return $output94;
};
$arguments91 = array();
$arguments91['each'] = NULL;
$arguments91['as'] = NULL;
$arguments91['key'] = NULL;
$arguments91['reverse'] = false;
$arguments91['iteration'] = NULL;
$array93 = array (
);$arguments91['each'] = $renderingContext->getVariableProvider()->getByPath('languageColumns', $array93);
$arguments91['as'] = 'languageColumn';

$output90 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments91, $renderChildrenClosure92, $renderingContext);

$output90 .= '
                    </tr>
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure106 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments105 = array();
$arguments105['value'] = NULL;
$arguments105['name'] = NULL;
$arguments105['name'] = 'column';
// Rendering ViewHelper TYPO3\CMS\Backend\ViewHelpers\LanguageColumnViewHelper
$renderChildrenClosure108 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments107 = array();
$arguments107['languageColumn'] = NULL;
$arguments107['columnNumber'] = NULL;
$array109 = array (
);$arguments107['languageColumn'] = $renderingContext->getVariableProvider()->getByPath('languageColumns.0', $array109);
$array110 = array (
);$arguments107['columnNumber'] = $renderingContext->getVariableProvider()->getByPath('columnNumber', $array110);
$arguments105['value'] = TYPO3\CMS\Backend\ViewHelpers\LanguageColumnViewHelper::renderStatic($arguments107, $renderChildrenClosure108, $renderingContext);
$renderChildrenClosure106 = ($arguments105['value'] !== null) ? function() use ($arguments105) { return $arguments105['value']; } : $renderChildrenClosure106;
$output90 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments105, $renderChildrenClosure106, $renderingContext)]);

$output90 .= '
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure112 = function() use ($renderingContext, $self) {
$output114 = '';

$output114 .= '
                        <tr>
                            <td class="t3-grid-cell" valign="top" data-colpos="';
$array115 = array (
);
$output114 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('column.columnNumber', $array115)]);

$output114 .= '">
                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure117 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments116 = array();
$arguments116['value'] = NULL;
$arguments116['name'] = NULL;
$arguments116['name'] = 'column';
// Rendering ViewHelper TYPO3\CMS\Backend\ViewHelpers\LanguageColumnViewHelper
$renderChildrenClosure119 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments118 = array();
$arguments118['languageColumn'] = NULL;
$arguments118['columnNumber'] = NULL;
$array120 = array (
);$arguments118['languageColumn'] = $renderingContext->getVariableProvider()->getByPath('languageColumns.0', $array120);
$array121 = array (
);$arguments118['columnNumber'] = $renderingContext->getVariableProvider()->getByPath('columnNumber', $array121);
$arguments116['value'] = TYPO3\CMS\Backend\ViewHelpers\LanguageColumnViewHelper::renderStatic($arguments118, $renderChildrenClosure119, $renderingContext);
$renderChildrenClosure117 = ($arguments116['value'] !== null) ? function() use ($arguments116) { return $arguments116['value']; } : $renderChildrenClosure117;
$output114 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments116, $renderChildrenClosure117, $renderingContext)]);

$output114 .= '
                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure123 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments122 = array();
$arguments122['value'] = NULL;
$arguments122['name'] = NULL;
$arguments122['name'] = 'item';
$array124 = array (
);$arguments122['value'] = $renderingContext->getVariableProvider()->getByPath('gridItem', $array124);
$renderChildrenClosure123 = ($arguments122['value'] !== null) ? function() use ($arguments122) { return $arguments122['value']; } : $renderChildrenClosure123;
$output114 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments122, $renderChildrenClosure123, $renderingContext)]);

$output114 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure126 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments125 = array();
$arguments125['section'] = NULL;
$arguments125['partial'] = NULL;
$arguments125['delegate'] = NULL;
$arguments125['renderable'] = NULL;
$arguments125['arguments'] = array (
);
$arguments125['optional'] = false;
$arguments125['default'] = NULL;
$arguments125['contentAs'] = NULL;
$arguments125['debug'] = true;
$arguments125['partial'] = 'PageLayout/Record';
$arguments125['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output114 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments125, $renderChildrenClosure126, $renderingContext);

$output114 .= '
                            </td>
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure129 = function() use ($renderingContext, $self) {
$output131 = '';

$output131 .= '
                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure133 = function() use ($renderingContext, $self) {
$output137 = '';

$output137 .= '
                                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure139 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments138 = array();
$arguments138['value'] = NULL;
$arguments138['name'] = NULL;
$arguments138['name'] = 'column';
// Rendering ViewHelper TYPO3\CMS\Backend\ViewHelpers\LanguageColumnViewHelper
$renderChildrenClosure141 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments140 = array();
$arguments140['languageColumn'] = NULL;
$arguments140['columnNumber'] = NULL;
$array142 = array (
);$arguments140['languageColumn'] = $renderingContext->getVariableProvider()->getByPath('languageColumn', $array142);
$array143 = array (
);$arguments140['columnNumber'] = $renderingContext->getVariableProvider()->getByPath('columnNumber', $array143);
$arguments138['value'] = TYPO3\CMS\Backend\ViewHelpers\LanguageColumnViewHelper::renderStatic($arguments140, $renderChildrenClosure141, $renderingContext);
$renderChildrenClosure139 = ($arguments138['value'] !== null) ? function() use ($arguments138) { return $arguments138['value']; } : $renderChildrenClosure139;
$output137 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments138, $renderChildrenClosure139, $renderingContext)]);

$output137 .= '
                                    <td class="t3-grid-cell" valign="top" data-colpos="';
$array144 = array (
);
$output137 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('column.columnNumber', $array144)]);

$output137 .= '">
                                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure146 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments145 = array();
$arguments145['value'] = NULL;
$arguments145['name'] = NULL;
$arguments145['name'] = 'languageId';
$array147 = array (
);$arguments145['value'] = $renderingContext->getVariableProvider()->getByPath('languageColumn.context.siteLanguage.languageId', $array147);
$renderChildrenClosure146 = ($arguments145['value'] !== null) ? function() use ($arguments145) { return $arguments145['value']; } : $renderChildrenClosure146;
$output137 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments145, $renderChildrenClosure146, $renderingContext)]);

$output137 .= '
                                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure149 = function() use ($renderingContext, $self) {
$output189 = '';

$output189 .= '
                                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure191 = function() use ($renderingContext, $self) {
$output192 = '';

$output192 .= '
                                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure194 = function() use ($renderingContext, $self) {
$output198 = '';

$output198 .= '
                                                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure200 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments199 = array();
$arguments199['value'] = NULL;
$arguments199['name'] = NULL;
$arguments199['name'] = 'item';
$array201 = array (
);$arguments199['value'] = $renderingContext->getVariableProvider()->getByPath('gridItem.translations.{languageId}', $array201);
$renderChildrenClosure200 = ($arguments199['value'] !== null) ? function() use ($arguments199) { return $arguments199['value']; } : $renderChildrenClosure200;
$output198 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments199, $renderChildrenClosure200, $renderingContext)]);

$output198 .= '
                                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure203 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments202 = array();
$arguments202['section'] = NULL;
$arguments202['partial'] = NULL;
$arguments202['delegate'] = NULL;
$arguments202['renderable'] = NULL;
$arguments202['arguments'] = array (
);
$arguments202['optional'] = false;
$arguments202['default'] = NULL;
$arguments202['contentAs'] = NULL;
$arguments202['debug'] = true;
$arguments202['partial'] = 'PageLayout/Record';
$arguments202['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output198 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments202, $renderChildrenClosure203, $renderingContext);

$output198 .= '
                                                ';
return $output198;
};
$arguments193 = array();
$arguments193['then'] = NULL;
$arguments193['else'] = NULL;
$arguments193['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array195 = array();
$array196 = array (
);$array195['0'] = $renderingContext->getVariableProvider()->getByPath('gridItem.translations.{languageId}', $array196);

$expression197 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments193['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression197(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array195)
					),
					$renderingContext
				);
$arguments193['__thenClosure'] = $renderChildrenClosure194;

$output192 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments193, $renderChildrenClosure194, $renderingContext);

$output192 .= '
                                            ';
return $output192;
};
$arguments190 = array();

$output189 .= '';

$output189 .= '
                                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure206 = function() use ($renderingContext, $self) {
$output207 = '';

$output207 .= '
                                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure209 = function() use ($renderingContext, $self) {
$output213 = '';

$output213 .= '
                                                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure215 = function() use ($renderingContext, $self) {
$array216 = array (
);return $renderingContext->getVariableProvider()->getByPath('languageColumns.{languageId}', $array216);
};
$arguments214 = array();
$arguments214['value'] = NULL;
$arguments214['name'] = NULL;
$arguments214['name'] = 'languageColumnNonConnected';
$renderChildrenClosure215 = ($arguments214['value'] !== null) ? function() use ($arguments214) { return $arguments214['value']; } : $renderChildrenClosure215;
$output213 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments214, $renderChildrenClosure215, $renderingContext)]);

$output213 .= '
                                                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure218 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments217 = array();
$arguments217['value'] = NULL;
$arguments217['name'] = NULL;
$arguments217['name'] = 'column';
// Rendering ViewHelper TYPO3\CMS\Backend\ViewHelpers\LanguageColumnViewHelper
$renderChildrenClosure220 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments219 = array();
$arguments219['languageColumn'] = NULL;
$arguments219['columnNumber'] = NULL;
$array221 = array (
);$arguments219['languageColumn'] = $renderingContext->getVariableProvider()->getByPath('languageColumnNonConnected', $array221);
$array222 = array (
);$arguments219['columnNumber'] = $renderingContext->getVariableProvider()->getByPath('columnNumber', $array222);
$arguments217['value'] = TYPO3\CMS\Backend\ViewHelpers\LanguageColumnViewHelper::renderStatic($arguments219, $renderChildrenClosure220, $renderingContext);
$renderChildrenClosure218 = ($arguments217['value'] !== null) ? function() use ($arguments217) { return $arguments217['value']; } : $renderChildrenClosure218;
$output213 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments217, $renderChildrenClosure218, $renderingContext)]);

$output213 .= '
                                                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure224 = function() use ($renderingContext, $self) {
$output226 = '';

$output226 .= '
                                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure228 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments227 = array();
$arguments227['section'] = NULL;
$arguments227['partial'] = NULL;
$arguments227['delegate'] = NULL;
$arguments227['renderable'] = NULL;
$arguments227['arguments'] = array (
);
$arguments227['optional'] = false;
$arguments227['default'] = NULL;
$arguments227['contentAs'] = NULL;
$arguments227['debug'] = true;
$arguments227['partial'] = 'PageLayout/Record';
$arguments227['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output226 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments227, $renderChildrenClosure228, $renderingContext);

$output226 .= '
                                                    ';
return $output226;
};
$arguments223 = array();
$arguments223['each'] = NULL;
$arguments223['as'] = NULL;
$arguments223['key'] = NULL;
$arguments223['reverse'] = false;
$arguments223['iteration'] = NULL;
$array225 = array (
);$arguments223['each'] = $renderingContext->getVariableProvider()->getByPath('column.items', $array225);
$arguments223['as'] = 'item';

$output213 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments223, $renderChildrenClosure224, $renderingContext);

$output213 .= '
                                                ';
return $output213;
};
$arguments208 = array();
$arguments208['then'] = NULL;
$arguments208['else'] = NULL;
$arguments208['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array210 = array();
$array211 = array (
);$array210['0'] = $renderingContext->getVariableProvider()->getByPath('itemIterator.isFirst', $array211);

$expression212 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments208['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression212(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array210)
					),
					$renderingContext
				);
$arguments208['__thenClosure'] = $renderChildrenClosure209;

$output207 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments208, $renderChildrenClosure209, $renderingContext);

$output207 .= '
                                            ';
return $output207;
};
$arguments205 = array();
$arguments205['if'] = NULL;

$output189 .= '';

$output189 .= '
                                        ';
return $output189;
};
$arguments148 = array();
$arguments148['then'] = NULL;
$arguments148['else'] = NULL;
$arguments148['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array186 = array();
$array187 = array (
);$array186['0'] = $renderingContext->getVariableProvider()->getByPath('languageColumn.translationData.mode', $array187);
$array186['1'] = ' == \'connected\'';

$expression188 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == 'connected');};
$arguments148['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression188(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array186)
					),
					$renderingContext
				);
$arguments148['__thenClosure'] = function() use ($renderingContext, $self) {
$output150 = '';

$output150 .= '
                                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure152 = function() use ($renderingContext, $self) {
$output156 = '';

$output156 .= '
                                                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure158 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments157 = array();
$arguments157['value'] = NULL;
$arguments157['name'] = NULL;
$arguments157['name'] = 'item';
$array159 = array (
);$arguments157['value'] = $renderingContext->getVariableProvider()->getByPath('gridItem.translations.{languageId}', $array159);
$renderChildrenClosure158 = ($arguments157['value'] !== null) ? function() use ($arguments157) { return $arguments157['value']; } : $renderChildrenClosure158;
$output156 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments157, $renderChildrenClosure158, $renderingContext)]);

$output156 .= '
                                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure161 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments160 = array();
$arguments160['section'] = NULL;
$arguments160['partial'] = NULL;
$arguments160['delegate'] = NULL;
$arguments160['renderable'] = NULL;
$arguments160['arguments'] = array (
);
$arguments160['optional'] = false;
$arguments160['default'] = NULL;
$arguments160['contentAs'] = NULL;
$arguments160['debug'] = true;
$arguments160['partial'] = 'PageLayout/Record';
$arguments160['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output156 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments160, $renderChildrenClosure161, $renderingContext);

$output156 .= '
                                                ';
return $output156;
};
$arguments151 = array();
$arguments151['then'] = NULL;
$arguments151['else'] = NULL;
$arguments151['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array153 = array();
$array154 = array (
);$array153['0'] = $renderingContext->getVariableProvider()->getByPath('gridItem.translations.{languageId}', $array154);

$expression155 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments151['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression155(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array153)
					),
					$renderingContext
				);
$arguments151['__thenClosure'] = $renderChildrenClosure152;

$output150 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments151, $renderChildrenClosure152, $renderingContext);

$output150 .= '
                                            ';
return $output150;
};
$arguments148['__elseClosures'][] = function() use ($renderingContext, $self) {
$output163 = '';

$output163 .= '
                                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure165 = function() use ($renderingContext, $self) {
$output169 = '';

$output169 .= '
                                                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure171 = function() use ($renderingContext, $self) {
$array172 = array (
);return $renderingContext->getVariableProvider()->getByPath('languageColumns.{languageId}', $array172);
};
$arguments170 = array();
$arguments170['value'] = NULL;
$arguments170['name'] = NULL;
$arguments170['name'] = 'languageColumnNonConnected';
$renderChildrenClosure171 = ($arguments170['value'] !== null) ? function() use ($arguments170) { return $arguments170['value']; } : $renderChildrenClosure171;
$output169 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments170, $renderChildrenClosure171, $renderingContext)]);

$output169 .= '
                                                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure174 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments173 = array();
$arguments173['value'] = NULL;
$arguments173['name'] = NULL;
$arguments173['name'] = 'column';
// Rendering ViewHelper TYPO3\CMS\Backend\ViewHelpers\LanguageColumnViewHelper
$renderChildrenClosure176 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments175 = array();
$arguments175['languageColumn'] = NULL;
$arguments175['columnNumber'] = NULL;
$array177 = array (
);$arguments175['languageColumn'] = $renderingContext->getVariableProvider()->getByPath('languageColumnNonConnected', $array177);
$array178 = array (
);$arguments175['columnNumber'] = $renderingContext->getVariableProvider()->getByPath('columnNumber', $array178);
$arguments173['value'] = TYPO3\CMS\Backend\ViewHelpers\LanguageColumnViewHelper::renderStatic($arguments175, $renderChildrenClosure176, $renderingContext);
$renderChildrenClosure174 = ($arguments173['value'] !== null) ? function() use ($arguments173) { return $arguments173['value']; } : $renderChildrenClosure174;
$output169 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments173, $renderChildrenClosure174, $renderingContext)]);

$output169 .= '
                                                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure180 = function() use ($renderingContext, $self) {
$output182 = '';

$output182 .= '
                                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure184 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments183 = array();
$arguments183['section'] = NULL;
$arguments183['partial'] = NULL;
$arguments183['delegate'] = NULL;
$arguments183['renderable'] = NULL;
$arguments183['arguments'] = array (
);
$arguments183['optional'] = false;
$arguments183['default'] = NULL;
$arguments183['contentAs'] = NULL;
$arguments183['debug'] = true;
$arguments183['partial'] = 'PageLayout/Record';
$arguments183['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output182 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments183, $renderChildrenClosure184, $renderingContext);

$output182 .= '
                                                    ';
return $output182;
};
$arguments179 = array();
$arguments179['each'] = NULL;
$arguments179['as'] = NULL;
$arguments179['key'] = NULL;
$arguments179['reverse'] = false;
$arguments179['iteration'] = NULL;
$array181 = array (
);$arguments179['each'] = $renderingContext->getVariableProvider()->getByPath('column.items', $array181);
$arguments179['as'] = 'item';

$output169 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments179, $renderChildrenClosure180, $renderingContext);

$output169 .= '
                                                ';
return $output169;
};
$arguments164 = array();
$arguments164['then'] = NULL;
$arguments164['else'] = NULL;
$arguments164['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array166 = array();
$array167 = array (
);$array166['0'] = $renderingContext->getVariableProvider()->getByPath('itemIterator.isFirst', $array167);

$expression168 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments164['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression168(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array166)
					),
					$renderingContext
				);
$arguments164['__thenClosure'] = $renderChildrenClosure165;

$output163 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments164, $renderChildrenClosure165, $renderingContext);

$output163 .= '
                                            ';
return $output163;
};

$output137 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments148, $renderChildrenClosure149, $renderingContext);

$output137 .= '
                                    </td>
                                ';
return $output137;
};
$arguments132 = array();
$arguments132['then'] = NULL;
$arguments132['else'] = NULL;
$arguments132['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array134 = array();
$array135 = array (
);$array134['0'] = $renderingContext->getVariableProvider()->getByPath('languageColumn.context.siteLanguage.languageId', $array135);
$array134['1'] = ' > 0';

$expression136 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) > 0);};
$arguments132['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression136(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array134)
					),
					$renderingContext
				);
$arguments132['__thenClosure'] = $renderChildrenClosure133;

$output131 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments132, $renderChildrenClosure133, $renderingContext);

$output131 .= '
                            ';
return $output131;
};
$arguments128 = array();
$arguments128['each'] = NULL;
$arguments128['as'] = NULL;
$arguments128['key'] = NULL;
$arguments128['reverse'] = false;
$arguments128['iteration'] = NULL;
$array130 = array (
);$arguments128['each'] = $renderingContext->getVariableProvider()->getByPath('languageColumns', $array130);
$arguments128['as'] = 'languageColumn';

$output114 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments128, $renderChildrenClosure129, $renderingContext);

$output114 .= '
                        </tr>
                    ';
return $output114;
};
$arguments111 = array();
$arguments111['each'] = NULL;
$arguments111['as'] = NULL;
$arguments111['key'] = NULL;
$arguments111['reverse'] = false;
$arguments111['iteration'] = NULL;
$array113 = array (
);$arguments111['each'] = $renderingContext->getVariableProvider()->getByPath('column.items', $array113);
$arguments111['as'] = 'gridItem';
$arguments111['iteration'] = 'itemIterator';

$output90 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments111, $renderChildrenClosure112, $renderingContext);

$output90 .= '
                    <tr>
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure231 = function() use ($renderingContext, $self) {
$output233 = '';

$output233 .= '
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure235 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments234 = array();
$arguments234['value'] = NULL;
$arguments234['name'] = NULL;
$arguments234['name'] = 'column';
// Rendering ViewHelper TYPO3\CMS\Backend\ViewHelpers\LanguageColumnViewHelper
$renderChildrenClosure237 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments236 = array();
$arguments236['languageColumn'] = NULL;
$arguments236['columnNumber'] = NULL;
$array238 = array (
);$arguments236['languageColumn'] = $renderingContext->getVariableProvider()->getByPath('languageColumn', $array238);
$array239 = array (
);$arguments236['columnNumber'] = $renderingContext->getVariableProvider()->getByPath('columnNumber', $array239);
$arguments234['value'] = TYPO3\CMS\Backend\ViewHelpers\LanguageColumnViewHelper::renderStatic($arguments236, $renderChildrenClosure237, $renderingContext);
$renderChildrenClosure235 = ($arguments234['value'] !== null) ? function() use ($arguments234) { return $arguments234['value']; } : $renderChildrenClosure235;
$output233 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments234, $renderChildrenClosure235, $renderingContext)]);

$output233 .= '
                            <td data-colpos="';
$array240 = array (
);
$output233 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('column.columnNumber', $array240)]);

$output233 .= '" valign="top">
                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure242 = function() use ($renderingContext, $self) {
$array243 = array (
);return $renderingContext->getVariableProvider()->getByPath('column.afterSectionMarkup', $array243);
};
$arguments241 = array();
$arguments241['value'] = NULL;

$output233 .= isset($arguments241['value']) ? $arguments241['value'] : $renderChildrenClosure242();

$output233 .= '
                            </td>
                        ';
return $output233;
};
$arguments230 = array();
$arguments230['each'] = NULL;
$arguments230['as'] = NULL;
$arguments230['key'] = NULL;
$arguments230['reverse'] = false;
$arguments230['iteration'] = NULL;
$array232 = array (
);$arguments230['each'] = $renderingContext->getVariableProvider()->getByPath('languageColumns', $array232);
$arguments230['as'] = 'languageColumn';

$output90 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments230, $renderChildrenClosure231, $renderingContext);

$output90 .= '
                    </tr>
                ';
return $output90;
};
$arguments87 = array();
$arguments87['each'] = NULL;
$arguments87['as'] = NULL;
$arguments87['key'] = NULL;
$arguments87['reverse'] = false;
$arguments87['iteration'] = NULL;
$array89 = array (
);$arguments87['each'] = $renderingContext->getVariableProvider()->getByPath('context.drawingConfiguration.activeColumns', $array89);
$arguments87['as'] = 'columnNumber';

$output83 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments87, $renderChildrenClosure88, $renderingContext);

$output83 .= '
            ';
return $output83;
};
$arguments81['__elseClosures'][] = function() use ($renderingContext, $self) {
$output244 = '';

$output244 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure246 = function() use ($renderingContext, $self) {
$output248 = '';

$output248 .= '
                    <tr>
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure250 = function() use ($renderingContext, $self) {
$output252 = '';

$output252 .= '
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure254 = function() use ($renderingContext, $self) {
$output258 = '';

$output258 .= '
                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure260 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments259 = array();
$arguments259['value'] = NULL;
$arguments259['name'] = NULL;
$arguments259['name'] = 'grid';
$array261 = array (
);$arguments259['value'] = $renderingContext->getVariableProvider()->getByPath('languageColumn.grid', $array261);
$renderChildrenClosure260 = ($arguments259['value'] !== null) ? function() use ($arguments259) { return $arguments259['value']; } : $renderChildrenClosure260;
$output258 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments259, $renderChildrenClosure260, $renderingContext)]);

$output258 .= '
                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure263 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments262 = array();
$arguments262['value'] = NULL;
$arguments262['name'] = NULL;
$arguments262['name'] = 'column';
// Rendering ViewHelper TYPO3\CMS\Backend\ViewHelpers\LanguageColumnViewHelper
$renderChildrenClosure265 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments264 = array();
$arguments264['languageColumn'] = NULL;
$arguments264['columnNumber'] = NULL;
$array266 = array (
);$arguments264['languageColumn'] = $renderingContext->getVariableProvider()->getByPath('languageColumn', $array266);
$array267 = array (
);$arguments264['columnNumber'] = $renderingContext->getVariableProvider()->getByPath('columnNumber', $array267);
$arguments262['value'] = TYPO3\CMS\Backend\ViewHelpers\LanguageColumnViewHelper::renderStatic($arguments264, $renderChildrenClosure265, $renderingContext);
$renderChildrenClosure263 = ($arguments262['value'] !== null) ? function() use ($arguments262) { return $arguments262['value']; } : $renderChildrenClosure263;
$output258 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments262, $renderChildrenClosure263, $renderingContext)]);

$output258 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure269 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments268 = array();
$arguments268['section'] = NULL;
$arguments268['partial'] = NULL;
$arguments268['delegate'] = NULL;
$arguments268['renderable'] = NULL;
$arguments268['arguments'] = array (
);
$arguments268['optional'] = false;
$arguments268['default'] = NULL;
$arguments268['contentAs'] = NULL;
$arguments268['debug'] = true;
$arguments268['partial'] = 'PageLayout/Grid/Column';
$arguments268['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output258 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments268, $renderChildrenClosure269, $renderingContext);

$output258 .= '
                            ';
return $output258;
};
$arguments253 = array();
$arguments253['then'] = NULL;
$arguments253['else'] = NULL;
$arguments253['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array255 = array();
$array256 = array (
);$array255['0'] = $renderingContext->getVariableProvider()->getByPath('languageColumn.grid.columns', $array256);

$expression257 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments253['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression257(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array255)
					),
					$renderingContext
				);
$arguments253['__thenClosure'] = $renderChildrenClosure254;

$output252 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments253, $renderChildrenClosure254, $renderingContext);

$output252 .= '
                        ';
return $output252;
};
$arguments249 = array();
$arguments249['each'] = NULL;
$arguments249['as'] = NULL;
$arguments249['key'] = NULL;
$arguments249['reverse'] = false;
$arguments249['iteration'] = NULL;
$array251 = array (
);$arguments249['each'] = $renderingContext->getVariableProvider()->getByPath('languageColumns', $array251);
$arguments249['as'] = 'languageColumn';

$output248 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments249, $renderChildrenClosure250, $renderingContext);

$output248 .= '
                    </tr>
                ';
return $output248;
};
$arguments245 = array();
$arguments245['each'] = NULL;
$arguments245['as'] = NULL;
$arguments245['key'] = NULL;
$arguments245['reverse'] = false;
$arguments245['iteration'] = NULL;
$array247 = array (
);$arguments245['each'] = $renderingContext->getVariableProvider()->getByPath('context.drawingConfiguration.activeColumns', $array247);
$arguments245['as'] = 'columnNumber';

$output244 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments245, $renderChildrenClosure246, $renderingContext);

$output244 .= '
            ';
return $output244;
};

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments81, $renderChildrenClosure82, $renderingContext);

$output0 .= '
    </table>
</div>
';

return $output0;
}


}
#