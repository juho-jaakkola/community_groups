<?php

$from_guid = get_input('group_guid_from', 0);
$to_guid = get_input('group_guid_to', 0);

if ($from_guid == $to_guid) {
	register_error(elgg_echo('cg:groups:combine:same'));
	forward(REFERER);
}

$from_group = get_entity($from_guid);
$to_group = get_entity($to_guid);
if (!$from_group || !$to_group) {
	register_error(elgg_echo('cg:groups:combine:nogroup'));
	forward(REFERER);
}

// combine membership
$where = "guid_two='$from_guid' AND relationship='member'";
$query = "SELECT * from {$CONFIG->dbprefix}entity_relationships WHERE {$where}";
$members = get_data($query, "row_to_elggrelationship");
$from_members = array();
foreach ($members as $member) {
	$from_members[] = $member->guid_one;
}

$where = "guid_two='$to_guid' AND relationship='member'";
$query = "SELECT * from {$CONFIG->dbprefix}entity_relationships WHERE {$where}";
$members = get_data($query, "row_to_elggrelationship");
$to_members = array();
foreach ($members as $member) {
	$to_members[] = $member->guid_one;
}

$move_members = array_diff($from_members, $to_members);
global $NOTIFICATION_HANDLERS;
foreach ($move_members as $member) {
	// move membership
	add_entity_relationship($member, 'member', $to_guid);

	// move notifications
	foreach ($NOTIFICATION_HANDLERS as $method => $foo) {
		if (check_entity_relationship($member, "notify{$method}", $from_guid) !== FALSE) {
			add_entity_relationship($member, "notify{$method}", $to_guid);
		}
	}
}


// combine content


// delete from group

system_message(sprintf(elgg_echo('cg:groups:combine:success')));
forward(REFERER);