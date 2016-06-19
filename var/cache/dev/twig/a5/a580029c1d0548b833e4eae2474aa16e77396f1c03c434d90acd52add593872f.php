<?php

/* base.html.twig */
class __TwigTemplate_6a357c5a5db8b390c8f6cb88b28fe3bee4e6a89dd30711877bb59d8a5154e0df extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'myStylesheets' => array($this, 'block_myStylesheets'),
            'myBody' => array($this, 'block_myBody'),
            'myJavascripts' => array($this, 'block_myJavascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c4a986fec165696050e79735210c3a9438a9af0f788126b63a0bd6031e712969 = $this->env->getExtension("native_profiler");
        $__internal_c4a986fec165696050e79735210c3a9438a9af0f788126b63a0bd6031e712969->enter($__internal_c4a986fec165696050e79735210c3a9438a9af0f788126b63a0bd6031e712969_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : $this->getContext($context, "title")), "html", null, true);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('myStylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />

        <link rel=\"alternate\" type=\"application/rss+xml\" title=\"RSS Feed\" href=\"/rss.xml\">
    </head>
    <body>
        ";
        // line 12
        $this->displayBlock('myBody', $context, $blocks);
        // line 13
        echo "        ";
        $this->displayBlock('myJavascripts', $context, $blocks);
        // line 14
        echo "    </body>
</html>
";
        
        $__internal_c4a986fec165696050e79735210c3a9438a9af0f788126b63a0bd6031e712969->leave($__internal_c4a986fec165696050e79735210c3a9438a9af0f788126b63a0bd6031e712969_prof);

    }

    // line 6
    public function block_myStylesheets($context, array $blocks = array())
    {
        $__internal_804bbe2e58487353802867dcce2c847d3dee4ed87d21c9ef9fa8b4388dc06968 = $this->env->getExtension("native_profiler");
        $__internal_804bbe2e58487353802867dcce2c847d3dee4ed87d21c9ef9fa8b4388dc06968->enter($__internal_804bbe2e58487353802867dcce2c847d3dee4ed87d21c9ef9fa8b4388dc06968_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "myStylesheets"));

        
        $__internal_804bbe2e58487353802867dcce2c847d3dee4ed87d21c9ef9fa8b4388dc06968->leave($__internal_804bbe2e58487353802867dcce2c847d3dee4ed87d21c9ef9fa8b4388dc06968_prof);

    }

    // line 12
    public function block_myBody($context, array $blocks = array())
    {
        $__internal_15e33af8a12f14fbca62de8ef2c49b867d5e1997152bace7e37049a35d4aa4e5 = $this->env->getExtension("native_profiler");
        $__internal_15e33af8a12f14fbca62de8ef2c49b867d5e1997152bace7e37049a35d4aa4e5->enter($__internal_15e33af8a12f14fbca62de8ef2c49b867d5e1997152bace7e37049a35d4aa4e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "myBody"));

        
        $__internal_15e33af8a12f14fbca62de8ef2c49b867d5e1997152bace7e37049a35d4aa4e5->leave($__internal_15e33af8a12f14fbca62de8ef2c49b867d5e1997152bace7e37049a35d4aa4e5_prof);

    }

    // line 13
    public function block_myJavascripts($context, array $blocks = array())
    {
        $__internal_77064b237f1bc91913ff82657a5b3f7a534921293d3ab9a6a7d20790e44349e1 = $this->env->getExtension("native_profiler");
        $__internal_77064b237f1bc91913ff82657a5b3f7a534921293d3ab9a6a7d20790e44349e1->enter($__internal_77064b237f1bc91913ff82657a5b3f7a534921293d3ab9a6a7d20790e44349e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "myJavascripts"));

        
        $__internal_77064b237f1bc91913ff82657a5b3f7a534921293d3ab9a6a7d20790e44349e1->leave($__internal_77064b237f1bc91913ff82657a5b3f7a534921293d3ab9a6a7d20790e44349e1_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 13,  71 => 12,  60 => 6,  51 => 14,  48 => 13,  46 => 12,  37 => 7,  35 => 6,  31 => 5,  25 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{{ title }}</title>*/
/*         {% block myStylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/* */
/*         <link rel="alternate" type="application/rss+xml" title="RSS Feed" href="/rss.xml">*/
/*     </head>*/
/*     <body>*/
/*         {% block myBody %}{% endblock %}*/
/*         {% block myJavascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
