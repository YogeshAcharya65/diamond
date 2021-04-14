
<?php
    include 'doodle/doodle.php';

   //login validation from 2 tables
    Api::POST("/user/login",function(){
        if(!isset($_POST['username']) || !$_POST['username'] || !isset($_POST['password']) || !$_POST['password']) Api::send(null);

        $data = database::query('SELECT id, username FROM admin WHERE username = ? and password = ?', $_POST['username'], $_POST['password']);
        if (!empty($data)){
            $data['usertype']='admin';
        }else{ 
            $data = database::query('SELECT id, username, fullName, address, phone, validFrom, validTo, password FROM member WHERE username = ? and password = ?', $_POST['username'], $_POST['password']);
            if(!empty($data)){
                $data['usertype']='member';
            }
        }
        $data['token'] = Token::create($data);
        Api::send($data);
    });

     /* Token Debug*/
     Api::get('/token/verify'.API::STRING,function($token){
        Api::send(Token::verify($token));
    });


    Api::get('/token/verify'.API::STRING,function($token){
        Api::send(Token::verify($token));
    });

    //signup for customer
    Api::POST('/member/register',function(){
        $sql = 'INSERT INTO member (username, password,fullName, address, phone, validFrom, validTo) VALUES(?,?,?,?,?,?,?)';
        $response = Database::query($sql, $_POST['username'], $_POST['password'], $_POST['fullName'], $_POST['phone'], $_POST['address'], $_POST['validFrom'], $_POST['validTo']);
        Api::send($response);
    });

    //upload image
    Api::POST("/image/save", function(){
        $valid = File::check('jpg','png','jpeg','svg');
        if($valid == TRUE) {
            $name = File::save();
            if($name){
                Api::send($name);
            }else{
                Api::send(File::$error);
            }
        }else {
            Api::send(File::$error);
        }
    });


    // uplaod image
    Api::GET("/image/add".API::STRING,function($name){
        $sql = 'INSERT INTO image (name) VALUES (?)';
        $response = Database::query($sql, $name);
        Api::send($response);
    });

    //add blog
    Api::POST("/blog",function(){
        $sql = "INSERT INTO blog (title, description, image) VALUES (?,?,?)";
        $response = Database::query($sql, $_POST['title'], $_POST['description'],$_POST['image']);
        Api::send($response);
    });

    //View blog
    Api::GET("/blog/all",function(){
        $sql = "SELECT * FROM blog";
        $response = Database::query($sql);
        Api::send($response);
    });

     //view blog
    Api::GET('/blog/only'.Api::INTEGER,function($blog_id){
        $sql = "SELECT * FROM blog where id=?";
        $response = Database::query($sql,$blog_id);
        Api::send($response[0]);
    });


     //update Blog
     Api::POST("/update/blog",function(){
        $sql = "UPDATE blog
        SET title=?
        WHERE id=?;";
        $response = Database::query($sql, $_POST['updateTitle'],$_POST['edit_id']);
        Api::send($response);
    });

     //DELETE Blog
    Api::POST("/delete/blog",function(){
        $sql = "DELETE FROM `blog` WHERE id=?";
        $response = Database::query($sql, $_POST['delete_id']);
        Api::send($response);
    });

     //View blog
    Api::GET("/user/all",function(){
        $sql = "SELECT * FROM member";
        $response = Database::query($sql);
        Api::send($response);
    });


    //DELETE user
    Api::POST("/delete/user",function(){
        $sql = "DELETE FROM `member` WHERE id=?";
         $response = Database::query($sql, $_POST['delete_id']);
        Api::send($response);
    });

     //update user
    Api::POST("/update/user",function(){
    $sql = "UPDATE member
    SET fullName=?, address=?, phone=?, username=?, password=?, validFrom=?, validTo=?
    WHERE id=?;";
    $response = Database::query($sql, $_POST['updatedName'],$_POST['updatedAddress'],$_POST['updatedPhone'],$_POST['updatedEmail'],$_POST['updatedPassword'],$_POST['updatedValidFrom'],$_POST['updatedValidTo'],$_POST['edit_id']);
    Api::send($response);
    });


    //update product
     Api::POST("/update/product",function(){
        $sql = "UPDATE product
        SET name=?, price=?
        WHERE id=?;";
        $response = Database::query($sql, $_POST['updatedName'],$_POST['updatedPrice'],$_POST['edit_id']);
        Api::send($response);
    });

     //add blog
    Api::POST("/product",function(){
        $sql = "INSERT INTO product (name, description,category, image, price, brand) VALUES (?,?,?,?,?,?)";
        $response = Database::query($sql, $_POST['name'], $_POST['description'],$_POST['category'],$_POST['image'],$_POST['price'],$_POST['brand']);
        Api::send($response);
    });

    //DELETE product
    Api::POST("/delete/product",function(){
        $sql = "DELETE FROM `product` WHERE id=?";
        $response = Database::query($sql, $_POST['delete_id']);
        Api::send($response);
    });

    //DELETE product
    Api::GET("/product/view",function(){
        $sql = "SELECT * FROM product";
        $response = Database::query($sql);
        Api::send($response);
    });

    //view blog
    Api::GET('/product/only'.Api::INTEGER,function($product_id){
        $sql = "SELECT * FROM product where id=?";
        $response = Database::query($sql,$product_id);
        Api::send($response[0]);
    });

    //add contact queries
    Api::POST("/queries",function(){
        $sql = "INSERT INTO contact (name, address, email, phone, message) VALUES (?,?,?,?,?)";
        $response = Database::query($sql, $_POST['contactName'], $_POST['contactAddress'],$_POST['contactEmail'],$_POST['contactPhone'], $_POST['contactSubject']);
        Api::send($response);
    });

    //Select contact form
    Api::GET("/contact/all",function(){
        $sql = "SELECT * FROM contact";
        $response = Database::query($sql);
        Api::send($response);
    });

     //DELETE query
    Api::POST("/delete/query",function(){
        $sql = "DELETE FROM `contact` WHERE id=?";
        $response = Database::query($sql, $_POST['delete_id']);
        Api::send($response);
    });



?>
