<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Urlshortener</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css" >
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script type="text/javascript" src="script.js"></script>
    
</head>
<body>
   <nav class=" navbar shadow navbar-expand-md navbar-light">
       
       <div class="container-fluid">
            <p class="h2 ms-4 text-secondary"><span class="text-info h1 fst-italic">E</span>mall<span class="fst-italic text-info">y</span></p>
           
            <div class=" collapse navbar-collapse justify-content-center" id="navbarCollapse">
                <ul class="navbar-nav  ">
                    <li class="nav-item">
                    <a href="#" class="nav-link mx-1  text-dark">Services</a>  
                    </li>
                    <li class="nav-item">
                    <a href="#" class="nav-link mx-1 text-dark">Contact</a>  
                    </li>
                    <li class="nav-item">
                    <a href="#" class="nav-link mx-1 text-dark">Pricing</a>  
                    </li>
                    <li class="nav-item">
                    <a href="#" class="nav-link mx-1 text-dark">Articles</a>  
                    </li>
                </ul>
            </div>
            
            <div class=" buttoncontainer navbar-nav me-5 float-end">
                <button type="button" class=" btn btn-primary mx-3">Sign Up</button>
                <button type="button" class=" btn btn-primary mx-1">Login</button>
            </div> 
            <button type="button" class=" navlinks navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon text"></span>
            </button>
        </div>
    </nav>
    <section class=" container p-4 ">
        <p class="fs-1 class text-center fw-bold">Short Urls that work.</p>
        <p class="class fs-4 fst-italic text-center">Generate short urls for your long urls to make your websites more <br>friendly and enticing.</p>
    </section>
    <div class="class container d-flex ">
        <div class="class align-items-center  shadow input-group m-3">
            <input type="text" id="url_input" class=" form-control" placeholder="Your long url here">
            <button type="button" id="search_button" class=" btn btn-primary input-group-text px-5 ">Enter</button>
        </div>
    </div>
    <div id= "urlcontainer" class="class container  center">
        <div class="border  mx-auto w-sm-75 shadow-sm rounded  ">
            <div id="longurl" class=" pt-2 text-dark shadow-sm p-1 fw-bold "></div>
            <div class="shadow-sm text-dark fw-bold p-2 fw-bold" >
               <p><a id="shorturl" href="" ></a><span id="copy_button" class=" float-end fs-5 px-3 rounded text-info py-1 ">copy</span></p>
            </div>
        </div>
    </div>
    <div class=" container-fluid class bg-secondary text-light ms-1 row mt-5">
            <ul class=" ps-1 list-group col-6 col-sm-3">
                <li class="fs-4 " >Contact</li>
                <li >No 1 coscharis str. Uruagu Nnewi</li>
                <li >Phone: 08135183408</li>
            </ul>
            <ul class="col-6 col-sm-3">
                <li class="fs-4">services</li>
                <li>urlshortening</li>
                <li>domain registration</li>
                <li>qr code generator</li>
            </ul>
            <ul class="col">
                <li class="fs-4">Pricing</li>
                <li>Free</li>
                <li>Monthly</li>
                <li>Annualy</li>
            </ul>
            <ul class="col">
                <li class="fs-4">Jobs</li>
                <li>React developer</li>
                <li>Php developer</li>
                <li>wordpress developer</li>
            </ul>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>