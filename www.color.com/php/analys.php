<?php
function thumbnailImage($imagePath) {
    $image= new Imagick(realpath($imagePath));

//    echo $image->getColorSpace();
//    echo $image->getImageMimeType();

//    print_r($image->getImageProfiles("icc", true));

    $width = $image->getImageWidth();
    $height=$image->getImageHeight();

//    $image->rotateimage("#000", 90);
//    $image->writeImage('5.jpg');

    $image->blurImage(5,3);
//    $image->setCompressionQuality(100);
    echo $image;

//    $image->setbackgroundcolor('rgb(255, 00, 00)');
//    $image->thumbnailImage($height/10, $width/10, true, false);
//    header("Content-Type: image/jpg");
//    echo $image->getImageBlob();
}

//thumbnailImage('./public/images/design-center/backyard-projects/bottle-torches/Bottle-Torch--Hero.png');


function getImagesMain3($imagepath) {
$file_to_grab_with_location = $imagepath; //caminho relativo ao arquivo de imagem

$imagick_type = new Imagick($imagepath);

$frequency_list_of_values = array();

$image_resolution_width = $imagick_type->getImageWidth();
$image_resolution_height = $imagick_type->getImageHeight();

print("Image Resolution:  Width - $image_resolution_width / Height - $image_resolution_height<br><br>");

for($y = 0; $y < $image_resolution_height; $y++)
{

    for($x = 0; $x < $image_resolution_width; $x++)
    {

        $pixel_to_examine = $imagick_type->getImagePixelColor($x,$y);

        if(isset($frequency_list_of_values[$pixel_to_examine->getColorAsString()]) == TRUE)
        {
            $temp = $frequency_list_of_values[$pixel_to_examine->getColorAsString()];
            $temp++;
            $frequency_list_of_values[$pixel_to_examine->getColorAsString()] = $temp;
        }
        else
        {
            $frequency_list_of_values[$pixel_to_examine->getColorAsString()] = 1;
        }
    }

    arsort($frequency_list_of_values);
}

print("<pre>");
print_r($frequency_list_of_values);
print("</pre>");

}

//getImagesMain3('./public/images/design-center/backyard-projects/bottle-torches/Bottle-Torch--Hero.png');

function getColorStatistics($histogramElements, $colorChannel) {
    $colorStatistics = [];

    foreach ($histogramElements as $histogramElement) {
        $color = $histogramElement->getColorValue($colorChannel);
        $color = intval($color * 255);
        $count = $histogramElement->getColorCount();

        if (array_key_exists($color, $colorStatistics)) {
            $colorStatistics[$color] += $count;
        }
        else {
            $colorStatistics[$color] = $count;
        }
    }

    ksort($colorStatistics);

    return $colorStatistics;
}



function getImageHistogram($imagePath) {

    $backgroundColor = 'black';

    $draw = new \ImagickDraw();
    $draw->setStrokeWidth(0); //make the lines be as thin as possible

    $imagick = new \Imagick();
    $imagick->newImage(500, 500, $backgroundColor);
    $imagick->setImageFormat("png");
    $imagick->drawImage($draw);

    $histogramWidth = 256;
    $histogramHeight = 100; // the height for each RGB segment

    $imagick = new \Imagick(realpath($imagePath));
    //Resize the image to be small, otherwise PHP tends to run out of memory
    //This might lead to bad results for images that are pathologically 'pixelly'
    $imagick->adaptiveResizeImage(200, 200, true);
    $histogramElements = $imagick->getImageHistogram();

    $histogram = new \Imagick();
    $histogram->newpseudoimage($histogramWidth, $histogramHeight * 3, 'xc:black');
    $histogram->setImageFormat('png');

    $getMax = function ($carry, $item)  {
        if ($item > $carry) {
            return $item;
        }
        return $carry;
    };

    $colorValues = [
        'red' => getColorStatistics($histogramElements, \Imagick::COLOR_RED),
        'lime' => getColorStatistics($histogramElements, \Imagick::COLOR_GREEN),
        'blue' => getColorStatistics($histogramElements, \Imagick::COLOR_BLUE),
    ];

    $max = array_reduce($colorValues['red'] , $getMax, 0);
    $max = array_reduce($colorValues['lime'] , $getMax, $max);
    $max = array_reduce($colorValues['blue'] , $getMax, $max);

    $scale =  $histogramHeight / $max;

    $count = 0;
    foreach ($colorValues as $color => $values) {
        $draw->setstrokecolor($color);

        $offset = ($count + 1) * $histogramHeight;

        foreach ($values as $index => $value) {
            $draw->line($index, $offset, $index, $offset - ($value * $scale));
        }
        $count++;
    }

    $histogram->drawImage($draw);

    header( "Content-Type: image/png" );
    echo $histogram;
}

//getImageHistogram('./public/images/design-center/backyard-projects/bottle-torches/Bottle-Torch--Hero.png');

class C{}

function my_exif($myimage)
{
    $myimage = new \Imagick(realpath($myimage));
    $r = new C();

    $exifArray = array('exif:Model' => '未知', 'exif:DateTimeOriginal' => '未知',
        'exif:ExposureProgram' => '未知', 'exif:FNumber' => '0/10',
        'exif:ExposureTime' => '0/10', 'exif:ISOSpeedRatings' => '未知',
        'exif:MeteringMode' => '未知', 'exif:Flash' => '关闭闪光灯',
        'exif:FocalLength' => '未知', 'exif:ExifImageWidth' => '未知',
        'exif:ExifImageLength' => '未知'); //初始化部分信息，防止无法读取照片exif信息时运算发生错误
    $exifArray = $myimage->getImageProperties("exif:*"); //读取图片的exif信息，存入$exifArray数组
    //如果需要显示原数组可以使用print_r($exifArray);
    $r->row1 = '相机:' . $exifArray['exif:Model'];
    $r->row1 = $r->row1 . ' 拍摄时间:' . $exifArray['exif:DateTimeOriginal'];
    switch ($exifArray['exif:ExposureProgram']) {
        case 1:
            $exifArray['exif:ExposureProgram'] = "手动(M)";
            break; //Manual Control
        case 2:
            $exifArray['exif:ExposureProgram'] = "程序自动(P)";
            break; //Program Normal
        case 3:
            $exifArray['exif:ExposureProgram'] = "光圈优先(A,Av)";
            break; //Aperture Priority
        case 4:
            $exifArray['exif:ExposureProgram'] = "快门优先(S,Tv)";
            break; //Shutter Priority
        case 5:
            $exifArray['exif:ExposureProgram'] = "慢速快门";
            break; //Program Creative (Slow Program)
        case 6:
            $exifArray['exif:ExposureProgram'] = "运动模式";
            break; //Program Action(High-Speed Program)
        case 7:
            $exifArray['exif:ExposureProgram'] = "人像";
            break; //Portrait
        case 8:
            $exifArray['exif:ExposureProgram'] = "风景";
            break; //Landscape
        default:
            $exifArray['exif:ExposureProgram'] = "其它";
    }
    $r->row1 = $r->row1 . ' 模式:' . $exifArray['exif:ExposureProgram'];
    $exifArray['exif:FNumber'] = explode('/', $exifArray['exif:FNumber']);
//    $exifArray['exif:FNumber'] = $exifArray['exif:FNumber'][0] /
//        $exifArray['exif:FNumber'][1];
//    $r->row2 = '光圈:F/' . $exifArray['exif:FNumber'];
//    $exifArray['exif:ExposureTime'] = explode('/',
//        $exifArray['exif:ExposureTime']);
//    if (($exifArray['exif:ExposureTime'][0] / $exifArray['exif:ExposureTime'][1]) >=
//        1) {
//        $exifArray['exif:ExposureTime'] = sprintf("%.1fs",
//            (float) $exifArray['exif:ExposureTime'][0] /
//            $exifArray['exif:ExposureTime'][1]);
//    } else {
//        $exifArray['exif:ExposureTime'] = sprintf("1/%ds",
//            $exifArray['exif:ExposureTime'][1] / $exifArray['exif:ExposureTime'][0]);
//    }
//    $r->row2 = $r->row2 . ' 快门:' . $exifArray['exif:ExposureTime'];
    $r->row2 = $r->row2 . ' ISO:' . $exifArray['exif:ISOSpeedRatings'];
    $exifArray['exif:ExposureBiasValue'] = explode("/",
        $exifArray['exif:ExposureBiasValue']);
//    $exifArray['exif:ExposureBiasValue'] = sprintf("%1.1feV",
//        ((float) $exifArray['exif:ExposureBiasValue'][0] /
//            $exifArray['exif:ExposureBiasValue'][1] * 100) / 100);
    if ((float) $exifArray['exif:ExposureBiasValue'] > 0) {
        $exifArray['exif:ExposureBiasValue'] = "+" .
            $exifArray['exif:ExposureBiasValue'];
    }
    $r->row2 = $r->row2 . ' 补偿:' . $exifArray['exif:ExposureBiasValue'];
    switch ($exifArray['exif:MeteringMode']) {
        case 0:
            $exifArray['exif:MeteringMode'] = "未知";
            break;
        case 1:
            $exifArray['exif:MeteringMode'] = "矩阵";
            break;
        case 2:
            $exifArray['exif:MeteringMode'] = "中央重点平均";
            break;
        case 3:
            $exifArray['exif:MeteringMode'] = "点测光";
            break;
        case 4:
            $exifArray['exif:MeteringMode'] = "多点测光";
            break;
        default:
            $exifArray['exif:MeteringMode'] = "其它";
    }
    $r->row2 = $r->row2 . ' 测光:' . $exifArray['exif:MeteringMode'];
    switch ($exifArray['exif:Flash']) {
        case 1:
            $exifArray['exif:Flash'] = "开启闪光灯";
            break;
    }
    $r->row2 = $r->row2 . '' . $exifArray['exif:Flash'];
    if ($exifArray['exif:FocalLengthIn35mmFilm']) {
        $r->row3 = '等效焦距:' . $exifArray['exif:FocalLengthIn35mmFilm'] . "mm";
    } else {
//        $exifArray['exif:FocalLength'] = explode("/",
//            $exifArray['exif:FocalLength']);
//        $exifArray['exif:FocalLength'] = sprintf("%4.1fmm",
//            (double) $exifArray['exif:FocalLength'][0] /
//            $exifArray['exif:FocalLength'][1]);
        $r->row3 = '焦距:' . $exifArray['exif:FocalLength'];
    }
    $r->row3 = $r->row3 . ' 原始像素:' . $exifArray['exif:ExifImageWidth'] . 'x' .
        $exifArray['exif:ExifImageLength'] . 'px';
    if ($exifArray['exif:Software']) {
        $r->row3 = $r->row3 . ' 后期:' . $exifArray['exif:Software'];
    }
    var_dump($r);
    return $r;
}

//my_exif('./public/images/design-center/backyard-projects/bottle-torches/Bottle-Torch--Hero.png');


function GetImagesColor($im){
    $colorarr=array();
    $it=$im->getPixelIterator();
    $it->resetIterator();
    while($row= $it->getNextIteratorRow() ){
        foreach($row as $pixel){
            $colorarr[] =$pixel->getColor();
        }
    }
    return $colorarr;
}


function getMainColors($filepath)
{
    $average = new \Imagick($filepath);
    $average->quantizeImage(10, Imagick::COLORSPACE_RGB, 0, false, false);
    $average->uniqueImageColors();

    $colorarr = GetImagesColor($average);
    foreach ($colorarr as $val) {
        echo "<div style='background-color: rgb({$val['r']},{$val['g']},{$val['b']});width:50px;height:50px;float:left;'></div>";
    }

    echo "<div style='clear: both'></div>";
}

$dir = './fuji';
$handle = opendir($dir);
while($file = readdir($handle)){
    if($file !== '..' && $file !== '.'){
        getMainColors($dir.'/'.$file);
    }
}