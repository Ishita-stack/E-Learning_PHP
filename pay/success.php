
<head>
    <meta charset="UTF-8">
    <title>Save The Smile</title>
    <link rel="icon" type="image/x-icon" href="smilefavi.png">
</head>
<body>

<div class="container">
   <div class="row">
      <div class="col-md-6 mx-auto mt-5">
         <div class="payment">
            <div class="payment_header">
               <div class="check"><i class="fa fa-check" aria-hidden="true"></i></div>
            </div>
            <div class="content">
               <h1>Payment Successful !</h1>
               <p>We Received Your Donation !! </p>
               <p><strong><i>Thank You<i></i></strong></p>
                <form action="../user/index.php" method="post">
                    <input type="submit" class="btn" value="Go Home">
                </form>
            </div>
            
         </div>
      </div>
   </div>
</div>
</body>

<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" />
<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
<style type="text/css">

    body
    {
    width: 100%;
    height: 100vh;
    background-image: linear-gradient(rgba(8, 9, 26, 0.671), rgba(17, 18, 39, 0.774)), url("library.jpg");
/*   background: white;*/
    background-size: cover;
    background-attachment: fixed;
    }

    .payment
   {
      border:1px solid #f2f2f2;
      height:280px;
        border-radius:20px;
        background:#fff;
   }
   .payment_header
   {
      background:#006e72;
      padding:20px;
       border-radius:20px 20px 0px 0px;
      
   }
   
   .check
   {
      margin:0px auto;
      width:50px;
      height:50px;
      border-radius:100%;
      background:#fff;
      text-align:center;
   }
   
   .check i
   {
      vertical-align:middle;
      line-height:50px;
      font-size:30px;
   }

    .content 
    {
        text-align:center;
        height: 250px;
    }

    .content  h1
    {
        font-size:25px;
        padding-top:25px;
    }

    .content .btn
    {
        width:200px;
        height:35px;
        color:#000;
        border-radius:50px;
        padding:5px 10px;
        background:#fff;
        transition:all ease-in-out 0.3s;
        font-weight:bold;
    }

    .content .btn:hover
    {
        border: 1px solid #000;
        background: #000;
        color: #fff;
        transition: 0.5s ease-in;
    }
   
</style>