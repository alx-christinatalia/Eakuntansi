<?php
/**
 * Created by PhpStorm.
 * User: Dimas
 * Date: 11/21/2016
 * Time: 1:32 PM
 */


$config['isLogApiResponse']	= true;

$config['Api_Dev_Nama']	= 'Fatkul Amri';
$config['Api_Dev_Email']	= 'fatkulamri@gmail.com';
$config['Api_Dev_NoTelp']	= '081234-306725';

$config['ServerDownload']=1;
$config['DiskDownload']=array("-","D:/CDN");
$config['PathDownloadImage']="/images";
$config['PathDownloadFile']="/files";
$config['PathWatermark']=FCPATH."/assets/watermark/";
$config['PathWatermarkImage']=FCPATH."/assets/watermark/watermark.png";
//$config['PathWatermarkImage']=FCPATH."/assets/images/water2.jpg";
$config["SettingImage"]=array (
    'size' =>
        array (
            'large' =>
                array (
                    'height' => '720',
                    'width' => '1280',
                    'quality' => 90,
                ),
            'medium' =>
                array (
                    'height' => '320',
                    'width' => '480',
                    'quality' => 90,
                ),
        ),
    'type' => 'jpg',
    'watermark'=>array(
        "use"=>false,
        "vrt_alignment"=>"bottom",
        "hor_alignment"=>"center",
        "filewatermark"=>"watermark.png"
    )
);






