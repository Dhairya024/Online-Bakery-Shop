<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Bakery Shop</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./style.css" type="text/css">
</head>

<body>
    <section class="bg_signup" style="opacity: 0.8;">
    <div class="error-message" id="error-message"></div>
        <div class="row bg_signup">
            <div class="container c1">
                <div class="row">
                    <div class="col-lg-6 p-1">
                        <div class="row d-flex justify-content-center align-items-center">
                            <div class="col-lg-7 p-3" style="color: white;">
                            
                                <form action="./addCustomer.php" method="post" onsubmit="return validation()">
                                    <div class="mb-3">
                                        <label for="name" class="form-label">Enter Customer Name</label>
                                        <input type="text" class="form-control" name="name" id="name" placeholder="Customer name">
                                    </div>
                                    <div class="mb-3">
                                        <label for="email" class="form-label">Enter Customer Email</label>
                                        <input type="email" class="form-control" name="email" id="email" placeholder="Customer email id">
                                    </div>
                                    <div class="mb-3">
                                        <label for="contact" class="form-label">Enter Customer contact no.</label>
                                        <input type="tel" class="form-control" name="contact" id="contact" placeholder="Customer contact no.">
                                    </div>
                                    <div class="mb-3">
                                        <label for="Address" class="form-label">Enter Customer Address</label>
                                        <input type="text" class="form-control" name="address" id="address" placeholder="customer address">
                                    </div>
                                    <div class="mb-3">
                                        <label for="password" class="form-label">Enter Password</label>
                                        <input type="password" class="form-control" name="password" id="password" placeholder="password">
                                    </div>
                                    <div class="mb-3">
                                        <label for="confirm_password" class="form-label">Enter Password</label>
                                        <input type="password" class="form-control" name="confirm_password" id="confirm_password" placeholder="confirm password">
                                    </div>
                                    <div class="">
                                        <button class="btn btn-light mt-4 ms-5" name="add_customer"> Add Customer</button>
                                        <!-- <button type="submit">submit</button> -->
                                        <button class="btn btn-light mt-4 ms-5"> <a href="./index.php" style="text-decoration: none; color:black;">Back</a> </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 p-5">
                        <div class="image">
                            <img src="./image/bakery-logo.avif" alt="" id="logo">
                        </div>
                        <center style="color: blue;">ONLINE BAKERY SHOP</center>
                        <h2 class="p-3" style="color:darkviolet;">"Life is uncertain. Eat dessert first." </h2>
                        <p class="p-3" style="color:white;">There's nothing quite like the smell of freshly baked bread. It's a smell that evokes feelings of comfort, nostalgia, and happiness. At our bakery, we bake our bread fresh every day using traditional methods. Our breads are made with simple ingredients like flour, water, yeast, and salt, but the flavor is anything but simple. Come and taste the difference that fresh, homemade bread makes.</p>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script>

        function validation() {
            var temp = true;
            var username = document.getElementById("name").value;
            var email = document.getElementById("email").value;
            var contact = document.getElementById("contact").value;
            var address = document.getElementById("address").value;
            var password = document.getElementById("password").value;
            var confirm_password = document.getElementById("confirm_password").value;
        //     // 			alert(cpass);
        //     alert("bhbhbhb");

        //     // Your validation logic (replace this with your own validation)
            if (username.length >= 20 || password.length >= 16) {
                document.getElementById("error-message").style.display = "flex";
                document.getElementById("error-message").style.background = "red";
                document.getElementById("error-message").textContent = "Length of username and password is too long..";
                temp = false;
            }
             else if (username == "") {
                document.getElementById("error-message").style.display = "flex";
                document.getElementById("error-message").style.background = "white";
                document.getElementById("error-message").textContent = "Username can't be empty.";
                temp = false;
            } else if (email == "") {
                document.getElementById("error-message").style.display = "flex";
                document.getElementById("error-message").style.background = "white";
                document.getElementById("error-message").textContent = "email can't be empty.";
                temp = false;


            } else if (contact.length > 10) {
                document.getElementById("error-message").style.display = "flex";
                document.getElementById("error-message").style.background = "white";
                document.getElementById("error-message").textContent = "Length of phone number cann't be greater than 10";
                temp = false;

            }  else if (contact == "") {
                document.getElementById("error-message").style.display = "flex";
                document.getElementById("error-message").style.background = "white";
                document.getElementById("error-message").textContent = "contact can't be empty.";
                temp = false;


            } else if (email.length > 20) {
                document.getElementById("error-message").style.display = "flex";
                document.getElementById("error-message").style.background = "white";
                document.getElementById("error-message").textContent = "Length of email is too long..";
                temp = false;

            }else if (password == "") {
                document.getElementById("error-message").style.display = "flex";
                document.getElementById("error-message").style.background = "white";
                document.getElementById("error-message").textContent = "Password can't be empty.";
                temp = false;
            } else if (username.length < 5 || password.length < 6) {
                document.getElementById("error-message").style.display = "flex";
                document.getElementById("error-message").style.background = "white";
                document.getElementById("error-message").textContent = "Length of username and password is too short.";
                temp = false;
            } else if (password !== confirm_password) {
                document.getElementById("error-message").style.display = "flex";
                document.getElementById("error-message").style.background = "white";
                document.getElementById("error-message").textContent = "Password and Confirm Password should be match.";
                temp = false;

            } else if (address == "") {
                document.getElementById("error-message").style.display = "flex";
                document.getElementById("error-message").style.background = "white";
                document.getElementById("error-message").textContent = "address can't be empty.";
                temp = false;


            } else if (address.length > 20) {
                document.getElementById("error-message").style.display = "flex";
                document.getElementById("error-message").style.background = "white";
                document.getElementById("error-message").textContent = "Length of address is too long..";
                temp = false;

            } 
            else {
                document.getElementById("error-message").style.display = "none";
            }
            return temp;
        }

    // function valid(){
    //     alert("hi");
    //     // var name=document.getElementById("")
    // }
    </script>
</body>

</html>