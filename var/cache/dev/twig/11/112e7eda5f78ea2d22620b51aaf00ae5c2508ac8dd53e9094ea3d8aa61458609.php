<?php

/* default/home.html.twig */
class __TwigTemplate_fdd80d084bb17da2c4c81f32f48e0927de57bc184125ece553f911f6c2e2c593 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("index.html.twig", "default/home.html.twig", 1);
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
        $__internal_88dab63c4450e4a97fac66202a6c905b7b1226ef68d9192a4d1f2e345a206b43 = $this->env->getExtension("native_profiler");
        $__internal_88dab63c4450e4a97fac66202a6c905b7b1226ef68d9192a4d1f2e345a206b43->enter($__internal_88dab63c4450e4a97fac66202a6c905b7b1226ef68d9192a4d1f2e345a206b43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/home.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_88dab63c4450e4a97fac66202a6c905b7b1226ef68d9192a4d1f2e345a206b43->leave($__internal_88dab63c4450e4a97fac66202a6c905b7b1226ef68d9192a4d1f2e345a206b43_prof);

    }

    // line 3
    public function block_myContent($context, array $blocks = array())
    {
        $__internal_65560ef0616f379b59b52de06fe0a177c048cf5cdf4c34b7b27d1152b8cfa44c = $this->env->getExtension("native_profiler");
        $__internal_65560ef0616f379b59b52de06fe0a177c048cf5cdf4c34b7b27d1152b8cfa44c->enter($__internal_65560ef0616f379b59b52de06fe0a177c048cf5cdf4c34b7b27d1152b8cfa44c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "myContent"));

        // line 4
        echo "Nothing for now
";
        
        $__internal_65560ef0616f379b59b52de06fe0a177c048cf5cdf4c34b7b27d1152b8cfa44c->leave($__internal_65560ef0616f379b59b52de06fe0a177c048cf5cdf4c34b7b27d1152b8cfa44c_prof);

    }

    public function getTemplateName()
    {
        return "default/home.html.twig";
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
/* Nothing for now*/
/* {% endblock %}*/
/* */
