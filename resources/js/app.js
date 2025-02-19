import './bootstrap';
import 'flowbite';




const texts = ["Développement web", "Marketing/communication"];
let currentTextIndex = 0;
let typingTextElement = document.getElementById("typingText");

function typeText(text, callback) {
    let i = 0;
    typingTextElement.textContent = ''; 
    const typingInterval = setInterval(() => {
        typingTextElement.textContent += text.charAt(i);
        i++;
        if (i === text.length) {
            clearInterval(typingInterval);
            setTimeout(() => {
                callback(); 
            }, 500); 
        }
    }, 100); 
}

function eraseText(callback) {
    let i = typingTextElement.textContent.length;
    const erasingInterval = setInterval(() => {
        typingTextElement.textContent = typingTextElement.textContent.slice(0, i - 1);
        i--;
        if (i === 0) {
            clearInterval(erasingInterval);
            setTimeout(() => {
                callback(); 
            }, 300);
        }
    }, 100); 
}

function startTypingEffect() {
    typeText(texts[currentTextIndex], () => {
        setTimeout(() => {
            eraseText(() => {
                currentTextIndex = (currentTextIndex + 1) % texts.length; 
                startTypingEffect(); 
            });
        }, 1000); 
    });
}

startTypingEffect();


