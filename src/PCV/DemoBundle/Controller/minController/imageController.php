<?php
namespace PCV\DemoBundle\Controller\minController;

class imageController
{
	
    public function imagenPortafolioControl($src,$id){

        $data = getimagesize($src);
        $imagenUrl ='';
        switch ($data['mime']) { 
        case "image/jpeg": 
            $imagenUrl = $this->imagenJpeg($src,$data,$id); 
            break; 
        case "image/png": 
            $imagenUrl = $this->imagenPng($src,$data,$id);
            break; 
        } 
        return $imagenUrl;
    }

    public function imagenProfileControl($src,$id ){

        $data = getimagesize($src);
        $imagenUrl ='';
        switch ($data['mime']) { 
        case "image/jpeg": 
            $funcion = new imageController();
            $imagenUrl = $funcion->imagenProfileJpeg($src,$data,$id); 
            break; 
        case "image/png": 
            $funcion = new imageController();
            $imagenUrl = $funcion->imagenProfilePng($src,$data,$id);
            break; 
        } 
        return $imagenUrl;
    }


    public function imagenProfileJpeg($src,$data,$id){
        //get width and height de la foto-- tamaño normal
        $width = intval($data[0]);
        $height = intval($data[1]);

        //tamabo de Width and Height en la pagina Web
        $wWeb = intval($_POST['_wWeb']);
        $hWeb = intval($_POST['_hWeb']);

        //seleccion del area
        $w = intval($_POST['_w']);
        $h = intval($_POST['_h']);
        $x = intval($_POST['_x1']);
        $y = intval($_POST['_y1']);

        //obtener el valor scalada
        $valorPromedioW = $width/$wWeb;
        $valorPromedioH = $height/$hWeb;
        $origX = $valorPromedioW * $x;
        $origY = $valorPromedioH * $y;
        $origW = $valorPromedioW * $w;
        $origH = $valorPromedioH * $h;
        
        $origen = imagecreatefromjpeg($src);
        $imagen_crop = imagecrop($origen,array('x' => intval($origX), 'y' => intval($origY), 'width' => intval($origW), 'height' => intval($origH) ));
        //$destino = imagecreatetruecolor($origW,$origH);
        //imagecopy($destino, $origen, 0, 0, $origX, $origY, $origW, $origH);

        imagejpeg($imagen_crop, "img/profile/temp_$id.jpg");
        imagedestroy($origen);
        imagedestroy($imagen_crop);
        //imagedestroy($destino);

        $name = $id.'.jpg';

        $origen = imagecreatefromjpeg("img/profile/temp_$id.jpg");
        $imagen_escalada = imagescale($origen,250,250);
        imagejpeg($imagen_escalada, "img/profile/".$name);
        imagedestroy($origen);
        imagedestroy($imagen_escalada);
        unLink("img/profile/temp_$id.jpg");
        return $name;
    }

    

	public function imagenProfilePng($src,$data,$id){
		 //get width and height de la foto-- tamaño normal
        $width = intval($data[0]);
        $height = intval($data[1]);
        
        //tamabo de Width and Height en la pagina Web
        $wWeb = intval($_POST['_wWeb']);
        $hWeb = intval($_POST['_hWeb']);

        //seleccion del area
        $w = intval($_POST['_w']);
        $h = intval($_POST['_h']);
        $x = intval($_POST['_x1']);
        $y = intval($_POST['_y1']);

        //obtener el valor scalada
        $valorPromedioW = $width/$wWeb;
        $valorPromedioH = $height/$hWeb;
        $origX = $valorPromedioW * $x;
        $origY = $valorPromedioH * $y;
        $origW = $valorPromedioW * $w;
        $origH = $valorPromedioH * $h;
        
        $origen = imagecreatefrompng($src);
        $imagen_crop = imagecrop($origen,array('x' => intval($origX), 'y' => intval($origY), 'width' => intval($origW), 'height' => intval($origH) ));

        //$destino = imagecreatetruecolor($origW,$origH);
        //imagecopy($destino, $origen, 0, 0, $origX, $origY, $origW, $origH);

        imagepng($imagen_crop, "img/profile/temp_$id.png");
        imagedestroy($origen);
        imagedestroy($imagen_crop);
        //imagedestroy($destino);

        $name = $id.'.png';

        $origen = imagecreatefrompng("img/profile/temp_$id.png");
        $imagen_escalada = imagescale($origen,250,250);
        imagepng($imagen_escalada, "img/profile/".$name);
        imagedestroy($origen);
        imagedestroy($imagen_escalada);
        unLink("img/profile/temp_$id.png");
        return $name;
	}

    public function imagenJpeg($src,$data,$id)
    {
        $width = intval($data[0]);
        $height = intval($data[1]);

        $origen = imagecreatefromjpeg($src);
        $imagen_escalada = imagescale($origen,$width*0.4, $height*0.4);

        $fecha = new \DateTime("now");
        $name = $id.$fecha->format('Y-m-d H-i-s').'.jpg';

        imagejpeg($imagen_escalada, "img/project/".$name);

        imagedestroy($origen);
        imagedestroy($imagen_escalada);
        return $name;
    }
	
    public function imagenPng($src,$data,$id)
    {
        $width = intval($data[0]);
        $height = intval($data[1]);

        $origen = imagecreatefrompng($src);
        $imagen_escalada = imagescale($origen,$width*0.4, $height*0.4);

        $fecha = new \DateTime("now");
        $name = $id.$fecha->format('Y-m-d H-i-s').'.png';

        imagepng($imagen_escalada, "img/project/".$name);

        imagedestroy($origen);
        imagedestroy($imagen_escalada);
        return $name;
    }


    public function imagenWebProfile($src,$id){
        $data = getimagesize($src);
        $width = intval($data[0]);
        $height = intval($data[1]);

          //tamabo de Width and Height en la pagina Web
        $wWeb = intval($_POST['_wWebwc']);
        $hWeb = intval($_POST['_hWebwc']);

        //seleccion del area
        $w = intval($_POST['_wwc']);
        $h = intval($_POST['_hwc']);
        $x = intval($_POST['_x1wc']);
        $y = intval($_POST['_y1wc']);

        //obtener el valor scalada
        $valorPromedioW = $width/$wWeb;
        $valorPromedioH = $height/$hWeb;
        $origX = $valorPromedioW * $x;
        $origY = $valorPromedioH * $y;
        $origW = $valorPromedioW * $w;
        $origH = $valorPromedioH * $h;
        
        $origen = imagecreatefrompng($src);
        $imagen_crop = imagecrop($origen,array('x' => intval($origX), 'y' => intval($origY), 'width' => intval($origW),'height' => intval($origH) ));
        //$destino = imagecreatetruecolor($origW,$origH);
        //imagecopy($destino, $origen, 0, 0, $origX, $origY, $origW, $origH);
        
        imagepng($imagen_crop, "img/profile/temp_$id.png");
        imagedestroy($origen);
        imagedestroy($imagen_crop);

        $name = $id.'.png';

        $origen = imagecreatefrompng("img/profile/temp_$id.png");
        $imagen_escalada = imagescale($origen,250,250);
        imagepng($imagen_escalada, "img/profile/".$name);
        imagedestroy($origen);
        imagedestroy($imagen_escalada);
        unLink("img/profile/temp_$id.png");
        return $name;
    }


    public function deleteImagenPortafolio($imagenUrl){
         if(file_exists("img/project/$imagenUrl")){
            unLink("img/project/$imagenUrl");
        }
    }

    public function deleteImagenProfile($imagenUrl){
        if(file_exists("img/profile/".$imagenUrl)){
            unLink("img/profile/".$imagenUrl);
            return true;
        }
        else{
            return false;
        }
    }

}

