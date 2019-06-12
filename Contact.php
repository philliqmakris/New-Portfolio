<!DOCTYPE html>
<html lang="en">
<head>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" 
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Poiret+One" rel="stylesheet">
    <link rel="stylesheet" href="./Assets/style.css">
    <title>Contact Me</title>
</head>
<body>

  <div class="navbar navbar-expand-lg navbar-light bg-light">
    <div>
          <a class="navbar-brand" href="index.php"><div class="port1"><b id="main">Phillip Makris      </b>|</div></a> 
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" 
              aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
        </div>
          <div class="whatever" id="navbarSupportedContent">
            <span>
              <a id="port" class="nav-link port" href="Portfolio.php"><b>Portfolio&nbsp&nbsp</b>      |</a>
              <a id="port" class="nav-link port" href="Contact.php"><b id="portee">Contact&nbsp&nbsp</b>      |</a>
            </span>
            <!-- <ul class="navbar-nav mr-auto">
              <li class="nav-item active">
                <a class="nav-link" href="Portfolio.html"><div class="port"><b>Portfolio</b>      |</div>
                  <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="Contact.html"><div class="port"><b>Contact</b>      |</div></a>
              </li>  
            </ul> -->
          </div> 
          
        </div>


        
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                        <h1><div class="cm">Contact Me</div></h1>
                        <form>
                                <div class="form-group">
                                  <label class="labell" for="exampleInputEmail1"><h1>Name</h1></label>
                                  <input type="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" 
                                  placeholder="Your Name">
                                  
                                </div>
                </div>
            </div>
            <div class="col-md-12">
                    <form>
                            <div class="form-group">
                              <label class="labell" for="exampleInputEmail1"><h1>Email</h1></label>
                              <input  type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" 
                              placeholder="Your Email">
                              
                            </div>
            </div>

            <div class="col-md-12">
                    <div class="form-group">
                            <label class="labell" for="exampleFormControlTextarea1"><h1>Message</h1></label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                          </div>
            </div>

            <button id="button" type="button" class="btn btn-dark">Send</button>
        </div>
    
</body>
</html>