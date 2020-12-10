<?php
    class Form{

        // Connection
        private $conn;

        // Table
        private $db_table = "clients";

        // Columns
 public $c_id;
 public $first_name;
 public $middle_name;
 public $last_name;
 public $company_name;
 public $title;
 public $phone; 
 public $cell_phone;
 public $home_phone;
 public $email_id;
 public $address;
 public $apt_suite; 
 public $country;
 public $state;
 public $city;
 public $zip_postcode;
 public $id_type;
 public $id_number;
 public $issued_by;
 public $issue_date; 
 public $exp_date;
 public $birthday; 
 public $secondary_id;
 public $sec_id_number; 
 public $image;
 public $birth_country; 
 public $citizenship;
 public $comments;

        // Db connection
        public function __construct($db){
            $this->conn = $db;
        }

        
        	public function saveRecords($tbName,$u,$p,$l)
	{
	mysqli_query($conn,"insert into $tbName values('".$u."','".$p."','".$l."')");
	}

        // CREATE
        public function create_form(){
            $sqlQuery = "INSERT INTO
                        ". $this->db_table ."
                    SET
                        first_name = :first_name,
                        middle_name = :middle_name,
                        last_name = :last_name,
                        company_name = :company_name,
                        title = :title,
                        phone = :phone,
                        cell_phone = :cell_phone,
                        home_phone = :home_phone,
                        email_id = :email_id,
                        address = :address,
                        apt_suite = :apt_suite,
                        country = :country,
                        state = :state,
                        city = :city,
                        zip_postcode = :zip_postcode,
                        id_type = :id_type,
                        id_number = :id_number,
                        issued_by = :issued_by,
                        issue_date = :issue_date,
                        exp_date = :exp_date,
                        birthday = :birthday,
                        secondary_id = :secondary_id,
                        sec_id_number = :sec_id_number,
                        image =:image,
                        birth_country = :birth_country,
                        citizenship = :citizenship,
                        comments = :comments";
                       
// echo $sqlQuery;
            $stmt = $this->conn->prepare($sqlQuery);
        

            // sanitize
            $this->first_name=htmlspecialchars(strip_tags($this->first_name));
            $this->middle_name=htmlspecialchars(strip_tags($this->middle_name));
            $this->last_name=htmlspecialchars(strip_tags($this->last_name));
            $this->company_name=htmlspecialchars(strip_tags($this->company_name));
            $this->title=htmlspecialchars(strip_tags($this->title));
            $this->phone=htmlspecialchars(strip_tags($this->phone));
            $this->cell_phone=htmlspecialchars(strip_tags($this->cell_phone));
            $this->home_phone=htmlspecialchars(strip_tags($this->home_phone));
            $this->email_id=htmlspecialchars(strip_tags($this->email_id));
            $this->address=htmlspecialchars(strip_tags($this->address));
            $this->apt_suite=htmlspecialchars(strip_tags($this->apt_suite));
            $this->country=htmlspecialchars(strip_tags($this->country));
            $this->state=htmlspecialchars(strip_tags($this->state));
            $this->city=htmlspecialchars(strip_tags($this->city));
            $this->zip_postcode=htmlspecialchars(strip_tags($this->zip_postcode));
            $this->id_type=htmlspecialchars(strip_tags($this->id_type));
            $this->id_number=htmlspecialchars(strip_tags($this->id_number));
            $this->issued_by=htmlspecialchars(strip_tags($this->issued_by));
            $this->issue_date=htmlspecialchars(strip_tags($this->issue_date));
            $this->exp_date=htmlspecialchars(strip_tags($this->exp_date));
            $this->birthday=htmlspecialchars(strip_tags($this->birthday));
            $this->secondary_id=htmlspecialchars(strip_tags($this->secondary_id));
            $this->sec_id_number=htmlspecialchars(strip_tags($this->sec_id_number));
            $this->image=htmlspecialchars(strip_tags($this->image));
            $this->birth_country=htmlspecialchars(strip_tags($this->birth_country));
            $this->citizenship=htmlspecialchars(strip_tags($this->citizenship));
            $this->comments=htmlspecialchars(strip_tags($this->comments));
            
            // bind data
            $stmt->bindParam(":first_name", $this->first_name);
            $stmt->bindParam(":middle_name", $this->middle_name);
            $stmt->bindParam(":last_name", $this->last_name);
            $stmt->bindParam(":company_name", $this->company_name);
            $stmt->bindParam(":title", $this->title);
            $stmt->bindParam(":phone", $this->phone);
            $stmt->bindParam(":cell_phone", $this->cell_phone);
            $stmt->bindParam(":home_phone", $this->home_phone);
            $stmt->bindParam(":email_id", $this->email_id);
            $stmt->bindParam(":address", $this->address);
            $stmt->bindParam(":apt_suite", $this->apt_suite);
            $stmt->bindParam(":country", $this->country);
            $stmt->bindParam(":state", $this->state);
            $stmt->bindParam(":city", $this->city);
            $stmt->bindParam(":zip_postcode", $this->zip_postcode);
            $stmt->bindParam(":id_type", $this->id_type);
            $stmt->bindParam(":id_number", $this->id_number);
            $stmt->bindParam(":issued_by", $this->issued_by);
            $stmt->bindParam(":issue_date", $this->issue_date);
            $stmt->bindParam(":exp_date", $this->exp_date);
            $stmt->bindParam(":birthday", $this->birthday);
            $stmt->bindParam(":secondary_id", $this->secondary_id);
            $stmt->bindParam(":sec_id_number", $this->sec_id_number);
            $stmt->bindParam(":image", $this->image);
            $stmt->bindParam(":birth_country", $this->birth_country);
            $stmt->bindParam(":citizenship", $this->citizenship);
            $stmt->bindParam(":comments", $this->comments);
                            if($stmt->execute()){
               return true;
            }
            return false;

        }

        // GET ALL
        public function get_form(){
            $sqlQuery = "SELECT c_id, first_name, middle_name, last_name, company_name, title,phone,ext,cell_phone,home_phone,email_id,image,address,country,state FROM " . $this->db_table . "";
            $stmt = $this->conn->prepare($sqlQuery);
            $stmt->execute();
            return $stmt;
        }

// READ single
        public function get_single_form(){
            $sqlQuery = "SELECT *
                        
                      FROM
                        ". $this->db_table ."
                    WHERE 
                       c_id = ?
                    LIMIT 0,1";

            $stmt = $this->conn->prepare($sqlQuery);

            $stmt->bindParam(1, $this->c_id);

            $stmt->execute();

            $dataRow = $stmt->fetch(PDO::FETCH_ASSOC);
            
            $this->first_name = $dataRow['first_name'];
            $this->middle_name = $dataRow['middle_name'];
            $this->last_name = $dataRow['last_name'];
            $this->company_name = $dataRow['company_name'];
            $this->title = $dataRow['title'];
            $this->phone = $dataRow['phone'];
            $this->ext = $dataRow['ext'];
            $this->cell_phone = $dataRow['cell_phone'];
            $this->home_phone = $dataRow['home_phone'];
            $this->email_id = $dataRow['email_id'];
            
            $this->address = $dataRow['address'];
            $this->apt_suite = $dataRow['apt_suite'];
            
            $this->country = $dataRow['country'];
            $this->state = $dataRow['state'];
            
            $this->city = $dataRow['city'];
            $this->zip_postcode = $dataRow['zip_postcode'];
            $this->id_type = $dataRow['id_type'];
            $this->id_number = $dataRow['id_number'];
            $this->issued_by = $dataRow['issued_by'];
            $this->issue_date = $dataRow['issue_date'];
            $this->exp_date = $dataRow['exp_date'];
            $this->birthday = $dataRow['birthday'];
            $this->secondary_id = $dataRow['secondary_id'];
            $this->sec_id_number = $dataRow['sec_id_number'];
            $this->image = $dataRow['image'];
            
            $this->birth_country = $dataRow['birth_country'];
            $this->citizenship = $dataRow['citizenship'];
            $this->comments = $dataRow['comments'];
            
            
        }

        
        // UPDATE
        
        public function update_form(){
            // if(strlen($image) == 19){
                $sqlQuery = "UPDATE
                        ". $this->db_table ."
                    SET
                   first_name = :first_name,
                   middle_name = :middle_name,
                        last_name = :last_name,
                        company_name = :company_name,
                         title = :title,
                        phone = :phone,
                        
                        cell_phone = :cell_phone,
                        home_phone = :home_phone,
                        email_id = :email_id,
                        country = :country,
                        address = :address,
                        apt_suite = :apt_suite,
                        state = :state,
                        city = :city,
                        zip_postcode = :zip_postcode,
                        
                         id_type = :id_type,
                        id_number = :id_number,
                         issued_by = :issued_by,
                        issue_date = :issue_date,
                        exp_date = :exp_date,
                        birthday = :birthday,
                        secondary_id = :secondary_id,
                        sec_id_number = :sec_id_number,
                        
                        birth_country = :birth_country,
                        citizenship = :citizenship,
                        comments = :comments
                   
                    WHERE 
                        c_id = :c_id";
        // echo $sqlQuery;
            $stmt = $this->conn->prepare($sqlQuery);
        
            
            
             // sanitize
            $this->first_name=htmlspecialchars(strip_tags($this->first_name));
            $this->middle_name=htmlspecialchars(strip_tags($this->middle_name));
            $this->last_name=htmlspecialchars(strip_tags($this->last_name));
            $this->company_name=htmlspecialchars(strip_tags($this->company_name));
            $this->title=htmlspecialchars(strip_tags($this->title));
            $this->phone=htmlspecialchars(strip_tags($this->phone));
            $this->cell_phone=htmlspecialchars(strip_tags($this->cell_phone));
            $this->home_phone=htmlspecialchars(strip_tags($this->home_phone));
            $this->email_id=htmlspecialchars(strip_tags($this->email_id));
            $this->country=htmlspecialchars(strip_tags($this->country));
            $this->address=htmlspecialchars(strip_tags($this->address));
            $this->state=htmlspecialchars(strip_tags($this->state));
            $this->city=htmlspecialchars(strip_tags($this->city));
            $this->apt_suite=htmlspecialchars(strip_tags($this->apt_suite));
            $this->zip_postcode=htmlspecialchars(strip_tags($this->zip_postcode));
            $this->id_type=htmlspecialchars(strip_tags($this->id_type));
            $this->id_number=htmlspecialchars(strip_tags($this->id_number));
            $this->issued_by=htmlspecialchars(strip_tags($this->issued_by));
            $this->issue_date=htmlspecialchars(strip_tags($this->issue_date));
            $this->exp_date=htmlspecialchars(strip_tags($this->exp_date));
            $this->birthday=htmlspecialchars(strip_tags($this->birthday));
            $this->secondary_id=htmlspecialchars(strip_tags($this->secondary_id));
            $this->sec_id_number=htmlspecialchars(strip_tags($this->sec_id_number));
            $this->birth_country=htmlspecialchars(strip_tags($this->birth_country));
            $this->citizenship=htmlspecialchars(strip_tags($this->citizenship));
            $this->comments=htmlspecialchars(strip_tags($this->comments));
            $this->c_id=htmlspecialchars(strip_tags($this->c_id));
            
            
            
        
            
            // bind data
            $stmt->bindParam(":first_name", $this->first_name);
            $stmt->bindParam(":middle_name", $this->middle_name);
            $stmt->bindParam(":last_name", $this->last_name);
            $stmt->bindParam(":company_name", $this->company_name);
            $stmt->bindParam(":title", $this->title);
            $stmt->bindParam(":phone", $this->phone);
            $stmt->bindParam(":cell_phone", $this->cell_phone);
            $stmt->bindParam(":home_phone", $this->home_phone);
            $stmt->bindParam(":email_id", $this->email_id);
            $stmt->bindParam(":country", $this->country);
            $stmt->bindParam(":address", $this->address);
            $stmt->bindParam(":state", $this->state);
            
            $stmt->bindParam(":city", $this->city);
            $stmt->bindParam(":apt_suite", $this->apt_suite);
            $stmt->bindParam(":zip_postcode", $this->zip_postcode);
            $stmt->bindParam(":id_number", $this->id_number);
            $stmt->bindParam(":id_type", $this->id_type);
            $stmt->bindParam(":issued_by", $this->issued_by);
            $stmt->bindParam(":issue_date", $this->issue_date);
            $stmt->bindParam(":exp_date", $this->exp_date);
            $stmt->bindParam(":birthday", $this->birthday);
            $stmt->bindParam(":secondary_id", $this->secondary_id);
            $stmt->bindParam(":sec_id_number", $this->sec_id_number);
            $stmt->bindParam(":birth_country", $this->birth_country);
            $stmt->bindParam(":citizenship", $this->citizenship);
            $stmt->bindParam(":comments", $this->comments);
            $stmt->bindParam(":c_id", $this->c_id);
            if($stmt->execute()){
               return true;
            }
            return false;
        }
        // }
        // else{
        public function update_form_image(){
            $sqlQuery = "UPDATE
                        ". $this->db_table ."
                    SET
                   first_name = :first_name,
                   middle_name = :middle_name,
                        last_name = :last_name,
                        company_name = :company_name,
                         title = :title,
                        phone = :phone,
                        
                        cell_phone = :cell_phone,
                        home_phone = :home_phone,
                        email_id = :email_id,
                        country = :country,
                        address = :address,
                        apt_suite = :apt_suite,
                        state = :state,
                        city = :city,
                        zip_postcode = :zip_postcode,
                        
                         id_type = :id_type,
                        id_number = :id_number,
                         issued_by = :issued_by,
                        issue_date = :issue_date,
                        exp_date = :exp_date,
                        birthday = :birthday,
                        secondary_id = :secondary_id,
                        image =:image,
                        sec_id_number = :sec_id_number,
                        
                        birth_country = :birth_country,
                        citizenship = :citizenship,
                        comments = :comments
                   
                    WHERE 
                        c_id = :c_id";
        // echo $sqlQuery;
            $stmt = $this->conn->prepare($sqlQuery);
        
            
            
             // sanitize
            $this->first_name=htmlspecialchars(strip_tags($this->first_name));
            $this->middle_name=htmlspecialchars(strip_tags($this->middle_name));
            $this->last_name=htmlspecialchars(strip_tags($this->last_name));
            $this->company_name=htmlspecialchars(strip_tags($this->company_name));
            $this->title=htmlspecialchars(strip_tags($this->title));
            $this->phone=htmlspecialchars(strip_tags($this->phone));
            $this->cell_phone=htmlspecialchars(strip_tags($this->cell_phone));
            $this->home_phone=htmlspecialchars(strip_tags($this->home_phone));
            $this->email_id=htmlspecialchars(strip_tags($this->email_id));
            $this->country=htmlspecialchars(strip_tags($this->country));
            $this->address=htmlspecialchars(strip_tags($this->address));
            $this->state=htmlspecialchars(strip_tags($this->state));
            $this->city=htmlspecialchars(strip_tags($this->city));
            $this->apt_suite=htmlspecialchars(strip_tags($this->apt_suite));
            $this->zip_postcode=htmlspecialchars(strip_tags($this->zip_postcode));
            $this->id_type=htmlspecialchars(strip_tags($this->id_type));
            $this->id_number=htmlspecialchars(strip_tags($this->id_number));
            $this->issued_by=htmlspecialchars(strip_tags($this->issued_by));
            $this->issue_date=htmlspecialchars(strip_tags($this->issue_date));
            $this->exp_date=htmlspecialchars(strip_tags($this->exp_date));
            $this->birthday=htmlspecialchars(strip_tags($this->birthday));
            $this->secondary_id=htmlspecialchars(strip_tags($this->secondary_id));
            $this->image=htmlspecialchars(strip_tags($this->image));
            $this->sec_id_number=htmlspecialchars(strip_tags($this->sec_id_number));
            $this->birth_country=htmlspecialchars(strip_tags($this->birth_country));
            $this->citizenship=htmlspecialchars(strip_tags($this->citizenship));
            $this->comments=htmlspecialchars(strip_tags($this->comments));
            $this->c_id=htmlspecialchars(strip_tags($this->c_id));
            
            
            
        
            
            // bind data
            $stmt->bindParam(":first_name", $this->first_name);
            $stmt->bindParam(":middle_name", $this->middle_name);
            $stmt->bindParam(":last_name", $this->last_name);
            $stmt->bindParam(":company_name", $this->company_name);
            $stmt->bindParam(":title", $this->title);
            $stmt->bindParam(":phone", $this->phone);
            $stmt->bindParam(":cell_phone", $this->cell_phone);
            $stmt->bindParam(":home_phone", $this->home_phone);
            $stmt->bindParam(":email_id", $this->email_id);
            $stmt->bindParam(":country", $this->country);
            $stmt->bindParam(":address", $this->address);
            $stmt->bindParam(":state", $this->state);
            
            $stmt->bindParam(":city", $this->city);
            $stmt->bindParam(":apt_suite", $this->apt_suite);
            $stmt->bindParam(":zip_postcode", $this->zip_postcode);
            $stmt->bindParam(":id_number", $this->id_number);
            $stmt->bindParam(":id_type", $this->id_type);
            $stmt->bindParam(":issued_by", $this->issued_by);
            $stmt->bindParam(":issue_date", $this->issue_date);
            $stmt->bindParam(":exp_date", $this->exp_date);
            $stmt->bindParam(":birthday", $this->birthday);
            $stmt->bindParam(":secondary_id", $this->secondary_id);
            $stmt->bindParam(":sec_id_number", $this->sec_id_number);
            $stmt->bindParam(":image", $this->image);
            $stmt->bindParam(":birth_country", $this->birth_country);
            $stmt->bindParam(":citizenship", $this->citizenship);
            $stmt->bindParam(":comments", $this->comments);
            $stmt->bindParam(":c_id", $this->c_id);
        
        // }
        
            if($stmt->execute()){
               return true;
            }
            return false;
        }
        // DELETE
        function delete_form(){
            $sqlQuery = "DELETE FROM " . $this->db_table . " WHERE c_id = ?";
            $stmt = $this->conn->prepare($sqlQuery);
        
            $this->c_id=htmlspecialchars(strip_tags($this->c_id));
        
            $stmt->bindParam(1, $this->c_id);
        
            if($stmt->execute()){
                return true;
            }
            return false;
        }

    }
?>