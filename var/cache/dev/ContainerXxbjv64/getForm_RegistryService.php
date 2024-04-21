<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'form.registry' shared service.

include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormRegistryInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormRegistry.php';
include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormExtensionInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/symfony/form/Extension/DependencyInjection/DependencyInjectionExtension.php';
include_once \dirname(__DIR__, 4).'/vendor/symfony/form/ResolvedFormTypeFactoryInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/symfony/form/Extension/DataCollector/Proxy/ResolvedTypeFactoryDataCollectorProxy.php';
include_once \dirname(__DIR__, 4).'/vendor/symfony/form/ResolvedFormTypeFactory.php';

return $this->privates['form.registry'] = new \Symfony\Component\Form\FormRegistry([0 => new \Symfony\Component\Form\Extension\DependencyInjection\DependencyInjectionExtension(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
    'App\\Form\\ActiviteType' => ['privates', 'App\\Form\\ActiviteType', 'getActiviteTypeService.php', true],
    'App\\Form\\ActivitecelluleType' => ['privates', 'App\\Form\\ActivitecelluleType', 'getActivitecelluleTypeService.php', true],
    'App\\Form\\AnneeScolaireType' => ['privates', 'App\\Form\\AnneeScolaireType', 'getAnneeScolaireTypeService.php', true],
    'App\\Form\\AssignationType' => ['privates', 'App\\Form\\AssignationType', 'getAssignationTypeService.php', true],
    'App\\Form\\AutrePayementType' => ['privates', 'App\\Form\\AutrePayementType', 'getAutrePayementTypeService.php', true],
    'App\\Form\\AutreentreeType' => ['privates', 'App\\Form\\AutreentreeType', 'getAutreentreeTypeService.php', true],
    'App\\Form\\AutreentreecelluleType' => ['privates', 'App\\Form\\AutreentreecelluleType', 'getAutreentreecelluleTypeService.php', true],
    'App\\Form\\CelluleType' => ['privates', 'App\\Form\\CelluleType', 'getCelluleTypeService.php', true],
    'App\\Form\\ChargeType' => ['privates', 'App\\Form\\ChargeType', 'getChargeTypeService.php', true],
    'App\\Form\\ClasseAnneeType' => ['privates', 'App\\Form\\ClasseAnneeType', 'getClasseAnneeTypeService.php', true],
    'App\\Form\\ClasseType' => ['privates', 'App\\Form\\ClasseType', 'getClasseTypeService.php', true],
    'App\\Form\\ClassearabeeditType' => ['privates', 'App\\Form\\ClassearabeeditType', 'getClassearabeeditTypeService.php', true],
    'App\\Form\\ConduiteType' => ['privates', 'App\\Form\\ConduiteType', 'getConduiteTypeService.php', true],
    'App\\Form\\CotisationType' => ['privates', 'App\\Form\\CotisationType', 'getCotisationTypeService.php', true],
    'App\\Form\\DatePickerType' => ['privates', 'App\\Form\\DatePickerType', 'getDatePickerTypeService.php', true],
    'App\\Form\\DepenseType' => ['privates', 'App\\Form\\DepenseType', 'getDepenseTypeService.php', true],
    'App\\Form\\DepensecelluleType' => ['privates', 'App\\Form\\DepensecelluleType', 'getDepensecelluleTypeService.php', true],
    'App\\Form\\FinancementType' => ['privates', 'App\\Form\\FinancementType', 'getFinancementTypeService.php', true],
    'App\\Form\\FinancementcelluleType' => ['privates', 'App\\Form\\FinancementcelluleType', 'getFinancementcelluleTypeService.php', true],
    'App\\Form\\GainType' => ['privates', 'App\\Form\\GainType', 'getGainTypeService.php', true],
    'App\\Form\\ImageType' => ['privates', 'App\\Form\\ImageType', 'getImageTypeService.php', true],
    'App\\Form\\MessageType' => ['privates', 'App\\Form\\MessageType', 'getMessageTypeService.php', true],
    'App\\Form\\PartenaireType' => ['privates', 'App\\Form\\PartenaireType', 'getPartenaireTypeService.php', true],
    'App\\Form\\PartenairecelluleType' => ['privates', 'App\\Form\\PartenairecelluleType', 'getPartenairecelluleTypeService.php', true],
    'App\\Form\\PosteType' => ['privates', 'App\\Form\\PosteType', 'getPosteTypeService.php', true],
    'App\\Form\\RechercheType' => ['privates', 'App\\Form\\RechercheType', 'getRechercheTypeService.php', true],
    'App\\Form\\RegistrationType' => ['privates', 'App\\Form\\RegistrationType', 'getRegistrationTypeService.php', true],
    'App\\Form\\RubriqueType' => ['privates', 'App\\Form\\RubriqueType', 'getRubriqueTypeService.php', true],
    'App\\Form\\TeacherType' => ['privates', 'App\\Form\\TeacherType', 'getTeacherTypeService.php', true],
    'App\\Form\\TransfertType' => ['privates', 'App\\Form\\TransfertType', 'getTransfertTypeService.php', true],
    'App\\Form\\TransfertcelluleType' => ['privates', 'App\\Form\\TransfertcelluleType', 'getTransfertcelluleTypeService.php', true],
    'App\\Form\\Type\\AnneeType' => ['privates', 'App\\Form\\Type\\AnneeType', 'getAnneeTypeService.php', true],
    'App\\Form\\Type\\BloodGroupType' => ['privates', 'App\\Form\\Type\\BloodGroupType', 'getBloodGroupTypeService.php', true],
    'App\\Form\\Type\\ClasseType' => ['privates', 'App\\Form\\Type\\ClasseType', 'getClasseType2Service.php', true],
    'App\\Form\\Type\\FemmesType' => ['privates', 'App\\Form\\Type\\FemmesType', 'getFemmesTypeService.php', true],
    'App\\Form\\Type\\RegionType' => ['privates', 'App\\Form\\Type\\RegionType', 'getRegionTypeService.php', true],
    'App\\Form\\Type\\SexeType' => ['privates', 'App\\Form\\Type\\SexeType', 'getSexeTypeService.php', true],
    'App\\Form\\Type\\SituationType' => ['privates', 'App\\Form\\Type\\SituationType', 'getSituationTypeService.php', true],
    'App\\Form\\Type\\StatusType' => ['privates', 'App\\Form\\Type\\StatusType', 'getStatusTypeService.php', true],
    'App\\Form\\UserType' => ['privates', 'App\\Form\\UserType', 'getUserTypeService.php', true],
    'App\\Form\\VersementType' => ['privates', 'App\\Form\\VersementType', 'getVersementTypeService.php', true],
    'App\\Form\\ZoneType' => ['privates', 'App\\Form\\ZoneType', 'getZoneTypeService.php', true],
    'App\\Form\\changePasswordType' => ['privates', 'App\\Form\\changePasswordType', 'getChangePasswordTypeService.php', true],
    'Symfony\\Bridge\\Doctrine\\Form\\Type\\EntityType' => ['privates', 'form.type.entity', 'getForm_Type_EntityService.php', true],
    'Symfony\\Component\\Form\\Extension\\Core\\Type\\ChoiceType' => ['privates', 'form.type.choice', 'getForm_Type_ChoiceService.php', true],
    'Symfony\\Component\\Form\\Extension\\Core\\Type\\FileType' => ['services', 'form.type.file', 'getForm_Type_FileService.php', true],
    'Symfony\\Component\\Form\\Extension\\Core\\Type\\FormType' => ['privates', 'form.type.form', 'getForm_Type_FormService.php', true],
], [
    'App\\Form\\ActiviteType' => '?',
    'App\\Form\\ActivitecelluleType' => '?',
    'App\\Form\\AnneeScolaireType' => '?',
    'App\\Form\\AssignationType' => '?',
    'App\\Form\\AutrePayementType' => '?',
    'App\\Form\\AutreentreeType' => '?',
    'App\\Form\\AutreentreecelluleType' => '?',
    'App\\Form\\CelluleType' => '?',
    'App\\Form\\ChargeType' => '?',
    'App\\Form\\ClasseAnneeType' => '?',
    'App\\Form\\ClasseType' => '?',
    'App\\Form\\ClassearabeeditType' => '?',
    'App\\Form\\ConduiteType' => '?',
    'App\\Form\\CotisationType' => '?',
    'App\\Form\\DatePickerType' => '?',
    'App\\Form\\DepenseType' => '?',
    'App\\Form\\DepensecelluleType' => '?',
    'App\\Form\\FinancementType' => '?',
    'App\\Form\\FinancementcelluleType' => '?',
    'App\\Form\\GainType' => '?',
    'App\\Form\\ImageType' => '?',
    'App\\Form\\MessageType' => '?',
    'App\\Form\\PartenaireType' => '?',
    'App\\Form\\PartenairecelluleType' => '?',
    'App\\Form\\PosteType' => '?',
    'App\\Form\\RechercheType' => '?',
    'App\\Form\\RegistrationType' => '?',
    'App\\Form\\RubriqueType' => '?',
    'App\\Form\\TeacherType' => '?',
    'App\\Form\\TransfertType' => '?',
    'App\\Form\\TransfertcelluleType' => '?',
    'App\\Form\\Type\\AnneeType' => '?',
    'App\\Form\\Type\\BloodGroupType' => '?',
    'App\\Form\\Type\\ClasseType' => '?',
    'App\\Form\\Type\\FemmesType' => '?',
    'App\\Form\\Type\\RegionType' => '?',
    'App\\Form\\Type\\SexeType' => '?',
    'App\\Form\\Type\\SituationType' => '?',
    'App\\Form\\Type\\StatusType' => '?',
    'App\\Form\\UserType' => '?',
    'App\\Form\\VersementType' => '?',
    'App\\Form\\ZoneType' => '?',
    'App\\Form\\changePasswordType' => '?',
    'Symfony\\Bridge\\Doctrine\\Form\\Type\\EntityType' => '?',
    'Symfony\\Component\\Form\\Extension\\Core\\Type\\ChoiceType' => '?',
    'Symfony\\Component\\Form\\Extension\\Core\\Type\\FileType' => '?',
    'Symfony\\Component\\Form\\Extension\\Core\\Type\\FormType' => '?',
]), ['Symfony\\Component\\Form\\Extension\\Core\\Type\\FormType' => new RewindableGenerator(function () {
    yield 0 => ($this->privates['form.type_extension.form.transformation_failure_handling'] ?? $this->load('getForm_TypeExtension_Form_TransformationFailureHandlingService.php'));
    yield 1 => ($this->privates['form.type_extension.form.http_foundation'] ?? $this->load('getForm_TypeExtension_Form_HttpFoundationService.php'));
    yield 2 => ($this->privates['form.type_extension.form.validator'] ?? $this->load('getForm_TypeExtension_Form_ValidatorService.php'));
    yield 3 => ($this->privates['form.type_extension.upload.validator'] ?? $this->load('getForm_TypeExtension_Upload_ValidatorService.php'));
    yield 4 => ($this->privates['form.type_extension.csrf'] ?? $this->load('getForm_TypeExtension_CsrfService.php'));
    yield 5 => ($this->privates['form.type_extension.form.data_collector'] ?? $this->load('getForm_TypeExtension_Form_DataCollectorService.php'));
}, 6), 'Symfony\\Component\\Form\\Extension\\Core\\Type\\RepeatedType' => new RewindableGenerator(function () {
    yield 0 => ($this->privates['form.type_extension.repeated.validator'] ?? ($this->privates['form.type_extension.repeated.validator'] = new \Symfony\Component\Form\Extension\Validator\Type\RepeatedTypeValidatorExtension()));
}, 1), 'Symfony\\Component\\Form\\Extension\\Core\\Type\\SubmitType' => new RewindableGenerator(function () {
    yield 0 => ($this->privates['form.type_extension.submit.validator'] ?? ($this->privates['form.type_extension.submit.validator'] = new \Symfony\Component\Form\Extension\Validator\Type\SubmitTypeValidatorExtension()));
}, 1)], new RewindableGenerator(function () {
    yield 0 => ($this->privates['form.type_guesser.validator'] ?? $this->load('getForm_TypeGuesser_ValidatorService.php'));
    yield 1 => ($this->privates['form.type_guesser.doctrine'] ?? $this->load('getForm_TypeGuesser_DoctrineService.php'));
}, 2))], new \Symfony\Component\Form\Extension\DataCollector\Proxy\ResolvedTypeFactoryDataCollectorProxy(new \Symfony\Component\Form\ResolvedFormTypeFactory(), ($this->privates['data_collector.form'] ?? $this->getDataCollector_FormService())));
