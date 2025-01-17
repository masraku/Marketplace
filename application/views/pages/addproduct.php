<div class="container mt-4">
    <h2>Add Product</h2>

    <?php if ($this->session->flashdata('success')): ?>
        <div class="alert alert-success"><?= $this->session->flashdata('success'); ?></div>
    <?php endif; ?>

    <?php if ($this->session->flashdata('error')): ?>
        <div class="alert alert-danger"><?= $this->session->flashdata('error'); ?></div>
    <?php endif; ?>

    <form action="<?= base_url('addproduct/save_product'); ?>" method="post" enctype="multipart/form-data">
        <div class="mb-3">
            <label for="vendor" class="form-label">Product Vendor</label>
            <input type="text" class="form-control" id="vendor" name="vendor" required>
        </div>
        <div class="mb-3">
            <label for="nama" class="form-label">Product Name</label>
            <input type="text" class="form-control" id="nama" name="nama" required>
        </div>

        <div class="mb-3">
            <label for="harga" class="form-label">Price</label>
            <input type="number" class="form-control" id="harga" name="harga" required>
        </div>

        <div class="mb-3">
            <label for="deskripsi" class="form-label">Description Product</label>
            <input type="text" class="form-control" id="deskripsi" name="deskripsi" required>
        </div>

        <div class="mb-3">
            <label for="jenis" class="form-label">Type</label>
            <input type="text" class="form-control" id="jenis" name="jenis" required>
        </div>

        <div class="mb-3">
        <label for="image" class="form-label">Product Image</label>
        <input type="file" class="form-control" id="image" name="image" accept="image/*" required>
        </div>

        <div class="d-flex justify-content-between mt-4">
            <?php if ($this->session->userdata('role') === 'superadmin' || $this->session->userdata('role') === 'admin'): ?>
                <!-- Tombol Back to Dashboard untuk superadmin -->
                <?php if ($this->session->userdata('role') === 'superadmin'): ?>
                    <a href="<?php echo base_url("superadmin"); ?>" class="btn btn-secondary">Back to Dashboard</a>
                <?php endif; ?>

                <!-- Tombol Add Product untuk admin -->
                <?php if ($this->session->userdata('role') === 'admin' || $this->session->userdata('role') === 'superadmin'): ?>
                    <button type="submit" class="btn btn-primary">Add Product</button>
                <?php endif; ?>
            <?php endif; ?>
        </div>



    </form>
</div>
