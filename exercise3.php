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

    class emailValidate{
        public $emailErr = "";
        public $email = "";
    }

    $emailAdd = new emailValidate();
    if (isset($_POST['submit'])){
        $emailAdd->email = $_POST['email'];
        if (empty($emailAdd->email)){
            $emailAdd->emailErr = " ❌ Email is required";
        } else {
            if (!filter_var($emailAdd->email, FILTER_VALIDATE_EMAIL)) {
            $emailAdd->emailErr = " ❌ Invalid email format";
            }else{
            $emailAdd->emailErr = " ✔ This Email is Valid ";
            }
        }
    }    
?>
    <div class="container text-center mt-5"> 
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
            <h2 class="text-light">Email Validation</h2>
            <div class="mt-3">
                <input class="form-control bg-dark text-danger" value=" <?php echo $emailAdd->emailErr;?>" name="date2"  type="text" disabled style="height:7%; border-radius:10px;">  
            </div>
            <div class="mt-4">
                <p><span class="error">* required field</span></p> 
            </div>
            <div class="mt-3">
                <input class="form-control bg-dark text-light" name="email"  type="text" placeholder="Enter Email Addressss" style="height:7%; border-radius:10px;">  
            </div>
                <span class="error"></span>
            <div>
                <button type="submit" name="submit" class="btn btn-primary mt-4" style="border-radius:20px;">
                    <h4><i class="fa fa-paper-plane" aria-hidden="true"></i> Submit</h4>
                </button>
            </div>    
        </form>
    </div>
</body>
