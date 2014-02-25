<?php

/* ChadoMainBundle:Default:resetpass.html.twig */
class __TwigTemplate_c2f1ba8fa7fc8d37abdd0f4ce9ec6a0c83d376ba6bf67c2b35cb3b5b8ef385bf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "\t<h6>Reset Password ?</h6>

\t";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["resetform"]) ? $context["resetform"] : $this->getContext($context, "resetform")), 'form');
        echo "
";
    }

    public function getTemplateName()
    {
        return "ChadoMainBundle:Default:resetpass.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 6,  31 => 4,  28 => 3,);
    }
}
