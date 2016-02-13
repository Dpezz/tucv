<?php

/* PCVDemoBundle:Edit:proyectos.html.twig */
class __TwigTemplate_03f69762f199314694f0f9f3a2fdfd1691244e4e2bf37e2d8324865bd7a9cc7a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'edit_project' => array($this, 'block_edit_project'),
            'new_project' => array($this, 'block_new_project'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('edit_project', $context, $blocks);
        // line 108
        echo "
";
        // line 109
        $this->displayBlock('new_project', $context, $blocks);
    }

    // line 1
    public function block_edit_project($context, array $blocks = array())
    {
        // line 2
        echo "<form action=\"";
        echo $this->env->getExtension('routing')->getPath("_edit_project");
        echo "\" method=\"POST\" role=\"form\">
\t";
        // line 3
        if ((isset($context["datosP"]) ? $context["datosP"] : $this->getContext($context, "datosP"))) {
            // line 4
            echo "\t\t<div class=\"panel-group\" id=\"accordionProyectos\">
\t\t";
            // line 5
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["datosP"]) ? $context["datosP"] : $this->getContext($context, "datosP")));
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
            foreach ($context['_seq'] as $context["_key"] => $context["proy"]) {
                // line 6
                echo "\t\t
\t\t\t<div id=\"panelProyectos";
                // line 7
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo "\" class=\"panel panel-primary\">
\t\t\t    <div class=\"panel-heading\">
\t\t\t      \t<h4 class=\"panel-title text-center\">
\t\t\t        \t<a data-toggle=\"collapse\" data-parent=\"#accordionProyectos\" href=\"#ProyectosEdit";
                // line 10
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo "\">
\t\t\t        \t<span class=\"badge pull-left\">";
                // line 11
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo "</span>
\t\t\t\t\t\t ";
                // line 12
                echo twig_escape_filter($this->env, $this->getAttribute($context["proy"], "title", array()), "html", null, true);
                echo ".
\t\t\t        \t</a>
\t\t\t        \t<button type=\"button\" class=\"close\" id=\"proyectosClose";
                // line 14
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo "\">&times;</button>
\t\t\t     \t</h4>
\t\t\t    </div>
\t\t\t    <div id=\"ProyectosEdit";
                // line 17
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo "\" class=\"panel-collapse collapse\">
\t\t\t      \t<div class=\"panel-body\">
\t\t\t\t\t<div class=\"form_group\">
\t\t\t\t\t\t<div class=\"well\">
\t\t\t\t\t\t\t<div class=\"form_group\">
\t\t\t\t\t\t\t\t<h5 class=\"text-center\">
\t\t\t\t\t\t\t\t\t";
                // line 23
                if ( !twig_test_empty($this->getAttribute($context["proy"], "imagenUrl", array()))) {
                    // line 24
                    echo "\t\t\t\t\t\t\t\t\t\t<img src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(("img/project/" . $this->getAttribute($context["proy"], "imagenUrl", array()))), "html", null, true);
                    echo "\" id=\"imageProject";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                    echo "\" name=\"_imageProject";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                    echo "\" class=\"img-thumbnail\" width=\"45%\" height=\"30%\">
\t\t\t\t\t\t\t\t\t";
                } else {
                    // line 26
                    echo "\t\t\t\t\t\t\t\t\t\t<img src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/pcvdemo/image/noportafolio.png"), "html", null, true);
                    echo "\" id=\"imageProject";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                    echo "\" name=\"_imageProject";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                    echo "\" class=\"img-thumbnail\" width=\"45%\" height=\"30%\">
\t\t\t\t\t\t\t\t\t";
                }
                // line 28
                echo "\t\t\t\t\t\t\t\t</h5>

\t\t\t\t\t\t\t\t<input type=\"file\" id=\"inputImagen";
                // line 30
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo "\" name=\"_inputImagen";
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo "\" accept=\"image/*\"/>
\t\t\t\t\t\t\t\t<input type=\"hidden\" id=\"dataImagen";
                // line 31
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo "\" name=\"_dataImagen";
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo "\"/>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<br>
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-md-5\">
\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t<span class=\"input-group-addon\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Título\"><i class=\"fa fa-map-marker\"></i></span>
\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"title\" name=\"_title";
                // line 39
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo "\" placeholder=\"Título del Proyecto..\" value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["proy"], "title", array()), "html", null, true);
                echo "\"required/>\t    
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-md-5\">
\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t<span class=\"input-group-addon\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Cliente\"><i class=\"fa fa-globe\"></i></span>
\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"cliente\" name=\"_cliente";
                // line 45
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo "\" placeholder=\"Cliente del Proyecto..\" value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["proy"], "cliente", array()), "html", null, true);
                echo "\"required/>\t
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
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t";
                // line 54
                $context["item"] = twig_split_filter($this->env, $this->getAttribute($context["proy"], "fecha", array()), ",");
                // line 55
                echo "\t\t\t\t\t\t\t<div class=\"col-md-5\">
\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t<span class=\"input-group-addon\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Mes\"><i class=\"fa fa-calendar\"></i></span>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<select class=\"form-control\" name=\"_mes";
                // line 59
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t\t\t<option ";
                // line 60
                if ((twig_first($this->env, (isset($context["item"]) ? $context["item"] : $this->getContext($context, "item"))) == " ")) {
                    echo "selected";
                }
                echo " value=\"\" >Mes:</option>
\t\t\t\t\t\t\t\t\t";
                // line 61
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
                    // line 62
                    echo "\t\t\t\t\t\t\t\t\t\t<option value='";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                    echo "' ";
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
                // line 63
                echo "\t\t\t
\t\t\t\t\t\t\t\t</select>\t\t        \t\t
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-md-5\">
\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t<span class=\"input-group-addon\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Año\"><i class=\"fa fa-calendar\"></i></span>
\t\t\t\t\t\t\t\t<select class=\"form-control\" name=\"_año";
                // line 70
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t\t\t<option ";
                // line 71
                if ((twig_last($this->env, (isset($context["item"]) ? $context["item"] : $this->getContext($context, "item"))) == " ")) {
                    echo "select";
                }
                echo ">Año:</option>
\t\t\t\t\t\t\t\t\t";
                // line 72
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable(range(twig_date_format_filter($this->env, "now", "Y"), 1940));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 73
                    echo "\t\t\t\t\t\t\t\t\t<option  ";
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
                // line 75
                echo "\t\t\t\t\t\t\t\t</select>\t\t        \t\t
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<br>
\t\t\t\t\t\t<div class=\"form_group\">
\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t<span class=\"input-group-addon\" data-toggle=\"tooltip\" data-placement=\"right\" title=\"Url del Proyecto. Ej. http://www.tucv.cl\"><i class=\"fa fa-link\"></i></span>
\t\t\t\t\t\t\t\t<input type=\"url\" class=\"form-control\" name=\"_link";
                // line 83
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo "\" placeholder=\"http://\" value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["proy"], "link", array()), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<br>
\t\t\t\t\t\t<div class=\"form_group\">
\t\t\t\t\t\t\t<textarea class=\"form-control\" rows=\"3\" name=\"_description";
                // line 88
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo "\" placeholder=\"Descripción..\" required/>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["proy"], "descripcion", array()), "html", null, true);
                echo "</textarea>
\t\t\t\t\t\t</div>
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['proy'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 95
            echo "\t\t</div>
\t\t<div class=\"modal-footer\">
        \t<button type=\"submit\" class=\"btn btn-blue\" id=\"loading-example-btn\" data-loading-text=\"Loading...\">Guardar</button>
        \t<button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Cerrar</button>
      \t</div>
\t";
        } else {
            // line 101
            echo "\t<p><i class=\"fa fa-plus-square\"></i> Agrega Experiencia Profesional</p>
\t<div class=\"modal-footer\">
        \t<button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Cerrar</button>
      \t</div>
\t";
        }
        // line 106
        echo "</form>
";
    }

    // line 109
    public function block_new_project($context, array $blocks = array())
    {
        // line 110
        echo "<form action=\"";
        echo $this->env->getExtension('routing')->getPath("_new_project");
        echo "\" method=\"POST\" role=\"form\">
\t<div class=\"form_group\">
\t\t<div class=\"well\">
\t\t\t<div class=\"form_group\">
\t\t\t\t<h5 class=\"text-center\">
\t\t\t\t\t<img src=\"";
        // line 115
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/pcvdemo/image/noportafolio.png"), "html", null, true);
        echo "\" id=\"imageProject\" name=\"_imageProject\" class=\"img-thumbnail\" width=\"45%\">
\t\t\t\t</h5>
\t\t\t\t<input type=\"file\" id=\"inputImagen\" name=\"_inputImagen\" accept=\"image/*\"/>
\t\t\t\t<input type=\"hidden\" id=\"dataImagenProyecto\" name=\"_dataImagenProyecto\"/>
\t\t\t</div>
\t\t</div>
\t\t<br>
\t\t<div class=\"row\">
\t\t\t<div class=\"col-md-5\">
\t\t\t\t<div class=\"input-group\">
\t\t\t\t<span class=\"input-group-addon\" data-toggle=\"tooltip\" data-placement=\"left\" title=\"Título\"><i class=\"fa fa-map-marker\"></i></span>
\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"title\" name=\"_title\" placeholder=\"Título del Proyecto..\" required/>\t    
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-md-5\">
\t\t\t\t<div class=\"input-group\">
\t\t\t\t<span class=\"input-group-addon\" data-toggle=\"tooltip\" data-placement=\"left\" title=\"Cliente\"><i class=\"fa fa-globe\"></i></span>
\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"cliente\" name=\"_cliente\" placeholder=\"Cliente del Proyecto..\" required/>\t
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t<br>
\t<div class=\"form_group\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-md-5\">
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
\t\t\t<div class=\"col-md-5\">
\t\t\t\t<div class=\"input-group\">
\t\t\t\t<span class=\"input-group-addon\" data-toggle=\"tooltip\" data-placement=\"left\" title=\"Año\"><i class=\"fa fa-calendar\"></i></span>
\t\t\t\t<select class=\"form-control\" name=\"_año\" required>
\t\t\t\t\t<option value=\"\">Año:</option>
\t\t\t\t\t";
        // line 165
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(range(twig_date_format_filter($this->env, "now", "Y"), 1940));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 166
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
        // line 168
        echo "\t\t\t\t</select>\t\t        \t\t
\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<br>
\t\t<div class=\"form_group\">
\t\t\t<div class=\"input-group\">
\t\t\t\t<span class=\"input-group-addon\" data-toggle=\"tooltip\" data-placement=\"left\" title=\"Url del Proyecto. Ej: http://www.tucv.cl\"><i class=\"fa fa-link\"></i></span>
\t\t\t\t<input type=\"url\" class=\"form-control\" name=\"_link\" placeholder=\"http://\">
\t\t\t</div>
\t\t</div>
\t\t<br>
\t\t<div class=\"form_group\">
\t\t\t<textarea class=\"form-control\" rows=\"3\" name=\"_description\" placeholder=\"Descripción..\" required/></textarea>
\t\t</div>
\t\t
\t</div>
\t<div class=\"modal-footer\">
        \t<button type=\"submit\" class=\"btn btn-blue\" id=\"name\">Guardar</button>
        \t<button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Cerrar</button>
    </div>
</form>

<script type=\"text/javascript\">

    \$('#inputImagen').change(function(e) {
\t    var fileNew = document.getElementById(\"inputImagen\").files[0];
\t    var readImg = new FileReader();
\t    readImg.readAsDataURL(fileNew);
\t    readImg.onload = function(e) {
\t        \$('#imageProject').attr('src',e.target.result);
\t        \$('#dataImagenProyecto').val(e.target.result);
\t    }
    });

    //editar image Project
\t";
        // line 204
        if ((isset($context["datosP"]) ? $context["datosP"] : $this->getContext($context, "datosP"))) {
            // line 205
            echo "\t\t";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["datosP"]) ? $context["datosP"] : $this->getContext($context, "datosP")));
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
            foreach ($context['_seq'] as $context["_key"] => $context["proy"]) {
                // line 206
                echo "\t\t\t\$('#inputImagen";
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo "').change(function(e) {
\t\t\t    var fileEdit = document.getElementById(\"inputImagen";
                // line 207
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo "\").files[0];
\t\t\t    var readImgEdit = new FileReader();
\t\t\t    readImgEdit.readAsDataURL(fileEdit);
\t\t\t    readImgEdit.onload = function(e) {
\t\t\t        \$('#imageProject";
                // line 211
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo "').attr('src',e.target.result);
\t\t\t        \$('#dataImagen";
                // line 212
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo "').val(e.target.result);
\t\t\t    }
\t\t    });

\t\t  \t\$('#proyectosClose";
                // line 216
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo "').click(function(){
\t\t\t\t\$('#panelProyectos";
                // line 217
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo "').remove();
\t\t\t});
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['proy'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 220
            echo "\t";
        }
        // line 221
        echo "

</script>

";
    }

    public function getTemplateName()
    {
        return "PCVDemoBundle:Edit:proyectos.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  512 => 221,  509 => 220,  492 => 217,  488 => 216,  481 => 212,  477 => 211,  470 => 207,  465 => 206,  447 => 205,  445 => 204,  407 => 168,  396 => 166,  392 => 165,  339 => 115,  330 => 110,  327 => 109,  322 => 106,  315 => 101,  307 => 95,  284 => 88,  274 => 83,  264 => 75,  251 => 73,  247 => 72,  241 => 71,  237 => 70,  228 => 63,  205 => 62,  188 => 61,  182 => 60,  178 => 59,  172 => 55,  170 => 54,  166 => 52,  164 => 51,  153 => 45,  142 => 39,  129 => 31,  123 => 30,  119 => 28,  109 => 26,  99 => 24,  97 => 23,  88 => 17,  82 => 14,  77 => 12,  73 => 11,  69 => 10,  63 => 7,  60 => 6,  43 => 5,  40 => 4,  38 => 3,  33 => 2,  30 => 1,  26 => 109,  23 => 108,  21 => 1,);
    }
}
