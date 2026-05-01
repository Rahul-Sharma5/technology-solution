<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Compiled View Path
    |--------------------------------------------------------------------------
    |
    | Blade compiles templates into a cache directory before rendering them.
    | In this workspace the project cache directories are not writable, so we
    | default to the system temp directory where Laravel can safely compile.
    |
    */

    'compiled' => env('VIEW_COMPILED_PATH', sys_get_temp_dir()),

];
