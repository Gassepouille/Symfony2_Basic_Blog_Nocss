<?php

/* ChadoMainBundle:includes:commentinc.html.twig */
class __TwigTemplate_ec044f7e1e58514df7692e110b500dd4cab352093684ab56d2d0a21f5e6fb563 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["comments_list"]) ? $context["comments_list"] : $this->getContext($context, "comments_list")));
        foreach ($context['_seq'] as $context["_key"] => $context["commentaire"]) {
            // line 2
            echo "\t";
            if ((!$this->getAttribute((isset($context["commentaire"]) ? $context["commentaire"] : $this->getContext($context, "commentaire")), "getParent"))) {
                // line 3
                echo "\t\t<div class=\"single-comment\">
\t\t\t<h6>";
                // line 4
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["commentaire"]) ? $context["commentaire"] : $this->getContext($context, "commentaire")), "getUser"), "Nickname"), "html", null, true);
                echo "</h6>
\t\t\t<p>";
                // line 5
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["commentaire"]) ? $context["commentaire"] : $this->getContext($context, "commentaire")), "content"), "html", null, true);
                echo "</p>

\t\t\t<p><span>";
                // line 7
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["commentaire"]) ? $context["commentaire"] : $this->getContext($context, "commentaire")), "date"), "date"), "html", null, true);
                echo "</span></p>
\t\t\t
\t\t\t<div class=\"reply-comment\" value=\"";
                // line 9
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["commentaire"]) ? $context["commentaire"] : $this->getContext($context, "commentaire")), "id"), "html", null, true);
                echo "\">Reply</div>
\t\t
\t\t\t";
                // line 11
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["comments_list"]) ? $context["comments_list"] : $this->getContext($context, "comments_list")));
                foreach ($context['_seq'] as $context["_key"] => $context["commentaire2"]) {
                    // line 12
                    echo "\t\t\t    \t";
                    if ($this->getAttribute((isset($context["commentaire2"]) ? $context["commentaire2"] : $this->getContext($context, "commentaire2")), "getParent")) {
                        // line 13
                        echo "\t\t\t    \t\t";
                        if (($this->getAttribute($this->getAttribute((isset($context["commentaire2"]) ? $context["commentaire2"] : $this->getContext($context, "commentaire2")), "getParent"), "Id") == $this->getAttribute((isset($context["commentaire"]) ? $context["commentaire"] : $this->getContext($context, "commentaire")), "Id"))) {
                            // line 14
                            echo "\t\t\t\t\t\t\t<div class=\"reply-disp\">
\t\t\t\t\t\t\t\t<h6>";
                            // line 15
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["commentaire2"]) ? $context["commentaire2"] : $this->getContext($context, "commentaire2")), "getUser"), "Nickname"), "html", null, true);
                            echo "</h6>
\t\t\t\t\t\t\t\t<p>";
                            // line 16
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["commentaire2"]) ? $context["commentaire2"] : $this->getContext($context, "commentaire2")), "content"), "html", null, true);
                            echo "</p>

\t\t\t\t\t\t\t\t<p><span>";
                            // line 18
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["commentaire2"]) ? $context["commentaire2"] : $this->getContext($context, "commentaire2")), "date"), "date"), "html", null, true);
                            echo "</span></p>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
                        }
                        // line 22
                        echo "\t\t\t\t\t";
                    }
                    // line 23
                    echo "\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['commentaire2'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 24
                echo "\t\t</div>
\t";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['commentaire'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "ChadoMainBundle:includes:commentinc.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 24,  80 => 23,  77 => 22,  70 => 18,  65 => 16,  61 => 15,  58 => 14,  55 => 13,  52 => 12,  48 => 11,  43 => 9,  38 => 7,  33 => 5,  29 => 4,  26 => 3,  23 => 2,  19 => 1,);
    }
}
