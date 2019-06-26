<?php
use Laravist\Business;
use Laravist\Person;
use Laravist\Staff;

$person = new Person('john');


$staff = new Staff();
$business = new Business($staff);

$business->hire($person);

var_dump($staff);




