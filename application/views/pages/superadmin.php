<div class="container mt-5">
    <h2>Dashboard Superadmin</h2>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Username</th>
                <th>Email</th>
                <th>Role</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($users as $user): ?>
                <tr>
                    <td><?php echo $user->id; ?></td>
                    <td><?php echo $user->username; ?></td>
                    <td><?php echo $user->email; ?></td>
                    <td><?php echo ucfirst($user->role); ?></td>
                    <td>
                        <?php if ($user->role !== 'superadmin'): ?>
                            <form action="<?php echo base_url('superadmin/change_role'); ?>" method="post" style="display:inline-block;">
                                <input type="hidden" name="user_id" value="<?php echo $user->id; ?>">
                                <select name="role" class="form-select" required>
                                    <option value="admin" <?php echo $user->role === 'admin' ? 'selected' : ''; ?>>Admin</option>
                                    <option value="user" <?php echo $user->role === 'user' ? 'selected' : ''; ?>>User</option>
                                </select>
                                <button type="submit" class="btn btn-sm btn-primary mt-2">Ubah Role</button>
                            </form>
                        <?php else: ?>
                            <span class="text-muted">Cannot Change</span>
                        <?php endif; ?>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
