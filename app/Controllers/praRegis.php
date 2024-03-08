<?php

namespace App\Controllers;

class praRegis extends BaseController
{
    public function praRegis(): string
    {
        $data =[
        'vaidation' => \Config\Services::validation()
        ];
        return view('praRegis', $data);
    }

public function validasi()
    {
        if (!$this->validate([
            'agree' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'SIlahkan menyetujui',
                ]
            ],
        ])) {
            $validation = \Config\Services::validation();
            // dd($validation);
            return redirect()->back()->withInput()->with('validation', $validation);
        }

        // session()->setFlashdata('msg', 'Berhasil memperbarui user');
        return redirect()->to('/pra');
    }
}