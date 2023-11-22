var scrambledWords = ['LIFTING', 'CARDIO', 'PROTEIN', 'FLEXIBILITY', 'ENDURANCE', 'HYDRATION'];

// Function to shuffle the letters of a word
function shuffleWord(word) {
    var shuffledWord = word.split('').sort(function () {
        return 0.5 - Math.random();
    }).join('');
    return shuffledWord;
}

// Function to initialize the word scramble game
function initializeGame() {
    var wordList = document.getElementById('wordList');

    // Shuffle each word and add it to the word list
    scrambledWords.forEach(function (word) {
        var shuffledWord = shuffleWord(word);
        var listItem = document.createElement('li');
        listItem.textContent = shuffledWord;
        listItem.className = 'wordListItem';
        listItem.dataset.word = word; // Store the original unscrambled word in the dataset
        listItem.addEventListener('click', handleWordClick);
        wordList.appendChild(listItem);
    });
}

// Function to handle the click event on a scrambled word
function handleWordClick(event) {
    var clickedItem = event.target;

    // Toggle between the scrambled and unscrambled versions of the word
    if (clickedItem.textContent === clickedItem.dataset.word) {
        clickedItem.textContent = shuffleWord(clickedItem.dataset.word);
    } else {
        clickedItem.textContent = clickedItem.dataset.word;
    }
}

// Function to check if all words are correctly unscrambled
function checkCorrectWords() {
    var wordItems = document.querySelectorAll('.wordListItem');
    for (var i = 0; i < wordItems.length; i++) {
        if (wordItems[i].textContent !== wordItems[i].dataset.word) {
            return false;
        }
    }
    return true;
}

// Function to check the words and display a message
function checkWords() {
    if (checkCorrectWords()) {
        alert("Congratulations! You've unscrambled all the words correctly!");
    } else {
        alert("Not all words are correctly unscrambled. Keep trying!");
    }
}

// Start the game when the page loads
window.onload = initializeGame;