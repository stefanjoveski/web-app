<?php include '../view/header.php';
      include '../model/index.php';
      unset($_SESSION['cart12']); ?>
<main>
    <h2>Success</h2>
    <p>The following information has been successfully submitted.</p>
    <div style="background:#f32500;color:white">
        <p>First Name: <?php echo htmlspecialchars($first_name); ?></p>
        <p>Last Name: <?php echo htmlspecialchars($last_name); ?></p>
        <p>Phone: <?php echo htmlspecialchars($phone); ?></p>
        <p>Email: <?php echo htmlspecialchars($email); ?></p>
        <p>Address: <?php echo htmlspecialchars($address); ?></p>
    </div>
</main>
