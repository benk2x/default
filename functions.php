<?php
	function articleContent() {
		global $Wcms;

		// Check if the articleContent area is already exists, if not, create it
		if (empty($Wcms->get('blocks','articleContent'))) {
			$Wcms->set('blocks','articleContent', 'content', 'Your content here.');
		}

		// Fetch the value of the articleContent from database
		$value = $Wcms->get('blocks','articleContent','content');

		// If value is empty, let's put something in it by default
		if (empty($value)) {
			$value = 'Empty content';
		}
		if ($Wcms->loggedIn) {
			// If logged in, return block in editable mode
			return $Wcms->block('articleContent');
		}

		// If not logged in, return block in non-editable mode
		return $value;
	}
  
  function leftSideBar() {
		global $Wcms;

		// Check if the leftSideBar area is already exists, if not, create it
		if (empty($Wcms->get('blocks','leftSideBar'))) {
			$Wcms->set('blocks','leftSideBar', 'content', 'Your content here.');
		}

		// Fetch the value of the leftSideBar from database
		$value = $Wcms->get('blocks','leftSideBar','content');

		// If value is empty, let's put something in it by default
		if (empty($value)) {
			$value = 'Empty content';
		}
		if ($Wcms->loggedIn) {
			// If logged in, return block in editable mode
			return $Wcms->block('leftSideBar');
		}

		// If not logged in, return block in non-editable mode
		return $value;
	}
  
  function MenuSidebar() {
		global $Wcms;

		// Check if the MenuSidebar area is already exists, if not, create it
		if (empty($Wcms->get('blocks','MenuSidebar'))) {
			$Wcms->set('blocks','MenuSidebar', 'content', 'Your content here.');
		}

		// Fetch the value of the MenuSidebar from database
		$value = $Wcms->get('blocks','MenuSidebar','content');

		// If value is empty, let's put something in it by default
		if (empty($value)) {
			$value = 'Empty content';
		}
		if ($Wcms->loggedIn) {
			// If logged in, return block in editable mode
			return $Wcms->block('MenuSidebar');
		}

		// If not logged in, return block in non-editable mode
		return $value;
	}
  
?>
