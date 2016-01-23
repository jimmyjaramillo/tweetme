<?php

/**
 * Persona form base class.
 *
 * @method Persona getObject() Returns the current form's model object
 *
 * @package    tweetme
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BasePersonaForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'            => new sfWidgetFormInputHidden(),
      'dni'           => new sfWidgetFormInputText(),
      'first_name'    => new sfWidgetFormInputText(),
      'last_name'     => new sfWidgetFormInputText(),
      'email_address' => new sfWidgetFormInputText(),
      'telefono'      => new sfWidgetFormInputText(),
      'direccion'     => new sfWidgetFormInputText(),
      'genero'        => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id'            => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'dni'           => new sfValidatorInteger(),
      'first_name'    => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'last_name'     => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'email_address' => new sfValidatorString(array('max_length' => 255)),
      'telefono'      => new sfValidatorInteger(),
      'direccion'     => new sfValidatorString(array('max_length' => 35)),
      'genero'        => new sfValidatorInteger(),
    ));

    $this->validatorSchema->setPostValidator(
      new sfValidatorAnd(array(
        new sfValidatorDoctrineUnique(array('model' => 'Persona', 'column' => array('dni'))),
        new sfValidatorDoctrineUnique(array('model' => 'Persona', 'column' => array('email_address'))),
      ))
    );

    $this->widgetSchema->setNameFormat('persona[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Persona';
  }

}
