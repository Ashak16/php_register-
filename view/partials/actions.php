<?php

require "./navbar.php";

?>

<?php if (isset($_GET['show_datas']) && $_GET['show_datas'] == 'true'): ?>
    <script>
        document.getElementById('data_btn').style.display = 'block';
    </script>
<?php endif; ?>
