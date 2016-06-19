<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_a3c7da7aed07366436c5347a5bee23a587b7cd4175a76a517904d79956cc1ef4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_907025b737d25a7670213033ff8a4f33bfc43123ecef4c2d76f204261a817482 = $this->env->getExtension("native_profiler");
        $__internal_907025b737d25a7670213033ff8a4f33bfc43123ecef4c2d76f204261a817482->enter($__internal_907025b737d25a7670213033ff8a4f33bfc43123ecef4c2d76f204261a817482_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_907025b737d25a7670213033ff8a4f33bfc43123ecef4c2d76f204261a817482->leave($__internal_907025b737d25a7670213033ff8a4f33bfc43123ecef4c2d76f204261a817482_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_d03215636f5026dcb39f1060b52feae8bf3f1616b268a92a1f415ec880f65c26 = $this->env->getExtension("native_profiler");
        $__internal_d03215636f5026dcb39f1060b52feae8bf3f1616b268a92a1f415ec880f65c26->enter($__internal_d03215636f5026dcb39f1060b52feae8bf3f1616b268a92a1f415ec880f65c26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_d03215636f5026dcb39f1060b52feae8bf3f1616b268a92a1f415ec880f65c26->leave($__internal_d03215636f5026dcb39f1060b52feae8bf3f1616b268a92a1f415ec880f65c26_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_a509040961e6f298e19ab5b18a25bde3638306f195f6fb8b5cd69c9ac65f103f = $this->env->getExtension("native_profiler");
        $__internal_a509040961e6f298e19ab5b18a25bde3638306f195f6fb8b5cd69c9ac65f103f->enter($__internal_a509040961e6f298e19ab5b18a25bde3638306f195f6fb8b5cd69c9ac65f103f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_a509040961e6f298e19ab5b18a25bde3638306f195f6fb8b5cd69c9ac65f103f->leave($__internal_a509040961e6f298e19ab5b18a25bde3638306f195f6fb8b5cd69c9ac65f103f_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_62893cb8204c37b9f72b985304ce0adffd55a5d3c14e23ac06762c9e254a3867 = $this->env->getExtension("native_profiler");
        $__internal_62893cb8204c37b9f72b985304ce0adffd55a5d3c14e23ac06762c9e254a3867->enter($__internal_62893cb8204c37b9f72b985304ce0adffd55a5d3c14e23ac06762c9e254a3867_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_62893cb8204c37b9f72b985304ce0adffd55a5d3c14e23ac06762c9e254a3867->leave($__internal_62893cb8204c37b9f72b985304ce0adffd55a5d3c14e23ac06762c9e254a3867_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 33,  114 => 32,  108 => 28,  106 => 27,  102 => 25,  96 => 24,  88 => 21,  82 => 17,  80 => 16,  75 => 14,  70 => 13,  64 => 12,  54 => 9,  48 => 6,  45 => 5,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     {% if collector.hasexception %}*/
/*         <style>*/
/*             {{ render(path('_profiler_exception_css', { token: token })) }}*/
/*         </style>*/
/*     {% endif %}*/
/*     {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block menu %}*/
/*     <span class="label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}">*/
/*         <span class="icon">{{ include('@WebProfiler/Icon/exception.svg') }}</span>*/
/*         <strong>Exception</strong>*/
/*         {% if collector.hasexception %}*/
/*             <span class="count">*/
/*                 <span>1</span>*/
/*             </span>*/
/*         {% endif %}*/
/*     </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     <h2>Exceptions</h2>*/
/* */
/*     {% if not collector.hasexception %}*/
/*         <div class="empty">*/
/*             <p>No exception was thrown and caught during the request.</p>*/
/*         </div>*/
/*     {% else %}*/
/*         <div class="sf-reset">*/
/*             {{ render(path('_profiler_exception', { token: token })) }}*/
/*         </div>*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */
