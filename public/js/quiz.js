const quiz = 
{
    // Create a void array to set random number
    randomFlag : [], 

    correctAnswer : 0,
    wrongAnswer : 0,

    // Elements used during the script
    divQuestion : document.querySelector('#question'),
    divResponse : document.querySelector('#response'),
    divContainerDetails : document.querySelector('#flag img'),
    divContainerResponse : document.querySelector('#detailsResponse p'),
    spanwrongAnswer : document.querySelector('#wrongAnswer'),
    spanCorrectAnswer : document.querySelector('#correctAnswer'),

    /**
   * Function to init ajax request to get informations in API REST Country
   */
  init : function()
  {
  fetch(app.apiBaseUrl, app.fetchOptions)
    .then
    (
    app.handleResponse
    )
    .then
    (
    quiz.handleRandomFlag
    );

    let tryAgain = document.querySelector('#tryAgain').addEventListener('click', quiz.handleReset);
  },

  // Function to give a radom number in order to show a random flag
  handleRandomFlag: function(object)
  {
    let random = Math.floor(Math.random() * Math.floor(object.length));

    let currentNation = object[random];
    
    quiz.randomFlag.push(currentNation);

    quiz.createDivFlag(currentNation);

    quiz.formListener();

  }, 

  // Function to show a random flag
  createDivFlag : function(currentNation)
  {
    quiz.divContainerDetails.setAttribute('src', './css/img/' + currentNation.alpha2Code.toLowerCase() +'.png' )

  },

  // Function to listen form event (response user)
  formListener : function()
  {
    let form = document.querySelector('.container_quiz').addEventListener('submit', quiz.handleResponseQuiz);
  },

  // Function to analyze response user and post correct answer, number of correct and wrong answers
  handleResponseQuiz: function(evt)
  {
    evt.preventDefault();

    let responseValue = document.querySelector('#responseQuiz').value;
    let nationName = quiz.randomFlag[0].name;
    console.log(nationName);
    let currentNation = quiz.randomFlag[0];
    if (responseValue == nationName)
    {
        quiz.correctAnswer++;
        quiz.divContainerResponse.textContent = 'C\'est le drapeau de : ' + currentNation.name;
        quiz.spanCorrectAnswer.textContent = 'Bonnes réponses : ' + quiz.correctAnswer;
        quiz.spanwrongAnswer.textContent = 'Mauvaises réponses : ' + quiz.wrongAnswer;
    } 
    else
    {
        quiz.wrongAnswer++;
        quiz.divContainerResponse.textContent = 'C\'est le drapeau de : ' + currentNation.name;
        quiz.spanCorrectAnswer.textContent = 'Bonnes réponses : ' + quiz.correctAnswer;
        quiz.spanwrongAnswer.textContent = 'Mauvaises réponses : ' + quiz.wrongAnswer;
    }
   
  },

  //reset function
  handleReset: function()
  {
    quiz.divContainerResponse.textContent = '';
    quiz.randomFlag.splice(0);
    quiz.init();
  }
}
document.addEventListener('DOMContentLoaded', quiz.init);