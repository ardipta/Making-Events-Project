<?php namespace App\Http\Controllers;

use crocodicstudio\crudbooster\controllers\CBController;

class AdminStageServiceController extends CBController {


    public function cbInit()
    {
        $this->setTable("stage_service");
        $this->setPermalink("stage_service");
        $this->setPageTitle("Stage Service");

        $this->addDatetime("Created At","created_at")->required(false)->showAdd(false)->showEdit(false);
		$this->addDatetime("Updated At","updated_at")->required(false)->showAdd(false)->showEdit(false);
		$this->addText("Provider ID","provider_id")->strLimit(150)->maxLength(255);
		$this->addText("Provider Name","provider_name")->strLimit(150)->maxLength(255);
		$this->addSelectOption("Stage Type","stage_type")->options(['low'=>'Low Quality','medium'=>'Medium Quality','high'=>'High Quality','premium'=>'Premium Quality']);
		$this->addMoney("Price","price");
		$this->addText("Discount","discount")->required(false)->strLimit(150)->maxLength(255);
		$this->addImage("Image","image")->encrypt(true)->resize(500,500);
		

    }
}
