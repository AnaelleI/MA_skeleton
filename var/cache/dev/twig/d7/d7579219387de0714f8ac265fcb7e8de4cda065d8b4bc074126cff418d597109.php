<?php

/* base.html.twig */
class __TwigTemplate_b54ea2e6e6d369c79344809662947d0f26a9762ab21da3c35d0d555749da6ec7 extends Twig_Template
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
        $__internal_8661ddd318ee558e4b6dd505864980ad3f10dd83c4bd65ff7afc137fc53453df = $this->env->getExtension("native_profiler");
        $__internal_8661ddd318ee558e4b6dd505864980ad3f10dd83c4bd65ff7afc137fc53453df->enter($__internal_8661ddd318ee558e4b6dd505864980ad3f10dd83c4bd65ff7afc137fc53453df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_8661ddd318ee558e4b6dd505864980ad3f10dd83c4bd65ff7afc137fc53453df->leave($__internal_8661ddd318ee558e4b6dd505864980ad3f10dd83c4bd65ff7afc137fc53453df_prof);

    }

    // line 6
    public function block_myStylesheets($context, array $blocks = array())
    {
        $__internal_8d04fe62699707907aec7060afa55f21f69b9b34dbac63542bba9d6230e7e372 = $this->env->getExtension("native_profiler");
        $__internal_8d04fe62699707907aec7060afa55f21f69b9b34dbac63542bba9d6230e7e372->enter($__internal_8d04fe62699707907aec7060afa55f21f69b9b34dbac63542bba9d6230e7e372_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "myStylesheets"));

        
        $__internal_8d04fe62699707907aec7060afa55f21f69b9b34dbac63542bba9d6230e7e372->leave($__internal_8d04fe62699707907aec7060afa55f21f69b9b34dbac63542bba9d6230e7e372_prof);

    }

    // line 12
    public function block_myBody($context, array $blocks = array())
    {
        $__internal_8179a3f203cd0e03415ca04418d1cf7d6f0d5836112dba2589b6b5352a1badf5 = $this->env->getExtension("native_profiler");
        $__internal_8179a3f203cd0e03415ca04418d1cf7d6f0d5836112dba2589b6b5352a1badf5->enter($__internal_8179a3f203cd0e03415ca04418d1cf7d6f0d5836112dba2589b6b5352a1badf5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "myBody"));

        
        $__internal_8179a3f203cd0e03415ca04418d1cf7d6f0d5836112dba2589b6b5352a1badf5->leave($__internal_8179a3f203cd0e03415ca04418d1cf7d6f0d5836112dba2589b6b5352a1badf5_prof);

    }

    // line 13
    public function block_myJavascripts($context, array $blocks = array())
    {
        $__internal_d5cd9139aded8ff4a9448cceba4d0388189adfa3eee3da2170c4e6bae4c3a19a = $this->env->getExtension("native_profiler");
        $__internal_d5cd9139aded8ff4a9448cceba4d0388189adfa3eee3da2170c4e6bae4c3a19a->enter($__internal_d5cd9139aded8ff4a9448cceba4d0388189adfa3eee3da2170c4e6bae4c3a19a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "myJavascripts"));

        
        $__internal_d5cd9139aded8ff4a9448cceba4d0388189adfa3eee3da2170c4e6bae4c3a19a->leave($__internal_d5cd9139aded8ff4a9448cceba4d0388189adfa3eee3da2170c4e6bae4c3a19a_prof);

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
