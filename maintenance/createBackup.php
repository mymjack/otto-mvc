<?php
if (!is_dir('../ottoBackups')) {
    mkdir('../ottoBackups');         
}
exec('zip -r ../ottoBackups/backup'.date('Ymd-Hms').'.zip ./');