<?php

/**
 * Created by PhpStorm.
 * User: Dimas
 * Date: 11/24/2016
 * Time: 2:06 PM
 */
class Logging extends CI_Model  {
    public function __construct(){
        parent::__construct();
    }


    public function InsertSysLogResponse($MethodName,$Value,$Response,$UserName,$IsSuccess,$FromIP=""){
        $Hasil["IsError"]=true;
        $DataInsert=array(
            "METHOD_NAME"=>$MethodName,
            "VALUE"=>$Value,
            "RESPONSE"=>json_encode($Response),
            "EXECUTED_BY"=>$UserName,
            "IS_SUCCESS"=>$IsSuccess,
            "FROM_IP"=>$FromIP
        );

        $ResultDB=$this->db->insert("SYS_LOG_RESPONSE",$DataInsert);
        if($ResultDB){
            $Hasil["IsError"]=false;
        }
        return $Hasil;
    }

    public function InsertSysLogUser($Tabel,$IdData,$IdUser,$Aktifitas,$Uraian,$App,$FromIP){
        $Hasil["IsError"]=true;
        $DataInsert=array(
            "TABEL"=>$Tabel,
            "ID_DATA"=>$IdData,
            "ID_USER"=>$IdUser,
            "AKTIVITAS"=>$Aktifitas,
            "URAIAN"=>$Uraian,
            "APP"=>$App,
            "IP"=>$FromIP
        );

        $ResultDB=$this->db->insert("SYS_LOG_USER",$DataInsert);

        if($ResultDB){
            $Hasil["IsError"]=false;
        }
        return $Hasil;
    }
}