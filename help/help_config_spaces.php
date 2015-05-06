<?php
/*
Bitsand - a web-based booking system for LRP events
Copyright (C) 2006 - 2014 The Bitsand Project (http://bitsand.googlecode.com/)

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
include ('inc_help_head.php');
?>

<p><strong>PLAYER_SPACES:</strong> Number of spaces for player bookings.</p>
<p><strong>MONSTER_SPACES:</strong> Number of spaces for monster bookings.</p>
<p><strong>STAFF_SPACES:</strong> Number of spaces for staff bookings.</p>
<p><strong>TOTAL_SPACES:</strong> TOTAL_SPACES can be used if you have a limited number of spaces, but do not mind how they are split up. If the total number of bookings is at least this many, no more bookings of any type will be accepted. If set to zero, no bookings of any type will be accepted.</p>
<p><strong>ALLOW_MONSTER_BOOKINGS:</strong> Leave unchecked if you do not wish to allow "Monster" bookings.</p>
<?php
include ('inc_help_foot.php');
?>
