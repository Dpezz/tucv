<?php

/* PCVDemoBundle:Show:bio.html.twig */
class __TwigTemplate_74c4a54bb48f985cfcd902da0d6578b658992c92bee3ab7321965ace01adba02 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->env->loadTemplate("PCVDemoBundle:Edit:datos.html.twig");
        // line 41
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."PCVDemoBundle:Edit:datos.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'bio_private' => array($this, 'block_bio_private'),
                'bio_public' => array($this, 'block_bio_public'),
                'modal_bio' => array($this, 'block_modal_bio'),
                'edit_bio' => array($this, 'block_edit_bio'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('bio_private', $context, $blocks);
        // line 29
        echo "

";
        // line 31
        $this->displayBlock('modal_bio', $context, $blocks);
    }

    // line 1
    public function block_bio_private($context, array $blocks = array())
    {
        // line 2
        echo "
\t";
        // line 3
        $this->displayBlock('bio_public', $context, $blocks);
        // line 17
        echo "
\t<br>
\t<div class=\"btn-group pull-right\">
\t  \t<button type=\"button\" class=\"btn btn-default btn-xs dropdown-toggle\" data-toggle=\"dropdown\">
\t    \t<i class=\"fa fa-pencil\"></i> <span class=\"caret\"></span>
\t  \t</button>
\t  \t<ul class=\"dropdown-menu\" role=\"menu\">
\t    \t<li><a href=\"#\" data-toggle=\"modal\" data-target=\"#editBio\"><i class=\"fa fa-pencil-square-o\"></i> editar Descripción</a></li>
\t  \t</ul>
\t</div>

";
    }

    // line 3
    public function block_bio_public($context, array $blocks = array())
    {
        // line 4
        echo "\t\t<div class=\"col-md-10 col-md-offset-1\">
\t\t\t<h5 class=\"text-justify text-muted\"><em>
\t\t\t\t<i class=\"fa fa-quote-left fa-2x muted\"></i>&nbsp;
\t\t\t\t";
        // line 7
        if (((isset($context["datosD"]) ? $context["datosD"] : $this->getContext($context, "datosD")) && $this->getAttribute((isset($context["datosD"]) ? $context["datosD"] : $this->getContext($context, "datosD")), "bio", array()))) {
            // line 8
            echo "\t\t\t\t\t";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["datosD"]) ? $context["datosD"] : $this->getContext($context, "datosD")), "bio", array()), "html", null, true);
            echo "
\t\t\t\t";
        } else {
            // line 10
            echo "\t\t\t\t\tHola soy ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["datosU"]) ? $context["datosU"] : $this->getContext($context, "datosU")), "name", array()), "html", null, true);
            echo "...
\t\t\t\t";
        }
        // line 12
        echo "\t\t\t\t</em>
\t\t\t</h5>
\t\t</div>

\t";
    }

    // line 31
    public function block_modal_bio($context, array $blocks = array())
    {
        // line 32
        echo "<!-- Modal -->
<div class=\"modal fade\" id=\"editBio\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
  \t<div class=\"modal-dialog\">
    \t<div class=\"modal-content\">
\t      \t<div class=\"modal-header\">
        \t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
\t        \t<h4 class=\"modal-title\" id=\"myModalLabel\">Editar Descripción Personal</h4>
\t      \t</div>
\t      \t<div class=\"modal-body\">
\t        \t";
        // line 42
        echo "\t        \t\t";
        $this->displayBlock('edit_bio', $context, $blocks);
        // line 45
        echo "\t      \t</div>
    \t</div>
  \t</div>
</div>
";
    }

    // line 42
    public function block_edit_bio($context, array $blocks = array())
    {
        // line 43
        echo "\t        \t\t";
        $this->displayParentBlock("edit_bio", $context, $blocks);
        echo "
\t        \t";
    }

    public function getTemplateName()
    {
        return "PCVDemoBundle:Show:bio.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  126 => 43,  123 => 42,  115 => 45,  112 => 42,  101 => 32,  98 => 31,  90 => 12,  84 => 10,  78 => 8,  76 => 7,  71 => 4,  68 => 3,  53 => 17,  51 => 3,  48 => 2,  45 => 1,  41 => 31,  37 => 29,  35 => 1,  14 => 41,);
    }
}
