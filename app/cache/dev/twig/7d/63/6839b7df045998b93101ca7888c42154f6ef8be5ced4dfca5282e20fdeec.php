<?php

/* PCVDemoBundle:Show:idiomas.html.twig */
class __TwigTemplate_7d636839b7df045998b93101ca7888c42154f6ef8be5ced4dfca5282e20fdeec extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->env->loadTemplate("PCVDemoBundle:Edit:idiomas.html.twig");
        // line 87
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."PCVDemoBundle:Edit:idiomas.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $_trait_1 = $this->env->loadTemplate("PCVDemoBundle:Edit:idiomas.html.twig");
        // line 105
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
                'idiom_private' => array($this, 'block_idiom_private'),
                'idiom_public' => array($this, 'block_idiom_public'),
                'modal_idiom' => array($this, 'block_modal_idiom'),
                'edit_idiom' => array($this, 'block_edit_idiom'),
                'new_idiom' => array($this, 'block_new_idiom'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('idiom_private', $context, $blocks);
        // line 75
        echo "

";
        // line 77
        $this->displayBlock('modal_idiom', $context, $blocks);
    }

    // line 1
    public function block_idiom_private($context, array $blocks = array())
    {
        // line 2
        echo "\t";
        $this->displayBlock('idiom_public', $context, $blocks);
        // line 60
        echo "
\t<div class=\"\">
\t\t<h3 class=\"panel-title\">
\t    \t<div class=\"btn-group pull-right\">
\t\t\t  \t<button type=\"button\" class=\"btn btn-default btn-xs dropdown-toggle\" data-toggle=\"dropdown\">
\t\t\t    \t<i class=\"fa fa-pencil\"></i> <span class=\"caret\"></span>
\t\t\t  \t</button>
\t\t\t  \t<ul class=\"dropdown-menu\" role=\"menu\">
\t\t\t    \t<li><a href=\"#\" data-toggle=\"modal\" data-target=\"#newLanguage\"><i class=\"fa fa-comment\"></i> nuevo Idioma</a></li>
\t\t\t    \t<li><a href=\"#\" data-toggle=\"modal\" data-target=\"#editLanguage\"><i class=\"fa fa-edit\"></i> editar Idiomas</a></li>
\t\t\t  \t</ul>
\t\t\t</div>
\t    </h3>
\t</div>
";
    }

    // line 2
    public function block_idiom_public($context, array $blocks = array())
    {
        // line 3
        echo "\t
\t\t";
        // line 4
        if ((isset($context["datosI"]) ? $context["datosI"] : $this->getContext($context, "datosI"))) {
            // line 5
            echo "\t\t";
            $context["variables"] = array(0 => "principiante", 1 => "principiante", 2 => "principiante", 3 => "intermedio", 4 => "intermedio", 5 => "intermedio", 6 => "alto", 7 => "alto", 8 => "avanzado", 9 => "experto", 10 => "experto");
            // line 6
            echo "\t\t\t";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable(twig_array_batch((isset($context["datosI"]) ? $context["datosI"] : $this->getContext($context, "datosI")), 2));
            foreach ($context['_seq'] as $context["_key"] => $context["idiomas"]) {
                // line 7
                echo "\t\t\t\t<div class=\"row\">

\t\t\t\t";
                // line 9
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($context["idiomas"]);
                foreach ($context['_seq'] as $context["_key"] => $context["idioma"]) {
                    // line 10
                    echo "\t\t\t\t\t<div class=\"col-xs-12 col-md-6\">
\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t";
                    // line 12
                    if ($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())) {
                        // line 13
                        echo "\t\t\t\t\t\t<a href=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_search_idioma_private", array("page" => 0, "search" => $this->getAttribute($context["idioma"], "name", array()))), "html", null, true);
                        echo "\" type=\"button\" class=\"btn btn-default btn-print \" data-toggle=\"tooltip\" data-placement=\"top\" title=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["idioma"], "name", array()), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["idioma"], "name", array()), "html", null, true);
                        echo "</a>
\t\t\t\t\t\t";
                    } else {
                        // line 15
                        echo "\t\t\t\t\t\t<a href=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_search_idioma_public", array("page" => 0, "search" => $this->getAttribute($context["idioma"], "name", array()))), "html", null, true);
                        echo "\" type=\"button\" class=\"btn btn-default btn-print \" data-toggle=\"tooltip\" data-placement=\"top\" title=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["idioma"], "name", array()), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["idioma"], "name", array()), "html", null, true);
                        echo "</a>
\t\t\t\t\t\t";
                    }
                    // line 17
                    echo "\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t";
                    // line 19
                    if ($this->getAttribute($context["idioma"], "nativo", array())) {
                        // line 20
                        echo "\t\t\t\t\t\t<div class=\"progress progress-striped\">
\t\t\t\t\t\t\t<div class=\"progress-bar progress-bar-primary\" role=\"progressbar\" aria-valuenow=\"40\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 100%\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Idioma Nativo\"> 
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
                    } else {
                        // line 25
                        echo "\t\t\t\t\t\t\t<div class=\"progress progress-striped\">
\t\t\t\t\t\t\t\t<div class=\"progress-bar label-yellow\" role=\"progressbar\" aria-valuenow=\"40\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: ";
                        // line 26
                        echo twig_escape_filter($this->env, $this->getAttribute($context["idioma"], "value", array()), "html", null, true);
                        echo "%\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["variables"]) ? $context["variables"] : $this->getContext($context, "variables")), ($this->getAttribute($context["idioma"], "value", array()) / 10), array(), "array"), "html", null, true);
                        echo " - ";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["idioma"], "value", array()), "html", null, true);
                        echo " %\"> 
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
                    }
                    // line 30
                    echo "\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['idioma'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 33
                echo "
\t\t\t</div>
\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['idiomas'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 36
            echo "\t\t";
        } else {
            // line 37
            echo "\t\t\t<h5 class=\"text-center text-muted\">
\t\t\t\t<a href=\"#\" data-toggle=\"modal\" data-target=\"#newLanguage\">
\t\t\t\t\t<em><i class=\"fa fa-plus-circle\"></i>&nbsp;agregar idiomas</em>
\t\t\t\t</a>
\t\t\t</h5>
\t\t";
        }
        // line 43
        echo "\t
\t\t<script src=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/pcvdemo/js/bootstrap/tooltip.js"), "html", null, true);
        echo "\"></script>   
\t\t<script type=\"text/javascript\">
\t\t\$(document).ready(function(){
\t\t\t\$('td').tooltip();
\t\t\t\$('span').tooltip();
\t\t\t\$('div').tooltip();
\t\t\t\$('i').tooltip();
\t\t\t\$('small').tooltip();
\t\t\t\$('a,li').tooltip({
\t\t\t    'selector': '',
\t\t\t    'placement': 'bottom',
\t\t\t    'container':'body'
\t\t\t});
\t\t});
\t\t</script>
\t";
    }

    // line 77
    public function block_modal_idiom($context, array $blocks = array())
    {
        // line 78
        echo "<!-- Modal Edit-->
<div class=\"modal fade\" id=\"editLanguage\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
  <div class=\"modal-dialog\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
        <h4 class=\"modal-title\" id=\"myModalLabel\">Editar Idiomas</h4>
      </div>
      <div class=\"modal-body\">
        ";
        // line 88
        echo "\t        ";
        $this->displayBlock('edit_idiom', $context, $blocks);
        // line 91
        echo "      </div>
    </div>
  </div>
</div>

<!-- Modal New-->
<div class=\"modal fade\" id=\"newLanguage\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
  <div class=\"modal-dialog\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
        <h4 class=\"modal-title\" id=\"myModalLabel\">Nuevo Idioma</h4>
      </div>
      <div class=\"modal-body\">
        ";
        // line 106
        echo "\t        ";
        $this->displayBlock('new_idiom', $context, $blocks);
        // line 109
        echo "      </div>
    </div>
  </div>
</div>
";
    }

    // line 88
    public function block_edit_idiom($context, array $blocks = array())
    {
        // line 89
        echo "\t        ";
        $this->displayParentBlock("edit_idiom", $context, $blocks);
        echo "
\t        ";
    }

    // line 106
    public function block_new_idiom($context, array $blocks = array())
    {
        // line 107
        echo "\t        ";
        $this->displayParentBlock("new_idiom", $context, $blocks);
        echo "
\t        ";
    }

    public function getTemplateName()
    {
        return "PCVDemoBundle:Show:idiomas.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  264 => 107,  261 => 106,  254 => 89,  251 => 88,  243 => 109,  240 => 106,  224 => 91,  221 => 88,  210 => 78,  207 => 77,  187 => 44,  184 => 43,  176 => 37,  173 => 36,  165 => 33,  157 => 30,  146 => 26,  143 => 25,  136 => 20,  134 => 19,  130 => 17,  120 => 15,  110 => 13,  108 => 12,  104 => 10,  100 => 9,  96 => 7,  91 => 6,  88 => 5,  86 => 4,  83 => 3,  80 => 2,  62 => 60,  59 => 2,  56 => 1,  52 => 77,  48 => 75,  46 => 1,  21 => 105,  14 => 87,);
    }
}
