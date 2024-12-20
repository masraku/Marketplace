<body>
    <div class = "main">
<?php if ($this->session->flashdata('success')): ?>
    <div class="alert alert-success">
        <?php echo $this->session->flashdata('success'); ?>
    </div>
<?php endif; ?>

<?php if ($this->session->flashdata('error')): ?>
    <div class="alert alert-danger">
        <?php echo $this->session->flashdata('error'); ?>
    </div>
<?php endif; ?>

<div class="container mt-5">
    <h2>Ubah Kata Sandi</h2>
    <form action="<?php echo base_url('change'); ?>" method="post">
        <div class="mb-3">
            <label for="current_password" class="form-label">Kata Sandi Saat Ini</label>
            <input type="password" class="form-control" id="current_password" name="current_password" required>
        </div>
        <div class="mb-3">
            <label for="new_password" class="form-label">Kata Sandi Baru</label>
            <input type="password" class="form-control" id="new_password" name="new_password" required>
        </div>
        <div class="mb-3">
            <label for="confirm_password" class="form-label">Konfirmasi Kata Sandi Baru</label>
            <input type="password" class="form-control" id="confirm_password" name="confirm_password" required>
        </div>
        <button type="submit" class="btn btn-primary">Ubah Kata Sandi</button>
    </form>
</div>
</div>
</body>
