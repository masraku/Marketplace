<link rel="stylesheet" href="<?php echo base_url('assets/css/edit-product.css'); ?>">

<div class="container mt-5">
    <h1 class="text-center mb-4">Edit Product</h1>

    <form action="<?php echo base_url('product/update/' . $product->id); ?>" method="post" enctype="multipart/form-data">
        <div class="mb-3">
            <label for="nama" class="form-label">Product Name</label>
            <input type="text" class="form-control" id="nama" name="nama" value="<?php echo $product->nama; ?>" required>
        </div>

        <div class="mb-3">
            <label for="harga" class="form-label">Price</label>
            <input type="number" class="form-control" id="harga" name="harga" value="<?php echo $product->harga; ?>" required>
        </div>

        <div class="mb-3">
            <label for="jenis" class="form-label">Type</label>
            <input type="text" class="form-control" id="jenis" name="jenis" value="<?php echo $product->jenis; ?>" required>
        </div>

        <div class="mb-3">
            <label for="image" class="form-label">Product Image</label>
            <input type="file" class="form-control" id="image" name="image">
            <img src="<?php echo base_url('./assets/images/upload/' . $product->image); ?>" alt="Current Image" width="100" class="mt-2">
        </div>

        <button type="submit" class="btn btn-success">Save Changes</button>
    </form>
</div>

