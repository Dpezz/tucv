<?php

/* PCVDemoBundle:Home:home.html.twig */
class __TwigTemplate_ad1bfe6703ee61688398778cef30e19205afe3b1457fa61aec1b77bddb8e04c2 extends Twig_Template
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

        $_trait_0 = $this->env->loadTemplate("PCVDemoBundle:Contenido:contenido.html.twig");
        // line 24
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."PCVDemoBundle:Contenido:contenido.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $_trait_1 = $this->env->loadTemplate("PCVDemoBundle:Contenido:contenido.html.twig");
        // line 35
        if (!$_trait_1->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."PCVDemoBundle:Contenido:contenido.html.twig".'" cannot be used as a trait.');
        }
        $_trait_1_blocks = $_trait_1->getBlocks();

        $_trait_2 = $this->env->loadTemplate("PCVDemoBundle:Contenido:contenido.html.twig");
        // line 46
        if (!$_trait_2->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."PCVDemoBundle:Contenido:contenido.html.twig".'" cannot be used as a trait.');
        }
        $_trait_2_blocks = $_trait_2->getBlocks();

        $_trait_3 = $this->env->loadTemplate("PCVDemoBundle:Contenido:contenido.html.twig");
        // line 63
        if (!$_trait_3->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."PCVDemoBundle:Contenido:contenido.html.twig".'" cannot be used as a trait.');
        }
        $_trait_3_blocks = $_trait_3->getBlocks();

        $_trait_4 = $this->env->loadTemplate("PCVDemoBundle:Contenido:contenido.html.twig");
        // line 69
        if (!$_trait_4->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."PCVDemoBundle:Contenido:contenido.html.twig".'" cannot be used as a trait.');
        }
        $_trait_4_blocks = $_trait_4->getBlocks();

        $_trait_5 = $this->env->loadTemplate("PCVDemoBundle:Contenido:contenido.html.twig");
        // line 75
        if (!$_trait_5->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."PCVDemoBundle:Contenido:contenido.html.twig".'" cannot be used as a trait.');
        }
        $_trait_5_blocks = $_trait_5->getBlocks();

        $this->traits = array_merge(
            $_trait_0_blocks,
            $_trait_1_blocks,
            $_trait_2_blocks,
            $_trait_3_blocks,
            $_trait_4_blocks,
            $_trait_5_blocks
        );

        $this->blocks = array_merge(
            $this->traits,
            array(
                'title' => array($this, 'block_title'),
                'javascripts' => array($this, 'block_javascripts'),
                'navbar' => array($this, 'block_navbar'),
                'contenido' => array($this, 'block_contenido'),
                'home' => array($this, 'block_home'),
                'features' => array($this, 'block_features'),
                'about' => array($this, 'block_about'),
                'footer' => array($this, 'block_footer'),
                'modallogin' => array($this, 'block_modallogin'),
                'modalsignup' => array($this, 'block_modalsignup'),
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

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "tucv - Únete y sé parte del cambio";
    }

    // line 5
    public function block_javascripts($context, array $blocks = array())
    {
        // line 6
        echo "  ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

";
    }

    // line 11
    public function block_navbar($context, array $blocks = array())
    {
        // line 12
        echo "  ";
        $this->env->loadTemplate("PCVDemoBundle:Home:home.html.twig", "166580092")->display($context);
    }

    // line 20
    public function block_contenido($context, array $blocks = array())
    {
        // line 21
        echo "
  <div class=\"jumbotron\" style=\"background: url('";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/pcvdemo/image/home.png"), "html", null, true);
        echo "'); width:100%\">
    <br>
      ";
        // line 25
        echo "      ";
        $this->displayBlock('home', $context, $blocks);
        // line 28
        echo "    <br>
  </div>



  <div id=\"features\" class=\"jumbotron\" style=\"background-color:#f5f5f5\">

    ";
        // line 36
        echo "    ";
        $this->displayBlock('features', $context, $blocks);
        // line 39
        echo "
  </div>



  <div id=\"about\" class=\"jumbotron\" style=\"background-color:#fff\">

    ";
        // line 47
        echo "    ";
        $this->displayBlock('about', $context, $blocks);
        // line 50
        echo "
  </div>


";
        // line 62
        echo "
  ";
        // line 64
        echo "  ";
        $this->displayBlock('footer', $context, $blocks);
        // line 67
        echo "

  ";
        // line 70
        echo "  ";
        $this->displayBlock('modallogin', $context, $blocks);
        // line 73
        echo "

  ";
        // line 76
        echo "  ";
        $this->displayBlock('modalsignup', $context, $blocks);
        // line 79
        echo "
";
    }

    // line 25
    public function block_home($context, array $blocks = array())
    {
        // line 26
        echo "        ";
        $this->displayParentBlock("home", $context, $blocks);
        echo "
      ";
    }

    // line 36
    public function block_features($context, array $blocks = array())
    {
        // line 37
        echo "        ";
        $this->displayParentBlock("features", $context, $blocks);
        echo "
    ";
    }

    // line 47
    public function block_about($context, array $blocks = array())
    {
        // line 48
        echo "        ";
        $this->displayParentBlock("about", $context, $blocks);
        echo "
    ";
    }

    // line 64
    public function block_footer($context, array $blocks = array())
    {
        // line 65
        echo "      ";
        $this->displayParentBlock("footer", $context, $blocks);
        echo "
  ";
    }

    // line 70
    public function block_modallogin($context, array $blocks = array())
    {
        // line 71
        echo "      ";
        $this->displayParentBlock("modallogin", $context, $blocks);
        echo "
  ";
    }

    // line 76
    public function block_modalsignup($context, array $blocks = array())
    {
        // line 77
        echo "      ";
        $this->displayParentBlock("modalsignup", $context, $blocks);
        echo "
  ";
    }

    public function getTemplateName()
    {
        return "PCVDemoBundle:Home:home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  247 => 77,  244 => 76,  237 => 71,  234 => 70,  227 => 65,  224 => 64,  217 => 48,  214 => 47,  207 => 37,  204 => 36,  197 => 26,  194 => 25,  189 => 79,  186 => 76,  182 => 73,  179 => 70,  175 => 67,  172 => 64,  169 => 62,  163 => 50,  160 => 47,  151 => 39,  148 => 36,  139 => 28,  136 => 25,  131 => 22,  128 => 21,  125 => 20,  120 => 12,  117 => 11,  109 => 6,  106 => 5,  100 => 3,  91 => 1,  57 => 75,  50 => 69,  43 => 63,  36 => 46,  29 => 35,  22 => 24,  11 => 1,);
    }
}


/* PCVDemoBundle:Home:home.html.twig */
class __TwigTemplate_ad1bfe6703ee61688398778cef30e19205afe3b1457fa61aec1b77bddb8e04c2_166580092 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        try {
            $this->parent = $this->env->loadTemplate("PCVDemoBundle:Plantillas:pagenav.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(12);

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

    // line 13
    public function block_navbar($context, array $blocks = array())
    {
        // line 14
        echo "        ";
        $this->displayParentBlock("navbar", $context, $blocks);
        echo "
      ";
    }

    public function getTemplateName()
    {
        return "PCVDemoBundle:Home:home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  306 => 14,  303 => 13,  278 => 12,  247 => 77,  244 => 76,  237 => 71,  234 => 70,  227 => 65,  224 => 64,  217 => 48,  214 => 47,  207 => 37,  204 => 36,  197 => 26,  194 => 25,  189 => 79,  186 => 76,  182 => 73,  179 => 70,  175 => 67,  172 => 64,  169 => 62,  163 => 50,  160 => 47,  151 => 39,  148 => 36,  139 => 28,  136 => 25,  131 => 22,  128 => 21,  125 => 20,  120 => 12,  117 => 11,  109 => 6,  106 => 5,  100 => 3,  91 => 1,  57 => 75,  50 => 69,  43 => 63,  36 => 46,  29 => 35,  22 => 24,  11 => 1,);
    }
}
