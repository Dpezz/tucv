<?php

/* PCVDemoBundle:Edit:experiencia.html.twig */
class __TwigTemplate_8a2615abee6f3944400738eb304fc4caff1078b131a1af21adda421c4c5604be extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'edit_experience' => array($this, 'block_edit_experience'),
            'new_experience' => array($this, 'block_new_experience'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('edit_experience', $context, $blocks);
        // line 135
        echo "
";
        // line 136
        $this->displayBlock('new_experience', $context, $blocks);
    }

    // line 1
    public function block_edit_experience($context, array $blocks = array())
    {
        // line 2
        echo "\t<form action=\"";
        echo $this->env->getExtension('routing')->getPath("_edit_experiencia");
        echo "\" method=\"POST\" role=\"form\">
\t";
        // line 3
        if ((isset($context["datosE"]) ? $context["datosE"] : $this->getContext($context, "datosE"))) {
            // line 4
            echo "\t\t<div class=\"panel-group\" id=\"accordionExperience\">
\t\t\t
\t\t";
            // line 6
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["datosE"]) ? $context["datosE"] : $this->getContext($context, "datosE")));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["exp"]) {
                // line 7
                echo "\t
\t\t\t<div id=\"panelExperiencia";
                // line 8
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo "\" class=\"panel panel-primary\">
\t\t\t    <div class=\"panel-heading\">
\t\t\t    \t
\t\t\t      \t<h4 class=\"panel-title text-center\">
\t\t\t        \t<a data-toggle=\"collapse\" data-parent=\"#accordionExperience\" href=\"#experiencia";
                // line 12
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo "\">
\t\t\t        \t<span class=\"badge pull-left\">";
                // line 13
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo "</span>
\t\t\t          \t";
                // line 14
                echo twig_escape_filter($this->env, $this->getAttribute($context["exp"], "rol", array()), "html", null, true);
                echo ".
\t\t\t        \t</a>
\t\t\t        \t<button type=\"button\" id=\"experienciaClose";
                // line 16
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo "\" class=\"close\">&times;</button>
\t\t\t     \t</h4>
\t\t\t    </div>
\t\t\t    <div id=\"experiencia";
                // line 19
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo "\" class=\"panel-collapse collapse\">
\t\t\t      \t<div class=\"panel-body\">

\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t<span class=\"input-group-addon\" data-toggle=\"tooltip\" data-placement=\"right\" title=\"Ciudad donde trabajaste\"><i class=\"fa fa-map-marker\"></i></span>
\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"_city";
                // line 26
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo "\" placeholder=\"Ciudad..\" 
\t\t\t\t\t\t\t\tvalue=\"";
                // line 27
                echo twig_escape_filter($this->env, $this->getAttribute($context["exp"], "city", array()), "html", null, true);
                echo "\" pattern=\"^[a-zA-ZñÑáéíóú ]+\" required/>\t\t
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t<span class=\"input-group-addon\" data-toggle=\"tooltip\" data-placement=\"right\" title=\"País donde trabajaste\"><i class=\"fa fa-globe\"></i></span>
\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"_country";
                // line 33
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo "\" placeholder=\"Pais..\" 
\t\t\t\t\t\t\t\tvalue=\"";
                // line 34
                echo twig_escape_filter($this->env, $this->getAttribute($context["exp"], "country", array()), "html", null, true);
                echo "\" pattern=\"^[a-zA-ZñÑáéíóú ]+\" required/>\t
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<br>
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t<span class=\"input-group-addon\" data-toggle=\"tooltip\" data-placement=\"right\" title=\"Empresa donde trabajaste\"><i class=\"fa fa-building-o\"></i></span>
\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\"  name=\"_company";
                // line 43
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo "\" placeholder=\"Empresa..\"  
\t\t\t\t\t\t\t\tvalue=\"";
                // line 44
                echo twig_escape_filter($this->env, $this->getAttribute($context["exp"], "company", array()), "html", null, true);
                echo "\" required/>\t
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t<span class=\"input-group-addon\" data-toggle=\"tooltip\" data-placement=\"right\" title=\"Puesto que desempeñaste\"><i class=\"fa fa-briefcase\"></i></span>
\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"_rol";
                // line 50
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo "\" placeholder=\"Rol..\" 
\t\t\t\t\t\t\t\tvalue=\"";
                // line 51
                echo twig_escape_filter($this->env, $this->getAttribute($context["exp"], "rol", array()), "html", null, true);
                echo "\" required/>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<br>
\t\t\t\t\t\t";
                // line 56
                $context["meses"] = array(0 => "Enero", 1 => "Febrero", 2 => "Marzo", 3 => "Abril", 4 => "Mayo", 5 => "Junio", 6 => "Julio", 7 => "Agosto", 8 => "Septiembre", 9 => "Octubre", 10 => "Noviembre", 11 => "Diciembre");
                // line 57
                echo "\t\t\t\t\t\t<div class=\"form_group\">
\t\t\t\t\t\t<label><i class=\"fa fa-calendar\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Año de inicio\"></i>&nbsp;Fecha incio:</label>
\t\t\t\t\t\t";
                // line 59
                $context["fechaInicio"] = twig_split_filter($this->env, $this->getAttribute($context["exp"], "startDate", array()), ",");
                // line 60
                echo "\t\t\t\t\t\t";
                $context["fechaFin"] = twig_split_filter($this->env, $this->getAttribute($context["exp"], "endDate", array()), ",");
                // line 61
                echo "\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t\t\t<select class=\"form-control\" id=\"desdeMes";
                // line 63
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo "\" name=\"_desdeMes";
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo "\" required>
\t\t\t\t\t\t\t\t\t<option value=\"\" ";
                // line 64
                if ((twig_first($this->env, (isset($context["fechaInicio"]) ? $context["fechaInicio"] : $this->getContext($context, "fechaInicio"))) == " ")) {
                    echo "selected";
                }
                echo ">Mes:</option>
\t\t\t\t\t\t\t\t\t";
                // line 65
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["meses"]) ? $context["meses"] : $this->getContext($context, "meses")));
                $context['loop'] = array(
                  'parent' => $context['_parent'],
                  'index0' => 0,
                  'index'  => 1,
                  'first'  => true,
                );
                if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                    $length = count($context['_seq']);
                    $context['loop']['revindex0'] = $length - 1;
                    $context['loop']['revindex'] = $length;
                    $context['loop']['length'] = $length;
                    $context['loop']['last'] = 1 === $length;
                }
                foreach ($context['_seq'] as $context["_key"] => $context["mes"]) {
                    // line 66
                    echo "\t\t\t\t\t\t\t\t\t\t<option value=";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                    echo " ";
                    if ((twig_first($this->env, (isset($context["fechaInicio"]) ? $context["fechaInicio"] : $this->getContext($context, "fechaInicio"))) == $this->getAttribute($context["loop"], "index", array()))) {
                        echo "selected";
                    }
                    echo ">";
                    echo twig_escape_filter($this->env, $context["mes"], "html", null, true);
                    echo "</option>
\t\t\t\t\t\t\t\t\t";
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                    if (isset($context['loop']['length'])) {
                        --$context['loop']['revindex0'];
                        --$context['loop']['revindex'];
                        $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mes'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 67
                echo "\t\t\t
\t\t\t\t\t\t\t\t</select>\t\t  \t    
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-md-3\">
\t\t\t\t\t\t\t\t<select class=\"form-control\" id=\"desdeAño";
                // line 71
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo "\" name=\"_desdeAño";
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo "\" required>
\t\t\t\t\t\t\t\t\t<option value=\"\">Año:</option>
\t\t\t\t\t\t\t\t\t";
                // line 73
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable(range(twig_date_format_filter($this->env, "now", "Y"), 1940));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 74
                    echo "\t\t\t\t\t\t\t\t\t<option ";
                    if ((twig_last($this->env, (isset($context["fechaInicio"]) ? $context["fechaInicio"] : $this->getContext($context, "fechaInicio"))) == $context["i"])) {
                        echo "selected";
                    }
                    echo ">";
                    echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                    echo "</option>
\t\t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 76
                echo "\t\t\t\t\t\t\t\t</select>\t\t   
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-md-5\">
\t\t\t\t\t\t\t\t<div class=\"checkbox\">
\t\t\t\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t\t\t\t";
                // line 81
                if ( !twig_test_empty(twig_first($this->env, (isset($context["fechaFin"]) ? $context["fechaFin"] : $this->getContext($context, "fechaFin"))))) {
                    // line 82
                    echo "\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" id=\"expNow";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                    echo "\" onchange=\"expNow_changed";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                    echo "()\">
\t\t\t\t\t\t\t\t\t\t";
                } else {
                    // line 84
                    echo "\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" id=\"expNow";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                    echo "\" checked=\"checked\" onchange=\"expNow_changed";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                    echo "()\">
\t\t\t\t\t\t\t\t\t\t";
                }
                // line 86
                echo "\t\t\t\t\t\t\t\t\t\tExperiencia Actual
\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form_group\" id=\"group_expNow";
                // line 92
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo "\">
\t\t\t\t\t\t<label><i class=\"fa fa-calendar\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Año de Término\"></i>&nbsp;Fecha Término:</label>
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t\t\t<select class=\"form-control\" id=\"hastaMes";
                // line 96
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo "\" name=\"_hastaMes";
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo "\" required=\"required\">
\t\t\t\t\t\t\t\t\t<option value=\"\" ";
                // line 97
                if ((twig_first($this->env, (isset($context["fechaFin"]) ? $context["fechaFin"] : $this->getContext($context, "fechaFin"))) == " ")) {
                    echo "selected";
                }
                echo ">Mes:</option>
\t\t\t\t\t\t\t\t\t";
                // line 98
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["meses"]) ? $context["meses"] : $this->getContext($context, "meses")));
                $context['loop'] = array(
                  'parent' => $context['_parent'],
                  'index0' => 0,
                  'index'  => 1,
                  'first'  => true,
                );
                if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                    $length = count($context['_seq']);
                    $context['loop']['revindex0'] = $length - 1;
                    $context['loop']['revindex'] = $length;
                    $context['loop']['length'] = $length;
                    $context['loop']['last'] = 1 === $length;
                }
                foreach ($context['_seq'] as $context["_key"] => $context["mes"]) {
                    // line 99
                    echo "\t\t\t\t\t\t\t\t\t\t<option value=";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                    echo " ";
                    if ((twig_first($this->env, (isset($context["fechaFin"]) ? $context["fechaFin"] : $this->getContext($context, "fechaFin"))) == $this->getAttribute($context["loop"], "index", array()))) {
                        echo "selected";
                    }
                    echo ">";
                    echo twig_escape_filter($this->env, $context["mes"], "html", null, true);
                    echo "</option>
\t\t\t\t\t\t\t\t\t";
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                    if (isset($context['loop']['length'])) {
                        --$context['loop']['revindex0'];
                        --$context['loop']['revindex'];
                        $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mes'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 100
                echo "\t\t\t\t
\t\t\t\t\t\t\t\t</select>\t\t  \t    
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-md-3\">
\t\t\t\t\t\t\t\t<select class=\"form-control\" id=\"hastaAño";
                // line 104
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo "\" name=\"_hastaAño";
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo "\" required=\"required\">
\t\t\t\t\t\t\t\t\t<option value=\"\">Año:</option>
\t\t\t\t\t\t\t\t\t";
                // line 106
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable(range(twig_date_format_filter($this->env, "now", "Y"), 1940));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 107
                    echo "\t\t\t\t\t\t\t\t\t<option ";
                    if ((twig_last($this->env, (isset($context["fechaFin"]) ? $context["fechaFin"] : $this->getContext($context, "fechaFin"))) == $context["i"])) {
                        echo "selected";
                    }
                    echo ">";
                    echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                    echo "</option>
\t\t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 109
                echo "\t\t\t\t\t\t\t\t</select>\t\t
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<br>
\t\t\t\t\t\t<div class=\"form_group\">
\t\t\t\t\t\t\t<textarea class=\"form-control\" rows=\"3\" name=\"_description";
                // line 115
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo "\" placeholder=\"Descripción (Opcional)..\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["exp"], "description", array()), "html", null, true);
                echo "</textarea>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t    </div>
\t\t\t</div>

\t\t";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['exp'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 122
            echo "\t\t</div>
\t\t<div class=\"modal-footer\">
\t        <button type=\"submit\" class=\"btn btn-blue\" id=\"loading-example-btn\" data-loading-text=\"Loading...\">Guardar</button>
\t        <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Cerrar</button>
\t    </div>
\t\t";
        } else {
            // line 128
            echo "\t\t<p><i class=\"fa fa-plus-square\"></i> Agrega Experiencia Profesional</p>
\t\t<div class=\"modal-footer\">
\t        <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Cerrar</button>
\t    </div>
\t\t";
        }
        // line 133
        echo "\t</form>
";
    }

    // line 136
    public function block_new_experience($context, array $blocks = array())
    {
        // line 137
        echo "<form action=\"";
        echo $this->env->getExtension('routing')->getPath("_new_experiencia");
        echo "\" method=\"POST\" role=\"form\">
\t<div class=\"form_group\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-md-6\">
\t\t\t\t<div class=\"input-group\">
\t\t\t\t<span class=\"input-group-addon\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Ciudad donde trabajaste\"><i class=\"fa fa-map-marker\"></i></span>
\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"city\" name=\"_city\" placeholder=\"Ciudad..\" pattern=\"^[a-zA-ZñÑáéíóú ]+\" required/>\t    
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-md-6\">
\t\t\t\t<div class=\"input-group\">
\t\t\t\t<span class=\"input-group-addon\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"País donde trabajaste\"><i class=\"fa fa-globe\"></i></span>
\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"country\" name=\"_country\" placeholder=\"País..\" pattern=\"^[a-zA-ZñÑáéíóú ]+\" required/>\t
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t<br>
\t<div class=\"form_group\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-md-6\">
\t\t\t\t<div class=\"input-group\">
\t\t\t\t<span class=\"input-group-addon\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Empresa donde trabajaste\"><i class=\"fa fa-building-o\"></i></span>
\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"company\" name=\"_company\" placeholder=\"Empresa..\" required/> 
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-md-6\">
\t\t\t\t<div class=\"input-group\">
\t\t\t\t<span class=\"input-group-addon\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Puesto que desempeñaste\"><i class=\"fa fa-briefcase\"></i></span>
\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"rol\" name=\"_rol\" placeholder=\"Rol..\" required/>\t
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t<br>
\t<div class=\"form_group\">
\t\t<label><i class=\"fa fa-calendar\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Año de inicio\"></i>&nbsp;Fecha incio:</label>
\t\t<div class=\"row\">
\t\t\t<div class=\"col-md-3\">
\t\t\t\t<select class=\"form-control\" name=\"_desdeMes\" required>
\t\t\t\t\t<option value=\"\">Mes:</option>
\t\t\t\t\t<option value=\"1\">Enero</option>
\t\t\t\t\t<option value=\"2\">Febrero</option>
\t\t\t\t\t<option value=\"3\">Marzo</option>
\t\t\t\t\t<option value=\"4\">Abril</option>
\t\t\t\t\t<option value=\"5\">Mayo</option>
\t\t\t\t\t<option value=\"6\">Junio</option>
\t\t\t\t\t<option value=\"7\">Julio</option>
\t\t\t\t\t<option value=\"8\">Agosto</option>
\t\t\t\t\t<option value=\"9\">Septiembre</option>
\t\t\t\t\t<option value=\"10\">Octubre</option>
\t\t\t\t\t<option value=\"11\">Noviembre</option>
\t\t\t\t\t<option value=\"12\">Diciembre</option>\t\t\t\t
\t\t\t\t</select>\t\t  \t    
\t\t\t</div>
\t\t\t<div class=\"col-md-3\">
\t\t\t\t<select class=\"form-control\" name=\"_desdeAño\" required>
\t\t\t\t\t<option value=\"\">Año:</option>
\t\t\t\t\t";
        // line 195
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(range(twig_date_format_filter($this->env, "now", "Y"), 1940));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 196
            echo "\t\t\t\t\t<option>";
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo "</option>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 198
        echo "\t\t\t\t</select>\t\t    
\t\t\t</div>
\t\t\t<div class=\"col-md-6\">
\t\t\t\t<div class=\"checkbox\">
\t\t\t\t\t<label>
\t\t\t\t\t\t<input type=\"checkbox\" id=\"expNow\" checked=\"checked\" onchange=\"expNow_changed()\">
\t\t\t\t\t\tExperiencia Actual
\t\t\t\t\t</label>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t<div class=\"form_group\" id=\"group_expNow\">
\t\t<label><i class=\"fa fa-calendar\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Año de Término\"></i>&nbsp;Fecha Término:</label>
\t\t<div class=\"row\">
\t\t\t<div class=\"col-md-3\">
\t\t\t\t<select class=\"form-control\" id=\"hastaMes\" name=\"_hastaMes\" required=\"required\">
\t\t\t\t\t<option value=\"\">Mes:</option>
\t\t\t\t\t<option value=\"1\">Enero</option>
\t\t\t\t\t<option value=\"2\">Febrero</option>
\t\t\t\t\t<option value=\"3\">Marzo</option>
\t\t\t\t\t<option value=\"4\">Abril</option>
\t\t\t\t\t<option value=\"5\">Mayo</option>
\t\t\t\t\t<option value=\"6\">Junio</option>
\t\t\t\t\t<option value=\"7\">Julio</option>
\t\t\t\t\t<option value=\"8\">Agosto</option>
\t\t\t\t\t<option value=\"9\">Septiembre</option>
\t\t\t\t\t<option value=\"10\">Octubre</option>
\t\t\t\t\t<option value=\"11\">Noviembre</option>
\t\t\t\t\t<option value=\"12\">Diciembre</option>\t\t\t\t
\t\t\t\t</select>\t\t  \t    
\t\t\t</div>
\t\t\t<div class=\"col-md-3\">
\t\t\t\t<select class=\"form-control\" id=\"hastaAño\" name=\"_hastaAño\" required=\"required\">
\t\t\t\t\t<option value=\"\">Año:</option>
\t\t\t\t\t";
        // line 233
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(range(2014, 1940));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 234
            echo "\t\t\t\t\t<option>";
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo "</option>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 236
        echo "\t\t\t\t</select>\t\t        \t\t
\t\t\t</div>
\t\t</div>
\t</div>
\t<br>
\t<div class=\"form_group\">
\t\t<textarea class=\"form-control\" rows=\"3\" name=\"_description\" placeholder=\"Descripción (Opcional)..\"></textarea>
\t</div>
\t<div class=\"modal-footer\">
        \t<button type=\"submit\" class=\"btn btn-blue\">Guardar</button>
        \t<button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Cerrar</button>
    </div>
</form>

<script type=\"text/javascript\">

\tvar check_expNow = document.getElementById(\"expNow\");
\tif(check_expNow.checked == true){
\t\t\$('#group_expNow').hide();
\t\t\$('#hastaMes,#hastaAño').removeAttr('required');
\t}

\tfunction expNow_changed(){
\t\tif(check_expNow.checked == true){
\t\t\t\$('#group_expNow').hide();
\t\t\t\$('#hastaMes,#hastaAño').removeAttr('required');
\t\t\t\$('#hastaMes').val(\"\");
\t\t\t\$('#hastaAño').val(\"\");
\t\t}else{
\t\t\t\$('#group_expNow').show();
\t\t\t\$('#hastaMes,#hastaAño').attr('required','required');

\t\t}
\t};
\t";
        // line 270
        if ((isset($context["datosE"]) ? $context["datosE"] : $this->getContext($context, "datosE"))) {
            // line 271
            echo "\t";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["datosE"]) ? $context["datosE"] : $this->getContext($context, "datosE")));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["experiencia"]) {
                // line 272
                echo "\t\tvar check_expNow";
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo " = document.getElementById(\"expNow";
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo "\");
\t\tif(check_expNow";
                // line 273
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo ".checked == true){
\t\t\t\$('#group_expNow";
                // line 274
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo "').hide();
\t\t\t\$('#hastaMes";
                // line 275
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo ",#hastaAño";
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo "').removeAttr('required');
\t\t\t\$('#hastaMes";
                // line 276
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo "').val(\"\");
\t\t\t\$('#hastaMes";
                // line 277
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo "').val(\"\");
\t\t}
\t\telse{
\t\t\t\$('#group_expNow";
                // line 280
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo "').show();
\t\t}

\t\tfunction expNow_changed";
                // line 283
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo "(){
\t\t\tif(check_expNow";
                // line 284
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo ".checked == true){
\t\t\t\t\$('#group_expNow";
                // line 285
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo "').hide();
\t\t\t\t\$('#hastaMes";
                // line 286
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo ",#hastaAño";
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo "').removeAttr('required');
\t\t\t\t\$('#hastaMes";
                // line 287
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo "').val(\"\");
\t\t\t\t\$('#hastaAño";
                // line 288
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo "').val(\"\");
\t\t\t}else{
\t\t\t\t\$('#group_expNow";
                // line 290
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo "').show();
\t\t\t\t\$('#hastaMes";
                // line 291
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo ",#hastaAño";
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo "').attr('required','required');
\t\t\t}
\t\t};

\t\t\$('#experienciaClose";
                // line 295
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo "').click(function(){
\t\t\t\$('#panelExperiencia";
                // line 296
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo "').remove();
\t\t});
\t";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['experiencia'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 299
            echo "\t";
        }
        // line 300
        echo "
</script>
";
    }

    public function getTemplateName()
    {
        return "PCVDemoBundle:Edit:experiencia.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  709 => 300,  706 => 299,  689 => 296,  685 => 295,  676 => 291,  672 => 290,  667 => 288,  663 => 287,  657 => 286,  653 => 285,  649 => 284,  645 => 283,  639 => 280,  633 => 277,  629 => 276,  623 => 275,  619 => 274,  615 => 273,  608 => 272,  590 => 271,  588 => 270,  552 => 236,  543 => 234,  539 => 233,  502 => 198,  493 => 196,  489 => 195,  427 => 137,  424 => 136,  419 => 133,  412 => 128,  404 => 122,  381 => 115,  373 => 109,  360 => 107,  356 => 106,  349 => 104,  343 => 100,  320 => 99,  303 => 98,  297 => 97,  291 => 96,  284 => 92,  276 => 86,  268 => 84,  260 => 82,  258 => 81,  251 => 76,  238 => 74,  234 => 73,  227 => 71,  221 => 67,  198 => 66,  181 => 65,  175 => 64,  169 => 63,  165 => 61,  162 => 60,  160 => 59,  156 => 57,  154 => 56,  146 => 51,  142 => 50,  133 => 44,  129 => 43,  117 => 34,  113 => 33,  104 => 27,  100 => 26,  90 => 19,  84 => 16,  79 => 14,  75 => 13,  71 => 12,  64 => 8,  61 => 7,  44 => 6,  40 => 4,  38 => 3,  33 => 2,  30 => 1,  26 => 136,  23 => 135,  21 => 1,);
    }
}
