<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_34197edb3a485aa71f4f001545e8d497ad56722649e5e94e4999e941e013eb95 extends Twig_Template
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
        $__internal_db25681cf2b9372e3b0cd0f9fae2adeca304f80bf08cfe4af7c5b91a0f2b54dd = $this->env->getExtension("native_profiler");
        $__internal_db25681cf2b9372e3b0cd0f9fae2adeca304f80bf08cfe4af7c5b91a0f2b54dd->enter($__internal_db25681cf2b9372e3b0cd0f9fae2adeca304f80bf08cfe4af7c5b91a0f2b54dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_db25681cf2b9372e3b0cd0f9fae2adeca304f80bf08cfe4af7c5b91a0f2b54dd->leave($__internal_db25681cf2b9372e3b0cd0f9fae2adeca304f80bf08cfe4af7c5b91a0f2b54dd_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_28b79203c1d91e2641310fb44177b4a9258c58a51415f76c6640fce5539f908b = $this->env->getExtension("native_profiler");
        $__internal_28b79203c1d91e2641310fb44177b4a9258c58a51415f76c6640fce5539f908b->enter($__internal_28b79203c1d91e2641310fb44177b4a9258c58a51415f76c6640fce5539f908b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_28b79203c1d91e2641310fb44177b4a9258c58a51415f76c6640fce5539f908b->leave($__internal_28b79203c1d91e2641310fb44177b4a9258c58a51415f76c6640fce5539f908b_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_9b6a8484269b41c14c3ee5a2fd5549884d3a58add6c79f571183f55587b8483c = $this->env->getExtension("native_profiler");
        $__internal_9b6a8484269b41c14c3ee5a2fd5549884d3a58add6c79f571183f55587b8483c->enter($__internal_9b6a8484269b41c14c3ee5a2fd5549884d3a58add6c79f571183f55587b8483c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_9b6a8484269b41c14c3ee5a2fd5549884d3a58add6c79f571183f55587b8483c->leave($__internal_9b6a8484269b41c14c3ee5a2fd5549884d3a58add6c79f571183f55587b8483c_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_4d1cca91b0d0cb009667fc651c87d4a754c57631142fae6325091823fb2eb5f3 = $this->env->getExtension("native_profiler");
        $__internal_4d1cca91b0d0cb009667fc651c87d4a754c57631142fae6325091823fb2eb5f3->enter($__internal_4d1cca91b0d0cb009667fc651c87d4a754c57631142fae6325091823fb2eb5f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_4d1cca91b0d0cb009667fc651c87d4a754c57631142fae6325091823fb2eb5f3->leave($__internal_4d1cca91b0d0cb009667fc651c87d4a754c57631142fae6325091823fb2eb5f3_prof);

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
