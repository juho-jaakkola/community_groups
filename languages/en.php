<?php

$english = array(

	'admin:groups' => "Groups",
	'admin:groups:main' => "Administration",

	'cg:menu:move' => "Move",
	'cg:menu:remove_ad' => "Remove ad",
	'cg:menu:offtopic' => "Off-topic",

	'cg:forum:controls' => "Admin controls",
	'cg:forum:move:instruct' => "Move post to the group",
	'cg:forum:removead' => "Remove ad",
	'cg:form:ad:warning' => "This comment was removed by a moderator because it contained advertising.",

	'cg:forum:offtopic' => "Off-topic",
	'cg:forum:offtopic:title' => "Move off-topic post to its own topic",
	'cg:forum:offtopic:text' => "Post text",
	'cg:forum:offtopic:success' => "Successfully move to new topic",
	'cg:form:offtopic:warning' => "Moderator: this comment was off-topic. It was moved to its own topic.",

	'cg:tabs:categorize' => 'Categorize',
	'cg:tabs:combine' => 'Combine groups',
	'cg:tabs:change_owner' => 'Change owner',
	'cg:tabs:delete' => 'Delete group',
	'cg:tabs:blog' => 'Blog integration',

	'cg:admin:delete:instruct' => 'Delete the group',
	'cg:admin:combine:instruct' => 'Move all content and members from one group
									into another. The first group is also deleted.',
	'cg:admin:combine:from' => 'From this group',
	'cg:admin:combine:to' => 'To this group',
	'cg:admin:blog:instruct' => 'Blog posts from blog.elgg.org can be posted to the group forums',
	'cg:admin:blogurl' => 'URL of the web services end point',
	'cg:admin:bloggroup' => 'Group to post the blog entries',

	'cg:admin:change_owner:instruct' => 'Change the owner of a group.',
	'cg:admin:change_owner:user' => 'New owner',
	'cg:admin:change_owner:nogroup' => 'Unable to load the group.',
	'cg:admin:change_owner:nouser' => 'Unable to load the user.',
	'cg:admin:change_owner:success' => 'User %s is now the owner of group %s.',
	'cg:admin:change_owner:icon_error' => 'User %s is now the owner of group %s but there was a problem transferring the group icons',

	'groups:popular' => 'All groups',
	'groups:support' => 'Support',
	'groups:language' => 'Language',
	'groups:developers' => 'Developers',
	'groups:plugins' => 'Plugins',

	'groups:discussion' => 'Group forum discussion',
	'groups:discussion:latest' => 'Latest discussion',
	'groups:discussion:mygroups' => 'Discussion in my groups',
	'groups:discussion:mine' => 'My discussion',

	'cg:forum:move:success' => "Successfully moved the forum post",
	'cg:forum:move:error' => "Unable to move the forum post",
	'cg:forum:removead:success' => "Issued advertising warning",
	'cg:groups:combine:success' => "Successfully combined the groups %s and %s",
	'cg:groups:combine:same' => "The groups are the same",
	'cg:groups:combine:nogroup' => "Unable to load one of the groups",
	'cg:groups:categorize:success' => "Group categories have been added",

	'search_types:discussion' => 'Discussion',
	'cg:search:post_on' => "Comment on the discussion \"%s\" in the group %s",
	'cg:search:discussions' => 'Search discussions',


	'cg:discussion:howto' => 'Using discussions',
	'cg:groups:howto' => 'Using groups',
	'cg:howto:discussion:loggedout:' => "To participate in the group discussions, you need to register for this site and join one of the groups.",
	'cg:howto:discussion:loggedin:1' => "You need to join a group to post in its forum.",
	'cg:howto:discussion:loggedin:2' => "Looking for help with a problem? Try the Technical Support group.",
	'cg:howto:discussion:loggedin:3' => "Advertising is not allowed in the group forums.",
	'cg:howto:discussion:loggedin:4' => "Want email notifications when there are new forum posts?

		Select Settings on the topbar menu.",

	'cg:howto:groups:loggedout:' => "The forums of Elgg are divided into groups.
		You must create an account to join a group.",
	'cg:howto:groups:loggedin:1' => "Joining a group is as easy as clicking the join button on a group's profile page.",
	'cg:howto:groups:loggedin:2' => "Looking for help with a problem? Try the Technical Support group.",
	'cg:howto:groups:loggedin:3' => "Interesting in talking about the future of Elgg?
		Check out Elgg's roadmap group.",
	'cg:howto:groups:loggedin:4' => "Want email notifications when there is new group activity?
		Select Settings on the topbar menu.",



);

add_translation("en", $english);
