<?php

/* PCVDemoBundle:Show:proyectos.html.twig */
class __TwigTemplate_18b2c03fe9655d22d854b9ef1898839bba092334eb026847a69abf70ffabfcb9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->env->loadTemplate("PCVDemoBundle:Edit:proyectos.html.twig");
        // line 134
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."PCVDemoBundle:Edit:proyectos.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $_trait_1 = $this->env->loadTemplate("PCVDemoBundle:Edit:proyectos.html.twig");
        // line 152
        if (!$_trait_1->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."PCVDemoBundle:Edit:proyectos.html.twig".'" cannot be used as a trait.');
        }
        $_trait_1_blocks = $_trait_1->getBlocks();

        $this->traits = array_merge(
            $_trait_0_blocks,
            $_trait_1_blocks
        );

        $this->blocks = array_merge(
            $this->traits,
            array(
                'project_private' => array($this, 'block_project_private'),
                'project_public' => array($this, 'block_project_public'),
                'modal_project' => array($this, 'block_modal_project'),
                'edit_project' => array($this, 'block_edit_project'),
                'new_project' => array($this, 'block_new_project'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('project_private', $context, $blocks);
        // line 122
        echo "

";
        // line 124
        $this->displayBlock('modal_project', $context, $blocks);
    }

    // line 1
    public function block_project_private($context, array $blocks = array())
    {
        echo "  
\t
\t";
        // line 3
        $this->displayBlock('project_public', $context, $blocks);
        // line 106
        echo "
\t<div class=\"\">
\t\t<h3 class=\"panel-title\">
\t    \t<div class=\"btn-group pull-right\">
\t\t\t  \t<button type=\"button\" class=\"btn btn-default btn-xs dropdown-toggle\" data-toggle=\"dropdown\">
\t\t\t    \t<i class=\"fa fa-pencil\"></i> <span class=\"caret\"></span>
\t\t\t  \t</button>
\t\t\t  \t<ul class=\"dropdown-menu\" role=\"menu\">
\t\t\t    \t<li><a href=\"#\" data-toggle=\"modal\" data-target=\"#newProyecto\"><i class=\"fa fa-briefcase\"></i> nuevo Proyecto</a></li>
\t\t\t    \t<li><a href=\"#\" data-toggle=\"modal\" data-target=\"#editProyecto\"><i class=\"fa fa-pencil-square-o\"></i> editar Proyectos</a></li>
\t\t\t  \t</ul>
\t\t\t</div>
\t    </h3>
\t</div>

";
    }

    // line 3
    public function block_project_public($context, array $blocks = array())
    {
        // line 4
        echo " 
\t\t";
        // line 5
        if ((isset($context["datosP"]) ? $context["datosP"] : $this->getContext($context, "datosP"))) {
            // line 6
            echo "\t\t\t";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable(twig_array_batch((isset($context["datosP"]) ? $context["datosP"] : $this->getContext($context, "datosP")), 4, ""));
            foreach ($context['_seq'] as $context["_key"] => $context["proyecto"]) {
                // line 7
                echo "\t\t\t<div class=\"row\">

\t\t\t\t";
                // line 9
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($context["proyecto"]);
                foreach ($context['_seq'] as $context["_key"] => $context["proy"]) {
                    echo "\t
\t\t\t\t\t";
                    // line 10
                    if ( !twig_test_empty($context["proy"])) {
                        // line 11
                        echo "\t\t\t\t\t";
                        $context["meses"] = array(0 => "Enero", 1 => "Febrero", 2 => "Marzo", 3 => "Abril", 4 => "Mayo", 5 => "Junio", 6 => "Julio", 7 => "Agosto", 8 => "Septiembre", 9 => "Octubre", 10 => "Noviembre", 11 => "Diciembre");
                        // line 12
                        echo "\t\t\t\t\t<div class=\"col-md-3\">
\t\t\t\t\t
\t\t\t\t\t\t";
                        // line 14
                        $context["fecha"] = twig_split_filter($this->env, $this->getAttribute($context["proy"], "fecha", array()), ",");
                        // line 15
                        echo "
\t\t\t\t\t\t";
                        // line 16
                        if ( !twig_test_empty($this->getAttribute($context["proy"], "imagenUrl", array()))) {
                            // line 17
                            echo "\t\t\t\t\t\t\t<h6 class=\"text-center\">
\t\t\t\t\t\t\t\t";
                            // line 18
                            if ( !twig_test_empty($this->getAttribute($context["proy"], "link", array()))) {
                                // line 19
                                echo "\t\t\t\t\t\t\t\t<a href=\"";
                                echo twig_escape_filter($this->env, $this->getAttribute($context["proy"], "link", array()), "html", null, true);
                                echo "\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Visitar Proyecto\" target=\"_blank\">
\t\t\t\t\t\t\t\t";
                            }
                            // line 21
                            echo "\t\t\t\t\t\t \t\t\t<img src=\"";
                            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(("img/project/" . $this->getAttribute($context["proy"], "imagenUrl", array()))), "html", null, true);
                            echo "\" class=\"img-thumbnail\" width=\"250px\">
\t\t\t\t\t \t\t\t";
                            // line 22
                            if ( !twig_test_empty($this->getAttribute($context["proy"], "link", array()))) {
                                // line 23
                                echo "\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t";
                            }
                            // line 25
                            echo "\t\t\t\t\t\t \t\t
\t\t\t\t\t\t \t</h6>
\t\t\t\t\t \t";
                        } else {
                            // line 28
                            echo "\t\t\t\t\t\t \t<h6 class=\"text-center\">
\t\t\t\t\t\t \t\t";
                            // line 29
                            if ( !twig_test_empty($this->getAttribute($context["proy"], "link", array()))) {
                                // line 30
                                echo "\t\t\t\t\t\t\t\t<a href=\"";
                                echo twig_escape_filter($this->env, $this->getAttribute($context["proy"], "link", array()), "html", null, true);
                                echo "\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Visitar Proyecto\" target=\"_blank\">
\t\t\t\t\t\t\t\t";
                            }
                            // line 32
                            echo "\t\t\t\t\t\t \t\t\t<img src=\"";
                            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/pcvdemo/image/noportafolio.png"), "html", null, true);
                            echo "\" class=\"img-thumbnail\" width=\"250px\">
\t\t\t\t\t\t \t\t";
                            // line 33
                            if ( !twig_test_empty($this->getAttribute($context["proy"], "link", array()))) {
                                // line 34
                                echo "\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t";
                            }
                            // line 36
                            echo "\t\t\t\t\t\t \t</h6>
\t\t\t\t\t \t";
                        }
                        // line 38
                        echo "

\t\t\t\t\t \t<h4 class=\"text-primary text-center\"><strong>";
                        // line 40
                        echo twig_escape_filter($this->env, $this->getAttribute($context["proy"], "title", array()), "html", null, true);
                        echo "</strong></h4>
\t\t\t\t\t \t<h5 class=\"text-muted text-center\">
\t\t\t\t\t \t\t<strong>";
                        // line 42
                        echo twig_escape_filter($this->env, $this->getAttribute($context["proy"], "cliente", array()), "html", null, true);
                        echo "</strong>
\t\t\t\t\t \t</h5>
\t\t\t\t\t \t
\t\t\t\t\t \t<h5 class=\"text-center\">
\t\t\t\t\t \t";
                        // line 46
                        if ( !twig_test_empty($this->getAttribute($context["proy"], "descripcion", array()))) {
                            // line 47
                            echo "\t\t\t\t\t \t\t
\t\t\t\t\t \t\t\t<a type=\"button\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"";
                            // line 48
                            echo twig_escape_filter($this->env, $this->getAttribute($context["proy"], "descripcion", array()), "html", null, true);
                            echo "\" target=\"_blank\"><i class=\"fa fa-align-center fa-lg\"></i>
\t\t\t\t\t \t\t\t</a>
\t\t\t \t\t\t";
                        }
                        // line 51
                        echo "
\t\t\t \t\t\t<strong class=\"label label-warning \">
\t\t\t \t\t\t\t";
                        // line 53
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["meses"]) ? $context["meses"] : $this->getContext($context, "meses")), (twig_first($this->env, (isset($context["fecha"]) ? $context["fecha"] : $this->getContext($context, "fecha"))) - 1), array(), "array"), "html", null, true);
                        echo ",&nbsp;";
                        echo twig_escape_filter($this->env, twig_last($this->env, (isset($context["fecha"]) ? $context["fecha"] : $this->getContext($context, "fecha"))), "html", null, true);
                        echo "
\t\t\t \t\t\t</strong>


\t\t\t \t\t\t";
                        // line 57
                        if ( !twig_test_empty($this->getAttribute($context["proy"], "link", array()))) {
                            // line 58
                            echo "\t\t\t\t\t \t\t\t<a type=\"button\" href=\"#\" title=\"Compartir Proyecto\" data-toggle=\"modal\" data-target=\"#share_project\"><i class=\"fa fa-share-alt fa-lg\"></i>
\t\t\t\t\t \t\t\t</a>

\t\t\t\t\t \t\t\t<!-- Modal Download CV -->
\t\t\t\t\t\t\t\t<div class=\"modal fade\" id=\"share_project\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t  \t<div class=\"modal-dialog\">
\t\t\t\t\t\t\t\t\t    <div class=\"modal-content\">
\t\t\t\t\t\t\t\t\t      \t<div class=\"modal-header\">
\t\t\t\t\t\t\t\t\t        \t<button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
\t\t\t\t\t\t\t\t\t        \t<h4 class=\"modal-title\" id=\"myModalLabel\"><i class=\"fa fa-share-alt\"></i>&nbsp;Compartir Curriculum</h4>
\t\t\t\t\t\t\t\t\t      \t</div>
\t\t\t\t\t\t\t\t\t      \t<div class=\"modal-body\">
\t\t\t\t\t\t\t\t\t        
\t\t\t\t\t\t\t\t\t\t        <div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t\t    <div class=\"col-md-4\">
\t\t\t\t\t\t\t\t\t\t\t\t      \t<a type=\"button\" class=\"btn btn-default btn-block\" href=\"http://twitter.com/home?status=visita mi proyecto ";
                            // line 73
                            echo twig_escape_filter($this->env, $this->getAttribute($context["proy"], "link", array()), "html", null, true);
                            echo "  @tucvchile\" onclick=\"window.open(this.href, 'mywin','left=20,top=20,width=500,height=500,toolbar=1,resizable=0'); return false;\">
\t\t\t\t\t\t\t\t\t\t\t\t        <i class=\"fa fa-twitter\"></i>&nbsp;Twitter</a>
\t\t\t\t\t\t\t\t\t\t\t\t    </div>
\t\t\t\t\t\t\t\t\t\t\t\t    <div class=\"col-md-4\">
\t\t\t\t\t\t\t\t\t\t\t\t      \t<a type=\"button\" class=\"btn btn-default btn-block\" href=\"https://plus.google.com/share?url=";
                            // line 77
                            echo twig_escape_filter($this->env, $this->getAttribute($context["proy"], "link", array()), "html", null, true);
                            echo "\" onclick=\"window.open(this.href, 'mywin','left=20,top=20,width=500,height=500,toolbar=1,resizable=0'); return false;\">
\t\t\t\t\t\t\t\t\t\t\t\t        <i class=\"fa fa-google\"></i>&nbsp;Google+</a>
\t\t\t\t\t\t\t\t\t\t\t\t    </div>
\t\t\t\t\t\t\t\t\t\t\t\t    <div class=\"col-md-4\">
\t\t\t\t\t\t\t\t\t\t\t\t    \t<a type=\"button\" class=\"btn btn-default btn-block\" href='https://www.linkedin.com/shareArticle?mini=true&url=";
                            // line 81
                            echo twig_escape_filter($this->env, $this->getAttribute($context["proy"], "link", array()), "html", null, true);
                            echo "'  onclick=\"window.open(this.href, 'mywin','left=20,top=20,width=500,height=500,toolbar=1,resizable=0'); return false;\" target='_blank'>
\t\t\t\t\t\t\t\t\t\t\t      \t\t<i class=\"fa fa-linkedin\"></i>&nbsp;LinkedIn
\t\t\t\t\t\t\t\t\t\t\t\t      \t</a>
\t\t\t\t\t\t\t\t\t\t\t\t    </div>
\t\t\t\t\t\t\t\t\t\t\t  \t</div>
\t\t\t\t\t\t\t\t\t      \t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t  \t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t \t\t";
                        }
                        // line 91
                        echo "\t\t\t\t\t \t</h5>

\t\t\t\t\t</div>
\t\t\t\t\t";
                    }
                    // line 95
                    echo "\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['proy'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 96
                echo "\t\t\t</div>
\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['proyecto'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 98
            echo "\t\t";
        } else {
            // line 99
            echo "\t\t\t<h5 class=\"text-center text-muted\">
\t\t\t\t<a href=\"#\" data-toggle=\"modal\" data-target=\"#newProyecto\">
\t\t\t\t\t<em><i class=\"fa fa-plus-circle\"></i>&nbsp;agregar proyectos</em>
\t\t\t\t</a>
\t\t\t</h5>
\t\t";
        }
        // line 105
        echo "\t";
    }

    // line 124
    public function block_modal_project($context, array $blocks = array())
    {
        // line 125
        echo "<!-- Modal Edit-->
<div class=\"modal fade\" id=\"editProyecto\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
  \t<div class=\"modal-dialog\">
\t    <div class=\"modal-content\">
\t      \t<div class=\"modal-header\">
\t        \t<button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
\t        \t<h4 class=\"modal-title\" id=\"myModalLabel\">Editar Proyectos</h4>
\t      \t</div>
\t      \t<div class=\"modal-body\">
\t        \t";
        // line 135
        echo "\t        \t";
        $this->displayBlock('edit_project', $context, $blocks);
        // line 138
        echo "\t  \t\t</div>
\t\t</div>
  \t</div>
</div>

<!-- Modal New-->
<div class=\"modal fade\" id=\"newProyecto\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
  \t<div class=\"modal-dialog\">
    \t<div class=\"modal-content\">
      \t\t<div class=\"modal-header\">
        \t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
        \t\t<h4 class=\"modal-title\" id=\"myModalLabel\">Nuevo Proyecto</h4>
      \t\t</div>
      \t\t<div class=\"modal-body\">
        \t\t";
        // line 153
        echo "\t        \t";
        $this->displayBlock('new_project', $context, $blocks);
        // line 156
        echo "     \t\t </div>
    \t</div>
  \t</div>
</div>

";
    }

    // line 135
    public function block_edit_project($context, array $blocks = array())
    {
        // line 136
        echo "\t\t        \t";
        $this->displayParentBlock("edit_project", $context, $blocks);
        echo "
\t        \t";
    }

    // line 153
    public function block_new_project($context, array $blocks = array())
    {
        // line 154
        echo "\t        \t";
        $this->displayParentBlock("new_project", $context, $blocks);
        echo "
\t        \t";
    }

    public function getTemplateName()
    {
        return "PCVDemoBundle:Show:proyectos.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  353 => 154,  350 => 153,  343 => 136,  340 => 135,  331 => 156,  328 => 153,  312 => 138,  309 => 135,  298 => 125,  295 => 124,  291 => 105,  283 => 99,  280 => 98,  273 => 96,  267 => 95,  261 => 91,  248 => 81,  241 => 77,  234 => 73,  217 => 58,  215 => 57,  206 => 53,  202 => 51,  196 => 48,  193 => 47,  191 => 46,  184 => 42,  179 => 40,  175 => 38,  171 => 36,  167 => 34,  165 => 33,  160 => 32,  154 => 30,  152 => 29,  149 => 28,  144 => 25,  140 => 23,  138 => 22,  133 => 21,  127 => 19,  125 => 18,  122 => 17,  120 => 16,  117 => 15,  115 => 14,  111 => 12,  108 => 11,  106 => 10,  100 => 9,  96 => 7,  91 => 6,  89 => 5,  86 => 4,  83 => 3,  64 => 106,  62 => 3,  56 => 1,  52 => 124,  48 => 122,  46 => 1,  21 => 152,  14 => 134,);
    }
}
