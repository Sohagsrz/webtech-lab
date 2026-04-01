function analyzeText() {
    let rawText = document.getElementById("textInput").value;
    
    // Character count using .length
    let charCount = rawText.length;
    
    // Total words -> using .split(" "). Handling multiple spaces by replacing them with a single space first
    // If the input is just spaces or empty, word count is 0
    let trimmedText = rawText.trim();
    let wordCount = 0;
    if (trimmedText !== "") {
        let normalizedStr = trimmedText.replace(/\s+/g, ' ');
        wordCount = normalizedStr.split(" ").length;
    }
    
    // Reversed Text -> using .split("").reverse().join("")
    let reversedText = rawText.split("").reverse().join("");
    
    // Update the UI
    document.getElementById("charCount").innerText = charCount;
    document.getElementById("wordCount").innerText = wordCount;
    document.getElementById("reversedText").innerText = reversedText;
    
    // Make results visible
    document.getElementById("results").style.display = "block";
}
