<?php

/* PCVDemoBundle:Edit:profesion.html.twig */
class __TwigTemplate_653242fea73794ab6a4d28c07082dfb315f304253f5f9a1cb67b456f3dc5f2df extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'edit_profession' => array($this, 'block_edit_profession'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('edit_profession', $context, $blocks);
    }

    public function block_edit_profession($context, array $blocks = array())
    {
        // line 2
        echo "<form action=\"";
        echo $this->env->getExtension('routing')->getPath("_edit_profesion");
        echo "\" method=\"POST\" role=\"form\">
\t<div class=\"row\">
\t\t<div class=\"col-md-8\">\t\t
\t\t\t<div class=\"form-group\">
\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t<span class=\"input-group-addon\" data-toggle=\"tooltip\" data-placement=\"left\" title=\"Categoria de tu Profesión\"><i class=\"fa fa-plus-square-o\"></i></span>
\t\t\t\t\t<select type=\"text\" class=\"form-control input-sm\" name=\"_categoria\">
\t\t\t\t\t\t<option value=\"\"";
        // line 9
        if (((isset($context["datosD"]) ? $context["datosD"] : $this->getContext($context, "datosD")) && twig_test_empty($this->getAttribute((isset($context["datosD"]) ? $context["datosD"] : $this->getContext($context, "datosD")), "categoriaProfesion", array())))) {
            echo "selected";
        }
        echo ">Categoria</option>
\t\t  \t\t\t\t<option value=\"Administración/Oficina\"";
        // line 10
        if (((isset($context["datosD"]) ? $context["datosD"] : $this->getContext($context, "datosD")) && ($this->getAttribute((isset($context["datosD"]) ? $context["datosD"] : $this->getContext($context, "datosD")), "categoriaProfesion", array()) == "Administración/Oficina"))) {
            echo "selected";
        }
        echo ">Administración/Oficina</option>
\t\t  \t\t\t\t<option value=\"Arte/Diseño/Medios\"";
        // line 11
        if (((isset($context["datosD"]) ? $context["datosD"] : $this->getContext($context, "datosD")) && ($this->getAttribute((isset($context["datosD"]) ? $context["datosD"] : $this->getContext($context, "datosD")), "categoriaProfesion", array()) == "Arte/Diseño/Medios"))) {
            echo "selected";
        }
        echo ">Arte/Diseño/Medios</option>
\t\t  \t\t\t\t<option value=\"Científico/Investigación\"";
        // line 12
        if (((isset($context["datosD"]) ? $context["datosD"] : $this->getContext($context, "datosD")) && ($this->getAttribute((isset($context["datosD"]) ? $context["datosD"] : $this->getContext($context, "datosD")), "categoriaProfesion", array()) == "Científico/Investigación"))) {
            echo "selected";
        }
        echo ">Científico/Investigación</option>
\t\t  \t\t\t\t<option value=\"Informática/Telecom.\"";
        // line 13
        if (((isset($context["datosD"]) ? $context["datosD"] : $this->getContext($context, "datosD")) && ($this->getAttribute((isset($context["datosD"]) ? $context["datosD"] : $this->getContext($context, "datosD")), "categoriaProfesion", array()) == "Informática/Telecom."))) {
            echo "selected";
        }
        echo ">Informática/Telecom.</option>
\t\t  \t\t\t\t<option value=\"Dirección/Gerencia\"";
        // line 14
        if (((isset($context["datosD"]) ? $context["datosD"] : $this->getContext($context, "datosD")) && ($this->getAttribute((isset($context["datosD"]) ? $context["datosD"] : $this->getContext($context, "datosD")), "categoriaProfesion", array()) == "Dirección/Gerencia"))) {
            echo "selected";
        }
        echo ">Dirección/Gerencia</option>
\t\t  \t\t\t\t<option value=\"Economía/Contabilidad\"";
        // line 15
        if (((isset($context["datosD"]) ? $context["datosD"] : $this->getContext($context, "datosD")) && ($this->getAttribute((isset($context["datosD"]) ? $context["datosD"] : $this->getContext($context, "datosD")), "categoriaProfesion", array()) == "Economía/Contabilidad"))) {
            echo "selected";
        }
        echo ">Economía/Contabilidad</option>
\t\t  \t\t\t\t<option value=\"Educación/Universidad\"";
        // line 16
        if (((isset($context["datosD"]) ? $context["datosD"] : $this->getContext($context, "datosD")) && ($this->getAttribute((isset($context["datosD"]) ? $context["datosD"] : $this->getContext($context, "datosD")), "categoriaProfesion", array()) == "Educación/Universidad"))) {
            echo "selected";
        }
        echo ">Educación/Universidad</option>
\t\t  \t\t\t\t<option value=\"Hostelería/Turismo\"";
        // line 17
        if (((isset($context["datosD"]) ? $context["datosD"] : $this->getContext($context, "datosD")) && ($this->getAttribute((isset($context["datosD"]) ? $context["datosD"] : $this->getContext($context, "datosD")), "categoriaProfesion", array()) == "Hostelería/Turismo"))) {
            echo "selected";
        }
        echo ">Hostelería/Turismo</option>
\t\t  \t\t\t\t<option value=\"Ingeniería/Técnico\"";
        // line 18
        if (((isset($context["datosD"]) ? $context["datosD"] : $this->getContext($context, "datosD")) && ($this->getAttribute((isset($context["datosD"]) ? $context["datosD"] : $this->getContext($context, "datosD")), "categoriaProfesion", array()) == "Ingeniería/Técnico"))) {
            echo "selected";
        }
        echo ">Ingeniería/Técnico</option>
\t\t  \t\t\t\t<option value=\"Legal/Asesoría\"";
        // line 19
        if (((isset($context["datosD"]) ? $context["datosD"] : $this->getContext($context, "datosD")) && ($this->getAttribute((isset($context["datosD"]) ? $context["datosD"] : $this->getContext($context, "datosD")), "categoriaProfesion", array()) == "Legal/Asesoría"))) {
            echo "selected";
        }
        echo ">Legal/Asesoría</option>
\t\t  \t\t\t\t<option value=\"Márketing/Ventas\"";
        // line 20
        if (((isset($context["datosD"]) ? $context["datosD"] : $this->getContext($context, "datosD")) && ($this->getAttribute((isset($context["datosD"]) ? $context["datosD"] : $this->getContext($context, "datosD")), "categoriaProfesion", array()) == "Márketing/Ventas"))) {
            echo "selected";
        }
        echo ">Márketing/Ventas</option>
\t\t  \t\t\t\t<option value=\"Medicina/Salud\"";
        // line 21
        if (((isset($context["datosD"]) ? $context["datosD"] : $this->getContext($context, "datosD")) && ($this->getAttribute((isset($context["datosD"]) ? $context["datosD"] : $this->getContext($context, "datosD")), "categoriaProfesion", array()) == "Medicina/Salud"))) {
            echo "selected";
        }
        echo ">Medicina/Salud</option>
\t\t  \t\t\t\t<option value=\"Recursos Humanos\"";
        // line 22
        if (((isset($context["datosD"]) ? $context["datosD"] : $this->getContext($context, "datosD")) && ($this->getAttribute((isset($context["datosD"]) ? $context["datosD"] : $this->getContext($context, "datosD")), "categoriaProfesion", array()) == "Recursos Humanos"))) {
            echo "selected";
        }
        echo ">Recursos Humanos</option>
\t\t  \t\t\t\t<option value=\"Otra\"";
        // line 23
        if (((isset($context["datosD"]) ? $context["datosD"] : $this->getContext($context, "datosD")) && ($this->getAttribute((isset($context["datosD"]) ? $context["datosD"] : $this->getContext($context, "datosD")), "categoriaProfesion", array()) == "Otra"))) {
            echo "selected";
        }
        echo ">Otra</option>
\t\t\t\t\t</select>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t
\t<div class=\"form-group\">
\t\t<div class=\"input-group\">
\t\t\t<span class=\"input-group-addon\" data-toggle=\"tooltip\" data-placement=\"left\" title=\"Ingresa tu Carrera Ocupación o Profesión\"><i class=\"fa fa-book\"></i></span>
\t\t\t<input type=\"text\" class=\"form-control input-sm\" id=\"profesion\" name=\"_titulo\" placeholder=\"Carrera, Ocupación o Profesión...\" value=\"";
        // line 33
        if (((isset($context["datosD"]) ? $context["datosD"] : $this->getContext($context, "datosD")) &&  !twig_test_empty($this->getAttribute((isset($context["datosD"]) ? $context["datosD"] : $this->getContext($context, "datosD")), "profesion", array())))) {
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["datosD"]) ? $context["datosD"] : $this->getContext($context, "datosD")), "profesion", array()), "html", null, true);
        }
        echo "\"/>
\t\t</div>
\t</div>
\t<div class=\"form-group\">
\t\t<div class=\"input-group\">
\t\t\t<span class=\"input-group-addon\" data-toggle=\"tooltip\" data-placement=\"left\" title=\"Ingresa Titulos Secundarios separados por una ',' Ej: 'Titulo1, Titulo2'\"><i class=\"fa fa-book\"></i></span>
\t\t\t<input type=\"text\" class=\"form-control input-sm\" id=\"profesion_descripcion\" name=\"_titulosecond\" placeholder=\"Añade Titulos Secundarios...\" value=\"";
        // line 39
        if (((isset($context["datosD"]) ? $context["datosD"] : $this->getContext($context, "datosD")) &&  !twig_test_empty($this->getAttribute((isset($context["datosD"]) ? $context["datosD"] : $this->getContext($context, "datosD")), "profesionsecond", array())))) {
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["datosD"]) ? $context["datosD"] : $this->getContext($context, "datosD")), "profesionsecond", array()), "html", null, true);
        }
        echo "\"/>
\t\t</div>
\t</div>
\t<div class=\"row\">
\t\t<div class=\"col-md-7\">
\t\t\t<div class=\"input-group\">
\t\t\t<span class=\"input-group-addon\" data-toggle=\"tooltip\" data-placement=\"left\" title=\"Nivel Educación Superior\"><i class=\"fa fa-certificate\"></i></span>
\t\t\t<select class=\"form-control input-sm\" name=\"_level\">
\t\t\t\t<option value=\"\"";
        // line 47
        if (((isset($context["datosD"]) ? $context["datosD"] : $this->getContext($context, "datosD")) && twig_test_empty($this->getAttribute((isset($context["datosD"]) ? $context["datosD"] : $this->getContext($context, "datosD")), "level", array())))) {
            echo "selected";
        }
        echo ">Nivel Educación Superior</option>
\t\t\t\t<option value=\"Titulado\"";
        // line 48
        if (((isset($context["datosD"]) ? $context["datosD"] : $this->getContext($context, "datosD")) && ($this->getAttribute((isset($context["datosD"]) ? $context["datosD"] : $this->getContext($context, "datosD")), "level", array()) == "Titulado"))) {
            echo "selected";
        }
        echo ">Titulado</option>
\t\t\t\t<option value=\"Egresado\"";
        // line 49
        if (((isset($context["datosD"]) ? $context["datosD"] : $this->getContext($context, "datosD")) && ($this->getAttribute((isset($context["datosD"]) ? $context["datosD"] : $this->getContext($context, "datosD")), "level", array()) == "Egresado"))) {
            echo "selected";
        }
        echo ">Egresado</option>
\t\t\t\t<option value=\"Cursando\"";
        // line 50
        if (((isset($context["datosD"]) ? $context["datosD"] : $this->getContext($context, "datosD")) && ($this->getAttribute((isset($context["datosD"]) ? $context["datosD"] : $this->getContext($context, "datosD")), "level", array()) == "Cursando"))) {
            echo "selected";
        }
        echo ">Cursando</option>
\t\t\t\t<option value=\"Incompleta\"";
        // line 51
        if (((isset($context["datosD"]) ? $context["datosD"] : $this->getContext($context, "datosD")) && ($this->getAttribute((isset($context["datosD"]) ? $context["datosD"] : $this->getContext($context, "datosD")), "level", array()) == "Incompleta"))) {
            echo "selected";
        }
        echo ">Incompleta</option>
\t\t\t\t<option value=\"Nula\"";
        // line 52
        if (((isset($context["datosD"]) ? $context["datosD"] : $this->getContext($context, "datosD")) && ($this->getAttribute((isset($context["datosD"]) ? $context["datosD"] : $this->getContext($context, "datosD")), "level", array()) == "Nula"))) {
            echo "selected";
        }
        echo ">Nula</option>
\t\t\t</select>
\t\t\t</div>
\t\t</div>
\t</div>
\t<br>
\t<div class=\"form-group\">
\t\t<div class=\"input-group\">
\t\t\t<span class=\"input-group-addon\" data-toggle=\"tooltip\" data-placement=\"left\" title=\"Ingresa Empresa o Proyecto Actual\"><i class=\"fa fa-briefcase\"></i></span>
\t\t\t<input type=\"text\" class=\"form-control input-sm\" id=\"actual\" name=\"_actual\" placeholder=\"Empresa o Proyecto Actual...\" value=\"";
        // line 61
        if (((isset($context["datosD"]) ? $context["datosD"] : $this->getContext($context, "datosD")) &&  !twig_test_empty($this->getAttribute((isset($context["datosD"]) ? $context["datosD"] : $this->getContext($context, "datosD")), "actual", array())))) {
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["datosD"]) ? $context["datosD"] : $this->getContext($context, "datosD")), "actual", array()), "html", null, true);
        }
        echo "\"/>
\t\t</div>
\t</div>
\t<div class=\"modal-footer\">
        <button type=\"submit\" class=\"btn btn-blue\" id=\"name\">Guardar</button>
        <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Cerrar</button>
    </div>
</form>
";
    }

    public function getTemplateName()
    {
        return "PCVDemoBundle:Edit:profesion.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  204 => 61,  190 => 52,  184 => 51,  178 => 50,  172 => 49,  166 => 48,  160 => 47,  147 => 39,  136 => 33,  121 => 23,  115 => 22,  109 => 21,  103 => 20,  97 => 19,  91 => 18,  85 => 17,  79 => 16,  73 => 15,  67 => 14,  61 => 13,  55 => 12,  49 => 11,  43 => 10,  37 => 9,  26 => 2,  20 => 1,);
    }
}
