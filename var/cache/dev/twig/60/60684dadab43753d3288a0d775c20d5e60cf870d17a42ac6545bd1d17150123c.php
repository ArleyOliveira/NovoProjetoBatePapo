<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_57052fc63d26f178cc4f6012c0c63bbcaef8fa24bf2506e2610edaf3683b1b2c extends Twig_Template
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
        $__internal_b32693d8ae126f71149a1208b395563edcd9dfcafb8c30408694cac8a2a4f15d = $this->env->getExtension("native_profiler");
        $__internal_b32693d8ae126f71149a1208b395563edcd9dfcafb8c30408694cac8a2a4f15d->enter($__internal_b32693d8ae126f71149a1208b395563edcd9dfcafb8c30408694cac8a2a4f15d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b32693d8ae126f71149a1208b395563edcd9dfcafb8c30408694cac8a2a4f15d->leave($__internal_b32693d8ae126f71149a1208b395563edcd9dfcafb8c30408694cac8a2a4f15d_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_0ece3f622e5fae342d1fa0fb1ee161a89ef97083e3eb65d8524ec2664ec45094 = $this->env->getExtension("native_profiler");
        $__internal_0ece3f622e5fae342d1fa0fb1ee161a89ef97083e3eb65d8524ec2664ec45094->enter($__internal_0ece3f622e5fae342d1fa0fb1ee161a89ef97083e3eb65d8524ec2664ec45094_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_0ece3f622e5fae342d1fa0fb1ee161a89ef97083e3eb65d8524ec2664ec45094->leave($__internal_0ece3f622e5fae342d1fa0fb1ee161a89ef97083e3eb65d8524ec2664ec45094_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_de2773317da6460b341fbef387fbecef11ba742202c6c397b1ca3952f36964be = $this->env->getExtension("native_profiler");
        $__internal_de2773317da6460b341fbef387fbecef11ba742202c6c397b1ca3952f36964be->enter($__internal_de2773317da6460b341fbef387fbecef11ba742202c6c397b1ca3952f36964be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_de2773317da6460b341fbef387fbecef11ba742202c6c397b1ca3952f36964be->leave($__internal_de2773317da6460b341fbef387fbecef11ba742202c6c397b1ca3952f36964be_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_c97c0c92d70d7ed0be3b09be3de8df922038699d2472dd28ec005283d33baa9d = $this->env->getExtension("native_profiler");
        $__internal_c97c0c92d70d7ed0be3b09be3de8df922038699d2472dd28ec005283d33baa9d->enter($__internal_c97c0c92d70d7ed0be3b09be3de8df922038699d2472dd28ec005283d33baa9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_c97c0c92d70d7ed0be3b09be3de8df922038699d2472dd28ec005283d33baa9d->leave($__internal_c97c0c92d70d7ed0be3b09be3de8df922038699d2472dd28ec005283d33baa9d_prof);

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
