<?php

/**
 * Plugin Name: Mehan Blocks
 * Plugin URI: https:naeemnh.com
 * Description: My first block
 * Author: Naeem Hussain
 * Author URI: https:naeemnh.com
 */

function mehan_blocks_init()
{
    register_block_type_from_metadata(__DIR__);
}

add_action("init", "mehan_blocks_init");
