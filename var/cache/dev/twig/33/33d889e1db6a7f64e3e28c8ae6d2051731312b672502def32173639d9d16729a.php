<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_26b80a089787d7ff6138e7dca7b18f3df8d5e9198d9de373ebec246f6ac60a0c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d19b6d3be984ee50e36ea804e40debefe6d145c3ff72b3968f30bf2ae7a78b73 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d19b6d3be984ee50e36ea804e40debefe6d145c3ff72b3968f30bf2ae7a78b73->enter($__internal_d19b6d3be984ee50e36ea804e40debefe6d145c3ff72b3968f30bf2ae7a78b73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d19b6d3be984ee50e36ea804e40debefe6d145c3ff72b3968f30bf2ae7a78b73->leave($__internal_d19b6d3be984ee50e36ea804e40debefe6d145c3ff72b3968f30bf2ae7a78b73_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_c36c3a357be7bfb89252c5c0d71190775820a9ca58ee14d17010aade5bbe7ad5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c36c3a357be7bfb89252c5c0d71190775820a9ca58ee14d17010aade5bbe7ad5->enter($__internal_c36c3a357be7bfb89252c5c0d71190775820a9ca58ee14d17010aade5bbe7ad5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Collector/router.html.twig"));

        
        $__internal_c36c3a357be7bfb89252c5c0d71190775820a9ca58ee14d17010aade5bbe7ad5->leave($__internal_c36c3a357be7bfb89252c5c0d71190775820a9ca58ee14d17010aade5bbe7ad5_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_4b8f446997782a0447219919f68482782ada1774b6cbab41c919cb7f0147434f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b8f446997782a0447219919f68482782ada1774b6cbab41c919cb7f0147434f->enter($__internal_4b8f446997782a0447219919f68482782ada1774b6cbab41c919cb7f0147434f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Collector/router.html.twig"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_4b8f446997782a0447219919f68482782ada1774b6cbab41c919cb7f0147434f->leave($__internal_4b8f446997782a0447219919f68482782ada1774b6cbab41c919cb7f0147434f_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_de7c904c7ad9b128010dec145a3292b26d4118581ec63b870902119ce861a449 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de7c904c7ad9b128010dec145a3292b26d4118581ec63b870902119ce861a449->enter($__internal_de7c904c7ad9b128010dec145a3292b26d4118581ec63b870902119ce861a449_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Collector/router.html.twig"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_de7c904c7ad9b128010dec145a3292b26d4118581ec63b870902119ce861a449->leave($__internal_de7c904c7ad9b128010dec145a3292b26d4118581ec63b870902119ce861a449_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/Users/omarr/codigo/med/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
