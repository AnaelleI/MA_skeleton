<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_4c194b7af2151bdb642b0a5cd30c0a4fe67e090f8435cdce89a0b4fbfbbbd52b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f70e63da9410ff17815c06e2038b52b9ce9f27e4bdadc3c80827e4cd6fddb4a5 = $this->env->getExtension("native_profiler");
        $__internal_f70e63da9410ff17815c06e2038b52b9ce9f27e4bdadc3c80827e4cd6fddb4a5->enter($__internal_f70e63da9410ff17815c06e2038b52b9ce9f27e4bdadc3c80827e4cd6fddb4a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f70e63da9410ff17815c06e2038b52b9ce9f27e4bdadc3c80827e4cd6fddb4a5->leave($__internal_f70e63da9410ff17815c06e2038b52b9ce9f27e4bdadc3c80827e4cd6fddb4a5_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_e9ef83b7f84416b76a41eb9786425e89f8862a20d120923cca209e58420a9bfd = $this->env->getExtension("native_profiler");
        $__internal_e9ef83b7f84416b76a41eb9786425e89f8862a20d120923cca209e58420a9bfd->enter($__internal_e9ef83b7f84416b76a41eb9786425e89f8862a20d120923cca209e58420a9bfd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_e9ef83b7f84416b76a41eb9786425e89f8862a20d120923cca209e58420a9bfd->leave($__internal_e9ef83b7f84416b76a41eb9786425e89f8862a20d120923cca209e58420a9bfd_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_a3d6083ecb89ade4abfa0beabf6d36b261e5e6af7a42d4c66c603461113fad4f = $this->env->getExtension("native_profiler");
        $__internal_a3d6083ecb89ade4abfa0beabf6d36b261e5e6af7a42d4c66c603461113fad4f->enter($__internal_a3d6083ecb89ade4abfa0beabf6d36b261e5e6af7a42d4c66c603461113fad4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_a3d6083ecb89ade4abfa0beabf6d36b261e5e6af7a42d4c66c603461113fad4f->leave($__internal_a3d6083ecb89ade4abfa0beabf6d36b261e5e6af7a42d4c66c603461113fad4f_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_b3e13c9e74915624f73d611c5b8189ddefc012eec783f70de6cbe004c48f69a5 = $this->env->getExtension("native_profiler");
        $__internal_b3e13c9e74915624f73d611c5b8189ddefc012eec783f70de6cbe004c48f69a5->enter($__internal_b3e13c9e74915624f73d611c5b8189ddefc012eec783f70de6cbe004c48f69a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_b3e13c9e74915624f73d611c5b8189ddefc012eec783f70de6cbe004c48f69a5->leave($__internal_b3e13c9e74915624f73d611c5b8189ddefc012eec783f70de6cbe004c48f69a5_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
