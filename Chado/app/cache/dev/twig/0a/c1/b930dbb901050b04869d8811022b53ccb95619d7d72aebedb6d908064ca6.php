<?php

/* ChadoMainBundle:Default:single.html.twig */
class __TwigTemplate_0ac1b930dbb901050b04869d8811022b53ccb95619d7d72aebedb6d908064ca6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
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
        echo "\t<a href=\"";
        echo $this->env->getExtension('routing')->getPath("chado_main_index");
        echo "\">Index</a>
\t";
        // line 5
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user")) {
            // line 6
            echo "\t    <a href=\"";
            echo $this->env->getExtension('routing')->getPath("chado_main_logout");
            echo "\">Logout</a>
\t";
        } else {
            // line 8
            echo "\t    <a href=\"";
            echo $this->env->getExtension('routing')->getPath("chado_main_login");
            echo "\">Login</a>
\t    <a href=\"";
            // line 9
            echo $this->env->getExtension('routing')->getPath("chado_main_register");
            echo "\">Register</a>
\t";
        }
        // line 11
        echo "
\t<div id=\"article\">
\t\t<h3>";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "title"), "html", null, true);
        echo "</h3>

\t\t<div class=\"contenu\">";
        // line 15
        echo $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "content");
        echo "</div>

\t\t<p><span>";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "date"), "date"), "html", null, true);
        echo "</span></p>
\t</div>
\t";
        // line 19
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user")) {
            // line 20
            echo "\t\t<div id=\"commentaires\">
\t\t\t<h3>Comments</h3>
\t\t\t
\t\t\t\t";
            // line 23
            $this->env->loadTemplate("ChadoMainBundle:includes:commentinc.html.twig")->display($context);
            // line 24
            echo "
\t\t\t
\t\t\t<div>
\t\t\t\t<div class=\"reply-comment\" value=\"null\">Comment !</div>
\t\t\t\t<div id=\"createcomment\">
\t\t\t\t\t";
            // line 29
            echo             $this->env->getExtension('form')->renderer->renderBlock((isset($context["comment_form"]) ? $context["comment_form"] : $this->getContext($context, "comment_form")), 'form');
            echo "
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t";
        }
    }

    // line 35
    public function block_javascripts($context, array $blocks = array())
    {
        // line 36
        echo "\t<script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery-2.0.3.min.js"), "html", null, true);
        echo "\"></script>
\t<script type=\"text/javascript\" src=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/reply.js"), "html", null, true);
        echo "\"></script>
";
    }

    public function getTemplateName()
    {
        return "ChadoMainBundle:Default:single.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  108 => 37,  103 => 36,  100 => 35,  90 => 29,  83 => 24,  81 => 23,  76 => 20,  74 => 19,  69 => 17,  64 => 15,  59 => 13,  55 => 11,  50 => 9,  45 => 8,  39 => 6,  37 => 5,  32 => 4,  29 => 3,);
    }
}
