<?php


/**
 * Skeleton subclass for representing a row from the 'student' table.
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
class Student extends BaseStudent {

    public function  __toString()
    {
        return $this->getName();
    }

} // Student
