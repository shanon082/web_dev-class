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
        <form action="includes/form_processing.php" method="post" class="was-validated p-3">
            <div class="h1 text-uppercase text-primary text-center">Sample form</div>
            <div class="mt-2 mb-1">
                <label for="first name" class="form-label">First Name</label>
                <input type="text" name="fname" placeholder="Enter first name" class="form-control" required>
                <div class="valid-feedback">Valid</div>
                <div class="invalid-feedback">No Input</div>
            </div>

            <div class="mt-1 mb-1">
                <label for="last name" class="form-label">Last Name</label>
                <input type="text" name="lname" class="form-control" placeholder="Enter last name" required>
                <div class="valid-feedback">Valid</div>
                <div class="invalid-feedback">No Input</div>
            </div>

            <div class="mt-1 mb-1">
                <label for="email" class="form-label">Email</label>
                <input type="email" name="email" class="form-control" placeholder="Enter email" required>
                <div class="valid-feedback">Valid</div>
                <div class="invalid-feedback">No Input</div>
            </div>

            <div class="form-check mt-1 mb-1">
                <label for="gender" class="form-check-label">Gender:</label>
                <div class="form-check">
                    <label for="male"> Male</label>
                    <input type="radio" class="form-check-input" name="gender" id="gender" value="male">
                </div>
                <div class="form-check">
                    <label for="female"> Female</label>
                    <input type="radio" class="form-check-input" name="gender" id="gender" value="female">
                </div>
            </div>

            <div class="mt-1 mb-1">
                <label for="campus" class="form-label">University</label>
                <select name="university" id="university" class="form-select">
                    <option value="soroti" selected>soroti</option>
                    <option value="makerere">makerere</option>
                    <option value="ndejje">ndejje</option>
                    <option value="none">none</option>
                </select>
            </div>

            <div class="form-check mt-1 mb-1">
                <label for="skills" class="form-check-label">Your skills</label>
                <div class="form-check">
                    <label for="" class="form-check-label"> Front-End development</label>
                    <input type="checkbox" name="skills[]" id="" class="form-check-input" value="Front-End development">
                </div>
                <div class="form-check">
                    <label for="" class="form-check-label"> Back-End development</label>
                    <input type="checkbox" name="skills[]" id="" class="form-check-input" value="Back-end development">
                </div>
                <div class="form-check">
                    <label for="" class="form-check-label"> Machine learning</label>
                    <input type="checkbox" name="skills[]" id="" class="form-check-input" value = "machine learning">
                </div>
                <div class="form-check">
                    <label for="" class="form-check-label"> Data Science</label>
                    <input type="checkbox" name="skills[]" id="" class="form-check-input" value="data science">
                </div>
                <div class="form-check">
                    <label for="" class="form-check-label"> Data analyst</label>
                    <input type="checkbox" name="skills[]" id="" class="form-check-input" value="data analyst">
                </div>
            </div>

            <button type="submit" class="btn btn-outline-primary mt-4">Submit</button>

        </form>
    </div>


</body>

</html>