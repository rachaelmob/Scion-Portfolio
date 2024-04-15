function typeWriterEffect() {

    //declare variables 
    const words = ["Banjoko", "Codes", "Designs", "Learns", "Improves" ]

    let wordCount = 0;
    let letterCount = 0;

    let currentText = "";
    let currentWord = "";

    let timeOut = 400;

    let isDeleting = false;

    // typewriter effect
    function type() {
        //When the Wordcount reaches the amount of words in "words" set it back to 0 so it can loop
        if(wordCount === words.length) {
            wordCount = 0;
        }


        currentWord = words[wordCount];

        //Define what deleting does
        if(isDeleting){
            currentText = currentWord.slice(0, --letterCount); //Decreasing by 1
        } else {
            currentText = currentWord.slice(0, ++letterCount) //incriment it by 1
        }
        // Adding content to the H1 element of class typewrite
        document.querySelector(".typewrite").textContent = currentText;

        timeOut = isDeleting ? 200 : 400; // "?" ternary operator alt to if...else

        //Duration of text typing and deleting
        if(!isDeleting && currentText.length === currentWord.length ){
            timeOut = 2000; //2 seconds 
            isDeleting = true;
        } else if(isDeleting && currentText.length === 0) {
            timeOut = 1000; 
            isDeleting = false;
            wordCount++;
        }

        setTimeout(type, timeOut);

    }
    //Call the type writer effect
    type(); 
}

//Start the typing effect
typeWriterEffect(); 