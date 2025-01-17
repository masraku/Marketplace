<link rel="stylesheet" href="<?php echo base_url('assets/css/product-management.css'); ?>">
<div class="container mt-5">
    <h1 class="text-center mb-4">Product Management</h1>

    <!-- Tombol Add Product -->
    <?php if ($this->session->userdata('role') === 'superadmin'): ?>
        <div class="text-end mb-3">
            <a href="<?php echo base_url('addproduct'); ?>" class="btn btn-danger">
                <i class="fa fa-plus"></i> Add Product
            </a>
        </div>
    <?php endif; ?>

    <!-- Pesan Notifikasi -->
    <?php if ($this->session->flashdata('success')): ?>
        <div class="alert alert-success">
            <?php echo $this->session->flashdata('success'); ?>
        </div>
    <?php elseif ($this->session->flashdata('error')): ?>
        <div class="alert alert-danger">
            <?php echo $this->session->flashdata('error'); ?>
        </div>
    <?php endif; ?>

    <!-- Tabel Produk -->
    <table class="table table-striped table-bordered">
        <thead>
            <tr>
                <th>#</th>
                <th>Image</th>
                <th>Product Name</th>
                <th>Price</th>
                <th>Type</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php if (!empty($product)): ?>
                <?php foreach ($product as $index => $product): ?>
                    <tr>
                        <td><?php echo $index + 1; ?></td>
                        <td>
                            <img src="<?php echo base_url('./assets/images/upload/' . $product->image); ?>" 
                                 alt="<?php echo $product->nama; ?>" width="50" height="50">
                        </td>
                        <td><?php echo $product->nama; ?></td>
                        <td>Rp <?php echo number_format($product->harga, 0, ',', '.'); ?></td>
                        <td><?php echo $product->jenis; ?></td>
                        <td>
                            <a href="<?php echo base_url('product/edit/' . $product->id); ?>" class="btn btn-warning btn-sm">
                                <i class="fa fa-edit"></i> Edit
                            </a>
                            <a href="<?php echo base_url('product/delete/' . $product->id); ?>" 
                               class="btn btn-danger btn-sm" 
                               onclick="return confirm('Are you sure you want to delete this product?');">
                                <i class="fa fa-trash"></i> Delete
                            </a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            <?php else: ?>
                <tr>
                    <td colspan="6" class="text-center">No products found</td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>
</div>
