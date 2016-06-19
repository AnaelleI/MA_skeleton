<?php

/* default/content/home.html.twig */
class __TwigTemplate_7e8d81147002b8a7ce2173f77d7ece7af34ecdfb4f3aa892f9b88a6a44b2d3e6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("index.html.twig", "default/content/home.html.twig", 1);
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
        $__internal_ca707534f57b62de375043bd037f5c8ce47a2c5896bc639e03a68bf0d4296977 = $this->env->getExtension("native_profiler");
        $__internal_ca707534f57b62de375043bd037f5c8ce47a2c5896bc639e03a68bf0d4296977->enter($__internal_ca707534f57b62de375043bd037f5c8ce47a2c5896bc639e03a68bf0d4296977_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/content/home.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ca707534f57b62de375043bd037f5c8ce47a2c5896bc639e03a68bf0d4296977->leave($__internal_ca707534f57b62de375043bd037f5c8ce47a2c5896bc639e03a68bf0d4296977_prof);

    }

    // line 3
    public function block_myContent($context, array $blocks = array())
    {
        $__internal_d05f8c68dc41f9789c6404f4b763df0f3fc6609141afad151004333267864307 = $this->env->getExtension("native_profiler");
        $__internal_d05f8c68dc41f9789c6404f4b763df0f3fc6609141afad151004333267864307->enter($__internal_d05f8c68dc41f9789c6404f4b763df0f3fc6609141afad151004333267864307_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "myContent"));

        // line 4
        echo "Nothing for now
";
        
        $__internal_d05f8c68dc41f9789c6404f4b763df0f3fc6609141afad151004333267864307->leave($__internal_d05f8c68dc41f9789c6404f4b763df0f3fc6609141afad151004333267864307_prof);

    }

    public function getTemplateName()
    {
        return "default/content/home.html.twig";
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
