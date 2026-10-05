/*let capacity = 30;
let registeredStudents = 18;
let availableSeats = capacity - registeredStudents;
alert(availableSeats);
*/
/*
let availableSeats = 0;
if (availableSeats > 0) {
alert("Seats are available.");
} else {
alert("No seats are available.");
}

*/
/*
// 1. Parentheses: Run or Execute
function sayHello() {
console.log("Hello!");
}
sayHello();
*/
/*
// Output: Hello!
// 2. Parentheses: Arguments
function printName(name) {
console.log("Name is: " + name);
}
printName("Alex");
// Output: Name is: Alex

// 1. Parentheses: Parameters
function showPrice(price) {
console.log("The price is $" + price);
}
showPrice(50);
// Output: The price is $50
*/
// Question 1
let courseName = "CSE472";
alert(courseName);

// Question 2
function showCourse() {
    alert("Web and Internet Programming Lab");
}

// Question 4
function updateNotice() {
    document.getElementById("notice").textContent = "Lab starts at 9:00 AM.";
}

// Question 5
function showStudentId() {
    let id = document.getElementById("studentId").value;
    document.getElementById("idOutput").textContent =
        "Student ID: " + id;
}