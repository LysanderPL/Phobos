<?php
/**
 * Created by PhpStorm.
 * User: maciej
 * Date: 23.07.16
 * Time: 22:04
 */

namespace AppBundle\Library\Utilities\Resources;


interface ResourceInterface
{
    /**
     * @return int
     */
    public function calculateResource() : int;

}