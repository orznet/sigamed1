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
                <a  href=\"";
            // line 69
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("docente_escuela", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
            echo "\">Ver</a>      
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 73
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
        // line 86
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
        return array (  97 => 39,  90 => 35,  129 => 64,  104 => 57,  77 => 26,  65 => 23,  100 => 56,  81 => 34,  20 => 1,  152 => 85,  146 => 68,  127 => 73,  118 => 76,  114 => 75,  53 => 18,  34 => 5,  126 => 56,  113 => 92,  479 => 308,  475 => 307,  471 => 306,  467 => 305,  463 => 304,  459 => 303,  455 => 302,  449 => 299,  431 => 287,  425 => 284,  419 => 281,  401 => 272,  395 => 269,  389 => 266,  383 => 263,  377 => 260,  353 => 239,  348 => 236,  345 => 235,  338 => 230,  331 => 21,  326 => 19,  320 => 16,  315 => 14,  311 => 13,  306 => 11,  302 => 10,  299 => 9,  296 => 8,  290 => 7,  284 => 420,  282 => 235,  277 => 232,  275 => 230,  188 => 146,  170 => 95,  160 => 130,  58 => 37,  23 => 1,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 290,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 278,  409 => 132,  407 => 275,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 231,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 78,  132 => 51,  128 => 80,  107 => 36,  61 => 21,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 76,  119 => 52,  102 => 63,  71 => 19,  67 => 26,  63 => 15,  59 => 14,  38 => 6,  94 => 55,  89 => 20,  85 => 33,  75 => 17,  68 => 14,  56 => 9,  87 => 58,  21 => 2,  26 => 2,  93 => 28,  88 => 38,  78 => 29,  46 => 14,  27 => 4,  44 => 12,  31 => 4,  28 => 3,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 90,  158 => 67,  156 => 100,  151 => 63,  142 => 86,  138 => 84,  136 => 56,  121 => 73,  117 => 69,  105 => 73,  91 => 59,  62 => 23,  49 => 14,  24 => 4,  25 => 5,  19 => 1,  79 => 18,  72 => 16,  69 => 24,  47 => 9,  40 => 9,  37 => 24,  22 => 2,  246 => 90,  157 => 56,  145 => 46,  139 => 45,  131 => 75,  123 => 47,  120 => 61,  115 => 43,  111 => 66,  108 => 58,  101 => 46,  98 => 31,  96 => 43,  83 => 25,  74 => 30,  66 => 23,  55 => 21,  52 => 20,  50 => 10,  43 => 8,  41 => 7,  35 => 6,  32 => 6,  29 => 3,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 143,  176 => 140,  173 => 65,  168 => 72,  164 => 59,  162 => 57,  154 => 58,  149 => 51,  147 => 58,  144 => 49,  141 => 66,  133 => 61,  130 => 41,  125 => 56,  122 => 77,  116 => 60,  112 => 59,  109 => 34,  106 => 64,  103 => 32,  99 => 37,  95 => 61,  92 => 32,  86 => 37,  82 => 28,  80 => 19,  73 => 27,  64 => 17,  60 => 22,  57 => 23,  54 => 17,  51 => 14,  48 => 19,  45 => 16,  42 => 10,  39 => 10,  36 => 12,  33 => 4,  30 => 7,);
    }
}
