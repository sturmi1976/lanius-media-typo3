<?php

class Standard_action_default_2dc40ad6be12e5054b4ceb877cf19640f60e25e8 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

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
 * section Header
 */
public function section_31341c6f0c7af677ffb8fadcb92038e8ac2b6193(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output0 = '';

$output0 .= '
    <header class="header-top">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure2 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1 = array();
$arguments1['section'] = NULL;
$arguments1['partial'] = NULL;
$arguments1['delegate'] = NULL;
$arguments1['renderable'] = NULL;
$arguments1['arguments'] = array (
);
$arguments1['optional'] = false;
$arguments1['default'] = NULL;
$arguments1['contentAs'] = NULL;
$arguments1['debug'] = true;
$arguments1['partial'] = 'Header/Logo';

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext);

$output0 .= '
                </div>
                <div class="col-md-9">
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure4 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments3 = array();
$arguments3['section'] = NULL;
$arguments3['partial'] = NULL;
$arguments3['delegate'] = NULL;
$arguments3['renderable'] = NULL;
$arguments3['arguments'] = array (
);
$arguments3['optional'] = false;
$arguments3['default'] = NULL;
$arguments3['contentAs'] = NULL;
$arguments3['debug'] = true;
$arguments3['partial'] = 'Header/Mainnavigation';
$arguments3['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments3, $renderChildrenClosure4, $renderingContext);

$output0 .= '
                </div>
            </div>
        </div>
    </header>
';

return $output0;
}
/**
 * section Main
 */
public function section_62bce9422ff2d14f69ab80a154510232fc8a9afd(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output6 = '';

$output6 .= '
    <div class="container">
        <div class="row">
            <div class="col-12">
                <main class="main-content">
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure8 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments7 = array();
$arguments7['section'] = NULL;
$arguments7['partial'] = NULL;
$arguments7['delegate'] = NULL;
$arguments7['renderable'] = NULL;
$arguments7['arguments'] = array (
);
$arguments7['optional'] = false;
$arguments7['default'] = NULL;
$arguments7['contentAs'] = NULL;
$arguments7['debug'] = true;
$arguments7['partial'] = 'Content/Breadcrumb';
$arguments7['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output6 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments7, $renderChildrenClosure8, $renderingContext);

$output6 .= '
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper
$renderChildrenClosure11 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments10 = array();
$arguments10['data'] = NULL;
$arguments10['typoscriptObjectPath'] = NULL;
$arguments10['currentValueKey'] = NULL;
$arguments10['table'] = '';
$arguments10['typoscriptObjectPath'] = 'lib.dynamicContent';
// Rendering Array
$array12 = array();
$array12['colPos'] = 0;
$arguments10['data'] = $array12;
$renderChildrenClosure11 = ($arguments10['data'] !== null) ? function() use ($arguments10) { return $arguments10['data']; } : $renderChildrenClosure11;
$output6 .= TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper::renderStatic($arguments10, $renderChildrenClosure11, $renderingContext);

$output6 .= ' 
                </main>
            </div>
        </div>
    </div>
';

return $output6;
}
/**
 * section Footer
 */
public function section_26c01e70a337f208f56dae1c3bc18f60c4bff453(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output13 = '';

$output13 .= '
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure15 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments14 = array();
$arguments14['section'] = NULL;
$arguments14['partial'] = NULL;
$arguments14['delegate'] = NULL;
$arguments14['renderable'] = NULL;
$arguments14['arguments'] = array (
);
$arguments14['optional'] = false;
$arguments14['default'] = NULL;
$arguments14['contentAs'] = NULL;
$arguments14['debug'] = true;
$arguments14['partial'] = 'Footer/Footernavigation';
$arguments14['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output13 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments14, $renderChildrenClosure15, $renderingContext);

$output13 .= '
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="copyright">
                        <p>Copyright &copy; ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper
$renderChildrenClosure18 = function() use ($renderingContext, $self) {
return 'now';
};
$arguments17 = array();
$arguments17['date'] = NULL;
$arguments17['format'] = '';
$arguments17['base'] = NULL;
$arguments17['format'] = 'Y';
$renderChildrenClosure18 = ($arguments17['date'] !== null) ? function() use ($arguments17) { return $arguments17['date']; } : $renderChildrenClosure18;
$output13 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper::renderStatic($arguments17, $renderChildrenClosure18, $renderingContext)]);

$output13 .= ' by Andre Lanius, alle Rechte vorbehalten!</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
';

return $output13;
}
/**
 * Main Render function
 */
public function render(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output19 = '';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\LayoutViewHelper
$renderChildrenClosure21 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments20 = array();
$arguments20['name'] = NULL;
$arguments20['name'] = 'Default';

$output19 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [NULL]);

$output19 .= '

';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SectionViewHelper
$renderChildrenClosure23 = function() use ($renderingContext, $self) {
$output24 = '';

$output24 .= '
    <header class="header-top">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure26 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments25 = array();
$arguments25['section'] = NULL;
$arguments25['partial'] = NULL;
$arguments25['delegate'] = NULL;
$arguments25['renderable'] = NULL;
$arguments25['arguments'] = array (
);
$arguments25['optional'] = false;
$arguments25['default'] = NULL;
$arguments25['contentAs'] = NULL;
$arguments25['debug'] = true;
$arguments25['partial'] = 'Header/Logo';

$output24 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments25, $renderChildrenClosure26, $renderingContext);

$output24 .= '
                </div>
                <div class="col-md-9">
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure28 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments27 = array();
$arguments27['section'] = NULL;
$arguments27['partial'] = NULL;
$arguments27['delegate'] = NULL;
$arguments27['renderable'] = NULL;
$arguments27['arguments'] = array (
);
$arguments27['optional'] = false;
$arguments27['default'] = NULL;
$arguments27['contentAs'] = NULL;
$arguments27['debug'] = true;
$arguments27['partial'] = 'Header/Mainnavigation';
$arguments27['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output24 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments27, $renderChildrenClosure28, $renderingContext);

$output24 .= '
                </div>
            </div>
        </div>
    </header>
';
return $output24;
};
$arguments22 = array();
$arguments22['name'] = NULL;
$arguments22['name'] = 'Header';

$output19 .= NULL;

$output19 .= '

';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SectionViewHelper
$renderChildrenClosure31 = function() use ($renderingContext, $self) {
$output32 = '';

$output32 .= '
    <div class="container">
        <div class="row">
            <div class="col-12">
                <main class="main-content">
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure34 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments33 = array();
$arguments33['section'] = NULL;
$arguments33['partial'] = NULL;
$arguments33['delegate'] = NULL;
$arguments33['renderable'] = NULL;
$arguments33['arguments'] = array (
);
$arguments33['optional'] = false;
$arguments33['default'] = NULL;
$arguments33['contentAs'] = NULL;
$arguments33['debug'] = true;
$arguments33['partial'] = 'Content/Breadcrumb';
$arguments33['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output32 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments33, $renderChildrenClosure34, $renderingContext);

$output32 .= '
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper
$renderChildrenClosure37 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments36 = array();
$arguments36['data'] = NULL;
$arguments36['typoscriptObjectPath'] = NULL;
$arguments36['currentValueKey'] = NULL;
$arguments36['table'] = '';
$arguments36['typoscriptObjectPath'] = 'lib.dynamicContent';
// Rendering Array
$array38 = array();
$array38['colPos'] = 0;
$arguments36['data'] = $array38;
$renderChildrenClosure37 = ($arguments36['data'] !== null) ? function() use ($arguments36) { return $arguments36['data']; } : $renderChildrenClosure37;
$output32 .= TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper::renderStatic($arguments36, $renderChildrenClosure37, $renderingContext);

$output32 .= ' 
                </main>
            </div>
        </div>
    </div>
';
return $output32;
};
$arguments30 = array();
$arguments30['name'] = NULL;
$arguments30['name'] = 'Main';

$output19 .= NULL;

$output19 .= '


';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SectionViewHelper
$renderChildrenClosure40 = function() use ($renderingContext, $self) {
$output41 = '';

$output41 .= '
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure43 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments42 = array();
$arguments42['section'] = NULL;
$arguments42['partial'] = NULL;
$arguments42['delegate'] = NULL;
$arguments42['renderable'] = NULL;
$arguments42['arguments'] = array (
);
$arguments42['optional'] = false;
$arguments42['default'] = NULL;
$arguments42['contentAs'] = NULL;
$arguments42['debug'] = true;
$arguments42['partial'] = 'Footer/Footernavigation';
$arguments42['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output41 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments42, $renderChildrenClosure43, $renderingContext);

$output41 .= '
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="copyright">
                        <p>Copyright &copy; ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper
$renderChildrenClosure46 = function() use ($renderingContext, $self) {
return 'now';
};
$arguments45 = array();
$arguments45['date'] = NULL;
$arguments45['format'] = '';
$arguments45['base'] = NULL;
$arguments45['format'] = 'Y';
$renderChildrenClosure46 = ($arguments45['date'] !== null) ? function() use ($arguments45) { return $arguments45['date']; } : $renderChildrenClosure46;
$output41 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper::renderStatic($arguments45, $renderChildrenClosure46, $renderingContext)]);

$output41 .= ' by Andre Lanius, alle Rechte vorbehalten!</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
';
return $output41;
};
$arguments39 = array();
$arguments39['name'] = NULL;
$arguments39['name'] = 'Footer';

$output19 .= NULL;

return $output19;
}


}
#