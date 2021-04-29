<style>
    .error {color: #FF0000;}
     form {
            background: black;
            border-radius: 20px;
            padding: 1.3rem;
            width: 500px;
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
    <?php 
        include_once("header.php");
    ?>
    <div class="container mt-5 text-center">
        <form action="" method="post">
            <h2 class="text-light">Enter Something</h2>
                <div class="mt-3 mb-3">
                    <?php 
                        session_start();

                        class userInput{
                        
                        public $userInput;
                    
                        function __construct($userInput){
                    
                                $this->userInput = $userInput;
                    
                        }
                    
                        function addSomething(){
                    
                            if(!isset($_SESSION['option'])){
                                $_SESSION['option'] = [];
                            }
            
                            array_push($_SESSION['option'],$this->userInput);

                            echo '<select class="bg-dark text-light mx-auto" name="dropdown" style= "width:430px; height:50px;">';
                                    
                            foreach ($_SESSION['option'] as $value) {
                                echo '<option value="'.$value.'">"'.$value.'"</option>' ;
                            }
                            
                            echo '</select>';
                                    
                        }
                    
                        }
                    if(isset($_POST['submit'])){
                        $userInput = $_POST['userInput'];
                        $input = new userInput($userInput);
                        $input->addSomething();
                    }
                    
                    ?>
                </div>
            <div class="input-group col-lg-12 mb-2">
                    <div class="input-group-prepend">
                            <span class="input-group-text bg-dark text-light px-4 border-md border-right-0">
                                <i class="fa fa-user text-primary" style="font-size:25px; padding:10px;"></i>
                            </span>
                    </div>
                        <input id="user" type="text" name="userInput" placeholder="Enter Something"
                        class="form-control bg-dark text-light border-left-0 border-md" style="padding:10px">
                </div>

                <button type="submit" name="submit" class="btn btn-primary mt-2" style="border-radius:20px;">
                    <h4><i class="fa fa-paper-plane" aria-hidden="true"></i> Submit</h4>
                </button>
            </div>   
        </form>
    </div>
</body>