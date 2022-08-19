<?php

class Thread_action_list_d65fa599ea8f5c028ddb258f5e8b30f356f8eabc extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

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
  'sfc' => 
  array (
    0 => 'SFC\\Staticfilecache\\ViewHelpers',
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
            
            <div class="tx-forum-thread-userinformation">
                <div class="container">
                    <div class="row">
                        <div class="col-md-2">

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
                        </div>
                        <div class="col-md-10">
                            <div class="tx-forum-thread-user text-end">
                                <span class="tx-forum-threadlist-username">
                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure78 = function() use ($renderingContext, $self) {
$output81 = '';

$output81 .= '<i class="fa-solid fa-user"></i>&nbsp;&nbsp;';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\CaseViewHelper
$renderChildrenClosure83 = function() use ($renderingContext, $self) {
$array84 = array (
);return $renderingContext->getVariableProvider()->getByPath('thread.userData.0.username', $array84);
};
$arguments82 = array();
$arguments82['value'] = NULL;
$arguments82['mode'] = 'upper';
$arguments82['mode'] = 'capital';

$output81 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Format\CaseViewHelper::renderStatic($arguments82, $renderChildrenClosure83, $renderingContext)]);
return $output81;
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

$output23 .= '
                                </span>
                                <span class="tx-forum-threadlist-usergroup" style="color: ';
$array85 = array (
);
$output23 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('thread.userGroup.0.color', $array85)]);

$output23 .= '">
                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure87 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments86 = array();
$arguments86['key'] = NULL;
$arguments86['id'] = NULL;
$arguments86['default'] = NULL;
$arguments86['arguments'] = NULL;
$arguments86['extensionName'] = NULL;
$arguments86['languageKey'] = NULL;
$arguments86['alternativeLanguageKeys'] = NULL;
$arguments86['key'] = 'tx_forum_domain_model_forum.rankLabel';

$output23 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments86, $renderChildrenClosure87, $renderingContext)]);

$output23 .= ': ';
$array88 = array (
);
$output23 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('thread.userGroup.0.title', $array88)]);

$output23 .= '
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container">
                <div class="row">
                    <div class="col-md-4">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure90 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments89 = array();
$arguments89['key'] = NULL;
$arguments89['id'] = NULL;
$arguments89['default'] = NULL;
$arguments89['arguments'] = NULL;
$arguments89['extensionName'] = NULL;
$arguments89['languageKey'] = NULL;
$arguments89['alternativeLanguageKeys'] = NULL;
$arguments89['key'] = 'tx_forum_domain_model_forum.klicksLabel';

$output23 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments89, $renderChildrenClosure90, $renderingContext)]);

$output23 .= ': <b>';
$array91 = array (
);
$output23 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('thread.klicks', $array91)]);

$output23 .= '</b></div>
                    <div class="col-md-4">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure93 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments92 = array();
$arguments92['key'] = NULL;
$arguments92['id'] = NULL;
$arguments92['default'] = NULL;
$arguments92['arguments'] = NULL;
$arguments92['extensionName'] = NULL;
$arguments92['languageKey'] = NULL;
$arguments92['alternativeLanguageKeys'] = NULL;
$arguments92['key'] = 'tx_forum_domain_model_forum.answerLabel';

$output23 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments92, $renderChildrenClosure93, $renderingContext)]);

$output23 .= ': <b>';
$array94 = array (
);
$output23 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('thread.countTopics.0.countTopics', $array94)]);

$output23 .= '</b></div>
                    <div class="col-md-4"></div>
                </div>
            </div>

            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="tx-forum-thread-content">
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\CropViewHelper
$renderChildrenClosure96 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\StripTagsViewHelper
$renderChildrenClosure98 = function() use ($renderingContext, $self) {
$array99 = array (
);return $renderingContext->getVariableProvider()->getByPath('thread.text', $array99);
};
$arguments97 = array();
$arguments97['value'] = NULL;
$arguments97['allowedTags'] = NULL;
$renderChildrenClosure98 = ($arguments97['value'] !== null) ? function() use ($arguments97) { return $arguments97['value']; } : $renderChildrenClosure98;return TYPO3\CMS\Fluid\ViewHelpers\Format\StripTagsViewHelper::renderStatic($arguments97, $renderChildrenClosure98, $renderingContext);
};
$arguments95 = array();
$arguments95['maxCharacters'] = NULL;
$arguments95['append'] = '&hellip;';
$arguments95['respectWordBoundaries'] = true;
$arguments95['respectHtml'] = true;
$arguments95['maxCharacters'] = 200;
$arguments95['append'] = '&nbsp;&nbsp;...';

$output23 .= TYPO3\CMS\Fluid\ViewHelpers\Format\CropViewHelper::renderStatic($arguments95, $renderChildrenClosure96, $renderingContext);

$output23 .= '
                        </div>
                    </div>
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
$renderChildrenClosure101 = function() use ($renderingContext, $self) {
$array102 = array (
);return $renderingContext->getVariableProvider()->getByPath('paging', $array102);
};
$arguments100 = array();
$arguments100['value'] = NULL;

$output0 .= isset($arguments100['value']) ? $arguments100['value'] : $renderChildrenClosure101();

$output0 .= '
    
    </div>
    
    
    
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure104 = function() use ($renderingContext, $self) {
$output108 = '';

$output108 .= '
        <div class="tx-forum-no-threads">
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure110 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments109 = array();
$arguments109['key'] = NULL;
$arguments109['id'] = NULL;
$arguments109['default'] = NULL;
$arguments109['arguments'] = NULL;
$arguments109['extensionName'] = NULL;
$arguments109['languageKey'] = NULL;
$arguments109['alternativeLanguageKeys'] = NULL;
$arguments109['key'] = 'tx_forum_domain_model_forum.no-threads';

$output108 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments109, $renderChildrenClosure110, $renderingContext)]);

$output108 .= '
        </div>
    ';
return $output108;
};
$arguments103 = array();
$arguments103['then'] = NULL;
$arguments103['else'] = NULL;
$arguments103['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array105 = array();
$array106 = array (
);$array105['0'] = $renderingContext->getVariableProvider()->getByPath('counter', $array106);
$array105['1'] = '==0';

$expression107 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == 0);};
$arguments103['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression107(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array105)
					),
					$renderingContext
				);
$arguments103['__thenClosure'] = $renderChildrenClosure104;

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments103, $renderChildrenClosure104, $renderingContext);

$output0 .= '
    

    
';

return $output0;
}
/**
 * Main Render function
 */
public function render(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output111 = '';

$output111 .= '
';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\LayoutViewHelper
$renderChildrenClosure113 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments112 = array();
$arguments112['name'] = NULL;
$arguments112['name'] = 'Default';

$output111 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [NULL]);

$output111 .= '

';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SectionViewHelper
$renderChildrenClosure115 = function() use ($renderingContext, $self) {
$output116 = '';

$output116 .= '
 
    <div class=\'tx-forum-forum\'>  

    <h2 class="tx_forum_threadList-headline">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure118 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments117 = array();
$arguments117['key'] = NULL;
$arguments117['id'] = NULL;
$arguments117['default'] = NULL;
$arguments117['arguments'] = NULL;
$arguments117['extensionName'] = NULL;
$arguments117['languageKey'] = NULL;
$arguments117['alternativeLanguageKeys'] = NULL;
$arguments117['key'] = 'tx_forum_domain_model_forum.activeForum';

$output116 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments117, $renderChildrenClosure118, $renderingContext)]);

$output116 .= ': ';
$array119 = array (
);
$output116 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('forum_data.0.forum', $array119)]);

$output116 .= '</h2>
    
    <div class="tx-forum-buttons">
        <div class="tx-forum-backlink">
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\PageViewHelper
$renderChildrenClosure121 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure123 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure125 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments124 = array();
$arguments124['key'] = NULL;
$arguments124['id'] = NULL;
$arguments124['default'] = NULL;
$arguments124['arguments'] = NULL;
$arguments124['extensionName'] = NULL;
$arguments124['languageKey'] = NULL;
$arguments124['alternativeLanguageKeys'] = NULL;
$arguments124['key'] = 'tx_forum_domain_model_forum.backlink';
return TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments124, $renderChildrenClosure125, $renderingContext);
};
$arguments122 = array();
$arguments122['value'] = NULL;
return isset($arguments122['value']) ? $arguments122['value'] : $renderChildrenClosure123();
};
$arguments120 = array();
$arguments120['additionalAttributes'] = NULL;
$arguments120['data'] = NULL;
$arguments120['aria'] = NULL;
$arguments120['class'] = NULL;
$arguments120['dir'] = NULL;
$arguments120['id'] = NULL;
$arguments120['lang'] = NULL;
$arguments120['style'] = NULL;
$arguments120['title'] = NULL;
$arguments120['accesskey'] = NULL;
$arguments120['tabindex'] = NULL;
$arguments120['onclick'] = NULL;
$arguments120['target'] = NULL;
$arguments120['rel'] = NULL;
$arguments120['pageUid'] = NULL;
$arguments120['pageType'] = NULL;
$arguments120['noCache'] = NULL;
$arguments120['language'] = NULL;
$arguments120['section'] = NULL;
$arguments120['linkAccessRestrictedPages'] = NULL;
$arguments120['additionalParams'] = NULL;
$arguments120['absolute'] = NULL;
$arguments120['addQueryString'] = NULL;
$arguments120['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments120['addQueryStringMethod'] = NULL;

$output116 .= TYPO3\CMS\Fluid\ViewHelpers\Link\PageViewHelper::renderStatic($arguments120, $renderChildrenClosure121, $renderingContext);

$output116 .= '
        </div>
        <div class="tx-forum-newThread">
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Security\IfAuthenticatedViewHelper
$renderChildrenClosure127 = function() use ($renderingContext, $self) {
$output128 = '';

$output128 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure130 = function() use ($renderingContext, $self) {
$output131 = '';

$output131 .= '
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure133 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure135 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments134 = array();
$arguments134['key'] = NULL;
$arguments134['id'] = NULL;
$arguments134['default'] = NULL;
$arguments134['arguments'] = NULL;
$arguments134['extensionName'] = NULL;
$arguments134['languageKey'] = NULL;
$arguments134['alternativeLanguageKeys'] = NULL;
$arguments134['key'] = 'tx_forum_domain_model_forum.newThreadButton';
return TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments134, $renderChildrenClosure135, $renderingContext);
};
$arguments132 = array();
$arguments132['value'] = NULL;

$output131 .= isset($arguments132['value']) ? $arguments132['value'] : $renderChildrenClosure133();

$output131 .= '
                ';
return $output131;
};
$arguments129 = array();
$arguments129['additionalAttributes'] = NULL;
$arguments129['data'] = NULL;
$arguments129['aria'] = NULL;
$arguments129['class'] = NULL;
$arguments129['dir'] = NULL;
$arguments129['id'] = NULL;
$arguments129['lang'] = NULL;
$arguments129['style'] = NULL;
$arguments129['title'] = NULL;
$arguments129['accesskey'] = NULL;
$arguments129['tabindex'] = NULL;
$arguments129['onclick'] = NULL;
$arguments129['name'] = NULL;
$arguments129['rel'] = NULL;
$arguments129['rev'] = NULL;
$arguments129['target'] = NULL;
$arguments129['action'] = NULL;
$arguments129['controller'] = NULL;
$arguments129['extensionName'] = NULL;
$arguments129['pluginName'] = NULL;
$arguments129['pageUid'] = NULL;
$arguments129['pageType'] = NULL;
$arguments129['noCache'] = NULL;
$arguments129['section'] = NULL;
$arguments129['format'] = NULL;
$arguments129['linkAccessRestrictedPages'] = NULL;
$arguments129['additionalParams'] = NULL;
$arguments129['absolute'] = NULL;
$arguments129['addQueryString'] = NULL;
$arguments129['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments129['addQueryStringMethod'] = NULL;
$arguments129['arguments'] = NULL;
$arguments129['action'] = 'new';
$arguments129['controller'] = 'Thread';

$output128 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments129, $renderChildrenClosure130, $renderingContext);

$output128 .= '
            ';
return $output128;
};
$arguments126 = array();
$arguments126['then'] = NULL;
$arguments126['else'] = NULL;
$arguments126['__thenClosure'] = $renderChildrenClosure127;

$output116 .= TYPO3\CMS\Fluid\ViewHelpers\Security\IfAuthenticatedViewHelper::renderStatic($arguments126, $renderChildrenClosure127, $renderingContext);

$output116 .= '
        </div>
    </div>
    

   
   

     <div class="tx-forum-threads">   
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure137 = function() use ($renderingContext, $self) {
$output139 = '';

$output139 .= '
        
        <div class="tx-forum-thread ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure141 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments140 = array();
$arguments140['then'] = NULL;
$arguments140['else'] = NULL;
$arguments140['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array142 = array();
$array143 = array (
);$array142['0'] = $renderingContext->getVariableProvider()->getByPath('iterator.isEven', $array143);

$expression144 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments140['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression144(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array142)
					),
					$renderingContext
				);
$arguments140['then'] = 'thread-even';

$output139 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments140, $renderChildrenClosure141, $renderingContext);

$output139 .= ' ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure146 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments145 = array();
$arguments145['then'] = NULL;
$arguments145['else'] = NULL;
$arguments145['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array147 = array();
$array148 = array (
);$array147['0'] = $renderingContext->getVariableProvider()->getByPath('iterator.isOdd', $array148);

$expression149 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments145['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression149(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array147)
					),
					$renderingContext
				);
$arguments145['then'] = 'thread-odd';

$output139 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments145, $renderChildrenClosure146, $renderingContext);

$output139 .= '">
            <div class="tx-forum-thread-head">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="tx-forum-thread-title">
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure151 = function() use ($renderingContext, $self) {
$array155 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('thread.title', $array155)]);
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
$arguments150['name'] = NULL;
$arguments150['rel'] = NULL;
$arguments150['rev'] = NULL;
$arguments150['target'] = NULL;
$arguments150['action'] = NULL;
$arguments150['controller'] = NULL;
$arguments150['extensionName'] = NULL;
$arguments150['pluginName'] = NULL;
$arguments150['pageUid'] = NULL;
$arguments150['pageType'] = NULL;
$arguments150['noCache'] = NULL;
$arguments150['section'] = NULL;
$arguments150['format'] = NULL;
$arguments150['linkAccessRestrictedPages'] = NULL;
$arguments150['additionalParams'] = NULL;
$arguments150['absolute'] = NULL;
$arguments150['addQueryString'] = NULL;
$arguments150['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments150['addQueryStringMethod'] = NULL;
$arguments150['arguments'] = NULL;
$arguments150['action'] = 'show';
$arguments150['controller'] = 'Thread';
// Rendering Array
$array152 = array();
$array153 = array (
);$array152['forum'] = $renderingContext->getVariableProvider()->getByPath('forum_data.0.uid', $array153);
$array154 = array (
);$array152['thread'] = $renderingContext->getVariableProvider()->getByPath('thread.uid', $array154);
$arguments150['arguments'] = $array152;

$output139 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments150, $renderChildrenClosure151, $renderingContext);

$output139 .= '
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="tx-forum-thread-date">
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure157 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments156 = array();
$arguments156['key'] = NULL;
$arguments156['id'] = NULL;
$arguments156['default'] = NULL;
$arguments156['arguments'] = NULL;
$arguments156['extensionName'] = NULL;
$arguments156['languageKey'] = NULL;
$arguments156['alternativeLanguageKeys'] = NULL;
$arguments156['key'] = 'tx_forum_domain_model_forum.created';

$output139 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments156, $renderChildrenClosure157, $renderingContext)]);

$output139 .= ': 
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper
$renderChildrenClosure159 = function() use ($renderingContext, $self) {
$array162 = array (
);return $renderingContext->getVariableProvider()->getByPath('thread.crdate', $array162);
};
$arguments158 = array();
$arguments158['date'] = NULL;
$arguments158['format'] = '';
$arguments158['base'] = NULL;
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure161 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments160 = array();
$arguments160['key'] = NULL;
$arguments160['id'] = NULL;
$arguments160['default'] = NULL;
$arguments160['arguments'] = NULL;
$arguments160['extensionName'] = NULL;
$arguments160['languageKey'] = NULL;
$arguments160['alternativeLanguageKeys'] = NULL;
$arguments160['key'] = 'tx_forum_domain_model_forum.date';
$arguments158['format'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments160, $renderChildrenClosure161, $renderingContext);
$renderChildrenClosure159 = ($arguments158['date'] !== null) ? function() use ($arguments158) { return $arguments158['date']; } : $renderChildrenClosure159;
$output139 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper::renderStatic($arguments158, $renderChildrenClosure159, $renderingContext)]);

$output139 .= '
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
$renderChildrenClosure164 = function() use ($renderingContext, $self) {
$output178 = '';

$output178 .= '
                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure180 = function() use ($renderingContext, $self) {
$output181 = '';

$output181 .= '
                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$renderChildrenClosure183 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments182 = array();
$arguments182['additionalAttributes'] = NULL;
$arguments182['data'] = NULL;
$arguments182['aria'] = NULL;
$arguments182['class'] = NULL;
$arguments182['dir'] = NULL;
$arguments182['id'] = NULL;
$arguments182['lang'] = NULL;
$arguments182['style'] = NULL;
$arguments182['title'] = NULL;
$arguments182['accesskey'] = NULL;
$arguments182['tabindex'] = NULL;
$arguments182['onclick'] = NULL;
$arguments182['alt'] = NULL;
$arguments182['ismap'] = NULL;
$arguments182['longdesc'] = NULL;
$arguments182['usemap'] = NULL;
$arguments182['loading'] = NULL;
$arguments182['decoding'] = NULL;
$arguments182['src'] = '';
$arguments182['treatIdAsReference'] = false;
$arguments182['image'] = NULL;
$arguments182['crop'] = NULL;
$arguments182['cropVariant'] = 'default';
$arguments182['fileExtension'] = NULL;
$arguments182['width'] = NULL;
$arguments182['height'] = NULL;
$arguments182['minWidth'] = NULL;
$arguments182['minHeight'] = NULL;
$arguments182['maxWidth'] = NULL;
$arguments182['maxHeight'] = NULL;
$arguments182['absolute'] = false;
$array184 = array (
);$arguments182['image'] = $renderingContext->getVariableProvider()->getByPath('thread.fileData', $array184);
$array185 = array (
);$arguments182['alt'] = $renderingContext->getVariableProvider()->getByPath('thread.userData.0.username', $array185);
// Rendering Boolean node
// Rendering Array
$array186 = array();
$array186['0'] = 1;

$expression187 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments182['treatIdAsReference'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression187(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array186)
					),
					$renderingContext
				);
$arguments182['class'] = 'img-fluid';
$arguments182['width'] = 60;

$output181 .= TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper::renderStatic($arguments182, $renderChildrenClosure183, $renderingContext);

$output181 .= '
                                ';
return $output181;
};
$arguments179 = array();

$output178 .= '';

$output178 .= '
                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure189 = function() use ($renderingContext, $self) {
$output190 = '';

$output190 .= '
                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$renderChildrenClosure192 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments191 = array();
$arguments191['additionalAttributes'] = NULL;
$arguments191['data'] = NULL;
$arguments191['aria'] = NULL;
$arguments191['class'] = NULL;
$arguments191['dir'] = NULL;
$arguments191['id'] = NULL;
$arguments191['lang'] = NULL;
$arguments191['style'] = NULL;
$arguments191['title'] = NULL;
$arguments191['accesskey'] = NULL;
$arguments191['tabindex'] = NULL;
$arguments191['onclick'] = NULL;
$arguments191['alt'] = NULL;
$arguments191['ismap'] = NULL;
$arguments191['longdesc'] = NULL;
$arguments191['usemap'] = NULL;
$arguments191['loading'] = NULL;
$arguments191['decoding'] = NULL;
$arguments191['src'] = '';
$arguments191['treatIdAsReference'] = false;
$arguments191['image'] = NULL;
$arguments191['crop'] = NULL;
$arguments191['cropVariant'] = 'default';
$arguments191['fileExtension'] = NULL;
$arguments191['width'] = NULL;
$arguments191['height'] = NULL;
$arguments191['minWidth'] = NULL;
$arguments191['minHeight'] = NULL;
$arguments191['maxWidth'] = NULL;
$arguments191['maxHeight'] = NULL;
$arguments191['absolute'] = false;
$arguments191['src'] = 'EXT:forum/Resources/Public/Images/no-image.jpg';
$arguments191['alt'] = 'no image';
$arguments191['class'] = 'img-fluid';
$arguments191['width'] = 60;

$output190 .= TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper::renderStatic($arguments191, $renderChildrenClosure192, $renderingContext);

$output190 .= '
                                ';
return $output190;
};
$arguments188 = array();
$arguments188['if'] = NULL;

$output178 .= '';

$output178 .= '
                            ';
return $output178;
};
$arguments163 = array();
$arguments163['then'] = NULL;
$arguments163['else'] = NULL;
$arguments163['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array175 = array();
$array176 = array (
);$array175['0'] = $renderingContext->getVariableProvider()->getByPath('thread.fileData', $array176);

$expression177 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments163['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression177(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array175)
					),
					$renderingContext
				);
$arguments163['__thenClosure'] = function() use ($renderingContext, $self) {
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
$arguments163['__elseClosures'][] = function() use ($renderingContext, $self) {
$output172 = '';

$output172 .= '
                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$renderChildrenClosure174 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments173 = array();
$arguments173['additionalAttributes'] = NULL;
$arguments173['data'] = NULL;
$arguments173['aria'] = NULL;
$arguments173['class'] = NULL;
$arguments173['dir'] = NULL;
$arguments173['id'] = NULL;
$arguments173['lang'] = NULL;
$arguments173['style'] = NULL;
$arguments173['title'] = NULL;
$arguments173['accesskey'] = NULL;
$arguments173['tabindex'] = NULL;
$arguments173['onclick'] = NULL;
$arguments173['alt'] = NULL;
$arguments173['ismap'] = NULL;
$arguments173['longdesc'] = NULL;
$arguments173['usemap'] = NULL;
$arguments173['loading'] = NULL;
$arguments173['decoding'] = NULL;
$arguments173['src'] = '';
$arguments173['treatIdAsReference'] = false;
$arguments173['image'] = NULL;
$arguments173['crop'] = NULL;
$arguments173['cropVariant'] = 'default';
$arguments173['fileExtension'] = NULL;
$arguments173['width'] = NULL;
$arguments173['height'] = NULL;
$arguments173['minWidth'] = NULL;
$arguments173['minHeight'] = NULL;
$arguments173['maxWidth'] = NULL;
$arguments173['maxHeight'] = NULL;
$arguments173['absolute'] = false;
$arguments173['src'] = 'EXT:forum/Resources/Public/Images/no-image.jpg';
$arguments173['alt'] = 'no image';
$arguments173['class'] = 'img-fluid';
$arguments173['width'] = 60;

$output172 .= TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper::renderStatic($arguments173, $renderChildrenClosure174, $renderingContext);

$output172 .= '
                                ';
return $output172;
};

$output139 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments163, $renderChildrenClosure164, $renderingContext);

$output139 .= '
                    
                            </div> 
                        </div>
                        <div class="col-md-10">
                            <div class="tx-forum-thread-user text-end">
                                <span class="tx-forum-threadlist-username">
                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure194 = function() use ($renderingContext, $self) {
$output197 = '';

$output197 .= '<i class="fa-solid fa-user"></i>&nbsp;&nbsp;';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\CaseViewHelper
$renderChildrenClosure199 = function() use ($renderingContext, $self) {
$array200 = array (
);return $renderingContext->getVariableProvider()->getByPath('thread.userData.0.username', $array200);
};
$arguments198 = array();
$arguments198['value'] = NULL;
$arguments198['mode'] = 'upper';
$arguments198['mode'] = 'capital';

$output197 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Format\CaseViewHelper::renderStatic($arguments198, $renderChildrenClosure199, $renderingContext)]);
return $output197;
};
$arguments193 = array();
$arguments193['additionalAttributes'] = NULL;
$arguments193['data'] = NULL;
$arguments193['aria'] = NULL;
$arguments193['class'] = NULL;
$arguments193['dir'] = NULL;
$arguments193['id'] = NULL;
$arguments193['lang'] = NULL;
$arguments193['style'] = NULL;
$arguments193['title'] = NULL;
$arguments193['accesskey'] = NULL;
$arguments193['tabindex'] = NULL;
$arguments193['onclick'] = NULL;
$arguments193['name'] = NULL;
$arguments193['rel'] = NULL;
$arguments193['rev'] = NULL;
$arguments193['target'] = NULL;
$arguments193['action'] = NULL;
$arguments193['controller'] = NULL;
$arguments193['extensionName'] = NULL;
$arguments193['pluginName'] = NULL;
$arguments193['pageUid'] = NULL;
$arguments193['pageType'] = NULL;
$arguments193['noCache'] = NULL;
$arguments193['section'] = NULL;
$arguments193['format'] = NULL;
$arguments193['linkAccessRestrictedPages'] = NULL;
$arguments193['additionalParams'] = NULL;
$arguments193['absolute'] = NULL;
$arguments193['addQueryString'] = NULL;
$arguments193['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments193['addQueryStringMethod'] = NULL;
$arguments193['arguments'] = NULL;
$arguments193['action'] = 'show';
$arguments193['controller'] = 'User';
// Rendering Array
$array195 = array();
$array196 = array (
);$array195['user_id'] = $renderingContext->getVariableProvider()->getByPath('thread.user_id', $array196);
$arguments193['arguments'] = $array195;

$output139 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments193, $renderChildrenClosure194, $renderingContext);

$output139 .= '
                                </span>
                                <span class="tx-forum-threadlist-usergroup" style="color: ';
$array201 = array (
);
$output139 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('thread.userGroup.0.color', $array201)]);

$output139 .= '">
                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure203 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments202 = array();
$arguments202['key'] = NULL;
$arguments202['id'] = NULL;
$arguments202['default'] = NULL;
$arguments202['arguments'] = NULL;
$arguments202['extensionName'] = NULL;
$arguments202['languageKey'] = NULL;
$arguments202['alternativeLanguageKeys'] = NULL;
$arguments202['key'] = 'tx_forum_domain_model_forum.rankLabel';

$output139 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments202, $renderChildrenClosure203, $renderingContext)]);

$output139 .= ': ';
$array204 = array (
);
$output139 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('thread.userGroup.0.title', $array204)]);

$output139 .= '
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container">
                <div class="row">
                    <div class="col-md-4">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure206 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments205 = array();
$arguments205['key'] = NULL;
$arguments205['id'] = NULL;
$arguments205['default'] = NULL;
$arguments205['arguments'] = NULL;
$arguments205['extensionName'] = NULL;
$arguments205['languageKey'] = NULL;
$arguments205['alternativeLanguageKeys'] = NULL;
$arguments205['key'] = 'tx_forum_domain_model_forum.klicksLabel';

$output139 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments205, $renderChildrenClosure206, $renderingContext)]);

$output139 .= ': <b>';
$array207 = array (
);
$output139 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('thread.klicks', $array207)]);

$output139 .= '</b></div>
                    <div class="col-md-4">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure209 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments208 = array();
$arguments208['key'] = NULL;
$arguments208['id'] = NULL;
$arguments208['default'] = NULL;
$arguments208['arguments'] = NULL;
$arguments208['extensionName'] = NULL;
$arguments208['languageKey'] = NULL;
$arguments208['alternativeLanguageKeys'] = NULL;
$arguments208['key'] = 'tx_forum_domain_model_forum.answerLabel';

$output139 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments208, $renderChildrenClosure209, $renderingContext)]);

$output139 .= ': <b>';
$array210 = array (
);
$output139 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('thread.countTopics.0.countTopics', $array210)]);

$output139 .= '</b></div>
                    <div class="col-md-4"></div>
                </div>
            </div>

            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="tx-forum-thread-content">
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\CropViewHelper
$renderChildrenClosure212 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\StripTagsViewHelper
$renderChildrenClosure214 = function() use ($renderingContext, $self) {
$array215 = array (
);return $renderingContext->getVariableProvider()->getByPath('thread.text', $array215);
};
$arguments213 = array();
$arguments213['value'] = NULL;
$arguments213['allowedTags'] = NULL;
$renderChildrenClosure214 = ($arguments213['value'] !== null) ? function() use ($arguments213) { return $arguments213['value']; } : $renderChildrenClosure214;return TYPO3\CMS\Fluid\ViewHelpers\Format\StripTagsViewHelper::renderStatic($arguments213, $renderChildrenClosure214, $renderingContext);
};
$arguments211 = array();
$arguments211['maxCharacters'] = NULL;
$arguments211['append'] = '&hellip;';
$arguments211['respectWordBoundaries'] = true;
$arguments211['respectHtml'] = true;
$arguments211['maxCharacters'] = 200;
$arguments211['append'] = '&nbsp;&nbsp;...';

$output139 .= TYPO3\CMS\Fluid\ViewHelpers\Format\CropViewHelper::renderStatic($arguments211, $renderChildrenClosure212, $renderingContext);

$output139 .= '
                        </div>
                    </div>
                </div>
            </div>

        </div> 


        </div>
    ';
return $output139;
};
$arguments136 = array();
$arguments136['each'] = NULL;
$arguments136['as'] = NULL;
$arguments136['key'] = NULL;
$arguments136['reverse'] = false;
$arguments136['iteration'] = NULL;
$array138 = array (
);$arguments136['each'] = $renderingContext->getVariableProvider()->getByPath('article', $array138);
$arguments136['as'] = 'thread';
$arguments136['iteration'] = 'iterator';

$output116 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments136, $renderChildrenClosure137, $renderingContext);

$output116 .= '
    </div>
    
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure217 = function() use ($renderingContext, $self) {
$array218 = array (
);return $renderingContext->getVariableProvider()->getByPath('paging', $array218);
};
$arguments216 = array();
$arguments216['value'] = NULL;

$output116 .= isset($arguments216['value']) ? $arguments216['value'] : $renderChildrenClosure217();

$output116 .= '
    
    </div>
    
    
    
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure220 = function() use ($renderingContext, $self) {
$output224 = '';

$output224 .= '
        <div class="tx-forum-no-threads">
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure226 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments225 = array();
$arguments225['key'] = NULL;
$arguments225['id'] = NULL;
$arguments225['default'] = NULL;
$arguments225['arguments'] = NULL;
$arguments225['extensionName'] = NULL;
$arguments225['languageKey'] = NULL;
$arguments225['alternativeLanguageKeys'] = NULL;
$arguments225['key'] = 'tx_forum_domain_model_forum.no-threads';

$output224 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments225, $renderChildrenClosure226, $renderingContext)]);

$output224 .= '
        </div>
    ';
return $output224;
};
$arguments219 = array();
$arguments219['then'] = NULL;
$arguments219['else'] = NULL;
$arguments219['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array221 = array();
$array222 = array (
);$array221['0'] = $renderingContext->getVariableProvider()->getByPath('counter', $array222);
$array221['1'] = '==0';

$expression223 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == 0);};
$arguments219['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression223(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array221)
					),
					$renderingContext
				);
$arguments219['__thenClosure'] = $renderChildrenClosure220;

$output116 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments219, $renderChildrenClosure220, $renderingContext);

$output116 .= '
    

    
';
return $output116;
};
$arguments114 = array();
$arguments114['name'] = NULL;
$arguments114['name'] = 'content';

$output111 .= NULL;

$output111 .= ' 

';

return $output111;
}


}
#