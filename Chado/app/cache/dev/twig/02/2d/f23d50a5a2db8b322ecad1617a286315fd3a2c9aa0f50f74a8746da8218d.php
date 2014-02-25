<?php

/* ChadoMainBundle:Default:forgot.html.twig */
class __TwigTemplate_022df23d50a5a2db8b322ecad1617a286315fd3a2c9aa0f50f74a8746da8218d extends Twig_Template
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
        echo "\t<h6>Forgot password ?</h6>

\t";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["forgotform"]) ? $context["forgotform"] : $this->getContext($context, "forgotform")), 'form');
        echo "
";
    }

    public function getTemplateName()
    {
        return "ChadoMainBundle:Default:forgot.html.twig";
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
