<?php

class Thread_action_list_6d9f21ad9b69497082090c8e392536e8e8b871fc extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

public function getLayoutName(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
return (string) 'Default';
}
public function hasLayout() {
return TRUE;
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
 * section content
 */
public function section_040f06fd774092478d450774f5ba30c5da78acc8(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output0 = '';

$output0 .= '

    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\DebugViewHelper
$renderChildrenClosure2 = function() use ($renderingContext, $self) {
return $renderingContext->getVariableProvider()->getAll();
};
$arguments1 = array();
$arguments1['title'] = NULL;
$arguments1['maxDepth'] = 8;
$arguments1['plainText'] = false;
$arguments1['ansiColors'] = false;
$arguments1['inline'] = false;
$arguments1['blacklistedClassNames'] = NULL;
$arguments1['blacklistedPropertyNames'] = NULL;

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\DebugViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext);

$output0 .= '
 
    <div class=\'tx-forum-forum\'>  

    <h2 class="tx_forum_threadList-headline">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure5 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments4 = array();
$arguments4['key'] = NULL;
$arguments4['id'] = NULL;
$arguments4['default'] = NULL;
$arguments4['arguments'] = NULL;
$arguments4['extensionName'] = NULL;
$arguments4['languageKey'] = NULL;
$arguments4['alternativeLanguageKeys'] = NULL;
$arguments4['key'] = 'tx_forum_domain_model_forum.activeForum';

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments4, $renderChildrenClosure5, $renderingContext)]);

$output0 .= ': ';
$array6 = array (
);
$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('forum_data.0.forum', $array6)]);

$output0 .= '</h2>
    
    <div class="tx-forum-buttons">
        <div class="tx-forum-backlink">
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\PageViewHelper
$renderChildrenClosure8 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure10 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure12 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments11 = array();
$arguments11['key'] = NULL;
$arguments11['id'] = NULL;
$arguments11['default'] = NULL;
$arguments11['arguments'] = NULL;
$arguments11['extensionName'] = NULL;
$arguments11['languageKey'] = NULL;
$arguments11['alternativeLanguageKeys'] = NULL;
$arguments11['key'] = 'tx_forum_domain_model_forum.backlink';
return TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments11, $renderChildrenClosure12, $renderingContext);
};
$arguments9 = array();
$arguments9['value'] = NULL;
return isset($arguments9['value']) ? $arguments9['value'] : $renderChildrenClosure10();
};
$arguments7 = array();
$arguments7['additionalAttributes'] = NULL;
$arguments7['data'] = NULL;
$arguments7['aria'] = NULL;
$arguments7['class'] = NULL;
$arguments7['dir'] = NULL;
$arguments7['id'] = NULL;
$arguments7['lang'] = NULL;
$arguments7['style'] = NULL;
$arguments7['title'] = NULL;
$arguments7['accesskey'] = NULL;
$arguments7['tabindex'] = NULL;
$arguments7['onclick'] = NULL;
$arguments7['target'] = NULL;
$arguments7['rel'] = NULL;
$arguments7['pageUid'] = NULL;
$arguments7['pageType'] = NULL;
$arguments7['noCache'] = NULL;
$arguments7['language'] = NULL;
$arguments7['section'] = NULL;
$arguments7['linkAccessRestrictedPages'] = NULL;
$arguments7['additionalParams'] = NULL;
$arguments7['absolute'] = NULL;
$arguments7['addQueryString'] = NULL;
$arguments7['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments7['addQueryStringMethod'] = NULL;

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\Link\PageViewHelper::renderStatic($arguments7, $renderChildrenClosure8, $renderingContext);

$output0 .= '
        </div>
        <div class="tx-forum-newThread">
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Security\IfAuthenticatedViewHelper
$renderChildrenClosure14 = function() use ($renderingContext, $self) {
$output15 = '';

$output15 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure17 = function() use ($renderingContext, $self) {
$output18 = '';

$output18 .= '
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure20 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure22 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments21 = array();
$arguments21['key'] = NULL;
$arguments21['id'] = NULL;
$arguments21['default'] = NULL;
$arguments21['arguments'] = NULL;
$arguments21['extensionName'] = NULL;
$arguments21['languageKey'] = NULL;
$arguments21['alternativeLanguageKeys'] = NULL;
$arguments21['key'] = 'tx_forum_domain_model_forum.newThreadButton';
return TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments21, $renderChildrenClosure22, $renderingContext);
};
$arguments19 = array();
$arguments19['value'] = NULL;

$output18 .= isset($arguments19['value']) ? $arguments19['value'] : $renderChildrenClosure20();

$output18 .= '
                ';
return $output18;
};
$arguments16 = array();
$arguments16['additionalAttributes'] = NULL;
$arguments16['data'] = NULL;
$arguments16['aria'] = NULL;
$arguments16['class'] = NULL;
$arguments16['dir'] = NULL;
$arguments16['id'] = NULL;
$arguments16['lang'] = NULL;
$arguments16['style'] = NULL;
$arguments16['title'] = NULL;
$arguments16['accesskey'] = NULL;
$arguments16['tabindex'] = NULL;
$arguments16['onclick'] = NULL;
$arguments16['name'] = NULL;
$arguments16['rel'] = NULL;
$arguments16['rev'] = NULL;
$arguments16['target'] = NULL;
$arguments16['action'] = NULL;
$arguments16['controller'] = NULL;
$arguments16['extensionName'] = NULL;
$arguments16['pluginName'] = NULL;
$arguments16['pageUid'] = NULL;
$arguments16['pageType'] = NULL;
$arguments16['noCache'] = NULL;
$arguments16['section'] = NULL;
$arguments16['format'] = NULL;
$arguments16['linkAccessRestrictedPages'] = NULL;
$arguments16['additionalParams'] = NULL;
$arguments16['absolute'] = NULL;
$arguments16['addQueryString'] = NULL;
$arguments16['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments16['addQueryStringMethod'] = NULL;
$arguments16['arguments'] = NULL;
$arguments16['action'] = 'new';
$arguments16['controller'] = 'Thread';

$output15 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments16, $renderChildrenClosure17, $renderingContext);

$output15 .= '
            ';
return $output15;
};
$arguments13 = array();
$arguments13['then'] = NULL;
$arguments13['else'] = NULL;
$arguments13['__thenClosure'] = $renderChildrenClosure14;

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\Security\IfAuthenticatedViewHelper::renderStatic($arguments13, $renderChildrenClosure14, $renderingContext);

$output0 .= '
        </div>
    </div>
    

   
   

     <div class="tx-forum-threads">   
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure24 = function() use ($renderingContext, $self) {
$output26 = '';

$output26 .= '
        
        <div class="tx-forum-thread ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure28 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments27 = array();
$arguments27['then'] = NULL;
$arguments27['else'] = NULL;
$arguments27['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array29 = array();
$array30 = array (
);$array29['0'] = $renderingContext->getVariableProvider()->getByPath('iterator.isEven', $array30);

$expression31 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments27['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression31(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array29)
					),
					$renderingContext
				);
$arguments27['then'] = 'thread-even';

$output26 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments27, $renderChildrenClosure28, $renderingContext);

$output26 .= ' ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure33 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments32 = array();
$arguments32['then'] = NULL;
$arguments32['else'] = NULL;
$arguments32['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array34 = array();
$array35 = array (
);$array34['0'] = $renderingContext->getVariableProvider()->getByPath('iterator.isOdd', $array35);

$expression36 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments32['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression36(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array34)
					),
					$renderingContext
				);
$arguments32['then'] = 'thread-odd';

$output26 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments32, $renderChildrenClosure33, $renderingContext);

$output26 .= '">
            <div class="tx-forum-thread-head">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="tx-forum-thread-title">
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure38 = function() use ($renderingContext, $self) {
$array42 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('thread.title', $array42)]);
};
$arguments37 = array();
$arguments37['additionalAttributes'] = NULL;
$arguments37['data'] = NULL;
$arguments37['aria'] = NULL;
$arguments37['class'] = NULL;
$arguments37['dir'] = NULL;
$arguments37['id'] = NULL;
$arguments37['lang'] = NULL;
$arguments37['style'] = NULL;
$arguments37['title'] = NULL;
$arguments37['accesskey'] = NULL;
$arguments37['tabindex'] = NULL;
$arguments37['onclick'] = NULL;
$arguments37['name'] = NULL;
$arguments37['rel'] = NULL;
$arguments37['rev'] = NULL;
$arguments37['target'] = NULL;
$arguments37['action'] = NULL;
$arguments37['controller'] = NULL;
$arguments37['extensionName'] = NULL;
$arguments37['pluginName'] = NULL;
$arguments37['pageUid'] = NULL;
$arguments37['pageType'] = NULL;
$arguments37['noCache'] = NULL;
$arguments37['section'] = NULL;
$arguments37['format'] = NULL;
$arguments37['linkAccessRestrictedPages'] = NULL;
$arguments37['additionalParams'] = NULL;
$arguments37['absolute'] = NULL;
$arguments37['addQueryString'] = NULL;
$arguments37['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments37['addQueryStringMethod'] = NULL;
$arguments37['arguments'] = NULL;
$arguments37['action'] = 'show';
$arguments37['controller'] = 'Thread';
// Rendering Array
$array39 = array();
$array40 = array (
);$array39['forum'] = $renderingContext->getVariableProvider()->getByPath('forum_data.0.uid', $array40);
$array41 = array (
);$array39['thread'] = $renderingContext->getVariableProvider()->getByPath('thread.uid', $array41);
$arguments37['arguments'] = $array39;

$output26 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments37, $renderChildrenClosure38, $renderingContext);

$output26 .= '
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="tx-forum-thread-date">
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure44 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments43 = array();
$arguments43['key'] = NULL;
$arguments43['id'] = NULL;
$arguments43['default'] = NULL;
$arguments43['arguments'] = NULL;
$arguments43['extensionName'] = NULL;
$arguments43['languageKey'] = NULL;
$arguments43['alternativeLanguageKeys'] = NULL;
$arguments43['key'] = 'tx_forum_domain_model_forum.created';

$output26 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments43, $renderChildrenClosure44, $renderingContext)]);

$output26 .= ': 
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper
$renderChildrenClosure46 = function() use ($renderingContext, $self) {
$array49 = array (
);return $renderingContext->getVariableProvider()->getByPath('thread.crdate', $array49);
};
$arguments45 = array();
$arguments45['date'] = NULL;
$arguments45['format'] = '';
$arguments45['base'] = NULL;
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure48 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments47 = array();
$arguments47['key'] = NULL;
$arguments47['id'] = NULL;
$arguments47['default'] = NULL;
$arguments47['arguments'] = NULL;
$arguments47['extensionName'] = NULL;
$arguments47['languageKey'] = NULL;
$arguments47['alternativeLanguageKeys'] = NULL;
$arguments47['key'] = 'tx_forum_domain_model_forum.date';
$arguments45['format'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments47, $renderChildrenClosure48, $renderingContext);
$renderChildrenClosure46 = ($arguments45['date'] !== null) ? function() use ($arguments45) { return $arguments45['date']; } : $renderChildrenClosure46;
$output26 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper::renderStatic($arguments45, $renderChildrenClosure46, $renderingContext)]);

$output26 .= '
                            </div>
                        </div>
                    </div>
            </div>
        </div>

        <div class="tx-forum-thread-body">
            
            <div class="tx-forum-thread-userinformation">
                <div class="container">
                    <div class="row">
                        <div class="col-md-2">

                            <div class="tx-forum-thread-userImage">
                                <!-- Profilbild -->
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure51 = function() use ($renderingContext, $self) {
$output65 = '';

$output65 .= '
                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure67 = function() use ($renderingContext, $self) {
$output68 = '';

$output68 .= '
                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$renderChildrenClosure70 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments69 = array();
$arguments69['additionalAttributes'] = NULL;
$arguments69['data'] = NULL;
$arguments69['aria'] = NULL;
$arguments69['class'] = NULL;
$arguments69['dir'] = NULL;
$arguments69['id'] = NULL;
$arguments69['lang'] = NULL;
$arguments69['style'] = NULL;
$arguments69['title'] = NULL;
$arguments69['accesskey'] = NULL;
$arguments69['tabindex'] = NULL;
$arguments69['onclick'] = NULL;
$arguments69['alt'] = NULL;
$arguments69['ismap'] = NULL;
$arguments69['longdesc'] = NULL;
$arguments69['usemap'] = NULL;
$arguments69['loading'] = NULL;
$arguments69['decoding'] = NULL;
$arguments69['src'] = '';
$arguments69['treatIdAsReference'] = false;
$arguments69['image'] = NULL;
$arguments69['crop'] = NULL;
$arguments69['cropVariant'] = 'default';
$arguments69['fileExtension'] = NULL;
$arguments69['width'] = NULL;
$arguments69['height'] = NULL;
$arguments69['minWidth'] = NULL;
$arguments69['minHeight'] = NULL;
$arguments69['maxWidth'] = NULL;
$arguments69['maxHeight'] = NULL;
$arguments69['absolute'] = false;
$array71 = array (
);$arguments69['image'] = $renderingContext->getVariableProvider()->getByPath('thread.fileData', $array71);
$array72 = array (
);$arguments69['alt'] = $renderingContext->getVariableProvider()->getByPath('thread.userData.0.username', $array72);
// Rendering Boolean node
// Rendering Array
$array73 = array();
$array73['0'] = 1;

$expression74 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments69['treatIdAsReference'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression74(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array73)
					),
					$renderingContext
				);
$arguments69['class'] = 'img-fluid';
$arguments69['width'] = 60;

$output68 .= TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper::renderStatic($arguments69, $renderChildrenClosure70, $renderingContext);

$output68 .= '
                                ';
return $output68;
};
$arguments66 = array();

$output65 .= '';

$output65 .= '
                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure76 = function() use ($renderingContext, $self) {
$output77 = '';

$output77 .= '
                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$renderChildrenClosure79 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments78 = array();
$arguments78['additionalAttributes'] = NULL;
$arguments78['data'] = NULL;
$arguments78['aria'] = NULL;
$arguments78['class'] = NULL;
$arguments78['dir'] = NULL;
$arguments78['id'] = NULL;
$arguments78['lang'] = NULL;
$arguments78['style'] = NULL;
$arguments78['title'] = NULL;
$arguments78['accesskey'] = NULL;
$arguments78['tabindex'] = NULL;
$arguments78['onclick'] = NULL;
$arguments78['alt'] = NULL;
$arguments78['ismap'] = NULL;
$arguments78['longdesc'] = NULL;
$arguments78['usemap'] = NULL;
$arguments78['loading'] = NULL;
$arguments78['decoding'] = NULL;
$arguments78['src'] = '';
$arguments78['treatIdAsReference'] = false;
$arguments78['image'] = NULL;
$arguments78['crop'] = NULL;
$arguments78['cropVariant'] = 'default';
$arguments78['fileExtension'] = NULL;
$arguments78['width'] = NULL;
$arguments78['height'] = NULL;
$arguments78['minWidth'] = NULL;
$arguments78['minHeight'] = NULL;
$arguments78['maxWidth'] = NULL;
$arguments78['maxHeight'] = NULL;
$arguments78['absolute'] = false;
$arguments78['src'] = 'EXT:forum/Resources/Public/Images/no-image.jpg';
$arguments78['alt'] = 'no image';
$arguments78['class'] = 'img-fluid';
$arguments78['width'] = 60;

$output77 .= TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper::renderStatic($arguments78, $renderChildrenClosure79, $renderingContext);

$output77 .= '
                                ';
return $output77;
};
$arguments75 = array();
$arguments75['if'] = NULL;

$output65 .= '';

$output65 .= '
                            ';
return $output65;
};
$arguments50 = array();
$arguments50['then'] = NULL;
$arguments50['else'] = NULL;
$arguments50['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array62 = array();
$array63 = array (
);$array62['0'] = $renderingContext->getVariableProvider()->getByPath('thread.fileData', $array63);

$expression64 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments50['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression64(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array62)
					),
					$renderingContext
				);
$arguments50['__thenClosure'] = function() use ($renderingContext, $self) {
$output52 = '';

$output52 .= '
                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$renderChildrenClosure54 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments53 = array();
$arguments53['additionalAttributes'] = NULL;
$arguments53['data'] = NULL;
$arguments53['aria'] = NULL;
$arguments53['class'] = NULL;
$arguments53['dir'] = NULL;
$arguments53['id'] = NULL;
$arguments53['lang'] = NULL;
$arguments53['style'] = NULL;
$arguments53['title'] = NULL;
$arguments53['accesskey'] = NULL;
$arguments53['tabindex'] = NULL;
$arguments53['onclick'] = NULL;
$arguments53['alt'] = NULL;
$arguments53['ismap'] = NULL;
$arguments53['longdesc'] = NULL;
$arguments53['usemap'] = NULL;
$arguments53['loading'] = NULL;
$arguments53['decoding'] = NULL;
$arguments53['src'] = '';
$arguments53['treatIdAsReference'] = false;
$arguments53['image'] = NULL;
$arguments53['crop'] = NULL;
$arguments53['cropVariant'] = 'default';
$arguments53['fileExtension'] = NULL;
$arguments53['width'] = NULL;
$arguments53['height'] = NULL;
$arguments53['minWidth'] = NULL;
$arguments53['minHeight'] = NULL;
$arguments53['maxWidth'] = NULL;
$arguments53['maxHeight'] = NULL;
$arguments53['absolute'] = false;
$array55 = array (
);$arguments53['image'] = $renderingContext->getVariableProvider()->getByPath('thread.fileData', $array55);
$array56 = array (
);$arguments53['alt'] = $renderingContext->getVariableProvider()->getByPath('thread.userData.0.username', $array56);
// Rendering Boolean node
// Rendering Array
$array57 = array();
$array57['0'] = 1;

$expression58 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments53['treatIdAsReference'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression58(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array57)
					),
					$renderingContext
				);
$arguments53['class'] = 'img-fluid';
$arguments53['width'] = 60;

$output52 .= TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper::renderStatic($arguments53, $renderChildrenClosure54, $renderingContext);

$output52 .= '
                                ';
return $output52;
};
$arguments50['__elseClosures'][] = function() use ($renderingContext, $self) {
$output59 = '';

$output59 .= '
                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$renderChildrenClosure61 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments60 = array();
$arguments60['additionalAttributes'] = NULL;
$arguments60['data'] = NULL;
$arguments60['aria'] = NULL;
$arguments60['class'] = NULL;
$arguments60['dir'] = NULL;
$arguments60['id'] = NULL;
$arguments60['lang'] = NULL;
$arguments60['style'] = NULL;
$arguments60['title'] = NULL;
$arguments60['accesskey'] = NULL;
$arguments60['tabindex'] = NULL;
$arguments60['onclick'] = NULL;
$arguments60['alt'] = NULL;
$arguments60['ismap'] = NULL;
$arguments60['longdesc'] = NULL;
$arguments60['usemap'] = NULL;
$arguments60['loading'] = NULL;
$arguments60['decoding'] = NULL;
$arguments60['src'] = '';
$arguments60['treatIdAsReference'] = false;
$arguments60['image'] = NULL;
$arguments60['crop'] = NULL;
$arguments60['cropVariant'] = 'default';
$arguments60['fileExtension'] = NULL;
$arguments60['width'] = NULL;
$arguments60['height'] = NULL;
$arguments60['minWidth'] = NULL;
$arguments60['minHeight'] = NULL;
$arguments60['maxWidth'] = NULL;
$arguments60['maxHeight'] = NULL;
$arguments60['absolute'] = false;
$arguments60['src'] = 'EXT:forum/Resources/Public/Images/no-image.jpg';
$arguments60['alt'] = 'no image';
$arguments60['class'] = 'img-fluid';
$arguments60['width'] = 60;

$output59 .= TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper::renderStatic($arguments60, $renderChildrenClosure61, $renderingContext);

$output59 .= '
                                ';
return $output59;
};

$output26 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments50, $renderChildrenClosure51, $renderingContext);

$output26 .= '
                    
                            </div> 
                        </div>
                        <div class="col-md-10">
                            <div class="tx-forum-thread-user text-end">
                                <span class="tx-forum-threadlist-username">
                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure81 = function() use ($renderingContext, $self) {
$output84 = '';

$output84 .= '<i class="fa-solid fa-user"></i>&nbsp;&nbsp;';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\CaseViewHelper
$renderChildrenClosure86 = function() use ($renderingContext, $self) {
$array87 = array (
);return $renderingContext->getVariableProvider()->getByPath('thread.userData.0.username', $array87);
};
$arguments85 = array();
$arguments85['value'] = NULL;
$arguments85['mode'] = 'upper';
$arguments85['mode'] = 'capital';

$output84 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Format\CaseViewHelper::renderStatic($arguments85, $renderChildrenClosure86, $renderingContext)]);
return $output84;
};
$arguments80 = array();
$arguments80['additionalAttributes'] = NULL;
$arguments80['data'] = NULL;
$arguments80['aria'] = NULL;
$arguments80['class'] = NULL;
$arguments80['dir'] = NULL;
$arguments80['id'] = NULL;
$arguments80['lang'] = NULL;
$arguments80['style'] = NULL;
$arguments80['title'] = NULL;
$arguments80['accesskey'] = NULL;
$arguments80['tabindex'] = NULL;
$arguments80['onclick'] = NULL;
$arguments80['name'] = NULL;
$arguments80['rel'] = NULL;
$arguments80['rev'] = NULL;
$arguments80['target'] = NULL;
$arguments80['action'] = NULL;
$arguments80['controller'] = NULL;
$arguments80['extensionName'] = NULL;
$arguments80['pluginName'] = NULL;
$arguments80['pageUid'] = NULL;
$arguments80['pageType'] = NULL;
$arguments80['noCache'] = NULL;
$arguments80['section'] = NULL;
$arguments80['format'] = NULL;
$arguments80['linkAccessRestrictedPages'] = NULL;
$arguments80['additionalParams'] = NULL;
$arguments80['absolute'] = NULL;
$arguments80['addQueryString'] = NULL;
$arguments80['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments80['addQueryStringMethod'] = NULL;
$arguments80['arguments'] = NULL;
$arguments80['action'] = 'show';
$arguments80['controller'] = 'User';
// Rendering Array
$array82 = array();
$array83 = array (
);$array82['user_id'] = $renderingContext->getVariableProvider()->getByPath('thread.user_id', $array83);
$arguments80['arguments'] = $array82;

$output26 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments80, $renderChildrenClosure81, $renderingContext);

$output26 .= '
                                </span>
                                <span class="tx-forum-threadlist-usergroup">
                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure89 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments88 = array();
$arguments88['key'] = NULL;
$arguments88['id'] = NULL;
$arguments88['default'] = NULL;
$arguments88['arguments'] = NULL;
$arguments88['extensionName'] = NULL;
$arguments88['languageKey'] = NULL;
$arguments88['alternativeLanguageKeys'] = NULL;
$arguments88['key'] = 'tx_forum_domain_model_forum.rankLabel';

$output26 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments88, $renderChildrenClosure89, $renderingContext)]);

$output26 .= ': ';
$array90 = array (
);
$output26 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('thread.userGroup.0.title', $array90)]);

$output26 .= '
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="tx-forum-thread-content">
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\CropViewHelper
$renderChildrenClosure92 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\StripTagsViewHelper
$renderChildrenClosure94 = function() use ($renderingContext, $self) {
$array95 = array (
);return $renderingContext->getVariableProvider()->getByPath('thread.text', $array95);
};
$arguments93 = array();
$arguments93['value'] = NULL;
$arguments93['allowedTags'] = NULL;
$renderChildrenClosure94 = ($arguments93['value'] !== null) ? function() use ($arguments93) { return $arguments93['value']; } : $renderChildrenClosure94;return TYPO3\CMS\Fluid\ViewHelpers\Format\StripTagsViewHelper::renderStatic($arguments93, $renderChildrenClosure94, $renderingContext);
};
$arguments91 = array();
$arguments91['maxCharacters'] = NULL;
$arguments91['append'] = '&hellip;';
$arguments91['respectWordBoundaries'] = true;
$arguments91['respectHtml'] = true;
$arguments91['maxCharacters'] = 200;
$arguments91['append'] = '&nbsp;&nbsp;...';

$output26 .= TYPO3\CMS\Fluid\ViewHelpers\Format\CropViewHelper::renderStatic($arguments91, $renderChildrenClosure92, $renderingContext);

$output26 .= '
                        </div>
                    </div>
                </div>
            </div>

        </div> 


        </div>
    ';
return $output26;
};
$arguments23 = array();
$arguments23['each'] = NULL;
$arguments23['as'] = NULL;
$arguments23['key'] = NULL;
$arguments23['reverse'] = false;
$arguments23['iteration'] = NULL;
$array25 = array (
);$arguments23['each'] = $renderingContext->getVariableProvider()->getByPath('article', $array25);
$arguments23['as'] = 'thread';
$arguments23['iteration'] = 'iterator';

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments23, $renderChildrenClosure24, $renderingContext);

$output0 .= '
    </div>
    
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure97 = function() use ($renderingContext, $self) {
$array98 = array (
);return $renderingContext->getVariableProvider()->getByPath('paging', $array98);
};
$arguments96 = array();
$arguments96['value'] = NULL;

$output0 .= isset($arguments96['value']) ? $arguments96['value'] : $renderChildrenClosure97();

$output0 .= '
    
    </div>
    
    
    
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure100 = function() use ($renderingContext, $self) {
$output104 = '';

$output104 .= '
        <div class="tx-forum-no-threads">
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure106 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments105 = array();
$arguments105['key'] = NULL;
$arguments105['id'] = NULL;
$arguments105['default'] = NULL;
$arguments105['arguments'] = NULL;
$arguments105['extensionName'] = NULL;
$arguments105['languageKey'] = NULL;
$arguments105['alternativeLanguageKeys'] = NULL;
$arguments105['key'] = 'tx_forum_domain_model_forum.no-threads';

$output104 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments105, $renderChildrenClosure106, $renderingContext)]);

$output104 .= '
        </div>
    ';
return $output104;
};
$arguments99 = array();
$arguments99['then'] = NULL;
$arguments99['else'] = NULL;
$arguments99['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array101 = array();
$array102 = array (
);$array101['0'] = $renderingContext->getVariableProvider()->getByPath('counter', $array102);
$array101['1'] = '==0';

$expression103 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == 0);};
$arguments99['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression103(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array101)
					),
					$renderingContext
				);
$arguments99['__thenClosure'] = $renderChildrenClosure100;

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments99, $renderChildrenClosure100, $renderingContext);

$output0 .= '
    

    
';

return $output0;
}
/**
 * Main Render function
 */
public function render(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output107 = '';

$output107 .= '
';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\LayoutViewHelper
$renderChildrenClosure109 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments108 = array();
$arguments108['name'] = NULL;
$arguments108['name'] = 'Default';

$output107 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [NULL]);

$output107 .= '

';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SectionViewHelper
$renderChildrenClosure111 = function() use ($renderingContext, $self) {
$output112 = '';

$output112 .= '

    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\DebugViewHelper
$renderChildrenClosure114 = function() use ($renderingContext, $self) {
return $renderingContext->getVariableProvider()->getAll();
};
$arguments113 = array();
$arguments113['title'] = NULL;
$arguments113['maxDepth'] = 8;
$arguments113['plainText'] = false;
$arguments113['ansiColors'] = false;
$arguments113['inline'] = false;
$arguments113['blacklistedClassNames'] = NULL;
$arguments113['blacklistedPropertyNames'] = NULL;

$output112 .= TYPO3\CMS\Fluid\ViewHelpers\DebugViewHelper::renderStatic($arguments113, $renderChildrenClosure114, $renderingContext);

$output112 .= '
 
    <div class=\'tx-forum-forum\'>  

    <h2 class="tx_forum_threadList-headline">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure117 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments116 = array();
$arguments116['key'] = NULL;
$arguments116['id'] = NULL;
$arguments116['default'] = NULL;
$arguments116['arguments'] = NULL;
$arguments116['extensionName'] = NULL;
$arguments116['languageKey'] = NULL;
$arguments116['alternativeLanguageKeys'] = NULL;
$arguments116['key'] = 'tx_forum_domain_model_forum.activeForum';

$output112 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments116, $renderChildrenClosure117, $renderingContext)]);

$output112 .= ': ';
$array118 = array (
);
$output112 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('forum_data.0.forum', $array118)]);

$output112 .= '</h2>
    
    <div class="tx-forum-buttons">
        <div class="tx-forum-backlink">
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\PageViewHelper
$renderChildrenClosure120 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure122 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure124 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments123 = array();
$arguments123['key'] = NULL;
$arguments123['id'] = NULL;
$arguments123['default'] = NULL;
$arguments123['arguments'] = NULL;
$arguments123['extensionName'] = NULL;
$arguments123['languageKey'] = NULL;
$arguments123['alternativeLanguageKeys'] = NULL;
$arguments123['key'] = 'tx_forum_domain_model_forum.backlink';
return TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments123, $renderChildrenClosure124, $renderingContext);
};
$arguments121 = array();
$arguments121['value'] = NULL;
return isset($arguments121['value']) ? $arguments121['value'] : $renderChildrenClosure122();
};
$arguments119 = array();
$arguments119['additionalAttributes'] = NULL;
$arguments119['data'] = NULL;
$arguments119['aria'] = NULL;
$arguments119['class'] = NULL;
$arguments119['dir'] = NULL;
$arguments119['id'] = NULL;
$arguments119['lang'] = NULL;
$arguments119['style'] = NULL;
$arguments119['title'] = NULL;
$arguments119['accesskey'] = NULL;
$arguments119['tabindex'] = NULL;
$arguments119['onclick'] = NULL;
$arguments119['target'] = NULL;
$arguments119['rel'] = NULL;
$arguments119['pageUid'] = NULL;
$arguments119['pageType'] = NULL;
$arguments119['noCache'] = NULL;
$arguments119['language'] = NULL;
$arguments119['section'] = NULL;
$arguments119['linkAccessRestrictedPages'] = NULL;
$arguments119['additionalParams'] = NULL;
$arguments119['absolute'] = NULL;
$arguments119['addQueryString'] = NULL;
$arguments119['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments119['addQueryStringMethod'] = NULL;

$output112 .= TYPO3\CMS\Fluid\ViewHelpers\Link\PageViewHelper::renderStatic($arguments119, $renderChildrenClosure120, $renderingContext);

$output112 .= '
        </div>
        <div class="tx-forum-newThread">
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Security\IfAuthenticatedViewHelper
$renderChildrenClosure126 = function() use ($renderingContext, $self) {
$output127 = '';

$output127 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure129 = function() use ($renderingContext, $self) {
$output130 = '';

$output130 .= '
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure132 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure134 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments133 = array();
$arguments133['key'] = NULL;
$arguments133['id'] = NULL;
$arguments133['default'] = NULL;
$arguments133['arguments'] = NULL;
$arguments133['extensionName'] = NULL;
$arguments133['languageKey'] = NULL;
$arguments133['alternativeLanguageKeys'] = NULL;
$arguments133['key'] = 'tx_forum_domain_model_forum.newThreadButton';
return TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments133, $renderChildrenClosure134, $renderingContext);
};
$arguments131 = array();
$arguments131['value'] = NULL;

$output130 .= isset($arguments131['value']) ? $arguments131['value'] : $renderChildrenClosure132();

$output130 .= '
                ';
return $output130;
};
$arguments128 = array();
$arguments128['additionalAttributes'] = NULL;
$arguments128['data'] = NULL;
$arguments128['aria'] = NULL;
$arguments128['class'] = NULL;
$arguments128['dir'] = NULL;
$arguments128['id'] = NULL;
$arguments128['lang'] = NULL;
$arguments128['style'] = NULL;
$arguments128['title'] = NULL;
$arguments128['accesskey'] = NULL;
$arguments128['tabindex'] = NULL;
$arguments128['onclick'] = NULL;
$arguments128['name'] = NULL;
$arguments128['rel'] = NULL;
$arguments128['rev'] = NULL;
$arguments128['target'] = NULL;
$arguments128['action'] = NULL;
$arguments128['controller'] = NULL;
$arguments128['extensionName'] = NULL;
$arguments128['pluginName'] = NULL;
$arguments128['pageUid'] = NULL;
$arguments128['pageType'] = NULL;
$arguments128['noCache'] = NULL;
$arguments128['section'] = NULL;
$arguments128['format'] = NULL;
$arguments128['linkAccessRestrictedPages'] = NULL;
$arguments128['additionalParams'] = NULL;
$arguments128['absolute'] = NULL;
$arguments128['addQueryString'] = NULL;
$arguments128['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments128['addQueryStringMethod'] = NULL;
$arguments128['arguments'] = NULL;
$arguments128['action'] = 'new';
$arguments128['controller'] = 'Thread';

$output127 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments128, $renderChildrenClosure129, $renderingContext);

$output127 .= '
            ';
return $output127;
};
$arguments125 = array();
$arguments125['then'] = NULL;
$arguments125['else'] = NULL;
$arguments125['__thenClosure'] = $renderChildrenClosure126;

$output112 .= TYPO3\CMS\Fluid\ViewHelpers\Security\IfAuthenticatedViewHelper::renderStatic($arguments125, $renderChildrenClosure126, $renderingContext);

$output112 .= '
        </div>
    </div>
    

   
   

     <div class="tx-forum-threads">   
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure136 = function() use ($renderingContext, $self) {
$output138 = '';

$output138 .= '
        
        <div class="tx-forum-thread ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure140 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments139 = array();
$arguments139['then'] = NULL;
$arguments139['else'] = NULL;
$arguments139['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array141 = array();
$array142 = array (
);$array141['0'] = $renderingContext->getVariableProvider()->getByPath('iterator.isEven', $array142);

$expression143 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments139['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression143(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array141)
					),
					$renderingContext
				);
$arguments139['then'] = 'thread-even';

$output138 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments139, $renderChildrenClosure140, $renderingContext);

$output138 .= ' ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure145 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments144 = array();
$arguments144['then'] = NULL;
$arguments144['else'] = NULL;
$arguments144['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array146 = array();
$array147 = array (
);$array146['0'] = $renderingContext->getVariableProvider()->getByPath('iterator.isOdd', $array147);

$expression148 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments144['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression148(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array146)
					),
					$renderingContext
				);
$arguments144['then'] = 'thread-odd';

$output138 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments144, $renderChildrenClosure145, $renderingContext);

$output138 .= '">
            <div class="tx-forum-thread-head">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="tx-forum-thread-title">
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure150 = function() use ($renderingContext, $self) {
$array154 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('thread.title', $array154)]);
};
$arguments149 = array();
$arguments149['additionalAttributes'] = NULL;
$arguments149['data'] = NULL;
$arguments149['aria'] = NULL;
$arguments149['class'] = NULL;
$arguments149['dir'] = NULL;
$arguments149['id'] = NULL;
$arguments149['lang'] = NULL;
$arguments149['style'] = NULL;
$arguments149['title'] = NULL;
$arguments149['accesskey'] = NULL;
$arguments149['tabindex'] = NULL;
$arguments149['onclick'] = NULL;
$arguments149['name'] = NULL;
$arguments149['rel'] = NULL;
$arguments149['rev'] = NULL;
$arguments149['target'] = NULL;
$arguments149['action'] = NULL;
$arguments149['controller'] = NULL;
$arguments149['extensionName'] = NULL;
$arguments149['pluginName'] = NULL;
$arguments149['pageUid'] = NULL;
$arguments149['pageType'] = NULL;
$arguments149['noCache'] = NULL;
$arguments149['section'] = NULL;
$arguments149['format'] = NULL;
$arguments149['linkAccessRestrictedPages'] = NULL;
$arguments149['additionalParams'] = NULL;
$arguments149['absolute'] = NULL;
$arguments149['addQueryString'] = NULL;
$arguments149['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments149['addQueryStringMethod'] = NULL;
$arguments149['arguments'] = NULL;
$arguments149['action'] = 'show';
$arguments149['controller'] = 'Thread';
// Rendering Array
$array151 = array();
$array152 = array (
);$array151['forum'] = $renderingContext->getVariableProvider()->getByPath('forum_data.0.uid', $array152);
$array153 = array (
);$array151['thread'] = $renderingContext->getVariableProvider()->getByPath('thread.uid', $array153);
$arguments149['arguments'] = $array151;

$output138 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments149, $renderChildrenClosure150, $renderingContext);

$output138 .= '
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="tx-forum-thread-date">
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure156 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments155 = array();
$arguments155['key'] = NULL;
$arguments155['id'] = NULL;
$arguments155['default'] = NULL;
$arguments155['arguments'] = NULL;
$arguments155['extensionName'] = NULL;
$arguments155['languageKey'] = NULL;
$arguments155['alternativeLanguageKeys'] = NULL;
$arguments155['key'] = 'tx_forum_domain_model_forum.created';

$output138 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments155, $renderChildrenClosure156, $renderingContext)]);

$output138 .= ': 
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper
$renderChildrenClosure158 = function() use ($renderingContext, $self) {
$array161 = array (
);return $renderingContext->getVariableProvider()->getByPath('thread.crdate', $array161);
};
$arguments157 = array();
$arguments157['date'] = NULL;
$arguments157['format'] = '';
$arguments157['base'] = NULL;
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure160 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments159 = array();
$arguments159['key'] = NULL;
$arguments159['id'] = NULL;
$arguments159['default'] = NULL;
$arguments159['arguments'] = NULL;
$arguments159['extensionName'] = NULL;
$arguments159['languageKey'] = NULL;
$arguments159['alternativeLanguageKeys'] = NULL;
$arguments159['key'] = 'tx_forum_domain_model_forum.date';
$arguments157['format'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments159, $renderChildrenClosure160, $renderingContext);
$renderChildrenClosure158 = ($arguments157['date'] !== null) ? function() use ($arguments157) { return $arguments157['date']; } : $renderChildrenClosure158;
$output138 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper::renderStatic($arguments157, $renderChildrenClosure158, $renderingContext)]);

$output138 .= '
                            </div>
                        </div>
                    </div>
            </div>
        </div>

        <div class="tx-forum-thread-body">
            
            <div class="tx-forum-thread-userinformation">
                <div class="container">
                    <div class="row">
                        <div class="col-md-2">

                            <div class="tx-forum-thread-userImage">
                                <!-- Profilbild -->
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure163 = function() use ($renderingContext, $self) {
$output177 = '';

$output177 .= '
                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure179 = function() use ($renderingContext, $self) {
$output180 = '';

$output180 .= '
                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$renderChildrenClosure182 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments181 = array();
$arguments181['additionalAttributes'] = NULL;
$arguments181['data'] = NULL;
$arguments181['aria'] = NULL;
$arguments181['class'] = NULL;
$arguments181['dir'] = NULL;
$arguments181['id'] = NULL;
$arguments181['lang'] = NULL;
$arguments181['style'] = NULL;
$arguments181['title'] = NULL;
$arguments181['accesskey'] = NULL;
$arguments181['tabindex'] = NULL;
$arguments181['onclick'] = NULL;
$arguments181['alt'] = NULL;
$arguments181['ismap'] = NULL;
$arguments181['longdesc'] = NULL;
$arguments181['usemap'] = NULL;
$arguments181['loading'] = NULL;
$arguments181['decoding'] = NULL;
$arguments181['src'] = '';
$arguments181['treatIdAsReference'] = false;
$arguments181['image'] = NULL;
$arguments181['crop'] = NULL;
$arguments181['cropVariant'] = 'default';
$arguments181['fileExtension'] = NULL;
$arguments181['width'] = NULL;
$arguments181['height'] = NULL;
$arguments181['minWidth'] = NULL;
$arguments181['minHeight'] = NULL;
$arguments181['maxWidth'] = NULL;
$arguments181['maxHeight'] = NULL;
$arguments181['absolute'] = false;
$array183 = array (
);$arguments181['image'] = $renderingContext->getVariableProvider()->getByPath('thread.fileData', $array183);
$array184 = array (
);$arguments181['alt'] = $renderingContext->getVariableProvider()->getByPath('thread.userData.0.username', $array184);
// Rendering Boolean node
// Rendering Array
$array185 = array();
$array185['0'] = 1;

$expression186 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments181['treatIdAsReference'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression186(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array185)
					),
					$renderingContext
				);
$arguments181['class'] = 'img-fluid';
$arguments181['width'] = 60;

$output180 .= TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper::renderStatic($arguments181, $renderChildrenClosure182, $renderingContext);

$output180 .= '
                                ';
return $output180;
};
$arguments178 = array();

$output177 .= '';

$output177 .= '
                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure188 = function() use ($renderingContext, $self) {
$output189 = '';

$output189 .= '
                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$renderChildrenClosure191 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments190 = array();
$arguments190['additionalAttributes'] = NULL;
$arguments190['data'] = NULL;
$arguments190['aria'] = NULL;
$arguments190['class'] = NULL;
$arguments190['dir'] = NULL;
$arguments190['id'] = NULL;
$arguments190['lang'] = NULL;
$arguments190['style'] = NULL;
$arguments190['title'] = NULL;
$arguments190['accesskey'] = NULL;
$arguments190['tabindex'] = NULL;
$arguments190['onclick'] = NULL;
$arguments190['alt'] = NULL;
$arguments190['ismap'] = NULL;
$arguments190['longdesc'] = NULL;
$arguments190['usemap'] = NULL;
$arguments190['loading'] = NULL;
$arguments190['decoding'] = NULL;
$arguments190['src'] = '';
$arguments190['treatIdAsReference'] = false;
$arguments190['image'] = NULL;
$arguments190['crop'] = NULL;
$arguments190['cropVariant'] = 'default';
$arguments190['fileExtension'] = NULL;
$arguments190['width'] = NULL;
$arguments190['height'] = NULL;
$arguments190['minWidth'] = NULL;
$arguments190['minHeight'] = NULL;
$arguments190['maxWidth'] = NULL;
$arguments190['maxHeight'] = NULL;
$arguments190['absolute'] = false;
$arguments190['src'] = 'EXT:forum/Resources/Public/Images/no-image.jpg';
$arguments190['alt'] = 'no image';
$arguments190['class'] = 'img-fluid';
$arguments190['width'] = 60;

$output189 .= TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper::renderStatic($arguments190, $renderChildrenClosure191, $renderingContext);

$output189 .= '
                                ';
return $output189;
};
$arguments187 = array();
$arguments187['if'] = NULL;

$output177 .= '';

$output177 .= '
                            ';
return $output177;
};
$arguments162 = array();
$arguments162['then'] = NULL;
$arguments162['else'] = NULL;
$arguments162['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array174 = array();
$array175 = array (
);$array174['0'] = $renderingContext->getVariableProvider()->getByPath('thread.fileData', $array175);

$expression176 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments162['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression176(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array174)
					),
					$renderingContext
				);
$arguments162['__thenClosure'] = function() use ($renderingContext, $self) {
$output164 = '';

$output164 .= '
                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$renderChildrenClosure166 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments165 = array();
$arguments165['additionalAttributes'] = NULL;
$arguments165['data'] = NULL;
$arguments165['aria'] = NULL;
$arguments165['class'] = NULL;
$arguments165['dir'] = NULL;
$arguments165['id'] = NULL;
$arguments165['lang'] = NULL;
$arguments165['style'] = NULL;
$arguments165['title'] = NULL;
$arguments165['accesskey'] = NULL;
$arguments165['tabindex'] = NULL;
$arguments165['onclick'] = NULL;
$arguments165['alt'] = NULL;
$arguments165['ismap'] = NULL;
$arguments165['longdesc'] = NULL;
$arguments165['usemap'] = NULL;
$arguments165['loading'] = NULL;
$arguments165['decoding'] = NULL;
$arguments165['src'] = '';
$arguments165['treatIdAsReference'] = false;
$arguments165['image'] = NULL;
$arguments165['crop'] = NULL;
$arguments165['cropVariant'] = 'default';
$arguments165['fileExtension'] = NULL;
$arguments165['width'] = NULL;
$arguments165['height'] = NULL;
$arguments165['minWidth'] = NULL;
$arguments165['minHeight'] = NULL;
$arguments165['maxWidth'] = NULL;
$arguments165['maxHeight'] = NULL;
$arguments165['absolute'] = false;
$array167 = array (
);$arguments165['image'] = $renderingContext->getVariableProvider()->getByPath('thread.fileData', $array167);
$array168 = array (
);$arguments165['alt'] = $renderingContext->getVariableProvider()->getByPath('thread.userData.0.username', $array168);
// Rendering Boolean node
// Rendering Array
$array169 = array();
$array169['0'] = 1;

$expression170 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments165['treatIdAsReference'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression170(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array169)
					),
					$renderingContext
				);
$arguments165['class'] = 'img-fluid';
$arguments165['width'] = 60;

$output164 .= TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper::renderStatic($arguments165, $renderChildrenClosure166, $renderingContext);

$output164 .= '
                                ';
return $output164;
};
$arguments162['__elseClosures'][] = function() use ($renderingContext, $self) {
$output171 = '';

$output171 .= '
                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$renderChildrenClosure173 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments172 = array();
$arguments172['additionalAttributes'] = NULL;
$arguments172['data'] = NULL;
$arguments172['aria'] = NULL;
$arguments172['class'] = NULL;
$arguments172['dir'] = NULL;
$arguments172['id'] = NULL;
$arguments172['lang'] = NULL;
$arguments172['style'] = NULL;
$arguments172['title'] = NULL;
$arguments172['accesskey'] = NULL;
$arguments172['tabindex'] = NULL;
$arguments172['onclick'] = NULL;
$arguments172['alt'] = NULL;
$arguments172['ismap'] = NULL;
$arguments172['longdesc'] = NULL;
$arguments172['usemap'] = NULL;
$arguments172['loading'] = NULL;
$arguments172['decoding'] = NULL;
$arguments172['src'] = '';
$arguments172['treatIdAsReference'] = false;
$arguments172['image'] = NULL;
$arguments172['crop'] = NULL;
$arguments172['cropVariant'] = 'default';
$arguments172['fileExtension'] = NULL;
$arguments172['width'] = NULL;
$arguments172['height'] = NULL;
$arguments172['minWidth'] = NULL;
$arguments172['minHeight'] = NULL;
$arguments172['maxWidth'] = NULL;
$arguments172['maxHeight'] = NULL;
$arguments172['absolute'] = false;
$arguments172['src'] = 'EXT:forum/Resources/Public/Images/no-image.jpg';
$arguments172['alt'] = 'no image';
$arguments172['class'] = 'img-fluid';
$arguments172['width'] = 60;

$output171 .= TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper::renderStatic($arguments172, $renderChildrenClosure173, $renderingContext);

$output171 .= '
                                ';
return $output171;
};

$output138 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments162, $renderChildrenClosure163, $renderingContext);

$output138 .= '
                    
                            </div> 
                        </div>
                        <div class="col-md-10">
                            <div class="tx-forum-thread-user text-end">
                                <span class="tx-forum-threadlist-username">
                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure193 = function() use ($renderingContext, $self) {
$output196 = '';

$output196 .= '<i class="fa-solid fa-user"></i>&nbsp;&nbsp;';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\CaseViewHelper
$renderChildrenClosure198 = function() use ($renderingContext, $self) {
$array199 = array (
);return $renderingContext->getVariableProvider()->getByPath('thread.userData.0.username', $array199);
};
$arguments197 = array();
$arguments197['value'] = NULL;
$arguments197['mode'] = 'upper';
$arguments197['mode'] = 'capital';

$output196 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Format\CaseViewHelper::renderStatic($arguments197, $renderChildrenClosure198, $renderingContext)]);
return $output196;
};
$arguments192 = array();
$arguments192['additionalAttributes'] = NULL;
$arguments192['data'] = NULL;
$arguments192['aria'] = NULL;
$arguments192['class'] = NULL;
$arguments192['dir'] = NULL;
$arguments192['id'] = NULL;
$arguments192['lang'] = NULL;
$arguments192['style'] = NULL;
$arguments192['title'] = NULL;
$arguments192['accesskey'] = NULL;
$arguments192['tabindex'] = NULL;
$arguments192['onclick'] = NULL;
$arguments192['name'] = NULL;
$arguments192['rel'] = NULL;
$arguments192['rev'] = NULL;
$arguments192['target'] = NULL;
$arguments192['action'] = NULL;
$arguments192['controller'] = NULL;
$arguments192['extensionName'] = NULL;
$arguments192['pluginName'] = NULL;
$arguments192['pageUid'] = NULL;
$arguments192['pageType'] = NULL;
$arguments192['noCache'] = NULL;
$arguments192['section'] = NULL;
$arguments192['format'] = NULL;
$arguments192['linkAccessRestrictedPages'] = NULL;
$arguments192['additionalParams'] = NULL;
$arguments192['absolute'] = NULL;
$arguments192['addQueryString'] = NULL;
$arguments192['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments192['addQueryStringMethod'] = NULL;
$arguments192['arguments'] = NULL;
$arguments192['action'] = 'show';
$arguments192['controller'] = 'User';
// Rendering Array
$array194 = array();
$array195 = array (
);$array194['user_id'] = $renderingContext->getVariableProvider()->getByPath('thread.user_id', $array195);
$arguments192['arguments'] = $array194;

$output138 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments192, $renderChildrenClosure193, $renderingContext);

$output138 .= '
                                </span>
                                <span class="tx-forum-threadlist-usergroup">
                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure201 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments200 = array();
$arguments200['key'] = NULL;
$arguments200['id'] = NULL;
$arguments200['default'] = NULL;
$arguments200['arguments'] = NULL;
$arguments200['extensionName'] = NULL;
$arguments200['languageKey'] = NULL;
$arguments200['alternativeLanguageKeys'] = NULL;
$arguments200['key'] = 'tx_forum_domain_model_forum.rankLabel';

$output138 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments200, $renderChildrenClosure201, $renderingContext)]);

$output138 .= ': ';
$array202 = array (
);
$output138 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('thread.userGroup.0.title', $array202)]);

$output138 .= '
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="tx-forum-thread-content">
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\CropViewHelper
$renderChildrenClosure204 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\StripTagsViewHelper
$renderChildrenClosure206 = function() use ($renderingContext, $self) {
$array207 = array (
);return $renderingContext->getVariableProvider()->getByPath('thread.text', $array207);
};
$arguments205 = array();
$arguments205['value'] = NULL;
$arguments205['allowedTags'] = NULL;
$renderChildrenClosure206 = ($arguments205['value'] !== null) ? function() use ($arguments205) { return $arguments205['value']; } : $renderChildrenClosure206;return TYPO3\CMS\Fluid\ViewHelpers\Format\StripTagsViewHelper::renderStatic($arguments205, $renderChildrenClosure206, $renderingContext);
};
$arguments203 = array();
$arguments203['maxCharacters'] = NULL;
$arguments203['append'] = '&hellip;';
$arguments203['respectWordBoundaries'] = true;
$arguments203['respectHtml'] = true;
$arguments203['maxCharacters'] = 200;
$arguments203['append'] = '&nbsp;&nbsp;...';

$output138 .= TYPO3\CMS\Fluid\ViewHelpers\Format\CropViewHelper::renderStatic($arguments203, $renderChildrenClosure204, $renderingContext);

$output138 .= '
                        </div>
                    </div>
                </div>
            </div>

        </div> 


        </div>
    ';
return $output138;
};
$arguments135 = array();
$arguments135['each'] = NULL;
$arguments135['as'] = NULL;
$arguments135['key'] = NULL;
$arguments135['reverse'] = false;
$arguments135['iteration'] = NULL;
$array137 = array (
);$arguments135['each'] = $renderingContext->getVariableProvider()->getByPath('article', $array137);
$arguments135['as'] = 'thread';
$arguments135['iteration'] = 'iterator';

$output112 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments135, $renderChildrenClosure136, $renderingContext);

$output112 .= '
    </div>
    
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure209 = function() use ($renderingContext, $self) {
$array210 = array (
);return $renderingContext->getVariableProvider()->getByPath('paging', $array210);
};
$arguments208 = array();
$arguments208['value'] = NULL;

$output112 .= isset($arguments208['value']) ? $arguments208['value'] : $renderChildrenClosure209();

$output112 .= '
    
    </div>
    
    
    
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure212 = function() use ($renderingContext, $self) {
$output216 = '';

$output216 .= '
        <div class="tx-forum-no-threads">
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure218 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments217 = array();
$arguments217['key'] = NULL;
$arguments217['id'] = NULL;
$arguments217['default'] = NULL;
$arguments217['arguments'] = NULL;
$arguments217['extensionName'] = NULL;
$arguments217['languageKey'] = NULL;
$arguments217['alternativeLanguageKeys'] = NULL;
$arguments217['key'] = 'tx_forum_domain_model_forum.no-threads';

$output216 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments217, $renderChildrenClosure218, $renderingContext)]);

$output216 .= '
        </div>
    ';
return $output216;
};
$arguments211 = array();
$arguments211['then'] = NULL;
$arguments211['else'] = NULL;
$arguments211['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array213 = array();
$array214 = array (
);$array213['0'] = $renderingContext->getVariableProvider()->getByPath('counter', $array214);
$array213['1'] = '==0';

$expression215 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == 0);};
$arguments211['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression215(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array213)
					),
					$renderingContext
				);
$arguments211['__thenClosure'] = $renderChildrenClosure212;

$output112 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments211, $renderChildrenClosure212, $renderingContext);

$output112 .= '
    

    
';
return $output112;
};
$arguments110 = array();
$arguments110['name'] = NULL;
$arguments110['name'] = 'content';

$output107 .= NULL;

$output107 .= ' 

';

return $output107;
}


}
#