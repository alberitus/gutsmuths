<?php

namespace App\Controllers;

use App\Models\UserModel;

class User extends BaseController
{
    private $userModel;
    public function __construct()
    {
        $this->userModel = new UserModel();
    }

    public function index()
    {
        
        $this->userModel = new UserModel();
        $dataUser = $this->userModel->findAll();
         // Mengambil nilai pencarian dari query string
         $search = $this->request->getGet('search') ?? '';
         // Memastikan bahwa $search adalah string sebelum digunakan
        $search = is_array($search) ? '' : $search;

         // Melakukan pencarian berdasarkan nilai yang diinputkan
         $result = $this->userModel->like('firstname', $search)
                         ->orLike('lastname', $search)
                         ->orLike('username', $search)
                         ->findAll();
        $data = [
            'title' => 'Data User',
            'search' =>$search,
            'result' => $dataUser
            
        ];
        // dd($dataUser);
        return view('user/index', $data);
    }

    // public function create()
    // {
    //     session();
    //     $data = [
    //         'title' => 'Tambah User',
    //         'validation' => \Config\Services::validation()
    //     ];
    //     return view('user/create', $data);
    // }

    public function create()
    {
        session();
        $data = [
            'title' => 'Add New User',
            'validation' => \Config\Services::validation()
        ];
        return view('user/create', $data);
    }

    public function save()
    {
        if (!$this->validate([
            'firstname' => [
                'rules' => 'required|is_unique[users.firstname]',
                'errors' => [
                    'required' => 'Nama Depan Harus Diisi',
                    'is_unique' => '{field} Anda Sudah Terdaftar'
                ]
            ],
            'lastname' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Nama Belakang Harus Diisi',
                ]
            ],
            'username' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Username Harus Diisi',
                ]
            ],
            'email' =>  [
                'rules' => 'valid_emails',
                'errors' => [
                    'valid_emails' => 'Masukan Email Yang Valid'
                ]
            ],
            'instagram' =>  [
                'rules' => 'valid_url',
                'errors' => [
                    'valid_emails' => 'Masukan link Yang Valid'
                ]
            ],
            // 'role' => [
            //     'rules' => 'required',
            //     'errors' => [
            //         'required' => 'Silahkan Pilih Role',
            //     ]
            // ],
            'password' => [
                'rules' => 'required|min_length[5]',
                'errors' => [
                    'required' => 'Silahkan Masukan Password',
                    'min_length' => 'Panjang password minimal 5',
                ]
            ],
            'pass_confirm' => [
                'rules' => 'required|matches[password]',
                'errors' => [
                    'required' => 'Silahkan Masukan Password',
                    'matches' => 'Password Harus Sama'
                ]
            ],
        ])) 
        // {
        //     $validation = \Config\Services::validation();
        //     // dd($validation);
        //     return redirect()->back()->withInput()->with('validation', $validation);
        // }

        $user_myth = new UserModel();
        $user_myth->save([

            'firstname' => $this->request->getVar('firstname'),
            'lastname' => $this->request->getVar('lastname'),
            'username' => $this->request->getVar('username'),
            'useremail' => $this->request->getVar('email'),
            'instagram' => $this->request->getVar('instagram'),
            // 'user_password' => password_hash(
            //     $this->request->getVar('password'),

            //     PASSWORD_DEFAULT
            // ),

        ]);

        session()->setFlashdata('msg', 'Berhasil menambahkan user');
        return redirect()->to('/user');
    }

    public function edit($id)
    {
        $dataUser = $this->userModel->getUsers($id);
        $data = [
            'title' => 'Ubah User',
            'result' => $dataUser,
            'validation' => \Config\Services::validation()
        ];


        return view('user/edit', $data);
    }

    // public function update($id)
    // {
    //     if (!$this->validate([
    //         'firstname' => [
    //             'rules' => 'required|is_unique[users.firstname]',
    //             'errors' => [
    //                 'required' => 'Nama Depan Harus Diisi',
    //                 'is_unique' => '{field} Anda Sudah Terdaftar'
    //             ]
    //         ],
    //         'lastname' => [
    //             'rules' => 'required',
    //             'errors' => [
    //                 'required' => 'Nama Belakang Harus Diisi',
    //             ]
    //         ],
    //         'username' => [
    //             'rules' => 'required',
    //             'errors' => [
    //                 'required' => 'Username Harus Diisi',
    //             ]
    //         ],
    //         'email' =>  [
    //             'rules' => 'valid_emails',
    //             'errors' => [
    //                 'valid_emails' => 'Masukan Email Yang Valid'
    //             ]
    //         ],
    //         'role' => [
    //             'rules' => 'required',
    //             'errors' => [
    //                 'required' => 'Silahkan Pilih Role',
    //             ]
    //         ],
    //         // 'password' => [
    //         //     'rules' => 'required|min_length[5]',
    //         //     'errors' => [
    //         //         'required' => 'Silahkan Masukan Password',
    //         //         'min_length' => 'Panjang password minimal 5',
    //         //     ]
    //         // ],
    //         // 'pass_confirm' => [
    //         //     'rules' => 'required|matches[password]',
    //         //     'errors' => [
    //         //         'required' => 'Silahkan Masukan Password',
    //         //         'matches' => 'Password Harus Sama'
    //         //     ]
    //         // ],
    //     ])) {
    //         $validation = \Config\Services::validation();
    //         // dd($validation);
    //         return redirect()->back()->withInput()->with('validation', $validation);
    //     }
        
    //     $user_myth = new UserModel();
    //     // dd($this->request->getVar('username'));
    //     $this->userModel->save([
    //         'id' => $id,
    //         'firstname' => $this->request->getVar('firstname'),
    //         'lastname' => $this->request->getVar('lastname'),
    //         'user_name' => $this->request->getVar('username'),
    //         'user_email' => $this->request->getVar('email'),
    //         'role' => $this->request->getVar('role'),
    //     ]);

    //     session()->setFlashdata('msg', 'Berhasil memperbarui user');
    //     return redirect()->to('/users');
    // }


    public function delete($id)
    {
        $this->userModel->delete($id);
        session()->setFlashdata("msg", "Data berhasil dihapus!");
        return redirect()->to('/users');
    }
}
