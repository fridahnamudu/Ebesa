<?php
include_once 'navbar.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/contact.css" rel="stylesheet" type="text/css">

</head>
<body>
    <div class="contact">
        <div class="row">
            <div class="col">
                <section id="leftside">
                    <img src="/images/contactus2.png" alt="">

                </section>
            </div>
            <div class="col">
                <section id="rightside">
                    <form id='contact-form'  method="POST">
                        <label for='name'>Full Name</label>
                        <input name='name' placeholder='Enter full name ...' type="text" />
                        <label for='email'>Email</label>
                        <input name='email' placeholder='Enter email address ...' type="email" />
                        <label for='name'>Full Name</label>
                        <input name='name' placeholder='Enter full name ...' type="text" />
                        <label for='message'>Message</label>
                        <textarea name="message"  cols="30" rows="10" placeholder='Enter message ...' required></textarea>
                        <button type='submit'> Send Message</button>


                    </form>

                </section>

            </div>
        </div>
        
      
    </div>

            
  
<?php
include_once 'footer.php'
?>    
</body>
</html>