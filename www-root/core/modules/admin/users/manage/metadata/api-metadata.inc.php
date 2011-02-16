<?php
/**
 * Entrada [ http://www.entrada-project.org ]
 * 
 *
 * 
 * @author Organisation: Queen's University
 * @author Unit: School of Medicine
 * @author Developer: Jonathan Fingland <jonathan.fingland@queensu.ca>
 * @copyright Copyright 2011 Queen's University. All Rights Reserved.
*/


if ((isset($_SESSION["isAuthorized"])) && ((bool) $_SESSION["isAuthorized"])) {
	if ($ENTRADA_ACL->amIAllowed("metadata", "create", false)) {

		ob_clear_open_buffers();
	
		require_once("Entrada/metadata/functions.inc.php");
		
		$request = filter_input(INPUT_POST, "request", FILTER_SANITIZE_STRING );
		switch($request) {
			case 'update':
				break;
			case 'new_value':
				$cat_id = filter_input(INPUT_POST, "type", FILTER_SANITIZE_NUMBER_INT );
				$type = MetaDataType::get($cat_id);
				if ($type) {
					$user = User::get($PROXY_ID);
					$org_id = $user->getOrganisationID();
					$group = $user->getGroup();
					$role = $user->getRole();
					
					$types = MetaDataTypes::get($org_id, $group, $role, $PROXY_ID);
										
					$value_id = MetaDataValue::create($cat_id, $PROXY_ID);
					$value = MetaDataValue::get($value_id);
					$descendant_type_sets = getDescendentTypesArray($types, $type);
					
					echo editMetaDataRow_User($value, $type, $descendant_type_sets);
				} else {
					header("HTTP/1.0 500 Internal Error");
					echo display_error("Invalid type. Please try again.");
				}
		}
	} 
	exit;
}
