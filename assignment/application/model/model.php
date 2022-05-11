<?php
class Model {
	public $dbhandle;
	public function __construct()
	{
		// Set up the database source name (DSN)
		$dsn = 'sqlite:./db/data.db';
		try {	
			$this->dbhandle = new PDO($dsn, 'user', 'password', array(
    													PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    													PDO::ATTR_EMULATE_PREPARES => false,
														));
		}
		catch (PDOEXception $e) {
			echo "I'm sorry, Martin. I'm afraid I can't connect to the database!";
        	print new Exception($e->getMessage());
    	}
	}

	//text data
	public function zeroCreate()
	{
		try {
			$this->dbhandle->exec("CREATE TABLE texts (Id INTEGER PRIMARY KEY, title TEXT, subTitle TEXT, description TEXT)");
			return "models table is successfully created inside test1.db file";
		}
		catch (PDOEXception $e){
			print new Exception($e->getMessage());
		}
		$this->dbhandle = NULL;
	}
	
	public function dbInsertData()
	{
		try{
			$this->dbhandle->exec(
			"INSERT INTO texts (Id, title, subTitle, description) 
				VALUES (1, 'Coca Cola Greeat Britain', 'Founded in 1886 by pharmacist Dr John S Pemberton.', 'Founded in 1886 by pharmacist Dr John S Pemberton in Atlanta, Georgia, The Coca‑Cola Company is the world''s leading manufacturer, marketer and distributor of non-alcoholic beverage concentrates and syrups, and produces nearly 400 brands.'); " .
			"INSERT INTO texts (Id, title, subTitle, description) 
				VALUES (2, 'Coca Cola', 'New York Harbour, 1886', 'It was 1886, John Pemberton, an Atlanta pharmacist, was inspired by simple curiosity. One afternoon, he stirred up a fragrant, caramel-coloured liquid and, when it was done, the mixture was combined with carbonated water and sampled by customers who all agreed - this new drink was something special!'); " .
			"INSERT INTO texts (Id, title, subTitle, description) 
				VALUES (3, 'Sprite', 'West Germany, 1959', 'First introduced in 1961, crisp, refreshing, clean-tasting Sprite is now the world''s leading lemon and lime flavoured soft drink and is sold in more than 190 different countries. Sprite Zero, part of our no sugar Zero range, offers the delicious lemon lime taste of Sprite without the sugar or calories.'); " .
			"INSERT INTO texts (Id, title, subTitle, description) 
				VALUES (4, 'Schweppes', 'Geneva, 1783', 'Schweppes is a beverage brand that originated in the Republic of Geneva and that is sold around the world. It sold the world''s first soft drink, bottled soda water, in 1783. The company sells a variety of lemonade, carbonated waters and ginger ales.'); " );
			return "texts data inserted successfully inside test1.db";
		}
		catch(PDOEXception $e) {
			print new Exception($e->getMessage());
		}
		$this->dbhandle = NULL;
	}

	public function dbGetData(){
		try{
			$sql = 'SELECT * FROM texts';
			$stmt = $this->dbhandle->query($sql);
			$result = null;
			$i=-0;	
			while ($data = $stmt->fetch()) {
				$result[$i]['title'] = $data['title'];
				$result[$i]['subTitle'] = $data['subTitle'];
				$result[$i]['description'] = $data['description'];
				// $result[$i]['modelSubtitle'] = $data['modelSubtitle'];
				// $result[$i]['modelDescription'] = $data['modelDescription'];
				$i++;
			}
		}
		catch (PDOEXception $e) {
			print new Exception($e->getMessage());
		}
		$this->dbhandle = NULL;
		return $result;
	}

	public function dbDelete() {
		$this->dbhandle->exec("DROP TABLE texts");
		return "texts table successfully deleted from inside data.db file";
	}





	// img url
	public function zeroCreate1()
	{
		try {
			$this->dbhandle->exec("CREATE TABLE imgs (Id INTEGER PRIMARY KEY, bannerUrl TEXT, imageUrl TEXT, cardUrl TEXT)");
			return "models table is successfully created inside test1.db file";
		}
		catch (PDOEXception $e){
			print new Exception($e->getMessage());
		}
		$this->dbhandle = NULL;
	}
		
	public function dbInsertData1()
	{
		try{
			$this->dbhandle->exec(
			"INSERT INTO imgs (Id, bannerUrl, imageUrl, cardUrl) 
				VALUES (1, '../application/assets/images/cocacola.png', '../application/assets/images/gallery_images/coke_2.png', '../application/assets/images/coca_cola.jpg'); " .
			"INSERT INTO imgs (Id, bannerUrl, imageUrl, cardUrl) 
				VALUES (2, '../application/assets/images/love.png', '../application/assets/images/gallery_images/sprite.png', '../application/assets/images/sprite.jpg'); " .
			"INSERT INTO imgs (Id, bannerUrl, imageUrl, cardUrl) 
				VALUES (3, '../application/assets/images/schweppes.jpg', '../application/assets/images/gallery_images/suda.png', '../application/assets/images/Schweppes_Bottles.jpg'); " 
				);
			return "imgs data inserted successfully inside test1.db";
		}
		catch(PDOEXception $e) {
			print new Exception($e->getMessage());
		}
		$this->dbhandle = NULL;
	}

	public function dbGetData1(){
		try{
			$sql = 'SELECT * FROM imgs';
			$stmt = $this->dbhandle->query($sql);
			$result = null;
			$i=-0;	
			while ($data = $stmt->fetch()) {
				$result[$i]['bannerUrl'] = $data['bannerUrl'];
				$result[$i]['imageUrl'] = $data['imageUrl'];
				$result[$i]['cardUrl'] = $data['cardUrl'];
				$i++;
			}
		}
		catch (PDOEXception $e) {
			print new Exception($e->getMessage());
		}
		$this->dbhandle = NULL;
		return $result;
	}

	public function dbDelete1() {
		$this->dbhandle->exec("DROP TABLE imgs");
		return "imgs table successfully deleted from inside data.db file";
	}

	// models description
	public function zeroCreate2()
		{
			try {
				$this->dbhandle->exec("CREATE TABLE models (Id INTEGER PRIMARY KEY, modelTitle TEXT, modelUrl TEXT, title TEXT, subTitle TEXT, description TEXT)");
				return "models table is successfully created inside test1.db file";
			}
			catch (PDOEXception $e){
				print new Exception($e->getMessage());
			}
			$this->dbhandle = NULL;
		}
			
		public function dbInsertData2()
		{
			try{
				$this->dbhandle->exec(
				"INSERT INTO models (Id, modelTitle, modelUrl, title, subTitle, description) 
					VALUES (1, 'Coca Cola Model', '../application/assets/x3d/coke.x3d', 'History of Coca Cola', 'Atlanta Beginnings','It was 1886, and in New York Harbour, workers were constructing the Statue of Liberty. Eight hundred miles away, another great American symbol was about to be unveiled. Like many people who change history, John Pemberton, an Atlanta pharmacist, was inspired by simple curiosity. One afternoon, he stirred up a fragrant, caramel-coloured liquid and, when it was done, he carried it a few doors down to Jacobs'' Pharmacy. Here, the mixture was combined with carbonated water and sampled by customers who all agreed - this new drink was something special. So Jacobs'' Pharmacy put it on sale for five cents (about 3p) a glass.'); " .
				"INSERT INTO models (Id, modelTitle, modelUrl, title, subTitle, description)  
					VALUES (2, 'Sprite Model', '../application/assets/x3d/sprite.x3d', 'Sprite — Fanta Klare Zitrone','First introduced in 1961','Crisp, refreshing, clean-tasting Sprite is now the world''s leading lemon and lime flavoured soft drink and is sold in more than 190 different countries. Sprite Zero, part of Coca Cola''s no sugar Zero range, offers the delicious lemon lime taste of Sprite without the sugar or calories.'); " .
				"INSERT INTO models (Id, modelTitle, modelUrl, title, subTitle, description) 
					VALUES (3, 'Scheweppes Model', '../application/assets/x3d/suda.x3d', 'Scheweppes''s History','British Royal Family',' In 1792, he moved to London to develop the business there. In 1843, Schweppes commercialised Malvern Water at the Holywell Spring in the Malvern Hills, which was to become a favourite of the British Royal Family until parent company Coca-Cola closed the historic plant in 2010 to local outcry.'); " 
					);
				return "models data inserted successfully inside data.db";
			}
			catch(PDOEXception $e) {
				print new Exception($e->getMessage());
			}
			$this->dbhandle = NULL;
		}
	
		public function dbGetData2(){
			try{
				$sql = 'SELECT * FROM models';
				$stmt = $this->dbhandle->query($sql);
				$result = null;
				$i=-0;	
				while ($data = $stmt->fetch()) {
					$result[$i]['modelTitle'] = $data['modelTitle'];
					$result[$i]['modelUrl'] = $data['modelUrl'];
					$result[$i]['title'] = $data['title'];
					$result[$i]['subTitle'] = $data['subTitle'];
					$result[$i]['description'] = $data['description'];
					$i++;
				}
			}
			catch (PDOEXception $e) {
				print new Exception($e->getMessage());
			}
			$this->dbhandle = NULL;
			return $result;
		}
	
		public function dbDelete2() {
			$this->dbhandle->exec("DROP TABLE models");
			return "models table successfully deleted from inside data.db file";
		}
	


		// controller
		public function zeroCreate3()
		{
			try {
				$this->dbhandle->exec("CREATE TABLE contro (Id INTEGER PRIMARY KEY, controTitle TEXT, controDesc TEXT)");
				return "contro table is successfully created inside test1.db file";
			}
			catch (PDOEXception $e){
				print new Exception($e->getMessage());
			}
			$this->dbhandle = NULL;
		}
			
		public function dbInsertData3()
		{
			try{
				$this->dbhandle->exec(
				"INSERT INTO contro (Id, controTitle, controDesc) 
					VALUES (1, '3D Images', 'These 3D images of the Coke can, Sprite bottle and Scheweppes bottle are rendered in 3ds Max 2022 with Mental Ray'); " .
				"INSERT INTO contro (Id, controTitle, controDesc) 
					VALUES (2, 'Camera Controller', 'Learn to think deeply, to look at a problem from multiple angles, to see beyond the surface of a problem to see its essence.'); " .
				"INSERT INTO contro (Id, controTitle, controDesc) 
					VALUES (3, 'Dancing with the wind', 'May the cold wind blow away sorrow and bring happiness and laughter'); " . 
				"INSERT INTO contro (Id, controTitle, controDesc) 
					VALUES (4, 'Light and dark', 'The darkest hour is the nearest to the light.');"				
					);
				return "contro data inserted successfully inside data.db";
			}
			catch(PDOEXception $e) {
				print new Exception($e->getMessage());
			}
			$this->dbhandle = NULL;
		}
	
		public function dbGetData3(){
			try{
				$sql = 'SELECT * FROM contro';
				$stmt = $this->dbhandle->query($sql);
				$result = null;
				$i=-0;	
				while ($data = $stmt->fetch()) {
					$result[$i]['controTitle'] = $data['controTitle'];
					$result[$i]['controDesc'] = $data['controDesc'];
					$i++;
				}
			}
			catch (PDOEXception $e) {
				print new Exception($e->getMessage());
			}
			$this->dbhandle = NULL;
			return $result;
		}
	
		public function dbDelete3() {
			$this->dbhandle->exec("DROP TABLE contro");
			return "contro table successfully deleted from inside data.db file";
		}
}
