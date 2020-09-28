<?php namespace App\Http\Controllers;

use crocodicstudio\crudbooster\controllers\CBController;

class AdminFoodServiceController extends CBController {


    public function cbInit()
    {
        $this->setTable("food_service");
        $this->setPermalink("food_service");
        $this->setPageTitle("Food Service");

        $this->addDatetime("Created At","created_at")->required(false)->showAdd(false)->showEdit(false);
		$this->addDatetime("Updated At","updated_at")->required(false)->showAdd(false)->showEdit(false);
		$this->addText("provider_Id","Provider ID")->strLimit(150)->maxLength(255);
		$this->addText("provider_name","Provider Name")->strLimit(150)->maxLength(255);
		$this->addTextArea("Item Name","Item Name")->strLimit(150);
		$this->addMoney("Price","Price");
		$this->addText("Discount","Discount")->required(false)->strLimit(150)->maxLength(255);
		

    }
}
