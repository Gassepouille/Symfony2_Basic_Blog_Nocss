<?php

/* ChadoMainBundle:admin:taglist.html.twig */
class __TwigTemplate_1a33f72a651eb8b7559d91c9f60675e920b74efedb87e7d7bc74daaa7de81380 extends Twig_Template
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
        echo "\t<a href=\"";
        echo $this->env->getExtension('routing')->getPath("chado_main_admin");
        echo "\">Admin home</a>
\t<a href=\"";
        // line 5
        echo $this->env->getExtension('routing')->getPath("chado_main_admincreatetag");
        echo "\">Create tag</a>
\t<h6>Admin taglist</h6>
\t<table>
\t\t<thead>
\t        <tr>
\t            <th>Tagname</th>
\t        </tr>
\t    </thead>
\t    <tbody>
\t    ";
        // line 14
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tags_list"]) ? $context["tags_list"] : $this->getContext($context, "tags_list")));
        foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
            // line 15
            echo "\t\t\t<tr>
\t            <td>";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tag"]) ? $context["tag"] : $this->getContext($context, "tag")), "Tagname"), "html", null, true);
            echo "</td>
\t        </tr>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "\t    </tbody>
    </table>
";
    }

    public function getTemplateName()
    {
        return "ChadoMainBundle:admin:taglist.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 19,  55 => 16,  52 => 15,  48 => 14,  36 => 5,  31 => 4,  28 => 3,);
    }
}
