<?php

namespace App\Pages;

use PageController;
use SilverStripe\Core\Injector\Injector;

use SilverStripe\Control\Director;
use SilverStripe\Control\HTTPRequest;
use SilverStripe\Control\Controller;

use SilverStripe\Forms\CheckboxField;
use SilverStripe\Forms\Form;
use SilverStripe\Forms\FieldList;
use SilverStripe\Forms\TextField;
use SilverStripe\Forms\EmailField;
use SilverStripe\Forms\FormAction;
use SilverStripe\Forms\RequiredFields;

class JoinPageController extends PageController {
    private static $allowed_actions = [
        'processJoinForm',
    ];


    public function getFormError()
    {
        $request = Injector::inst()->get(HTTPRequest::class);
        $session = $request->getSession();

        if (!empty($session->get('formError'))) {
            $message = $session->get('formError');
            $session->clear('formError');
            return ($message);
        }
    }

    public function processJoinForm()
    {
        $fields = FieldList::create(
            TextField::create('FirstName')
            ->setAttribute('class', 'w-full input')
            ->setAttribute('Placeholder', 'First name'),
            TextField::create('Insert')
            ->setAttribute('class', 'w-full input')
            ->setAttribute('Placeholder', 'Insert'),
            TextField::create('Lastname')
            ->setAttribute('class', 'w-full input')
            ->setAttribute('Placeholder', 'Last name'),
            EmailField::create('Email')
            ->setAttribute('class', 'w-full input')
            ->setAttribute('Placeholder', 'E-mail'),
            CheckboxField::create('Journalist', "Do you work as a journalist?")
            ->setAttribute('class', 'checkbox'),
            CheckboxField::create('Subscribe', "Please email me updates on the ‘a Safer World for the Truth’ initiative, including campaigns and ways to participate. You can unsubscribe at any time using the link in each email.")
            ->setAttribute('class', 'checkbox')
        );

        $actions = FieldList::create(
            FormAction::create('doprocessJoinForm')
            ->setTitle('Ok')->setAttribute('class', 'btn-secondary')
        );

        $required = RequiredFields::create('FirstName', 'Lastname', 'Email');


        $form = Form::create($this, __FUNCTION__, $fields, $actions, $required);
        $form->setFormAction(Controller::join_links(Director::baseURL(), "join/processJoinForm"));

        // $form->enableSpamProtection()
        // ->fields()->fieldByName('Captcha')
        // ->setTitle("Spam protection")
        // ->setDescription("Please tick the box to prove you're a human and help us stop spam.");

        $form->customise(array(
            'getFormError' => $this->getFormError()
        ));

        $form->setTemplate('Forms/JoinForm');

        return $form;
    }

    public function doprocessJoinForm($data, Form $form)
    {
    }
}
