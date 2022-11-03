<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <title>Contact form</title>
        <link rel="stylesheet" href="style.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" rel="stylesheet">
        
    </head>
    <body style=" background: #6f42c1;">
        <div class="wrapper" >
            <header>Send us a message</header>
    
            <form action="#" method="post">
                <div class="dbl-field">
                    <div class="field">
                        <input type="text" name="name" placeholder="your name">
                        <i class="fa-solid fa-user"></i>
                    </div>
                    <div class="field">
                        <input type="text" name="email" placeholder="your email">
                        <i class="fas fa-envelope"></i>
                    </div>
                </div>
                <div class="dbl-field">
                    <div class="field">
                        <input type="tel" name="tel" placeholder="your phone number">
                        <i class="fa-solid fa-phone"></i>
                    </div>
                    <div class="field">
                        <input type="text" name="webSite" placeholder="your web site">
                        <i class="fas fa-globe"></i>
                    </div>
                </div>
                
                <div class="message">
                        <textarea name="message" id="" placeholder="your message"></textarea>
                        <i class="material-icons">message</i>
                </div>
                <div class="button-area">
                    <button type="submit">Send message</button>
                    <span >Sending your message...</span>
                </div>

                
            </form>
        </div>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <script src="script.js"></script>
    </body>
</html>