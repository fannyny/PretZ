<?php


/**
 * Skeleton subclass for representing a row from the 'option' table.
 *
 * 
 *
 * This class was autogenerated by Propel 1.4.2 on:
 *
 * Mon Sep 27 17:43:37 2010
 *
 * You should add additional methods to this class to meet the
 * application requirements.  This class will only be generated as
 * long as it does not already exist in the output directory.
 *
 * @package    lib.model
 */
class Option extends BaseOption {

	/**
	 * Initializes internal state of Option object.
	 * @see        parent::__construct()
	 */
	public function __construct()
	{
		// Make sure that parent constructor is always invoked, since that
		// is where any default values for this object are set.
		parent::__construct();
	}

    /*
     * @param state of the option for auto-email
     * @return name of the file for this state
     *
     * Allow to return the correct path of the file for state of the option.
     * If it's active, we show a ok image else we show a cross image.
     */
    public static function stateIcon($state)
    {

       if ( $state == 0)
          $path = "ok.png";
       else
          $path = "cross.png";

       return $path;
    }


       
} // Option
