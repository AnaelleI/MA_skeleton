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
        $__internal_98cf57d89f35322ad96c4870b5a3d7643f5594a584631b3f65894959aa7a54da = $this->env->getExtension("native_profiler");
        $__internal_98cf57d89f35322ad96c4870b5a3d7643f5594a584631b3f65894959aa7a54da->enter($__internal_98cf57d89f35322ad96c4870b5a3d7643f5594a584631b3f65894959aa7a54da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_98cf57d89f35322ad96c4870b5a3d7643f5594a584631b3f65894959aa7a54da->leave($__internal_98cf57d89f35322ad96c4870b5a3d7643f5594a584631b3f65894959aa7a54da_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_67a5e21298ab29fa2c8c0b3e7a3cf172b934b01e6e844ea317e1153577ef661f = $this->env->getExtension("native_profiler");
        $__internal_67a5e21298ab29fa2c8c0b3e7a3cf172b934b01e6e844ea317e1153577ef661f->enter($__internal_67a5e21298ab29fa2c8c0b3e7a3cf172b934b01e6e844ea317e1153577ef661f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_67a5e21298ab29fa2c8c0b3e7a3cf172b934b01e6e844ea317e1153577ef661f->leave($__internal_67a5e21298ab29fa2c8c0b3e7a3cf172b934b01e6e844ea317e1153577ef661f_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_7d64ae99a384582447251eedd99ea1fe2a22d92df16196a58cc161bef69d62d5 = $this->env->getExtension("native_profiler");
        $__internal_7d64ae99a384582447251eedd99ea1fe2a22d92df16196a58cc161bef69d62d5->enter($__internal_7d64ae99a384582447251eedd99ea1fe2a22d92df16196a58cc161bef69d62d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_7d64ae99a384582447251eedd99ea1fe2a22d92df16196a58cc161bef69d62d5->leave($__internal_7d64ae99a384582447251eedd99ea1fe2a22d92df16196a58cc161bef69d62d5_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_662ed9eaef60f77f00c2230b5f2148492c250d2dc737efa660fca6577dce4e48 = $this->env->getExtension("native_profiler");
        $__internal_662ed9eaef60f77f00c2230b5f2148492c250d2dc737efa660fca6577dce4e48->enter($__internal_662ed9eaef60f77f00c2230b5f2148492c250d2dc737efa660fca6577dce4e48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_662ed9eaef60f77f00c2230b5f2148492c250d2dc737efa660fca6577dce4e48->leave($__internal_662ed9eaef60f77f00c2230b5f2148492c250d2dc737efa660fca6577dce4e48_prof);

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
