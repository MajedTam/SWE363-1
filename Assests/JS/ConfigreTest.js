
// change between MCQ and text answar
document.addEventListener('change', function (e) {

    //console.log(e.target.parentNode.children)

    var mcqType = e.target.parentNode.children[4]
    var textAmswar = e.target.parentNode.children[3]

    if (e.target && e.target.className == 'selectType') {
        // change mcq to text
        mcqType.classList.toggle("hide");
        textAmswar.classList.toggle("hide");

    }
});


// counter
i = 1;


// clone first question without any modifications
var questionBluePrint = document.getElementsByClassName("questionBox")
questionBluePrint = questionBluePrint[0].cloneNode(true);

// Add question when + is pressed
document.addEventListener('click', function (e) {
    if (e.target && e.target.className == 'addButton') {

        var box2 = document.getElementById("box2");
        questionToAdd = questionBluePrint.cloneNode(true);
        //when making a new question, set the name of the first checkbox as a new incremented name
        questionToAdd.children[4].children[0].children[0].setAttribute("name", `num${i}`);
        i++;

        // add animation
        questionToAdd.classList.add("animate__animated", "animate__slideInUp")


        box2.appendChild(questionToAdd);
        // scroll to buttom to appear in center with animation
        window.scroll(0, document.body.scrollHeight)

        // hide "+"" button from all exept last one
        var addButton = document.getElementsByClassName("addButton")
        for (j = 0; j < addButton.length - 1; j++) {
            addButton[j].classList.add("hide")
        }

    }
});


// clone first question without any modifications to have a BluPrint
var mcqBluePrint = document.getElementsByClassName("mcq")
mcqBluePrint = mcqBluePrint[0].cloneNode(true);



// Add mcq nodes when small "+" button is clicked 
document.addEventListener('click', function (e) {
    if (e.target && e.target.className == 'addMcq') {



        mcq = mcqBluePrint.cloneNode(true)
        //get the name of the first checkbox
        firstMcqName = e.target.parentNode.children[0].getAttribute("name");
        //change the name of the clone checkbox to the first
        mcq.children[0].setAttribute("name",firstMcqName);
        mcq.classList.add("animate__animated", "animate__fadeIn")
        //console.log(e.target.parentNode);
        e.target.parentNode.append(mcq);

       // console.log(e.target.parentNode.parentNode.children[0]);


        // hide "+"" button from all exept last one
        var addMcq = e.target.parentNode.children[2]
        addMcq.classList.add("hide")




    }
});























