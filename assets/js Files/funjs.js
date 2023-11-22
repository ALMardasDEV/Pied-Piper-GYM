  // JavaScript code for the fitness word scramble game
        // Full comments explaining how it works

        // Array of scrambled words related to fitness
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

        // Start the game when the page loads
        window.onload = initializeGame;
