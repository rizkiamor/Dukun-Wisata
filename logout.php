<?php

session_start();
session_destroy();
echo "<script>
eval(\"parent.location='home/'\");
sweetAlert ('Anda berhasil Logout');
</script>";
?>
