<?php
                
    class product{
        private $DateAdded;
        private $SKU;
        private $Name;
        private $ProductCategory;
        private $Price;
        private $Status;
        private $PictureURI;
        private $StockAmount;
        private $ProductDesc;
        public $dbConn;

        function setDateAdded($DateAdded) {$this->$DateAdded = $DateAdded; }
        function getDateAdded() {return $this->DateAdded;}
        function setSKU($SKU) {$this->$SKU = $SKU; }
        function getSKU() {return $this->SKU;}
        function setName($Name) {$this->$Name = $Name; }
        function getName() {return $this->Name;}
        function setProductCategory($ProductCategory) {$this->$ProductCategory = $ProductCategory; }
        function getProductCategory() {return $this->ProductCategory;}
        function setPrice($Price) {$this->$Price = $Price; }
        function getPrice() {return $this->Price;}
        function setStatus($Status) {$this->$Status = $Status; }
        function getStatus() {return $this->Status;}
        function setPictureURI($PictureURI) {$this->$PictureURI = $PictureURI; }
        function getPictureURI() {return $this->PictureURI;}
        function setStockAmount($StockAmount) {$this->$StockAmount = $StockAmount; }
        function getStockAmount() {return $this->StockAmount;}
        function setProductDesc($ProductDesc) {$this->$ProductDesc = $ProductDesc; }
        function getProductDesc() {return $this->ProductDesc;}

        public function __construct(){
            require_once('../includes/display_dbConnect.php');
            $db = new DBconnect();
            $this->dbConn = $db->connect();
        }

        public function getAllProducts() {
            $sql = "SELECT * FROM 'products' WHERE 'ProductCategory' = 'Food'";
            $stmt = $this->dbConn->prepare($sql);
            $stmt->execute();
            $products = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $products;
        }
    }
?>