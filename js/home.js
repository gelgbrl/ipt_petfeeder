document.querySelector("#show-popup").addEventListener("click", function(){
    document.querySelector(".popup").classList.add("active");
});
  
document.querySelector(".popup .close-btn").addEventListener("click", function(){
    document.querySelector(".popup").classList.remove("active");
});

// Select all log items
document.querySelectorAll(".log-item").forEach(function(logItem) {
    // Find the close button inside the current log item
    logItem.querySelector(".close-btn").addEventListener("click", function() {
        // Add the inactive class to the current log item
        logItem.classList.add("inactive");

        // Remove the log item from the log list
        document.querySelector(".log-list").removeChild(logItem);
    });
});