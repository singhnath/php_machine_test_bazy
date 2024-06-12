<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Registration</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container mt-5">
        <h2>Student Registration Form</h2>
        <form id="studentForm" class="row g-3">
            <div class="col-md-6">
                <label for="name" class="form-label">Name:</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>
            <div class="col-md-6">
                <label for="gender" class="form-label">Gender:</label>
                <input type="text" class="form-control" id="gender" name="gender">
            </div>
            <div class="col-md-6">
                <label for="standard" class="form-label">Standard:</label>
                <input type="text" class="form-control" id="standard" name="standard" required>
            </div>
            <div class="col-md-3">
                <label for="dob" class="form-label">Date of Birth:</label>
                <input type="date" class="form-control" id="dob" onchange="calculateAge()" name="dob" required>
            </div>
            <div class="col-md-3">
                <label for="age" class="form-label">Student Age in Yrs:</label>
                <input type="text" class="form-control" disabled id="age" name="age" placeholder="Student Age in Yrs">
            </div>
            <div class="col-md-6">
                <label for="father_name" class="form-label">Father's Name:</label>
                <input type="text" class="form-control" id="father_name" name="father_name">
            </div>
            <div class="col-md-6">
                <label for="father_mobile" class="form-label">Father's Mobile Number:</label>
                <input type="text" class="form-control" id="father_mobile" name="father_mobile" required>
            </div>
            <div class="col-md-6">
                <label for="email" class="form-label">Email:</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="col-12">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
        <h2 class="mt-5">Student List</h2>
        <div id="studentTable" class="table-responsive"></div>
    </div>

    <script src="script.js"></script>
    <script type="text/javascript">
    	 function calculateAge() {
    const dobInput = document.getElementById('dob');
    const dobValue = dobInput.value;
    const dobDate = new Date(dobValue);
    const now = new Date();

    let age = now.getFullYear() - dobDate.getFullYear();
    const monthDiff = now.getMonth() - dobDate.getMonth();

    if (monthDiff < 0 || (monthDiff === 0 && now.getDate() < dobDate.getDate())) {
        age--;
    }
   console.log(age);
    document.getElementById('age').value = `${age}`;
}
    </script>
</body>
</html>
