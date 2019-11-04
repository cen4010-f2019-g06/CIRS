<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>CEN 4010 - Group 6</title>
        
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/general.css">
        
</head>
<body>
    <div class="container intro">
            <h1>Campus Issue Reporting System (CIRS)</h1>
    </div>

    <br>

    <div class="container intro">
            <h2>Project Description</h2>
            <p>CIRS is a issue, event, and advice portal for university faculty and students to report to a centralized location.  Currently in development.</p>
    </div>

    <br>

    <div class="container intro">
        <?php
            include 'input.php';

            $testPost = new Post("Issue", "Test Post", "Please ignore.");
            $POSTS = array($testPost);

            if(count($POSTS)!=0)
            {
                for($i=0;$i<count($POSTS);$i++)
                {
                    $output = $POSTS[$i];
                    echo $output->getType(), "<br>", $output->getTitle(), "<br>", $output->getContent(), "<br><br>";
                    //echo $output->getTitle(), PHP_EOL;
                    //echo $output->getContent(), PHP_EOL;
                }
            }


            if(isset($_POST['submit']))
            {
                $post = new Post();
                $post->setType($_POST['type']);
                $post->setTitle($_POST['title']);
                $post->setContent($_POST['content']);
        
                $type = $_POST['type'];
                $title = $_POST['title'];
                $content = $_POST['content'];
            
                echo $post->getType() . '<br><br>';
                echo $post->getTitle() . '<br><br>';
                echo $post->getContent() . '<br><br>';
            }

        ?>


    </div>

    <br>

    <div class="container intro">
        <form action = "" method = "POST">
            <table border = "0">
                <tr>
                    <form>
                        <input type="radio" name="type" value="Issue" checked> Issue
                        <input type="radio" name="type" value="Event"> Event
                        <input type="radio" name="type" value="Advice"> Advice<br>
                    </form>
                <tr>
                    <td>Title</td>
                    <td><textarea name="title" rows="1" cols="30"></textarea></td>
                </tr>                
                <tr>    
                    <td>Description</td>
                    <td><textarea name="content" rows="10" cols="30"></textarea></td>
                </tr>
                <tr>
                    <td colspan = "2" align ="center"><input type = "submit" value = "submit"/></td>
                </tr>
            </table>
        </form>
    </div>

    <br>

    <div class="container intro">
        <h2> CEN 4010 - Group 6 - Group Members</h2>
        <a href="aboutDev/gkveton2017.html">Grant Kveton<br></a>
        <a href="aboutDev/nappletongue2015.html">Nicole Appleton Guerrero<br></a>
        <a href="aboutDev/kfash2017.html">Kevin Fash<br></a>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>

</body>
</html>
