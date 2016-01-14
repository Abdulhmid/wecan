<?php

use App\Model;

class GLobalHelper {

    public static function url() {
        return explode('/', \Request::url());
    }

    public static function indexUrl() {
        return Request::segment(1);
    }

    public static function lastUrl() {
        return last(self::url());
    }

    public static function messages($msg = "", $error = false, $warning = false, $dissmiss = true) {
        $type = ((($error == true) ? 'danger' : (($warning == true) ? 'warning' : 'success')));
        $autoHide = ($dissmiss == true ? 'autohide' : '');
        $icon = ($warning == true ? "fa-warning" : "fa-info");

        return '<div class="no-print alert alert-dismissable ' . $autoHide . ' full-alert">
					<div class="callout callout-' . $type . '">					
						<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
				    	<h4><i class="fa ' . $icon . '"></i> ' . $msg . '</h4>
					</div>
				  </div>';
    }

    public static function formatDate($date, $format = 'd F Y \a\t H:i') {
        return (!is_null($date)) ? (new DateTime($date))->format($format) : "-";
    }

    public static function encrypt($sData) {
        $id = (double) $sData * 432.234;
        return strtr(rtrim(base64_encode($id), '='), '+/', '-_');
    }

    public static function decrypt($sData) {
        $url = base64_decode(strtr($sData, '-_', '+/'));
        $id = (double) $url / 432.234;
        return intval($id);
    }

    public static function encrypt_decrypt_string($action, $string) {
        $output = false;

        $encrypt_method = "AES-256-CBC";
        $secret_key = 'This is my secret key';
        $secret_iv = 'This is my secret iv';

        // hash
        $key = hash('sha256', $secret_key);

        // iv - encrypt method AES-256-CBC expects 16 bytes - else you will get a warning
        $iv = substr(hash('sha256', $secret_iv), 0, 16);

        if ($action == 'encrypt') {
            $output = openssl_encrypt($string, $encrypt_method, $key, 0, $iv);
            $output = base64_encode($output);
        } else if ($action == 'decrypt') {
            $output = openssl_decrypt(base64_decode($string), $encrypt_method, $key, 0, $iv);
        }

        return $output;
    }

    public static function convertDate($dataConvert, $format = "Y-m-d") {
        $date = date_create($dataConvert);

        return date_format($date, $format);
    }

    public static function idrFormat($number, $prefix = 0) {
        return !is_null($number) ? number_format($number, $prefix, ",", ".") : "-";
    }

    public static function person() {
        return Model\Users::find(session('partner')['users_id']);
    }

    public static function users_scope_site() {
        $site_list = Model\Users_site_scope::where('users_id', '=', GLobalHelp::person()->users_id)->get();
        $temp = [];
        if (!empty($site_list)) {
            foreach ($site_list as $key => $value) {
                $temp[] = $value->site_id;
            }
        }

        return $temp;
    }

    public static function site_list() {
        if (GLobalHelp::person()->all_scope == false) {
            return Model\Site::whereHas('users_site_scope', function ($q) {
                        $q->where('users_id', '=', GLobalHelp::person()->users_id);
                    })->orderBy('name', 'asc')->groupBy('site.name', 'site.site_id')->get();
        } else {
            return Model\Site::where('partner_id', '=', GLobalHelp::person()->partner_id)->orderBy('name', 'asc')->groupBy('site.name', 'site.site_id')->get();
        }
    }

    public static function is_active($current = '', $segment = 1) {
        return $current == Request::segment($segment) ? 'active' : '';
    }

    public static function scope_compare($users_id = 0) {

        $current_scope = Model\Users_site_scope::where('users_id', '=', GLobalHelp::person()->users_id)->get();
        $edited_scope = Model\Users_site_scope::where('users_id', '=', $users_id)->get();

        $current = [];
        if (!empty($current_scope)) {
            foreach ($current_scope as $key => $value) {
                $current[] = $value->site_id;
            }
        }

        $edited = [];
        if (!empty($edited_scope)) {
            foreach ($edited_scope as $key => $value) {
                $edited[] = $value->site_id;
            }
        }
        
        return $current == $edited ? 1 : 0;
    }

    public static function randomColor() {
        $r = dechex(mt_rand(50, 255));
        $g = dechex(mt_rand(50, 255));
        $b = dechex(mt_rand(50, 255));
        $rgb = $r . $g . $b;

        if ($r == $g && $g == $b) {
            $rgb = substr($rgb, 0, 3);
        }
        return '#' . $rgb;
    }

    public static function takeImage($url) {
        $defaultPhoto = asset('photo/not_found.gif');

        if (is_null($url)) {
            return $defaultPhoto;
        }

        try {
            $size = getimagesize($url);
        } catch (\Exception $e) {
            return $defaultPhoto;
        }

        return $url;
    }

    public static function getDays() {
        return [
            1 => 'Senin',
            2 => 'Selasa',
            3 => 'Rabu',
            4 => 'Kamis',
            5 => 'Jumat',
            6 => 'Sabtu',
            7 => 'Minggu'
        ];
    }

    public static function getMonth() {
        return [
            1 => 'Januari',
            2 => 'Februari',
            3 => 'Maret',
            4 => 'April',
            5 => 'Mei',
            6 => 'Juni',
            7 => 'Juli',
            8 => 'Agustus',
            9 => 'September',
            10 => 'Oktober',
            11 => 'November',
            12 => 'Desember'
        ];
    }

}
