<?php

/**
 * Created by PhpStorm.
 * User: Dimas
 * Date: 11/21/2016
 * Time: 12:27 PM
 */
class Security extends CI_Model {
    public function __construct(){
        parent::__construct();
    }

    /**
     * Check Apakah ApiKey Valid?
     * @param $Api_Key
     * @param int $Levelnya
     * @return bool
     */
    public function IsValidApiKey($Api_Key, $Levelnya=0){
        $Hasil=array();
        $Hasil["IsError"]=TRUE;

        // Select to sys_application
        $this->db->select('*');
        $this->db->from('sys_application');
        $this->db->where("id='".$Api_Key."'");
//        $this->db->limit(1);
        $query = $this->db->get();

        if ($query->num_rows() >0) {
            $ResultDB=$query->result();

            // Ambil datanya
            $Dev_Nama=$ResultDB[0]->dev_nama;
            $Dev_Email=$ResultDB[0]->dev_email;
            $Dev_NoTelp=$ResultDB[0]->dev_notelp;

            // Pastikan statusnya aktif
            $Status=$ResultDB[0]->status;
            if($Status!=1){
                $Hasil["IsError"]=TRUE;
                $Hasil["ErrMessage"]="Your application key is not active. Please contact " . $Dev_Nama . ", phone " . $Dev_NoTelp. ", email " . $Dev_Email;
                return $Hasil;
            }

            // Pastikan levelnya cukup untuk akses API ini
            $Level=$ResultDB[0]->level;
            if($Level<$Levelnya){
                $Hasil["IsError"]=TRUE;
                $Hasil["ErrMessage"]="Your application key level '".$Level."' is not enough to access this API. Please contact " . $Dev_Nama . ", phone " . $Dev_NoTelp. ", email " . $Dev_Email;
                return $Hasil;
            }

            // Pastikan IP address bisa akses
            $Ip=$ResultDB[0]->allow_ip;
            if($Ip!="*"){
                $IpNya=$this->input->ip_address();

                if (!preg_match('/'.str_replace(".","\.",$IpNya).'/',$Ip)){
                    $Hasil["IsError"]=TRUE;
                    $Hasil["ErrMessage"]= "Your IP '" . $IpNya . "' is not valid to access this API. Please contact " . $Dev_Nama . ", phone " . $Dev_NoTelp. ", email " . $Dev_Email;
                    return $Hasil;
                }
            }
        }else{
            $Api_Dev_Nama=$this->config->item("Api_Dev_Nama");
            $Api_Dev_Email=$this->config->item("Api_Dev_Email");
            $Api_Dev_NoTelp=$this->config->item("Api_Dev_NoTelp");
            $Hasil["IsError"]=TRUE;
            $Hasil["ErrMessage"]= "Api_Key '" . $Api_Key . "' is not registered. Please contact " . $Api_Dev_Nama . ", phone " . $Api_Dev_NoTelp. ", email " . $Api_Dev_Email;
            return $Hasil;
        }

        $Hasil["IsError"]=FALSE;
        return $Hasil;
    }


}