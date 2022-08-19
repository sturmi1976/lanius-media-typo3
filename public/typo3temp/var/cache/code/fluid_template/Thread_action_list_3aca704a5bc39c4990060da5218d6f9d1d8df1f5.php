<?php

class Thread_action_list_3aca704a5bc39c4990060da5218d6f9d1d8df1f5 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

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

$output23 .= ': <b></b></div>
                    <div class="col-md-4"></div>
                </div>
            </div>

            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="tx-forum-thread-content">
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\CropViewHelper
$renderChildrenClosure95 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\StripTagsViewHelper
$renderChildrenClosure97 = function() use ($renderingContext, $self) {
$array98 = array (
);return $renderingContext->getVariableProvider()->getByPath('thread.text', $array98);
};
$arguments96 = array();
$arguments96['value'] = NULL;
$arguments96['allowedTags'] = NULL;
$renderChildrenClosure97 = ($arguments96['value'] !== null) ? function() use ($arguments96) { return $arguments96['value']; } : $renderChildrenClosure97;return TYPO3\CMS\Fluid\ViewHelpers\Format\StripTagsViewHelper::renderStatic($arguments96, $renderChildrenClosure97, $renderingContext);
};
$arguments94 = array();
$arguments94['maxCharacters'] = NULL;
$arguments94['append'] = '&hellip;';
$arguments94['respectWordBoundaries'] = true;
$arguments94['respectHtml'] = true;
$arguments94['maxCharacters'] = 200;
$arguments94['append'] = '&nbsp;&nbsp;...';

$output23 .= TYPO3\CMS\Fluid\ViewHelpers\Format\CropViewHelper::renderStatic($arguments94, $renderChildrenClosure95, $renderingContext);

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
$renderChildrenClosure100 = function() use ($renderingContext, $self) {
$array101 = array (
);return $renderingContext->getVariableProvider()->getByPath('paging', $array101);
};
$arguments99 = array();
$arguments99['value'] = NULL;

$output0 .= isset($arguments99['value']) ? $arguments99['value'] : $renderChildrenClosure100();

$output0 .= '
    
    </div>
    
    
    
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure103 = function() use ($renderingContext, $self) {
$output107 = '';

$output107 .= '
        <div class="tx-forum-no-threads">
            ';
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
$arguments108['key'] = 'tx_forum_domain_model_forum.no-threads';

$output107 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments108, $renderChildrenClosure109, $renderingContext)]);

$output107 .= '
        </div>
    ';
return $output107;
};
$arguments102 = array();
$arguments102['then'] = NULL;
$arguments102['else'] = NULL;
$arguments102['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array104 = array();
$array105 = array (
);$array104['0'] = $renderingContext->getVariableProvider()->getByPath('counter', $array105);
$array104['1'] = '==0';

$expression106 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == 0);};
$arguments102['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression106(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array104)
					),
					$renderingContext
				);
$arguments102['__thenClosure'] = $renderChildrenClosure103;

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments102, $renderChildrenClosure103, $renderingContext);

$output0 .= '
    

    
';

return $output0;
}
/**
 * Main Render function
 */
public function render(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output110 = '';

$output110 .= '
';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\LayoutViewHelper
$renderChildrenClosure112 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments111 = array();
$arguments111['name'] = NULL;
$arguments111['name'] = 'Default';

$output110 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [NULL]);

$output110 .= '

';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SectionViewHelper
$renderChildrenClosure114 = function() use ($renderingContext, $self) {
$output115 = '';

$output115 .= '
 
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

$output115 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments116, $renderChildrenClosure117, $renderingContext)]);

$output115 .= ': ';
$array118 = array (
);
$output115 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('forum_data.0.forum', $array118)]);

$output115 .= '</h2>
    
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

$output115 .= TYPO3\CMS\Fluid\ViewHelpers\Link\PageViewHelper::renderStatic($arguments119, $renderChildrenClosure120, $renderingContext);

$output115 .= '
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

$output115 .= TYPO3\CMS\Fluid\ViewHelpers\Security\IfAuthenticatedViewHelper::renderStatic($arguments125, $renderChildrenClosure126, $renderingContext);

$output115 .= '
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
                                <span class="tx-forum-threadlist-usergroup" style="color: ';
$array200 = array (
);
$output138 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('thread.userGroup.0.color', $array200)]);

$output138 .= '">
                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure202 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments201 = array();
$arguments201['key'] = NULL;
$arguments201['id'] = NULL;
$arguments201['default'] = NULL;
$arguments201['arguments'] = NULL;
$arguments201['extensionName'] = NULL;
$arguments201['languageKey'] = NULL;
$arguments201['alternativeLanguageKeys'] = NULL;
$arguments201['key'] = 'tx_forum_domain_model_forum.rankLabel';

$output138 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments201, $renderChildrenClosure202, $renderingContext)]);

$output138 .= ': ';
$array203 = array (
);
$output138 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('thread.userGroup.0.title', $array203)]);

$output138 .= '
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
$renderChildrenClosure205 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments204 = array();
$arguments204['key'] = NULL;
$arguments204['id'] = NULL;
$arguments204['default'] = NULL;
$arguments204['arguments'] = NULL;
$arguments204['extensionName'] = NULL;
$arguments204['languageKey'] = NULL;
$arguments204['alternativeLanguageKeys'] = NULL;
$arguments204['key'] = 'tx_forum_domain_model_forum.klicksLabel';

$output138 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments204, $renderChildrenClosure205, $renderingContext)]);

$output138 .= ': <b>';
$array206 = array (
);
$output138 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('thread.klicks', $array206)]);

$output138 .= '</b></div>
                    <div class="col-md-4">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure208 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments207 = array();
$arguments207['key'] = NULL;
$arguments207['id'] = NULL;
$arguments207['default'] = NULL;
$arguments207['arguments'] = NULL;
$arguments207['extensionName'] = NULL;
$arguments207['languageKey'] = NULL;
$arguments207['alternativeLanguageKeys'] = NULL;
$arguments207['key'] = 'tx_forum_domain_model_forum.answerLabel';

$output138 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments207, $renderChildrenClosure208, $renderingContext)]);

$output138 .= ': <b></b></div>
                    <div class="col-md-4"></div>
                </div>
            </div>

            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="tx-forum-thread-content">
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\CropViewHelper
$renderChildrenClosure210 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\StripTagsViewHelper
$renderChildrenClosure212 = function() use ($renderingContext, $self) {
$array213 = array (
);return $renderingContext->getVariableProvider()->getByPath('thread.text', $array213);
};
$arguments211 = array();
$arguments211['value'] = NULL;
$arguments211['allowedTags'] = NULL;
$renderChildrenClosure212 = ($arguments211['value'] !== null) ? function() use ($arguments211) { return $arguments211['value']; } : $renderChildrenClosure212;return TYPO3\CMS\Fluid\ViewHelpers\Format\StripTagsViewHelper::renderStatic($arguments211, $renderChildrenClosure212, $renderingContext);
};
$arguments209 = array();
$arguments209['maxCharacters'] = NULL;
$arguments209['append'] = '&hellip;';
$arguments209['respectWordBoundaries'] = true;
$arguments209['respectHtml'] = true;
$arguments209['maxCharacters'] = 200;
$arguments209['append'] = '&nbsp;&nbsp;...';

$output138 .= TYPO3\CMS\Fluid\ViewHelpers\Format\CropViewHelper::renderStatic($arguments209, $renderChildrenClosure210, $renderingContext);

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

$output115 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments135, $renderChildrenClosure136, $renderingContext);

$output115 .= '
    </div>
    
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure215 = function() use ($renderingContext, $self) {
$array216 = array (
);return $renderingContext->getVariableProvider()->getByPath('paging', $array216);
};
$arguments214 = array();
$arguments214['value'] = NULL;

$output115 .= isset($arguments214['value']) ? $arguments214['value'] : $renderChildrenClosure215();

$output115 .= '
    
    </div>
    
    
    
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure218 = function() use ($renderingContext, $self) {
$output222 = '';

$output222 .= '
        <div class="tx-forum-no-threads">
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure224 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments223 = array();
$arguments223['key'] = NULL;
$arguments223['id'] = NULL;
$arguments223['default'] = NULL;
$arguments223['arguments'] = NULL;
$arguments223['extensionName'] = NULL;
$arguments223['languageKey'] = NULL;
$arguments223['alternativeLanguageKeys'] = NULL;
$arguments223['key'] = 'tx_forum_domain_model_forum.no-threads';

$output222 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments223, $renderChildrenClosure224, $renderingContext)]);

$output222 .= '
        </div>
    ';
return $output222;
};
$arguments217 = array();
$arguments217['then'] = NULL;
$arguments217['else'] = NULL;
$arguments217['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array219 = array();
$array220 = array (
);$array219['0'] = $renderingContext->getVariableProvider()->getByPath('counter', $array220);
$array219['1'] = '==0';

$expression221 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == 0);};
$arguments217['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression221(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array219)
					),
					$renderingContext
				);
$arguments217['__thenClosure'] = $renderChildrenClosure218;

$output115 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments217, $renderChildrenClosure218, $renderingContext);

$output115 .= '
    

    
';
return $output115;
};
$arguments113 = array();
$arguments113['name'] = NULL;
$arguments113['name'] = 'content';

$output110 .= NULL;

$output110 .= ' 

';

return $output110;
}


}
#