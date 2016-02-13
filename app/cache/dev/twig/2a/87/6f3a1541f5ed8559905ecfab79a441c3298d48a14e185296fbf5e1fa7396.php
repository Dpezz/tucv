<?php

/* PCVDemoBundle:Show:profesion.html.twig */
class __TwigTemplate_2a876f3a1541f5ed8559905ecfab79a441c3298d48a14e185296fbf5e1fa7396 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->env->loadTemplate("PCVDemoBundle:Show:video.html.twig");
        // line 95
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."PCVDemoBundle:Show:video.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $_trait_1 = $this->env->loadTemplate("PCVDemoBundle:Show:redes.html.twig");
        // line 113
        if (!$_trait_1->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."PCVDemoBundle:Show:redes.html.twig".'" cannot be used as a trait.');
        }
        $_trait_1_blocks = $_trait_1->getBlocks();

        $_trait_2 = $this->env->loadTemplate("PCVDemoBundle:Edit:profesion.html.twig");
        // line 135
        if (!$_trait_2->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."PCVDemoBundle:Edit:profesion.html.twig".'" cannot be used as a trait.');
        }
        $_trait_2_blocks = $_trait_2->getBlocks();

        $this->traits = array_merge(
            $_trait_0_blocks,
            $_trait_1_blocks,
            $_trait_2_blocks
        );

        $this->blocks = array_merge(
            $this->traits,
            array(
                'profession_private' => array($this, 'block_profession_private'),
                'profession_public' => array($this, 'block_profession_public'),
                'video_public' => array($this, 'block_video_public'),
                'red_public' => array($this, 'block_red_public'),
                'modal_profession' => array($this, 'block_modal_profession'),
                'edit_profession' => array($this, 'block_edit_profession'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('profession_private', $context, $blocks);
        // line 123
        echo "

";
        // line 125
        $this->displayBlock('modal_profession', $context, $blocks);
    }

    // line 1
    public function block_profession_private($context, array $blocks = array())
    {
        // line 2
        echo "<div class=\"panel\">
\t<div class=\"panel-heading\">
\t\t<h3 class=\"panel-title\">Profesión
\t\t\t<button class=\"btn btn-default btn-xs pull-right\" data-toggle=\"modal\" data-target=\"#profesion\">
\t\t\t\t<i class=\"fa fa-pencil\"></i>
\t\t\t</button>
\t\t</h3>
\t</div>

\t<div class=\"panel-body\">
\t";
        // line 12
        $this->displayBlock('profession_public', $context, $blocks);
        // line 120
        echo "\t</div>
</div>
";
    }

    // line 12
    public function block_profession_public($context, array $blocks = array())
    {
        // line 13
        echo "\t\t<h2 class=\"text-center text-muted\">
\t\t\t";
        // line 14
        if ($this->getAttribute((isset($context["datosU"]) ? $context["datosU"] : $this->getContext($context, "datosU")), "name", array())) {
            echo "<strong>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["datosU"]) ? $context["datosU"] : $this->getContext($context, "datosU")), "name", array()), "html", null, true);
            echo "</strong>
\t\t\t";
        } else {
            // line 15
            echo "<em>Agregar Nombre</em>
\t\t\t";
        }
        // line 17
        echo "\t\t</h2>
\t\t<h2 class=\"text-center text-muted min-sp\">
\t\t\t";
        // line 19
        if (((isset($context["datosD"]) ? $context["datosD"] : $this->getContext($context, "datosD")) && $this->getAttribute((isset($context["datosD"]) ? $context["datosD"] : $this->getContext($context, "datosD")), "profesion", array()))) {
            // line 20
            echo "\t\t\t\t";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["datosD"]) ? $context["datosD"] : $this->getContext($context, "datosD")), "profesion", array()), "html", null, true);
            echo "
\t\t\t";
        } else {
            // line 22
            echo "\t\t\t\t<em>Carrera, Ocupación o Profesión</em>
\t\t\t";
        }
        // line 24
        echo "\t\t</h2>
\t\t<h4 class=\"text-center text-muted min-sp\">
\t\t\t";
        // line 26
        if (((isset($context["datosD"]) ? $context["datosD"] : $this->getContext($context, "datosD")) && $this->getAttribute((isset($context["datosD"]) ? $context["datosD"] : $this->getContext($context, "datosD")), "profesionsecond", array()))) {
            // line 27
            echo "                <em>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["datosD"]) ? $context["datosD"] : $this->getContext($context, "datosD")), "profesionsecond", array()), "html", null, true);
            echo "</em>
\t        ";
        } else {
            // line 29
            echo "\t        \t<em>Títulos Secundarios</em>
\t        ";
        }
        // line 31
        echo "\t\t</h4>
\t\t
\t\t";
        // line 33
        if (((isset($context["datosD"]) ? $context["datosD"] : $this->getContext($context, "datosD")) && ( !twig_test_empty($this->getAttribute((isset($context["datosD"]) ? $context["datosD"] : $this->getContext($context, "datosD")), "level", array())) ||  !twig_test_empty($this->getAttribute((isset($context["datosD"]) ? $context["datosD"] : $this->getContext($context, "datosD")), "actual", array()))))) {
            // line 34
            echo "\t\t\t<h6 class=\"division\"></h6>
\t\t";
        }
        // line 36
        echo "\t\t
\t\t";
        // line 37
        if (((isset($context["datosD"]) ? $context["datosD"] : $this->getContext($context, "datosD")) && $this->getAttribute((isset($context["datosD"]) ? $context["datosD"] : $this->getContext($context, "datosD")), "level", array()))) {
            // line 38
            echo "\t\t\t<h4 class=\"text-center text-muted\">
\t\t\t\t<i class=\"fa fa-graduation-cap muted\" data-toggle=\"tooltip\" data-placement=\"left\" title=\"Nivel Educación Superior\"></i>
\t\t\t \t ";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["datosD"]) ? $context["datosD"] : $this->getContext($context, "datosD")), "level", array()), "html", null, true);
            echo "
\t\t\t</h4> \t
\t\t";
        }
        // line 43
        echo "
\t\t";
        // line 44
        if (((isset($context["datosD"]) ? $context["datosD"] : $this->getContext($context, "datosD")) && $this->getAttribute((isset($context["datosD"]) ? $context["datosD"] : $this->getContext($context, "datosD")), "actual", array()))) {
            // line 45
            echo "\t\t\t<h4 class=\"text-center text-muted\">
\t\t\t\t<i class=\"fa fa-briefcase muted\" data-toggle=\"tooltip\" data-placement=\"left\" title=\"Empresa o Proyecto Actual\"></i>
\t\t\t \t ";
            // line 47
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["datosD"]) ? $context["datosD"] : $this->getContext($context, "datosD")), "actual", array()), "html", null, true);
            echo "
\t\t\t</h4>
\t\t";
        }
        // line 50
        echo "
\t\t<h6 class=\"division\"></h6>

\t\t<h5 class=\"text-center\">
\t\t";
        // line 54
        if ($this->getAttribute((isset($context["datosU"]) ? $context["datosU"] : $this->getContext($context, "datosU")), "email", array())) {
            // line 55
            echo "\t\t\t<a href=\"mailto:";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["datosU"]) ? $context["datosU"] : $this->getContext($context, "datosU")), "email", array()), "html", null, true);
            echo "\">
\t\t\t\t<i class=\"fa fa-envelope fa-lg muted\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Correo Electrónico\"></i>&nbsp;
\t\t\t\t<em>";
            // line 57
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["datosU"]) ? $context["datosU"] : $this->getContext($context, "datosU")), "email", array()), "html", null, true);
            echo "</em>
\t\t\t</a>
\t\t";
        }
        // line 60
        echo "
\t\t&emsp;-&emsp;

\t\t";
        // line 63
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())) {
            // line 64
            echo "\t\t\t<a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_private_resume_public", array("url" => $this->getAttribute((isset($context["datosU"]) ? $context["datosU"] : $this->getContext($context, "datosU")), "resumenUrl", array()))), "html", null, true);
            echo "\">
\t\t\t\t<i class=\"fa fa-globe fa-lg muted\" data-toggle=\"tooltip\" data-placement=\"left\" title=\"Sitio Web\"></i>
\t\t\t\t&nbsp;
\t\t\t\t<em>tucv.cl/";
            // line 67
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["datosU"]) ? $context["datosU"] : $this->getContext($context, "datosU")), "resumenUrl", array()), "html", null, true);
            echo "</em>
\t\t\t</a>
\t\t";
        } else {
            // line 70
            echo "\t\t\t<a  href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_resume_public", array("url" => $this->getAttribute((isset($context["datosU"]) ? $context["datosU"] : $this->getContext($context, "datosU")), "resumenUrl", array()))), "html", null, true);
            echo "\">
\t\t\t\t<i class=\"fa fa-globe fa-lg muted\" data-toggle=\"tooltip\" data-placement=\"left\" title=\"Sitio Web\"></i>&nbsp;
\t\t\t\t<em>tucv.cl/";
            // line 72
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["datosU"]) ? $context["datosU"] : $this->getContext($context, "datosU")), "resumenUrl", array()), "html", null, true);
            echo "</em>
\t\t\t</a>
\t\t";
        }
        // line 75
        echo "\t
\t\t

\t\t";
        // line 78
        if (((isset($context["datosD"]) ? $context["datosD"] : $this->getContext($context, "datosD")) && $this->getAttribute((isset($context["datosD"]) ? $context["datosD"] : $this->getContext($context, "datosD")), "phone", array()))) {
            // line 79
            echo "\t\t&emsp;-&emsp;
\t\t\t<a>
\t\t\t\t<i class=\"fa fa-phone fa-lg muted\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"fono\"></i>
\t\t\t\t&nbsp;
\t\t\t\t<em>";
            // line 83
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["datosD"]) ? $context["datosD"] : $this->getContext($context, "datosD")), "phone", array()), "html", null, true);
            echo "</em>
\t\t\t</a>
\t\t";
        }
        // line 86
        echo "
\t\t</h5>
\t\t<h6 class=\"clearfix\"></h6>

\t\t<h6 class=\"division\"></h6>

\t\t<h5 class=\"text-center\">

\t\t\t";
        // line 94
        if (((isset($context["datosD"]) ? $context["datosD"] : $this->getContext($context, "datosD")) && $this->getAttribute((isset($context["datosD"]) ? $context["datosD"] : $this->getContext($context, "datosD")), "videoUrl", array()))) {
            // line 95
            echo "\t\t\t\t";
            // line 96
            echo "\t\t\t    ";
            $this->displayBlock('video_public', $context, $blocks);
            // line 99
            echo "\t\t\t";
        }
        // line 105
        echo "\t\t\t<a type=\"button\" class=\"btn btn-default\" href=\"#\" data-toggle=\"modal\" data-target=\"#share_perfil\">
\t\t\t\t<i class=\"fa fa-share-square-o\"></i>&nbsp;Compartir
\t\t\t</a>
\t\t</h5>

\t\t";
        // line 110
        if (((isset($context["datosD"]) ? $context["datosD"] : $this->getContext($context, "datosD")) &&  !twig_test_empty($this->getAttribute((isset($context["datosD"]) ? $context["datosD"] : $this->getContext($context, "datosD")), "redes", array())))) {
            // line 111
            echo "\t\t\t<h6 class=\"division\"></h6>
          \t<h5 class=\"text-center\">
\t\t\t\t";
            // line 114
            echo "\t\t\t\t";
            $this->displayBlock('red_public', $context, $blocks);
            // line 117
            echo "\t\t\t</h5>
\t\t";
        }
        // line 119
        echo "\t";
    }

    // line 96
    public function block_video_public($context, array $blocks = array())
    {
        // line 97
        echo "\t\t\t        ";
        $this->displayParentBlock("video_public", $context, $blocks);
        echo "
\t\t\t    ";
    }

    // line 114
    public function block_red_public($context, array $blocks = array())
    {
        // line 115
        echo "\t\t\t\t\t";
        $this->displayParentBlock("red_public", $context, $blocks);
        echo "
\t\t\t\t";
    }

    // line 125
    public function block_modal_profession($context, array $blocks = array())
    {
        // line 126
        echo "<!-- Modal -->
<div class=\"modal fade\" id=\"profesion\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
  <div class=\"modal-dialog\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
        <h4 class=\"modal-title\" id=\"myModalLabel\">Editar Datos Profesionales</h4>
      </div>
      <div class=\"modal-body\">
        ";
        // line 136
        echo "        ";
        $this->displayBlock('edit_profession', $context, $blocks);
        // line 139
        echo "      </div>
    </div>
  </div>
</div>
";
    }

    // line 136
    public function block_edit_profession($context, array $blocks = array())
    {
        // line 137
        echo "        ";
        $this->displayParentBlock("edit_profession", $context, $blocks);
        echo "
        ";
    }

    public function getTemplateName()
    {
        return "PCVDemoBundle:Show:profesion.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  340 => 137,  337 => 136,  329 => 139,  326 => 136,  315 => 126,  312 => 125,  305 => 115,  302 => 114,  295 => 97,  292 => 96,  288 => 119,  284 => 117,  281 => 114,  277 => 111,  275 => 110,  268 => 105,  265 => 99,  262 => 96,  260 => 95,  258 => 94,  248 => 86,  242 => 83,  236 => 79,  234 => 78,  229 => 75,  223 => 72,  217 => 70,  211 => 67,  204 => 64,  202 => 63,  197 => 60,  191 => 57,  185 => 55,  183 => 54,  177 => 50,  171 => 47,  167 => 45,  165 => 44,  162 => 43,  156 => 40,  152 => 38,  150 => 37,  147 => 36,  143 => 34,  141 => 33,  137 => 31,  133 => 29,  127 => 27,  125 => 26,  121 => 24,  117 => 22,  111 => 20,  109 => 19,  105 => 17,  101 => 15,  94 => 14,  91 => 13,  88 => 12,  82 => 120,  80 => 12,  68 => 2,  65 => 1,  61 => 125,  57 => 123,  55 => 1,  28 => 135,  21 => 113,  14 => 95,);
    }
}
