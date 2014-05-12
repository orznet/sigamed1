<?php

/* AdminUserBundle:Security:login.html.twig */
class __TwigTemplate_05e1cf4a24fd8d80c22a4376a67cbf6b92eccf3f80ced1034d98f4c02afb963d extends Twig_Template
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
        // line 1
        echo "<!DOCTYPE html>
\t<head>
\t\t<meta charset=\"utf-8\">
\t\t<!--<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,chrome=1\">-->

\t\t<title>SIGA - Login </title>
\t\t<meta name=\"description\" content=\"\">
\t\t<meta name=\"author\" content=\"\">

\t\t<!-- Use the correct meta names below for your web application
\t\t\t Ref: http://davidbcalhoun.com/2010/viewport-metatag 
\t\t\t 
\t\t<meta name=\"HandheldFriendly\" content=\"True\">
\t\t<meta name=\"MobileOptimized\" content=\"320\">-->
\t\t
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no\">

\t\t<!-- Basic Styles -->
\t\t<link rel=\"stylesheet\" type=\"text/css\" media=\"screen\" href=\"css/bootstrap.min.css\">\t
\t\t<link rel=\"stylesheet\" type=\"text/css\" media=\"screen\" href=\"css/font-awesome.min.css\">

\t\t<!-- SmartAdmin Styles : Please note (smartadmin-production.css) was created using LESS variables -->
\t\t<link rel=\"stylesheet\" type=\"text/css\" media=\"screen\" href=\"css/smartadmin-production.css\">
\t\t<link rel=\"stylesheet\" type=\"text/css\" media=\"screen\" href=\"css/smartadmin-skins.css\">\t
\t\t
\t\t<!-- SmartAdmin RTL Support is under construction
\t\t\t<link rel=\"stylesheet\" type=\"text/css\" media=\"screen\" href=\"css/smartadmin-rtl.css\"> -->
\t\t
\t\t<!-- Demo purpose only: goes with demo.js, you can delete this css when designing your own WebApp -->
\t\t<link rel=\"stylesheet\" type=\"text/css\" media=\"screen\" href=\"css/demo.css\">

\t\t<!-- FAVICONS -->
\t\t<link rel=\"shortcut icon\" href=\"img/favicon/favicon.ico\" type=\"image/x-icon\">
\t\t<link rel=\"icon\" href=\"img/favicon/favicon.ico\" type=\"image/x-icon\">

\t\t<!-- GOOGLE FONT -->
\t\t<link rel=\"stylesheet\" href=\"http://fonts.googleapis.com/css?family=Open+Sans:400italic,700italic,300,400,700\">

\t</head>
\t<body id=\"login\" class=\"animated fadeInDown\">
\t\t<!-- possible classes: minified, no-right-panel, fixed-ribbon, fixed-header, fixed-width-->
\t\t<header id=\"header\">
\t\t\t<!--<span id=\"logo\"></span>-->

\t\t\t<div id=\"logo-group\">
\t\t\t\t<span id=\"logo\"> <img src=\"img/logo.png\" alt=\"SmartAdmin\"> </span>

\t\t\t\t<!-- END AJAX-DROPDOWN -->
\t\t\t</div>

\t\t</header>

\t\t<div id=\"main\" role=\"main\">

\t\t\t<!-- MAIN CONTENT -->
\t\t\t<div id=\"content\" class=\"container\">

\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-xs-12 col-sm-12 col-md-7 col-lg-8 hidden-xs hidden-sm\">
\t\t\t\t\t\t<h1 class=\"txt-color-red login-header-big\">SIGA</h1>
\t\t\t\t\t\t<div class=\"hero\">

\t\t\t\t\t\t\t<div class=\"pull-left login-desc-box-l\">
\t\t\t\t\t\t\t\t<h4 class=\"paragraph-header\">It's Okay to be Smart. Experience the simplicity of SmartAdmin, everywhere you go!</h4>
\t\t\t\t\t\t\t\t<div class=\"login-app-icons\">
\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0);\" class=\"btn btn-danger btn-sm\">Frontend Template</a>
\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0);\" class=\"btn btn-danger btn-sm\">Find out more</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<img src=\"img/demo/iphoneview.png\" class=\"pull-right display-image\" alt=\"\" style=\"width:210px\">

\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-xs-12 col-sm-12 col-md-6 col-lg-6\">
\t\t\t\t\t\t\t\t<h5 class=\"about-heading\">About SmartAdmin - Are you up to date?</h5>
\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\tSed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa.
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-xs-12 col-sm-12 col-md-6 col-lg-6\">
\t\t\t\t\t\t\t\t<h5 class=\"about-heading\">Not just your average template!</h5>
\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\tEt harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi voluptatem accusantium!
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t</div>
                                                ";
        // line 91
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 92
            echo "                                                <center>        
                                                <div class=\"mserror\">";
            // line 93
            echo twig_escape_filter($this->env, ((($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "message") == "Bad credentials")) ? ("Usted no tiene acceso a este módulo") : ($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "message"))), "html", null, true);
            echo "</div>
                                                </center>
                                                ";
        }
        // line 96
        echo "\t\t\t\t\t<div class=\"col-xs-12 col-sm-12 col-md-5 col-lg-4\">
\t\t\t\t\t\t<div class=\"well no-padding\">
                                                         <form action=\"";
        // line 98
        echo $this->env->getExtension('routing')->getPath("login_check");
        echo "\" method=\"post\" id=\"login-form\" class=\"smart-form client-form\">   
\t\t\t\t\t\t\t\t<header>
\t\t\t\t\t\t\t\t\tIniciar Sesión</header>

\t\t\t\t\t\t\t\t<fieldset>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<section>
\t\t\t\t\t\t\t\t\t\t<label class=\"label\">Usuario</label>
\t\t\t\t\t\t\t\t\t\t<label class=\"input\"> <i class=\"icon-append fa fa-user\"></i>
                                                                                        <input id=\"username\" type=\"text\" name=\"_username\" value=\"";
        // line 107
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" class=\"login\"/>
\t\t\t\t\t\t\t\t\t\t\t<b class=\"tooltip tooltip-top-right\"><i class=\"fa fa-user txt-color-teal\"></i> Ingrese su usuario</b></label>
     
\t\t\t\t\t\t\t\t\t</section>

\t\t\t\t\t\t\t\t\t<section>
\t\t\t\t\t\t\t\t\t\t<label class=\"label\">Password</label>
\t\t\t\t\t\t\t\t\t\t<label class=\"input\"> <i class=\"icon-append fa fa-lock\"></i>
                                                                                        <input id=\"password\" type=\"password\" name=\"_password\" class=\"login\"/>
\t\t\t\t\t\t\t\t\t\t\t<b class=\"tooltip tooltip-top-right\"><i class=\"fa fa-lock txt-color-teal\"></i> Ingrese su contraseña</b> </label>
\t\t\t\t\t\t\t\t\t</section>
\t\t\t\t\t\t\t\t</fieldset>
\t\t\t\t\t\t\t\t<footer>
\t\t\t\t\t\t\t\t\t<button type=\"submit\" name=\"login\" class=\"btn btn-primary\">
\t\t\t\t\t\t\t\t\t\tIniciar
\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t</footer>
\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>

\t\t</div>

\t\t<!--================================================== -->\t

\t\t<!-- PACE LOADER - turn this on if you want ajax loading to show (caution: uses lots of memory on iDevices)-->
\t\t<script src=\"js/plugin/pace/pace.min.js\"></script>

\t    <!-- Link to Google CDN's jQuery + jQueryUI; fall back to local -->
\t    <script src=\"//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js\"></script>
\t\t<script> if (!window.jQuery) { document.write('<script src=\"js/libs/jquery-2.0.2.min.js\"><\\/script>');} </script>

\t    <script src=\"//ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js\"></script>
\t\t<script> if (!window.jQuery.ui) { document.write('<script src=\"js/libs/jquery-ui-1.10.3.min.js\"><\\/script>');} </script>

\t\t<!-- JS TOUCH : include this plugin for mobile drag / drop touch events \t\t
\t\t<script src=\"js/plugin/jquery-touch/jquery.ui.touch-punch.min.js\"></script> -->

\t\t<!-- BOOTSTRAP JS -->\t\t
\t\t<script src=\"js/bootstrap/bootstrap.min.js\"></script>

\t\t<!-- CUSTOM NOTIFICATION -->
\t\t<script src=\"js/notification/SmartNotification.min.js\"></script>

\t\t<!-- JARVIS WIDGETS -->
\t\t<script src=\"js/smartwidgets/jarvis.widget.min.js\"></script>
\t\t
\t\t<!-- EASY PIE CHARTS -->
\t\t<script src=\"js/plugin/easy-pie-chart/jquery.easy-pie-chart.min.js\"></script>
\t\t
\t\t<!-- SPARKLINES -->
\t\t<script src=\"js/plugin/sparkline/jquery.sparkline.min.js\"></script>
\t\t
\t\t<!-- JQUERY VALIDATE -->
\t\t<script src=\"js/plugin/jquery-validate/jquery.validate.min.js\"></script>
\t\t
\t\t<!-- JQUERY MASKED INPUT -->
\t\t<script src=\"js/plugin/masked-input/jquery.maskedinput.min.js\"></script>
\t\t
\t\t<!-- JQUERY SELECT2 INPUT -->
\t\t<script src=\"js/plugin/select2/select2.min.js\"></script>

\t\t<!-- JQUERY UI + Bootstrap Slider -->
\t\t<script src=\"js/plugin/bootstrap-slider/bootstrap-slider.min.js\"></script>
\t\t
\t\t<!-- browser msie issue fix -->
\t\t<script src=\"js/plugin/msie-fix/jquery.mb.browser.min.js\"></script>
\t\t
\t\t<!-- FastClick: For mobile devices -->
\t\t<script src=\"js/plugin/fastclick/fastclick.js\"></script>
\t\t
\t\t<!--[if IE 7]>
\t\t\t
\t\t\t<h1>Your browser is out of date, please update your browser by going to www.microsoft.com/download</h1>
\t\t\t
\t\t<![endif]-->

\t\t<!-- MAIN APP JS FILE -->
\t\t<script src=\"js/app.js\"></script>

\t\t<script type=\"text/javascript\">
\t\t\trunAllForms();

\t\t\t\$(function() {
\t\t\t\t// Validation
\t\t\t\t\$(\"#login-form\").validate({
\t\t\t\t\t// Rules for form validation
\t\t\t\t\trules : {
\t\t\t\t\t\temail : {
\t\t\t\t\t\t\trequired : true,
\t\t\t\t\t\t\temail : false
\t\t\t\t\t\t},
\t\t\t\t\t\tpassword : {
\t\t\t\t\t\t\trequired : true,
\t\t\t\t\t\t\tminlength : 3,
\t\t\t\t\t\t\tmaxlength : 20
\t\t\t\t\t\t}
\t\t\t\t\t},

\t\t\t\t\t// Messages for form validation
\t\t\t\t\tmessages : {
\t\t\t\t\t\temail : {
\t\t\t\t\t\t\trequired : 'Please enter your email address',
\t\t\t\t\t\t\temail : 'Please enter a VALID email address'
\t\t\t\t\t\t},
\t\t\t\t\t\tpassword : {
\t\t\t\t\t\t\trequired : 'Please enter your password'
\t\t\t\t\t\t}
\t\t\t\t\t},

\t\t\t\t\t// Do not change code below
\t\t\t\t\terrorPlacement : function(error, element) {
\t\t\t\t\t\terror.insertAfter(element.parent());
\t\t\t\t\t}
\t\t\t\t});
\t\t\t});
\t\t</script>

\t</body>
</html>";
    }

    public function getTemplateName()
    {
        return "AdminUserBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 98,  113 => 92,  479 => 308,  475 => 307,  471 => 306,  467 => 305,  463 => 304,  459 => 303,  455 => 302,  449 => 299,  431 => 287,  425 => 284,  419 => 281,  401 => 272,  395 => 269,  389 => 266,  383 => 263,  377 => 260,  353 => 239,  348 => 236,  345 => 235,  338 => 230,  331 => 21,  326 => 19,  320 => 16,  315 => 14,  311 => 13,  306 => 11,  302 => 10,  299 => 9,  296 => 8,  290 => 7,  284 => 420,  282 => 235,  277 => 232,  275 => 230,  188 => 146,  170 => 137,  160 => 130,  58 => 37,  23 => 1,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 290,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 278,  409 => 132,  407 => 275,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 231,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 51,  128 => 49,  107 => 36,  61 => 13,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 53,  119 => 42,  102 => 32,  71 => 19,  67 => 15,  63 => 15,  59 => 14,  38 => 6,  94 => 28,  89 => 20,  85 => 25,  75 => 17,  68 => 14,  56 => 9,  87 => 25,  21 => 2,  26 => 6,  93 => 28,  88 => 6,  78 => 21,  46 => 7,  27 => 4,  44 => 12,  31 => 7,  28 => 2,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 67,  156 => 66,  151 => 63,  142 => 59,  138 => 107,  136 => 56,  121 => 46,  117 => 44,  105 => 40,  91 => 27,  62 => 23,  49 => 19,  24 => 4,  25 => 3,  19 => 1,  79 => 18,  72 => 16,  69 => 25,  47 => 9,  40 => 8,  37 => 24,  22 => 2,  246 => 90,  157 => 56,  145 => 46,  139 => 45,  131 => 52,  123 => 47,  120 => 40,  115 => 43,  111 => 91,  108 => 36,  101 => 32,  98 => 31,  96 => 31,  83 => 25,  74 => 50,  66 => 15,  55 => 15,  52 => 21,  50 => 10,  43 => 8,  41 => 26,  35 => 8,  32 => 4,  29 => 3,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 143,  176 => 140,  173 => 65,  168 => 72,  164 => 59,  162 => 57,  154 => 58,  149 => 51,  147 => 58,  144 => 49,  141 => 48,  133 => 55,  130 => 41,  125 => 44,  122 => 96,  116 => 93,  112 => 42,  109 => 34,  106 => 36,  103 => 32,  99 => 31,  95 => 28,  92 => 21,  86 => 28,  82 => 22,  80 => 19,  73 => 19,  64 => 17,  60 => 6,  57 => 11,  54 => 10,  51 => 14,  48 => 13,  45 => 27,  42 => 7,  39 => 9,  36 => 5,  33 => 4,  30 => 7,);
    }
}
