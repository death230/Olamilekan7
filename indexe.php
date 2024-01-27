<!DOCTYPE html>
<!-- Coding By CodingNepal - youtube.com/codingnepal -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Guess a Word Game</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  </head>
  <style>
      /* Import Google font - Poppins */
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap');
*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Poppins', sans-serif;
}
body{
  display: flex;
  padding: 0 10px;
  min-height: 100vh;
  align-items: center;
  justify-content: center;
  background: #1BB295;
}
.wrapper{
  width: 430px;
  background: #fff;
  border-radius: 10px;
  box-shadow: 0 10px 25px rgba(0,0,0,0.1);
}
.wrapper h1{
  font-size: 25px;
  font-weight: 500;
  padding: 20px 25px;
  border-bottom: 1px solid #ccc;
}
.wrapper .content{
  margin: 25px 25px 35px;
}
.content .inputs{
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
}
.inputs input{
  height: 57px;
  width: 56px;
  margin: 4px;
  font-size: 24px;
  font-weight: 500;
  color: #1ba98c;
  text-align: center;
  border-radius: 5px;
  background: none;
  pointer-events: none;
  text-transform: uppercase;
  border: 1px solid #B5B5B5;
}
.typing-input {
  opacity: 0;
  z-index: -999;
  position: absolute;
  pointer-events: none;
}
.inputs input:first-child{
  margin-left: 0px;
}
.content .details{
  margin: 20px 0 25px;
}
.details p{
  font-size: 19px;
  margin-bottom: 10px;
}
.content .reset-btn{
  width: 100%;
  border: none;
  cursor: pointer;
  color: #fff;
  outline: none;
  padding: 15px 0;
  font-size: 17px;
  border-radius: 5px;
  background: #1BB295;
  transition: all 0.3s ease;
}
.content .reset-btn:hover{
  background: #18a589;
}

@media screen and (max-width: 460px) {
  .wrapper {
    width: 100%;
  }
  .wrapper h1{
    font-size: 22px;
    padding: 16px 20px;
  }
  .wrapper .content{
    margin: 25px 20px 35px;
  }
  .inputs input{
    height: 51px;
    width: 50px;
    margin: 3px;
    font-size: 22px;
  }
  .details p{
    font-size: 17px;
  }
  .content .reset-btn{
    padding: 14px 0;
    font-size: 16px;
  }
}
  </style>
  <body>
    <div class="wrapper">
      <h1>Guess the Word</h1>
      <div class="content">
        <input type="text" class="typing-input" maxlength="1">
        <div class="inputs"></div>
        <div class="details">
          <p class="hint">Hint: <span></span></p>
          <p class="guess-left">Remaining guesses: <span></span></p>
          <p class="wrong-letter">Wrong letters: <span></span></p>
        </div>
        <button class="reset-btn">Reset Game</button><br><br>
        <a href="Home.php"><button class="reset-btn">Exit</button></a>
      </div>
    </div>

    <script>
    let wordList = [
    {
        word: "python",
        hint: "programming language"
    },
    {
        word: "guitar",
        hint: "a musical instrument"
    },
    {
        word: "aim",
        hint: "a purpose or intention"
    },
    {
        word: "venus",
        hint: "planet of our solar system"
    },
    {
        word: "gold",
        hint: "a yellow precious metal"
    },
    {
        word: "ebay",
        hint: "online shopping site"
    },
    {
        word: "golang",
        hint: "programming language"
    },
    {
        word: "coding",
        hint: "related to programming"
    },
    {
        word: "matrix",
        hint: "science fiction movie"
    },
    {
        word: "bugs",
        hint: "related to programming"
    },
    {
        word: "avatar",
        hint: "epic science fiction film"
    },
    {
        word: "gif",
        hint: "a file format for image"
    },
    {
        word: "mental",
        hint: "related to the mind"
    },
    {
        word: "map",
        hint: "diagram represent of an area"
    },
    {
        word: "island",
        hint: "land surrounded by water"
    },
    {
        word: "hockey",
        hint: "a famous outdoor game"
    },
    {
        word: "chess",
        hint: "related to a indoor game"
    },
    {
        word: "viber",
        hint: "a social media app"
    },
    {
        word: "github",
        hint: "code hosting platform"
    },
    {
        word: "png",
        hint: "a image file format"
    },
    {
        word: "silver",
        hint: "precious greyish-white metal"
    },
    {
        word: "mobile",
        hint: "an electronic device"
    },
    {
        word: "gpu",
        hint: "computer component"
    },
    {
        word: "java",
        hint: "programming language"
    },
    {
        word: "google",
        hint: "famous search engine"
    },
    {
        word: "venice",
        hint: "famous city of waters"
    },
    {
        word: "excel",
        hint: "microsoft product for windows"
    },
    {
        word: "mysql",
        hint: "a relational database system"
    },
    {
        word: "nepal",
        hint: "developing country name"
    },
    {
        word: "flute",
        hint: "a musical instrument"
    },
    {
        word: "crypto",
        hint: "related to cryptocurrency"
    },
    {
        word: "tesla",
        hint: "unit of magnetic flux density"
    },
    {
        word: "mars",
        hint: "planet of our solar system"
    },
    {
        word: "proxy",
        hint: "related to server application"
    },
    {
        word: "email",
        hint: "related to exchanging message"
    },
    {
        word: "html",
        hint: "markup language for the web"
    },
    {
        word: "air",
        hint: "related to a gas"
    },
    {
        word: "idea",
        hint: "a thought or suggestion"
    },
    {
        word: "server",
        hint: "related to computer or system"
    },
    {
        word: "svg",
        hint: "a vector image format"
    },
    {
        word: "jpeg",
        hint: "a image file format"
    },
    {
        word: "search",
        hint: "act to find something"
    },
    {
        word: "key",
        hint: "small piece of metal"
    },
    {
        word: "egypt",
        hint: "a country name"
    },
    {
        word: "joker",
        hint: "psychological thriller film"
    },
    {
        word: "dubai",
        hint: "developed country name"
    },
    {
        word: "photo",
        hint: "representation of person or scene"
    },
    {
        word: "nile",
        hint: "largest river in the world"
    },
    {
        word: "rain",
        hint: "related to a water"
    },
]
    </script>

    <script>
    const inputs = document.querySelector(".inputs"),
hintTag = document.querySelector(".hint span"),
guessLeft = document.querySelector(".guess-left span"),
wrongLetter = document.querySelector(".wrong-letter span"),
resetBtn = document.querySelector(".reset-btn"),
typingInput = document.querySelector(".typing-input");

let word, maxGuesses, incorrectLetters = [], correctLetters = [];

function randomWord() {
    let ranItem = wordList[Math.floor(Math.random() * wordList.length)];
    word = ranItem.word;
    maxGuesses = word.length >= 5 ? 8 : 6;
    correctLetters = []; incorrectLetters = [];
    hintTag.innerText = ranItem.hint;
    guessLeft.innerText = maxGuesses;
    wrongLetter.innerText = incorrectLetters;

    let html = "";
    for (let i = 0; i < word.length; i++) {
        html += `<input type="text" disabled>`;
        inputs.innerHTML = html;
    }
}
randomWord();

function initGame(e) {
    let key = e.target.value.toLowerCase();
    if(key.match(/^[A-Za-z]+$/) && !incorrectLetters.includes(` ${key}`) && !correctLetters.includes(key)) {
        if(word.includes(key)) {
            for (let i = 0; i < word.length; i++) {
                if(word[i] == key) {
                    correctLetters += key;
                    inputs.querySelectorAll("input")[i].value = key;
                }
            }
        } else {
            maxGuesses--;
            incorrectLetters.push(` ${key}`);
        }
        guessLeft.innerText = maxGuesses;
        wrongLetter.innerText = incorrectLetters;
    }
    typingInput.value = "";

    setTimeout(() => {
        if(correctLetters.length === word.length) {
            alert(`Congrats! You found the word ${word.toUpperCase()}`);
            return randomWord();
        } else if(maxGuesses < 1) {
            alert("Game over! You don't have remaining guesses");
            for(let i = 0; i < word.length; i++) {
                inputs.querySelectorAll("input")[i].value = word[i];
            }
        }
    }, 100);
}

resetBtn.addEventListener("click", randomWord);
typingInput.addEventListener("input", initGame);
inputs.addEventListener("click", () => typingInput.focus());
document.addEventListener("keydown", () => typingInput.focus());
    </script>

  </body>
</html>