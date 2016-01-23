<?php

/**
 * Persona filter form base class.
 *
 * @package    tweetme
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BasePersonaFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'dni'           => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'first_name'    => new sfWidgetFormFilterInput(),
      'last_name'     => new sfWidgetFormFilterInput(),
      'email_address' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'telefono'      => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'direccion'     => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'genero'        => new sfWidgetFormFilterInput(array('with_empty' => false)),
    ));

    $this->setValidators(array(
      'dni'           => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'first_name'    => new sfValidatorPass(array('required' => false)),
      'last_name'     => new sfValidatorPass(array('required' => false)),
      'email_address' => new sfValidatorPass(array('required' => false)),
      'telefono'      => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'direccion'     => new sfValidatorPass(array('required' => false)),
      'genero'        => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
    ));

    $this->widgetSchema->setNameFormat('persona_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Persona';
  }

  public function getFields()
  {
    return array(
      'id'            => 'Number',
      'dni'           => 'Number',
      'first_name'    => 'Text',
      'last_name'     => 'Text',
      'email_address' => 'Text',
      'telefono'      => 'Number',
      'direccion'     => 'Text',
      'genero'        => 'Number',
    );
  }
}
