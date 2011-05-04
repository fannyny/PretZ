<?php



/**
 * Skeleton subclass for performing query and update operations on the 'template' table.
 *
 * 
 *
 * This class was autogenerated by Propel 1.5.3 on:
 *
 * Tue Sep 28 15:53:16 2010
 *
 * You should add additional methods to this class to meet the
 * application requirements.  This class will only be generated as
 * long as it does not already exist in the output directory.
 *
 * @package    propel.generator.lib.model
 */
class TemplateQuery extends BaseTemplateQuery
{

    /*
     * @return url of the logo
     *
     * Return the url of the file of the PretZ logo
     */
    public static function getLogo()
    {
      $logo = self::create()
            ->filterByActive('1')
            ->findOne();

      return 'images/uploads/'.$logo->getLogo();

    }
} // TemplateQuery
