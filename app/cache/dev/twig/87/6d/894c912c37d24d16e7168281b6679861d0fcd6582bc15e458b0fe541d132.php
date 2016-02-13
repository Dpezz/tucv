<?php

/* PCVDemoBundle:Show:conocimientos.html.twig */
class __TwigTemplate_876d894c912c37d24d16e7168281b6679861d0fcd6582bc15e458b0fe541d132 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->env->loadTemplate("PCVDemoBundle:Edit:conocimientos.html.twig");
        // line 69
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."PCVDemoBundle:Edit:conocimientos.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $_trait_1 = $this->env->loadTemplate("PCVDemoBundle:Edit:idiomas.html.twig");
        // line 88
        if (!$_trait_1->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."PCVDemoBundle:Edit:idiomas.html.twig".'" cannot be used as a trait.');
        }
        $_trait_1_blocks = $_trait_1->getBlocks();

        $this->traits = array_merge(
            $_trait_0_blocks,
            $_trait_1_blocks
        );

        $this->blocks = array_merge(
            $this->traits,
            array(
                'knowing_private' => array($this, 'block_knowing_private'),
                'knowing_public' => array($this, 'block_knowing_public'),
                'modal_knowing' => array($this, 'block_modal_knowing'),
                'edit_knowing' => array($this, 'block_edit_knowing'),
                'new_knowing' => array($this, 'block_new_knowing'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('knowing_private', $context, $blocks);
        // line 57
        echo "

";
        // line 59
        $this->displayBlock('modal_knowing', $context, $blocks);
    }

    // line 1
    public function block_knowing_private($context, array $blocks = array())
    {
        // line 2
        echo "\t";
        $this->displayBlock('knowing_public', $context, $blocks);
        // line 42
        echo "
\t<div class=\"\">
\t    <h3 class=\"panel-title\">
\t    \t<div class=\"btn-group pull-right\">
\t\t\t  \t<button type=\"button\" class=\"btn btn-default btn-xs dropdown-toggle\" data-toggle=\"dropdown\">
\t\t\t    \t<i class=\"fa fa-pencil\"></i> <span class=\"caret\"></span>
\t\t\t  \t</button>
\t\t\t  \t<ul class=\"dropdown-menu\" role=\"menu\">
\t\t\t    \t<li><a href=\"#\" data-toggle=\"modal\" data-target=\"#newLearn\"><i class=\"fa fa-gear\"></i> nuevo Conocimiento</a></li>
\t\t\t    \t<li><a href=\"#\" data-toggle=\"modal\" data-target=\"#editLearn\"><i class=\"fa fa-edit\"></i> editar Conocimientos</a></li>
\t\t\t  \t</ul>
\t\t\t</div>
\t    </h3>
\t</div>
";
    }

    // line 2
    public function block_knowing_public($context, array $blocks = array())
    {
        // line 3
        echo "\t
\t\t";
        // line 4
        if ((isset($context["datosC"]) ? $context["datosC"] : $this->getContext($context, "datosC"))) {
            // line 5
            echo "\t\t\t";
            $context["variables"] = array(0 => "principiante", 1 => "principiante", 2 => "intermedio", 3 => "intermedio", 4 => "alto", 5 => "avanzado", 6 => "experto");
            // line 6
            echo "\t\t\t";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable(twig_array_batch((isset($context["datosC"]) ? $context["datosC"] : $this->getContext($context, "datosC")), 2));
            foreach ($context['_seq'] as $context["_key"] => $context["conocimiento"]) {
                // line 7
                echo "\t\t\t<div class=\"row\">
\t\t\t\t";
                // line 8
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($context["conocimiento"]);
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 9
                    echo "\t\t           <div class=\"col-xs-12 col-md-6\">
\t\t           \t\t<div class=\"col-xs-5 col-md-5\">
\t\t           \t\t\t";
                    // line 11
                    if ($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())) {
                        // line 12
                        echo "\t\t           \t\t\t<a href=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_search_skill_private", array("page" => 0, "search" => $this->getAttribute($context["item"], "name", array()))), "html", null, true);
                        echo "\" type=\"button\" class=\"btn btn-default btn-print\">";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "name", array()), "html", null, true);
                        echo "</a>
\t\t           \t\t\t";
                    } else {
                        // line 14
                        echo "\t\t           \t\t\t<a href=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_search_skill_public", array("page" => 0, "search" => $this->getAttribute($context["item"], "name", array()))), "html", null, true);
                        echo "\" type=\"button\" class=\"btn btn-default btn-print\">";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "name", array()), "html", null, true);
                        echo "</a>
\t\t           \t\t\t";
                    }
                    // line 16
                    echo "\t\t           \t\t</div>
\t\t           \t\t<div class=\"col-xs-7 col-md-7\">
\t\t           \t\t\t<span data-toggle=\"tooltip\" data-placement=\"top\" title=\"";
                    // line 18
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["variables"]) ? $context["variables"] : $this->getContext($context, "variables")), $this->getAttribute($context["item"], "value", array()), array(), "array"), "html", null, true);
                    echo " - ";
                    echo twig_escape_filter($this->env, (($this->getAttribute($context["item"], "value", array()) * 17) - 2), "html", null, true);
                    echo " %\">
\t\t\t\t\t\t\t\t";
                    // line 19
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable(range(1, $this->getAttribute($context["item"], "value", array())));
                    foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                        // line 20
                        echo "\t\t\t\t\t\t\t\t\t<i class=\"fa fa-heart yellow\"></i>
\t\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 22
                    echo "\t\t\t\t\t\t\t\t";
                    if (((6 - $this->getAttribute($context["item"], "value", array())) > 0)) {
                        // line 23
                        echo "\t\t\t\t\t\t\t\t\t";
                        $context['_parent'] = (array) $context;
                        $context['_seq'] = twig_ensure_traversable(range(1, (6 - $this->getAttribute($context["item"], "value", array()))));
                        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                            // line 24
                            echo "\t\t\t\t\t\t\t\t\t<i class=\"fa fa-heart grayIcon\"></i>
\t\t\t\t\t\t\t\t\t";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 26
                        echo "\t\t\t\t\t\t\t\t";
                    }
                    // line 27
                    echo "\t\t\t\t\t\t\t</span>
\t\t           \t\t</div>
\t\t           </div>
\t\t        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 31
                echo "\t\t\t</div>
\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['conocimiento'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 33
            echo "\t\t";
        } else {
            // line 34
            echo "\t\t\t<h5 class=\"text-center text-muted\">
\t\t\t\t<a href=\"#\" data-toggle=\"modal\" data-target=\"#newLearn\">
\t\t\t\t\t<em><i class=\"fa fa-plus-circle\"></i>&nbsp;agregar conocimientos</em>
\t\t\t\t</a>
\t\t\t</h5>
\t\t";
        }
        // line 40
        echo "
\t";
    }

    // line 59
    public function block_modal_knowing($context, array $blocks = array())
    {
        // line 60
        echo "<!-- Modal Edit -->
<div class=\"modal fade\" id=\"editLearn\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
  <div class=\"modal-dialog\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
        <h4 class=\"modal-title\" id=\"myModalLabel\">Editar Conocimientos</h4>
      </div>
      <div class=\"modal-body\">
        ";
        // line 70
        echo "        ";
        $this->displayBlock('edit_knowing', $context, $blocks);
        // line 73
        echo "      </div>
    </div>
  </div>
</div>


<!-- Modal New-->
<div class=\"modal fade\" id=\"newLearn\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
  <div class=\"modal-dialog\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
        <h4 class=\"modal-title\" id=\"myModalLabel\">Nuevo Conocimiento</h4>
      </div>
      <div class=\"modal-body\">
        ";
        // line 89
        echo "        ";
        $this->displayBlock('new_knowing', $context, $blocks);
        // line 92
        echo "      </div>
    </div>
  </div>
</div>
";
    }

    // line 70
    public function block_edit_knowing($context, array $blocks = array())
    {
        // line 71
        echo "        ";
        $this->displayParentBlock("edit_knowing", $context, $blocks);
        echo "
        ";
    }

    // line 89
    public function block_new_knowing($context, array $blocks = array())
    {
        // line 90
        echo "        ";
        $this->displayParentBlock("new_knowing", $context, $blocks);
        echo "
        ";
    }

    public function getTemplateName()
    {
        return "PCVDemoBundle:Show:conocimientos.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  254 => 90,  251 => 89,  244 => 71,  241 => 70,  233 => 92,  230 => 89,  213 => 73,  210 => 70,  199 => 60,  196 => 59,  191 => 40,  183 => 34,  180 => 33,  173 => 31,  164 => 27,  161 => 26,  154 => 24,  149 => 23,  146 => 22,  139 => 20,  135 => 19,  129 => 18,  125 => 16,  117 => 14,  109 => 12,  107 => 11,  103 => 9,  99 => 8,  96 => 7,  91 => 6,  88 => 5,  86 => 4,  83 => 3,  80 => 2,  62 => 42,  59 => 2,  56 => 1,  52 => 59,  48 => 57,  46 => 1,  21 => 88,  14 => 69,);
    }
}
