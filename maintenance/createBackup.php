<?php
if (!is_dir('../ottoMVCBackups')) {
    mkdir('../ottoMVCBackups');         
}
exec('zip -r ../ottoMVCBackups/backup'.date('Ymd-Hms').'.zip ./');