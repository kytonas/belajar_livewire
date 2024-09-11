<?php

namespace App\Livewire;

use Livewire\Attributes\Layout;
use Livewire\Component;

#[Layout('layouts.guest')]
class Login extends Component
{
    // Definisikan variabel form sebagai array (karena Livewire otomatis menyambungkannya)
    public $form = [
        'email' => '',
        'password' => '',
    ];

    public function login()
    {
        // Validasi data sebelum login
        $this->validate([
            'form.email' => 'required|email',
            'form.password' => 'required|min:6',
        ]);

        // Logika autentikasi login di sini
        // Misalnya, kamu bisa menggunakan Auth::attempt()
        if (auth()->attempt(['email' => $this->form['email'], 'password' => $this->form['password']])) {
            return redirect()->route('home'); // Arahkan ke halaman setelah login sukses
        } else {
            session()->flash('error', 'Email atau password salah');
        }
    }

    public function render()
    {
        return view('livewire.login');
    }
}
