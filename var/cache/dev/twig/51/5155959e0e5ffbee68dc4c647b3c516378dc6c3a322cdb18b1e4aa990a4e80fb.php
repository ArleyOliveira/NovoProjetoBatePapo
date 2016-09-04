<?php

/* BatePapoBaseBundle::Layout/layout.html.twig */
class __TwigTemplate_efe38cea497e17776a6ad85d8d0ee8c43ba2344e2b92de5b13ece20988881ddb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_645613fcaa70994c0c4b1547ad5647b69edc2e5739506d6941ab4ba27ce697c3 = $this->env->getExtension("native_profiler");
        $__internal_645613fcaa70994c0c4b1547ad5647b69edc2e5739506d6941ab4ba27ce697c3->enter($__internal_645613fcaa70994c0c4b1547ad5647b69edc2e5739506d6941ab4ba27ce697c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BatePapoBaseBundle::Layout/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"pt_BR\">
<head>
    <title>Bate-papo ";
        // line 4
        if (array_key_exists("page_title", $context)) {
            echo " | ";
            echo twig_escape_filter($this->env, (isset($context["page_title"]) ? $context["page_title"] : $this->getContext($context, "page_title")), "html", null, true);
            echo " ";
        }
        echo "</title>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1\"/>

    <link rel=\"shortcut icon\" type=\"image/png\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/batepapobase/imagens/favicon.ico"), "html", null, true);
        echo "\">

    <link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/batepapobase/libs/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\"
          type=\"text/css\"/>
    <link rel=\"stylesheet\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/batepapobase/libs/metisMenu/metisMenu.min.css"), "html", null, true);
        echo "\" type=\"text/css\"/>
    <link rel=\"stylesheet\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/batepapobase/libs/template/css/sb-admin-2.css"), "html", null, true);
        echo "\" type=\"text/css\"/>
    <link rel=\"stylesheet\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/batepapobase/libs/morrisjs/morris.css"), "html", null, true);
        echo "\" type=\"text/css\"/>
    <link rel=\"stylesheet\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/batepapobase/libs/font-awesome/css/font-awesome.min.css"), "html", null, true);
        echo "\"
          type=\"text/css\"/>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src=\"https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js\"></script>
    <script src=\"https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js\"></script>
    <![endif]-->
</head>
<body>

    <div id=\"wrapper\">
        ";
        // line 32
        $this->loadTemplate("BatePapoBaseBundle::Layout/default.html.twig", "BatePapoBaseBundle::Layout/layout.html.twig", 32)->display($context);
        // line 33
        echo "
        ";
        // line 34
        $this->displayBlock('body', $context, $blocks);
        // line 37
        echo "    </div>

<script src=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/batepapobase/libs/jquery/jquery.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/batepapobase/libs/bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/batepapobase/libs/metisMenu/metisMenu.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/batepapobase/libs/raphael/raphael.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/batepapobase/libs/morrisjs/morris.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/batepapobase/libs/data/morris-data.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/batepapobase/libs/template/js/sb-admin-2.js"), "html", null, true);
        echo "\"></script>
<script>
    var baseUrl = window.location.origin;
</script>

";
        // line 50
        $this->displayBlock('javascripts', $context, $blocks);
        // line 51
        echo "
</body>
</html>
";
        
        $__internal_645613fcaa70994c0c4b1547ad5647b69edc2e5739506d6941ab4ba27ce697c3->leave($__internal_645613fcaa70994c0c4b1547ad5647b69edc2e5739506d6941ab4ba27ce697c3_prof);

    }

    // line 34
    public function block_body($context, array $blocks = array())
    {
        $__internal_6fffb8a9b96997b363c30c77e38f2aad08e640b9e834d6ccf647e0fce9f890e0 = $this->env->getExtension("native_profiler");
        $__internal_6fffb8a9b96997b363c30c77e38f2aad08e640b9e834d6ccf647e0fce9f890e0->enter($__internal_6fffb8a9b96997b363c30c77e38f2aad08e640b9e834d6ccf647e0fce9f890e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 35
        echo "
        ";
        
        $__internal_6fffb8a9b96997b363c30c77e38f2aad08e640b9e834d6ccf647e0fce9f890e0->leave($__internal_6fffb8a9b96997b363c30c77e38f2aad08e640b9e834d6ccf647e0fce9f890e0_prof);

    }

    // line 50
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_90410d18461fddfc6235fa2b278f34155fd0c48975cb7635dd516e31d7d37705 = $this->env->getExtension("native_profiler");
        $__internal_90410d18461fddfc6235fa2b278f34155fd0c48975cb7635dd516e31d7d37705->enter($__internal_90410d18461fddfc6235fa2b278f34155fd0c48975cb7635dd516e31d7d37705_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_90410d18461fddfc6235fa2b278f34155fd0c48975cb7635dd516e31d7d37705->leave($__internal_90410d18461fddfc6235fa2b278f34155fd0c48975cb7635dd516e31d7d37705_prof);

    }

    public function getTemplateName()
    {
        return "BatePapoBaseBundle::Layout/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  151 => 50,  143 => 35,  137 => 34,  127 => 51,  125 => 50,  117 => 45,  113 => 44,  109 => 43,  105 => 42,  101 => 41,  97 => 40,  93 => 39,  89 => 37,  87 => 34,  84 => 33,  82 => 32,  66 => 19,  62 => 18,  58 => 17,  54 => 16,  49 => 14,  44 => 12,  29 => 4,  24 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html lang="pt_BR">*/
/* <head>*/
/*     <title>Bate-papo {% if page_title is defined %} | {{ page_title }} {% endif %}</title>*/
/*     <meta charset="utf-8">*/
/*     <meta http-equiv="X-UA-Compatible" content="IE=edge">*/
/*     <meta name="viewport" content="width=device-width, initial-scale=1">*/
/*     <meta name="description" content="">*/
/*     <meta name="author" content="">*/
/*     <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>*/
/* */
/*     <link rel="shortcut icon" type="image/png" href="{{ asset('bundles/batepapobase/imagens/favicon.ico') }}">*/
/* */
/*     <link rel="stylesheet" href="{{ asset('bundles/batepapobase/libs/bootstrap/css/bootstrap.min.css') }}"*/
/*           type="text/css"/>*/
/*     <link rel="stylesheet" href="{{ asset('bundles/batepapobase/libs/metisMenu/metisMenu.min.css') }}" type="text/css"/>*/
/*     <link rel="stylesheet" href="{{ asset('bundles/batepapobase/libs/template/css/sb-admin-2.css') }}" type="text/css"/>*/
/*     <link rel="stylesheet" href="{{ asset('bundles/batepapobase/libs/morrisjs/morris.css') }}" type="text/css"/>*/
/*     <link rel="stylesheet" href="{{ asset('bundles/batepapobase/libs/font-awesome/css/font-awesome.min.css') }}"*/
/*           type="text/css"/>*/
/* */
/*     <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->*/
/*     <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->*/
/*     <!--[if lt IE 9]>*/
/*     <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>*/
/*     <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>*/
/*     <![endif]-->*/
/* </head>*/
/* <body>*/
/* */
/*     <div id="wrapper">*/
/*         {% include 'BatePapoBaseBundle::Layout/default.html.twig' %}*/
/* */
/*         {% block body %}*/
/* */
/*         {% endblock %}*/
/*     </div>*/
/* */
/* <script src="{{ asset('bundles/batepapobase/libs/jquery/jquery.js') }}"></script>*/
/* <script src="{{ asset('bundles/batepapobase/libs/bootstrap/js/bootstrap.min.js') }}"></script>*/
/* <script src="{{ asset('bundles/batepapobase/libs/metisMenu/metisMenu.min.js') }}"></script>*/
/* <script src="{{ asset('bundles/batepapobase/libs/raphael/raphael.min.js') }}"></script>*/
/* <script src="{{ asset('bundles/batepapobase/libs/morrisjs/morris.min.js') }}"></script>*/
/* <script src="{{ asset('bundles/batepapobase/libs/data/morris-data.js') }}"></script>*/
/* <script src="{{ asset('bundles/batepapobase/libs/template/js/sb-admin-2.js') }}"></script>*/
/* <script>*/
/*     var baseUrl = window.location.origin;*/
/* </script>*/
/* */
/* {% block javascripts %}{% endblock %}*/
/* */
/* </body>*/
/* </html>*/
/* */
