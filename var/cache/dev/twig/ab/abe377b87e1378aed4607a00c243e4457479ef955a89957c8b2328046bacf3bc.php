<?php

/* ::base.html.twig */
class __TwigTemplate_720d83c8b386a40d4f262a77aa6a6faad6428e4a66b00201ae6cdc786bf2d9a6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_056adf4c02c5a0c28e13b39fb68105f58ab4253244259a952d8522257fdf09fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_056adf4c02c5a0c28e13b39fb68105f58ab4253244259a952d8522257fdf09fa->enter($__internal_056adf4c02c5a0c28e13b39fb68105f58ab4253244259a952d8522257fdf09fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no\"> 
        <title>";
        // line 6
        if (array_key_exists("page_title", $context)) {
            echo " ";
            echo twig_escape_filter($this->env, (isset($context["page_title"]) ? $context["page_title"] : $this->getContext($context, "page_title")), "html", null, true);
            echo " ";
        } else {
            echo "Unad MED 2014  V2";
        }
        echo "</title>
        ";
        // line 7
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 23
        echo "
        <!-- FAVICONS -->
        <link rel=\"shortcut icon\" href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/favicon/favicon.ico"), "html", null, true);
        echo "\" type=\"image/x-icon\">     
        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/favicon/favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body class=\"fixed-header smart-style-3\">
        <!-- possible classes: minified, fixed-ribbon, fixed-header, fixed-width-->
        <!-- HEADER -->
        <header id=\"header\">
            <div id=\"logo-group\">

                <!-- PLACE YOUR LOGO HERE -->
                <span id=\"logo\"> <img src=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/unad_2013.png"), "html", null, true);
        echo "\" alt=\"SmartAdmin\"> </span>
                <!-- END LOGO PLACEHOLDER -->

                <!-- Note: The activity badge color changes when clicked and resets the number to 0
                Suggestion: You may want to set a flag when this happens to tick off all checked messages / notifications -->
                <span id=\"activity\" class=\"activity-dropdown\"> <i class=\"fa fa-user\"></i> <b class=\"badge\"> 0 </b> </span>

                <!-- AJAX-DROPDOWN : control this dropdown height, look and feel from the LESS variable file -->
                <div class=\"ajax-dropdown\">

                    <!-- the ID links are fetched via AJAX to the ajax container \"ajax-notifications\" -->
                    <div class=\"btn-group btn-group-justified\" data-toggle=\"buttons\">
                        <label class=\"btn btn-default\">
                            <input type=\"radio\" name=\"activity\" id=\"";
        // line 48
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("home_user_info");
        echo "\">
                            Usuario</label>
                        <label class=\"btn btn-default\">
                            <input type=\"radio\" name=\"activity\" id=\"";
        // line 51
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("home_user_info");
        echo "\">
                            Pendientes</label>
                        <label class=\"btn btn-default\">
                            <input type=\"radio\" name=\"activity\" id=\"";
        // line 54
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("home_user_info");
        echo "\">
                            Mensajes</label>
                    </div>

                    <!-- notification content -->
                    <div class=\"ajax-notifications custom-scroll\">

                        <div class=\"alert alert-transparent\">
                            <h4>Selecione una opción para ver mas información</h4>
                            This blank page message helps protect your privacy, or you can show the first message here automatically.
                        </div>

                        <i class=\"fa fa-lock fa-4x fa-border\"></i>

                    </div>
                    <!-- end notification content -->

                    <!-- footer: refresh area -->
                    <span> 
                        <button type=\"button\" data-loading-text=\"<i class='fa fa-refresh fa-spin'></i> Loading...\" class=\"btn btn-xs btn-default pull-right\">
                            <i class=\"fa fa-refresh\"></i>
                        </button> </span>
                    <!-- end footer -->

                </div>
                <!-- END AJAX-DROPDOWN -->
            </div>

            <!-- pulled right: nav area -->
            <div class=\"pull-right\">

                <!-- collapse menu button -->
                <div id=\"hide-menu\" class=\"btn-header pull-right\">
                    <span> <a href=\"javascript:void(0);\" title=\"Collapse Menu\"><i class=\"fa fa-reorder\"></i></a> </span>
                </div>
                <!-- end collapse menu -->

                <!-- logout button -->
                <div id=\"logout\" class=\"btn-header transparent pull-right\">
                    <span> <a data-logout-msg=\"Usted puede mejorar su seguridad aún más después de cerrar la sesión al cerrar este navegador\" href=\"";
        // line 93
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("logout");
        echo "\" title=\"Salir\"><i class=\"fa fa-sign-out\"></i></a></span>
                </div>
                <!-- end logout button -->


                <!-- search mobile button (this is hidden till mobile view port) -->
                <div id=\"search-mobile\" class=\"btn-header transparent pull-right\">
                    <span> <a href=\"javascript:void(0)\" title=\"Search\"><i class=\"fa fa-search\"></i></a> </span>
                </div>
                <!-- end search mobile button -->


            </div>
            <!-- end pulled right: nav area -->

        </header>
        <!-- END HEADER -->
        <!-- Left panel : Navigation area -->
        <!-- Note: This width of the aside area can be adjusted through LESS variables -->
        <aside id=\"left-panel\">

            <!-- end user info -->
            <!-- NAVIGATION : This navigation is also responsive
            To make this navigation dynamic please make sure to link the node
            (the reference to the nav > ul) after page load. Or the navigation
            will not initialize.
            -->
            <nav>
                <!-- NOTE: Notice the gaps after each icon usage <i></i>..
                Please note that these links work a bit different than
                traditional hre=\"\" links. See documentation for details.
                -->

                <ul>
                    <li>
                        <a href=\"";
        // line 128
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("home_user_inicio");
        echo "\" title=\"Dashboard\"><i class=\"fa fa-lg fa-fw fa-home\"></i> <span class=\"menu-item-parent\">Inicio</span></a>


                        ";
        // line 131
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_DEC")) {
            // line 132
            echo "                            <ul style=\"display: block;\">
                                <li>
                                    <a href=\"";
            // line 134
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("escuela_info");
            echo "\"><i class=\"fa fa-book\"></i> Mi Escuela</a>      
                                </li>    
                            </ul>
                        <li>
                            <a href=\"#\"><i class=\"fa fa-lg fa-fw fa-desktop\"></i> <span class=\"menu-item-parent\">Instrumentos</span></a>
                            <ul style=\"display: block;\">
                                <li>
                                </li>
                                <li>
                                    <a href=\"";
            // line 143
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("aval_porescuela");
            echo "\"><i class=\"fa fa-book\"></i> Planes de Gestión</a>
                                </li> 
                                <li>
                                    <a href=\"";
            // line 146
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("planmejoramiento");
            echo "\"><i class=\"fa fa-book\"></i> Planes de Mejoramiento</a>
                                </li>
                                <li>
                                    <a href=\"";
            // line 149
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("decano_coevallider");
            echo "\"><i class=\"fa fa-book\"></i> Evaluación a Lideres</a>
                                </li>

                            </ul>

                        ";
        }
        // line 155
        echo "
                        ";
        // line 156
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_SECA")) {
            // line 157
            echo "                            <ul style=\"display: block;\">
                                <li>
                                    <a href=\"";
            // line 159
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("escuela_info");
            echo "\"><i class=\"fa fa-book\"></i> Mi Escuela</a>      
                                </li>    
                            </ul>

                        ";
        }
        // line 163
        echo "     


                        ";
        // line 166
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_DOC")) {
            echo "  
                        <li>
                            <a href=\"#\"><i class=\"fa fa-lg fa-fw fa-bar-chart-o\"></i> <span class=\"menu-item-parent\">MED</span></a>
                            <ul style=\"display: block;\">
                                <li>
                                    <a href=\"";
            // line 171
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("home_user_inicio");
            echo "\">Periodo Actual</a>                              
                                    <a href=\"";
            // line 172
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("archivo_docente");
            echo "\">Archivo</a>
                                </li>
                            </ul>
                        </li>     
                    ";
        }
        // line 177
        echo "

                    ";
        // line 179
        if (($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN") || $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMON"))) {
            // line 180
            echo "                        <li>
                            <a href=\"#\"><i class=\"fa fa-lg fa-fw fa-bar-chart-o\"></i> <span class=\"menu-item-parent\">Unad</span></a>
                            <ul>
                                <li>
                                    <a href=\"";
            // line 184
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("escuela");
            echo "\">Escuelas</a>
                                </li>
                                <li>
                                    <a href=\"";
            // line 187
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("programa");
            echo "\">Programas</a>
                                </li>
                                <li>
                                    <a href=\"";
            // line 190
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("zona");
            echo "\">Zonas y Centros</a>
                                </li>
                                <li>
                                    <a href=\"";
            // line 193
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admon_user");
            echo "\">Buscar Usuario</a>
                                </li>
                                <li>
                                    <a href=\"";
            // line 196
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("docente_home", array("periodo" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "periodoe"), "method"))), "html", null, true);
            echo "\">Docentes</a>
                                </li>
                                <li>
                                    <a href=\"";
            // line 199
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("aval_lista");
            echo "\">Avales</a>
                                </li>
                                <li>
                                    <a href=\"";
            // line 202
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("rolacademico");
            echo "\">Roles y Actividades</a>
                                </li>
                                <li>
                                    <a href=\"";
            // line 205
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("curso");
            echo "\">Cursos</a>
                                </li>
                                <li>
                                    <a href=\"";
            // line 208
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("dofe_index");
            echo "\"><i class=\"fa fa-book\"></i> Evaluaciónes DOFEs</a>
                                </li> 
                            </ul>
                        </li>
                    ";
        }
        // line 213
        echo "
                    ";
        // line 214
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN")) {
            // line 215
            echo "                        <li>
                            <a href=\"#\"><i class=\"fa fa-lg fa-fw fa-bar-chart-o\"></i> <span class=\"menu-item-parent\">Admin</span></a>
                            <ul>
                                <li>
                                    <a href=\"";
            // line 219
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_instrumento");
            echo "\">Instrumentos</a>
                                </li>
                            </ul>
                        </li>
                    ";
        }
        // line 224
        echo "
                    ";
        // line 225
        if (($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN") && $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMON"))) {
            // line 226
            echo "                        <li>
                            <a href=\"#\"><i class=\"fa fa-lg fa-fw fa-bar-chart-o\"></i> <span class=\"menu-item-parent\">Resultados</span></a>
                            <ul>
                                <li>
                                    <a href=\"";
            // line 230
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("hetero_prom_esc");
            echo "\">Evaluación de Estudiantes</a>
                                </li>
                       
                                <li>
                                    <a href=\"";
            // line 234
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("docente", array("periodo" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "periodoe"), "method"))), "html", null, true);
            echo "\">Consolidado Final</a>
                                </li>

                            </ul>
                        </li>
                    ";
        }
        // line 240
        echo "                    
                   ";
        // line 241
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_DEC")) {
            // line 242
            echo "                        <li>
                            <a href=\"#\"><i class=\"fa fa-lg fa-fw fa-bar-chart-o\"></i> <span class=\"menu-item-parent\">Resultados</span></a>
                            <ul>
                                <li>
                                    <a href=\"";
            // line 246
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("hetero_prom_esc");
            echo "\">Evaluación de Estudiantes</a>
                                </li>
                            </ul>
                        </li>
                    ";
        }
        // line 251
        echo "
                   ";
        // line 252
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_DOFE")) {
            // line 253
            echo "                       
                       <li>
                            <a href=\"#\"><i class=\"fa fa-lg fa-fw fa-desktop\"></i> <span class=\"menu-item-parent\">DOFEs</span></a>
                            <ul style=\"display: block;\">
                                <li>
                                </li>
                                <li>
                                    <a href=\"";
            // line 260
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("dofe_evaluar");
            echo "\"><i class=\"fa fa-book\"></i> Evaluación a DOFEs</a>
                                </li> 
                            </ul>
                       </li>
                        ";
        }
        // line 264
        echo "  

                    ";
        // line 266
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_DIRC")) {
            echo " 
                        <ul style=\"display: block;\">
                            <li>
                                <a href=\"";
            // line 269
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("centro_index");
            echo "\"><i class=\"fa fa-book\"></i> Docentes por Centro</a>
                            </li>  
                        ";
        }
        // line 271
        echo "     

                        ";
        // line 273
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_DIRZ")) {
            echo " 
                            <ul style=\"display: block;\">
                                <li>
                                    <a href=\"";
            // line 276
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("zona_index");
            echo "\"><i class=\"fa fa-book\"></i> Docentes por Zona</a>
                                </li>
                                <li>
                                    <a href=\"";
            // line 279
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("avalplang");
            echo "\"><i class=\"fa fa-book\"></i> Avalar Plan Gestión</a>
                                </li>
                            ";
        }
        // line 281
        echo "  
                        </ul>        
                    </ul>
            </nav>
            <span class=\"minifyme\"> <i class=\"fa fa-arrow-circle-left hit\"></i> </span>
            <span class=\"ribbon-button-alignment\"> <span id=\"refresh\" class=\"btn btn-ribbon\" data-title=\"refresh\"  rel=\"tooltip\" data-placement=\"bottom\" data-original-title=\"<i class='text-warning fa fa-warning'></i> Precaución! Reiniciar consulta\" data-html=\"true\"><i class=\"fa fa-refresh\"></i></span> </span>
        </aside>
        <!-- END NAVIGATION -->

        <!-- MAIN PANEL -->
        <div id=\"main\" role=\"main\">

            <!-- MAIN CONTENT -->
            <div id=\"content\">


                ";
        // line 297
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "error"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 298
            echo "                    <div class=\"alert alert-danger fade in\">
                        <button class=\"close\" data-dismiss=\"alert\">
                            ×
                        </button>
                        <i class=\"fa-fw fa fa-times\"></i>
                        <strong>Error!</strong>  ";
            // line 303
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 306
        echo "
                ";
        // line 307
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "success"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 308
            echo "                    <div class=\"alert alert-success fade in\">
                        <button class=\"close\" data-dismiss=\"alert\">
                            ×
                        </button>
                        <i class=\"fa-fw fa fa-check\"></i>
                        <strong>Hecho!</strong>  ";
            // line 313
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 316
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "warning"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 317
            echo "                    <div class=\"alert alert-warning fade in\">
                        <button class=\"close\" data-dismiss=\"alert\">
                            ×
                        </button>
                        <i class=\"fa-fw fa fa-warning\"></i>
                        <strong>Advertencia!</strong>  ";
            // line 322
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 325
        echo "
                <!-- widget grid -->
                <section id=\"widget-grid\" class=\"\">

                    <!-- row -->
                    <div class=\"row\">
                        ";
        // line 331
        $this->displayBlock('body', $context, $blocks);
        // line 333
        echo "                    </div>\t\t\t
                    <!-- end row -->
                </section>

                <div class=\"modal fade\" data-refresh=\"true\" id=\"myModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
                    <div class=\"modal-dialog modal-lg\">
                        <div class=\"modal-content\">
                        </div></div></div>    

            </div>

            ";
        // line 344
        $this->displayBlock('javascripts', $context, $blocks);
        // line 550
        echo "    </body>
</html>";
        
        $__internal_056adf4c02c5a0c28e13b39fb68105f58ab4253244259a952d8522257fdf09fa->leave($__internal_056adf4c02c5a0c28e13b39fb68105f58ab4253244259a952d8522257fdf09fa_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_1d037777e4e53a4374c263e7012fd6013e7ce7f33d213cf88ad707a61d65e147 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d037777e4e53a4374c263e7012fd6013e7ce7f33d213cf88ad707a61d65e147->enter($__internal_1d037777e4e53a4374c263e7012fd6013e7ce7f33d213cf88ad707a61d65e147_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "::base.html.twig"));

        // line 8
        echo "            <!-- Basic Styles -->
            <link rel=\"stylesheet\" type=\"text/css\" media=\"screen\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo "\">
            <link rel=\"stylesheet\" type=\"text/css\" media=\"screen\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/font-awesome.min.css"), "html", null, true);
        echo "\">
            <!-- SmartAdmin Styles : Please note (smartadmin-production.css) was created using LESS variables -->
            <link rel=\"stylesheet\" type=\"text/css\" media=\"screen\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/smartadmin-production.css"), "html", null, true);
        echo "\">
            <link rel=\"stylesheet\" type=\"text/css\" media=\"screen\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/smartadmin-skins.css"), "html", null, true);
        echo "\">
            <!-- SmartAdmin RTL Support is under construction
            <link rel=\"stylesheet\" type=\"text/css\" media=\"screen\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/smartadmin-rtl.css"), "html", null, true);
        echo "\"> -->
            <!-- We recommend you use \"your_style.css\" to override SmartAdmin
                 specific styles this will also ensure you retrain your customization with each SmartAdmin update.
            <link rel=\"stylesheet\" type=\"text/css\" media=\"screen\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/your_style.css\""), "html", null, true);
        echo "> -->
            <!-- GOOGLE FONT
            <link rel=\"stylesheet\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("http://fonts.googleapis.com/css?family=Open+Sans:400italic,700italic,300,400,700"), "html", null, true);
        echo "\">-->

        ";
        
        $__internal_1d037777e4e53a4374c263e7012fd6013e7ce7f33d213cf88ad707a61d65e147->leave($__internal_1d037777e4e53a4374c263e7012fd6013e7ce7f33d213cf88ad707a61d65e147_prof);

    }

    // line 331
    public function block_body($context, array $blocks = array())
    {
        $__internal_415433f0cf0b0b03baf76d9a2787d27a84c39fc4bdfed10036384369c0f5ad24 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_415433f0cf0b0b03baf76d9a2787d27a84c39fc4bdfed10036384369c0f5ad24->enter($__internal_415433f0cf0b0b03baf76d9a2787d27a84c39fc4bdfed10036384369c0f5ad24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "::base.html.twig"));

        // line 332
        echo "                        ";
        
        $__internal_415433f0cf0b0b03baf76d9a2787d27a84c39fc4bdfed10036384369c0f5ad24->leave($__internal_415433f0cf0b0b03baf76d9a2787d27a84c39fc4bdfed10036384369c0f5ad24_prof);

    }

    // line 344
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_533cc8601c891ff716e079e31f4a7e7080ddb3b2e224360b584486de90fc66c2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_533cc8601c891ff716e079e31f4a7e7080ddb3b2e224360b584486de90fc66c2->enter($__internal_533cc8601c891ff716e079e31f4a7e7080ddb3b2e224360b584486de90fc66c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "::base.html.twig"));

        // line 345
        echo "
                <script src=\"";
        // line 346
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/main.js"), "html", null, true);
        echo "\"></script>
                <!-- END SHORTCUT AREA -->
                <!--================================================== -->
                <!-- PACE LOADER - turn this on if you want ajax loading to show (caution: uses lots of memory on iDevices)-->
                <script data-pace-options='{ \"restartOnRequestAfter\": true }' src=\"";
        // line 350
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/plugin/pace/pace.min.js"), "html", null, true);
        echo "\"></script>

                <!-- Link to Google CDN's jQuery + jQueryUI; fall back to local -->
                <script src=\"";
        // line 353
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/libs/jquery-2.0.2.min.js"), "html", null, true);
        echo "\"></script>
                <script>
                    if (!window.jQuery) {
                        document.write('<script src=\"js/libs/jquery-2.0.2.min.js\"><\\/script>');
                    }
                </script>

                <script src=\"";
        // line 360
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/libs/jquery-ui-1.10.3.min.js"), "html", null, true);
        echo "\"></script>
                <script>
                    if (!window.jQuery.ui) {
                        document.write('<script src=\"js/libs/jquery-ui-1.10.3.min.js\"><\\/script>');
                    }
                </script>

                <!-- JS TOUCH : include this plugin for mobile drag / drop touch events
                <script src=\"js/plugin/jquery-touch/jquery.ui.touch-punch.min.js\"></script> -->

                <!-- BOOTSTRAP JS -->
                <script src=\"";
        // line 371
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap/bootstrap.min.js"), "html", null, true);
        echo "\"></script>

                <!-- CUSTOM NOTIFICATION -->
                <script src=\"";
        // line 374
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/notification/SmartNotification.min.js"), "html", null, true);
        echo "\"></script>

                <!-- JARVIS WIDGETS -->
                <script src=\"";
        // line 377
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/smartwidgets/jarvis.widget.min.js"), "html", null, true);
        echo "\"></script>

                <!-- EASY PIE CHARTS -->
                <script src=\"";
        // line 380
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/plugin/easy-pie-chart/jquery.easy-pie-chart.min.js"), "html", null, true);
        echo "\"></script>

                <!-- SPARKLINES -->
                <script src=\"";
        // line 383
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/plugin/sparkline/jquery.sparkline.min.js"), "html", null, true);
        echo "\"></script>

                <!-- JQUERY VALIDATE -->
                <script src=\"";
        // line 386
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/plugin/jquery-validate/jquery.validate.min.js"), "html", null, true);
        echo "\"></script>

                <!-- JQUERY MASKED INPUT -->
                <script src=\"";
        // line 389
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/plugin/masked-input/jquery.maskedinput.min.js"), "html", null, true);
        echo "\"></script>

                <!-- JQUERY SELECT2 INPUT -->
                <script src=\"";
        // line 392
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/plugin/select2/select2.min.js"), "html", null, true);
        echo "\"></script>

                <!-- JQUERY UI + Bootstrap Slider -->
                <script src=\"";
        // line 395
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/plugin/bootstrap-slider/bootstrap-slider.min.js"), "html", null, true);
        echo "\"></script>

                <!-- browser msie issue fix -->
                <script src=\"";
        // line 398
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/plugin/msie-fix/jquery.mb.browser.min.js"), "html", null, true);
        echo "\"></script>

                <!-- FastClick: For mobile devices -->
                <script src=\"";
        // line 401
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/plugin/fastclick/fastclick.js"), "html", null, true);
        echo "\"></script>

                <!--[if IE 7]>
        
                <h1>Your browser is out of date, please update your browser by going to www.microsoft.com/download</h1>
        
                <![endif]-->

                <!-- MAIN APP JS FILE -->
                <script src=\"";
        // line 410
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/app.js"), "html", null, true);
        echo "\"></script>

                <!-- PAGE RELATED PLUGIN(S) -->
                <script src=\"";
        // line 413
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/plugin/datatables/jquery.dataTables-cust.min.js"), "html", null, true);
        echo "\"></script>
                <script src=\"";
        // line 414
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/plugin/datatables/ColReorder.min.js"), "html", null, true);
        echo "\"></script>
                <script src=\"";
        // line 415
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/plugin/datatables/FixedColumns.min.js"), "html", null, true);
        echo "\"></script>
                <script src=\"";
        // line 416
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/plugin/datatables/ColVis.min.js"), "html", null, true);
        echo "\"></script>
                <script src=\"";
        // line 417
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/plugin/datatables/ZeroClipboard.js"), "html", null, true);
        echo "\"></script>
                <script src=\"";
        // line 418
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/plugin/datatables/media/js/TableTools.min.js"), "html", null, true);
        echo "\"></script>
                <script src=\"";
        // line 419
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/plugin/datatables/DT_bootstrap.js"), "html", null, true);
        echo "\"></script>

                <script type=\"text/javascript\">
                    initAjaxForm();
                    // DO NOT REMOVE : GLOBAL FUNCTIONS!

                    \$(document).ready(function () {

                        pageSetUp();

                        /*
                         * BASIC
                         */
                        \$('#dt_basic').dataTable({
                            \"sPaginationType\": \"bootstrap_full\"
                        });

                        /* END BASIC */

                        /* Add the events etc before DataTables hides a column */
                        \$(\"#datatable_fixed_column thead input\").keyup(function () {
                            oTable.fnFilter(this.value, oTable.oApi._fnVisibleToColumnIndex(oTable.fnSettings(), \$(\"thead input\").index(this)));
                        });

                        \$(\"#datatable_fixed_column thead input\").each(function (i) {
                            this.initVal = this.value;
                        });
                        \$(\"#datatable_fixed_column thead input\").focus(function () {
                            if (this.className == \"search_init\") {
                                this.className = \"\";
                                this.value = \"\";
                            }
                        });
                        \$(\"#datatable_fixed_column thead input\").blur(function (i) {
                            if (this.value == \"\") {
                                this.className = \"search_init\";
                                this.value = this.initVal;
                            }
                        });


                        var oTable = \$('#datatable_fixed_column').dataTable({
                            \"sDom\": \"<'dt-top-row'><'dt-wrapper't><'dt-row dt-bottom-row'<'row'<'col-sm-6'i><'col-sm-6 text-right'p>>\",
                            //\"sDom\" : \"t<'row dt-wrapper'<'col-sm-6'i><'dt-row dt-bottom-row'<'row'<'col-sm-6'i><'col-sm-6 text-right'>>\",
                            \"oLanguage\": {
                                \"sSearch\": \"Search all columns:\"
                            },
                            \"bSortCellsTop\": true
                        });



                        /*
                         * COL ORDER
                         */
                        \$('#datatable_col_reorder').dataTable({
                            \"sPaginationType\": \"bootstrap\",
                            \"sDom\": \"R<'dt-top-row'Clf>r<'dt-wrapper't><'dt-row dt-bottom-row'<'row'<'col-sm-6'i><'col-sm-6 text-right'p>>\",
                            \"fnInitComplete\": function (oSettings, json) {
                                \$('.ColVis_Button').addClass('btn btn-default btn-sm').html('Columns <i class=\"icon-arrow-down\"></i>');
                            }
                        });

                        /* END COL ORDER */

                        /* TABLE TOOLS */
                        \$('#datatable_tabletools').dataTable({
                            \"sDom\": \"<'dt-top-row'Tlf>r<'dt-wrapper't><'dt-row dt-bottom-row'<'row'<'col-sm-6'i><'col-sm-6 text-right'p>>\",
                            \"oTableTools\": {
                                \"aButtons\": [\"copy\", \"print\", {
                                        \"sExtends\": \"collection\",
                                        \"sButtonText\": 'Save <span class=\"caret\" />',
                                        \"aButtons\": [\"csv\", \"xls\", \"pdf\"]
                                    }],
                                \"sSwfPath\": \"/js/plugin/datatables/media/swf/copy_csv_xls_pdf.swf\"
                            },
                            \"fnInitComplete\": function (oSettings, json) {
                                \$(this).closest('#dt_table_tools_wrapper').find('.DTTT.btn-group').addClass('table_tools_group').children('a.btn').each(function () {
                                    \$(this).addClass('btn-sm btn-default');
                                });
                            }
                        });

                        /* END TABLE TOOLS */
                        \$(document).on('hidden.bs.modal', function (e) {
                            if (\$(e.target).attr('data-refresh') == 'true') {
                                // Remove modal data
                                \$(e.target).removeData('bs.modal');
                                // Empty the HTML of modal
                                //\$(e.target).html('');
                            }
                        });

                        /*
                         * SmartAlerts
                         */
                        // With Callback
                        \$(\"#smart-mod-eg1\").click(function (e) {
                            \$.SmartMessageBox({
                                title: \"Eliminar tutor de curso\",
                                content: \"IMPORTANTE: Borre unicamente si el tutor no pertenecio al curso en el periodo indicado. Seguro que desea borrarlo?\",
                                buttons: '[No][Si]'
                            }, function (ButtonPressed) {
                                if (ButtonPressed === \"Si\") {

                                    \$.smallBox({
                                        title: \"Eliminar tutor de curso\",
                                        content: \"<i class='fa fa-clock-o'></i> <i>El tutor fue borrado...</i>\",
                                        color: \"#659265\",
                                        iconSmall: \"fa fa-check fa-2x fadeInRight animated\",
                                        timeout: 4000
                                    });
                                    window.location = urldest;
                                }
                                if (ButtonPressed === \"No\") {
                                    \$.smallBox({
                                        title: \"Eliminar tutor de curso\",
                                        content: \"<i class='fa fa-clock-o'></i> <i>No se borro el tutor...</i>\",
                                        color: \"#C46A69\",
                                        iconSmall: \"fa fa-times fa-2x fadeInRight animated\",
                                        timeout: 4000
                                    });
                                }

                            });
                            e.preventDefault();
                        });

                    })
                </script>
            ";
        
        $__internal_533cc8601c891ff716e079e31f4a7e7080ddb3b2e224360b584486de90fc66c2->leave($__internal_533cc8601c891ff716e079e31f4a7e7080ddb3b2e224360b584486de90fc66c2_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  776 => 419,  772 => 418,  768 => 417,  764 => 416,  760 => 415,  756 => 414,  752 => 413,  746 => 410,  734 => 401,  728 => 398,  722 => 395,  716 => 392,  710 => 389,  704 => 386,  698 => 383,  692 => 380,  686 => 377,  680 => 374,  674 => 371,  660 => 360,  650 => 353,  644 => 350,  637 => 346,  634 => 345,  628 => 344,  621 => 332,  615 => 331,  605 => 20,  600 => 18,  594 => 15,  589 => 13,  585 => 12,  580 => 10,  576 => 9,  573 => 8,  567 => 7,  559 => 550,  557 => 344,  544 => 333,  542 => 331,  534 => 325,  525 => 322,  518 => 317,  513 => 316,  504 => 313,  497 => 308,  493 => 307,  490 => 306,  481 => 303,  474 => 298,  470 => 297,  452 => 281,  446 => 279,  440 => 276,  434 => 273,  430 => 271,  424 => 269,  418 => 266,  414 => 264,  406 => 260,  397 => 253,  395 => 252,  392 => 251,  384 => 246,  378 => 242,  376 => 241,  373 => 240,  364 => 234,  357 => 230,  351 => 226,  349 => 225,  346 => 224,  338 => 219,  332 => 215,  330 => 214,  327 => 213,  319 => 208,  313 => 205,  307 => 202,  301 => 199,  295 => 196,  289 => 193,  283 => 190,  277 => 187,  271 => 184,  265 => 180,  263 => 179,  259 => 177,  251 => 172,  247 => 171,  239 => 166,  234 => 163,  226 => 159,  222 => 157,  220 => 156,  217 => 155,  208 => 149,  202 => 146,  196 => 143,  184 => 134,  180 => 132,  178 => 131,  172 => 128,  134 => 93,  92 => 54,  86 => 51,  80 => 48,  64 => 35,  52 => 26,  48 => 25,  44 => 23,  42 => 7,  32 => 6,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no\"> 
        <title>{% if page_title is defined %} {{ page_title }} {%else%}Unad MED 2014  V2{% endif %}</title>
        {% block stylesheets %}
            <!-- Basic Styles -->
            <link rel=\"stylesheet\" type=\"text/css\" media=\"screen\" href=\"{{ asset('css/bootstrap.min.css') }}\">
            <link rel=\"stylesheet\" type=\"text/css\" media=\"screen\" href=\"{{ asset('css/font-awesome.min.css') }}\">
            <!-- SmartAdmin Styles : Please note (smartadmin-production.css) was created using LESS variables -->
            <link rel=\"stylesheet\" type=\"text/css\" media=\"screen\" href=\"{{ asset('css/smartadmin-production.css') }}\">
            <link rel=\"stylesheet\" type=\"text/css\" media=\"screen\" href=\"{{ asset('css/smartadmin-skins.css') }}\">
            <!-- SmartAdmin RTL Support is under construction
            <link rel=\"stylesheet\" type=\"text/css\" media=\"screen\" href=\"{{ asset('css/smartadmin-rtl.css') }}\"> -->
            <!-- We recommend you use \"your_style.css\" to override SmartAdmin
                 specific styles this will also ensure you retrain your customization with each SmartAdmin update.
            <link rel=\"stylesheet\" type=\"text/css\" media=\"screen\" href=\"{{ asset('css/your_style.css\"') }}> -->
            <!-- GOOGLE FONT
            <link rel=\"stylesheet\" href=\"{{ asset('http://fonts.googleapis.com/css?family=Open+Sans:400italic,700italic,300,400,700') }}\">-->

        {% endblock %}

        <!-- FAVICONS -->
        <link rel=\"shortcut icon\" href=\"{{ asset('img/favicon/favicon.ico') }}\" type=\"image/x-icon\">     
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('img/favicon/favicon.ico') }}\" />
    </head>
    <body class=\"fixed-header smart-style-3\">
        <!-- possible classes: minified, fixed-ribbon, fixed-header, fixed-width-->
        <!-- HEADER -->
        <header id=\"header\">
            <div id=\"logo-group\">

                <!-- PLACE YOUR LOGO HERE -->
                <span id=\"logo\"> <img src=\"{{ asset('img/unad_2013.png') }}\" alt=\"SmartAdmin\"> </span>
                <!-- END LOGO PLACEHOLDER -->

                <!-- Note: The activity badge color changes when clicked and resets the number to 0
                Suggestion: You may want to set a flag when this happens to tick off all checked messages / notifications -->
                <span id=\"activity\" class=\"activity-dropdown\"> <i class=\"fa fa-user\"></i> <b class=\"badge\"> 0 </b> </span>

                <!-- AJAX-DROPDOWN : control this dropdown height, look and feel from the LESS variable file -->
                <div class=\"ajax-dropdown\">

                    <!-- the ID links are fetched via AJAX to the ajax container \"ajax-notifications\" -->
                    <div class=\"btn-group btn-group-justified\" data-toggle=\"buttons\">
                        <label class=\"btn btn-default\">
                            <input type=\"radio\" name=\"activity\" id=\"{{ path('home_user_info') }}\">
                            Usuario</label>
                        <label class=\"btn btn-default\">
                            <input type=\"radio\" name=\"activity\" id=\"{{ path('home_user_info') }}\">
                            Pendientes</label>
                        <label class=\"btn btn-default\">
                            <input type=\"radio\" name=\"activity\" id=\"{{ path('home_user_info') }}\">
                            Mensajes</label>
                    </div>

                    <!-- notification content -->
                    <div class=\"ajax-notifications custom-scroll\">

                        <div class=\"alert alert-transparent\">
                            <h4>Selecione una opción para ver mas información</h4>
                            This blank page message helps protect your privacy, or you can show the first message here automatically.
                        </div>

                        <i class=\"fa fa-lock fa-4x fa-border\"></i>

                    </div>
                    <!-- end notification content -->

                    <!-- footer: refresh area -->
                    <span> 
                        <button type=\"button\" data-loading-text=\"<i class='fa fa-refresh fa-spin'></i> Loading...\" class=\"btn btn-xs btn-default pull-right\">
                            <i class=\"fa fa-refresh\"></i>
                        </button> </span>
                    <!-- end footer -->

                </div>
                <!-- END AJAX-DROPDOWN -->
            </div>

            <!-- pulled right: nav area -->
            <div class=\"pull-right\">

                <!-- collapse menu button -->
                <div id=\"hide-menu\" class=\"btn-header pull-right\">
                    <span> <a href=\"javascript:void(0);\" title=\"Collapse Menu\"><i class=\"fa fa-reorder\"></i></a> </span>
                </div>
                <!-- end collapse menu -->

                <!-- logout button -->
                <div id=\"logout\" class=\"btn-header transparent pull-right\">
                    <span> <a data-logout-msg=\"Usted puede mejorar su seguridad aún más después de cerrar la sesión al cerrar este navegador\" href=\"{{path('logout')}}\" title=\"Salir\"><i class=\"fa fa-sign-out\"></i></a></span>
                </div>
                <!-- end logout button -->


                <!-- search mobile button (this is hidden till mobile view port) -->
                <div id=\"search-mobile\" class=\"btn-header transparent pull-right\">
                    <span> <a href=\"javascript:void(0)\" title=\"Search\"><i class=\"fa fa-search\"></i></a> </span>
                </div>
                <!-- end search mobile button -->


            </div>
            <!-- end pulled right: nav area -->

        </header>
        <!-- END HEADER -->
        <!-- Left panel : Navigation area -->
        <!-- Note: This width of the aside area can be adjusted through LESS variables -->
        <aside id=\"left-panel\">

            <!-- end user info -->
            <!-- NAVIGATION : This navigation is also responsive
            To make this navigation dynamic please make sure to link the node
            (the reference to the nav > ul) after page load. Or the navigation
            will not initialize.
            -->
            <nav>
                <!-- NOTE: Notice the gaps after each icon usage <i></i>..
                Please note that these links work a bit different than
                traditional hre=\"\" links. See documentation for details.
                -->

                <ul>
                    <li>
                        <a href=\"{{ path('home_user_inicio') }}\" title=\"Dashboard\"><i class=\"fa fa-lg fa-fw fa-home\"></i> <span class=\"menu-item-parent\">Inicio</span></a>


                        {% if is_granted('ROLE_DEC') %}
                            <ul style=\"display: block;\">
                                <li>
                                    <a href=\"{{ path('escuela_info') }}\"><i class=\"fa fa-book\"></i> Mi Escuela</a>      
                                </li>    
                            </ul>
                        <li>
                            <a href=\"#\"><i class=\"fa fa-lg fa-fw fa-desktop\"></i> <span class=\"menu-item-parent\">Instrumentos</span></a>
                            <ul style=\"display: block;\">
                                <li>
                                </li>
                                <li>
                                    <a href=\"{{ path('aval_porescuela') }}\"><i class=\"fa fa-book\"></i> Planes de Gestión</a>
                                </li> 
                                <li>
                                    <a href=\"{{ path('planmejoramiento') }}\"><i class=\"fa fa-book\"></i> Planes de Mejoramiento</a>
                                </li>
                                <li>
                                    <a href=\"{{ path('decano_coevallider') }}\"><i class=\"fa fa-book\"></i> Evaluación a Lideres</a>
                                </li>

                            </ul>

                        {% endif %}

                        {% if is_granted('ROLE_SECA') %}
                            <ul style=\"display: block;\">
                                <li>
                                    <a href=\"{{ path('escuela_info') }}\"><i class=\"fa fa-book\"></i> Mi Escuela</a>      
                                </li>    
                            </ul>

                        {% endif %}     


                        {% if is_granted('ROLE_DOC') %}  
                        <li>
                            <a href=\"#\"><i class=\"fa fa-lg fa-fw fa-bar-chart-o\"></i> <span class=\"menu-item-parent\">MED</span></a>
                            <ul style=\"display: block;\">
                                <li>
                                    <a href=\"{{ path('home_user_inicio') }}\">Periodo Actual</a>                              
                                    <a href=\"{{ path('archivo_docente') }}\">Archivo</a>
                                </li>
                            </ul>
                        </li>     
                    {%endif%}


                    {% if is_granted('ROLE_ADMIN') or is_granted('ROLE_ADMON')%}
                        <li>
                            <a href=\"#\"><i class=\"fa fa-lg fa-fw fa-bar-chart-o\"></i> <span class=\"menu-item-parent\">Unad</span></a>
                            <ul>
                                <li>
                                    <a href=\"{{ path('escuela') }}\">Escuelas</a>
                                </li>
                                <li>
                                    <a href=\"{{ path('programa') }}\">Programas</a>
                                </li>
                                <li>
                                    <a href=\"{{ path('zona') }}\">Zonas y Centros</a>
                                </li>
                                <li>
                                    <a href=\"{{ path('admon_user') }}\">Buscar Usuario</a>
                                </li>
                                <li>
                                    <a href=\"{{ path('docente_home', { 'periodo':  app.session.get('periodoe') }) }}\">Docentes</a>
                                </li>
                                <li>
                                    <a href=\"{{ path('aval_lista') }}\">Avales</a>
                                </li>
                                <li>
                                    <a href=\"{{ path('rolacademico') }}\">Roles y Actividades</a>
                                </li>
                                <li>
                                    <a href=\"{{ path('curso') }}\">Cursos</a>
                                </li>
                                <li>
                                    <a href=\"{{ path('dofe_index') }}\"><i class=\"fa fa-book\"></i> Evaluaciónes DOFEs</a>
                                </li> 
                            </ul>
                        </li>
                    {%endif%}

                    {% if is_granted('ROLE_ADMIN') %}
                        <li>
                            <a href=\"#\"><i class=\"fa fa-lg fa-fw fa-bar-chart-o\"></i> <span class=\"menu-item-parent\">Admin</span></a>
                            <ul>
                                <li>
                                    <a href=\"{{ path('admin_instrumento') }}\">Instrumentos</a>
                                </li>
                            </ul>
                        </li>
                    {%endif%}

                    {% if is_granted('ROLE_ADMIN') and is_granted('ROLE_ADMON') %}
                        <li>
                            <a href=\"#\"><i class=\"fa fa-lg fa-fw fa-bar-chart-o\"></i> <span class=\"menu-item-parent\">Resultados</span></a>
                            <ul>
                                <li>
                                    <a href=\"{{ path('hetero_prom_esc') }}\">Evaluación de Estudiantes</a>
                                </li>
                       
                                <li>
                                    <a href=\"{{ path('docente', { 'periodo':  app.session.get('periodoe') }) }}\">Consolidado Final</a>
                                </li>

                            </ul>
                        </li>
                    {%endif%}
                    
                   {% if  is_granted('ROLE_DEC') %}
                        <li>
                            <a href=\"#\"><i class=\"fa fa-lg fa-fw fa-bar-chart-o\"></i> <span class=\"menu-item-parent\">Resultados</span></a>
                            <ul>
                                <li>
                                    <a href=\"{{ path('hetero_prom_esc') }}\">Evaluación de Estudiantes</a>
                                </li>
                            </ul>
                        </li>
                    {%endif%}

                   {% if is_granted('ROLE_DOFE')  %}
                       
                       <li>
                            <a href=\"#\"><i class=\"fa fa-lg fa-fw fa-desktop\"></i> <span class=\"menu-item-parent\">DOFEs</span></a>
                            <ul style=\"display: block;\">
                                <li>
                                </li>
                                <li>
                                    <a href=\"{{ path('dofe_evaluar') }}\"><i class=\"fa fa-book\"></i> Evaluación a DOFEs</a>
                                </li> 
                            </ul>
                       </li>
                        {%endif%}  

                    {% if is_granted('ROLE_DIRC')  %} 
                        <ul style=\"display: block;\">
                            <li>
                                <a href=\"{{ path('centro_index') }}\"><i class=\"fa fa-book\"></i> Docentes por Centro</a>
                            </li>  
                        {%endif%}     

                        {% if is_granted('ROLE_DIRZ') %} 
                            <ul style=\"display: block;\">
                                <li>
                                    <a href=\"{{ path('zona_index') }}\"><i class=\"fa fa-book\"></i> Docentes por Zona</a>
                                </li>
                                <li>
                                    <a href=\"{{ path('avalplang') }}\"><i class=\"fa fa-book\"></i> Avalar Plan Gestión</a>
                                </li>
                            {%endif%}  
                        </ul>        
                    </ul>
            </nav>
            <span class=\"minifyme\"> <i class=\"fa fa-arrow-circle-left hit\"></i> </span>
            <span class=\"ribbon-button-alignment\"> <span id=\"refresh\" class=\"btn btn-ribbon\" data-title=\"refresh\"  rel=\"tooltip\" data-placement=\"bottom\" data-original-title=\"<i class='text-warning fa fa-warning'></i> Precaución! Reiniciar consulta\" data-html=\"true\"><i class=\"fa fa-refresh\"></i></span> </span>
        </aside>
        <!-- END NAVIGATION -->

        <!-- MAIN PANEL -->
        <div id=\"main\" role=\"main\">

            <!-- MAIN CONTENT -->
            <div id=\"content\">


                {% for flashMessage in app.session.flashbag.get('error') %}
                    <div class=\"alert alert-danger fade in\">
                        <button class=\"close\" data-dismiss=\"alert\">
                            ×
                        </button>
                        <i class=\"fa-fw fa fa-times\"></i>
                        <strong>Error!</strong>  {{ flashMessage }}
                    </div>
                {% endfor %}

                {% for flashMessage in app.session.flashbag.get('success') %}
                    <div class=\"alert alert-success fade in\">
                        <button class=\"close\" data-dismiss=\"alert\">
                            ×
                        </button>
                        <i class=\"fa-fw fa fa-check\"></i>
                        <strong>Hecho!</strong>  {{ flashMessage }}
                    </div>
                {% endfor %}
                {% for flashMessage in app.session.flashbag.get('warning') %}
                    <div class=\"alert alert-warning fade in\">
                        <button class=\"close\" data-dismiss=\"alert\">
                            ×
                        </button>
                        <i class=\"fa-fw fa fa-warning\"></i>
                        <strong>Advertencia!</strong>  {{ flashMessage }}
                    </div>
                {% endfor %}

                <!-- widget grid -->
                <section id=\"widget-grid\" class=\"\">

                    <!-- row -->
                    <div class=\"row\">
                        {% block body %}
                        {% endblock %}
                    </div>\t\t\t
                    <!-- end row -->
                </section>

                <div class=\"modal fade\" data-refresh=\"true\" id=\"myModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
                    <div class=\"modal-dialog modal-lg\">
                        <div class=\"modal-content\">
                        </div></div></div>    

            </div>

            {% block javascripts %}

                <script src=\"{{ asset('js/main.js')}}\"></script>
                <!-- END SHORTCUT AREA -->
                <!--================================================== -->
                <!-- PACE LOADER - turn this on if you want ajax loading to show (caution: uses lots of memory on iDevices)-->
                <script data-pace-options='{ \"restartOnRequestAfter\": true }' src=\"{{ asset('js/plugin/pace/pace.min.js') }}\"></script>

                <!-- Link to Google CDN's jQuery + jQueryUI; fall back to local -->
                <script src=\"{{ asset('js/libs/jquery-2.0.2.min.js')}}\"></script>
                <script>
                    if (!window.jQuery) {
                        document.write('<script src=\"js/libs/jquery-2.0.2.min.js\"><\\/script>');
                    }
                </script>

                <script src=\"{{ asset('js/libs/jquery-ui-1.10.3.min.js')}}\"></script>
                <script>
                    if (!window.jQuery.ui) {
                        document.write('<script src=\"js/libs/jquery-ui-1.10.3.min.js\"><\\/script>');
                    }
                </script>

                <!-- JS TOUCH : include this plugin for mobile drag / drop touch events
                <script src=\"js/plugin/jquery-touch/jquery.ui.touch-punch.min.js\"></script> -->

                <!-- BOOTSTRAP JS -->
                <script src=\"{{ asset('js/bootstrap/bootstrap.min.js') }}\"></script>

                <!-- CUSTOM NOTIFICATION -->
                <script src=\"{{ asset('js/notification/SmartNotification.min.js') }}\"></script>

                <!-- JARVIS WIDGETS -->
                <script src=\"{{ asset('js/smartwidgets/jarvis.widget.min.js') }}\"></script>

                <!-- EASY PIE CHARTS -->
                <script src=\"{{ asset('js/plugin/easy-pie-chart/jquery.easy-pie-chart.min.js') }}\"></script>

                <!-- SPARKLINES -->
                <script src=\"{{ asset('js/plugin/sparkline/jquery.sparkline.min.js') }}\"></script>

                <!-- JQUERY VALIDATE -->
                <script src=\"{{ asset('js/plugin/jquery-validate/jquery.validate.min.js') }}\"></script>

                <!-- JQUERY MASKED INPUT -->
                <script src=\"{{ asset('js/plugin/masked-input/jquery.maskedinput.min.js') }}\"></script>

                <!-- JQUERY SELECT2 INPUT -->
                <script src=\"{{ asset('js/plugin/select2/select2.min.js') }}\"></script>

                <!-- JQUERY UI + Bootstrap Slider -->
                <script src=\"{{ asset('js/plugin/bootstrap-slider/bootstrap-slider.min.js') }}\"></script>

                <!-- browser msie issue fix -->
                <script src=\"{{ asset('js/plugin/msie-fix/jquery.mb.browser.min.js') }}\"></script>

                <!-- FastClick: For mobile devices -->
                <script src=\"{{ asset('js/plugin/fastclick/fastclick.js') }}\"></script>

                <!--[if IE 7]>
        
                <h1>Your browser is out of date, please update your browser by going to www.microsoft.com/download</h1>
        
                <![endif]-->

                <!-- MAIN APP JS FILE -->
                <script src=\"{{ asset('js/app.js') }}\"></script>

                <!-- PAGE RELATED PLUGIN(S) -->
                <script src=\"{{ asset('js/plugin/datatables/jquery.dataTables-cust.min.js') }}\"></script>
                <script src=\"{{ asset('js/plugin/datatables/ColReorder.min.js') }}\"></script>
                <script src=\"{{ asset('js/plugin/datatables/FixedColumns.min.js') }}\"></script>
                <script src=\"{{ asset('js/plugin/datatables/ColVis.min.js') }}\"></script>
                <script src=\"{{ asset('js/plugin/datatables/ZeroClipboard.js') }}\"></script>
                <script src=\"{{ asset('js/plugin/datatables/media/js/TableTools.min.js') }}\"></script>
                <script src=\"{{ asset('js/plugin/datatables/DT_bootstrap.js') }}\"></script>

                <script type=\"text/javascript\">
                    initAjaxForm();
                    // DO NOT REMOVE : GLOBAL FUNCTIONS!

                    \$(document).ready(function () {

                        pageSetUp();

                        /*
                         * BASIC
                         */
                        \$('#dt_basic').dataTable({
                            \"sPaginationType\": \"bootstrap_full\"
                        });

                        /* END BASIC */

                        /* Add the events etc before DataTables hides a column */
                        \$(\"#datatable_fixed_column thead input\").keyup(function () {
                            oTable.fnFilter(this.value, oTable.oApi._fnVisibleToColumnIndex(oTable.fnSettings(), \$(\"thead input\").index(this)));
                        });

                        \$(\"#datatable_fixed_column thead input\").each(function (i) {
                            this.initVal = this.value;
                        });
                        \$(\"#datatable_fixed_column thead input\").focus(function () {
                            if (this.className == \"search_init\") {
                                this.className = \"\";
                                this.value = \"\";
                            }
                        });
                        \$(\"#datatable_fixed_column thead input\").blur(function (i) {
                            if (this.value == \"\") {
                                this.className = \"search_init\";
                                this.value = this.initVal;
                            }
                        });


                        var oTable = \$('#datatable_fixed_column').dataTable({
                            \"sDom\": \"<'dt-top-row'><'dt-wrapper't><'dt-row dt-bottom-row'<'row'<'col-sm-6'i><'col-sm-6 text-right'p>>\",
                            //\"sDom\" : \"t<'row dt-wrapper'<'col-sm-6'i><'dt-row dt-bottom-row'<'row'<'col-sm-6'i><'col-sm-6 text-right'>>\",
                            \"oLanguage\": {
                                \"sSearch\": \"Search all columns:\"
                            },
                            \"bSortCellsTop\": true
                        });



                        /*
                         * COL ORDER
                         */
                        \$('#datatable_col_reorder').dataTable({
                            \"sPaginationType\": \"bootstrap\",
                            \"sDom\": \"R<'dt-top-row'Clf>r<'dt-wrapper't><'dt-row dt-bottom-row'<'row'<'col-sm-6'i><'col-sm-6 text-right'p>>\",
                            \"fnInitComplete\": function (oSettings, json) {
                                \$('.ColVis_Button').addClass('btn btn-default btn-sm').html('Columns <i class=\"icon-arrow-down\"></i>');
                            }
                        });

                        /* END COL ORDER */

                        /* TABLE TOOLS */
                        \$('#datatable_tabletools').dataTable({
                            \"sDom\": \"<'dt-top-row'Tlf>r<'dt-wrapper't><'dt-row dt-bottom-row'<'row'<'col-sm-6'i><'col-sm-6 text-right'p>>\",
                            \"oTableTools\": {
                                \"aButtons\": [\"copy\", \"print\", {
                                        \"sExtends\": \"collection\",
                                        \"sButtonText\": 'Save <span class=\"caret\" />',
                                        \"aButtons\": [\"csv\", \"xls\", \"pdf\"]
                                    }],
                                \"sSwfPath\": \"/js/plugin/datatables/media/swf/copy_csv_xls_pdf.swf\"
                            },
                            \"fnInitComplete\": function (oSettings, json) {
                                \$(this).closest('#dt_table_tools_wrapper').find('.DTTT.btn-group').addClass('table_tools_group').children('a.btn').each(function () {
                                    \$(this).addClass('btn-sm btn-default');
                                });
                            }
                        });

                        /* END TABLE TOOLS */
                        \$(document).on('hidden.bs.modal', function (e) {
                            if (\$(e.target).attr('data-refresh') == 'true') {
                                // Remove modal data
                                \$(e.target).removeData('bs.modal');
                                // Empty the HTML of modal
                                //\$(e.target).html('');
                            }
                        });

                        /*
                         * SmartAlerts
                         */
                        // With Callback
                        \$(\"#smart-mod-eg1\").click(function (e) {
                            \$.SmartMessageBox({
                                title: \"Eliminar tutor de curso\",
                                content: \"IMPORTANTE: Borre unicamente si el tutor no pertenecio al curso en el periodo indicado. Seguro que desea borrarlo?\",
                                buttons: '[No][Si]'
                            }, function (ButtonPressed) {
                                if (ButtonPressed === \"Si\") {

                                    \$.smallBox({
                                        title: \"Eliminar tutor de curso\",
                                        content: \"<i class='fa fa-clock-o'></i> <i>El tutor fue borrado...</i>\",
                                        color: \"#659265\",
                                        iconSmall: \"fa fa-check fa-2x fadeInRight animated\",
                                        timeout: 4000
                                    });
                                    window.location = urldest;
                                }
                                if (ButtonPressed === \"No\") {
                                    \$.smallBox({
                                        title: \"Eliminar tutor de curso\",
                                        content: \"<i class='fa fa-clock-o'></i> <i>No se borro el tutor...</i>\",
                                        color: \"#C46A69\",
                                        iconSmall: \"fa fa-times fa-2x fadeInRight animated\",
                                        timeout: 4000
                                    });
                                }

                            });
                            e.preventDefault();
                        });

                    })
                </script>
            {% endblock %}
    </body>
</html>", "::base.html.twig", "/Users/omarr/codigo/med/app/Resources/views/base.html.twig");
    }
}
