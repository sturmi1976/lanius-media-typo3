<?php

class Thread_action_list_d0939bd9079d0dcf070f0b7bfe0b01caaa83af63 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

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
 
    <div class=\'tx-forum-forum\'>  

    <h2 class="tx_forum_threadList-headline">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure2 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1 = array();
$arguments1['key'] = NULL;
$arguments1['id'] = NULL;
$arguments1['default'] = NULL;
$arguments1['arguments'] = NULL;
$arguments1['extensionName'] = NULL;
$arguments1['languageKey'] = NULL;
$arguments1['alternativeLanguageKeys'] = NULL;
$arguments1['key'] = 'tx_forum_domain_model_forum.activeForum';

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext)]);

$output0 .= ': ';
$array3 = array (
);
$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('forum_data.0.forum', $array3)]);

$output0 .= '</h2>
    
    <div class="tx-forum-buttons">
        <div class="tx-forum-backlink">
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\PageViewHelper
$renderChildrenClosure5 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure7 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure9 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments8 = array();
$arguments8['key'] = NULL;
$arguments8['id'] = NULL;
$arguments8['default'] = NULL;
$arguments8['arguments'] = NULL;
$arguments8['extensionName'] = NULL;
$arguments8['languageKey'] = NULL;
$arguments8['alternativeLanguageKeys'] = NULL;
$arguments8['key'] = 'tx_forum_domain_model_forum.backlink';
return TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments8, $renderChildrenClosure9, $renderingContext);
};
$arguments6 = array();
$arguments6['value'] = NULL;
return isset($arguments6['value']) ? $arguments6['value'] : $renderChildrenClosure7();
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
$arguments4['target'] = NULL;
$arguments4['rel'] = NULL;
$arguments4['pageUid'] = NULL;
$arguments4['pageType'] = NULL;
$arguments4['noCache'] = NULL;
$arguments4['language'] = NULL;
$arguments4['section'] = NULL;
$arguments4['linkAccessRestrictedPages'] = NULL;
$arguments4['additionalParams'] = NULL;
$arguments4['absolute'] = NULL;
$arguments4['addQueryString'] = NULL;
$arguments4['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments4['addQueryStringMethod'] = NULL;

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\Link\PageViewHelper::renderStatic($arguments4, $renderChildrenClosure5, $renderingContext);

$output0 .= '
        </div>
        <div class="tx-forum-newThread">
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Security\IfAuthenticatedViewHelper
$renderChildrenClosure11 = function() use ($renderingContext, $self) {
$output12 = '';

$output12 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure14 = function() use ($renderingContext, $self) {
$output15 = '';

$output15 .= '
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure17 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure19 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments18 = array();
$arguments18['key'] = NULL;
$arguments18['id'] = NULL;
$arguments18['default'] = NULL;
$arguments18['arguments'] = NULL;
$arguments18['extensionName'] = NULL;
$arguments18['languageKey'] = NULL;
$arguments18['alternativeLanguageKeys'] = NULL;
$arguments18['key'] = 'tx_forum_domain_model_forum.newThreadButton';
return TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments18, $renderChildrenClosure19, $renderingContext);
};
$arguments16 = array();
$arguments16['value'] = NULL;

$output15 .= isset($arguments16['value']) ? $arguments16['value'] : $renderChildrenClosure17();

$output15 .= '
                ';
return $output15;
};
$arguments13 = array();
$arguments13['additionalAttributes'] = NULL;
$arguments13['data'] = NULL;
$arguments13['aria'] = NULL;
$arguments13['class'] = NULL;
$arguments13['dir'] = NULL;
$arguments13['id'] = NULL;
$arguments13['lang'] = NULL;
$arguments13['style'] = NULL;
$arguments13['title'] = NULL;
$arguments13['accesskey'] = NULL;
$arguments13['tabindex'] = NULL;
$arguments13['onclick'] = NULL;
$arguments13['name'] = NULL;
$arguments13['rel'] = NULL;
$arguments13['rev'] = NULL;
$arguments13['target'] = NULL;
$arguments13['action'] = NULL;
$arguments13['controller'] = NULL;
$arguments13['extensionName'] = NULL;
$arguments13['pluginName'] = NULL;
$arguments13['pageUid'] = NULL;
$arguments13['pageType'] = NULL;
$arguments13['noCache'] = NULL;
$arguments13['section'] = NULL;
$arguments13['format'] = NULL;
$arguments13['linkAccessRestrictedPages'] = NULL;
$arguments13['additionalParams'] = NULL;
$arguments13['absolute'] = NULL;
$arguments13['addQueryString'] = NULL;
$arguments13['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments13['addQueryStringMethod'] = NULL;
$arguments13['arguments'] = NULL;
$arguments13['action'] = 'new';
$arguments13['controller'] = 'Thread';

$output12 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments13, $renderChildrenClosure14, $renderingContext);

$output12 .= '
            ';
return $output12;
};
$arguments10 = array();
$arguments10['then'] = NULL;
$arguments10['else'] = NULL;
$arguments10['__thenClosure'] = $renderChildrenClosure11;

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\Security\IfAuthenticatedViewHelper::renderStatic($arguments10, $renderChildrenClosure11, $renderingContext);

$output0 .= '
        </div>
    </div>
    

   
   

     <div class="tx-forum-threads">   
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure21 = function() use ($renderingContext, $self) {
$output23 = '';

$output23 .= '
        
        <div class="tx-forum-thread ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure25 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments24 = array();
$arguments24['then'] = NULL;
$arguments24['else'] = NULL;
$arguments24['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array26 = array();
$array27 = array (
);$array26['0'] = $renderingContext->getVariableProvider()->getByPath('iterator.isEven', $array27);

$expression28 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments24['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression28(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array26)
					),
					$renderingContext
				);
$arguments24['then'] = 'thread-even';

$output23 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments24, $renderChildrenClosure25, $renderingContext);

$output23 .= ' ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure30 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments29 = array();
$arguments29['then'] = NULL;
$arguments29['else'] = NULL;
$arguments29['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array31 = array();
$array32 = array (
);$array31['0'] = $renderingContext->getVariableProvider()->getByPath('iterator.isOdd', $array32);

$expression33 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments29['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression33(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array31)
					),
					$renderingContext
				);
$arguments29['then'] = 'thread-odd';

$output23 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments29, $renderChildrenClosure30, $renderingContext);

$output23 .= '">
            <div class="tx-forum-thread-head">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="tx-forum-thread-title">
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure35 = function() use ($renderingContext, $self) {
$array39 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('thread.title', $array39)]);
};
$arguments34 = array();
$arguments34['additionalAttributes'] = NULL;
$arguments34['data'] = NULL;
$arguments34['aria'] = NULL;
$arguments34['class'] = NULL;
$arguments34['dir'] = NULL;
$arguments34['id'] = NULL;
$arguments34['lang'] = NULL;
$arguments34['style'] = NULL;
$arguments34['title'] = NULL;
$arguments34['accesskey'] = NULL;
$arguments34['tabindex'] = NULL;
$arguments34['onclick'] = NULL;
$arguments34['name'] = NULL;
$arguments34['rel'] = NULL;
$arguments34['rev'] = NULL;
$arguments34['target'] = NULL;
$arguments34['action'] = NULL;
$arguments34['controller'] = NULL;
$arguments34['extensionName'] = NULL;
$arguments34['pluginName'] = NULL;
$arguments34['pageUid'] = NULL;
$arguments34['pageType'] = NULL;
$arguments34['noCache'] = NULL;
$arguments34['section'] = NULL;
$arguments34['format'] = NULL;
$arguments34['linkAccessRestrictedPages'] = NULL;
$arguments34['additionalParams'] = NULL;
$arguments34['absolute'] = NULL;
$arguments34['addQueryString'] = NULL;
$arguments34['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments34['addQueryStringMethod'] = NULL;
$arguments34['arguments'] = NULL;
$arguments34['action'] = 'show';
$arguments34['controller'] = 'Thread';
// Rendering Array
$array36 = array();
$array37 = array (
);$array36['forum'] = $renderingContext->getVariableProvider()->getByPath('forum_data.0.uid', $array37);
$array38 = array (
);$array36['thread'] = $renderingContext->getVariableProvider()->getByPath('thread.uid', $array38);
$arguments34['arguments'] = $array36;

$output23 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments34, $renderChildrenClosure35, $renderingContext);

$output23 .= '
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="tx-forum-thread-date">
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure41 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments40 = array();
$arguments40['key'] = NULL;
$arguments40['id'] = NULL;
$arguments40['default'] = NULL;
$arguments40['arguments'] = NULL;
$arguments40['extensionName'] = NULL;
$arguments40['languageKey'] = NULL;
$arguments40['alternativeLanguageKeys'] = NULL;
$arguments40['key'] = 'tx_forum_domain_model_forum.created';

$output23 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments40, $renderChildrenClosure41, $renderingContext)]);

$output23 .= ': 
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper
$renderChildrenClosure43 = function() use ($renderingContext, $self) {
$array46 = array (
);return $renderingContext->getVariableProvider()->getByPath('thread.crdate', $array46);
};
$arguments42 = array();
$arguments42['date'] = NULL;
$arguments42['format'] = '';
$arguments42['base'] = NULL;
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure45 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments44 = array();
$arguments44['key'] = NULL;
$arguments44['id'] = NULL;
$arguments44['default'] = NULL;
$arguments44['arguments'] = NULL;
$arguments44['extensionName'] = NULL;
$arguments44['languageKey'] = NULL;
$arguments44['alternativeLanguageKeys'] = NULL;
$arguments44['key'] = 'tx_forum_domain_model_forum.date';
$arguments42['format'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments44, $renderChildrenClosure45, $renderingContext);
$renderChildrenClosure43 = ($arguments42['date'] !== null) ? function() use ($arguments42) { return $arguments42['date']; } : $renderChildrenClosure43;
$output23 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper::renderStatic($arguments42, $renderChildrenClosure43, $renderingContext)]);

$output23 .= '
                            </div>
                        </div>
                    </div>
            </div>
        </div>

        <div class="tx-forum-thread-body">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">

                        <div class="tx-forum-thread-userImage">
                            <!-- Profilbild -->
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure48 = function() use ($renderingContext, $self) {
$output62 = '';

$output62 .= '
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure64 = function() use ($renderingContext, $self) {
$output65 = '';

$output65 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$renderChildrenClosure67 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments66 = array();
$arguments66['additionalAttributes'] = NULL;
$arguments66['data'] = NULL;
$arguments66['aria'] = NULL;
$arguments66['class'] = NULL;
$arguments66['dir'] = NULL;
$arguments66['id'] = NULL;
$arguments66['lang'] = NULL;
$arguments66['style'] = NULL;
$arguments66['title'] = NULL;
$arguments66['accesskey'] = NULL;
$arguments66['tabindex'] = NULL;
$arguments66['onclick'] = NULL;
$arguments66['alt'] = NULL;
$arguments66['ismap'] = NULL;
$arguments66['longdesc'] = NULL;
$arguments66['usemap'] = NULL;
$arguments66['loading'] = NULL;
$arguments66['decoding'] = NULL;
$arguments66['src'] = '';
$arguments66['treatIdAsReference'] = false;
$arguments66['image'] = NULL;
$arguments66['crop'] = NULL;
$arguments66['cropVariant'] = 'default';
$arguments66['fileExtension'] = NULL;
$arguments66['width'] = NULL;
$arguments66['height'] = NULL;
$arguments66['minWidth'] = NULL;
$arguments66['minHeight'] = NULL;
$arguments66['maxWidth'] = NULL;
$arguments66['maxHeight'] = NULL;
$arguments66['absolute'] = false;
$array68 = array (
);$arguments66['image'] = $renderingContext->getVariableProvider()->getByPath('thread.fileData', $array68);
$array69 = array (
);$arguments66['alt'] = $renderingContext->getVariableProvider()->getByPath('thread.userData.0.username', $array69);
// Rendering Boolean node
// Rendering Array
$array70 = array();
$array70['0'] = 1;

$expression71 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments66['treatIdAsReference'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression71(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array70)
					),
					$renderingContext
				);
$arguments66['class'] = 'img-fluid';
$arguments66['width'] = 60;

$output65 .= TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper::renderStatic($arguments66, $renderChildrenClosure67, $renderingContext);

$output65 .= '
                            ';
return $output65;
};
$arguments63 = array();

$output62 .= '';

$output62 .= '
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure73 = function() use ($renderingContext, $self) {
$output74 = '';

$output74 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$renderChildrenClosure76 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments75 = array();
$arguments75['additionalAttributes'] = NULL;
$arguments75['data'] = NULL;
$arguments75['aria'] = NULL;
$arguments75['class'] = NULL;
$arguments75['dir'] = NULL;
$arguments75['id'] = NULL;
$arguments75['lang'] = NULL;
$arguments75['style'] = NULL;
$arguments75['title'] = NULL;
$arguments75['accesskey'] = NULL;
$arguments75['tabindex'] = NULL;
$arguments75['onclick'] = NULL;
$arguments75['alt'] = NULL;
$arguments75['ismap'] = NULL;
$arguments75['longdesc'] = NULL;
$arguments75['usemap'] = NULL;
$arguments75['loading'] = NULL;
$arguments75['decoding'] = NULL;
$arguments75['src'] = '';
$arguments75['treatIdAsReference'] = false;
$arguments75['image'] = NULL;
$arguments75['crop'] = NULL;
$arguments75['cropVariant'] = 'default';
$arguments75['fileExtension'] = NULL;
$arguments75['width'] = NULL;
$arguments75['height'] = NULL;
$arguments75['minWidth'] = NULL;
$arguments75['minHeight'] = NULL;
$arguments75['maxWidth'] = NULL;
$arguments75['maxHeight'] = NULL;
$arguments75['absolute'] = false;
$arguments75['src'] = 'EXT:forum/Resources/Public/Images/no-image.jpg';
$arguments75['alt'] = 'no image';
$arguments75['class'] = 'img-fluid';
$arguments75['width'] = 60;

$output74 .= TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper::renderStatic($arguments75, $renderChildrenClosure76, $renderingContext);

$output74 .= '
                            ';
return $output74;
};
$arguments72 = array();
$arguments72['if'] = NULL;

$output62 .= '';

$output62 .= '
                        ';
return $output62;
};
$arguments47 = array();
$arguments47['then'] = NULL;
$arguments47['else'] = NULL;
$arguments47['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array59 = array();
$array60 = array (
);$array59['0'] = $renderingContext->getVariableProvider()->getByPath('thread.fileData', $array60);

$expression61 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments47['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression61(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array59)
					),
					$renderingContext
				);
$arguments47['__thenClosure'] = function() use ($renderingContext, $self) {
$output49 = '';

$output49 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$renderChildrenClosure51 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments50 = array();
$arguments50['additionalAttributes'] = NULL;
$arguments50['data'] = NULL;
$arguments50['aria'] = NULL;
$arguments50['class'] = NULL;
$arguments50['dir'] = NULL;
$arguments50['id'] = NULL;
$arguments50['lang'] = NULL;
$arguments50['style'] = NULL;
$arguments50['title'] = NULL;
$arguments50['accesskey'] = NULL;
$arguments50['tabindex'] = NULL;
$arguments50['onclick'] = NULL;
$arguments50['alt'] = NULL;
$arguments50['ismap'] = NULL;
$arguments50['longdesc'] = NULL;
$arguments50['usemap'] = NULL;
$arguments50['loading'] = NULL;
$arguments50['decoding'] = NULL;
$arguments50['src'] = '';
$arguments50['treatIdAsReference'] = false;
$arguments50['image'] = NULL;
$arguments50['crop'] = NULL;
$arguments50['cropVariant'] = 'default';
$arguments50['fileExtension'] = NULL;
$arguments50['width'] = NULL;
$arguments50['height'] = NULL;
$arguments50['minWidth'] = NULL;
$arguments50['minHeight'] = NULL;
$arguments50['maxWidth'] = NULL;
$arguments50['maxHeight'] = NULL;
$arguments50['absolute'] = false;
$array52 = array (
);$arguments50['image'] = $renderingContext->getVariableProvider()->getByPath('thread.fileData', $array52);
$array53 = array (
);$arguments50['alt'] = $renderingContext->getVariableProvider()->getByPath('thread.userData.0.username', $array53);
// Rendering Boolean node
// Rendering Array
$array54 = array();
$array54['0'] = 1;

$expression55 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments50['treatIdAsReference'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression55(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array54)
					),
					$renderingContext
				);
$arguments50['class'] = 'img-fluid';
$arguments50['width'] = 60;

$output49 .= TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper::renderStatic($arguments50, $renderChildrenClosure51, $renderingContext);

$output49 .= '
                            ';
return $output49;
};
$arguments47['__elseClosures'][] = function() use ($renderingContext, $self) {
$output56 = '';

$output56 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$renderChildrenClosure58 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments57 = array();
$arguments57['additionalAttributes'] = NULL;
$arguments57['data'] = NULL;
$arguments57['aria'] = NULL;
$arguments57['class'] = NULL;
$arguments57['dir'] = NULL;
$arguments57['id'] = NULL;
$arguments57['lang'] = NULL;
$arguments57['style'] = NULL;
$arguments57['title'] = NULL;
$arguments57['accesskey'] = NULL;
$arguments57['tabindex'] = NULL;
$arguments57['onclick'] = NULL;
$arguments57['alt'] = NULL;
$arguments57['ismap'] = NULL;
$arguments57['longdesc'] = NULL;
$arguments57['usemap'] = NULL;
$arguments57['loading'] = NULL;
$arguments57['decoding'] = NULL;
$arguments57['src'] = '';
$arguments57['treatIdAsReference'] = false;
$arguments57['image'] = NULL;
$arguments57['crop'] = NULL;
$arguments57['cropVariant'] = 'default';
$arguments57['fileExtension'] = NULL;
$arguments57['width'] = NULL;
$arguments57['height'] = NULL;
$arguments57['minWidth'] = NULL;
$arguments57['minHeight'] = NULL;
$arguments57['maxWidth'] = NULL;
$arguments57['maxHeight'] = NULL;
$arguments57['absolute'] = false;
$arguments57['src'] = 'EXT:forum/Resources/Public/Images/no-image.jpg';
$arguments57['alt'] = 'no image';
$arguments57['class'] = 'img-fluid';
$arguments57['width'] = 60;

$output56 .= TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper::renderStatic($arguments57, $renderChildrenClosure58, $renderingContext);

$output56 .= '
                            ';
return $output56;
};

$output23 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments47, $renderChildrenClosure48, $renderingContext);

$output23 .= '
                  
                        </div>

                        <div class="tx-forum-thread-user">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure78 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\CaseViewHelper
$renderChildrenClosure82 = function() use ($renderingContext, $self) {
$array83 = array (
);return $renderingContext->getVariableProvider()->getByPath('thread.userData.0.username', $array83);
};
$arguments81 = array();
$arguments81['value'] = NULL;
$arguments81['mode'] = 'upper';
$arguments81['mode'] = 'capital';
return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Format\CaseViewHelper::renderStatic($arguments81, $renderChildrenClosure82, $renderingContext)]);
};
$arguments77 = array();
$arguments77['additionalAttributes'] = NULL;
$arguments77['data'] = NULL;
$arguments77['aria'] = NULL;
$arguments77['class'] = NULL;
$arguments77['dir'] = NULL;
$arguments77['id'] = NULL;
$arguments77['lang'] = NULL;
$arguments77['style'] = NULL;
$arguments77['title'] = NULL;
$arguments77['accesskey'] = NULL;
$arguments77['tabindex'] = NULL;
$arguments77['onclick'] = NULL;
$arguments77['name'] = NULL;
$arguments77['rel'] = NULL;
$arguments77['rev'] = NULL;
$arguments77['target'] = NULL;
$arguments77['action'] = NULL;
$arguments77['controller'] = NULL;
$arguments77['extensionName'] = NULL;
$arguments77['pluginName'] = NULL;
$arguments77['pageUid'] = NULL;
$arguments77['pageType'] = NULL;
$arguments77['noCache'] = NULL;
$arguments77['section'] = NULL;
$arguments77['format'] = NULL;
$arguments77['linkAccessRestrictedPages'] = NULL;
$arguments77['additionalParams'] = NULL;
$arguments77['absolute'] = NULL;
$arguments77['addQueryString'] = NULL;
$arguments77['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments77['addQueryStringMethod'] = NULL;
$arguments77['arguments'] = NULL;
$arguments77['action'] = 'show';
$arguments77['controller'] = 'User';
// Rendering Array
$array79 = array();
$array80 = array (
);$array79['user_id'] = $renderingContext->getVariableProvider()->getByPath('thread.user_id', $array80);
$arguments77['arguments'] = $array79;

$output23 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments77, $renderChildrenClosure78, $renderingContext);

$output23 .= '</div>
                    </div>
                    <div class="col-md-8"></div>
                </div>
            </div>
        </div> 


        </div>
    ';
return $output23;
};
$arguments20 = array();
$arguments20['each'] = NULL;
$arguments20['as'] = NULL;
$arguments20['key'] = NULL;
$arguments20['reverse'] = false;
$arguments20['iteration'] = NULL;
$array22 = array (
);$arguments20['each'] = $renderingContext->getVariableProvider()->getByPath('article', $array22);
$arguments20['as'] = 'thread';
$arguments20['iteration'] = 'iterator';

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments20, $renderChildrenClosure21, $renderingContext);

$output0 .= '
    </div>
    
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure85 = function() use ($renderingContext, $self) {
$array86 = array (
);return $renderingContext->getVariableProvider()->getByPath('paging', $array86);
};
$arguments84 = array();
$arguments84['value'] = NULL;

$output0 .= isset($arguments84['value']) ? $arguments84['value'] : $renderChildrenClosure85();

$output0 .= '
    
    </div>
    
    
    
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure88 = function() use ($renderingContext, $self) {
$output92 = '';

$output92 .= '
        <div class="tx-forum-no-threads">
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure94 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments93 = array();
$arguments93['key'] = NULL;
$arguments93['id'] = NULL;
$arguments93['default'] = NULL;
$arguments93['arguments'] = NULL;
$arguments93['extensionName'] = NULL;
$arguments93['languageKey'] = NULL;
$arguments93['alternativeLanguageKeys'] = NULL;
$arguments93['key'] = 'tx_forum_domain_model_forum.no-threads';

$output92 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments93, $renderChildrenClosure94, $renderingContext)]);

$output92 .= '
        </div>
    ';
return $output92;
};
$arguments87 = array();
$arguments87['then'] = NULL;
$arguments87['else'] = NULL;
$arguments87['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array89 = array();
$array90 = array (
);$array89['0'] = $renderingContext->getVariableProvider()->getByPath('counter', $array90);
$array89['1'] = '==0';

$expression91 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == 0);};
$arguments87['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression91(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array89)
					),
					$renderingContext
				);
$arguments87['__thenClosure'] = $renderChildrenClosure88;

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments87, $renderChildrenClosure88, $renderingContext);

$output0 .= '
    

    
';

return $output0;
}
/**
 * Main Render function
 */
public function render(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output95 = '';

$output95 .= '
';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\LayoutViewHelper
$renderChildrenClosure97 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments96 = array();
$arguments96['name'] = NULL;
$arguments96['name'] = 'Default';

$output95 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [NULL]);

$output95 .= '

';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SectionViewHelper
$renderChildrenClosure99 = function() use ($renderingContext, $self) {
$output100 = '';

$output100 .= '
 
    <div class=\'tx-forum-forum\'>  

    <h2 class="tx_forum_threadList-headline">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure102 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments101 = array();
$arguments101['key'] = NULL;
$arguments101['id'] = NULL;
$arguments101['default'] = NULL;
$arguments101['arguments'] = NULL;
$arguments101['extensionName'] = NULL;
$arguments101['languageKey'] = NULL;
$arguments101['alternativeLanguageKeys'] = NULL;
$arguments101['key'] = 'tx_forum_domain_model_forum.activeForum';

$output100 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments101, $renderChildrenClosure102, $renderingContext)]);

$output100 .= ': ';
$array103 = array (
);
$output100 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('forum_data.0.forum', $array103)]);

$output100 .= '</h2>
    
    <div class="tx-forum-buttons">
        <div class="tx-forum-backlink">
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\PageViewHelper
$renderChildrenClosure105 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure107 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure109 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments108 = array();
$arguments108['key'] = NULL;
$arguments108['id'] = NULL;
$arguments108['default'] = NULL;
$arguments108['arguments'] = NULL;
$arguments108['extensionName'] = NULL;
$arguments108['languageKey'] = NULL;
$arguments108['alternativeLanguageKeys'] = NULL;
$arguments108['key'] = 'tx_forum_domain_model_forum.backlink';
return TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments108, $renderChildrenClosure109, $renderingContext);
};
$arguments106 = array();
$arguments106['value'] = NULL;
return isset($arguments106['value']) ? $arguments106['value'] : $renderChildrenClosure107();
};
$arguments104 = array();
$arguments104['additionalAttributes'] = NULL;
$arguments104['data'] = NULL;
$arguments104['aria'] = NULL;
$arguments104['class'] = NULL;
$arguments104['dir'] = NULL;
$arguments104['id'] = NULL;
$arguments104['lang'] = NULL;
$arguments104['style'] = NULL;
$arguments104['title'] = NULL;
$arguments104['accesskey'] = NULL;
$arguments104['tabindex'] = NULL;
$arguments104['onclick'] = NULL;
$arguments104['target'] = NULL;
$arguments104['rel'] = NULL;
$arguments104['pageUid'] = NULL;
$arguments104['pageType'] = NULL;
$arguments104['noCache'] = NULL;
$arguments104['language'] = NULL;
$arguments104['section'] = NULL;
$arguments104['linkAccessRestrictedPages'] = NULL;
$arguments104['additionalParams'] = NULL;
$arguments104['absolute'] = NULL;
$arguments104['addQueryString'] = NULL;
$arguments104['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments104['addQueryStringMethod'] = NULL;

$output100 .= TYPO3\CMS\Fluid\ViewHelpers\Link\PageViewHelper::renderStatic($arguments104, $renderChildrenClosure105, $renderingContext);

$output100 .= '
        </div>
        <div class="tx-forum-newThread">
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Security\IfAuthenticatedViewHelper
$renderChildrenClosure111 = function() use ($renderingContext, $self) {
$output112 = '';

$output112 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure114 = function() use ($renderingContext, $self) {
$output115 = '';

$output115 .= '
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure117 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure119 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments118 = array();
$arguments118['key'] = NULL;
$arguments118['id'] = NULL;
$arguments118['default'] = NULL;
$arguments118['arguments'] = NULL;
$arguments118['extensionName'] = NULL;
$arguments118['languageKey'] = NULL;
$arguments118['alternativeLanguageKeys'] = NULL;
$arguments118['key'] = 'tx_forum_domain_model_forum.newThreadButton';
return TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments118, $renderChildrenClosure119, $renderingContext);
};
$arguments116 = array();
$arguments116['value'] = NULL;

$output115 .= isset($arguments116['value']) ? $arguments116['value'] : $renderChildrenClosure117();

$output115 .= '
                ';
return $output115;
};
$arguments113 = array();
$arguments113['additionalAttributes'] = NULL;
$arguments113['data'] = NULL;
$arguments113['aria'] = NULL;
$arguments113['class'] = NULL;
$arguments113['dir'] = NULL;
$arguments113['id'] = NULL;
$arguments113['lang'] = NULL;
$arguments113['style'] = NULL;
$arguments113['title'] = NULL;
$arguments113['accesskey'] = NULL;
$arguments113['tabindex'] = NULL;
$arguments113['onclick'] = NULL;
$arguments113['name'] = NULL;
$arguments113['rel'] = NULL;
$arguments113['rev'] = NULL;
$arguments113['target'] = NULL;
$arguments113['action'] = NULL;
$arguments113['controller'] = NULL;
$arguments113['extensionName'] = NULL;
$arguments113['pluginName'] = NULL;
$arguments113['pageUid'] = NULL;
$arguments113['pageType'] = NULL;
$arguments113['noCache'] = NULL;
$arguments113['section'] = NULL;
$arguments113['format'] = NULL;
$arguments113['linkAccessRestrictedPages'] = NULL;
$arguments113['additionalParams'] = NULL;
$arguments113['absolute'] = NULL;
$arguments113['addQueryString'] = NULL;
$arguments113['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments113['addQueryStringMethod'] = NULL;
$arguments113['arguments'] = NULL;
$arguments113['action'] = 'new';
$arguments113['controller'] = 'Thread';

$output112 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments113, $renderChildrenClosure114, $renderingContext);

$output112 .= '
            ';
return $output112;
};
$arguments110 = array();
$arguments110['then'] = NULL;
$arguments110['else'] = NULL;
$arguments110['__thenClosure'] = $renderChildrenClosure111;

$output100 .= TYPO3\CMS\Fluid\ViewHelpers\Security\IfAuthenticatedViewHelper::renderStatic($arguments110, $renderChildrenClosure111, $renderingContext);

$output100 .= '
        </div>
    </div>
    

   
   

     <div class="tx-forum-threads">   
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure121 = function() use ($renderingContext, $self) {
$output123 = '';

$output123 .= '
        
        <div class="tx-forum-thread ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure125 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments124 = array();
$arguments124['then'] = NULL;
$arguments124['else'] = NULL;
$arguments124['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array126 = array();
$array127 = array (
);$array126['0'] = $renderingContext->getVariableProvider()->getByPath('iterator.isEven', $array127);

$expression128 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments124['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression128(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array126)
					),
					$renderingContext
				);
$arguments124['then'] = 'thread-even';

$output123 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments124, $renderChildrenClosure125, $renderingContext);

$output123 .= ' ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure130 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments129 = array();
$arguments129['then'] = NULL;
$arguments129['else'] = NULL;
$arguments129['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array131 = array();
$array132 = array (
);$array131['0'] = $renderingContext->getVariableProvider()->getByPath('iterator.isOdd', $array132);

$expression133 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments129['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression133(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array131)
					),
					$renderingContext
				);
$arguments129['then'] = 'thread-odd';

$output123 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments129, $renderChildrenClosure130, $renderingContext);

$output123 .= '">
            <div class="tx-forum-thread-head">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="tx-forum-thread-title">
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure135 = function() use ($renderingContext, $self) {
$array139 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('thread.title', $array139)]);
};
$arguments134 = array();
$arguments134['additionalAttributes'] = NULL;
$arguments134['data'] = NULL;
$arguments134['aria'] = NULL;
$arguments134['class'] = NULL;
$arguments134['dir'] = NULL;
$arguments134['id'] = NULL;
$arguments134['lang'] = NULL;
$arguments134['style'] = NULL;
$arguments134['title'] = NULL;
$arguments134['accesskey'] = NULL;
$arguments134['tabindex'] = NULL;
$arguments134['onclick'] = NULL;
$arguments134['name'] = NULL;
$arguments134['rel'] = NULL;
$arguments134['rev'] = NULL;
$arguments134['target'] = NULL;
$arguments134['action'] = NULL;
$arguments134['controller'] = NULL;
$arguments134['extensionName'] = NULL;
$arguments134['pluginName'] = NULL;
$arguments134['pageUid'] = NULL;
$arguments134['pageType'] = NULL;
$arguments134['noCache'] = NULL;
$arguments134['section'] = NULL;
$arguments134['format'] = NULL;
$arguments134['linkAccessRestrictedPages'] = NULL;
$arguments134['additionalParams'] = NULL;
$arguments134['absolute'] = NULL;
$arguments134['addQueryString'] = NULL;
$arguments134['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments134['addQueryStringMethod'] = NULL;
$arguments134['arguments'] = NULL;
$arguments134['action'] = 'show';
$arguments134['controller'] = 'Thread';
// Rendering Array
$array136 = array();
$array137 = array (
);$array136['forum'] = $renderingContext->getVariableProvider()->getByPath('forum_data.0.uid', $array137);
$array138 = array (
);$array136['thread'] = $renderingContext->getVariableProvider()->getByPath('thread.uid', $array138);
$arguments134['arguments'] = $array136;

$output123 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments134, $renderChildrenClosure135, $renderingContext);

$output123 .= '
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="tx-forum-thread-date">
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure141 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments140 = array();
$arguments140['key'] = NULL;
$arguments140['id'] = NULL;
$arguments140['default'] = NULL;
$arguments140['arguments'] = NULL;
$arguments140['extensionName'] = NULL;
$arguments140['languageKey'] = NULL;
$arguments140['alternativeLanguageKeys'] = NULL;
$arguments140['key'] = 'tx_forum_domain_model_forum.created';

$output123 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments140, $renderChildrenClosure141, $renderingContext)]);

$output123 .= ': 
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper
$renderChildrenClosure143 = function() use ($renderingContext, $self) {
$array146 = array (
);return $renderingContext->getVariableProvider()->getByPath('thread.crdate', $array146);
};
$arguments142 = array();
$arguments142['date'] = NULL;
$arguments142['format'] = '';
$arguments142['base'] = NULL;
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure145 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments144 = array();
$arguments144['key'] = NULL;
$arguments144['id'] = NULL;
$arguments144['default'] = NULL;
$arguments144['arguments'] = NULL;
$arguments144['extensionName'] = NULL;
$arguments144['languageKey'] = NULL;
$arguments144['alternativeLanguageKeys'] = NULL;
$arguments144['key'] = 'tx_forum_domain_model_forum.date';
$arguments142['format'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments144, $renderChildrenClosure145, $renderingContext);
$renderChildrenClosure143 = ($arguments142['date'] !== null) ? function() use ($arguments142) { return $arguments142['date']; } : $renderChildrenClosure143;
$output123 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper::renderStatic($arguments142, $renderChildrenClosure143, $renderingContext)]);

$output123 .= '
                            </div>
                        </div>
                    </div>
            </div>
        </div>

        <div class="tx-forum-thread-body">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">

                        <div class="tx-forum-thread-userImage">
                            <!-- Profilbild -->
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure148 = function() use ($renderingContext, $self) {
$output162 = '';

$output162 .= '
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure164 = function() use ($renderingContext, $self) {
$output165 = '';

$output165 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$renderChildrenClosure167 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments166 = array();
$arguments166['additionalAttributes'] = NULL;
$arguments166['data'] = NULL;
$arguments166['aria'] = NULL;
$arguments166['class'] = NULL;
$arguments166['dir'] = NULL;
$arguments166['id'] = NULL;
$arguments166['lang'] = NULL;
$arguments166['style'] = NULL;
$arguments166['title'] = NULL;
$arguments166['accesskey'] = NULL;
$arguments166['tabindex'] = NULL;
$arguments166['onclick'] = NULL;
$arguments166['alt'] = NULL;
$arguments166['ismap'] = NULL;
$arguments166['longdesc'] = NULL;
$arguments166['usemap'] = NULL;
$arguments166['loading'] = NULL;
$arguments166['decoding'] = NULL;
$arguments166['src'] = '';
$arguments166['treatIdAsReference'] = false;
$arguments166['image'] = NULL;
$arguments166['crop'] = NULL;
$arguments166['cropVariant'] = 'default';
$arguments166['fileExtension'] = NULL;
$arguments166['width'] = NULL;
$arguments166['height'] = NULL;
$arguments166['minWidth'] = NULL;
$arguments166['minHeight'] = NULL;
$arguments166['maxWidth'] = NULL;
$arguments166['maxHeight'] = NULL;
$arguments166['absolute'] = false;
$array168 = array (
);$arguments166['image'] = $renderingContext->getVariableProvider()->getByPath('thread.fileData', $array168);
$array169 = array (
);$arguments166['alt'] = $renderingContext->getVariableProvider()->getByPath('thread.userData.0.username', $array169);
// Rendering Boolean node
// Rendering Array
$array170 = array();
$array170['0'] = 1;

$expression171 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments166['treatIdAsReference'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression171(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array170)
					),
					$renderingContext
				);
$arguments166['class'] = 'img-fluid';
$arguments166['width'] = 60;

$output165 .= TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper::renderStatic($arguments166, $renderChildrenClosure167, $renderingContext);

$output165 .= '
                            ';
return $output165;
};
$arguments163 = array();

$output162 .= '';

$output162 .= '
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure173 = function() use ($renderingContext, $self) {
$output174 = '';

$output174 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$renderChildrenClosure176 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments175 = array();
$arguments175['additionalAttributes'] = NULL;
$arguments175['data'] = NULL;
$arguments175['aria'] = NULL;
$arguments175['class'] = NULL;
$arguments175['dir'] = NULL;
$arguments175['id'] = NULL;
$arguments175['lang'] = NULL;
$arguments175['style'] = NULL;
$arguments175['title'] = NULL;
$arguments175['accesskey'] = NULL;
$arguments175['tabindex'] = NULL;
$arguments175['onclick'] = NULL;
$arguments175['alt'] = NULL;
$arguments175['ismap'] = NULL;
$arguments175['longdesc'] = NULL;
$arguments175['usemap'] = NULL;
$arguments175['loading'] = NULL;
$arguments175['decoding'] = NULL;
$arguments175['src'] = '';
$arguments175['treatIdAsReference'] = false;
$arguments175['image'] = NULL;
$arguments175['crop'] = NULL;
$arguments175['cropVariant'] = 'default';
$arguments175['fileExtension'] = NULL;
$arguments175['width'] = NULL;
$arguments175['height'] = NULL;
$arguments175['minWidth'] = NULL;
$arguments175['minHeight'] = NULL;
$arguments175['maxWidth'] = NULL;
$arguments175['maxHeight'] = NULL;
$arguments175['absolute'] = false;
$arguments175['src'] = 'EXT:forum/Resources/Public/Images/no-image.jpg';
$arguments175['alt'] = 'no image';
$arguments175['class'] = 'img-fluid';
$arguments175['width'] = 60;

$output174 .= TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper::renderStatic($arguments175, $renderChildrenClosure176, $renderingContext);

$output174 .= '
                            ';
return $output174;
};
$arguments172 = array();
$arguments172['if'] = NULL;

$output162 .= '';

$output162 .= '
                        ';
return $output162;
};
$arguments147 = array();
$arguments147['then'] = NULL;
$arguments147['else'] = NULL;
$arguments147['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array159 = array();
$array160 = array (
);$array159['0'] = $renderingContext->getVariableProvider()->getByPath('thread.fileData', $array160);

$expression161 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments147['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression161(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array159)
					),
					$renderingContext
				);
$arguments147['__thenClosure'] = function() use ($renderingContext, $self) {
$output149 = '';

$output149 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$renderChildrenClosure151 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments150 = array();
$arguments150['additionalAttributes'] = NULL;
$arguments150['data'] = NULL;
$arguments150['aria'] = NULL;
$arguments150['class'] = NULL;
$arguments150['dir'] = NULL;
$arguments150['id'] = NULL;
$arguments150['lang'] = NULL;
$arguments150['style'] = NULL;
$arguments150['title'] = NULL;
$arguments150['accesskey'] = NULL;
$arguments150['tabindex'] = NULL;
$arguments150['onclick'] = NULL;
$arguments150['alt'] = NULL;
$arguments150['ismap'] = NULL;
$arguments150['longdesc'] = NULL;
$arguments150['usemap'] = NULL;
$arguments150['loading'] = NULL;
$arguments150['decoding'] = NULL;
$arguments150['src'] = '';
$arguments150['treatIdAsReference'] = false;
$arguments150['image'] = NULL;
$arguments150['crop'] = NULL;
$arguments150['cropVariant'] = 'default';
$arguments150['fileExtension'] = NULL;
$arguments150['width'] = NULL;
$arguments150['height'] = NULL;
$arguments150['minWidth'] = NULL;
$arguments150['minHeight'] = NULL;
$arguments150['maxWidth'] = NULL;
$arguments150['maxHeight'] = NULL;
$arguments150['absolute'] = false;
$array152 = array (
);$arguments150['image'] = $renderingContext->getVariableProvider()->getByPath('thread.fileData', $array152);
$array153 = array (
);$arguments150['alt'] = $renderingContext->getVariableProvider()->getByPath('thread.userData.0.username', $array153);
// Rendering Boolean node
// Rendering Array
$array154 = array();
$array154['0'] = 1;

$expression155 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments150['treatIdAsReference'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression155(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array154)
					),
					$renderingContext
				);
$arguments150['class'] = 'img-fluid';
$arguments150['width'] = 60;

$output149 .= TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper::renderStatic($arguments150, $renderChildrenClosure151, $renderingContext);

$output149 .= '
                            ';
return $output149;
};
$arguments147['__elseClosures'][] = function() use ($renderingContext, $self) {
$output156 = '';

$output156 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$renderChildrenClosure158 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments157 = array();
$arguments157['additionalAttributes'] = NULL;
$arguments157['data'] = NULL;
$arguments157['aria'] = NULL;
$arguments157['class'] = NULL;
$arguments157['dir'] = NULL;
$arguments157['id'] = NULL;
$arguments157['lang'] = NULL;
$arguments157['style'] = NULL;
$arguments157['title'] = NULL;
$arguments157['accesskey'] = NULL;
$arguments157['tabindex'] = NULL;
$arguments157['onclick'] = NULL;
$arguments157['alt'] = NULL;
$arguments157['ismap'] = NULL;
$arguments157['longdesc'] = NULL;
$arguments157['usemap'] = NULL;
$arguments157['loading'] = NULL;
$arguments157['decoding'] = NULL;
$arguments157['src'] = '';
$arguments157['treatIdAsReference'] = false;
$arguments157['image'] = NULL;
$arguments157['crop'] = NULL;
$arguments157['cropVariant'] = 'default';
$arguments157['fileExtension'] = NULL;
$arguments157['width'] = NULL;
$arguments157['height'] = NULL;
$arguments157['minWidth'] = NULL;
$arguments157['minHeight'] = NULL;
$arguments157['maxWidth'] = NULL;
$arguments157['maxHeight'] = NULL;
$arguments157['absolute'] = false;
$arguments157['src'] = 'EXT:forum/Resources/Public/Images/no-image.jpg';
$arguments157['alt'] = 'no image';
$arguments157['class'] = 'img-fluid';
$arguments157['width'] = 60;

$output156 .= TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper::renderStatic($arguments157, $renderChildrenClosure158, $renderingContext);

$output156 .= '
                            ';
return $output156;
};

$output123 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments147, $renderChildrenClosure148, $renderingContext);

$output123 .= '
                  
                        </div>

                        <div class="tx-forum-thread-user">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure178 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\CaseViewHelper
$renderChildrenClosure182 = function() use ($renderingContext, $self) {
$array183 = array (
);return $renderingContext->getVariableProvider()->getByPath('thread.userData.0.username', $array183);
};
$arguments181 = array();
$arguments181['value'] = NULL;
$arguments181['mode'] = 'upper';
$arguments181['mode'] = 'capital';
return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Format\CaseViewHelper::renderStatic($arguments181, $renderChildrenClosure182, $renderingContext)]);
};
$arguments177 = array();
$arguments177['additionalAttributes'] = NULL;
$arguments177['data'] = NULL;
$arguments177['aria'] = NULL;
$arguments177['class'] = NULL;
$arguments177['dir'] = NULL;
$arguments177['id'] = NULL;
$arguments177['lang'] = NULL;
$arguments177['style'] = NULL;
$arguments177['title'] = NULL;
$arguments177['accesskey'] = NULL;
$arguments177['tabindex'] = NULL;
$arguments177['onclick'] = NULL;
$arguments177['name'] = NULL;
$arguments177['rel'] = NULL;
$arguments177['rev'] = NULL;
$arguments177['target'] = NULL;
$arguments177['action'] = NULL;
$arguments177['controller'] = NULL;
$arguments177['extensionName'] = NULL;
$arguments177['pluginName'] = NULL;
$arguments177['pageUid'] = NULL;
$arguments177['pageType'] = NULL;
$arguments177['noCache'] = NULL;
$arguments177['section'] = NULL;
$arguments177['format'] = NULL;
$arguments177['linkAccessRestrictedPages'] = NULL;
$arguments177['additionalParams'] = NULL;
$arguments177['absolute'] = NULL;
$arguments177['addQueryString'] = NULL;
$arguments177['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments177['addQueryStringMethod'] = NULL;
$arguments177['arguments'] = NULL;
$arguments177['action'] = 'show';
$arguments177['controller'] = 'User';
// Rendering Array
$array179 = array();
$array180 = array (
);$array179['user_id'] = $renderingContext->getVariableProvider()->getByPath('thread.user_id', $array180);
$arguments177['arguments'] = $array179;

$output123 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments177, $renderChildrenClosure178, $renderingContext);

$output123 .= '</div>
                    </div>
                    <div class="col-md-8"></div>
                </div>
            </div>
        </div> 


        </div>
    ';
return $output123;
};
$arguments120 = array();
$arguments120['each'] = NULL;
$arguments120['as'] = NULL;
$arguments120['key'] = NULL;
$arguments120['reverse'] = false;
$arguments120['iteration'] = NULL;
$array122 = array (
);$arguments120['each'] = $renderingContext->getVariableProvider()->getByPath('article', $array122);
$arguments120['as'] = 'thread';
$arguments120['iteration'] = 'iterator';

$output100 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments120, $renderChildrenClosure121, $renderingContext);

$output100 .= '
    </div>
    
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure185 = function() use ($renderingContext, $self) {
$array186 = array (
);return $renderingContext->getVariableProvider()->getByPath('paging', $array186);
};
$arguments184 = array();
$arguments184['value'] = NULL;

$output100 .= isset($arguments184['value']) ? $arguments184['value'] : $renderChildrenClosure185();

$output100 .= '
    
    </div>
    
    
    
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure188 = function() use ($renderingContext, $self) {
$output192 = '';

$output192 .= '
        <div class="tx-forum-no-threads">
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure194 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments193 = array();
$arguments193['key'] = NULL;
$arguments193['id'] = NULL;
$arguments193['default'] = NULL;
$arguments193['arguments'] = NULL;
$arguments193['extensionName'] = NULL;
$arguments193['languageKey'] = NULL;
$arguments193['alternativeLanguageKeys'] = NULL;
$arguments193['key'] = 'tx_forum_domain_model_forum.no-threads';

$output192 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments193, $renderChildrenClosure194, $renderingContext)]);

$output192 .= '
        </div>
    ';
return $output192;
};
$arguments187 = array();
$arguments187['then'] = NULL;
$arguments187['else'] = NULL;
$arguments187['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array189 = array();
$array190 = array (
);$array189['0'] = $renderingContext->getVariableProvider()->getByPath('counter', $array190);
$array189['1'] = '==0';

$expression191 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == 0);};
$arguments187['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression191(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array189)
					),
					$renderingContext
				);
$arguments187['__thenClosure'] = $renderChildrenClosure188;

$output100 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments187, $renderChildrenClosure188, $renderingContext);

$output100 .= '
    

    
';
return $output100;
};
$arguments98 = array();
$arguments98['name'] = NULL;
$arguments98['name'] = 'content';

$output95 .= NULL;

$output95 .= ' 

';

return $output95;
}


}
#