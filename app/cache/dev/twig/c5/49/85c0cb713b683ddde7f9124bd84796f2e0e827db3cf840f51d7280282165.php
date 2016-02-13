<?php

/* PCVDemoBundle:Contenido:contenido.html.twig */
class __TwigTemplate_c54985c0cb713b683ddde7f9124bd84796f2e0e827db3cf840f51d7280282165 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->env->loadTemplate("PCVDemoBundle:Home:signup.html.twig");
        // line 374
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."PCVDemoBundle:Home:signup.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'home' => array($this, 'block_home'),
                'features' => array($this, 'block_features'),
                'about' => array($this, 'block_about'),
                'contacto' => array($this, 'block_contacto'),
                'footer' => array($this, 'block_footer'),
                'modallogin' => array($this, 'block_modallogin'),
                'modalsignup' => array($this, 'block_modalsignup'),
                'signup' => array($this, 'block_signup'),
                'select_share_profile' => array($this, 'block_select_share_profile'),
                'select_share' => array($this, 'block_select_share'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('home', $context, $blocks);
        // line 68
        echo "


";
        // line 71
        $this->displayBlock('features', $context, $blocks);
        // line 199
        echo "


";
        // line 202
        $this->displayBlock('about', $context, $blocks);
        // line 233
        echo "
";
        // line 234
        $this->displayBlock('contacto', $context, $blocks);
        // line 272
        echo "

";
        // line 274
        $this->displayBlock('footer', $context, $blocks);
        // line 313
        echo "


";
        // line 316
        $this->displayBlock('modallogin', $context, $blocks);
        // line 360
        echo "


";
        // line 363
        $this->displayBlock('modalsignup', $context, $blocks);
        // line 384
        echo "

";
        // line 386
        $this->displayBlock('select_share_profile', $context, $blocks);
        // line 416
        echo "

";
        // line 418
        $this->displayBlock('select_share', $context, $blocks);
    }

    // line 1
    public function block_home($context, array $blocks = array())
    {
        // line 2
        echo "  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-md-6\">

        <div class=\"page-header\">
          <h2 class=\"text-muted\"><strong>Tu Curriculum Web</strong></h2>
          <h2 class=\"text-muted\">Únete y sé parte del cambio</h2>
          <br>
          <h3 class=\"text-muted\">
            <em>Tu nueva forma de presentar tus experiencias  y conocimientos profesionales.</em>
          </h3>
        </div>

        <h6 class=\"text-left\">
          <a type=\"button\" href=\"#\" class=\"btn btn-info btn-lg\" data-toggle=\"modal\" data-target=\"#login\">
            <i class=\"fa fa-sign-in fa-lg white\"></i>&nbsp;Iniciar sesión</a>
        </h6>

        <h6 class=\"min-sp text-left\">
          Ya somos más de <strong><span id=\"count_cv\"></span></strong>&nbsp;<em>Curriculums Web en tucv.cl,&nbsp;
          <a href=\"#\" data-toggle=\"modal\" data-target=\"#signup\">Regístrate</a>
        </em>
        </h6>


        ";
        // line 27
        if (((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")) == "error")) {
            // line 28
            echo "          <hr>
          <div class=\"alert alert-danger alert-dismissible\" role=\"alert\">
            <button type=\"button\" class=\"close\" data-dismiss=\"alert\">
              <span aria-hidden=\"true\">&times;</span><span class=\"sr-only\">Close</span>
            </button>
            <i class=\"fa fa-times-circle-o\"></i>&nbsp;
            <strong>Usuario</strong>&nbsp;no puso ser&nbsp;<strong>registrado!</strong>.
          </div>


        ";
        } elseif ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 39
            echo "          <hr>
          <div class=\"alert alert-danger alert-dismissible\" role=\"alert\">
            <button type=\"button\" class=\"close\" data-dismiss=\"alert\">
              <span aria-hidden=\"true\">&times;</span><span class=\"sr-only\">Close</span>
            </button>
            <i class=\"fa fa-times-circle-o\"></i>&nbsp;
            <strong>Email</strong>&nbsp;no coincide con la&nbsp;<strong>Contraseña</strong>.
          </div>
        ";
        }
        // line 48
        echo "
      </div>
      ";
        // line 55
        echo "    </div>
  </div>


  <script type=\"text/javascript\">
  \$.ajax({
    url: \"";
        // line 61
        echo $this->env->getExtension('routing')->getPath("_count_cv");
        echo "\",
    success: function(result){
      \$('#count_cv').html(result);
    }
  })
  </script>
";
    }

    // line 71
    public function block_features($context, array $blocks = array())
    {
        // line 72
        echo "<div class=\"container\">
  <div class=\"page-header\" style=\"border-bottom-color:#ddd\">
      <h2 class=\"text-muted\">Caracteristicas</h2>
  </div>

  <br>

  <div class=\"row\">

    <div class=\"col-md-4\">
      <div class=\"media\">
        <span class=\"pull-left\"> <i class=\"fa fa-file-text fa-4x\"></i></span>
        <div class=\"media-body\">
          <h4 class=\"media-heading\"><strong>Resumen</strong></h4>
          <h5>";
        // line 86
        echo twig_escape_filter($this->env, (isset($context["resume"]) ? $context["resume"] : $this->getContext($context, "resume")), "html", null, true);
        echo "</h5>
        </div>
      </div>
    </div>

    <div class=\"col-md-4\">
       <div class=\"media\">
          <span class=\"pull-left\"> <i class=\"fa fa-briefcase fa-4x\"></i></span>
          <div class=\"media-body\">
            <h4 class=\"media-heading\"><strong>Portafolio</strong></h4>
            <h5>";
        // line 96
        echo twig_escape_filter($this->env, (isset($context["project"]) ? $context["project"] : $this->getContext($context, "project")), "html", null, true);
        echo "</h5>
        </div>
      </div>
    </div>

    <div class=\"col-md-4\">
       <div class=\"media\">
          <span class=\"pull-left\"> <i class=\"fa fa-search fa-4x\"></i></span>
          <div class=\"media-body\">
            <h4 class=\"media-heading\"><strong>Búsqueda</strong></h4>
            <h5>";
        // line 106
        echo twig_escape_filter($this->env, (isset($context["search"]) ? $context["search"] : $this->getContext($context, "search")), "html", null, true);
        echo "</h5>
        </div>
      </div>       
    </div>

    
  </div>

  <hr>

  <div class=\"row\">

    <div class=\"col-md-4\">
       <div class=\"media\">
          <span class=\"pull-left\"> <i class=\"fa fa-image fa-4x\"></i></span>
          <div class=\"media-body\">
            <h4 class=\"media-heading\"><strong>Imagenes</strong></h4>
            <h5>";
        // line 123
        echo twig_escape_filter($this->env, (isset($context["image"]) ? $context["image"] : $this->getContext($context, "image")), "html", null, true);
        echo "</h5>
        </div>
      </div>       
    </div>


    <div class=\"col-md-4\">
       <div class=\"media\">
          <span class=\"pull-left\"> <i class=\"fa fa-play fa-4x\"></i></span>
          <div class=\"media-body\">
            <h4 class=\"media-heading\"><strong>Video</strong></h4>
            <h5>";
        // line 134
        echo twig_escape_filter($this->env, (isset($context["video"]) ? $context["video"] : $this->getContext($context, "video")), "html", null, true);
        echo "</h5>
        </div>
      </div>        
    </div>


    <div class=\"col-md-4\">
       <div class=\"media\">
          <span class=\"pull-left\"> <i class=\"fa fa-envelope fa-4x\"></i></span>
          <div class=\"media-body\">
            <h4 class=\"media-heading\"><strong>Email</strong></h4>
            <h5>";
        // line 145
        echo twig_escape_filter($this->env, (isset($context["email"]) ? $context["email"] : $this->getContext($context, "email")), "html", null, true);
        echo "</h5>
        </div>
      </div>        
    </div>

  </div>

  <hr>

  <div class=\"row\">
    <div class=\"col-md-4\">
       <div class=\"media\">
          <span class=\"pull-left\"> <i class=\"fa fa-cloud fa-4x\"></i></span>
          <div class=\"media-body\">
            <h4 class=\"media-heading\"><strong>Cloud Web</strong></h4>
            <h5>";
        // line 160
        echo twig_escape_filter($this->env, (isset($context["cloud"]) ? $context["cloud"] : $this->getContext($context, "cloud")), "html", null, true);
        echo "</h5>
        </div>
      </div>        
    </div>

    <div class=\"col-md-4\">
       <div class=\"media\">
          <span class=\"pull-left\"> <i class=\"fa fa-eye fa-4x\"></i></span>
          <div class=\"media-body\">
            <h4 class=\"media-heading\"><strong>Visitas</strong></h4>
            <h5>";
        // line 170
        echo twig_escape_filter($this->env, (isset($context["eye"]) ? $context["eye"] : $this->getContext($context, "eye")), "html", null, true);
        echo "</h5>
        </div>
      </div>       
    </div>
";
        // line 185
        echo "    <div class=\"col-md-4\">
     <div class=\"media\">
        <span class=\"pull-left\"> <i class=\"fa fa-share-alt fa-4x\"></i></span>
        <div class=\"media-body\">
          <h4 class=\"media-heading\"><strong>Compartir</strong></h4>
          <h5>";
        // line 190
        echo twig_escape_filter($this->env, (isset($context["compartir"]) ? $context["compartir"] : $this->getContext($context, "compartir")), "html", null, true);
        echo "</h5>
        </div>
      </div>       
    </div>
  </div>

  </div>
</div>
";
    }

    // line 202
    public function block_about($context, array $blocks = array())
    {
        // line 203
        echo "<div class=\"container\">

  <div class=\"page-header\">
    <h2 class=\"text-muted\">Nosotros</h2>
  </div>

  <blockquote>
  <h4 class=\"text-muted\"><strong style=\"font-size:35px\">S</strong>omos jóvenes profesionales, emprendedores, recién egresados de ingeniería de software. \"tucv.cl\" es una plataforma web que busca innovar en la manera de presentar nuestro resumen profesional a la hora de postular a un empleo. Es por ello que ofrecemos crear y mantener tu Curriculum Vitae en la web, disponiendo de una plantilla simple con un diseño moderno, fácil y ordenado de revisar, disponible donde y cuando quieras.</h4>
  </blockquote>
  <hr>

  <h6 class=\"text-center\">
    <div class=\"row\">
        <div class=\"col-sm-6 col-md-6\">
          <a href=\"";
        // line 217
        echo $this->env->getExtension('routing')->getPath("_resume_public", array("url" => "Daniel.Jara.Pezzuoli"));
        echo "\">
            <img src=\"";
        // line 218
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/pcvdemo/image/us1.jpg"), "html", null, true);
        echo "\" class=\"img-circle\" width=\"100px\">
          </a>
            <h5>Daniel Jara Pezzuoli<strong><em>(Co-Founder)</em></strong></h5>
        </div>
        <div class=\"col-sm-6 col-md-6\">
          <a href=\"";
        // line 223
        echo $this->env->getExtension('routing')->getPath("_resume_public", array("url" => "Jorge.Alvarez.Pinto"));
        echo "\">
            <img src=\"";
        // line 224
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/pcvdemo/image/us2.jpg"), "html", null, true);
        echo "\" class=\"img-circle\" width=\"100px\">
          </a>
          <h5>Jorge Alvarez Pinto<strong><em>(Co-Founder)</em></strong></h5>
        </div>
    </div>
  </h6>

</div>
";
    }

    // line 234
    public function block_contacto($context, array $blocks = array())
    {
        // line 235
        echo "
  <div class=\"container\">
    <div class=\"row\">
      
      <div class=\"page-header\" style=\"border-bottom-color:#ddd\">
        <h2 class=\"text-muted\">Contáctanos</h2>
      </div>

      <form action=\"";
        // line 243
        echo $this->env->getExtension('routing')->getPath("_demo_contact");
        echo "\" method=\"post\">
         <div class=\"row\">

            <div class=\"col-md-8\">
                <div class=\"form-group\">
                  <input type=\"email\" class=\"form-control\" name=\"email\" pattern=\"^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ.!#\$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\\.[a-zA-Z0-9-]+)*\$\" placeholder=\"Correo electrónico..\" required>
                </div>
                <div class=\"form-group\">
                    <textarea class=\"form-control\" name=\"msg\" rows=\"4\" placeholder=\"Mensaje..\" required></textarea>
                </div>
            </div>

            <div class=\"col-md-4\">
                <h5 class=\"text-muted\">
                  <i class=\"fa fa-quote-left\"></i>
                  &nbsp;Somos jóvenes profesionales, emprendedores, recientemente egresados de ingeniería de software.
                </h5>
                
                <hr>

                <button type=\"submit\" class=\"btn btn-default btn-lg\"><i class=\"fa fa-envelope fa-lg\"></i>&nbsp;Enviar</button>
            </div>

         </div>

      </form> 
    </div>
  </div>
";
    }

    // line 274
    public function block_footer($context, array $blocks = array())
    {
        // line 275
        echo "<br><br><br>
  <div class=\"footer\">
    <footer> 
        <div class=\"container\">
          <h6 class=\"text-center\">

            <img  src=\"";
        // line 281
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/pcvdemo/image/logo.png"), "html", null, true);
        echo "\">
            <br>
            <br>
            <i class=\"fa fa-envelope fa-lg\"></i>
            <a href=\"mailto:contacto@tucv.cl\">&nbsp;contacto@tucv.cl</a>
            &nbsp;-&nbsp;
            <i class=\"fa fa-map-marker fa-lg\"></i>
            <a href=\"https://www.google.com/maps/place/Andr%C3%A9s+Bello,+La+Serena,+Coquimbo,+Chile/@-29.9080286,-71.2535616,17z/data=!3m1!4b1!4m2!3m1!1s0x9691ca6fbc376a91:0x8acafa555b54c755\" target=\"_blank\">&nbsp;La Serena, Chile. ";
        // line 288
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo "
            </a>

            <div class=\"division\"></div>

            <span class=\"fa-stack\"><a href=\"https://www.facebook.com/pages/Tucvchile/657975197600893\" target=\"_blank\">
              <i class=\"fa fa-circle fa-stack-2x gray\"></i>
              <i class=\"fa fa-facebook fa-stack-1x white\"></i></a>
            </span>
            
            <span class=\"fa-stack\"><a href=\"https://twitter.com/TuCvChile\" target=\"_blank\">
              <i class=\"fa fa-circle fa-stack-2x gray\"></i>
              <i class=\"fa fa-twitter fa-stack-1x white\"></i></a>
            </span>

            <span class=\"fa-stack\"><a href=\"https://plus.google.com/u/0/112777258602366218286\" target=\"_blank\">
              <i class=\"fa fa-circle fa-stack-2x gray\"></i>
              <i class=\"fa fa-google fa-stack-1x white\"></i></a>
            </span>
            
          </h6>
        </div>
    </footer>
  </div>
";
    }

    // line 316
    public function block_modallogin($context, array $blocks = array())
    {
        // line 317
        echo "  <!-- Modal -->
  <div class=\"modal fade bs-example-modal-sm\" id=\"login\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
      <div class=\"modal-dialog modal-sm\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
              <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
              <h4 class=\"modal-title\" id=\"myModalLabel\">Iniciar Sesión</h4>
            </div>
            <div class=\"modal-body\">
              
              <form id=\"defaultForm\" action=\"";
        // line 327
        echo $this->env->getExtension('routing')->getPath("_security_check");
        echo "\"  method=\"post\" role=\"form\">
                
                <div class=\"form-group\">
                  <div class=\"input-group input-group\">
                    <span class=\"input-group-addon\"><i class=\"fa fa-envelope\"></i></span>
                    <input type=\"email\" class=\"form-control input-lg\" id=\"username\" name=\"_username\" placeholder=\"Correo electrónico\" required/>
                  </div>
                </div>

                <div class=\"form-group\">
                  <div class=\"input-group input-group\">
                    <span class=\"input-group-addon\"><i class=\"fa fa-lock\"></i>&nbsp;&nbsp; </span>
                    <input type=\"password\" class=\"form-control input-lg\" id=\"password\" name=\"_password\" placeholder=\"Contraseña\" required />
                  </div>
                </div>

                <button class=\"btn btn-default btn-lg btn-block\" type=\"submit\">
                  <i class=\"fa fa-sign-in fa-lg\"></i>&nbsp;Iniciar Sesión
                </button>
                <hr>

                <a href=\"";
        // line 348
        echo $this->env->getExtension('routing')->getPath("_secured_resend");
        echo "\">¿olvidaste tu contraseña?</a>
                &nbsp;-&nbsp;
                <hr>
                <h5>* Recomendamos restablecer tu contraseña cada mes, así protegeras tu resumen web. <a href=\"";
        // line 351
        echo $this->env->getExtension('routing')->getPath("_secured_resend");
        echo "\">Restablecer</a></h5>
                
              </form>

            </div>
        </div>
      </div>
  </div>
";
    }

    // line 363
    public function block_modalsignup($context, array $blocks = array())
    {
        // line 364
        echo "  <!-- Modal -->
  <div class=\"modal fade\" id=\"signup\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
      <div class=\"modal-dialog\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
              <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
              <h4 class=\"modal-title\" id=\"myModalLabel\"><i class=\"fa fa-sign-in\"></i>&nbsp;Regístrate</h4>
            </div>
            <div class=\"modal-body\">
              
              ";
        // line 375
        echo "              ";
        $this->displayBlock('signup', $context, $blocks);
        // line 378
        echo "
            </div>
        </div>
      </div>
  </div>
";
    }

    // line 375
    public function block_signup($context, array $blocks = array())
    {
        // line 376
        echo "                ";
        $this->displayParentBlock("signup", $context, $blocks);
        echo "
              ";
    }

    // line 386
    public function block_select_share_profile($context, array $blocks = array())
    {
        // line 387
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())) {
            // line 388
            echo "  <div class=\"row\">
    <div class=\"col-md-4\">
      <a type=\"button\" class=\"btn btn-default btn-block\" href=\"http://twitter.com/home?status=visita mi curriculum web http://tucv.cl/";
            // line 390
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["datosU"]) ? $context["datosU"] : $this->getContext($context, "datosU")), "resumenUrl", array()), "html", null, true);
            echo " @tucvchile\" onclick=\"window.open(this.href, 'mywin','left=20,top=20,width=500,height=500,toolbar=1,resizable=0'); return false;\">
      <i class=\"fa fa-twitter\"></i>&nbsp;Twitter
      </a>
    </div>
    <div class=\"col-md-4\">
      <a type=\"button\" class=\"btn btn-default btn-block\" href=\"https://plus.google.com/share?url=www.tucv.cl/";
            // line 395
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["datosU"]) ? $context["datosU"] : $this->getContext($context, "datosU")), "resumenUrl", array()), "html", null, true);
            echo " @tucvchile\" onclick=\"window.open(this.href, 'mywin','left=20,top=20,width=500,height=500,toolbar=1,resizable=0'); return false;\">
      <i class=\"fa fa-google\"></i>&nbsp;Google+
      </a>
    </div>
    <div class=\"col-md-4\">
      <a type=\"button\" class=\"btn btn-default btn-block\" href='https://www.linkedin.com/shareArticle?mini=true&url=http://www.tucv.cl/";
            // line 400
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["datosU"]) ? $context["datosU"] : $this->getContext($context, "datosU")), "resumenUrl", array()), "html", null, true);
            echo "' onclick=\"window.open(this.href, 'mywin','left=20,top=20,width=500,height=500,toolbar=1,resizable=0'); return false;\" target='_blank'>
      <i class=\"fa fa-linkedin\"></i>&nbsp;LinkedIn
      </a>
    </div>
  </div>

";
        } else {
            // line 407
            echo "  <h4 class=\"text-muted text-center\">
    <i class=\"fa fa-info-circle fa-2x\"></i>
    <br>
    Para Compartir el curriculum debes iniciar sesión
    <hr>
    <a type=\"button\" class=\"btn btn-default btn-lg\" href=\"";
            // line 412
            echo $this->env->getExtension('routing')->getPath("_demo_login");
            echo "\">Iniciar Sesión </a> 
  </h4>
";
        }
    }

    // line 418
    public function block_select_share($context, array $blocks = array())
    {
        // line 419
        echo "  <div class=\"row\">
    <div class=\"col-md-4\">
      <a type=\"button\" class=\"btn btn-default btn-block\" href=\"http://twitter.com/home?status=visita mi curriculum web http://tucv.cl/ @tucvchile\" onclick=\"window.open(this.href, 'mywin','left=20,top=20,width=500,height=500,toolbar=1,resizable=0'); return false;\">
        <i class=\"fa fa-twitter\"></i>&nbsp;Twitter</a>
    </div>
    <div class=\"col-md-4\">
      <a type=\"button\" class=\"btn btn-default btn-block\" href=\"https://plus.google.com/share?url=www.tucv.cl/\" onclick=\"window.open(this.href, 'mywin','left=20,top=20,width=500,height=500,toolbar=1,resizable=0'); return false;\">
        <i class=\"fa fa-google\"></i>&nbsp;Google+</a>
    </div>
    <div class=\"col-md-4\">
      <a type=\"button\" class=\"btn btn-default btn-block\" href='https://www.linkedin.com/shareArticle?mini=true&url=http://www.tucv.cl/' onclick=\"window.open(this.href, 'mywin','left=20,top=20,width=500,height=500,toolbar=1,resizable=0'); return false;\" target='_blank'>
      <i class=\"fa fa-linkedin\"></i>&nbsp;LinkedIn
      </a>
    </div>
  </div>
";
    }

    public function getTemplateName()
    {
        return "PCVDemoBundle:Contenido:contenido.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  618 => 419,  615 => 418,  607 => 412,  600 => 407,  590 => 400,  582 => 395,  574 => 390,  570 => 388,  568 => 387,  565 => 386,  558 => 376,  555 => 375,  546 => 378,  543 => 375,  531 => 364,  528 => 363,  515 => 351,  509 => 348,  485 => 327,  473 => 317,  470 => 316,  441 => 288,  431 => 281,  423 => 275,  420 => 274,  387 => 243,  377 => 235,  374 => 234,  361 => 224,  357 => 223,  349 => 218,  345 => 217,  329 => 203,  326 => 202,  313 => 190,  306 => 185,  299 => 170,  286 => 160,  268 => 145,  254 => 134,  240 => 123,  220 => 106,  207 => 96,  194 => 86,  178 => 72,  175 => 71,  164 => 61,  156 => 55,  152 => 48,  141 => 39,  128 => 28,  126 => 27,  99 => 2,  96 => 1,  92 => 418,  88 => 416,  86 => 386,  82 => 384,  80 => 363,  75 => 360,  73 => 316,  68 => 313,  66 => 274,  62 => 272,  60 => 234,  57 => 233,  55 => 202,  50 => 199,  48 => 71,  43 => 68,  41 => 1,  14 => 374,);
    }
}
