<style>
form {
        background: black;
        border-radius: 20px;
        padding: 1.3rem;
        width: 400px;
        margin: 2rem auto;
        box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
        
    }

    .btn {
        padding: 15px;
        border: 0;
        text-shadow: 1px 1px 0px rgba(0, 0, 0, .4);
        box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
    }

    .btn:hover {
        color: #fff;
        background: linear-gradient(90deg, #0700b8 0%, #00ff88 100%);
        border-color: blue;
    }
    
</style>
<body>
    <div class="container mt-5 text-center ">
        <form action="" name="post" method="POST">
            <h2 class="text-light mt-2 mb-4">Form Validation</h2>
            <div class="row">

                <div class="input-group col-lg-12 mb-4">
                    <div class="input-group-prepend">
                            <span class="input-group-text bg-dark text-light px-4 border-md border-right-0">
                                <i class="fa fa-user text-primary" style=" font-size:25px;padding:10px;"></i>
                            </span>
                    </div>
                        <input id="name" type="text" name="name" placeholder="Name"
                            class="form-control bg-dark text-light border-left-0 border-md" style="padding:10px">
                </div>

                <div class="input-group col-lg-12 mb-4">
                    <div class="input-group-prepend">
                        <span class="input-group-text bg-dark text-light px-4 border-md border-right-0">
                            <i class="fa fa-map-marker text-primary" style=" font-size:25px; padding:10px;"></i>
                        </span>
                    </div>
                        <input id="address" type="text" name="address" placeholder=" Address"
                            class="form-control bg-dark text-light border-left-0 border-md" style="padding:10px" >
                </div>

                <div class="input-group col-lg-12 mb-4">
                    <div class="input-group-prepend">
                            <span class="input-group-text bg-dark text-light px-4 border-md border-right-0">
                                <i class="fa fa-user text-primary" style="font-size:25px; padding:10px;"></i>
                            </span>
                    </div>
                        <input id="age" type="number" name="age" placeholder="Age"
                        class="form-control bg-dark text-light border-left-0 border-md" style="padding:10px">
                </div>


                <div class="input-group col-lg-12 mb-4">
                    <div class="input-group-prepend">
                        <span class="input-group-text bg-dark text-light px-4 border-md border-right-0">
                            <i class="fa fa-phone text-primary" style=" font-size:25px; padding:10px;"></i>
                        </span>
                    </div>
                        <input id="contact" type="number" name="contact" placeholder="Contact Number"
                            class="form-control bg-dark text-light border-left-0 border-md" style="padding:10px">
                    </div>
                    <div class="form-group col-lg-12 mx-auto mb-0">
                        <button class="btn btn-primary mb-2" name="post" style="border-radius:10px;">
                            <h4><i class="fa fa-paper-plane" aria-hidden="true"></i> Submit</h4>
                        </button>
                    </div>
                </div>
            </div>
        </form>
    </div>
                
    <div class="card text-center container mb-4" style="box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;width:400px; background-color:black;">
        <div class="card-body">
            <h4 class="text-light text-justify" style="margin-right:-100px;"> 
                <?php
                    include_once("header.php"); 
                ?>
                    
                <?php
                    class formVerify{
                        public $name;
                        public $address;
                        public $age;
                        public $contact;
                        public $success;

                        public function checking(){
                            if(isset($_POST['post'])){
                                $name=$_POST['name'];
                                $address=$_POST['address'];
                                $age=$_POST['age'];
                                $contact=$_POST['contact'];
                                if(!empty($name) && (!empty($address)) && (!empty($age)) && (!empty($contact))){
                                    echo "Name: ".$name;
                                    echo "<br>Address: ".$address;
                                    echo "<br>Age: ".$age;
                                    echo "<br>Contact Number: ".$contact;
                                } 
                            }
                        }
                    } 
            
                    $form=new formVerify();
                    $form->checking();       

                ?>
            </h4>
        </div>
    </div>
</body>

