<?php

/* AdminUnadBundle:Escuela:index.html.twig */
class __TwigTemplate_07bc68c67fd54e9c75f71700888b24d2e440ecf52dd0329ed13dfa456ac7ccbf extends Twig_Template
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
        echo "<!-- widget grid -->
                <section id=\"widget-grid\" class=\"\">

                <!-- row -->
                <div class=\"row\">

        <!-- NEW WIDGET START -->
        <article class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12\">

        <!-- Widget ID (each widget will need unique ID)-->
        <div class=\"jarviswidget jarviswidget-color-blueDark\" id=\"wid-id-0\" data-widget-editbutton=\"false\">
                <!-- widget options:
                usage: <div class=\"jarviswidget\" id=\"wid-id-0\" data-widget-editbutton=\"false\">

                data-widget-colorbutton=\"false\"
                data-widget-editbutton=\"false\"
                data-widget-togglebutton=\"false\"
                data-widget-deletebutton=\"false\"
                data-widget-fullscreenbutton=\"false\"
                data-widget-custombutton=\"false\"
                data-widget-collapsed=\"true\"
                data-widget-sortable=\"false\"

            -->
            <header>
                    <span class=\"widget-icon\"> <i class=\"fa fa-table\"></i> </span>
                    <h2>Escuelas UNAD</h2>

            </header>

    
<!-- widget div-->
<div>

<!-- widget edit box -->
<div class=\"jarviswidget-editbox\">
<!-- This area used as dropdown edit box -->

\t\t\t</div>
\t\t\t<!-- end widget edit box -->

\t\t\t<!-- widget content -->
\t\t\t<div class=\"widget-body\">
                        <table class=\"table table-bordered\">
                                <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Sigla</th>
                <th>Programas</th>
                <th>Docentes</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 58
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 59
            echo "            <tr>
                <td>
                <a data-toggle=\"modal\"  href=\"";
            // line 61
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("escuela_show", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
            echo "\" data-target=\"#myModal\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"), "html", null, true);
            echo "</a>
                </td>
                <td>";
            // line 63
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "nombre"), "html", null, true);
            echo "</td>
                <td>";
            // line 64
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "sigla"), "html", null, true);
            echo "</td>
                <td>
                <a data-toggle=\"modal\" href=\"";
            // line 66
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("escuela_show", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
            echo "\" data-target=\"#myModal\">Ver</a>
                </td>
                 <td>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 72
        echo "        </tbody>
    </table>
                                                                                
            </div>
              <!-- end widget content -->
            </div>
            <!-- end widget div -->
        </div>
        <!-- end widget -->
                                                                        

        <ul>
        <li>
            <a href=\"";
        // line 85
        echo $this->env->getExtension('routing')->getPath("escuela_new");
        echo "\">
                Nuevo
            </a>
        </li>
    </ul>
        
<div class=\"modal fade\" data-refresh=\"true\" id=\"myModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
<div class=\"modal-dialog\">
<div class=\"modal-content\">
</div></div></div>
 
    ";
    }

    public function getTemplateName()
    {
        return "AdminUnadBundle:Escuela:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 85,  123 => 72,  111 => 66,  106 => 64,  102 => 63,  95 => 61,  91 => 59,  87 => 58,  31 => 4,  28 => 3,);
    }
}
