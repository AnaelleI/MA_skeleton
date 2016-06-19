<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_9d971d78e303db122257f8ba42bc3fb292e16bbd998dd2bf281d919525d38a06 extends Twig_Template
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
        $__internal_6690f6a0c4478bec14016d50eedb398957728a2b860b4c6e46cb64bfa4faf770 = $this->env->getExtension("native_profiler");
        $__internal_6690f6a0c4478bec14016d50eedb398957728a2b860b4c6e46cb64bfa4faf770->enter($__internal_6690f6a0c4478bec14016d50eedb398957728a2b860b4c6e46cb64bfa4faf770_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6690f6a0c4478bec14016d50eedb398957728a2b860b4c6e46cb64bfa4faf770->leave($__internal_6690f6a0c4478bec14016d50eedb398957728a2b860b4c6e46cb64bfa4faf770_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_2d979d8d74563224e3cd93ad1aaaa9e97652a1e1c14011383b9fdd01f3105c43 = $this->env->getExtension("native_profiler");
        $__internal_2d979d8d74563224e3cd93ad1aaaa9e97652a1e1c14011383b9fdd01f3105c43->enter($__internal_2d979d8d74563224e3cd93ad1aaaa9e97652a1e1c14011383b9fdd01f3105c43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_2d979d8d74563224e3cd93ad1aaaa9e97652a1e1c14011383b9fdd01f3105c43->leave($__internal_2d979d8d74563224e3cd93ad1aaaa9e97652a1e1c14011383b9fdd01f3105c43_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_6912c1900f3776e223499639dbe839d701662e66390af3d628e7e4684f6a76c8 = $this->env->getExtension("native_profiler");
        $__internal_6912c1900f3776e223499639dbe839d701662e66390af3d628e7e4684f6a76c8->enter($__internal_6912c1900f3776e223499639dbe839d701662e66390af3d628e7e4684f6a76c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_6912c1900f3776e223499639dbe839d701662e66390af3d628e7e4684f6a76c8->leave($__internal_6912c1900f3776e223499639dbe839d701662e66390af3d628e7e4684f6a76c8_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_476279898a5b19305b53f32fbe337b802f2a68886fadc437dd263535b570f7e4 = $this->env->getExtension("native_profiler");
        $__internal_476279898a5b19305b53f32fbe337b802f2a68886fadc437dd263535b570f7e4->enter($__internal_476279898a5b19305b53f32fbe337b802f2a68886fadc437dd263535b570f7e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_476279898a5b19305b53f32fbe337b802f2a68886fadc437dd263535b570f7e4->leave($__internal_476279898a5b19305b53f32fbe337b802f2a68886fadc437dd263535b570f7e4_prof);

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
