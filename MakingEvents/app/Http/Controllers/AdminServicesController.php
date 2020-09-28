<?php namespace App\Http\Controllers;

use crocodicstudio\crudbooster\controllers\CBController;

class AdminServicesController extends CBController {


    public function cbInit()
    {
        $this->setTable("events");
        $this->setPermalink("services");
        $this->setPageTitle("Services");

        $this->addDatetime("Created At","created_at")->required(false)->showAdd(false)->showEdit(false);
		$this->addDatetime("Updated At","updated_at")->required(false)->showAdd(false)->showEdit(false);
		$this->addText("Service Name","service_name")->strLimit(150)->maxLength(255);
		$this->addText("Description","description")->strLimit(150)->maxLength(255);
		$this->addImage("Photo","photo")->encrypt(true)->resize(500,500);
		

    }
}
