/*
- js display methods:
document.getElementById("id").innerHTML = "";
[optional: windows.]alert();
[optional: windows.]print();
console.log();
***document.write();***
*/

//- js can change:
// html content change
function myFunction1() {
    document.getElementById('demo').innerHTML = 'Hello js';
}

// html attribute value
function myFunction2() {
    document.getElementById('my_image').src = 'basketball.jfif';
}

function myFunction3() {
    document.getElementById('my_image').src = 'football.jfif';
}

// hide html tag
function myFunction4() {
    document.getElementById('demo2').style.display = 'none';
}

//show or unhide html tag 
function myFunction5() {
    document.getElementById('demo3').style.display = 'block';
}

//html's css style
function myFunction6() {
    document.getElementById('demo1').style.color = 'red';
    document.getElementById('demo1').style.fontFamily = 'Arial';
    document.getElementById('demo1').style.fontSize = '75px';
}

/* var x, y, z; x = 1; y = 2; z = x + y;
alert(20 * z); */

// var x; let x; const x;

//alert(x);

/*
So just in case you missed the differences, here they are:

var declarations are globally scoped or function scoped while let and const are block scoped.
var variables can be updated and re-declared within its scope; let variables can be updated but not re-declared; const variables can neither be updated nor re-declared.
They are all hoisted to the top of their scope. But while var variables are initialized with undefined, let and const variables are not initialized.
While var and let can be declared without being initialized, const must be initialized during declaration.
Got any question or additions? Please let me know.

Thank you for reading :)

Sarah Chima Atuonwu
I am a software engineer that is interested in making the web accessible for all. I love sharing knowledge so I write about things I learn and things I need to learn.
*/

const greeting = {
    message: "say Hi",
    times: 4
}

greeting.message = 'We are not alone!';
function myFunction7() {
    document.getElementById('democonst1').innerHTML = greeting.message;
}
 
