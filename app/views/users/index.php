<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>All Users</title>
  <style>
    body { font-family: Arial, sans-serif; margin: 2rem; }
    table { border-collapse: collapse; width: 100%; }
    th, td { border: 1px solid #ccc; padding: 8px; }
    th { background-color: #f5f5f5; }
  </style>
</head>
<body>
  <h1>All Users</h1>
  <?php if (!empty($users)): ?>
  <table>
    <thead>
      <tr>
        <th>ID</th><th>Name</th><th>Email</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($users as $user): ?>
      <tr>
        <td><?= htmlspecialchars($user->id) ?></td>
        <td><?= htmlspecialchars($user->name) ?></td>
        <td><?= htmlspecialchars($user->email) ?></td>
      </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
  <?php else: ?>
    <p>No users found.</p>
  <?php endif; ?>
</body>
</html>
