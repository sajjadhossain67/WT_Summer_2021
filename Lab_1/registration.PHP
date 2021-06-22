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
        <table style="width: 100%;">
            <tr>
                <td><Label>Full name:</Label></td>
                <td align="left"><input type="text" name="fname" size="20"></td>
            </tr>
            <tr>
                <td><Label>E-mail:</Label></td>
                <td align="left"><input type="email" name="email" size="20"></td>
            </tr>
            <tr>
                <td><Label>Password:</Label></td>
                <td align="left"><input type="password" name="password" size="20"></td>
            </tr>
          
            <tr>
                <td><Label>Comment:</Label></td>
                <td align="left"><textarea name="comment" cols="30" rows="10"></textarea></td>
            </tr>
            <tr>
                <td><Label>Gender:</Label></td>
                <td align="left">
                    <input type="radio" name="gender" id="male">
                    <label for="male">Male</label>
                    <input type="radio" name="gender" id="female">
                    <label for="female">Female</label>
                    <input type="radio" name="gender" id="others">
                    <label for="others">Others</label>
                </td>
            </tr>
            <tr>
                <td><Label>Please choose a hobby:</Label></td>
                <td align="left">
                    <input type="checkbox" name="singing" id="singing">
                    <label for="singing">Singing</label>
                    <input type="checkbox" name="dancing" id="dancing">
                    <label for="dancing">Dancing</label>
                    <input type="checkbox" name="reading" id="reading">
                    <label for="reading">Reading</label>
                </td>
            </tr>
            <tr>
                <td><Label>Please choose a file:</Label></td>
                <td align="left"><input type="file" name="formfile" id="file"></textarea></td>
            </tr>
            <tr>
                <td>
                    <button>Submit</button>
                    <button>Reset</button>
                </td>
            </tr>
        </table>
    </form>
</body>
</html>
