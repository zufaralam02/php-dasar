<?php
require 'functions.php';

$id = $_GET["id"];

if (delete($id) > 0) {
    echo "
            <script>
                alert('success');
                document.location.href = 'index.php';
            </script>
        ";
} else {
    echo "
            <script>
                alert('fail');
                document.location.href = 'index.php';
            </script>
        ";
}
