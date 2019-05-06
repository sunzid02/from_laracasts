<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create</title>
</head>
    <body>
        
        <h1>Create a New Project</h1>

        <form action="/projects" method="post">
            {{ csrf_field() }}
            <!-- project title -->
            <div>
                <input type="text" name="title" id="" placeholder="Project Title">
            </div>

            <!-- project description -->
            <div>
                <textarea name="description" id="" cols="30" rows="10" placeholder="give a description"></textarea>
            </div>

            <!-- submission -->
            <div>
                <button type="submit">Create Project</button>
            </div>
        </form>
    </body>
</html>