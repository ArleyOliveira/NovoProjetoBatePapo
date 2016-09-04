<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_cb13b4b50bfd262c5a30b708a537780dc745ea39fa33391734928dd049fc4e9d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:register.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_92d2385508982c5e413b26c691197be2baf1dc1bf5a11291ffaf4d1b45dd26f8 = $this->env->getExtension("native_profiler");
        $__internal_92d2385508982c5e413b26c691197be2baf1dc1bf5a11291ffaf4d1b45dd26f8->enter($__internal_92d2385508982c5e413b26c691197be2baf1dc1bf5a11291ffaf4d1b45dd26f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_92d2385508982c5e413b26c691197be2baf1dc1bf5a11291ffaf4d1b45dd26f8->leave($__internal_92d2385508982c5e413b26c691197be2baf1dc1bf5a11291ffaf4d1b45dd26f8_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_9a982ab0f5c610f7f6f0f85466506ca177d04e1e85fdca9a9e2b0a73bfbf1c8c = $this->env->getExtension("native_profiler");
        $__internal_9a982ab0f5c610f7f6f0f85466506ca177d04e1e85fdca9a9e2b0a73bfbf1c8c->enter($__internal_9a982ab0f5c610f7f6f0f85466506ca177d04e1e85fdca9a9e2b0a73bfbf1c8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_9a982ab0f5c610f7f6f0f85466506ca177d04e1e85fdca9a9e2b0a73bfbf1c8c->leave($__internal_9a982ab0f5c610f7f6f0f85466506ca177d04e1e85fdca9a9e2b0a73bfbf1c8c_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% block fos_user_content %}*/
/* {% include "FOSUserBundle:Registration:register_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
