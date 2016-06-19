<?php

/* default/people.html.twig */
class __TwigTemplate_7bb578d5f3055cce498c043df54bc6ab3fb2822b97331c8d18479cc9908fa007 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("index.html.twig", "default/people.html.twig", 1);
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
        $__internal_3d488100ea4a1bf379471d5f7785c256de50de854128ddb19aff144863daa048 = $this->env->getExtension("native_profiler");
        $__internal_3d488100ea4a1bf379471d5f7785c256de50de854128ddb19aff144863daa048->enter($__internal_3d488100ea4a1bf379471d5f7785c256de50de854128ddb19aff144863daa048_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/people.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3d488100ea4a1bf379471d5f7785c256de50de854128ddb19aff144863daa048->leave($__internal_3d488100ea4a1bf379471d5f7785c256de50de854128ddb19aff144863daa048_prof);

    }

    // line 3
    public function block_myContent($context, array $blocks = array())
    {
        $__internal_e9634171bb6acdc7a9abf9e185d41477a7883a6c48360fb799319e8c3753b7a8 = $this->env->getExtension("native_profiler");
        $__internal_e9634171bb6acdc7a9abf9e185d41477a7883a6c48360fb799319e8c3753b7a8->enter($__internal_e9634171bb6acdc7a9abf9e185d41477a7883a6c48360fb799319e8c3753b7a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "myContent"));

        // line 4
        echo twig_escape_filter($this->env, (isset($context["content"]) ? $context["content"] : $this->getContext($context, "content")), "html", null, true);
        echo "
";
        
        $__internal_e9634171bb6acdc7a9abf9e185d41477a7883a6c48360fb799319e8c3753b7a8->leave($__internal_e9634171bb6acdc7a9abf9e185d41477a7883a6c48360fb799319e8c3753b7a8_prof);

    }

    public function getTemplateName()
    {
        return "default/people.html.twig";
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
/* {{ content }}*/
/* {% endblock %}*/
/* */
