<?php
/*
Plugin Name: WP_OpenAntrag
Plugin URI: http://github.com
Description: Display OpenAntrag
Version: 0.1
Author: Jochen Sch&auml;fer
Author URI: http://www.github.com/josch1710
License: GPLv2
Text Domain: wp_openantrag
*/

/*
This program is free software; you can redistribute it and/or
modify it under the terms of the GNU General Public License
as published by the Free Software Foundation; either version 2
of the License, or (at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA  02110-1301, USA.
*/
?>
<h2><?php echo __('Antr&auml;ge'); echo ' '; echo esc_html($displayname); ?></h2>
<?php foreach($proposals as $prop): ?>
    <p style="<?php echo empty($data['color'])?'':'background-color:'.$data['color']; ?>">
    <a href="<?php echo $prop->FullUrl; ?>" target="_blank"><?php echo $prop->Title; ?></a>
    <br/>
    <span><?php echo $prop->status; ?></span>
    </p>
<?php endforeach ?>
