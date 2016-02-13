<?php

/* PCVDemoBundle:Plantillas:page.html.twig */
class __TwigTemplate_ca8132fed41bb9af927242c4d3d6dc3986f3a76306c322681c09454addd0924b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("::base.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(1);

            throw $e;
        }

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'javascripts' => array($this, 'block_javascripts'),
            'body' => array($this, 'block_body'),
            'navbar' => array($this, 'block_navbar'),
            'contenido' => array($this, 'block_contenido'),
            'footer_page' => array($this, 'block_footer_page'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "tuCV";
    }

    // line 5
    public function block_javascripts($context, array $blocks = array())
    {
        // line 6
        echo "\t";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script src=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/pcvdemo/js/validate_controller.js"), "html", null, true);
        echo "\"></script>
";
    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        // line 11
        echo "    ";
        $this->displayBlock('navbar', $context, $blocks);
        // line 12
        echo "    ";
        $this->displayBlock('contenido', $context, $blocks);
        // line 13
        echo "    ";
        $this->displayBlock('footer_page', $context, $blocks);
    }

    // line 11
    public function block_navbar($context, array $blocks = array())
    {
    }

    // line 12
    public function block_contenido($context, array $blocks = array())
    {
    }

    // line 13
    public function block_footer_page($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "PCVDemoBundle:Plantillas:page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 13,  80 => 12,  75 => 11,  70 => 13,  67 => 12,  64 => 11,  61 => 10,  55 => 7,  50 => 6,  47 => 5,  41 => 3,  11 => 1,);
    }
}
