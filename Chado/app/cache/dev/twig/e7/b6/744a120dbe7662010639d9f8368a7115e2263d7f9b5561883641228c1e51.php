<?php

/* ChadoMainBundle:admin:createtag.html.twig */
class __TwigTemplate_e7b6744a120dbe7662010639d9f8368a7115e2263d7f9b5561883641228c1e51 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::adminbase.html.twig");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::adminbase.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "<a href=\"";
        echo $this->env->getExtension('routing')->getPath("chado_main_admintaglist");
        echo "\">Tag list</a>
\t";
        // line 5
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["tag_form"]) ? $context["tag_form"] : $this->getContext($context, "tag_form")), 'form');
        echo "
";
    }

    public function getTemplateName()
    {
        return "ChadoMainBundle:admin:createtag.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  36 => 5,  31 => 4,  28 => 3,);
    }
}
