<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Data access wrapper for "Series" table.
 *
 */
class Series extends MY_Model {

	// constructor
	function __construct()
	{
		parent::__construct('series', 'series');
	}

}
