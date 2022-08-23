<?php

class Forum_action_list_52b71521dc626e7173cdee8edf454b626a22403e extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

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
    
    
    
    <h1>';
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
$arguments1['key'] = 'tx_forum_domain_model_forum.title';

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext)]);

$output0 .= '</h1>
    
    <div class="tx-category-foren-all">
        
        <table border=\'0\' width=\'100%\' class="tx-forum-overview" cellspacing="0" cellpadding="0">
            <thead>
                <tr>
                    
                    <th colspan="2"><span>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure4 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments3 = array();
$arguments3['key'] = NULL;
$arguments3['id'] = NULL;
$arguments3['default'] = NULL;
$arguments3['arguments'] = NULL;
$arguments3['extensionName'] = NULL;
$arguments3['languageKey'] = NULL;
$arguments3['alternativeLanguageKeys'] = NULL;
$arguments3['key'] = 'tx_forum_domain_model_forum.forumLabel';

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments3, $renderChildrenClosure4, $renderingContext)]);

$output0 .= '</span></th>
                    <th><span>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure6 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments5 = array();
$arguments5['key'] = NULL;
$arguments5['id'] = NULL;
$arguments5['default'] = NULL;
$arguments5['arguments'] = NULL;
$arguments5['extensionName'] = NULL;
$arguments5['languageKey'] = NULL;
$arguments5['alternativeLanguageKeys'] = NULL;
$arguments5['key'] = 'tx_forum_domain_model_forum.threadLabel';

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments5, $renderChildrenClosure6, $renderingContext)]);

$output0 .= '</span></th>
                    <th><span>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure8 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments7 = array();
$arguments7['key'] = NULL;
$arguments7['id'] = NULL;
$arguments7['default'] = NULL;
$arguments7['arguments'] = NULL;
$arguments7['extensionName'] = NULL;
$arguments7['languageKey'] = NULL;
$arguments7['alternativeLanguageKeys'] = NULL;
$arguments7['key'] = 'tx_forum_domain_model_forum.topicLabel';

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments7, $renderChildrenClosure8, $renderingContext)]);

$output0 .= '</span></th>
                    <th><span>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure10 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments9 = array();
$arguments9['key'] = NULL;
$arguments9['id'] = NULL;
$arguments9['default'] = NULL;
$arguments9['arguments'] = NULL;
$arguments9['extensionName'] = NULL;
$arguments9['languageKey'] = NULL;
$arguments9['alternativeLanguageKeys'] = NULL;
$arguments9['key'] = 'tx_forum_domain_model_forum.lastThread';

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments9, $renderChildrenClosure10, $renderingContext)]);

$output0 .= '</span></th> 
                </tr>
            </thead>
            <tbody>
                
                
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure12 = function() use ($renderingContext, $self) {
$output14 = '';

$output14 .= '
                <tr>
                    <td colspan="5">
                        <div class="tx-forum-category"><b>';
$array15 = array (
);
$output14 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('forum.category', $array15)]);

$output14 .= '</b></div>
                     </td>
                </tr>
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure17 = function() use ($renderingContext, $self) {
$output19 = '';

$output19 .= '
                    <tr class="tx-forum-thread-line">
                        <td class="valign-middle tx-forum-forum ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure21 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments20 = array();
$arguments20['then'] = NULL;
$arguments20['else'] = NULL;
$arguments20['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array22 = array();
$array23 = array (
);$array22['0'] = $renderingContext->getVariableProvider()->getByPath('iterator.isEven', $array23);

$expression24 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments20['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression24(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array22)
					),
					$renderingContext
				);
$arguments20['then'] = 'even';

$output19 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments20, $renderChildrenClosure21, $renderingContext);

$output19 .= ' ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure26 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments25 = array();
$arguments25['then'] = NULL;
$arguments25['else'] = NULL;
$arguments25['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array27 = array();
$array28 = array (
);$array27['0'] = $renderingContext->getVariableProvider()->getByPath('iterator.isOdd', $array28);

$expression29 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments25['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression29(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array27)
					),
					$renderingContext
				);
$arguments25['then'] = 'odd';

$output19 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments25, $renderChildrenClosure26, $renderingContext);

$output19 .= '">
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure31 = function() use ($renderingContext, $self) {
$output52 = '';

$output52 .= ' 
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure54 = function() use ($renderingContext, $self) {
$output55 = '';

$output55 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$renderChildrenClosure57 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments56 = array();
$arguments56['additionalAttributes'] = NULL;
$arguments56['data'] = NULL;
$arguments56['aria'] = NULL;
$arguments56['class'] = NULL;
$arguments56['dir'] = NULL;
$arguments56['id'] = NULL;
$arguments56['lang'] = NULL;
$arguments56['style'] = NULL;
$arguments56['title'] = NULL;
$arguments56['accesskey'] = NULL;
$arguments56['tabindex'] = NULL;
$arguments56['onclick'] = NULL;
$arguments56['alt'] = NULL;
$arguments56['ismap'] = NULL;
$arguments56['longdesc'] = NULL;
$arguments56['usemap'] = NULL;
$arguments56['loading'] = NULL;
$arguments56['decoding'] = NULL;
$arguments56['src'] = '';
$arguments56['treatIdAsReference'] = false;
$arguments56['image'] = NULL;
$arguments56['crop'] = NULL;
$arguments56['cropVariant'] = 'default';
$arguments56['fileExtension'] = NULL;
$arguments56['width'] = NULL;
$arguments56['height'] = NULL;
$arguments56['minWidth'] = NULL;
$arguments56['minHeight'] = NULL;
$arguments56['maxWidth'] = NULL;
$arguments56['maxHeight'] = NULL;
$arguments56['absolute'] = false;
$arguments56['src'] = 'EXT:forum/Resources/Public/Images/Icons/forum.png';
$arguments56['width'] = 40;
$output58 = '';

$output58 .= 'Forum: ';
$array59 = array (
);
$output58 .= $renderingContext->getVariableProvider()->getByPath('forumlist.forum', $array59);
$arguments56['alt'] = $output58;
$output60 = '';

$output60 .= 'Forum: ';
$array61 = array (
);
$output60 .= $renderingContext->getVariableProvider()->getByPath('forumlist.forum', $array61);
$arguments56['title'] = $output60;

$output55 .= TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper::renderStatic($arguments56, $renderChildrenClosure57, $renderingContext);

$output55 .= '
                            ';
return $output55;
};
$arguments53 = array();

$output52 .= '';

$output52 .= '
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure63 = function() use ($renderingContext, $self) {
$output67 = '';

$output67 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$renderChildrenClosure69 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments68 = array();
$arguments68['additionalAttributes'] = NULL;
$arguments68['data'] = NULL;
$arguments68['aria'] = NULL;
$arguments68['class'] = NULL;
$arguments68['dir'] = NULL;
$arguments68['id'] = NULL;
$arguments68['lang'] = NULL;
$arguments68['style'] = NULL;
$arguments68['title'] = NULL;
$arguments68['accesskey'] = NULL;
$arguments68['tabindex'] = NULL;
$arguments68['onclick'] = NULL;
$arguments68['alt'] = NULL;
$arguments68['ismap'] = NULL;
$arguments68['longdesc'] = NULL;
$arguments68['usemap'] = NULL;
$arguments68['loading'] = NULL;
$arguments68['decoding'] = NULL;
$arguments68['src'] = '';
$arguments68['treatIdAsReference'] = false;
$arguments68['image'] = NULL;
$arguments68['crop'] = NULL;
$arguments68['cropVariant'] = 'default';
$arguments68['fileExtension'] = NULL;
$arguments68['width'] = NULL;
$arguments68['height'] = NULL;
$arguments68['minWidth'] = NULL;
$arguments68['minHeight'] = NULL;
$arguments68['maxWidth'] = NULL;
$arguments68['maxHeight'] = NULL;
$arguments68['absolute'] = false;
$arguments68['src'] = 'EXT:forum/Resources/Public/Images/Icons/hot-forum.png';
$arguments68['width'] = 40;
$output70 = '';

$output70 .= 'Gefragtes Forum: ';
$array71 = array (
);
$output70 .= $renderingContext->getVariableProvider()->getByPath('forumlist.forum', $array71);
$arguments68['alt'] = $output70;
$output72 = '';

$output72 .= 'Gefragtes Forum: ';
$array73 = array (
);
$output72 .= $renderingContext->getVariableProvider()->getByPath('forumlist.forum', $array73);
$arguments68['title'] = $output72;

$output67 .= TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper::renderStatic($arguments68, $renderChildrenClosure69, $renderingContext);

$output67 .= '
                            ';
return $output67;
};
$arguments62 = array();
$arguments62['if'] = NULL;
// Rendering Boolean node
// Rendering Array
$array64 = array();
$array65 = array (
);$array64['0'] = $renderingContext->getVariableProvider()->getByPath('forumlist.thread_counter.0.counts', $array65);
$array64['1'] = ' > 7';

$expression66 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) > 7);};
$arguments62['if'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression66(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array64)
					),
					$renderingContext
				);

$output52 .= '';

$output52 .= '
                        ';
return $output52;
};
$arguments30 = array();
$arguments30['then'] = NULL;
$arguments30['else'] = NULL;
$arguments30['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array49 = array();
$array50 = array (
);$array49['0'] = $renderingContext->getVariableProvider()->getByPath('forumlist.thread_counter.0.counts', $array50);
$array49['1'] = ' < 7';

$expression51 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) < 7);};
$arguments30['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression51(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array49)
					),
					$renderingContext
				);
$arguments30['__thenClosure'] = function() use ($renderingContext, $self) {
$output32 = '';

$output32 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$renderChildrenClosure34 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments33 = array();
$arguments33['additionalAttributes'] = NULL;
$arguments33['data'] = NULL;
$arguments33['aria'] = NULL;
$arguments33['class'] = NULL;
$arguments33['dir'] = NULL;
$arguments33['id'] = NULL;
$arguments33['lang'] = NULL;
$arguments33['style'] = NULL;
$arguments33['title'] = NULL;
$arguments33['accesskey'] = NULL;
$arguments33['tabindex'] = NULL;
$arguments33['onclick'] = NULL;
$arguments33['alt'] = NULL;
$arguments33['ismap'] = NULL;
$arguments33['longdesc'] = NULL;
$arguments33['usemap'] = NULL;
$arguments33['loading'] = NULL;
$arguments33['decoding'] = NULL;
$arguments33['src'] = '';
$arguments33['treatIdAsReference'] = false;
$arguments33['image'] = NULL;
$arguments33['crop'] = NULL;
$arguments33['cropVariant'] = 'default';
$arguments33['fileExtension'] = NULL;
$arguments33['width'] = NULL;
$arguments33['height'] = NULL;
$arguments33['minWidth'] = NULL;
$arguments33['minHeight'] = NULL;
$arguments33['maxWidth'] = NULL;
$arguments33['maxHeight'] = NULL;
$arguments33['absolute'] = false;
$arguments33['src'] = 'EXT:forum/Resources/Public/Images/Icons/forum.png';
$arguments33['width'] = 40;
$output35 = '';

$output35 .= 'Forum: ';
$array36 = array (
);
$output35 .= $renderingContext->getVariableProvider()->getByPath('forumlist.forum', $array36);
$arguments33['alt'] = $output35;
$output37 = '';

$output37 .= 'Forum: ';
$array38 = array (
);
$output37 .= $renderingContext->getVariableProvider()->getByPath('forumlist.forum', $array38);
$arguments33['title'] = $output37;

$output32 .= TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper::renderStatic($arguments33, $renderChildrenClosure34, $renderingContext);

$output32 .= '
                            ';
return $output32;
};
$arguments30['__elseClosures'][] = function() use ($renderingContext, $self) {
$output39 = '';

$output39 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$renderChildrenClosure41 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments40 = array();
$arguments40['additionalAttributes'] = NULL;
$arguments40['data'] = NULL;
$arguments40['aria'] = NULL;
$arguments40['class'] = NULL;
$arguments40['dir'] = NULL;
$arguments40['id'] = NULL;
$arguments40['lang'] = NULL;
$arguments40['style'] = NULL;
$arguments40['title'] = NULL;
$arguments40['accesskey'] = NULL;
$arguments40['tabindex'] = NULL;
$arguments40['onclick'] = NULL;
$arguments40['alt'] = NULL;
$arguments40['ismap'] = NULL;
$arguments40['longdesc'] = NULL;
$arguments40['usemap'] = NULL;
$arguments40['loading'] = NULL;
$arguments40['decoding'] = NULL;
$arguments40['src'] = '';
$arguments40['treatIdAsReference'] = false;
$arguments40['image'] = NULL;
$arguments40['crop'] = NULL;
$arguments40['cropVariant'] = 'default';
$arguments40['fileExtension'] = NULL;
$arguments40['width'] = NULL;
$arguments40['height'] = NULL;
$arguments40['minWidth'] = NULL;
$arguments40['minHeight'] = NULL;
$arguments40['maxWidth'] = NULL;
$arguments40['maxHeight'] = NULL;
$arguments40['absolute'] = false;
$arguments40['src'] = 'EXT:forum/Resources/Public/Images/Icons/hot-forum.png';
$arguments40['width'] = 40;
$output42 = '';

$output42 .= 'Gefragtes Forum: ';
$array43 = array (
);
$output42 .= $renderingContext->getVariableProvider()->getByPath('forumlist.forum', $array43);
$arguments40['alt'] = $output42;
$output44 = '';

$output44 .= 'Gefragtes Forum: ';
$array45 = array (
);
$output44 .= $renderingContext->getVariableProvider()->getByPath('forumlist.forum', $array45);
$arguments40['title'] = $output44;

$output39 .= TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper::renderStatic($arguments40, $renderChildrenClosure41, $renderingContext);

$output39 .= '
                            ';
return $output39;
};
$arguments30['__elseifClosures'][] = function() use ($renderingContext, $self) {
// Rendering Boolean node
// Rendering Array
$array46 = array();
$array47 = array (
);$array46['0'] = $renderingContext->getVariableProvider()->getByPath('forumlist.thread_counter.0.counts', $array47);
$array46['1'] = ' > 7';

$expression48 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) > 7);};

return TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression48(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array46)
					),
					$renderingContext
				);
};

$output19 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments30, $renderChildrenClosure31, $renderingContext);

$output19 .= '
                        </td>
                        <td class="valign-middle tx-forum-forum ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure75 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments74 = array();
$arguments74['then'] = NULL;
$arguments74['else'] = NULL;
$arguments74['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array76 = array();
$array77 = array (
);$array76['0'] = $renderingContext->getVariableProvider()->getByPath('iterator.isEven', $array77);

$expression78 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments74['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression78(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array76)
					),
					$renderingContext
				);
$arguments74['then'] = 'even';

$output19 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments74, $renderChildrenClosure75, $renderingContext);

$output19 .= ' ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure80 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments79 = array();
$arguments79['then'] = NULL;
$arguments79['else'] = NULL;
$arguments79['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array81 = array();
$array82 = array (
);$array81['0'] = $renderingContext->getVariableProvider()->getByPath('iterator.isOdd', $array82);

$expression83 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments79['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression83(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array81)
					),
					$renderingContext
				);
$arguments79['then'] = 'odd';

$output19 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments79, $renderChildrenClosure80, $renderingContext);

$output19 .= '">
                            <span class="tx-forum-forum ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure85 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments84 = array();
$arguments84['then'] = NULL;
$arguments84['else'] = NULL;
$arguments84['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array86 = array();
$array87 = array (
);$array86['0'] = $renderingContext->getVariableProvider()->getByPath('iterator.isEven', $array87);

$expression88 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments84['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression88(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array86)
					),
					$renderingContext
				);
$arguments84['then'] = 'even';

$output19 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments84, $renderChildrenClosure85, $renderingContext);

$output19 .= ' ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure90 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments89 = array();
$arguments89['then'] = NULL;
$arguments89['else'] = NULL;
$arguments89['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array91 = array();
$array92 = array (
);$array91['0'] = $renderingContext->getVariableProvider()->getByPath('iterator.isOdd', $array92);

$expression93 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments89['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression93(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array91)
					),
					$renderingContext
				);
$arguments89['then'] = 'odd';

$output19 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments89, $renderChildrenClosure90, $renderingContext);

$output19 .= '">
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure95 = function() use ($renderingContext, $self) {
$array98 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('forumlist.forum', $array98)]);
};
$arguments94 = array();
$arguments94['additionalAttributes'] = NULL;
$arguments94['data'] = NULL;
$arguments94['aria'] = NULL;
$arguments94['class'] = NULL;
$arguments94['dir'] = NULL;
$arguments94['id'] = NULL;
$arguments94['lang'] = NULL;
$arguments94['style'] = NULL;
$arguments94['title'] = NULL;
$arguments94['accesskey'] = NULL;
$arguments94['tabindex'] = NULL;
$arguments94['onclick'] = NULL;
$arguments94['name'] = NULL;
$arguments94['rel'] = NULL;
$arguments94['rev'] = NULL;
$arguments94['target'] = NULL;
$arguments94['action'] = NULL;
$arguments94['controller'] = NULL;
$arguments94['extensionName'] = NULL;
$arguments94['pluginName'] = NULL;
$arguments94['pageUid'] = NULL;
$arguments94['pageType'] = NULL;
$arguments94['noCache'] = NULL;
$arguments94['section'] = NULL;
$arguments94['format'] = NULL;
$arguments94['linkAccessRestrictedPages'] = NULL;
$arguments94['additionalParams'] = NULL;
$arguments94['absolute'] = NULL;
$arguments94['addQueryString'] = NULL;
$arguments94['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments94['addQueryStringMethod'] = NULL;
$arguments94['arguments'] = NULL;
$arguments94['action'] = 'list';
$arguments94['controller'] = 'Thread';
// Rendering Array
$array96 = array();
$array97 = array (
);$array96['forum'] = $renderingContext->getVariableProvider()->getByPath('forumlist.uid', $array97);
$arguments94['arguments'] = $array96;

$output19 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments94, $renderChildrenClosure95, $renderingContext);

$output19 .= '
                            </span>
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure100 = function() use ($renderingContext, $self) {
$array101 = array (
);return $renderingContext->getVariableProvider()->getByPath('forumlist.description', $array101);
};
$arguments99 = array();
$arguments99['value'] = NULL;

$output19 .= isset($arguments99['value']) ? $arguments99['value'] : $renderChildrenClosure100();

$output19 .= '
                        </td>
                        <td class="valign-middle tx-forum-forum ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure103 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments102 = array();
$arguments102['then'] = NULL;
$arguments102['else'] = NULL;
$arguments102['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array104 = array();
$array105 = array (
);$array104['0'] = $renderingContext->getVariableProvider()->getByPath('iterator.isEven', $array105);

$expression106 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments102['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression106(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array104)
					),
					$renderingContext
				);
$arguments102['then'] = 'even';

$output19 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments102, $renderChildrenClosure103, $renderingContext);

$output19 .= ' ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure108 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments107 = array();
$arguments107['then'] = NULL;
$arguments107['else'] = NULL;
$arguments107['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array109 = array();
$array110 = array (
);$array109['0'] = $renderingContext->getVariableProvider()->getByPath('iterator.isOdd', $array110);

$expression111 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments107['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression111(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array109)
					),
					$renderingContext
				);
$arguments107['then'] = 'odd';

$output19 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments107, $renderChildrenClosure108, $renderingContext);

$output19 .= '" align="center">';
$array112 = array (
);
$output19 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('forumlist.thread_counter.0.counts', $array112)]);

$output19 .= '</td>
                        <td class="valign-middle tx-forum-forum ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure114 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments113 = array();
$arguments113['then'] = NULL;
$arguments113['else'] = NULL;
$arguments113['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array115 = array();
$array116 = array (
);$array115['0'] = $renderingContext->getVariableProvider()->getByPath('iterator.isEven', $array116);

$expression117 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments113['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression117(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array115)
					),
					$renderingContext
				);
$arguments113['then'] = 'even';

$output19 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments113, $renderChildrenClosure114, $renderingContext);

$output19 .= ' ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure119 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments118 = array();
$arguments118['then'] = NULL;
$arguments118['else'] = NULL;
$arguments118['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array120 = array();
$array121 = array (
);$array120['0'] = $renderingContext->getVariableProvider()->getByPath('iterator.isOdd', $array121);

$expression122 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments118['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression122(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array120)
					),
					$renderingContext
				);
$arguments118['then'] = 'odd';

$output19 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments118, $renderChildrenClosure119, $renderingContext);

$output19 .= '" align="center">';
$array123 = array (
);
$output19 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('forumlist.topic_counter.0.counts', $array123)]);

$output19 .= '</td>
                        <td class="valign-middle tx-forum-forum ';
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
$arguments124['then'] = 'even';

$output19 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments124, $renderChildrenClosure125, $renderingContext);

$output19 .= ' ';
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
$arguments129['then'] = 'odd';

$output19 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments129, $renderChildrenClosure130, $renderingContext);

$output19 .= '" align="center">
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure135 = function() use ($renderingContext, $self) {
$output170 = '';

$output170 .= '
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure172 = function() use ($renderingContext, $self) {
$output173 = '';

$output173 .= '
                            <span class="tx-forum-no_threads">
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure175 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments174 = array();
$arguments174['key'] = NULL;
$arguments174['id'] = NULL;
$arguments174['default'] = NULL;
$arguments174['arguments'] = NULL;
$arguments174['extensionName'] = NULL;
$arguments174['languageKey'] = NULL;
$arguments174['alternativeLanguageKeys'] = NULL;
$arguments174['key'] = 'tx_forum_domain_model_forum.no_threads';

$output173 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments174, $renderChildrenClosure175, $renderingContext)]);

$output173 .= '
                            </span>
                        ';
return $output173;
};
$arguments171 = array();

$output170 .= '';

$output170 .= '
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure177 = function() use ($renderingContext, $self) {
$output178 = '';

$output178 .= '
                            <div class="tx-forum-last_thread">
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure180 = function() use ($renderingContext, $self) {
$output184 = '';

$output184 .= '
                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\CropViewHelper
$renderChildrenClosure186 = function() use ($renderingContext, $self) {
$array190 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('forumlist.last_thread.0.title', $array190)]);
};
$arguments185 = array();
$arguments185['maxCharacters'] = NULL;
$arguments185['append'] = '&hellip;';
$arguments185['respectWordBoundaries'] = true;
$arguments185['respectHtml'] = true;
$arguments185['maxCharacters'] = 40;
// Rendering Boolean node
// Rendering Array
$array187 = array();
$array188 = array (
);$array187['0'] = $renderingContext->getVariableProvider()->getByPath('true', $array188);

$expression189 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments185['respectHtml'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression189(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array187)
					),
					$renderingContext
				);

$output184 .= TYPO3\CMS\Fluid\ViewHelpers\Format\CropViewHelper::renderStatic($arguments185, $renderChildrenClosure186, $renderingContext);

$output184 .= '
                                ';
return $output184;
};
$arguments179 = array();
$arguments179['additionalAttributes'] = NULL;
$arguments179['data'] = NULL;
$arguments179['aria'] = NULL;
$arguments179['class'] = NULL;
$arguments179['dir'] = NULL;
$arguments179['id'] = NULL;
$arguments179['lang'] = NULL;
$arguments179['style'] = NULL;
$arguments179['title'] = NULL;
$arguments179['accesskey'] = NULL;
$arguments179['tabindex'] = NULL;
$arguments179['onclick'] = NULL;
$arguments179['name'] = NULL;
$arguments179['rel'] = NULL;
$arguments179['rev'] = NULL;
$arguments179['target'] = NULL;
$arguments179['action'] = NULL;
$arguments179['controller'] = NULL;
$arguments179['extensionName'] = NULL;
$arguments179['pluginName'] = NULL;
$arguments179['pageUid'] = NULL;
$arguments179['pageType'] = NULL;
$arguments179['noCache'] = NULL;
$arguments179['section'] = NULL;
$arguments179['format'] = NULL;
$arguments179['linkAccessRestrictedPages'] = NULL;
$arguments179['additionalParams'] = NULL;
$arguments179['absolute'] = NULL;
$arguments179['addQueryString'] = NULL;
$arguments179['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments179['addQueryStringMethod'] = NULL;
$arguments179['arguments'] = NULL;
$arguments179['action'] = 'show';
$arguments179['controller'] = 'Thread';
// Rendering Array
$array181 = array();
$array182 = array (
);$array181['forum'] = $renderingContext->getVariableProvider()->getByPath('forumlist.last_thread.0.forum', $array182);
$array183 = array (
);$array181['thread'] = $renderingContext->getVariableProvider()->getByPath('forumlist.last_thread.0.uid', $array183);
$arguments179['arguments'] = $array181;

$output178 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments179, $renderChildrenClosure180, $renderingContext);

$output178 .= '
                            </div>
                            <div class="tx-forum-last_thread-user_data">
                                <span class="tx-forum-last_user_label">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure192 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments191 = array();
$arguments191['key'] = NULL;
$arguments191['id'] = NULL;
$arguments191['default'] = NULL;
$arguments191['arguments'] = NULL;
$arguments191['extensionName'] = NULL;
$arguments191['languageKey'] = NULL;
$arguments191['alternativeLanguageKeys'] = NULL;
$arguments191['key'] = 'tx_forum_domain_model_forum.last_thread_user';

$output178 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments191, $renderChildrenClosure192, $renderingContext)]);

$output178 .= ': </span>
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure194 = function() use ($renderingContext, $self) {
$output197 = '';

$output197 .= '
                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\CaseViewHelper
$renderChildrenClosure199 = function() use ($renderingContext, $self) {
$array200 = array (
);return $renderingContext->getVariableProvider()->getByPath('forumlist.last_thread_user.0.username', $array200);
};
$arguments198 = array();
$arguments198['value'] = NULL;
$arguments198['mode'] = 'upper';
$arguments198['mode'] = 'capital';

$output197 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Format\CaseViewHelper::renderStatic($arguments198, $renderChildrenClosure199, $renderingContext)]);

$output197 .= '
                                ';
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
);$array195['user_id'] = $renderingContext->getVariableProvider()->getByPath('forumlist.last_thread_user.0.uid', $array196);
$arguments193['arguments'] = $array195;
$arguments193['class'] = 'userlink';

$output178 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments193, $renderChildrenClosure194, $renderingContext);

$output178 .= '
                                <span class="tx-forum-last_user_date">
                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper
$renderChildrenClosure202 = function() use ($renderingContext, $self) {
$array205 = array (
);return $renderingContext->getVariableProvider()->getByPath('forumlist.last_thread.0.tstamp', $array205);
};
$arguments201 = array();
$arguments201['date'] = NULL;
$arguments201['format'] = '';
$arguments201['base'] = NULL;
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure204 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments203 = array();
$arguments203['key'] = NULL;
$arguments203['id'] = NULL;
$arguments203['default'] = NULL;
$arguments203['arguments'] = NULL;
$arguments203['extensionName'] = NULL;
$arguments203['languageKey'] = NULL;
$arguments203['alternativeLanguageKeys'] = NULL;
$arguments203['key'] = 'tx_forum_domain_model_forum.date';
$arguments201['format'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments203, $renderChildrenClosure204, $renderingContext);
$renderChildrenClosure202 = ($arguments201['date'] !== null) ? function() use ($arguments201) { return $arguments201['date']; } : $renderChildrenClosure202;
$output178 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper::renderStatic($arguments201, $renderChildrenClosure202, $renderingContext)]);

$output178 .= '
                                </span>
                            </div>
                        ';
return $output178;
};
$arguments176 = array();
$arguments176['if'] = NULL;

$output170 .= '';

$output170 .= '
                     ';
return $output170;
};
$arguments134 = array();
$arguments134['then'] = NULL;
$arguments134['else'] = NULL;
$arguments134['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array167 = array();
$array168 = array (
);$array167['0'] = $renderingContext->getVariableProvider()->getByPath('forumlist.thread_counter.0.counts', $array168);
$array167['1'] = '==0';

$expression169 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == 0);};
$arguments134['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression169(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array167)
					),
					$renderingContext
				);
$arguments134['__thenClosure'] = function() use ($renderingContext, $self) {
$output136 = '';

$output136 .= '
                            <span class="tx-forum-no_threads">
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure138 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments137 = array();
$arguments137['key'] = NULL;
$arguments137['id'] = NULL;
$arguments137['default'] = NULL;
$arguments137['arguments'] = NULL;
$arguments137['extensionName'] = NULL;
$arguments137['languageKey'] = NULL;
$arguments137['alternativeLanguageKeys'] = NULL;
$arguments137['key'] = 'tx_forum_domain_model_forum.no_threads';

$output136 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments137, $renderChildrenClosure138, $renderingContext)]);

$output136 .= '
                            </span>
                        ';
return $output136;
};
$arguments134['__elseClosures'][] = function() use ($renderingContext, $self) {
$output139 = '';

$output139 .= '
                            <div class="tx-forum-last_thread">
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure141 = function() use ($renderingContext, $self) {
$output145 = '';

$output145 .= '
                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\CropViewHelper
$renderChildrenClosure147 = function() use ($renderingContext, $self) {
$array151 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('forumlist.last_thread.0.title', $array151)]);
};
$arguments146 = array();
$arguments146['maxCharacters'] = NULL;
$arguments146['append'] = '&hellip;';
$arguments146['respectWordBoundaries'] = true;
$arguments146['respectHtml'] = true;
$arguments146['maxCharacters'] = 40;
// Rendering Boolean node
// Rendering Array
$array148 = array();
$array149 = array (
);$array148['0'] = $renderingContext->getVariableProvider()->getByPath('true', $array149);

$expression150 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments146['respectHtml'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression150(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array148)
					),
					$renderingContext
				);

$output145 .= TYPO3\CMS\Fluid\ViewHelpers\Format\CropViewHelper::renderStatic($arguments146, $renderChildrenClosure147, $renderingContext);

$output145 .= '
                                ';
return $output145;
};
$arguments140 = array();
$arguments140['additionalAttributes'] = NULL;
$arguments140['data'] = NULL;
$arguments140['aria'] = NULL;
$arguments140['class'] = NULL;
$arguments140['dir'] = NULL;
$arguments140['id'] = NULL;
$arguments140['lang'] = NULL;
$arguments140['style'] = NULL;
$arguments140['title'] = NULL;
$arguments140['accesskey'] = NULL;
$arguments140['tabindex'] = NULL;
$arguments140['onclick'] = NULL;
$arguments140['name'] = NULL;
$arguments140['rel'] = NULL;
$arguments140['rev'] = NULL;
$arguments140['target'] = NULL;
$arguments140['action'] = NULL;
$arguments140['controller'] = NULL;
$arguments140['extensionName'] = NULL;
$arguments140['pluginName'] = NULL;
$arguments140['pageUid'] = NULL;
$arguments140['pageType'] = NULL;
$arguments140['noCache'] = NULL;
$arguments140['section'] = NULL;
$arguments140['format'] = NULL;
$arguments140['linkAccessRestrictedPages'] = NULL;
$arguments140['additionalParams'] = NULL;
$arguments140['absolute'] = NULL;
$arguments140['addQueryString'] = NULL;
$arguments140['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments140['addQueryStringMethod'] = NULL;
$arguments140['arguments'] = NULL;
$arguments140['action'] = 'show';
$arguments140['controller'] = 'Thread';
// Rendering Array
$array142 = array();
$array143 = array (
);$array142['forum'] = $renderingContext->getVariableProvider()->getByPath('forumlist.last_thread.0.forum', $array143);
$array144 = array (
);$array142['thread'] = $renderingContext->getVariableProvider()->getByPath('forumlist.last_thread.0.uid', $array144);
$arguments140['arguments'] = $array142;

$output139 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments140, $renderChildrenClosure141, $renderingContext);

$output139 .= '
                            </div>
                            <div class="tx-forum-last_thread-user_data">
                                <span class="tx-forum-last_user_label">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure153 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments152 = array();
$arguments152['key'] = NULL;
$arguments152['id'] = NULL;
$arguments152['default'] = NULL;
$arguments152['arguments'] = NULL;
$arguments152['extensionName'] = NULL;
$arguments152['languageKey'] = NULL;
$arguments152['alternativeLanguageKeys'] = NULL;
$arguments152['key'] = 'tx_forum_domain_model_forum.last_thread_user';

$output139 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments152, $renderChildrenClosure153, $renderingContext)]);

$output139 .= ': </span>
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure155 = function() use ($renderingContext, $self) {
$output158 = '';

$output158 .= '
                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\CaseViewHelper
$renderChildrenClosure160 = function() use ($renderingContext, $self) {
$array161 = array (
);return $renderingContext->getVariableProvider()->getByPath('forumlist.last_thread_user.0.username', $array161);
};
$arguments159 = array();
$arguments159['value'] = NULL;
$arguments159['mode'] = 'upper';
$arguments159['mode'] = 'capital';

$output158 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Format\CaseViewHelper::renderStatic($arguments159, $renderChildrenClosure160, $renderingContext)]);

$output158 .= '
                                ';
return $output158;
};
$arguments154 = array();
$arguments154['additionalAttributes'] = NULL;
$arguments154['data'] = NULL;
$arguments154['aria'] = NULL;
$arguments154['class'] = NULL;
$arguments154['dir'] = NULL;
$arguments154['id'] = NULL;
$arguments154['lang'] = NULL;
$arguments154['style'] = NULL;
$arguments154['title'] = NULL;
$arguments154['accesskey'] = NULL;
$arguments154['tabindex'] = NULL;
$arguments154['onclick'] = NULL;
$arguments154['name'] = NULL;
$arguments154['rel'] = NULL;
$arguments154['rev'] = NULL;
$arguments154['target'] = NULL;
$arguments154['action'] = NULL;
$arguments154['controller'] = NULL;
$arguments154['extensionName'] = NULL;
$arguments154['pluginName'] = NULL;
$arguments154['pageUid'] = NULL;
$arguments154['pageType'] = NULL;
$arguments154['noCache'] = NULL;
$arguments154['section'] = NULL;
$arguments154['format'] = NULL;
$arguments154['linkAccessRestrictedPages'] = NULL;
$arguments154['additionalParams'] = NULL;
$arguments154['absolute'] = NULL;
$arguments154['addQueryString'] = NULL;
$arguments154['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments154['addQueryStringMethod'] = NULL;
$arguments154['arguments'] = NULL;
$arguments154['action'] = 'show';
$arguments154['controller'] = 'User';
// Rendering Array
$array156 = array();
$array157 = array (
);$array156['user_id'] = $renderingContext->getVariableProvider()->getByPath('forumlist.last_thread_user.0.uid', $array157);
$arguments154['arguments'] = $array156;
$arguments154['class'] = 'userlink';

$output139 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments154, $renderChildrenClosure155, $renderingContext);

$output139 .= '
                                <span class="tx-forum-last_user_date">
                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper
$renderChildrenClosure163 = function() use ($renderingContext, $self) {
$array166 = array (
);return $renderingContext->getVariableProvider()->getByPath('forumlist.last_thread.0.tstamp', $array166);
};
$arguments162 = array();
$arguments162['date'] = NULL;
$arguments162['format'] = '';
$arguments162['base'] = NULL;
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure165 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments164 = array();
$arguments164['key'] = NULL;
$arguments164['id'] = NULL;
$arguments164['default'] = NULL;
$arguments164['arguments'] = NULL;
$arguments164['extensionName'] = NULL;
$arguments164['languageKey'] = NULL;
$arguments164['alternativeLanguageKeys'] = NULL;
$arguments164['key'] = 'tx_forum_domain_model_forum.date';
$arguments162['format'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments164, $renderChildrenClosure165, $renderingContext);
$renderChildrenClosure163 = ($arguments162['date'] !== null) ? function() use ($arguments162) { return $arguments162['date']; } : $renderChildrenClosure163;
$output139 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper::renderStatic($arguments162, $renderChildrenClosure163, $renderingContext)]);

$output139 .= '
                                </span>
                            </div>
                        ';
return $output139;
};

$output19 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments134, $renderChildrenClosure135, $renderingContext);

$output19 .= '
                        </td>
                    </tr>
                ';
return $output19;
};
$arguments16 = array();
$arguments16['each'] = NULL;
$arguments16['as'] = NULL;
$arguments16['key'] = NULL;
$arguments16['reverse'] = false;
$arguments16['iteration'] = NULL;
$array18 = array (
);$arguments16['each'] = $renderingContext->getVariableProvider()->getByPath('forum.forum', $array18);
$arguments16['as'] = 'forumlist';
$arguments16['iteration'] = 'iterator';

$output14 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments16, $renderChildrenClosure17, $renderingContext);

$output14 .= '
            ';
return $output14;
};
$arguments11 = array();
$arguments11['each'] = NULL;
$arguments11['as'] = NULL;
$arguments11['key'] = NULL;
$arguments11['reverse'] = false;
$arguments11['iteration'] = NULL;
$array13 = array (
);$arguments11['each'] = $renderingContext->getVariableProvider()->getByPath('foren', $array13);
$arguments11['as'] = 'forum';

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments11, $renderChildrenClosure12, $renderingContext);

$output0 .= '
            </tbody>
         
         </table>
    </div>
    
    
';

return $output0;
}
/**
 * Main Render function
 */
public function render(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output206 = '';

$output206 .= '
';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\LayoutViewHelper
$renderChildrenClosure208 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments207 = array();
$arguments207['name'] = NULL;
$arguments207['name'] = 'Default';

$output206 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [NULL]);

$output206 .= '

';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SectionViewHelper
$renderChildrenClosure210 = function() use ($renderingContext, $self) {
$output211 = '';

$output211 .= '
    
    
    
    <h1>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure213 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments212 = array();
$arguments212['key'] = NULL;
$arguments212['id'] = NULL;
$arguments212['default'] = NULL;
$arguments212['arguments'] = NULL;
$arguments212['extensionName'] = NULL;
$arguments212['languageKey'] = NULL;
$arguments212['alternativeLanguageKeys'] = NULL;
$arguments212['key'] = 'tx_forum_domain_model_forum.title';

$output211 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments212, $renderChildrenClosure213, $renderingContext)]);

$output211 .= '</h1>
    
    <div class="tx-category-foren-all">
        
        <table border=\'0\' width=\'100%\' class="tx-forum-overview" cellspacing="0" cellpadding="0">
            <thead>
                <tr>
                    
                    <th colspan="2"><span>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure215 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments214 = array();
$arguments214['key'] = NULL;
$arguments214['id'] = NULL;
$arguments214['default'] = NULL;
$arguments214['arguments'] = NULL;
$arguments214['extensionName'] = NULL;
$arguments214['languageKey'] = NULL;
$arguments214['alternativeLanguageKeys'] = NULL;
$arguments214['key'] = 'tx_forum_domain_model_forum.forumLabel';

$output211 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments214, $renderChildrenClosure215, $renderingContext)]);

$output211 .= '</span></th>
                    <th><span>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure217 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments216 = array();
$arguments216['key'] = NULL;
$arguments216['id'] = NULL;
$arguments216['default'] = NULL;
$arguments216['arguments'] = NULL;
$arguments216['extensionName'] = NULL;
$arguments216['languageKey'] = NULL;
$arguments216['alternativeLanguageKeys'] = NULL;
$arguments216['key'] = 'tx_forum_domain_model_forum.threadLabel';

$output211 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments216, $renderChildrenClosure217, $renderingContext)]);

$output211 .= '</span></th>
                    <th><span>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure219 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments218 = array();
$arguments218['key'] = NULL;
$arguments218['id'] = NULL;
$arguments218['default'] = NULL;
$arguments218['arguments'] = NULL;
$arguments218['extensionName'] = NULL;
$arguments218['languageKey'] = NULL;
$arguments218['alternativeLanguageKeys'] = NULL;
$arguments218['key'] = 'tx_forum_domain_model_forum.topicLabel';

$output211 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments218, $renderChildrenClosure219, $renderingContext)]);

$output211 .= '</span></th>
                    <th><span>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure221 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments220 = array();
$arguments220['key'] = NULL;
$arguments220['id'] = NULL;
$arguments220['default'] = NULL;
$arguments220['arguments'] = NULL;
$arguments220['extensionName'] = NULL;
$arguments220['languageKey'] = NULL;
$arguments220['alternativeLanguageKeys'] = NULL;
$arguments220['key'] = 'tx_forum_domain_model_forum.lastThread';

$output211 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments220, $renderChildrenClosure221, $renderingContext)]);

$output211 .= '</span></th> 
                </tr>
            </thead>
            <tbody>
                
                
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure223 = function() use ($renderingContext, $self) {
$output225 = '';

$output225 .= '
                <tr>
                    <td colspan="5">
                        <div class="tx-forum-category"><b>';
$array226 = array (
);
$output225 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('forum.category', $array226)]);

$output225 .= '</b></div>
                     </td>
                </tr>
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure228 = function() use ($renderingContext, $self) {
$output230 = '';

$output230 .= '
                    <tr class="tx-forum-thread-line">
                        <td class="valign-middle tx-forum-forum ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure232 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments231 = array();
$arguments231['then'] = NULL;
$arguments231['else'] = NULL;
$arguments231['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array233 = array();
$array234 = array (
);$array233['0'] = $renderingContext->getVariableProvider()->getByPath('iterator.isEven', $array234);

$expression235 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments231['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression235(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array233)
					),
					$renderingContext
				);
$arguments231['then'] = 'even';

$output230 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments231, $renderChildrenClosure232, $renderingContext);

$output230 .= ' ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure237 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments236 = array();
$arguments236['then'] = NULL;
$arguments236['else'] = NULL;
$arguments236['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array238 = array();
$array239 = array (
);$array238['0'] = $renderingContext->getVariableProvider()->getByPath('iterator.isOdd', $array239);

$expression240 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments236['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression240(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array238)
					),
					$renderingContext
				);
$arguments236['then'] = 'odd';

$output230 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments236, $renderChildrenClosure237, $renderingContext);

$output230 .= '">
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure242 = function() use ($renderingContext, $self) {
$output263 = '';

$output263 .= ' 
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure265 = function() use ($renderingContext, $self) {
$output266 = '';

$output266 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$renderChildrenClosure268 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments267 = array();
$arguments267['additionalAttributes'] = NULL;
$arguments267['data'] = NULL;
$arguments267['aria'] = NULL;
$arguments267['class'] = NULL;
$arguments267['dir'] = NULL;
$arguments267['id'] = NULL;
$arguments267['lang'] = NULL;
$arguments267['style'] = NULL;
$arguments267['title'] = NULL;
$arguments267['accesskey'] = NULL;
$arguments267['tabindex'] = NULL;
$arguments267['onclick'] = NULL;
$arguments267['alt'] = NULL;
$arguments267['ismap'] = NULL;
$arguments267['longdesc'] = NULL;
$arguments267['usemap'] = NULL;
$arguments267['loading'] = NULL;
$arguments267['decoding'] = NULL;
$arguments267['src'] = '';
$arguments267['treatIdAsReference'] = false;
$arguments267['image'] = NULL;
$arguments267['crop'] = NULL;
$arguments267['cropVariant'] = 'default';
$arguments267['fileExtension'] = NULL;
$arguments267['width'] = NULL;
$arguments267['height'] = NULL;
$arguments267['minWidth'] = NULL;
$arguments267['minHeight'] = NULL;
$arguments267['maxWidth'] = NULL;
$arguments267['maxHeight'] = NULL;
$arguments267['absolute'] = false;
$arguments267['src'] = 'EXT:forum/Resources/Public/Images/Icons/forum.png';
$arguments267['width'] = 40;
$output269 = '';

$output269 .= 'Forum: ';
$array270 = array (
);
$output269 .= $renderingContext->getVariableProvider()->getByPath('forumlist.forum', $array270);
$arguments267['alt'] = $output269;
$output271 = '';

$output271 .= 'Forum: ';
$array272 = array (
);
$output271 .= $renderingContext->getVariableProvider()->getByPath('forumlist.forum', $array272);
$arguments267['title'] = $output271;

$output266 .= TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper::renderStatic($arguments267, $renderChildrenClosure268, $renderingContext);

$output266 .= '
                            ';
return $output266;
};
$arguments264 = array();

$output263 .= '';

$output263 .= '
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure274 = function() use ($renderingContext, $self) {
$output278 = '';

$output278 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$renderChildrenClosure280 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments279 = array();
$arguments279['additionalAttributes'] = NULL;
$arguments279['data'] = NULL;
$arguments279['aria'] = NULL;
$arguments279['class'] = NULL;
$arguments279['dir'] = NULL;
$arguments279['id'] = NULL;
$arguments279['lang'] = NULL;
$arguments279['style'] = NULL;
$arguments279['title'] = NULL;
$arguments279['accesskey'] = NULL;
$arguments279['tabindex'] = NULL;
$arguments279['onclick'] = NULL;
$arguments279['alt'] = NULL;
$arguments279['ismap'] = NULL;
$arguments279['longdesc'] = NULL;
$arguments279['usemap'] = NULL;
$arguments279['loading'] = NULL;
$arguments279['decoding'] = NULL;
$arguments279['src'] = '';
$arguments279['treatIdAsReference'] = false;
$arguments279['image'] = NULL;
$arguments279['crop'] = NULL;
$arguments279['cropVariant'] = 'default';
$arguments279['fileExtension'] = NULL;
$arguments279['width'] = NULL;
$arguments279['height'] = NULL;
$arguments279['minWidth'] = NULL;
$arguments279['minHeight'] = NULL;
$arguments279['maxWidth'] = NULL;
$arguments279['maxHeight'] = NULL;
$arguments279['absolute'] = false;
$arguments279['src'] = 'EXT:forum/Resources/Public/Images/Icons/hot-forum.png';
$arguments279['width'] = 40;
$output281 = '';

$output281 .= 'Gefragtes Forum: ';
$array282 = array (
);
$output281 .= $renderingContext->getVariableProvider()->getByPath('forumlist.forum', $array282);
$arguments279['alt'] = $output281;
$output283 = '';

$output283 .= 'Gefragtes Forum: ';
$array284 = array (
);
$output283 .= $renderingContext->getVariableProvider()->getByPath('forumlist.forum', $array284);
$arguments279['title'] = $output283;

$output278 .= TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper::renderStatic($arguments279, $renderChildrenClosure280, $renderingContext);

$output278 .= '
                            ';
return $output278;
};
$arguments273 = array();
$arguments273['if'] = NULL;
// Rendering Boolean node
// Rendering Array
$array275 = array();
$array276 = array (
);$array275['0'] = $renderingContext->getVariableProvider()->getByPath('forumlist.thread_counter.0.counts', $array276);
$array275['1'] = ' > 7';

$expression277 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) > 7);};
$arguments273['if'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression277(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array275)
					),
					$renderingContext
				);

$output263 .= '';

$output263 .= '
                        ';
return $output263;
};
$arguments241 = array();
$arguments241['then'] = NULL;
$arguments241['else'] = NULL;
$arguments241['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array260 = array();
$array261 = array (
);$array260['0'] = $renderingContext->getVariableProvider()->getByPath('forumlist.thread_counter.0.counts', $array261);
$array260['1'] = ' < 7';

$expression262 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) < 7);};
$arguments241['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression262(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array260)
					),
					$renderingContext
				);
$arguments241['__thenClosure'] = function() use ($renderingContext, $self) {
$output243 = '';

$output243 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$renderChildrenClosure245 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments244 = array();
$arguments244['additionalAttributes'] = NULL;
$arguments244['data'] = NULL;
$arguments244['aria'] = NULL;
$arguments244['class'] = NULL;
$arguments244['dir'] = NULL;
$arguments244['id'] = NULL;
$arguments244['lang'] = NULL;
$arguments244['style'] = NULL;
$arguments244['title'] = NULL;
$arguments244['accesskey'] = NULL;
$arguments244['tabindex'] = NULL;
$arguments244['onclick'] = NULL;
$arguments244['alt'] = NULL;
$arguments244['ismap'] = NULL;
$arguments244['longdesc'] = NULL;
$arguments244['usemap'] = NULL;
$arguments244['loading'] = NULL;
$arguments244['decoding'] = NULL;
$arguments244['src'] = '';
$arguments244['treatIdAsReference'] = false;
$arguments244['image'] = NULL;
$arguments244['crop'] = NULL;
$arguments244['cropVariant'] = 'default';
$arguments244['fileExtension'] = NULL;
$arguments244['width'] = NULL;
$arguments244['height'] = NULL;
$arguments244['minWidth'] = NULL;
$arguments244['minHeight'] = NULL;
$arguments244['maxWidth'] = NULL;
$arguments244['maxHeight'] = NULL;
$arguments244['absolute'] = false;
$arguments244['src'] = 'EXT:forum/Resources/Public/Images/Icons/forum.png';
$arguments244['width'] = 40;
$output246 = '';

$output246 .= 'Forum: ';
$array247 = array (
);
$output246 .= $renderingContext->getVariableProvider()->getByPath('forumlist.forum', $array247);
$arguments244['alt'] = $output246;
$output248 = '';

$output248 .= 'Forum: ';
$array249 = array (
);
$output248 .= $renderingContext->getVariableProvider()->getByPath('forumlist.forum', $array249);
$arguments244['title'] = $output248;

$output243 .= TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper::renderStatic($arguments244, $renderChildrenClosure245, $renderingContext);

$output243 .= '
                            ';
return $output243;
};
$arguments241['__elseClosures'][] = function() use ($renderingContext, $self) {
$output250 = '';

$output250 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$renderChildrenClosure252 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments251 = array();
$arguments251['additionalAttributes'] = NULL;
$arguments251['data'] = NULL;
$arguments251['aria'] = NULL;
$arguments251['class'] = NULL;
$arguments251['dir'] = NULL;
$arguments251['id'] = NULL;
$arguments251['lang'] = NULL;
$arguments251['style'] = NULL;
$arguments251['title'] = NULL;
$arguments251['accesskey'] = NULL;
$arguments251['tabindex'] = NULL;
$arguments251['onclick'] = NULL;
$arguments251['alt'] = NULL;
$arguments251['ismap'] = NULL;
$arguments251['longdesc'] = NULL;
$arguments251['usemap'] = NULL;
$arguments251['loading'] = NULL;
$arguments251['decoding'] = NULL;
$arguments251['src'] = '';
$arguments251['treatIdAsReference'] = false;
$arguments251['image'] = NULL;
$arguments251['crop'] = NULL;
$arguments251['cropVariant'] = 'default';
$arguments251['fileExtension'] = NULL;
$arguments251['width'] = NULL;
$arguments251['height'] = NULL;
$arguments251['minWidth'] = NULL;
$arguments251['minHeight'] = NULL;
$arguments251['maxWidth'] = NULL;
$arguments251['maxHeight'] = NULL;
$arguments251['absolute'] = false;
$arguments251['src'] = 'EXT:forum/Resources/Public/Images/Icons/hot-forum.png';
$arguments251['width'] = 40;
$output253 = '';

$output253 .= 'Gefragtes Forum: ';
$array254 = array (
);
$output253 .= $renderingContext->getVariableProvider()->getByPath('forumlist.forum', $array254);
$arguments251['alt'] = $output253;
$output255 = '';

$output255 .= 'Gefragtes Forum: ';
$array256 = array (
);
$output255 .= $renderingContext->getVariableProvider()->getByPath('forumlist.forum', $array256);
$arguments251['title'] = $output255;

$output250 .= TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper::renderStatic($arguments251, $renderChildrenClosure252, $renderingContext);

$output250 .= '
                            ';
return $output250;
};
$arguments241['__elseifClosures'][] = function() use ($renderingContext, $self) {
// Rendering Boolean node
// Rendering Array
$array257 = array();
$array258 = array (
);$array257['0'] = $renderingContext->getVariableProvider()->getByPath('forumlist.thread_counter.0.counts', $array258);
$array257['1'] = ' > 7';

$expression259 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) > 7);};

return TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression259(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array257)
					),
					$renderingContext
				);
};

$output230 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments241, $renderChildrenClosure242, $renderingContext);

$output230 .= '
                        </td>
                        <td class="valign-middle tx-forum-forum ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure286 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments285 = array();
$arguments285['then'] = NULL;
$arguments285['else'] = NULL;
$arguments285['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array287 = array();
$array288 = array (
);$array287['0'] = $renderingContext->getVariableProvider()->getByPath('iterator.isEven', $array288);

$expression289 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments285['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression289(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array287)
					),
					$renderingContext
				);
$arguments285['then'] = 'even';

$output230 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments285, $renderChildrenClosure286, $renderingContext);

$output230 .= ' ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure291 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments290 = array();
$arguments290['then'] = NULL;
$arguments290['else'] = NULL;
$arguments290['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array292 = array();
$array293 = array (
);$array292['0'] = $renderingContext->getVariableProvider()->getByPath('iterator.isOdd', $array293);

$expression294 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments290['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression294(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array292)
					),
					$renderingContext
				);
$arguments290['then'] = 'odd';

$output230 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments290, $renderChildrenClosure291, $renderingContext);

$output230 .= '">
                            <span class="tx-forum-forum ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure296 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments295 = array();
$arguments295['then'] = NULL;
$arguments295['else'] = NULL;
$arguments295['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array297 = array();
$array298 = array (
);$array297['0'] = $renderingContext->getVariableProvider()->getByPath('iterator.isEven', $array298);

$expression299 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments295['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression299(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array297)
					),
					$renderingContext
				);
$arguments295['then'] = 'even';

$output230 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments295, $renderChildrenClosure296, $renderingContext);

$output230 .= ' ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure301 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments300 = array();
$arguments300['then'] = NULL;
$arguments300['else'] = NULL;
$arguments300['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array302 = array();
$array303 = array (
);$array302['0'] = $renderingContext->getVariableProvider()->getByPath('iterator.isOdd', $array303);

$expression304 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments300['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression304(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array302)
					),
					$renderingContext
				);
$arguments300['then'] = 'odd';

$output230 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments300, $renderChildrenClosure301, $renderingContext);

$output230 .= '">
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure306 = function() use ($renderingContext, $self) {
$array309 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('forumlist.forum', $array309)]);
};
$arguments305 = array();
$arguments305['additionalAttributes'] = NULL;
$arguments305['data'] = NULL;
$arguments305['aria'] = NULL;
$arguments305['class'] = NULL;
$arguments305['dir'] = NULL;
$arguments305['id'] = NULL;
$arguments305['lang'] = NULL;
$arguments305['style'] = NULL;
$arguments305['title'] = NULL;
$arguments305['accesskey'] = NULL;
$arguments305['tabindex'] = NULL;
$arguments305['onclick'] = NULL;
$arguments305['name'] = NULL;
$arguments305['rel'] = NULL;
$arguments305['rev'] = NULL;
$arguments305['target'] = NULL;
$arguments305['action'] = NULL;
$arguments305['controller'] = NULL;
$arguments305['extensionName'] = NULL;
$arguments305['pluginName'] = NULL;
$arguments305['pageUid'] = NULL;
$arguments305['pageType'] = NULL;
$arguments305['noCache'] = NULL;
$arguments305['section'] = NULL;
$arguments305['format'] = NULL;
$arguments305['linkAccessRestrictedPages'] = NULL;
$arguments305['additionalParams'] = NULL;
$arguments305['absolute'] = NULL;
$arguments305['addQueryString'] = NULL;
$arguments305['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments305['addQueryStringMethod'] = NULL;
$arguments305['arguments'] = NULL;
$arguments305['action'] = 'list';
$arguments305['controller'] = 'Thread';
// Rendering Array
$array307 = array();
$array308 = array (
);$array307['forum'] = $renderingContext->getVariableProvider()->getByPath('forumlist.uid', $array308);
$arguments305['arguments'] = $array307;

$output230 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments305, $renderChildrenClosure306, $renderingContext);

$output230 .= '
                            </span>
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure311 = function() use ($renderingContext, $self) {
$array312 = array (
);return $renderingContext->getVariableProvider()->getByPath('forumlist.description', $array312);
};
$arguments310 = array();
$arguments310['value'] = NULL;

$output230 .= isset($arguments310['value']) ? $arguments310['value'] : $renderChildrenClosure311();

$output230 .= '
                        </td>
                        <td class="valign-middle tx-forum-forum ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure314 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments313 = array();
$arguments313['then'] = NULL;
$arguments313['else'] = NULL;
$arguments313['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array315 = array();
$array316 = array (
);$array315['0'] = $renderingContext->getVariableProvider()->getByPath('iterator.isEven', $array316);

$expression317 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments313['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression317(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array315)
					),
					$renderingContext
				);
$arguments313['then'] = 'even';

$output230 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments313, $renderChildrenClosure314, $renderingContext);

$output230 .= ' ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure319 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments318 = array();
$arguments318['then'] = NULL;
$arguments318['else'] = NULL;
$arguments318['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array320 = array();
$array321 = array (
);$array320['0'] = $renderingContext->getVariableProvider()->getByPath('iterator.isOdd', $array321);

$expression322 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments318['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression322(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array320)
					),
					$renderingContext
				);
$arguments318['then'] = 'odd';

$output230 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments318, $renderChildrenClosure319, $renderingContext);

$output230 .= '" align="center">';
$array323 = array (
);
$output230 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('forumlist.thread_counter.0.counts', $array323)]);

$output230 .= '</td>
                        <td class="valign-middle tx-forum-forum ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure325 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments324 = array();
$arguments324['then'] = NULL;
$arguments324['else'] = NULL;
$arguments324['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array326 = array();
$array327 = array (
);$array326['0'] = $renderingContext->getVariableProvider()->getByPath('iterator.isEven', $array327);

$expression328 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments324['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression328(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array326)
					),
					$renderingContext
				);
$arguments324['then'] = 'even';

$output230 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments324, $renderChildrenClosure325, $renderingContext);

$output230 .= ' ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure330 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments329 = array();
$arguments329['then'] = NULL;
$arguments329['else'] = NULL;
$arguments329['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array331 = array();
$array332 = array (
);$array331['0'] = $renderingContext->getVariableProvider()->getByPath('iterator.isOdd', $array332);

$expression333 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments329['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression333(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array331)
					),
					$renderingContext
				);
$arguments329['then'] = 'odd';

$output230 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments329, $renderChildrenClosure330, $renderingContext);

$output230 .= '" align="center">';
$array334 = array (
);
$output230 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('forumlist.topic_counter.0.counts', $array334)]);

$output230 .= '</td>
                        <td class="valign-middle tx-forum-forum ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure336 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments335 = array();
$arguments335['then'] = NULL;
$arguments335['else'] = NULL;
$arguments335['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array337 = array();
$array338 = array (
);$array337['0'] = $renderingContext->getVariableProvider()->getByPath('iterator.isEven', $array338);

$expression339 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments335['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression339(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array337)
					),
					$renderingContext
				);
$arguments335['then'] = 'even';

$output230 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments335, $renderChildrenClosure336, $renderingContext);

$output230 .= ' ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure341 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments340 = array();
$arguments340['then'] = NULL;
$arguments340['else'] = NULL;
$arguments340['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array342 = array();
$array343 = array (
);$array342['0'] = $renderingContext->getVariableProvider()->getByPath('iterator.isOdd', $array343);

$expression344 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments340['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression344(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array342)
					),
					$renderingContext
				);
$arguments340['then'] = 'odd';

$output230 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments340, $renderChildrenClosure341, $renderingContext);

$output230 .= '" align="center">
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure346 = function() use ($renderingContext, $self) {
$output381 = '';

$output381 .= '
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure383 = function() use ($renderingContext, $self) {
$output384 = '';

$output384 .= '
                            <span class="tx-forum-no_threads">
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure386 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments385 = array();
$arguments385['key'] = NULL;
$arguments385['id'] = NULL;
$arguments385['default'] = NULL;
$arguments385['arguments'] = NULL;
$arguments385['extensionName'] = NULL;
$arguments385['languageKey'] = NULL;
$arguments385['alternativeLanguageKeys'] = NULL;
$arguments385['key'] = 'tx_forum_domain_model_forum.no_threads';

$output384 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments385, $renderChildrenClosure386, $renderingContext)]);

$output384 .= '
                            </span>
                        ';
return $output384;
};
$arguments382 = array();

$output381 .= '';

$output381 .= '
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure388 = function() use ($renderingContext, $self) {
$output389 = '';

$output389 .= '
                            <div class="tx-forum-last_thread">
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure391 = function() use ($renderingContext, $self) {
$output395 = '';

$output395 .= '
                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\CropViewHelper
$renderChildrenClosure397 = function() use ($renderingContext, $self) {
$array401 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('forumlist.last_thread.0.title', $array401)]);
};
$arguments396 = array();
$arguments396['maxCharacters'] = NULL;
$arguments396['append'] = '&hellip;';
$arguments396['respectWordBoundaries'] = true;
$arguments396['respectHtml'] = true;
$arguments396['maxCharacters'] = 40;
// Rendering Boolean node
// Rendering Array
$array398 = array();
$array399 = array (
);$array398['0'] = $renderingContext->getVariableProvider()->getByPath('true', $array399);

$expression400 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments396['respectHtml'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression400(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array398)
					),
					$renderingContext
				);

$output395 .= TYPO3\CMS\Fluid\ViewHelpers\Format\CropViewHelper::renderStatic($arguments396, $renderChildrenClosure397, $renderingContext);

$output395 .= '
                                ';
return $output395;
};
$arguments390 = array();
$arguments390['additionalAttributes'] = NULL;
$arguments390['data'] = NULL;
$arguments390['aria'] = NULL;
$arguments390['class'] = NULL;
$arguments390['dir'] = NULL;
$arguments390['id'] = NULL;
$arguments390['lang'] = NULL;
$arguments390['style'] = NULL;
$arguments390['title'] = NULL;
$arguments390['accesskey'] = NULL;
$arguments390['tabindex'] = NULL;
$arguments390['onclick'] = NULL;
$arguments390['name'] = NULL;
$arguments390['rel'] = NULL;
$arguments390['rev'] = NULL;
$arguments390['target'] = NULL;
$arguments390['action'] = NULL;
$arguments390['controller'] = NULL;
$arguments390['extensionName'] = NULL;
$arguments390['pluginName'] = NULL;
$arguments390['pageUid'] = NULL;
$arguments390['pageType'] = NULL;
$arguments390['noCache'] = NULL;
$arguments390['section'] = NULL;
$arguments390['format'] = NULL;
$arguments390['linkAccessRestrictedPages'] = NULL;
$arguments390['additionalParams'] = NULL;
$arguments390['absolute'] = NULL;
$arguments390['addQueryString'] = NULL;
$arguments390['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments390['addQueryStringMethod'] = NULL;
$arguments390['arguments'] = NULL;
$arguments390['action'] = 'show';
$arguments390['controller'] = 'Thread';
// Rendering Array
$array392 = array();
$array393 = array (
);$array392['forum'] = $renderingContext->getVariableProvider()->getByPath('forumlist.last_thread.0.forum', $array393);
$array394 = array (
);$array392['thread'] = $renderingContext->getVariableProvider()->getByPath('forumlist.last_thread.0.uid', $array394);
$arguments390['arguments'] = $array392;

$output389 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments390, $renderChildrenClosure391, $renderingContext);

$output389 .= '
                            </div>
                            <div class="tx-forum-last_thread-user_data">
                                <span class="tx-forum-last_user_label">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure403 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments402 = array();
$arguments402['key'] = NULL;
$arguments402['id'] = NULL;
$arguments402['default'] = NULL;
$arguments402['arguments'] = NULL;
$arguments402['extensionName'] = NULL;
$arguments402['languageKey'] = NULL;
$arguments402['alternativeLanguageKeys'] = NULL;
$arguments402['key'] = 'tx_forum_domain_model_forum.last_thread_user';

$output389 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments402, $renderChildrenClosure403, $renderingContext)]);

$output389 .= ': </span>
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure405 = function() use ($renderingContext, $self) {
$output408 = '';

$output408 .= '
                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\CaseViewHelper
$renderChildrenClosure410 = function() use ($renderingContext, $self) {
$array411 = array (
);return $renderingContext->getVariableProvider()->getByPath('forumlist.last_thread_user.0.username', $array411);
};
$arguments409 = array();
$arguments409['value'] = NULL;
$arguments409['mode'] = 'upper';
$arguments409['mode'] = 'capital';

$output408 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Format\CaseViewHelper::renderStatic($arguments409, $renderChildrenClosure410, $renderingContext)]);

$output408 .= '
                                ';
return $output408;
};
$arguments404 = array();
$arguments404['additionalAttributes'] = NULL;
$arguments404['data'] = NULL;
$arguments404['aria'] = NULL;
$arguments404['class'] = NULL;
$arguments404['dir'] = NULL;
$arguments404['id'] = NULL;
$arguments404['lang'] = NULL;
$arguments404['style'] = NULL;
$arguments404['title'] = NULL;
$arguments404['accesskey'] = NULL;
$arguments404['tabindex'] = NULL;
$arguments404['onclick'] = NULL;
$arguments404['name'] = NULL;
$arguments404['rel'] = NULL;
$arguments404['rev'] = NULL;
$arguments404['target'] = NULL;
$arguments404['action'] = NULL;
$arguments404['controller'] = NULL;
$arguments404['extensionName'] = NULL;
$arguments404['pluginName'] = NULL;
$arguments404['pageUid'] = NULL;
$arguments404['pageType'] = NULL;
$arguments404['noCache'] = NULL;
$arguments404['section'] = NULL;
$arguments404['format'] = NULL;
$arguments404['linkAccessRestrictedPages'] = NULL;
$arguments404['additionalParams'] = NULL;
$arguments404['absolute'] = NULL;
$arguments404['addQueryString'] = NULL;
$arguments404['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments404['addQueryStringMethod'] = NULL;
$arguments404['arguments'] = NULL;
$arguments404['action'] = 'show';
$arguments404['controller'] = 'User';
// Rendering Array
$array406 = array();
$array407 = array (
);$array406['user_id'] = $renderingContext->getVariableProvider()->getByPath('forumlist.last_thread_user.0.uid', $array407);
$arguments404['arguments'] = $array406;
$arguments404['class'] = 'userlink';

$output389 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments404, $renderChildrenClosure405, $renderingContext);

$output389 .= '
                                <span class="tx-forum-last_user_date">
                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper
$renderChildrenClosure413 = function() use ($renderingContext, $self) {
$array416 = array (
);return $renderingContext->getVariableProvider()->getByPath('forumlist.last_thread.0.tstamp', $array416);
};
$arguments412 = array();
$arguments412['date'] = NULL;
$arguments412['format'] = '';
$arguments412['base'] = NULL;
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure415 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments414 = array();
$arguments414['key'] = NULL;
$arguments414['id'] = NULL;
$arguments414['default'] = NULL;
$arguments414['arguments'] = NULL;
$arguments414['extensionName'] = NULL;
$arguments414['languageKey'] = NULL;
$arguments414['alternativeLanguageKeys'] = NULL;
$arguments414['key'] = 'tx_forum_domain_model_forum.date';
$arguments412['format'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments414, $renderChildrenClosure415, $renderingContext);
$renderChildrenClosure413 = ($arguments412['date'] !== null) ? function() use ($arguments412) { return $arguments412['date']; } : $renderChildrenClosure413;
$output389 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper::renderStatic($arguments412, $renderChildrenClosure413, $renderingContext)]);

$output389 .= '
                                </span>
                            </div>
                        ';
return $output389;
};
$arguments387 = array();
$arguments387['if'] = NULL;

$output381 .= '';

$output381 .= '
                     ';
return $output381;
};
$arguments345 = array();
$arguments345['then'] = NULL;
$arguments345['else'] = NULL;
$arguments345['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array378 = array();
$array379 = array (
);$array378['0'] = $renderingContext->getVariableProvider()->getByPath('forumlist.thread_counter.0.counts', $array379);
$array378['1'] = '==0';

$expression380 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == 0);};
$arguments345['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression380(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array378)
					),
					$renderingContext
				);
$arguments345['__thenClosure'] = function() use ($renderingContext, $self) {
$output347 = '';

$output347 .= '
                            <span class="tx-forum-no_threads">
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure349 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments348 = array();
$arguments348['key'] = NULL;
$arguments348['id'] = NULL;
$arguments348['default'] = NULL;
$arguments348['arguments'] = NULL;
$arguments348['extensionName'] = NULL;
$arguments348['languageKey'] = NULL;
$arguments348['alternativeLanguageKeys'] = NULL;
$arguments348['key'] = 'tx_forum_domain_model_forum.no_threads';

$output347 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments348, $renderChildrenClosure349, $renderingContext)]);

$output347 .= '
                            </span>
                        ';
return $output347;
};
$arguments345['__elseClosures'][] = function() use ($renderingContext, $self) {
$output350 = '';

$output350 .= '
                            <div class="tx-forum-last_thread">
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure352 = function() use ($renderingContext, $self) {
$output356 = '';

$output356 .= '
                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\CropViewHelper
$renderChildrenClosure358 = function() use ($renderingContext, $self) {
$array362 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('forumlist.last_thread.0.title', $array362)]);
};
$arguments357 = array();
$arguments357['maxCharacters'] = NULL;
$arguments357['append'] = '&hellip;';
$arguments357['respectWordBoundaries'] = true;
$arguments357['respectHtml'] = true;
$arguments357['maxCharacters'] = 40;
// Rendering Boolean node
// Rendering Array
$array359 = array();
$array360 = array (
);$array359['0'] = $renderingContext->getVariableProvider()->getByPath('true', $array360);

$expression361 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments357['respectHtml'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression361(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array359)
					),
					$renderingContext
				);

$output356 .= TYPO3\CMS\Fluid\ViewHelpers\Format\CropViewHelper::renderStatic($arguments357, $renderChildrenClosure358, $renderingContext);

$output356 .= '
                                ';
return $output356;
};
$arguments351 = array();
$arguments351['additionalAttributes'] = NULL;
$arguments351['data'] = NULL;
$arguments351['aria'] = NULL;
$arguments351['class'] = NULL;
$arguments351['dir'] = NULL;
$arguments351['id'] = NULL;
$arguments351['lang'] = NULL;
$arguments351['style'] = NULL;
$arguments351['title'] = NULL;
$arguments351['accesskey'] = NULL;
$arguments351['tabindex'] = NULL;
$arguments351['onclick'] = NULL;
$arguments351['name'] = NULL;
$arguments351['rel'] = NULL;
$arguments351['rev'] = NULL;
$arguments351['target'] = NULL;
$arguments351['action'] = NULL;
$arguments351['controller'] = NULL;
$arguments351['extensionName'] = NULL;
$arguments351['pluginName'] = NULL;
$arguments351['pageUid'] = NULL;
$arguments351['pageType'] = NULL;
$arguments351['noCache'] = NULL;
$arguments351['section'] = NULL;
$arguments351['format'] = NULL;
$arguments351['linkAccessRestrictedPages'] = NULL;
$arguments351['additionalParams'] = NULL;
$arguments351['absolute'] = NULL;
$arguments351['addQueryString'] = NULL;
$arguments351['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments351['addQueryStringMethod'] = NULL;
$arguments351['arguments'] = NULL;
$arguments351['action'] = 'show';
$arguments351['controller'] = 'Thread';
// Rendering Array
$array353 = array();
$array354 = array (
);$array353['forum'] = $renderingContext->getVariableProvider()->getByPath('forumlist.last_thread.0.forum', $array354);
$array355 = array (
);$array353['thread'] = $renderingContext->getVariableProvider()->getByPath('forumlist.last_thread.0.uid', $array355);
$arguments351['arguments'] = $array353;

$output350 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments351, $renderChildrenClosure352, $renderingContext);

$output350 .= '
                            </div>
                            <div class="tx-forum-last_thread-user_data">
                                <span class="tx-forum-last_user_label">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure364 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments363 = array();
$arguments363['key'] = NULL;
$arguments363['id'] = NULL;
$arguments363['default'] = NULL;
$arguments363['arguments'] = NULL;
$arguments363['extensionName'] = NULL;
$arguments363['languageKey'] = NULL;
$arguments363['alternativeLanguageKeys'] = NULL;
$arguments363['key'] = 'tx_forum_domain_model_forum.last_thread_user';

$output350 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments363, $renderChildrenClosure364, $renderingContext)]);

$output350 .= ': </span>
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure366 = function() use ($renderingContext, $self) {
$output369 = '';

$output369 .= '
                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\CaseViewHelper
$renderChildrenClosure371 = function() use ($renderingContext, $self) {
$array372 = array (
);return $renderingContext->getVariableProvider()->getByPath('forumlist.last_thread_user.0.username', $array372);
};
$arguments370 = array();
$arguments370['value'] = NULL;
$arguments370['mode'] = 'upper';
$arguments370['mode'] = 'capital';

$output369 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Format\CaseViewHelper::renderStatic($arguments370, $renderChildrenClosure371, $renderingContext)]);

$output369 .= '
                                ';
return $output369;
};
$arguments365 = array();
$arguments365['additionalAttributes'] = NULL;
$arguments365['data'] = NULL;
$arguments365['aria'] = NULL;
$arguments365['class'] = NULL;
$arguments365['dir'] = NULL;
$arguments365['id'] = NULL;
$arguments365['lang'] = NULL;
$arguments365['style'] = NULL;
$arguments365['title'] = NULL;
$arguments365['accesskey'] = NULL;
$arguments365['tabindex'] = NULL;
$arguments365['onclick'] = NULL;
$arguments365['name'] = NULL;
$arguments365['rel'] = NULL;
$arguments365['rev'] = NULL;
$arguments365['target'] = NULL;
$arguments365['action'] = NULL;
$arguments365['controller'] = NULL;
$arguments365['extensionName'] = NULL;
$arguments365['pluginName'] = NULL;
$arguments365['pageUid'] = NULL;
$arguments365['pageType'] = NULL;
$arguments365['noCache'] = NULL;
$arguments365['section'] = NULL;
$arguments365['format'] = NULL;
$arguments365['linkAccessRestrictedPages'] = NULL;
$arguments365['additionalParams'] = NULL;
$arguments365['absolute'] = NULL;
$arguments365['addQueryString'] = NULL;
$arguments365['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments365['addQueryStringMethod'] = NULL;
$arguments365['arguments'] = NULL;
$arguments365['action'] = 'show';
$arguments365['controller'] = 'User';
// Rendering Array
$array367 = array();
$array368 = array (
);$array367['user_id'] = $renderingContext->getVariableProvider()->getByPath('forumlist.last_thread_user.0.uid', $array368);
$arguments365['arguments'] = $array367;
$arguments365['class'] = 'userlink';

$output350 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments365, $renderChildrenClosure366, $renderingContext);

$output350 .= '
                                <span class="tx-forum-last_user_date">
                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper
$renderChildrenClosure374 = function() use ($renderingContext, $self) {
$array377 = array (
);return $renderingContext->getVariableProvider()->getByPath('forumlist.last_thread.0.tstamp', $array377);
};
$arguments373 = array();
$arguments373['date'] = NULL;
$arguments373['format'] = '';
$arguments373['base'] = NULL;
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure376 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments375 = array();
$arguments375['key'] = NULL;
$arguments375['id'] = NULL;
$arguments375['default'] = NULL;
$arguments375['arguments'] = NULL;
$arguments375['extensionName'] = NULL;
$arguments375['languageKey'] = NULL;
$arguments375['alternativeLanguageKeys'] = NULL;
$arguments375['key'] = 'tx_forum_domain_model_forum.date';
$arguments373['format'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments375, $renderChildrenClosure376, $renderingContext);
$renderChildrenClosure374 = ($arguments373['date'] !== null) ? function() use ($arguments373) { return $arguments373['date']; } : $renderChildrenClosure374;
$output350 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper::renderStatic($arguments373, $renderChildrenClosure374, $renderingContext)]);

$output350 .= '
                                </span>
                            </div>
                        ';
return $output350;
};

$output230 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments345, $renderChildrenClosure346, $renderingContext);

$output230 .= '
                        </td>
                    </tr>
                ';
return $output230;
};
$arguments227 = array();
$arguments227['each'] = NULL;
$arguments227['as'] = NULL;
$arguments227['key'] = NULL;
$arguments227['reverse'] = false;
$arguments227['iteration'] = NULL;
$array229 = array (
);$arguments227['each'] = $renderingContext->getVariableProvider()->getByPath('forum.forum', $array229);
$arguments227['as'] = 'forumlist';
$arguments227['iteration'] = 'iterator';

$output225 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments227, $renderChildrenClosure228, $renderingContext);

$output225 .= '
            ';
return $output225;
};
$arguments222 = array();
$arguments222['each'] = NULL;
$arguments222['as'] = NULL;
$arguments222['key'] = NULL;
$arguments222['reverse'] = false;
$arguments222['iteration'] = NULL;
$array224 = array (
);$arguments222['each'] = $renderingContext->getVariableProvider()->getByPath('foren', $array224);
$arguments222['as'] = 'forum';

$output211 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments222, $renderChildrenClosure223, $renderingContext);

$output211 .= '
            </tbody>
         
         </table>
    </div>
    
    
';
return $output211;
};
$arguments209 = array();
$arguments209['name'] = NULL;
$arguments209['name'] = 'content';

$output206 .= NULL;

$output206 .= '

';

return $output206;
}


}
#