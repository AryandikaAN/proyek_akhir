<?php

return [
    'admin-user' => [
        'title' => 'Users',

        'actions' => [
            'index' => 'Users',
            'create' => 'New User',
            'edit' => 'Edit :name',
            'edit_profile' => 'Edit Profile',
            'edit_password' => 'Edit Password',
        ],

        'columns' => [
            'id' => 'ID',
            'last_login_at' => 'Last login',
            'first_name' => 'First name',
            'last_name' => 'Last name',
            'email' => 'Email',
            'password' => 'Password',
            'password_repeat' => 'Password Confirmation',
            'activated' => 'Activated',
            'forbidden' => 'Forbidden',
            'language' => 'Language',
                
            //Belongs to many relations
            'roles' => 'Roles',
                
        ],
    ],

    'siswa' => [
        'title' => 'Siswa',

        'actions' => [
            'index' => 'Siswa',
            'create' => 'New Siswa',
            'edit' => 'Edit :name',
            'will_be_published' => 'Siswa will be published at',
        ],

        'columns' => [
            'id' => 'ID',
            'nisn' => 'Nisn',
            'nama' => 'Nama',
            'umur' => 'Umur',
            'alamat' => 'Alamat',
            'kota' => 'Kota',
            'kelas' => 'Kelas',
            'jurusan' => 'Jurusan',
            'published_at' => 'Published at',
            'enabled' => 'Enabled',
            
        ],
    ],

    // Do not delete me :) I'm used for auto-generation
];