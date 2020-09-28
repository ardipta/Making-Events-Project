<?php namespace App\Http\Controllers;

use crocodicstudio\crudbooster\controllers\CBController;

class AdminPhotographyServiceController extends CBController {


    public function cbInit()
    {
        $this->setTable("photography_service");
        $this->setPermalink("photography_service");
        $this->setPageTitle("Photography Service");

        $this->addDatetime("Created At","created_at")->required(false)->showAdd(false)->showEdit(false);
		$this->addDatetime("Updated At","updated_at")->required(false)->showAdd(false)->showEdit(false);
		$this->addText("Photographer ID","photographer_id")->strLimit(150)->maxLength(255);
		$this->addText("Photographer Name","photographer_name")->strLimit(150)->maxLength(255);
		$this->addNumber("Mobile No","mobile_no");
		$this->addEmail("Email","email");
		$this->addTextArea("Photography Category","category")->strLimit(150);
		$this->addMoney("Price","price");
		$this->addText("Discount","discount")->required(false)->strLimit(150)->maxLength(255);
		$this->addImage("Attach Image","image")->required(false)->encrypt(true)->resize(500,500);
		

    }
}
