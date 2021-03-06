<?php
/**
 * Internationalisation file for the BlockandNuke extension
 * @addtogroup Extensions
 * @author Eliora Stahl
 */
 
$aliases = array();

/** English
 * @author Brion Vibber
 */
$aliases['en'] = array(
  'BlockandNuke' => array( 'BlockandNuke' ),
);

$messages = array();

/** English
 * @author Eliora Stahl
 */
$messages['en'] = array(
'paramname' => '[[Special:Contributions/$4|$4]]',
'customparam' => '[[Special:Contributions/$4|$4]] 2',
	'blockandnuke'		=> 'BlockandNuke',
	'block'               => 'Mass delete do you read me',
	'block-confirm'		=> 'Click the BlockandNuke button to block the selected users and delete all their contributions. <br>
					(Do not uncheck any of the boxes below)',
	'block-desc'          => 'Gives administrators the ability to [[Special:BlockandNuke]] pages',
	'block-nopages'       => "No new pages by [[Special:Contributions/$1|$1]] in recent changes.",
	'block-list'          => "The following pages were recently created by [[Special:Contributions/$1|$1]]; put in a comment and hit the button to delete them.",
	'block-defaultreason' => "Mass removal of pages added by $1",
	'block-tools'         => "List of Users who have recently contributed and are not found on the Whitelist: <br>
				To add a user to the whitelist edit extensions/BlockandNuke/whitelist.txt",
	'block-submit-user'   => 'Select Users',
	'block-submit-delete' => 'BlockandNuke',
	'block-block'         => 'Selected users have been blocked and their contributions deleted.',
	'block-message' 	=> 'Users blocked by BlockandNuke.',
);
