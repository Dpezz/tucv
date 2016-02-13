<?php

/* PCVDemoBundle:Edit:certificacion.html.twig */
class __TwigTemplate_28cc3a9266f92cc35e34bb5e8cb3adca2cf7885c7dc5a3bab4e2c13c5237bc99 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'edit_certificaciones' => array($this, 'block_edit_certificaciones'),
            'new_certificacion' => array($this, 'block_new_certificacion'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('edit_certificaciones', $context, $blocks);
        // line 129
        echo "

";
        // line 131
        $this->displayBlock('new_certificacion', $context, $blocks);
    }

    // line 1
    public function block_edit_certificaciones($context, array $blocks = array())
    {
        // line 2
        echo "\t<form action=\"";
        echo $this->env->getExtension('routing')->getPath("_edit_certificados");
        echo "\" method=\"POST\" role=\"form\">
\t";
        // line 3
        if ((isset($context["datosCe"]) ? $context["datosCe"] : $this->getContext($context, "datosCe"))) {
            // line 4
            echo "\t\t<div class=\"panel-group\" id=\"accordionCertificacion\">
\t\t";
            // line 5
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["datosCe"]) ? $context["datosCe"] : $this->getContext($context, "datosCe")));
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
            foreach ($context['_seq'] as $context["_key"] => $context["certificado"]) {
                // line 6
                echo "\t  \t\t
\t\t\t<div id=\"panelCertificacion";
                // line 7
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo "\" class=\"panel panel-primary\">
\t\t\t    <div class=\"panel-heading\">
\t\t\t      \t<h4 class=\"panel-title text-center\">
\t\t\t        \t<a data-toggle=\"collapse\" data-parent=\"#accordionCertificacion\" href=\"#certificados";
                // line 10
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo "\">
\t\t\t        \t<span class=\"badge pull-left\">";
                // line 11
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo "</span>
\t\t\t          \t ";
                // line 12
                echo twig_escape_filter($this->env, $this->getAttribute($context["certificado"], "title", array()), "html", null, true);
                echo ".
\t\t\t        \t</a>
\t\t\t        \t<button type=\"button\" class=\"close\" id=\"certificadosClose";
                // line 14
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo "\">&times;</button>
\t\t\t     \t</h4>
\t\t\t    </div>
\t\t\t    <div id=\"certificados";
                // line 17
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo "\" class=\"panel-collapse collapse\">
\t\t\t      \t<div class=\"panel-body\">

\t\t\t\t\t<div class=\"form_group\">
\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t<span class=\"input-group-addon\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Nombre de la certificación\"><i class=\"fa fa-file-text\"></i></span>
\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"title\" name=\"_title";
                // line 23
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo "\" placeholder=\"Nombre de la certificación\" value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["certificado"], "title", array()), "html", null, true);
                echo "\"required/>\t    
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<br>
\t\t\t\t\t<div class=\"form_group\">
\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t<span class=\"input-group-addon\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Autoridad responsable de la certificación\"><i class=\"fa fa-building-o\"></i></span>
\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"emisor\" name=\"_emisor";
                // line 30
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo "\" placeholder=\"Autoridad responsable de la certificación\" value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["certificado"], "emisor", array()), "html", null, true);
                echo "\"required/>\t
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<br>
\t\t\t\t\t<div class=\"form_group\">
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t<span class=\"input-group-addon\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Ciudad donde se obtuvo\"><i class=\"fa fa-map-marker\"></i></span>
\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"city\" name=\"_city";
                // line 39
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo "\" placeholder=\"Ciudad..\" pattern=\"^[a-zA-ZñÑáéíóú ]+\" value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["certificado"], "city", array()), "html", null, true);
                echo "\"required/>\t    
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t<span class=\"input-group-addon\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"País donde se obtuvo\"><i class=\"fa fa-globe\"></i></span>
\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"country\" name=\"_country";
                // line 45
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo "\" placeholder=\"Pais..\" pattern=\"^[a-zA-ZñÑáéíóú ]+\" value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["certificado"], "country", array()), "html", null, true);
                echo "\" required/>\t
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<br>
\t\t\t\t\t";
                // line 51
                $context["meses"] = array(0 => "Enero", 1 => "Febrero", 2 => "Marzo", 3 => "Abril", 4 => "Mayo", 5 => "Junio", 6 => "Julio", 7 => "Agosto", 8 => "Septiembre", 9 => "Octubre", 10 => "Noviembre", 11 => "Diciembre");
                // line 52
                echo "\t\t\t\t\t<div class=\"form_group\">
\t\t\t\t\t\t<label>Fecha incio:</label>
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t";
                // line 55
                $context["item"] = twig_split_filter($this->env, $this->getAttribute($context["certificado"], "startDate", array()), ",");
                // line 56
                echo "\t\t\t\t\t\t\t<div class=\"col-md-3\">
\t\t\t\t\t\t\t\t<select class=\"form-control\" name=\"_mes";
                // line 57
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo "\" required>
\t\t\t\t\t\t\t\t\t<option ";
                // line 58
                if ((twig_first($this->env, (isset($context["item"]) ? $context["item"] : $this->getContext($context, "item"))) == " ")) {
                    echo "selected";
                }
                echo " value=\"\">Mes:</option>
\t\t\t\t\t\t\t\t\t";
                // line 59
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
                    // line 60
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
                // line 62
                echo "\t\t\t\t\t\t\t\t</select>\t\t        \t\t
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-md-3\">
\t\t\t\t\t\t\t\t<select class=\"form-control\" name=\"_año";
                // line 65
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo "\" required>
\t\t\t\t\t\t\t\t\t<option ";
                // line 66
                if ((twig_last($this->env, (isset($context["item"]) ? $context["item"] : $this->getContext($context, "item"))) == " ")) {
                    echo "select";
                }
                echo " value=\"\">Año:</option>
\t\t\t\t\t\t\t\t\t";
                // line 67
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable(range(twig_date_format_filter($this->env, "now", "Y"), 1940));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 68
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
                // line 70
                echo "\t\t\t\t\t\t\t\t</select>\t\t        \t\t
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t<div class=\"checkbox\">
\t\t\t\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t\t\t\t";
                // line 75
                if ( !twig_test_empty(twig_last($this->env, twig_split_filter($this->env, $this->getAttribute($context["certificado"], "endDate", array()), ",")))) {
                    // line 76
                    echo "\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" id=\"caducidad";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                    echo "\" onchange=\"checkbox_changed";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                    echo "()\">
\t\t\t\t\t\t\t\t\t\t";
                } else {
                    // line 78
                    echo "\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" id=\"caducidad";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                    echo "\" checked=\"checked\" onchange=\"checkbox_changed";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                    echo "()\">
\t\t\t\t\t\t\t\t\t\t";
                }
                // line 80
                echo "\t\t\t\t\t\t\t\t\t\tEste certificado no caduca
\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form_group\" id=\"group_caducidad";
                // line 86
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo "\">
\t\t\t\t\t\t<label>Fecha caducidad:</label>
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t";
                // line 89
                $context["item"] = twig_split_filter($this->env, $this->getAttribute($context["certificado"], "endDate", array()), ",");
                // line 90
                echo "\t\t\t\t\t\t\t<div class=\"col-md-3\">
\t\t\t\t\t\t\t\t<select class=\"form-control\" id=\"mesFin";
                // line 91
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo "\"name=\"_mesFin";
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo "\" required=\"required\">
\t\t\t\t\t\t\t\t\t<option ";
                // line 92
                if ((twig_first($this->env, (isset($context["item"]) ? $context["item"] : $this->getContext($context, "item"))) == "")) {
                    echo "selected";
                }
                echo " value=\"\">Mes:</option>
\t\t\t\t\t\t\t\t\t";
                // line 93
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
                    // line 94
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
                // line 95
                echo "\t
\t\t\t\t\t\t\t\t</select>\t\t        \t\t
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-md-3\">
\t\t\t\t\t\t\t\t<select class=\"form-control\" id=\"añoFin";
                // line 99
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo "\" name=\"_añoFin";
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo "\" required=\"required\">
\t\t\t\t\t\t\t\t\t<option ";
                // line 100
                if ((twig_last($this->env, (isset($context["item"]) ? $context["item"] : $this->getContext($context, "item"))) == "Año:")) {
                    echo "select";
                }
                echo " value=\"\">Año:</option>
\t\t\t\t\t\t\t\t\t";
                // line 101
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable(range(twig_date_format_filter($this->env, "now", "Y"), 1940));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 102
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
                // line 104
                echo "\t\t\t\t\t\t\t\t</select>\t\t        \t\t
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<br>
\t\t\t\t\t<div class=\"form_group\">
\t\t\t\t\t\t<textarea class=\"form-control\" rows=\"3\" name=\"_description";
                // line 110
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo "\" placeholder=\"Descripción (Opcional)\"/>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["certificado"], "description", array()), "html", null, true);
                echo "</textarea>
\t\t\t\t\t</div>
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['certificado'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 116
            echo "\t\t</div>
\t\t<div class=\"modal-footer\">
        \t<button type=\"submit\" class=\"btn btn-blue\" id=\"loading-example-btn\" data-loading-text=\"Loading...\">Guardar</button>
        \t<button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Cerrar</button>
      \t</div>
\t";
        } else {
            // line 122
            echo "\t<p><i class=\"fa fa-plus-square\"></i> Agrega Reconocimientos y Premios</p>
\t<div class=\"modal-footer\">
        \t<button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Cerrar</button>
      \t</div>
\t";
        }
        // line 127
        echo "</form>
";
    }

    // line 131
    public function block_new_certificacion($context, array $blocks = array())
    {
        // line 132
        echo "<form action=\"";
        echo $this->env->getExtension('routing')->getPath("_new_certificado");
        echo "\" method=\"POST\" role=\"form\">
\t<div class=\"form_group\">
\t\t<div class=\"input-group\">
\t\t\t<span class=\"input-group-addon\" data-toggle=\"tooltip\" data-placement=\"left\" title=\"Nombre de la certificación\"><i class=\"fa fa-file-text\"></i></span>
\t\t\t<input type=\"text\" class=\"form-control\" id=\"title\" name=\"_title\" placeholder=\"Nombre de la certificación\" required/>
\t\t</div>
\t</div>
\t<br>
\t<div class=\"form_group\">\t\t\t
\t\t<div class=\"input-group\">
\t\t\t<span class=\"input-group-addon\" data-toggle=\"tooltip\" data-placement=\"left\" title=\"Autoridad responsable de la certificación\"><i class=\"fa fa-building-o\"></i>
\t\t\t</span>
\t\t\t<input type=\"text\" class=\"form-control\" id=\"emisor\" name=\"_emisor\" placeholder=\"Autoridad responsable de la certificación\" required/>\t
\t\t</div>
\t</div>
\t<br>

\t<div class=\"form_group\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-md-6\">
\t\t\t\t<div class=\"input-group\">
\t\t\t\t<span class=\"input-group-addon\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Ciudad donde se obtuvo\"><i class=\"fa fa-map-marker\"></i></span>
\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"city\" name=\"_city\" placeholder=\"Ciudad..\" pattern=\"^[a-zA-ZñÑáéíóú ]+\" required/>\t    
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-md-6\">
\t\t\t\t<div class=\"input-group\">
\t\t\t\t<span class=\"input-group-addon\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"País donde se obtuvo\"><i class=\"fa fa-globe\"></i></span>
\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"country\" name=\"_country\" placeholder=\"Pais..\" pattern=\"^[a-zA-ZñÑáéíóú ]+\" required/>\t
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t<br>
\t<div class=\"form_group\">
\t\t<label>Fecha incio:</label>
\t\t<div class=\"row\">
\t\t\t<div class=\"col-md-3\">
\t\t\t\t<select class=\"form-control\" name=\"_mes\" required>
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
\t\t\t\t</select>\t\t        \t\t
\t\t\t</div>
\t\t\t<div class=\"col-md-3\">
\t\t\t\t<select class=\"form-control\" name=\"_año\" required>
\t\t\t\t\t<option value=\"\">Año:</option>
\t\t\t\t\t";
        // line 189
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(range(twig_date_format_filter($this->env, "now", "Y"), 1940));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 190
            echo "\t\t\t\t\t<option value=\"";
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo "</option>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 192
        echo "\t\t\t\t</select>\t\t        \t\t
\t\t\t</div>
\t\t\t<div class=\"col-md-6\">
\t\t\t\t<div class=\"checkbox\">
\t\t\t\t\t<label>
\t\t\t\t\t\t<input type=\"checkbox\" id=\"caducidad\"  checked=\"checked\" onchange=\"checkbox_changed()\">
\t\t\t\t\t\tEste certificado no caduca
\t\t\t\t\t</label>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t<div class=\"form_group\" id=\"group_caducidad\">
\t\t<label>Fecha caducidad:</label>
\t\t<div class=\"row\">
\t\t\t<div class=\"col-md-3\">
\t\t\t\t<select class=\"form-control\" id=\"mesFin\" name=\"_mesFin\" required=\"required\">
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
\t\t\t\t</select>\t\t        \t\t
\t\t\t</div>
\t\t\t<div class=\"col-md-3\">
\t\t\t\t<select class=\"form-control\" id=\"añoFin\" name=\"_añoFin\" required=\"required\">
\t\t\t\t\t<option value=\"\">Año:</option>
\t\t\t\t\t";
        // line 227
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(range(twig_date_format_filter($this->env, "now", "Y"), 1940));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 228
            echo "\t\t\t\t\t<option value=\"";
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo "</option>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 230
        echo "\t\t\t\t</select>\t\t        \t\t
\t\t\t</div>
\t\t</div>
\t</div>
\t<br>
\t<div class=\"form_group\">
\t\t<textarea class=\"form-control\" rows=\"3\" name=\"_description\" placeholder=\"Descripción (Opcional)\"/></textarea>
\t</div>
\t\t
\t
\t<div class=\"modal-footer\">
        \t<button type=\"submit\" class=\"btn btn-blue\" id=\"name\">Guardar</button>
        \t<button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Cerrar</button>
    </div>
</form>

<script type=\"text/javascript\">

\tvar check = document.getElementById(\"caducidad\");
\tif(check.checked == true){
\t\t\$('#group_caducidad').hide();
\t\t\$('#mesFin,#añoFin').removeAttr('required');
\t}

\tfunction checkbox_changed(){
\t\tif(check.checked == true){
\t\t\t\$('#group_caducidad').hide();
\t\t\t\$('#mesFin,#añoFin').removeAttr('required');
\t\t\t\$('#mesFin').val(\"\");
\t\t\t\$('#añoFin').val(\"\");
\t\t}else{
\t\t\t\$('#group_caducidad').show();
\t\t\t\$('#mesFin,#añoFin').attr('required','required');

\t\t}
\t};

\t";
        // line 267
        if ((isset($context["datosCe"]) ? $context["datosCe"] : $this->getContext($context, "datosCe"))) {
            // line 268
            echo "\t";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["datosCe"]) ? $context["datosCe"] : $this->getContext($context, "datosCe")));
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
            foreach ($context['_seq'] as $context["_key"] => $context["certificado"]) {
                // line 269
                echo "\t\tvar check";
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo " = document.getElementById(\"caducidad";
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo "\");
\t\tif(check";
                // line 270
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo ".checked == true){
\t\t\t\$('#group_caducidad";
                // line 271
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo "').hide();
\t\t\t\$('#mesFin";
                // line 272
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo ",#añoFin";
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo "').removeAttr('required');
\t\t\t\$('#mesFin";
                // line 273
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo "').val(\"\");
\t\t\t\$('#añoFin";
                // line 274
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo "').val(\"\");
\t\t}
\t\telse{
\t\t\t\$('#group_caducidad";
                // line 277
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo "').show();
\t\t}

\t\tfunction checkbox_changed";
                // line 280
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo "(){
\t\t\tif(check";
                // line 281
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo ".checked == true){
\t\t\t\t\$('#group_caducidad";
                // line 282
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo "').hide();
\t\t\t\t\$('#mesFin";
                // line 283
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo ",#añoFin";
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo "').removeAttr('required');
\t\t\t\t\$('#mesFin";
                // line 284
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo "').val(\"\");
\t\t\t\t\$('#añoFin";
                // line 285
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo "').val(\"\");
\t\t\t}else{
\t\t\t\t\$('#group_caducidad";
                // line 287
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo "').show();
\t\t\t\t\$('#mesFin";
                // line 288
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo ",#añoFin";
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo "').attr('required','required');
\t\t\t}
\t\t};

\t\t\$('#certificadosClose";
                // line 292
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo "').click(function(){
\t\t\t\$('#panelCertificacion";
                // line 293
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['certificado'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 296
            echo "\t";
        }
        // line 297
        echo "
</script>
";
    }

    public function getTemplateName()
    {
        return "PCVDemoBundle:Edit:certificacion.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  712 => 297,  709 => 296,  692 => 293,  688 => 292,  679 => 288,  675 => 287,  670 => 285,  666 => 284,  660 => 283,  656 => 282,  652 => 281,  648 => 280,  642 => 277,  636 => 274,  632 => 273,  626 => 272,  622 => 271,  618 => 270,  611 => 269,  593 => 268,  591 => 267,  552 => 230,  541 => 228,  537 => 227,  500 => 192,  489 => 190,  485 => 189,  424 => 132,  421 => 131,  416 => 127,  409 => 122,  401 => 116,  379 => 110,  371 => 104,  358 => 102,  354 => 101,  348 => 100,  342 => 99,  336 => 95,  313 => 94,  296 => 93,  290 => 92,  284 => 91,  281 => 90,  279 => 89,  273 => 86,  265 => 80,  257 => 78,  249 => 76,  247 => 75,  240 => 70,  227 => 68,  223 => 67,  217 => 66,  213 => 65,  208 => 62,  185 => 60,  168 => 59,  162 => 58,  158 => 57,  155 => 56,  153 => 55,  148 => 52,  146 => 51,  135 => 45,  124 => 39,  110 => 30,  98 => 23,  89 => 17,  83 => 14,  78 => 12,  74 => 11,  70 => 10,  64 => 7,  61 => 6,  44 => 5,  41 => 4,  39 => 3,  34 => 2,  31 => 1,  27 => 131,  23 => 129,  21 => 1,);
    }
}
