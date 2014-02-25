<?php

/* ChadoMainBundle:Default:login.html.twig */
class __TwigTemplate_037125a3779fd7a03390661a1526fe0d0f1ea0c178afd32c58d61f11ff04d647 extends Twig_Template
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
        echo "\t";
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 4
            echo "\t    <div>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "message"), "html", null, true);
            echo "</div>
\t";
        }
        // line 6
        echo "
\t<form action=\"";
        // line 7
        echo $this->env->getExtension('routing')->getPath("chado_main_login_check");
        echo "\" method=\"post\">
\t    <label for=\"username\">Username:</label>
\t    <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 9
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" />

\t    <label for=\"password\">Password:</label>
\t    <input type=\"password\" id=\"password\" name=\"_password\" />

\t    <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" checked />
\t\t<label for=\"remember_me\">Keep me logged in</label>

\t    <button type=\"submit\">login</button>
\t</form>
   \t<a href=\"";
        // line 19
        echo $this->env->getExtension('routing')->getPath("chado_main_register");
        echo "\">You aren't being spied by Big Bro'yet ? Register now !</a>
";
    }

    public function getTemplateName()
    {
        return "ChadoMainBundle:Default:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 19,  48 => 9,  43 => 7,  40 => 6,  34 => 4,  31 => 3,  28 => 2,);
    }
}
