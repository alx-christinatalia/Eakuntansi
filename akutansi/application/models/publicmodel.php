<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class publicmodel extends CI_Model {	


	public function __construct() {
		parent::__construct();
	}


	public function checkPermission() {
		if($this->session->userdata("user") != "") {
			$user = $this->session->userdata("user");

		} else {
			redirect("user/logout");
		}
	}

    public function accessPermission($akses){
        $loadakses = $this->session->userdata("user") ;
        $admin = $loadakses->is_admin;
        $aksesArr = str_split($loadakses->akses, 1);
        if($aksesArr[$akses] == "0"){
            redirect("Akses-ditolak");
        }
        if($akses == "11"){
            if($akses == "0"){
                redirect("Akses-ditolak");
            }
        }
    }

    public function tglCek($tgl){
        $return = "";
        $tgl1 = date("d M Y", strtotime($tgl));
        if($tgl1 =="01 Jan 1970"){
            $return = "";
        }else{
            $return = $tgl;
        }
        return $return;
    }

    

	public function rupiah ($angka) {
		$rupiah = number_format($angka ,0, '' , '.' );
		return $rupiah;
	}

	public function rupiahtbl ($data,$field) {
        foreach ($field as $key) {
            foreach ($data->Data as $value) {
                $value->key = number_format($value->key ,0, '' , '.' );
            }
        }
        return $data;
    }

	public function terbilang ($angka) {
        
        $angka = (float)$angka;
        $bilangan = array('','Satu','Dua','Tiga','Empat','Lima','Enam','Tujuh','Delapan','Sembilan','Sepuluh','Sebelas');

        if ($angka < 12) {
            return $bilangan[$angka];
        } else if ($angka < 20) {
            return $bilangan[$angka - 10] . ' Belas';
        } else if ($angka < 100) {
            $hasil_bagi = (int)($angka / 10);
            $hasil_mod = $angka % 10;
            return trim(sprintf('%s Puluh %s', $bilangan[$hasil_bagi], $bilangan[$hasil_mod]));
        } else if ($angka < 200) {
            return sprintf('Seratus %s', $this->terbilang($angka - 100));
        } else if ($angka < 1000) {
            $hasil_bagi = (int)($angka / 100);
            $hasil_mod = $angka % 100;
            return trim(sprintf('%s Ratus %s', $bilangan[$hasil_bagi], $this->terbilang($hasil_mod)));
        } else if ($angka < 2000) {
            return trim(sprintf('Seribu %s', $this->terbilang($angka - 1000)));
        } else if ($angka < 1000000) {
            $hasil_bagi = (int)($angka / 1000); 
            $hasil_mod = $angka % 1000;
            return sprintf('%s Ribu %s', $this->terbilang($hasil_bagi), $this->terbilang($hasil_mod));
        } else if ($angka < 1000000000) {
            $hasil_bagi = (int)($angka / 1000000);
            $hasil_mod = $angka % 1000000;
            return trim(sprintf('%s Juta %s', $this->terbilang($hasil_bagi), $this->terbilang($hasil_mod)));
        } else if ($angka < 1000000000000) {
            $hasil_bagi = (int)($angka / 1000000000);
            $hasil_mod = fmod($angka, 1000000000);
            return trim(sprintf('%s Milyar %s', $this->terbilang($hasil_bagi), $this->terbilang($hasil_mod)));
        } else if ($angka < 1000000000000000) {
            $hasil_bagi = $angka / 1000000000000;
            $hasil_mod = fmod($angka, 1000000000000);
            return trim(sprintf('%s Triliun %s', $this->terbilang($hasil_bagi), $this->terbilang($hasil_mod)));
        } else {
            return 'Data Salah';
        }
    }
    
    public function namabulan($bln){
        switch ($bln) {
            case '1':
                return "Januari";
                break;
            
            case '2':
                return "Februari";
                break;

            case '3':
                return "Maret";
                break;

            case '4':
                return "April";
                break;

            case '5':
                return "Mei";
                break;

            case '6':
                return "Juni";
                break;

            case '7':
                return "Juli";
                break;

            case '8':
                return "Agustus";
                break;

            case '9':
                return "September";
                break;

            case '10':
                return "Oktober";
                break;

            case '11':
                return "November";
                break;

            case '12':
                return "Desember";
                break;

            default:
                return "error";
                break;
        }
    }    
}