<?php
    public function profil(): void
    {
        requireLogin();
        render('user/profil', ['title' => 'Profil', 'user' => $this->users->findById((int) $_SESSION['user_id'])]);
    }

    public function updateProfil(): void
    {
        requireLogin();
        verifyCsrf();
        $name = trim($_POST['name'] ?? '');
        $phone = trim($_POST['phone'] ?? '');
        $address = trim($_POST['address'] ?? '');

        if (!$name || ($phone && !preg_match('/^[0-9]{1,15}$/', $phone))) {
            flash('error', 'Nama wajib diisi dan nomor HP hanya angka maksimal 15 karakter.');
            redirect('index.php?page=profil');
        }

        $profilePicture = uploadImage('profile_picture', 'profiles', false);
        $this->users->updateProfile((int) $_SESSION['user_id'], compact('name', 'phone', 'address') + ['profile_picture' => $profilePicture]);
        $_SESSION['name'] = $name;
        flash8h('success', 'Profil berhasil diperbarui.');
        redirect('index.php?page=profil');
    }
}