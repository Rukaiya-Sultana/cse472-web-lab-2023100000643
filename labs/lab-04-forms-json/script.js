function registerStudent() {

    let name = document.getElementById("studentName").value;
    let studentId = document.getElementById("studentId").value;
    let email = document.getElementById("email").value;
    let workshop = document.getElementById("workshop").value;

    if(name === ""){
        document.getElementById("output").textContent =
        "Please enter your full name.";
        return;
    }

    // JavaScript Object
    let registration = {
        name: name,
        studentId: studentId,
        email: email,
        workshop: workshop
    };

    // JSON Conversion
    let jsonData = JSON.stringify(registration, null, 2);

    // Display JSON
    document.getElementById("output").textContent = jsonData;

    // Save to localStorage
    localStorage.setItem("registration", jsonData);
}

function loadRegistration() {

    let savedData = localStorage.getItem("registration");

    document.getElementById("output").textContent =
    savedData;
}

function clearRegistration() {

    localStorage.removeItem("registration");

    document.getElementById("output").textContent =
    "Registration cleared.";
}