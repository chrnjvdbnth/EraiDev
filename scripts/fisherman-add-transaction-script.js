// Function to set the default date to today and set date range constraints
function setDateConstraints() {
    const dateInput = document.getElementById("transactionDate");
    
    // Get today's date and format it as 'YYYY-MM-DD'
    const today = new Date();
    const todayFormatted = today.toISOString().split('T')[0];
    
    // Calculate the date one week from today and format it as 'YYYY-MM-DD'
    const oneWeekAgo = new Date(today);
    oneWeekAgo.setDate(today.getDate() - 7);
    const oneWeekAgoFormatted = oneWeekAgo.toISOString().split('T')[0];
    
    // Set the default date to today
    dateInput.value = todayFormatted;
    
    // Set the date range constraints
    dateInput.min = oneWeekAgoFormatted; // Allow only dates from one week ago
    dateInput.max = todayFormatted; // Disallow future dates
}

// Call the function to set date constraints when the page loads
window.onload = setDateConstraints;
