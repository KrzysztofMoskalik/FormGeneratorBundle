<?php

namespace Codete\FormGeneratorBundle\Tests\Model;

use Codete\FormGeneratorBundle\Annotations as Form;

/**
 * @Form\Form(
 *   default = { "person", "employee" }
 * )
 */
class SimpleParent
{
    public $id;
    
    /**
     * @Form\Embed(
     *   class = "Codete\FormGeneratorBundle\Tests\Model\Person",
     * )
     */
    public $person;

    /**
     * @Form\Embed(
     *   class = "Codete\FormGeneratorBundle\Tests\Model\Person",
     *   view = "work"
     * )
     */
    public $employee;

}
