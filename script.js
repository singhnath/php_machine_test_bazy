document.getElementById('studentForm').addEventListener('submit', function(event) {
    event.preventDefault();

    // Validate form fields
    let name = document.getElementById('name').value.trim();
    let gender = document.getElementById('gender').value.trim();
    let standard = document.getElementById('standard').value.trim();
    let dob = document.getElementById('dob').value;
    let father_name = document.getElementById('father_name').value.trim();
    let father_mobile = document.getElementById('father_mobile').value.trim();
    let email = document.getElementById('email').value.trim();

    if (!name || !standard || !dob || !father_mobile || !email) {
        alert('Please fill out all mandatory fields.');
        return;
    }

    if (father_mobile.length !== 10 || isNaN(father_mobile)) {
        alert('Father\'s Mobile Number must be a 10-digit number.');
        return;
    }

    // Calculate age
    let dobDate = new Date(dob);
    let age = new Date().getFullYear() - dobDate.getFullYear();
    let m = new Date().getMonth() - dobDate.getMonth();
    if (m < 0 || (m === 0 && new Date().getDate() < dobDate.getDate())) {
        age--;
    }

   

    // Prepare data for AJAX
    let formData = new FormData();
    formData.append('name', name);
    formData.append('gender', gender);
    formData.append('standard', standard);
    formData.append('dob', dob);
    formData.append('age', age);
    formData.append('father_name', father_name);
    formData.append('father_mobile', father_mobile);
    formData.append('email', email);

    // Send data via AJAX
    fetch('add_student.php', {
        method: 'POST',
        body: formData
    })
    .then(response => response.text())
    .then(data => {
        alert('Student added successfully!');
        loadStudents();
    })
    .catch(error => {
        console.error('Error:', error);
    });
});

function loadStudents() {
    fetch('get_students.php')
    .then(response => response.json())
    .then(data => {
        let table = '<table class="table table-bordered"><thead><tr><th>ID</th><th>Name</th><th>Gender</th><th>Standard</th><th>DOB</th><th>Age</th><th>Father Name</th><th>Father Mobile</th><th>Email</th></tr></thead><tbody>';
        data.forEach(student => {
            table += `<tr>
                <td>${student.id}</td>
                <td>${student.name}</td>
                <td>${student.gender}</td>
                <td>${student.standard}</td>
                <td>${student.dob}</td>
                <td>${student.age}</td>
                <td>${student.father_name}</td>
                <td>${student.father_mobile}</td>
                <td>${student.email}</td>
            </tr>`;
        });
        table += '</tbody></table>';
        document.getElementById('studentTable').innerHTML = table;
    })
    .catch(error => {
        console.error('Error:', error);
    });
}

// Load students on page load
window.onload = loadStudents;


