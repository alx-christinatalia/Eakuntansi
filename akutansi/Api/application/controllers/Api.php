<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Api extends CI_Controller {

	public function __construct(){
        parent::__construct();
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
        $this->load->model("Databaseapi");
        $this->load->model("Fileapi");
        $this->load->model("Security");
        $this->load->model("Logging");

        $this->output->set_content_type('application/json');
    }

    public function index(){
        $Hasil["IsError"]=true;
        $Hasil["ErrMessage"]="Access not authorized!";
        echo json_encode($Hasil);
        return;
    }


	public function Execute(){
        $Hasil=array();
        $TimeExecute = microtime(true);
        $Hasil["IsError"]=true;

        //Set Default Paging
        $Hasil["Paging"]="";

        // Form Validation
        $this->form_validation->set_rules('Api_Key', 'Api_Key', 'required',
            array("required"=>"Api_Key wajib diisi!"));
        $this->form_validation->set_rules('Target', 'Target', 'required',
            array("required"=>"Target wajib diisi!"));
        $this->form_validation->set_rules('Activity', 'Activity', 'required|callback_Activity',
            array("required"=>"Activity wajib diisi!"));
        $this->form_validation->set_rules('ParamsData', 'ParamsData', 'callback_ParamsData');
        $this->form_validation->set_rules('ParamsFilter', 'ParamsFilter', 'callback_ParamsFilter');

        // Execute Form Validation
        if ($this->form_validation->run() == FALSE){
            $Hasil["IsError"]=true;
            $Hasil["ErrMessage"]=$this->form_validation->error_array();
            $Hasil["ErrMessage"]=(!empty($Hasil["ErrMessage"])?$Hasil["ErrMessage"]:"Access not authorized!");
            goto Output;
//            echo json_encode($Hasil);
//            return;
        }

        $CekSecurity=$this->Security->IsValidApiKey($this->input->post('Api_Key'));
        if($CekSecurity["IsError"] && !empty($CekSecurity)){
            $Hasil["IsError"]=true;
            $Hasil["ErrMessage"]=$CekSecurity["ErrMessage"];
            goto Output;
//            echo json_encode($Hasil);
//            return;
        }



        $ParamExecute=array(
            "Target" => $this->input->post("Target"),
            "Activity" => $this->input->post("Activity"),
            "ParamsData" => $this->input->post("ParamsData"),
            "ParamsField" => $this->input->post("ParamsField"),
            "ParamsFilter" => $this->input->post("ParamsFilter"),
            "ParamsSort" => $this->input->post("ParamsSort"),
            "ParamsGroupBy" => $this->input->post("ParamsGroupBy"),
            "Page" => $this->input->post("Page"),
            "Limit" => $this->input->post("Limit"),
            "GetLastId" => $this->input->post("GetLastId"),
            "ProcessName" => $this->input->post("ProcessName"),
            "UserId" => $this->input->post("UserId"),
            "FromIP" => $this->input->post("FromIP"),
        );


        $ExecuteDB=$this->Databaseapi->Execute($ParamExecute);
        $Hasil=$ExecuteDB;

//         Masukkan ke Log
        $IsLogApiResponse=$this->config->item("ServerDownload");
        if($IsLogApiResponse){
            $this->Logging->InsertSysLogResponse("Execute",implode("|",$ParamExecute),(!$Hasil["IsError"]?$Hasil["Output"]:$Hasil["ErrMessage"]),"API-BO",(!$Hasil["IsError"]?1:0),$this->input->ip_address());
        }

        if($ExecuteDB["IsError"] && !empty($ExecuteDB)){
            $Hasil["IsError"]=true;
            $Hasil["ErrMessage"]=$ExecuteDB["ErrMessage"];
            goto Output;
//            echo json_encode($Hasil);
//            return;
        }


    Output:
        $TimeExecute = (microtime(true) - $TimeExecute);
        $Hasil["Output"]=(!empty($Hasil["Output"])?$Hasil["Output"]:"");
        $Hasil["Process"]=$ParamExecute["ProcessName"];
        $Hasil["Time"]=round($TimeExecute*1000)." ms";
        echo json_encode($Hasil);
        return;
    }

    public function FileUpload(){
        $Hasil=array();
        $TimeExecute = microtime(true);
        $Hasil["IsError"]=true;


        // Form Validation
        $this->form_validation->set_rules('Api_Key', 'Api_Key', 'required',
            array("required"=>"Api_Key wajib diisi!"));
        $this->form_validation->set_rules('FolderName', 'FolderName', 'required',
            array("required"=>"Value of FolderName can't be empty."));
        $this->form_validation->set_rules('FileExtension', 'FileExtension', 'required',
            array("required"=>"Value of FileExtension can't be empty."));
        $this->form_validation->set_rules('FileBase64', 'FileBase64', 'required',
            array("required"=>"Value of FileBase64 can't be empty"));

        // Execute Form Validation
        if ($this->form_validation->run() == FALSE){
            $Hasil["IsError"]=true;
            $Hasil["ErrMessage"]=$this->form_validation->error_array();
            $Hasil["ErrMessage"]=(!empty($Hasil["ErrMessage"])?$Hasil["ErrMessage"]:"Access not authorized!");
            echo json_encode($Hasil);
            return;
        }

        $CekSecurity=$this->Security->IsValidApiKey($this->input->post('Api_Key'));
        if($CekSecurity["IsError"] && !empty($CekSecurity)){
            $Hasil["IsError"]=true;
            $Hasil["ErrMessage"]=$CekSecurity["ErrMessage"];
            echo json_encode($Hasil);
            return;
        }


        $ParamUpload=array(
            "FolderName" => $this->input->post("FolderName"),
            "FileExtension" => $this->input->post("FileExtension"),
            "FileBase64" => $this->input->post("FileBase64"),
        );

        //Replace Extention jika ada .
        preg_match("/[^\.](\w+)$/",$ParamUpload["FileExtension"],$matches);
        $ParamUpload["FileExtension"]=$matches[0];

        $ExecuteUpload=$this->Fileapi->File_Upload($ParamUpload);
        $Hasil=$ExecuteUpload;
        if($ExecuteUpload["IsError"] && !empty($ExecuteUpload)){
            $Hasil["IsError"]=true;
            $Hasil["ErrMessage"]=$ExecuteUpload["ErrMessage"];
            echo json_encode($Hasil);
            return;
        }



        $TimeExecute = (microtime(true) - $TimeExecute);
        $Hasil["Output"]=(!empty($Hasil["Output"])?$Hasil["Output"]:"");
        $Hasil["Process"]="FileUpload";
        $Hasil["IsError"]=false;
        $Hasil["Time"]=round($TimeExecute*1000)." ms";
        echo json_encode($Hasil);
        return;
    }
    public function FileDelete(){
        $Hasil=array();
        $TimeExecute = microtime(true);
        $Hasil["IsError"]=true;


        // Form Validation
        $this->form_validation->set_rules('Api_Key', 'Api_Key', 'required',
            array("required"=>"Api_Key wajib diisi!"));
        $this->form_validation->set_rules('ServerFile', 'ServerFile', 'required',
            array("required"=>"Value of ServerFile can't be empty."));
        $this->form_validation->set_rules('PathFile', 'PathFile', 'required',
            array("required"=>"Value of PathFile can't be empty."));

        // Execute Form Validation
        if ($this->form_validation->run() == FALSE){
            $Hasil["IsError"]=true;
            $Hasil["ErrMessage"]=$this->form_validation->error_array();
            $Hasil["ErrMessage"]=(!empty($Hasil["ErrMessage"])?$Hasil["ErrMessage"]:"Access not authorized!");
            echo json_encode($Hasil);
            return;
        }

        $CekSecurity=$this->Security->IsValidApiKey($this->input->post('Api_Key'));
        if($CekSecurity["IsError"] && !empty($CekSecurity)){
            $Hasil["IsError"]=true;
            $Hasil["ErrMessage"]=$CekSecurity["ErrMessage"];
            echo json_encode($Hasil);
            return;
        }


        $ParamDelete=array(
            "ServerFile" => $this->input->post("ServerFile"),
            "PathFile" => $this->input->post("PathFile"),
        );

        $Execute=$this->Fileapi->File_Delete($ParamDelete);
        $Hasil=$Execute;
        if($Execute["IsError"] && !empty($Execute)){
            $Hasil["IsError"]=true;
            $Hasil["ErrMessage"]=$Execute["ErrMessage"];
            echo json_encode($Hasil);
            return;
        }


        $TimeExecute = (microtime(true) - $TimeExecute);
        $Hasil["Output"]=(!empty($Hasil["Output"])?$Hasil["Output"]:"");
        $Hasil["Process"]="FileDelete";
        $Hasil["IsError"]=false;
        $Hasil["Time"]=round($TimeExecute*1000)." ms";
        echo json_encode($Hasil);
        return;
    }
    public function ImageDelete(){
        $Hasil=array();
        $TimeExecute = microtime(true);
        $Hasil["IsError"]=true;


        // Form Validation
        $this->form_validation->set_rules('Api_Key', 'Api_Key', 'required',
            array("required"=>"Api_Key wajib diisi!"));
        $this->form_validation->set_rules('ServerImage', 'ServerImage', 'required',
            array("required"=>"Value of ServerFile can't be empty."));
        $this->form_validation->set_rules('PathImage', 'PathImage', 'required',
            array("required"=>"Value of PathFile can't be empty."));

        // Execute Form Validation
        if ($this->form_validation->run() == FALSE){
            $Hasil["IsError"]=true;
            $Hasil["ErrMessage"]=$this->form_validation->error_array();
            $Hasil["ErrMessage"]=(!empty($Hasil["ErrMessage"])?$Hasil["ErrMessage"]:"Access not authorized!");
            echo json_encode($Hasil);
            return;
        }

        $CekSecurity=$this->Security->IsValidApiKey($this->input->post('Api_Key'));
        if($CekSecurity["IsError"] && !empty($CekSecurity)){
            $Hasil["IsError"]=true;
            $Hasil["ErrMessage"]=$CekSecurity["ErrMessage"];
            echo json_encode($Hasil);
            return;
        }


        $ParamDelete=array(
            "ServerImage" => $this->input->post("ServerImage"),
            "PathImage" => $this->input->post("PathImage"),
        );

        $Execute=$this->Fileapi->Image_Delete($ParamDelete);
        $Hasil=$Execute;
        if($Execute["IsError"] && !empty($Execute)){
            $Hasil["IsError"]=true;
            $Hasil["ErrMessage"]=$Execute["ErrMessage"];
            echo json_encode($Hasil);
            return;
        }


        $TimeExecute = (microtime(true) - $TimeExecute);
        $Hasil["Output"]=(!empty($Hasil["Output"])?$Hasil["Output"]:"");
        $Hasil["Process"]="ImageDelete";
        $Hasil["IsError"]=false;
        $Hasil["Time"]=round($TimeExecute*1000)." ms";
        echo json_encode($Hasil);
        return;
    }
    public function ImageUpload(){
        $Hasil=array();
        $TimeExecute = microtime(true);
        $Hasil["IsError"]=true;


        // Form Validation
        $this->form_validation->set_rules('Api_Key', 'Api_Key', 'required',
            array("required"=>"Api_Key wajib diisi!"));
        $this->form_validation->set_rules('FolderName', 'FolderName', 'required',
            array("required"=>"Value of FolderName can't be empty."));
        $this->form_validation->set_rules('FileBase64', 'FileBase64', 'required',
            array("required"=>"Value of FileBase64 can't be empty"));

        // Execute Form Validation
        if ($this->form_validation->run() == FALSE){
            $Hasil["IsError"]=true;
            $Hasil["ErrMessage"]=$this->form_validation->error_array();
            $Hasil["ErrMessage"]=(!empty($Hasil["ErrMessage"])?$Hasil["ErrMessage"]:"Access not authorized!");
            echo json_encode($Hasil);
            return;
        }

        $CekSecurity=$this->Security->IsValidApiKey($this->input->post('Api_Key'));
        if($CekSecurity["IsError"] && !empty($CekSecurity)){
            $Hasil["IsError"]=true;
            $Hasil["ErrMessage"]=$CekSecurity["ErrMessage"];
            echo json_encode($Hasil);
            return;
        }


        $ParamUpload=array(
            "FolderName" => $this->input->post("FolderName"),
            "SettingGambar" => $this->input->post("SettingGambar"),
            "FileBase64" => $this->input->post("FileBase64"),
        );

        $ExecuteUpload=$this->Fileapi->Image_Upload($ParamUpload);
        $Hasil=$ExecuteUpload;
        if($ExecuteUpload["IsError"] && !empty($ExecuteUpload)){
            $Hasil["IsError"]=true;
            $Hasil["ErrMessage"]=$ExecuteUpload["ErrMessage"];
            echo json_encode($Hasil);
            return;
        }



        $TimeExecute = (microtime(true) - $TimeExecute);
        $Hasil["Output"]=(!empty($Hasil["Output"])?$Hasil["Output"]:"");
        $Hasil["Process"]="FileUpload";
        $Hasil["IsError"]=false;
        $Hasil["Time"]=round($TimeExecute*1000)." ms";
        echo json_encode($Hasil);
        return;
    }

    function ParamsData(){
        $Activity = $this->input->post('Activity');
        $ParamsData = $this->input->post('ParamsData');

        if (preg_match('/^(update|insert|findbykeyword)$/',$Activity)){
            if(empty($ParamsData)){
                $this->form_validation->set_message('ParamsData', 'ParamsData wajib diisi!');
                return FALSE;
            }else{
                return TRUE;
            }
        }



    }
    function ParamsFilter(){
        $Activity = $this->input->post('Activity');
        $ParamsFilter = $this->input->post('ParamsFilter');

        if (preg_match('/^(update|delete)$/',$Activity)){
            if(empty($ParamsFilter)){
                $this->form_validation->set_message('ParamsFilter', 'ParamsFilter wajib diisi!');
                return FALSE;
            }else{
                return TRUE;
            }
        }



    }
    function Activity(){
        $Activity = $this->input->post('Activity');

        if (!preg_match('/^(update|insert|findbykeyword|update|delete|get)$/',$Activity)){
                $this->form_validation->set_message('Activity', 'Invalid Activity!');
                return FALSE;
        }else{
            return TRUE;
        }

    }

}
