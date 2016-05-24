<?php

/* base.html.twig */
class __TwigTemplate_6a357c5a5db8b390c8f6cb88b28fe3bee4e6a89dd30711877bb59d8a5154e0df extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_80b231e5a48a8fc80f68511f200a3ee23cffe9e404770305cdcbcca56552ab7a = $this->env->getExtension("native_profiler");
        $__internal_80b231e5a48a8fc80f68511f200a3ee23cffe9e404770305cdcbcca56552ab7a->enter($__internal_80b231e5a48a8fc80f68511f200a3ee23cffe9e404770305cdcbcca56552ab7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_80b231e5a48a8fc80f68511f200a3ee23cffe9e404770305cdcbcca56552ab7a->leave($__internal_80b231e5a48a8fc80f68511f200a3ee23cffe9e404770305cdcbcca56552ab7a_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_d2b3d2cb2a5d22bcfadae3c168fd5d586aa9bdf62eb2f992c00c635184cf2c5f = $this->env->getExtension("native_profiler");
        $__internal_d2b3d2cb2a5d22bcfadae3c168fd5d586aa9bdf62eb2f992c00c635184cf2c5f->enter($__internal_d2b3d2cb2a5d22bcfadae3c168fd5d586aa9bdf62eb2f992c00c635184cf2c5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_d2b3d2cb2a5d22bcfadae3c168fd5d586aa9bdf62eb2f992c00c635184cf2c5f->leave($__internal_d2b3d2cb2a5d22bcfadae3c168fd5d586aa9bdf62eb2f992c00c635184cf2c5f_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_8240be1eab44982b07427a1a6ae86311c776778e027b23d662887d76a43a6fcd = $this->env->getExtension("native_profiler");
        $__internal_8240be1eab44982b07427a1a6ae86311c776778e027b23d662887d76a43a6fcd->enter($__internal_8240be1eab44982b07427a1a6ae86311c776778e027b23d662887d76a43a6fcd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_8240be1eab44982b07427a1a6ae86311c776778e027b23d662887d76a43a6fcd->leave($__internal_8240be1eab44982b07427a1a6ae86311c776778e027b23d662887d76a43a6fcd_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_e8183e3cf91135a02b0297a463616ea5045ae105cc330a307f3db4a5d68b4193 = $this->env->getExtension("native_profiler");
        $__internal_e8183e3cf91135a02b0297a463616ea5045ae105cc330a307f3db4a5d68b4193->enter($__internal_e8183e3cf91135a02b0297a463616ea5045ae105cc330a307f3db4a5d68b4193_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_e8183e3cf91135a02b0297a463616ea5045ae105cc330a307f3db4a5d68b4193->leave($__internal_e8183e3cf91135a02b0297a463616ea5045ae105cc330a307f3db4a5d68b4193_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_3f17fcf56c0e4688407d957937d2851fadb8330089424a3068f9f6a9d8c70432 = $this->env->getExtension("native_profiler");
        $__internal_3f17fcf56c0e4688407d957937d2851fadb8330089424a3068f9f6a9d8c70432->enter($__internal_3f17fcf56c0e4688407d957937d2851fadb8330089424a3068f9f6a9d8c70432_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_3f17fcf56c0e4688407d957937d2851fadb8330089424a3068f9f6a9d8c70432->leave($__internal_3f17fcf56c0e4688407d957937d2851fadb8330089424a3068f9f6a9d8c70432_prof);

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
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
