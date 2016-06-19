<?php

/* default/error.html.twig */
class __TwigTemplate_32f531d899e9516ea5622537762dc31a3036500068436f850840f03453683b9b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("index.html.twig", "default/error.html.twig", 1);
        $this->blocks = array(
            'myContent' => array($this, 'block_myContent'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "index.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a25c11979c6f9429d4e2ccbb8ba6b3e5e47d7813612b088e21a33781f4439935 = $this->env->getExtension("native_profiler");
        $__internal_a25c11979c6f9429d4e2ccbb8ba6b3e5e47d7813612b088e21a33781f4439935->enter($__internal_a25c11979c6f9429d4e2ccbb8ba6b3e5e47d7813612b088e21a33781f4439935_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/error.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a25c11979c6f9429d4e2ccbb8ba6b3e5e47d7813612b088e21a33781f4439935->leave($__internal_a25c11979c6f9429d4e2ccbb8ba6b3e5e47d7813612b088e21a33781f4439935_prof);

    }

    // line 3
    public function block_myContent($context, array $blocks = array())
    {
        $__internal_4afd6eced3f6692de08b87392755e4b557c31e12e6a088a2ffc59e9fe319fdaa = $this->env->getExtension("native_profiler");
        $__internal_4afd6eced3f6692de08b87392755e4b557c31e12e6a088a2ffc59e9fe319fdaa->enter($__internal_4afd6eced3f6692de08b87392755e4b557c31e12e6a088a2ffc59e9fe319fdaa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "myContent"));

        // line 4
        echo twig_escape_filter($this->env, (isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "html", null, true);
        echo "
";
        
        $__internal_4afd6eced3f6692de08b87392755e4b557c31e12e6a088a2ffc59e9fe319fdaa->leave($__internal_4afd6eced3f6692de08b87392755e4b557c31e12e6a088a2ffc59e9fe319fdaa_prof);

    }

    public function getTemplateName()
    {
        return "default/error.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'index.html.twig' %}*/
/* */
/* {% block myContent %}*/
/* {{ error }}*/
/* {% endblock %}*/
/* */
