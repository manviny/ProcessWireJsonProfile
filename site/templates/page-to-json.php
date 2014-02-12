<?php


// Get page in variable path
// http://localhost/ProcessWireJsonProfile/web-services/page-to-json/?page=/about/

$pageFields = getFields("$input->page");
// echo json_encode($pageFields);
echo json_encode($pageFields);



	function getFields($page){

		$array = array();
		
		$page = wire(pages)->get($page);

		foreach($page->fields as $field) {
			echo $field->type;
			$array[$field->name] = htmlentities($page->get($field->name));
		}
		return array($page->name =>$array);
	}

 ?>