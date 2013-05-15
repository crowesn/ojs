<?php

/**
 * @file classes/log/SubmissionEventLogEntry.inc.php
 *
 * Copyright (c) 2003-2013 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * @class SubmissionEventLogEntry
 * @ingroup log
 * @see SubmissionEventLogDAO
 *
 * @brief Describes an entry in the submission history log.
 */

import('lib.pkp.classes.log.PKPSubmissionEventLogEntry');

// Log entry associative types. All types must be defined here

// General events 					0x10000000
define('SUBMISSION_LOG_SUPPFILE_UPDATE', 			0x10000003);
define('SUBMISSION_LOG_ISSUE_SCHEDULE', 			0x10000004);
define('SUBMISSION_LOG_ISSUE_ASSIGN', 			0x10000005);
define('SUBMISSION_LOG_ARTICLE_PUBLISH', 			0x10000006);
define('SUBMISSION_LOG_ARTICLE_IMPORT',			0x10000007);
define('SUBMISSION_LOG_ISSUE_METADATA_UPDATE',	0x10000008);

// Author events 					0x20000000
define('SUBMISSION_LOG_AUTHOR_REVISION', 			0x20000001);

// Editor events 					0x30000000
define('SUBMISSION_LOG_EDITOR_ASSIGN', 			0x30000001);
define('SUBMISSION_LOG_EDITOR_UNASSIGN',		 	0x30000002);
define('SUBMISSION_LOG_EDITOR_FILE', 			0x30000004);
define('SUBMISSION_LOG_EDITOR_ARCHIVE', 			0x30000005);
define('SUBMISSION_LOG_EDITOR_RESTORE', 			0x30000006);
define('SUBMISSION_LOG_EDITOR_EXPEDITE', 			0x30000007);

// Reviewer events 					0x40000000
define('SUBMISSION_LOG_REVIEW_UNASSIGN',		 	0x40000002);
define('SUBMISSION_LOG_REVIEW_INITIATE', 			0x40000003);
define('SUBMISSION_LOG_REVIEW_CANCEL', 			0x40000004);
define('SUBMISSION_LOG_REVIEW_REINITIATE',	 		0x40000005);
define('SUBMISSION_LOG_REVIEW_REVISION', 			0x40000008);
define('SUBMISSION_LOG_REVIEW_RECOMMENDATION', 		0x40000009);
define('SUBMISSION_LOG_REVIEW_RATE', 			0x40000010);
define('SUBMISSION_LOG_REVIEW_RESUBMIT', 			0x40000012);
define('SUBMISSION_LOG_REVIEW_FILE', 			0x40000013);
define('SUBMISSION_LOG_REVIEW_CONFIRM_BY_PROXY', 		0x40000015);
define('SUBMISSION_LOG_REVIEW_RECOMMENDATION_BY_PROXY', 	0x40000016);
define('SUBMISSION_LOG_REVIEW_FILE_BY_PROXY', 		0x40000017);

// Copyeditor events 					0x50000000
define('SUBMISSION_LOG_COPYEDIT_ASSIGN', 			0x50000001);
define('SUBMISSION_LOG_COPYEDIT_UNASSIGN',	 		0x50000002);
define('SUBMISSION_LOG_COPYEDIT_INITIATE', 		0x50000003);
define('SUBMISSION_LOG_COPYEDIT_REVISION', 		0x50000004);
define('SUBMISSION_LOG_COPYEDIT_INITIAL', 			0x50000005);
define('SUBMISSION_LOG_COPYEDIT_FINAL', 			0x50000006);
define('SUBMISSION_LOG_COPYEDIT_SET_FILE',			0x50000007);
define('SUBMISSION_LOG_COPYEDIT_COPYEDIT_FILE',		0x50000008);
define('SUBMISSION_LOG_COPYEDIT_COPYEDITOR_FILE',		0x50000009);

// Proofreader events 					0x60000000
define('SUBMISSION_LOG_PROOFREAD_ASSIGN', 			0x60000001);
define('SUBMISSION_LOG_PROOFREAD_UNASSIGN', 		0x60000002);
define('SUBMISSION_LOG_PROOFREAD_INITIATE', 		0x60000003);
define('SUBMISSION_LOG_PROOFREAD_REVISION', 		0x60000004);
define('SUBMISSION_LOG_PROOFREAD_COMPLETE', 		0x60000005);

// Layout events 					0x70000000
define('SUBMISSION_LOG_LAYOUT_ASSIGN', 			0x70000001);
define('SUBMISSION_LOG_LAYOUT_UNASSIGN', 			0x70000002);
define('SUBMISSION_LOG_LAYOUT_INITIATE', 			0x70000003);
define('SUBMISSION_LOG_LAYOUT_GALLEY', 			0x70000004);
define('SUBMISSION_LOG_LAYOUT_COMPLETE', 			0x70000005);

class SubmissionEventLogEntry extends PKPSubmissionEventLogEntry {
	/**
	 * Constructor.
	 */
	function SubmissionEventLogEntry() {
		parent::PKPSubmissionEventLogEntry();
	}

	//
	// Getters/setters
	//
	/**
	 * Set the article ID
	 * @param $articleId int
	 */
	function setArticleId($articleId) {
		return $this->setAssocId($articleId);
	}


	/**
	 * Get the article ID
	 * @return int
	 */
	function getArticleId() {
		return $this->getAssocId();
	}


	/**
	 * Get the assoc ID
	 * @return int
	 */
	function getAssocType() {
		return ASSOC_TYPE_SUBMISSION;
	}
}

?>
