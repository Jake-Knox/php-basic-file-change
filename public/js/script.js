$(document).ready(function() {
    // Load the initial content from the server
    $.ajax({
        url: "../../php/load-content.php",
        type: "GET",
        success: function(data) {
            // Display the content in the HTML form
            $("#content").html(data);
            console.log("content load");
        }
    });

    // Handle form submission
    $("body").on("submit", "form", function(e) {
        e.preventDefault();

        // Get the updated content from the HTML form
        var newContent = $("#content textarea").val();

        // Send the updated content to the server for saving
        $.ajax({
            url: "../../php/save-content.php",
            type: "POST",
            data: { content: newContent },
            success: function(response) {
                if (response === "success") {
                    alert("Content saved successfully!");
                } else {
                    alert("An error occurred while saving the content.");
                }
            }
        });
    });
});
