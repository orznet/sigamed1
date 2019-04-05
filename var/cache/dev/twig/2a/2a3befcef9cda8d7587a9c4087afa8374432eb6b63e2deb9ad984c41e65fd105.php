<?php

/* AdminUserBundle:Default:index.html.twig */
class __TwigTemplate_54755723035df9df13801faa4ef3ee4636d717dc4989d0e567814c9ded77a928 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "AdminUserBundle:Default:index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_95f0668e0a2aa8b5aaeebc2188e4c3c041a150a83e09ace89f74919e223bd09c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_95f0668e0a2aa8b5aaeebc2188e4c3c041a150a83e09ace89f74919e223bd09c->enter($__internal_95f0668e0a2aa8b5aaeebc2188e4c3c041a150a83e09ace89f74919e223bd09c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminUserBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_95f0668e0a2aa8b5aaeebc2188e4c3c041a150a83e09ace89f74919e223bd09c->leave($__internal_95f0668e0a2aa8b5aaeebc2188e4c3c041a150a83e09ace89f74919e223bd09c_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_0909719e09b8574bcc4301fa1bf5c03d3ccde5858974565c9cf549d5e39c48e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0909719e09b8574bcc4301fa1bf5c03d3ccde5858974565c9cf549d5e39c48e1->enter($__internal_0909719e09b8574bcc4301fa1bf5c03d3ccde5858974565c9cf549d5e39c48e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "AdminUserBundle:Default:index.html.twig"));

        // line 3
        echo "<!-- MAIN CONTENT -->

    <div class=\"col-sm-12 col-md-12 col-lg-6\">
        <div class=\"well\">
            <h1 class=\"txt-color-orangeDark login-header-big\">Periodo de Evaluación: ";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["periodo"]) ? $context["periodo"] : $this->getContext($context, "periodo")), "id", array()), "html", null, true);
        echo "</h1>
            <p>
                Periodo de Evaluación del ";
        // line 9
        echo twig_escape_filter($this->env, twig_localized_date_filter($this->env, $this->getAttribute((isset($context["periodo"]) ? $context["periodo"] : $this->getContext($context, "periodo")), "fechainicio", array()), "none", "none", $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "locale", array()), null, "d' de 'MMMM"), "html", null, true);
        echo " al ";
        echo twig_escape_filter($this->env, twig_localized_date_filter($this->env, $this->getAttribute((isset($context["periodo"]) ? $context["periodo"] : $this->getContext($context, "periodo")), "fechafin", array()), "none", "none", $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "locale", array()), null, "d 'de' MMMM"), "html", null, true);
        echo "
            </p>
            <div class=\"easy-pie-chart txt-color-blue easyPieChart\" data-percent=\"";
        // line 11
        echo twig_escape_filter($this->env, (((isset($context["hoy"]) ? $context["hoy"] : $this->getContext($context, "hoy")) / (isset($context["dias"]) ? $context["dias"] : $this->getContext($context, "dias"))) * 100), "html", null, true);
        echo "\" data-pie-size=\"180\" style=\"width: 180px; height: 180px; line-height: 180px;\">
                <span class=\"percent percent-sign txt-color-blue font-xl semi-bold\">";
        // line 12
        echo twig_escape_filter($this->env, (((isset($context["hoy"]) ? $context["hoy"] : $this->getContext($context, "hoy")) / (isset($context["dias"]) ? $context["dias"] : $this->getContext($context, "dias"))) * 100), "html", null, true);
        echo "</span>
                <canvas width=\"360\" height=\"360\" style=\"width: 180px; height: 180px;\"></canvas></div>

            <br>
        </div>
    </div>
    <div class=\"col-sm-12 col-md-12 col-lg-6\">
        <div class=\"well\">
            <h1 class=\"txt-color-orangeDark login-header-big\">MED Módulo de Evaluación Docente</h1>
            <p>
                Desarrollado en coherencia con las directrices emitidas por el Consejo Superior Universitario en el Acuerdo 003 del 28 de enero de 2011, modificado por el Acuerdo 013 del 05 de mayo de 2011.
            </p>
            <br>
        </div>
    </div>

    <div class=\"col-sm-12 col-md-12 col-lg-6\">
        <div class=\"well\">
            <h1 class=\"txt-color-orangeDark login-header-big\">Admin</h1>

            ";
        // line 32
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN")) {
            // line 33
            echo "                <form method=\"get\" action=\"?php echo \$_GET['_quieroser'];?\" >
                    <fieldset>
                        <p><label>ID <input type=text name=_quieroser></label>
                            <button>Enviar</button></p>  
                    </fieldset>  
                </form>
            ";
        }
        // line 40
        echo "        </div>
    </div>

    <div class=\"col-sm-12\">
        <div class=\"well\">
            <h1 class=\"txt-color-orangeDark login-header-big\">Periodos Académicos</h1>
            <table class=\"table table-bordered hidden-mobile\" style=\"width: 100%\">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Periodo Académico</th>
                        <th>Semanas</th>
                        <th>Eventos académicos</th>
           
                    </tr>
                </thead> 
                <tbody>

                    ";
        // line 58
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["periodo"]) ? $context["periodo"] : $this->getContext($context, "periodo")), "periodoa", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["periodoa"]) {
            // line 59
            echo "                        <tr>
                            <td>";
            // line 60
            echo twig_escape_filter($this->env, $this->getAttribute($context["periodoa"], "id", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 61
            echo twig_escape_filter($this->env, $this->getAttribute($context["periodoa"], "nombre", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 62
            echo twig_escape_filter($this->env, $this->getAttribute($context["periodoa"], "semanas", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 63
            echo twig_escape_filter($this->env, twig_localized_date_filter($this->env, $this->getAttribute($context["periodoa"], "fechainicio", array()), "none", "none", $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "locale", array()), null, "d' de 'MMMM"), "html", null, true);
            echo " al
                                ";
            // line 64
            echo twig_escape_filter($this->env, twig_localized_date_filter($this->env, $this->getAttribute($context["periodoa"], "fechafin", array()), "none", "none", $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "locale", array()), null, "d' de 'MMMM"), "html", null, true);
            echo "</td>
           
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['periodoa'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 67
        echo "                </tbody>
            </table>     
        </div>
    </div>
                        
                        
        <div class=\"col-sm-12\">
        <div class=\"well\">
            <h1 class=\"txt-color-orangeDark login-header-big\">Instrumentos  de Evaluación</h1>
            <table class=\"table table-bordered hidden-mobile\" style=\"width: 100%\">
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Tipo</th>
                        <th>Descripción</th>
                        <th>Fecha Incio</th>
                        <th>Fecha Fin</th>
                        <th>Alcance</th>
                    </tr>
                </thead> 
                <tbody>

                    ";
        // line 89
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["instrumentos"]) ? $context["instrumentos"] : $this->getContext($context, "instrumentos")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 90
            echo "                        <tr>
                            <td>";
            // line 91
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["entity"], "instrumento", array()), "nombre", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 92
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["entity"], "instrumento", array()), "tipo", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 93
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["entity"], "instrumento", array()), "descripcion", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 94
            echo twig_escape_filter($this->env, (($this->getAttribute($context["entity"], "fechainicio", array())) ? (twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "fechainicio", array()), "d/m/Y")) : ("no def")), "html", null, true);
            echo "</td>
                           <td>";
            // line 95
            echo twig_escape_filter($this->env, (($this->getAttribute($context["entity"], "fechafin", array())) ? (twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "fechafin", array()), "d/m/Y")) : ("no def")), "html", null, true);
            echo "</td> 
                            <td>";
            // line 96
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "alcance", array()), "html", null, true);
            echo "</td>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 98
        echo "                </tbody>
            </table>     
        </div>
    </div>
                        
";
        
        $__internal_0909719e09b8574bcc4301fa1bf5c03d3ccde5858974565c9cf549d5e39c48e1->leave($__internal_0909719e09b8574bcc4301fa1bf5c03d3ccde5858974565c9cf549d5e39c48e1_prof);

    }

    public function getTemplateName()
    {
        return "AdminUserBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  207 => 98,  199 => 96,  195 => 95,  191 => 94,  187 => 93,  183 => 92,  179 => 91,  176 => 90,  172 => 89,  148 => 67,  139 => 64,  135 => 63,  131 => 62,  127 => 61,  123 => 60,  120 => 59,  116 => 58,  96 => 40,  87 => 33,  85 => 32,  62 => 12,  58 => 11,  51 => 9,  46 => 7,  40 => 3,  34 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '::base.html.twig' %}
{% block body -%}\t
    <!-- MAIN CONTENT -->

    <div class=\"col-sm-12 col-md-12 col-lg-6\">
        <div class=\"well\">
            <h1 class=\"txt-color-orangeDark login-header-big\">Periodo de Evaluación: {{periodo.id}}</h1>
            <p>
                Periodo de Evaluación del {{periodo.fechainicio|localizeddate('none','none',app.request.locale,null,\"d' de 'MMMM\") }} al {{periodo.fechafin|localizeddate('none', 'none', app.request.locale,null, \"d 'de' MMMM\") }}
            </p>
            <div class=\"easy-pie-chart txt-color-blue easyPieChart\" data-percent=\"{{hoy/dias*100}}\" data-pie-size=\"180\" style=\"width: 180px; height: 180px; line-height: 180px;\">
                <span class=\"percent percent-sign txt-color-blue font-xl semi-bold\">{{hoy/dias*100}}</span>
                <canvas width=\"360\" height=\"360\" style=\"width: 180px; height: 180px;\"></canvas></div>

            <br>
        </div>
    </div>
    <div class=\"col-sm-12 col-md-12 col-lg-6\">
        <div class=\"well\">
            <h1 class=\"txt-color-orangeDark login-header-big\">MED Módulo de Evaluación Docente</h1>
            <p>
                Desarrollado en coherencia con las directrices emitidas por el Consejo Superior Universitario en el Acuerdo 003 del 28 de enero de 2011, modificado por el Acuerdo 013 del 05 de mayo de 2011.
            </p>
            <br>
        </div>
    </div>

    <div class=\"col-sm-12 col-md-12 col-lg-6\">
        <div class=\"well\">
            <h1 class=\"txt-color-orangeDark login-header-big\">Admin</h1>

            {% if is_granted('ROLE_ADMIN') %}
                <form method=\"get\" action=\"?php echo \$_GET['_quieroser'];?\" >
                    <fieldset>
                        <p><label>ID <input type=text name=_quieroser></label>
                            <button>Enviar</button></p>  
                    </fieldset>  
                </form>
            {%endif%}
        </div>
    </div>

    <div class=\"col-sm-12\">
        <div class=\"well\">
            <h1 class=\"txt-color-orangeDark login-header-big\">Periodos Académicos</h1>
            <table class=\"table table-bordered hidden-mobile\" style=\"width: 100%\">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Periodo Académico</th>
                        <th>Semanas</th>
                        <th>Eventos académicos</th>
           
                    </tr>
                </thead> 
                <tbody>

                    {%for periodoa in periodo.periodoa%}
                        <tr>
                            <td>{{periodoa.id}}</td>
                            <td>{{periodoa.nombre}}</td>
                            <td>{{ periodoa.semanas }}</td>
                            <td>{{ periodoa.fechainicio|localizeddate('none','none',app.request.locale,null,\"d' de 'MMMM\") }} al
                                {{ periodoa.fechafin|localizeddate('none','none',app.request.locale,null,\"d' de 'MMMM\") }}</td>
           
                        {%endfor%}
                </tbody>
            </table>     
        </div>
    </div>
                        
                        
        <div class=\"col-sm-12\">
        <div class=\"well\">
            <h1 class=\"txt-color-orangeDark login-header-big\">Instrumentos  de Evaluación</h1>
            <table class=\"table table-bordered hidden-mobile\" style=\"width: 100%\">
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Tipo</th>
                        <th>Descripción</th>
                        <th>Fecha Incio</th>
                        <th>Fecha Fin</th>
                        <th>Alcance</th>
                    </tr>
                </thead> 
                <tbody>

                    {%for entity in instrumentos%}
                        <tr>
                            <td>{{entity.instrumento.nombre}}</td>
                            <td>{{entity.instrumento.tipo}}</td>
                            <td>{{entity.instrumento.descripcion}}</td>
                            <td>{{ entity.fechainicio? entity.fechainicio|date(\"d/m/Y\"):'no def'}}</td>
                           <td>{{ entity.fechafin? entity.fechafin|date(\"d/m/Y\"):'no def'}}</td> 
                            <td>{{entity.alcance}}</td>
                        {%endfor%}
                </tbody>
            </table>     
        </div>
    </div>
                        
{% endblock %}", "AdminUserBundle:Default:index.html.twig", "/Users/omarr/codigo/med/src/Admin/UserBundle/Resources/views/Default/index.html.twig");
    }
}
