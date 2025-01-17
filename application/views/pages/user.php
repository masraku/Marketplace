<link rel="stylesheet" href="<?php echo base_url('assets/css/settings.css'); ?>">

<div class="container mt-5">
    <h2 class="mb-4">Manage Users</h2>
    <?php if ($this->session->flashdata('success')): ?>
        <div class="alert alert-success">
            <?php echo $this->session->flashdata('success'); ?>
        </div>
    <?php endif; ?>
    <table class="table table-striped table-bordered">
        <thead>
            <tr>
                <th>#</th>
                <th>Username</th>
                <th>Email</th>
                <th>Role</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php if (!empty($users)): ?>
                <?php foreach ($users as $index => $user): ?>
                    <tr>
                        <td><?php echo $index + 1; ?></td>
                        <td><?php echo $user->username; ?></td>
                        <td><?php echo $user->email; ?></td>
                        <td>
                            <?php if ($user->role === 'superadmin'): ?>
                                <span class="badge bg-primary"><?php echo ucfirst($user->role); ?></span>
                            <?php else: ?>
                                <form method="post" action="<?php echo base_url('users/update_role/' . $user->id); ?>">
                                    <select name="role" class="form-control" onchange="this.form.submit()">
                                        <option value="user" <?php echo $user->role == 'user' ? 'selected' : ''; ?>>User</option>
                                        <option value="admin" <?php echo $user->role == 'admin' ? 'selected' : ''; ?>>Admin</option>
                                    </select>
                                </form>
                            <?php endif; ?>
                        </td>

                        <td>
                            <form method="post" action="<?php echo base_url('users/delete/' . $user->id); ?>" onsubmit="return confirm('Are you sure you want to delete this user?');">
                                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                            </form>
                        </td>
                    </tr>
                <?php endforeach; ?>
            <?php else: ?>
                <tr>
                    <td colspan="5" class="text-center">No users found</td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>
</div>
