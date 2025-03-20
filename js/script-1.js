
document.querySelector(".quiz-next").addEventListener("click",  function(){
    
    var NextQ =  document.querySelector(".quiz.active");
    NextQ = NextQ.nextElementSibling;
    var LastQ  = document.querySelector(".quiz.active").nextElementSibling.getAttribute("data-id");
    var CurrentQ = NextQ.previousElementSibling;
    var DataID =  CurrentQ.getAttribute('data-id');
    
    if (Qvalidate(DataID)) {
        document.querySelector(".quiz-prev").classList.remove("q-hide");
        CurrentQ.classList.remove("active");
        NextQ.classList.add('active');
        
        var Qnumber = NextQ.getAttribute("data-id");
        Qnumber = Qnumber.replace("q", "");
        document.querySelector(".quiz-nav-number").innerHTML = Qnumber;
    }
    
 });


document.querySelector(".quiz-prev").addEventListener("click", function(){
    
    var PrevQ  = document.querySelector(".quiz.active").previousElementSibling;
    var CurrentQ = document.querySelector("quiz.active");
    
    var Qnumber = PrevQ.getAttribute("data-id");
    Qnumber = Qnumber.replace("q", "");
    document.querySelector(".quiz-nav-number").innerHTML = Qnumber;
    
    PrevQ.nextElementSibling.classList.remove("active");
    PrevQ.classList.add("active");
    
})


function Qvalidate(El) {
    var radioValue  = document.querySelector("input[name='"+El+"']").checked.value;
    
     if (isOneChecked(El)) {
        document.querySelector("."+El).classList.remove("q-error");
        var Last2Q = document.querySelector(".quiz.active").nextElementSibling.getAttribute("data-id");
        if (Last2Q == 'q999') {
            showResults();
            document.querySelector(".quiz-nav-wrapper").style.display = "none";
        }
        return true;
     }else{
        var Cheading =  document.querySelector("."+El);
         Cheading.classList.add("q-error");
        return false;
     }
}



const genderIcon = document.querySelectorAll(".gender-icon");

genderIcon.forEach(function(gIcon){
     console.log(gIcon);
     gIcon.addEventListener("click", function(el){
        //  console.log(this);
        document.querySelectorAll(".gender-icon").forEach(function(El){
            El.classList.remove('active');
        })
        this.classList.add('active');
     })
})

function isOneChecked(El) {
  var chx = document.querySelectorAll("input[name='"+El+"']");
  for (var i=0; i<chx.length; i++) {
    if (chx[i].type == 'radio' && chx[i].checked) {
      return true;
    } 
  }
  return false;
}





function showResults() {

        document.querySelector(".svg-loader").style.display='block';
            var quizScore = 0;

        document.querySelectorAll(".quiz-data").forEach(function(quizItem){
            var DataID = quizItem.getAttribute('data-id');
            var DataScore = document.querySelector("input[name='"+DataID+"']:checked").getAttribute("data-value");
            DataScore = Number(DataScore);
            quizScore += DataScore;
        })

        setTimeout(function(){
            document.querySelector(".svg-loader").style.display='none';
            document.querySelector("#quiz_result_score").innerHTML = quizScore;
            document.querySelector(".result-container").style.display="block";
             }, 1200);

            
}
