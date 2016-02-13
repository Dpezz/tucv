<?php

/* PCVDemoBundle:Plantillas:pagenav.html.twig */
class __TwigTemplate_b2dedd9ddce5443f4c9d589f4d7f73c0cdea9549fa44e664402423b5b4da9090 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->env->loadTemplate("PCVDemoBundle:Contenido:contenido.html.twig");
        // line 118
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."PCVDemoBundle:Contenido:contenido.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $_trait_1 = $this->env->loadTemplate("PCVDemoBundle:Contenido:contenido.html.twig");
        // line 123
        if (!$_trait_1->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."PCVDemoBundle:Contenido:contenido.html.twig".'" cannot be used as a trait.');
        }
        $_trait_1_blocks = $_trait_1->getBlocks();

        $_trait_2 = $this->env->loadTemplate("PCVDemoBundle:Contenido:contenido.html.twig");
        // line 179
        if (!$_trait_2->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."PCVDemoBundle:Contenido:contenido.html.twig".'" cannot be used as a trait.');
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
                'navbar' => array($this, 'block_navbar'),
                'modallogin' => array($this, 'block_modallogin'),
                'modalsignup' => array($this, 'block_modalsignup'),
                'send_email' => array($this, 'block_send_email'),
                'share_cv' => array($this, 'block_share_cv'),
                'select_share' => array($this, 'block_select_share'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('navbar', $context, $blocks);
        // line 145
        echo "
";
        // line 146
        $this->displayBlock('send_email', $context, $blocks);
        // line 165
        echo "



";
        // line 169
        $this->displayBlock('share_cv', $context, $blocks);
    }

    // line 1
    public function block_navbar($context, array $blocks = array())
    {
        // line 2
        echo "<script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/pcvdemo/js/jquery-1.10.2.min.js"), "html", null, true);
        echo "\"></script>    
  
<nav class=\"navbar navbar-default\" role=\"navigation\">
    <div class=\"container\">
        <div class=\"navbar-header\"
            <!-- Brand and toggle get grouped for better mobile display -->
            <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\">
                <span class=\"sr-only\">Toggle navigation</span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
            </button>
            <a class=\"navbar-brand blue-color\" href=\"";
        // line 14
        echo $this->env->getExtension('routing')->getPath("_private_resume_profile");
        echo "\">
               <img class=\"navbar-brand\" src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/pcvdemo/image/logo.png"), "html", null, true);
        echo "\">
            </a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->

    ";
        // line 21
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())) {
            // line 22
            echo "        <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
            <ul class=\"nav navbar-nav navbar-left\">
            ";
            // line 29
            echo "                <li id=\"eye\" data-toggle=\"tooltip\" data-placement=\"bottom\" title=\"Visitas\">
                    <a><i class=\"fa fa-eye fa-lg info\"></i> <span class=\"badge s\">";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "visitas", array()), "html", null, true);
            echo "</span></a>
                </li>
            </ul>
            <div class=\"col-xs-12 col-md-4\">
                <form action=\"";
            // line 34
            echo $this->env->getExtension('routing')->getPath("_search_private", array("page" => 0));
            echo "\" class=\"navbar-form navbar-left\" style=\"margin-top: 2px;\" role=\"search\" method=\"POST\">
                    <div class=\"input-group group-nav\">
                        <input type=\"text\" class=\"form-control\" name=\"_search\" placeholder=\"Buscar curriculum\">
                        <span class=\"input-group-btn\">
                            <button class=\"btn btn-default btn-info\" type=\"submit\" data-toggle=\"tooltip\" data-placement=\"bottom\" title=\"Buscar\"><i class=\"fa fa-search white\"></i></button>
                        </span>
                    </div>
                </form>
            </div>

            <ul class=\"nav navbar-nav navbar-right\">
                <li id=\"envelope\" data-toggle=\"tooltip\" data-placement=\"bottom\" title=\"Enviar\">
                    <a href=\"#\" data-toggle=\"modal\" data-target=\"#sendEmail\"><i class=\"fa fa-envelope fa-lg info\"></i></a>
                </li>
                <li id=\"share\" class=\"dropdown\" data-toggle=\"tooltip\" data-placement=\"bottom\" title=\"Compartir\">
                    <a href=\"#\" data-toggle=\"modal\" data-target=\"#share_cv\">
                        <i class=\"fa fa-share-alt fa-lg info\"></i>
                    </a>
                </li>
                <li id=\"edit\" data-toggle=\"tooltip\" data-placement=\"bottom\" title=\"Editar\">
                    <a href=\"";
            // line 54
            echo $this->env->getExtension('routing')->getPath("_private_resume_profile");
            echo "\">
                        <i class=\"fa fa-pencil fa-lg \"></i>
                    </a>
                </li>
                <li class=\"active dropdown\">
                    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                        ";
            // line 60
            if ( !twig_test_empty($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "imagenUrl", array()))) {
                // line 61
                echo "                            <img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(("img/profile/" . $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "imagenUrl", array()))), "html", null, true);
                echo "\" class=\"img-rounded\" width=\"35px\">
                        ";
            } else {
                // line 63
                echo "                            <img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/pcvdemo/image/noimagen.png"), "html", null, true);
                echo "\" class=\"img-rounded\" width=\"35px\">
                        ";
            }
            // line 65
            echo "                        ";
            echo twig_escape_filter($this->env, trim($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array())), "html", null, true);
            echo "
                        <b class=\"caret\"></b>
                    </a>
                    <ul class=\"dropdown-menu\">
                        <li>
                            <a href=\"";
            // line 70
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_private_resume_public", array("url" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "resumenUrl", array()))), "html", null, true);
            echo "\">
                                <i class=\"fa fa-file-text\"></i>&nbsp;Resumen Público
                            </a>
                        </li>
                        <li class=\"divider\"></li>
                        <li>
                            <a href=\"";
            // line 76
            echo $this->env->getExtension('routing')->getPath("_private_secured_account");
            echo "\">
                                <i class=\"fa fa-gears\"></i>&nbsp;Cuenta
                            </a>
                        </li>
                        <li>
                            <a href=\"";
            // line 81
            echo $this->env->getExtension('routing')->getPath("_private_secured_password");
            echo "\">
                                <i class=\"fa fa-key\"></i>&nbsp;Contraseña
                            </a>
                        </li>
                        <li class=\"divider\"></li>
                        <li>
                            <a href=\"";
            // line 87
            echo $this->env->getExtension('routing')->getPath("_demo_logout");
            echo "\">
                                <i class=\"fa fa-sign-out\"></i>&nbsp;Cerrar
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    ";
        } else {
            // line 96
            echo "        <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
            <ul class=\"nav navbar-nav \">
                <li><a href=\"";
            // line 98
            echo $this->env->getExtension('routing')->getPath("_demo_login");
            echo "\">Inicio</a></li>
                <li><a href=\"";
            // line 99
            echo $this->env->getExtension('routing')->getPath("_demo_login");
            echo "#features\">Caracteristicas</a></li>
                <li><a href=\"";
            // line 100
            echo $this->env->getExtension('routing')->getPath("_demo_login");
            echo "#about\">Nosotros</a></li>
            </ul>
            <div class=\"col-md-4\">
                <form action=\"";
            // line 103
            echo $this->env->getExtension('routing')->getPath("_search_public", array("page" => 0));
            echo "\" class=\"navbar-form navbar-left\" style=\"margin-top: 2px;\" role=\"search\" method=\"POST\">
                    <div class=\"input-group group-nav\">
                        <input type=\"text\" class=\"form-control\" name=\"_search\" placeholder=\"Buscar curriculum\">
                        <span class=\"input-group-btn\">
                            <button class=\"btn btn-default btn-info\" type=\"submit\" data-toggle=\"tooltip\" data-placement=\"bottom\" title=\"Buscar\"><i class=\"fa fa-search white\"></i></button>
                        </span>
                    </div>
                </form>
            </div>
            <ul class=\"nav navbar-nav pull-right\">
                <a class=\"btn btn-link\" type=\"button\" href=\"#\" data-toggle=\"modal\" data-target=\"#login\">Iniciar sesión</a>
                <a type=\"button\" class=\"btn btn-info navbar-btn\" href=\"#\" data-toggle=\"modal\" data-target=\"#signup\">Regístrate</a>
            </ul>
        </div>

        ";
            // line 119
            echo "        ";
            $this->displayBlock('modallogin', $context, $blocks);
            // line 122
            echo "
        ";
            // line 124
            echo "        ";
            $this->displayBlock('modalsignup', $context, $blocks);
            // line 127
            echo "
    ";
        }
        // line 129
        echo "




    </div><!-- end_container-->
</nav>
<!-- Modal -->
 
<script src=\"";
        // line 138
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/pcvdemo/js/bootstrap/tooltip.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\">

\$('#eye,#envelope,#share,#empleo,#download,#edit').tooltip();
\$('#btn_search').tooltip();
</script>
";
    }

    // line 119
    public function block_modallogin($context, array $blocks = array())
    {
        // line 120
        echo "            ";
        $this->displayParentBlock("modallogin", $context, $blocks);
        echo "
        ";
    }

    // line 124
    public function block_modalsignup($context, array $blocks = array())
    {
        // line 125
        echo "            ";
        $this->displayParentBlock("modalsignup", $context, $blocks);
        echo "
        ";
    }

    // line 146
    public function block_send_email($context, array $blocks = array())
    {
        // line 147
        echo "<div class=\"modal fade\" id=\"sendEmail\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
  <div class=\"modal-dialog\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
        <h4 class=\"modal-title\" id=\"myModalLabel\"><i class=\"fa fa-share-square-o\"></i>&nbsp;Enviar Currículum</h4>
      </div>
      <div class=\"modal-body\">
        ";
        // line 155
        $this->env->loadTemplate("PCVDemoBundle:Plantillas:pagenav.html.twig", "1987272796")->display($context);
        // line 160
        echo "      </div>
    </div>
  </div>
</div>
";
    }

    // line 169
    public function block_share_cv($context, array $blocks = array())
    {
        // line 170
        echo "<!-- Modal Download CV -->
<div class=\"modal fade\" id=\"share_cv\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
  <div class=\"modal-dialog\">
    <div class=\"modal-content\">
        <div class=\"modal-header\">
            <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
            <h4 class=\"modal-title\" id=\"myModalLabel\"><i class=\"fa fa-share-alt\"></i>&nbsp;Compartir Curriculum</h4>
        </div>
      <div class=\"modal-body\">
        ";
        // line 180
        echo "        ";
        $this->displayBlock('select_share', $context, $blocks);
        // line 183
        echo "      </div>
    </div>
  </div>
</div>
";
    }

    // line 180
    public function block_select_share($context, array $blocks = array())
    {
        // line 181
        echo "            ";
        $this->displayParentBlock("select_share", $context, $blocks);
        echo "
        ";
    }

    public function getTemplateName()
    {
        return "PCVDemoBundle:Plantillas:pagenav.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  355 => 181,  352 => 180,  344 => 183,  341 => 180,  330 => 170,  327 => 169,  319 => 160,  317 => 155,  307 => 147,  304 => 146,  297 => 125,  294 => 124,  287 => 120,  284 => 119,  273 => 138,  262 => 129,  258 => 127,  255 => 124,  252 => 122,  249 => 119,  231 => 103,  225 => 100,  221 => 99,  217 => 98,  213 => 96,  201 => 87,  192 => 81,  184 => 76,  175 => 70,  166 => 65,  160 => 63,  154 => 61,  152 => 60,  143 => 54,  120 => 34,  113 => 30,  110 => 29,  106 => 22,  104 => 21,  95 => 15,  91 => 14,  75 => 2,  72 => 1,  68 => 169,  62 => 165,  60 => 146,  57 => 145,  55 => 1,  28 => 179,  21 => 123,  14 => 118,);
    }
}


/* PCVDemoBundle:Plantillas:pagenav.html.twig */
class __TwigTemplate_b2dedd9ddce5443f4c9d589f4d7f73c0cdea9549fa44e664402423b5b4da9090_1987272796 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 155
        try {
            $this->parent = $this->env->loadTemplate("PCVDemoBundle:Edit:sendEmail.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(155);

            throw $e;
        }

        $this->blocks = array(
            'send_email' => array($this, 'block_send_email'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "PCVDemoBundle:Edit:sendEmail.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 156
    public function block_send_email($context, array $blocks = array())
    {
        // line 157
        echo "        ";
        $this->displayParentBlock("send_email", $context, $blocks);
        echo "
        ";
    }

    public function getTemplateName()
    {
        return "PCVDemoBundle:Plantillas:pagenav.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  409 => 157,  406 => 156,  381 => 155,  355 => 181,  352 => 180,  344 => 183,  341 => 180,  330 => 170,  327 => 169,  319 => 160,  317 => 155,  307 => 147,  304 => 146,  297 => 125,  294 => 124,  287 => 120,  284 => 119,  273 => 138,  262 => 129,  258 => 127,  255 => 124,  252 => 122,  249 => 119,  231 => 103,  225 => 100,  221 => 99,  217 => 98,  213 => 96,  201 => 87,  192 => 81,  184 => 76,  175 => 70,  166 => 65,  160 => 63,  154 => 61,  152 => 60,  143 => 54,  120 => 34,  113 => 30,  110 => 29,  106 => 22,  104 => 21,  95 => 15,  91 => 14,  75 => 2,  72 => 1,  68 => 169,  62 => 165,  60 => 146,  57 => 145,  55 => 1,  28 => 179,  21 => 123,  14 => 118,);
    }
}
