<?php

if (isset($_GET['id'])) {
    header("Location: https://moviles.sextanet.com/".$_GET['id']);
}

header("Location: https://sextanet.com/");
