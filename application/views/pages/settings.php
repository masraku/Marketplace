<link rel="stylesheet" href="<?php echo base_url('assets/css/settings.css'); ?>">

<div class="container">
    <h2>Settings</h2>
    <p>Kelola informasi akun Anda.</p>

    <?php if ($this->session->flashdata('success')): ?>
        <div class="alert alert-success">
            <?php echo $this->session->flashdata('success'); ?>
        </div>
    <?php endif; ?>

    <form action="<?php echo base_url('settings/update'); ?>" method="POST">
        <div class="mb-3">
            <label for="username" class="form-label">Nama</label>
            <input type="text" class="form-control" id="username" name="username" value="<?php echo $user->username; ?>" required>
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email" value="<?php echo $user->email; ?>" required>
        </div>

        <div class="mb-3">
            <label for="password" class="form-label">Password Baru</label>
            <input type="password" class="form-control" id="password" name="password" placeholder="Masukkan password baru" required>
        </div>

        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
</div>
