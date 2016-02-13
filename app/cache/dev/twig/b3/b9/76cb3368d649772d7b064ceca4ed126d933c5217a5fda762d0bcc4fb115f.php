<?php

/* PCVDemoBundle:Show:certificaciones.html.twig */
class __TwigTemplate_b3b976cb3368d649772d7b064ceca4ed126d933c5217a5fda762d0bcc4fb115f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->env->loadTemplate("PCVDemoBundle:Edit:certificacion.html.twig");
        // line 64
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."PCVDemoBundle:Edit:certificacion.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $_trait_1 = $this->env->loadTemplate("PCVDemoBundle:Edit:certificacion.html.twig");
        // line 83
        if (!$_trait_1->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."PCVDemoBundle:Edit:certificacion.html.twig".'" cannot be used as a trait.');
        }
        $_trait_1_blocks = $_trait_1->getBlocks();

        $this->traits = array_merge(
            $_trait_0_blocks,
            $_trait_1_blocks
        );

        $this->blocks = array_merge(
            $this->traits,
            array(
                'certificaciones_private' => array($this, 'block_certificaciones_private'),
                'certificaciones_public' => array($this, 'block_certificaciones_public'),
                'modal_certificaciones' => array($this, 'block_modal_certificaciones'),
                'edit_certificaciones' => array($this, 'block_edit_certificaciones'),
                'new_certificacion' => array($this, 'block_new_certificacion'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('certificaciones_private', $context, $blocks);
        // line 53
        echo "
";
        // line 54
        $this->displayBlock('modal_certificaciones', $context, $blocks);
    }

    // line 1
    public function block_certificaciones_private($context, array $blocks = array())
    {
        // line 2
        echo "\t
\t";
        // line 3
        $this->displayBlock('certificaciones_public', $context, $blocks);
        // line 38
        echo "
\t<div class=\"\">
\t\t<h3 class=\"panel-title\">
\t\t\t<div class=\"btn-group pull-right\">
\t\t\t  \t<button type=\"button\" class=\"btn btn-default btn-xs dropdown-toggle\" data-toggle=\"dropdown\">
\t\t\t    \t<i class=\"fa fa-pencil\"></i> <span class=\"caret\"></span>
\t\t\t  \t</button>
\t\t\t  \t<ul class=\"dropdown-menu\" role=\"menu\">
\t\t\t    \t<li><a href=\"#\" data-toggle=\"modal\" data-target=\"#newCerti\"><i class=\"fa fa-file-text\"></i> nueva Certificación</a></li>
\t\t\t    \t<li><a href=\"#\" data-toggle=\"modal\" data-target=\"#editCerti\"><i class=\"fa fa-edit\"></i> editar Certificaciónes</a></li>
\t\t\t  \t</ul>
\t\t\t</div>
\t\t</h3>
\t</div>
";
    }

    // line 3
    public function block_certificaciones_public($context, array $blocks = array())
    {
        // line 4
        echo "\t
\t\t";
        // line 5
        if ((isset($context["datosCe"]) ? $context["datosCe"] : $this->getContext($context, "datosCe"))) {
            // line 6
            echo "\t\t";
            $context["meses"] = array(0 => "Ene", 1 => "Feb", 2 => "Mar", 3 => "Abr", 4 => "May", 5 => "Jun", 6 => "Jul", 7 => "Ago", 8 => "Sep", 9 => "Oct", 10 => "Nov", 11 => "Dic");
            // line 7
            echo "\t\t\t";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["datosCe"]) ? $context["datosCe"] : $this->getContext($context, "datosCe")));
            foreach ($context['_seq'] as $context["_key"] => $context["certificacion"]) {
                // line 8
                echo "\t\t
\t\t\t\t";
                // line 9
                $context["fechaStart"] = twig_split_filter($this->env, $this->getAttribute($context["certificacion"], "startDate", array()), ",");
                // line 10
                echo "\t\t\t\t";
                $context["fechaEnd"] = twig_split_filter($this->env, $this->getAttribute($context["certificacion"], "endDate", array()), ",");
                // line 11
                echo "\t\t\t \t<div class=\"row\">
\t\t\t\t \t<div class=\"col-md-12\">

\t\t\t\t\t\t<h5 class=\"label label-yellow\">";
                // line 14
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["meses"]) ? $context["meses"] : $this->getContext($context, "meses")), (twig_first($this->env, (isset($context["fechaStart"]) ? $context["fechaStart"] : $this->getContext($context, "fechaStart"))) - 1), array(), "array"), "html", null, true);
                echo ",&nbsp;";
                echo twig_escape_filter($this->env, twig_last($this->env, (isset($context["fechaStart"]) ? $context["fechaStart"] : $this->getContext($context, "fechaStart"))), "html", null, true);
                echo "</h5>-
\t\t\t\t\t\t";
                // line 15
                if ( !twig_test_empty(twig_first($this->env, (isset($context["fechaEnd"]) ? $context["fechaEnd"] : $this->getContext($context, "fechaEnd"))))) {
                    // line 16
                    echo "\t\t\t\t\t\t\t<h5 class=\"label label-yellow\">";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["meses"]) ? $context["meses"] : $this->getContext($context, "meses")), (twig_first($this->env, (isset($context["fechaEnd"]) ? $context["fechaEnd"] : $this->getContext($context, "fechaEnd"))) - 1), array(), "array"), "html", null, true);
                    echo ",&nbsp;";
                    echo twig_escape_filter($this->env, twig_last($this->env, (isset($context["fechaEnd"]) ? $context["fechaEnd"] : $this->getContext($context, "fechaEnd"))), "html", null, true);
                    echo "</h5>
\t\t\t\t\t\t";
                } else {
                    // line 18
                    echo "\t\t\t\t\t\t\t<h5 class=\"label btn-blue-dark\">no vence</h5>
\t\t\t\t\t\t";
                }
                // line 20
                echo "
\t\t\t\t\t\t<br>
\t\t\t\t\t\t<h5 class=\"label label-info\">";
                // line 22
                echo twig_escape_filter($this->env, $this->getAttribute($context["certificacion"], "city", array()), "html", null, true);
                echo ", ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["certificacion"], "country", array()), "html", null, true);
                echo "</span>
\t\t\t\t\t
\t\t\t\t\t\t<h4 class=\"text-primary\"><strong>";
                // line 24
                echo twig_escape_filter($this->env, $this->getAttribute($context["certificacion"], "title", array()), "html", null, true);
                echo "</strong></h4>
\t\t\t\t\t\t<h4 class=\"text-muted\"><em><strong>";
                // line 25
                echo twig_escape_filter($this->env, $this->getAttribute($context["certificacion"], "emisor", array()), "html", null, true);
                echo "</strong></em></h4>
\t\t\t\t\t\t<h5 class=\"text-muted\">";
                // line 26
                echo twig_escape_filter($this->env, $this->getAttribute($context["certificacion"], "description", array()), "html", null, true);
                echo "</h5>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['certificacion'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 30
            echo "\t\t";
        } else {
            // line 31
            echo "\t\t\t<h5 class=\"text-center text-muted\">
\t\t\t\t<a href=\"#\" data-toggle=\"modal\" data-target=\"#newCerti\">
\t\t\t\t\t<em><i class=\"fa fa-plus-circle\"></i>&nbsp;agregar certificados</em>
\t\t\t\t</a>
\t\t\t</h5>
\t\t";
        }
        // line 37
        echo "\t";
    }

    // line 54
    public function block_modal_certificaciones($context, array $blocks = array())
    {
        // line 55
        echo "<!-- Modal -->
<div class=\"modal fade\" id=\"editCerti\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
  <div class=\"modal-dialog\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
        <h4 class=\"modal-title\" id=\"myModalLabel\">Editar Certificaciones</h4>
      </div>
      <div class=\"modal-body\">
        ";
        // line 65
        echo "        ";
        $this->displayBlock('edit_certificaciones', $context, $blocks);
        // line 68
        echo "      </div>
    </div>
  </div>
</div>


<!-- New Modal -->
<div class=\"modal fade\" id=\"newCerti\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
  <div class=\"modal-dialog\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
        <h4 class=\"modal-title\" id=\"myModalLabel\">Nueva Certificación</h4>
      </div>
      <div class=\"modal-body\">
        ";
        // line 84
        echo "        ";
        $this->displayBlock('new_certificacion', $context, $blocks);
        // line 87
        echo "      </div>
    </div>
  </div>
</div>
";
    }

    // line 65
    public function block_edit_certificaciones($context, array $blocks = array())
    {
        // line 66
        echo "        ";
        $this->displayParentBlock("edit_certificaciones", $context, $blocks);
        echo "
        ";
    }

    // line 84
    public function block_new_certificacion($context, array $blocks = array())
    {
        // line 85
        echo "        ";
        $this->displayParentBlock("new_certificacion", $context, $blocks);
        echo "
        ";
    }

    public function getTemplateName()
    {
        return "PCVDemoBundle:Show:certificaciones.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  232 => 85,  229 => 84,  222 => 66,  219 => 65,  211 => 87,  208 => 84,  191 => 68,  188 => 65,  177 => 55,  174 => 54,  170 => 37,  162 => 31,  159 => 30,  149 => 26,  145 => 25,  141 => 24,  134 => 22,  130 => 20,  126 => 18,  118 => 16,  116 => 15,  110 => 14,  105 => 11,  102 => 10,  100 => 9,  97 => 8,  92 => 7,  89 => 6,  87 => 5,  84 => 4,  81 => 3,  63 => 38,  61 => 3,  58 => 2,  55 => 1,  51 => 54,  48 => 53,  46 => 1,  21 => 83,  14 => 64,);
    }
}
