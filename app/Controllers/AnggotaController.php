<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\AnggotaModel;
use CodeIgniter\HTTP\Response;
use Config\Email;
use PhpParser\Node\Expr\FuncCall;
use PHPUnit\Framework\MockObject\ConfigurableMethodsAlreadyInitializedException;

class AnggotaController extends BaseController
{
    public function index()
    {
        $email      =   $this->request->getPost('email');
        $password   =   $this->request->getPost('sandi');
        
        $pengguna   =   (new AnggotaModel())->where('emai', $email)->first();

        if($pengguna   == null){
            return $this-> response->setJSON(['message'=>"NIM Tidak Diketahui"])
                        ->setStatusCode(403);
        }

        $cekPassword = password_verify($password, $pengguna['sandi']);
        if($cekPassword == false){
            return $this->response->setJSON(['message'=>'NIM dan Password Tidak Sesuai'])
                        ->setStatusCode(403);
        }

        $this->session->set('Anggota', $pengguna);
        return $this->response->setJSON(['message'=>"Selamat Datang {$pengguna['nama']} "])
                    ->setStatusCode(200);
    }

    public function viewLogin(){
        return view('login');
    }

    public function lupaPassword(){
        $_email = $this->request->getPost('email');

        $pengguna = (new AnggotaModel())-> where('email' , $_email)->first();

        if($pengguna == null){
            return $this->response->setJSON(['message'=>'Email tidak terdaftar'])
                        ->setStatusCode(404);
        
        }

        $sandibaru = substr( md5( date('Y-m-dH:i:s')),5,5 );
        $pengguna['sandi']  = password_hash($sandibaru, PASSWORD_BCRYPT);
        $r = (new AnggotaModel())-> update($pengguna['id'],$pengguna);

        if($r == false){
            return $this->response->setJSON(['message'=>'Gagal Merubah Sandi'])
                        ->setStatusCode(502);
        }

        $email = new Email('Config Email');
    }
}
