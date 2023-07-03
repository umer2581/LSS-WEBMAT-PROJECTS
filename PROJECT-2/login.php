
<html>
        <head> 
            <title> Admin Page</title>
            <style>
                body
                {
                    background-color:aliceblue;
                    
                }
                .passwordblock
                {
                    height: 400px;
                    width: 500px;
                    background-color:blue;
                    margin: 0 auto;
                    display: flex;
                    justify-content: center;
                    align-items: center;
                   background-image:linear-gradient(#2ec4b6,#cbf3f0);
                  
                }
                b
                {
                    font-size:25px;
                    font-weight: bold;
                    font-family:Verdana, Geneva, Tahoma, sans-serif;
                    /* align-items: center; */
                    margin-left: 39px;
                    
                    /* margin-top: 50px; */
                    /* padding-bottom: 30px; */
                    /* justify-content: center; */
                }
                .unameinput
                {   
                    /* gap:50px; */
                    font-size: 25px;
                    margin-left: 40px;
                    margin-top: 7px;
                    box-sizing: border-box;
                    /* text-align: center; */
                }
                .btn
                {
                    font-size: 25px;
                    margin: 20px 170px;
                    text-align: center;
                    color: fff;
                    background-image: linear-gradient(#003459,#4d194d);
                }
                


            </style>
        </head>
        <body>
            <div class="passwordblock">
                <form method="post" >
                    <b>Username:-</b><br>
                    <input type="text" class="unameinput" name="uname" required><br>
                    <b>Password:-</b><br>
                    <input type="password" class="unameinput" name="upass" required><br>
                    
                    <input type="submit" class="btn" name="submit" value="Login">                                               

                </form>
            </div>

        </body>
</html>