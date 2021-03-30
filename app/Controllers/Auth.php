<?php namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\UserModel;
class Auth extends Controller
{
    public function __construct()
    {
        helper('text');
    }
    public function register(){
        $val = $this->validate(
            [
                'nama_user' => 'required',
                'email_user' => 'required',
                'password' => 'required',
                'jabatan_user' => 'required',
                'level' => 'required',
            ],
        );
        if(!$val){
            $pesanvalidasi = \Config\Services::validation();
            return redirect()->to('/register')->withInput()->with('validate',$pesanvalidasi);
        }
        $data = array(
            'nama_user' => $this->request->getPost('nama_user'),
            'password' => md5($this->request->getPost('password')),
            'email_user' => $this->request->getPost('email_user'),
            'jabatan_user' => $this->request->getPost('jabatan_user'),
            'level' => $this->request->getPost('level')
        );
        $model = new UserModel;
        $model->insert($data);
        session()->setFlashdata('pesan','Selamat Anda Berhasil Login, Silahkan Login Kembali');
        return redirect()->to('/');
    }
}