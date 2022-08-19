<?php

class Login_action_login_b7f865a0b4dd5336111e982fc3d339196ea933f6 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

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
    
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure2 = function() use ($renderingContext, $self) {
$output6 = '';

$output6 .= '
        <div class="alert alert-danger" role="alert">
            <h3 class="alert-heading">';
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
$arguments7['key'] = 'tx_forum_domain_model_forum.loginErrorHeader';

$output6 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments7, $renderChildrenClosure8, $renderingContext)]);

$output6 .= '</h3>
            <p>
                ';
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
$arguments9['key'] = 'tx_forum_domain_model_forum.loginErrorText';

$output6 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments9, $renderChildrenClosure10, $renderingContext)]);

$output6 .= '
            </p>
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
);$array3['0'] = $renderingContext->getVariableProvider()->getByPath('error', $array4);
$array3['1'] = '==1';

$expression5 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == 1);};
$arguments1['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression5(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array3)
					),
					$renderingContext
				);
$arguments1['__thenClosure'] = $renderChildrenClosure2;

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext);

$output0 .= '
  
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure12 = function() use ($renderingContext, $self) {
$output57 = '';

$output57 .= ' 
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure59 = function() use ($renderingContext, $self) {
$output60 = '';

$output60 .= '
            <div class="tx_forum_loginbox">
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\FormViewHelper
$renderChildrenClosure62 = function() use ($renderingContext, $self) {
$output64 = '';

$output64 .= '

                    <input type="hidden" name="logintype" value="login" />
                    
                    <h4>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure66 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments65 = array();
$arguments65['key'] = NULL;
$arguments65['id'] = NULL;
$arguments65['default'] = NULL;
$arguments65['arguments'] = NULL;
$arguments65['extensionName'] = NULL;
$arguments65['languageKey'] = NULL;
$arguments65['alternativeLanguageKeys'] = NULL;
$arguments65['key'] = 'tx_forum_domain_model_forum.loginHeader';

$output64 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments65, $renderChildrenClosure66, $renderingContext)]);

$output64 .= '</h4>
                    <div class="tx-forum-textfield-loginform form-floating mb-3">
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper
$renderChildrenClosure68 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments67 = array();
$arguments67['additionalAttributes'] = NULL;
$arguments67['data'] = NULL;
$arguments67['aria'] = NULL;
$arguments67['name'] = NULL;
$arguments67['value'] = NULL;
$arguments67['property'] = NULL;
$arguments67['autofocus'] = NULL;
$arguments67['disabled'] = NULL;
$arguments67['maxlength'] = NULL;
$arguments67['readonly'] = NULL;
$arguments67['size'] = NULL;
$arguments67['placeholder'] = NULL;
$arguments67['pattern'] = NULL;
$arguments67['errorClass'] = 'f3-form-error';
$arguments67['class'] = NULL;
$arguments67['dir'] = NULL;
$arguments67['id'] = NULL;
$arguments67['lang'] = NULL;
$arguments67['style'] = NULL;
$arguments67['title'] = NULL;
$arguments67['accesskey'] = NULL;
$arguments67['tabindex'] = NULL;
$arguments67['onclick'] = NULL;
$arguments67['required'] = false;
$arguments67['type'] = 'text';
$arguments67['property'] = 'username';
$arguments67['id'] = 'loginUsername';
$arguments67['name'] = 'username';
$arguments67['class'] = 'form-control form-control-lg';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure70 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments69 = array();
$arguments69['key'] = NULL;
$arguments69['id'] = NULL;
$arguments69['default'] = NULL;
$arguments69['arguments'] = NULL;
$arguments69['extensionName'] = NULL;
$arguments69['languageKey'] = NULL;
$arguments69['alternativeLanguageKeys'] = NULL;
$arguments69['key'] = 'tx_forum_domain_model_forum.username';
$arguments67['placeholder'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments69, $renderChildrenClosure70, $renderingContext);
// Rendering Array
$array71 = array();
$array72 = array (
);$array71['required'] = $renderingContext->getVariableProvider()->getByPath('true', $array72);
$arguments67['additionalAttributes'] = $array71;

$output64 .= TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper::renderStatic($arguments67, $renderChildrenClosure68, $renderingContext);

$output64 .= '
                        <label for="loginUsername">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure74 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments73 = array();
$arguments73['key'] = NULL;
$arguments73['id'] = NULL;
$arguments73['default'] = NULL;
$arguments73['arguments'] = NULL;
$arguments73['extensionName'] = NULL;
$arguments73['languageKey'] = NULL;
$arguments73['alternativeLanguageKeys'] = NULL;
$arguments73['key'] = 'tx_forum_domain_model_forum.username';

$output64 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments73, $renderChildrenClosure74, $renderingContext)]);

$output64 .= '</label>
                    </div>

                    <div class="tx-forum-textfield-loginform form-floating mb-3">
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\PasswordViewHelper
$renderChildrenClosure76 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments75 = array();
$arguments75['additionalAttributes'] = NULL;
$arguments75['data'] = NULL;
$arguments75['aria'] = NULL;
$arguments75['name'] = NULL;
$arguments75['value'] = NULL;
$arguments75['property'] = NULL;
$arguments75['disabled'] = NULL;
$arguments75['maxlength'] = NULL;
$arguments75['placeholder'] = NULL;
$arguments75['readonly'] = NULL;
$arguments75['autocomplete'] = NULL;
$arguments75['size'] = NULL;
$arguments75['errorClass'] = 'f3-form-error';
$arguments75['class'] = NULL;
$arguments75['dir'] = NULL;
$arguments75['id'] = NULL;
$arguments75['lang'] = NULL;
$arguments75['style'] = NULL;
$arguments75['title'] = NULL;
$arguments75['accesskey'] = NULL;
$arguments75['tabindex'] = NULL;
$arguments75['onclick'] = NULL;
$arguments75['property'] = 'password';
$arguments75['id'] = 'loginPassword';
$arguments75['name'] = 'password';
$arguments75['class'] = 'form-control form-control-lg';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure78 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments77 = array();
$arguments77['key'] = NULL;
$arguments77['id'] = NULL;
$arguments77['default'] = NULL;
$arguments77['arguments'] = NULL;
$arguments77['extensionName'] = NULL;
$arguments77['languageKey'] = NULL;
$arguments77['alternativeLanguageKeys'] = NULL;
$arguments77['key'] = 'tx_forum_domain_model_forum.password';
$arguments75['placeholder'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments77, $renderChildrenClosure78, $renderingContext);
// Rendering Array
$array79 = array();
$array80 = array (
);$array79['required'] = $renderingContext->getVariableProvider()->getByPath('true', $array80);
$arguments75['additionalAttributes'] = $array79;

$output64 .= TYPO3\CMS\Fluid\ViewHelpers\Form\PasswordViewHelper::renderStatic($arguments75, $renderChildrenClosure76, $renderingContext);

$output64 .= '
                        <label for="loginPassword">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure82 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments81 = array();
$arguments81['key'] = NULL;
$arguments81['id'] = NULL;
$arguments81['default'] = NULL;
$arguments81['arguments'] = NULL;
$arguments81['extensionName'] = NULL;
$arguments81['languageKey'] = NULL;
$arguments81['alternativeLanguageKeys'] = NULL;
$arguments81['key'] = 'tx_forum_domain_model_forum.password';

$output64 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments81, $renderChildrenClosure82, $renderingContext)]);

$output64 .= '</label>
                    </div>

                    <div class="tx-forum-textfield-loginform form-floating">
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SubmitViewHelper
$renderChildrenClosure84 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments83 = array();
$arguments83['additionalAttributes'] = NULL;
$arguments83['data'] = NULL;
$arguments83['aria'] = NULL;
$arguments83['name'] = NULL;
$arguments83['value'] = NULL;
$arguments83['property'] = NULL;
$arguments83['disabled'] = NULL;
$arguments83['class'] = NULL;
$arguments83['dir'] = NULL;
$arguments83['id'] = NULL;
$arguments83['lang'] = NULL;
$arguments83['style'] = NULL;
$arguments83['title'] = NULL;
$arguments83['accesskey'] = NULL;
$arguments83['tabindex'] = NULL;
$arguments83['onclick'] = NULL;
$arguments83['class'] = 'btn btn-dark';
$arguments83['property'] = 'submit';
$arguments83['name'] = 'submit';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure86 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments85 = array();
$arguments85['key'] = NULL;
$arguments85['id'] = NULL;
$arguments85['default'] = NULL;
$arguments85['arguments'] = NULL;
$arguments85['extensionName'] = NULL;
$arguments85['languageKey'] = NULL;
$arguments85['alternativeLanguageKeys'] = NULL;
$arguments85['key'] = 'tx_forum_domain_model_forum.login_submit';
$arguments83['value'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments85, $renderChildrenClosure86, $renderingContext);

$output64 .= TYPO3\CMS\Fluid\ViewHelpers\Form\SubmitViewHelper::renderStatic($arguments83, $renderChildrenClosure84, $renderingContext);

$output64 .= '
                    </div>
                ';
return $output64;
};
$arguments61 = array();
$arguments61['additionalAttributes'] = NULL;
$arguments61['data'] = NULL;
$arguments61['aria'] = NULL;
$arguments61['action'] = NULL;
$arguments61['arguments'] = array (
);
$arguments61['controller'] = NULL;
$arguments61['extensionName'] = NULL;
$arguments61['pluginName'] = NULL;
$arguments61['pageUid'] = NULL;
$arguments61['object'] = NULL;
$arguments61['pageType'] = 0;
$arguments61['noCache'] = false;
$arguments61['section'] = '';
$arguments61['format'] = '';
$arguments61['additionalParams'] = array (
);
$arguments61['absolute'] = false;
$arguments61['addQueryString'] = false;
$arguments61['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments61['addQueryStringMethod'] = NULL;
$arguments61['fieldNamePrefix'] = NULL;
$arguments61['actionUri'] = NULL;
$arguments61['objectName'] = NULL;
$arguments61['hiddenFieldClassName'] = NULL;
$arguments61['enctype'] = NULL;
$arguments61['method'] = NULL;
$arguments61['name'] = NULL;
$arguments61['onreset'] = NULL;
$arguments61['onsubmit'] = NULL;
$arguments61['target'] = NULL;
$arguments61['novalidate'] = NULL;
$arguments61['class'] = NULL;
$arguments61['dir'] = NULL;
$arguments61['id'] = NULL;
$arguments61['lang'] = NULL;
$arguments61['style'] = NULL;
$arguments61['title'] = NULL;
$arguments61['accesskey'] = NULL;
$arguments61['tabindex'] = NULL;
$arguments61['onclick'] = NULL;
$arguments61['action'] = 'login';
$arguments61['controller'] = 'Login';
// Rendering Array
$array63 = array();
$array63['no_cache'] = 1;
$arguments61['additionalParams'] = $array63;

$output60 .= TYPO3\CMS\Fluid\ViewHelpers\FormViewHelper::renderStatic($arguments61, $renderChildrenClosure62, $renderingContext);

$output60 .= '
            </div>
        ';
return $output60;
};
$arguments58 = array();

$output57 .= '';

$output57 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure88 = function() use ($renderingContext, $self) {
$output89 = '';

$output89 .= '
            <!-- LogOut Box -->
            <div class="tx_forum_logoutbox">
                <h4>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure91 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments90 = array();
$arguments90['key'] = NULL;
$arguments90['id'] = NULL;
$arguments90['default'] = NULL;
$arguments90['arguments'] = NULL;
$arguments90['extensionName'] = NULL;
$arguments90['languageKey'] = NULL;
$arguments90['alternativeLanguageKeys'] = NULL;
$arguments90['key'] = 'tx_forum_domain_model_forum.logoutHeader';

$output89 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments90, $renderChildrenClosure91, $renderingContext)]);

$output89 .= '</h4>
                <div class="tx_forum_logoutbox-userinfos">
                    <small>User: <b>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\CaseViewHelper
$renderChildrenClosure93 = function() use ($renderingContext, $self) {
$array94 = array (
);return $renderingContext->getVariableProvider()->getByPath('username', $array94);
};
$arguments92 = array();
$arguments92['value'] = NULL;
$arguments92['mode'] = 'upper';
$arguments92['mode'] = 'capital';

$output89 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Format\CaseViewHelper::renderStatic($arguments92, $renderChildrenClosure93, $renderingContext)]);

$output89 .= '</b></small>
                    <small>Beiträge: <b>';
$array95 = array (
);
$output89 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('count_threads', $array95)]);

$output89 .= '</b></small>
                </div>
                <ul>
                    <li><i class="fa-solid fa-user"></i>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure97 = function() use ($renderingContext, $self) {
return 'Profil';
};
$arguments96 = array();
$arguments96['additionalAttributes'] = NULL;
$arguments96['data'] = NULL;
$arguments96['aria'] = NULL;
$arguments96['class'] = NULL;
$arguments96['dir'] = NULL;
$arguments96['id'] = NULL;
$arguments96['lang'] = NULL;
$arguments96['style'] = NULL;
$arguments96['title'] = NULL;
$arguments96['accesskey'] = NULL;
$arguments96['tabindex'] = NULL;
$arguments96['onclick'] = NULL;
$arguments96['name'] = NULL;
$arguments96['rel'] = NULL;
$arguments96['rev'] = NULL;
$arguments96['target'] = NULL;
$arguments96['action'] = NULL;
$arguments96['controller'] = NULL;
$arguments96['extensionName'] = NULL;
$arguments96['pluginName'] = NULL;
$arguments96['pageUid'] = NULL;
$arguments96['pageType'] = NULL;
$arguments96['noCache'] = NULL;
$arguments96['section'] = NULL;
$arguments96['format'] = NULL;
$arguments96['linkAccessRestrictedPages'] = NULL;
$arguments96['additionalParams'] = NULL;
$arguments96['absolute'] = NULL;
$arguments96['addQueryString'] = NULL;
$arguments96['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments96['addQueryStringMethod'] = NULL;
$arguments96['arguments'] = NULL;
$arguments96['action'] = 'show';
$arguments96['controller'] = 'User';
// Rendering Array
$array98 = array();
$array99 = array (
);$array98['user_id'] = $renderingContext->getVariableProvider()->getByPath('user_id', $array99);
$arguments96['arguments'] = $array98;

$output89 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments96, $renderChildrenClosure97, $renderingContext);

$output89 .= '</li>
                </ul>

                <ul class="tx-forum-logout-last">
                    <li><i class="fa-solid fa-right-from-bracket"></i>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure101 = function() use ($renderingContext, $self) {
return 'LogOut';
};
$arguments100 = array();
$arguments100['additionalAttributes'] = NULL;
$arguments100['data'] = NULL;
$arguments100['aria'] = NULL;
$arguments100['class'] = NULL;
$arguments100['dir'] = NULL;
$arguments100['id'] = NULL;
$arguments100['lang'] = NULL;
$arguments100['style'] = NULL;
$arguments100['title'] = NULL;
$arguments100['accesskey'] = NULL;
$arguments100['tabindex'] = NULL;
$arguments100['onclick'] = NULL;
$arguments100['name'] = NULL;
$arguments100['rel'] = NULL;
$arguments100['rev'] = NULL;
$arguments100['target'] = NULL;
$arguments100['action'] = NULL;
$arguments100['controller'] = NULL;
$arguments100['extensionName'] = NULL;
$arguments100['pluginName'] = NULL;
$arguments100['pageUid'] = NULL;
$arguments100['pageType'] = NULL;
$arguments100['noCache'] = NULL;
$arguments100['section'] = NULL;
$arguments100['format'] = NULL;
$arguments100['linkAccessRestrictedPages'] = NULL;
$arguments100['additionalParams'] = NULL;
$arguments100['absolute'] = NULL;
$arguments100['addQueryString'] = NULL;
$arguments100['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments100['addQueryStringMethod'] = NULL;
$arguments100['arguments'] = NULL;
$arguments100['action'] = 'logout';
$arguments100['controller'] = 'Login';
// Rendering Array
$array102 = array();
$array102['logintype'] = 'logout';
$arguments100['additionalParams'] = $array102;

$output89 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments100, $renderChildrenClosure101, $renderingContext);

$output89 .= ' </li>
                </ul>
    
            </div>
        ';
return $output89;
};
$arguments87 = array();
$arguments87['if'] = NULL;

$output57 .= '';

$output57 .= ' 
    ';
return $output57;
};
$arguments11 = array();
$arguments11['then'] = NULL;
$arguments11['else'] = NULL;
$arguments11['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array54 = array();
$array55 = array (
);$array54['0'] = $renderingContext->getVariableProvider()->getByPath('userLogin', $array55);
$array54['1'] = '==0';

$expression56 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == 0);};
$arguments11['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression56(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array54)
					),
					$renderingContext
				);
$arguments11['__thenClosure'] = function() use ($renderingContext, $self) {
$output13 = '';

$output13 .= '
            <div class="tx_forum_loginbox">
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\FormViewHelper
$renderChildrenClosure15 = function() use ($renderingContext, $self) {
$output17 = '';

$output17 .= '

                    <input type="hidden" name="logintype" value="login" />
                    
                    <h4>';
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
$arguments18['key'] = 'tx_forum_domain_model_forum.loginHeader';

$output17 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments18, $renderChildrenClosure19, $renderingContext)]);

$output17 .= '</h4>
                    <div class="tx-forum-textfield-loginform form-floating mb-3">
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper
$renderChildrenClosure21 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments20 = array();
$arguments20['additionalAttributes'] = NULL;
$arguments20['data'] = NULL;
$arguments20['aria'] = NULL;
$arguments20['name'] = NULL;
$arguments20['value'] = NULL;
$arguments20['property'] = NULL;
$arguments20['autofocus'] = NULL;
$arguments20['disabled'] = NULL;
$arguments20['maxlength'] = NULL;
$arguments20['readonly'] = NULL;
$arguments20['size'] = NULL;
$arguments20['placeholder'] = NULL;
$arguments20['pattern'] = NULL;
$arguments20['errorClass'] = 'f3-form-error';
$arguments20['class'] = NULL;
$arguments20['dir'] = NULL;
$arguments20['id'] = NULL;
$arguments20['lang'] = NULL;
$arguments20['style'] = NULL;
$arguments20['title'] = NULL;
$arguments20['accesskey'] = NULL;
$arguments20['tabindex'] = NULL;
$arguments20['onclick'] = NULL;
$arguments20['required'] = false;
$arguments20['type'] = 'text';
$arguments20['property'] = 'username';
$arguments20['id'] = 'loginUsername';
$arguments20['name'] = 'username';
$arguments20['class'] = 'form-control form-control-lg';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure23 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments22 = array();
$arguments22['key'] = NULL;
$arguments22['id'] = NULL;
$arguments22['default'] = NULL;
$arguments22['arguments'] = NULL;
$arguments22['extensionName'] = NULL;
$arguments22['languageKey'] = NULL;
$arguments22['alternativeLanguageKeys'] = NULL;
$arguments22['key'] = 'tx_forum_domain_model_forum.username';
$arguments20['placeholder'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments22, $renderChildrenClosure23, $renderingContext);
// Rendering Array
$array24 = array();
$array25 = array (
);$array24['required'] = $renderingContext->getVariableProvider()->getByPath('true', $array25);
$arguments20['additionalAttributes'] = $array24;

$output17 .= TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper::renderStatic($arguments20, $renderChildrenClosure21, $renderingContext);

$output17 .= '
                        <label for="loginUsername">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure27 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments26 = array();
$arguments26['key'] = NULL;
$arguments26['id'] = NULL;
$arguments26['default'] = NULL;
$arguments26['arguments'] = NULL;
$arguments26['extensionName'] = NULL;
$arguments26['languageKey'] = NULL;
$arguments26['alternativeLanguageKeys'] = NULL;
$arguments26['key'] = 'tx_forum_domain_model_forum.username';

$output17 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments26, $renderChildrenClosure27, $renderingContext)]);

$output17 .= '</label>
                    </div>

                    <div class="tx-forum-textfield-loginform form-floating mb-3">
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\PasswordViewHelper
$renderChildrenClosure29 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments28 = array();
$arguments28['additionalAttributes'] = NULL;
$arguments28['data'] = NULL;
$arguments28['aria'] = NULL;
$arguments28['name'] = NULL;
$arguments28['value'] = NULL;
$arguments28['property'] = NULL;
$arguments28['disabled'] = NULL;
$arguments28['maxlength'] = NULL;
$arguments28['placeholder'] = NULL;
$arguments28['readonly'] = NULL;
$arguments28['autocomplete'] = NULL;
$arguments28['size'] = NULL;
$arguments28['errorClass'] = 'f3-form-error';
$arguments28['class'] = NULL;
$arguments28['dir'] = NULL;
$arguments28['id'] = NULL;
$arguments28['lang'] = NULL;
$arguments28['style'] = NULL;
$arguments28['title'] = NULL;
$arguments28['accesskey'] = NULL;
$arguments28['tabindex'] = NULL;
$arguments28['onclick'] = NULL;
$arguments28['property'] = 'password';
$arguments28['id'] = 'loginPassword';
$arguments28['name'] = 'password';
$arguments28['class'] = 'form-control form-control-lg';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure31 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments30 = array();
$arguments30['key'] = NULL;
$arguments30['id'] = NULL;
$arguments30['default'] = NULL;
$arguments30['arguments'] = NULL;
$arguments30['extensionName'] = NULL;
$arguments30['languageKey'] = NULL;
$arguments30['alternativeLanguageKeys'] = NULL;
$arguments30['key'] = 'tx_forum_domain_model_forum.password';
$arguments28['placeholder'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments30, $renderChildrenClosure31, $renderingContext);
// Rendering Array
$array32 = array();
$array33 = array (
);$array32['required'] = $renderingContext->getVariableProvider()->getByPath('true', $array33);
$arguments28['additionalAttributes'] = $array32;

$output17 .= TYPO3\CMS\Fluid\ViewHelpers\Form\PasswordViewHelper::renderStatic($arguments28, $renderChildrenClosure29, $renderingContext);

$output17 .= '
                        <label for="loginPassword">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure35 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments34 = array();
$arguments34['key'] = NULL;
$arguments34['id'] = NULL;
$arguments34['default'] = NULL;
$arguments34['arguments'] = NULL;
$arguments34['extensionName'] = NULL;
$arguments34['languageKey'] = NULL;
$arguments34['alternativeLanguageKeys'] = NULL;
$arguments34['key'] = 'tx_forum_domain_model_forum.password';

$output17 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments34, $renderChildrenClosure35, $renderingContext)]);

$output17 .= '</label>
                    </div>

                    <div class="tx-forum-textfield-loginform form-floating">
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SubmitViewHelper
$renderChildrenClosure37 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments36 = array();
$arguments36['additionalAttributes'] = NULL;
$arguments36['data'] = NULL;
$arguments36['aria'] = NULL;
$arguments36['name'] = NULL;
$arguments36['value'] = NULL;
$arguments36['property'] = NULL;
$arguments36['disabled'] = NULL;
$arguments36['class'] = NULL;
$arguments36['dir'] = NULL;
$arguments36['id'] = NULL;
$arguments36['lang'] = NULL;
$arguments36['style'] = NULL;
$arguments36['title'] = NULL;
$arguments36['accesskey'] = NULL;
$arguments36['tabindex'] = NULL;
$arguments36['onclick'] = NULL;
$arguments36['class'] = 'btn btn-dark';
$arguments36['property'] = 'submit';
$arguments36['name'] = 'submit';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure39 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments38 = array();
$arguments38['key'] = NULL;
$arguments38['id'] = NULL;
$arguments38['default'] = NULL;
$arguments38['arguments'] = NULL;
$arguments38['extensionName'] = NULL;
$arguments38['languageKey'] = NULL;
$arguments38['alternativeLanguageKeys'] = NULL;
$arguments38['key'] = 'tx_forum_domain_model_forum.login_submit';
$arguments36['value'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments38, $renderChildrenClosure39, $renderingContext);

$output17 .= TYPO3\CMS\Fluid\ViewHelpers\Form\SubmitViewHelper::renderStatic($arguments36, $renderChildrenClosure37, $renderingContext);

$output17 .= '
                    </div>
                ';
return $output17;
};
$arguments14 = array();
$arguments14['additionalAttributes'] = NULL;
$arguments14['data'] = NULL;
$arguments14['aria'] = NULL;
$arguments14['action'] = NULL;
$arguments14['arguments'] = array (
);
$arguments14['controller'] = NULL;
$arguments14['extensionName'] = NULL;
$arguments14['pluginName'] = NULL;
$arguments14['pageUid'] = NULL;
$arguments14['object'] = NULL;
$arguments14['pageType'] = 0;
$arguments14['noCache'] = false;
$arguments14['section'] = '';
$arguments14['format'] = '';
$arguments14['additionalParams'] = array (
);
$arguments14['absolute'] = false;
$arguments14['addQueryString'] = false;
$arguments14['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments14['addQueryStringMethod'] = NULL;
$arguments14['fieldNamePrefix'] = NULL;
$arguments14['actionUri'] = NULL;
$arguments14['objectName'] = NULL;
$arguments14['hiddenFieldClassName'] = NULL;
$arguments14['enctype'] = NULL;
$arguments14['method'] = NULL;
$arguments14['name'] = NULL;
$arguments14['onreset'] = NULL;
$arguments14['onsubmit'] = NULL;
$arguments14['target'] = NULL;
$arguments14['novalidate'] = NULL;
$arguments14['class'] = NULL;
$arguments14['dir'] = NULL;
$arguments14['id'] = NULL;
$arguments14['lang'] = NULL;
$arguments14['style'] = NULL;
$arguments14['title'] = NULL;
$arguments14['accesskey'] = NULL;
$arguments14['tabindex'] = NULL;
$arguments14['onclick'] = NULL;
$arguments14['action'] = 'login';
$arguments14['controller'] = 'Login';
// Rendering Array
$array16 = array();
$array16['no_cache'] = 1;
$arguments14['additionalParams'] = $array16;

$output13 .= TYPO3\CMS\Fluid\ViewHelpers\FormViewHelper::renderStatic($arguments14, $renderChildrenClosure15, $renderingContext);

$output13 .= '
            </div>
        ';
return $output13;
};
$arguments11['__elseClosures'][] = function() use ($renderingContext, $self) {
$output40 = '';

$output40 .= '
            <!-- LogOut Box -->
            <div class="tx_forum_logoutbox">
                <h4>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure42 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments41 = array();
$arguments41['key'] = NULL;
$arguments41['id'] = NULL;
$arguments41['default'] = NULL;
$arguments41['arguments'] = NULL;
$arguments41['extensionName'] = NULL;
$arguments41['languageKey'] = NULL;
$arguments41['alternativeLanguageKeys'] = NULL;
$arguments41['key'] = 'tx_forum_domain_model_forum.logoutHeader';

$output40 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments41, $renderChildrenClosure42, $renderingContext)]);

$output40 .= '</h4>
                <div class="tx_forum_logoutbox-userinfos">
                    <small>User: <b>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\CaseViewHelper
$renderChildrenClosure44 = function() use ($renderingContext, $self) {
$array45 = array (
);return $renderingContext->getVariableProvider()->getByPath('username', $array45);
};
$arguments43 = array();
$arguments43['value'] = NULL;
$arguments43['mode'] = 'upper';
$arguments43['mode'] = 'capital';

$output40 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Format\CaseViewHelper::renderStatic($arguments43, $renderChildrenClosure44, $renderingContext)]);

$output40 .= '</b></small>
                    <small>Beiträge: <b>';
$array46 = array (
);
$output40 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('count_threads', $array46)]);

$output40 .= '</b></small>
                </div>
                <ul>
                    <li><i class="fa-solid fa-user"></i>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure48 = function() use ($renderingContext, $self) {
return 'Profil';
};
$arguments47 = array();
$arguments47['additionalAttributes'] = NULL;
$arguments47['data'] = NULL;
$arguments47['aria'] = NULL;
$arguments47['class'] = NULL;
$arguments47['dir'] = NULL;
$arguments47['id'] = NULL;
$arguments47['lang'] = NULL;
$arguments47['style'] = NULL;
$arguments47['title'] = NULL;
$arguments47['accesskey'] = NULL;
$arguments47['tabindex'] = NULL;
$arguments47['onclick'] = NULL;
$arguments47['name'] = NULL;
$arguments47['rel'] = NULL;
$arguments47['rev'] = NULL;
$arguments47['target'] = NULL;
$arguments47['action'] = NULL;
$arguments47['controller'] = NULL;
$arguments47['extensionName'] = NULL;
$arguments47['pluginName'] = NULL;
$arguments47['pageUid'] = NULL;
$arguments47['pageType'] = NULL;
$arguments47['noCache'] = NULL;
$arguments47['section'] = NULL;
$arguments47['format'] = NULL;
$arguments47['linkAccessRestrictedPages'] = NULL;
$arguments47['additionalParams'] = NULL;
$arguments47['absolute'] = NULL;
$arguments47['addQueryString'] = NULL;
$arguments47['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments47['addQueryStringMethod'] = NULL;
$arguments47['arguments'] = NULL;
$arguments47['action'] = 'show';
$arguments47['controller'] = 'User';
// Rendering Array
$array49 = array();
$array50 = array (
);$array49['user_id'] = $renderingContext->getVariableProvider()->getByPath('user_id', $array50);
$arguments47['arguments'] = $array49;

$output40 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments47, $renderChildrenClosure48, $renderingContext);

$output40 .= '</li>
                </ul>

                <ul class="tx-forum-logout-last">
                    <li><i class="fa-solid fa-right-from-bracket"></i>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure52 = function() use ($renderingContext, $self) {
return 'LogOut';
};
$arguments51 = array();
$arguments51['additionalAttributes'] = NULL;
$arguments51['data'] = NULL;
$arguments51['aria'] = NULL;
$arguments51['class'] = NULL;
$arguments51['dir'] = NULL;
$arguments51['id'] = NULL;
$arguments51['lang'] = NULL;
$arguments51['style'] = NULL;
$arguments51['title'] = NULL;
$arguments51['accesskey'] = NULL;
$arguments51['tabindex'] = NULL;
$arguments51['onclick'] = NULL;
$arguments51['name'] = NULL;
$arguments51['rel'] = NULL;
$arguments51['rev'] = NULL;
$arguments51['target'] = NULL;
$arguments51['action'] = NULL;
$arguments51['controller'] = NULL;
$arguments51['extensionName'] = NULL;
$arguments51['pluginName'] = NULL;
$arguments51['pageUid'] = NULL;
$arguments51['pageType'] = NULL;
$arguments51['noCache'] = NULL;
$arguments51['section'] = NULL;
$arguments51['format'] = NULL;
$arguments51['linkAccessRestrictedPages'] = NULL;
$arguments51['additionalParams'] = NULL;
$arguments51['absolute'] = NULL;
$arguments51['addQueryString'] = NULL;
$arguments51['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments51['addQueryStringMethod'] = NULL;
$arguments51['arguments'] = NULL;
$arguments51['action'] = 'logout';
$arguments51['controller'] = 'Login';
// Rendering Array
$array53 = array();
$array53['logintype'] = 'logout';
$arguments51['additionalParams'] = $array53;

$output40 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments51, $renderChildrenClosure52, $renderingContext);

$output40 .= ' </li>
                </ul>
    
            </div>
        ';
return $output40;
};

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments11, $renderChildrenClosure12, $renderingContext);

$output0 .= ' 
    
    
     
    
';

return $output0;
}
/**
 * Main Render function
 */
public function render(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output103 = '';

$output103 .= '
';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\LayoutViewHelper
$renderChildrenClosure105 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments104 = array();
$arguments104['name'] = NULL;
$arguments104['name'] = 'Default';

$output103 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [NULL]);

$output103 .= '

';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SectionViewHelper
$renderChildrenClosure107 = function() use ($renderingContext, $self) {
$output108 = '';

$output108 .= '
    
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure110 = function() use ($renderingContext, $self) {
$output114 = '';

$output114 .= '
        <div class="alert alert-danger" role="alert">
            <h3 class="alert-heading">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure116 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments115 = array();
$arguments115['key'] = NULL;
$arguments115['id'] = NULL;
$arguments115['default'] = NULL;
$arguments115['arguments'] = NULL;
$arguments115['extensionName'] = NULL;
$arguments115['languageKey'] = NULL;
$arguments115['alternativeLanguageKeys'] = NULL;
$arguments115['key'] = 'tx_forum_domain_model_forum.loginErrorHeader';

$output114 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments115, $renderChildrenClosure116, $renderingContext)]);

$output114 .= '</h3>
            <p>
                ';
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
$arguments117['key'] = 'tx_forum_domain_model_forum.loginErrorText';

$output114 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments117, $renderChildrenClosure118, $renderingContext)]);

$output114 .= '
            </p>
        </div>
    ';
return $output114;
};
$arguments109 = array();
$arguments109['then'] = NULL;
$arguments109['else'] = NULL;
$arguments109['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array111 = array();
$array112 = array (
);$array111['0'] = $renderingContext->getVariableProvider()->getByPath('error', $array112);
$array111['1'] = '==1';

$expression113 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == 1);};
$arguments109['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression113(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array111)
					),
					$renderingContext
				);
$arguments109['__thenClosure'] = $renderChildrenClosure110;

$output108 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments109, $renderChildrenClosure110, $renderingContext);

$output108 .= '
  
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure120 = function() use ($renderingContext, $self) {
$output165 = '';

$output165 .= ' 
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure167 = function() use ($renderingContext, $self) {
$output168 = '';

$output168 .= '
            <div class="tx_forum_loginbox">
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\FormViewHelper
$renderChildrenClosure170 = function() use ($renderingContext, $self) {
$output172 = '';

$output172 .= '

                    <input type="hidden" name="logintype" value="login" />
                    
                    <h4>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure174 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments173 = array();
$arguments173['key'] = NULL;
$arguments173['id'] = NULL;
$arguments173['default'] = NULL;
$arguments173['arguments'] = NULL;
$arguments173['extensionName'] = NULL;
$arguments173['languageKey'] = NULL;
$arguments173['alternativeLanguageKeys'] = NULL;
$arguments173['key'] = 'tx_forum_domain_model_forum.loginHeader';

$output172 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments173, $renderChildrenClosure174, $renderingContext)]);

$output172 .= '</h4>
                    <div class="tx-forum-textfield-loginform form-floating mb-3">
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper
$renderChildrenClosure176 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments175 = array();
$arguments175['additionalAttributes'] = NULL;
$arguments175['data'] = NULL;
$arguments175['aria'] = NULL;
$arguments175['name'] = NULL;
$arguments175['value'] = NULL;
$arguments175['property'] = NULL;
$arguments175['autofocus'] = NULL;
$arguments175['disabled'] = NULL;
$arguments175['maxlength'] = NULL;
$arguments175['readonly'] = NULL;
$arguments175['size'] = NULL;
$arguments175['placeholder'] = NULL;
$arguments175['pattern'] = NULL;
$arguments175['errorClass'] = 'f3-form-error';
$arguments175['class'] = NULL;
$arguments175['dir'] = NULL;
$arguments175['id'] = NULL;
$arguments175['lang'] = NULL;
$arguments175['style'] = NULL;
$arguments175['title'] = NULL;
$arguments175['accesskey'] = NULL;
$arguments175['tabindex'] = NULL;
$arguments175['onclick'] = NULL;
$arguments175['required'] = false;
$arguments175['type'] = 'text';
$arguments175['property'] = 'username';
$arguments175['id'] = 'loginUsername';
$arguments175['name'] = 'username';
$arguments175['class'] = 'form-control form-control-lg';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure178 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments177 = array();
$arguments177['key'] = NULL;
$arguments177['id'] = NULL;
$arguments177['default'] = NULL;
$arguments177['arguments'] = NULL;
$arguments177['extensionName'] = NULL;
$arguments177['languageKey'] = NULL;
$arguments177['alternativeLanguageKeys'] = NULL;
$arguments177['key'] = 'tx_forum_domain_model_forum.username';
$arguments175['placeholder'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments177, $renderChildrenClosure178, $renderingContext);
// Rendering Array
$array179 = array();
$array180 = array (
);$array179['required'] = $renderingContext->getVariableProvider()->getByPath('true', $array180);
$arguments175['additionalAttributes'] = $array179;

$output172 .= TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper::renderStatic($arguments175, $renderChildrenClosure176, $renderingContext);

$output172 .= '
                        <label for="loginUsername">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure182 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments181 = array();
$arguments181['key'] = NULL;
$arguments181['id'] = NULL;
$arguments181['default'] = NULL;
$arguments181['arguments'] = NULL;
$arguments181['extensionName'] = NULL;
$arguments181['languageKey'] = NULL;
$arguments181['alternativeLanguageKeys'] = NULL;
$arguments181['key'] = 'tx_forum_domain_model_forum.username';

$output172 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments181, $renderChildrenClosure182, $renderingContext)]);

$output172 .= '</label>
                    </div>

                    <div class="tx-forum-textfield-loginform form-floating mb-3">
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\PasswordViewHelper
$renderChildrenClosure184 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments183 = array();
$arguments183['additionalAttributes'] = NULL;
$arguments183['data'] = NULL;
$arguments183['aria'] = NULL;
$arguments183['name'] = NULL;
$arguments183['value'] = NULL;
$arguments183['property'] = NULL;
$arguments183['disabled'] = NULL;
$arguments183['maxlength'] = NULL;
$arguments183['placeholder'] = NULL;
$arguments183['readonly'] = NULL;
$arguments183['autocomplete'] = NULL;
$arguments183['size'] = NULL;
$arguments183['errorClass'] = 'f3-form-error';
$arguments183['class'] = NULL;
$arguments183['dir'] = NULL;
$arguments183['id'] = NULL;
$arguments183['lang'] = NULL;
$arguments183['style'] = NULL;
$arguments183['title'] = NULL;
$arguments183['accesskey'] = NULL;
$arguments183['tabindex'] = NULL;
$arguments183['onclick'] = NULL;
$arguments183['property'] = 'password';
$arguments183['id'] = 'loginPassword';
$arguments183['name'] = 'password';
$arguments183['class'] = 'form-control form-control-lg';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure186 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments185 = array();
$arguments185['key'] = NULL;
$arguments185['id'] = NULL;
$arguments185['default'] = NULL;
$arguments185['arguments'] = NULL;
$arguments185['extensionName'] = NULL;
$arguments185['languageKey'] = NULL;
$arguments185['alternativeLanguageKeys'] = NULL;
$arguments185['key'] = 'tx_forum_domain_model_forum.password';
$arguments183['placeholder'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments185, $renderChildrenClosure186, $renderingContext);
// Rendering Array
$array187 = array();
$array188 = array (
);$array187['required'] = $renderingContext->getVariableProvider()->getByPath('true', $array188);
$arguments183['additionalAttributes'] = $array187;

$output172 .= TYPO3\CMS\Fluid\ViewHelpers\Form\PasswordViewHelper::renderStatic($arguments183, $renderChildrenClosure184, $renderingContext);

$output172 .= '
                        <label for="loginPassword">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure190 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments189 = array();
$arguments189['key'] = NULL;
$arguments189['id'] = NULL;
$arguments189['default'] = NULL;
$arguments189['arguments'] = NULL;
$arguments189['extensionName'] = NULL;
$arguments189['languageKey'] = NULL;
$arguments189['alternativeLanguageKeys'] = NULL;
$arguments189['key'] = 'tx_forum_domain_model_forum.password';

$output172 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments189, $renderChildrenClosure190, $renderingContext)]);

$output172 .= '</label>
                    </div>

                    <div class="tx-forum-textfield-loginform form-floating">
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SubmitViewHelper
$renderChildrenClosure192 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments191 = array();
$arguments191['additionalAttributes'] = NULL;
$arguments191['data'] = NULL;
$arguments191['aria'] = NULL;
$arguments191['name'] = NULL;
$arguments191['value'] = NULL;
$arguments191['property'] = NULL;
$arguments191['disabled'] = NULL;
$arguments191['class'] = NULL;
$arguments191['dir'] = NULL;
$arguments191['id'] = NULL;
$arguments191['lang'] = NULL;
$arguments191['style'] = NULL;
$arguments191['title'] = NULL;
$arguments191['accesskey'] = NULL;
$arguments191['tabindex'] = NULL;
$arguments191['onclick'] = NULL;
$arguments191['class'] = 'btn btn-dark';
$arguments191['property'] = 'submit';
$arguments191['name'] = 'submit';
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
$arguments193['key'] = 'tx_forum_domain_model_forum.login_submit';
$arguments191['value'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments193, $renderChildrenClosure194, $renderingContext);

$output172 .= TYPO3\CMS\Fluid\ViewHelpers\Form\SubmitViewHelper::renderStatic($arguments191, $renderChildrenClosure192, $renderingContext);

$output172 .= '
                    </div>
                ';
return $output172;
};
$arguments169 = array();
$arguments169['additionalAttributes'] = NULL;
$arguments169['data'] = NULL;
$arguments169['aria'] = NULL;
$arguments169['action'] = NULL;
$arguments169['arguments'] = array (
);
$arguments169['controller'] = NULL;
$arguments169['extensionName'] = NULL;
$arguments169['pluginName'] = NULL;
$arguments169['pageUid'] = NULL;
$arguments169['object'] = NULL;
$arguments169['pageType'] = 0;
$arguments169['noCache'] = false;
$arguments169['section'] = '';
$arguments169['format'] = '';
$arguments169['additionalParams'] = array (
);
$arguments169['absolute'] = false;
$arguments169['addQueryString'] = false;
$arguments169['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments169['addQueryStringMethod'] = NULL;
$arguments169['fieldNamePrefix'] = NULL;
$arguments169['actionUri'] = NULL;
$arguments169['objectName'] = NULL;
$arguments169['hiddenFieldClassName'] = NULL;
$arguments169['enctype'] = NULL;
$arguments169['method'] = NULL;
$arguments169['name'] = NULL;
$arguments169['onreset'] = NULL;
$arguments169['onsubmit'] = NULL;
$arguments169['target'] = NULL;
$arguments169['novalidate'] = NULL;
$arguments169['class'] = NULL;
$arguments169['dir'] = NULL;
$arguments169['id'] = NULL;
$arguments169['lang'] = NULL;
$arguments169['style'] = NULL;
$arguments169['title'] = NULL;
$arguments169['accesskey'] = NULL;
$arguments169['tabindex'] = NULL;
$arguments169['onclick'] = NULL;
$arguments169['action'] = 'login';
$arguments169['controller'] = 'Login';
// Rendering Array
$array171 = array();
$array171['no_cache'] = 1;
$arguments169['additionalParams'] = $array171;

$output168 .= TYPO3\CMS\Fluid\ViewHelpers\FormViewHelper::renderStatic($arguments169, $renderChildrenClosure170, $renderingContext);

$output168 .= '
            </div>
        ';
return $output168;
};
$arguments166 = array();

$output165 .= '';

$output165 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure196 = function() use ($renderingContext, $self) {
$output197 = '';

$output197 .= '
            <!-- LogOut Box -->
            <div class="tx_forum_logoutbox">
                <h4>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure199 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments198 = array();
$arguments198['key'] = NULL;
$arguments198['id'] = NULL;
$arguments198['default'] = NULL;
$arguments198['arguments'] = NULL;
$arguments198['extensionName'] = NULL;
$arguments198['languageKey'] = NULL;
$arguments198['alternativeLanguageKeys'] = NULL;
$arguments198['key'] = 'tx_forum_domain_model_forum.logoutHeader';

$output197 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments198, $renderChildrenClosure199, $renderingContext)]);

$output197 .= '</h4>
                <div class="tx_forum_logoutbox-userinfos">
                    <small>User: <b>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\CaseViewHelper
$renderChildrenClosure201 = function() use ($renderingContext, $self) {
$array202 = array (
);return $renderingContext->getVariableProvider()->getByPath('username', $array202);
};
$arguments200 = array();
$arguments200['value'] = NULL;
$arguments200['mode'] = 'upper';
$arguments200['mode'] = 'capital';

$output197 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Format\CaseViewHelper::renderStatic($arguments200, $renderChildrenClosure201, $renderingContext)]);

$output197 .= '</b></small>
                    <small>Beiträge: <b>';
$array203 = array (
);
$output197 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('count_threads', $array203)]);

$output197 .= '</b></small>
                </div>
                <ul>
                    <li><i class="fa-solid fa-user"></i>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure205 = function() use ($renderingContext, $self) {
return 'Profil';
};
$arguments204 = array();
$arguments204['additionalAttributes'] = NULL;
$arguments204['data'] = NULL;
$arguments204['aria'] = NULL;
$arguments204['class'] = NULL;
$arguments204['dir'] = NULL;
$arguments204['id'] = NULL;
$arguments204['lang'] = NULL;
$arguments204['style'] = NULL;
$arguments204['title'] = NULL;
$arguments204['accesskey'] = NULL;
$arguments204['tabindex'] = NULL;
$arguments204['onclick'] = NULL;
$arguments204['name'] = NULL;
$arguments204['rel'] = NULL;
$arguments204['rev'] = NULL;
$arguments204['target'] = NULL;
$arguments204['action'] = NULL;
$arguments204['controller'] = NULL;
$arguments204['extensionName'] = NULL;
$arguments204['pluginName'] = NULL;
$arguments204['pageUid'] = NULL;
$arguments204['pageType'] = NULL;
$arguments204['noCache'] = NULL;
$arguments204['section'] = NULL;
$arguments204['format'] = NULL;
$arguments204['linkAccessRestrictedPages'] = NULL;
$arguments204['additionalParams'] = NULL;
$arguments204['absolute'] = NULL;
$arguments204['addQueryString'] = NULL;
$arguments204['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments204['addQueryStringMethod'] = NULL;
$arguments204['arguments'] = NULL;
$arguments204['action'] = 'show';
$arguments204['controller'] = 'User';
// Rendering Array
$array206 = array();
$array207 = array (
);$array206['user_id'] = $renderingContext->getVariableProvider()->getByPath('user_id', $array207);
$arguments204['arguments'] = $array206;

$output197 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments204, $renderChildrenClosure205, $renderingContext);

$output197 .= '</li>
                </ul>

                <ul class="tx-forum-logout-last">
                    <li><i class="fa-solid fa-right-from-bracket"></i>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure209 = function() use ($renderingContext, $self) {
return 'LogOut';
};
$arguments208 = array();
$arguments208['additionalAttributes'] = NULL;
$arguments208['data'] = NULL;
$arguments208['aria'] = NULL;
$arguments208['class'] = NULL;
$arguments208['dir'] = NULL;
$arguments208['id'] = NULL;
$arguments208['lang'] = NULL;
$arguments208['style'] = NULL;
$arguments208['title'] = NULL;
$arguments208['accesskey'] = NULL;
$arguments208['tabindex'] = NULL;
$arguments208['onclick'] = NULL;
$arguments208['name'] = NULL;
$arguments208['rel'] = NULL;
$arguments208['rev'] = NULL;
$arguments208['target'] = NULL;
$arguments208['action'] = NULL;
$arguments208['controller'] = NULL;
$arguments208['extensionName'] = NULL;
$arguments208['pluginName'] = NULL;
$arguments208['pageUid'] = NULL;
$arguments208['pageType'] = NULL;
$arguments208['noCache'] = NULL;
$arguments208['section'] = NULL;
$arguments208['format'] = NULL;
$arguments208['linkAccessRestrictedPages'] = NULL;
$arguments208['additionalParams'] = NULL;
$arguments208['absolute'] = NULL;
$arguments208['addQueryString'] = NULL;
$arguments208['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments208['addQueryStringMethod'] = NULL;
$arguments208['arguments'] = NULL;
$arguments208['action'] = 'logout';
$arguments208['controller'] = 'Login';
// Rendering Array
$array210 = array();
$array210['logintype'] = 'logout';
$arguments208['additionalParams'] = $array210;

$output197 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments208, $renderChildrenClosure209, $renderingContext);

$output197 .= ' </li>
                </ul>
    
            </div>
        ';
return $output197;
};
$arguments195 = array();
$arguments195['if'] = NULL;

$output165 .= '';

$output165 .= ' 
    ';
return $output165;
};
$arguments119 = array();
$arguments119['then'] = NULL;
$arguments119['else'] = NULL;
$arguments119['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array162 = array();
$array163 = array (
);$array162['0'] = $renderingContext->getVariableProvider()->getByPath('userLogin', $array163);
$array162['1'] = '==0';

$expression164 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == 0);};
$arguments119['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression164(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array162)
					),
					$renderingContext
				);
$arguments119['__thenClosure'] = function() use ($renderingContext, $self) {
$output121 = '';

$output121 .= '
            <div class="tx_forum_loginbox">
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\FormViewHelper
$renderChildrenClosure123 = function() use ($renderingContext, $self) {
$output125 = '';

$output125 .= '

                    <input type="hidden" name="logintype" value="login" />
                    
                    <h4>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure127 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments126 = array();
$arguments126['key'] = NULL;
$arguments126['id'] = NULL;
$arguments126['default'] = NULL;
$arguments126['arguments'] = NULL;
$arguments126['extensionName'] = NULL;
$arguments126['languageKey'] = NULL;
$arguments126['alternativeLanguageKeys'] = NULL;
$arguments126['key'] = 'tx_forum_domain_model_forum.loginHeader';

$output125 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments126, $renderChildrenClosure127, $renderingContext)]);

$output125 .= '</h4>
                    <div class="tx-forum-textfield-loginform form-floating mb-3">
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper
$renderChildrenClosure129 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments128 = array();
$arguments128['additionalAttributes'] = NULL;
$arguments128['data'] = NULL;
$arguments128['aria'] = NULL;
$arguments128['name'] = NULL;
$arguments128['value'] = NULL;
$arguments128['property'] = NULL;
$arguments128['autofocus'] = NULL;
$arguments128['disabled'] = NULL;
$arguments128['maxlength'] = NULL;
$arguments128['readonly'] = NULL;
$arguments128['size'] = NULL;
$arguments128['placeholder'] = NULL;
$arguments128['pattern'] = NULL;
$arguments128['errorClass'] = 'f3-form-error';
$arguments128['class'] = NULL;
$arguments128['dir'] = NULL;
$arguments128['id'] = NULL;
$arguments128['lang'] = NULL;
$arguments128['style'] = NULL;
$arguments128['title'] = NULL;
$arguments128['accesskey'] = NULL;
$arguments128['tabindex'] = NULL;
$arguments128['onclick'] = NULL;
$arguments128['required'] = false;
$arguments128['type'] = 'text';
$arguments128['property'] = 'username';
$arguments128['id'] = 'loginUsername';
$arguments128['name'] = 'username';
$arguments128['class'] = 'form-control form-control-lg';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure131 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments130 = array();
$arguments130['key'] = NULL;
$arguments130['id'] = NULL;
$arguments130['default'] = NULL;
$arguments130['arguments'] = NULL;
$arguments130['extensionName'] = NULL;
$arguments130['languageKey'] = NULL;
$arguments130['alternativeLanguageKeys'] = NULL;
$arguments130['key'] = 'tx_forum_domain_model_forum.username';
$arguments128['placeholder'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments130, $renderChildrenClosure131, $renderingContext);
// Rendering Array
$array132 = array();
$array133 = array (
);$array132['required'] = $renderingContext->getVariableProvider()->getByPath('true', $array133);
$arguments128['additionalAttributes'] = $array132;

$output125 .= TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper::renderStatic($arguments128, $renderChildrenClosure129, $renderingContext);

$output125 .= '
                        <label for="loginUsername">';
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
$arguments134['key'] = 'tx_forum_domain_model_forum.username';

$output125 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments134, $renderChildrenClosure135, $renderingContext)]);

$output125 .= '</label>
                    </div>

                    <div class="tx-forum-textfield-loginform form-floating mb-3">
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\PasswordViewHelper
$renderChildrenClosure137 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments136 = array();
$arguments136['additionalAttributes'] = NULL;
$arguments136['data'] = NULL;
$arguments136['aria'] = NULL;
$arguments136['name'] = NULL;
$arguments136['value'] = NULL;
$arguments136['property'] = NULL;
$arguments136['disabled'] = NULL;
$arguments136['maxlength'] = NULL;
$arguments136['placeholder'] = NULL;
$arguments136['readonly'] = NULL;
$arguments136['autocomplete'] = NULL;
$arguments136['size'] = NULL;
$arguments136['errorClass'] = 'f3-form-error';
$arguments136['class'] = NULL;
$arguments136['dir'] = NULL;
$arguments136['id'] = NULL;
$arguments136['lang'] = NULL;
$arguments136['style'] = NULL;
$arguments136['title'] = NULL;
$arguments136['accesskey'] = NULL;
$arguments136['tabindex'] = NULL;
$arguments136['onclick'] = NULL;
$arguments136['property'] = 'password';
$arguments136['id'] = 'loginPassword';
$arguments136['name'] = 'password';
$arguments136['class'] = 'form-control form-control-lg';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure139 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments138 = array();
$arguments138['key'] = NULL;
$arguments138['id'] = NULL;
$arguments138['default'] = NULL;
$arguments138['arguments'] = NULL;
$arguments138['extensionName'] = NULL;
$arguments138['languageKey'] = NULL;
$arguments138['alternativeLanguageKeys'] = NULL;
$arguments138['key'] = 'tx_forum_domain_model_forum.password';
$arguments136['placeholder'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments138, $renderChildrenClosure139, $renderingContext);
// Rendering Array
$array140 = array();
$array141 = array (
);$array140['required'] = $renderingContext->getVariableProvider()->getByPath('true', $array141);
$arguments136['additionalAttributes'] = $array140;

$output125 .= TYPO3\CMS\Fluid\ViewHelpers\Form\PasswordViewHelper::renderStatic($arguments136, $renderChildrenClosure137, $renderingContext);

$output125 .= '
                        <label for="loginPassword">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure143 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments142 = array();
$arguments142['key'] = NULL;
$arguments142['id'] = NULL;
$arguments142['default'] = NULL;
$arguments142['arguments'] = NULL;
$arguments142['extensionName'] = NULL;
$arguments142['languageKey'] = NULL;
$arguments142['alternativeLanguageKeys'] = NULL;
$arguments142['key'] = 'tx_forum_domain_model_forum.password';

$output125 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments142, $renderChildrenClosure143, $renderingContext)]);

$output125 .= '</label>
                    </div>

                    <div class="tx-forum-textfield-loginform form-floating">
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SubmitViewHelper
$renderChildrenClosure145 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments144 = array();
$arguments144['additionalAttributes'] = NULL;
$arguments144['data'] = NULL;
$arguments144['aria'] = NULL;
$arguments144['name'] = NULL;
$arguments144['value'] = NULL;
$arguments144['property'] = NULL;
$arguments144['disabled'] = NULL;
$arguments144['class'] = NULL;
$arguments144['dir'] = NULL;
$arguments144['id'] = NULL;
$arguments144['lang'] = NULL;
$arguments144['style'] = NULL;
$arguments144['title'] = NULL;
$arguments144['accesskey'] = NULL;
$arguments144['tabindex'] = NULL;
$arguments144['onclick'] = NULL;
$arguments144['class'] = 'btn btn-dark';
$arguments144['property'] = 'submit';
$arguments144['name'] = 'submit';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure147 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments146 = array();
$arguments146['key'] = NULL;
$arguments146['id'] = NULL;
$arguments146['default'] = NULL;
$arguments146['arguments'] = NULL;
$arguments146['extensionName'] = NULL;
$arguments146['languageKey'] = NULL;
$arguments146['alternativeLanguageKeys'] = NULL;
$arguments146['key'] = 'tx_forum_domain_model_forum.login_submit';
$arguments144['value'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments146, $renderChildrenClosure147, $renderingContext);

$output125 .= TYPO3\CMS\Fluid\ViewHelpers\Form\SubmitViewHelper::renderStatic($arguments144, $renderChildrenClosure145, $renderingContext);

$output125 .= '
                    </div>
                ';
return $output125;
};
$arguments122 = array();
$arguments122['additionalAttributes'] = NULL;
$arguments122['data'] = NULL;
$arguments122['aria'] = NULL;
$arguments122['action'] = NULL;
$arguments122['arguments'] = array (
);
$arguments122['controller'] = NULL;
$arguments122['extensionName'] = NULL;
$arguments122['pluginName'] = NULL;
$arguments122['pageUid'] = NULL;
$arguments122['object'] = NULL;
$arguments122['pageType'] = 0;
$arguments122['noCache'] = false;
$arguments122['section'] = '';
$arguments122['format'] = '';
$arguments122['additionalParams'] = array (
);
$arguments122['absolute'] = false;
$arguments122['addQueryString'] = false;
$arguments122['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments122['addQueryStringMethod'] = NULL;
$arguments122['fieldNamePrefix'] = NULL;
$arguments122['actionUri'] = NULL;
$arguments122['objectName'] = NULL;
$arguments122['hiddenFieldClassName'] = NULL;
$arguments122['enctype'] = NULL;
$arguments122['method'] = NULL;
$arguments122['name'] = NULL;
$arguments122['onreset'] = NULL;
$arguments122['onsubmit'] = NULL;
$arguments122['target'] = NULL;
$arguments122['novalidate'] = NULL;
$arguments122['class'] = NULL;
$arguments122['dir'] = NULL;
$arguments122['id'] = NULL;
$arguments122['lang'] = NULL;
$arguments122['style'] = NULL;
$arguments122['title'] = NULL;
$arguments122['accesskey'] = NULL;
$arguments122['tabindex'] = NULL;
$arguments122['onclick'] = NULL;
$arguments122['action'] = 'login';
$arguments122['controller'] = 'Login';
// Rendering Array
$array124 = array();
$array124['no_cache'] = 1;
$arguments122['additionalParams'] = $array124;

$output121 .= TYPO3\CMS\Fluid\ViewHelpers\FormViewHelper::renderStatic($arguments122, $renderChildrenClosure123, $renderingContext);

$output121 .= '
            </div>
        ';
return $output121;
};
$arguments119['__elseClosures'][] = function() use ($renderingContext, $self) {
$output148 = '';

$output148 .= '
            <!-- LogOut Box -->
            <div class="tx_forum_logoutbox">
                <h4>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure150 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments149 = array();
$arguments149['key'] = NULL;
$arguments149['id'] = NULL;
$arguments149['default'] = NULL;
$arguments149['arguments'] = NULL;
$arguments149['extensionName'] = NULL;
$arguments149['languageKey'] = NULL;
$arguments149['alternativeLanguageKeys'] = NULL;
$arguments149['key'] = 'tx_forum_domain_model_forum.logoutHeader';

$output148 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments149, $renderChildrenClosure150, $renderingContext)]);

$output148 .= '</h4>
                <div class="tx_forum_logoutbox-userinfos">
                    <small>User: <b>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\CaseViewHelper
$renderChildrenClosure152 = function() use ($renderingContext, $self) {
$array153 = array (
);return $renderingContext->getVariableProvider()->getByPath('username', $array153);
};
$arguments151 = array();
$arguments151['value'] = NULL;
$arguments151['mode'] = 'upper';
$arguments151['mode'] = 'capital';

$output148 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Format\CaseViewHelper::renderStatic($arguments151, $renderChildrenClosure152, $renderingContext)]);

$output148 .= '</b></small>
                    <small>Beiträge: <b>';
$array154 = array (
);
$output148 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('count_threads', $array154)]);

$output148 .= '</b></small>
                </div>
                <ul>
                    <li><i class="fa-solid fa-user"></i>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure156 = function() use ($renderingContext, $self) {
return 'Profil';
};
$arguments155 = array();
$arguments155['additionalAttributes'] = NULL;
$arguments155['data'] = NULL;
$arguments155['aria'] = NULL;
$arguments155['class'] = NULL;
$arguments155['dir'] = NULL;
$arguments155['id'] = NULL;
$arguments155['lang'] = NULL;
$arguments155['style'] = NULL;
$arguments155['title'] = NULL;
$arguments155['accesskey'] = NULL;
$arguments155['tabindex'] = NULL;
$arguments155['onclick'] = NULL;
$arguments155['name'] = NULL;
$arguments155['rel'] = NULL;
$arguments155['rev'] = NULL;
$arguments155['target'] = NULL;
$arguments155['action'] = NULL;
$arguments155['controller'] = NULL;
$arguments155['extensionName'] = NULL;
$arguments155['pluginName'] = NULL;
$arguments155['pageUid'] = NULL;
$arguments155['pageType'] = NULL;
$arguments155['noCache'] = NULL;
$arguments155['section'] = NULL;
$arguments155['format'] = NULL;
$arguments155['linkAccessRestrictedPages'] = NULL;
$arguments155['additionalParams'] = NULL;
$arguments155['absolute'] = NULL;
$arguments155['addQueryString'] = NULL;
$arguments155['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments155['addQueryStringMethod'] = NULL;
$arguments155['arguments'] = NULL;
$arguments155['action'] = 'show';
$arguments155['controller'] = 'User';
// Rendering Array
$array157 = array();
$array158 = array (
);$array157['user_id'] = $renderingContext->getVariableProvider()->getByPath('user_id', $array158);
$arguments155['arguments'] = $array157;

$output148 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments155, $renderChildrenClosure156, $renderingContext);

$output148 .= '</li>
                </ul>

                <ul class="tx-forum-logout-last">
                    <li><i class="fa-solid fa-right-from-bracket"></i>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure160 = function() use ($renderingContext, $self) {
return 'LogOut';
};
$arguments159 = array();
$arguments159['additionalAttributes'] = NULL;
$arguments159['data'] = NULL;
$arguments159['aria'] = NULL;
$arguments159['class'] = NULL;
$arguments159['dir'] = NULL;
$arguments159['id'] = NULL;
$arguments159['lang'] = NULL;
$arguments159['style'] = NULL;
$arguments159['title'] = NULL;
$arguments159['accesskey'] = NULL;
$arguments159['tabindex'] = NULL;
$arguments159['onclick'] = NULL;
$arguments159['name'] = NULL;
$arguments159['rel'] = NULL;
$arguments159['rev'] = NULL;
$arguments159['target'] = NULL;
$arguments159['action'] = NULL;
$arguments159['controller'] = NULL;
$arguments159['extensionName'] = NULL;
$arguments159['pluginName'] = NULL;
$arguments159['pageUid'] = NULL;
$arguments159['pageType'] = NULL;
$arguments159['noCache'] = NULL;
$arguments159['section'] = NULL;
$arguments159['format'] = NULL;
$arguments159['linkAccessRestrictedPages'] = NULL;
$arguments159['additionalParams'] = NULL;
$arguments159['absolute'] = NULL;
$arguments159['addQueryString'] = NULL;
$arguments159['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments159['addQueryStringMethod'] = NULL;
$arguments159['arguments'] = NULL;
$arguments159['action'] = 'logout';
$arguments159['controller'] = 'Login';
// Rendering Array
$array161 = array();
$array161['logintype'] = 'logout';
$arguments159['additionalParams'] = $array161;

$output148 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments159, $renderChildrenClosure160, $renderingContext);

$output148 .= ' </li>
                </ul>
    
            </div>
        ';
return $output148;
};

$output108 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments119, $renderChildrenClosure120, $renderingContext);

$output108 .= ' 
    
    
     
    
';
return $output108;
};
$arguments106 = array();
$arguments106['name'] = NULL;
$arguments106['name'] = 'content';

$output103 .= NULL;

$output103 .= '

';

return $output103;
}


}
#