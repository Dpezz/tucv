<?php

/* PCVDemoBundle:Edit:educacion.html.twig */
class __TwigTemplate_a9fa69a0f2f8aedbcc60832972af4bbf96269f951c190c21a8b051d64c11eeeb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'edit_education' => array($this, 'block_edit_education'),
            'new_education' => array($this, 'block_new_education'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('edit_education', $context, $blocks);
        // line 146
        echo "


";
        // line 149
        $this->displayBlock('new_education', $context, $blocks);
    }

    // line 1
    public function block_edit_education($context, array $blocks = array())
    {
        // line 2
        echo "<form action=\"";
        echo $this->env->getExtension('routing')->getPath("_edit_educacion");
        echo "\" method=\"POST\" role=\"form\">
\t";
        // line 3
        if ((isset($context["datosEd"]) ? $context["datosEd"] : $this->getContext($context, "datosEd"))) {
            // line 4
            echo "\t\t<div class=\"panel-group\" id=\"accordionEducacion\">
\t\t";
            // line 5
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["datosEd"]) ? $context["datosEd"] : $this->getContext($context, "datosEd")));
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
            foreach ($context['_seq'] as $context["_key"] => $context["edu"]) {
                // line 6
                echo "\t\t
\t\t\t<div id=\"panelEducacion";
                // line 7
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo "\" class=\"panel panel-primary\">
\t\t\t    <div class=\"panel-heading\">
\t\t\t      \t<h4 class=\"panel-title text-center\">
\t\t\t        \t<a data-toggle=\"collapse\" data-parent=\"#accordionEducacion\" href=\"#educacionEdit";
                // line 10
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo "\">
\t\t\t        \t<span class=\"badge pull-left\">";
                // line 11
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo "</span>
\t\t\t          \t ";
                // line 12
                echo twig_escape_filter($this->env, $this->getAttribute($context["edu"], "course", array()), "html", null, true);
                echo ".
\t\t\t        \t</a>
\t\t\t        \t<button type=\"button\" id=\"educacionClose";
                // line 14
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo "\" class=\"close\">&times;</button>
\t\t\t     \t</h4>
\t\t\t    </div>
\t\t\t    <div id=\"educacionEdit";
                // line 17
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo "\" class=\"panel-collapse collapse\">
\t\t\t      \t<div class=\"panel-body\">

\t\t\t      \t\t
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t<span class=\"input-group-addon\" data-toggle=\"tooltip\" data-placement=\"right\" title=\"Ciudad donde la realizó\"><i class=\"fa fa-map-marker\"></i></span>
\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"_city";
                // line 25
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo "\" placeholder=\"Ciudad..\" 
\t\t\t\t\t\t\t\tvalue=\"";
                // line 26
                echo twig_escape_filter($this->env, $this->getAttribute($context["edu"], "city", array()), "html", null, true);
                echo "\" pattern=\"^[a-zA-ZñÑáéíóú ]+\" required/>\t\t
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t<span class=\"input-group-addon\" data-toggle=\"tooltip\" data-placement=\"right\" title=\"País donde la realizó\"><i class=\"fa fa-globe\"></i></span>
\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"_country";
                // line 32
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo "\" placeholder=\"Pais..\" 
\t\t\t\t\t\t\t\tvalue=\"";
                // line 33
                echo twig_escape_filter($this->env, $this->getAttribute($context["edu"], "country", array()), "html", null, true);
                echo "\" pattern=\"^[a-zA-ZñÑáéíóú ]+\" required/>\t
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<br>
\t\t\t\t\t\t<div class=\"form_group\">
\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t<span class=\"input-group-addon\" data-toggle=\"tooltip\" data-placement=\"right\" title=\"Tipo de Educación, Ej: Enseñanza básica, media, universitaria,Postgrado etc\"><i class=\"fa fa-book\"></i></span>
\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"_subject";
                // line 41
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo "\" placeholder=\"Educación..\" 
\t\t\t\t\t\t\tvalue=\"";
                // line 42
                echo twig_escape_filter($this->env, $this->getAttribute($context["edu"], "subject", array()), "html", null, true);
                echo "\" required/>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<br>
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t<span class=\"input-group-addon\" data-toggle=\"tooltip\" data-placement=\"right\" title=\"Escuela,Colegio,Universidad,Instituto,etc\"><i class=\"fa fa-building-o\"></i></span>
\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"_school";
                // line 50
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo "\" placeholder=\"colegio, Universidad,institucion,etc..\" value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["edu"], "school", array()), "html", null, true);
                echo "\" required/>\t
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t<span class=\"input-group-addon\" data-toggle=\"tooltip\" data-placement=\"right\" title=\"Curso, Carrera, Enseñanza realizada\"><i class=\"fa fa-briefcase\"></i></span>
\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"_course";
                // line 56
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo "\" placeholder=\"curso, Carrera, etc..\" value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["edu"], "course", array()), "html", null, true);
                echo "\" required/>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<br>
\t\t\t\t\t\t";
                // line 61
                $context["meses"] = array(0 => "Enero", 1 => "Febrero", 2 => "Marzo", 3 => "Abril", 4 => "Mayo", 5 => "Junio", 6 => "Julio", 7 => "Agosto", 8 => "Septiembre", 9 => "Octubre", 10 => "Noviembre", 11 => "Diciembre");
                // line 62
                echo "\t\t\t\t\t\t<div class=\"form_group\">
\t\t\t      \t\t<label><i class=\"fa fa-calendar\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Año de inicio\"></i>&nbsp;Fecha incio:</label>
\t\t\t      \t\t";
                // line 64
                $context["fecha"] = twig_split_filter($this->env, $this->getAttribute($context["edu"], "fecha", array()), "-");
                // line 65
                echo "\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t";
                // line 67
                $context["item"] = twig_split_filter($this->env, twig_first($this->env, (isset($context["fecha"]) ? $context["fecha"] : $this->getContext($context, "fecha"))), ",");
                // line 68
                echo "\t\t\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t\t\t<select class=\"form-control\" name=\"_desdeMes";
                // line 69
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo "\" required>
\t\t\t\t\t\t\t\t\t<option ";
                // line 70
                if ((twig_first($this->env, (isset($context["item"]) ? $context["item"] : $this->getContext($context, "item"))) == "")) {
                    echo "selected";
                }
                echo " value=\"\">Mes:</option>
\t\t\t\t\t\t\t\t\t";
                // line 71
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
                    // line 72
                    echo "\t\t\t\t\t\t\t\t\t\t<option value=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                    echo "\" ";
                    if ((twig_first($this->env, (isset($context["item"]) ? $context["item"] : $this->getContext($context, "item"))) == $this->getAttribute($context["loop"], "index", array()))) {
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
                // line 74
                echo "\t\t\t\t\t\t\t\t</select>\t\t  \t    
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t\t\t<select class=\"form-control\" name=\"_desdeAño";
                // line 77
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo "\" required>
\t\t\t\t\t\t\t\t\t<option ";
                // line 78
                if ((twig_last($this->env, (isset($context["item"]) ? $context["item"] : $this->getContext($context, "item"))) == "")) {
                    echo "selected";
                }
                echo " value=\"\">Año:</option>
\t\t\t\t\t\t\t\t\t";
                // line 79
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable(range(twig_date_format_filter($this->env, "now", "Y"), 1940));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 80
                    echo "\t\t\t\t\t\t\t\t\t<option ";
                    if ((twig_last($this->env, (isset($context["item"]) ? $context["item"] : $this->getContext($context, "item"))) == $context["i"])) {
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
                // line 82
                echo "\t\t\t\t\t\t\t\t</select>\t\t   
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t\t\t<div class=\"checkbox\">
\t\t\t\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t\t\t\t";
                // line 87
                if ( !twig_test_empty(twig_last($this->env, twig_split_filter($this->env, twig_last($this->env, (isset($context["fecha"]) ? $context["fecha"] : $this->getContext($context, "fecha"))), ",")))) {
                    // line 88
                    echo "\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" id=\"educacionActual";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                    echo "\" onchange=\"educacionActual_changed";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                    echo "()\">
\t\t\t\t\t\t\t\t\t\t";
                } else {
                    // line 90
                    echo "\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" id=\"educacionActual";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                    echo "\" checked=\"checked\" onchange=\"educacionActual_changed";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                    echo "()\">
\t\t\t\t\t\t\t\t\t\t";
                }
                // line 92
                echo "\t\t\t\t\t\t\t\t\t\tEducación Actual
\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"form_group\" id=\"group_educacionNow";
                // line 100
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t<label><i class=\"fa fa-calendar\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Año de Término\"></i>&nbsp;Fecha Término:</label>
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t";
                // line 103
                $context["item"] = twig_split_filter($this->env, twig_last($this->env, (isset($context["fecha"]) ? $context["fecha"] : $this->getContext($context, "fecha"))), ",");
                // line 104
                echo "\t\t\t\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t\t\t\t<select class=\"form-control\" id=\"hastaMes";
                // line 105
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo "\" name=\"_hastaMes";
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo "\" required=\"required\">
\t\t\t\t\t\t\t\t\t\t<option ";
                // line 106
                if ((twig_first($this->env, (isset($context["item"]) ? $context["item"] : $this->getContext($context, "item"))) == "")) {
                    echo "selected";
                }
                echo " value=\"\">Mes:</option>
\t\t\t\t\t\t\t\t\t\t";
                // line 107
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
                    // line 108
                    echo "\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                    echo "\" ";
                    if ((twig_first($this->env, (isset($context["item"]) ? $context["item"] : $this->getContext($context, "item"))) == $this->getAttribute($context["loop"], "index", array()))) {
                        echo "selected";
                    }
                    echo ">";
                    echo twig_escape_filter($this->env, $context["mes"], "html", null, true);
                    echo "</option>
\t\t\t\t\t\t\t\t\t\t";
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
                // line 110
                echo "\t\t\t\t\t\t\t\t\t</select>\t\t  \t    
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<select class=\"form-control\" id=\"hastaAño";
                // line 114
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo "\" name=\"_hastaAño";
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo "\" required=\"required\">
\t\t\t\t\t\t\t\t\t\t<option ";
                // line 115
                if ((twig_last($this->env, (isset($context["item"]) ? $context["item"] : $this->getContext($context, "item"))) == "")) {
                    echo "selected";
                }
                echo " value=\"\">Año:</option>
\t\t\t\t\t\t\t\t\t\t";
                // line 116
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable(range(twig_date_format_filter($this->env, "now", "Y"), 1940));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 117
                    echo "\t\t\t\t\t\t\t\t\t\t\t<option ";
                    if ((twig_last($this->env, (isset($context["item"]) ? $context["item"] : $this->getContext($context, "item"))) == $context["i"])) {
                        echo "selected";
                    }
                    echo ">";
                    echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                    echo "</option>
\t\t\t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 119
                echo "\t\t\t\t\t\t\t\t\t</select>

\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<br>
\t\t\t\t\t\t<div class=\"form_group\">
\t\t\t\t\t\t\t<textarea class=\"form-control\" rows=\"3\" name=\"_description";
                // line 126
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo "\" placeholder=\"Descripción (opcional)..\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["edu"], "description", array()), "html", null, true);
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['edu'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 133
            echo "\t\t</div>
\t\t<div class=\"modal-footer\">
        \t<button type=\"submit\" class=\"btn btn-blue\" id=\"loading-example-btn\" data-loading-text=\"Loading...\">Guardar</button>
        \t<button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Cerrar</button>
      \t</div>
\t";
        } else {
            // line 139
            echo "\t<p><i class=\"fa fa-plus-square\"></i> Agrega Experiencia Profesional</p>
\t<div class=\"modal-footer\">
       \t<button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Cerrar</button>
    </div>
\t";
        }
        // line 144
        echo "</form>
";
    }

    // line 149
    public function block_new_education($context, array $blocks = array())
    {
        // line 150
        echo "<form action=\"";
        echo $this->env->getExtension('routing')->getPath("_new_educacion");
        echo "\" method=\"POST\" role=\"form\">
\t\t
\t<div class=\"form_group\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-md-6\">
\t\t\t\t<div class=\"input-group\">
\t\t\t\t<span class=\"input-group-addon\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Ciudad donde la realizó\"><i class=\"fa fa-map-marker\"></i></span>
\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"city\" name=\"_city\" placeholder=\"Ciudad..\" pattern=\"^[a-zA-ZñÑáéíóú ]+\" required/>\t    
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-md-6\">
\t\t\t\t<div class=\"input-group\">
\t\t\t\t<span class=\"input-group-addon\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"País donde la realizó\"><i class=\"fa fa-globe\"></i></span>
\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"country\" name=\"_country\" placeholder=\"Pais..\" pattern=\"^[a-zA-ZñÑáéíóú ]+\" required/>\t
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t<br>
\t<div class=\"form_group\">
\t\t<div class=\"input-group\">
\t\t<span class=\"input-group-addon\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Tipo de Educación, Ej: Enseñanza básica, media, universitaria,Postgrado etc\"><i class=\"fa fa-book\"></i></span>
\t\t<input type=\"text\" class=\"form-control\" id=\"subject\" name=\"_subject\" placeholder=\"Educación..\" required/>
\t\t</div>
\t</div>
\t<br>
\t<div class=\"form_group\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-md-6\">
\t\t\t\t<div class=\"input-group\">
\t\t\t\t<span class=\"input-group-addon\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Escuela,Colegio,Universidad,Instituto,etc\"><i class=\"fa fa-building-o\"></i></span>
\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"school\" name=\"_school\" placeholder=\"colegio, Universidad,institucion,etc..\" required/>\t    
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-md-6\">
\t\t\t\t<div class=\"input-group\">
\t\t\t\t<span class=\"input-group-addon\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Curso, Carrera, Enseñanza realizada\"><i class=\"fa fa-briefcase\"></i></span>
\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"course\" name=\"_course\" placeholder=\"curso, Carrera, etc..\" required/>\t        \t\t
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t<br>
\t<div class=\"form_group\">
\t<label><i class=\"fa fa-calendar\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Año de inicio\"></i>&nbsp;Fecha incio:</label>
\t\t<div class=\"row\">
\t\t\t<div class=\"col-md-4\">
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
\t\t\t<div class=\"col-md-4\">
\t\t\t\t<select class=\"form-control\" name=\"_desdeAño\" required>
\t\t\t\t\t<option value=\"\">Año:</option>
\t\t\t\t\t";
        // line 216
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(range(twig_date_format_filter($this->env, "now", "Y"), 1940));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 217
            echo "\t\t\t\t\t\t<option>";
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo "</option>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 219
        echo "\t\t\t\t</select>\t\t    
\t\t\t</div>
\t\t\t<div class=\"col-md-4\">
\t\t\t\t<div class=\"checkbox\">
\t\t\t\t\t<label>
\t\t\t\t\t\t<input type=\"checkbox\" id=\"educationNow\" checked=\"checked\" onchange=\"educationNow_changed()\">
\t\t\t\t\t\tEducación Actual
\t\t\t\t\t</label>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t<div class=\"form_group\" id=\"group_EducationNow\">
\t\t<label><i class=\"fa fa-calendar\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Año de Término\"></i>&nbsp;Fecha Término:</label>
\t\t<div class=\"row\">
\t\t\t<div class=\"col-md-4\">
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
\t\t\t<div class=\"col-md-4\">
\t\t\t\t<select class=\"form-control\" id=\"hastaAño\" name=\"_hastaAño\" required=\"required\">
\t\t\t\t\t<option value=\"\">Año:</option>
\t\t\t\t\t";
        // line 254
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(range(2014, 1940));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 255
            echo "\t\t\t\t\t<option>";
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo "</option>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 257
        echo "\t\t\t\t</select>\t\t        \t\t
\t\t\t</div>
\t\t</div>
\t</div>
\t<br>
\t<div class=\"form_group\">
\t\t<textarea class=\"form-control\" rows=\"3\" name=\"_description\" placeholder=\"Descripción (opcional)..\"></textarea>
\t</div>
\t<div class=\"modal-footer\">
        \t<button type=\"submit\" class=\"btn btn-blue\" id=\"name\">Guardar</button>
        \t<button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Cerrar</button>
    </div>
</form>
<script type=\"text/javascript\">

\tvar check_EducNow = document.getElementById(\"educationNow\");
\tif(check_EducNow.checked == true){
\t\t\$('#group_EducationNow').hide();
\t\t\$('#hastaMes,#hastaAño').removeAttr('required');
\t}

\tfunction educationNow_changed(){
\t\tif(check_EducNow.checked == true){
\t\t\t\$('#group_EducationNow').hide();
\t\t\t\$('#hastaMes,#hastaAño').removeAttr('required');
\t\t\t\$('#hastaMes').val(\"\");
\t\t\t\$('#hastaAño').val(\"\");
\t\t}else{
\t\t\t\$('#group_EducationNow').show();
\t\t\t\$('#hastaMes,#hastaAño').attr('required','required');

\t\t}
\t};

\t";
        // line 291
        if ((isset($context["datosEd"]) ? $context["datosEd"] : $this->getContext($context, "datosEd"))) {
            // line 292
            echo "\t\t";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["datosEd"]) ? $context["datosEd"] : $this->getContext($context, "datosEd")));
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
            foreach ($context['_seq'] as $context["_key"] => $context["educacion"]) {
                // line 293
                echo "\t\tvar check_educationNow";
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo " = document.getElementById(\"educacionActual";
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo "\");
\t\tif(check_educationNow";
                // line 294
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo ".checked == true){
\t\t\t\$('#group_educacionNow";
                // line 295
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo "').hide();
\t\t\t\$('#hastaMes";
                // line 296
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo ",#hastaAño";
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo "').removeAttr('required');
\t\t\t\$('#hastaMes";
                // line 297
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo "').val(\"\");
\t\t\t\$('#hastaMes";
                // line 298
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo "').val(\"\");
\t\t}
\t\telse{
\t\t\t\$('#group_educacionNow";
                // line 301
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo "').show();
\t\t}

\t\tfunction educacionActual_changed";
                // line 304
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo "(){
\t\t\tif(check_educationNow";
                // line 305
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo ".checked == true){
\t\t\t\t\$('#group_educacionNow";
                // line 306
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo "').hide();
\t\t\t\t\$('#hastaMes";
                // line 307
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo ",#hastaAño";
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo "').removeAttr('required');
\t\t\t\t\$('#hastaMes";
                // line 308
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo "').val(\"\");
\t\t\t\t\$('#hastaAño";
                // line 309
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo "').val(\"\");
\t\t\t}else{
\t\t\t\t\$('#group_educacionNow";
                // line 311
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo "').show();
\t\t\t\t\$('#hastaMes";
                // line 312
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo ",#hastaAño";
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo "').attr('required','required');
\t\t\t}
\t\t};

\t\t\$('#educacionClose";
                // line 316
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo "').click(function(){
\t\t\t\$('#panelEducacion";
                // line 317
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo "').remove();
\t\t});
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['educacion'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 320
            echo "\t";
        }
        // line 321
        echo "</script>
";
    }

    public function getTemplateName()
    {
        return "PCVDemoBundle:Edit:educacion.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  742 => 321,  739 => 320,  722 => 317,  718 => 316,  709 => 312,  705 => 311,  700 => 309,  696 => 308,  690 => 307,  686 => 306,  682 => 305,  678 => 304,  672 => 301,  666 => 298,  662 => 297,  656 => 296,  652 => 295,  648 => 294,  641 => 293,  623 => 292,  621 => 291,  585 => 257,  576 => 255,  572 => 254,  535 => 219,  526 => 217,  522 => 216,  452 => 150,  449 => 149,  444 => 144,  437 => 139,  429 => 133,  406 => 126,  397 => 119,  384 => 117,  380 => 116,  374 => 115,  368 => 114,  362 => 110,  339 => 108,  322 => 107,  316 => 106,  310 => 105,  307 => 104,  305 => 103,  299 => 100,  289 => 92,  281 => 90,  273 => 88,  271 => 87,  264 => 82,  251 => 80,  247 => 79,  241 => 78,  237 => 77,  232 => 74,  209 => 72,  192 => 71,  186 => 70,  182 => 69,  179 => 68,  177 => 67,  173 => 65,  171 => 64,  167 => 62,  165 => 61,  155 => 56,  144 => 50,  133 => 42,  129 => 41,  118 => 33,  114 => 32,  105 => 26,  101 => 25,  90 => 17,  84 => 14,  79 => 12,  75 => 11,  71 => 10,  65 => 7,  62 => 6,  45 => 5,  42 => 4,  40 => 3,  35 => 2,  32 => 1,  28 => 149,  23 => 146,  21 => 1,);
    }
}
