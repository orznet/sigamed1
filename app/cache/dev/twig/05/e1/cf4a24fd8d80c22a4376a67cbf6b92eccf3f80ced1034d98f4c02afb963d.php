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
        echo "<html>
<head>
<title>Inicio de sesión SIGA</title>
<meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
<link href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/css/style.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
</head>
<body>
<div id=\"header\">
\t<div class=\"inHeaderLogin\"></div>
</div>
";
        // line 11
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 12
            echo "    <center>        
<div class=\"mserror\">";
            // line 13
            echo twig_escape_filter($this->env, ((($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "message") == "Bad credentials")) ? ("Usted no tiene acceso a este módulo") : ($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "message"))), "html", null, true);
            echo "</div>
</center>
";
        }
        // line 16
        echo "<div id=\"loginForm\">
\t<div class=\"headLoginForm\">
\tInicio de sesión
\t</div>
\t<div class=\"fieldLogin\">
\t<form action=\"";
        // line 21
        echo $this->env->getExtension('routing')->getPath("login_check");
        echo "\" method=\"post\">
\t<label for=\"username\">Usuario:</label><br>
\t<input id=\"username\" type=\"text\" name=\"_username\" value=\"";
        // line 23
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" class=\"login\"/><br>
        <label for=\"password\">Contraseña:</label><br>
\t<input id=\"password\" type=\"password\" name=\"_password\" class=\"login\"/><br>
\t<input type=\"submit\" name=\"login\" class=\"button\" value=\"Entrar\">
\t</form>
\t</div>
</div>
</body>
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
        return array (  57 => 23,  52 => 21,  45 => 16,  39 => 13,  36 => 12,  34 => 11,  25 => 5,  19 => 1,);
    }
}
