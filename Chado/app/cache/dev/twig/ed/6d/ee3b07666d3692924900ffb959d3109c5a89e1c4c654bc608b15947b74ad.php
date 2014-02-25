<?php

/* ChadoMainBundle:Default:index.html.twig */
class __TwigTemplate_ed6dee3b07666d3692924900ffb959d3109c5a89e1c4c654bc608b15947b74ad extends Twig_Template
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
        echo "   \t";
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user")) {
            // line 4
            echo "\t    <a href=\"";
            echo $this->env->getExtension('routing')->getPath("chado_main_logout");
            echo "\">Logout</a>
\t";
        } else {
            // line 6
            echo "\t    <a href=\"";
            echo $this->env->getExtension('routing')->getPath("chado_main_login");
            echo "\">Login</a>
\t    <a href=\"";
            // line 7
            echo $this->env->getExtension('routing')->getPath("chado_main_register");
            echo "\">Register</a>
\t    <a href=\"";
            // line 8
            echo $this->env->getExtension('routing')->getPath("chado_main_forgot");
            echo "\">Forgot pass ?</a>
\t";
        }
        // line 10
        echo "\t<br><br>
\t";
        // line 11
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tags_list"]) ? $context["tags_list"] : $this->getContext($context, "tags_list")));
        foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
            // line 12
            echo "\t\t<a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("chado_main_index", array("filter" => $this->getAttribute((isset($context["tag"]) ? $context["tag"] : $this->getContext($context, "tag")), "tagname"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tag"]) ? $context["tag"] : $this->getContext($context, "tag")), "tagname"), "html", null, true);
            echo "</a>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "\t    <a href=\"";
        echo $this->env->getExtension('routing')->getPath("chado_main_index", array("filter" => null));
        echo "\">All articles</a>
\t";
        // line 15
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["articles_list"]) ? $context["articles_list"] : $this->getContext($context, "articles_list")));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 16
            echo "\t\t";
            if (($this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "online") != 0)) {
                // line 17
                echo "\t\t\t<a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("chado_main_single", array("id" => $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "id"))), "html", null, true);
                echo "\">
\t\t\t\t<h4>";
                // line 18
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "title"), "html", null, true);
                echo "</h4>
\t\t\t\t<p><span>";
                // line 19
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "date"), "date"), "html", null, true);
                echo "</span> &nbsp;<span> ";
                echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "comments")), "html", null, true);
                echo "commentaire(s)</span></p>
\t\t\t</a>

        ";
            }
            // line 22
            echo "   
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        if (((isset($context["prev"]) ? $context["prev"] : $this->getContext($context, "prev")) != (-1))) {
            // line 25
            echo "<a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("chado_main_index", array("page" => (isset($context["prev"]) ? $context["prev"] : $this->getContext($context, "prev")), "filter" => (isset($context["filter"]) ? $context["filter"] : $this->getContext($context, "filter")))), "html", null, true);
            echo "\">Previous</a>
";
        }
        // line 27
        if (((isset($context["next"]) ? $context["next"] : $this->getContext($context, "next")) != (-1))) {
            // line 28
            echo "<a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("chado_main_index", array("page" => (isset($context["next"]) ? $context["next"] : $this->getContext($context, "next")), "filter" => (isset($context["filter"]) ? $context["filter"] : $this->getContext($context, "filter")))), "html", null, true);
            echo "\">Next</a>
";
        }
        // line 30
        echo "
";
    }

    public function getTemplateName()
    {
        return "ChadoMainBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  125 => 30,  119 => 28,  117 => 27,  111 => 25,  109 => 24,  102 => 22,  93 => 19,  89 => 18,  84 => 17,  81 => 16,  77 => 15,  72 => 14,  61 => 12,  57 => 11,  54 => 10,  49 => 8,  45 => 7,  40 => 6,  34 => 4,  31 => 3,  28 => 2,);
    }
}
