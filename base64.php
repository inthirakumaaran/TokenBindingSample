<?php
/**
 * Created by PhpStorm.
 * User: inthirakumaaranwso2com
 * Date: 9/28/17
 * Time: 11:11 AM
 */
function base64url_encode($data)
{
    $base64 = base64_encode($data);
    $base64 = strtr($base64,'+/','-_');
    $base64 = str_replace('=', '', $base64);
    return $base64;
}
function base64url_decode($base64)
{
    $base64 .= str_repeat('=', (4 - (strlen($base64) % 4)));
    $base64 = strtr($base64,'-_','+/');
    echo $base64;
    $result = base64_decode($base64);
    return $result;
}
?>
<html>
<body>
<?php
  echo base64url_decode("AIkAAgBBQCn2ifHi8REsBLfdowlXvsC6mHk2f1w7lIsvyWouKrUluxWfLi_bpjfOnnClabNzWH8np9NRNqqu9iFe2iKm3xcAQM7zwHuR-gZtMZmOvKY1RDauLupV3POc_G5jHutmiE1jQ5RZjy4rZm5CNxrbb2J5OBE39_GYXRoDhibNmHunDp0AAA");
?>
</body>
</html>
