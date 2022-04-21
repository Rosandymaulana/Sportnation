<?php

$f_name = $_POST['f_name'];
$l_name = $_POST['l_name'];
$email = $_POST['email'];
$pesan = $_POST['message'];
$subject = $_POST['subject'];
echo "<script>
            document.location.href = 'https://wa.me/+62895397738345?text=Halo CS Website Sportnation. Saya $f_name $l_name dengan Email $email ingin mengirim pesan terkait $subject, $pesan. Terima kasih.';
            </script> <br>";