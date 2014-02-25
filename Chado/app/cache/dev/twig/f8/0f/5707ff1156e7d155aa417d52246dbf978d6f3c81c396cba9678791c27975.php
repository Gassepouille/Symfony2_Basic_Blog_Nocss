<?php

/* ChadoMainBundle:admin:commentlist.html.twig */
class __TwigTemplate_f80f5707ff1156e7d155aa417d52246dbf978d6f3c81c396cba9678791c27975 extends Twig_Template
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
\t<h6>Admin Comments ";
        // line 5
        echo twig_escape_filter($this->env, (isset($context["article_name"]) ? $context["article_name"] : $this->getContext($context, "article_name")), "html", null, true);
        echo "</h6>
\t<table>
\t\t<thead>
\t        <tr>
\t            <th>content</th>
\t            <th>author</th>
\t            <th>delete</th>
\t        </tr>
\t    </thead>
\t    <tbody>
\t    ";
        // line 15
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["comments_list"]) ? $context["comments_list"] : $this->getContext($context, "comments_list")));
        foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
            // line 16
            echo "\t\t\t<tr>
\t            <td>";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["comment"]) ? $context["comment"] : $this->getContext($context, "comment")), "content"), "html", null, true);
            echo "</td>
\t            <td>";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["comment"]) ? $context["comment"] : $this->getContext($context, "comment")), "User"), "nickname"), "html", null, true);
            echo "</td>
\t            <td><a href=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("chado_main_admincomdel", array("id" => $this->getAttribute((isset($context["comment"]) ? $context["comment"] : $this->getContext($context, "comment")), "id"), "article_id" => (isset($context["artid"]) ? $context["artid"] : $this->getContext($context, "artid")))), "html", null, true);
            echo "\"><button>Delete</button></a></td>
\t        </tr>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "\t    </tbody>
    </table>
";
    }

    public function getTemplateName()
    {
        return "ChadoMainBundle:admin:commentlist.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 22,  64 => 19,  60 => 18,  56 => 17,  53 => 16,  49 => 15,  36 => 5,  31 => 4,  28 => 3,);
    }
}
