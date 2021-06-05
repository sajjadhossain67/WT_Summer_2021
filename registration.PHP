<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
</head>
<body>
    <h1>Registration Form</h1>
    <hr>
    <form action="#">  
    <table style="width:100%">
    <tr>
        <Label>Full name:</Label>
        <input type="text" name="fname" size="20">
        <br>
        <br>
       </tr>
       <tr>
       <Label>E-mail:</Label>
        <input type="email" name="email" size="20">
        <br>
        <br>
       </tr>
       <tr>
        <Label>Password:</Label>
        <input type="password" name="password" size="20">
        <br>
        <br>
        </tr>
        </table>
 
        <Label>Comment:</Label>
        <textarea name="comment" cols="30" rows="10"></textarea>
        <br>
        <br>
 
        <Label>Gender:</Label>
        <input type="radio" name="gender" id="male">
        <label for="male">Male</label>
        <input type="radio" name="gender" id="female">
        <label for="female">Female</label>
        <input type="radio" name="gender" id="others">
        <label for="others">Others</label>
        <br>
        <br>
 
        <Label>Please choose a hobby:</Label>
        <input type="checkbox" name="singing" id="singing">
        <label for="singing">Singing</label>
        <input type="checkbox" name="dancing" id="dancing">
        <label for="dancing">Dancing</label>
        <input type="checkbox" name="reading" id="reading">
        <label for="reading">Reading</label>
        <br>
        <br>
 
        <Label>Please choose a file:</Label>
        <input type="file" name="formfile" id="file">
        <br>
        <br>
 
        <button>Submit</button>
        <button>Reset</button>
    </form>
    
    
</body>
</html>