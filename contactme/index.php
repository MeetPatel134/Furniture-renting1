<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style1.css">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
    *{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}
body{
    min-height: 100vh; 
    overflow-x: hidden;
}
.image{
    justify-content: center;
    align-items: center;
}
.popup-screen{
    z-index: 999999;
    position: fixed;
    background: rgba(255, 255, 255, 0.1);
    backdrop-filter: blur(10px);
    width: 100%;
    height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;
}
.popup-box{
    position: relative;
    background: #DDD0C8;
    backdrop-filter: blur(10px);
    width: 500px;
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
    margin: 20px;
    padding: 50px 40px;
    border-radius: 20px;
    box-shadow: 0 5px 25px rgb(0 0 0 / 20%);
}
.popup-box h2{
    font-size: 2.1;
    font-weight: 800;
    margin-bottom: 20px;
}
.popup-box p{
    font-size: 1em;
    margin-bottom: 30px;
}
.popup-box .btn{
    color: #fff;
    background-color: #C9AE5D;
    font-size: 1.1em;
    font-weight: 500;
    text-decoration: none;
    text-transform: uppercase;
    padding: 7px 27px;
    border-radius: 3px;
    /* margin-top: 50px; */

}

.close-btn{
    position: absolute;
    font-size: 1em;
    top: 0;
    right: 0;
    margin: 15px;
    cursor: pointer;
    opacity: 0.5;
}
.close-btn:hover{
    opacity: 1;
}
</style>
</head>
<form action="form-process.php" method="POST">
    <div class="popup-screen">
        <div class="popup-box">
            <i class="fas fa-time close-btn"></i>
            <h2>Contact us</h2>
            <label style="margin-left: -330px;" for="firstname">Firstname</label>
                <input style="padding: 8px; width: 400px;" type="text" name="firstname" id="firstname" class="form-control" required>
                <label style="margin-left: -330px;" for="lastname">Lastname</label>
                <input style="padding: 8px; width: 400px;" type="text" name="lastname" id="lastname" class="form-control" required>
                <label style="margin-left: -350px;" for="phone">Phone</label>
                <input style="padding: 8px; width: 400px;" type="tel" name="phone" id="phone" class="form-control" required>
                <label style="margin-left: -350px;" for="email">Email</label>
                <input style="padding: 8px; width: 400px;" type="email" name="email" id="email" class="form-control" required>
                <label style="margin-left: -330px;" for="message">Message</label>
                <input style="padding: 8px; width: 400px;" type="text" name="message" id="message" class="form-control" required>
            
                <button style="margin-top: 50px;" class="btn btn-success"  type="submit">Submit</button>
                <button style="margin-top: 10px;" class="btn btn-danger" type="reset">Reset</button>
 
        </div>
    </div>
    <div class="image">
        <img src="Screenshot (24).png" alt="">
    </div>
</form>

</body>
</html>