<?php

namespace Codete\FormGeneratorBundle\Tests\Model;

use Codete\FormGeneratorBundle\Annotations as Form;

/**
 * @Form\Form(
 *   default = { "person", "anonymous", "employee" }
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
     *   context = {
     *     "no_photo" = "true"
     *   }
     * )
     */
    public $anonymous;

    /**
     * @Form\Embed(
     *   class = "Codete\FormGeneratorBundle\Tests\Model\Person",
     *   view = "work"
     * )
     */
    public $employee;
}
