<?php namespace App\Http\Controllers;

use crocodicstudio\crudbooster\controllers\CBController;

class AdminKitServiceController extends CBController {


    public function cbInit()
    {
        $this->setTable("kit_service");
        $this->setPermalink("kit_service");
        $this->setPageTitle("Kit Service");

        $this->addDatetime("Created At","created_at")->required(false)->showAdd(false)->showEdit(false);
		$this->addDatetime("Updated At","updated_at")->required(false)->showAdd(false)->showEdit(false);
		$this->addText("Provider ID","provider_id")->strLimit(150)->maxLength(255);
		$this->addText("Provider Name","provider_name")->strLimit(150)->maxLength(255);
		$this->addSelectOption("Kit Item","kit_item")->options(['chocolate'=>'Chocolate Box Kit','seminar'=>'Seminar Kit','wedding'=>'Wedding Kit','child'=>'Child Kit']);
		$this->addMoney("Price","price");
		$this->addText("Discount","discount")->required(false)->strLimit(150)->maxLength(255);
		

    }
}
