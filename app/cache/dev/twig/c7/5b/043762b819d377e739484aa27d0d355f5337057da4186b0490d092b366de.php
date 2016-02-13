<?php

/* PCVDemoBundle:Resumen:resumen.html.twig */
class __TwigTemplate_c75b043762b819d377e739484aa27d0d355f5337057da4186b0490d092b366de extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("PCVDemoBundle:Plantillas:page.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(1);

            throw $e;
        }

        $_trait_0 = $this->env->loadTemplate("PCVDemoBundle:Show:experiencia.html.twig");
        // line 62
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."PCVDemoBundle:Show:experiencia.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $_trait_1 = $this->env->loadTemplate("PCVDemoBundle:Contenido:contenido.html.twig");
        // line 175
        if (!$_trait_1->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."PCVDemoBundle:Contenido:contenido.html.twig".'" cannot be used as a trait.');
        }
        $_trait_1_blocks = $_trait_1->getBlocks();

        $this->traits = array_merge(
            $_trait_0_blocks,
            $_trait_1_blocks
        );

        $this->blocks = array_merge(
            $this->traits,
            array(
                'title' => array($this, 'block_title'),
                'navbar' => array($this, 'block_navbar'),
                'contenido' => array($this, 'block_contenido'),
                'experience_private' => array($this, 'block_experience_private'),
                'modal_experience' => array($this, 'block_modal_experience'),
                'education_private' => array($this, 'block_education_private'),
                'modal_education' => array($this, 'block_modal_education'),
                'knowing_private' => array($this, 'block_knowing_private'),
                'modal_knowing' => array($this, 'block_modal_knowing'),
                'ability_private' => array($this, 'block_ability_private'),
                'modal_ability' => array($this, 'block_modal_ability'),
                'premios_private' => array($this, 'block_premios_private'),
                'modal_premios' => array($this, 'block_modal_premios'),
                'certificaciones_private' => array($this, 'block_certificaciones_private'),
                'modal_certificaciones' => array($this, 'block_modal_certificaciones'),
                'project_private' => array($this, 'block_project_private'),
                'modal_project' => array($this, 'block_modal_project'),
                'footer_page' => array($this, 'block_footer_page'),
                'footer' => array($this, 'block_footer'),
            )
        );
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "PCVDemoBundle:Plantillas:page.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["datosU"]) ? $context["datosU"] : $this->getContext($context, "datosU")), "name", array()), "html", null, true);
    }

    // line 4
    public function block_navbar($context, array $blocks = array())
    {
        // line 5
        echo "\t";
        $this->env->loadTemplate("PCVDemoBundle:Resumen:resumen.html.twig", "1139467312")->display($context);
    }

    // line 12
    public function block_contenido($context, array $blocks = array())
    {
        // line 13
        echo "<div class=\"jumbotron wrapper\" style=\"background-color:#f5f5f5\">
\t<div class=\"container wrapper\">
\t";
        // line 15
        $this->env->loadTemplate("PCVDemoBundle:Resumen:resumen.html.twig", "1752690492")->display($context);
        // line 20
        echo "\t</div>
</div>

<div class=\"jumbotron\" style=\"background-color:#fff\">
\t<div class=\"container\">
\t\t<div class=\"page-header\" style=\"border-bottom-color:#ddd\">
          <h3 class=\"text-muted\"><i class=\"fa fa-align-center muted\"></i>&nbsp;Resumen</h3>
        </div>

\t\t";
        // line 29
        $this->env->loadTemplate("PCVDemoBundle:Resumen:resumen.html.twig", "890779368")->display($context);
        // line 35
        echo "\t</div>
</div>


<div class=\"jumbotron\" style=\"background-color:#f5f5f5\">
\t<div class=\"container\">
\t\t<div class=\"page-header\" style=\"border-bottom-color:#ddd\">
          <h3 class=\"text-muted\"><i class=\"fa fa-user muted\"></i>&nbsp;Datos Personales</h3>
        </div>

\t\t";
        // line 45
        $this->env->loadTemplate("PCVDemoBundle:Resumen:resumen.html.twig", "1363012110")->display($context);
        // line 51
        echo "\t</div>
</div>

<div class=\"jumbotron\" style=\"background-color:#fff\">
\t
\t<div class=\"container\">
\t\t<div class=\"page-header\">
          <h3 class=\"text-muted\"><i class=\"fa fa-briefcase muted\"></i>&nbsp;Experiencia</h3>
        </div>

\t\t";
        // line 61
        $this->displayBlock('experience_private', $context, $blocks);
        // line 65
        echo "\t\t";
        $this->displayBlock('modal_experience', $context, $blocks);
        // line 66
        echo "\t</div>



\t<div class=\"container\">
\t\t<div class=\"page-header\">
          <h3 class=\"text-muted\"><i class=\"fa fa-book muted\"></i>&nbsp;Educación</h3>
        </div>

\t\t";
        // line 75
        $this->displayBlock('education_private', $context, $blocks);
        // line 79
        echo "\t\t";
        $this->displayBlock('modal_education', $context, $blocks);
        // line 80
        echo "\t</div>

</div>

<div class=\"jumbotron\" style=\"background-color:#f5f5f5\">
\t<div class=\"container\">
\t\t
\t\t<div class=\"page-header\" style=\"border-bottom-color:#ddd\">
          \t<h3 class=\"text-muted\"><i class=\"fa fa-language muted\"></i>&nbsp;Idiomas</h3>
        </div>
\t\t";
        // line 90
        $this->env->loadTemplate("PCVDemoBundle:Resumen:resumen.html.twig", "1689165232")->display($context);
        // line 96
        echo "\t\t

\t\t
\t\t<div class=\"page-header\" style=\"border-bottom-color:#ddd\">
          \t<h3 class=\"text-muted\"><i class=\"fa fa-lightbulb-o muted\"></i>&nbsp;Conocimientos</h3>
        </div>
\t\t";
        // line 102
        $this->displayBlock('knowing_private', $context, $blocks);
        // line 106
        echo "\t\t";
        $this->displayBlock('modal_knowing', $context, $blocks);
        // line 107
        echo "


\t\t<div class=\"page-header\" style=\"border-bottom-color:#ddd\">
          \t<h3 class=\"text-muted\"><i class=\"fa fa-star muted\"></i>&nbsp;Competencias</h3>
        </div>
\t\t";
        // line 113
        $this->displayBlock('ability_private', $context, $blocks);
        // line 117
        echo "\t\t";
        $this->displayBlock('modal_ability', $context, $blocks);
        // line 118
        echo "\t\t

\t</div>
</div>

<div class=\"jumbotron\" style=\"background-color:#fff\">

\t<div class=\"container\">
\t\t<div class=\"page-header\">
          <h3 class=\"text-muted\"><i class=\"fa fa-trophy muted\"></i>&nbsp;Reconocimientos y Premios</h3>
        </div>

\t\t";
        // line 130
        $this->displayBlock('premios_private', $context, $blocks);
        // line 134
        echo "\t\t";
        $this->displayBlock('modal_premios', $context, $blocks);
        // line 135
        echo "\t</div>
</div>

<div class=\"jumbotron\" style=\"background-color:#f5f5f5\">
\t<div class=\"container\">
\t\t<div class=\"page-header\">
          <h3 class=\"text-muted\"><i class=\"fa fa-file-text muted\"></i>&nbsp;Certificaciones</h3>
        </div>

\t\t";
        // line 144
        $this->displayBlock('certificaciones_private', $context, $blocks);
        // line 148
        echo "\t\t";
        $this->displayBlock('modal_certificaciones', $context, $blocks);
        // line 149
        echo "\t</div>

</div>


<div class=\"jumbotron\" style=\"background-color:#fff\">
\t<div class=\"container\">
\t\t<div class=\"page-header\" style=\"border-bottom-color:#ddd\">
          <h3 class=\"text-muted\"><i class=\"fa fa-folder muted\"></i>&nbsp;Portafolio</h3>
        </div>
        
\t\t";
        // line 160
        $this->displayBlock('project_private', $context, $blocks);
        // line 164
        echo "\t\t";
        $this->displayBlock('modal_project', $context, $blocks);
        // line 165
        echo "\t</div>
</div>


";
    }

    // line 61
    public function block_experience_private($context, array $blocks = array())
    {
        // line 62
        echo "\t\t";
        // line 63
        echo "\t\t\t";
        $this->displayParentBlock("experience_private", $context, $blocks);
        echo "
\t\t";
    }

    // line 65
    public function block_modal_experience($context, array $blocks = array())
    {
        $this->displayParentBlock("modal_experience", $context, $blocks);
    }

    // line 75
    public function block_education_private($context, array $blocks = array())
    {
        // line 76
        echo "\t\t";
        $this->env->loadTemplate("PCVDemoBundle:Show:educacion.html.twig")->display($context);
        // line 77
        echo "\t\t\t";
        $this->displayParentBlock("education_private", $context, $blocks);
        echo "
\t\t";
    }

    // line 79
    public function block_modal_education($context, array $blocks = array())
    {
        $this->displayParentBlock("modal_education", $context, $blocks);
    }

    // line 102
    public function block_knowing_private($context, array $blocks = array())
    {
        // line 103
        echo "\t\t\t";
        $this->env->loadTemplate("PCVDemoBundle:Show:conocimientos.html.twig")->display($context);
        // line 104
        echo "\t\t\t";
        $this->displayParentBlock("knowing_private", $context, $blocks);
        echo "
\t\t";
    }

    // line 106
    public function block_modal_knowing($context, array $blocks = array())
    {
        $this->displayParentBlock("modal_knowing", $context, $blocks);
    }

    // line 113
    public function block_ability_private($context, array $blocks = array())
    {
        // line 114
        echo "\t\t\t";
        $this->env->loadTemplate("PCVDemoBundle:Show:habilidades.html.twig")->display($context);
        // line 115
        echo "\t\t\t";
        $this->displayParentBlock("ability_private", $context, $blocks);
        echo "
\t\t";
    }

    // line 117
    public function block_modal_ability($context, array $blocks = array())
    {
        $this->displayParentBlock("modal_ability", $context, $blocks);
    }

    // line 130
    public function block_premios_private($context, array $blocks = array())
    {
        // line 131
        echo "\t\t\t";
        $this->env->loadTemplate("PCVDemoBundle:Show:premios.html.twig")->display($context);
        // line 132
        echo "\t\t\t";
        $this->displayParentBlock("premios_private", $context, $blocks);
        echo "
\t\t";
    }

    // line 134
    public function block_modal_premios($context, array $blocks = array())
    {
        $this->displayParentBlock("modal_premios", $context, $blocks);
    }

    // line 144
    public function block_certificaciones_private($context, array $blocks = array())
    {
        // line 145
        echo "\t\t";
        $this->env->loadTemplate("PCVDemoBundle:Show:certificaciones.html.twig")->display($context);
        // line 146
        echo "\t\t\t";
        $this->displayParentBlock("certificaciones_private", $context, $blocks);
        echo "
\t\t";
    }

    // line 148
    public function block_modal_certificaciones($context, array $blocks = array())
    {
        $this->displayParentBlock("modal_certificaciones", $context, $blocks);
    }

    // line 160
    public function block_project_private($context, array $blocks = array())
    {
        // line 161
        echo "\t\t";
        $this->env->loadTemplate("PCVDemoBundle:Show:proyectos.html.twig")->display($context);
        // line 162
        echo "\t\t\t";
        $this->displayParentBlock("project_private", $context, $blocks);
        echo "
\t\t";
    }

    // line 164
    public function block_modal_project($context, array $blocks = array())
    {
        $this->displayParentBlock("modal_project", $context, $blocks);
    }

    // line 173
    public function block_footer_page($context, array $blocks = array())
    {
        // line 174
        echo "    <!-- mostramos el texto de cabecera  -->
    ";
        // line 176
        echo "    ";
        $this->displayBlock('footer', $context, $blocks);
        // line 179
        echo "    <!-- end embed -->
";
    }

    // line 176
    public function block_footer($context, array $blocks = array())
    {
        // line 177
        echo "        ";
        $this->displayParentBlock("footer", $context, $blocks);
        echo "
    ";
    }

    public function getTemplateName()
    {
        return "PCVDemoBundle:Resumen:resumen.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  410 => 177,  407 => 176,  402 => 179,  399 => 176,  396 => 174,  393 => 173,  387 => 164,  380 => 162,  377 => 161,  374 => 160,  368 => 148,  361 => 146,  358 => 145,  355 => 144,  349 => 134,  342 => 132,  339 => 131,  336 => 130,  330 => 117,  323 => 115,  320 => 114,  317 => 113,  311 => 106,  304 => 104,  301 => 103,  298 => 102,  292 => 79,  285 => 77,  282 => 76,  279 => 75,  273 => 65,  266 => 63,  264 => 62,  261 => 61,  253 => 165,  250 => 164,  248 => 160,  235 => 149,  232 => 148,  230 => 144,  219 => 135,  216 => 134,  214 => 130,  200 => 118,  197 => 117,  195 => 113,  187 => 107,  184 => 106,  182 => 102,  174 => 96,  172 => 90,  160 => 80,  157 => 79,  155 => 75,  144 => 66,  141 => 65,  139 => 61,  127 => 51,  125 => 45,  113 => 35,  111 => 29,  100 => 20,  98 => 15,  94 => 13,  91 => 12,  86 => 5,  83 => 4,  77 => 2,  68 => 1,  29 => 175,  22 => 62,  11 => 1,);
    }
}


/* PCVDemoBundle:Resumen:resumen.html.twig */
class __TwigTemplate_c75b043762b819d377e739484aa27d0d355f5337057da4186b0490d092b366de_1139467312 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 5
        try {
            $this->parent = $this->env->loadTemplate("PCVDemoBundle:Plantillas:pagenav.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(5);

            throw $e;
        }

        $this->blocks = array(
            'navbar' => array($this, 'block_navbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "PCVDemoBundle:Plantillas:pagenav.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 6
    public function block_navbar($context, array $blocks = array())
    {
        // line 7
        echo "\t\t\t";
        $this->displayParentBlock("navbar", $context, $blocks);
        echo "
\t\t";
    }

    public function getTemplateName()
    {
        return "PCVDemoBundle:Resumen:resumen.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  469 => 7,  466 => 6,  441 => 5,  410 => 177,  407 => 176,  402 => 179,  399 => 176,  396 => 174,  393 => 173,  387 => 164,  380 => 162,  377 => 161,  374 => 160,  368 => 148,  361 => 146,  358 => 145,  355 => 144,  349 => 134,  342 => 132,  339 => 131,  336 => 130,  330 => 117,  323 => 115,  320 => 114,  317 => 113,  311 => 106,  304 => 104,  301 => 103,  298 => 102,  292 => 79,  285 => 77,  282 => 76,  279 => 75,  273 => 65,  266 => 63,  264 => 62,  261 => 61,  253 => 165,  250 => 164,  248 => 160,  235 => 149,  232 => 148,  230 => 144,  219 => 135,  216 => 134,  214 => 130,  200 => 118,  197 => 117,  195 => 113,  187 => 107,  184 => 106,  182 => 102,  174 => 96,  172 => 90,  160 => 80,  157 => 79,  155 => 75,  144 => 66,  141 => 65,  139 => 61,  127 => 51,  125 => 45,  113 => 35,  111 => 29,  100 => 20,  98 => 15,  94 => 13,  91 => 12,  86 => 5,  83 => 4,  77 => 2,  68 => 1,  29 => 175,  22 => 62,  11 => 1,);
    }
}


/* PCVDemoBundle:Resumen:resumen.html.twig */
class __TwigTemplate_c75b043762b819d377e739484aa27d0d355f5337057da4186b0490d092b366de_1752690492 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 15
        try {
            $this->parent = $this->env->loadTemplate("PCVDemoBundle:Show:portada.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(15);

            throw $e;
        }

        $this->blocks = array(
            'portada_private' => array($this, 'block_portada_private'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "PCVDemoBundle:Show:portada.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 16
    public function block_portada_private($context, array $blocks = array())
    {
        // line 17
        echo "\t\t\t";
        $this->displayParentBlock("portada_private", $context, $blocks);
        echo "
\t\t";
    }

    public function getTemplateName()
    {
        return "PCVDemoBundle:Resumen:resumen.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  528 => 17,  525 => 16,  500 => 15,  469 => 7,  466 => 6,  441 => 5,  410 => 177,  407 => 176,  402 => 179,  399 => 176,  396 => 174,  393 => 173,  387 => 164,  380 => 162,  377 => 161,  374 => 160,  368 => 148,  361 => 146,  358 => 145,  355 => 144,  349 => 134,  342 => 132,  339 => 131,  336 => 130,  330 => 117,  323 => 115,  320 => 114,  317 => 113,  311 => 106,  304 => 104,  301 => 103,  298 => 102,  292 => 79,  285 => 77,  282 => 76,  279 => 75,  273 => 65,  266 => 63,  264 => 62,  261 => 61,  253 => 165,  250 => 164,  248 => 160,  235 => 149,  232 => 148,  230 => 144,  219 => 135,  216 => 134,  214 => 130,  200 => 118,  197 => 117,  195 => 113,  187 => 107,  184 => 106,  182 => 102,  174 => 96,  172 => 90,  160 => 80,  157 => 79,  155 => 75,  144 => 66,  141 => 65,  139 => 61,  127 => 51,  125 => 45,  113 => 35,  111 => 29,  100 => 20,  98 => 15,  94 => 13,  91 => 12,  86 => 5,  83 => 4,  77 => 2,  68 => 1,  29 => 175,  22 => 62,  11 => 1,);
    }
}


/* PCVDemoBundle:Resumen:resumen.html.twig */
class __TwigTemplate_c75b043762b819d377e739484aa27d0d355f5337057da4186b0490d092b366de_890779368 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 29
        try {
            $this->parent = $this->env->loadTemplate("PCVDemoBundle:Show:bio.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(29);

            throw $e;
        }

        $this->blocks = array(
            'bio_private' => array($this, 'block_bio_private'),
            'modal_bio' => array($this, 'block_modal_bio'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "PCVDemoBundle:Show:bio.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 30
    public function block_bio_private($context, array $blocks = array())
    {
        // line 31
        echo "\t\t\t\t";
        $this->displayParentBlock("bio_private", $context, $blocks);
        echo "
\t\t\t";
    }

    // line 33
    public function block_modal_bio($context, array $blocks = array())
    {
        $this->displayParentBlock("modal_bio", $context, $blocks);
    }

    public function getTemplateName()
    {
        return "PCVDemoBundle:Resumen:resumen.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  595 => 33,  588 => 31,  585 => 30,  559 => 29,  528 => 17,  525 => 16,  500 => 15,  469 => 7,  466 => 6,  441 => 5,  410 => 177,  407 => 176,  402 => 179,  399 => 176,  396 => 174,  393 => 173,  387 => 164,  380 => 162,  377 => 161,  374 => 160,  368 => 148,  361 => 146,  358 => 145,  355 => 144,  349 => 134,  342 => 132,  339 => 131,  336 => 130,  330 => 117,  323 => 115,  320 => 114,  317 => 113,  311 => 106,  304 => 104,  301 => 103,  298 => 102,  292 => 79,  285 => 77,  282 => 76,  279 => 75,  273 => 65,  266 => 63,  264 => 62,  261 => 61,  253 => 165,  250 => 164,  248 => 160,  235 => 149,  232 => 148,  230 => 144,  219 => 135,  216 => 134,  214 => 130,  200 => 118,  197 => 117,  195 => 113,  187 => 107,  184 => 106,  182 => 102,  174 => 96,  172 => 90,  160 => 80,  157 => 79,  155 => 75,  144 => 66,  141 => 65,  139 => 61,  127 => 51,  125 => 45,  113 => 35,  111 => 29,  100 => 20,  98 => 15,  94 => 13,  91 => 12,  86 => 5,  83 => 4,  77 => 2,  68 => 1,  29 => 175,  22 => 62,  11 => 1,);
    }
}


/* PCVDemoBundle:Resumen:resumen.html.twig */
class __TwigTemplate_c75b043762b819d377e739484aa27d0d355f5337057da4186b0490d092b366de_1363012110 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 45
        try {
            $this->parent = $this->env->loadTemplate("PCVDemoBundle:Show:datos.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(45);

            throw $e;
        }

        $this->blocks = array(
            'data_private' => array($this, 'block_data_private'),
            'modal_data' => array($this, 'block_modal_data'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "PCVDemoBundle:Show:datos.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 46
    public function block_data_private($context, array $blocks = array())
    {
        // line 47
        echo "\t\t\t\t";
        $this->displayParentBlock("data_private", $context, $blocks);
        echo "
\t\t\t";
    }

    // line 49
    public function block_modal_data($context, array $blocks = array())
    {
        $this->displayParentBlock("modal_data", $context, $blocks);
    }

    public function getTemplateName()
    {
        return "PCVDemoBundle:Resumen:resumen.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  661 => 49,  654 => 47,  651 => 46,  625 => 45,  595 => 33,  588 => 31,  585 => 30,  559 => 29,  528 => 17,  525 => 16,  500 => 15,  469 => 7,  466 => 6,  441 => 5,  410 => 177,  407 => 176,  402 => 179,  399 => 176,  396 => 174,  393 => 173,  387 => 164,  380 => 162,  377 => 161,  374 => 160,  368 => 148,  361 => 146,  358 => 145,  355 => 144,  349 => 134,  342 => 132,  339 => 131,  336 => 130,  330 => 117,  323 => 115,  320 => 114,  317 => 113,  311 => 106,  304 => 104,  301 => 103,  298 => 102,  292 => 79,  285 => 77,  282 => 76,  279 => 75,  273 => 65,  266 => 63,  264 => 62,  261 => 61,  253 => 165,  250 => 164,  248 => 160,  235 => 149,  232 => 148,  230 => 144,  219 => 135,  216 => 134,  214 => 130,  200 => 118,  197 => 117,  195 => 113,  187 => 107,  184 => 106,  182 => 102,  174 => 96,  172 => 90,  160 => 80,  157 => 79,  155 => 75,  144 => 66,  141 => 65,  139 => 61,  127 => 51,  125 => 45,  113 => 35,  111 => 29,  100 => 20,  98 => 15,  94 => 13,  91 => 12,  86 => 5,  83 => 4,  77 => 2,  68 => 1,  29 => 175,  22 => 62,  11 => 1,);
    }
}


/* PCVDemoBundle:Resumen:resumen.html.twig */
class __TwigTemplate_c75b043762b819d377e739484aa27d0d355f5337057da4186b0490d092b366de_1689165232 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 90
        try {
            $this->parent = $this->env->loadTemplate("PCVDemoBundle:Show:idiomas.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(90);

            throw $e;
        }

        $this->blocks = array(
            'idiom_private' => array($this, 'block_idiom_private'),
            'modal_idiom' => array($this, 'block_modal_idiom'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "PCVDemoBundle:Show:idiomas.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 91
    public function block_idiom_private($context, array $blocks = array())
    {
        // line 92
        echo "\t\t\t\t";
        $this->displayParentBlock("idiom_private", $context, $blocks);
        echo "
\t\t\t";
    }

    // line 94
    public function block_modal_idiom($context, array $blocks = array())
    {
        $this->displayParentBlock("modal_idiom", $context, $blocks);
    }

    public function getTemplateName()
    {
        return "PCVDemoBundle:Resumen:resumen.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  727 => 94,  720 => 92,  717 => 91,  691 => 90,  661 => 49,  654 => 47,  651 => 46,  625 => 45,  595 => 33,  588 => 31,  585 => 30,  559 => 29,  528 => 17,  525 => 16,  500 => 15,  469 => 7,  466 => 6,  441 => 5,  410 => 177,  407 => 176,  402 => 179,  399 => 176,  396 => 174,  393 => 173,  387 => 164,  380 => 162,  377 => 161,  374 => 160,  368 => 148,  361 => 146,  358 => 145,  355 => 144,  349 => 134,  342 => 132,  339 => 131,  336 => 130,  330 => 117,  323 => 115,  320 => 114,  317 => 113,  311 => 106,  304 => 104,  301 => 103,  298 => 102,  292 => 79,  285 => 77,  282 => 76,  279 => 75,  273 => 65,  266 => 63,  264 => 62,  261 => 61,  253 => 165,  250 => 164,  248 => 160,  235 => 149,  232 => 148,  230 => 144,  219 => 135,  216 => 134,  214 => 130,  200 => 118,  197 => 117,  195 => 113,  187 => 107,  184 => 106,  182 => 102,  174 => 96,  172 => 90,  160 => 80,  157 => 79,  155 => 75,  144 => 66,  141 => 65,  139 => 61,  127 => 51,  125 => 45,  113 => 35,  111 => 29,  100 => 20,  98 => 15,  94 => 13,  91 => 12,  86 => 5,  83 => 4,  77 => 2,  68 => 1,  29 => 175,  22 => 62,  11 => 1,);
    }
}
