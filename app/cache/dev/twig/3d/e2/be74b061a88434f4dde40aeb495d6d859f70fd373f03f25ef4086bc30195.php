<?php

/* PCVDemoBundle:Edit:conocimientos.html.twig */
class __TwigTemplate_3de2be74b061a88434f4dde40aeb495d6d859f70fd373f03f25ef4086bc30195 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'edit_knowing' => array($this, 'block_edit_knowing'),
            'new_knowing' => array($this, 'block_new_knowing'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('edit_knowing', $context, $blocks);
        // line 51
        echo "

";
        // line 53
        $this->displayBlock('new_knowing', $context, $blocks);
    }

    // line 1
    public function block_edit_knowing($context, array $blocks = array())
    {
        // line 2
        echo "<form action=\"";
        echo $this->env->getExtension('routing')->getPath("_edit_conocimiento");
        echo "\" method=\"POST\" role=\"form\">
\t";
        // line 3
        if ((isset($context["datosC"]) ? $context["datosC"] : $this->getContext($context, "datosC"))) {
            // line 4
            echo "\t<div class=\"panel-group\" id=\"accordion\">
\t";
            // line 5
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["datosC"]) ? $context["datosC"] : $this->getContext($context, "datosC")));
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
            foreach ($context['_seq'] as $context["_key"] => $context["conocimiento"]) {
                // line 6
                echo "\t  \t<div id=\"panelConocimientos";
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo "\" class=\"panel panel-primary\">
\t\t\t<div class=\"panel-heading\">
\t\t\t    <h4 class=\"panel-title text-center\">
\t\t\t       \t<a data-toggle=\"collapse\" data-parent=\"#accordion\" href=\"#conocimientos";
                // line 9
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo "\">
\t\t\t        <span class=\"badge pull-left\">";
                // line 10
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo "</span>
\t\t\t         ";
                // line 11
                echo twig_escape_filter($this->env, $this->getAttribute($context["conocimiento"], "name", array()), "html", null, true);
                echo "
\t\t\t        </a>
\t\t\t        <button id=\"conocimientosClose";
                // line 13
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo "\" type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>
\t\t\t    </h4>
\t\t\t</div>
\t\t\t<div id=\"conocimientos";
                // line 16
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo "\" class=\"panel-collapse collapse\">
\t\t\t    <div class=\"panel-body\">
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t<span class=\"input-group-addon\" data-toggle=\"tooltip\" data-placement=\"bottom\" title=\"Nombre\"><i class=\"fa fa-gears\"></i></span>
\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control input-sm\" id=\"name\" name=\"_name";
                // line 23
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo "\" 
\t\t\t\t\t\t\t\t\tvalue=\"";
                // line 24
                if ( !twig_test_empty($this->getAttribute($context["conocimiento"], "name", array()))) {
                    echo twig_escape_filter($this->env, $this->getAttribute($context["conocimiento"], "name", array()), "html", null, true);
                }
                echo "\" maxlength=\"15\"required/>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<input id=\"know";
                // line 31
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo "\" name=\"_value";
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo "\" data-slider-id='value' type=\"text\" data-slider-min=\"1\" data-slider-max=\"6\" data-slider-step=\"1\" data-slider-value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["conocimiento"], "value", array()), "html", null, true);
                echo "\" value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["conocimiento"], "value", array()), "html", null, true);
                echo "\"/>
\t\t\t\t\t\t</div>\t
\t\t\t\t\t\t
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['conocimiento'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 38
            echo "\t</div>
\t<div class=\"modal-footer\">
        <button type=\"submit\" class=\"btn btn-blue\">Guardar</button>
        <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Cerrar</button>
    </div>
    ";
        } else {
            // line 44
            echo "    <p><i class=\"fa fa-plus-square\"></i> Agregar Conocimientos</p>
    <div class=\"modal-footer\">
        <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Cerrar</button>
    </div>
";
        }
        // line 49
        echo "</form>
";
    }

    // line 53
    public function block_new_knowing($context, array $blocks = array())
    {
        // line 54
        echo "<form  action=\"";
        echo $this->env->getExtension('routing')->getPath("_new_conocimiento");
        echo "\" method=\"POST\" role=\"form\">
\t<div class=\"row\">
\t\t<div class=\"col-md-12\">
\t\t\t<div class=\"form-group\">
\t\t\t\t<div class=\"input-group\">
\t\t\t\t<span class=\"input-group-addon\" data-toggle=\"tooltip\" data-placement=\"left\" title=\"Nombre del conocimiento\"><i class=\"fa fa-lightbulb-o\"></i></span>
\t\t\t\t<input type=\"text\" class=\"form-control input-sm\" id=\"name\" name=\"_name\" placeholder=\"Conocimiento...\" maxlength=\"15\" required/>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t\t
\t<div class=\"form-group\">
\t\t<div class=\"well\">
\t\t\t<span class=\"badge pull-left btn-blue-dark\">1</span><span class=\"badge pull-right btn-blue-dark\">6</span>
\t\t\t<input id=\"knowNew\" name=\"_value\" data-slider-id='value' type=\"text\" data-slider-min=\"1\" data-slider-max=\"6\" data-slider-step=\"1\" data-slider-value=\"3\"/>
\t\t</div>   
\t</div>\t

\t<div class=\"modal-footer\">
        <button type=\"submit\" class=\"btn btn-blue\">Guardar</button>
        <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Cerrar</button>
    </div>
</form>
<script src=\"";
        // line 78
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/pcvdemo/js/slider/bootstrap-slider.js"), "html", null, true);
        echo "\"></script>
<link rel=\"stylesheet\" href=\"";
        // line 79
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/pcvdemo/css/slider.css"), "html", null, true);
        echo "\">
<script type=\"text/javascript\">
\t\$('#knowNew').slider({
\t\tformater: function(value) {
\t\t\treturn 'nivel: ' + value +'%';
\t\t}
\t});
\t\$('#knowNew').val(3);

\t";
        // line 88
        if ((isset($context["datosC"]) ? $context["datosC"] : $this->getContext($context, "datosC"))) {
            // line 89
            echo "\t";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["datosC"]) ? $context["datosC"] : $this->getContext($context, "datosC")));
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
            foreach ($context['_seq'] as $context["_key"] => $context["conocimiento"]) {
                // line 90
                echo "\t\t\$('#know";
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo "').slider({
\t\t\tformater: function(value";
                // line 91
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo ") {
\t\t\t\treturn 'nivel: ' + value";
                // line 92
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo " +'%';
\t\t\t}
\t\t});

\t\t\$('#conocimientosClose";
                // line 96
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo "').click(function(){
\t\t\t\$('#panelConocimientos";
                // line 97
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['conocimiento'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 100
            echo "\t";
        }
        // line 101
        echo "</script>
";
    }

    public function getTemplateName()
    {
        return "PCVDemoBundle:Edit:conocimientos.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  267 => 101,  264 => 100,  247 => 97,  243 => 96,  236 => 92,  232 => 91,  227 => 90,  209 => 89,  207 => 88,  195 => 79,  191 => 78,  163 => 54,  160 => 53,  155 => 49,  148 => 44,  140 => 38,  113 => 31,  101 => 24,  97 => 23,  87 => 16,  81 => 13,  76 => 11,  72 => 10,  68 => 9,  61 => 6,  44 => 5,  41 => 4,  39 => 3,  34 => 2,  31 => 1,  27 => 53,  23 => 51,  21 => 1,);
    }
}
