
// change between MCQ and text answar
document.addEventListener('change', function (e) {

<<<<<<< HEAD
    if (e.target && e.target.className == 'selectType') {
       
        var mcqType = e.target.parentNode.children[4]
        var textAmswar = e.target.parentNode.children[3]


=======
    //console.log(e.target.parentNode.children)

    var mcqType = e.target.parentNode.children[4]
    var textAmswar = e.target.parentNode.children[3]

    if (e.target && e.target.className == 'selectType') {
>>>>>>> 35f9db1ec0f5b74ac5f078f373dd729df5c4838b
        // change mcq to text
        mcqType.classList.toggle("hide");
        textAmswar.classList.toggle("hide");

    }
});

<<<<<<< HEAD



// counter
i = 0;
=======
// counter
i = 1;
>>>>>>> 35f9db1ec0f5b74ac5f078f373dd729df5c4838b


// clone first question without any modifications
var questionBluePrint = document.getElementsByClassName("questionBox")
questionBluePrint = questionBluePrint[0].cloneNode(true);

// Add question when + is pressed
document.addEventListener('click', function (e) {
    if (e.target && e.target.className == 'addButton') {

<<<<<<< HEAD
     
        i++;

        var box2 = document.getElementById("box2");
        questionToAdd = questionBluePrint.cloneNode(true);

        questionToAdd.children[4].children[0].children[0].setAttribute("name", 'num'+i);
        // add animation
        questionToAdd.classList.add("animate__animated", "animate__slideInUp")

=======
        var box2 = document.getElementById("box2");
        questionToAdd = questionBluePrint.cloneNode(true);
        //when making a new question, set the name of the first checkbox as a new incremented name
        questionToAdd.children[4].children[0].children[0].setAttribute("name", `num${i}`);
        i++;

        // add animation
        questionToAdd.classList.add("animate__animated", "animate__slideInUp")


>>>>>>> 35f9db1ec0f5b74ac5f078f373dd729df5c4838b
        box2.appendChild(questionToAdd);
        // scroll to buttom to appear in center with animation
        window.scroll(0, document.body.scrollHeight)

        // hide "+"" button from all exept last one
        var addButton = document.getElementsByClassName("addButton")
<<<<<<< HEAD
        for (i = 0; i < addButton.length - 1; i++) {
            addButton[i].classList.add("hide")
=======
        for (j = 0; j < addButton.length - 1; j++) {
            addButton[j].classList.add("hide")
>>>>>>> 35f9db1ec0f5b74ac5f078f373dd729df5c4838b
        }

    }
});


// clone first question without any modifications to have a BluPrint
var mcqBluePrint = document.getElementsByClassName("mcq")
mcqBluePrint = mcqBluePrint[0].cloneNode(true);



// Add mcq nodes when small "+" button is clicked 
document.addEventListener('click', function (e) {
    if (e.target && e.target.className == 'addMcq') {

<<<<<<< HEAD
   // set uniqe name to make only one selected
//    var mcq = e.target.parentNode.children[4]
//    mcq.children[0].children[0].setAttribute("name", 'num'+i);
//    i++;
        mcq = e.target.parentNode.cloneNode(true);
        mcq.classList.add("animate__animated", "animate__fadeIn")
        
       

      
     
        e.target.parentNode.appendChild(mcq);
=======


        mcq = mcqBluePrint.cloneNode(true)
        //get the name of the first checkbox
        firstMcqName = e.target.parentNode.children[0].getAttribute("name");
        //change the name of the clone checkbox to the first
        mcq.children[0].setAttribute("name",firstMcqName);
        mcq.classList.add("animate__animated", "animate__fadeIn")
        //console.log(e.target.parentNode);
        e.target.parentNode.append(mcq);

       // console.log(e.target.parentNode.parentNode.children[0]);
>>>>>>> 35f9db1ec0f5b74ac5f078f373dd729df5c4838b


        // hide "+"" button from all exept last one
        var addMcq = e.target.parentNode.children[2]
        addMcq.classList.add("hide")




    }
});























