<?php

/* ChadoMainBundle:admin:create.html.twig */
class __TwigTemplate_b1b13a4b0b3c6ad45967079ee34d30047c4f5cef78ab18972a7a0f58dcdc6add extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::adminbase.html.twig");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
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
        echo $this->env->getExtension('routing')->getPath("chado_main_admin");
        echo "\">Admin home</a>
\t";
        // line 5
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["article_form"]) ? $context["article_form"] : $this->getContext($context, "article_form")), 'form');
        echo "
";
    }

    // line 9
    public function block_javascripts($context, array $blocks = array())
    {
        // line 10
        echo "\t<script type=\"text/javascript\">
\t\tvar menuUrl = \"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("lib/nicedit/"), "html", null, true);
        echo "\";
\t</script>
\t<script type=\"text/javascript\" src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("lib/jquery-2.0.3.min.js"), "html", null, true);
        echo "\"></script>
\t<script type=\"text/javascript\" src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("lib/nicedit/nicEdit.js"), "html", null, true);
        echo "\"></script>
\t<script type=\"text/javascript\">
\t\t
\t\tvar area = new nicEditor({fullPanel : true}).panelInstance('chado_mainbundle_chadoarticle_content');
\t\t\$(\"body\").on(\"click\", \"#chado_mainbundle_chadoarticle_save\", function(){
\t\t\t\$(\"#chado_mainbundle_chadoarticle_content\").html(\$(\".nicEdit-main\").html())
\t\t})
\t\t
\t\t
\t</script>
";
    }

    public function getTemplateName()
    {
        return "ChadoMainBundle:admin:create.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 14,  54 => 13,  49 => 11,  46 => 10,  43 => 9,  37 => 5,  32 => 4,  29 => 3,);
    }
}
