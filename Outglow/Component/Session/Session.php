<?php namespace Outglow\Component\Session;

/**
 * A SMALL SET OF FILES TO HELP HANDLE
 * SESSIONS
 * 
 * FEEL FREE TO USE / MODIFY ANY OF THIS
 * CODE FOR YOUR OWN PROJECTS
 * OPEN SOURCE / COMMERCIAL
 *
 * @author Harry Lawrence
 * @copyright Outglow Components 2012
 * @package Session
 * @version 1.0
 * @license The MIT License (MIT)
*/

class Session
{
	/**
	 * CREATE THE INITIAL CONTAINER
	 * TO STORE THE SESSION DATA
	 * @var array
	 */
	private $container = array();

	/**
	 * - getSession
	 * GETS THE VALUE FROM THE
	 * SESSION SUPER GLOBAL
	 * @return bool
	 */
	private function getSession()
	{
		return $this->container = $_SESSION;
	}

	/**
	 * - setSession
	 * SETS THE SESSION SUPER
	 * GLOBAL TO THE VALUE OF
	 * THE CONTAINER
	 * @return bool
	 */
	private function setSession()
	{
		return $_SESSION = $this->container;
	}

	/**
	 * - pushChanges
	 * ALIAS FUNCTION FOR APPLYING
	 * NEW CHANGES TO THE SESSION
	 * SUPER GLOBAL
	 * @return bool
	 */
	private function pushChanges()
	{
		return $this->setSession();
	}

	/**
	 * - constructor
	 * CALLS THE SET SESSION
	 * METHOD
	 * @return NULL
	 */
	public function __construct()
	{
		$this->setSession();
	}

	/**
	 * - set
	 * SETS A VALUE IN THE
	 * SESSION USING THE KEY
	 * AND VALUE PARAMS
	 * @param String
	 * @param String
	 * @return bool
	 */
	public function set($key, $value)
	{
		$this->container[$key] = $value;
		return $this->pushChanges();
	}

	/**
	 * - get
	 * GETS THE VALUE OF THE KEY
	 * OUT OF THE CONTAINER
	 * @param String
	 * @return bool
	 */
	public function get($key)
	{
		return $this->container[$key];
	}
}

?>