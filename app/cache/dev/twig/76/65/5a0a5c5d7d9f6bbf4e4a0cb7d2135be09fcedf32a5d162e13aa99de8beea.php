<?php

/* ::base.html.twig */
class __TwigTemplate_76655a0a5c5d7d9f6bbf4e4a0cb7d2135be09fcedf32a5d162e13aa99de8beea extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang='es'>
    <head>
      <meta charset=\"UTF-8\" />
      <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
      <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
      <meta name=\"Author\" lang=\"es\" content=\"Daniel Jara Pezzoli & Jorge Alvarez Pinto\">


      <meta name=\"description\" content=\"La Serena, Chile,Somos jóvenes profesionales, emprendedores, recientemente egresados de ingeniería en software, creadores de ‘TuCV’.\" />
      <meta name=\"description\" lang=\"en\" content=\"'TuCV es una plataforma que busca innovar en la manera de presentar nuestro resumen profesional a la hora de postular a un empleo. Es por ello que ofrecemos crear y mantener tu Curriculum Vitae en la web, disponiendo de una plantilla simple con un diseño moderno, fácil y ordenado de revisar.\" />
      <meta name=\"keywords\" content=\"curriculum, cv, vitae, online, tucv, curriculum vitae, curriculum online, curriculum en la web, resume, resumen, portafolio, project,tu cv, tu cv\" />
      <meta property=\"og:image\" content=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/pcvdemo/image/logo.png"), "html", null, true);
        echo "\"/>
      <meta property=\"og:title\" content=\"tucv\"/>
      <meta property=\"og:url\" content=\"http://www.tucv.cl\"/>
      <meta property=\"og:site_name\" content=\"tuCV\"/>
      <meta property=\"og:type\" content=\"oficina, office,\"/>
      <meta property=\"og:description\" content=\"'TuCV, plataforma que busca innovar en la manera de presentar nuestro resumen profesional a la hora de postular a un empleo. Es por ello que ofrecemos crear y mantener tu Curriculum Vitae en la web, disponiendo de una plantilla simple con un diseño moderno, fácil y ordenado de revisar.\"/>
      <meta lang=\"es\" property=\"og:description\" content=\"Con 'TuCV', podrás visualizar tus datos de forma simple y ordenada. ‘TuCV’ está pensado en facilitar el ingreso de tus datos personales, entregando una combinación perfecta entre sencillez y modernidad. Incluimos un portafolio donde podrás presentar y detallar todas tus creaciones y proyectos profesionales que has realizado.Crea tu perfil Profesional y mantenlo en la web.\"/>

      <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/pcvdemo/tucv_icono.ico"), "html", null, true);
        echo "\" />
      <title>";
        // line 22
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

      ";
        // line 24
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 29
        echo "      ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 34
        echo "        
    </head>
    <body>
        ";
        // line 37
        $this->displayBlock('body', $context, $blocks);
        // line 38
        echo "
        <!--Start of Zopim Live Chat Script-->
        <script type=\"text/javascript\">
        window.\$zopim||(function(d,s){var z=\$zopim=function(c){z._.push(c)},\$=z.s=
        d.createElement(s),e=d.getElementsByTagName(s)[0];z.set=function(o){z.set.
        _.push(o)};z._=[];z.set._=[];\$.async=!0;\$.setAttribute(\"charset\",\"utf-8\");
        \$.src=\"//v2.zopim.com/?33KDuoj4Kx9hi7mbL1krMRY08seFDbzo\";z.t=+new Date;\$.
        type=\"text/javascript\";e.parentNode.insertBefore(\$,e)})(document,\"script\");
        </script>
        <!--End of Zopim Live Chat Script-->


        <!-- google Analytics -->
        <script>
          (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
          (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
          m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
          })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

          ga('create', 'UA-50179971-1', 'tucv.cl');
          ga('send', 'pageview');
        </script>
    </body>
</html>
";
    }

    // line 22
    public function block_title($context, array $blocks = array())
    {
        echo "tucv";
    }

    // line 24
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 25
        echo "          <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300' rel='stylesheet' type='text/css'>
          <link rel=\"stylesheet\" type=\"text/css\"  href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/pcvdemo/css/bootstrap.css"), "html", null, true);
        echo "\" />
          <link rel=\"stylesheet\" type=\"text/css\"  href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/pcvdemo/css/font-awesome.css"), "html", null, true);
        echo "\" />
      ";
    }

    // line 29
    public function block_javascripts($context, array $blocks = array())
    {
        // line 30
        echo "          <script src=\"http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js\"></script>
          <script src=\"https://ajax.googleapis.com/ajax/libs/angularjs/1.3.15/angular.min.js\"></script>
          <script src=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/pcvdemo/js/bootstrap/bootstrap.js"), "html", null, true);
        echo "\"></script>
      ";
    }

    // line 37
    public function block_body($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  132 => 37,  126 => 32,  122 => 30,  119 => 29,  113 => 27,  109 => 26,  106 => 25,  103 => 24,  97 => 22,  69 => 38,  67 => 37,  62 => 34,  59 => 29,  57 => 24,  52 => 22,  48 => 21,  37 => 13,  23 => 1,);
    }
}
