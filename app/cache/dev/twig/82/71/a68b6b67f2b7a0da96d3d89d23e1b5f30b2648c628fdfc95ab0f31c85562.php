<?php

/* PCVDemoBundle:Edit:datos.html.twig */
class __TwigTemplate_8271a68b6b67f2b7a0da96d3d89d23e1b5f30b2648c628fdfc95ab0f31c85562 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'edit_data' => array($this, 'block_edit_data'),
            'edit_bio' => array($this, 'block_edit_bio'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('edit_data', $context, $blocks);
        // line 162
        echo "

";
        // line 164
        $this->displayBlock('edit_bio', $context, $blocks);
    }

    // line 1
    public function block_edit_data($context, array $blocks = array())
    {
        // line 2
        echo "<form action=\"";
        echo $this->env->getExtension('routing')->getPath("_edit_datos");
        echo "\" method=\"POST\" role=\"form\" name=\"editar\">
\t<div class=\"row\">
\t\t<div class=\"col-md-1\">
\t\t\t<i class=\"fa fa-gift\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Cumpleaños\"></i>
\t\t</div>

\t\t<div class=\"col-md-3\">
\t\t\t<select class=\"form-control\" name=\"_dia\" required>
\t\t\t\t<option value=\"\">Dia:</option>
\t\t\t\t";
        // line 11
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(range(1, 31));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 12
            echo "\t\t\t\t<option ";
            if (((isset($context["datosD"]) ? $context["datosD"] : $this->getContext($context, "datosD")) && (twig_date_format_filter($this->env, $this->getAttribute((isset($context["datosD"]) ? $context["datosD"] : $this->getContext($context, "datosD")), "birthday", array()), "d") == $context["i"]))) {
                echo "selected";
            }
            echo ">";
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo " </option>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "\t\t\t</select>\t\t    
\t\t</div>
\t
\t\t<div class=\"col-md-4\">
\t\t\t<select class=\"form-control\" name=\"_mes\" required>
\t\t\t\t<option value=\"\"";
        // line 19
        if (((isset($context["datosD"]) ? $context["datosD"] : $this->getContext($context, "datosD")) && (twig_date_format_filter($this->env, $this->getAttribute((isset($context["datosD"]) ? $context["datosD"] : $this->getContext($context, "datosD")), "birthday", array()), "m") == 0))) {
            echo "selected";
        }
        echo ">Mes:</option>
\t\t\t\t<option value=\"01\"";
        // line 20
        if (((isset($context["datosD"]) ? $context["datosD"] : $this->getContext($context, "datosD")) && (twig_date_format_filter($this->env, $this->getAttribute((isset($context["datosD"]) ? $context["datosD"] : $this->getContext($context, "datosD")), "birthday", array()), "m") == 1))) {
            echo "selected";
        }
        echo ">Enero</option>
\t\t\t\t<option value=\"02\"";
        // line 21
        if (((isset($context["datosD"]) ? $context["datosD"] : $this->getContext($context, "datosD")) && (twig_date_format_filter($this->env, $this->getAttribute((isset($context["datosD"]) ? $context["datosD"] : $this->getContext($context, "datosD")), "birthday", array()), "m") == 2))) {
            echo "selected";
        }
        echo ">Febrero</option>
\t\t\t\t<option value=\"03\"";
        // line 22
        if (((isset($context["datosD"]) ? $context["datosD"] : $this->getContext($context, "datosD")) && (twig_date_format_filter($this->env, $this->getAttribute((isset($context["datosD"]) ? $context["datosD"] : $this->getContext($context, "datosD")), "birthday", array()), "m") == 3))) {
            echo "selected";
        }
        echo ">Marzo</option>
\t\t\t\t<option value=\"04\"";
        // line 23
        if (((isset($context["datosD"]) ? $context["datosD"] : $this->getContext($context, "datosD")) && (twig_date_format_filter($this->env, $this->getAttribute((isset($context["datosD"]) ? $context["datosD"] : $this->getContext($context, "datosD")), "birthday", array()), "m") == 4))) {
            echo "selected";
        }
        echo ">Abril</option>
\t\t\t\t<option value=\"05\"";
        // line 24
        if (((isset($context["datosD"]) ? $context["datosD"] : $this->getContext($context, "datosD")) && (twig_date_format_filter($this->env, $this->getAttribute((isset($context["datosD"]) ? $context["datosD"] : $this->getContext($context, "datosD")), "birthday", array()), "m") == 5))) {
            echo "selected";
        }
        echo ">Mayo</option>
\t\t\t\t<option value=\"06\"";
        // line 25
        if (((isset($context["datosD"]) ? $context["datosD"] : $this->getContext($context, "datosD")) && (twig_date_format_filter($this->env, $this->getAttribute((isset($context["datosD"]) ? $context["datosD"] : $this->getContext($context, "datosD")), "birthday", array()), "m") == 6))) {
            echo "selected";
        }
        echo ">Junio</option>
\t\t\t\t<option value=\"07\"";
        // line 26
        if (((isset($context["datosD"]) ? $context["datosD"] : $this->getContext($context, "datosD")) && (twig_date_format_filter($this->env, $this->getAttribute((isset($context["datosD"]) ? $context["datosD"] : $this->getContext($context, "datosD")), "birthday", array()), "m") == 7))) {
            echo "selected";
        }
        echo ">Julio</option>
\t\t\t\t<option value=\"08\"";
        // line 27
        if (((isset($context["datosD"]) ? $context["datosD"] : $this->getContext($context, "datosD")) && (twig_date_format_filter($this->env, $this->getAttribute((isset($context["datosD"]) ? $context["datosD"] : $this->getContext($context, "datosD")), "birthday", array()), "m") == 8))) {
            echo "selected";
        }
        echo ">Agosto</option>
\t\t\t\t<option value=\"09\"";
        // line 28
        if (((isset($context["datosD"]) ? $context["datosD"] : $this->getContext($context, "datosD")) && (twig_date_format_filter($this->env, $this->getAttribute((isset($context["datosD"]) ? $context["datosD"] : $this->getContext($context, "datosD")), "birthday", array()), "m") == 9))) {
            echo "selected";
        }
        echo ">Septiembre</option>
\t\t\t\t<option value=\"10\"";
        // line 29
        if (((isset($context["datosD"]) ? $context["datosD"] : $this->getContext($context, "datosD")) && (twig_date_format_filter($this->env, $this->getAttribute((isset($context["datosD"]) ? $context["datosD"] : $this->getContext($context, "datosD")), "birthday", array()), "m") == 10))) {
            echo "selected";
        }
        echo ">Octubre</option>
\t\t\t\t<option value=\"11\"";
        // line 30
        if (((isset($context["datosD"]) ? $context["datosD"] : $this->getContext($context, "datosD")) && (twig_date_format_filter($this->env, $this->getAttribute((isset($context["datosD"]) ? $context["datosD"] : $this->getContext($context, "datosD")), "birthday", array()), "m") == 11))) {
            echo "selected";
        }
        echo ">Noviembre</option>
\t\t\t\t<option value=\"12\"";
        // line 31
        if (((isset($context["datosD"]) ? $context["datosD"] : $this->getContext($context, "datosD")) && (twig_date_format_filter($this->env, $this->getAttribute((isset($context["datosD"]) ? $context["datosD"] : $this->getContext($context, "datosD")), "birthday", array()), "m") == 12))) {
            echo "selected";
        }
        echo ">Diciembre</option>\t\t\t\t
\t\t\t</select>\t\t        \t\t
\t\t</div>
\t\t<div class=\"col-md-3\">
\t\t\t<select class=\"form-control\" name=\"_año\" required>
\t\t\t\t<option value=\"\">Año:</option>
\t\t\t\t";
        // line 37
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(range(1940, 2000));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 38
            echo "\t\t\t\t<option ";
            if (((isset($context["datosD"]) ? $context["datosD"] : $this->getContext($context, "datosD")) && (twig_date_format_filter($this->env, $this->getAttribute((isset($context["datosD"]) ? $context["datosD"] : $this->getContext($context, "datosD")), "birthday", array()), "Y") == $context["i"]))) {
                echo "selected";
            }
            echo ">";
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo "</option>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "\t\t\t</select>\t\t        \t\t
\t\t</div>
\t</div>
\t";
        // line 54
        echo "\t<br>
\t<div class=\"row\">
\t\t<div class=\"col-md-1\">
\t\t\t<i class=\"fa fa-map-marker\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Región\"></i>
\t\t</div>
\t\t<div class=\"col-md-5\">
\t\t\t<select class=\"form-control input-sm\" id=\"region\" name=\"_region\">
\t\t\t\t<option value=\"\"";
        // line 61
        if (((isset($context["datosD"]) ? $context["datosD"] : $this->getContext($context, "datosD")) && twig_test_empty($this->getAttribute((isset($context["datosD"]) ? $context["datosD"] : $this->getContext($context, "datosD")), "region", array())))) {
            echo "selected";
        }
        echo ">Región</option>\t
\t\t\t\t<option value=\"Arica y Parinacota\"";
        // line 62
        if (((isset($context["datosD"]) ? $context["datosD"] : $this->getContext($context, "datosD")) && ($this->getAttribute((isset($context["datosD"]) ? $context["datosD"] : $this->getContext($context, "datosD")), "region", array()) == "Arica y Parinacota"))) {
            echo "selected";
        }
        echo ">Arica y Parinacota</option>
\t\t\t\t<option value=\"Tarapacá\"";
        // line 63
        if (((isset($context["datosD"]) ? $context["datosD"] : $this->getContext($context, "datosD")) && ($this->getAttribute((isset($context["datosD"]) ? $context["datosD"] : $this->getContext($context, "datosD")), "region", array()) == "Tarapacá"))) {
            echo "selected";
        }
        echo ">Tarapacá</option>
\t\t\t\t<option value=\"Antofagasta\"";
        // line 64
        if (((isset($context["datosD"]) ? $context["datosD"] : $this->getContext($context, "datosD")) && ($this->getAttribute((isset($context["datosD"]) ? $context["datosD"] : $this->getContext($context, "datosD")), "region", array()) == "Antofagasta"))) {
            echo "selected";
        }
        echo ">Antofagasta</option>
\t\t\t\t<option value=\"Atacama\"";
        // line 65
        if (((isset($context["datosD"]) ? $context["datosD"] : $this->getContext($context, "datosD")) && ($this->getAttribute((isset($context["datosD"]) ? $context["datosD"] : $this->getContext($context, "datosD")), "region", array()) == "Atacama"))) {
            echo "selected";
        }
        echo ">Atacama</option>
\t\t\t\t<option value=\"Coquimbo\"";
        // line 66
        if (((isset($context["datosD"]) ? $context["datosD"] : $this->getContext($context, "datosD")) && ($this->getAttribute((isset($context["datosD"]) ? $context["datosD"] : $this->getContext($context, "datosD")), "region", array()) == "Coquimbo"))) {
            echo "selected";
        }
        echo ">Coquimbo</option>
\t\t\t\t<option value=\"Valparaíso\"";
        // line 67
        if (((isset($context["datosD"]) ? $context["datosD"] : $this->getContext($context, "datosD")) && ($this->getAttribute((isset($context["datosD"]) ? $context["datosD"] : $this->getContext($context, "datosD")), "region", array()) == "Valparaíso"))) {
            echo "selected";
        }
        echo ">Valparaíso</option>
\t\t\t\t<option value=\"Ohiggins\"";
        // line 68
        if (((isset($context["datosD"]) ? $context["datosD"] : $this->getContext($context, "datosD")) && ($this->getAttribute((isset($context["datosD"]) ? $context["datosD"] : $this->getContext($context, "datosD")), "region", array()) == "Ohiggins"))) {
            echo "selected";
        }
        echo ">Ohiggins</option>
\t\t\t\t<option value=\"Maule\"";
        // line 69
        if (((isset($context["datosD"]) ? $context["datosD"] : $this->getContext($context, "datosD")) && ($this->getAttribute((isset($context["datosD"]) ? $context["datosD"] : $this->getContext($context, "datosD")), "region", array()) == "Maule"))) {
            echo "selected";
        }
        echo ">Maule</option>
\t\t\t\t<option value=\"Bío Bío\"";
        // line 70
        if (((isset($context["datosD"]) ? $context["datosD"] : $this->getContext($context, "datosD")) && ($this->getAttribute((isset($context["datosD"]) ? $context["datosD"] : $this->getContext($context, "datosD")), "region", array()) == "Bío Bío"))) {
            echo "selected";
        }
        echo ">Bío Bío</option>
\t\t\t\t<option value=\"Araucanía\"";
        // line 71
        if (((isset($context["datosD"]) ? $context["datosD"] : $this->getContext($context, "datosD")) && ($this->getAttribute((isset($context["datosD"]) ? $context["datosD"] : $this->getContext($context, "datosD")), "region", array()) == "Araucanía"))) {
            echo "selected";
        }
        echo ">Araucanía</option>
\t\t\t\t<option value=\"Los Ríos\"";
        // line 72
        if (((isset($context["datosD"]) ? $context["datosD"] : $this->getContext($context, "datosD")) && ($this->getAttribute((isset($context["datosD"]) ? $context["datosD"] : $this->getContext($context, "datosD")), "region", array()) == "Los Ríos"))) {
            echo "selected";
        }
        echo ">Los Ríos</option>
\t\t\t\t<option value=\"Los Lagos\"";
        // line 73
        if (((isset($context["datosD"]) ? $context["datosD"] : $this->getContext($context, "datosD")) && ($this->getAttribute((isset($context["datosD"]) ? $context["datosD"] : $this->getContext($context, "datosD")), "region", array()) == "Los Lagos"))) {
            echo "selected";
        }
        echo ">Los Lagos</option>
\t\t\t\t<option value=\"Aysen\"";
        // line 74
        if (((isset($context["datosD"]) ? $context["datosD"] : $this->getContext($context, "datosD")) && ($this->getAttribute((isset($context["datosD"]) ? $context["datosD"] : $this->getContext($context, "datosD")), "region", array()) == "Aysen"))) {
            echo "selected";
        }
        echo ">Aysen</option>
\t\t\t\t<option value=\"Magallanes y Antártica\"";
        // line 75
        if (((isset($context["datosD"]) ? $context["datosD"] : $this->getContext($context, "datosD")) && ($this->getAttribute((isset($context["datosD"]) ? $context["datosD"] : $this->getContext($context, "datosD")), "region", array()) == "Magallanes y Antártica"))) {
            echo "selected";
        }
        echo ">Magallanes y Antártica</option>
\t\t\t\t<option value=\"Metropolitana\"";
        // line 76
        if (((isset($context["datosD"]) ? $context["datosD"] : $this->getContext($context, "datosD")) && ($this->getAttribute((isset($context["datosD"]) ? $context["datosD"] : $this->getContext($context, "datosD")), "region", array()) == "Metropolitana"))) {
            echo "selected";
        }
        echo ">Metropolitana</option>
\t\t\t</select>
        </div>

\t\t<div class=\"col-md-1\">
\t\t\t<i class=\"fa fa-map-marker\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Comuna\"></i>
\t\t</div>
\t\t<div class=\"col-md-5\">
\t\t\t<select class=\"form-control input-sm\" id=\"city\" name=\"_city\" disabled=\"disabled\">
\t\t\t</select>
        </div>
\t</div>\t\t
\t<br>
\t<div class=\"row\">
\t\t<div class=\"col-md-1\">
\t\t\t<i class=\"fa fa-globe\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Nacionalidad\"></i>
\t\t</div>
\t\t<div class=\"col-md-5\">
\t\t\t<input type=\"text\" class=\"form-control input-sm\" id=\"nationality\" name=\"_nationality\" placeholder=\"Nacionalidad\" 
\t\t\tvalue=\"";
        // line 95
        if (((isset($context["datosD"]) ? $context["datosD"] : $this->getContext($context, "datosD")) &&  !twig_test_empty($this->getAttribute((isset($context["datosD"]) ? $context["datosD"] : $this->getContext($context, "datosD")), "nationality", array())))) {
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["datosD"]) ? $context["datosD"] : $this->getContext($context, "datosD")), "nationality", array()), "html", null, true);
        }
        echo "\" pattern=\"^[a-zA-ZñÑáéíóú]+\"/>
\t\t</div>
\t\t<div class=\"col-md-1\">
\t\t\t<i class=\"fa fa-phone-square\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Celular Ej: +56912345678\"></i>
\t\t</div>
\t\t<div class=\"col-md-5\">
\t\t\t<input type=\"text\" class=\"form-control input-sm\" id=\"phone\" name=\"_phone\" placeholder=\"Celular Ej: +56912345678\"
\t\t\tvalue=\"";
        // line 102
        if (((isset($context["datosD"]) ? $context["datosD"] : $this->getContext($context, "datosD")) &&  !twig_test_empty($this->getAttribute((isset($context["datosD"]) ? $context["datosD"] : $this->getContext($context, "datosD")), "phone", array())))) {
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["datosD"]) ? $context["datosD"] : $this->getContext($context, "datosD")), "phone", array()), "html", null, true);
        }
        echo "\" 
\t\t\tpattern=\"^[+]569[0-9]{8}\"/>
\t\t</div>
\t</div>
\t<br>
\t<div class=\"row\">
\t\t<div class=\"col-md-1\">\t
\t\t\t<i class=\"fa fa-heart\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Estado\"></i>
\t\t</div>
\t\t<div class=\"col-md-5\">  
    \t\t<select class=\"form-control\" name=\"_status\">
           \t\t<option value=\"\"";
        // line 113
        if (((isset($context["datosD"]) ? $context["datosD"] : $this->getContext($context, "datosD")) && ($this->getAttribute((isset($context["datosD"]) ? $context["datosD"] : $this->getContext($context, "datosD")), "status", array()) == "Estado:"))) {
            echo "selected";
        }
        echo ">Estado:</option>
            \t<option value=\"Soltero\"";
        // line 114
        if (((isset($context["datosD"]) ? $context["datosD"] : $this->getContext($context, "datosD")) && ($this->getAttribute((isset($context["datosD"]) ? $context["datosD"] : $this->getContext($context, "datosD")), "status", array()) == "Soltero"))) {
            echo "selected";
        }
        echo ">Soltero</option>
            \t<option value=\"Casado\"";
        // line 115
        if (((isset($context["datosD"]) ? $context["datosD"] : $this->getContext($context, "datosD")) && ($this->getAttribute((isset($context["datosD"]) ? $context["datosD"] : $this->getContext($context, "datosD")), "status", array()) == "Casado"))) {
            echo "selected";
        }
        echo ">Casado</option>
            \t<option value=\"Divorciado\"";
        // line 116
        if (((isset($context["datosD"]) ? $context["datosD"] : $this->getContext($context, "datosD")) && ($this->getAttribute((isset($context["datosD"]) ? $context["datosD"] : $this->getContext($context, "datosD")), "status", array()) == "Divorciado"))) {
            echo "selected";
        }
        echo ">Divorciado</option>
            \t<option value=\"Viudo\"";
        // line 117
        if (((isset($context["datosD"]) ? $context["datosD"] : $this->getContext($context, "datosD")) && ($this->getAttribute((isset($context["datosD"]) ? $context["datosD"] : $this->getContext($context, "datosD")), "status", array()) == "Viudo"))) {
            echo "selected";
        }
        echo ">Viudo</option>
     \t\t</select>
\t\t</div>
\t\t<div class=\"col-md-1\">\t
\t\t\t<i class=\"fa fa-male\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Sexo\"></i>
\t\t</div>
\t\t<div class=\"col-md-5\">  
\t    \t<select class=\"form-control\" name=\"_sex\">
\t           \t<option value=\"\"";
        // line 125
        if (((isset($context["datosD"]) ? $context["datosD"] : $this->getContext($context, "datosD")) && twig_test_empty($this->getAttribute((isset($context["datosD"]) ? $context["datosD"] : $this->getContext($context, "datosD")), "sex", array())))) {
            echo "selected";
        }
        echo ">Sexo:</option>
\t            <option value=\"masculino\"";
        // line 126
        if (((isset($context["datosD"]) ? $context["datosD"] : $this->getContext($context, "datosD")) && ($this->getAttribute((isset($context["datosD"]) ? $context["datosD"] : $this->getContext($context, "datosD")), "sex", array()) == "masculino"))) {
            echo "selected";
        }
        echo ">Masculino</option>
\t            <option value=\"femenino\"";
        // line 127
        if (((isset($context["datosD"]) ? $context["datosD"] : $this->getContext($context, "datosD")) && ($this->getAttribute((isset($context["datosD"]) ? $context["datosD"] : $this->getContext($context, "datosD")), "sex", array()) == "femenino"))) {
            echo "selected";
        }
        echo ">Femenino</option>
\t     \t</select>
\t\t</div>
\t</div>
\t<br>
\t<div class=\"row\">
\t\t<div class=\"col-md-1\">\t
\t\t\t<i class=\"fa fa-car\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Licencias Conducir\"></i>
\t\t</div>
\t\t<div class=\"col-md-5\">  
    \t\t<input type=\"text\" class=\"form-control input-sm\" id=\"licencia\" name=\"_licencia\" placeholder=\"Licencia Conducir\" 
    \t\t";
        // line 138
        if (((isset($context["datosD"]) ? $context["datosD"] : $this->getContext($context, "datosD")) && $this->getAttribute((isset($context["datosD"]) ? $context["datosD"] : $this->getContext($context, "datosD")), "licencia", array()))) {
            echo "value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["datosD"]) ? $context["datosD"] : $this->getContext($context, "datosD")), "licencia", array()), "html", null, true);
        }
        echo "\"/>
\t\t</div>
\t\t<div class=\"col-md-1\">\t
\t\t\t<i class=\"fa fa-refresh\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Disposición Inmediata\"></i>
\t\t</div>
\t\t<div class=\"col-md-5\">  
\t    \t<div class=\"checkbox\">
\t\t\t    <label>
\t\t\t    \t";
        // line 146
        if (((isset($context["datosD"]) ? $context["datosD"] : $this->getContext($context, "datosD")) && $this->getAttribute((isset($context["datosD"]) ? $context["datosD"] : $this->getContext($context, "datosD")), "disponible", array()))) {
            // line 147
            echo "\t\t\t      \t\t<input type=\"checkbox\" id=\"disponible\" name=\"_disponible\" checked=\"checked\"> Disposición Inmediata
\t\t\t      \t";
        } else {
            // line 149
            echo "\t\t\t      \t\t<input type=\"checkbox\" id=\"disponible\" name=\"_disponible\"> Disposición Inmediata
\t\t\t      \t";
        }
        // line 151
        echo "\t\t\t    </label>
\t\t\t</div>
\t\t</div>
\t</div>

\t<div class=\"modal-footer\">
\t    <button type=\"submit\" class=\"btn btn-blue\" id=\"name\">Guardar</button>
\t    <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Cerrar</button>
\t</div>
</form>\t
";
    }

    // line 164
    public function block_edit_bio($context, array $blocks = array())
    {
        // line 165
        echo "<form action=\"";
        echo $this->env->getExtension('routing')->getUrl("_edit_bio");
        echo "\" method=\"POST\" role=\"form\">
\t";
        // line 166
        if (((isset($context["datosD"]) ? $context["datosD"] : $this->getContext($context, "datosD")) && $this->getAttribute((isset($context["datosD"]) ? $context["datosD"] : $this->getContext($context, "datosD")), "bio", array()))) {
            // line 167
            echo "\t\t<textarea class=\"form-control\" name=\"_bio\" rows=\"5\" placeholder=\"Hola soy ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["datosU"]) ? $context["datosU"] : $this->getContext($context, "datosU")), "name", array()), "html", null, true);
            echo "...\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["datosD"]) ? $context["datosD"] : $this->getContext($context, "datosD")), "bio", array()), "html", null, true);
            echo "</textarea>
\t";
        } else {
            // line 169
            echo "\t\t<textarea class=\"form-control\" name=\"_bio\" rows=\"5\" placeholder=\"Hola soy ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["datosU"]) ? $context["datosU"] : $this->getContext($context, "datosU")), "name", array()), "html", null, true);
            echo "...\"></textarea>
\t";
        }
        // line 171
        echo "\t<div class=\"modal-footer\">
\t    <button type=\"submit\" class=\"btn btn-blue\" id=\"name\">Guardar</button>
\t    <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Cerrar</button>
\t</div>
</form>

<script type=\"text/javascript\">
\$(document).ready(function(){

";
        // line 180
        if (((isset($context["datosD"]) ? $context["datosD"] : $this->getContext($context, "datosD")) &&  !twig_test_empty($this->getAttribute((isset($context["datosD"]) ? $context["datosD"] : $this->getContext($context, "datosD")), "region", array())))) {
            // line 181
            echo "\t\$.ajax({
   \t\t\turl: '";
            // line 182
            echo $this->env->getExtension('routing')->getUrl("_load_city");
            echo "',
        \tmethod: \"post\",
        \tdata:{'region_': '";
            // line 184
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["datosD"]) ? $context["datosD"] : $this->getContext($context, "datosD")), "region", array()), "html", null, true);
            echo "' },
\t        success: function(item){
\t        \tvar ciudades = item.split(',');

\t\t\t\t\$(\"<option value=''>Comuna</option>\").appendTo(\"#city\");
\t        \tfor (var i = 0; i < ciudades.length; i++) {
\t        \t\tif(ciudades[i] == '";
            // line 190
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["datosD"]) ? $context["datosD"] : $this->getContext($context, "datosD")), "city", array()), "html", null, true);
            echo "'){
\t\t\t\t\t\t\$(\"<option value='\"+ciudades[i]+\"' selected>\"+ciudades[i]+\"</option>\").appendTo(\"#city\");
\t\t\t\t\t}
\t\t\t\t\telse{
\t\t\t\t\t\t\$(\"<option value='\"+ciudades[i]+\"'>\"+ciudades[i]+\"</option>\").appendTo(\"#city\");
\t\t\t\t\t}
\t           \t};
\t        }
\t});
\tenable();
";
        } else {
            // line 201
            echo "\t\$(\"<option>Comuna</option>\").appendTo(\"#city\");
";
        }
        // line 203
        echo "
\t\$('#region').change(function(){
\t\tvar region = \$('#region').val().trim();

\t\tif (region.length > 0) {
\t\t\tenable();
\t\t\tremoveData();
\t\t\t
\t\t\t\$.ajax({
   \t\t\turl: '";
        // line 212
        echo $this->env->getExtension('routing')->getUrl("_load_city");
        echo "',
        \tmethod: \"post\",
        \tdata:{'region_': region},
\t        success: function(item){
\t        \tvar ciudades = item.split(',');

\t\t\t\t\$(\"<option value=''>Comuna</option>\").appendTo(\"#city\");
\t        \tfor (var i = 0; i < ciudades.length; i++) {
\t\t\t\t\t\$(\"<option value='\"+ciudades[i]+\"'>\"+ciudades[i]+\"</option>\").appendTo(\"#city\");
\t           \t};
\t        }
\t    \t});
\t\t
\t\t}else{
\t\t\tdisable();
\t\t\tremoveData();
\t\t\t\$(\"<option value=''>Comuna</option>\").appendTo(\"#city\");
\t\t};
\t});

\tfunction removeData(){
\t\t\$('#city').html('');
\t};
\tfunction disable(){
\t\t\$('#city').attr('disabled','disabled');
\t};
\tfunction enable(){
\t\t\$('#city').removeAttr('disabled');
\t};


});
</script>

";
    }

    public function getTemplateName()
    {
        return "PCVDemoBundle:Edit:datos.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  513 => 212,  502 => 203,  498 => 201,  484 => 190,  475 => 184,  470 => 182,  467 => 181,  465 => 180,  454 => 171,  448 => 169,  440 => 167,  438 => 166,  433 => 165,  430 => 164,  416 => 151,  412 => 149,  408 => 147,  406 => 146,  392 => 138,  376 => 127,  370 => 126,  364 => 125,  351 => 117,  345 => 116,  339 => 115,  333 => 114,  327 => 113,  311 => 102,  299 => 95,  275 => 76,  269 => 75,  263 => 74,  257 => 73,  251 => 72,  245 => 71,  239 => 70,  233 => 69,  227 => 68,  221 => 67,  215 => 66,  209 => 65,  203 => 64,  197 => 63,  191 => 62,  185 => 61,  176 => 54,  171 => 40,  158 => 38,  154 => 37,  143 => 31,  137 => 30,  131 => 29,  125 => 28,  119 => 27,  113 => 26,  107 => 25,  101 => 24,  95 => 23,  89 => 22,  83 => 21,  77 => 20,  71 => 19,  64 => 14,  51 => 12,  47 => 11,  34 => 2,  31 => 1,  27 => 164,  23 => 162,  21 => 1,);
    }
}
