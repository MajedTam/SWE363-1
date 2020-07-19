function validateFirstForm() {

    var testTitle = document.forms["testForm"]["testName"].value;
    var testDate = document.forms["testForm"]["date"].value;
    var testHours = document.forms["testForm"]["durationHours"].value;
    var testMinutes = document.forms["testForm"]["durationMinutes"].value;
    var display = document.forms["testForm"]["selection1"].value;
    var backtracing = document.forms["testForm"]["selection2"].value;

    if (testTitle == "") {
        alert("Please Enter A Title")
        return false;
    }
    if (testDate == "") {
        alert("Please Enter A Date")
        return false;
    }
    if (testHours == "") {
        alert("Please Enter A Duration (Hours)")
        return false;
    }
    if (testMinutes == "") {
        alert("Please Enter A Duration (Minutes)")
        return false;
    }
    if (display == "") {
        alert("Please Choose A Display Option")
        return false;
    }
    if (backtracing == "") {
        alert("Please Choose A Backtracing Option")
        return false;
    }
    return true;
}

function validateSecondForm(form) {
//console.log(form.children);
if(form.children[2].value=="")//question is empty
{alert("Please Enter A Question")
return false;}
if(form.children[5].value == "text")//select type text only require a question.
{return true;}

if(form.children[5].value == "mcq"){
    var radioName = form.children[3].children[0].children[0].getAttribute("name")//gets the radio name
    var radios = document.getElementsByName(radioName);
    let isItChecked = false;
    for(i=0;i<radios.length;i++){   //check all the radios in this question, if none is check ALERT.
        if(radios[i].checked){
            isItChecked = true;
        }
    }
    if(!isItChecked){alert("Please Select The Correct Answer");return false;}

}
return true;
}



document.getElementById("submitButton").onclick = function () {
    let firstFormReturn = validateFirstForm();
    let secondFormLength = document.getElementById("testForm").children[1].childElementCount;
    console.log(secondFormLength);
    if(!firstFormReturn){
        return false;
    }
    for(var i=0;i<secondFormLength;i++){
        console.log("loop")
        questionForm = document.getElementById("testForm").children[1].children[i];
        console.log(questionForm.children[3].children[0]);
        let questionFormReturn = validateSecondForm(questionForm);
        console.log(questionFormReturn)
        if(!questionFormReturn){
            return false;
        }
    }
  
    
    return true;
}

// change between MCQ and text answar
document.addEventListener('change', function (e) {

    var mcqType = e.target.parentNode.children[4]
    var textAmswar = e.target.parentNode.children[3]
    var answerLabel = document.getElementById('answerLabel');
    var answerInput = document.getElementById('answerInput');

    if (e.target && e.target.className == 'selectType') {
        // change mcq to text
        mcqType.classList.toggle("hide");
        textAmswar.classList.toggle("hide");
        answerInput.classList.toggle("hide");
        answerLabel.classList.toggle("hide");
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
        questionToAdd.children[3].children[0].children[0].setAttribute("name", `num${i}`);
        questionToAdd.children[3].children[0].children[1].setAttribute("name", `txt[${i}][0]`);
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
        mcq.children[0].setAttribute("name", firstMcqName);
        //get the name of the text field above
        textFieldAbove = e.target.parentNode.children[1].getAttribute('name')
        //change the name of the clone text field to the one above it +1  txt[0][0]
        k = textFieldAbove.substring(7, 8);
        k++;
        tempName = textFieldAbove.substring(0, 6) + "[" + k + "]";
        console.log(k);
        console.log(tempName);
        mcq.children[1].setAttribute("name", tempName)
        //set the value of the radio to K so we can know which radio button is selected
        mcq.children[0].setAttribute("value", k);
        mcq.classList.add("animate__animated", "animate__fadeIn")



        // hide "+" button from all exept last one
        var addMcq = e.target.parentNode.children[2]
        addMcq.classList.add("hide")

        // hide "+" button from all

        if (k == 3) {
            console.log(mcq.children[2]);
            mcq.children[2].classList.add("hide")
        }

        e.target.parentNode.append(mcq);


    }
});























