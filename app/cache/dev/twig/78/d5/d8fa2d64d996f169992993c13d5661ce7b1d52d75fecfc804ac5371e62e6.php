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
               <th class=\"data\">Docente</th>
                <th class=\"data\">Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 71
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 72
            echo "            <tr table class=\"data\">
                <td class=\"data\"><a href=\"";
            // line 73
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_user_show", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"), "html", null, true);
            echo "</a></td>
                <td class=\"data\">";
            // line 74
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "nombres"), "html", null, true);
            echo "</td>
                <td class=\"data\">";
            // line 75
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "apellidos"), "html", null, true);
            echo "</td>
                <td class=\"data\">";
            // line 76
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "email"), "html", null, true);
            echo "</td>
                <td class=\"data\">
                ";
            // line 78
            if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "docente")) {
                // line 79
                echo "                  si  
                    ";
            }
            // line 81
            echo "                    
                </td>
                <td class=\"data\">
         
                        <a href=\"";
            // line 85
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_user_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
            echo "\">edit</a>
       
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 90
        echo "        </tbody>
    </table>

        <ul>
        <li>
            <a href=\"";
        // line 95
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
        return array (  152 => 85,  146 => 81,  127 => 74,  118 => 72,  114 => 71,  53 => 16,  34 => 5,  126 => 98,  113 => 92,  479 => 308,  475 => 307,  471 => 306,  467 => 305,  463 => 304,  459 => 303,  455 => 302,  449 => 299,  431 => 287,  425 => 284,  419 => 281,  401 => 272,  395 => 269,  389 => 266,  383 => 263,  377 => 260,  353 => 239,  348 => 236,  345 => 235,  338 => 230,  331 => 21,  326 => 19,  320 => 16,  315 => 14,  311 => 13,  306 => 11,  302 => 10,  299 => 9,  296 => 8,  290 => 7,  284 => 420,  282 => 235,  277 => 232,  275 => 230,  188 => 146,  170 => 95,  160 => 130,  58 => 37,  23 => 1,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 290,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 278,  409 => 132,  407 => 275,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 231,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 78,  132 => 51,  128 => 49,  107 => 36,  61 => 21,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 76,  119 => 42,  102 => 32,  71 => 19,  67 => 15,  63 => 15,  59 => 14,  38 => 6,  94 => 28,  89 => 20,  85 => 25,  75 => 17,  68 => 14,  56 => 9,  87 => 25,  21 => 2,  26 => 6,  93 => 28,  88 => 6,  78 => 21,  46 => 9,  27 => 4,  44 => 12,  31 => 4,  28 => 3,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 90,  158 => 67,  156 => 66,  151 => 63,  142 => 79,  138 => 107,  136 => 56,  121 => 73,  117 => 44,  105 => 40,  91 => 27,  62 => 23,  49 => 19,  24 => 4,  25 => 5,  19 => 1,  79 => 18,  72 => 16,  69 => 25,  47 => 9,  40 => 8,  37 => 24,  22 => 2,  246 => 90,  157 => 56,  145 => 46,  139 => 45,  131 => 75,  123 => 47,  120 => 40,  115 => 43,  111 => 91,  108 => 36,  101 => 32,  98 => 31,  96 => 31,  83 => 25,  74 => 50,  66 => 23,  55 => 15,  52 => 21,  50 => 10,  43 => 8,  41 => 26,  35 => 6,  32 => 4,  29 => 3,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 143,  176 => 140,  173 => 65,  168 => 72,  164 => 59,  162 => 57,  154 => 58,  149 => 51,  147 => 58,  144 => 49,  141 => 48,  133 => 55,  130 => 41,  125 => 44,  122 => 96,  116 => 93,  112 => 42,  109 => 34,  106 => 36,  103 => 32,  99 => 31,  95 => 28,  92 => 21,  86 => 28,  82 => 22,  80 => 19,  73 => 19,  64 => 17,  60 => 6,  57 => 23,  54 => 10,  51 => 14,  48 => 13,  45 => 16,  42 => 8,  39 => 13,  36 => 12,  33 => 4,  30 => 7,);
    }
}
