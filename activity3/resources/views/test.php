<?php
if (DB::connection()->getDatabaseName()) {
    echo "" . DB::connection()->getDatabaseName();
}

?>