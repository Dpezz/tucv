<?php

/* PCVDemoBundle:Show:educacion.html.twig */
class __TwigTemplate_2b96aad28d7a69d6556a80b664d82a4ed14c71df7e594c377e7fad2a381434b6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->env->loadTemplate("PCVDemoBundle:Edit:educacion.html.twig");
        // line 68
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."PCVDemoBundle:Edit:educacion.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $_trait_1 = $this->env->loadTemplate("PCVDemoBundle:Edit:educacion.html.twig");
        // line 86
        if (!$_trait_1->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."PCVDemoBundle:Edit:educacion.html.twig".'" cannot be used as a trait.');
        }
        $_trait_1_blocks = $_trait_1->getBlocks();

        $this->traits = array_merge(
            $_trait_0_blocks,
            $_trait_1_blocks
        );

        $this->blocks = array_merge(
            $this->traits,
            array(
                'education_private' => array($this, 'block_education_private'),
                'education_public' => array($this, 'block_education_public'),
                'modal_education' => array($this, 'block_modal_education'),
                'edit_education' => array($this, 'block_edit_education'),
                'new_education' => array($this, 'block_new_education'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('education_private', $context, $blocks);
        // line 55
        echo "


";
        // line 58
        $this->displayBlock('modal_education', $context, $blocks);
    }

    // line 1
    public function block_education_private($context, array $blocks = array())
    {
        // line 2
        echo "
\t";
        // line 3
        $this->displayBlock('education_public', $context, $blocks);
        // line 40
        echo "
\t<div class=\"\">
\t\t<h3 class=\"panel-title\"> 
\t    \t<div class=\"btn-group pull-right\">
\t\t\t  \t<button type=\"button\" class=\"btn btn-default btn-xs dropdown-toggle\" data-toggle=\"dropdown\">
\t\t\t    \t<i class=\"fa fa-pencil\"></i> <span class=\"caret\"></span>
\t\t\t  \t</button>
\t\t\t  \t<ul class=\"dropdown-menu\" role=\"menu\">
\t\t\t    \t<li><a href=\"#\" data-toggle=\"modal\" data-target=\"#newEducation\"><i class=\"fa fa-book\"></i> nueva Educación</a></li>
\t\t\t    \t<li><a href=\"#\" data-toggle=\"modal\" data-target=\"#editEducation\"><i class=\"fa fa-pencil-square-o\"></i> editar Educación</a></li>
\t\t\t  \t</ul>
\t\t\t</div>
\t    </h3>
\t</div>
";
    }

    // line 3
    public function block_education_public($context, array $blocks = array())
    {
        // line 4
        echo "
\t\t";
        // line 5
        if ((isset($context["datosEd"]) ? $context["datosEd"] : $this->getContext($context, "datosEd"))) {
            // line 6
            echo "\t\t";
            $context["meses"] = array(0 => "Enero", 1 => "Febrero", 2 => "Marzo", 3 => "Abril", 4 => "Mayo", 5 => "Junio", 6 => "Julio", 7 => "Agosto", 8 => "Septiembre", 9 => "Octubre", 10 => "Noviembre", 11 => "Diciembre");
            // line 7
            echo "\t\t\t";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["datosEd"]) ? $context["datosEd"] : $this->getContext($context, "datosEd")));
            foreach ($context['_seq'] as $context["_key"] => $context["edu"]) {
                // line 8
                echo "\t\t\t
\t\t\t\t";
                // line 9
                $context["fecha"] = twig_split_filter($this->env, $this->getAttribute($context["edu"], "fecha", array()), "-");
                // line 10
                echo "\t\t\t \t<div class=\"row\">
\t\t\t\t \t<div class=\"col-md-12\">

\t\t\t\t\t\t";
                // line 14
                echo "\t\t\t\t\t\t
\t\t\t\t\t\t<h5 class=\"label label-yellow\">";
                // line 15
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["meses"]) ? $context["meses"] : $this->getContext($context, "meses")), (twig_first($this->env, twig_split_filter($this->env, twig_first($this->env, (isset($context["fecha"]) ? $context["fecha"] : $this->getContext($context, "fecha"))), ",")) - 1), array(), "array"), "html", null, true);
                echo ",&nbsp;";
                echo twig_escape_filter($this->env, twig_last($this->env, twig_split_filter($this->env, twig_first($this->env, (isset($context["fecha"]) ? $context["fecha"] : $this->getContext($context, "fecha"))), ",")), "html", null, true);
                echo "</h5>-
\t\t\t\t\t\t";
                // line 16
                if ( !twig_test_empty(twig_last($this->env, twig_split_filter($this->env, twig_last($this->env, (isset($context["fecha"]) ? $context["fecha"] : $this->getContext($context, "fecha"))), ",")))) {
                    // line 17
                    echo "\t\t\t\t\t\t\t<h5 class=\"label label-yellow\">";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["meses"]) ? $context["meses"] : $this->getContext($context, "meses")), (twig_first($this->env, twig_split_filter($this->env, twig_last($this->env, (isset($context["fecha"]) ? $context["fecha"] : $this->getContext($context, "fecha"))), ",")) - 1), array(), "array"), "html", null, true);
                    echo ",&nbsp;";
                    echo twig_escape_filter($this->env, twig_last($this->env, twig_split_filter($this->env, twig_last($this->env, (isset($context["fecha"]) ? $context["fecha"] : $this->getContext($context, "fecha"))), ",")), "html", null, true);
                    echo "</h5>
\t\t\t\t\t\t";
                } else {
                    // line 19
                    echo "\t\t\t\t\t\t\t<h5 class=\"label btn-blue-dark\">hoy</h5>
\t\t\t\t\t\t";
                }
                // line 21
                echo "\t\t\t\t\t\t<br>
\t\t\t\t\t\t<h5 class=\"label label-info\">";
                // line 22
                echo twig_escape_filter($this->env, $this->getAttribute($context["edu"], "city", array()), "html", null, true);
                echo ", ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["edu"], "country", array()), "html", null, true);
                echo "</h5>
\t\t\t\t\t
\t\t\t\t\t\t<h4 class=\"text-primary\"><strong>";
                // line 24
                echo twig_escape_filter($this->env, $this->getAttribute($context["edu"], "school", array()), "html", null, true);
                echo "</strong></h4>
\t\t\t\t\t\t<h4 class=\"text-muted\"><em><strong>";
                // line 25
                echo twig_escape_filter($this->env, $this->getAttribute($context["edu"], "course", array()), "html", null, true);
                echo "</strong></em></h4>
\t\t\t\t\t\t<h6 class=\"text-muted\">";
                // line 26
                echo twig_escape_filter($this->env, $this->getAttribute($context["edu"], "description", array()), "html", null, true);
                echo "</h6>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<hr>
\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['edu'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 31
            echo "\t\t";
        } else {
            // line 32
            echo "\t\t\t<h5 class=\"text-center text-muted\">
\t\t\t\t<a href=\"#\" data-toggle=\"modal\" data-target=\"#newEducation\">
\t\t\t\t\t<em><i class=\"fa fa-plus-circle\"></i>&nbsp;agregar educaciones</em>
\t\t\t\t</a>
\t\t\t</h5>
\t\t";
        }
        // line 38
        echo "
\t";
    }

    // line 58
    public function block_modal_education($context, array $blocks = array())
    {
        // line 59
        echo "<!-- Modal -->
<div class=\"modal fade\" id=\"editEducation\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
  <div class=\"modal-dialog\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
        <h4 class=\"modal-title\" id=\"myModalLabel\">Editar Educación</h4>
      </div>
      <div class=\"modal-body\">
        ";
        // line 69
        echo "        ";
        $this->displayBlock('edit_education', $context, $blocks);
        // line 72
        echo "      </div>
    </div>
  </div>
</div>

<!-- Modal -->
<div class=\"modal fade\" id=\"newEducation\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
  <div class=\"modal-dialog\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
        <h4 class=\"modal-title\" id=\"myModalLabel\">Nueva Educación</h4>
      </div>
      <div class=\"modal-body\">
        ";
        // line 87
        echo "        ";
        $this->displayBlock('new_education', $context, $blocks);
        // line 90
        echo "      </div>
    </div>
  </div>
</div>
";
    }

    // line 69
    public function block_edit_education($context, array $blocks = array())
    {
        // line 70
        echo "        ";
        $this->displayParentBlock("edit_education", $context, $blocks);
        echo "
        ";
    }

    // line 87
    public function block_new_education($context, array $blocks = array())
    {
        // line 88
        echo "        ";
        $this->displayParentBlock("new_education", $context, $blocks);
        echo "
        ";
    }

    public function getTemplateName()
    {
        return "PCVDemoBundle:Show:educacion.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  234 => 88,  231 => 87,  224 => 70,  221 => 69,  213 => 90,  210 => 87,  194 => 72,  191 => 69,  180 => 59,  177 => 58,  172 => 38,  164 => 32,  161 => 31,  150 => 26,  146 => 25,  142 => 24,  135 => 22,  132 => 21,  128 => 19,  120 => 17,  118 => 16,  112 => 15,  109 => 14,  104 => 10,  102 => 9,  99 => 8,  94 => 7,  91 => 6,  89 => 5,  86 => 4,  83 => 3,  65 => 40,  63 => 3,  60 => 2,  57 => 1,  53 => 58,  48 => 55,  46 => 1,  21 => 86,  14 => 68,);
    }
}
