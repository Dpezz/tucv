<?php

/* PCVDemoBundle:Show:habilidades.html.twig */
class __TwigTemplate_095429f1fa437378bfdbdbe7d280e977f1c71450db24fdd18fee5cdec9827b98 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->env->loadTemplate("PCVDemoBundle:Edit:habilidades.html.twig");
        // line 49
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."PCVDemoBundle:Edit:habilidades.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'ability_private' => array($this, 'block_ability_private'),
                'ability_public' => array($this, 'block_ability_public'),
                'modal_ability' => array($this, 'block_modal_ability'),
                'edit_ability' => array($this, 'block_edit_ability'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('ability_private', $context, $blocks);
        // line 37
        echo "

";
        // line 39
        $this->displayBlock('modal_ability', $context, $blocks);
    }

    // line 1
    public function block_ability_private($context, array $blocks = array())
    {
        // line 2
        echo "
\t\t";
        // line 3
        $this->displayBlock('ability_public', $context, $blocks);
        // line 26
        echo "

\t\t<div class=\"btn-group pull-right\">
\t\t  \t<button type=\"button\" class=\"btn btn-default btn-xs dropdown-toggle\" data-toggle=\"dropdown\">
\t\t    \t<i class=\"fa fa-pencil\"></i> <span class=\"caret\"></span>
\t\t  \t</button>
\t\t  \t<ul class=\"dropdown-menu\" role=\"menu\">
\t\t    \t<li><a href=\"#\" data-toggle=\"modal\" data-target=\"#editSkill\"><i class=\"fa fa-edit\"></i> editar Competencias</a></li>
\t\t  \t</ul>
\t\t</div>
";
    }

    // line 3
    public function block_ability_public($context, array $blocks = array())
    {
        // line 4
        echo "\t\t
\t\t";
        // line 5
        if (((isset($context["datosD"]) ? $context["datosD"] : $this->getContext($context, "datosD")) &&  !twig_test_empty($this->getAttribute((isset($context["datosD"]) ? $context["datosD"] : $this->getContext($context, "datosD")), "habilidades", array())))) {
            // line 6
            echo "
\t\t\t";
            // line 7
            $context["array"] = twig_split_filter($this->env, $this->getAttribute((isset($context["datosD"]) ? $context["datosD"] : $this->getContext($context, "datosD")), "habilidades", array()), ",");
            // line 8
            echo "\t\t\t";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["array"]) ? $context["array"] : $this->getContext($context, "array")));
            foreach ($context['_seq'] as $context["_key"] => $context["habilidad"]) {
                // line 9
                echo "\t\t\t\t";
                if ( !twig_test_empty($context["habilidad"])) {
                    // line 10
                    echo "\t\t\t\t\t";
                    if ($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())) {
                        // line 11
                        echo "\t\t\t\t\t\t<a href=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_search_competencia_private", array("page" => 0, "search" => $context["habilidad"])), "html", null, true);
                        echo "\" type=\"button\" class=\"btn btn-print btn-default\">";
                        echo twig_escape_filter($this->env, $context["habilidad"], "html", null, true);
                        echo "</a>
\t\t\t\t\t";
                    } else {
                        // line 13
                        echo "\t\t\t\t\t\t<a href=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_search_competencia_public", array("page" => 0, "search" => $context["habilidad"])), "html", null, true);
                        echo "\" type=\"button\" class=\"btn btn-print btn-default\">";
                        echo twig_escape_filter($this->env, $context["habilidad"], "html", null, true);
                        echo "</a>
\t\t\t\t\t";
                    }
                    // line 15
                    echo "\t\t\t\t";
                }
                // line 16
                echo "\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['habilidad'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 17
            echo "\t\t";
        } else {
            // line 18
            echo "\t\t\t<h5 class=\"text-center text-muted\">
\t\t\t\t<a href=\"#\" data-toggle=\"modal\" data-target=\"#editSkill\">
\t\t\t\t\t<em><i class=\"fa fa-plus-circle\"></i>&nbsp;agregar competencias</em>
\t\t\t\t</a>
\t\t\t</h5>
\t\t";
        }
        // line 23
        echo "\t

\t\t";
    }

    // line 39
    public function block_modal_ability($context, array $blocks = array())
    {
        // line 40
        echo "<!-- Modal New-->
<div class=\"modal fade\" id=\"editSkill\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
  <div class=\"modal-dialog\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
        <h4 class=\"modal-title\" id=\"myModalLabel\">Editar Competencias</h4>
      </div>
      <div class=\"modal-body\">
        ";
        // line 50
        echo "        ";
        $this->displayBlock('edit_ability', $context, $blocks);
        // line 53
        echo "      </div>
    </div>
  </div>
</div>
";
    }

    // line 50
    public function block_edit_ability($context, array $blocks = array())
    {
        // line 51
        echo "        ";
        $this->displayParentBlock("edit_ability", $context, $blocks);
        echo "
        ";
    }

    public function getTemplateName()
    {
        return "PCVDemoBundle:Show:habilidades.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  161 => 51,  158 => 50,  150 => 53,  147 => 50,  136 => 40,  133 => 39,  127 => 23,  119 => 18,  116 => 17,  110 => 16,  107 => 15,  99 => 13,  91 => 11,  88 => 10,  85 => 9,  80 => 8,  78 => 7,  75 => 6,  73 => 5,  70 => 4,  67 => 3,  53 => 26,  51 => 3,  48 => 2,  45 => 1,  41 => 39,  37 => 37,  35 => 1,  14 => 49,);
    }
}
