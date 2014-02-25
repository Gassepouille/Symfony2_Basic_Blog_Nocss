<?php

/* ChadoMainBundle:Default:register.html.twig */
class __TwigTemplate_754e80ff8c78b1d29ad3258a46ffc74c9d921acd8e1452fa7cf1f0bead5d8c95 extends Twig_Template
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

    // line 2
    public function block_body($context, array $blocks = array())
    {
        // line 3
        echo "\t<h6>Register</h6>

\t";
        // line 5
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["reg_form"]) ? $context["reg_form"] : $this->getContext($context, "reg_form")), 'form');
        echo "
";
    }

    public function getTemplateName()
    {
        return "ChadoMainBundle:Default:register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 5,  31 => 3,  28 => 2,);
    }
}
