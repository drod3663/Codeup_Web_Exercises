<?php var_dump($_GET); ?>
<?php var_dump($_POST); ?>



<!DOCTYPE html>

<html>

<head>
    <meta charset="utf8">
    <Title>My First HTML Form</Title>
    
</head>

<body>

    <h1>User Login</h1>
    <form method="POST" action="/my_first_form.php">
    <p>
        <label for="username">Username</label>
        <input id="username" name="username" type="text" placeholder="username" autofocus>
    </p>
    <p>
        <label for="password">Password</label>
        <input id="password" name="password" type="password" placeholder="password">
    </p>
    <p>
        <button type="submit" name="submit_button">Log in now</button>
    </p>
    </form>

    <section>
        <h1>Compose an Email</h1>
            <form method="POST" action="/my_first_form.php">
                <p>
                    <label for="To">to</label>
                    <input id="To" name"To" type="text">
                    <input type="checkbox" id="save_copy" name="save_copy" value="yes" checked>
                    <label for="save_copy">Would you like to save a copy to your sent folder?</label>
                </p>
                <p>
                    <label for="From">from</label>
                    <input id="From" name="From" type="text">
                </p>
                <p>
                    <label for="Subject">subject</label>
                    <input id="Subject" name="Subject" type="text">
                </p>
                <p>
                    <label for="Body">body</label>
                    <textarea id="email_body" name="email_body" rows="5" cols="40" placeholder="Content Here"></textarea>
                </p>
            
                <input type="submit" name="submit button" value="send now">    
            </form>

        <h1>Multiple Choice Test</h1>        
            <form method="POST" action="/my_first_form.php">
                <p>What is the capital of Texas?</p>
                <label>
                    <input type="radio" name="q1" value="houston">Houston
                 </label>
                <label>
                    <input type="radio" name="q1" value="dallas">Dallas
                </label>
                <label>
                    <input type="radio" name="q1" value="austin">Austin
                </label>
                <label>
                    <input type="radio" name="q1" value="san antonio">San Antonio
                </label> 

                <input type="submit" name="submit button" value="submit">
                
                <p>How would you rate this class?</p>
                <label for="rate">How would you rate this class?</label>
                <select id="rate" name="rate[]" multiple>
                    <option value="awesome">Awesome</option>
                    <option value="gnarley">Gnarley</option>
                    <option value="radicool">Radicool</option>
                </select>

                <input type="submit" value="submit">    


            </form>

            <form method="POST" action="/my_first_form.php">
                <p>Where is the best place to learn to code?</p>
                <label><input type="checkbox" id="os1" name="os[]" value="codeup">Codeup</label>
                <label><input type="checkbox" id="os2" name="os[]" value="codeup">Codeup</label>
                <label><input type="checkbox" id="os3" name="os[]" value="codeup">Codeup</label>

                <input type="submit" name="submit button" value="duh">
            </form>
            

        <h1>Select Testing</h1>
            <form method="POST" action="/my_first_form.php">
                <label for="do_you_like">Do you like this class?</label>
                <select id="do_you_like" name="do_you_like">
                    <option value="1">yes</option>
                    <option value="0">no</option>
                </select>

                <input type="submit" value="submit">




            </form>    



            


</body>
</html>