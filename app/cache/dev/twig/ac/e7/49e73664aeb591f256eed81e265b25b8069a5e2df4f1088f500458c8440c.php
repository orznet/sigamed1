<?php

/* AdminUnadBundle:Escuela:edit.html.twig */
class __TwigTemplate_ace749e73664aeb591f256eed81e265b25b8069a5e2df4f1088f500458c8440c extends Twig_Template
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
        echo "<h1>Escuela Editar</h1>

    ";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form');
        echo "

        <ul class=\"record_actions\">
    <li>
        <a href=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("escuela");
        echo "\">
            Back to the list
        </a>
    </li>
    <li>";
        // line 14
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form');
        echo "</li>
</ul>
";
    }

    public function getTemplateName()
    {
        return "AdminUnadBundle:Escuela:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 55,  81 => 34,  134 => 75,  126 => 73,  113 => 70,  465 => 315,  449 => 311,  445 => 310,  439 => 307,  421 => 295,  415 => 292,  403 => 286,  397 => 283,  391 => 280,  385 => 277,  373 => 271,  367 => 268,  343 => 247,  338 => 244,  335 => 243,  331 => 239,  328 => 238,  321 => 21,  316 => 19,  310 => 16,  301 => 13,  296 => 11,  292 => 10,  289 => 9,  286 => 8,  280 => 7,  274 => 428,  272 => 243,  267 => 240,  265 => 238,  160 => 136,  58 => 37,  23 => 1,  53 => 18,  34 => 5,  480 => 162,  474 => 161,  469 => 316,  461 => 314,  457 => 313,  453 => 312,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 298,  423 => 142,  413 => 134,  409 => 289,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 274,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 14,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 78,  132 => 51,  128 => 49,  107 => 36,  61 => 21,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 53,  119 => 57,  102 => 32,  71 => 19,  67 => 26,  63 => 15,  59 => 14,  38 => 6,  94 => 28,  89 => 20,  85 => 25,  75 => 17,  68 => 14,  56 => 9,  87 => 25,  21 => 2,  26 => 6,  93 => 28,  88 => 38,  78 => 21,  46 => 14,  27 => 4,  44 => 12,  31 => 4,  28 => 3,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 88,  156 => 66,  151 => 83,  142 => 59,  138 => 54,  136 => 56,  121 => 46,  117 => 71,  105 => 40,  91 => 27,  62 => 23,  49 => 14,  24 => 4,  25 => 5,  19 => 1,  79 => 18,  72 => 16,  69 => 25,  47 => 9,  40 => 8,  37 => 24,  22 => 2,  246 => 90,  157 => 56,  145 => 46,  139 => 45,  131 => 52,  123 => 47,  120 => 72,  115 => 43,  111 => 37,  108 => 36,  101 => 32,  98 => 45,  96 => 31,  83 => 25,  74 => 30,  66 => 23,  55 => 15,  52 => 15,  50 => 10,  43 => 8,  41 => 7,  35 => 6,  32 => 4,  29 => 3,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 57,  154 => 58,  149 => 51,  147 => 58,  144 => 49,  141 => 48,  133 => 55,  130 => 74,  125 => 44,  122 => 43,  116 => 41,  112 => 42,  109 => 34,  106 => 50,  103 => 32,  99 => 31,  95 => 28,  92 => 21,  86 => 28,  82 => 22,  80 => 19,  73 => 19,  64 => 17,  60 => 22,  57 => 23,  54 => 10,  51 => 14,  48 => 13,  45 => 27,  42 => 10,  39 => 10,  36 => 12,  33 => 4,  30 => 7,);
    }
}
