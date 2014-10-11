<?php 

	class Invoice_line{
		public $line_id;
		public $invoice_id;
		public $line_description;
		public $quantity;
		public $price;

		public function __construct($line_id, $invoice_id, $line_description, $quantity, $price){
			$this->line_id=$line_id;
			$this->invoice_id=$invoice_id;
			$this->line_description=$line_description;
			$this->quantity=$quantity;
			$this->price=$price;
		}
}

	class Invoice{
		public $id;
		public $customer_id;
		public $invoice_date;

		public function __construct($id, $customer_id, $invoice_date){
			$this->id=$id;
			$this->customer_id=$customer_id;
			$this->invoice_date=$invoice_date;
		}
}

	class Customer{
		public $id;
		public $name;
		public $email;


		public function __construct($id, $name, $email){
			$this->id=$id;
			$this->name=$name;
			$this->email=$email;
		}
}
?>