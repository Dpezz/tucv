<?php

/* PCVDemoBundle:Show:portada.html.twig */
class __TwigTemplate_d31120f1033810f7e56716a7a6efa386577bb43dc214f46c3b93b6a47f46c5ac extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->env->loadTemplate("PCVDemoBundle:Show:imagen.html.twig");
        // line 6
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."PCVDemoBundle:Show:imagen.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $_trait_1 = $this->env->loadTemplate("PCVDemoBundle:Show:profesion.html.twig");
        // line 12
        if (!$_trait_1->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."PCVDemoBundle:Show:profesion.html.twig".'" cannot be used as a trait.');
        }
        $_trait_1_blocks = $_trait_1->getBlocks();

        $_trait_2 = $this->env->loadTemplate("PCVDemoBundle:Edit:profesion.html.twig");
        // line 70
        if (!$_trait_2->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."PCVDemoBundle:Edit:profesion.html.twig".'" cannot be used as a trait.');
        }
        $_trait_2_blocks = $_trait_2->getBlocks();

        $_trait_3 = $this->env->loadTemplate("PCVDemoBundle:Edit:redes.html.twig");
        // line 91
        if (!$_trait_3->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."PCVDemoBundle:Edit:redes.html.twig".'" cannot be used as a trait.');
        }
        $_trait_3_blocks = $_trait_3->getBlocks();

        $_trait_4 = $this->env->loadTemplate("PCVDemoBundle:Edit:imagen.html.twig");
        // line 112
        if (!$_trait_4->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."PCVDemoBundle:Edit:imagen.html.twig".'" cannot be used as a trait.');
        }
        $_trait_4_blocks = $_trait_4->getBlocks();

        $_trait_5 = $this->env->loadTemplate("PCVDemoBundle:Edit:imagen.html.twig");
        // line 131
        if (!$_trait_5->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."PCVDemoBundle:Edit:imagen.html.twig".'" cannot be used as a trait.');
        }
        $_trait_5_blocks = $_trait_5->getBlocks();

        $_trait_6 = $this->env->loadTemplate("PCVDemoBundle:Edit:video.html.twig");
        // line 152
        if (!$_trait_6->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."PCVDemoBundle:Edit:video.html.twig".'" cannot be used as a trait.');
        }
        $_trait_6_blocks = $_trait_6->getBlocks();

        $_trait_7 = $this->env->loadTemplate("PCVDemoBundle:Edit:video.html.twig");
        // line 171
        if (!$_trait_7->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."PCVDemoBundle:Edit:video.html.twig".'" cannot be used as a trait.');
        }
        $_trait_7_blocks = $_trait_7->getBlocks();

        $_trait_8 = $this->env->loadTemplate("PCVDemoBundle:Contenido:contenido.html.twig");
        // line 193
        if (!$_trait_8->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."PCVDemoBundle:Contenido:contenido.html.twig".'" cannot be used as a trait.');
        }
        $_trait_8_blocks = $_trait_8->getBlocks();

        $this->traits = array_merge(
            $_trait_0_blocks,
            $_trait_1_blocks,
            $_trait_2_blocks,
            $_trait_3_blocks,
            $_trait_4_blocks,
            $_trait_5_blocks,
            $_trait_6_blocks,
            $_trait_7_blocks,
            $_trait_8_blocks
        );

        $this->blocks = array_merge(
            $this->traits,
            array(
                'portada_private' => array($this, 'block_portada_private'),
                'portada_public' => array($this, 'block_portada_public'),
                'image_public' => array($this, 'block_image_public'),
                'profession_public' => array($this, 'block_profession_public'),
                'modal_profession' => array($this, 'block_modal_profession'),
                'edit_profession' => array($this, 'block_edit_profession'),
                'modal_red' => array($this, 'block_modal_red'),
                'edit_red' => array($this, 'block_edit_red'),
                'modal_image' => array($this, 'block_modal_image'),
                'edit_image' => array($this, 'block_edit_image'),
                'delete_image' => array($this, 'block_delete_image'),
                'modal_video' => array($this, 'block_modal_video'),
                'edit_video' => array($this, 'block_edit_video'),
                'delete_video' => array($this, 'block_delete_video'),
                'modal_share_cv' => array($this, 'block_modal_share_cv'),
                'select_share_profile' => array($this, 'block_select_share_profile'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('portada_private', $context, $blocks);
        // line 59
        echo "
";
        // line 60
        $this->displayBlock('modal_profession', $context, $blocks);
        // line 79
        echo "

";
        // line 81
        $this->displayBlock('modal_red', $context, $blocks);
        // line 100
        echo "

";
        // line 102
        $this->displayBlock('modal_image', $context, $blocks);
        // line 140
        echo "

";
        // line 142
        $this->displayBlock('modal_video', $context, $blocks);
        // line 180
        echo "


";
        // line 183
        $this->displayBlock('modal_share_cv', $context, $blocks);
    }

    // line 1
    public function block_portada_private($context, array $blocks = array())
    {
        // line 2
        echo "
\t";
        // line 3
        $this->displayBlock('portada_public', $context, $blocks);
        // line 18
        echo "

\t<div class=\"\">
\t\t<h3 class=\"panel-title\">
\t\t\t<div class=\"btn-group pull-right\">
              <button type=\"button\" class=\"btn btn-default btn-xs dropdown-toggle\" data-toggle=\"dropdown\">
                <i class=\"fa fa-pencil\"></i> <span class=\"caret\"></span>
              </button>
              <ul class=\"dropdown-menu\" role=\"menu\">
              \t<li><a href=\"#\" data-toggle=\"modal\" data-target=\"#profesion\"><i class=\"fa fa-book\"></i>&nbsp;Editar Profesión</a></li>
              \t<li class=\"divider\"></li>
              \t<li><a href=\"#\" data-toggle=\"modal\" data-target=\"#redes\"><i class=\"fa fa-users\"></i>&nbsp;Editar Redes</a></li>
              </ul>
          </div>
          <div class=\"btn-group pull-right\">
              <button type=\"button\" class=\"btn btn-default btn-xs dropdown-toggle\" data-toggle=\"dropdown\">
                <i class=\"fa fa-camera\"></i> <span class=\"caret\"></span>
              </button>
              <ul class=\"dropdown-menu\" role=\"menu\">
                <li><a href=\"#\" data-toggle=\"modal\" data-target=\"#imagen\"><i class=\"fa fa-file-image-o\"></i>&nbsp;Subir imagen</a></li>
                <li><a href=\"#\" data-toggle=\"modal\" data-target=\"#delete\">
                  <i class=\"fa fa-trash-o\"></i>&nbsp;Eliminar Imagen</a>
                </li>
              </ul>
          </div>
          <div class=\"btn-group pull-right\">
              <button type=\"button\" class=\"btn btn-default btn-xs dropdown-toggle\" data-toggle=\"dropdown\">
                <i class=\"fa fa-video-camera\"></i> <span class=\"caret\"></span>
              </button>
              <ul class=\"dropdown-menu\" role=\"menu\">
                <li><a href=\"#\" data-toggle=\"modal\" data-target=\"#video\"><i class=\"fa fa-file-video-o\"></i>&nbsp;Agregar Video Curriculum</a></li>
                <li><a href=\"#\" data-toggle=\"modal\" data-target=\"#deleteVideo\">
                  <i class=\"fa fa-trash-o\"></i>&nbsp;Eliminar Video</a>
                </li>
              </ul>
          </div>
\t\t</h3>
\t</div>
\t

";
    }

    // line 3
    public function block_portada_public($context, array $blocks = array())
    {
        // line 4
        echo "\t\t\t
\t\t<h6 class=\"text-center\">
\t\t\t";
        // line 7
        echo "\t\t    ";
        $this->displayBlock('image_public', $context, $blocks);
        // line 10
        echo "\t\t</h6>
\t
\t\t";
        // line 13
        echo "        ";
        $this->displayBlock('profession_public', $context, $blocks);
        // line 16
        echo "        
\t";
    }

    // line 7
    public function block_image_public($context, array $blocks = array())
    {
        // line 8
        echo "\t\t       ";
        $this->displayParentBlock("image_public", $context, $blocks);
        echo "
\t\t    ";
    }

    // line 13
    public function block_profession_public($context, array $blocks = array())
    {
        echo "     
            ";
        // line 14
        $this->displayParentBlock("profession_public", $context, $blocks);
        echo "
        ";
    }

    // line 60
    public function block_modal_profession($context, array $blocks = array())
    {
        // line 61
        echo "<!-- Modal Editar datos Profesionales -->
\t<div class=\"modal fade\" id=\"profesion\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
\t  <div class=\"modal-dialog\">
\t    <div class=\"modal-content\">
\t      <div class=\"modal-header\">
\t        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
\t        <h4 class=\"modal-title\" id=\"myModalLabel\">Editar Datos Profesionales</h4>
\t      </div>
\t      <div class=\"modal-body\">
\t        ";
        // line 71
        echo "\t        ";
        $this->displayBlock('edit_profession', $context, $blocks);
        // line 74
        echo "\t      </div>
\t    </div>
\t  </div>
\t</div>
";
    }

    // line 71
    public function block_edit_profession($context, array $blocks = array())
    {
        // line 72
        echo "\t        ";
        $this->displayParentBlock("edit_profession", $context, $blocks);
        echo "
\t        ";
    }

    // line 81
    public function block_modal_red($context, array $blocks = array())
    {
        // line 82
        echo "<!-- Modal Editar redes sociales -->
\t<div class=\"modal fade\" id=\"redes\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
\t  <div class=\"modal-dialog\">
\t    <div class=\"modal-content\">
\t      <div class=\"modal-header\">
\t        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
\t        <h4 class=\"modal-title\" id=\"myModalLabel\">Editar Redes Sociales</h4>
\t      </div>
\t      <div class=\"modal-body\">
\t        ";
        // line 92
        echo "\t        ";
        $this->displayBlock('edit_red', $context, $blocks);
        // line 95
        echo "\t      </div>
\t    </div>
\t  </div>
\t</div>
";
    }

    // line 92
    public function block_edit_red($context, array $blocks = array())
    {
        // line 93
        echo "\t        ";
        $this->displayParentBlock("edit_red", $context, $blocks);
        echo "
\t        ";
    }

    // line 102
    public function block_modal_image($context, array $blocks = array())
    {
        // line 103
        echo "<!-- Modal Agregar imagen -->
\t<div class=\"modal fade\" id=\"imagen\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"mySmallModalLabel\" aria-hidden=\"true\">
\t  <div class=\"modal-dialog\">
\t    <div class=\"modal-content\">
\t      <div class=\"modal-header\">
\t        <button type=\"button\" class=\"close\" id=\"addImagen\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
\t        <h4 class=\"modal-title\" id=\"myModalLabel\">Editar Imagen de Perfil</h4>
\t      </div>
\t      <div class=\"modal-body\">
\t        ";
        // line 113
        echo "\t        ";
        $this->displayBlock('edit_image', $context, $blocks);
        // line 116
        echo "\t      </div>
\t    </div>
\t  </div>
\t</div>


<!-- Modal eliminar imagen -->
\t<div class=\"modal fade\" id=\"delete\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
\t  <div class=\"modal-dialog\">
\t    <div class=\"modal-content\">
\t      <div class=\"modal-header\">
\t        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
\t        <h4 class=\"modal-title\" id=\"myModalLabel\">Eliminar Imagen</h4>
\t      </div>
\t      <div class=\"modal-body\">
\t        ";
        // line 132
        echo "\t          ";
        $this->displayBlock('delete_image', $context, $blocks);
        // line 135
        echo "\t      </div>
\t    </div>
\t  </div>
\t</div>
";
    }

    // line 113
    public function block_edit_image($context, array $blocks = array())
    {
        // line 114
        echo "\t        ";
        $this->displayParentBlock("edit_image", $context, $blocks);
        echo "
\t        ";
    }

    // line 132
    public function block_delete_image($context, array $blocks = array())
    {
        // line 133
        echo "\t          ";
        $this->displayParentBlock("delete_image", $context, $blocks);
        echo "
\t          ";
    }

    // line 142
    public function block_modal_video($context, array $blocks = array())
    {
        // line 143
        echo "<!-- Modal Agregar Enlace de Video -->
\t<div class=\"modal fade bs-example-modal-sm\" id=\"video\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"mySmallModalLabel\" aria-hidden=\"true\">
\t  <div class=\"modal-dialog modal-sm\">
\t    <div class=\"modal-content\">
\t      <div class=\"modal-header\">
\t        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
\t        <h4 class=\"modal-title\" id=\"myModalLabel\">Editar Video Curriculum</h4>
\t      </div>
\t      <div class=\"modal-body\">
\t        ";
        // line 153
        echo "\t        ";
        $this->displayBlock('edit_video', $context, $blocks);
        // line 156
        echo "\t      </div>
\t    </div>
\t  </div>
\t</div>


<!-- Modal Eliminar Video -->
\t<div class=\"modal fade\" id=\"deleteVideo\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
\t  <div class=\"modal-dialog\">
\t    <div class=\"modal-content\">
\t      <div class=\"modal-header\">
\t        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
\t        <h4 class=\"modal-title\" id=\"myModalLabel\">Eliminar Video</h4>
\t      </div>
\t      <div class=\"modal-body\">
\t        ";
        // line 172
        echo "\t          ";
        $this->displayBlock('delete_video', $context, $blocks);
        // line 175
        echo "\t      </div>
\t    </div>
\t  </div>
\t</div>
";
    }

    // line 153
    public function block_edit_video($context, array $blocks = array())
    {
        // line 154
        echo "\t        ";
        $this->displayParentBlock("edit_video", $context, $blocks);
        echo "
\t        ";
    }

    // line 172
    public function block_delete_video($context, array $blocks = array())
    {
        // line 173
        echo "\t          ";
        $this->displayParentBlock("delete_video", $context, $blocks);
        echo "
\t          ";
    }

    // line 183
    public function block_modal_share_cv($context, array $blocks = array())
    {
        // line 184
        echo "<!-- Modal Download CV -->
<div class=\"modal fade\" id=\"share_perfil\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
  <div class=\"modal-dialog\">
    <div class=\"modal-content\">
      \t<div class=\"modal-header\">
        \t<button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
        \t<h4 class=\"modal-title\" id=\"myModalLabel\"><i class=\"fa fa-share-alt\"></i>&nbsp;Compartir Curriculum</h4>
      \t</div>
      <div class=\"modal-body\">
        ";
        // line 194
        echo "        ";
        $this->displayBlock('select_share_profile', $context, $blocks);
        // line 197
        echo "      </div>
    </div>
  </div>
</div>
";
    }

    // line 194
    public function block_select_share_profile($context, array $blocks = array())
    {
        // line 195
        echo "            ";
        $this->displayParentBlock("select_share_profile", $context, $blocks);
        echo "
        ";
    }

    public function getTemplateName()
    {
        return "PCVDemoBundle:Show:portada.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  470 => 195,  467 => 194,  459 => 197,  456 => 194,  445 => 184,  442 => 183,  435 => 173,  432 => 172,  425 => 154,  422 => 153,  414 => 175,  411 => 172,  394 => 156,  391 => 153,  380 => 143,  377 => 142,  370 => 133,  367 => 132,  360 => 114,  357 => 113,  349 => 135,  346 => 132,  329 => 116,  326 => 113,  315 => 103,  312 => 102,  305 => 93,  302 => 92,  294 => 95,  291 => 92,  280 => 82,  277 => 81,  270 => 72,  267 => 71,  259 => 74,  256 => 71,  245 => 61,  242 => 60,  236 => 14,  231 => 13,  224 => 8,  221 => 7,  216 => 16,  213 => 13,  209 => 10,  206 => 7,  202 => 4,  199 => 3,  155 => 18,  153 => 3,  150 => 2,  147 => 1,  143 => 183,  138 => 180,  136 => 142,  132 => 140,  130 => 102,  126 => 100,  124 => 81,  120 => 79,  118 => 60,  115 => 59,  113 => 1,  70 => 193,  63 => 171,  56 => 152,  49 => 131,  42 => 112,  35 => 91,  28 => 70,  21 => 12,  14 => 6,);
    }
}
