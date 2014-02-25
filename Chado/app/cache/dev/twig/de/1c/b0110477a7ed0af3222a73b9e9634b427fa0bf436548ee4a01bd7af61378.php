<?php

/* ChadoMainBundle:admin:index.html.twig */
class __TwigTemplate_de1cb0110477a7ed0af3222a73b9e9634b427fa0bf436548ee4a01bd7af61378 extends Twig_Template
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
        echo "\t<h6>Admin</h6>
\t<a href=\"";
        // line 5
        echo $this->env->getExtension('routing')->getPath("chado_main_admincreate");
        echo "\">Create Article</a>
\t<a href=\"";
        // line 6
        echo $this->env->getExtension('routing')->getPath("chado_main_admintaglist");
        echo "\">TagList</a>

\t<h6>Article list</h6>
\t<table>
        <thead>
            <tr>
                <th>Title</th>
                <th>Date</th>
                <th>Toggle status</th>
                <th>Edit</th>
                <th>Comments</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 21
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["articles_list"]) ? $context["articles_list"] : $this->getContext($context, "articles_list")));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 22
            echo "\t\t\t<tr>
                <td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "title"), "html", null, true);
            echo "</td>
                <td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "date"), "date"), "html", null, true);
            echo "</td>
                ";
            // line 25
            if (($this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "online") == 0)) {
                // line 26
                echo "               \t\t<td><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("chado_main_adminstatus", array("id" => $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "id"), "status" => 1)), "html", null, true);
                echo "\" ><button type=\"button\">Set live</button></a></td>
                ";
            } else {
                // line 28
                echo "               \t\t<td><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("chado_main_adminstatus", array("id" => $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "id"), "status" => 0)), "html", null, true);
                echo "\" ><button type=\"button\">Set off</button></a></td>
                ";
            }
            // line 30
            echo "
                <td><a href=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("chado_main_admincreate", array("id" => $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "id"))), "html", null, true);
            echo "\" ><button type=\"button\">Edit</button></a></td>
                <td><a href=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("chado_main_admincomments", array("id" => $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "id"))), "html", null, true);
            echo "\" ><button type=\"button\">comments</button></a></td>
                <td><a href=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("chado_main_admindelete", array("id" => $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "id"))), "html", null, true);
            echo "\" ><button type=\"button\">Delete</button></a></td>
            </tr>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "        </tbody>
    </table>
";
    }

    public function getTemplateName()
    {
        return "ChadoMainBundle:admin:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 36,  96 => 33,  92 => 32,  88 => 31,  85 => 30,  79 => 28,  73 => 26,  71 => 25,  67 => 24,  63 => 23,  60 => 22,  56 => 21,  38 => 6,  34 => 5,  31 => 4,  28 => 3,);
    }
}
