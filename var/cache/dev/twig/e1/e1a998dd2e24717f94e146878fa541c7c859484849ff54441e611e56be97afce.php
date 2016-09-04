<?php

/* BatePapoBaseBundle::Layout/default.html.twig */
class __TwigTemplate_dedc042883ab368543726550c3988a4c9186edf5c85a7012dee9e77162b8e71a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_18d200964ee502ca621bda16cb74aacac8f8a514ea36c43b8f42cf0322d26267 = $this->env->getExtension("native_profiler");
        $__internal_18d200964ee502ca621bda16cb74aacac8f8a514ea36c43b8f42cf0322d26267->enter($__internal_18d200964ee502ca621bda16cb74aacac8f8a514ea36c43b8f42cf0322d26267_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BatePapoBaseBundle::Layout/default.html.twig"));

        // line 1
        echo "<!-- Navigation -->
<nav class=\"navbar navbar-inverse navbar-static-top\" role=\"navigation\" style=\"margin-bottom: 0\">
    <div class=\"navbar-header\">
        <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
            <span class=\"sr-only\">Toggle navigation</span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
        </button>
        <a class=\"navbar-brand\" href=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("default_index");
        echo "\"><i class=\"fa fa-comments fa-2x fa-lg\"></i> Bate-papo </a>
    </div>
    <!-- /.navbar-header -->

    <ul class=\"nav navbar-top-links navbar-right\">
        <li class=\"dropdown\">
            <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
                <i class=\"fa fa-info-circle fa-lg\"></i> <i class=\"fa fa-caret-down\"></i>
            </a>
            <ul class=\"dropdown-menu dropdown-messages\">
                <li>
                    <a href=\"#\">
                        <div>
                            <strong>Sobre</strong>
                                    <span class=\"pull-right text-muted\">
                                        <em></em>
                                    </span>
                        </div>
                        <div>Conheça nosso projeto do Bate-papo</div>
                    </a>
                </li>
                <li class=\"divider\"></li>
                <li>
                    <a href=\"#\">
                        <div>
                            <strong>Organização</strong>
                                    <span class=\"pull-right text-muted\">
                                        <em></em>
                                    </span>
                        </div>
                        <div>Veja quem são os nossos colaboradores</div>
                    </a>
                </li>
                <li class=\"divider\"></li>
                <li>
                    <a href=\"#\">
                        <div>
                            <strong>Junte-se a nós</strong>
                                    <span class=\"pull-right text-muted\">
                                        <em></em>
                                    </span>
                        </div>
                        <div>Seja um colaborador do Bate-papo</div>
                    </a>
                </li>
            </ul>
            <!-- /.dropdown-messages -->
        </li>

        <!-- /.dropdown -->
        <li class=\"dropdown\">
            <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
                <i class=\"fa fa-bell fa-fw\"></i> <i class=\"fa fa-caret-down\"></i>
            </a>
            <ul class=\"dropdown-menu dropdown-alerts\">
                <li>
                    <a href=\"#\">
                        <div>
                            <i class=\"fa fa-comment fa-fw\"></i> New Comment
                            <span class=\"pull-right text-muted small\">4 minutes ago</span>
                        </div>
                    </a>
                </li>
                <li class=\"divider\"></li>
                <li>
                    <a href=\"#\">
                        <div>
                            <i class=\"fa fa-twitter fa-fw\"></i> 3 New Followers
                            <span class=\"pull-right text-muted small\">12 minutes ago</span>
                        </div>
                    </a>
                </li>
                <li class=\"divider\"></li>
                <li>
                    <a href=\"#\">
                        <div>
                            <i class=\"fa fa-envelope fa-fw\"></i> Message Sent
                            <span class=\"pull-right text-muted small\">4 minutes ago</span>
                        </div>
                    </a>
                </li>
                <li class=\"divider\"></li>
                <li>
                    <a href=\"#\">
                        <div>
                            <i class=\"fa fa-tasks fa-fw\"></i> New Task
                            <span class=\"pull-right text-muted small\">4 minutes ago</span>
                        </div>
                    </a>
                </li>
                <li class=\"divider\"></li>
                <li>
                    <a href=\"#\">
                        <div>
                            <i class=\"fa fa-upload fa-fw\"></i> Server Rebooted
                            <span class=\"pull-right text-muted small\">4 minutes ago</span>
                        </div>
                    </a>
                </li>
                <li class=\"divider\"></li>
                <li>
                    <a class=\"text-center\" href=\"#\">
                        <strong>See All Alerts</strong>
                        <i class=\"fa fa-angle-right\"></i>
                    </a>
                </li>
            </ul>
            <!-- /.dropdown-alerts -->
        </li>
        <!-- /.dropdown -->
        <li class=\"dropdown\">
            <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
                <i class=\"fa fa-user fa-fw\"></i> <i class=\"fa fa-caret-down\"></i>
            </a>
            <ul class=\"dropdown-menu dropdown-user\">
                <li><a href=\"#\"><i class=\"fa fa-user fa-fw\"></i> Perfil do Usuário</a>
                </li>
                <li><a href=\"#\"><i class=\"fa fa-gear fa-fw\"></i> Configurações</a>
                </li>
                <li class=\"divider\"></li>
                <li><a href=\"login.html\"><i class=\"fa fa-sign-out fa-fw\"></i> Sair</a>
                </li>
            </ul>
            <!-- /.dropdown-user -->
        </li>
        <!-- /.dropdown -->
    </ul>
    <!-- /.navbar-top-links -->

    <div class=\"navbar-default sidebar\" role=\"navigation\">
        <div class=\"sidebar-nav navbar-collapse\">
            <ul class=\"nav\" id=\"side-menu\">
                <li class=\"sidebar-search\">
                    <div class=\"input-group custom-search-form\">
                        <input type=\"text\" class=\"form-control\" placeholder=\"Pesquisar...\">
                                <span class=\"input-group-btn\">
                                <button class=\"btn btn-default\" type=\"button\">
                                    <i class=\"fa fa-search\"></i>
                                </button>
                            </span>
                    </div>
                    <!-- /input-group -->
                </li>
                <li>
                    <a href=\"";
        // line 154
        echo $this->env->getExtension('routing')->getPath("default_index");
        echo "\"><i class=\"fa fa-home fa-lg\" aria-hidden=\"true\"></i></i> Inicio</a>
                </li>
                <li>
                    <a href=\"tables.html\"><i class=\"fa fa-newspaper-o fa-lg\" aria-hidden=\"true\"></i> Notícias</a>
                </li>
                <li>
                    <a href=\"#\"><i class=\"fa fa-calendar-o fa-lg\" aria-hidden=\"true\"></i> Eventos<span class=\"fa arrow\"></span></a>
                    <ul class=\"nav nav-second-level\">
                        <li>
                            <a href=\"#\">Cursos</a>
                        </li>
                        <li>
                            <a href=\"#\">Palestras</a>
                        </li>
                    </ul>
                    <!-- /.nav-second-level -->
                </li>

                <li>
                    <a href=\"forms.html\"><i class=\"fa fa-users fa-lg\" aria-hidden=\"true\"></i> Fóruns <span class=\"fa arrow\"></span></a>
                    <ul class=\"nav nav-second-level\">
                        <li>
                            <a href=\"#\">PHP</a>
                        </li>
                        <li>
                            <a href=\"#\">Java</a>
                        </li>
                        <li>
                            <a href=\"#\">Python</a>
                        </li>
                        <li>
                            <a href=\"#\">Arduino</a>
                        </li>
                        <li>
                            <a href=\"#\"> Jogos</a>
                        </li>
                    </ul>
                    <!-- /.nav-second-level -->
                </li>
                <li>
                    <a href=\"#\"><i class=\"fa fa-sitemap fa-fw\"></i> Outros<span class=\"fa arrow\"></span></a>
                    <ul class=\"nav nav-second-level\">
                        <li>
                            <a href=\"#\">Second Level Item</a>
                        </li>
                        <li>
                            <a href=\"#\">Second Level Item</a>
                        </li>
                        <li>
                            <a href=\"#\">Third Level <span class=\"fa arrow\"></span></a>
                            <ul class=\"nav nav-third-level\">
                                <li>
                                    <a href=\"#\">Third Level Item</a>
                                </li>
                                <li>
                                    <a href=\"#\">Third Level Item</a>
                                </li>
                                <li>
                                    <a href=\"#\">Third Level Item</a>
                                </li>
                                <li>
                                    <a href=\"#\">Third Level Item</a>
                                </li>
                            </ul>
                            <!-- /.nav-third-level -->
                        </li>
                    </ul>
                    <!-- /.nav-second-level -->
                </li>
                <li>
                    <a href=\"#\"><i class=\"fa fa-files-o fa-fw\"></i> Sample Pages<span class=\"fa arrow\"></span></a>
                    <ul class=\"nav nav-second-level\">
                        <li>
                            <a href=\"blank.html\">Blank Page</a>
                        </li>
                        <li>
                            <a href=\"login.html\">Login Page</a>
                        </li>
                    </ul>
                    <!-- /.nav-second-level -->
                </li>
            </ul>
        </div>
        <!-- /.sidebar-collapse -->
    </div>
    <!-- /.navbar-static-side -->
</nav>";
        
        $__internal_18d200964ee502ca621bda16cb74aacac8f8a514ea36c43b8f42cf0322d26267->leave($__internal_18d200964ee502ca621bda16cb74aacac8f8a514ea36c43b8f42cf0322d26267_prof);

    }

    public function getTemplateName()
    {
        return "BatePapoBaseBundle::Layout/default.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  180 => 154,  33 => 10,  22 => 1,);
    }
}
/* <!-- Navigation -->*/
/* <nav class="navbar navbar-inverse navbar-static-top" role="navigation" style="margin-bottom: 0">*/
/*     <div class="navbar-header">*/
/*         <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">*/
/*             <span class="sr-only">Toggle navigation</span>*/
/*             <span class="icon-bar"></span>*/
/*             <span class="icon-bar"></span>*/
/*             <span class="icon-bar"></span>*/
/*         </button>*/
/*         <a class="navbar-brand" href="{{ path('default_index') }}"><i class="fa fa-comments fa-2x fa-lg"></i> Bate-papo </a>*/
/*     </div>*/
/*     <!-- /.navbar-header -->*/
/* */
/*     <ul class="nav navbar-top-links navbar-right">*/
/*         <li class="dropdown">*/
/*             <a class="dropdown-toggle" data-toggle="dropdown" href="#">*/
/*                 <i class="fa fa-info-circle fa-lg"></i> <i class="fa fa-caret-down"></i>*/
/*             </a>*/
/*             <ul class="dropdown-menu dropdown-messages">*/
/*                 <li>*/
/*                     <a href="#">*/
/*                         <div>*/
/*                             <strong>Sobre</strong>*/
/*                                     <span class="pull-right text-muted">*/
/*                                         <em></em>*/
/*                                     </span>*/
/*                         </div>*/
/*                         <div>Conheça nosso projeto do Bate-papo</div>*/
/*                     </a>*/
/*                 </li>*/
/*                 <li class="divider"></li>*/
/*                 <li>*/
/*                     <a href="#">*/
/*                         <div>*/
/*                             <strong>Organização</strong>*/
/*                                     <span class="pull-right text-muted">*/
/*                                         <em></em>*/
/*                                     </span>*/
/*                         </div>*/
/*                         <div>Veja quem são os nossos colaboradores</div>*/
/*                     </a>*/
/*                 </li>*/
/*                 <li class="divider"></li>*/
/*                 <li>*/
/*                     <a href="#">*/
/*                         <div>*/
/*                             <strong>Junte-se a nós</strong>*/
/*                                     <span class="pull-right text-muted">*/
/*                                         <em></em>*/
/*                                     </span>*/
/*                         </div>*/
/*                         <div>Seja um colaborador do Bate-papo</div>*/
/*                     </a>*/
/*                 </li>*/
/*             </ul>*/
/*             <!-- /.dropdown-messages -->*/
/*         </li>*/
/* */
/*         <!-- /.dropdown -->*/
/*         <li class="dropdown">*/
/*             <a class="dropdown-toggle" data-toggle="dropdown" href="#">*/
/*                 <i class="fa fa-bell fa-fw"></i> <i class="fa fa-caret-down"></i>*/
/*             </a>*/
/*             <ul class="dropdown-menu dropdown-alerts">*/
/*                 <li>*/
/*                     <a href="#">*/
/*                         <div>*/
/*                             <i class="fa fa-comment fa-fw"></i> New Comment*/
/*                             <span class="pull-right text-muted small">4 minutes ago</span>*/
/*                         </div>*/
/*                     </a>*/
/*                 </li>*/
/*                 <li class="divider"></li>*/
/*                 <li>*/
/*                     <a href="#">*/
/*                         <div>*/
/*                             <i class="fa fa-twitter fa-fw"></i> 3 New Followers*/
/*                             <span class="pull-right text-muted small">12 minutes ago</span>*/
/*                         </div>*/
/*                     </a>*/
/*                 </li>*/
/*                 <li class="divider"></li>*/
/*                 <li>*/
/*                     <a href="#">*/
/*                         <div>*/
/*                             <i class="fa fa-envelope fa-fw"></i> Message Sent*/
/*                             <span class="pull-right text-muted small">4 minutes ago</span>*/
/*                         </div>*/
/*                     </a>*/
/*                 </li>*/
/*                 <li class="divider"></li>*/
/*                 <li>*/
/*                     <a href="#">*/
/*                         <div>*/
/*                             <i class="fa fa-tasks fa-fw"></i> New Task*/
/*                             <span class="pull-right text-muted small">4 minutes ago</span>*/
/*                         </div>*/
/*                     </a>*/
/*                 </li>*/
/*                 <li class="divider"></li>*/
/*                 <li>*/
/*                     <a href="#">*/
/*                         <div>*/
/*                             <i class="fa fa-upload fa-fw"></i> Server Rebooted*/
/*                             <span class="pull-right text-muted small">4 minutes ago</span>*/
/*                         </div>*/
/*                     </a>*/
/*                 </li>*/
/*                 <li class="divider"></li>*/
/*                 <li>*/
/*                     <a class="text-center" href="#">*/
/*                         <strong>See All Alerts</strong>*/
/*                         <i class="fa fa-angle-right"></i>*/
/*                     </a>*/
/*                 </li>*/
/*             </ul>*/
/*             <!-- /.dropdown-alerts -->*/
/*         </li>*/
/*         <!-- /.dropdown -->*/
/*         <li class="dropdown">*/
/*             <a class="dropdown-toggle" data-toggle="dropdown" href="#">*/
/*                 <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>*/
/*             </a>*/
/*             <ul class="dropdown-menu dropdown-user">*/
/*                 <li><a href="#"><i class="fa fa-user fa-fw"></i> Perfil do Usuário</a>*/
/*                 </li>*/
/*                 <li><a href="#"><i class="fa fa-gear fa-fw"></i> Configurações</a>*/
/*                 </li>*/
/*                 <li class="divider"></li>*/
/*                 <li><a href="login.html"><i class="fa fa-sign-out fa-fw"></i> Sair</a>*/
/*                 </li>*/
/*             </ul>*/
/*             <!-- /.dropdown-user -->*/
/*         </li>*/
/*         <!-- /.dropdown -->*/
/*     </ul>*/
/*     <!-- /.navbar-top-links -->*/
/* */
/*     <div class="navbar-default sidebar" role="navigation">*/
/*         <div class="sidebar-nav navbar-collapse">*/
/*             <ul class="nav" id="side-menu">*/
/*                 <li class="sidebar-search">*/
/*                     <div class="input-group custom-search-form">*/
/*                         <input type="text" class="form-control" placeholder="Pesquisar...">*/
/*                                 <span class="input-group-btn">*/
/*                                 <button class="btn btn-default" type="button">*/
/*                                     <i class="fa fa-search"></i>*/
/*                                 </button>*/
/*                             </span>*/
/*                     </div>*/
/*                     <!-- /input-group -->*/
/*                 </li>*/
/*                 <li>*/
/*                     <a href="{{ path('default_index') }}"><i class="fa fa-home fa-lg" aria-hidden="true"></i></i> Inicio</a>*/
/*                 </li>*/
/*                 <li>*/
/*                     <a href="tables.html"><i class="fa fa-newspaper-o fa-lg" aria-hidden="true"></i> Notícias</a>*/
/*                 </li>*/
/*                 <li>*/
/*                     <a href="#"><i class="fa fa-calendar-o fa-lg" aria-hidden="true"></i> Eventos<span class="fa arrow"></span></a>*/
/*                     <ul class="nav nav-second-level">*/
/*                         <li>*/
/*                             <a href="#">Cursos</a>*/
/*                         </li>*/
/*                         <li>*/
/*                             <a href="#">Palestras</a>*/
/*                         </li>*/
/*                     </ul>*/
/*                     <!-- /.nav-second-level -->*/
/*                 </li>*/
/* */
/*                 <li>*/
/*                     <a href="forms.html"><i class="fa fa-users fa-lg" aria-hidden="true"></i> Fóruns <span class="fa arrow"></span></a>*/
/*                     <ul class="nav nav-second-level">*/
/*                         <li>*/
/*                             <a href="#">PHP</a>*/
/*                         </li>*/
/*                         <li>*/
/*                             <a href="#">Java</a>*/
/*                         </li>*/
/*                         <li>*/
/*                             <a href="#">Python</a>*/
/*                         </li>*/
/*                         <li>*/
/*                             <a href="#">Arduino</a>*/
/*                         </li>*/
/*                         <li>*/
/*                             <a href="#"> Jogos</a>*/
/*                         </li>*/
/*                     </ul>*/
/*                     <!-- /.nav-second-level -->*/
/*                 </li>*/
/*                 <li>*/
/*                     <a href="#"><i class="fa fa-sitemap fa-fw"></i> Outros<span class="fa arrow"></span></a>*/
/*                     <ul class="nav nav-second-level">*/
/*                         <li>*/
/*                             <a href="#">Second Level Item</a>*/
/*                         </li>*/
/*                         <li>*/
/*                             <a href="#">Second Level Item</a>*/
/*                         </li>*/
/*                         <li>*/
/*                             <a href="#">Third Level <span class="fa arrow"></span></a>*/
/*                             <ul class="nav nav-third-level">*/
/*                                 <li>*/
/*                                     <a href="#">Third Level Item</a>*/
/*                                 </li>*/
/*                                 <li>*/
/*                                     <a href="#">Third Level Item</a>*/
/*                                 </li>*/
/*                                 <li>*/
/*                                     <a href="#">Third Level Item</a>*/
/*                                 </li>*/
/*                                 <li>*/
/*                                     <a href="#">Third Level Item</a>*/
/*                                 </li>*/
/*                             </ul>*/
/*                             <!-- /.nav-third-level -->*/
/*                         </li>*/
/*                     </ul>*/
/*                     <!-- /.nav-second-level -->*/
/*                 </li>*/
/*                 <li>*/
/*                     <a href="#"><i class="fa fa-files-o fa-fw"></i> Sample Pages<span class="fa arrow"></span></a>*/
/*                     <ul class="nav nav-second-level">*/
/*                         <li>*/
/*                             <a href="blank.html">Blank Page</a>*/
/*                         </li>*/
/*                         <li>*/
/*                             <a href="login.html">Login Page</a>*/
/*                         </li>*/
/*                     </ul>*/
/*                     <!-- /.nav-second-level -->*/
/*                 </li>*/
/*             </ul>*/
/*         </div>*/
/*         <!-- /.sidebar-collapse -->*/
/*     </div>*/
/*     <!-- /.navbar-static-side -->*/
/* </nav>*/
