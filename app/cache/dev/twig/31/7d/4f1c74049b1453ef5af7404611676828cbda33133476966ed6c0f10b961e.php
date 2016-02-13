<?php

/* PCVDemoBundle:Show:experiencia.html.twig */
class __TwigTemplate_317d4f1c74049b1453ef5af7404611676828cbda33133476966ed6c0f10b961e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->env->loadTemplate("PCVDemoBundle:Edit:experiencia.html.twig");
        // line 67
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."PCVDemoBundle:Edit:experiencia.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $_trait_1 = $this->env->loadTemplate("PCVDemoBundle:Edit:experiencia.html.twig");
        // line 85
        if (!$_trait_1->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."PCVDemoBundle:Edit:experiencia.html.twig".'" cannot be used as a trait.');
        }
        $_trait_1_blocks = $_trait_1->getBlocks();

        $this->traits = array_merge(
            $_trait_0_blocks,
            $_trait_1_blocks
        );

        $this->blocks = array_merge(
            $this->traits,
            array(
                'experience_private' => array($this, 'block_experience_private'),
                'experience_public' => array($this, 'block_experience_public'),
                'modal_experience' => array($this, 'block_modal_experience'),
                'edit_experience' => array($this, 'block_edit_experience'),
                'new_experience' => array($this, 'block_new_experience'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('experience_private', $context, $blocks);
        // line 56
        echo "
";
        // line 57
        $this->displayBlock('modal_experience', $context, $blocks);
    }

    // line 1
    public function block_experience_private($context, array $blocks = array())
    {
        // line 2
        echo "
\t";
        // line 3
        $this->displayBlock('experience_public', $context, $blocks);
        // line 41
        echo "
\t<div>
\t\t<h3 class=\"panel-title\">
\t    \t<div class=\"btn-group pull-right\">
\t\t\t  \t<button type=\"button\" class=\"btn btn-default btn-xs dropdown-toggle\" data-toggle=\"dropdown\">
\t\t\t    \t<i class=\"fa fa-pencil\"></i> <span class=\"caret\"></span>
\t\t\t  \t</button>
\t\t\t  \t<ul class=\"dropdown-menu\" role=\"menu\">
\t\t\t    \t<li><a href=\"#\" data-toggle=\"modal\" data-target=\"#newExperience\"><i class=\"fa fa-briefcase\"></i> nueva Experiencia</a></li>
\t\t\t    \t<li><a href=\"#\" data-toggle=\"modal\" data-target=\"#editExperience\"><i class=\"fa fa-pencil-square-o\"></i> editar Experiencias</a></li>
\t\t\t  \t</ul>
\t\t\t</div>
\t    </h3>
\t</div>\t  
";
    }

    // line 3
    public function block_experience_public($context, array $blocks = array())
    {
        // line 4
        echo "  
\t\t";
        // line 5
        if ((isset($context["datosE"]) ? $context["datosE"] : $this->getContext($context, "datosE"))) {
            // line 6
            echo "\t\t";
            $context["meses"] = array(0 => "Enero", 1 => "Febrero", 2 => "Marzo", 3 => "Abril", 4 => "Mayo", 5 => "Junio", 6 => "Julio", 7 => "Agosto", 8 => "Septiembre", 9 => "Octubre", 10 => "Noviembre", 11 => "Diciembre");
            // line 7
            echo "\t\t\t";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["datosE"]) ? $context["datosE"] : $this->getContext($context, "datosE")));
            foreach ($context['_seq'] as $context["_key"] => $context["exp"]) {
                // line 8
                echo "\t\t\t
\t\t\t\t";
                // line 9
                $context["fechaInicio"] = twig_split_filter($this->env, $this->getAttribute($context["exp"], "startDate", array()), ",");
                // line 10
                echo "\t\t\t\t";
                $context["fechaFin"] = twig_split_filter($this->env, $this->getAttribute($context["exp"], "endDate", array()), ",");
                // line 11
                echo "
\t\t\t \t<div class=\"row\">
\t\t\t \t\t<div class=\"col-md-12\">
\t\t\t\t\t\t
\t\t\t\t\t\t<h5 class=\"label label-yellow\">";
                // line 15
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["meses"]) ? $context["meses"] : $this->getContext($context, "meses")), (twig_first($this->env, (isset($context["fechaInicio"]) ? $context["fechaInicio"] : $this->getContext($context, "fechaInicio"))) - 1), array(), "array"), "html", null, true);
                echo ",";
                echo twig_escape_filter($this->env, twig_last($this->env, (isset($context["fechaInicio"]) ? $context["fechaInicio"] : $this->getContext($context, "fechaInicio"))), "html", null, true);
                echo "</h5>-
\t\t\t\t\t\t";
                // line 16
                if (($this->getAttribute($context["exp"], "endDate", array()) == 0)) {
                    // line 17
                    echo "\t\t\t\t\t\t<h5 class=\"label btn-blue-dark\">hoy</h5>
\t\t\t\t\t\t";
                } else {
                    // line 19
                    echo "\t\t\t\t\t\t<h5 class=\"label label-yellow\">";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["meses"]) ? $context["meses"] : $this->getContext($context, "meses")), (twig_first($this->env, (isset($context["fechaFin"]) ? $context["fechaFin"] : $this->getContext($context, "fechaFin"))) - 1), array(), "array"), "html", null, true);
                    echo ",";
                    echo twig_escape_filter($this->env, twig_last($this->env, (isset($context["fechaFin"]) ? $context["fechaFin"] : $this->getContext($context, "fechaFin"))), "html", null, true);
                    echo "</h5>
\t\t\t\t\t\t";
                }
                // line 21
                echo "
\t\t\t\t\t\t<br>
\t\t\t\t\t\t<h5 class=\"label label-info\">";
                // line 23
                echo twig_escape_filter($this->env, $this->getAttribute($context["exp"], "city", array()), "html", null, true);
                echo ", ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["exp"], "country", array()), "html", null, true);
                echo "</h5>

\t\t\t\t\t\t<h4 class=\"text-primary\"><strong>";
                // line 25
                echo twig_escape_filter($this->env, $this->getAttribute($context["exp"], "company", array()), "html", null, true);
                echo "</strong></h4>
\t\t\t\t\t\t<h4 class=\"text-muted\"><em><strong>";
                // line 26
                echo twig_escape_filter($this->env, $this->getAttribute($context["exp"], "rol", array()), "html", null, true);
                echo "</strong></em></h4>
\t\t\t\t\t\t<h5 class=\"text-muted\">";
                // line 27
                echo twig_escape_filter($this->env, $this->getAttribute($context["exp"], "description", array()), "html", null, true);
                echo "</h5>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t
\t\t\t\t<hr>
\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['exp'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 33
            echo "\t\t";
        } else {
            // line 34
            echo "\t\t\t<h5 class=\"text-center text-muted\">
\t\t\t\t<a href=\"#\" data-toggle=\"modal\" data-target=\"#newExperience\">
\t\t\t\t\t<em><i class=\"fa fa-plus-circle\"></i>&nbsp;agregar experiencias</em>
\t\t\t\t</a>
\t\t\t</h5>
\t\t";
        }
        // line 40
        echo "\t";
    }

    // line 57
    public function block_modal_experience($context, array $blocks = array())
    {
        // line 58
        echo "<!-- Modal -->
<div class=\"modal fade\" id=\"editExperience\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
  \t<div class=\"modal-dialog\">
\t    <div class=\"modal-content\">
\t      \t<div class=\"modal-header\">
\t        \t<button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
\t        \t<h4 class=\"modal-title\" id=\"myModalLabel\">Editar Experiencias Profesionales</h4>
\t      \t</div>
\t      \t<div class=\"modal-body\">
\t        \t";
        // line 68
        echo "\t        \t";
        $this->displayBlock('edit_experience', $context, $blocks);
        // line 71
        echo "\t      \t</div>
\t    </div>
  \t</div>
</div>

<!-- Modal -->
<div class=\"modal fade\" id=\"newExperience\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
  \t<div class=\"modal-dialog\">
    \t<div class=\"modal-content\">
      \t\t<div class=\"modal-header\">
        \t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
        \t\t<h4 class=\"modal-title\" id=\"myModalLabel\">Nueva Experiencia Profesional</h4>
      \t\t</div>
      \t\t<div class=\"modal-body\">
\t\t        ";
        // line 86
        echo "\t\t        ";
        $this->displayBlock('new_experience', $context, $blocks);
        // line 89
        echo "      \t\t</div>
    \t</div>
  \t</div>
</div>
";
    }

    // line 68
    public function block_edit_experience($context, array $blocks = array())
    {
        // line 69
        echo "\t        \t\t";
        $this->displayParentBlock("edit_experience", $context, $blocks);
        echo "
\t        \t";
    }

    // line 86
    public function block_new_experience($context, array $blocks = array())
    {
        // line 87
        echo "\t\t        ";
        $this->displayParentBlock("new_experience", $context, $blocks);
        echo "
\t\t        ";
    }

    public function getTemplateName()
    {
        return "PCVDemoBundle:Show:experiencia.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  234 => 87,  231 => 86,  224 => 69,  221 => 68,  213 => 89,  210 => 86,  194 => 71,  191 => 68,  180 => 58,  177 => 57,  173 => 40,  165 => 34,  162 => 33,  150 => 27,  146 => 26,  142 => 25,  135 => 23,  131 => 21,  123 => 19,  119 => 17,  117 => 16,  111 => 15,  105 => 11,  102 => 10,  100 => 9,  97 => 8,  92 => 7,  89 => 6,  87 => 5,  84 => 4,  81 => 3,  63 => 41,  61 => 3,  58 => 2,  55 => 1,  51 => 57,  48 => 56,  46 => 1,  21 => 85,  14 => 67,);
    }
}
