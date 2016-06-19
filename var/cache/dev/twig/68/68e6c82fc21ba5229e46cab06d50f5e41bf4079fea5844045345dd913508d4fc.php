<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_c4cbbedd41f19e500a073bfe484b2294517acfdb0810b2bc4c662c9d165c76c4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
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
        $__internal_71abcb31fa857a225fbf49c6b464d3664f9fde97fa4855a2452b79e0ec5eeb2a = $this->env->getExtension("native_profiler");
        $__internal_71abcb31fa857a225fbf49c6b464d3664f9fde97fa4855a2452b79e0ec5eeb2a->enter($__internal_71abcb31fa857a225fbf49c6b464d3664f9fde97fa4855a2452b79e0ec5eeb2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_71abcb31fa857a225fbf49c6b464d3664f9fde97fa4855a2452b79e0ec5eeb2a->leave($__internal_71abcb31fa857a225fbf49c6b464d3664f9fde97fa4855a2452b79e0ec5eeb2a_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_804450288b129ddb9bfd57cfe45ee17d1b5d0f2a7aff932366535ca1e65afde8 = $this->env->getExtension("native_profiler");
        $__internal_804450288b129ddb9bfd57cfe45ee17d1b5d0f2a7aff932366535ca1e65afde8->enter($__internal_804450288b129ddb9bfd57cfe45ee17d1b5d0f2a7aff932366535ca1e65afde8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_804450288b129ddb9bfd57cfe45ee17d1b5d0f2a7aff932366535ca1e65afde8->leave($__internal_804450288b129ddb9bfd57cfe45ee17d1b5d0f2a7aff932366535ca1e65afde8_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_9ab68e4d495f638c1ad81eeb60d35dba5824a661bdbf1ef43b0de2216dd6b5a4 = $this->env->getExtension("native_profiler");
        $__internal_9ab68e4d495f638c1ad81eeb60d35dba5824a661bdbf1ef43b0de2216dd6b5a4->enter($__internal_9ab68e4d495f638c1ad81eeb60d35dba5824a661bdbf1ef43b0de2216dd6b5a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_9ab68e4d495f638c1ad81eeb60d35dba5824a661bdbf1ef43b0de2216dd6b5a4->leave($__internal_9ab68e4d495f638c1ad81eeb60d35dba5824a661bdbf1ef43b0de2216dd6b5a4_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_95ce254c08ae8fd4794bf7bc43bc5b185783a6058cf2404cb25de4d9d8dc60f8 = $this->env->getExtension("native_profiler");
        $__internal_95ce254c08ae8fd4794bf7bc43bc5b185783a6058cf2404cb25de4d9d8dc60f8->enter($__internal_95ce254c08ae8fd4794bf7bc43bc5b185783a6058cf2404cb25de4d9d8dc60f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_95ce254c08ae8fd4794bf7bc43bc5b185783a6058cf2404cb25de4d9d8dc60f8->leave($__internal_95ce254c08ae8fd4794bf7bc43bc5b185783a6058cf2404cb25de4d9d8dc60f8_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
