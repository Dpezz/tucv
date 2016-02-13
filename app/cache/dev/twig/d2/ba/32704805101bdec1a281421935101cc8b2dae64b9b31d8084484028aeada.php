<?php

/* PCVDemoBundle:Show:premios.html.twig */
class __TwigTemplate_d2ba32704805101bdec1a281421935101cc8b2dae64b9b31d8084484028aeada extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->env->loadTemplate("PCVDemoBundle:Edit:premios.html.twig");
        // line 59
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."PCVDemoBundle:Edit:premios.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $_trait_1 = $this->env->loadTemplate("PCVDemoBundle:Edit:premios.html.twig");
        // line 78
        if (!$_trait_1->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."PCVDemoBundle:Edit:premios.html.twig".'" cannot be used as a trait.');
        }
        $_trait_1_blocks = $_trait_1->getBlocks();

        $this->traits = array_merge(
            $_trait_0_blocks,
            $_trait_1_blocks
        );

        $this->blocks = array_merge(
            $this->traits,
            array(
                'premios_private' => array($this, 'block_premios_private'),
                'premios_public' => array($this, 'block_premios_public'),
                'modal_premios' => array($this, 'block_modal_premios'),
                'edit_premios' => array($this, 'block_edit_premios'),
                'new_premios' => array($this, 'block_new_premios'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('premios_private', $context, $blocks);
        // line 48
        echo "
";
        // line 49
        $this->displayBlock('modal_premios', $context, $blocks);
    }

    // line 1
    public function block_premios_private($context, array $blocks = array())
    {
        // line 2
        echo "
\t";
        // line 3
        $this->displayBlock('premios_public', $context, $blocks);
        // line 33
        echo "\t\t
\t<div class=\"\">
\t\t<h3 class=\"panel-title\">
\t\t\t<div class=\"btn-group pull-right\">
\t\t\t  \t<button type=\"button\" class=\"btn btn-default btn-xs dropdown-toggle\" data-toggle=\"dropdown\">
\t\t\t    \t<i class=\"fa fa-pencil\"></i> <span class=\"caret\"></span>
\t\t\t  \t</button>
\t\t\t  \t<ul class=\"dropdown-menu\" role=\"menu\">
\t\t\t    \t<li><a href=\"#\" data-toggle=\"modal\" data-target=\"#newAward\"><i class=\"fa fa-trophy\"></i> nuevo Premio</a></li>
\t\t\t    \t<li><a href=\"#\" data-toggle=\"modal\" data-target=\"#editAward\"><i class=\"fa fa-edit\"></i> editar Premios</a></li>
\t\t\t  \t</ul>
\t\t\t</div>
\t\t</h3>
\t</div>
";
    }

    // line 3
    public function block_premios_public($context, array $blocks = array())
    {
        // line 4
        echo "\t
\t\t";
        // line 5
        if ((isset($context["datosPr"]) ? $context["datosPr"] : $this->getContext($context, "datosPr"))) {
            // line 6
            echo "\t\t\t";
            $context["meses"] = array(0 => "Ene", 1 => "Feb", 2 => "Mar", 3 => "Abr", 4 => "May", 5 => "Jun", 6 => "Jul", 7 => "Ago", 8 => "Sep", 9 => "Oct", 10 => "Nov", 11 => "Dic");
            // line 7
            echo "\t\t\t";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["datosPr"]) ? $context["datosPr"] : $this->getContext($context, "datosPr")));
            foreach ($context['_seq'] as $context["_key"] => $context["premio"]) {
                // line 8
                echo "\t\t
\t\t\t\t";
                // line 9
                $context["fecha"] = twig_split_filter($this->env, $this->getAttribute($context["premio"], "date", array()), ",");
                // line 10
                echo "\t\t\t \t<div class=\"row\">
\t\t\t\t \t<div class=\"col-md-12\">
\t\t\t\t\t\t<h5 class=\"media-heading grey-color\"><em><strong>";
                // line 12
                echo twig_escape_filter($this->env, $this->getAttribute($context["premio"], "emisor", array()), "html", null, true);
                echo "</strong></em></h5>
\t\t\t\t\t\t<h5 class=\"label label-yellow\">";
                // line 13
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["meses"]) ? $context["meses"] : $this->getContext($context, "meses")), (twig_first($this->env, (isset($context["fecha"]) ? $context["fecha"] : $this->getContext($context, "fecha"))) - 1), array(), "array"), "html", null, true);
                echo ",&nbsp;
\t\t\t\t\t\t";
                // line 14
                echo twig_escape_filter($this->env, twig_last($this->env, (isset($context["fecha"]) ? $context["fecha"] : $this->getContext($context, "fecha"))), "html", null, true);
                echo "</h5>
\t\t\t\t\t\t<br>
\t\t\t\t\t\t<h5 class=\"label label-info\">";
                // line 16
                echo twig_escape_filter($this->env, $this->getAttribute($context["premio"], "city", array()), "html", null, true);
                echo ", ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["premio"], "country", array()), "html", null, true);
                echo "</h5>
\t\t\t\t\t
\t\t\t\t\t\t<h4 class=\"text-primary\"><strong>";
                // line 18
                echo twig_escape_filter($this->env, $this->getAttribute($context["premio"], "title", array()), "html", null, true);
                echo "</strong></h4>
\t\t\t\t\t\t<h4 class=\"text-muted\"><em><strong>";
                // line 19
                echo twig_escape_filter($this->env, $this->getAttribute($context["premio"], "rol", array()), "html", null, true);
                echo "</strong></em></h4>
\t\t\t\t\t\t<h5 class=\"text-muted\">";
                // line 20
                echo twig_escape_filter($this->env, $this->getAttribute($context["premio"], "description", array()), "html", null, true);
                echo "</h5>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<hr>
\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['premio'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 25
            echo "\t\t";
        } else {
            // line 26
            echo "\t\t\t<h5 class=\"text-center text-muted\">
\t\t\t\t<a href=\"#\" data-toggle=\"modal\" data-target=\"#newAward\">
\t\t\t\t\t<em><i class=\"fa fa-plus-circle\"></i>&nbsp;agregar reconocimientos y premios</em>
\t\t\t\t</a>
\t\t\t</h5>
\t\t";
        }
        // line 32
        echo "\t";
    }

    // line 49
    public function block_modal_premios($context, array $blocks = array())
    {
        // line 50
        echo "<!-- Modal -->
<div class=\"modal fade\" id=\"editAward\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
  <div class=\"modal-dialog\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
        <h4 class=\"modal-title\" id=\"myModalLabel\">Editar Reconocimientos y Premios</h4>
      </div>
      <div class=\"modal-body\">
        ";
        // line 60
        echo "        ";
        $this->displayBlock('edit_premios', $context, $blocks);
        // line 63
        echo "      </div>
    </div>
  </div>
</div>


<!--New  Modal -->
<div class=\"modal fade\" id=\"newAward\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
  <div class=\"modal-dialog\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
        <h4 class=\"modal-title\" id=\"myModalLabel\">Nuevo Reconocimiento y Premio</h4>
      </div>
      <div class=\"modal-body\">
        ";
        // line 79
        echo "        ";
        $this->displayBlock('new_premios', $context, $blocks);
        // line 82
        echo "      </div>
    </div>
  </div>
</div>

";
    }

    // line 60
    public function block_edit_premios($context, array $blocks = array())
    {
        // line 61
        echo "        ";
        $this->displayParentBlock("edit_premios", $context, $blocks);
        echo "
        ";
    }

    // line 79
    public function block_new_premios($context, array $blocks = array())
    {
        // line 80
        echo "        ";
        $this->displayParentBlock("new_premios", $context, $blocks);
        echo "
        ";
    }

    public function getTemplateName()
    {
        return "PCVDemoBundle:Show:premios.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  219 => 80,  216 => 79,  209 => 61,  206 => 60,  197 => 82,  194 => 79,  177 => 63,  174 => 60,  163 => 50,  160 => 49,  156 => 32,  148 => 26,  145 => 25,  134 => 20,  130 => 19,  126 => 18,  119 => 16,  114 => 14,  110 => 13,  106 => 12,  102 => 10,  100 => 9,  97 => 8,  92 => 7,  89 => 6,  87 => 5,  84 => 4,  81 => 3,  63 => 33,  61 => 3,  58 => 2,  55 => 1,  51 => 49,  48 => 48,  46 => 1,  21 => 78,  14 => 59,);
    }
}
