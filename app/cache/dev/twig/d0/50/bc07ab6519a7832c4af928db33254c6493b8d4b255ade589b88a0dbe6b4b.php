<?php

/* ::base.html.twig */
class __TwigTemplate_d050bc07ab6519a7832c4af928db33254c6493b8d4b255ade589b88a0dbe6b4b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no\">
        
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 8
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 24
        echo "                
        <!-- FAVICONS -->
\t<link rel=\"shortcut icon\" href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/favicon/favicon.ico"), "html", null, true);
        echo "\" type=\"image/x-icon\">     
        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/favicon/favicon.ico"), "html", null, true);
        echo "\" />
    </head>
\t<body class=\"fixed-header smart-style-3\">
\t\t<!-- possible classes: minified, fixed-ribbon, fixed-header, fixed-width-->

\t\t<!-- HEADER -->
\t\t<header id=\"header\">
\t\t\t<div id=\"logo-group\">

\t\t\t\t<!-- PLACE YOUR LOGO HERE -->
\t\t\t\t<span id=\"logo\"> <img src=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/unad_2013.png"), "html", null, true);
        echo "\" alt=\"SmartAdmin\"> </span>
\t\t\t\t<!-- END LOGO PLACEHOLDER -->

\t\t\t\t<!-- Note: The activity badge color changes when clicked and resets the number to 0
\t\t\t\tSuggestion: You may want to set a flag when this happens to tick off all checked messages / notifications -->
\t\t\t\t<span id=\"activity\" class=\"activity-dropdown\"> <i class=\"fa fa-user\"></i> <b class=\"badge\"> 1 </b> </span>

\t\t\t\t<!-- AJAX-DROPDOWN : control this dropdown height, look and feel from the LESS variable file -->
\t\t\t\t<div class=\"ajax-dropdown\">

\t\t\t\t\t<!-- the ID links are fetched via AJAX to the ajax container \"ajax-notifications\" -->
\t\t\t\t\t<div class=\"btn-group btn-group-justified\" data-toggle=\"buttons\">
\t\t\t\t\t\t<label class=\"btn btn-default\">
\t\t\t\t\t\t\t<input type=\"radio\" name=\"activity\" id=\"ajax/notify/mail.html\">
\t\t\t\t\t\t\tMsgs (14) </label>
\t\t\t\t\t\t<label class=\"btn btn-default\">
\t\t\t\t\t\t\t<input type=\"radio\" name=\"activity\" id=\"ajax/notify/notifications.html\">
\t\t\t\t\t\t\tnotify (3) </label>
\t\t\t\t\t\t<label class=\"btn btn-default\">
\t\t\t\t\t\t\t<input type=\"radio\" name=\"activity\" id=\"ajax/notify/tasks.html\">
\t\t\t\t\t\t\tTasks (4) </label>
\t\t\t\t\t</div>

\t\t\t\t\t<!-- notification content -->
\t\t\t\t\t<div class=\"ajax-notifications custom-scroll\">

\t\t\t\t\t\t<div class=\"alert alert-transparent\">
\t\t\t\t\t\t\t<h4>Click a button to show messages here</h4>
\t\t\t\t\t\t\tThis blank page message helps protect your privacy, or you can show the first message here automatically.
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<i class=\"fa fa-lock fa-4x fa-border\"></i>

\t\t\t\t\t</div>
\t\t\t\t\t<!-- end notification content -->

\t\t\t\t\t<!-- footer: refresh area -->
\t\t\t\t\t<span> Last updated on: 12/12/2013 9:43AM
\t\t\t\t\t\t<button type=\"button\" data-loading-text=\"<i class='fa fa-refresh fa-spin'></i> Loading...\" class=\"btn btn-xs btn-default pull-right\">
\t\t\t\t\t\t\t<i class=\"fa fa-refresh\"></i>
\t\t\t\t\t\t</button> </span>
\t\t\t\t\t<!-- end footer -->

\t\t\t\t</div>
\t\t\t\t<!-- END AJAX-DROPDOWN -->
\t\t\t</div>

\t\t\t<!-- pulled right: nav area -->
\t\t\t<div class=\"pull-right\">

\t\t\t\t<!-- collapse menu button -->
\t\t\t\t<div id=\"hide-menu\" class=\"btn-header pull-right\">
\t\t\t\t\t<span> <a href=\"javascript:void(0);\" title=\"Collapse Menu\"><i class=\"fa fa-reorder\"></i></a> </span>
\t\t\t\t</div>
\t\t\t\t<!-- end collapse menu -->

\t\t\t\t<!-- logout button -->
\t\t\t\t<div id=\"logout\" class=\"btn-header transparent pull-right\">
\t\t\t\t\t<span> <a href=\"login.html\" title=\"Sign Out\"><i class=\"fa fa-sign-out\"></i></a> </span>
\t\t\t\t</div>
\t\t\t\t<!-- end logout button -->

\t\t\t\t<!-- search mobile button (this is hidden till mobile view port) -->
\t\t\t\t<div id=\"search-mobile\" class=\"btn-header transparent pull-right\">
\t\t\t\t\t<span> <a href=\"javascript:void(0)\" title=\"Search\"><i class=\"fa fa-search\"></i></a> </span>
\t\t\t\t</div>
\t\t\t\t<!-- end search mobile button -->


\t\t\t</div>
\t\t\t<!-- end pulled right: nav area -->

\t\t</header>
\t\t<!-- END HEADER -->
\t\t<!-- Left panel : Navigation area -->
\t\t<!-- Note: This width of the aside area can be adjusted through LESS variables -->
\t\t<aside id=\"left-panel\">

\t\t\t<!-- end user info -->
\t\t\t<!-- NAVIGATION : This navigation is also responsive
\t\t\tTo make this navigation dynamic please make sure to link the node
\t\t\t(the reference to the nav > ul) after page load. Or the navigation
\t\t\twill not initialize.
\t\t\t-->
\t\t\t<nav>
\t\t\t\t<!-- NOTE: Notice the gaps after each icon usage <i></i>..
\t\t\t\tPlease note that these links work a bit different than
\t\t\t\ttraditional hre=\"\" links. See documentation for details.
\t\t\t\t-->

\t\t\t\t<ul>
\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"index.html\" title=\"Dashboard\"><i class=\"fa fa-lg fa-fw fa-home\"></i> <span class=\"menu-item-parent\">Inicio</span></a>
\t\t\t\t\t</li>

\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"#\"><i class=\"fa fa-lg fa-fw fa-bar-chart-o\"></i> <span class=\"menu-item-parent\">Unad</span></a>
\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"";
        // line 136
        echo $this->env->getExtension('routing')->getPath("escuela");
        echo "\">Escuelas</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"morris.html\">Programas</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"inline-charts.html\">Zonas</a>
\t\t\t\t\t\t\t</li>
                                                        <li>
\t\t\t\t\t\t\t\t<a href=\"inline-charts.html\">Centros</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"#\"><i class=\"fa fa-lg fa-fw fa-table\"></i> <span class=\"menu-item-parent\">Centros</span></a>
\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"table.html\">Normal Tables</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"datatables.html\">Data Tables</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"#\"><i class=\"fa fa-lg fa-fw fa-desktop\"></i> <span class=\"menu-item-parent\">Zonas</span></a>
\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"general-elements.html\">General Elements</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"buttons.html\">Buttons</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"#\">Icons</a>
\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"fa.html\"><i class=\"fa fa-plane\"></i> Font Awesome</a>
\t\t\t\t\t\t\t\t\t</li>\t
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"glyph.html\"><i class=\"glyphicon glyphicon-plane\"></i> Glyph Icons </a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"grid.html\">Grid</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"treeview.html\">Tree View</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"nestable-list.html\">Nestable Lists</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"jqui.html\">JQuery UI</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"widgets.html\"><i class=\"fa fa-lg fa-fw fa-list-alt\"></i> <span class=\"menu-item-parent\">Instrumentos</span></a>
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"gallery.html\"><i class=\"fa fa-lg fa-fw fa-picture-o\"></i> <span class=\"menu-item-parent\">Reportes</span></a>
\t\t\t\t\t</li>
\t\t\t\t
\t\t\t\t</ul>
\t\t\t</nav>
\t\t\t<span class=\"minifyme\"> <i class=\"fa fa-arrow-circle-left hit\"></i> </span>

\t\t</aside>
\t\t<!-- END NAVIGATION -->

\t\t<!-- MAIN PANEL -->
\t\t<div id=\"main\" role=\"main\">

\t\t\t<!-- RIBBON -->
\t\t\t<div id=\"ribbon\">

\t\t\t\t<span class=\"ribbon-button-alignment\"> <span id=\"refresh\" class=\"btn btn-ribbon\" data-title=\"refresh\"  rel=\"tooltip\" data-placement=\"bottom\" data-original-title=\"<i class='text-warning fa fa-warning'></i> Precaución! Reiniciar consulta\" data-html=\"true\"><i class=\"fa fa-refresh\"></i></span> </span>
\t\t\t\t<!-- You can also add more buttons to the
\t\t\t\tribbon for further usability

\t\t\t\tExample below:

\t\t\t\t<span class=\"ribbon-button-alignment pull-right\">
\t\t\t\t<span id=\"search\" class=\"btn btn-ribbon hidden-xs\" data-title=\"search\"><i class=\"fa-grid\"></i> Change Grid</span>
\t\t\t\t<span id=\"add\" class=\"btn btn-ribbon hidden-xs\" data-title=\"add\"><i class=\"fa-plus\"></i> Add</span>
\t\t\t\t<span id=\"search\" class=\"btn btn-ribbon\" data-title=\"search\"><i class=\"fa-search\"></i> <span class=\"hidden-mobile\">Search</span></span>
\t\t\t\t</span> -->

\t\t\t</div>
\t\t\t<!-- END RIBBON -->

\t\t\t<!-- MAIN CONTENT -->
\t\t\t<div id=\"content\">
\t\t\t
\t\t\t\t<!-- widget grid -->
\t\t\t\t<section id=\"widget-grid\" class=\"\">
\t\t\t\t
\t\t\t\t\t<!-- row -->
\t\t\t\t\t<div class=\"row\">

                                        ";
        // line 238
        $this->displayBlock('body', $context, $blocks);
        // line 240
        echo "                                        </div>\t\t\t
\t\t\t\t\t<!-- end row -->

";
        // line 243
        $this->displayBlock('javascripts', $context, $blocks);
        // line 428
        echo "    </body>
</html>
";
    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        echo "Unad MED 2014  V2";
    }

    // line 8
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 9
        echo "                <!-- Basic Styles -->
\t\t<link rel=\"stylesheet\" type=\"text/css\" media=\"screen\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo "\">
\t\t<link rel=\"stylesheet\" type=\"text/css\" media=\"screen\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/font-awesome.min.css"), "html", null, true);
        echo "\">
\t\t<!-- SmartAdmin Styles : Please note (smartadmin-production.css) was created using LESS variables -->
\t\t<link rel=\"stylesheet\" type=\"text/css\" media=\"screen\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/smartadmin-production.css"), "html", null, true);
        echo "\">
\t\t<link rel=\"stylesheet\" type=\"text/css\" media=\"screen\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/smartadmin-skins.css"), "html", null, true);
        echo "\">
\t\t<!-- SmartAdmin RTL Support is under construction
\t\t<link rel=\"stylesheet\" type=\"text/css\" media=\"screen\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/smartadmin-rtl.css"), "html", null, true);
        echo "\"> -->
\t\t<!-- We recommend you use \"your_style.css\" to override SmartAdmin
\t\t     specific styles this will also ensure you retrain your customization with each SmartAdmin update.
\t\t<link rel=\"stylesheet\" type=\"text/css\" media=\"screen\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/your_style.css\""), "html", null, true);
        echo "> -->
\t\t<!-- GOOGLE FONT -->
\t\t<link rel=\"stylesheet\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("http://fonts.googleapis.com/css?family=Open+Sans:400italic,700italic,300,400,700"), "html", null, true);
        echo "\">

        ";
    }

    // line 238
    public function block_body($context, array $blocks = array())
    {
        // line 239
        echo "                                        ";
    }

    // line 243
    public function block_javascripts($context, array $blocks = array())
    {
        // line 244
        echo "\t\t<!-- END SHORTCUT AREA -->
\t\t<!--================================================== -->
\t\t<!-- PACE LOADER - turn this on if you want ajax loading to show (caution: uses lots of memory on iDevices)-->
\t\t<script data-pace-options='{ \"restartOnRequestAfter\": true }' src=\"";
        // line 247
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/plugin/pace/pace.min.js"), "html", null, true);
        echo "\"></script>

\t\t<!-- Link to Google CDN's jQuery + jQueryUI; fall back to local -->
\t\t<script src=\"http://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js\"></script>
\t\t<script>
\t\t\tif (!window.jQuery) {
\t\t\t\tdocument.write('<script src=\"js/libs/jquery-2.0.2.min.js\"><\\/script>');
\t\t\t}
\t\t</script>

\t\t<script src=\"http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js\"></script>
\t\t<script>
\t\t\tif (!window.jQuery.ui) {
\t\t\t\tdocument.write('<script src=\"js/libs/jquery-ui-1.10.3.min.js\"><\\/script>');
\t\t\t}
\t\t</script>

\t\t<!-- JS TOUCH : include this plugin for mobile drag / drop touch events
\t\t<script src=\"js/plugin/jquery-touch/jquery.ui.touch-punch.min.js\"></script> -->

\t\t<!-- BOOTSTRAP JS -->
\t\t<script src=\"";
        // line 268
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/bootstrap/bootstrap.min.js"), "html", null, true);
        echo "\"></script>

\t\t<!-- CUSTOM NOTIFICATION -->
\t\t<script src=\"";
        // line 271
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/notification/SmartNotification.min.js"), "html", null, true);
        echo "\"></script>

\t\t<!-- JARVIS WIDGETS -->
\t\t<script src=\"";
        // line 274
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/smartwidgets/jarvis.widget.min.js"), "html", null, true);
        echo "\"></script>

\t\t<!-- EASY PIE CHARTS -->
\t\t<script src=\"";
        // line 277
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/plugin/easy-pie-chart/jquery.easy-pie-chart.min.js"), "html", null, true);
        echo "\"></script>

\t\t<!-- SPARKLINES -->
\t\t<script src=\"";
        // line 280
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/plugin/sparkline/jquery.sparkline.min.js"), "html", null, true);
        echo "\"></script>

\t\t<!-- JQUERY VALIDATE -->
\t\t<script src=\"";
        // line 283
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/plugin/jquery-validate/jquery.validate.min.js"), "html", null, true);
        echo "\"></script>

\t\t<!-- JQUERY MASKED INPUT -->
\t\t<script src=\"";
        // line 286
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/plugin/masked-input/jquery.maskedinput.min.js"), "html", null, true);
        echo "\"></script>

\t\t<!-- JQUERY SELECT2 INPUT -->
\t\t<script src=\"";
        // line 289
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/plugin/select2/select2.min.js"), "html", null, true);
        echo "\"></script>

\t\t<!-- JQUERY UI + Bootstrap Slider -->
\t\t<script src=\"";
        // line 292
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/plugin/bootstrap-slider/bootstrap-slider.min.js"), "html", null, true);
        echo "\"></script>

\t\t<!-- browser msie issue fix -->
\t\t<script src=\"";
        // line 295
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/plugin/msie-fix/jquery.mb.browser.min.js"), "html", null, true);
        echo "\"></script>

\t\t<!-- FastClick: For mobile devices -->
\t\t<script src=\"";
        // line 298
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/plugin/fastclick/fastclick.js"), "html", null, true);
        echo "\"></script>

\t\t<!--[if IE 7]>

\t\t<h1>Your browser is out of date, please update your browser by going to www.microsoft.com/download</h1>

\t\t<![endif]-->

\t\t<!-- MAIN APP JS FILE -->
\t\t<script src=\"";
        // line 307
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/app.js"), "html", null, true);
        echo "\"></script>

\t\t<!-- PAGE RELATED PLUGIN(S) -->
\t\t<script src=\"";
        // line 310
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/plugin/datatables/jquery.dataTables-cust.min.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 311
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/plugin/datatables/ColReorder.min.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 312
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/plugin/datatables/FixedColumns.min.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 313
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/plugin/datatables/ColVis.min.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 314
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/plugin/datatables/ZeroClipboard.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 315
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/plugin/datatables/media/js/TableTools.min.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 316
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/plugin/datatables/DT_bootstrap.js"), "html", null, true);
        echo "\"></script>
\t\t
\t\t<script type=\"text/javascript\">
\t\t
\t\t// DO NOT REMOVE : GLOBAL FUNCTIONS!
\t\t
\t\t\$(document).ready(function() {
\t\t\t
\t\t\tpageSetUp();
\t\t\t
\t\t\t/*
\t\t\t * BASIC
\t\t\t */
\t\t\t\$('#dt_basic').dataTable({
\t\t\t\t\"sPaginationType\" : \"bootstrap_full\"
\t\t\t});
\t
\t\t\t/* END BASIC */
\t
\t\t\t/* Add the events etc before DataTables hides a column */
\t\t\t\$(\"#datatable_fixed_column thead input\").keyup(function() {
\t\t\t\toTable.fnFilter(this.value, oTable.oApi._fnVisibleToColumnIndex(oTable.fnSettings(), \$(\"thead input\").index(this)));
\t\t\t});
\t
\t\t\t\$(\"#datatable_fixed_column thead input\").each(function(i) {
\t\t\t\tthis.initVal = this.value;
\t\t\t});
\t\t\t\$(\"#datatable_fixed_column thead input\").focus(function() {
\t\t\t\tif (this.className == \"search_init\") {
\t\t\t\t\tthis.className = \"\";
\t\t\t\t\tthis.value = \"\";
\t\t\t\t}
\t\t\t});
\t\t\t\$(\"#datatable_fixed_column thead input\").blur(function(i) {
\t\t\t\tif (this.value == \"\") {
\t\t\t\t\tthis.className = \"search_init\";
\t\t\t\t\tthis.value = this.initVal;
\t\t\t\t}
\t\t\t});\t\t
\t\t\t
\t
\t\t\tvar oTable = \$('#datatable_fixed_column').dataTable({
\t\t\t\t\"sDom\" : \"<'dt-top-row'><'dt-wrapper't><'dt-row dt-bottom-row'<'row'<'col-sm-6'i><'col-sm-6 text-right'p>>\",
\t\t\t\t//\"sDom\" : \"t<'row dt-wrapper'<'col-sm-6'i><'dt-row dt-bottom-row'<'row'<'col-sm-6'i><'col-sm-6 text-right'>>\",
\t\t\t\t\"oLanguage\" : {
\t\t\t\t\t\"sSearch\" : \"Search all columns:\"
\t\t\t\t},
\t\t\t\t\"bSortCellsTop\" : true
\t\t\t});\t\t
\t\t\t
\t
\t
\t\t\t/*
\t\t\t * COL ORDER
\t\t\t */
\t\t\t\$('#datatable_col_reorder').dataTable({
\t\t\t\t\"sPaginationType\" : \"bootstrap\",
\t\t\t\t\"sDom\" : \"R<'dt-top-row'Clf>r<'dt-wrapper't><'dt-row dt-bottom-row'<'row'<'col-sm-6'i><'col-sm-6 text-right'p>>\",
\t\t\t\t\"fnInitComplete\" : function(oSettings, json) {
\t\t\t\t\t\$('.ColVis_Button').addClass('btn btn-default btn-sm').html('Columns <i class=\"icon-arrow-down\"></i>');
\t\t\t\t}
\t\t\t});
\t\t\t
\t\t\t/* END COL ORDER */
\t
\t\t\t/* TABLE TOOLS */
\t\t\t\$('#datatable_tabletools').dataTable({
\t\t\t\t\"sDom\" : \"<'dt-top-row'Tlf>r<'dt-wrapper't><'dt-row dt-bottom-row'<'row'<'col-sm-6'i><'col-sm-6 text-right'p>>\",
\t\t\t\t\"oTableTools\" : {
\t\t\t\t\t\"aButtons\" : [\"copy\", \"print\", {
\t\t\t\t\t\t\"sExtends\" : \"collection\",
\t\t\t\t\t\t\"sButtonText\" : 'Save <span class=\"caret\" />',
\t\t\t\t\t\t\"aButtons\" : [\"csv\", \"xls\", \"pdf\"]
\t\t\t\t\t}],
\t\t\t\t\t\"sSwfPath\" : \"js/plugin/datatables/media/swf/copy_csv_xls_pdf.swf\"
\t\t\t\t},
\t\t\t\t\"fnInitComplete\" : function(oSettings, json) {
\t\t\t\t\t\$(this).closest('#dt_table_tools_wrapper').find('.DTTT.btn-group').addClass('table_tools_group').children('a.btn').each(function() {
\t\t\t\t\t\t\$(this).addClass('btn-sm btn-default');
\t\t\t\t\t});
\t\t\t\t}
\t\t\t});
\t\t
\t\t/* END TABLE TOOLS */
                    \$(document).on('hidden.bs.modal', function (e) {
                    if (\$(e.target).attr('data-refresh') == 'true') {
                    // Remove modal data
                    \$(e.target).removeData('bs.modal');
                    // Empty the HTML of modal
                    //\$(e.target).html('');
                    }
                    });
\t\t})

                </script>

                <!-- Your GOOGLE ANALYTICS CODE Below -->
                <script type=\"text/javascript\">
                var _gaq = _gaq || [];
                _gaq.push(['_setAccount', 'UA-XXXXXXXX-X']);
                _gaq.push(['_trackPageview']);

                (function() {
                var ga = document.createElement('script');
                ga.type = 'text/javascript';
                ga.async = true;
                ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
                var s = document.getElementsByTagName('script')[0];
                s.parentNode.insertBefore(ga, s);
                })();
                </script>
";
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
        return array (  465 => 315,  449 => 311,  445 => 310,  439 => 307,  421 => 295,  415 => 292,  403 => 286,  397 => 283,  391 => 280,  385 => 277,  373 => 271,  367 => 268,  343 => 247,  338 => 244,  335 => 243,  331 => 239,  328 => 238,  321 => 21,  316 => 19,  310 => 16,  301 => 13,  296 => 11,  292 => 10,  289 => 9,  286 => 8,  280 => 7,  274 => 428,  272 => 243,  267 => 240,  265 => 238,  160 => 136,  58 => 37,  23 => 1,  53 => 16,  34 => 11,  480 => 162,  474 => 161,  469 => 316,  461 => 314,  457 => 313,  453 => 312,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 298,  423 => 142,  413 => 134,  409 => 289,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 274,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 14,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 51,  128 => 49,  107 => 36,  61 => 21,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 53,  119 => 42,  102 => 32,  71 => 19,  67 => 15,  63 => 15,  59 => 14,  38 => 6,  94 => 28,  89 => 20,  85 => 25,  75 => 17,  68 => 14,  56 => 9,  87 => 25,  21 => 2,  26 => 6,  93 => 28,  88 => 6,  78 => 21,  46 => 7,  27 => 4,  44 => 12,  31 => 7,  28 => 3,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 67,  156 => 66,  151 => 63,  142 => 59,  138 => 54,  136 => 56,  121 => 46,  117 => 44,  105 => 40,  91 => 27,  62 => 23,  49 => 19,  24 => 4,  25 => 5,  19 => 1,  79 => 18,  72 => 16,  69 => 25,  47 => 9,  40 => 8,  37 => 24,  22 => 2,  246 => 90,  157 => 56,  145 => 46,  139 => 45,  131 => 52,  123 => 47,  120 => 40,  115 => 43,  111 => 37,  108 => 36,  101 => 32,  98 => 31,  96 => 31,  83 => 25,  74 => 14,  66 => 23,  55 => 15,  52 => 21,  50 => 10,  43 => 8,  41 => 26,  35 => 8,  32 => 4,  29 => 3,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 57,  154 => 58,  149 => 51,  147 => 58,  144 => 49,  141 => 48,  133 => 55,  130 => 41,  125 => 44,  122 => 43,  116 => 41,  112 => 42,  109 => 34,  106 => 36,  103 => 32,  99 => 31,  95 => 28,  92 => 21,  86 => 28,  82 => 22,  80 => 19,  73 => 19,  64 => 17,  60 => 6,  57 => 23,  54 => 10,  51 => 14,  48 => 13,  45 => 27,  42 => 8,  39 => 13,  36 => 12,  33 => 4,  30 => 7,);
    }
}
