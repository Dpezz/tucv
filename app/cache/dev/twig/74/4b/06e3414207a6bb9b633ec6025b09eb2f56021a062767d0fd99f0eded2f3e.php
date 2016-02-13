<?php

/* PCVDemoBundle:Edit:premios.html.twig */
class __TwigTemplate_744b06e3414207a6bb9b633ec6025b09eb2f56021a062767d0fd99f0eded2f3e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'edit_premios' => array($this, 'block_edit_premios'),
            'new_premios' => array($this, 'block_new_premios'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('edit_premios', $context, $blocks);
        // line 110
        echo "

";
        // line 112
        $this->displayBlock('new_premios', $context, $blocks);
    }

    // line 1
    public function block_edit_premios($context, array $blocks = array())
    {
        // line 2
        echo "\t<form action=\"";
        echo $this->env->getExtension('routing')->getPath("_edit_premios");
        echo "\" method=\"POST\" role=\"form\">
\t";
        // line 3
        if ((isset($context["datosPr"]) ? $context["datosPr"] : $this->getContext($context, "datosPr"))) {
            // line 4
            echo "\t\t<div class=\"panel-group\" id=\"accordionPremios\">
\t\t";
            // line 5
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["datosPr"]) ? $context["datosPr"] : $this->getContext($context, "datosPr")));
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
            foreach ($context['_seq'] as $context["_key"] => $context["premio"]) {
                // line 6
                echo "\t  \t\t
\t\t\t<div id=\"panelPremios";
                // line 7
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo "\" class=\"panel panel-primary\">
\t\t\t    <div class=\"panel-heading\">
\t\t\t      \t<h4 class=\"panel-title text-center\">
\t\t\t        \t<a data-toggle=\"collapse\" data-parent=\"#accordionPremios\" href=\"#premios";
                // line 10
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo "\">
\t\t\t        \t<span class=\"badge pull-left\">";
                // line 11
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo "</span>
\t\t\t          \t ";
                // line 12
                echo twig_escape_filter($this->env, $this->getAttribute($context["premio"], "title", array()), "html", null, true);
                echo ".
\t\t\t        \t</a>
\t\t\t        \t<button type=\"button\" class=\"close\" id=\"premiosClose";
                // line 14
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo "\">&times;</button>
\t\t\t     \t</h4>
\t\t\t    </div>
\t\t\t    <div id=\"premios";
                // line 17
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo "\" class=\"panel-collapse collapse\">
\t\t\t      \t<div class=\"panel-body\">
\t\t\t\t\t<div class=\"form_group\">
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t<span class=\"input-group-addon\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Título\"><i class=\"fa fa-trophy\"></i></span>
\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"title\" name=\"_title";
                // line 24
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo "\" placeholder=\"Título del Reconocimiento..\" value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["premio"], "title", array()), "html", null, true);
                echo "\"required/>\t    
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t<span class=\"input-group-addon\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Entidad que entrega el reconocimiento\"><i class=\"fa fa-building-o\"></i></span>
\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"emisor\" name=\"_emisor";
                // line 30
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo "\" placeholder=\"Emisor..\" value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["premio"], "emisor", array()), "html", null, true);
                echo "\"required/>\t
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<br>
\t\t\t\t\t<div class=\"form_group\">
\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t<span class=\"input-group-addon\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Ocupación\"><i class=\"fa fa-briefcase\"></i></span>
\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"rol\" name=\"_rol";
                // line 39
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo "\" placeholder=\"Ocupación..\" value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["premio"], "rol", array()), "html", null, true);
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
                // line 48
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo "\" placeholder=\"Ciudad..\" pattern=\"^[a-zA-ZñÑáéíóú ]+\" value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["premio"], "city", array()), "html", null, true);
                echo "\"required/>\t    
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t<span class=\"input-group-addon\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"País donde se obtuvo\"><i class=\"fa fa-globe\"></i></span>
\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"country\" name=\"_country";
                // line 54
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo "\" placeholder=\"Pais..\" pattern=\"^[a-zA-ZñÑáéíóú ]+\" value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["premio"], "country", array()), "html", null, true);
                echo "\" required/>\t
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<br>
\t\t\t\t\t";
                // line 60
                $context["meses"] = array(0 => "Enero", 1 => "Febrero", 2 => "Marzo", 3 => "Abril", 4 => "Mayo", 5 => "Junio", 6 => "Julio", 7 => "Agosto", 8 => "Septiembre", 9 => "Octubre", 10 => "Noviembre", 11 => "Diciembre");
                // line 61
                echo "\t\t\t\t\t<div class=\"form_group\">
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t";
                // line 63
                $context["item"] = twig_split_filter($this->env, $this->getAttribute($context["premio"], "date", array()), ",");
                // line 64
                echo "\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t<span class=\"input-group-addon\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Mes\"><i class=\"fa fa-calendar\"></i></span>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<select class=\"form-control\" name=\"_mes";
                // line 68
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo "\" required>
\t\t\t\t\t\t\t\t\t<option ";
                // line 69
                if ((twig_first($this->env, (isset($context["item"]) ? $context["item"] : $this->getContext($context, "item"))) == " ")) {
                    echo "selected";
                }
                echo " value=\"\">Mes:</option>
\t\t\t\t\t\t\t\t\t";
                // line 70
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
                    // line 71
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
                // line 72
                echo "\t\t\t\t
\t\t\t\t\t\t\t\t</select>\t\t        \t\t
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t<span class=\"input-group-addon\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Año\"><i class=\"fa fa-calendar\"></i></span>
\t\t\t\t\t\t\t\t<select class=\"form-control\" name=\"_año";
                // line 79
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo "\" required>
\t\t\t\t\t\t\t\t\t<option ";
                // line 80
                if ((twig_last($this->env, (isset($context["item"]) ? $context["item"] : $this->getContext($context, "item"))) == "Año:")) {
                    echo "select";
                }
                echo " value=\"\">Año:</option>
\t\t\t\t\t\t\t\t\t";
                // line 81
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable(range(twig_date_format_filter($this->env, "now", "Y"), 1940));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 82
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
                // line 84
                echo "\t\t\t\t\t\t\t\t</select>\t\t        \t\t
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<br>
\t\t\t\t\t<div class=\"form_group\">
\t\t\t\t\t\t<textarea class=\"form-control\" rows=\"3\" name=\"_description";
                // line 91
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo "\" placeholder=\"Descripción (Opcional)\"/>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["premio"], "description", array()), "html", null, true);
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['premio'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 97
            echo "\t\t</div>
\t\t<div class=\"modal-footer\">
        \t<button type=\"submit\" class=\"btn btn-blue\" id=\"loading-example-btn\" data-loading-text=\"Loading...\">Guardar</button>
        \t<button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Cerrar</button>
      \t</div>
\t";
        } else {
            // line 103
            echo "\t<p><i class=\"fa fa-plus-square\"></i> Agrega Reconocimientos y Premios</p>
\t<div class=\"modal-footer\">
        \t<button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Cerrar</button>
      \t</div>
\t";
        }
        // line 108
        echo "</form>
";
    }

    // line 112
    public function block_new_premios($context, array $blocks = array())
    {
        // line 113
        echo "<form action=\"";
        echo $this->env->getExtension('routing')->getPath("_new_premio");
        echo "\" method=\"POST\" role=\"form\">
\t<div class=\"form_group\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-md-6\">
\t\t\t\t<div class=\"input-group\">
\t\t\t\t<span class=\"input-group-addon\" data-toggle=\"tooltip\" data-placement=\"left\" title=\"Título\"><i class=\"fa fa-trophy\"></i></span>
\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"title\" name=\"_title\" placeholder=\"Título del Reconocimiento..\" required/>\t    
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-md-6\">
\t\t\t\t<div class=\"input-group\">
\t\t\t\t<span class=\"input-group-addon\" data-toggle=\"tooltip\" data-placement=\"left\" title=\"Entidad que entrega el reconocimiento\"><i class=\"fa fa-building-o\"></i></span>
\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"emisor\" name=\"_emisor\" placeholder=\"Emisor..\" required/>\t
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t<br>
\t<div class=\"form_group\">
\t\t<div class=\"input-group\">
\t\t\t<span class=\"input-group-addon\" data-toggle=\"tooltip\" data-placement=\"left\" title=\"Ocupación\"><i class=\"fa fa-briefcase\"></i></span>
\t\t\t<input type=\"text\" class=\"form-control\" id=\"rol\" name=\"_rol\" placeholder=\"Ocupacion..\" required/>\t    
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
\t\t<div class=\"row\">
\t\t\t<div class=\"col-md-6\">
\t\t\t\t<div class=\"input-group\">
\t\t\t\t<span class=\"input-group-addon\" data-toggle=\"tooltip\" data-placement=\"left\" title=\"Mes\"><i class=\"fa fa-calendar\"></i></span>
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
\t\t\t</div>
\t\t\t<div class=\"col-md-6\">
\t\t\t\t<div class=\"input-group\">
\t\t\t\t<span class=\"input-group-addon\" data-toggle=\"tooltip\" data-placement=\"left\" title=\"Año\"><i class=\"fa fa-calendar\"></i></span>
\t\t\t\t<select class=\"form-control\" name=\"_año\" required>
\t\t\t\t\t<option value=\"\">Año:</option>
\t\t\t\t\t";
        // line 182
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(range(twig_date_format_filter($this->env, "now", "Y"), 1940));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 183
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
        // line 185
        echo "\t\t\t\t</select>\t\t        \t\t
\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t<br>
\t<div class=\"form_group\">
\t\t<textarea class=\"form-control\" rows=\"3\" name=\"_description\" placeholder=\"Descripción (Opcional)\"/></textarea>
\t</div>
\t\t
\t<div class=\"modal-footer\">
    \t<button type=\"submit\" class=\"btn btn-blue\" id=\"name\">Guardar</button>
    \t<button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Cerrar</button>
    </div>
</form>
<script type=\"text/javascript\">
";
        // line 201
        if ((isset($context["datosPr"]) ? $context["datosPr"] : $this->getContext($context, "datosPr"))) {
            // line 202
            echo "\t";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["datosPr"]) ? $context["datosPr"] : $this->getContext($context, "datosPr")));
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
            foreach ($context['_seq'] as $context["_key"] => $context["premio"]) {
                // line 203
                echo "\t\t\$('#premiosClose";
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo "').click(function(){
\t\t\t\$('#panelPremios";
                // line 204
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['premio'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 208
        echo "</script>
";
    }

    public function getTemplateName()
    {
        return "PCVDemoBundle:Edit:premios.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  463 => 208,  445 => 204,  440 => 203,  422 => 202,  420 => 201,  402 => 185,  391 => 183,  387 => 182,  314 => 113,  311 => 112,  306 => 108,  299 => 103,  291 => 97,  269 => 91,  260 => 84,  247 => 82,  243 => 81,  237 => 80,  233 => 79,  224 => 72,  201 => 71,  184 => 70,  178 => 69,  174 => 68,  168 => 64,  166 => 63,  162 => 61,  160 => 60,  149 => 54,  138 => 48,  124 => 39,  110 => 30,  99 => 24,  89 => 17,  83 => 14,  78 => 12,  74 => 11,  70 => 10,  64 => 7,  61 => 6,  44 => 5,  41 => 4,  39 => 3,  34 => 2,  31 => 1,  27 => 112,  23 => 110,  21 => 1,);
    }
}
