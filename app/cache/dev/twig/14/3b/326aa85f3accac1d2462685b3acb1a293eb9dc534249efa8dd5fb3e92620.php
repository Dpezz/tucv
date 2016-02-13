<?php

/* PCVDemoBundle:Edit:idiomas.html.twig */
class __TwigTemplate_143b326aa85f3accac1d2462685b3acb1a293eb9dc534249efa8dd5fb3e92620 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'edit_idiom' => array($this, 'block_edit_idiom'),
            'new_idiom' => array($this, 'block_new_idiom'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('edit_idiom', $context, $blocks);
        // line 65
        echo "
";
        // line 66
        $this->displayBlock('new_idiom', $context, $blocks);
        // line 124
        echo "
";
    }

    // line 1
    public function block_edit_idiom($context, array $blocks = array())
    {
        // line 2
        echo "<form action=\"";
        echo $this->env->getExtension('routing')->getPath("_edit_idioma");
        echo "\" method=\"POST\" role=\"form\">
\t";
        // line 3
        if ((isset($context["datosI"]) ? $context["datosI"] : $this->getContext($context, "datosI"))) {
            // line 4
            echo "\t<div class=\"panel-group\" id=\"accordionIdiomas\">
\t";
            // line 5
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["datosI"]) ? $context["datosI"] : $this->getContext($context, "datosI")));
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
            foreach ($context['_seq'] as $context["_key"] => $context["idioma"]) {
                // line 6
                echo "\t
\t  \t
\t\t<div id=\"panelIdiomas";
                // line 8
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo "\" class=\"panel panel-primary\">
\t\t\t<div class=\"panel-heading\">
\t\t\t    <h4 class=\"panel-title text-center\">
\t\t\t        <a data-toggle=\"collapse\" data-parent=\"#accordionIdiomas\" href=\"#idiomasEdit";
                // line 11
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo "\">
\t\t\t          \t<span class=\"badge pull-left\">";
                // line 12
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo "</span>
\t\t\t          \t ";
                // line 13
                echo twig_escape_filter($this->env, $this->getAttribute($context["idioma"], "name", array()), "html", null, true);
                echo ".
\t\t\t        </a>
\t\t\t        <button id=\"idiomasClose";
                // line 15
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo "\" type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>
\t\t\t    </h4>
\t\t\t</div>
\t\t\t<div id=\"idiomasEdit";
                // line 18
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo "\" class=\"panel-collapse collapse\">
\t\t\t    <div class=\"panel-body\">

\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t<span class=\"input-group-addon\" data-toggle=\"tooltip\" data-placement=\"left\" title=\"Idioma\"><i class=\"fa fa-comments\"></i></span>
\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control input-sm\" id=\"name\" name=\"_name";
                // line 26
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo "\" 
\t\t\t\t\t\t\t\t value=\"";
                // line 27
                if ( !twig_test_empty($this->getAttribute($context["idioma"], "name", array()))) {
                    echo twig_escape_filter($this->env, $this->getAttribute($context["idioma"], "name", array()), "html", null, true);
                }
                echo "\" pattern=\"^[a-zA-ZñÑáéíóú ]+\" required/>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t<div class=\"checkbox\">
\t\t\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" ";
                // line 34
                if ($this->getAttribute($context["idioma"], "nativo", array())) {
                    echo " checked=\"checked\" ";
                }
                echo " name=\"_nativo";
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t\t\t\tIdioma Nativo
\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<div class=\"col-md-8\">
\t\t\t\t\t\t\t\t<input id=\"idiom";
                // line 42
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo "\" name=\"_value";
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo "\" data-slider-id='value' type=\"text\" data-slider-min=\"1\" data-slider-max=\"100\" data-slider-step=\"1\" data-slider-value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["idioma"], "value", array()), "html", null, true);
                echo "\" value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["idioma"], "value", array()), "html", null, true);
                echo "\"/>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['idioma'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 50
            echo "\t</div>

\t<div class=\"modal-footer\">
        <button type=\"submit\" class=\"btn btn-blue\" id=\"name\">Guardar</button>
        <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Cerrar</button>
    </div>
    ";
        } else {
            // line 57
            echo "    <p><i class=\"fa fa-plus-square\"></i> Agregar Idiomas</p>
    <div class=\"modal-footer\">
        <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Cerrar</button>
    </div>
\t";
        }
        // line 62
        echo "</form>

";
    }

    // line 66
    public function block_new_idiom($context, array $blocks = array())
    {
        // line 67
        echo "<form action=\"";
        echo $this->env->getExtension('routing')->getPath("_new_idioma");
        echo "\" method=\"POST\" role=\"form\">
\t<div class=\"row\">
\t\t<div class=\"col-md-6\">
\t\t\t<div class=\"form-group\">
\t\t\t\t<div class=\"input-group\">
\t\t\t\t<span class=\"input-group-addon\" data-toggle=\"tooltip\" data-placement=\"left\" title=\"Nuevo idioma\"><i class=\"fa fa-comments\"></i></span>
\t\t\t\t<input type=\"text\" class=\"form-control input-sm\" id=\"name\" name=\"_name\"  placeholder=\"Idioma...\" pattern=\"^[a-zA-ZñÑáéíóú ]+\" required/>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"col-md-6\">
\t\t\t<div class=\"checkbox\">
\t\t\t\t<label>
\t\t\t\t\t<input type=\"checkbox\" name=\"_nativo\" checked=\"checked\">
\t\t\t\t\t\tIdioma Nativo
\t\t\t\t</label>
\t\t\t</div>
\t\t</div>
\t</div>\t\t
\t<div class=\"well\">
\t\t<span class=\"badge pull-left btn-blue-dark\">1</span><span class=\"badge pull-right btn-blue-dark\">100</span>
\t\t<input id=\"idiomNew\" name=\"_valorIdioma\" data-slider-id='value' type=\"text\" data-slider-min=\"1\" data-slider-max=\"100\" data-slider-step=\"1\" data-slider-value=\"50\"/>
\t</div>
\t<br>

\t<div class=\"modal-footer\">
        <button type=\"submit\" class=\"btn btn-blue\">Guardar</button>
        <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Cerrar</button>
    </div>
</form>

<script src=\"";
        // line 98
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/pcvdemo/js/slider/bootstrap-slider.js"), "html", null, true);
        echo "\"></script>
<link rel=\"stylesheet\" href=\"";
        // line 99
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/pcvdemo/css/slider.css"), "html", null, true);
        echo "\">
<script type=\"text/javascript\">
\t\$('#idiomNew').slider({
\t\tformater: function(value) {
\t\t\treturn 'nivel: ' + value +'%';
\t\t}
\t});
\t\$('#idiomNew').val(50);

\t";
        // line 108
        if ((isset($context["datosI"]) ? $context["datosI"] : $this->getContext($context, "datosI"))) {
            // line 109
            echo "\t";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["datosI"]) ? $context["datosI"] : $this->getContext($context, "datosI")));
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
            foreach ($context['_seq'] as $context["_key"] => $context["idioma"]) {
                // line 110
                echo "\t\t\$('#idiom";
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo "').slider({
\t\t\tformater: function(value";
                // line 111
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo ") {
\t\t\t\treturn 'nivel: ' + value";
                // line 112
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo " +'%';
\t\t\t}
\t\t});

\t\t\$('#idiomasClose";
                // line 116
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo "').click(function(){
\t\t\t\$('#panelIdiomas";
                // line 117
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['idioma'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 120
            echo "\t";
        }
        // line 121
        echo "
</script>
";
    }

    public function getTemplateName()
    {
        return "PCVDemoBundle:Edit:idiomas.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  298 => 121,  295 => 120,  278 => 117,  274 => 116,  267 => 112,  263 => 111,  258 => 110,  240 => 109,  238 => 108,  226 => 99,  222 => 98,  187 => 67,  184 => 66,  178 => 62,  171 => 57,  162 => 50,  134 => 42,  119 => 34,  107 => 27,  103 => 26,  92 => 18,  86 => 15,  81 => 13,  77 => 12,  73 => 11,  67 => 8,  63 => 6,  46 => 5,  43 => 4,  41 => 3,  36 => 2,  33 => 1,  28 => 124,  26 => 66,  23 => 65,  21 => 1,);
    }
}
