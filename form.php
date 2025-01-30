<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <div class="container-sm">
        <form action="includes/form_processing.php" method="post">
            <label for="first name">First Name</label>
            <input type="text" name="fname" placeholder="Enter first name">

            <label for="last name">Last Name</label>
            <input type="text" name="lname" placeholder="Enter last name">

            <label for="email">Email</label>
            <input type="email" name="email" placeholder="Enter email">

            <label for="gender">Gender:</label>
            <input type="radio" name="male" id="male">
            <label for="male">Male</label>
            <input type="radio" name="male" id="male">
            <label for="female">Female</label>

            <label for="campus">University</label>
            <select name="university" id="university">
                <option value="soroti" selected>soroti</option>
                <option value="makerere">makerere</option>
                <option value="ndejje">ndejje</option>
                <option value="none">none</option>
            </select>

            <label for="skills you know">Your skills</label>
            <input type="checkbox" name="skills" id="">
            <label for="">Front-End development</label>
            <input type="checkbox" name="skills" id="">
            <label for="">Back-End development</label>
            <input type="checkbox" name="skills" id="">
            <label for="">Machine learning</label>
            <input type="checkbox" name="skills" id="">
            <label for="">Data Science</label>
            <input type="checkbox" name="skills" id="">
            <label for="">Data analyst</label>

            <button type="submit">Submit</button>

        </form>
    </div>


</body>

</html>