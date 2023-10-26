<?php

/**
 * Version metadata for the local_moodle_rest_plugin plugin.
 *
 * @package   local_moodle_rest_plugin
 * @copyright 2023, Artur Weigandt
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

/** @var \stdClass $plugin */
$plugin->component = 'local_moodle_rest_plugin';
$plugin->version = 2023102600;
$plugin->release = '0.1.0';

$plugin->requires = 2023100900.00; // Moodle 4.3
// Available as of Moodle 3.9.0 or later.
$plugin->supported = [
    403,
    403,
];
$plugin->incompatible = 404; // Available as of Moodle 3.9.0 or later.
$plugin->maturity = MATURITY_ALPHA; // one of: MATURITY_ALPHA, MATURITY_BETA, MATURITY_RC, MATURITY_STABLE

$plugin->dependencies = [
    // 'mod_forum' => 2022042100,
    // 'mod_data' => 2022042100
];
