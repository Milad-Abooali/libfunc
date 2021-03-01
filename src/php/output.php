<?php

    /**
     * Print input in pre as code
     * PHP 7.0
     * @param string|array $input
     * @param bool $eol
     * @param string|bool $block
     */
    function p($input, $block=false, $eol=false): void  {
        echo ($block) ? "<$block>" : null;
        echo ($eol) ? PHP_EOL : null;
        echo '<pre><code>';
        if(is_array($input)) {
            print_r($input);
        } else {
            var_dump($input);
        }
        echo '</code></pre>';
        echo ($eol) ? PHP_EOL : null;
        echo ($block) ? "</$block>" : null;
    }

    /**
     * Console Log
     * PHP 7.0
     * @param string $string
     */
    function c($string, $line=true): void  {
        if($line) $string = str_replace("\r\n", "", $string);
        echo "<script>console.log('$string')</script>";
    }