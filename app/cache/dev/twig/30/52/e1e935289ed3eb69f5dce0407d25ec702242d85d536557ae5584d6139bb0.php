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
        return array (  95 => 44,  88 => 40,  80 => 35,  70 => 28,  61 => 24,  54 => 20,  47 => 16,  40 => 12,  30 => 5,  26 => 3,  20 => 1,);
    }
}
