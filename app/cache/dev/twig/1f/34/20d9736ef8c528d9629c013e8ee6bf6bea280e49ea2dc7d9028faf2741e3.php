<?php

/* PCVDemoBundle:Edit:imagen.html.twig */
class __TwigTemplate_1f3420d9736ef8c528d9629c013e8ee6bf6bea280e49ea2dc7d9028faf2741e3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'delete_image' => array($this, 'block_delete_image'),
            'edit_image' => array($this, 'block_edit_image'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('delete_image', $context, $blocks);
        // line 11
        echo "

";
        // line 13
        $this->displayBlock('edit_image', $context, $blocks);
    }

    // line 1
    public function block_delete_image($context, array $blocks = array())
    {
        // line 2
        echo "    <form action=\"";
        echo $this->env->getExtension('routing')->getPath("_delete_image");
        echo "\" method=\"POST\" rol=\"form\">
        <h3 class=\"text-center\"> Seguro que deseas eliminar tu Imagen <i class=\"fa fa-question\"></i> </h3>
        <br>
        <div class=\"modal-footer\">
            <button type=\"submit\" class=\"btn btn-blue\" id=\"name\">Eliminar</button>
            <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Cerrar</button>
        </div>
    </form>
";
    }

    // line 13
    public function block_edit_image($context, array $blocks = array())
    {
        // line 14
        echo "
    <form action=\"";
        // line 15
        echo $this->env->getExtension('routing')->getPath("_edit_imagen");
        echo "\" enctype=\"multipart/form-data\"  method=\"POST\">
        <div class=\"well\">
            <h1 class=\"text-center\">
\t           <img class=\"img-rounded\" id=\"imagenPreview\" name=\"_imagenPreview\" src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/pcvdemo/image/noimagen_edit.png"), "html", null, true);
        echo "\" width=\"100%\">
            </h1>

            <input type=\"hidden\" id=\"x\" name=\"_x1\" value=\"0\" />
            <input type=\"hidden\" id=\"y\" name=\"_y1\" value=\"0\"/>
            <input type=\"hidden\" id=\"w\" name=\"_w\" value=\"0\"/>
            <input type=\"hidden\" id=\"h\" name=\"_h\" value=\"0\"/>
            <input type=\"hidden\" id=\"wWeb\" name=\"_wWeb\" value=\"1\"/>
            <input type=\"hidden\" id=\"hWeb\" name=\"_hWeb\" value=\"1\"/>
            

        </div>
\t    <br>
\t\t<input type=\"file\" id=\"imagenFile\" name=\"_file\" accept=\"image/png,image/jpeg\"/>
\t\t<div class=\"modal-footer\">
        \t<button type=\"submit\" class=\"btn btn-blue\" id=\"saveEditImagen\">Guardar</button>
        \t<button type=\"button\" id=\"cancelEditImage\" class=\"btn btn-default\" data-dismiss=\"modal\">Cerrar</button>
      \t</div>
\t</form>

<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/pcvdemo/plugin/jcrop/css/jquery.Jcrop.min.css"), "html", null, true);
        echo "\"/>
<script src=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/pcvdemo/plugin/jcrop/js/jquery.Jcrop.min.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\">
    
    var imagenPreview = document.getElementById(\"imagenPreview\");
    var imagenFile = document.getElementById(\"imagenFile\");
    var saveEditImagen = document.getElementById(\"saveEditImagen\");

    var isChange=false;
    var jcrop_api;

    imagenFile.onclick = function(e){
        if(isChange){
            jcrop_api.destroy();
        }
    }

    //si cambia el file
    imagenFile.onchange = function(e){
        var selectedFile = imagenFile.files[0];
        var reader = new FileReader();

        reader.onload = function(event) {
            imagenPreview.src = event.target.result;
            //\$('#dataImagen').val(event.target.result);
            \$('#wWeb').val(imagenPreview.width);
            \$('#hWeb').val(imagenPreview.height);
            loadSelectImage();


        };
        reader.readAsDataURL(selectedFile);
    }


    //empezar a dimensionar 
    function loadSelectImage(){
        \$('#imagenPreview').Jcrop({
            onSelect:    function(c){
                \$('#x').val(c.x)
                \$('#y').val(c.y)
                \$('#w').val(c.w)
                \$('#h').val(c.h)
                isChange = true;

            },
            bgFade: true,
            bgColor:     'black',
            setSelect: [20,20,70,70],
            aspectRatio: 4 / 4
        },function(){
            jcrop_api = this;
        });
    }
    
    \$('#cancelEditImage,#addImagen').click(function(){
        location.href='";
        // line 94
        echo $this->env->getExtension('routing')->getPath("_private_resume_profile");
        echo "';
    });
</script>

";
    }

    public function getTemplateName()
    {
        return "PCVDemoBundle:Edit:imagen.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  145 => 94,  87 => 39,  83 => 38,  60 => 18,  54 => 15,  51 => 14,  48 => 13,  34 => 2,  31 => 1,  27 => 13,  23 => 11,  21 => 1,);
    }
}
