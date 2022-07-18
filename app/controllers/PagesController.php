<?php

namespace App\Controllers;

use App\Core\App;
use App\Core\Totp;

class PagesController
{
    /**
     * Show the home page.
     */
    public function home()
    {
        return view('index');
    }

    /**
     * Show the Sql page.
     */
    public function sql()
    {
        return view('sql');
    }

    /**
     * Show the categories page.
     */
    public function categories()
    {
        // $data = App::get('database')->all('tbl_category');
        // $data = App::get('database')->where('tbl_category', 'WHERE parent_category_id = 0');

        // return view('categories', compact('data'));
        return view('categories');
    }

    /**
     * Show the accounts page.
     */
    public function accounts()
    {
        $accounts_types = App::get('database')->all('accounts_types');

        return view('accounts', compact('accounts_types'));
    }

    /**
     * Show the accounts page.
     * Store the secrets in your db
     */
    public function totp($secret = 'PVNS6XK4KF3H64C6')
    {
        $secret = $_GET['secret'];

        $totp = new Totp();
        /** Create new secret for each user and app */
        // $secret = $totp->createSecret();
        // $secret = 'PVNS6XK4KF3H64C6';
        // $secret = '12345678901234567890';
        // echo "Secret is: ".$secret."\n\n";

        /** Generate the QR code to be stored in authenticator app */
        /*
        otpauth://totp/Obeikan AuthApp:anwar@obeikan.com?secret=12345678901234567890&period=30&digits=6&algorithm=SHA1&issuer=Obeikan AuthApp
        otpauth://totp/Obeikan%20AuthApp:anwar%40obeikan.com?secret=12345678901234567890&period=30&digits=6&algorithm=SHA1&issuer=Obeikan%20AuthApp
        otpauth%3A%2F%2Ftotp%2FObeikan+AuthApp%3Aanwar%40obeikan.com%3Fsecret%3D12345678901234567890&size=200x200&ecc=M
        */
        $qrCodeUrl = $totp->getQRCodeGoogleUrl('ObeikanTow', $secret);
        $authLink = $totp->getAuthLink($secret);
        // echo "Google Charts URL for the QR-Code: ".$qrCodeUrl."\n\n";

        /** Test the one time password from the authenticator app with $oneCode */
        $oneCode = $totp->getCode($secret);
        // echo "Checking Code '$oneCode' and Secret '$secret':\n";

        $values = ['authLink' => $authLink, 'secret' => $secret, 'qrCodeUrl' => $qrCodeUrl, 'oneCode' => $oneCode];

        return view('totp', ['values' => $values]);
    }
}
