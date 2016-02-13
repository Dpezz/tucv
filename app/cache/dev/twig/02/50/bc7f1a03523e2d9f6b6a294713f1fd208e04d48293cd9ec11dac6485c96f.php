<?php

/* PCVDemoBundle:Show:datos.html.twig */
class __TwigTemplate_0250bc7f1a03523e2d9f6b6a294713f1fd208e04d48293cd9ec11dac6485c96f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->env->loadTemplate("PCVDemoBundle:Edit:datos.html.twig");
        // line 151
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."PCVDemoBundle:Edit:datos.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'data_private' => array($this, 'block_data_private'),
                'data_public' => array($this, 'block_data_public'),
                'modal_data' => array($this, 'block_modal_data'),
                'edit_data' => array($this, 'block_edit_data'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('data_private', $context, $blocks);
        // line 139
        echo "

";
        // line 141
        $this->displayBlock('modal_data', $context, $blocks);
    }

    // line 1
    public function block_data_private($context, array $blocks = array())
    {
        // line 2
        echo "
\t";
        // line 3
        $this->displayBlock('data_public', $context, $blocks);
        // line 111
        echo "
\t";
        // line 112
        if ((isset($context["datosD"]) ? $context["datosD"] : $this->getContext($context, "datosD"))) {
            // line 113
            echo "\t\t";
            if (((((((( !$this->getAttribute((isset($context["datosD"]) ? $context["datosD"] : $this->getContext($context, "datosD")), "birthday", array()) &&  !$this->getAttribute((isset($context["datosD"]) ? $context["datosD"] : $this->getContext($context, "datosD")), "nationality", array())) &&  !$this->getAttribute((isset($context["datosD"]) ? $context["datosD"] : $this->getContext($context, "datosD")), "city", array())) &&  !$this->getAttribute((isset($context["datosD"]) ? $context["datosD"] : $this->getContext($context, "datosD")), "address", array())) &&  !$this->getAttribute((isset($context["datosD"]) ? $context["datosD"] : $this->getContext($context, "datosD")), "sex", array())) &&  !$this->getAttribute((isset($context["datosD"]) ? $context["datosD"] : $this->getContext($context, "datosD")), "status", array())) &&  !$this->getAttribute((isset($context["datosD"]) ? $context["datosD"] : $this->getContext($context, "datosD")), "disponible", array())) &&  !$this->getAttribute((isset($context["datosD"]) ? $context["datosD"] : $this->getContext($context, "datosD")), "licencia", array()))) {
                // line 114
                echo "\t\t\t<h5 class=\"text-center text-muted\">
\t\t\t\t<a href=\"#\" data-toggle=\"modal\" data-target=\"#editData\">
\t\t\t\t\t<em><i class=\"fa fa-plus-circle\"></i>&nbsp;agregar datos personales</em>
\t\t\t\t</a>
\t\t\t</h5>
\t\t";
            }
            // line 120
            echo "\t";
        } else {
            // line 121
            echo "\t\t<h5 class=\"text-center text-muted\">
\t\t\t<a href=\"#\" data-toggle=\"modal\" data-target=\"#editData\">
\t\t\t\t<em><i class=\"fa fa-plus-circle\"></i>&nbsp;agregar datos personales</em>
\t\t\t</a>
\t\t</h5>
\t";
        }
        // line 127
        echo "\t\t
\t
\t<div class=\"btn-group pull-right\">
\t  \t<button type=\"button\" class=\"btn btn-default btn-xs dropdown-toggle\" data-toggle=\"dropdown\">
\t    \t<i class=\"fa fa-pencil\"></i> <span class=\"caret\"></span>
\t  \t</button>
\t  \t<ul class=\"dropdown-menu\" role=\"menu\">
\t    \t<li><a href=\"#\" data-toggle=\"modal\" data-target=\"#editData\"><i class=\"fa fa-list-alt\"></i> editar Datos</a></li>
\t  \t</ul>
\t</div>

";
    }

    // line 3
    public function block_data_public($context, array $blocks = array())
    {
        // line 4
        echo "\t<div class=\"row\">
\t\t<div class=\"col-md-10 col-md-offset-2\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-5\">
\t\t\t\t\t";
        // line 8
        if (((isset($context["datosD"]) ? $context["datosD"] : $this->getContext($context, "datosD")) &&  !(null === $this->getAttribute((isset($context["datosD"]) ? $context["datosD"] : $this->getContext($context, "datosD")), "birthday", array())))) {
            // line 9
            echo "\t\t\t\t\t\t";
            $context["meses"] = array(0 => "Enero", 1 => "Febrero", 2 => "Marzo", 3 => "Abril", 4 => "Mayo", 5 => "Junio", 6 => "Julio", 7 => "Agosto", 8 => "Septiembre", 9 => "Octubre", 10 => "Noviembre", 11 => "Diciembre");
            // line 10
            echo "\t\t\t\t\t\t<h4 class=\"text-muted\">
\t\t\t\t\t\t\t<span data-toggle=\"tooltip\" data-placement=\"top\" title=\"Fecha de Nacimiento\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-birthday-cake fa-lg muted\"></i>
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t";
            // line 14
            echo twig_escape_filter($this->env, ((((twig_date_format_filter($this->env, $this->getAttribute((isset($context["datosD"]) ? $context["datosD"] : $this->getContext($context, "datosD")), "birthday", array()), "d") . "-") . $this->getAttribute((isset($context["meses"]) ? $context["meses"] : $this->getContext($context, "meses")), (twig_date_format_filter($this->env, $this->getAttribute((isset($context["datosD"]) ? $context["datosD"] : $this->getContext($context, "datosD")), "birthday", array()), "m") - 1), array(), "array")) . "-") . twig_date_format_filter($this->env, $this->getAttribute((isset($context["datosD"]) ? $context["datosD"] : $this->getContext($context, "datosD")), "birthday", array()), "Y")), "html", null, true);
            echo "
\t\t\t\t\t\t</h4>
\t\t\t\t\t";
        }
        // line 17
        echo "\t\t\t\t</div>

\t\t\t\t<div class=\"col-md-5\">
\t\t\t\t\t";
        // line 20
        if (((isset($context["datosD"]) ? $context["datosD"] : $this->getContext($context, "datosD")) && $this->getAttribute((isset($context["datosD"]) ? $context["datosD"] : $this->getContext($context, "datosD")), "nationality", array()))) {
            // line 21
            echo "\t\t\t\t\t<h4 class=\"text-muted\">
\t\t\t\t\t\t<span data-toggle=\"tooltip\" data-placement=\"top\" title=\"Nacionalidad\">
\t\t\t\t\t\t\t<i class=\"fa fa-globe fa-lg muted\"></i>
\t\t\t\t\t\t</span>
\t\t\t\t\t\t";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["datosD"]) ? $context["datosD"] : $this->getContext($context, "datosD")), "nationality", array()), "html", null, true);
            echo "
\t\t\t\t\t</h4>
\t\t\t\t\t";
        }
        // line 28
        echo "\t\t\t\t</div>
\t\t\t</div>


\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-5\">
\t\t\t\t\t";
        // line 34
        if (((isset($context["datosD"]) ? $context["datosD"] : $this->getContext($context, "datosD")) && $this->getAttribute((isset($context["datosD"]) ? $context["datosD"] : $this->getContext($context, "datosD")), "city", array()))) {
            // line 35
            echo "\t\t\t\t\t<h4 class=\"text-muted\">
\t\t\t\t\t\t<span data-toggle=\"tooltip\" data-placement=\"top\" title=\"Comuna\">
\t\t\t\t\t\t\t<i class=\"fa fa-map-marker fa-lg muted\"></i>
\t\t\t\t\t\t</span>
\t\t\t\t\t\t";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["datosD"]) ? $context["datosD"] : $this->getContext($context, "datosD")), "city", array()), "html", null, true);
            echo "
\t\t\t\t\t</h4>
\t\t\t\t\t";
        }
        // line 42
        echo "\t\t\t\t</div>
\t\t\t\t";
        // line 55
        echo "\t\t\t</div>


\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-5\">
\t\t\t\t\t";
        // line 60
        if (((isset($context["datosD"]) ? $context["datosD"] : $this->getContext($context, "datosD")) && $this->getAttribute((isset($context["datosD"]) ? $context["datosD"] : $this->getContext($context, "datosD")), "sex", array()))) {
            // line 61
            echo "\t\t\t\t\t<h4 class=\"text-muted\">
\t\t\t\t\t\t<span data-toggle=\"tooltip\" data-placement=\"top\" title=\"Sexo\">
\t\t\t\t\t\t\t<i class=\"fa fa-male fa-lg muted\"></i>
\t\t\t\t\t\t</span>
\t\t\t\t\t\t";
            // line 65
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["datosD"]) ? $context["datosD"] : $this->getContext($context, "datosD")), "sex", array()), "html", null, true);
            echo "
\t\t\t\t\t</h4>\t\t
\t\t\t\t\t";
        }
        // line 68
        echo "\t\t\t\t</div>

\t\t\t\t<div class=\"col-md-5\">
\t\t\t\t\t";
        // line 71
        if (((isset($context["datosD"]) ? $context["datosD"] : $this->getContext($context, "datosD")) && $this->getAttribute((isset($context["datosD"]) ? $context["datosD"] : $this->getContext($context, "datosD")), "status", array()))) {
            // line 72
            echo "\t\t\t\t\t<h4 class=\"text-muted\">
\t\t\t\t\t\t<span data-toggle=\"tooltip\" data-placement=\"top\" title=\"Estado Civil\">
\t\t\t\t\t\t\t<i class=\"fa fa-heart fa-lg muted\"></i>
\t\t\t\t\t\t</span>
\t\t\t\t\t\t";
            // line 76
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["datosD"]) ? $context["datosD"] : $this->getContext($context, "datosD")), "status", array()), "html", null, true);
            echo "
\t\t\t\t\t</h4>\t\t
\t\t\t\t\t";
        }
        // line 79
        echo "\t\t\t\t</div>
\t\t\t</div>


\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-5\">
\t\t\t\t\t";
        // line 85
        if (((isset($context["datosD"]) ? $context["datosD"] : $this->getContext($context, "datosD")) && $this->getAttribute((isset($context["datosD"]) ? $context["datosD"] : $this->getContext($context, "datosD")), "disponible", array()))) {
            // line 86
            echo "\t\t\t\t\t<h4 class=\"text-muted\">\t\t\t
\t\t\t\t\t\t<span data-toggle=\"tooltip\" data-placement=\"top\" title=\"Disponibilidad Inmediata\">
\t\t\t\t\t\t\t<i class=\"fa fa-refresh fa-lg muted \"></i>
\t\t\t\t\t\t</span>
\t\t\t\t\t\tDisponibilidad Inmediata
\t\t\t\t\t</h4>
\t\t\t\t\t";
        }
        // line 93
        echo "\t\t\t\t</div>

\t\t\t\t<div class=\"col-md-7\">
\t\t\t\t\t";
        // line 96
        if (((isset($context["datosD"]) ? $context["datosD"] : $this->getContext($context, "datosD")) && $this->getAttribute((isset($context["datosD"]) ? $context["datosD"] : $this->getContext($context, "datosD")), "licencia", array()))) {
            // line 97
            echo "\t\t\t\t\t\t<h4 class=\"text-muted\">\t\t
\t\t\t\t\t\t\t<span data-toggle=\"tooltip\" data-placement=\"top\" title=\"Licencia Conducir\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-car fa-lg muted\"></i>
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t";
            // line 101
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["datosD"]) ? $context["datosD"] : $this->getContext($context, "datosD")), "licencia", array()), "html", null, true);
            echo "
\t\t\t\t\t\t</h4>\t\t\t
\t\t\t\t\t";
        }
        // line 104
        echo "\t\t\t\t</div>
\t\t\t</div>

\t\t</div>
\t</div>

\t";
    }

    // line 141
    public function block_modal_data($context, array $blocks = array())
    {
        // line 142
        echo "<!-- Modal -->
<div class=\"modal fade\" id=\"editData\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
  \t<div class=\"modal-dialog\">
\t    <div class=\"modal-content\">
\t      \t<div class=\"modal-header\">
\t        \t<button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
\t        \t<h4 class=\"modal-title\" id=\"myModalLabel\">Editar Datos Personales</h4>
\t      \t</div>
\t      \t<div class=\"modal-body\">
\t        \t";
        // line 152
        echo "\t        \t";
        $this->displayBlock('edit_data', $context, $blocks);
        // line 155
        echo "\t      \t</div>
\t    </div>
  \t</div>
</div>
";
    }

    // line 152
    public function block_edit_data($context, array $blocks = array())
    {
        // line 153
        echo "\t        \t\t";
        $this->displayParentBlock("edit_data", $context, $blocks);
        echo "
\t        \t";
    }

    public function getTemplateName()
    {
        return "PCVDemoBundle:Show:datos.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  281 => 153,  278 => 152,  270 => 155,  267 => 152,  256 => 142,  253 => 141,  243 => 104,  237 => 101,  231 => 97,  229 => 96,  224 => 93,  215 => 86,  213 => 85,  205 => 79,  199 => 76,  193 => 72,  191 => 71,  186 => 68,  180 => 65,  174 => 61,  172 => 60,  165 => 55,  162 => 42,  156 => 39,  150 => 35,  148 => 34,  140 => 28,  134 => 25,  128 => 21,  126 => 20,  121 => 17,  115 => 14,  109 => 10,  106 => 9,  104 => 8,  98 => 4,  95 => 3,  80 => 127,  72 => 121,  69 => 120,  61 => 114,  58 => 113,  56 => 112,  53 => 111,  51 => 3,  48 => 2,  45 => 1,  41 => 141,  37 => 139,  35 => 1,  14 => 151,);
    }
}
