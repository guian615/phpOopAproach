<style>
form {
        background: black;
        border-radius: 20px;
        padding: 1.3rem;
        width: 350px;
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
    <div class="container text-center">
        <form method="post" action="">
            <div>
                <h3 class="text-light mt-2">
                    Date Calculation
                </h3>
            </div>
            <div class="mt-3 ">
                <input class="date form-control bg-dark text-light" name="date1" type="text" placeholder="Enter First Date" style=" height: 7%; border-radius:10px;">  
            </div>
            <div class="mt-4">
                <input class="date form-control bg-dark text-light" name="date2"  type="text" placeholder="Enter Second Date" style="height:7%; border-radius:10px;">  
            </div>
            <button type="submit" name="SubDate" class="btn btn-primary mt-4" style="border-radius:20px;">
                 <h4><i class="fa fa-paper-plane" aria-hidden="true"></i> Submit</h4>
            </button>
        </form>   
        <?php
                
            include_once("header.php");
            if(isset($_POST['SubDate'])){

                class dateDifference{
                    public $date1;
                    public $date2;
            }

            $date = new dateDifference();
                    $date->date1 = $_POST['date1'];
                    $date->date2 = $_POST['date2'];
                    $diff = abs(strtotime($date->date1) - strtotime($date->date2));
                    $years = floor($diff / (365*60*60*24));
                    $months = floor(($diff - $years * 365*60*60*24) / (30*60*60*24));
                    $days = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24)/ (60*60*24));
                    printf("<h2>%d years, %d months, %d days\n</h2>", $years, $months, $days);
            }                          
        ?>
    </div>
    <script type="text/javascript">  
        $('.date').datepicker({  
        format: 'yyyy-mm-dd'
        });  
    </script>  
</body>

