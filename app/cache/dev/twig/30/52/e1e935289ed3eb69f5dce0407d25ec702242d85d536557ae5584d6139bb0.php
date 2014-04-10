<?php

/* AdminUnadBundle:Escuela:show.html.twig */
class __TwigTemplate_3052e1e935289ed3eb69f5dce0407d25ec702242d85d536557ae5584d6139bb0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('body', $context, $blocks);
    }

    public function block_body($context, array $blocks = array())
    {
        // line 3
        echo "<div class=\"modal-header\">
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                 <h4 class=\"modal-title\">";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "nombre"), "html", null, true);
        echo "</h4>
            </div>\t\t\t<!-- /modal-header -->
            <div class=\"modal-body\">
  <table class=\"table table-bordered table-striped hidden-mobile\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Nombre</th>
                <td>";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "nombre"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Sigla</th>
                <td>";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "sigla"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Decano</th>
                <td>";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "decano"), "nombres"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "decano"), "apellidos"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Secretaria Academica</th>
                <td>";
        // line 28
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "secretaria")) ? ((($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "secretaria"), "nombres") . " ") . $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "secretaria"), "apellidos"))) : ("SIN")), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

        <ul class=\"record_actions\">
    <li>
        <a href=\"";
        // line 35
        echo $this->env->getExtension('routing')->getPath("escuela");
        echo "\">
            Volver a la lista
        </a>
    </li>
    <li>
        <a href=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("escuela_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
        echo "\">
            Editar
        </a>
    </li>
    <li>";
        // line 44
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form');
        echo "</li>
</ul>
            </div>\t\t\t<!-- /modal-body -->
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Close</button>
            </div>\t\t\t<!-- /modal-footer -->
        
        <!-- /modal-dialog -->


";
    }

    public function getTemplateName()
    {
        return "AdminUnadBundle:Escuela:show.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  70 => 28,  20 => 1,  114 => 55,  81 => 34,  134 => 75,  126 => 73,  113 => 70,  465 => 315,  449 => 311,  445 => 310,  439 => 307,  421 => 295,  415 => 292,  403 => 286,  397 => 283,  391 => 280,  385 => 277,  373 => 271,  367 => 268,  343 => 247,  338 => 244,  335 => 243,  331 => 239,  328 => 238,  321 => 21,  316 => 19,  310 => 16,  301 => 13,  296 => 11,  292 => 10,  289 => 9,  286 => 8,  280 => 7,  274 => 428,  272 => 243,  267 => 240,  265 => 238,  160 => 136,  58 => 37,  23 => 1,  53 => 18,  34 => 5,  480 => 162,  474 => 161,  469 => 316,  461 => 314,  457 => 313,  453 => 312,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 298,  423 => 142,  413 => 134,  409 => 289,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 274,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 14,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 78,  132 => 51,  128 => 49,  107 => 36,  61 => 24,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 53,  119 => 57,  102 => 63,  71 => 19,  67 => 26,  63 => 15,  59 => 14,  38 => 6,  94 => 28,  89 => 20,  85 => 25,  75 => 17,  68 => 14,  56 => 9,  87 => 58,  21 => 2,  26 => 3,  93 => 28,  88 => 40,  78 => 21,  46 => 14,  27 => 4,  44 => 12,  31 => 4,  28 => 3,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 88,  156 => 66,  151 => 83,  142 => 59,  138 => 85,  136 => 56,  121 => 46,  117 => 71,  105 => 40,  91 => 59,  62 => 23,  49 => 14,  24 => 4,  25 => 5,  19 => 1,  79 => 18,  72 => 16,  69 => 25,  47 => 16,  40 => 12,  37 => 24,  22 => 2,  246 => 90,  157 => 56,  145 => 46,  139 => 45,  131 => 52,  123 => 72,  120 => 72,  115 => 43,  111 => 66,  108 => 36,  101 => 32,  98 => 45,  96 => 31,  83 => 25,  74 => 30,  66 => 23,  55 => 15,  52 => 15,  50 => 10,  43 => 8,  41 => 7,  35 => 6,  32 => 4,  29 => 3,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 57,  154 => 58,  149 => 51,  147 => 58,  144 => 49,  141 => 48,  133 => 55,  130 => 74,  125 => 44,  122 => 43,  116 => 41,  112 => 42,  109 => 34,  106 => 64,  103 => 32,  99 => 31,  95 => 44,  92 => 21,  86 => 28,  82 => 22,  80 => 35,  73 => 19,  64 => 17,  60 => 22,  57 => 23,  54 => 20,  51 => 14,  48 => 13,  45 => 27,  42 => 10,  39 => 10,  36 => 12,  33 => 4,  30 => 5,);
    }
}
