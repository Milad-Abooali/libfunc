<?php

/**
 * Check if Os is ?
 * Pass null to return PHP_OS_FAMILY
 * @param string|null $os 'Windows', 'BSD', 'Darwin', 'Solaris', 'Linux' or 'Unknown'.
 * @return bool
 */
function isEnvOS($os=null): bool|string {
    if($os) return(strtolower(PHP_OS_FAMILY) === strtolower($os));
    return PHP_OS_FAMILY;
}
