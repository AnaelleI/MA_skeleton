<?php

/* default/loginForm.html.twig */
class __TwigTemplate_cd073afcd49e0b7bacd7d306b89cda012328330335b2325d15fef5a8b08cd908 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("index.html.twig", "default/loginForm.html.twig", 1);
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
        $__internal_8687723ed5b63eb1f068802ad110ede23131619baef4f05d05ea53983eeffd1c = $this->env->getExtension("native_profiler");
        $__internal_8687723ed5b63eb1f068802ad110ede23131619baef4f05d05ea53983eeffd1c->enter($__internal_8687723ed5b63eb1f068802ad110ede23131619baef4f05d05ea53983eeffd1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/loginForm.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8687723ed5b63eb1f068802ad110ede23131619baef4f05d05ea53983eeffd1c->leave($__internal_8687723ed5b63eb1f068802ad110ede23131619baef4f05d05ea53983eeffd1c_prof);

    }

    // line 3
    public function block_myContent($context, array $blocks = array())
    {
        $__internal_3205d36058b326c9d2260ec3a74b2320db2b822f806681556ee7f9cfbca89469 = $this->env->getExtension("native_profiler");
        $__internal_3205d36058b326c9d2260ec3a74b2320db2b822f806681556ee7f9cfbca89469->enter($__internal_3205d36058b326c9d2260ec3a74b2320db2b822f806681556ee7f9cfbca89469_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "myContent"));

        // line 4
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
<h2>Log in</h2>
<p id=\"userloginlink\">Don't have an account? <a href=\"/index.php?title=Special:UserLogin&amp;type=signup&amp;returnto=People:Descamps_philippe\">Create an account</a>.</p>
<div id=\"userloginprompt\"><p>You must have cookies enabled to log in to MultiAgentWiki.
</p></div>
";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
";
        // line 10
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
";
        
        $__internal_3205d36058b326c9d2260ec3a74b2320db2b822f806681556ee7f9cfbca89469->leave($__internal_3205d36058b326c9d2260ec3a74b2320db2b822f806681556ee7f9cfbca89469_prof);

    }

    public function getTemplateName()
    {
        return "default/loginForm.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 10,  48 => 9,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'index.html.twig' %}*/
/* */
/* {% block myContent %}*/
/* {{ form_start(form) }}*/
/* <h2>Log in</h2>*/
/* <p id="userloginlink">Don't have an account? <a href="/index.php?title=Special:UserLogin&amp;type=signup&amp;returnto=People:Descamps_philippe">Create an account</a>.</p>*/
/* <div id="userloginprompt"><p>You must have cookies enabled to log in to MultiAgentWiki.*/
/* </p></div>*/
/* {{ form_widget(form) }}*/
/* {{ form_end(form) }}*/
/* {% endblock %}*/
/* */
