<?php

/* AdminUserBundle:User:index.html.twig */
class __TwigTemplate_78d5d8fa2d64d996f169992993c13d5661ce7b1d52d75fecfc804ac5371e62e6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "<table class=\"table table-bordered table-striped\" style=\"width: 550px\">
    <form action=\"";
        // line 5
        echo $this->env->getExtension('routing')->getPath("admin_user_buscarpor");
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["buscar_form"]) ? $context["buscar_form"] : $this->getContext($context, "buscar_form")), 'enctype');
        echo ">
        <input type=\"hidden\" name=\"_method\" value=\"PUT\" /> 
        <tr>
         <td>Usuarios(";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["totale"]) ? $context["totale"] : $this->getContext($context, "totale")), "html", null, true);
        echo ")</td>    
         <td>";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["buscar_form"]) ? $context["buscar_form"] : $this->getContext($context, "buscar_form")), "texto"), 'widget');
        echo "</td>
         <td>";
        // line 10
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["buscar_form"]) ? $context["buscar_form"] : $this->getContext($context, "buscar_form")), "parametro"), 'widget');
        echo "</td>
         <td>
        <p>
            <button type=\"submit\">Buscar</button>
        </p> 
         </td>
     </tr>
     </form>
    </table>
<!-- NEW WIDGET START -->
\t\t\t\t\t\t<article class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12\">
\t\t\t\t
\t\t\t\t
\t\t\t\t\t\t\t<!-- Widget ID (each widget will need unique ID)-->
\t\t\t\t\t\t\t<div class=\"jarviswidget jarviswidget-color-blueDark\" id=\"wid-id-3\" data-widget-editbutton=\"false\">
\t\t\t\t\t\t\t\t<!-- widget options:
\t\t\t\t\t\t\t\tusage: <div class=\"jarviswidget\" id=\"wid-id-0\" data-widget-editbutton=\"false\">
\t\t\t\t
\t\t\t\t\t\t\t\tdata-widget-colorbutton=\"false\"
\t\t\t\t\t\t\t\tdata-widget-editbutton=\"false\"
\t\t\t\t\t\t\t\tdata-widget-togglebutton=\"false\"
\t\t\t\t\t\t\t\tdata-widget-deletebutton=\"false\"
\t\t\t\t\t\t\t\tdata-widget-fullscreenbutton=\"false\"
\t\t\t\t\t\t\t\tdata-widget-custombutton=\"false\"
\t\t\t\t\t\t\t\tdata-widget-collapsed=\"true\"
\t\t\t\t\t\t\t\tdata-widget-sortable=\"false\"
\t\t\t\t
\t\t\t\t\t\t\t\t-->
\t\t\t\t\t\t\t\t<header>
\t\t\t\t\t\t\t\t\t<span class=\"widget-icon\"> <i class=\"fa fa-table\"></i> </span>
\t\t\t\t\t\t\t\t\t<h2>Exportar a PDF / Excel</h2>
\t\t\t\t
\t\t\t\t\t\t\t\t</header>
\t\t\t\t
\t\t\t\t\t\t\t\t<!-- widget div-->
\t\t\t\t\t\t\t\t<div>
\t\t\t\t
\t\t\t\t\t\t\t\t\t<!-- widget edit box -->
\t\t\t\t\t\t\t\t\t<div class=\"jarviswidget-editbox\">
\t\t\t\t\t\t\t\t\t\t<!-- This area used as dropdown edit box -->
\t\t\t\t
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<!-- end widget edit box -->
\t\t\t\t
\t\t\t\t\t\t\t\t\t<!-- widget content -->
\t\t\t\t\t\t\t\t\t<div class=\"widget-body no-padding\">
\t\t\t\t\t\t\t\t\t\t<div class=\"widget-body-toolbar\">
\t\t\t\t
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t<table id=\"datatable_tabletools\" class=\"table table-striped table-hover\">
                                    <thead>
            <tr class=\"data\">
                <th class=\"data\">Id</th>
                <th class=\"data\">Nombres</th>
                <th class=\"data\">Apellidos</th>
                <th class=\"data\">Email</th>
                <th class=\"data\">Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 70
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 71
            echo "            <tr table class=\"data\">
                <td class=\"data\"><a href=\"";
            // line 72
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_user_show", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"), "html", null, true);
            echo "</a></td>
                <td class=\"data\">";
            // line 73
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "nombres"), "html", null, true);
            echo "</td>
                <td class=\"data\">";
            // line 74
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "apellidos"), "html", null, true);
            echo "</td>
                <td class=\"data\">";
            // line 75
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "email"), "html", null, true);
            echo "</td>
                <td class=\"data\">
         
                        <a href=\"";
            // line 78
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_user_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
            echo "\">edit</a>
       
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 83
        echo "        </tbody>
    </table>

        <ul>
        <li>
            <a href=\"";
        // line 88
        echo $this->env->getExtension('routing')->getPath("admin_user_new");
        echo "\">
                Nuevo
            </a>
        </li>
    </ul>
    ";
    }

    public function getTemplateName()
    {
        return "AdminUserBundle:User:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  158 => 88,  151 => 83,  140 => 78,  134 => 75,  130 => 74,  126 => 73,  120 => 72,  117 => 71,  113 => 70,  50 => 10,  46 => 9,  42 => 8,  34 => 5,  31 => 4,  28 => 3,);
    }
}
